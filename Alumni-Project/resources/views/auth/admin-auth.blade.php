<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    
    <link rel="stylesheet" href="{{asset('assets//css/main.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets//css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets//css/color.css')}}">
    <link rel="stylesheet" href="{{asset('assets//css/responsive.css')}}">

    <style>
        
        .centre{
            text-align: center;
        }

        @media screen and (max-width: 980px){
          body{
            margin-top:10%;
            display: flex; flex-direction: row; align-items: center; justify-content: center;
          }
        }

        @media screen and (max-width: 640px) {
          body{
            margin-top: 50%;
            display: flex; flex-direction: row; align-items: center; justify-content: center;
          }
        }

    </style>

</head>
<body>


    <div class="log-reg-area sign">
        <div class="form-container">
            <h2 class="log-title centre">Admin Login</h2>

          <form method="post">
            <div class="form-group">
              <input type="text" id="input" required="required">
              <label class="control-label" for="input">Username</label><i class="mtrl-select"></i>
            </div>
            <div class="form-group">
              <input type="password" required="required">
              <label class="control-label" for="input">Password</label><i class="mtrl-select"></i>
            </div>

            <a href="#" title="" class="forgot-pwd">Forgot Password?</a>
            <div class="submit-btns centre">
              <button class="mtr-btn signin" type="button">
                <span>Login</span>
              </button>
            </div>
          </form>
        </div>
      </div>

</body>
</html>