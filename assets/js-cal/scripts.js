
(function () {
    scheduler.locale.labels.section_text = 'Name';
    scheduler.locale.labels.section_room = 'Room';
    scheduler.locale.labels.section_status = 'Status';
    scheduler.locale.labels.section_is_paid = 'Paid';
    scheduler.locale.labels.section_time = 'Time';
    scheduler.xy.scale_height = 30;
    scheduler.config.details_on_create = true;
    scheduler.config.details_on_dblclick = true;
    scheduler.config.prevent_cache = true;
    scheduler.config.show_loading = true;
    scheduler.config.xml_date = "%Y-%m-%d %H:%i";

    var roomsArr = scheduler.serverList("room");
    var roomTypesArr = scheduler.serverList("roomType");
    var roomStatusesArr = scheduler.serverList("roomStatus");
    var bookingStatusesArr = scheduler.serverList("bookingStatus");

    scheduler.config.lightbox.sections = [
        {map_to: "text", name: "text", type: "textarea", height: 24},
       // {map_to: "room", name: "room", type: "select", options: scheduler.serverList("currentRooms")},
        { map_to:"room",name:"room", height:22, type:"multiselect", options: scheduler.serverList("currentRooms"), vertical:"false" },
        // {map_to: "status", name: "status", type: "radio", options: scheduler.serverList("bookingStatus")},
     //   {map_to: "is_paid", name: "is_paid", type: "checkbox", checked_value: true, unchecked_value: false},
        {map_to: "time", name: "time", type: "calendar_time"}
    ];

    scheduler.attachEvent("onEventLoading", function(ev){
        if(ev.id == 1 || ev.id == 2 || ev.id == 3 || ev.id == 4 || ev.id == 5 )
            dhtmlx.alert("You are not allowed to edit these events");
            ev.readonly = true;
        return true;
    });



    // scheduler.attachEvent("onEventCollision", function (ev, evs) {
    //
    //     if(ev.status==6){
    //         return false;
    //     }
    //     scheduler.config.readonly_form  = true;
    //     return true;
    // });


    scheduler.locale.labels.timeline_tab = 'Timeline';

    scheduler.createTimelineView({
        fit_events: true,
        name: "timeline",
        y_property: "room",
        render: 'bar',
        x_unit: "day",
        x_date: "%d",
        x_size: 45,
        dy: 52,
        event_dy: 48,
        section_autoheight: false,
        round_position: true,

        y_unit: scheduler.serverList("currentRooms"),
        second_scale: {
            x_unit: "month",
            x_date: "%F %Y"
        }
    });

    function findInArray(array, key) {
        for (var i = 0; i < array.length; i++) {
            if (key == array[i].key)
                return array[i];
        }
        return null;
    }

    function getRoomType(key) {
        return findInArray(roomTypesArr, key).label;
    }

    function getRoomStatus(key) {
        return findInArray(roomStatusesArr, key);
    }

    function getRoom(key) {
        return findInArray(roomsArr, key);
    }

    // function getRooms(key) {
    //
    //     if(key.includes(',')) {
    //         var keys = key.split(',')
    //     }
    //     else{
    //         var keys = [];
    //         keys = key;
    //     }
    //     return findValsInArray(roomsArr, keys);
    // }

    // function findValsInArray(array, keys) {
    //     var arr = [];
    //         for (var j = 0; j < keys.length; j++) {
    //                 arr.push(keys[j]);
    //         }
    //
    //     return arr;
    // }

    scheduler.templates.timeline_scale_label = function (key, label, section) {
        var roomStatus = getRoomStatus(section.status);
        return ["<div class='timeline_item_separator'></div>",
            "<div class='timeline_item_cell'>" + label + "</div>",
            "<div class='timeline_item_separator'></div>",
            "<div class='timeline_item_cell'>" + getRoomType(section.type) + "</div>",
            "<div class='timeline_item_separator'></div>",
            "<div class='timeline_item_cell room_status'>",
            "<span class='room_status_indicator room_status_indicator_" + roomStatus.key + "'></span>",
            "<span class='status-label'>" + roomStatus.label + "</span>",
            "</div>"].join("");
    };
    scheduler.attachEvent("onBeforeLightbox", function (id, mode, native_event) {

        if (+scheduler.getEvent(id).start_date < +new Date() || scheduler.getEvent(id).readonly)

            scheduler.config.readonly_form  = true;//readonly form for old events
        else
            scheduler.config.readonly_form = false;//regular form for others
        return true;
    });
    scheduler.date.timeline_start = scheduler.date.month_start;
    scheduler.date.add_timeline = function (date, step) {
        return scheduler.date.add(date, step, "month");
    };

    scheduler.attachEvent("onBeforeViewChange", function (old_mode, old_date, mode, date) {
        var year = date.getFullYear();
        var month = (date.getMonth() + 1);
        var d = new Date(year, month, 0);
        var daysInMonth = d.getDate();
        scheduler.matrix["timeline"].x_size = daysInMonth;
        return true;
    });

    scheduler.templates.event_class = function (start, end, event) {
        return "event_" + (event.status || "");
    };

    function getBookingStatus(key) {
        var bookingStatus = findInArray(bookingStatusesArr, key);
        return !bookingStatus ? '' : bookingStatus.label;
    }

    function getPaidStatus(isPaid) {
        return isPaid ? "paid" : "not paid";
    }


    var eventDateFormat = scheduler.date.date_to_str("%d %M %Y");
    scheduler.templates.event_bar_text = function (start, end, event) {
        var paidStatus = getPaidStatus(event.is_paid);
        var startDate = eventDateFormat(event.start_date);
        var endDate = eventDateFormat(event.end_date);
        return ["<div>" + event.text + "</div><br><div>" + getBookingStatus(event.status) + ", " + paidStatus + "</div>"].join("");
    };

    scheduler.templates.tooltip_text = function (start, end, event) {
        var room = getRoom(event.room) || {label: ""};
        var amount = event.paid_amount;
        var val = parseFloat(Math.round(amount * 100) / 100).toFixed(2);
        var paidStatus = getPaidStatus(event.is_paid);
        var html = [];
        html.push("Booking: <b>" + event.text + "</b>");
        html.push("Room: <b>" + room.label + "</b>");
        html.push("Check-in: <b>" + eventDateFormat(start) + "</b>");
        html.push("Check-out: <b>" + eventDateFormat(end) + "</b>");
        html.push(getBookingStatus(event.status) + ", " + paidStatus);
        if (!isNaN(event.total_to_hotel)) {
            html.push("Total: <b>Rs." + event.total_to_hotel + "</b>");
        }
        if (event.is_paid == 1) {
            html.push("Paid Amount: <b>Rs." + val + "</b>");
        }
        return html.join("<br>")
    };

    scheduler.templates.lightbox_header = function (start, end, ev) {
        var formatFunc = scheduler.date.date_to_str('%d.%m.%Y');
        return formatFunc(start) + " - " + formatFunc(end);
    };

    // scheduler.attachEvent("onEventCollision", function (ev, evs) {
    //     alert(ev.room);
    //     for (var i = 0; i < evs.length; i++) {
    //         alert(evs[i].room);
    //         if (ev.room != evs[i].room) continue;
    //         dhtmlx.message({
    //             type: "error",
    //             text: "This room is already booked for this date."
    //         });
    //     }
    //     return true;
    // });


    scheduler.attachEvent('onEventCreated', function (event_id) {

        var ev = scheduler.getEvent(event_id);
        ev.status = 6;
        ev.is_paid = false;
        ev.text = 'No space';

    });

    scheduler.addMarkedTimespan({days: [0, 6], zones: "fullday", css: "timeline_weekend"});

    window.updateSections = function updateSections(value) {
        var currentRoomsArr = [];
        if (value == 'all') {
            scheduler.updateCollection("currentRooms", roomsArr.slice());
            return
        }
        for (var i = 0; i < roomsArr.length; i++) {
            if (value == roomsArr[i].type) {
                currentRoomsArr.push(roomsArr[i]);
            }
        }
        scheduler.updateCollection("currentRooms", currentRoomsArr);
    };

    scheduler.attachEvent("onXLE", function () {
        updateSections("all");

        var select = document.getElementById("room_filter");
        var selectHTML = ["<option value='all'>All</option>"];
        for (var i = 1; i < roomTypesArr.length + 1; i++) {
            selectHTML.push("<option value='" + i + "'>" + getRoomType(i) + "</option>");
        }
        select.innerHTML = selectHTML.join("");
    });
    function convert(str) {
        var date = new Date(str),
            mnth = ("0" + (date.getMonth() + 1)).slice(-2),
            day = ("0" + date.getDate()).slice(-2);
        return [date.getFullYear(), mnth, day].join("-");
    }

    scheduler.attachEvent("onBeforeEventDelete", function (id, ev, is_new) {

        if (ev.status == 6) {
            return true;
        } else {
            dhtmlx.alert("Unfolrtunately you can't delete the dates reserved through the system.");
            return false;
        }
    });
    scheduler.attachEvent("onEventSave", function (id, ev, is_new) {

       
        // if ((ev.status) == 6) {
            $.ajax({
                type: 'POST',
                async: false,
                data: 'checkin=' + convert(ev.start_date) + '&checkout=' + convert(ev.start_date) + 'room_id=' + ev.room + 'status=' + ev.status,
                url: "../viewCalenderController/saveNoSpaceBookings",
                dataType: 'json',
                success: function (response) {

                }
            });

            if (!ev.text) {
                dhtmlx.alert("Text must not be empty");
                return false;
            }
            return true;
        // }
        // else {
        //
        //     dhtmlx.alert("You can't change online reserved dates.");
        //     scheduler.endLightbox(true, document.getElementsByClassName( 'dhx_cal_light_wide' )[0]);
        //     return false;
        // }
    });
})();

function init() {
    scheduler.config.details_on_create = true;
    scheduler.config.details_on_dblclick = true;


    // scheduler.attachEvent("onBeforeLightbox", function (id){
    //     scheduler.resetLightbox();
    //     var buttonsRight,
    //         buttonsLeft;
    //
    //     if(scheduler.getState().new_event){
    //         buttonsRight = ["dhx_delete_btn"];
    //         buttonsLeft = ["dhx_save_btn", "dhx_cancel_btn"];
    //
    //
    //     else{
    //         buttonsRight = [];
    //         buttonsLeft = ["dhx_cancel_btn"];
    //
    //     }
    //
    //     scheduler.config.buttons_right = buttonsRight;
    //     scheduler.config.buttons_left = buttonsLeft;
    //     return true;
    // });
    scheduler.config.drag_move = false;
    scheduler.config.drag_resize = false;
    scheduler.config.drag_create = false;
    scheduler.config.drag_lightbox = false;
    //scheduler.getEvent().readonly = true;

    scheduler.init('scheduler_here', new Date(), "timeline");

    scheduler.load("./data.php", "json");
    // scheduler.SaveAction = Url.Action("Save", "../viewCalenderController/viewData");
    window.dp = new dataProcessor("./data.php");
    // scheduler.load("../viewCalenderController/viewData", "json");
    // window.dp = new dataProcessor("../viewCalenderController/viewData");
    //  scheduler.config.readonly = true;

    dp.init(scheduler);


    (function () {
        var element = document.getElementById("scheduler_here");
        var element_new = document.getElementById("data");
        var top = scheduler.xy.nav_height + 1 + 1;// first +1 -- blank space upper border, second +1 -- hardcoded border length
        var height = scheduler.xy.scale_height;
        var width = scheduler.matrix.timeline.dx;
        var header = document.createElement("div");
        var dataelement = document.createElement("div");
        header.className = "collection_label";
        dataelement.className = "collection_label";
        header.style.position = "absolute";
        header.style.top = top + "px";
        header.style.width = width + "px";
        header.style.height = height + "px";
        dataelement.style.width = width + "px";
        dataelement.style.height = height + "px";
        dataelement.style.position = "absolute";
        dataelement.style.top = top + height + "px";

        var descriptionHTML = "<div class='timeline_item_separator'></div>" +
            "<div class='timeline_item_cell'>Number</div>" +
            "<div class='timeline_item_separator'></div>" +
            "<div class='timeline_item_cell'>Type</div>" +
            "<div class='timeline_item_separator'></div>" +
            "<div class='timeline_item_cell room_status'>Status</div>";
        header.innerHTML = descriptionHTML;
        element.appendChild(header);

        // $.ajax({
        //     type : 'GET',
        //     url : '../viewCalenderController/index',
        //     success :   function(data){
        //
        //         var dataHTML="";
        //         for( i=0;i<data.details.length;i++) {
        //
        //             dataHTML += "<div class='timeline_item_separator'></div>" +
        //                 "<div class='timeline_item_cell'>"+data.details[i].room_type_id+"</div>" +
        //                 "<div class='timeline_item_separator'></div>" +
        //                 "<div class='timeline_item_cell'>"+data.details[i].room_type+"</div>" +
        //                 "<div class='timeline_item_separator'></div>" +
        //                 "<div class='timeline_item_cell room_status'>Status</div>";
        //
        //         }
        //
        //         dataelement.innerHTML = dataHTML;
        //         element.appendChild(dataelement);
        //     }
        // });

    })();

}
