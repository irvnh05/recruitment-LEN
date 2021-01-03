    {{-- user & admin --}}
    @stack('prepend-style')
    <link rel="stylesheet" href="{{ asset('dashboardv1/docs/assets/css/bootstrap.css') }}">
    
    <link rel="stylesheet" href="{{ asset('dashboardv1/docs/assets/vendors/chartjs/Chart.min.css') }}">

    <link rel="stylesheet" href="{{ asset('dashboardv1/docs/assets/vendors/perfect-scrollbar/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboardv1/docs/assets/css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.21/datatables.min.css"/>
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" > --}}
    <link rel="stylesheet" href="{{ asset('https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous') }}">

    {{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> --}}
    {{-- <link rel="stylesheet" href="{{ asset('https://cdn.datatables.net/v/bs4/dt-1.10.21/datatables.min.css') }}"> --}}
     @stack('addon-style')

