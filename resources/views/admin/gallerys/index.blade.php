
@extends('admin.home')
 
@section('content')
     <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1> Gallery</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active"> Gallery</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
<!-- Main content -->
    <section class="content">
      <div class="container-fluid">
          <div class="row"><!-- 2 row Starts  -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<div class="card"><!-- panel panel-default Starts -->

<div class="card-header"><!-- panel-heading Starts -->

<h3 class="card-title"><!-- panel-title Starts -->

<a  href="{{ route('gallerys.create')}}" class="btn btn-primary">Add</a>

</h3><!-- panel-title Ends -->

</div><!-- panel-heading Ends -->

<div class="card-body" ><!-- panel-body Starts -->

<div class="row">

@foreach ($blogs as $services)

<div class="col-md-3" ><!-- col-lg-3 col-md-3 Starts -->

<div class="card card-primary" ><!-- panel panel-primary Starts --->

<div class="card-header" ><!-- panel-heading Starts -->

<h3 class="card-title" align="center" >

{{$services->title}}

</h3>

</div><!-- panel-heading Ends -->

<div class="card-body" ><!-- panel-body Starts -->

<img src="{{$services->image}}" class="img-responsive"  width="100%">

</div><!-- panel-body Ends -->

<div class="panel-footer" ><!-- panel-footer Starts -->

<center><!-- center Starts -->

<div class="clearfix">
<form action="{{ route('gallerys.destroy', $services->id)}}" method="post">
        @csrf @method('DELETE') 
        <button><i class="fa fa-trash"> </i></button> 
        </form>
</div>



</center><!-- center Ends -->


</div><!-- panel-footer Ends -->


</div><!-- panel panel-primary Ends --->


</div><!-- col-lg-3 col-md-3 Ends -->

@endforeach


</div>

</div><!-- panel-body Ends -->
</div>
</div>
</div>
</div>
</section>

@endsection
