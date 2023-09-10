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
