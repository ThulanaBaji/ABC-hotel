<?php 

//acc base controller for http://ABC-hotel.com/acc

class Dashboard extends CI_Controller 
{
    public function __construct() {
        parent::__construct();

        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->load->library('session');
        $this->load->model('Acc_model');
    }

    public function index(){
        if ($this->checkSessionExist()){
            $data = $this->session->userdata('accinfo');

            $data['bills'] = $this->Acc_model->getBills();
            $this->load->view('acc/dashboard', $data);
        }
    }

    public function logout(){
        if ($this->checkSessionExist()) {
            $this->session->unset_userdata('accinfo');
            redirect('/');
        }
    }

    private function checkSessionExist(){
        if(!$this->session->has_userdata('accinfo')){
            $this->session->set_flashdata('error','Please login first to access the page');
            redirect('acc');
        }else{
            return true;
        }
    }

    public function generate(){
        $this->checkSessionExist();

        $data = $_POST;

        $total = .0;

        if(isset($_POST['items'])){
            $data['itemjson'] = json_encode($_POST['items']);
            $item_arr = $_POST['items'];


            foreach($item_arr as $item){
                $res = preg_replace("/[^0-9.]/", '', $item[3]);
                $total += floatval($res);
            }
        }

        $rn = $_POST['room-service'];
        $data['room'] = $rn == ROOMDELUXE ? 'deluxe' : ($rn == ROOMDOUBLE ? 'double' : 'triple');

        $data['ci'] = strtotime($_POST['checkin']) * 1000;
        $data['co'] = strtotime($_POST['checkout']) * 1000;

        $numdays = $data['co'] - $data['ci'];
        $numdays = $numdays / (1000 * 60 * 60 * 24);

        $total += $rn == ROOMDELUXE ? DELUXECHARGE * $numdays : ($rn == ROOMDOUBLE ? DOUBLECHARGE * $numdays : TRIPLECHARGE * $numdays);

        $data['total'] = $total;
        
        $this->Acc_model->addBill($data);

        $data['days'] = $numdays;
        $data['perday'] = $data['room'] == 'deluxe' ? DELUXECHARGE : ($data['room'] == 'double' ? DOUBLECHARGE : TRIPLECHARGE);
        $data['roomsubtotal'] = $data['days'] * $data['perday'];
        $data['items'] = json_decode($data['itemjson']);

        $data['customer_name'] = $data['name'];
        $data['check_out'] = $data['co'];
        
        $this->generatePDF($data);
    }

    public function archive($id){
        $this->checkSessionExist();

        $this->Acc_model->archiveBill($id);
        redirect('acc/dashboard');
    }
    
    private function generatePDF($data) {
        require_once __DIR__ . '/../../third_party/TCPDF/tcpdf.php';

        $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
        $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
        $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
        $pdf->SetHeaderData('', PDF_HEADER_LOGO_WIDTH, '', '', array(
            0,
            0,
            0
        ), array(
            255,
            255,
            255
        ));

        $pdf->SetTitle('Invoice - '.$data['reference']);
        $pdf->SetMargins(20, 10, 20, true);
        if (@file_exists(dirname(__FILE__) . '/lang/eng.php')) {
            require_once (dirname(__FILE__) . '/lang/eng.php');
            $pdf->setLanguageArray($l);
        }

        $pdf->SetFont('helvetica', '', 11);
        $pdf->AddPage();

        $html = $this->load->view('acc/templatebill', $data, true);
        $filename = "Invoice-" . $data['reference'];
        
        $pdf->writeHTML($html, true, false, true, false, '');
        ob_end_clean();
        $pdf->Output($filename . '.pdf', 'I');
    }

    public function view($id){
        $data = $this->Acc_model->getBillByID($id)[0];

        $numdays = $data['check_out'] - $data['check_in'];
        $numdays = $numdays / (1000 * 60 * 60 * 24);
        $data['days'] = $numdays;
        $data['perday'] = $data['room'] == 'deluxe' ? DELUXECHARGE : ($data['room'] == 'double' ? DOUBLECHARGE : TRIPLECHARGE);
        $data['roomsubtotal'] = $data['days'] * $data['perday'];
        $data['items'] = json_decode($data['items']);

        $this->generatePDF($data);
    }
}