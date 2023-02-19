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
<form  class="form-horizontal" action="{{ route('blogs.update', $blog->id) }}" method="post" enctype="multipart/form-data" ><!-- form-horizontal Starts -->
  @method('PATCH') 
   @csrf
<div class="card-body">
<div class="form-group row" ><!-- 1 form-group Starts -->
<label class="col-sm-4 col-form-label" > {{ __('Title')}}</label>

<div class="col-sm-8" >
    
<input type="text" name="title" class="form-control" value="{{$blog->title}}">

</div>

</div><!-- 1 form-group Ends -->

<div class="form-group row" ><!-- 4 form-group Starts -->
<label class="col-sm-4 col-form-label" > {{ __('Blog Categorie')}}</label>

<div class="col-sm-8" >

<select name="categorie" class="form-control" >
<option value="{{$blog->categorie}}"> {{App\Models\blog_categorie::where('id', $blog->categorie)->first()->name}} </option>
@foreach ($blog_cat as $blog_categorie) 
<option value="{{$blog_categorie->id}}"> {{$blog_categorie->name}}  </option>
@endforeach

</select>


</div>
</div>

<div class="form-group row" ><!-- form-group Starts -->
<label class="col-sm-4 col-form-label" > {{ __('Upload Image')}}</label>

<div class="col-sm-8" >
<input type="file" name="image_blgs" class="form-control" value="{{$blog->image_blgs}}">
<br>
<img src="{{url('/image/'.$blog->image_blgs)}}" width="100px">
</div>

</div><!-- form-group Ends -->
<div class="form-group row" ><!-- 4 form-group Starts -->

<label class="col-sm-4 col-form-label" > {{ __('Description')}}</label>

<div class="col-sm-8" >
<textarea name="show_desction" class="form-control" rows="15" id="description">

{{$blog->show_desction}}

</textarea>
</div>
</div>
<div class="form-group row" ><!-- form-group Starts -->
<label class="col-sm-4 col-form-label" > {{ __('Upload Image')}}</label>

<div class="col-sm-8" >
<input type="file" name="image1" class="form-control">
<br>
<img src="{{url('/image/'.$blog->image1)}}" width="100px">
</div>

</div><!-- form-group Ends -->
<div class="form-group row" ><!-- form-group Starts -->
<label class="col-sm-4 col-form-label" > {{ __('Upload Image')}}</label>

<div class="col-sm-8" >
<input type="file" name="image2" class="form-control">
<br>
<img src="{{url('/image/'.$blog->image2)}}" width="100px">
</div>

</div><!-- form-group Ends -->
<div class="form-group row" ><!-- form-group Starts -->
<label class="col-sm-4 col-form-label" > {{ __('Upload Image')}}</label>

<div class="col-sm-8" >
<input type="file" name="image3" class="form-control">
<br>
<img src="{{url('/image/'.$blog->image3)}}" width="100px">
</div>

</div><!-- form-group Ends -->
<div class="form-group row" ><!-- form-group Starts -->
<label class="col-sm-4 col-form-label" > {{ __('Upload Image')}}</label>

<div class="col-sm-8" >
<input type="file" name="image4" class="form-control">
<br>
<img src="{{url('/image/'.$blog->image4)}}" width="100px">
</div>

</div><!-- form-group Ends -->
<div class="form-group row" ><!-- form-group Starts -->
<label class="col-sm-4 col-form-label" > {{ __('Upload Image')}}</label>

<div class="col-sm-8" >
<input type="file" name="image5" class="form-control">
<br>
<img src="{{url('/image/'.$blog->image5)}}" width="100px">
</div>

</div><!-- form-group Ends -->

<div class="form-group row" ><!-- form-group Starts -->
<label class="col-sm-4 col-form-label" > {{ __('Upload Image')}}</label>

<div class="col-sm-8" >
<input type="file" name="image6" class="form-control">
<br>
<img src="{{url('/image/'.$blog->image6)}}" width="100px">
</div>

</div><!-- form-group Ends -->
<!--<div class="form-group row" ><!-- 4 form-group Starts -->

<!--<label class="col-sm-4 col-form-label" > {{ __('Long Description')}}</label>-->

<!--<div class="col-sm-8" >-->
<!--<textarea name="desction" class="form-control" rows="15" id="shordescription">-->

<!--{{$blog->desction}}-->
<!--</textarea>-->
<!--</div>-->
<!--</div>-->

</div>
<div class="card-footer">


<input type="submit" name="submit" value="Update" class=" btn btn-primary form-control"  >

</div>


</form><!-- form-horizontal Ends -->

 </div>
    
</div>
    </section>


<script src="https://cdn.tiny.cloud/1/aoagi5z7gzb59qdlm0cs3i28y14os85g1tslmkk8kf604ufy/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <script>tinymce.init({ selector:'#description' });</script>
 </script>
@endsection