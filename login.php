<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <title>Login</title>
</head>
<style>
  label{
    font-family: Encode Sans SC;
  }
@media screen and (min-width: 720px) {
    .screen_lg {
        height: 100vh;
    }
}
@media screen and (max-width: 519px) {
    .screen_lg {
        height: 30vh; /* 50% of the viewport height */
    }
    body {
      width: 700px;
    }
    .small-card {
      margin-top: 300px;
    }
}
</style>
<body style="background-image: url('img/ama_blur.jpg'); background-repeat: no-repeat;">
 
<div class="container-fluid">
  
  <div class="row">
    <img class="position-absolute ps-5 vh-100 w-100 d-none d-sm-block" src="img/BG Login.png" alt="">
    <div class="screen_lg col-lg-8 m-auto">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-1 text-center">
                    <div class="d-flex justify-content-start align-items-center" style="height: 100vh;">
                        <!-- <img src="img/aclc_logo.png" class="img-fluid" alt="..." style="max-width: 600px; max-height: 600px;"> -->
                        <img src="img/Logo AMA.png" class="img-fluid position-absolute" alt="..." style="max-width: 310px; max-height: 310px;">
                        <img src="img/Logo Letter.png" class="img-fluid position-absolute" alt="..." style="max-width: 600px; max-height: 600px;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4" style="background-color: #fff;">
      <div class="container-sm">
        <!-- Outer Row -->
        <div class="row justify-content-center small-card">
        <div class="mb-5 mt-5 text-center position-relative text-dark d-md-none" style="font-size: 60px; font-family: Hermeneus One;">QR Code</div>
        <h1 class="mb-5 mt-5 text-center position-relative text-white d-none d-md-block" style="font-family: Hermeneus One;">QR Code</h1>

          <div class="col-lg-10">
            <div class="card o-hidden border-2 shadow " style="background-color: #E8E8E6">
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
                            <input type="text" class="form-control form-control-lg" id="username" autofocus>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label h4 h6-sm">PASSWORD</label>
                            <input type="password" class="form-control form-control-lg" id="password">
                        </div>
                        <!-- 'pt-sm-1' when the screen is small -->
                        <div class="text-center pt-4 pt-sm-1">
                          <button class="btn btn-outline-secondary btn-lg" type="submit" style="color: #000;
                                  text-align: center;
                                  font-family: Economica;
                                  font-size: 20px;
                                  font-style: normal;
                                  font-weight: 400;
                                  line-height: normal;">Login</button>
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