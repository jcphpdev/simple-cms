<!DOCTYPE html>
<!--
* Backstrap - Free Bootstrap Admin Template
* @version v0.2.0
* @link https://backstrap.net
* Copyright (c) 2018 Cristian Tabacitu
* Licensed under MIT (https://coreui.io/license)
-->

<html lang="en">
  <head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Backoffice - {{ config('app.name', 'Laravel') }}</title>
    <!-- Icons-->
    <link href="{{ asset('assets/css/coreui-icons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/simple-line-icons.css') }}" rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic" rel="stylesheet">
    <!-- Main styles for this application-->
    <link href="{{ asset('assets/css/backStrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/pace.min.css') }}" rel="stylesheet">
    
  </head>
  <body class="app aside-menu-fixed sidebar-lg-show">
    <header class="app-header bg-light border-0 navbar">
      <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto ml-3" type="button" data-toggle="sidebar-show"><span class="navbar-toggler-icon"></span></button><a class="navbar-brand" href="#"><b>OMAP</b> <span>admin</span></a>
      <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show"><span class="navbar-toggler-icon"></span></button>
      <ul class="nav navbar-nav ml-auto">
        <li class="nav-item dropdown">
          @auth
          <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
            <img class="img-avatar" src="storage/avatars/{{ Auth::user()->avatar }}" alt="{{ Auth::user()->name }}">
          </a>
          <div class="dropdown-menu dropdown-menu-right">
            <div class="dropdown-header text-center"><strong>Account</strong></div>
            <a class="dropdown-item" href="{{ route('profile') }}"><i class="fa fa-user"></i> Profile</a>
            <div class="dropdown-divider"></div>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="dropdown-item" type="submit">
                    <i class="fa fa-lock"></i>
                    {{ __('Logout') }}
                </button>
            </form>
          </div>
          @endauth
        </li>
      </ul>
      <button class="navbar-toggler aside-menu-toggler d-md-down-none" type="button" data-toggle="dropdown"><span class="navbar-toggler-icon"></span></button>
      <button class="navbar-toggler aside-menu-toggler d-lg-none mr-3" type="button" data-toggle="dropdown"><span class="navbar-toggler-icon"></span></button>
    </header>
    <div class="app-body">
      <div class="sidebar sidebar-pills bg-transparent">
        <nav class="sidebar-nav">
          <ul class="nav">
            <li class="nav-item"><a class="nav-link" href="index.html"><i class="nav-icon la la-lg la-dashboard"></i> Dashboard</a></li>
            <li class="nav-title">Theme</li>
            <li class="nav-item"><a class="nav-link" href="colors.html"><i class="nav-icon la la-lg la-bullseye"></i> Colors</a></li>
            <li class="nav-item"><a class="nav-link" href="typography.html"><i class="nav-icon la la-lg la-pencil"></i> Typography</a></li>
            <li class="nav-title">Components</li>
            <li class="nav-item nav-dropdown"><a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon la la-lg la-bank"></i> Base</a>
              <ul class="nav-dropdown-items">
                <li class="nav-item"><a class="nav-link" href="base/breadcrumb.html"><i class="nav-icon la la-lg la-puzzle"></i> Breadcrumb</a></li>
                <li class="nav-item"><a class="nav-link" href="base/cards.html"><i class="nav-icon la la-lg la-puzzle"></i> Cards</a></li>
                <li class="nav-item"><a class="nav-link" href="base/carousel.html"><i class="nav-icon la la-lg la-puzzle"></i> Carousel</a></li>
                <li class="nav-item"><a class="nav-link" href="base/collapse.html"><i class="nav-icon la la-lg la-puzzle"></i> Collapse</a></li>
                <li class="nav-item"><a class="nav-link" href="base/forms.html"><i class="nav-icon la la-lg la-puzzle"></i> Forms</a></li>
                <li class="nav-item"><a class="nav-link" href="base/jumbotron.html"><i class="nav-icon la la-lg la-puzzle"></i> Jumbotron</a></li>
                <li class="nav-item"><a class="nav-link" href="base/list-group.html"><i class="nav-icon la la-lg la-puzzle"></i> List group</a></li>
                <li class="nav-item"><a class="nav-link" href="base/navs.html"><i class="nav-icon la la-lg la-puzzle"></i> Navs</a></li>
                <li class="nav-item"><a class="nav-link" href="base/pagination.html"><i class="nav-icon la la-lg la-puzzle"></i> Pagination</a></li>
                <li class="nav-item"><a class="nav-link" href="base/popovers.html"><i class="nav-icon la la-lg la-puzzle"></i> Popovers</a></li>
                <li class="nav-item"><a class="nav-link" href="base/progress.html"><i class="nav-icon la la-lg la-puzzle"></i> Progress</a></li>
                <li class="nav-item"><a class="nav-link" href="base/scrollspy.html"><i class="nav-icon la la-lg la-puzzle"></i> Scrollspy</a></li>
                <li class="nav-item"><a class="nav-link" href="base/switches.html"><i class="nav-icon la la-lg la-puzzle"></i> Switches</a></li>
                <li class="nav-item"><a class="nav-link" href="base/tables.html"><i class="nav-icon la la-lg la-puzzle"></i> Tables</a></li>
                <li class="nav-item"><a class="nav-link" href="base/tabs.html"><i class="nav-icon la la-lg la-puzzle"></i> Tabs</a></li>
                <li class="nav-item"><a class="nav-link" href="base/tooltips.html"><i class="nav-icon la la-lg la-puzzle"></i> Tooltips</a></li>
              </ul>
            </li>
            <li class="nav-item nav-dropdown"><a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon la la-lg la-hand-pointer-o"></i> Buttons</a>
              <ul class="nav-dropdown-items">
                <li class="nav-item"><a class="nav-link" href="buttons/buttons.html"><i class="nav-icon la la-lg la-cursor"></i> Buttons</a></li>
                <li class="nav-item"><a class="nav-link" href="buttons/button-group.html"><i class="nav-icon la la-lg la-cursor"></i> Buttons Group</a></li>
                <li class="nav-item"><a class="nav-link" href="buttons/dropdowns.html"><i class="nav-icon la la-lg la-cursor"></i> Dropdowns</a></li>
                <li class="nav-item"><a class="nav-link" href="buttons/brand-buttons.html"><i class="nav-icon la la-lg la-cursor"></i> Brand Buttons</a></li>
              </ul>
            </li>
            <li class="nav-item"><a class="nav-link" href="charts.html"><i class="nav-icon la la-lg la-pie-chart"></i> Charts</a></li>
            <li class="nav-item nav-dropdown"><a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon la la-lg la-star"></i> Icons</a>
              <ul class="nav-dropdown-items">
                <li class="nav-item"><a class="nav-link" href="icons/line-awesome.html"> Line Awesome<span class="badge badge-primary">NEW</span></a></li>
                <li class="nav-item"><a class="nav-link" href="icons/coreui-icons.html"> CoreUI Icons</a></li>
                <li class="nav-item"><a class="nav-link" href="icons/flags.html"> Flags</a></li>
                <li class="nav-item"><a class="nav-link" href="icons/font-awesome.html"> Font Awesome</a></li>
                <li class="nav-item"><a class="nav-link" href="icons/simple-line-icons.html"> Simple Line Icons</a></li>
              </ul>
            </li>
            <li class="nav-item nav-dropdown"><a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon la la-lg la-bell"></i> Notifications</a>
              <ul class="nav-dropdown-items">
                <li class="nav-item"><a class="nav-link" href="notifications/alerts.html"><i class="nav-icon la la-lg la-bell"></i> Alerts</a></li>
                <li class="nav-item"><a class="nav-link" href="notifications/badge.html"><i class="nav-icon la la-lg la-bell"></i> Badge</a></li>
                <li class="nav-item"><a class="nav-link" href="notifications/modals.html"><i class="nav-icon la la-lg la-bell"></i> Modals</a></li>
              </ul>
            </li>
            <li class="nav-item"><a class="nav-link" href="widgets.html"><i class="nav-icon la la-lg la-calculator"></i> Widgets</a></li>
            <li class="divider"></li>
            <li class="nav-title">Extras</li>
            <li class="nav-item nav-dropdown"><a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon la la-lg la-file"></i> Pages</a>
              <ul class="nav-dropdown-items">
                <li class="nav-item"><a class="nav-link" href="login.html" target="_top"><i class="nav-icon la la-lg la-star"></i> Login</a></li>
                <li class="nav-item"><a class="nav-link" href="register.html" target="_top"><i class="nav-icon la la-lg la-star"></i> Register</a></li>
                <li class="nav-item"><a class="nav-link" href="404.html" target="_top"><i class="nav-icon la la-lg la-star"></i> Error 404</a></li>
                <li class="nav-item"><a class="nav-link" href="500.html" target="_top"><i class="nav-icon la la-lg la-star"></i> Error 500</a></li>
              </ul>
            </li>
          </ul>
        </nav>
      </div>
      <main class="main">
        <!-- Breadcrumb-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          
          @yield('breadcrumb')
          
          <!-- Breadcrumb Menu-->
          <li class="breadcrumb-menu d-md-down-none">
            <div class="btn-group" role="group" aria-label="Button group">
              <a class="btn" href="{{ route('settings') }}"><i class="icon-settings"></i>  {{ __('Settings') }}</a>
            </div>
          </li>
        </ol>
        <div class="container-fluid">
          <div class="animated fadeIn">
          
            @yield('content')
          
          </div>
        </div>
      </main>
    </div>
    <footer class="app-footer">
      <div><a href="http://backstrap.net">BackStrap </a><span>&nbsp;&copy; 2019 Cristian Tabacitu.</span></div>
      <div class="ml-auto"><span>Powered by </span><a href="https://coreui.io">CoreUI</a><span>&nbsp;&&nbsp;</span><a href="https://backpackforlaravel.com">Backpack for Laravel</a></div>
    </footer>
    <!-- CoreUI and necessary plugins-->
    <script src="{{ asset('assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/pace.min.js') }}"></script>
    <script src="{{ asset('assets/js/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/js/coreui.min.js') }}"></script>
  </body>
</html>