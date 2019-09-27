@section('profile')
 <div class="row mt">
          <div class="col-lg-12">
            <div class="row content-panel">
              <div class="col-md-4 profile-text mt mb centered">
	                <div class="right-divider hidden-sm hidden-xs">
	                  <h4>1922</h4>
	                  <h6>Баллы</h6>
	                  <h4>290</h4>
	                  <h6>Оценки</h6>
	                  <h4>13,980</h4>
	                  <h6>Общие очков</h6>
	                </div>
	              </div>
              <!-- /col-md-4 -->
              <div class="col-md-4 profile-text">
                <h3>{{{ Auth::user()->name}}} {{{ Auth::user()->surname}}}</h3>
                <h6>{{{ Auth::user()->roles->first()->display_name}}}</h6>
                <p>Я такой-то такой бла бла бла бла блаааааааааааааааааааааааааа.</p>
                <br>
                <p><button class="btn btn-theme03"><i class="fa fa-change"></i> Изменить</button></p>
              </div>
              <!-- /col-md-4 -->
              <div class="col-md-4 centered">
                <div class="profile-pic">
                  <p><img src="{{asset('personal/dashboard/img/ui-sam.jpg')}}" class="img-circle"></p>
                  <p>
                  	<label for="exampleInputFile" class="btn btn-theme"><i class="fa fa-photo"></i> Изменить</label>
                    <button class="btn btn-theme04">Убрать</button>
                   
                  </p>
                </div>
              </div>
              <!-- /col-md-4 -->
            </div>
            <!-- /row -->
          </div>
          <!-- /col-lg-12 -->
          <div class="col-lg-12 mt">
            <div class="row content-panel">
                  <div id="edit" class="tab-pane">
                    <div class="row">
                      <div class="col-lg-8 col-lg-offset-2 detailed">
                        <h4 class="mb bg-left">Личные данные</h4>
                        <form role="form" class="form-horizontal">

                          <div class="form-group" style="display: none;">
                            <div class="col-lg-8" >
                              <input type="file" id="exampleInputFile" class="file-pos">
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="col-lg-2 control-label">Имя</label>
                            <div class="col-lg-6">
                              <input type="text" placeholder=" " id="c-name" class="form-control" value="{{{ Auth::user()->name}}}">
                            </div>
                          </div>


						 <div class="form-group">
                            <label class="col-lg-2 control-label">Фамилия</label>
                            <div class="col-lg-6">
                              <input type="text" placeholder=" " id="lives-in" class="form-control" value="{{{ Auth::user()->surname}}}">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Дата рождения</label>
                            <div class="col-lg-6">
                              <input type="text" placeholder=" " id="lives-in" class="form-control">
                            </div>
                          </div>
                          
                          
                        </form>
                      </div>
                      <div class="col-lg-8 col-lg-offset-2 detailed mt">
                        <h4 class="mb">Контактные данные</h4>
                        <form role="form" class="form-horizontal">
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Адрес</label>
                            <div class="col-lg-6">
                              <input type="text" placeholder=" " id="addr1" class="form-control">
                            </div>
                          </div>
                          
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Телефон</label>
                            <div class="col-lg-6">
                              <input type="text" placeholder=" " id="phone" class="form-control">
                            </div>
                          </div>
                         
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Email почта</label>
                            <div class="col-lg-6">
                              <input type="text" placeholder=" " id="email" class="form-control" value="{{{ Auth::user()->email}}}">
                            </div>
                          </div>
                          
                          <div class="form-group">
                            <div class="col-lg-offset-3 col-lg-10">
                              <button class="btn btn-theme" type="submit">Сохранить</button>
                              <button class="btn btn-theme04" type="button">Отменить</button>
                            </div>
                          </div>
                        </form>
                      </div>
                      <!-- /col-lg-8 -->
                    </div>
                    <!-- /row -->
                  </div>
                  <!-- /tab-pane -->
                </div>
                <!-- /tab-content -->
              </div>
              <!-- /panel-body -->
            </div>
            <!-- /col-lg-12 -->
          </div>
          <!-- /row -->
        </div>
        @endsection