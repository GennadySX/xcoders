
@section('main')
    <div class="menu_container">
        <div class="menu menu_mm text-right">
            <div class="menu_close"><i class="far fa-times-circle trans_200"></i></div>
            <ul class="menu_mm">
            </ul>
        </div>
    </div>

    <!-- Home -->

    <div class="home">
        <div class="home_background_container prlx_parent">
            <div class="home_background prlx" style="background-image:url({{asset('tim/images/slider_background.jpg')}})"></div>
        </div>

        <!-- Hero Slider -->
        <div class="hero_slider_container">

            <!-- Slider -->
            <div class="owl-carousel owl-theme hero_slider">

                <!-- Slider Item -->

                <!-- Slider Item -->
                <div class="owl-item hero_slider_item item_1 d-flex flex-column align-items-center justify-content-center">
                    <span>Добро</span>
                    <span>Пожаловать!</span>
                    <span>Yota!</span>
                    <span>Сбываются твои мечты!</span>
                </div>

                <!-- Slider Item -->


            <!-- Hero Slider Navigation Left -->
            <div class="hero_slider_nav hero_slider_nav_left">
                <div class="hero_slider_prev d-flex flex-column align-items-center justify-content-center trans_200">
                    <i class="fas fa-chevron-left trans_200"></i>
                </div>
            </div>

            <!-- Hero Slider Navigation Right -->
            <div class="hero_slider_nav hero_slider_nav_right">
                <div class="hero_slider_next d-flex flex-column align-items-center justify-content-center trans_200">
                    <i class="fas fa-chevron-right trans_200"></i>
                </div>
            </div>

        </div>

        <div class="hero_side_text_container">
            <div class="double_arrow_container d-flex flex-column align-items-center justify-content-center">
                <div class="double_arrow nav_links" data-scroll-to=".icon_boxes">
                    <i class="fas fa-chevron-left trans_200"></i>
                    <i class="fas fa-chevron-left trans_200"></i>
                </div>
            </div>
            <div class="hero_side_text">
                <h2>Совремменная связь </h2>
                <p>С качественными услугими.</p>
            </div>
        </div>

        <div class="next_section_scroll">
            <div class="next_section nav_links" data-scroll-to=".icon_boxes">
                <i class="fas fa-chevron-down trans_200"></i>
                <i class="fas fa-chevron-down trans_200"></i>
            </div>
        </div>

    </div>

    <!-- Icon Boxes -->

    <div class="icon_boxes">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="icon_box_title">
                        <h1>Yota - это теперь твой второй  лучший друг</h1>
                    </div>
                    <div class="button icon_box_button trans_200">
                        <a href="#" class="trans_200">подробнее</a>
                    </div>
                </div>

                <div class="col-lg-4 icon_box_col">

                    <!-- Icon Box Item -->
                    <div class="icon_box_item">
                        <h2>Управление связью онлайн</h2>
                        <p>Оформите договор на сайте и получите<br>SIM-карты в точке продаж</p>
                    </div>

                    <!-- Icon Box Item -->
                    <div class="icon_box_item">
                        <h2>Подготовьтесь к переходу</h2>
                        <p>Проверьте, нет ли у вас задолженности перед прежним оператором. Оплатите ее не позднее, чем за 5 дней до даты переноса.</p>
                    </div>

                </div>

                <div class="col-lg-4 icon_box_col">

                    <!-- Icon Box Item -->
                    <div class="icon_box_item">
                        <h2>Оформите заявление</h2>
                        <p>В точке продаж Yota в регионе, где обслуживается ваш номер, напишите заявление, оплатите аванс и получите новую SIM-карту. Понадобится ваш паспорт.</p>
                    </div>

                    <!-- Icon Box Item -->
                    <div class="icon_box_item">
                        <h2>Ждите хороших новостей</h2>
                        <p>Вы получите SMS-напоминание от Yota с указанием времени перехода и этапах проверки номера. Технически переход может занять от 9 дней.</p>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Vertical Slider Section -->

    @endsection