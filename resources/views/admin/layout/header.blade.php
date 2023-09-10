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
