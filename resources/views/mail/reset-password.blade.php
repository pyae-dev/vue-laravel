<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>{{ config('app.name', 'Laravel') }}</title>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-color: #f8fafc;
            color: #374151;
            margin: 0;
            padding: 0;
        }

        .logo {
            display: flex;
            justify-content: left;
            align-items: left;
            margin: 0 auto;
            padding: 20px;
        }

        .content{
            padding: 20px;
            
        }

        .first-content {
            font-size: 16px;
            
            margin: 3px;
            padding: 20px;
            
        }
        .second-content {
            font-size: 16px;
            margin: 3px;
            padding: 20px;
            
        }

    </style>



</head>

<body>
    <div class="logo">
        <img src="images/mpss-logo.png" alt="">
        <span>This is image</span>
    </div>


    <div class="content">
        
    <div class="first-content">
        Someone has requested to change your password.<br>
        Please click the button below to reset your password now.
    </div>

            @component('mail::button', ['url' => url('/reset-password/' . $token)])
                Reset Password
            @endcomponent

    <div class="second-content">
        If you didn’t make this request, please ignore this email.  <br>
        When opting for a password change, make sure to use a strong password and 
        unique password that is difficult to guess. <br>

        Please note that your password will no change unless you click the above button.
        
        Please note that this link will expire in
        {{ config('auth.passwords.' . config('auth.defaults.passwords') . '.expire') }} minutes. <br>

        If you have any question or need assistance, our team is ready to help you.
        Please feel free to contact us, and we will be glad to provide you with the necessary support.<br>
        Thanks, MPSS
    </div>

</div>

</body>

</html>