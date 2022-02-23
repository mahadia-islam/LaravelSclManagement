<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset("css/custom.css")}}">
    <!-- Vendors Style-->
    <link rel="stylesheet" href="{{asset("backend/css/vendors_css.css")}}">

	<!-- Style-->
    <link rel="stylesheet" href="{{asset('backend/css/style.css')}}">
    <link rel="stylesheet" href="{{asset("backend/css/skin_color.css")}}">

    {{-- toastr css --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="welcome_student">
        <div>
            <form action="">
                <div class="user_div">
                    <i class="fa fa-user-o"></i>
                </div>
                <div class="welcome_form_group">
                    <i class="fa fa-user-o"></i>
                    <input type="text" placeholder="username">
                </div>
                <div class="welcome_form_group">
                    <i class="fa fa-envelope-o"></i>
                    <input type="text" placeholder="email">
                </div>
                <div class="welcome_form_group">
                    <i class="fa fa-lock"></i>
                    <input type="text" placeholder="password">
                </div>
                <div class="welcome_form_group">
                    <i class="fa fa-lock"></i>
                    <input type="text" placeholder="confirm password">
                </div>
                <button>Submit</button>
            </form>
        </div>
    </div>
</body>
</html>
