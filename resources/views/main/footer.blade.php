@section('footer')

    <footer class="footer">
        <div class="container">
            <div class="row">

                <div class="col-lg-4">

                    <!-- Footer Intro -->
                    <div class="footer_intro">

                        <!-- Logo -->
                        <div class="logo footer_logo">
                            <a href="#">Yota</a>
                        </div>

                        <p>Выберите и подключите тариф для смартфона. Бесплатная доставка SIM-карты. Пользуйся только тем, что нужно: подключай интернет и безлимитные приложения. Перейти со своим номером. Официальный сайт Yota. Международный роуминг. Широкая зона покрытия..</p>

                        <!-- Social -->
                        <div class="footer_social">
                            <ul>
                                <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>

                        <!-- Copyright -->
                        <div class="footer_cr"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            МИСПИС &copy;<script>document.write(new Date().getFullYear());</script> Все авториские права пренадлежат КХТИ ИПМ <i class="fa fa-heart" aria-hidden="true"></i> от <a href="https://vk.com/timur__78" target="_blank">Абдрашитов Тимур</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>

                    </div>

                </div>

                <!-- Footer Services -->
                <div class="col-lg-2">

                    <div class="footer_col">
                        <div class="footer_col_title">Услуги</div>
                        <ul>
                            <li><a href="#">Социальные услуги</a></li>
                            <li><a href="#">Реклама</a></li>
                            <li><a href="#">Франшейзинг</a></li>
                        </ul>
                    </div>

                    <div class="footer_col">
                        <div class="footer_col_title">Рекомендации</div>
                        <ul>
                            <li><a href="#">От Соц.сети</a></li>
                            <li><a href="#">Отзывы</a></li>
                        </ul>
                    </div>

                </div>

                <!-- Footer Menu -->
                <div class="col-lg-2">

                    <div class="footer_col">
                        <div class="footer_col_title">Меню</div>
                        <ul>
                            <li><a href="#">Главная</a></li>
                            <li><a href="#">О нас</a></li>
                            <li><a href="#">Услуги</a></li>
                            <li><a href="#">Магазины</a></li>
                            <li><a href="#">Блог</a></li>
                            <li><a href="#">Контакты</a></li>
                        </ul>
                    </div>

                </div>

                <!-- Footer About -->
                <div class="col-lg-2">

                    <div class="footer_col">
                        <div class="footer_col_title">О нас</div>
                        <ul>
                            <li><a href="#">Наша комманда</a></li>
                            <li><a href="#">История</a></li>
                            <li><a href="#">Компания</a></li>
                            <li><a href="#">Тех.Поддержка</a></li>
                        </ul>
                    </div>

                </div>

                <!-- Footer Community -->
                <div class="col-lg-2">

                    <div class="footer_col">
                        <div class="footer_col_title">Общества</div>
                        <ul>
                            <li><a href="#">наш блог</a></li>
                            <li><a href="#">Форум</a></li>
                            <li><a href="#">Мероприятия</a></li>
                            <li><a href="#">Цели</a></li>
                        </ul>
                    </div>

                </div>

            </div>

            <div class="row">
                <div class="col">
                    <!-- Copyright -->
                    <div class="footer_cr_2">2019 Все права защищены.</div>
                </div>
            </div>
        </div>
    </footer>

    </div>

    <script src="{{asset('tim/js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('tim/styles/bootstrap4/popper.js')}}"></script>
    <script src="{{asset('tim/styles/bootstrap4/bootstrap.min.js')}}"></script>
    <script src="{{asset('tim/plugins/greensock/TweenMax.min.js')}}"></script>
    <script src="{{asset('tim/plugins/greensock/TimelineMax.min.js')}}"></script>
    <script src="{{asset('tim/plugins/scrollmagic/ScrollMagic.min.js')}}"></script>
    <script src="{{asset('tim/plugins/greensock/animation.gsap.min.js')}}"></script>
    <script src="{{asset('tim/plugins/greensock/ScrollToPlugin.min.js')}}"></script>
    <script src="{{asset('tim/plugins/slick-1.8.0/slick.js')}}"></script>
    <script src="{{asset('tim/plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
    <script src="{{asset('tim/plugins/scrollTo/jquery.scrollTo.min.js')}}"></script>
    <script src="{{asset('tim/plugins/easing/easing.js')}}"></script>
    <script src="{{asset('tim/js/custom.js')}}"></script>

    <!--===============================================================================================-->

    <!--===============================================================================================-->
    <script src="{{asset('tim/login/vendor/animsition/js/animsition.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('tim/login/vendor/bootstrap/js/popper.js')}}"></script>
    <script src="{{asset('tim/login/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('tim/login/vendor/select2/select2.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('tim/login/vendor/daterangepicker/moment.min.js')}}"></script>
    <script src="{{asset('tim/login/vendor/daterangepicker/daterangepicker.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('tim/login/vendor/countdowntime/countdowntime.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('tim/login/js/main.js')}}"></script>

    <script>
        $(document).ready(function () {
            $('.enter-btn').hover(function () {
                $(this).css('background', 'white');
                $(this).find('a').css('color','#22123D');
            });
            $('.enter-btn').mouseout(function () {
                $(this).css('background', 'transparent');
                $(this).find('a').css('color','white');
            });
            $('.enter-btn a').hover(function () {
                $(this).parent().css('background', 'white');
                $(this).css('color','#22123D');
            });
            $('.enter-btn a').mouseout(function () {
                $(this).parent().css('background', 'transparent');
                $(this).css('color','white');
            });

            $(".signInLink").click(function () {
                $('#signUp').modal('hide');
                $('#signIn').modal('focus');
            });

            $(".signUpLink").click(function () {
                $('#signIn').modal('hide');
                $('#signIn').modal('focus');
            });



        });
    </script>


    </body>

    </html>

@endsection
