<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        <a href="" class="text-decoration-none">
                    <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">E</span>Shopper</h1>
                </a>
        </div>
      </div>
      <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="col-lg-3 col-6 text-center">
              @if (Route::has('login'))
                  @auth
                      <img src="{{URL::asset('img/user.jpg')}}" alt="Image" class="img-fluid mr-3 mt-1}" style="width: 45px;">
                      <a href="{{ route('profile.edit') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">{{auth()->user()->name }}</a>
                  @else
                      <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                      @if (Route::has('register'))
                          <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                      @endif
                  @endauth
                  <br><br>
          </div>
          @endif
      </div>
      <!-- SidebarSearch Form -->
      <div class="form-inline">
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
              with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="eshopperdash" class="nav-link active">
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Tables
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{ route('website_infos.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Website Infos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('Users.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Users</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('Categories.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Categories</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('sliders.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Slider</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('Products.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Products</p>
                </a>
                <li class="nav-item">
                <a href="{{ route('productReview.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Products Review</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('colors.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Colors</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('sizes.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sizes</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('productImage.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Product Image</p>
                </a>
              </li>
                <li class="nav-item">
                    <a href="{{route('Contact.index')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Contact</p>
                    </a>
                </li>
            </ul>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h4 class="m-0">Dashboard @yield('title_page2') @yield('title_page')</h4>
          </div><!-- /.col -->
          <div class="col-sm-6">
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
