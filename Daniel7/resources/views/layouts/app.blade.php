<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>@yield('title')</title>
    <meta charset="utf-8" />
    <meta content="ie=edge" http-equiv="x-ua-compatible" />
    <meta content="width=device-width,initial-scale=1" name="viewport" />
    <link href="{{ asset('assets/favicon.png') }}" rel="shortcut icon" />
    <link href="{{ asset('assets/apple-touch-icon.png') }}" rel="apple-touch-icon" />
    <link href="{{ asset('assets/icon_fonts_assets/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/bower_components/select2/dist/css/select2.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/bower_components/bootstrap-daterangepicker/daterangepicker.css') }}"
        rel="stylesheet" />
    <link href="{{ asset('assets/bower_components/dropzone/dist/dropzone.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}"
        rel="stylesheet" />
    <link href="{{ asset('assets/bower_components/fullcalendar/dist/fullcalendar.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/bower_components/perfect-scrollbar/css/perfect-scrollbar.min.css') }}"
        rel="stylesheet" />
    <link href="{{ asset('assets/bower_components/slick-carousel/slick/slick.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/main57395739.css?version=4.5.0') }}" rel="stylesheet" />
</head>

<body class="menu-position-side menu-side-left full-screen">
    <div class="all-wrapper solid-bg-all">
        <div class="layout-w">
            <div class="menu-mobile menu-activated-on-click color-scheme-dark">
                <div class="mm-logo-buttons-w">
                    <a class="mm-logo" href="void:(0)"><img src="{{ 'assets/img/logo.png' }}" /><span>Clean
                            Admin</span></a>
                    <div class="mm-buttons">
                        <div class="content-panel-open">
                            <div class="os-icon os-icon-grid-circles"></div>
                        </div>
                        <div class="mobile-menu-trigger">
                            <div class="os-icon os-icon-hamburger-menu-1"></div>
                        </div>
                    </div>
                </div>
                <div class="menu-and-user">
                    <div class="logged-user-w">
                        <div class="avatar-w"><img alt="" src="{{ 'assets/img/avatar1.jpg' }}" /></div>
                        <div class="logged-user-info-w">
                            <div class="logged-user-name">Maria Gomez</div>
                            <div class="logged-user-role">Administrator</div>
                        </div>
                    </div>
                    <ul class="main-menu">
                        <li class="has-sub-menu">
                            <a href="void:(0)">
                                <div class="icon-w">
                                    <div class="os-icon os-icon-layout"></div>
                                </div>
                                <span>Dashboard</span>
                            </a>

                        </li>

                        <li class="has-sub-menu">
                            <a href="void:(0)">
                                <div class="icon-w">
                                    <div class="os-icon os-icon-users"></div>
                                </div>
                                <span>Patients</span>
                            </a>

                        </li>
                        <li class="has-sub-menu">
                            <a href="#">
                                <div class="icon-w">
                                    <div class="os-icon os-icon-file-text"></div>
                                </div>
                                <span>Patients List</span>
                            </a>

                        </li>
                        <li class="has-sub-menu">
                            <a href="#">
                                <div class="icon-w">
                                    <div class="os-icon os-icon-sunrise"></div>
                                </div>
                                <span>CGS</span>
                            </a>

                        </li>
                        <li class="has-sub-menu">
                            <a href="#">
                                <div class="icon-w">
                                    <div class="os-icon os-icon-list"></div>
                                </div>
                                <span>Medical History</span>
                            </a>

                        </li>
                        <li class="has-sub-menu">
                            <a href="#">
                                <div class="icon-w">
                                    <div class="os-icon os-icon-settings"></div>
                                </div>
                                <span>Setting</span>
                            </a>

                        </li>
                        <li class="has-sub-menu">
                            <a href="#">
                                <div class="icon-w">
                                    <div class="os-icon os-icon-shopping-cart"></div>
                                </div>
                                <span>Forms</span>
                            </a>

                        </li>


                    </ul>

                </div>
            </div>
            <div
                class="menu-w color-scheme-light color-style-default menu-position-side menu-side-left menu-layout-compact sub-menu-style-over sub-menu-color-bright selected-menu-color-light menu-activated-on-hover">
                <div class="logo-w">
                    <a class="logo" href="void:(0)">
                        <div class="logo-element"></div>
                        <div class="logo-label">Clean Admin</div>
                    </a>
                </div>
                <ul class="main-menu">
                    <li class="selected has-sub-menu">
                        <a href="void:(0)">
                            <div class="icon-w">
                                <div class="os-icon os-icon-layout"></div>
                            </div>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="has-sub-menu">
                        <a href="void:(0)">
                            <div class="icon-w">
                                <div class="os-icon os-icon-users"></div>
                            </div>
                            <span>Patients</span>
                        </a>
                    </li>
                    <li class="has-sub-menu active">
                        <a href="void:(0)">
                            <div class="icon-w">
                                <div class="os-icon os-icon-file-text"></div>
                            </div>
                            <span>Patients List</span>
                        </a>
                    </li>
                    <li class="has-sub-menu">
                        <a href="void:(0)">
                            <div class="icon-w">
                                <div class="os-icon os-icon-sunrise"></div>
                            </div>
                            <span>CGS</span>
                        </a>
                    </li>
                    <li class="has-sub-menu">
                        <a href="void:(0)">
                            <div class="icon-w">
                                <div class="os-icon os-icon-list"></div>
                            </div>
                            <span>Medical History</span>
                        </a>
                    </li>
                    <li class="has-sub-menu">
                        <a href="#">
                            <div class="icon-w">
                                <div class="os-icon os-icon-settings"></div>
                            </div>
                            <span>Setting</span>
                        </a>
                    </li>
                    <li class="has-sub-menu">
                        <a href="#">
                            <div class="icon-w">
                                <div class="os-icon os-icon-shopping-cart"></div>
                            </div>
                            <span>Shop</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="content-w">
                <div class="top-bar color-scheme-light">
                    <div class="top-menu-controls">
                        <div class="element-search autosuggest-search-activator">
                            <input placeholder="Start typing to search..." />
                        </div>
                    </div>
                    <div class="top-menu-controls">
                        <div class="messages-notifications os-dropdown-trigger os-dropdown-position-left">
                            <i class="os-icon os-icon-bell"></i>
                            <div class="new-messages-count">12</div>
                            <div class="os-dropdown light message-list">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <div class="user-avatar-w">
                                                <img alt="" src="{{ 'assets/img/avatar1.jpg' }}" />
                                            </div>
                                            <div class="message-content">
                                                <h6 class="message-from">John Mayers</h6>
                                                <h6 class="message-title">Account Update</h6>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="user-avatar-w">
                                                <img alt="" src="{{ 'assets/img/avatar2.jpg' }}" />
                                            </div>
                                            <div class="message-content">
                                                <h6 class="message-from">Phil Jones</h6>
                                                <h6 class="message-title">Secutiry Updates</h6>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="user-avatar-w">
                                                <img alt="" src="{{ 'assets/img/avatar3.jpg' }}" />
                                            </div>
                                            <div class="message-content">
                                                <h6 class="message-from">Bekky Simpson</h6>
                                                <h6 class="message-title">Vacation Rentals</h6>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="user-avatar-w">
                                                <img alt="" src="{{ 'assets/img/avatar4.jpg' }}" />
                                            </div>
                                            <div class="message-content">
                                                <h6 class="message-from">Alice Priskon</h6>
                                                <h6 class="message-title">Payment Confirmation</h6>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="floated-chat-btn">
                            <i class="os-icon os-icon-mail-07"></i><span></span>
                        </div>
                        <div class="floated-chat-w">
                            <div class="floated-chat-i">
                                <div class="chat-close">
                                    <i class="os-icon os-icon-close"></i>
                                </div>
                                <div class="chat-head">
                                    <div class="user-w with-status status-green">
                                        <div class="user-avatar-w">
                                            <div class="user-avatar">
                                                <img alt="" src="{{ 'assets/img/avatar1.jpg' }}" />
                                            </div>
                                        </div>
                                        <div class="user-name">
                                            <h6 class="user-title">John Mayers</h6>
                                            <div class="user-role">Account Manager</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="chat-messages">
                                    <div class="message">
                                        <div class="message-content">Hi, how can I help you?</div>
                                    </div>
                                    <div class="date-break">Mon 10:20am</div>
                                    <div class="message">
                                        <div class="message-content">
                                            Hi, my name is Mike, I will be happy to assist you
                                        </div>
                                    </div>
                                    <div class="message self">
                                        <div class="message-content">
                                            Hi, I tried ordering this product and it keeps showing me error code.
                                        </div>
                                    </div>
                                </div>
                                <div class="chat-controls">
                                    <input class="message-input" placeholder="Type your message here..." />
                                    <div class="chat-extra">
                                        <a href="#"><span class="extra-tooltip">Attach Document</span><i
                                                class="os-icon os-icon-documents-07"></i></a><a href="#"><span
                                                class="extra-tooltip">Insert
                                                Photo</span><i class="os-icon os-icon-others-29"></i></a>
                                        <a href="#"><span class="extra-tooltip">Upload Video</span><i
                                                class="os-icon os-icon-ui-51"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="logged-user-w avatar-inline">
                            <div class="logged-user-i">
                                <div class="avatar-w">
                                    <img alt="" src="{{ 'assets/img/avatar1.jpg' }}" />
                                </div>
                                <div class="logged-user-menu color-style-bright">
                                    <div class="logged-user-avatar-info">
                                        <div class="avatar-w">
                                            <img alt="" src="{{ 'assets/img/avatar1.jpg' }}" />
                                        </div>
                                        <div class="logged-user-info-w">
                                            <div class="logged-user-name">Maria Gomez</div>
                                            <div class="logged-user-role">Administrator</div>
                                        </div>
                                    </div>
                                    <div class="bg-icon">
                                        <i class="os-icon os-icon-wallet-loaded"></i>
                                    </div>
                                    <ul>
                                        <li>
                                            <a href="void:(0)"><i class="os-icon os-icon-mail-01"></i><span>Incoming
                                                    Mail</span></a>
                                        </li>
                                        <li>
                                            <a href="void:(0)"><i
                                                    class="os-icon os-icon-user-male-circle2"></i><span>Profile
                                                    Details</span></a>
                                        </li>
                                        <li>
                                            <a href="void:(0)"><i class="os-icon os-icon-coins-4"></i><span>Billing
                                                    Details</span></a>
                                        </li>
                                        <li>
                                            <a href="#"><i
                                                    class="os-icon os-icon-others-43"></i><span>Notifications</span></a>
                                        </li>
                                        <li>
                                            <a href="{{ route('logout') }}"
                                                onclick="event.preventDefault(); document.getElementById('logout-form').submit(); "><i
                                                    class="os-icon os-icon-signs-11"></i><span>Logout</span></a>
                                        </li>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @yield('content')
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/bower_components/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/bower_components/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('assets/bower_components/moment/moment.js') }}"></script>
    <script src="{{ asset('assets/bower_components/chart.js/dist/Chart.min.js') }}"></script>
    <script src="{{ asset('assets/bower_components/select2/dist/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('assets/bower_components/jquery-bar-rating/dist/jquery.barrating.min.js') }}"></script>
    <script src="{{ asset('assets/bower_components/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('assets/bower_components/bootstrap-validator/dist/validator.min.js') }}"></script>
    <script src="{{ asset('assets/bower_components/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('assets/bower_components/ion.rangeSlider/js/ion.rangeSlider.min.js') }}"></script>
    <script src="{{ asset('assets/bower_components/dropzone/dist/dropzone.js') }}"></script>
    <script src="{{ asset('assets/bower_components/editable-table/mindmup-editabletable.js') }}"></script>
    <script src="{{ asset('assets/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/bower_components/fullcalendar/dist/fullcalendar.min.js') }}"></script>
    <script src="{{ asset('assets/bower_components/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js') }}">
    </script>
    <script src="{{ asset('assets/bower_components/tether/dist/js/tether.min.js') }}"></script>
    <script src="{{ asset('assets/bower_components/slick-carousel/slick/slick.min.js') }}"></script>
    <script src="{{ asset('assets/bower_components/bootstrap/js/dist/util.js') }}"></script>
    <script src="{{ asset('assets/bower_components/bootstrap/js/dist/alert.js') }}"></script>
    <script src="{{ asset('assets/bower_components/bootstrap/js/dist/button.js') }}"></script>
    <script src="{{ asset('assets/bower_components/bootstrap/js/dist/carousel.js') }}"></script>
    <script src="{{ asset('assets/bower_components/bootstrap/js/dist/collapse.js') }}"></script>
    <script src="{{ asset('assets/bower_components/bootstrap/js/dist/dropdown.js') }}"></script>
    <script src="{{ asset('assets/bower_components/bootstrap/js/dist/modal.js') }}"></script>
    <script src="{{ asset('assets/bower_components/bootstrap/js/dist/tab.js') }}"></script>
    <script src="{{ asset('assets/bower_components/bootstrap/js/dist/tooltip.js') }}"></script>
    <script src="{{ asset('assets/bower_components/bootstrap/js/dist/popover.js') }}"></script>
    <script src="{{ asset('assets/js/demo_customizer57395739.js?version=4.5.0') }}"></script>
    <script src="{{ asset('assets/js/main57395739.js?version=4.5.0') }}"></script>
</body>

</html>
