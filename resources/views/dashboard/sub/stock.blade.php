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
                            <h3>Товары</h3>
                        </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Наличие товары<small> </small></h2>
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

                                        @ability('admin,director,directorShop,manager', 'create-post,edit-user')
                                        <th class="column-title">Контрол </th>
                                        @endability

                                        <th class="bulk-actions" colspan="7">
                                            <a class="antoo" style="color:#fff; font-weight:500;">Отмечено ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                                        </th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @foreach(\App\Stock::all() as $good)
                                        <tr class="even pointer">
                                            <td class="a-center ">
                                                <input type="checkbox" class="flat" name="table_records">
                                            </td>
                                            <td class="name">{{$good->name}}</td>
                                            <td class="cost">{{$good->cost}} <i class="danger fa fa-long-arrow-down"></i></td>
                                        <td class="desc">{{$good->desc}} </td>
                                        @ability('root', 'create-post,edit-user')
                                        <td class="del">
                                            <form action="/dashboard/stock/connect" method="post">
                                                @csrf
                                                <input type="hidden" name="id" value="{{$good->id}}">
                                                <button class="btn btn-success" type="submit">подключиться</button>
                                            </form></td>
                                        @endability
                                        @ability('admin,director,directorShop,manager', 'create-post,edit-user')
                                        <td class="del">
                                            <form action="/dashboard/stock/del" method="post">
                                                @csrf
                                            <input type="hidden" name="id" value="{{$good->id}}">
                                            <button class="btn btn-danger" type="submit">удалить</button>
                                        </form></td>
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