
<html>
<head>Receipt of Purchase - <?php  echo $reference ?>
</head>
<body>
<div style="text-align:right;">
        <b>Sender:</b> ABC hotel
    </div>
    <div style="text-align: left;border-top:1px solid #000;">
        <div style="font-size: 24px;color: #666;">INVOICE</div>
    </div>
<table style="line-height: 1.5;">
    <tr><td><b>Invoice:</b> <?php echo $reference ?>
        </td>
        <td style="text-align:right;"><b>Receiver: <?php echo $customer_name ?></b></td>
    </tr>
    <tr>
        <td><b>Date:</b> <?php echo date("F j\, Y", substr($check_out, 0, -3)) ?></td>
    </tr>
<tr>
<td></td>
<td style="text-align:right;"></td>
</tr>
</table>

<div></div>
    <div style="border-bottom:12px solid #fff;">
        <table style="line-height: 2;">
            <tr style="font-weight: bold;border:1px solid #cccccc;background-color:#f2f2f2;">
                <td style="border:1px solid #cccccc;width:200px;">Room service</td>
                <td style = "text-align:right;border:1px solid #cccccc;width:85px">Nights stayed</td>
                <td style = "text-align:right;border:1px solid #cccccc;width:75px;">Nightly Room rate</td>
                <td style = "text-align:right;border:1px solid #cccccc;">Subtotal</td>
            </tr>
            <tr> 
                <td style="border:1px solid #cccccc;"><?php echo $room ?></td>
                <td style = "text-align:right; border:1px solid #cccccc;"><?php echo $days ?></td>
                <td style = "text-align:right; border:1px solid #cccccc;"><?php echo $perday ?>Rs</td>
                <td style = "text-align:right; border:1px solid #cccccc;"><?php echo $roomsubtotal ?>Rs</td>
            </tr>
        </table>
    </div>
    <div style="border-bottom:1px solid #000;">
        <table style="line-height: 2;">
            <tr style="font-weight: bold;border:1px solid #cccccc;background-color:#f2f2f2;">
                <td style="border:1px solid #cccccc;width:200px;">Item Description</td>
                <td style = "text-align:right;border:1px solid #cccccc;width:85px">Quantity</td>
                <td style = "text-align:right;border:1px solid #cccccc;width:75px;">Unit Price</td>
                <td style = "text-align:right;border:1px solid #cccccc;">Subtotal</td>
            </tr>
<?php
foreach ($items as $item) {
    ?>
    <tr> 
        <td style = "border:1px solid #cccccc;"><?php echo $item[0] ?></td>
        <td style = "text-align:right; border:1px solid #cccccc;"><?php echo $item[1] ?></td>
        <td style = "text-align:right; border:1px solid #cccccc;"><?php echo $item[2] ?></td>
        <td style = "text-align:right; border:1px solid #cccccc;"><?php echo $item[3] ?></td>
    </tr>
<?php
}
?>
<tr style = "font-weight: bold;">
    <td></td><td></td>
    <td style = "text-align:right;">Total </td>
    <td style = "text-align:right;"><?php echo number_format($total, 2); ?></td>
</tr>
</table></div>
<p><i>Note: In any inquiry please contact acc@abchotel.com</i></p>
</body>
</html>
