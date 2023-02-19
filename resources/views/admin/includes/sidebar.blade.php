<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button">
                <i class="fas fa-bars"></i>
            </a>
        </li>
    </ul>

    <!-- SEARCH FORM -->

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Messages Dropdown Menu -->
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-user"></i> 
               @if (Route::has('login'))
                    @auth
                        {{ Auth::user()->name}}
                    @else
                        <script>window.open('{{ route('login') }}','_self')</script>
                           
                    @endauth
            @endif
                <i class="fas fa-angle-down"></i> 
            </a>
            <div class="dropdown-menu  dropdown-menu-right">
                @if (Route::has('login'))
                
                  @auth  
                    @else
                <script>window.open('{{ route('login') }}','_self')</script>
            @endauth
            @endif
            <a href="{{ route('logout') }}" onclick="event.preventDefault();
document.getElementById('logout-form').submit();">
                <i class="fa fa-fw fa-power-off"> </i> 
                {{ __('Logout') }}
                
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
            </a>
            </div>
        </li>
    </ul>
</nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/dashboard')}}" class="brand-link" style="padding-left: 20px;">
        <i class="fa fa-fw fa-cogs"> </i> 
        <span class="brand-text font-weight-light"> 
           Admin DashBoard
        </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
        

      <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview"><a href="{{ url('/dashboard')}}" class="nav-link"><i class="nav-icon fas fa-tachometer-alt"></i><p>{{ __('Dashboard')}}</p></a></li>
                 <li class="nav-item has-treeview"><a href="{{ url('/admin/Manger')}}" class="nav-link"><i class="nav-icon fas fa-folder"></i><p>{{ __('File Manager')}}</p></a></li>
                <li class="nav-item has-treeview"><a href="{{ url('/admin/popups/1/edit')}}" class="nav-link"><i class="nav-icon fas fa-image"></i><p>{{ __('Pupup')}}</p></a></li>
                <li class="nav-item has-treeview"><a href="{{ url('/admin/applys')}}" class="nav-link"><i class="nav-icon fas fa-inbox"></i><p>{{ __('Application Form')}}</p></a></li>
                 <li class="nav-item has-treeview"><a href="{{ url('/admin/contacts')}}" class="nav-link"><i class="nav-icon fas fa-envelope"></i><p>{{ __('Contact Form')}}</p></a></li>
                <li class="nav-item has-treeview"><a href="#" class="nav-link"><i class="nav-icon fas fa-book"></i><p>{{ __('Homepage Setup')}}</p><i class="right fas fa-angle-left"></i></a>
                 <ul class="nav nav-treeview">
                        <li class="nav-item"><a href="{{ url('/admin/banners/1/edit')}}" class="nav-link"><i class="nav-icon fa  fa-list"></i><p>{{ __('Banner')}}</p></a></li>
                         <li class="nav-item"><a href="{{ url('/admin/featuress')}}" class="nav-link"><i class="nav-icon fa  fa-list"></i><p>{{ __('Features')}}</p></a></li>
                         <li class="nav-item"><a href="{{ url('/admin/abouts/1/edit')}}" class="nav-link"><i class="nav-icon fa  fa-list"></i><p>{{ __('About')}}</p></a></li>
                         <li class="nav-item"><a href="{{ url('/admin/popular_services')}}" class="nav-link"><i class="nav-icon fa  fa-list"></i><p>{{ __('Popular Service')}}</p></a></li> 
                         <li class="nav-item"><a href="{{ url('/admin/counters/1/edit')}}" class="nav-link"><i class="nav-icon fa fa-list"></i><p>{{ __('Counter')}}</p></a></li> 
                          <li class="nav-item"><a href="{{ url('/admin/student_says')}}" class="nav-link"><i class="nav-icon fas fa-users"></i><p>{{ __('Testimonal')}}</p></a></li>
                        <li class="nav-item"><a href="{{ url('/admin/company_logos')}}" class="nav-link"><i class="nav-icon fas fa-image"></i><p>{{ __('Clients logo')}}</p></a></li>
                       <li class="nav-item"><a href="{{ url('/admin/partner_logos')}}" class="nav-link"><i class="nav-icon fas fa-image"></i><p>{{ __('Partner logo')}}</p></a></li>
                    </ul>
                    </li>
                 <li class="nav-item has-treeview"><a href="{{ url('/admin/servicess')}}" class="nav-link"><i class="nav-icon fa  fa-list"></i><p>{{ __('Services')}}</p></a></li>   
                <li class="nav-item has-treeview"><a href="{{ url('/admin/downloads')}}" class="nav-link"><i class="nav-icon fas fa-download"></i><p>{{ __('Downloads')}}</p></a></li>
                <li class="nav-item has-treeview"><a href="{{ url('/admin/teachers')}}" class="nav-link"><i class="nav-icon fas fa-users"></i><p>{{ __('Team')}}</p></a></li>
                <li class="nav-item has-treeview"><a href="#" class="nav-link"><i class="nav-icon fas fa-flag"></i><p>{{ __('Study Abroad')}}</p><i class="right fas fa-angle-left"></i></a>
                <ul class="nav nav-treeview">
                       <li class="nav-item"><a href="{{ url('/admin/abroads')}}" class="nav-link"><i class="nav-icon fas fa-list"></i><p>{{ __('Study Abroad')}}</p></a></li>
                        <li class="nav-item"><a href="{{ url('/admin/abroad_logos')}}" class="nav-link"><i class="nav-icon fas fa-list"></i><p>{{ __('Enrollment Open')}}</p></a></li>
                    </ul>
                </li>
                
                
                 <li class="nav-item has-treeview"><a href="{{ url('/admin/faqs')}}" class="nav-link"><i class="nav-icon fas fa-question"></i><p>{{ __('FAQ')}}</p></a></li>
                 <li class="nav-item has-treeview"><a href="{{ url('/admin/videos')}}" class="nav-link"><i class="nav-icon fa fa-youtube"></i><p>{{ __('Video')}}</p></a></li>
                <li class="nav-item has-treeview"><a href="{{ url('/admin/gallerys')}}" class="nav-link"><i class="nav-icon fa fa-images"></i><p>{{ __('Gallery')}}</p></a></li>
                <li class="nav-item has-treeview"><a href="{{ url('/admin/newsletters')}}" class="nav-link"><i class="nav-icon fas fa-at"></i><p>{{ __('Newsletter')}}</p></a></li><!-- li Ends -->
                <li class="nav-item has-treeview"><a href="#" class="nav-link"><i class="nav-icon fa fa-newspaper"></i><p>{{ __('Blog')}}</p><i class="right fas fa-angle-left"></i></a>
                    <ul class="nav nav-treeview">
                       
                        <li class="nav-item"><a href="{{ url('/admin/blogs')}}" class="nav-link"><i class="nav-icon fa fa-list"></i><p>{{ __('Blog')}}</p></a></li>
                        <li class="nav-item"><a href="{{ url('/admin/blog_categories')}}" class="nav-link"><i class="nav-icon fa  fa-list"></i><p>{{ __('Blog Categories')}}</p></a></li> 
                        <li class="nav-item"><a href="{{ url('/admin/comments')}}" class="nav-link"><i class="nav-icon fa  fa-list"></i><p>{{ __('Blog Comment')}}</p></a></li> 
                    </ul>
                </li><!-- li Ends -->
                <li class="nav-item has-treeview"><a href="#" class="nav-link"><i class="nav-icon fa fa-copy"></i><p>{{ __('Website Pages')}}</p><i class="right fas fa-angle-left"></i></a>
                <ul class="nav nav-treeview">
                       
                     <li class="nav-item"><a href="{{ url('/admin/post_categories')}}" class="nav-link"> <i class="nav-icon fa  fa-list"></i><p>{{ __('Website Pages')}}</p></a></li>
                    <li class="nav-item"><a href="{{ url('/admin/page_images')}}" class="nav-link"> <i class="nav-icon fa fa-image"></i><p>{{ __('Page Add More Image')}}</p></a></li>
                    </ul>
                </li><!-- li Ends -->
               
               <li class="nav-item has-treeview"><a href="#" class="nav-link"><i class="nav-icon fa  fa-gear"></i><p>{{ __('General Settings')}}</p><i class="right fas fa-angle-left"></i></a>
<ul class="nav nav-treeview">
                        <li class="nav-item"><a href="{{ url('/admin/settings/1/edit')}}" class="nav-link"><i class="nav-icon fa fa-list"></i><p>{{ __('General Settings')}}</p></a></li><!-- li Ends -->
                        <li class="nav-item"><a href="{{ url('/admin/men')}}" class="nav-link"><i class="nav-icon fa fa-list"></i> <p>{{ __('Meanu')}}</p></a></li>
                        <li class="nav-item"><a href="{{ url('/admin/links')}}" class="nav-link"><i class="nav-icon fas fa-list"></i><p>{{ __('Footer Link')}}</p></a></li>
                        <li class="nav-item"><a href="{{ url('/admin/seos')}}" class="nav-link"><i class="nav-icon fas fa-list"></i><p>{{ __('SEO')}}</p></a></li>
                    </ul>
                </li><!-- li Ends -->
                 <li class="nav-item has-treeview"><a href="#" class="nav-link"><i class="nav-icon fa fa-users"></i><p>{{ __('Users')}}</p><i class="right fas fa-angle-left"></i></a>
                    <ul class="nav nav-treeview">
                       
                        <li class="nav-item"><a href="{{ url('/admin/profiles')}}" class="nav-link"><i class="nav-icon fa fa-list"></i><p>{{ __('Users')}}</p> </a></li>
                         @if (Route::has('login'))
                
                  @auth 
                        <li class="nav-item"><a href="{{ url('/').'/admin/profiles/'.Auth::user()->id.'/edit'}}" class="nav-link"><i class="nav-icon fa  fa-user"></i><p>{{ __('Profiles')}} </p></a></li>
                         @else
                <script>window.open('{{ route('login') }}','_self')</script>
            @endauth
            @endif
                    </ul>
                </li><!-- li Ends -->
                <li class="nav-item has-treeview"><a href="{{ route('logout') }}" onclick="event.preventDefault();
document.getElementById('logout-form').submit();" class="nav-link"><i class="nav-icon fa  fa-power-off"></i><p>{{ __('Logout') }}</p></a></li>
            </ul>
        </nav>
       <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>