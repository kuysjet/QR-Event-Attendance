<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <title>Login</title>
</head>
<style>
@media screen and (min-width: 720px) {
    .screen_lg {
        height: 100vh;
    }
}
@media screen and (max-width: 519px) {
    .screen_lg {
        height: 30vh; /* 50% of the viewport height */
    }
}
</style>
<body>
<div class="container-fluid">
  <div class="row">
    <div class="screen_lg col-lg-7 m-auto" style="background-color: #00FFFFBF">
        <img src="img/aclc_logo.png" class="img-fluid" alt="...">
    </div>
    <div class="col-lg-5" style="background-color: #fff;">
      <div class="container-sm">
        <!-- Outer Row -->
        <div class="row justify-content-center">
        <h1 class="mb-5 mt-5 text-center">QR Code</h1>
          <div class="col-lg-10">
            <div class="card o-hidden border-2 shadow" style="background-color: #E8E8E6">
              <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">

                  <div class="col-lg-12 mt-4 mb-4">
                    <div class="p-4">
                      <!-- logo -->
                      <form action="checkuser.php" method="POST">
                        <div class="mb-3">
                          <!-- 'h6-sm' when the screen is small -->
                            <label for="username" class="form-label h4 h6-sm">USERNAME</label>
                            <input type="text" class="form-control form-control-lg" id="username">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label h4 h6-sm">PASSWORD</label>
                            <input type="password" class="form-control form-control-lg" id="password">
                        </div>
                        <!-- 'pt-sm-1' when the screen is small -->
                        <div class="text-center pt-4 pt-sm-1">
                          <button class="btn btn-outline-secondary btn-lg" type="submit">Login</button>
                        </div>
                      </form>

                    </div>
                  </div>

                </div>

              </div>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>