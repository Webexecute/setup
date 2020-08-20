<!DOCTYPE html>
<html lang="en">
    @include('backend.include.header')
<body>
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>

      
      @include('backend.include.body_header')

      @include('backend.include.sidebar')
        <!-- Main Content -->
      <div class="main-content">
        <section class="section">
            @include('backend.include.breadcrumbs')

            @yield('content')
          
        </section>
		
	  </div>
        @include('backend.include.body_footer')
    </div>
  </div>

  @include('backend.include.footer')

  
</body>
</html>