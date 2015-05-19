<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie9"><![endif]-->

<!-- Mirrored from byrushan.com/projects/ma/v1-3-1/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 May 2015 17:43:39 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Material Admin</title>

    <!-- Vendor CSS -->
    <link href="vendors/fullcalendar/fullcalendar.css" rel="stylesheet">
    <link href="vendors/animate-css/animate.min.css" rel="stylesheet">
    <link href="vendors/sweet-alert/sweet-alert.min.css" rel="stylesheet">
    <link href="vendors/material-icons/material-design-iconic-font.min.css" rel="stylesheet">
    <link href="vendors/socicon/socicon.min.css" rel="stylesheet">

    <!-- CSS -->
    <link href="css/app.min.1.css" rel="stylesheet">
    <link href="css/app.min.2.css" rel="stylesheet">

</head>
<body ng-app="laravelApiApp">
    <header id="header">
        <ul class="header-inner">
            <li id="menu-trigger" data-trigger="#sidebar">
                <div class="line-wrap">
                    <div class="line top"></div>
                    <div class="line center"></div>
                    <div class="line bottom"></div>
                </div>
            </li>

            <li class="logo hidden-xs">
                <a href="index-2.html">Material Admin</a>
            </li>

            <li class="pull-right">
                <ul class="top-menu">
                    <li id="toggle-width">
                        <div class="toggle-switch">
                            <input id="tw-switch" type="checkbox" hidden="hidden">
                            <label for="tw-switch" class="ts-helper"></label>
                        </div>
                    </li>
                    <li id="top-search">
                        <a class="tm-search" href="#"></a>
                    </li>
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="tm-message" href="#"><i class="tmn-counts">6</i></a>
                        <div class="dropdown-menu dropdown-menu-lg pull-right">
                            <div class="listview">
                                <div class="lv-header">
                                    Messages
                                </div>
                                <div class="lv-body c-overflow">
                                    <a class="lv-item" href="#">
                                        <div class="media">
                                            <div class="pull-left">
                                                <img class="lv-img-sm" src="img/profile-pics/1.jpg" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="lv-title">David Belle</div>
                                                <small class="lv-small">Cum sociis natoque penatibus et magnis dis parturient montes</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="lv-item" href="#">
                                        <div class="media">
                                            <div class="pull-left">
                                                <img class="lv-img-sm" src="img/profile-pics/2.jpg" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="lv-title">Jonathan Morris</div>
                                                <small class="lv-small">Nunc quis diam diamurabitur at dolor elementum, dictum turpis vel</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="lv-item" href="#">
                                        <div class="media">
                                            <div class="pull-left">
                                                <img class="lv-img-sm" src="img/profile-pics/3.jpg" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="lv-title">Fredric Mitchell Jr.</div>
                                                <small class="lv-small">Phasellus a ante et est ornare accumsan at vel magnauis blandit turpis at augue ultricies</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="lv-item" href="#">
                                        <div class="media">
                                            <div class="pull-left">
                                                <img class="lv-img-sm" src="img/profile-pics/4.jpg" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="lv-title">Glenn Jecobs</div>
                                                <small class="lv-small">Ut vitae lacus sem ellentesque maximus, nunc sit amet varius dignissim, dui est consectetur neque</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="lv-item" href="#">
                                        <div class="media">
                                            <div class="pull-left">
                                                <img class="lv-img-sm" src="img/profile-pics/4.jpg" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="lv-title">Bill Phillips</div>
                                                <small class="lv-small">Proin laoreet commodo eros id faucibus. Donec ligula quam, imperdiet vel ante placerat</small>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <a class="lv-footer" href="#">View All</a>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="tm-notification" href="#"><i class="tmn-counts">9</i></a>
                        <div class="dropdown-menu dropdown-menu-lg pull-right">
                            <div class="listview" id="notifications">
                                <div class="lv-header">
                                    Notification

                                    <ul class="actions">
                                        <li class="dropdown">
                                            <a href="#" data-clear="notification">
                                                <i class="md md-done-all"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="lv-body c-overflow">
                                    <a class="lv-item" href="#">
                                        <div class="media">
                                            <div class="pull-left">
                                                <img class="lv-img-sm" src="img/profile-pics/1.jpg" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="lv-title">David Belle</div>
                                                <small class="lv-small">Cum sociis natoque penatibus et magnis dis parturient montes</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="lv-item" href="#">
                                        <div class="media">
                                            <div class="pull-left">
                                                <img class="lv-img-sm" src="img/profile-pics/2.jpg" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="lv-title">Jonathan Morris</div>
                                                <small class="lv-small">Nunc quis diam diamurabitur at dolor elementum, dictum turpis vel</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="lv-item" href="#">
                                        <div class="media">
                                            <div class="pull-left">
                                                <img class="lv-img-sm" src="img/profile-pics/3.jpg" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="lv-title">Fredric Mitchell Jr.</div>
                                                <small class="lv-small">Phasellus a ante et est ornare accumsan at vel magnauis blandit turpis at augue ultricies</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="lv-item" href="#">
                                        <div class="media">
                                            <div class="pull-left">
                                                <img class="lv-img-sm" src="img/profile-pics/4.jpg" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="lv-title">Glenn Jecobs</div>
                                                <small class="lv-small">Ut vitae lacus sem ellentesque maximus, nunc sit amet varius dignissim, dui est consectetur neque</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="lv-item" href="#">
                                        <div class="media">
                                            <div class="pull-left">
                                                <img class="lv-img-sm" src="img/profile-pics/4.jpg" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="lv-title">Bill Phillips</div>
                                                <small class="lv-small">Proin laoreet commodo eros id faucibus. Donec ligula quam, imperdiet vel ante placerat</small>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <a class="lv-footer" href="#">View Previous</a>
                            </div>

                        </div>
                    </li>
                    <li class="dropdown hidden-xs">
                        <a data-toggle="dropdown" class="tm-task" href="#"><i class="tmn-counts">2</i></a>
                        <div class="dropdown-menu pull-right dropdown-menu-lg">
                            <div class="listview">
                                <div class="lv-header">
                                    Tasks
                                </div>
                                <div class="lv-body">
                                    <div class="lv-item">
                                        <div class="lv-title m-b-5">HTML5 Validation Report</div>

                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
                                                <span class="sr-only">95% Complete (success)</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="lv-item">
                                        <div class="lv-title m-b-5">Google Chrome Extension</div>

                                        <div class="progress">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                                <span class="sr-only">80% Complete (success)</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="lv-item">
                                        <div class="lv-title m-b-5">Social Intranet Projects</div>

                                        <div class="progress">
                                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                                <span class="sr-only">20% Complete</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="lv-item">
                                        <div class="lv-title m-b-5">Bootstrap Admin Template</div>

                                        <div class="progress">
                                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                                <span class="sr-only">60% Complete (warning)</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="lv-item">
                                        <div class="lv-title m-b-5">Youtube Client App</div>

                                        <div class="progress">
                                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                                <span class="sr-only">80% Complete (danger)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <a class="lv-footer" href="#">View All</a>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="tm-settings" href="#"></a>
                        <ul class="dropdown-menu dm-icon pull-right">
                            <li>
                                <a data-action="fullscreen" href="#"><i class="md md-fullscreen"></i> Toggle Fullscreen</a>
                            </li>
                            <li>
                                <a data-action="clear-localstorage" href="#"><i class="md md-delete"></i> Clear Local Storage</a>
                            </li>
                            <li>
                                <a href="#"><i class="md md-person"></i> Privacy Settings</a>
                            </li>
                            <li>
                                <a href="#"><i class="md md-settings"></i> Other Settings</a>
                            </li>
                        </ul>
                    </li>
                    <li class="hidden-xs" id="chat-trigger" data-trigger="#chat">
                        <a class="tm-chat" href="#"></a>
                    </li>
                </ul>
            </li>
        </ul>

        <!-- Top Search Content -->
        <div id="top-search-wrap">
            <input type="text">
            <i id="top-search-close">&times;</i>
        </div>
    </header>

    <section id="main">
        <aside id="sidebar">
            <div class="sidebar-inner">
                <div class="si-inner">
                    <div class="profile-menu">
                        <a href="#">
                            <div class="profile-pic">
                                <img src="img/profile-pics/1.jpg" alt="">
                            </div>

                            <div class="profile-info">
                                Malinda Hollaway

                                <i class="md md-arrow-drop-down"></i>
                            </div>
                        </a>

                        <ul class="main-menu">
                            <li>
                                <a href="profile-about.html"><i class="md md-person"></i> View Profile</a>
                            </li>
                            <li>
                                <a href="#"><i class="md md-settings-input-antenna"></i> Privacy Settings</a>
                            </li>
                            <li>
                                <a href="#"><i class="md md-settings"></i> Settings</a>
                            </li>
                            <li>
                                <a href="#"><i class="md md-history"></i> Logout</a>
                            </li>
                        </ul>
                    </div>

                    <ul class="main-menu">
                        <li class="active"><a href="index-2.html"><i class="md md-home"></i> Home</a></li>
                        <li><a href="typography.html"><i class="md md-format-underline"></i> Typography</a></li>
                        <li class="sub-menu">
                            <a href="#"><i class="md md-now-widgets"></i> Widgets</a>

                            <ul>
                                <li><a href="widget-templates.html">Templates</a></li>
                                <li><a class="active" href="widgets.html">Widgets</a></li>
                            </ul>
                        </li>
                        <li class="sub-menu">
                            <a href="#"><i class="md md-view-list"></i> Tables</a>

                            <ul>
                                <li><a href="tables.html">Normal Tables</a></li>
                                <li><a href="data-tables.html">Data Tables</a></li>
                            </ul>
                        </li>
                        <li class="sub-menu">
                            <a href="#"><i class="md md-my-library-books"></i> Forms</a>

                            <ul>
                                <li><a href="form-elements.html">Basic Form Elements</a></li>
                                <li><a href="form-components.html">Form Components</a></li>
                                <li><a href="form-examples.html">Form Examples</a></li>
                                <li><a href="form-validations.html">Form Validation</a></li>
                            </ul>
                        </li>
                        <li class="sub-menu">
                            <a href="#"><i class="md md-swap-calls"></i>User Interface</a>
                            <ul>
                                <li><a href="colors.html">Colors</a></li>
                                <li><a href="animations.html">Animations</a></li>
                                <li><a href="box-shadow.html">Box Shadow</a></li>
                                <li><a href="buttons.html">Buttons</a></li>
                                <li><a href="icons.html">Icons</a></li>
                                <li><a href="alerts.html">Alerts</a></li>
                                <li><a href="notification-dialog.html">Notifications & Dialogs</a></li>
                                <li><a href="media.html">Media</a></li>
                                <li><a href="components.html">Components</a></li>
                                <li><a href="other-components.html">Others</a></li>
                            </ul>
                        </li>
                        <li class="sub-menu">
                            <a href="#"><i class="md md-trending-up"></i>Charts</a>
                            <ul>
                                <li><a href="flot-charts.html">Flot Charts</a></li>
                                <li><a href="other-charts.html">Other Charts</a></li>
                            </ul>
                        </li>
                        <li><a href="calendar.html"><i class="md md-today"></i> Calendar</a></li>
                        <li><a href="generic-classes.html"><i class="md md-layers"></i> Generic Classes</a></li>
                        <li class="sub-menu">
                            <a href="#"><i class="md md-content-copy"></i> Sample Pages</a>
                            <ul>
                                <li><a href="profile-about.html">Profile</a></li>
                                <li><a href="list-view.html">List View</a></li>
                                <li><a href="messages.html">Messages</a></li>
                                <li><a href="login.html">Login and Sign Up</a></li>
                                <li><a href="404.html">Error 404</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </aside>

        <aside id="chat">
            <ul class="tab-nav tn-justified" role="tablist">
                <li role="presentation" class="active"><a href="#friends" aria-controls="friends" role="tab" data-toggle="tab">Friends</a></li>
                <li role="presentation"><a href="#online" aria-controls="online" role="tab" data-toggle="tab">Online Now</a></li>
            </ul>

            <div class="chat-search">
                <div class="fg-line">
                    <input type="text" class="form-control" placeholder="Search People">
                </div>
            </div>

            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active" id="friends">
                    <div class="listview">
                        <a class="lv-item" href="#">
                            <div class="media">
                                <div class="pull-left p-relative">
                                    <img class="lv-img-sm" src="img/profile-pics/2.jpg" alt="">
                                    <i class="chat-status-busy"></i>
                                </div>
                                <div class="media-body">
                                    <div class="lv-title">Jonathan Morris</div>
                                    <small class="lv-small">Available</small>
                                </div>
                            </div>
                        </a>

                        <a class="lv-item" href="#">
                            <div class="media">
                                <div class="pull-left">
                                    <img class="lv-img-sm" src="img/profile-pics/1.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <div class="lv-title">David Belle</div>
                                    <small class="lv-small">Last seen 3 hours ago</small>
                                </div>
                            </div>
                        </a>

                        <a class="lv-item" href="#">
                            <div class="media">
                                <div class="pull-left p-relative">
                                    <img class="lv-img-sm" src="img/profile-pics/3.jpg" alt="">
                                    <i class="chat-status-online"></i>
                                </div>
                                <div class="media-body">
                                    <div class="lv-title">Fredric Mitchell Jr.</div>
                                    <small class="lv-small">Availble</small>
                                </div>
                            </div>
                        </a>

                        <a class="lv-item" href="#">
                            <div class="media">
                                <div class="pull-left p-relative">
                                    <img class="lv-img-sm" src="img/profile-pics/4.jpg" alt="">
                                    <i class="chat-status-online"></i>
                                </div>
                                <div class="media-body">
                                    <div class="lv-title">Glenn Jecobs</div>
                                    <small class="lv-small">Availble</small>
                                </div>
                            </div>
                        </a>

                        <a class="lv-item" href="#">
                            <div class="media">
                                <div class="pull-left">
                                    <img class="lv-img-sm" src="img/profile-pics/5.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <div class="lv-title">Bill Phillips</div>
                                    <small class="lv-small">Last seen 3 days ago</small>
                                </div>
                            </div>
                        </a>

                        <a class="lv-item" href="#">
                            <div class="media">
                                <div class="pull-left">
                                    <img class="lv-img-sm" src="img/profile-pics/6.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <div class="lv-title">Wendy Mitchell</div>
                                    <small class="lv-small">Last seen 2 minutes ago</small>
                                </div>
                            </div>
                        </a>
                        <a class="lv-item" href="#">
                            <div class="media">
                                <div class="pull-left p-relative">
                                    <img class="lv-img-sm" src="img/profile-pics/7.jpg" alt="">
                                    <i class="chat-status-busy"></i>
                                </div>
                                <div class="media-body">
                                    <div class="lv-title">Teena Bell Ann</div>
                                    <small class="lv-small">Busy</small>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="online">
                    <div class="listview">
                        <a class="lv-item" href="#">
                            <div class="media">
                                <div class="pull-left p-relative">
                                    <img class="lv-img-sm" src="img/profile-pics/2.jpg" alt="">
                                    <i class="chat-status-busy"></i>
                                </div>
                                <div class="media-body">
                                    <div class="lv-title">Jonathan Morris</div>
                                    <small class="lv-small">Available</small>
                                </div>
                            </div>
                        </a>

                        <a class="lv-item" href="#">
                            <div class="media">
                                <div class="pull-left p-relative">
                                    <img class="lv-img-sm" src="img/profile-pics/3.jpg" alt="">
                                    <i class="chat-status-online"></i>
                                </div>
                                <div class="media-body">
                                    <div class="lv-title">Fredric Mitchell Jr.</div>
                                    <small class="lv-small">Availble</small>
                                </div>
                            </div>
                        </a>

                        <a class="lv-item" href="#">
                            <div class="media">
                                <div class="pull-left p-relative">
                                    <img class="lv-img-sm" src="img/profile-pics/4.jpg" alt="">
                                    <i class="chat-status-online"></i>
                                </div>
                                <div class="media-body">
                                    <div class="lv-title">Glenn Jecobs</div>
                                    <small class="lv-small">Availble</small>
                                </div>
                            </div>
                        </a>

                        <a class="lv-item" href="#">
                            <div class="media">
                                <div class="pull-left p-relative">
                                    <img class="lv-img-sm" src="img/profile-pics/7.jpg" alt="">
                                    <i class="chat-status-busy"></i>
                                </div>
                                <div class="media-body">
                                    <div class="lv-title">Teena Bell Ann</div>
                                    <small class="lv-small">Busy</small>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </aside>


        <section id="content">
            <div class="container" ng-controller="marcaController">
                <div class="card">
                    <div class="card-header">
                        <button class="btn btn-default" ng-click="saveTest()">Save</button>
                        <button class="btn btn-default" ng-click="getTest()">Get</button>
                    </div>

                    <div class="card">
                        <div class="card-header">
                        </div>

                        <div class="card-body card-padding">
                            <form class="row" role="form" ng-submit="submitMarca()">
                                <div class="col-sm-4">
                                    <div class="form-group fg-line">
                                        <label class="sr-only" for="exampleInputEmail2">Nombre</label>
                                        <input type="text" class="form-control input-sm" id="exampleInputEmail2" placeholder="Nombre de la marca" ng-model="marcaData.name">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <h2></h2>
                                    <button type="submit" class="btn btn-primary btn-sm m-t-5 waves-effect waves-button waves-float">Create</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div id="data-table-basic-header" class="bootgrid-header container-fluid">
                        <div class="row">
                            <div class="col-sm-12 actionBar">
                                <div class="search form-group">
                                    <div class="input-group">
                                        <span class="md icon input-group-addon glyphicon-search"></span> 
                                        <input type="text" class="search-field form-control" placeholder="Search" ng-model="search">
                                    </div>
                                </div>
                                <div class="actions btn-group">
                                    <div class="dropdown btn-group">
                                        <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
                                            <span class="dropdown-text">10</span>
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu pull-right" role="menu">
                                            <li class="active" aria-selected="true">
                                                <a href="#10" class="dropdown-item dropdown-item-button">10</a>
                                            </li>
                                            <li aria-selected="false">
                                                <a href="#25" class="dropdown-item dropdown-item-button">25</a>
                                            </li>
                                            <li aria-selected="false">
                                                <a href="#50" class="dropdown-item dropdown-item-button">50</a>
                                            </li><li aria-selected="false">
                                                <a href="#-1" class="dropdown-item dropdown-item-button">All</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="dropdown btn-group"><button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown"><span class="dropdown-text"><span class="md icon md-view-module"></span></span> <span class="caret"></span></button>
                                        <ul class="dropdown-menu pull-right" role="menu">
                                            <li>
                                                <div class="checkbox">
                                                    <label class="dropdown-item">
                                                        <input name="id" type="checkbox" value="1" class="dropdown-item-checkbox" checked="checked"><i class="input-helper"></i> ID</label>
                                                </div>
                                            </li><li>
                                                <div class="checkbox"><label class="dropdown-item"><input name="sender" type="checkbox" value="1" class="dropdown-item-checkbox" checked="checked"><i class="input-helper"></i> Sender</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox"><label class="dropdown-item"><input name="received" type="checkbox" value="1" class="dropdown-item-checkbox" checked="checked"><i class="input-helper"></i> Received</label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive" tabindex="0" style="overflow: hidden; outline: none;">
                        <table id="data-table-basic" class="table table-striped bootgrid-table" aria-busy="false">
                            <thead>
                                <tr>
                                    <th data-column-id="id" class="text-left"><a href="javascript:void(0);" class="column-header-anchor sortable"><span class="text">ID</span><span class="md icon"></span></a></th>
                                    <th data-column-id="name" class="text-left"><a href="javascript:void(0);" class="column-header-anchor sortable"><span class="text">Nombre</span><span class="md icon"></span></a></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr data-row-id="0" ng-repeat="marca in marcas| filter:search">
                                    <td class="text-left">{{ marca.id}}</td>
                                    <td class="text-left">{{ marca.name}}</td>
                                    <td><ul class="actions"><li><a href="#" ng-click="deleteMarca(marca.id, $event)"><i class="md md-close"></i></a></li></ul></td>
                                </tr>
                            </tbody>
                        </table>
                    </div><div id="data-table-basic-footer" class="bootgrid-footer container-fluid"><div class="row"><div class="col-sm-6"><ul class="pagination"><li class="first disabled" aria-disabled="true"><a href="#first" class="button"><i class="md md-more-horiz"></i></a></li><li class="prev disabled" aria-disabled="true"><a href="#prev" class="button"><i class="md md-chevron-left"></i></a></li><li class="page-1 active" aria-disabled="false" aria-selected="true"><a href="#1" class="button">1</a></li><li class="page-2" aria-disabled="false" aria-selected="false"><a href="#2" class="button">2</a></li><li class="next" aria-disabled="false"><a href="#next" class="button"><i class="md md-chevron-right"></i></a></li><li class="last" aria-disabled="false"><a href="#last" class="button"><i class="md md-more-horiz"><i></i></i></a></li></ul></div><div class="col-sm-6 infoBar"><div class="infos">Showing 1 to 10 of 20 entries</div></div></div></div>
                </div>
            </div>
        </section>
    </section>

    <!-- Older IE warning message -->
    <!--[if lt IE 9]>
        <div class="ie-warning">
            <h1 class="c-white">IE SUCKS!</h1>
            <p>You are using an outdated version of Internet Explorer, upgrade to any of the following web browser <br/>in order to access the maximum functionality of this website. </p>
            <ul class="iew-download">
                <li>
                    <a href="http://www.google.com/chrome/">
                        <img src="img/browsers/chrome.png" alt="">
                        <div>Chrome</div>
                    </a>
                </li>
                <li>
                    <a href="https://www.mozilla.org/en-US/firefox/new/">
                        <img src="img/browsers/firefox.png" alt="">
                        <div>Firefox</div>
                    </a>
                </li>
                <li>
                    <a href="http://www.opera.com">
                        <img src="img/browsers/opera.png" alt="">
                        <div>Opera</div>
                    </a>
                </li>
                <li>
                    <a href="https://www.apple.com/safari/">
                        <img src="img/browsers/safari.png" alt="">
                        <div>Safari</div>
                    </a>
                </li>
                <li>
                    <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                        <img src="img/browsers/ie.png" alt="">
                        <div>IE (New)</div>
                    </a>
                </li>
            </ul>
            <p>Upgrade your browser for a Safer and Faster web experience. <br/>Thank you for your patience...</p>
        </div>   
    <![endif]-->

    <!-- Javascript Libraries -->
    <script src="js/jquery-2.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <!-- AngularJS -->

    <!-- JS -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.25/angular-route.js"></script>
    <script src="bower_components/ngstorage/ngStorage.min.js"></script>
    <!-- load angular -->

    <!-- ANGULAR -->
    <!-- all angular resources will be loaded from the /public folder -->
    <script src="js/controllers/marcaController.js"></script>
    <script src="js/controllers/programaController.js"></script>
    <script src="js/controllers/personajeController.js"></script>

    <!-- load our controller -->
    <script src="js/services/marcaService.js"></script>
    <script src="js/services/personajeService.js"></script>
    <script src="js/services/programaService.js"></script>
    <script src="js/services/mainService.js"></script>
    <!-- load our service -->
    <script src="js/app.js"></script>
    <!-- load our application -->

    <script src="vendors/flot/jquery.flot.min.js"></script>
    <script src="vendors/flot/jquery.flot.resize.min.js"></script>
    <script src="vendors/flot/plugins/curvedLines.js"></script>
    <script src="vendors/sparklines/jquery.sparkline.min.js"></script>
    <script src="vendors/easypiechart/jquery.easypiechart.min.js"></script>

    <script src="vendors/fullcalendar/lib/moment.min.js"></script>
    <script src="vendors/fullcalendar/fullcalendar.min.js"></script>
    <script src="vendors/simpleWeather/jquery.simpleWeather.min.js"></script>
    <script src="vendors/auto-size/jquery.autosize.min.js"></script>
    <script src="vendors/nicescroll/jquery.nicescroll.min.js"></script>
    <script src="vendors/waves/waves.min.js"></script>
    <script src="vendors/bootstrap-growl/bootstrap-growl.min.js"></script>
    <script src="vendors/sweet-alert/sweet-alert.min.js"></script>

    <script src="js/flot-charts/curved-line-chart.js"></script>
    <script src="js/flot-charts/line-chart.js"></script>
    <script src="js/charts.js"></script>

    <script src="js/charts.js"></script>
    <script src="js/functions.js"></script>
    <script src="js/demo.js"></script>
    
</body>

<!-- Mirrored from byrushan.com/projects/ma/v1-3-1/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 May 2015 17:44:37 GMT -->
</html>