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
            <h1 class="m-0 text-dark">Notice</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">Notice</li>
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
            <h3 class="card-title">{{ __('Notice')}}</h3>

          </div>
<form  class="form-horizontal" action="{{ route('noctices.store') }}" method="post" enctype="multipart/form-data" ><!-- form-horizontal Starts -->
@csrf
<div class="card-body">
  <div class="row">
<!-- 1 form-group Starts -->
<div class="col-md-8">
    <div class="form-group " >
<input type="text" name="title" class="form-control" placeholder="Title">

</div>

</div><!-- 1 form-group Ends -->

<div class="col-md-4">
<div class="form-group" ><!-- 4 form-group Starts -->



<input type="submit" name="submit" value="Public" class=" btn btn-primary form-control"  >

</div>

</div><!--4 form-group Ends -->

<script src="https://cdn.tiny.cloud/1/aoagi5z7gzb59qdlm0cs3i28y14os85g1tslmkk8kf604ufy/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <script>
  	tinymce.init({ selector:'#description'});</script>
  
  <div class="col-md-8">
<div class="form-group" ><!-- 4 form-group Starts -->


<textarea name="description" class="form-control" rows="15" id="description">


</textarea>
</div>
</div>
<div class="col-md-4">

 
 <div class="form-group row">
                    <label for="image" class="col-sm-12 col-form-label">Image</label>
                    <div class="col-sm-12">
                      <input type="file" class="form-control" name="image" id="image" placeholder="Enter Image name">
                    </div>
                  </div>



</div>
</div>

</form><!-- form-horizontal Ends -->

 </div>
    
</div>
    </section>

@endsection