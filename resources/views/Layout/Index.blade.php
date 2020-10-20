<!DOCTYPE html>
<html lang="en">
  @include('Layout.Head')
  @yield('css')
<body id="page-top">
  <!-- Page Wrapper -->
  <div id="wrapper">
  
  @include('Layout.Sidebar')

  <div id="content-wrapper" class="d-flex flex-column">
    <div id="content">
      @include('Layout.Navbar')
      <div class="container-fluid">
        @yield('content')
      </div>
    </div>
    @include('Layout.Footer')
  </div>

  </div>
  @include('Layout.Scripts')
  @yield('script')
</body>
</html>