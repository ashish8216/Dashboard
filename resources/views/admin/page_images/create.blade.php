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
            <h1 class="m-0 text-dark">Page Image</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">Page Image</li>
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
            <h3 class="card-title">{{ __('Page Image')}}</h3>

          </div>
<form  class="form-horizontal" action="{{ route('page_images.store') }}" method="post" enctype="multipart/form-data" ><!-- form-horizontal Starts -->
@csrf
<div class="card-body">
   <div class="form-group row" ><!-- 4 form-group Starts -->
<label class="col-sm-4 col-form-label" > {{ __('Website Pages')}}</label>

<div class="col-sm-8" >

<select name="page_id" class="form-control" >
<option value=" "> Select </option>
@foreach ($blog_cat as $blog_categorie) 
<option value="{{$blog_categorie->id}}"> {{$blog_categorie->name}}  </option>
@endforeach

</select>


</div>
</div>
<div class="form-group row" ><!-- 1 form-group Starts -->
<label class="col-sm-4 col-form-label" > {{ __('Top/Botton')}}</label>

<div class="col-sm-8" >
    
<select name="top_botton" class="form-control" >
<option value=" "> Select </option>
<option value="Top"> Top </option>
<option value="Botton"> Botton</option>
</select>

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
</div>
<div class="card-footer">


<input type="submit" name="submit" value="Submit" class=" btn btn-primary form-control"  >

</div>


</form><!-- form-horizontal Ends -->

 </div>
    
</div>
    </section>

@endsection