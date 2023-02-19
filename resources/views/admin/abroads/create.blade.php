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
            <h1 class="m-0 text-dark">Study Abroad</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">study Abroad</li>
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
            <h3 class="card-title">{{ __('Study Abroad')}}</h3>

          </div>
<form  class="form-horizontal" action="{{ route('abroads.store') }}" method="post" enctype="multipart/form-data" ><!-- form-horizontal Starts -->
@csrf
<div class="card-body">
<div class="form-group row" ><!-- 1 form-group Starts -->
<label class="col-sm-4 col-form-label" > {{ __('Name')}}</label>

<div class="col-sm-8" >
    
<input type="text" name="name" class="form-control">

</div>

</div><!-- 1 form-group Ends -->
<div class="form-group row" ><!-- 1 form-group Starts -->
<label class="col-sm-4 col-form-label" > {{ __('SEO')}}</label>

<div class="col-sm-8" >
    
<input type="text" name="seo" class="form-control">

</div>

</div><!-- 1 form-group Ends -->
<div class="form-group row" ><!-- form-group Starts -->
<label class="col-sm-4 col-form-label" > {{ __('Upload Image')}}</label>

<div class="col-sm-8" >
<span class="input-group-btn">
                <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                <i class="fa fa-picture-o"></i> Choose
                </a>
            </span>
          <input id="thumbnail" class="form-control" type="text" name="image" value="{{old('image')}}">
          <div id="holder" style="margin-top:15px;max-height:100px;"></div>
          @error('photo')
          <span class="text-danger">{{$message}}</span>
          @enderror
        
</div>

</div><!-- form-group Ends -->
<div class="form-group row" ><!-- 4 form-group Starts -->

<label class="col-sm-4 col-form-label" > {{ __('Description')}}</label>

<div class="col-sm-8" >
<textarea name="desction" class="form-control" rows="15" id="description">


</textarea>
</div>
</div>

</div>
<div class="card-footer">


<input type="submit" name="submit" value="Submit" class=" btn btn-primary form-control"  >

</div>


</form><!-- form-horizontal Ends -->

 </div>
    
</div>
    </section>
<script src="https://cdn.tiny.cloud/1/aoagi5z7gzb59qdlm0cs3i28y14os85g1tslmkk8kf604ufy/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <script>tinymce.init({
        selector: '#description',
        plugins: [
          'lists','table'
        ],
        toolbar: 'undo redo | formatpainter casechange blocks | bold italic backcolor | ' +
          'alignleft aligncenter alignright alignjustify | ' +
          'bullist numlist checklist outdent indent | removeformat | a11ycheck code table help'
      });</script>
      
@endsection