<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Login</title>
    
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
        
        .fade-out {
            opacity: 0;
            transition: opacity 1s ease-out;
        }

    </style>

</head>
<body>


    <div class="log-reg-area sign">
        <div class="form-container">
            <h2 class="log-title centre">Admin Login</h2>

          <form method="POST" action="{{route('admin.login')}}">
            @csrf
            <div class="form-group">
              <input type="text" id="input" name="username" value="{{ old('username') }}" required="required">
              <label class="control-label" for="input">Username</label><i class="mtrl-select"></i>
            </div>
            <div class="form-group">
              <input type="password" name="password" required="required">
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