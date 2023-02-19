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
            <h1 class="m-0 text-dark">About</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">About</li>
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
            <h3 class="card-title">{{ __('About')}}</h3>

          </div>
           @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
<form  class="form-horizontal" action="{{ route('abouts.update', $setting->id) }}" method="post" enctype="multipart/form-data" ><!-- form-horizontal Starts -->
@method('PATCH') 
   @csrf
<div class="card-body">
    <div class="form-group row" ><!-- form-group Starts -->
<label class="col-sm-2 col-form-label" > {{ __('Image')}}</label>

<div class="col-sm-10" >
    <span class="input-group-btn">
                <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                <i class="fa fa-picture-o"></i> Choose
                </a>
            </span>
          <input id="thumbnail" class="form-control" type="text" name="image" value="{{$setting->image}}">
        <div id="holder" style="margin-top:15px;max-height:100px;"></div>
          @error('photo')
          <span class="text-danger">{{$message}}</span>
          @enderror
          <br>
<img src="{{$setting->image}}" width="100px">
</div>

</div><!-- form-group Ends -->
<div class="form-group row" ><!-- form-group Starts -->
<label class="col-sm-2 col-form-label" > {{ __('Image')}}</label>

<div class="col-sm-10" >
    <span class="input-group-btn">
                <a id="lf" data-input="thumbnai" data-preview="holde" class="btn btn-primary">
                <i class="fa fa-picture-o"></i> Choose
                </a>
            </span>
          <input id="thumbnai" class="form-control" type="text" name="image2" value="{{$setting->image2}}">
        <div id="holde" style="margin-top:15px;max-height:100px;"></div>
          @error('photo')
          <span class="text-danger">{{$message}}</span>
          @enderror
          <br>
<img src="{{$setting->image2}}" width="100px">
</div>

</div><!-- form-group Ends -->
<div class="form-group row" ><!-- form-group Starts -->
<label class="col-sm-2 col-form-label" > {{ __('Image')}}</label>

<div class="col-sm-10" >
    <span class="input-group-btn">
                <a id="l" data-input="thumbn" data-preview="hold" class="btn btn-primary">
                <i class="fa fa-picture-o"></i> Choose
                </a>
            </span>
          <input id="thumbn" class="form-control" type="text" name="image3" value="{{$setting->image3}}">
        <div id="hold" style="margin-top:15px;max-height:100px;"></div>
          @error('photo')
          <span class="text-danger">{{$message}}</span>
          @enderror
          <br>
<img src="{{$setting->image3}}" width="100px">
</div>

</div><!-- form-group Ends -->
<div class="form-group row" ><!-- 1 form-group Starts -->
<label class="col-sm-2 col-form-label" > {{ __('youtube')}}</label>

<div class="col-sm-10" >

<input type="text" name="youtube" class="form-control" value="{{$setting->youtube}}">

</div>

</div><!-- 1 form-group Ends -->
<div class="form-group row" ><!-- 1 form-group Starts -->
<label class="col-sm-2 col-form-label" > {{ __('Title')}}</label>

<div class="col-sm-10" >

<input type="text" name="title" class="form-control" value="{{$setting->title}}">
<input type="text" name="title2" class="form-control" value="{{$setting->title2}}">
<input type="text" name="title3" class="form-control" value="{{$setting->title3}}">
<input type="text" name="title4" class="form-control" value="{{$setting->title4}}">
<input type="text" name="title5" class="form-control" value="{{$setting->title5}}">
<input type="text" name="title6" class="form-control" value="{{$setting->title6}}">
</div>

</div><!-- 1 form-group Ends -->


</div>
<div class="card-footer">


<input type="submit" name="submit" value="Update" class=" btn btn-primary form-control"  >

</div>


</form><!-- form-horizontal Ends -->

 </div>
    
</div>
    </section>

@endsection