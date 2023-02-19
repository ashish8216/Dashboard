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
            <h1 class="m-0 text-dark">Profiles</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">Profiles</li>
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
            <h3 class="card-title">{{ __('Profiles')}}</h3>

          </div>
<form  class="form-horizontal" action="{{ route('profiles.update', $user->id) }}" method="post" enctype="multipart/form-data" ><!-- form-horizontal Starts -->
@method('PATCH') 
   @csrf
<div class="card-body">
<div class="form-group row" ><!-- 1 form-group Starts -->
<label class="col-sm-2 col-form-label" > {{ __('Name')}}</label>

<div class="col-sm-10" >

<input type="text" name="name" class="form-control" value="{{$user->name}}">

</div>

</div><!-- 1 form-group Ends -->

<div class="form-group row" ><!-- 1 form-group Starts -->
<label class="col-sm-2 col-form-label" >{{ __('E-Mail Address') }}</label>

<div class="col-sm-10" >
    
<input type="text" name="email" class="form-control" value="{{ $user->email }}">

</div>

</div><!-- 1 form-group Ends -->

<div class="form-group row" ><!-- 1 form-group Starts -->
<label class="col-sm-2 col-form-label" > {{ __('Password') }}</label>

<div class="col-sm-10" >
    
<input type="password" name="password" class="form-control" />

</div>

</div><!-- 1 form-group Ends -->

<div class="form-group row" ><!-- 1 form-group Starts -->
<label class="col-sm-2 col-form-label" > {{ __('Confirm Password') }}</label>

<div class="col-sm-10" >
    
<input type="password" name="password_confirmation" class="form-control" />

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