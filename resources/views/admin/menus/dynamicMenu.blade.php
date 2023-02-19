
@extends('admin.home')
 
@section('content')

      <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Slideshows</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">Slideshows</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
   <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        
        <div class="card card-info">
 <div class="card-header">
            <h3 class="card-title">{{ __('Slideshows')}}</h3>

          </div>

 </div>
  <h5 class="text-center mb-4 bg-info text-white">Menu List</h5>
                      <ul class="navbar-nav">
            @foreach($menus as $menu)
            <li class="nav-item dropdown">
                <a class="nav-link {{ count($menu->childs) ? 'dropdown-toggle' :'' }}" href="https://bootstrapthemes.co" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   {{ $menu->title }}
                </a>
                <ul class="dropdown-menu " aria-labelledby="navbarDropdownMenuLink">
                  @if(count($menu->childs))
                    @include('admin.menus.menusub',['childs' => $menu->childs])
                  @endif
                </ul>
            </li>
            @endforeach
        </ul>
</div>
    </section>
@endsection