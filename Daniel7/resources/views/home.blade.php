@extends('layouts.app')
@section('title', 'Daniel ')
@section('content')
    <div class="content-i">
        <div class="content-box">
            <div class="pipelines-w">
                <div class="row">
                    <div class="col-lg-12">
                        <h4>Patients</h4>
                    </div>
                    <div class="col-lg-5">
                        <div class="btn btn-white mr-1 mb-2">
                            <div class="status-pill green" data-title="Complete" data-toggle="tooltip"
                                data-original-title="" title=""></div> In Range
                        </div>
                        <div class="btn btn-white mr-1 mb-2">
                            <div class="status-pill red" data-title="Complete" data-toggle="tooltip" data-original-title=""
                                title=""></div> Out Of Range
                        </div>
                        <div class="btn btn-white mr-1 mb-2 floated-customizer-btn third-floated-btn">
                            Filter <i class="os-icon os-icon-sliders"></i>
                        </div>

                        <div class="floated-customizer-panel">
                            <div class="fcp-content">
                                <div class="close-customizer-btn"><i class="os-icon os-icon-x"></i></div>
                                <img src="{{ 'assets/img/image.png' }}" alt="">
                            </div>
                        </div>
                        <div class="btn btn-white mr-1 mb-2">
                            Export <i class="os-icon os-icon-share-2"></i>
                        </div>
                        <div class="">
                            <div class="pipeline-body">
                                <div class="pipeline-item">
                                    <div class="pi-body">
                                        <div class="status-pill red" data-title="Complete" data-toggle="tooltip"
                                            data-original-title="" title=""></div>
                                        <!-- <div class="avatar"><img alt="" src="{{ 'assets/img/avatar1.jpg' }}"></div> -->
                                        <div class="pi-info">
                                            <div class="h6 pi-name">Better Pharmacy</div>
                                            <div class="pi-sub">John Mayers</div>
                                        </div>
                                        <div class="pi-controls">
                                            <span>Vital Status</span><br><br>
                                            <div class="pi-settings"><i class="fa fa-address-book-o"></i>
                                            </div>
                                            <div class="pi-settings"><i class="os-icon os-icon-droplet"></i>
                                            </div>
                                            <div class="pi-settings"><i class="os-icon os-icon-activity"></i></div>
                                            <div class="pi-settings icon-red"><i class="fa fa-heart"></i>
                                            </div>
                                            <div class="pi-settings os-dropdown-trigger blue">
                                                <i class="os-icon os-icon-ui-46"></i>
                                                <div class="os-dropdown">
                                                    <div class="icon-w"><i class="os-icon os-icon-ui-46"></i></div>
                                                    <ul>
                                                        <li><a href="#"><i class="os-icon os-icon-ui-49"></i><span>Edit
                                                                    Record</span></a></li>
                                                        <li><a href="#"><i
                                                                    class="os-icon os-icon-grid-10"></i><span>Duplicate
                                                                    Item</span></a>
                                                        </li>
                                                        <li><a href="#"><i class="os-icon os-icon-ui-15"></i><span>Remove
                                                                    Item</span></a></li>
                                                        <li><a href="#"><i class="os-icon os-icon-ui-44"></i><span>Archive
                                                                    Project</span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pipeline-item">
                                    <div class="pi-body">
                                        <div class="status-pill red" data-title="Complete" data-toggle="tooltip"
                                            data-original-title="" title=""></div>
                                        <!-- <div class="avatar"><img alt="" src="{{ 'assets/img/avatar1.jpg' }}"></div> -->
                                        <div class="pi-info">
                                            <div class="h6 pi-name">Better Pharmacy</div>
                                            <div class="pi-sub">John Mayers</div>
                                        </div>
                                        <div class="pi-controls">
                                            <span>Vital Status</span><br><br>
                                            <div class="pi-settings"><i class="fa fa-address-book-o"></i>
                                            </div>
                                            <div class="pi-settings"><i class="os-icon os-icon-droplet"></i>
                                            </div>
                                            <div class="pi-settings"><i class="os-icon os-icon-activity"></i></div>
                                            <div class="pi-settings icon-blue"><i class="fa fa-heart"></i>
                                            </div>
                                            <div class="pi-settings os-dropdown-trigger blue">
                                                <i class="os-icon os-icon-ui-46"></i>
                                                <div class="os-dropdown">
                                                    <div class="icon-w"><i class="os-icon os-icon-ui-46"></i></div>
                                                    <ul>
                                                        <li><a href="#"><i class="os-icon os-icon-ui-49"></i><span>Edit
                                                                    Record</span></a></li>
                                                        <li><a href="#"><i
                                                                    class="os-icon os-icon-grid-10"></i><span>Duplicate
                                                                    Item</span></a>
                                                        </li>
                                                        <li><a href="#"><i class="os-icon os-icon-ui-15"></i><span>Remove
                                                                    Item</span></a></li>
                                                        <li><a href="#"><i class="os-icon os-icon-ui-44"></i><span>Archive
                                                                    Project</span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pipeline-item">
                                    <div class="pi-body">
                                        <div class="status-pill red" data-title="Complete" data-toggle="tooltip"
                                            data-original-title="" title=""></div>
                                        <!-- <div class="avatar"><img alt="" src="{{ 'assets/img/avatar1.jpg' }}"></div> -->
                                        <div class="pi-info">
                                            <div class="h6 pi-name">Better Pharmacy</div>
                                            <div class="pi-sub">John Mayers</div>
                                        </div>
                                        <div class="pi-controls">
                                            <span>Vital Status</span><br><br>
                                            <div class="pi-settings"><i class="fa fa-address-book-o"></i>
                                            </div>
                                            <div class="pi-settings icon-red"><i class="fa fa-tint"></i>
                                            </div>
                                            <div class="pi-settings"><i class="os-icon os-icon-activity"></i></div>
                                            <div class="pi-settings icon-blue"><i class="fa fa-heart"></i>
                                            </div>
                                            <div class="pi-settings os-dropdown-trigger blue">
                                                <i class="os-icon os-icon-ui-46"></i>
                                                <div class="os-dropdown">
                                                    <div class="icon-w"><i class="os-icon os-icon-ui-46"></i></div>
                                                    <ul>
                                                        <li><a href="#"><i class="os-icon os-icon-ui-49"></i><span>Edit
                                                                    Record</span></a></li>
                                                        <li><a href="#"><i
                                                                    class="os-icon os-icon-grid-10"></i><span>Duplicate
                                                                    Item</span></a>
                                                        </li>
                                                        <li><a href="#"><i class="os-icon os-icon-ui-15"></i><span>Remove
                                                                    Item</span></a></li>
                                                        <li><a href="#"><i class="os-icon os-icon-ui-44"></i><span>Archive
                                                                    Project</span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pipeline-item">
                                    <div class="pi-body">
                                        <div class="status-pill" data-title="Complete" data-toggle="tooltip"
                                            data-original-title="" title=""></div>
                                        <!-- <div class="avatar"><img alt="" src="{{ 'assets/img/avatar1.jpg' }}"></div> -->
                                        <div class="pi-info">
                                            <div class="h6 pi-name">Better Pharmacy</div>
                                            <div class="pi-sub">John Mayers</div>
                                        </div>
                                        <div class="pi-controls">
                                            <span>Vital Status</span><br><br>
                                            <div class="pi-settings"><i class="fa fa-address-book-o"></i>
                                            </div>
                                            <div class="pi-settings"><i class="os-icon os-icon-droplet"></i>
                                            </div>
                                            <div class="pi-settings"><i class="os-icon os-icon-activity"></i></div>
                                            <div class="pi-settings icon-blue"><i class="fa fa-heart"></i>
                                            </div>
                                            <div class="pi-settings os-dropdown-trigger blue">
                                                <i class="os-icon os-icon-ui-46"></i>
                                                <div class="os-dropdown">
                                                    <div class="icon-w"><i class="os-icon os-icon-ui-46"></i></div>
                                                    <ul>
                                                        <li><a href="#"><i class="os-icon os-icon-ui-49"></i><span>Edit
                                                                    Record</span></a></li>
                                                        <li><a href="#"><i
                                                                    class="os-icon os-icon-grid-10"></i><span>Duplicate
                                                                    Item</span></a>
                                                        </li>
                                                        <li><a href="#"><i class="os-icon os-icon-ui-15"></i><span>Remove
                                                                    Item</span></a></li>
                                                        <li><a href="#"><i class="os-icon os-icon-ui-44"></i><span>Archive
                                                                    Project</span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pipeline-item">
                                    <div class="pi-body">
                                        <div class="status-pill green" data-title="Complete" data-toggle="tooltip"
                                            data-original-title="" title=""></div>
                                        <!-- <div class="avatar"><img alt="" src="{{ 'assets/img/avatar1.jpg' }}"></div> -->
                                        <div class="pi-info">
                                            <div class="h6 pi-name">Better Pharmacy</div>
                                            <div class="pi-sub">John Mayers</div>
                                        </div>
                                        <div class="pi-controls">
                                            <span>Vital Status</span><br><br>
                                            <div class="pi-settings"><i class="fa fa-address-book-o"></i>
                                            </div>
                                            <div class="pi-settings icon-green"><i class="fa fa-tint"></i>
                                            </div>
                                            <div class="pi-settings blue"><i class="os-icon os-icon-activity"></i></div>
                                            <div class="pi-settings icon-blue"><i class="fa fa-heart"></i>
                                            </div>
                                            <div class="pi-settings os-dropdown-trigger blue">
                                                <i class="os-icon os-icon-ui-46"></i>
                                                <div class="os-dropdown">
                                                    <div class="icon-w"><i class="os-icon os-icon-ui-46"></i></div>
                                                    <ul>
                                                        <li><a href="#"><i class="os-icon os-icon-ui-49"></i><span>Edit
                                                                    Record</span></a></li>
                                                        <li><a href="#"><i
                                                                    class="os-icon os-icon-grid-10"></i><span>Duplicate
                                                                    Item</span></a>
                                                        </li>
                                                        <li><a href="#"><i class="os-icon os-icon-ui-15"></i><span>Remove
                                                                    Item</span></a></li>
                                                        <li><a href="#"><i class="os-icon os-icon-ui-44"></i><span>Archive
                                                                    Project</span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pipeline-item">
                                    <div class="pi-body">
                                        <div class="status-pill red" data-title="Complete" data-toggle="tooltip"
                                            data-original-title="" title=""></div>
                                        <!-- <div class="avatar"><img alt="" src="{{ 'assets/img/avatar1.jpg' }}"></div> -->
                                        <div class="pi-info">
                                            <div class="h6 pi-name">Better Pharmacy</div>
                                            <div class="pi-sub">John Mayers</div>
                                        </div>
                                        <div class="pi-controls">
                                            <span>Vital Status</span><br><br>
                                            <div class="pi-settings"><i class="fa fa-address-book-o"></i>
                                            </div>
                                            <div class="pi-settings"><i class="os-icon os-icon-droplet"></i>
                                            </div>
                                            <div class="pi-settings"><i class="os-icon os-icon-activity"></i></div>
                                            <div class="pi-settings icon-red"><i class="fa fa-heart"></i>
                                            </div>
                                            <div class="pi-settings os-dropdown-trigger blue">
                                                <i class="os-icon os-icon-ui-46"></i>
                                                <div class="os-dropdown">
                                                    <div class="icon-w"><i class="os-icon os-icon-ui-46"></i></div>
                                                    <ul>
                                                        <li><a href="#"><i class="os-icon os-icon-ui-49"></i><span>Edit
                                                                    Record</span></a></li>
                                                        <li><a href="#"><i
                                                                    class="os-icon os-icon-grid-10"></i><span>Duplicate
                                                                    Item</span></a>
                                                        </li>
                                                        <li><a href="#"><i class="os-icon os-icon-ui-15"></i><span>Remove
                                                                    Item</span></a></li>
                                                        <li><a href="#"><i class="os-icon os-icon-ui-44"></i><span>Archive
                                                                    Project</span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pipeline-item">
                                    <div class="pi-body">
                                        <div class="status-pill red" data-title="Complete" data-toggle="tooltip"
                                            data-original-title="" title=""></div>
                                        <!-- <div class="avatar"><img alt="" src="{{ 'assets/img/avatar1.jpg' }}"></div> -->
                                        <div class="pi-info">
                                            <div class="h6 pi-name">Better Pharmacy</div>
                                            <div class="pi-sub">John Mayers</div>
                                        </div>
                                        <div class="pi-controls">
                                            <span>Vital Status</span><br><br>
                                            <div class="pi-settings icon-red"><i class="fa fa-address-book"></i></div>
                                            <div class="pi-settings icon-blue"><i class="fa fa-tint"></i>
                                            </div>
                                            <div class="pi-settings"><i class="os-icon os-icon-activity"></i></div>
                                            <div class="pi-settings icon-blue"><i class="fa fa-heart"></i>
                                            </div>
                                            <div class="pi-settings os-dropdown-trigger blue">
                                                <i class="os-icon os-icon-ui-46"></i>
                                                <div class="os-dropdown">
                                                    <div class="icon-w"><i class="os-icon os-icon-ui-46"></i></div>
                                                    <ul>
                                                        <li><a href="#"><i class="os-icon os-icon-ui-49"></i><span>Edit
                                                                    Record</span></a></li>
                                                        <li><a href="#"><i
                                                                    class="os-icon os-icon-grid-10"></i><span>Duplicate
                                                                    Item</span></a>
                                                        </li>
                                                        <li><a href="#"><i class="os-icon os-icon-ui-15"></i><span>Remove
                                                                    Item</span></a></li>
                                                        <li><a href="#"><i class="os-icon os-icon-ui-44"></i><span>Archive
                                                                    Project</span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pipeline-item">
                                    <div class="pi-body">
                                        <div class="status-pill" data-title="Complete" data-toggle="tooltip"
                                            data-original-title="" title=""></div>
                                        <!-- <div class="avatar"><img alt="" src="{{ 'assets/img/avatar1.jpg' }}"></div> -->
                                        <div class="pi-info">
                                            <div class="h6 pi-name">Better Pharmacy</div>
                                            <div class="pi-sub">John Mayers</div>
                                        </div>
                                        <div class="pi-controls">
                                            <span>Vital Status</span><br><br>
                                            <div class="pi-settings"><i class="fa fa-address-book-o"></i>
                                            </div>
                                            <div class="pi-settings"><i class="os-icon os-icon-droplet"></i>
                                            </div>
                                            <div class="pi-settings"><i class="os-icon os-icon-activity"></i></div>
                                            <div class="pi-settings icon-blue"><i class="fa fa-heart"></i>
                                            </div>
                                            <div class="pi-settings os-dropdown-trigger blue">
                                                <i class="os-icon os-icon-ui-46"></i>
                                                <div class="os-dropdown">
                                                    <div class="icon-w"><i class="os-icon os-icon-ui-46"></i></div>
                                                    <ul>
                                                        <li><a href="#"><i class="os-icon os-icon-ui-49"></i><span>Edit
                                                                    Record</span></a></li>
                                                        <li><a href="#"><i
                                                                    class="os-icon os-icon-grid-10"></i><span>Duplicate
                                                                    Item</span></a>
                                                        </li>
                                                        <li><a href="#"><i class="os-icon os-icon-ui-15"></i><span>Remove
                                                                    Item</span></a></li>
                                                        <li><a href="#"><i class="os-icon os-icon-ui-44"></i><span>Archive
                                                                    Project</span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pipeline-item">
                                    <div class="pi-body">
                                        <div class="status-pill red" data-title="Complete" data-toggle="tooltip"
                                            data-original-title="" title=""></div>
                                        <!-- <div class="avatar"><img alt="" src="{{ 'assets/img/avatar1.jpg' }}"></div> -->
                                        <div class="pi-info">
                                            <div class="h6 pi-name">Better Pharmacy</div>
                                            <div class="pi-sub">John Mayers</div>
                                        </div>
                                        <div class="pi-controls">
                                            <span>Vital Status</span><br><br>
                                            <div class="pi-settings"><i class="fa fa-address-book-o"></i>
                                            </div>
                                            <div class="pi-settings"><i class="os-icon os-icon-droplet"></i>
                                            </div>
                                            <div class="pi-settings"><i class="os-icon os-icon-activity"></i></div>
                                            <div class="pi-settings icon-red"><i class="fa fa-heart"></i>
                                            </div>
                                            <div class="pi-settings os-dropdown-trigger blue">
                                                <i class="os-icon os-icon-ui-46"></i>
                                                <div class="os-dropdown">
                                                    <div class="icon-w"><i class="os-icon os-icon-ui-46"></i></div>
                                                    <ul>
                                                        <li><a href="#"><i class="os-icon os-icon-ui-49"></i><span>Edit
                                                                    Record</span></a></li>
                                                        <li><a href="#"><i
                                                                    class="os-icon os-icon-grid-10"></i><span>Duplicate
                                                                    Item</span></a>
                                                        </li>
                                                        <li><a href="#"><i class="os-icon os-icon-ui-15"></i><span>Remove
                                                                    Item</span></a></li>
                                                        <li><a href="#"><i class="os-icon os-icon-ui-44"></i><span>Archive
                                                                    Project</span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="aec-full-message-w">
                            <div class="aec-full-message">
                                <div class="message-head">
                                    <div class="user-w with-status status-green">
                                        <div class="user-avatar-w">
                                            <div class="user-avatar"><img alt="" src="{{ 'assets/img/avatar1.jpg' }}">
                                            </div>
                                        </div>
                                        <div class="user-name">
                                            <div class="user-role"><i class="fa fa-clock-o"></i><span>02:30
                                                    Hours Left</span>
                                                <span class="text-purpule">See Time Log</span>
                                            </div>
                                            <h6 class="user-title text-purpule">John Mayers</h6>
                                            <div class="user-role">34 Years<span>| emale</span></div>
                                        </div>
                                    </div>
                                    <div class="message-info">
                                        <span class="btn "><i class="fa fa fa-comment"></i></span>
                                        <span class="btn "> <i class="fa fa-video-camera"></i></span>
                                        <span class="btn pr-btn">Visit Logs</span>
                                        <span class="btn pr-btn">Assign <i class="fa fa fa-cog"></i></span><br><br>
                                        <span> January 16th, 2021 1:24pm</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12 d-flex bg-white pt-2">
                                <div class="col-sm-3">

                                    <div class="balance-title text-purpule"><i class="fa fa-heart"></i>
                                        Heart Bet
                                        Pressure</div>
                                    <div class="balance-title2">7 Day Ago</div>
                                    <div class="balance-value"><span class="text-danger">120/80</span><span
                                            class="title3 text-danger"><i class="os-icon os-icon-arrow-up2"></i></span>
                                    </div>
                                    <div class="balance-title3">5 Hours Ago</div>
                                    <div class="balance-title2">May 23:09 AM</div>

                                </div>
                                <div class="col-sm-3">

                                    <div class="balance-title text-purpule"><i class="os-icon os-icon-activity"></i>
                                        Heart Bet</div>
                                    <div class="balance-title2">7 Day Ago</div>
                                    <div class="balance-value"><span class="text-success">76</span><span
                                            class="title3 text-success"><i class="os-icon os-icon-arrow-down"></i></span>
                                    </div>
                                    <div class="balance-title3">4 Day Ago</div>

                                </div>
                                <div class="col-sm-3">

                                    <div class="balance-title text-purpule"><i class="fa fa-address-book-o"></i> Weight
                                    </div>
                                    <div class="balance-title2">12 Day Ago</div>
                                    <div class="balance-title3">Wating</div>

                                </div>
                                <div class="col-sm-2">

                                    <div class="balance-title text-purpule"><i class="fa fa-tint"></i> Bload
                                    </div>
                                    <div class="balance-title2">2 Day Ago</div>
                                    <div class="balance-title3">Wating</div>

                                </div>
                            </div>
                            <div class="element-box">
                                <div class="os-tabs-w">
                                    <div class="element-actions d-none d-sm-block">
                                        <form class="form-inline justify-content-sm-end"><label class="smaller" for="">See
                                                Logs</label>
                                        </form>
                                    </div>
                                    <h6 class="element-box-header">Balance History</h6>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab_overview">
                                            <div class="el-chart-w">
                                                <div class="chartjs-size-monitor">
                                                    <div class="chartjs-size-monitor-expand">
                                                        <div class=""></div>
                                                    </div>
                                                    <div class="chartjs-size-monitor-shrink">
                                                        <div class=""></div>
                                                    </div>
                                                </div>
                                                <canvas height="168" id="lineChart" width="675"
                                                    style="display: block; width: 675px; height: 168px;"
                                                    class="chartjs-render-monitor"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="">
                                <div class="element-box">
                                    <div class="element-actions d-none d-sm-block">
                                        <form class="form-inline justify-content-sm-end"><label class="smaller" for="">See
                                                Logs</label>
                                        </form>
                                    </div>
                                    <h6 class="element-box-header">Balance History</h6>
                                    <div class="el-chart-w">
                                        <div class="chartjs-size-monitor">
                                            <div class="chartjs-size-monitor-expand">
                                                <div class=""></div>
                                            </div>
                                            <div class="chartjs-size-monitor-shrink">
                                                <div class=""></div>
                                            </div>
                                        </div>
                                        <canvas data-chart-data="13,28,19,24,43,49,40,35,42,46,38,32,45" height="107"
                                            id="liteLineChartV3" width="642"
                                            style="display: block; width: 642px; height: 107px;"
                                            class="chartjs-render-monitor"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
