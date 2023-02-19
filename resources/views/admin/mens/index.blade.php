
@extends('admin.home')
 
@section('content')
     <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1> Menus</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active"> Menus</li>
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
                <h3 class="card-title"><a href="{{ url('admin/menus')}}" style="color:#ffffff;"> <button class="btn btn-info"><i class="fa fa-plus"> </i></button></a></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                 <tr>
<th>S.N.</th>
<th>title</th>
<th>Url</th>
<th>Parent</th>
<th>Action</th>


</tr> 
                  </thead>
                  <tbody>
 @php
  $i=1;
  @endphp
@foreach ($adds as $mrpcompanyname)
<tr>
    <td>{{$i++}}</td>
    <td>{{$mrpcompanyname->title}}</td>
    <td><a href="{{$mrpcompanyname->url}}" target="_blank">{{$mrpcompanyname->url}}</a></td>
    <td>@if(!empty($mrpcompanyname->parent_id)){{App\Models\Menu::where('id', $mrpcompanyname->parent_id)->first()->title}}@endif</td>
    <td><i class="fa fa-pencil" onclick="edit{{$mrpcompanyname->id}}()" style="height: "> </i> 
        <script type="text/javascript">function edit{{$mrpcompanyname->id}}(){ window.open('{{ route('men.edit',$mrpcompanyname->id) }}', '_self'); };</script>
        <form action="{{ route('men.destroy', $mrpcompanyname->id)}}" method="post">
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
<th>title</th>
<th>Url</th>
<th>Parent</th>
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
