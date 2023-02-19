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
            <h1 class="m-0 text-dark">FAQ</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">FAQ</li>
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
            <h3 class="card-title">{{ __('FAQ')}}</h3>

          </div>
<form  class="form-horizontal" action="{{ route('faqs.update', $blog->id) }}" method="post" enctype="multipart/form-data" ><!-- form-horizontal Starts -->
  @method('PATCH') 
   @csrf
<div class="card-body">
<div class="form-group row" ><!-- 1 form-group Starts -->
<label class="col-sm-4 col-form-label" > {{ __('Questions')}}</label>

<div class="col-sm-8" >
    
<input type="text" name="title" class="form-control" value="{{$blog->title}}">

</div>

</div><!-- 1 form-group Ends -->

<div class="form-group row" ><!-- 1 form-group Starts -->
<label class="col-sm-4 col-form-label" > {{ __('Answers')}}</label>

<div class="col-sm-8" >
   <textarea name="sub_title" class="form-control" rows="10">
{{$blog->sub_title}}
</textarea>  
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