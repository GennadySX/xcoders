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
                            <h3>Мой тариф</h3>
                        </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Мой активные тарифы <small> </small></h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">Settings 1</a>
                                        </li>
                                        <li><a href="#">Settings 2</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>

                        <div class="x_content">


                            <div class="table-responsive">
                                <table class="table table-striped jambo_table bulk_action">
                                    <thead>
                                    <tr class="headings">
                                        <th>
                                            <input type="checkbox" id="check-all" class="flat">
                                        </th>
                                        <th class="column-title">Название </th>
                                        <th class="column-title">Стоимость</th>
                                        <th class="column-title">Описание </th>
                                        @ability('abonent', 'create-post,edit-user')
                                        <th class="column-title">Контрол </th>
                                        @endability
                                        </th>
                                        <th class="bulk-actions" colspan="7">
                                            <a class="antoo" style="color:#fff; font-weight:500;">Отмечено ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                                        </th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    <? $mytariff = \App\MyTariff::where('user_id', \Illuminate\Support\Facades\Auth::user()->getAuthIdentifier())->get(); ?>
                                    @foreach(\App\Tariff::where('id',$mytariff[0]['tariff_id'])->get() as $tarif)
                                    <tr class="even pointer">
                                        <td class="a-center ">
                                            <input type="checkbox" class="flat" name="table_records">
                                        </td>

                                        <td class="name">{{$tarif->name}}</td>
                                        <td class="cost">{{$tarif->cost}} </td>
                                        <td class="desc">{{$tarif->desc}} <i class="success fa fa-long-arrow-up"></i></td>
                                        @ability('abonent', 'create-post,edit-user')
                                        <td class="del">

                                            <a href="/dashboard/tariff"><button class="btn btn-warning" type="submit">Изменить</button></a>
                                       </td>
                                        @endability
                                    </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>


                        </div>
                    </div>
                </div>
            </div>


        </section>
    </section>
    @yield('footer')
@endsection