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
        <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        <link href="assets/js/advanced-datatable/media/css/demo_page.css" rel="stylesheet" />
        <link href="assets/js/advanced-datatable/media/css/demo_table.css" rel="stylesheet" />
        <link rel="stylesheet" href="assets/js/advanced-datatable/media/css/DT_bootstrap.css" />
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
            .jqstooltip {
                position: absolute;
                left: 0px;
                top: 0px;
                display: block;
                visibility: hidden;
                background: rgb(0, 0, 0) transparent;
                background-color: rgba(0, 0, 0, 0.6);
                filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);
                -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";
                color: white;
                font: 10px arial, san serif;
                text-align: left;
                white-space: nowrap;
                border: 1px solid white;
                z-index: 10000;
            }
            
            .jqsfield {
                color: white;
                padding: 5px 5px 8px 5px;
                font: 10px arial, san serif;
                text-align: left;
            }

        </style>
        <style type="text/css">
            .jqstooltip {
                position: absolute;
                left: 0px;
                top: 0px;
                display: block;
                visibility: hidden;
                background: rgb(0, 0, 0) transparent;
                background-color: rgba(0, 0, 0, 0.6);
                filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);
                -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";
                color: white;
                font: 10px arial, san serif;
                text-align: left;
                white-space: nowrap;
                border: 1px solid white;
                z-index: 10000;
            }
            
            .jqsfield {
                color: white;
                padding: 5px 5px 8px 5px;
                font: 10px arial, san serif;
                text-align: left;
            }

        </style>
        <style type="text/css">
            .jqstooltip {
                position: absolute;
                left: 0px;
                top: 0px;
                display: block;
                visibility: hidden;
                background: rgb(0, 0, 0) transparent;
                background-color: rgba(0, 0, 0, 0.6);
                filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);
                -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";
                color: white;
                font: 10px arial, san serif;
                text-align: left;
                white-space: nowrap;
                border: 1px solid white;
                z-index: 10000;
            }
            
            .jqsfield {
                color: white;
                padding: 5px 5px 8px 5px;
                font: 10px arial, san serif;
                text-align: left;
            }

        </style>
        <!--include chart-->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                var options = {
                    chart: {
                        renderTo: 'container',
                        plotBackgroundColor: null,
                        plotBorderWidth: null,
                        plotShadow: false,
                        type: 'pie'
                    },
                    title: {
                        text: 'Code Convention'
                    },
                    tooltip: {
                        formatter: function() {
                            return '<b>' + this.point.name + '</b>: ' + this.percentage + ' %' + '<br>  (' + this.y + '표' + ')';;
                        }
                    },
                    plotOptions: {
                        pie: {
                            allowPointSelect: true,
                            cursor: 'pointer',
                            dataLabels: {
                                enabled: true,
                                color: '#000000',
                                connectorColor: '#000000',
                                formatter: function() {
                                    return '<b>' + this.point.name + '</b>: ' + this.percentage.toFixed(2) + ' %' + '<br>  (' + this.y + '표' + ')';
                                }
                            },
                            showInLegend: true
                        }
                    },
                    series: [{}],

                    drilldown: {
                        series: []
                    }
                }
                $.getJSON("data.php", function(json) {
                    console.log(json);
                    options.series = json;
                    chart = new Highcharts.Chart(options);
                });

                $.getJSON("drilldown.php", function(json) {
                    console.log(json);
                    options.drilldown.series = json;
                    chart = new Highcharts.Chart(options);
                });

            });

        </script>
        <script src="http://code.highcharts.com/highcharts.js"></script>
        <script src="http://code.highcharts.com/modules/exporting.js"></script>
        <script src="https://code.highcharts.com/modules/drilldown.js"></script>
        <!--end include chart-->
    </head>

    <body=>

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
            <div id="sidebar" class="nav-collapse ">
                <!-- sidebar menu start-->
                <ul class="sidebar-menu" id="nav-accordion">
                    <p class="centered">
                        <a href="profile.html"><img src="assets/img/ui-sam.jpg" class="img-circle" width="60"></a>
                    </p>
                    <h5 class="centered">
                        <?=$email?>
                    </h5>

                    <li class="mt">
                        <a class="active" href="Dashboard.html">
                            <i class="fa fa-dashboard"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-desktop"></i>
                            <span>Code</span>
                        </a>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-bar-chart"></i>
                            <span>Coding Convention</span>
                        </a>
                        <ul class="sub">
                            <li><a href="form_component.html">Rule Setting</a></li>
                            <li><a href="advanced_form_components.html">Rule Docs</a></li>
                            <li><a href="coderesult.php">Report from Sonar</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-file-code-o"></i>
                            <span>Code Review</span>
                        </a>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-users"></i>
                            <span>Account & Team</span>
                        </a>
                        <ul class="sub">
                            <li><a href="blank.html">Edit profile</a></li>
                            <li><a href="login.html">Team setting</a></li>
                            <li><a href="lock_screen.html">Message</a></li>
                            <li><a href="lock_screen.html">Chat Room</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-cogs"></i>
                            <span>Agile Setting</span>
                        </a>
                        <ul class="sub">
                            <li><a href="dropzone.html">Issue</a></li>
                            <li><a href="sprint-plan.html">Sprint Plan</a></li>
                            <li><a href="todo_list.html">Calendar</a></li>
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
        <section id="main-content" style="padding-left:20px">
            <section class="wrapper site-min-height">
                <h3><i class="fa fa-angle-right"></i>Report From Sonar</h3>
                <div class="row mt" style="overflow:auto;">
                    <!--<div class="col-lg-12">-->
                    <!-- -- 1st ROW OF PANELS ---->
                    <!--<div class="row">-->
                    <!-- TWITTER PANEL -->
                    <!--start chart-->
                    <div id="container" style="min-width: 400px; height: 400px; margin: 0 auto"></div>
                    <?php
    $host = "styledcode-postgresqldbserver.postgres.database.azure.com"; 
    $user = "bulgogi1216@styledcode-postgresqldbserver"; 
    $pass = "seong!UK$91"; 
    $db = "styledcode_postgresqldb";
    $port = "5432";
    
    
    $col_count = 3;
    $row_index = 0;
    $message = array();
    $severity = array();
    $uuid = array();
    $src = array();     //save source name
    $dep_kee = array();
    
    $con = pg_connect("host=$host port=$port dbname=$db user=$user password=$pass") or die ("Could not connect to server\n"); 

    $query = "SELECT severity, message, component_uuid FROM issues"; 
    
    $query1 = "SELECT deprecated_kee, uuid FROM projects"; 

    //Make Result Table
    echo "<h4> Result Table</h4><hr>";
    echo '<div class="row mb ml" style="overflow:auto; position:absolute;">';
    echo "<div class=\"content-panel\">";
    echo "<div class=\"adv-table\">";
    
    echo '<table ccellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info" style="overflow:auto;">';
    echo "<thead><tr>";
    echo "<th>Severity</th>";
    echo "<th class=\"hidden-phone\">Source Name</th>";
    echo "<th class=\"hidden-phone\">Message</th>";
    echo "</tr></thead><tbody>";
    $rss = pg_query($con, $query1) or die("Cannot execute query: $query1\n");
    
    $j=0;
    while ($row = pg_fetch_row($rss)) {
        $uuid[$j] = $row[1];    //save uuid since compare 
        $dep_kee[$j] = $row[0]; //save deprecated_kee since name of source
        $j++;
    }
    
    $i=0;
    $rs = pg_query($con, $query) or die("Cannot execute query: $query\n");

    while ($row = pg_fetch_row($rs)) {
        $severity[$i] = $row[0];
        $message[$i] = $row[1];
        for($k=0; $k<$j; $k++)
        {
            if($row[2]==$uuid[$k])  //if kth uuid sames as now uuid
            {
                $src[$i] = $dep_kee[$k];    //save source name in src
            }
        }
        $i++;
    }
    
    $row_count = $i/3 -1;
    $i=0;
    
    while($row_index < $row_count){
        
        $col_index = 0;
        while($col_index < $col_count){
            if($severity[$i]=="MAJOR")          #위험도에 따른 색깔 파랑
                echo "<tr class=\"gradeC\">";   
            else if($severity[$i]=="MINOR")     #초록
                echo "<tr class=\"gradeA\">";
            else if($severity[$i]=="BLOCKER")   #빨강
                echo "<tr class=\"gradeX\">";
            else                                #검정
                echo "<tr class=\"gradeU\">";
            echo "<td>$severity[$i]</td>";
            echo "<td>$src[$i]</td>";
            echo "<td  style='color: red'>$message[$i]</td>";
            $i++;
            $col_index = $col_index+1;
            echo "</tr>";
        }
        $row_index = $row_index + 1;
    }
    echo "</table>";
    ?>

                        <script type="text/javascript" language="javascript" src="assets/js/advanced-datatable/media/js/jquery.js"></script>
                        <script src="assets/js/bootstrap.min.js"></script>
                        <script src="assets/js/jquery.scrollTo.min.js"></script>
                        <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>

                        <script type="text/javascript" language="javascript" src="assets/js/advanced-datatable/media/js/jquery.dataTables.js"></script>
                        <script type="text/javascript" src="assets/js/advanced-datatable/media/js/DT_bootstrap.js"></script>


                        <!--common script for all pages-->
                        <script src="assets/js/common-scripts.js"></script>

                        <!--script for this page-->
                        <script type="text/javascript">
                            /* Formating function for row details */
                            function fnFormatDetails(oTable, nTr) {
                                var aData = oTable.fnGetData(nTr);
                                var sOut = '<table cellpadding="5" cellspacing="0" border="0" >';
                                sOut += '<tr><td>Severity:</td><td>' + aData[1] + '</td></tr>';
                                sOut += '<tr><td>Source Name:</td><td>Could provide a link here</td></tr>';
                                sOut += '<tr><td>Message:</td><td>And any further details here (images etc)</td></tr>';
                                sOut += '</table>';

                                return sOut;
                            }

                            $(document).ready(function() {
                                /*
                                 * Insert a 'details' column to the table
                                 */
                                var nCloneTh = document.createElement('th');
                                var nCloneTd = document.createElement('td');
                                nCloneTd.innerHTML = '<img src="assets/js/advanced-datatable/examples/examples_support/details_open.png">';
                                nCloneTd.className = "center";

                                $('#hidden-table-info thead tr').each(function() {
                                    this.insertBefore(nCloneTh, this.childNodes[0]);
                                });

                                $('#hidden-table-info tbody tr').each(function() {
                                    this.insertBefore(nCloneTd.cloneNode(true), this.childNodes[0]);
                                });

                                /*
                                 * Initialse DataTables, with no sorting on the 'details' column
                                 */
                                var oTable = $('#hidden-table-info').dataTable({
                                    "aoColumnDefs": [{
                                        "bSortable": false,
                                        "aTargets": [0]
                                    }],
                                    "aaSorting": [
                                        [1, 'asc']
                                    ]
                                });

                                /* Add event listener for opening and closing details
                                 * Note that the indicator for showing which row is open is not controlled by DataTables,
                                 * rather it is done here
                                 */
                                $('#hidden-table-info tbody td img').live('click', function() {
                                    var nTr = $(this).parents('tr')[0];
                                    if (oTable.fnIsOpen(nTr)) {
                                        /* This row is already open - close it */
                                        this.src = "assets/js/advanced-datatable/examples/examples_support/details_open.png";
                                        oTable.fnClose(nTr);
                                    } else {
                                        /* Open this row */
                                        this.src = "assets/js/advanced-datatable/examples/examples_support/details_close.png";
                                        oTable.fnOpen(nTr, fnFormatDetails(oTable, nTr), 'details');
                                    }
                                });
                            });

                        </script>
                        <!--end chart-->
                        <!--</div>-->
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
        <script>
            //custom select box
            $(function() {
                $('select.styled').customSelect();
            });

        </script>

    </body>

    </html>