<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forgot Password</title>
    
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
        <h2 class="log-title centre">Forgot Password</h2>
        <p class="centre">Fill this form, get the password from admin in email</p>
        <form method="POST" action="{{ route('forgot-password.store') }}">
            @csrf
            <div class="form-group">
                <input type="text" id="name" name="name" required="required">
                <label class="control-label" for="name">Name</label>
                <i class="mtrl-select"></i>
            </div>
            <div class="form-group">
                <input type="text" id="rollnumber" name="rollnumber" required="required">
                <label class="control-label" for="rollnumber">Roll Number</label>
                <i class="mtrl-select"></i>
            </div>
            @if ($errors->any())
            <div id="error-message" class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
            @endif
            <div class="submit-btns centre">
                <button class="mtr-btn signin" type="submit">
                    <span>Submit</span>
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
                }, 1000);
            }
        }, 3000);
    });
    </script>
</body>
</html>