<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:69:"D:\fastadmin\public/../application/index\view\user\calendar-team.html";i:1554965606;}*/ ?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>日历</title>


    <link rel="shortcut icon" href="/assets/libs/index/favicon.ico">
    <link href="/assets/libs/index/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="/assets/libs/index/css/font-awesome.css?v=4.4.0" rel="stylesheet">

    <link href="/assets/libs/index/css/plugins/iCheck/custom.css" rel="stylesheet">

    <link href="/assets/libs/index/css/plugins/fullcalendar/fullcalendar.css" rel="stylesheet">
    <link href="/assets/libs/index/css/plugins/fullcalendar/fullcalendar.print.css" rel="stylesheet">

    <link href="/assets/libs/index/css/animate.css" rel="stylesheet">
    <link href="/assets/libs/index/css/style.css?v=4.1.0" rel="stylesheet">

</head>

<body class="gray-bg">
    <div class="wrapper wrapper-content">
        <div class="row animated fadeInDown">


            <div class="col-sm-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title col-lg-3">
                        <h5>团队日程表</h5>
                        <select name="" id="teamSelect" class="form-control">
                            <option value="团队1">团队1</option>
                            <option value="团队2">团队2</option>
                            <option value="团队3">团队3</option>
                        </select>
                    </div>
                    <div class="ibox-content">
                        <div id="calendar"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!-- 全局js -->
    <script src="/assets/libs/index/js/jquery.min.js?v=2.1.4"></script>
    <script src="/assets/libs/index/js/bootstrap.min.js?v=3.3.6"></script>



    <!-- 自定义js -->
    <script src="/assets/libs/index/js/content.js?v=1.0.0"></script>


    <script src="/assets/libs/index/js/jquery-ui.custom.min.js"></script>

    <!-- iCheck -->
    <script src="/assets/libs/index/js/plugins/iCheck/icheck.min.js"></script>

    <!-- Full Calendar -->
    <script src="/assets/libs/index/js/plugins/fullcalendar/fullcalendar.min.js"></script>

    <script>
        $(document).ready(function () {


            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });

            /* initialize the external events
             -----------------------------------------------------------------*/

            $('#external-events div.external-event').each(function () {

                // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
                // it doesn't need to have a start or end
                var eventObject = {
                    title: $.trim($(this).text()) // use the element's text as the event title
                };

                // store the Event Object in the DOM element so we can get to it later
                $(this).data('eventObject', eventObject);

                // make the event draggable using jQuery UI
                $(this).draggable({
                    zIndex: 999,
                    revert: true, // will cause the event to go back to its
                    revertDuration: 0 //  original position after the drag
                });

            });

            $('#teamSelect').change(function () {
                var data = $(this).val();
                //接口测试成功
                $.ajax({
                    type: 'GET',
                    dataType: 'json',
                    url: 'db.json',
                    success: function (res) {
                        if (res.state == 200) {
                            alert('SUCCESS')
                        }
                    },
                    error: function () {
                        alert("ERROR")
                    }
                })
            });


            /* initialize the calendar
             -----------------------------------------------------------------*/
            var date = new Date();
            var d = date.getDate();
            var m = date.getMonth();
            var y = date.getFullYear();
            var Events = [{
                    title: 'fff',
                    start: new Date(y, m, 1),
                    color: 'red'
                },
                {
                    title: '长事件',
                    start: new Date(y, m, d - 5),
                    end: new Date(y, m, d - 2),
                },
                {
                    id: 999,
                    title: '重复事件',
                    start: new Date(y, m, d - 3, 16, 0),
                    allDay: false,
                },
                {
                    id: 999,
                    title: '重复事件',
                    start: new Date(y, m, d + 4, 16, 0),
                    allDay: false
                },
                {
                    title: '会议',
                    start: new Date(y, m, d, 10, 30),
                    allDay: false
                },
                {
                    title: '午餐',
                    start: new Date(y, m, d, 12, 0),
                    end: new Date(y, m, d, 14, 0),
                    allDay: false
                },
                {
                    title: '生日',
                    start: new Date(y, m, d + 1, 19, 0),
                    end: new Date(y, m, d + 1, 22, 30),
                    allDay: false
                },
                {
                    title: '打开百度',
                    start: new Date(y, m, 28),
                    end: new Date(y, m, 29),
                    url: 'http://baidu.com/'
                }
            ];




            $('#calendar').fullCalendar({
                header: {
                    left: 'prev,next',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay'
                },
                editable: true,
                allDayDefault: true,
                selectable: true,
                droppable: true, // this allows things to be dropped onto the calendar !!!
                drop: function (date, allDay) { // this function is called when something is dropped

                    // retrieve the dropped element's stored Event Object
                    var originalEventObject = $(this).data('eventObject');

                    // we need to copy it, so that multiple events don't have a reference to the same object
                    var copiedEventObject = $.extend({}, originalEventObject);

                    // assign it the date that was reported
                    copiedEventObject.start = date;
                    copiedEventObject.allDay = allDay;

                    // render the event on the calendar
                    // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
                    $('#calendar').fullCalendar('renderEvent', copiedEventObject, true);

                    // is the "remove after drop" checkbox checked?
                    if ($('#drop-remove').is(':checked')) {
                        // if so, remove the element from the "Draggable Events" list
                        $(this).remove();
                    }

                },
                events: Events
            });


        });
    </script>
    <script type="text/javascript" src="http://tajs.qq.com/stats?sId=9051096" charset="UTF-8"></script>
    <!--统计代码，可删除-->

</body>

</html>