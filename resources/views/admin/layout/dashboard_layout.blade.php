<!DOCTYPE html>
<html lang="en">
    <!-- Mirrored from themesbrand.com/skote/layouts/email-template-billing.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 28 Jan 2023 12:13:37 GMT -->
    <head>
        <meta charset="utf-8" />
        <title>Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('contents/admin/assets')}}/images/favicon.ico" />

        <!-- Bootstrap Css -->
        <link href="{{asset('contents/admin/assets')}}/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{asset('contents/admin/assets')}}/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{asset('contents/admin/assets')}}/css/app.min.css" rel="stylesheet" type="text/css" />
        <link href="{{asset('contents/admin/assets')}}/css/custom.css" rel="stylesheet" type="text/css" />
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <script>
               const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 2000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
                })
        </script>
    </head>

    <body data-sidebar="dark" data-layout-mode="light">

     @if (session()->get('success'))
         <div class="alert alert-success">
            {{ session()->get('success')}}
         </div>
         <script defer>
           Toast.fire({
                icon: 'success',
                title: '{{ session()->get('success')}}',
                })
           </script>
        @endif

        @if (session()->get('error'))
         <div class="alert alert-error">
            {{ session()->get('error')}}
         </div>
         <script defer>
            Toast.fire({
                icon: 'success',
                title: ' {{ session()->get("error")}}'
                })

           </script>
        @endif



        <div id="layout-wrapper">
            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="index.html" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="{{asset('contents/admin/assets')}}/images/logo.svg" alt="" height="22" />
                                </span>
                                <span class="logo-lg">
                                    <img src="{{asset('contents/admin/assets')}}/images/logo-dark.png" alt="" height="17" />
                                </span>
                            </a>

                            <a href="index.html" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="{{asset('contents/admin/assets')}}/images/logo-light.svg" alt="" height="22" />
                                </span>
                                <span class="logo-lg">
                                    <img src="{{asset('contents/admin/assets')}}/images/logo-light.png" alt="" height="19" />
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>

                        <!-- App Search-->
                        <form class="app-search d-none d-lg-block">
                            <div class="position-relative">
                                <input type="text" class="form-control" placeholder="Search..." />
                                <span class="bx bx-search-alt"></span>
                            </div>
                        </form>

                        <div class="dropdown dropdown-mega d-none d-lg-block ms-2">
                            <button type="button" class="btn header-item waves-effect" data-bs-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
                                <span key="t-megamenu">Mega Menu</span>
                                <i class="mdi mdi-chevron-down"></i>
                            </button>
                            <div class="dropdown-menu dropdown-megamenu">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <h5 class="font-size-14" key="t-ui-components">UI Components</h5>
                                                <ul class="list-unstyled megamenu-list">
                                                    <li>
                                                        <a href="javascript:void(0);" key="t-lightbox">Lightbox</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" key="t-range-slider">Range Slider</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" key="t-sweet-alert">Sweet Alert</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" key="t-rating">Rating</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" key="t-forms">Forms</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" key="t-tables">Tables</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" key="t-charts">Charts</a>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="col-md-4">
                                                <h5 class="font-size-14" key="t-applications">Applications</h5>
                                                <ul class="list-unstyled megamenu-list">
                                                    <li>
                                                        <a href="javascript:void(0);" key="t-ecommerce">Ecommerce</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" key="t-calendar">Calendar</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" key="t-email">Email</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" key="t-projects">Projects</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" key="t-tasks">Tasks</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" key="t-contacts">Contacts</a>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="col-md-4">
                                                <h5 class="font-size-14" key="t-extra-pages">Extra Pages</h5>
                                                <ul class="list-unstyled megamenu-list">
                                                    <li>
                                                        <a href="javascript:void(0);" key="t-light-sidebar">Light Sidebar</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" key="t-compact-sidebar">Compact Sidebar</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" key="t-horizontal">Horizontal layout</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" key="t-maintenance">Maintenance</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" key="t-coming-soon">Coming Soon</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" key="t-timeline">Timeline</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" key="t-faqs">FAQs</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <h5 class="font-size-14" key="t-ui-components">UI Components</h5>
                                                <ul class="list-unstyled megamenu-list">
                                                    <li>
                                                        <a href="javascript:void(0);" key="t-lightbox">Lightbox</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" key="t-range-slider">Range Slider</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" key="t-sweet-alert">Sweet Alert</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" key="t-rating">Rating</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" key="t-forms">Forms</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" key="t-tables">Tables</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" key="t-charts">Charts</a>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="col-sm-5">
                                                <div>
                                                    <img src="{{asset('contents/admin/assets')}}/images/megamenu-img.png" alt="" class="img-fluid mx-auto d-block" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex">
                        <div class="dropdown d-inline-block d-lg-none ms-2">
                            <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="mdi mdi-magnify"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-search-dropdown">
                                <form class="p-3">
                                    <div class="form-group m-0">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username" />
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item waves-effect" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="{{asset('contents/admin/assets')}}/images/flags/us.jpg" alt="Header Language" height="16" />
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="en">
                                    <img src="{{asset('contents/admin/assets')}}/images/flags/us.jpg" alt="user-image" class="me-1" height="12" /> <span class="align-middle">English</span>
                                </a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="sp">
                                    <img src="{{asset('contents/admin/assets')}}/images/flags/spain.jpg" alt="user-image" class="me-1" height="12" /> <span class="align-middle">Spanish</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="gr">
                                    <img src="{{asset('contents/admin/assets')}}/images/flags/germany.jpg" alt="user-image" class="me-1" height="12" /> <span class="align-middle">German</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="it">
                                    <img src="{{asset('contents/admin/assets')}}/images/flags/italy.jpg" alt="user-image" class="me-1" height="12" /> <span class="align-middle">Italian</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="ru">
                                    <img src="{{asset('contents/admin/assets')}}/images/flags/russia.jpg" alt="user-image" class="me-1" height="12" /> <span class="align-middle">Russian</span>
                                </a>
                            </div>
                        </div>

                        <div class="dropdown d-none d-lg-inline-block ms-1">
                            <button type="button" class="btn header-item noti-icon waves-effect" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-customize"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                                <div class="px-lg-2">
                                    <div class="row g-0">
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="{{asset('contents/admin/assets')}}/images/brands/github.png" alt="Github" />
                                                <span>GitHub</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="{{asset('contents/admin/assets')}}/images/brands/bitbucket.png" alt="bitbucket" />
                                                <span>Bitbucket</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="{{asset('contents/admin/assets')}}/images/brands/dribbble.png" alt="dribbble" />
                                                <span>Dribbble</span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="row g-0">
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="{{asset('contents/admin/assets')}}/images/brands/dropbox.png" alt="dropbox" />
                                                <span>Dropbox</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="{{asset('contents/admin/assets')}}/images/brands/mail_chimp.png" alt="mail_chimp" />
                                                <span>Mail Chimp</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="{{asset('contents/admin/assets')}}/images/brands/slack.png" alt="slack" />
                                                <span>Slack</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="dropdown d-none d-lg-inline-block ms-1">
                            <button type="button" class="btn header-item noti-icon waves-effect" data-bs-toggle="fullscreen">
                                <i class="bx bx-fullscreen"></i>
                            </button>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-bell bx-tada"></i>
                                <span class="badge bg-danger rounded-pill">3</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-notifications-dropdown">
                                <div class="p-3">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="m-0" key="t-notifications">Notifications</h6>
                                        </div>
                                        <div class="col-auto">
                                            <a href="#!" class="small" key="t-view-all"> View All</a>
                                        </div>
                                    </div>
                                </div>
                                <div data-simplebar style="max-height: 230px;">
                                    <a href="javascript: void(0);" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <div class="avatar-xs me-3">
                                                <span class="avatar-title bg-primary rounded-circle font-size-16">
                                                    <i class="bx bx-cart"></i>
                                                </span>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1" key="t-your-order">Your order is placed</h6>
                                                <div class="font-size-12 text-muted">
                                                    <p class="mb-1" key="t-grammer">If several languages coalesce the grammar</p>
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span key="t-min-ago">3 min ago</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="javascript: void(0);" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <img src="{{asset('contents/admin/assets')}}/images/users/avatar-3.jpg" class="me-3 rounded-circle avatar-xs" alt="user-pic" />
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">James Lemire</h6>
                                                <div class="font-size-12 text-muted">
                                                    <p class="mb-1" key="t-simplified">It will seem like simplified English.</p>
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span key="t-hours-ago">1 hours ago</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="javascript: void(0);" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <div class="avatar-xs me-3">
                                                <span class="avatar-title bg-success rounded-circle font-size-16">
                                                    <i class="bx bx-badge-check"></i>
                                                </span>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1" key="t-shipped">Your item is shipped</h6>
                                                <div class="font-size-12 text-muted">
                                                    <p class="mb-1" key="t-grammer">If several languages coalesce the grammar</p>
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span key="t-min-ago">3 min ago</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                    <a href="javascript: void(0);" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <img src="{{asset('contents/admin/assets')}}/images/users/avatar-4.jpg" class="me-3 rounded-circle avatar-xs" alt="user-pic" />
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">Salena Layfield</h6>
                                                <div class="font-size-12 text-muted">
                                                    <p class="mb-1" key="t-occidental">As a skeptical Cambridge friend of mine occidental.</p>
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span key="t-hours-ago">1 hours ago</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="p-2 border-top d-grid">
                                    <a class="btn btn-sm btn-link font-size-14 text-center" href="javascript:void(0)"> <i class="mdi mdi-arrow-right-circle me-1"></i> <span key="t-view-more">View More..</span> </a>
                                </div>
                            </div>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="{{asset('contents/admin/assets')}}/images/users/avatar-1.jpg" alt="Header Avatar" />
                                <span class="d-none d-xl-inline-block ms-1" key="t-henry">Henry</span>
                                <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a class="dropdown-item" href="#"><i class="bx bx-user font-size-16 align-middle me-1"></i> <span key="t-profile">Profile</span></a>
                                <a class="dropdown-item" href="#"><i class="bx bx-wallet font-size-16 align-middle me-1"></i> <span key="t-my-wallet">My Wallet</span></a>
                                <a class="dropdown-item d-block" href="#"><span class="badge bg-success float-end">11</span><i class="bx bx-wrench font-size-16 align-middle me-1"></i> <span key="t-settings">Settings</span></a>
                                <a class="dropdown-item" href="#"><i class="bx bx-lock-open font-size-16 align-middle me-1"></i> <span key="t-lock-screen">Lock screen</span></a>
                                <div class="dropdown-divider"></div>
                                {{-- <a class="dropdown-item text-danger" href="{{route('dashboard.logout')}}"><i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span key="t-logout">Logout</span></a> --}}

                                <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                 {{ __('Logout') }}
                               </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                   @csrf
                                </form>
                            </div>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                                <i class="bx bx-cog bx-spin"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </header>

            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">
                <div data-simplebar class="h-100">
                    <!--- Sidemenu -->
                    @include('admin.layout.sidebar')
                    <!-- Sidebar -->
                </div>
            </div>

            <div class="main-content">
                <div class="page-content">
                    <!-- end page title -->
                    @yield('content')
                </div> <!-- container-fluid -->
            </div>

            <footer class="footer d-none">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>document.write(new Date().getFullYear())</script> © Skote.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                Design & Develop by Themesbrand
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
            <!-- END layout-wrapper -->

        <!-- Right Sidebar -->
        <div class="right-bar">
            <div data-simplebar class="h-100">
                <div class="rightbar-title d-flex align-items-center px-3 py-4">
                    <h5 class="m-0 me-2">Settings</h5>

                    <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
                        <i class="mdi mdi-close noti-icon"></i>
                    </a>
                </div>

                <!-- Settings -->
                <hr class="mt-0" />
                <h6 class="text-center mb-0">Choose Layouts</h6>

                <div class="p-4">
                    <div class="mb-2">
                        <img src="{{asset('contents/admin/assets')}}/images/layouts/layout-1.jpg" class="img-thumbnail" alt="layout images" />
                    </div>

                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input theme-choice" type="checkbox" id="light-mode-switch" checked />
                        <label class="form-check-label" for="light-mode-switch">Light Mode</label>
                    </div>

                    <div class="mb-2">
                        <img src="{{asset('contents/admin/assets')}}/images/layouts/layout-2.jpg" class="img-thumbnail" alt="layout images" />
                    </div>
                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input theme-choice" type="checkbox" id="dark-mode-switch" />
                        <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
                    </div>

                    <div class="mb-2">
                        <img src="{{asset('contents/admin/assets')}}/images/layouts/layout-3.jpg" class="img-thumbnail" alt="layout images" />
                    </div>
                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input theme-choice" type="checkbox" id="rtl-mode-switch" />
                        <label class="form-check-label" for="rtl-mode-switch">RTL Mode</label>
                    </div>

                    <div class="mb-2">
                        <img src="{{asset('contents/admin/assets')}}/images/layouts/layout-4.jpg" class="img-thumbnail" alt="layout images" />
                    </div>
                    <div class="form-check form-switch mb-5">
                        <input class="form-check-input theme-choice" type="checkbox" id="dark-rtl-mode-switch" />
                        <label class="form-check-label" for="dark-rtl-mode-switch">Dark RTL Mode</label>
                    </div>
                </div>
            </div>
            <!-- end slimscroll-menu-->
        </div>

        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="{{asset('contents/admin/assets')}}/libs/jquery/jquery.min.js"></script>
        <script src="{{asset('contents/admin/assets')}}/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="{{asset('contents/admin/assets')}}/libs/metismenu/metisMenu.min.js"></script>
        <script src="{{asset('contents/admin/assets')}}/libs/simplebar/simplebar.min.js"></script>
        <script src="{{asset('contents/admin/assets')}}/libs/node-waves/waves.min.js"></script>

        <script src="{{asset('contents/admin/assets')}}/js/app.js"></script>

        <!-- Mirrored from themesbrand.com/skote/layouts/email-template-billing.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 28 Jan 2023 12:13:37 GMT -->

    </body>
</html>
