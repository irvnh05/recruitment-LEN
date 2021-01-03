   {{-- landing --}}

   <!--====== jquery js ======-->
    <script src="{{ asset('landing/assets/js/vendor/modernizr-3.6.0.min.js') }}"></script> 
    <script src="{{ asset('landing/assets/js/vendor/jquery-1.12.4.min.js') }}"></script> 

    <!--====== Bootstrap js ======-->
    <script src="{{ asset('landing/assets/js/bootstrap.min.js') }}"></script> 
    <script src="{{ asset('landing/assets/js/popper.min.js') }}"></script> 

    <!--====== Scrolling Nav js ======-->
    <script src="{{ asset('landing/assets/js/jquery.easing.min.js') }}"></script> 
    <script src="{{ asset('landing/assets/js/scrolling-nav.js') }}"></script> 

    <!--====== Magnific Popup js ======-->
    <script src="{{ asset('landing/assets/js/jquery.magnific-popup.min.js') }}"></script> 

    <!--====== Main js ======-->
    <script src="{{ asset('landing/assets/js/main.js') }}"></script> 

    <script src="{{ asset('/dashboard/docs/js/jquery.min.js') }}"></script>
  <script
  src="https://code.jquery.com/jquery-3.5.1.js"
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.21/datatables.min.js"></script>
  {{-- <script src="{{ asset('https://cdn.datatables.net/v/dt/dt-1.10.21/datatables.min.js') }}"></script> --}}
      <script>
      $("#datatable").DataTable();
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <script>
      $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
      });
    </script>
    @stack('addon-script')
