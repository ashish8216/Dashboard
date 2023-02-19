
@extends('admin.home')
 
@section('content')
     <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1> Blogs</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active"> blogs</li>
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
                 <h3 class="card-title"><a href="{{ route('blogs.create')}}" style="color:#ffffff;"> <button class="btn btn-info"><i class="fa fa-plus"> </i></button></a></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                 <tr>
<th>S.N.</th>
<th>Title</th>
<th>Image</th>
<th>Categorie</th>
<th>Date</th>
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


<td>{{$blog->title}}</td>


<td><img src="{{$blog->image_blgs}}" style="height:100px"></td>

<td>{{App\Models\Blog_Categorie::where('id', $blog->categorie)->first()->name}}</td>
<td>{{$blog->created_at}}</td>
<td>
  <i class="fa fa-pencil" onclick="edit{{$blog->id}}()" style="height: "> </i> 
        <script type="text/javascript">function edit{{$blog->id}}(){ window.open('{{ route('blogs.edit',$blog->id) }}', '_self'); };</script>
<form action="{{ route('blogs.destroy', $blog->id)}}" method="post">
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
<th>Title</th>
<th>Imag</th>
<th>desction</th>
<th>Date</th>
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