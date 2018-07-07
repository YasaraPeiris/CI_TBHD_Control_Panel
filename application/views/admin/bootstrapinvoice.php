<?php
/**
 * Created by The Best Hotel Deal.
 * User: Wenuka_Guneratne_&_Yasara_Peiris
 * Date: 7/5/2017
 * Time: 8:26 PM
 */?>
<!DOCTYPE html>
<!--
  Invoice template by invoicebus.com
  To customize this template consider following this guide https://invoicebus.com/how-to-create-invoice-template/
  This template is under Invoicebus Template License, see https://invoicebus.com/templates/license/
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>inna.lk :: invoice</title>
    <link rel="shortcut icon" href="../../assets/images/favicon.ico" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="Invoicebus Invoice Template">
    <meta name="author" content="Invoicebus">

    <meta name="template-hash" content="91216e926eab41d8aa403bf4b00f4e19">

    <link rel="stylesheet" href="../../assets/css/invoice.css">
</head>
<body>
<div id="container">
    <div class="left-stripes">
    </div>

    <div class="right-invoice">
        <section id="memo">
            <div class="company-info">
                <div>Inna.lk</div>
                <br>
                <span>14/9, Rajamaha Vihara Rd, Navinna, Maharagama.</span>
                <!-- <span>{company_city_zip_state}</span> -->
                <br>
                <span>+94 77 591 0179</span>
                <br>
                <span>info@inna.lk</span>
            </div>

            <div class="logo">
                <img src="../../assets/images/innalogo.jpg" height="60" width="60"/>
            </div>
        </section>

        <section id="invoice-title-number">

            <div class="title-top">
                <span class="x-hidden"><?php
                $dt = new DateTime("now", new DateTimeZone('Asia/Colombo'));

                $todaydate = $dt->format('Y-m-d');
                 echo $todaydate;?></span>
                <span><?php echo $todaydate;?></span> <span id="number">#10</span>
            </div>

            <div id="title">invoice</div>

        </section>

        <section id="client-info">
            <span>Bill to:</span>
            <div class="client-name">
                <span><?php echo $customer->customer_name; ?></span>
            </div>

            <!-- <div>
                <span>{client_address}</span>
            </div> -->

            <div>
                <span><?php echo $customer->email; ?></span>
            </div>

            <div>
                <span><?php echo $customer->nic_number; ?></span>
            </div>

            <div>
                <span><?php echo $customer->phone; ?></span>
            </div>

            <!-- <div>
                <span>{client_other}</span>
            </div> -->
        </section>

        <div class="clearfix"></div> <b>Booking Details :</b>
        <br><?php echo $listing->listing_name;?><br>
        Check in : <?php echo $booking->check_in;?><br>
        Check out : <?php echo $booking->check_out;?>

        <section id="items">
            <table cellpadding="0" cellspacing="0">

                <tr>
                    <th></th>
                    <?php if($listing->listing_type == 'hotel'){?>
                        <th>Room</th> 
                        <th>Room Type</th>
                        <th>Quantity</th>
                    <?php }else{?><!-- Dummy cell for the row number and row commands -->
                        <th>Weekdays/Weekends</th>
                        <th>No. of Days</th>
                    <?php } ?>
                    <th>Price</th>
                    <!-- <th>{item_tax_label}</th> -->
                    <th>Line Total</th>
                </tr>
                <?php 
                $totalprice = 0;
                for ($i=0; $i <sizeof($booked_rooms) ; $i++) { ?>
                    <tr >
                        <td><?php echo $i+1;?></td> 
                        <?php if($listing->listing_type == 'hotel'){?><td><?php echo $booked_rooms[$i]->item_name; ?></td><?php }?>
                        <td><?php echo $booked_rooms[$i]->item_type; ?></td>
                        <td><?php echo $booked_rooms[$i]->quantity; ?></td>
                        <td><?php echo $booked_rooms[$i]->rate; ?></td>
                        <!-- <td>{item_tax}</td> -->
                        <td><?php echo number_format((float)(($booked_rooms[$i]->quantity)*($booked_rooms[$i]->rate)), 2, '.', ''); ?></td>
                    </tr>
                <?php
                $totalprice += $booked_rooms[$i]->rate * $booked_rooms[$i]->quantity; 
                } ?>
            </table>

        </section>

        <section id="sums">

            <table cellpadding="0" cellspacing="0">
                <tr>
                    <th>Number of Days</th>
                    <td contenteditable='false' style="border-bottom: 1px solid;">x <?php echo $days;?></td>
                </tr>
                <tr>
                    <th>Sub Total</th>
                    <td contenteditable='false'>LKR. <?php echo number_format((float)($totalprice*$days), 2, '.', '');?></td>
                </tr>
                <!-- <tr data-iterate="tax">
                    <th>{tax_name}</th>
                    <td >{tax_value}</td>
                </tr> -->
                <?php if ($promotions->promo_amount > 0) { ?>
                    <tr>
                        <th><b>Sub Total with Promo</b></th>
                        <td contenteditable='false'><span style="border-top: 2px solid; font-size: 1.2em; font-weight: bold;">LKR. <?php echo number_format((float)($totalprice*(1 - $promotions->promo_amount)*$days), 2, '.', '');?></span></td>
                    </tr>
                <?php } ?>

                <tr >
                    <th>Commission</th>
                    <td >LKR. <?php echo number_format((float)($totalprice*(1 - $promotions->promo_amount)*$days*$listing->commision/100), 2, '.', '');?></td>
                </tr>

                <tr class="amount-total">
                    <!-- {amount_total_label} -->
                    <td colspan="2">LKR. <?php echo number_format((float)($booking->total_rate), 2, '.', '');?></td>
                </tr>

                <!-- You can use attribute data-hide-on-quote="true" to hide specific information on quotes.
                     For example Invoicebus doesn't need amount paid and amount due on quotes  -->
                <tr data-hide-on-quote="true">
                    <th>Amount Paid</th> 
                    <td>(LKR. <?php echo number_format((float)($booking->paid_amount), 2, '.', '');?>)</td>
                </tr>

                <tr data-hide-on-quote="true" class="due-amount">
                    <th>Amount Due</th>
                    <td style="border-bottom: double; border-top: 1px solid;">LKR. <?php echo number_format((float)($booking->total_rate - $booking->paid_amount), 2, '.', '');?></td>
                </tr>

            </table>

        </section>
<script type="text/javascript">
    window.onload = equaltotal;
    function equaltotal(){
       var totalamount1 = <?php echo number_format((float)($totalprice*(1 - $promotions->promo_amount)*$days*(1+$listing->commision/100)), 2, '.', '');?>;
       var totalamount2 = <?php echo number_format((float)($booking->total_rate), 2, '.', '');?>;
       if (totalamount1 != totalamount2) {
           alert('The Total prices are not matching. \nTotal Sum of Room Prices is : '+totalamount1+'\nTotal Sum You entered is : '+totalamount2+' \nPlease consider to refill the form.');
       } 
    }
    
</script>
        <div class="clearfix"></div>

        <section id="terms">

            <span>TERMS AND NOTES</span>
            <div>Dear <?php echo $customer->customer_name; ?>, thank you very much. We really appreciate your business.<br>Your booking is now confirmed and no need to contact us.<br><br>Please think about the environment before printing this document.</div>

        </section>

        <!-- <div class="payment-info">
            <div>{payment_info1}</div>
            <div>{payment_info2}</div>
            <div>{payment_info3}</div>
            <div>{payment_info4}</div>
            <div>{payment_info5}</div>
        </div> -->
    </div>
</div>
<!-- <script src="../../assets/js/data.js"></script> -->
<script src="../../assets/js/generator.min.js?data=data.js"></script>
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="../../assets/js/bootstrap.js"></script>

<script>
    // $(document).ready(function(){
    //     jQuery('#ib-next-btn').click(function(){
    //         window.location.href = "<?php //echo site_url('index.php/Welcome/thankyou');?>";
    //     });
    // });
</script>
<!-- <script src="../../assets/js/generator.min.js?data=../../assets/js/data.js"></script> -->
</body>
</html>

