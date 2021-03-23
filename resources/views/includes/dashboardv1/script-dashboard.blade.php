  {{-- user & admin --}}
@stack('prepend-script')
  <script src="{{ asset('/dashboardv1/docs/assets/js/feather-icons/feather.min.js') }}"></script>
  <script src="{{ asset('/dashboardv1/docs/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
  <script src="{{ asset('/dashboardv1/docs/assets/js/app.js') }}"></script>

  <script src="{{ asset('/dashboardv1/docs/assets/vendors/chartjs/Chart.min.js') }}"></script>
  <script src="{{ asset('/dashboardv1/docs/assets/vendors/apexcharts/apexcharts.min.js') }}"></script>
  {{-- <script src="{{ asset('/dashboardv1/docs/assets/js/pages/dashboard.js') }}"></script> --}}
  <script src="{{ asset('https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('/dashboardv1/docs/assets/js/main.js') }}"></script>
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
    <script>
    $("#datepicker").datepicker({
      format      : " yyyy",
      viewMode    : "years",
      minViewMode : "years"
    });
    </script>
    @stack('addon-script')
