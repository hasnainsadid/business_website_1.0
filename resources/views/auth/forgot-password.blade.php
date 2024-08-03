<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>BusinessWeb | Password Reset</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{asset('')}}backend/assets/css/app.min.css">
  <link rel="stylesheet" href="{{asset('')}}backend/assets/bundles/bootstrap-social/bootstrap-social.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="{{asset('')}}backend/assets/css/style.css">
  <link rel="stylesheet" href="{{asset('')}}backend/assets/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="{{asset('')}}backend/assets/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href="{{asset('')}}backend/assets/img/favicon.ico" />
</head>

<body>

    <div class="loader"></div>
    <div id="app">
      <section class="section">
        <div class="container mt-5">
            <div class="row">
            <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                <div class="card card-primary">
                <div class="card-header">
                    <h4>Forgot Password</h4>
                </div>
                <div class="card-body">
                    <p class="text-muted">We will send a link to reset your password</p>
                    <form method="POST" action="{{route('password.email')}}">
                    @csrf
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input id="email" type="email" class="form-control" name="email" tabindex="1" required autofocus>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                        Forgot Password
                        </button>
                    </div>
                    </form>
                </div>
                </div>
            </div>
            </div>
        </div>
        </section>
    </div>
    <script src="{{asset('')}}backend/assets/js/app.min.js"></script>
    <script src="{{asset('')}}backend/assets/js/scripts.js"></script>
    <script src="{{asset('')}}backend/assets/js/custom.js"></script>

  </body>
</html>