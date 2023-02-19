@extends('admin.home')
 
@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Blog</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">Blog</li>
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
            <h3 class="card-title">{{ __('blog')}}</h3>

          </div>
<form  class="form-horizontal" action="{{ route('comments.store') }}" method="post" enctype="multipart/form-data" ><!-- form-horizontal Starts -->
<div class="card-body">
 @csrf
                                    <input type="hidden" class="form-control" id="blog_id" name="blog_id" value="{{$comments->blog_id}}">
                                    <input type="hidden" class="form-control" id="user_id" name="user_id" value="{{ Auth::user()->id}}">
                                     <input type="hidden" class="form-control" id="parent_id" name="parent_id" value="{{$comments->id}}">
                                      <input type="hidden" class="form-control" id="email" name="email" value="info@iglobal.edu.np">
                                       <input type="hidden" class="form-control" id="name" name="name" value="iGlobal Learining Center">
                                        <input type="text" class="form-control" id="message" name="message" value="">

</div>
<div class="card-footer">


<input type="submit" name="submit" value="Update" class=" btn btn-primary form-control"  >

</div>


</form><!-- form-horizontal Ends -->

 </div>
    
</div>
    </section>


@endsection