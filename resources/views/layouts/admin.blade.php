<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>General Dashboard &mdash; Stisla</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="{{ asset('BackEnd/node_modules/jqvmap/dist/jqvmap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('BackEnd/node_modules/weathericons/css/weather-icons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('BackEnd/node_modules/weathericons/css/weather-icons-wind.min.css') }}">
  <link rel="stylesheet" href="{{ asset('BackEnd/node_modules/summernote/dist/summernote-bs4.css') }}">

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('BackEnd/assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('BackEnd/assets/css/components.css') }}">
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
          <div class="search-element">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
            <button class="btn" type="submit"><i class="fas fa-search"></i></button>
            <div class="search-backdrop"></div>
            <div class="search-result">
              <div class="search-header">
                Histories
              </div>
              <div class="search-item">
                <a href="#">Kodinger.com</a>
                <a href="#" class="search-close"><i class="fas fa-times"></i></a>
              </div>
              <div class="search-item">
                <a href="#">#Stisla</a>
                <a href="#" class="search-close"><i class="fas fa-times"></i></a>
              </div>
              <div class="search-header">
                Result
              </div>
              <div class="search-item">
                <a href="#">
                  <img class="mr-3 rounded" width="30" src="{{ asset('BackEnd/assets/img/products/product-3-50.png') }}" alt="product">
                  oPhone S9 Limited Edition
                </a>
              </div>
              <div class="search-header">
                Projects
              </div>
              <div class="search-item">
                <a href="#">
                  <div class="search-icon bg-danger text-white mr-3">
                    <i class="fas fa-code"></i>
                  </div>
                  Stisla Admin Template
                </a>
              </div>
              <div class="search-item">
                <a href="#">
                  <div class="search-icon bg-primary text-white mr-3">
                    <i class="fas fa-laptop"></i>
                  </div>
                  Create a new Homepage Design
                </a>
              </div>
            </div>
          </div>
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link nav-link-lg message-toggle beep"><i class="far fa-envelope"></i></a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right">
              <div class="dropdown-header">Messages
                <div class="float-right">
                  <a href="#">Mark All As Read</a>
                </div>
              </div>
              <div class="dropdown-list-content dropdown-list-message">
                <a href="#" class="dropdown-item dropdown-item-unread">
                  <div class="dropdown-item-avatar">
                    <img alt="image" src="{{ asset('BackEnd/assets/img/avatar/avatar-1.png') }}" class="rounded-circle">
                    <div class="is-online"></div>
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Kusnaedi</b>
                    <p>Hello, Bro!</p>
                    <div class="time">10 Hours Ago</div>
                  </div>
                </a>
              </div>
              <div class="dropdown-footer text-center">
                <a href="#">View All <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
          </li>
          <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg beep"><i class="far fa-bell"></i></a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right">
              <div class="dropdown-header">Notifications
                <div class="float-right">
                  <a href="#">Mark All As Read</a>
                </div>
              </div>
              <div class="dropdown-list-content dropdown-list-icons">
                <a href="#" class="dropdown-item dropdown-item-unread">
                  <div class="dropdown-item-icon bg-primary text-white">
                    <i class="fas fa-code"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    Template update is available now!
                    <div class="time text-primary">2 Min Ago</div>
                  </div>
                </a>
              </div>
              <div class="dropdown-footer text-center">
                <a href="#">View All <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
          </li>
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="{{ asset('BackEnd/assets/img/avatar/avatar-1.png') }}" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block">Hi, {{ Auth::user()->first_name.' '.Auth::user()->last_name }}</div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="dropdown-title">Logged in 5 min ago</div>
              <a href="features-profile.html" class="dropdown-item has-icon">
                <i class="far fa-user"></i> Profile
              </a>
              <a href="features-activities.html" class="dropdown-item has-icon">
                <i class="fas fa-bolt"></i> Activities
              </a>
              <a href="features-settings.html" class="dropdown-item has-icon">
                <i class="fas fa-cog"></i> Settings
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">Stisla</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
          </div>
          <ul class="sidebar-menu">
              <li class="menu-header">Dashboard</li>
              <li class="nav-item active">
                <a href="#" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
              </li>
              <li class="menu-header">Starter</li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Layout</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="layout-default.html">Default Layout</a></li>
                  <li><a class="nav-link" href="layout-transparent.html">Transparent Sidebar</a></li>
                  <li><a class="nav-link" href="layout-top-navigation.html">Top Navigation</a></li>
                </ul>
              </li>
            </ul>
            <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
              <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
                <i class="fas fa-rocket"></i> Documentation
              </a>
            </div>
        </aside>
      </div>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Dashboard</h1>
          </div>
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                  <i class="far fa-user"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Admin</h4>
                  </div>
                  <div class="card-body">
                    10
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                  <i class="far fa-newspaper"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>News</h4>
                  </div>
                  <div class="card-body">
                    42
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                  <i class="far fa-file"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Reports</h4>
                  </div>
                  <div class="card-body">
                    1,201
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-success">
                  <i class="fas fa-circle"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Online Users</h4>
                  </div>
                  <div class="card-body">
                    47
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-8 col-md-12 col-12 col-sm-12">
              <div class="card">
                <div class="card-header">
                  <h4>Statistics</h4>
                  <div class="card-header-action">
                    <div class="btn-group">
                      <a href="#" class="btn btn-primary">Week</a>
                      <a href="#" class="btn">Month</a>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <canvas id="myChart" height="182"></canvas>
                  <div class="statistic-details mt-sm-4">
                    <div class="statistic-details-item">
                      <span class="text-muted"><span class="text-primary"><i class="fas fa-caret-up"></i></span> 7%</span>
                      <div class="detail-value">$243</div>
                      <div class="detail-name">Today's Sales</div>
                    </div>
                    <div class="statistic-details-item">
                      <span class="text-muted"><span class="text-danger"><i class="fas fa-caret-down"></i></span> 23%</span>
                      <div class="detail-value">$2,902</div>
                      <div class="detail-name">This Week's Sales</div>
                    </div>
                    <div class="statistic-details-item">
                      <span class="text-muted"><span class="text-primary"><i class="fas fa-caret-up"></i></span>9%</span>
                      <div class="detail-value">$12,821</div>
                      <div class="detail-name">This Month's Sales</div>
                    </div>
                    <div class="statistic-details-item">
                      <span class="text-muted"><span class="text-primary"><i class="fas fa-caret-up"></i></span> 19%</span>
                      <div class="detail-value">$92,142</div>
                      <div class="detail-name">This Year's Sales</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-12 col-12 col-sm-12">
              <div class="card">
                <div class="card-header">
                  <h4>Recent Activities</h4>
                </div>
                <div class="card-body">
                  <ul class="list-unstyled list-unstyled-border">
                    <li class="media">
                      <img class="mr-3 rounded-circle" width="50" src="{{ asset('BackEnd/assets/img/avatar/avatar-1.png') }}" alt="avatar">
                      <div class="media-body">
                        <div class="float-right text-primary">Now</div>
                        <div class="media-title">Farhan A Mujib</div>
                        <span class="text-small text-muted">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</span>
                      </div>
                    </li>
                    <li class="media">
                      <img class="mr-3 rounded-circle" width="50" src="{{ asset('BackEnd/assets/img/avatar/avatar-2.png') }}" alt="avatar">
                      <div class="media-body">
                        <div class="float-right">12m</div>
                        <div class="media-title">Ujang Maman</div>
                        <span class="text-small text-muted">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</span>
                      </div>
                    </li>
                    <li class="media">
                      <img class="mr-3 rounded-circle" width="50" src="{{ asset('BackEnd/assets/img/avatar/avatar-3.png') }}" alt="avatar">
                      <div class="media-body">
                        <div class="float-right">17m</div>
                        <div class="media-title">Rizal Fakhri</div>
                        <span class="text-small text-muted">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</span>
                      </div>
                    </li>
                    <li class="media">
                      <img class="mr-3 rounded-circle" width="50" src="{{ asset('BackEnd/assets/img/avatar/avatar-4.png') }}" alt="avatar">
                      <div class="media-body">
                        <div class="float-right">21m</div>
                        <div class="media-title">Alfa Zulkarnain</div>
                        <span class="text-small text-muted">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</span>
                      </div>
                    </li>
                  </ul>
                  <div class="text-center pt-1 pb-1">
                    <a href="#" class="btn btn-primary btn-lg btn-round">
                      View All
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2022 <div class="bullet"></div> Created By <a href="#">Muhamad Firdaus Riawan</a>
        </div>
        <div class="footer-right">
          2.3.0
        </div>
      </footer>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="{{ asset('BackEnd/assets/js/stisla.js') }}"></script>

  <!-- JS Libraies -->
  <script src="{{ asset('BackEnd/node_modules/simpleweather/jquery.simpleWeather.min.js') }}"></script>
  <script src="{{ asset('BackEnd/node_modules/chart.js/dist/Chart.min.js') }}"></script>
  <script src="{{ asset('BackEnd/node_modules/jqvmap/dist/jquery.vmap.min.js') }}"></script>
  <script src="{{ asset('BackEnd/node_modules/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
  <script src="{{ asset('BackEnd/node_modules/summernote/dist/summernote-bs4.js') }}"></script>
  <script src="{{ asset('BackEnd/node_modules/chocolat/dist/js/jquery.chocolat.min.js') }}"></script>

  <!-- Template JS File -->
  <script src="{{ asset('BackEnd/assets/js/scripts.js') }}"></script>
  <script src="{{ asset('BackEnd/assets/js/custom.js') }}"></script>

  <!-- Page Specific JS File -->
  <script src="{{ asset('BackEnd/assets/js/page/index-0.js') }}"></script>
</body>
</html>
