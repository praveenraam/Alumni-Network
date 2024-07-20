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
        /* Style for the button */
        .google-button {
          display: inline-block;
          padding: 10px 20px;
          background-color: white;
          color: #333; /* Text color */
          text-align: center;
          text-decoration: none;
          font-size: 16px;
          border: 1px solid #ccc; /* Border color */
          border-radius: 5px;
          cursor: pointer;
        }

        .button-container {
            text-align: center; /* Center align its child elements */
            margin-top: 20px; /* Adjust top margin as needed */
        }
      
        /* Style for the Google icon */
        .google-icon {
          width: 20px; /* Adjust icon size */
          height: 20px; /* Adjust icon size */
          vertical-align: middle;
          margin-right: 10px; /* Spacing between icon and text */
        }
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
            <h2 class="log-title centre">Alumni Login</h2>

          <form method="post" action="/alumni/login">
            @csrf
            <div class="form-group">
              <input type="text" id="input" name="roll_no" required="required">
              <label class="control-label" for="input">Roll No</label><i class="mtrl-select"></i>
            </div>
            <div class="form-group">
              <input type="password"  name="password" required="required">
              <label class="control-label" for="input">Password</label><i class="mtrl-select"></i>
            </div>
            @if ($errors->any())
            <div id="error-message" class="alert alert-danger">
                
                    @foreach ($errors->all() as $error)
                        {{ $error }}
                    @endforeach
                
            </div>
            @endif
            <a href="#" title="" class="forgot-pwd">Forgot Password?</a>
            <div class="submit-btns centre">
              <button class="mtr-btn signin" type="submit">
                <span>Login</span>
              </button>
            </div>
          </form>
          <hr>

          <h2 class="log-title centre">Student Login</h2>

          <form method="post">
            <div class="form-group button-container">
              <a href="" class="google-button">
                  <img class="google-icon" src="https://www.gstatic.com/firebasejs/ui/2.0.0/images/auth/google.svg" alt="Google Icon">
                  Sign in with Google
              </a>              
            </div>
          </form>
        </div>
      </div>

      <script>
        document.addEventListener('DOMContentLoaded', function() {
            setTimeout(function() {
                var errorMessage = document.getElementById('error-message');
                if (errorMessage) {
                    errorMessage.classList.add('fade-out');
                    
                    setTimeout(function() {
                        errorMessage.remove();
                    }, 1000); // Match the duration of the CSS transition
                }
            }, 3000);
        });
      </script>

</body>
</html>