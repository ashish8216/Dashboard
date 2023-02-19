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
            <h1 class="m-0 text-dark">General Settings</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">General Settings</li>
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
            <h3 class="card-title">{{ __('General Settings')}}</h3>

          </div>
           @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
<form  class="form-horizontal" action="{{ route('settings.update', $setting->id) }}" method="post" enctype="multipart/form-data" ><!-- form-horizontal Starts -->
@method('PATCH') 
   @csrf
<div class="card-body">
<div class="form-group row" ><!-- 1 form-group Starts -->
<label class="col-sm-2 col-form-label" > {{ __('Name')}}</label>

<div class="col-sm-10" >

<input type="text" name="name" class="form-control" value="{{$setting->name}}">

</div>

</div><!-- 1 form-group Ends -->

<div class="form-group row" ><!-- 1 form-group Starts -->
<label class="col-sm-2 col-form-label" >{{ __('E-Mail Address') }}</label>

<div class="col-sm-10" >
    
<input type="text" name="email" class="form-control" value="{{ $setting->email }}">

</div>

</div><!-- 1 form-group Ends -->
<div class="form-group row" ><!-- form-group Starts -->
<label class="col-sm-2 col-form-label" > {{ __('logo')}}</label>

<div class="col-sm-10" >
    <span class="input-group-btn">
                <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                <i class="fa fa-picture-o"></i> Choose
                </a>
            </span>
          <input id="thumbnail" class="form-control" type="text" name="logo" value="{{$setting->logo}}">
        <div id="holder" style="margin-top:15px;max-height:100px;"></div>
          @error('photo')
          <span class="text-danger">{{$message}}</span>
          @enderror
          <br>
<img src="{{$setting->logo}}" width="100px">
</div>

</div><!-- form-group Ends -->

<div class="form-group row" ><!-- 1 form-group Starts -->
<label class="col-sm-2 col-form-label" > {{ __('Mobile Number') }}</label>

<div class="col-sm-10" >
    
<input type="text" name="mobile_number" class="form-control" value="{{ $setting->mobile_number }}"/>

</div>

</div><!-- 1 form-group Ends -->
<div class="form-group row" ><!-- 1 form-group Starts -->
<label class="col-sm-2 col-form-label" > {{ __('Woking Hour') }}</label>

<div class="col-sm-10" >
    
<input type="text" name="woking_hour" class="form-control" value="{{ $setting->woking_hour }}"/>

</div>

</div><!-- 1 form-group Ends -->
<div class="form-group row" ><!-- 1 form-group Starts -->
<label class="col-sm-2 col-form-label" > {{ __('Page Header Image') }}</label>

<div class="col-sm-10" >
    
<span class="input-group-btn">
                <a id="lf" data-input="thumb" data-preview="holde" class="btn btn-primary">
                <i class="fa fa-picture-o"></i> Choose
                </a>
            </span>
          <input id="thumb" class="form-control" type="text" name="page_image" value="{{$setting->page_image}}">
        <div id="holde" style="margin-top:15px;max-height:100px;"></div>
          @error('photo')
          <span class="text-danger">{{$message}}</span>
          @enderror
          <br>
<img src="{{$setting->page_image}}" width="100px">

</div>

</div><!-- 1 form-group Ends -->
<div class="form-group row" ><!-- 1 form-group Starts -->
<label class="col-sm-2 col-form-label" > {{ __('address') }}</label>

<div class="col-sm-10" >
    
<input type="text" name="address" class="form-control" value="{{ $setting->address }}"/>

</div>

</div><!-- 1 form-group Ends -->
<div class="form-group row" ><!-- 1 form-group Starts -->
<label class="col-sm-2 col-form-label" > {{ __('address') }}</label>

<div class="col-sm-10" >
    
<input type="text" name="address2" class="form-control" value="{{ $setting->address2 }}"/>

</div>

</div><!-- 1 form-group Ends -->
<div class="form-group row" ><!-- 1 form-group Starts -->
<label class="col-sm-2 col-form-label" > {{ __('Google Maps') }}</label>

<div class="col-sm-10" >
  <div class="row" > 
  <div class="col-sm-6">
<textarea name="google_maps" class="form-control" rows="10" id="description">
{{$setting->google_maps}}
</textarea>
</div>
<div class="col-sm-6" >
{!!$setting->google_maps!!}
</div>
</div>
</div>

</div><!-- 1 form-group Ends -->
<div class="form-group row" ><!-- 1 form-group Starts -->
<label class="col-sm-2 col-form-label" > {{ __('Fcebook') }}</label>

<div class="col-sm-10" >
    
<input type="url" name="facebook" class="form-control" value="{{ $setting->facebook }}"/>

</div>

</div><!-- 1 form-group Ends -->
<div class="form-group row" ><!-- 1 form-group Starts -->
<label class="col-sm-2 col-form-label" > {{ __('Twitter') }}</label>

<div class="col-sm-10" >
    
<input type="url" name="twitter" class="form-control" value="{{ $setting->twitter }}"/>

</div>

</div><!-- 1 form-group Ends -->
<div class="form-group row" ><!-- 1 form-group Starts -->
<label class="col-sm-2 col-form-label" > {{ __('Instagram') }}</label>

<div class="col-sm-10" >
    
<input type="url" name="instagram" class="form-control" value="{{ $setting->instagram}}"/>

</div>

</div><!-- 1 form-group Ends -->

<div class="form-group row" ><!-- 1 form-group Starts -->
<label class="col-sm-2 col-form-label" > {{ __('TikTok') }}</label>

<div class="col-sm-10" >
    
<input type="url" name="tiktok" class="form-control" value="{{ $setting->tiktok }}"/>

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