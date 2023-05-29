<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="{{ url('pptx/css/pptxjs.css')}}">
        <link rel="stylesheet" href="{{ url('pptx/css/nv.d3.min.css') }}">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

        <link rel="apple-touch-icon" sizes="57x57" href="{{ url('theme/assets/favicon/apple-icon-57x57.png')  }}">
        <link rel="apple-touch-icon" sizes="60x60" href="{{ url('theme/assets/favicon/apple-icon-60x60.png') }}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{ url('theme/assets/favicon/apple-icon-72x72.png') }}">
        <link rel="apple-touch-icon" sizes="76x76" href="{{ url('theme/assets/favicon/apple-icon-76x76.png') }}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{ url('theme/assets/favicon/apple-icon-114x114.png') }}">
        <link rel="apple-touch-icon" sizes="120x120" href="{{ url('theme/assets/favicon/apple-icon-120x120.png') }}">
        <link rel="apple-touch-icon" sizes="144x144" href="{{ url('theme/assets/favicon/apple-icon-144x144.png') }}">
        <link rel="apple-touch-icon" sizes="152x152" href="{{ url('theme/assets/favicon/apple-icon-152x152.png') }}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ url('theme/assets/favicon/apple-icon-180x180.png') }}">
        <link rel="icon" type="image/png" sizes="192x192" href="{{ url('theme/assets/favicon/android-icon-192x192.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ url('theme/assets/favicon/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="96x96" href="{{ url('theme/assets/favicon/favicon-96x96.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ url('theme/assets/favicon/favicon-16x16.png') }} ">
        {{-- <link rel="manifest" href="assets/favicon/manifest.json"> --}}
        {{-- <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="assets/favicon/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff"> --}}
        <!-- Vendors styles-->
        <link rel="stylesheet" href="{{ url('theme/vendors/simplebar/css/simplebar.css') }} ">
        <link rel="stylesheet" href="{{ url('theme/css/vendors/simplebar.css') }} ">
        <!-- Main styles for this application-->
        <link href="{{ url('theme/css/style.css') }} " rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
        <!-- We use those styles to show code examples, you should remove them in your application.-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/prismjs@1.23.0/themes/prism.css">
        <link href="{{ url('theme/css/examples.css') }} " rel="stylesheet">
        <!-- Global site tag (gtag.js) - Google Analytics-->
        <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>
        {{-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script> --}}
        <script type="text/javascript" src="{{url('pptx/js/jquery-1.11.3.min.js')}}"></script>
        <script type="text/javascript" src="{{ url('pptx/js/jszip.min.js') }}"></script>
        <script type="text/javascript" src="{{ url('pptx/js/filereader.js') }}"></script>
        <script type="text/javascript" src="{{ url('pptx/js/d3.min.js') }}"></script>
        <script type="text/javascript" src="{{ url('pptx/js/nv.d3.min.js') }}"></script>
        <script type="text/javascript" src="{{ url('pptx/js/pptxjs.js') }}"></script>
        <script type="text/javascript" src="{{ url('pptx/js/divs2slides.js') }}"></script>

        <script type="text/javascript" src="{{ url('pptx/js/jquery.fullscreen-min.js') }}"></script>
        <script>
          window.dataLayer = window.dataLayer || [];

          function gtag() {
            dataLayer.push(arguments);
          }
          gtag('js', new Date());
          // Shared ID
          gtag('config', 'UA-118965717-3');
          // Bootstrap ID
          gtag('config', 'UA-118965717-5');
        </script>
        <link href="{{ url('theme/vendors/@coreui/chartjs/css/coreui-chartjs.css') }}  " rel="stylesheet">

        <!-- Styles -->
        @livewireStyles
    </head>
    {{-- <body class="font-sans antialiased">
        <x-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

 --}}

 <body>
    <div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
      <div class="sidebar-brand d-none d-md-flex">
        {{-- <svg class="sidebar-brand-full" width="118" height="46" alt="CoreUI Logo">
          <use xlink:href="{{ url('theme/assets/brand/coreui.svg#full') }}"></use>
        </svg>
        <svg class="sidebar-brand-narrow" width="46" height="46" alt="CoreUI Logo">
          <use xlink:href="{{ url('theme/assets/brand/coreui.svg#signet') }}"></use>
        </svg> --}}
        <h2>LOGO</h2>
      </div>
      <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="">
        <li class="nav-item"><a class="nav-link" href="index.html">
            <svg class="nav-icon">
              <use xlink:href="{{ url('theme/vendors/@coreui/icons/svg/free.svg#cil-speedometer') }}"></use>
            </svg> Dashboard<span class="badge badge-sm bg-info ms-auto">NEW</span></a></li>
        <li class="nav-title">Makalah & Stream</li>
        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
            <svg class="nav-icon">
              <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-file"></use>
            </svg> File</a>
          <ul class="nav-group-items">
            @if(Auth::user()->role=='user')
            <li class="nav-item"><a class="nav-link" href="{{ route('registermakalah') }}"><span class="nav-icon"></span> Register</a></li>
            @endif
            <li class="nav-item"><a class="nav-link" href="buttons/button-group.html"><span class="nav-icon"></span> Submited</a></li>
            <li class="nav-item"><a class="nav-link" href="buttons/dropdowns.html"><span class="nav-icon"></span> History</a></li>
          </ul>
        </li>
        <li class="nav-title">Peserta</li>
        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
            <svg class="nav-icon">
              <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-file"></use>
            </svg> Peserta</a>
          <ul class="nav-group-items">
            @if(Auth::user()->role=='user')
            <li class="nav-item"><a class="nav-link" href="{{ route('daftarpeserta') }}"><span class="nav-icon"></span> Register</a></li>
            @endif
            <li class="nav-item"><a class="nav-link" href="buttons/button-group.html"><span class="nav-icon"></span> Submited</a></li>
            <li class="nav-item"><a class="nav-link" href="buttons/dropdowns.html"><span class="nav-icon"></span> History</a></li>
          </ul>
        </li>
        <li class="nav-item"><a class="nav-link" href="typography.html">
            <svg class="nav-icon">
              <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-pencil"></use>
            </svg> Administrator</a></li>
        <li class="nav-title">Administrator</li>
        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
            <svg class="nav-icon">
              <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-puzzle"></use>
            </svg> Event</a>
          <ul class="nav-group-items">
            <li class="nav-item"><a class="nav-link" href="{{ route('adminviewperiodeevent') }}"><span class="nav-icon"></span> Manage Event</a></li>
            <li class="nav-item"><a class="nav-link" href="base/breadcrumb.html"><span class="nav-icon"></span> History Event</a></li>

          </ul>
        </li>
        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
            <svg class="nav-icon">
              <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-puzzle"></use>
            </svg> Stream</a>
          <ul class="nav-group-items">
            <li class="nav-item"><a class="nav-link" href="{{ route('adminviewstream') }}"><span class="nav-icon"></span>Manage Stream</a></li>
            <li class="nav-item"><a class="nav-link" href="base/breadcrumb.html"><span class="nav-icon"></span> History Stream</a></li>

          </ul>
        </li>
        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
            <svg class="nav-icon">
              <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-cursor"></use>
            </svg> Peserta</a>
          <ul class="nav-group-items">
            <li class="nav-item"><a class="nav-link" href="buttons/buttons.html"><span class="nav-icon"></span> Peserta Aktif</a></li>
            <li class="nav-item"><a class="nav-link" href="buttons/button-group.html"><span class="nav-icon"></span> History</a></li>
            <li class="nav-item"><a class="nav-link" href="buttons/dropdowns.html"><span class="nav-icon"></span> Dropdowns</a></li>
          </ul>
        </li>
        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
            <svg class="nav-icon">
              <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-star"></use>
            </svg> Juri</a>
          <ul class="nav-group-items">
            <li class="nav-item"><a class="nav-link" href="{{ route('adminmanagejuri') }}"> Manage Juri</a></li>
            <li class="nav-item"><a class="nav-link" href="icons/coreui-icons-brand.html"> CoreUI Icons - Brand</a></li>
            <li class="nav-item"><a class="nav-link" href="icons/coreui-icons-flag.html"> CoreUI Icons - Flag</a></li>
          </ul>
        </li>
        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
            <svg class="nav-icon">
              <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bell"></use>
            </svg> Materi IQPC</a>
          <ul class="nav-group-items">
            <li class="nav-item"><a class="nav-link" href="notifications/alerts.html"><span class="nav-icon"></span> Alerts</a></li>
            <li class="nav-item"><a class="nav-link" href="notifications/badge.html"><span class="nav-icon"></span> Badge</a></li>
            <li class="nav-item"><a class="nav-link" href="notifications/modals.html"><span class="nav-icon"></span> Modals</a></li>
            <li class="nav-item"><a class="nav-link" href="notifications/toasts.html"><span class="nav-icon"></span> Toasts</a></li>
          </ul>
        </li>
        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
            <svg class="nav-icon">
              <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bell"></use>
            </svg> Materi TKMPN</a>
          <ul class="nav-group-items">
            <li class="nav-item"><a class="nav-link" href="notifications/alerts.html"><span class="nav-icon"></span> Alerts</a></li>
            <li class="nav-item"><a class="nav-link" href="notifications/badge.html"><span class="nav-icon"></span> Badge</a></li>
            <li class="nav-item"><a class="nav-link" href="notifications/modals.html"><span class="nav-icon"></span> Modals</a></li>
            <li class="nav-item"><a class="nav-link" href="notifications/toasts.html"><span class="nav-icon"></span> Toasts</a></li>
          </ul>
        </li>
        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
            <svg class="nav-icon">
              <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bell"></use>
            </svg> Materi IQPC</a>
          <ul class="nav-group-items">
            <li class="nav-item"><a class="nav-link" href="notifications/alerts.html"><span class="nav-icon"></span> Alerts</a></li>
            <li class="nav-item"><a class="nav-link" href="notifications/badge.html"><span class="nav-icon"></span> Badge</a></li>
            <li class="nav-item"><a class="nav-link" href="notifications/modals.html"><span class="nav-icon"></span> Modals</a></li>
            <li class="nav-item"><a class="nav-link" href="notifications/toasts.html"><span class="nav-icon"></span> Toasts</a></li>
          </ul>
        </li>
        <li class="nav-item"><a class="nav-link" href="widgets.html">
            <svg class="nav-icon">
              <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-calculator"></use>
            </svg> Widgets<span class="badge badge-sm bg-info ms-auto">NEW</span></a></li>
        <li class="nav-divider"></li>
        <li class="nav-title">Account</li>
        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
            <svg class="nav-icon">
              <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-star"></use>
            </svg> Pages</a>
          <ul class="nav-group-items">
            <li class="nav-item"><a class="nav-link" href="login.html" target="_top">
                <svg class="nav-icon">
                  <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-account-logout"></use>
                </svg> Login</a></li>
            <li class="nav-item"><a class="nav-link" href="register.html" target="_top">
                <svg class="nav-icon">
                  <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-account-logout"></use>
                </svg> Register</a></li>
            <li class="nav-item"><a class="nav-link" href="404.html" target="_top">
                <svg class="nav-icon">
                  <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bug"></use>
                </svg> Error 404</a></li>
            <li class="nav-item"><a class="nav-link" href="500.html" target="_top">
                <svg class="nav-icon">
                  <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bug"></use>
                </svg> Error 500</a></li>
          </ul>
        </li>
        <li class="nav-item ">
            <form method="POST" action="{{ route('logout') }}">
            @csrf

            <a class="nav-link" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                            this.closest('form').submit();">
                           {{-- <i class="nav-icon fas fa-sign-out-alt"></i> --}}
                           {{ __('Log Out') }}
        </a>
        </form></li>
        <li class="nav-item"><a class="nav-link nav-link-danger" href="route(" target="_top">
            <svg class="nav-icon">
              <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-layers"></use>
            </svg> Try CoreUI
            <div class="fw-semibold">PRO</div>
          </a></li>
      </ul>
      <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
    </div>
    <div class="wrapper d-flex flex-column min-vh-100 bg-light">
      <header class="header header-sticky mb-4">
        <div class="container-fluid">
          <button class="header-toggler px-md-0 me-md-3" type="button" onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">
            <svg class="icon icon-lg">
              <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-menu"></use>
            </svg>
          </button><a class="header-brand d-md-none" href="#">
            <svg width="118" height="46" alt="CoreUI Logo">
              <use xlink:href="assets/brand/coreui.svg#full"></use>
            </svg></a>
          <ul class="header-nav d-none d-md-flex">
            <li class="nav-item"><a class="nav-link" href="#">Dashboard</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Users</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Settings</a></li>
          </ul>
          <ul class="header-nav ms-auto">
            <li class="nav-item"><a class="nav-link" href="#">
                <svg class="icon icon-lg">
                  <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bell"></use>
                </svg></a></li>
            <li class="nav-item"><a class="nav-link" href="#">
                <svg class="icon icon-lg">
                  <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-list-rich"></use>
                </svg></a></li>
            <li class="nav-item"><a class="nav-link" href="#">
                <svg class="icon icon-lg">
                  <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-envelope-open"></use>
                </svg></a></li>
          </ul>
          <ul class="header-nav ms-3">
            <li class="nav-item dropdown"><a class="nav-link py-0" data-coreui-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <div class="avatar avatar-md"><img class="avatar-img" src="assets/img/avatars/8.jpg" alt="user@email.com"></div>
              </a>
              <div class="dropdown-menu dropdown-menu-end pt-0">
                <div class="dropdown-header bg-light py-2">
                  <div class="fw-semibold">Account</div>
                </div><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bell"></use>
                  </svg> Updates<span class="badge badge-sm bg-info ms-2">42</span></a><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-envelope-open"></use>
                  </svg> Messages<span class="badge badge-sm bg-success ms-2">42</span></a><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-task"></use>
                  </svg> Tasks<span class="badge badge-sm bg-danger ms-2">42</span></a><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-comment-square"></use>
                  </svg> Comments<span class="badge badge-sm bg-warning ms-2">42</span></a>
                <div class="dropdown-header bg-light py-2">
                  <div class="fw-semibold">Settings</div>
                </div><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-user"></use>
                  </svg> Profile</a><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-settings"></use>
                  </svg> Settings</a><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-credit-card"></use>
                  </svg> Payments<span class="badge badge-sm bg-secondary ms-2">42</span></a><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-file"></use>
                  </svg> Projects<span class="badge badge-sm bg-primary ms-2">42</span></a>
                <div class="dropdown-divider"></div><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-lock-locked"></use>
                  </svg> Lock Account</a><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-account-logout"></use>
                  </svg> Logout</a>
              </div>
            </li>
          </ul>
        </div>
        <div class="header-divider"></div>
        <div class="container-fluid">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb my-0 ms-2">
              <li class="breadcrumb-item">
                <!-- if breadcrumb is single--><span>Home</span>
              </li>
              <li class="breadcrumb-item active"><span>Dashboard</span></li>
            </ol>
          </nav>
        </div>
      </header>
      <div class="body flex-grow-1 px-3">
        <div class="container-xl">
            <div class="col">
                <div>
                    {{-- <div class="row">
                        <h2>List Peserta</h2>
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header bg-secondary text-light">
                                  Inovator
                                </div>
                                <div class="card-body">
                                    <table id="example" class="table table-bordered" style="width:100%">


                                        <thead>
                                                <th>No</th>
                                                <th>Nama Team</th>
                                                <th>Kategori</th>
                                                <th>Status</th>
                                                <th>Anggota Team</th>
                                                <th>Upload Makalah</th>
                                            </thead>
                                            <tbody>
                                                @php
                                                $i=1;
                                                @endphp
                                                @foreach($peserta as $p)
                                                <tr>
                                                    <td>{{ $i++ }}</td>
                                                    <td>{{ $p->nama_team }}</td>
                                                    <td>{{ $p->kategori }}</td>
                                                    <td>{{ $p->status }}</td>
                                                    <td><button class="btn btn-primary">Anggota</button></td>
                                                    <td><a class="btn btn-success" href="{{ route('detailregistermakalah',"XIAA") }}" >Detail</a></td>
                                                </tr>
                                                @endforeach;
                                            </tbody>
                                        </table>
                                </div>
                              </div>
                      </div>
                    </div>
                    <p class="pt-3"></p> --}}
                    <div class="row">

                                  <div class="row gutters-sm">
                                    <div class="col-md-4 mb-3">
                                      <div class="card">
                                        <div class="card-body">
                                          <div class="d-flex flex-column align-items-center text-center">
                                            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="img-fluid" width="250">
                                            <div class="mt-3">
                                                <h2>Nama Team</h2>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="card mt-3">
                                        <h4>Form Upload</h4>
                                        <ul class="list-group list-group-flush">
                                          <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                            <label for="">Upload Materi (PPT)</label>
                                            <input type="file" name="" id="" class="form-control">
                                          </li>
                                          <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                            <label for="">Upload Materi (PDF)</label>
                                            <input type="file" name="" id="" class="form-control">
                                          </li>
                                          <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                            <label for="">Upload Ringkasan Mater(PDF)</label>
                                            <input type="file" name="" id="" class="form-control">
                                          </li>
                                          <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                            <label for="">Upload Video <span>(Max mb)</span></label>
                                            <input type="file" name="" id="" class="form-control">
                                          </li>
                                          <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                            <button class="btn btn-success">Submit</button>
                                          </li>
                                        </ul>
                                      </div>
                                    </div>
                                    <div class="col-md-8">
                                      <div class="card mb-3">
                                        <div class="card-body">
                                          <div class="row">
                                            <div class="col-sm-3">
                                              <h6 class="mb-0">Nama Team</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                Alfrinaldi
                                            </div>
                                          </div>
                                          <hr>
                                          <div class="row">
                                            <div class="col-sm-3">
                                              <h6 class="mb-0">Kategori</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                              QCP
                                            </div>
                                          </div>
                                          <hr>
                                          <div class="row">
                                            <div class="col-sm-3">
                                              <h6 class="mb-0">Stream</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                1A
                                            </div>
                                          </div>
                                          <hr>
                                          <div class="row">
                                            <div class="col-sm-3">
                                              <h6 class="mb-0">Perusahaan</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                              Senang Bahagia Selamanya
                                            </div>
                                          </div>
                                          <hr>
                                          <div class="row">
                                            <div class="col-sm-3">
                                              <h6 class="mb-0">Materi PPT</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                              <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Lihat File</button>
                                            </div>
                                          </div>
                                          <hr>
                                          <div class="row">
                                            <div class="col-sm-3">
                                              <h6 class="mb-0">Materi PDF</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                              <button class="btn btn-success">Lihat File</button>
                                            </div>
                                          </div>
                                          <hr>
                                          <div class="row">
                                            <div class="col-sm-3">
                                              <h6 class="mb-0">Ringkasan Materi</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                              <button class="btn btn-success">Lihat File</button>
                                            </div>
                                          </div>
                                          <hr>
                                          <div class="row">
                                            <div class="col-sm-3">
                                              <h6 class="mb-0">Video</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                              <button class="btn btn-success">Lihat File</button>
                                            </div>
                                          </div>
                                          <hr>
                                          {{-- <div class="row">
                                            <div class="col-sm-12">
                                              <a class="btn btn-info " target="__blank" href="https://www.bootdey.com/snippets/view/profile-edit-data-and-skills">Edit</a>
                                            </div>
                                          </div> --}}
                                        </div>
                                      </div>

                                      <div class="row gutters-sm">
                                        <div class="col-sm-6 mb-3">
                                          <div class="card h-100">
                                            <div class="card-body">
                                              <h6 class="d-flex align-items-center mb-3">Download Template Materi</h6>
                                                <label for="">Template Materi</label>
                                                <br>
                                              <button class="btn btn-primary">Download Tempalte </button>
                                              <hr>
                                                <label for="">Template Ringkasan Materi</label>
                                                <br>
                                                <button class="btn btn-primary">Download Template</button>
                                            <hr>
                                            </div>
                                          </div>
                                        </div>
                                      </div>



                                    </div>
                                  </div>

                                </div>
                                <div id="slide-resolte-contaniner" ></div>


                    <button class="btn btn-warning">Back</button>
                </div>
                <!-- Button trigger modal -->


                  <!-- Modal -->
                  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog "style="max-width:95%">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">

                            <div id="result">

                            </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  {{-- <script type="text/javascript" src="{{ url('pptx/') }}"></script> --}}

            </div>
        </div>
        </div>
      </div>
      <footer class="footer">
        {{-- <div><a href="https://coreui.io">CoreUI </a><a href="https://coreui.io">Bootstrap Admin Template</a> © 2022 creativeLabs.</div>
        <div class="ms-auto">Powered by&nbsp;<a href="https://coreui.io/docs/">CoreUI UI Components</a></div> --}}
      </footer>
    </div>
    <!-- CoreUI and necessary plugins-->
    <script src="{{ url('theme/vendors/@coreui/coreui/js/coreui.bundle.min.js') }}"></script>
    <script src="{{ url('theme/vendors/simplebar/js/simplebar.min.js') }}"></script>
    <!-- Plugins and scripts required by this view-->
    <script src="{{ url('theme/vendors/chart.js/js/chart.min.js') }}"></script>
    <script src="{{ url('theme/vendors/@coreui/chartjs/js/coreui-chartjs.js') }} "></script>
    <script src="{{ url('theme/vendors/@coreui/utils/js/coreui-utils.js') }}"></script>
    <script src="{{ url('theme/js/main.js') }}"></script>

    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"> </script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>


                   <script>

                // $("#slide-resolte-contaniner").pptxToHtml({
                //     pptxFileUrl: "pptx/test.pptx",
                //     slidesScale: "50%",
                //     slideMode: false,
                //     keyBoardShortCut: false
                //   });

                // $(document).ready(function() {
                // 		var oldWidth, oldMargin ,isFullscreenMode=false;
                // 		$("#fullscreen-btn").on("click", function(){

                // 			if(!isFullscreenMode){
                // 				oldWidth = $("#result .slide").css("width");
                // 				oldMargin = $("#result .slide").css("margin");
                // 				$("#result .slide").css({
                // 					"width": "99%",
                // 					"margin": "0 auto"
                // 				})
                // 				$("#result").toggleFullScreen();
                // 				isFullscreenMode = true;
                // 			}else{
                // 				$("#result .slide").css({
                // 					"width": oldWidth,
                // 					"margin": oldMargin
                // 				})
                // 				$("#result").toggleFullScreen();
                // 				isFullscreenMode = false;
                // 			}
                // 		});
                // 		$(document).bind("fullscreenchange", function() {

                // 			if(!$(document).fullScreen()){
                // 				$("#result .slide").css({
                // 					"width": oldWidth,
                //   					"margin": oldMargin
                // 				})
                // 			}
                // 		});
                //     });



                    $("#result").pptxToHtml({
                	pptxFileUrl: 'http://127.0.0.1:8004/pptx/test.pptx',
                	fileInputId: "uploadFileInput",
                	slideMode: true,
                	keyBoardShortCut: true,
                	slideModeConfig: {  //on slide mode (slideMode: true)
                	    first: 1,
                	    nav: true, /** true,false : show or not nav buttons*/
                	    navTxtColor: "white", /** color */
                	    navNextTxt:"&#8250;", //">"
                	    navPrevTxt: "&#8249;", //"<"
                	    showPlayPauseBtn: true,/** true,false */
                	    keyBoardShortCut: true, /** true,false */
                	    showSlideNum: true, /** true,false */
                	    showTotalSlideNum: true, /** true,false */
                	    autoSlide: false, /** false or seconds (the pause time between slides) , F8 to active(keyBoardShortCut: true) */
                	    randomAutoSlide: false, /** true,false ,autoSlide:true */
                	    loop: false,  /** true,false */
                	    background: "black", /** false or color*/
                	    transition: "default", /** transition type: "slid","fade","default","random" , to show transition efects :transitionTime > 0.5 */
                	    transitionTime: 1 /** transition time in seconds */
                	}
                });

                </script>



  </body>




        {{-- @stack('modals')

        @livewireScripts
    </body> --}}
</html>
