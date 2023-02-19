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
            <h1 class="m-0 text-dark">Gallery Categorie</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">Gallery Categorie</li>
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
            <h3 class="card-title">{{ __('Gallery Categorie')}}</h3>

          </div>
<form  class="form-horizontal" action="{{ route('gallery_categories.store') }}" method="post" enctype="multipart/form-data" ><!-- form-horizontal Starts -->
@csrf
<div class="card-body">
<div class="form-group row" ><!-- 1 form-group Starts -->
<label class="col-sm-4 col-form-label" > {{ __('Name')}}</label>

<div class="col-sm-8" >
    
<input type="text" name="name" class="form-control">

</div>

</div><!-- 1 form-group Ends -->
<div class="form-group row" ><!-- form-group Starts -->
<label class="col-sm-4 col-form-label" > {{ __('Upload Image')}}</label>

<div class="col-sm-8" >
<input type="file" name="image" class="form-control">

</div>

</div><!-- form-group Ends -->

</div>
<div class="card-footer">


<input type="submit" name="submit" value="Submit" class=" btn btn-primary form-control"  >

</div>


</form><!-- form-horizontal Ends -->

 </div>
    
</div>
    </section>

@endsection