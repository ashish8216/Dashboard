
@extends('admin.home')
 
@section('content')

      <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Slideshows</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">Slideshows</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
          <div class="row"><!-- 2 row Starts  -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<div class="card"><!-- panel panel-default Starts -->

<div class="card-header"><!-- panel-heading Starts -->

<h3 class="card-title"><!-- panel-title Starts -->

<a  href="{{ route('slideshows.create')}}" class="btn btn-primary">Add</a>

</h3><!-- panel-title Ends -->

</div><!-- panel-heading Ends -->

<div class="card-body" ><!-- panel-body Starts -->

<div class="row">

@foreach ($services as $services)

<div class="col-md-3" ><!-- col-lg-3 col-md-3 Starts -->

<div class="card card-primary" ><!-- panel panel-primary Starts --->

<div class="card-header" ><!-- panel-heading Starts -->

<h3 class="card-title" align="center" >

{{$services->title}}

</h3>

</div><!-- panel-heading Ends -->

<div class="card-body" ><!-- panel-body Starts -->

<img src="{{url('image').'/'.$services->image}}" class="img-responsive"  width="100%">

</div><!-- panel-body Ends -->

<div class="panel-footer" ><!-- panel-footer Starts -->

<center><!-- center Starts -->

<form action="{{ route('slideshows.destroy', $services->id)}}" method="post">
@csrf
 @method('DELETE')
 <button><i class="fa fa-trash"> </i></button>  
</form>
</a>

<div class="clearfix" >

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