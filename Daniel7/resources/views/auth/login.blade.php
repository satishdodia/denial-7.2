<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
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


<body class="auth-wrapper">
    <div class="all-wrapper menu-side with-pattern">
        <div class="auth-box-w">
            <div class="logo-w"><a href="/home"><img alt="" src="{{ asset('assets/img/logo-big.png') }}"></a></div>
            <h4 class="auth-header">Login Form</h4>
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="form-group"><label for="">Email</label>
                    <input class="form-control" placeholder="Enter your email" name="email">
                    <div class="pre-icon os-icon os-icon-user-male-circle"></div>
                </div>
                @error('email')
                    {{ $message }}
                @enderror
                <div class="form-group"><label for="">Password</label>
                    <input class="form-control" placeholder="Enter your password" type="password" name="password">
                    <div class="pre-icon os-icon os-icon-fingerprint"></div>
                </div>
                @error('password')
                    {{ $message }}
                @enderror
                <div class="buttons-w"><button class="btn btn-primary" type="submit">Log me in</button>
                    <div class="form-check-inline"><label class="form-check-label"><input class="form-check-input"
                                type="checkbox">Remember Me</label></div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
