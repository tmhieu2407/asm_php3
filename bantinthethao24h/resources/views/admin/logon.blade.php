<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Log in</title>

    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <link rel="stylesheet" href="{{ asset('assets/css') }}/bootstrap.min.css">

    <link rel="stylesheet" href="{{ asset('assets/css') }}/font-awesome.min.css">

    <link rel="stylesheet" href="{{ asset('assets/css') }}/ionicons.min.css">

    <link rel="stylesheet" href="{{ asset('assets/css') }}/AdminLTE.css">

    <link rel="stylesheet" href="../../plugins/iCheck/square/blue.css">


    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="#"><b>Admin</b>LTE</a>
        </div>

        <div class="login-box-body">
            <p class="login-box-msg">Sign in to start your session</p>
            <form action="{{ route('admin.logon') }}" method="post">
                @csrf
                @if ($message = Session::get('error'))
                    <div class="alert alert-danger">
                        <strong>Danger!</strong> {{ $message }}
                    </div>
                @endif
                <div class="form-group has-feedback">
                    <input type="email" class="form-control" placeholder="Email" name="email">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" placeholder="Password" name="password">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Đăng Nhập</button>
                    </div>

                </div>
            </form>
        </div>

    </div>


    <script src="../../bower_components/jquery/dist/jquery.min.js"></script>

    <script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <script src="../../plugins/iCheck/icheck.min.js"></script>
    <script>
        $(function() {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' /* optional */
            });
        });
    </script>
</body>

</html>
