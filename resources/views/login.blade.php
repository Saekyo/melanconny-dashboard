<!doctype html>
<html lang="en">

<head>
<title>Melanconny Dashboard | Login</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="description" content="Oculux Bootstrap 4x admin is super flexible, powerful, clean &amp; modern responsive admin dashboard with unlimited possibilities.">
<meta name="author" content="GetBootstrap, design by: puffintheme.com">

<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- VENDOR CSS -->
<link rel="stylesheet" href={{asset('vendor/bootstrap/css/bootstrap.min.css')}}>
<link rel="stylesheet" href={{asset('vendor/font-awesome/css/font-awesome.min.css')}}>
<link rel="stylesheet" href={{asset('vendor/animate-css/vivify.min.css')}}>

<!-- MAIN CSS -->
<link rel="stylesheet" href={{asset('css/site.min.css')}}>

</head>
<body class="theme-cyan font-montserrat light_version">

<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="bar"></div>
        <div class="bar2"></div>
        <div class="bar3"></div>
        <div class="bar4"></div>
        <div class="bar5"></div>
    </div>
</div>

<div class="pattern">
    <span class="pink"></span>
</div>

<div class="auth-main particles_js">
    <div class="auth_div vivify popIn">
        <div class="auth_brand">
            <a class="navbar-brand" href="javascript:void(0);"><img src={{asset('img/logo-dark.png')}} width="75%" height="75%" class="d-inline-block align-top mr-2" alt=""></a>
        </div>
        <div class="card">
            <div class="body">
                <p class="lead">Login to your account</p>
                @method('POST')
                <form method="POST" class="form-auth-small m-t-20" action={{ route('api.login')}}>
                    @csrf
                    <div class="form-group">
                        <label for="email" class="control-label sr-only">Email</label>
                        <input type="email" class="form-control round" id="email" name="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="password" class="control-label sr-only">Password</label>
                        <input type="password" class="form-control round" id="password" name="password" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary btn-round btn-block">LOGIN</button>
                </form>
            </div>
        </div>
    </div>
    <div id="particles-js"></div>
</div>
<!-- END WRAPPER -->

<script src={{asset('js/bundles/libscripts.bundle.js')}}></script>
<script src={{asset('js/bundles/vendorscripts.bundle.js')}}></script>
<script src={{asset('js/bundles/mainscripts.bundle.js')}}></script>
</body>
</html>
