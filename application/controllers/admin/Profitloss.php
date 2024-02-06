<?php 

//admin base controller for http://ABC-hotel.com/admin

class Profitloss extends CI_Controller 
{
    public function __construct() {
        parent::__construct();

        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->load->library('session');

        $this->load->model('Admin_model');
    }

    public function index(){
        if ($this->checkSessionExist()){
            $data = $this->session->userdata('admininfo');

            $bills = $this->Admin_model->getChartData();

            //WEEK : returns this year 52 weeks n its relevant total amount
            $thisyear = date('Y', time());
            $thisweek = date('W', time());

            $weekdata['total'] = array_fill(0, $thisweek, 0);
            $weekdata['deluxe'] = array_fill(0, $thisweek, 0);
            $weekdata['double'] = array_fill(0, $thisweek, 0);
            $weekdata['triple'] = array_fill(0, $thisweek, 0);

            $weekcategory = [];
            for ($i = 1; $i <= intval($thisweek); $i++){
                array_push($weekcategory, strval($i));
            }

            foreach($bills as $bill){
                $epoch = strtotime($bill['create_time']);

                if ($thisyear != date('Y', $epoch))
                    continue;

                $weekdata['total'][intval(date('W', $epoch)) - 1] += $bill['total'];
                $weekdata[$bill['room']][intval(date('W', $epoch)) - 1] += $bill['total'];
            }

            //MONTH
            $thisyear = date('Y', time());
            $thismonth = date('m', time());
            
            $monthdata['total'] = array_fill(0, $thismonth, 0);
            $monthdata['deluxe'] = array_fill(0, $thismonth, 0);
            $monthdata['double'] = array_fill(0, $thismonth, 0);
            $monthdata['triple'] = array_fill(0, $thismonth, 0);

            $months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
            $monthcategory = array_slice($months, 0, intval($thismonth));
            
            foreach($bills as $bill){
                $epoch = strtotime($bill['create_time']);

                if ($thisyear != date('Y', $epoch))
                    continue;

                $monthdata['total'][intval(date('m', $epoch)) - 1] += $bill['total'];
                $monthdata[$bill['room']][intval(date('m', $epoch)) - 1] += $bill['total'];
            }

            //YEAR
            $billcount = count($bills);
            $firstyear = $billcount > 0 ? date('Y', strtotime($bills[0]['create_time'])) : $thisyear;
            $firstyearval = intval($firstyear);
            $thisyearval  = intval($thisyear);
            $yearcount = $thisyearval - $firstyearval + 1;

            $yeardata['total'] = array_fill(0, $yearcount, 0);
            $yeardata['deluxe'] = array_fill(0, $yearcount, 0);
            $yeardata['double'] = array_fill(0, $yearcount, 0);
            $yeardata['triple'] = array_fill(0, $yearcount, 0);

            $yearcategory = [];
            for ($i = $firstyearval; $i <= $thisyearval; $i++) {
                array_push($yearcategory, strval($i));
            }

            foreach($bills as $bill){
                $epoch = strtotime($bill['create_time']);
                $billyear = date('Y', $epoch);

                $yeardata['total'][$billyear - $firstyearval] += $bill['total'];
                $yeardata[$bill['room']][$billyear - $firstyearval] += $bill['total'];
            }

            //categories for the chart
            $data['weekcategory'] = json_encode($weekcategory);
            $data['monthcategory'] = json_encode($monthcategory);
            $data['yearcategory'] = json_encode($yearcategory);

            //series for the chart - total, normal (deluxe, double, triple)
            //green- 31C48D, blue - 1A56DB, purple - 7E3AF2, yellow - FDBA8C

            $weektotalseries = [
                array(
                    'name' => 'all rooms',
                    'data' => $weekdata['total'],
                    'color' => '#FDBA8C'
                )
            ];
            $monthtotalseries = [
                array(
                    'name' => 'all rooms',
                    'data' => $monthdata['total'],
                    'color' => '#FDBA8C'
                )
            ];
            $yeartotalseries = [
                array(
                    'name' => 'all rooms',
                    'data' => $yeardata['total'],
                    'color' => '#FDBA8C'
                )
            ];
            
            $weeknormalseries = [
                array(
                    'name' => 'deluxe',
                    'data' => $weekdata['deluxe'],
                    'color' => '#1A56DB'
                ),
                array(
                    'name' => 'double',
                    'data' => $weekdata['double'],
                    'color' => '#31C48D'
                ),
                array(
                    'name' => 'triple',
                    'data' => $weekdata['triple'],
                    'color' => '#7E3AF2'
                )
            ];
            $monthnormalseries = [
                array(
                    'name' => 'deluxe',
                    'data' => $monthdata['deluxe'],
                    'color' => '#1A56DB'
                ),
                array(
                    'name' => 'double',
                    'data' => $monthdata['double'],
                    'color' => '#31C48D'
                ),
                array(
                    'name' => 'triple',
                    'data' => $monthdata['triple'],
                    'color' => '#7E3AF2'
                )
            ];
            $yearnormalseries = [
                array(
                    'name' => 'deluxe',
                    'data' => $yeardata['deluxe'],
                    'color' => '#1A56DB'
                ),
                array(
                    'name' => 'double',
                    'data' => $yeardata['double'],
                    'color' => '#31C48D'
                ),
                array(
                    'name' => 'triple',
                    'data' => $yeardata['triple'],
                    'color' => '#7E3AF2'
                )
            ];

            $data['weektotalseries'] = json_encode($weektotalseries);
            $data['monthtotalseries'] = json_encode($monthtotalseries);
            $data['yeartotalseries'] = json_encode($yeartotalseries);
            $data['weeknormalseries'] = json_encode($weeknormalseries);
            $data['monthnormalseries'] = json_encode($monthnormalseries);
            $data['yearnormalseries'] = json_encode($yearnormalseries);

            $this->load->view('admin/profitloss', $data);
        }
    }

    private function checkSessionExist(){
        if(!$this->session->has_userdata('admininfo')){
            $this->session->set_flashdata('error','Please login first to access the page');
            redirect('admin');
        }else{
            return true;
        }
    }
}