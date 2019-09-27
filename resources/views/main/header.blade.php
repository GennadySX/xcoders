
@section('head')
        <!DOCTYPE html>
<html lang="{{ str_replace('_','-',app()->getLocale()) }}" class="no-js">
<head>
    <title>RanGO - Home</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="RanGO Project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{asset('tim/styles/bootstrap4/bootstrap.min.css')}}">
    <link href="{{asset('tim/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('tim/plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('tim/plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('tim/plugins/OwlCarousel2-2.2.1/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('tim/plugins/slick-1.8.0/slick.css')}}">
    <link href="{{asset('tim/plugins/icon-font/styles.css')}}" rel="{{asset('tim/stylesheet" type="text/css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('tim/styles/main_styles.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('tim/styles/responsive.css')}}">

    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('tim/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('tim/login/vendor/css-hamburgers/hamburgers.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('tim/login/vendor/animsition/css/animsition.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('tim/login/vendor/select2/select2.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('tim/login/vendor/daterangepicker/daterangepicker.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('tim/login/css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('tim/login/css/main.css')}}">

</head>

<body>



<div class="super_container">

    <style>
        .enter-btn {
            border: 1px solid white;
            padding: 0px 16px;
            border-radius: 7px;
            transition: background 1s, color 1s;
        }
    </style>


    <header class="header d-flex flex-row justify-content-end align-items-center trans_200">

        <!-- Logo -->
        <div class="logo mr-auto">
            <a href="#">Yota<span> in</span></a>
        </div>

        <!-- Navigation -->
        <nav class="main_nav justify-self-end text-right">
            <ul>
                <li class="active"><a href="#">Главный</a></li>
                <li><a href="about.html">О нас</a></li>
                <li><a href="services.html">Сервис</a></li>
                <li><a href="portfolio.html">Тарифы</a></li>
                <li><a href="blog.html">Блог</a></li>
                <li><a href="contact.html">Контакты</a></li>

                @guest
                    <li class="enter-btn"><a  href="{{ route('login') }}"  data-toggle="modal" data-target="#signIn">Вход</a></li>

                    @if (Route::has('register'))
                        <li class="enter-btn"><a href="{{ route('register') }}" data-toggle="modal" data-target="#signUp">Зарегистроваться</a></li>
                    @endif
                @else
                    <li class="menu-has-children"><a href="/dashboard">{{ Auth::user()->name }}</a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </ul>
                    </li>
                @endguest
            </ul>





            <!-- Search -->
            <div class="search">
                <div class="search_content d-flex flex-column align-items-center justify-content-center">
                    <div class="search_button d-flex flex-column align-items-center justify-content-center">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             width="18px" height="18px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
							<g>
                                <g>
                                    <path class="search_path" fill="#FFFFFF" d="M89.354,10.609c-14.144-14.146-37.157-14.146-51.301,0c-6.852,6.853-10.625,15.964-10.625,25.655
										c0,8.829,3.132,17.174,8.87,23.771l-4.32,4.321l-4.402-4.403c-0.482-0.482-1.137-0.754-1.819-0.754s-1.337,0.271-1.819,0.754
										L3.31,80.584c-2.148,2.147-3.331,5.004-3.331,8.042s1.183,5.895,3.331,8.042C5.457,98.817,8.313,100,11.35,100
										c3.038,0,5.894-1.184,8.041-3.331l20.627-20.631c0.482-0.482,0.753-1.137,0.753-1.819s-0.271-1.337-0.753-1.819l-4.403-4.403
										l4.322-4.322c6.795,5.902,15.28,8.855,23.766,8.855c9.289,0,18.579-3.537,25.65-10.61c6.852-6.853,10.625-15.963,10.625-25.654
										C99.979,26.573,96.205,17.462,89.354,10.609z M15.753,93.029c-1.176,1.177-2.739,1.824-4.403,1.824
										c-1.663,0-3.227-0.648-4.403-1.824c-1.176-1.176-1.823-2.74-1.823-4.403s0.647-3.228,1.824-4.403L18.458,72.71l8.805,8.807
										L15.753,93.029z M30.902,77.878l-8.805-8.807l3.659-3.66l8.806,8.808L30.902,77.878z M85.715,58.28
										c-12.137,12.14-31.886,12.14-44.023,0c-5.88-5.881-9.118-13.699-9.118-22.016c0-8.316,3.238-16.135,9.118-22.016
										c6.069-6.069,14.041-9.104,22.012-9.104c7.972,0,15.943,3.035,22.013,9.104c5.88,5.881,9.117,13.699,9.117,22.016
										S91.596,52.399,85.715,58.28z"></path>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path class="search_path" fill="#FFFFFF" d="M81.47,18.495c-9.797-9.798-25.736-9.798-35.533,0c-9.796,9.798-9.796,25.741,0,35.539
										c4.898,4.898,11.333,7.349,17.766,7.349c6.435,0,12.868-2.45,17.767-7.349l0,0C91.266,44.235,91.266,28.293,81.47,18.495z
										 M77.831,50.395c-7.79,7.791-20.466,7.791-28.256,0c-7.79-7.792-7.79-20.469,0-28.261c3.896-3.896,9.011-5.843,14.128-5.843
										c5.116,0,10.233,1.948,14.128,5.843C85.621,29.925,85.621,42.603,77.831,50.395z"></path>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path class="search_path" fill="#FFFFFF" d="M73.283,26.683c-5.282-5.283-13.877-5.283-19.16,0c-1.004,1.005-1.004,2.634,0,3.639
										c1.005,1.005,2.634,1.005,3.639,0c3.276-3.276,8.607-3.276,11.884,0c0.502,0.503,1.16,0.754,1.818,0.754
										c0.659,0,1.317-0.251,1.819-0.754C74.288,29.317,74.288,27.688,73.283,26.683z"></path>
                                </g>
                            </g>
						</svg>
                    </div>

                    <form id="search_form" class="search_form bez_1">
                        <input type="search" class="search_input bez_1">
                    </form>

                </div>
            </div>
        </nav>

        <!-- Hamburger -->
        <div class="hamburger_container bez_1">
            <i class="fas fa-bars trans_200"></i>
        </div>

    </header>





    <div class="modal fade " id="signIn" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content " style=" width: 100%;
    left: 27%;
    transform: translateX(-50%);">

                <div class="limiter ">
                    <div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
                        <form class=" flex-sb flex-w" method="POST" action="{{ route('login') }}">
                            @csrf
                            <span class="login100-form-title p-b-53">
						Вход в систему
					</span>

                            <a href="#" class="btn-face m-b-20">
                                <i class="fa fa-facebook-official"></i>
                                Facebook
                            </a>

                            <a href="#" class="btn-google m-b-20">
                                <img src="{{asset('tim/login/images/icons/icon-google.png')}}" alt="GOOGLE">
                                Google
                            </a>


                            <div class="p-t-13 p-b-9">
						<span class="txt1">
							Ваш email
						</span>


                            </div>
                            <div class="wrap-input100 validate-input" data-validate = "Password is required">
                                <input class="input100" type="email" name="email" >
                                <span class="focus-input100"></span>
                            </div>
                            <div class="p-t-13 p-b-9">
						<span class="txt1">
							Ваш пароль
						</span>

                                <a href="#" class="txt2 bo1 m-l-5">
                                    забыли?
                                </a>
                            </div>
                            <div class="wrap-input100 validate-input" data-validate = "Password is required">
                                <input class="input100" type="password" name="password" >
                                <span class="focus-input100"></span>
                            </div>

                            <div class="container-login100-form-btn m-t-17">
                                <button class="login100-form-btn" type="submit">
                                    Войти
                                </button>
                            </div>

                            <div class="w-full text-center p-t-55">
						<span class="txt2">
							Нет аккаунта?
						</span>

                                <a href="#" class="txt2 bo1 signUpLink" data-toggle="modal" data-target="#signUp">
                                    Зарегистроваться
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div id="dropDownSelect1"></div>

        </div>
    </div>
</div>


<div class="modal fade  " id="signUp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content " style=" width: 100%;
    left: 27%;
    transform: translateX(-50%);">

            <div class="limiter ">
                <div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
                    <form class=" validate-form flex-sb flex-w" method="POST" action="{{ route('register') }}">
                        @csrf
                        <span class="login100-form-title p-b-53">
						Регистрация
					    </span>
                        <input class="input100" type="hidden" name="name" value="Abonent" >
                        <input class="input100" type="hidden" name="surname" value="007" >
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                           <strong>{{ $errors->first('name') }}</strong>
                    </span>
                        @endif
                        <a href="#" class="btn-face m-b-20">
                            <i class="fa fa-facebook-official"></i>
                            Facebook
                        </a>

                        <a href="#" class="btn-google m-b-20">
                            <img src="{{asset('tim/login/images/icons/icon-google.png')}}" alt="GOOGLE">
                            Google
                        </a>




                        <div class="p-t-13 p-b-9">
						<span class="txt1">
                            Ваш email
						</span>

                        </div>
                        <div class="wrap-input100 validate-input" data-validate = "Username is required">
                            <input class="input100" type="text" name="email" >
                            <span class="focus-input100"></span>
                        </div>
                        <div class="p-t-13 p-b-9">
						<span class="txt1">
                            Придумайте пароль
						</span>


                        </div>
                        <div class="wrap-input100 validate-input" data-validate = "Password is required">
                            <input class="input100" type="password" name="password" >
                            <span class="focus-input100"></span>
                        </div>
                        <div class="p-t-31 p-b-9">
						<span class="txt1">
							Повторите пароль
						</span>
                        </div>
                        <div class="wrap-input100 validate-input" data-validate = "Username is required">
                            <input class="input100" type="password" name="password_confirmation" >
                            <span class="focus-input100"></span>
                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                                 </span>
                           @endif
                        </div>

                        <div class="container-login100-form-btn m-t-17">
                            <button class="login100-form-btn" type="submit">
                                Зарегистроваться
                            </button>
                        </div>

                        <div class="w-full text-center p-t-55">
						<span class="txt2">
							У вас уже есть аккаунт?
						</span>

                            <a href="#" class="txt2 bo1 signInLink" data-toggle="modal" data-target="#signIn">
                                Вход в систему
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div id="dropDownSelect1"></div>

    </div>
</div>






@endsection




