
@section('aside')
    <!-- sidebar menu -->
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
        <div class="menu_section">
            <h3>Меню</h3>
            <ul class="nav side-menu">
                <li><a><i class="fa fa-home"></i> Главный <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="/dashboard">Мониторинг</a></li>
                        <li><a href="/dashboard/profile">Ваш профиль</a></li>
                        @role('abonent')
                        <li><a href="/dashboard/my_tariff">Ваш тариф</a></li>
                        @endrole
                    </ul>
                </li>
                @role('operator')
                <li><a><i class="fa fa-edit"></i> Абоненты <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="form_advanced.html">Управления абонентов</a></li>
                        <li><a href="form.html">Таблица абонентов</a></li>
                    </ul>
                </li>
                @endrole

                @ability('admin,director', 'create-post,edit-user')
                <li><a><i class="fa fa-desktop"></i> Сотрудники <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="/dashboard/employees/control">Управление сотрудников</a></li>
                        <li><a href="/dashboard/employees/admin">Админстратор</a></li>
                        <li><a href="/dashboard/employees/manager">Менеджер</a></li>
                        <li><a href="/dashboard/employees/secretary">Сектеретар</a></li>
                        <li><a href="/dashboard/employees/directorShop">Директор магазина</a></li>
                        <li><a href="/dashboard/employees/operator">Оператор</a></li>
                        <li><a href="/dashboard/employees/seller">Продавец</a></li>
                        <li><a href="/dashboard/employees/master">Мастер</a></li>
                    </ul>
                </li>
                @endability
                <li><a><i class="fa fa-table"></i> Тарифы <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="/dashboard/tariff">Тарифы</a></li>
                        @ability('admin,director,manager', 'create-post,edit-user')
                        <li><a href="/dashboard/tariff/control">Управление тарифами</a></li>
                        @endability
                    </ul>
                </li>
                @ability('admin,director,directorShop,abonent,manager', 'create-post,edit-user')
                <li><a><i class="fa  fa-shopping-bag"></i> Магазины <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="/dashboard/shops/kzn">Казань</a></li>
                        <li><a href="/dashboard/shops/msk">Москва</a></li>
                        <li><a href="/dashboard/shops/spb">Санкт-Петерюбург</a></li>
                    </ul>
                </li>
                @endability
                <li><a><i class="fa fa-clone"></i>Склад <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="/dashboard/stock">Товары</a></li>
                        @ability('admin,director,directorShop', 'create-post,edit-user')
                        <li><a href="/dashboard/stock/control">Управление товаров</a></li>
                        @endability
                    </ul>
                </li>
            </ul>
        </div>
        <!--
        <div class="menu_section">
            <h3>Особые</h3>
            <ul class="nav side-menu">
                <li><a><i class="fa fa-bug"></i>Отчет доход компании <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="e_commerce.html">E-commerce</a></li>
                        <li><a href="projects.html">Projects</a></li>
                        <li><a href="project_detail.html">Project Detail</a></li>
                        <li><a href="contacts.html">Contacts</a></li>
                        <li><a href="profile.html">Profile</a></li>
                    </ul>
                </li>

                <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> Выход <span class="label label-danger pull-right">не рекомендуем</span></a></li>
            </ul>
        </div>
-->
    </div>
    <!-- /sidebar menu -->


    <!-- /menu footer buttons -->
    <div class="sidebar-footer hidden-small">
        <a data-toggle="tooltip" data-placement="top" title="Settings" href="/dashboard/settings">
            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
        </a>
        <a data-toggle="tooltip" data-placement="top" title="FullScreen">
            <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
        </a>
        <a data-toggle="tooltip" data-placement="top" title="Lock">
            <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
        </a>
        <a data-toggle="tooltip" data-placement="top" title="Выйти"
            href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
        </a>
    </div>
    <!-- /menu footer buttons -->
    </div>
    </div>

    <!-- top navigation -->
    <div class="top_nav">
        <div class="nav_menu">
            <nav>

                <div class="nav toggle">
                    <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>
                <div class="clock" style="position: absolute;
            left: 50%;
            top: 5px;
                transform: translateX(-50%);">
                    <h2 class="xtime" style="font-size: 3.3rem; font-weight: bold;"></h2>
                </div>

                <ul class="nav navbar-nav navbar-right">
                    <li class="">
                        <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                            @if(Auth::check())
                            <img src="images/img.jpg" alt="">{{{ Auth::user()->name}}} {{{ Auth::user()->surname}}}
                            @endif
                            <span class=" fa fa-angle-down"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-usermenu pull-right">
                            <li><a href="/dashboard/profile"> Профил</a></li>
                            <li>
                                <a href="javascript:;">
                                    <span class="badge bg-red pull-right">50%</span>
                                    <span>Параметры</span>
                                </a>
                            </li>
                            <li><a href="javascript:;">тех поддержка</a></li>
                            <li><a href="/logout" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form><i class="fa fa-sign-out pull-right"></i> Выйти</a></li>
                        </ul>
                    </li>

                    <li role="presentation" class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-envelope-o"></i>
                            <span class="badge bg-green">4</span>
                        </a>
                        <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                            <!--  <li>
                                <a>
                                    <span class="image"><img src="{{asset('tim/dash/images/img.jpg')}}" alt="Profile Image" /></span>
                                    <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                                    <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <span class="image"><img src="{{asset('tim/dash/images/img.jpg')}}" alt="Profile Image" /></span>
                                    <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                                    <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <span class="image"><img src="{{asset('tim/dash/images/img.jpg')}}" alt="Profile Image" /></span>
                                    <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                                    <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <span class="image"><img src="{{asset('tim/dash/images/img.jpg')}}" alt="Profile Image" /></span>
                                    <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                                    <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                                </a>
                            </li>
                            <li>
                                <div class="text-center">
                                    <a>
                                        <strong>See All Alerts</strong>
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                </div>
                            </li> -->
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- /top navigation -->
@endsection