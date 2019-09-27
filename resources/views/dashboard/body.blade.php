@include('dashboard.aside')

@section('body')

  @yield('aside')
    
    <section id="main-content">
      <section class="wrapper">
         
         @include('dashboard.main')
         @yield('main')
          <!--place for div -->

        </div>
      </section>
    </section>
  @endsection



