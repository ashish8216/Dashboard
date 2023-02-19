
@extends('admin.home')
 
@section('content')
     <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1> Gallery Categorie</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active"> Gallery Categorie</li>
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
                <h3 class="card-title"><a href="{{ route('gallery_categories.create')}}" style="color:#ffffff;"> <button class="btn btn-info"><i class="fa fa-plus"> </i></button></a></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                 <tr>
<th>S.N.</th>
<th>Name</th>
<th>Image</th>
<th>Action</th>


</tr> 
                  </thead>
                  <tbody>
 @php
  $i=1;
  @endphp
@foreach ($blogs as $mrpcompanyname)
<tr>
    <td>{{$i++}}</td>
    <td>{{$mrpcompanyname->name}}</td>
    <td><img src="{{url('/image/'.$mrpcompanyname->image)}}" width="100px"></td>
    <td><i class="fa fa-pencil" onclick="edit{{$mrpcompanyname->id}}()" style="height: "> </i> 
        <script type="text/javascript">function edit{{$mrpcompanyname->id}}(){ window.open('{{ route('gallery_categories.edit',$mrpcompanyname->id) }}', '_self'); };</script></td>
</tr>
@endforeach
</tbody>
                  <tfoot>
                 <tr>
<th>S.N.</th>
<th>Name</th>
<th>Image</th>
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
