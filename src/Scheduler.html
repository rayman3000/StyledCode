<?php
    session_start();
    $email = $_SESSION['email'];
?>

<html lang="en" style="overflow: hidden;">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="Dashboard">
<meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
<title>DASHGUM - Bootstrap Admin Template</title>
<!-- Bootstrap core CSS -->
<link href="assets/css/bootstrap.css" rel="stylesheet">
<!--external css-->
<link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet">
<!-- Custom styles for this template -->
<link href="assets/css/style.css" rel="stylesheet">
<link href="assets/css/style-responsive.css" rel="stylesheet">
<script src="assets/js/chart-master/Chart.js"></script>
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<style type="text/css">
.jqstooltip { position: absolute;left: 0px;top: 0px;display: block;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;padding: 5px 5px 8px 5px;font: 10px arial, san serif;text-align: left;}
</style>
<style type="text/css">
.jqstooltip { position: absolute;left: 0px;top: 0px;display: block;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;padding: 5px 5px 8px 5px;font: 10px arial, san serif;text-align: left;}
</style>
<style type="text/css">
.jqstooltip { position: absolute;left: 0px;top: 0px;display: block;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;padding: 5px 5px 8px 5px;font: 10px arial, san serif;text-align: left;}
</style>
	<script src="contents_scheduler/dhtmlxscheduler.js" type="text/javascript" charset="utf-8"></script>
	<link rel="stylesheet" href="contents_scheduler/dhtmlxscheduler.css" type="text/css" charset="utf-8">
	<script src="contents_scheduler/dhtmlxscheduler_key_nav.js" type="text/javascript" charset="utf-8"></script>
	<script src="contents_scheduler/dhtmlxscheduler_recurring.js" type="text/javascript" charset="utf-8"></script>


	<style type="text/css" >
		html, body {
			margin: 0px;
			padding: 0px;
			height: 100%;
			overflow: hidden;
		}

		.copied_event div {
			color: white !important;
			background-color: #f08080 !important;
		}
	</style>

	<script type="text/javascript" charset="utf-8">
		function init() {
			scheduler.config.xml_date = "%Y-%m-%d %H:%i";
			scheduler.config.first_hour = 8;
			scheduler.config.limit_time_select = true;
			scheduler.config.occurrence_timestamp_in_utc = true;
			scheduler.config.include_end_by = true;
			scheduler.config.repeat_precise = true;


			var modified_event_id = null;
			scheduler.templates.event_class = function(start, end, event) {
				if (event.id == modified_event_id)
					return "copied_event";
				return ""; // default
			};

			scheduler.attachEvent("onEventCopied", function(ev) {
				dhtmlx.message("You've copied event: <br/><b>"+ev.text+"</b>");
				modified_event_id = ev.id;
				scheduler.updateEvent(ev.id);
			});
			scheduler.attachEvent("onEventCut", function(ev) {
				dhtmlx.message("You've cut event: <br/><b>"+ev.text+"</b>");
				modified_event_id = ev.id;
				scheduler.updateEvent(ev.id);
			});

			scheduler.attachEvent("onEventPasted", function(isCopy, modified_ev, original_ev) {
				modified_event_id = null;
				scheduler.updateEvent(modified_ev.id);

				var evs = scheduler.getEvents(modified_ev.start_date, modified_ev.end_date);
				if (evs.length > 1) {
					dhtmlx.modalbox({
						text: "There is another event at this time! What do you want to do?",
						width: "500px",
						position: "middle",
						buttons:["Revert changes", "Edit event", "Save changes"],
						callback: function(index) {
							switch(+index) {
								case 0:
									if (isCopy) {
										// copy operation, need to delete new event
										scheduler.deleteEvent(modified_ev.id);
									} else {
										// cut operation, need to restore dates
										modified_ev.start_date = original_ev.start_date;
										modified_ev.end_date = original_ev.end_date;
										scheduler.setCurrentView();
									}
									break;
								case 1:
									scheduler.showLightbox(modified_ev.id);
									break;
								case 2:
									return;
							}
						}
					});
				}
			});

			scheduler.init('scheduler_here', new Date(2017, 6, 15), "week");
			scheduler.parse([
				{ start_date: "2017-07-12 09:00", end_date: "2017-07-12 12:00", text:"1. Select this event and press Ctrl+X!" }
			], "json");
		}
	</script>
</head>
<body onload="init();" style="">

<header class="header black-bg">
<div class="sidebar-toggle-box">
	<div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation">
	</div>
</div>
<div class="top-menu">
	<ul class="nav pull-right top-menu">
		<li><a class="logout" href="LogOut.php">Logout</a></li>
	</ul>
</div>
</header>
<!-- js placed at the end of the document so the pages load faster -->
<!--<section class="sidebar-closed" id="container">-->
<!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
<!--header start-->
     <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="Dashboard.html" class="logo"><b>StyledCode</b></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
                    <!-- settings start -->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                            <i class="fa fa-tasks"></i>
                            <span class="badge bg-theme">4</span>
                        </a>
                        <ul class="dropdown-menu extended tasks-bar">
                            <div class="notify-arrow notify-arrow-green"></div>
                            <li>
                                <p class="green">You have 4 pending tasks</p>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <div class="task-info">
                                        <div class="desc">DashGum Admin Panel</div>
                                        <div class="percent">40%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <div class="task-info">
                                        <div class="desc">Database Update</div>
                                        <div class="percent">60%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <div class="task-info">
                                        <div class="desc">Product Development</div>
                                        <div class="percent">80%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <div class="task-info">
                                        <div class="desc">Payments Sent</div>
                                        <div class="percent">70%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                            <span class="sr-only">70% Complete (Important)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="external">
                                <a href="#">See All Tasks</a>
                            </li>
                        </ul>
                    </li>
                    <!-- settings end -->
                    <!-- inbox dropdown start-->
                    <li id="header_inbox_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                            <i class="fa fa-envelope-o"></i>
                            <span class="badge bg-theme">5</span>
                        </a>
                        <ul class="dropdown-menu extended inbox">
                            <div class="notify-arrow notify-arrow-green"></div>
                            <li>
                                <p class="green">You have 5 new messages</p>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <span class="photo"><img alt="avatar" src="assets/img/ui-zac.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Zac Snider</span>
                                    <span class="time">Just now</span>
                                    </span>
                                    <span class="message">
                                        Hi mate, how is everything?
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <span class="photo"><img alt="avatar" src="assets/img/ui-divya.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Divya Manian</span>
                                    <span class="time">40 mins.</span>
                                    </span>
                                    <span class="message">
                                     Hi, I need your help with this.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <span class="photo"><img alt="avatar" src="assets/img/ui-danro.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Dan Rogers</span>
                                    <span class="time">2 hrs.</span>
                                    </span>
                                    <span class="message">
                                        Love your new Dashboard.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <span class="photo"><img alt="avatar" src="assets/img/ui-sherman.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Dj Sherman</span>
                                    <span class="time">4 hrs.</span>
                                    </span>
                                    <span class="message">
                                        Please, answer asap.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">See all messages</a>
                            </li>
                        </ul>
                    </li>
                    <!-- inbox dropdown end -->
                </ul>
                <!--  notification end -->
            </div>
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="login.html">Logout</a></li>
            	</ul>
            </div>
        </header>
<!--header end-->
<!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
<!--sidebar start-->
<aside>
            <div id="sidebar"  class="nav-collapse ">
                <!-- sidebar menu start-->
                <ul class="sidebar-menu" id="nav-accordion">
                    <p class="centered"><a href="profile.html"><img src="assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
                    <h5 class="centered"><?=$email?></h5>
                          
                    <li class="mt">
                        <a class="active" href="Dashboard.html">
                            <i class="fa fa-dashboard"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
  
                    <li class="sub-menu">
                        <a href="javascript:;" >
                            <i class="fa fa-desktop"></i>
                            <span>Code</span>
                        </a>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;" >
                            <i class="fa fa-bar-chart"></i>
                            <span>Coding Convention</span>
                        </a>
                        <ul class="sub">
                            <li><a  href="form_component.html">Rule Setting</a></li>
                            <li><a  href="advanced_form_components.html">Rule Docs</a></li>
                            <li><a  href="coderesult.php">Report from Sonar</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;" >
                            <i class="fa fa-file-code-o"></i>
                            <span>Code Review</span>
                        </a>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;" >
                            <i class="fa fa-users"></i>
                            <span>Account & Team</span>
                        </a>
                        <ul class="sub">
                            <li><a  href="blank.html">Edit profile</a></li>
                            <li><a  href="login.html">Team setting</a></li>
                            <li><a  href="lock_screen.html">Message</a></li>
                            <li><a  href="lock_screen.html">Chat Room</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;" >
                            <i class="fa fa-cogs"></i>
                            <span>Agile Setting</span>
                        </a>
                        <ul class="sub">
                            <li><a  href="dropzone.html">Issue</a></li>
                            <li><a  href="sprint-plan.html">Sprint Plan</a></li>
                            <li><a  href="todo_list.html">Calendar</a></li>
                        </ul>
                    </li>
					<li class="sub-menu">
			<a href="ManageProject.html">
				<i class="fa fa-desktop"></i>
				<span>ManageProject</span>
			</a>
		</li>
		<li class="sub-menu">
			<a href="lobby.html">
				<i class="fa fa-comments-o"></i>
				<span>Chat Room</span>
			</a>
		</li>
		<li class="sub-menu">
			<a href="Scheduler.html">
				<i class="fa fa-tasks"></i>
				<span>Scheduler</span>
			</a>
		</li>
                </ul>
                <!-- sidebar menu end-->
            </div>
        </aside>
<!--sidebar end-->
<!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
<!--main content start-->
<section id="main-content">
<section class="wrapper site-min-height">
<h3><i class="fa fa-angle-right"></i>Scheduler</h3>
<div class="row mt" style="overflow:scroll;">
	<!--<div class="col-lg-12">-->
		<!-- -- 1st ROW OF PANELS ---->
		<!--<div class="row">-->
			<!-- TWITTER PANEL -->
			
    <!--</div>-->
<div id="scheduler_here" class="dhx_cal_container" style='width:100%; height:100%;'>
	<div class="dhx_cal_navline">
		<div class="dhx_cal_prev_button">&nbsp;</div>
		<div class="dhx_cal_next_button">&nbsp;</div>
		<div class="dhx_cal_today_button"></div>
		<div class="dhx_cal_date"></div>
		<div class="dhx_cal_tab" name="day_tab" style="right:204px;"></div>
		<div class="dhx_cal_tab" name="week_tab" style="right:140px;"></div>
		<div class="dhx_cal_tab" name="month_tab" style="right:76px;"></div>
	</div>
	<div class="dhx_cal_header">
	</div>
	<div class="dhx_cal_data">
	</div>
</div>
<!-- --/col-md-4 ---->
</div>
</section>
<!-- --/wrapper ---->
</section>
<!-- /MAIN CONTENT -->
<!--main content end-->
<!--footer start-->
<!--footer end-->
<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script class="include" src="assets/js/jquery.dcjqaccordion.2.7.js" type="text/javascript"></script>
<script src="assets/js/jquery.scrollTo.min.js"></script>
<script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
<script src="assets/js/jquery.sparkline.js"></script>
<!--common script for all pages-->
<script src="assets/js/common-scripts.js"></script>
<div id="ascrail2000" class="nicescroll-rails" style="width: 6px; z-index: 1000; background: rgb(64, 64, 64); cursor: default; position: fixed; top: 0px; height: 100%; right: 0px; display: none;">
<div style="position: relative; top: 0px; float: right; width: 6px; height: 0px; background-color: rgb(78, 205, 196); background-clip: padding-box; border-radius: 10px;">
</div>
</div>
<div id="ascrail2000-hr" class="nicescroll-rails" style="height: 6px; z-index: 1000; background: rgb(64, 64, 64); position: fixed; left: 0px; width: 100%; bottom: 0px; cursor: default; display: none;">
<div style="position: relative; top: 0px; height: 6px; width: 0px; background-color: rgb(78, 205, 196); background-clip: padding-box; border-radius: 10px;">
</div>
</div>
<div id="ascrail2000" class="nicescroll-rails" style="width: 6px; z-index: 1000; background: rgb(64, 64, 64); cursor: default; position: fixed; top: 0px; height: 100%; right: 0px; display: none;">
<div style="position: relative; top: 0px; float: right; width: 6px; height: 0px; background-color: rgb(78, 205, 196); background-clip: padding-box; border-radius: 10px;">
</div>
</div>
<div id="ascrail2000-hr" class="nicescroll-rails" style="height: 6px; z-index: 1000; background: rgb(64, 64, 64); position: fixed; left: 0px; width: 100%; bottom: 0px; cursor: default; display: none;">
<div style="position: relative; top: 0px; height: 6px; width: 0px; background-color: rgb(78, 205, 196); background-clip: padding-box; border-radius: 10px;">
</div>
</div>
<div class="nicescroll-rails" id="ascrail2000-hr" style="background: rgb(64, 64, 64); width: 207px; height: 3px; display: none; position: fixed; z-index: auto; cursor: default; opacity: 0;">
<div style="border-radius: 10px; top: 0px; width: 210px; height: 3px; position: relative; background-clip: padding-box; background-color: rgb(78, 205, 196);">
</div>
</div>
<div class="nicescroll-rails" id="ascrail2001" style="background: rgb(64, 64, 64); top: 0px; width: 6px; height: 100%; right: 0px; position: fixed; z-index: 1000; cursor: default; opacity: 0; -ms-touch-action: none;">
<div style="border-radius: 10px; top: 14px; width: 6px; height: 71px; float: right; position: relative; -ms-touch-action: none; background-clip: padding-box; background-color: rgb(78, 205, 196);">
</div>
</div>
<div class="nicescroll-rails" id="ascrail2001-hr" style="background: rgb(64, 64, 64); left: 0px; width: 100%; height: 6px; bottom: 0px; display: none; position: fixed; z-index: 1000; cursor: default; opacity: 0;">
<div style="border-radius: 10px; top: 0px; width: 1024px; height: 6px; position: relative; background-clip: padding-box; background-color: rgb(78, 205, 196);">
</div>
</div>
<!--script for this page-->
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
<script src="assets/js/sparkline-chart.js"></script>
<script>
      //custom select box
      $(function(){
          $('select.styled').customSelect();
      });
  </script>
    
</body>
</html>