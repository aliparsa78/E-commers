
  @include('layouts.inc.frontnavbar')

   @yield('content')
    <script src="frontend/bootstrap/js/jquery.min.js"></script>
    <script src="frontend/bootstrap/js/owl.carousel.min.js"></script>
    <script src="frontend/bootstrap/js/bootstrap.min.js"></script>
    <script src="frontend/bootstrap/js/bootstrap.bundle.js"></script>
    @if(session('status'))
      <script>
        swal("{{sesstion('status')}}")
      </script>
    @endif
    @yield('scripts')
</body>

</html>