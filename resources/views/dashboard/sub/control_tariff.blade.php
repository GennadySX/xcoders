@extends('dashboard.index')
@include('dashboard.header')
@include('dashboard.footer')
@include('dashboard.aside')
@section('content')
    @yield('header')
    @yield('aside')
    <section id="main-content">
        <section class="wrapper">


            <!-- page content -->
            <div class="right_col" role="main">
                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>Тарифы</h3>
                        </div>
                        <div class="col-md-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Создавать тариф <small></small></h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                            <ul class="dropdown-menu" role="menu">
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <br />
                                    <form class="form-horizontal form-label-left input_mask" method="post" action="/dashboard/tariff/control">
                                        @csrf
                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                            <input type="text" class="form-control has-feedback-left" id="inputSuccess2" placeholder="Название тарифа" name="name">
                                            <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                        </div>

                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                            <input type="number" class="form-control" id="inputSuccess3" placeholder="Стоимость тарифа" name="cost">
                                            <span class="fa fa-dollar form-control-feedback right" aria-hidden="true"></span>
                                        </div>

                                        <div class="form-group">

                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <textarea class="form-control" rows="3" placeholder="Описание тарифа" name="desc"></textarea>
                                            </div>
                                        </div>


                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                                <button type="button" class="btn btn-default">Отменить</button>
                                                <button class="btn btn-warning" type="reset">Очистить</button>
                                                <button type="submit" class="btn btn-success">Создать</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>




            </div>


        </section>
    </section>
    @yield('footer')
@endsection