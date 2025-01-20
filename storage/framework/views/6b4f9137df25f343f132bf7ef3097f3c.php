<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- Bootstrap 5 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- Unicons CSS -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/unicons.css">
    <link href=" https://cdn.jsdelivr.net/npm/@iconscout/unicons@4.2.0/css/line.min.css " rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="<?php echo e(asset('frontend/assets/css/font-awesome.css')); ?>" rel="stylesheet">
    <style>

                @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800,900');

                body{
                    font-family: 'Poppins', sans-serif;
                    font-weight: 300;
                    font-size: 15px;
                    line-height: 1.7;
                    color: #ffffff;
                    background: url(<?php echo e(asset('frontend/assets/img/parabolic-rectangle.png')); ?>) no-repeat center center/cover;
                    overflow-x: hidden;
                }
                a {
                    cursor: pointer;
                transition: all 200ms linear;
                }
                a:hover {
                    text-decoration: none;
                }
                .link {
                color: #ffffff;
                }
                .link:hover {
                color: #ffeba7;
                }
                p {
                font-weight: 500;
                font-size: 14px;
                line-height: 1.7;
                }
                h4 {
                font-weight: 600;
                }
                h6 span{
                padding: 0 20px;
                text-transform: uppercase;
                font-weight: 700;
                }
                .section{
                position: relative;
                width: 100%;
                display: block;
                }
                .full-height{
                min-height: 100vh;
                }
                [type="checkbox"]:checked,
                [type="checkbox"]:not(:checked){
                position: absolute;
                left: -9999px;
                }
                .checkbox:checked + label,
                .checkbox:not(:checked) + label{
                position: relative;
                display: block;
                text-align: center;
                width: 60px;
                height: 16px;
                border-radius: 8px;
                padding: 0;
                margin: 10px auto;
                cursor: pointer;
                background-color: #8c54fd;
                }
                .checkbox:checked + label:before,
                .checkbox:not(:checked) + label:before {
                    position: absolute;
                    display: block;
                    width: 36px;
                    height: 36px;
                    border-radius: 50%;
                    color: #8c54fd;
                    background-color: #00085d;
                    font-family: 'Font Awesome 6 Free';  /* Ensure you use the correct Font Awesome font family */
                    font-weight: 900;
                    content: '\f177';  /* This is the content for a check icon */
                    z-index: 20;
                    top: -10px;
                    left: -10px;
                    line-height: 36px;
                    text-align: center;
                    font-size: 24px;
                    transform: rotate(45deg);
                    transition: all 0.5s ease;
                }

                .checkbox:checked + label:before {
                transform: translateX(44px) rotate(-580deg);
                }


                .card-3d-wrap {
                position: relative;
                width: 440px;
                max-width: 100%;
                height: 400px;
                -webkit-transform-style: preserve-3d;
                transform-style: preserve-3d;
                perspective: 800px;
                margin-top: 60px;
                }
                .card-3d-wrapper {
                width: 100%;
                height: 100%;
                position:absolute;
                top: 0;
                left: 0;
                -webkit-transform-style: preserve-3d;
                transform-style: preserve-3d;
                transition: all 600ms ease-out;
                }
                .card-front, .card-back {
                width: 100%;
                height: 500px;
                background-color: #4e3b79;
                background-image: url('<?php echo e(asset('frontend/assets/img/sun-tornado(1).png')); ?>');
                background-position: bottom center;
                background-repeat: no-repeat;
                background-size: 300%;
                position: absolute;
                border-radius: 6px;
                left: 0;
                top: 0;
                -webkit-transform-style: preserve-3d;
                transform-style: preserve-3d;
                -webkit-backface-visibility: hidden;
                -moz-backface-visibility: hidden;
                -o-backface-visibility: hidden;
                backface-visibility: hidden;
                }
                .card-back {
                transform: rotateY(180deg);
                }
                .checkbox:checked ~ .card-3d-wrap .card-3d-wrapper {
                transform: rotateY(180deg);
                }
                .center-wrap{
                position: absolute;
                width: 100%;
                padding: 0 35px;
                top: 50%;
                left: 0;
                transform: translate3d(0, -50%, 35px) perspective(100px);
                z-index: 20;
                display: block;
                }


                .form-group{
                position: relative;
                display: block;
                    margin: 0;
                    padding: 0;
                }
                .form-style {
                padding: 13px 20px;
                padding-left: 55px;
                height: 48px;
                width: 100%;
                font-weight: 500;
                border-radius: 4px;
                font-size: 14px;
                line-height: 22px;
                letter-spacing: 0.5px;
                outline: none;
                color: #c4c3ca;
                background-color: #1f2029;
                border: none;
                -webkit-transition: all 200ms linear;
                transition: all 200ms linear;
                box-shadow: 0 4px 8px 0 rgba(21,21,21,.2);
                }
                .form-style:focus,
                .form-style:active {
                border: none;
                outline: none;
                box-shadow: 0 4px 8px 0 rgba(21,21,21,.2);
                }
                .input-icon {
                position: absolute;
                top: 0;
                left: 18px;
                height: 48px;
                font-size: 24px;
                line-height: 48px;
                text-align: left;
                color: #8c54fd;
                -webkit-transition: all 200ms linear;
                    transition: all 200ms linear;
                }

                .form-group input:-ms-input-placeholder  {
                color: #c4c3ca;
                opacity: 0.7;
                -webkit-transition: all 200ms linear;
                    transition: all 200ms linear;
                }
                .form-group input::-moz-placeholder  {
                color: #c4c3ca;
                opacity: 0.7;
                -webkit-transition: all 200ms linear;
                    transition: all 200ms linear;
                }
                .form-group input:-moz-placeholder  {
                color: #c4c3ca;
                opacity: 0.7;
                -webkit-transition: all 200ms linear;
                    transition: all 200ms linear;
                }
                .form-group input::-webkit-input-placeholder  {
                color: #c4c3ca;
                opacity: 0.7;
                -webkit-transition: all 200ms linear;
                    transition: all 200ms linear;
                }
                .form-group input:focus:-ms-input-placeholder  {
                opacity: 0;
                -webkit-transition: all 200ms linear;
                    transition: all 200ms linear;
                }
                .form-group input:focus::-moz-placeholder  {
                opacity: 0;
                -webkit-transition: all 200ms linear;
                    transition: all 200ms linear;
                }
                .form-group input:focus:-moz-placeholder  {
                opacity: 0;
                -webkit-transition: all 200ms linear;
                    transition: all 200ms linear;
                }
                .form-group input:focus::-webkit-input-placeholder  {
                opacity: 0;
                -webkit-transition: all 200ms linear;
                    transition: all 200ms linear;
                }

                .btn{
                border-radius: 4px;
                height: 44px;
                font-size: 13px;
                font-weight: 600;
                text-transform: uppercase;
                -webkit-transition : all 200ms linear;
                transition: all 200ms linear;
                padding: 0 30px;
                letter-spacing: 1px;
                display: -webkit-inline-flex;
                display: -ms-inline-flexbox;
                display: inline-flex;
                -webkit-align-items: center;
                -moz-align-items: center;
                -ms-align-items: center;
                align-items: center;
                -webkit-justify-content: center;
                -moz-justify-content: center;
                -ms-justify-content: center;
                justify-content: center;
                -ms-flex-pack: center;
                text-align: center;
                border: none;
                background-color: #ffa7a7;
                color: #102770;
                box-shadow: 0 8px 24px 0 rgba(255,235,167,.2);
                }
                .btn:active,
                .btn:focus{
                background-color: #102770;
                color: #ffeba7;
                box-shadow: 0 8px 24px 0 rgba(16,39,112,.2);
                }
                .btn:hover{
                background-color: #102770;
                color: #ffeba7;
                box-shadow: 0 8px 24px 0 rgba(16,39,112,.2);
                }




                .logo {
                    position: absolute;
                    top: 30px;
                    right: 30px;
                    display: block;
                    z-index: 100;
                    transition: all 250ms linear;
                }
                .logo img {
                    height: 26px;
                    width: auto;
                    display: block;
                }
    </style>
</head>
<body>



    <div class="section">
        <div class="container">
            <div class="row full-height justify-content-center">
                <div class="col-12 text-center align-self-center py-5">
                    <div class="section pb-5 pt-5 pt-sm-2 text-center">

                        <h6 class="mb-0 pb-3"><span>Log In </span><span>Sign Up</span></h6>
                        <input class="checkbox overflow-hidden" type="checkbox" id="reg-log" name="reg-log"/>
                        <label for="reg-log"></label>

                        <div class="card-3d-wrap mx-auto">
                            <div class="card-3d-wrapper">
                                <div class="card-front">
                                    <div class="center-wrap">
                                        <div class="section text-center">
                                            <h1 class="m-0 text-white" style="font-size: 5rem; font-weight: 700">OG</h1><br>
                                            <h4 class="mb-4 pb-3">Log In</h4>
                                            <div class="form-group">
                                                <input type="email" name="logemail" class="form-style" placeholder="Your Email" id="logemail" autocomplete="off">
                                                <i class="input-icon uil uil-at"></i>
                                            </div>
                                            <div class="form-group mt-2">
                                                <input type="password" name="logpass" class="form-style" placeholder="Your Password" id="logpass" autocomplete="off">
                                                <i class="input-icon uil uil-lock-alt"></i>
                                            </div>
                                            <a href="<?php echo e(url('/home')); ?>" class="btn mt-4">submit</a>
                                            <p class="mb-0 mt-4 text-center"><a href="#" class="link">Forgot your password?</a></p>
                                          </div>
                                      </div>
                                  </div>
                                <div class="card-back">
                                    <div class="center-wrap">
                                        <div class="section text-center">
                                            <h1 class="m-0 text-white" style="font-size: 5rem; font-weight: 700">OG</h1><br>
                                            <h4 class="mb-4 pb-3">Sign Up</h4>
                                            <div class="form-group">
                                                <input type="text" name="logname" class="form-style" placeholder="Your Full Name" id="logname" autocomplete="off">
                                                <i class="input-icon uil uil-user"></i>
                                            </div>
                                            <div class="form-group mt-2">
                                                <input type="email" name="logemail" class="form-style" placeholder="Your Email" id="logemail" autocomplete="off">
                                                <i class="input-icon uil uil-at"></i>
                                            </div>
                                            <div class="form-group mt-2">
                                                <input type="password" name="logpass" class="form-style" placeholder="Your Password" id="logpass" autocomplete="off">
                                                <i class="input-icon uil uil-lock-alt"></i>
                                            </div>
                                            <a href="<?php echo e(url('/home')); ?>" class="btn mt-4">submit</a>
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

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>
</html>
<?php /**PATH D:\ST15\wamp\www\Ticket Booking System\ticket-booking-system\resources\views/frontend/login/login_form.blade.php ENDPATH**/ ?>