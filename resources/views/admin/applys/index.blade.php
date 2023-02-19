
@extends('admin.home')
 
@section('content')
     <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1> Application Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active"> Application Form</li>
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
     <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <!-- <h3 class="card-title"><a href="{{ route('applys.create')}}" style="color:#ffffff;"> <button class="btn btn-info"><i class="fa fa-plus"> </i></button></a></h3> -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                 <tr>
<th>S.N.</th>
<th>Name</th>
<th>Image</th>
<th>email</th>
<th>Phone</th>
<th>Present Address</th>
<th>Action</th>


</tr> 
                  </thead>
                  <tbody>
@foreach ($blogs as $noctice)
<tr>
<td>{{$noctice->id}}</td>

<td>{{$noctice->name}}</td>
<td><img src="{{url('/image/'.$noctice->image)}}" width="100px"></td>
<td>{{$noctice->email}}</td>
<td>{{$noctice->mobile}}</td>
<td>{{$noctice->permanent_address}}</td>
<td>
<i class="fa fa-eye" onclick="show{{$noctice->id}}()" style="height: "> </i>
    <form action="{{ route('applys.destroy', $noctice->id)}}" method="post">
        @csrf @method('DELETE') 
        <button><i class="fa fa-trash"> </i></button> 
        </form>
        <script type="text/javascript">function show{{$noctice->id}}(){ window.open('{{ route('applys.show',$noctice->id) }}', '_self'); };</script>

</td>
</tr>
@endforeach
</tbody>
                  <tfoot>
  <tr>
<th>S.N.</th>
<th>Name</th>
<th>Image</th>
<th>email</th>
<th>Phone</th>
<th>Present Address</th>
<th>Action</th>


</tr> 
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>

@endsection
