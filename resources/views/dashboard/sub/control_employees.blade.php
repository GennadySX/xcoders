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
                            <h3>Сотрудник</h3>
                        </div>
                        <div class="col-md-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Создавать нового сотрудника <small></small></h2>
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
                                    <form class="form-horizontal form-label-left input_mask" method="post" action="/dashboard/employees/control">
                                        @csrf
                                       <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                            <input type="email" class="form-control" id="inputSuccess3" placeholder="email пользователя" name="email">
                                            <span class="fa fa-at form-control-feedback right" aria-hidden="true"></span>
                                        </div>

                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                            <input type="phone" class="form-control" id="inputSuccess3" placeholder="Номер пользователя" name="id">
                                            <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
                                        </div>


                                        <label for="middle-name" class="control-label col-md-1 col-sm-1 col-xs-12">Место работы</label>
                                        <div class="col-md-4 col-sm-4 col-xs-4 form-group has-feedback">
                                            <select class="form-control" name="region">
                                                @foreach(\App\Regions::all() as $role)
                                                    <option value="{{$role->id}}">{{$role->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <label for="middle-name" class="control-label col-md-2 col-sm-2 col-xs-12">Должности</label>
                                        <div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback">
                                            <select class="form-control" name="role">
                                                @foreach(\App\Member::all() as $region)
                                                    @if(intval($region->id) != 1 && intval($region->id) != 2 )
                                                    <option value="{{$region->id}}">{{$region->display_name}}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="ln_solid"></div>
                                        <div class="form-group ">
                                            <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3 ">
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