<?php if (!defined('THINK_PATH')) {
    exit();
}
/*a:1:{s:69:"D:\fastadmin\public/../application/index\view\user\calendar-main.html";i:1554965184;}*/?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>日历</title>


    <link rel="shortcut icon" href="/assets/libs/index/favicon.ico">
    <link href="/assets/libs/index/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/libs/index/css/font-awesome.css?v=4.4.0" rel="stylesheet">

    <link href="/assets/libs/index/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="/assets/libs/index/css/plugins/sweetalert/sweetalert.css" rel="stylesheet">


    <link href="/assets/libs/index/css/plugins/fullcalendar/fullcalendar.css" rel="stylesheet">
    <link href="/assets/libs/index/css/plugins/fullcalendar/fullcalendar.print.css" rel="stylesheet">

    <link href="/assets/libs/index/css/animate.css" rel="stylesheet">
    <link href="/assets/libs/index/css/style.css?v=4.1.0" rel="stylesheet">



</head>

<body class="gray-bg">
    <div class="wrapper wrapper-content">
        <div class="row animated fadeInDown">
            <div class="col-sm-3">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>事件总表</h5>
                        <div class="ibox-tools">
                        </div>
                    </div>
                    <div class="ibox-content">
                        <div id='external-events'>
                            <!--添加事-->
                            <div id="person">
                                <p>个人活动</p>
                                <div class='external-event navy-bg' id="persont">个人活动</div>
                                <div class='external-event navy-bg'>团队活动</div>
                                <div class='external-event navy-bg'>订阅号</div>
                                <div class='external-event navy-bg'>xxx</div>
                                <p class="m-t">
                            </div>
                            <hr>
                            <p>团队活动</p>
                            <div class='external-event navy-bg demo1'>
                                哈哈哈哈
                            </div>
                            <div class='external-event navy-bg' id="teamt">团队活动</div>
                            <div class='external-event navy-bg'>订阅号</div>
                            <div class='external-event navy-bg'>xxx</div>
                            <p class="m-t">
                                <hr>
                                <p>订阅号</p>
                                <div class='external-event navy-bg' id="pubilct">个人活动</div>
                                <div class='external-event navy-bg'>团队活动</div>
                                <div class='external-event navy-bg'>订阅号</div>
                                <div class='external-event navy-bg'>xxx</div>
                                <p class="m-t">
                                    <input type='checkbox' id='drop-remove' class="i-checks" checked />
                                    <label for='drop-remove'>移动后删除</label>
                                </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-9">
                <div class="ibox float-e-margins">
                    <div class="ibox-title col-lg-3">
                        <h5>总日程表</h5>
                        <button class="btn-primary btn-sm col-md-offset-11 ctrl">保存</button>
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
    <script src="/assets/libs/index/js/plugins/sweetalert/sweetalert.min.js"></script>


    <!-- iCheck -->
    <script src="/assets/libs/index/js/plugins/iCheck/icheck.min.js"></script>

    <!-- Full Calendar -->
    <script src="/assets/libs/index/js/plugins/fullcalendar/fullcalendar.min.js"></script>

    <script>
        $(document).ready(function () {

            $('.demo1').click(function () {
                swal({
                    title: "欢迎使用SweetAlert",
                    text: "Sweet Alert 是一个替代传统的 JavaScript Alert 的漂亮提示效果。"
                });
            });


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

            $('.ctrl').on('click', function () {
                $.ajax({
                    type: 'POST',
                    dataType: 'json',
                    url: 'db.json',
                    data: this.Events,
                    success: function () {
                        console.log('SUCCESS')
                    },
                    error: function () {
                        console.log('ERROR')
                    }
                })
            })


            /* initialize the calendar
             -----------------------------------------------------------------*/
            var date = new Date();
            var d = date.getDate();
            var m = date.getMonth();
            var y = date.getFullYear();
            var personEvents = [];
            var teamEvents = [];
            var publicEvents = [];




            $('#calendar').fullCalendar({
                header: {
                    left: 'prev,next',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay'
                },
                editable: true,
                allDayDefault: true,
                selectable: true,
                droppable: true,
                eventBorderColor: 'black',
                drop: function (date, allDay, jsEvent, ui) {


                    var originalEventObject = $(this).data('eventObject');


                    var copiedEventObject = $.extend({}, originalEventObject);


                    copiedEventObject.start = date;
                    copiedEventObject.allDay = allDay;


                    $('#calendar').fullCalendar('renderEvent', copiedEventObject, true);


                    //添加事件到日历
                    var id = $(this).attr('id')
                    if (id == "persont") {
                        personEvents.push({
                            title: originalEventObject,
                            start: date,
                        })
                    } else if (id == "teamt") {
                        teamEvents.push({
                            title: originalEventObject,
                            start: date,
                        })
                    } else if (id == "publict") {
                        publicEvents.push({
                            title: originalEventObject,
                            statr: date
                        })
                    }




                    if ($('#drop-remove').is(':checked')) {

                        $(this).remove();
                    }

                },
                eventDrop: function (event, dayDelta) {

                    // console.log(publicEvents)
                },
                // events: Events
                eventSources: [personEvents, teamEvents, publicEvents],
                eventClick: function (Event, jsEvent, view) {
                    swal({
                            title: "操作确认",
                            text: "删除后，您将无法恢复此虚拟文件！",
                            icon: "warning",
                            buttons: true,
                            dangerMode: true,
                            showCancelButton: true,
                        },
                        //回调函数-------OK
                        function () {
                            console.log(Event)
                        }
                    )
                }
            });


        });
    </script>
    <script type="text/javascript" src="http://tajs.qq.com/stats?sId=9051096" charset="UTF-8"></script>
    <!--统计代码，可删除-->

</body>

</html>
