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
                            <h3>Профил</h3>
                        </div>

                        <div class="title_right">
                            <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Поиск...">
                                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Искать!</button>
                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Форма личного данных <small></small></h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                            <ul class="dropdown-menu" role="menu">

                                            </ul>
                                        </li>
                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <br />
                                    <form enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="/dashboard/profile/update" method="post">
                                        @csrf
                                        <div class="form-group " >

                                            <div class="container xnb">

                                                <div class="avatar-upload">
                                                    <div class="avatar-edit">
                                                        <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" name="avatar"/>
                                                        <label for="imageUpload"></label>
                                                    </div>
                                                    <div class="avatar-preview">
                                                        <div id="imagePreview" style="background-image: url({{asset('uploads/users/')}}/{{\Illuminate\Support\Facades\Auth::user()->avatar}});">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Имя <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" id="first-name" required="required" name="name" class="form-control col-md-7 col-xs-12" value="{{{Auth::user()->name}}}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Фамилия <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" id="last-name" name="lastname" required="required" class="form-control col-md-7 col-xs-12" value="{{{Auth::user()->surname}}}">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Отчество</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="middle_name" value="{{{Auth::user()->middle_name}}}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                <input type="tel" id="telephone" name="email" required="required" data-validate-length-range="8,20" class="form-control col-md-7 col-xs-12" value="{{{Auth::user()->email}}}">
                                                <span class="fa fa-at form-control-feedback right" aria-hidden="true"></span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Телефон<span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                <input type="tel" id="telephone" name="phone" required="required" data-validate-length-range="8,20" class="form-control col-md-7 col-xs-12" value=" {{{Auth::user()->phone}}}">
                                                <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
                                            </div>
                                        </div>
                                        <div class="form-group">

                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Пол</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <div id="gender" class="btn-group" data-toggle="buttons">
                                                    @if(\Illuminate\Support\Facades\Auth::user()->gender == 0)

                                                    <label class="btn btn-primary active " data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                        <input type="radio" name="gender" value="0"> &nbsp; Муж &nbsp;
                                                    </label>
                                                    <label class="btn btn-danger" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                        <input type="radio" name="gender" value="1"> Жен
                                                    </label>
                                                        @else
                                                        <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                            <input type="radio" name="gender" value="0"> &nbsp; Муж &nbsp;
                                                        </label>
                                                        <label class="btn btn-danger active" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                            <input type="radio" name="gender" value="1"> Жен
                                                        </label>

                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group " >

                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Дата рождения</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12" style="margin-top: 5px">
                                                <input type="date" class="form-control has-feedback-left" id="single_cal3" placeholder="" name="birth" aria-describedby="inputSuccess2Status3" value="{{Auth::user()->birth_date}}">
                                                <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                                                <span id="inputSuccess2Status3" class="sr-only">(успешно)</span>
                                            </div>
                                        </div>
                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                <a href="/dashboard"><button class="btn btn-primary" type="button">отменить</button></a>
                                                <button class="btn btn-warning" type="reset">очистить</button>
                                                <button type="submit" class="btn btn-success send_profile">сохранить</button>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>


        </section>
    </section>

    <style>

        .xnb {
            max-width: 400px;
            margin: 0px auto;
        }

        .avatar-upload {
            position: relative;
            max-width: 205px;
            margin: 50px auto;
        }
        .avatar-upload .avatar-edit {
            position: absolute;
            right: 12px;
            z-index: 1;
            top: 10px;
        }
        .avatar-upload .avatar-edit input {
            display: none;
        }
        .avatar-upload .avatar-edit input + label {
            display: inline-block;
            width: 34px;
            height: 34px;
            margin-bottom: 0;
            border-radius: 100%;
            background: #FFFFFF;
            border: 1px solid transparent;
            box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.12);
            cursor: pointer;
            font-weight: normal;
            transition: all 0.2s ease-in-out;
        }
        .avatar-upload .avatar-edit input + label:hover {
            background: #f1f1f1;
            border-color: #d6d6d6;
        }
        .avatar-upload .avatar-edit input + label:after {
            content: "\f040";
            font-family: 'FontAwesome';
            color: #757575;
            position: absolute;
            top: 10px;
            left: 0;
            right: 0;
            text-align: center;
            margin: auto;
        }
        .avatar-upload .avatar-preview {
            width: 192px;
            height: 192px;
            position: relative;
            border-radius: 100%;
            border: 6px solid #F8F8F8;
            box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.1);
        }
        .avatar-upload .avatar-preview > div {
            width: 100%;
            height: 100%;
            border-radius: 100%;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }

    </style>
    @yield('footer')
@endsection