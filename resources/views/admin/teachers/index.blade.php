
@extends('admin.home')
 
@section('content')
     <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1> Team</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active"> Team</li>
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
                 <h3 class="card-title"><a href="{{ route('teachers.create')}}" style="color:#ffffff;"> <button class="btn btn-info"><i class="fa fa-plus"> </i></button></a></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                 <tr>
<th>S.N.</th>
<th>Name</th>
<th>Image</th>
<th>Post</th>
<th>Action</th>


</tr> 
                  </thead>
                  <tbody>
 @php
  $i=1;
  @endphp
@foreach ($blogs as $blog)
<tr>
    <td>{{$i++}}</td>


<td>{{$blog->name}}</td>


<td><img src="{{$blog->image}}" style="height:100px"></td>

<td>{{$blog->post}}</td>

<td>
  <i class="fa fa-pencil" onclick="edit{{$blog->id}}()" style="height: "> </i> 
        <script type="text/javascript">function edit{{$blog->id}}(){ window.open('{{ route('teachers.edit',$blog->id) }}', '_self'); };</script>
<form action="{{ route('teachers.destroy', $blog->id)}}" method="post">
        @csrf @method('DELETE') 
        <button><i class="fa fa-trash"> </i></button> 
        </form>

</td>

</tr>
@endforeach
</tbody>
                  <tfoot>
                 <tr>
<th>S.N.</th>
<th>Nane</th>
<th>Image</th>
<th>Post</th>
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
