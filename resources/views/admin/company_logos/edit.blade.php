@extends('admin.home')
 
@section('content')
<div class="row"><!-- row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<ol class="breadcrumb"><!-- breadcrumb Starts -->

<li>

<i class="fa fa-dashboard" ></i> Dashboard </li>
<li class="active"><i class="fa fa-fw fa-list"></i> Slideshow</li>

</li>

</div><!-- col-lg-12 Ends -->

</div><!-- row Ends -->

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
<div class="row"><!-- 2 row Starts --> 

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<div class="panel panel-primary"><!-- panel panel-default Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<h3 class="panel-title">

<i class="fa fa-edit fa-fw"></i> Slideshow
</h3>

</div><!-- panel-heading Ends -->

<div class="panel-body" ><!-- panel-body Starts -->

<form  class="form-horizontal" action="{{ route('slideshows.update', $services->id) }}" method="post" enctype="multipart/form-data" ><!-- form-horizontal Starts -->

@method('PATCH') 
   @csrf

<div class="form-group" ><!-- 1 form-group Starts -->
<label class="col-md-3 control-label" > Title</label>

<div class="col-md-6" >
<input type="text" name="title" class="form-control"  value="{{$services->title}}">

</div>

</div><!-- 1 form-group Ends -->

<div class="form-group" ><!-- 1 form-group Starts -->
<label class="col-md-3 control-label" > Sub Title</label>

<div class="col-md-6" >
<input type="text" name="subtitle" class="form-control"  value="{{$services->subtitle}}">

</div>

</div><!-- 1 form-group Ends -->

<div class="form-group" ><!-- 1 form-group Starts -->
<label class="col-md-3 control-label" > Url</label>

<div class="col-md-6" >
<input type="text" name="url" class="form-control" value = "{{$services->url}}" >

</div>

</div><!-- 1 form-group Ends -->


  
<div class="form-group" ><!-- 4 form-group Starts -->
<label class="col-md-3 control-label" >Description </label>

<div class="col-md-6" >
<textarea name="description" class="form-control" rows="5" >

{{$services->description}}
</textarea>
</div>
</div>



<div class="form-group" ><!-- form-group Starts -->

    
<label class="col-md-3 control-label" > Upload Image</label>

<div class="col-md-6" >

<input type="file" name="image" class="form-control">
<br>
<img src="{{url('image/'.$services->name)}}"/ style="height:100px">
</div>

</div><!-- form-group Ends -->
<div class="form-group" ><!-- 4 form-group Starts -->

<label class="col-md-3 control-label" > </label>

<div class="col-md-6" >
<input type="submit" name="submit" value="Update" class=" btn btn-primary form-control"  >

</div>

</div><!--4 form-group Ends -->

</form><!-- form-horizontal Ends -->

</div><!-- panel-body Ends -->

</div><!-- panel panel-default Ends -->

</div><!-- col-lg-12 Ends -->
</div>

@endsection