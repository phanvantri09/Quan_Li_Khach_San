<!DOCTYPE html>
<html>
<head>
    <title>Lịch đặt phòng</title>
    <meta name="csrf-token" content="{{ csrf_token() }}"> 
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
</head>
<body>
    
<div class="container" style="padding: 10px">
    <h1 style="text-align: center; margin-top: 100px">Lịch đặt phòng</h1>
    <div id='calendar'></div>
</div>
  
<script type="text/javascript">
  
$(document).ready(function () {
      
    /*------------------------------------------
    --------------------------------------------
    Get Site URL
    --------------------------------------------
    --------------------------------------------*/
    var SITEURL = "http://127.0.0.1:8000";
    
    /*------------------------------------------
    --------------------------------------------
    CSRF Token Setup
    --------------------------------------------
    --------------------------------------------*/
    $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
      
    /*------------------------------------------
    --------------------------------------------
    FullCalender JS Code
    --------------------------------------------
    --------------------------------------------*/
    var calendar = $('#calendar').fullCalendar({
                    editable: true,
                    events: SITEURL + "/calender",
                    displayEventTime: false,
                    editable: true,
                    eventRender: function (event, element, view) {
                        if (event.allDay === 'true') {
                                event.allDay = true;
                        } else {
                                event.allDay = false;
                        }
                    },
                    selectable: true,
                    selectHelper: true,
                    select: function (date_start, date_end, allDay) {
                        var email = prompt('email Title:');
                        if (email) {
                            var date_start = $.fullCalendar.formatDate(date_start, "Y-MM-DD");
                            var date_end = $.fullCalendar.formatDate(date_end, "Y-MM-DD");
                            $.ajax({
                                url: SITEURL + "/fullcalenderAjax",
                                data: {
                                    email: email,
                                    date_start: date_start,
                                    date_end: date_end,
                                    type: 'add'
                                },
                                type: "POST",
                                success: function (data) {
                                    displayMessage("Event Created Successfully");
  
                                    calendar.fullCalendar('renderEvent',
                                        {
                                            id: data.id,
                                            email: email,
                                            date_start: date_start,
                                            date_end: date_end,
                                            allDay: allDay
                                        },true);
  
                                    calendar.fullCalendar('unselect');
                                }
                            });
                        }
                    },
                    eventDrop: function (event, delta) {
                        var date_start = $.fullCalendar.formatDate(event.date_start, "Y-MM-DD");
                        var date_end = $.fullCalendar.formatDate(event.date_end, "Y-MM-DD");
  
                        $.ajax({
                            url: SITEURL + '/fullcalenderAjax',
                            data: {
                                email: event.email,
                                date_start: date_start,
                                date_end: date_end,
                                id: event.id,
                                type: 'update'
                            },
                            type: "POST",
                            success: function (response) {
                                displayMessage("Event Updated Successfully");
                            }
                        });
                    },
                    eventClick: function (event) {
                        var deleteMsg = confirm("Do you really want to delete?");
                        if (deleteMsg) {
                            $.ajax({
                                type: "POST",
                                url: SITEURL + '/fullcalenderAjax',
                                data: {
                                        id: event.id,
                                        type: 'delete'
                                },
                                success: function (response) {
                                    calendar.fullCalendar('removeEvents', event.id);
                                    displayMessage("Event Deleted Successfully");
                                }
                            });
                        }
                    }
 
                });
 
    });
      
    /*------------------------------------------
    --------------------------------------------
    Toastr Success Code
    --------------------------------------------
    --------------------------------------------*/
    function displayMessage(message) {
        toastr.success(message, 'Event');
    } 
    
</script>
  
</body>
</html>