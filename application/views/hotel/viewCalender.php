<?php
/**
 * Created by The Best Hotel Deal.
 * User: Wenuka_Guneratne_&_Yasara_Peiris
 * Date: 8/2/2017
 * Time: 6:53 AM
 */?>
<!doctype html>
<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <title>Hotel Room Reservation</title>

    <script src='../../assets/lib-cal/dhtmlxScheduler/dhtmlxscheduler.js'></script>
    <script src='../../assets/lib-cal/dhtmlxScheduler/ext/dhtmlxscheduler_limit.js'></script>
    <script src='../../assets/lib-cal/dhtmlxScheduler/ext/dhtmlxscheduler_collision.js'></script>
    <script src='../../assets/lib-cal/dhtmlxScheduler/ext/dhtmlxscheduler_timeline.js'></script>
    <script src='../../assets/lib-cal/dhtmlxScheduler/ext/dhtmlxscheduler_editors.js'></script>
    <script src='../../assets/lib-cal/dhtmlxScheduler/ext/dhtmlxscheduler_minical.js'></script>
    <script src='../../assets/lib-cal/dhtmlxScheduler/ext/dhtmlxscheduler_tooltip.js'></script>
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <script src='../../assets/js-cal/mock_backend.js'></script>
    <script src='../../assets/js-cal/scripts.js'></script>

    <link rel='stylesheet' href='../../assets/lib-cal/dhtmlxScheduler/dhtmlxscheduler_flat.css'>
    <link rel='stylesheet' href='../../assets/css-cal/styles.css'>

</head>

<body onload="init()">

<div id="scheduler_here" class="dhx_cal_container" style='width:100%; height:100%;'>
    <div class="dhx_cal_navline">
        <input type="hidden" id="myPhpValue" value='<?php echo $data_array;?>' />

        <div style="font-size:16px;padding:4px 20px;">
            Show rooms:
            <select id="room_filter" onchange='updateSections(this.value)'></select>
        </div>
        <div class="dhx_cal_prev_button">&nbsp;</div>
        <div class="dhx_cal_next_button">&nbsp;</div>
        <div class="dhx_cal_today_button"></div>
        <div class="dhx_cal_date"></div>
    </div>
    <div class="dhx_cal_header">
    </div>
    <div class="dhx_cal_data">
    </div>
</div>

</body>
