
@extends('admin.home')
 
@section('content')
     <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1> Footer Link</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active"> Footer Link</li>
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
                <!--<h3 class="card-title"><a href="{{ route('links.create')}}" style="color:#ffffff;"> <button class="btn btn-info"><i class="fa fa-plus"> </i></button></a></h3>-->
                <!-- <h3 class="card-title"><a href="{{ url('admin/products/pdf')}}" style="color:#ffffff;"> <button class="btn btn-info"><i class="fa fa-file-pdf"></i></button></a></h3> -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                 <tr>
<th>S.N.</th>
<th>Title</th>
<th>link</th>
<th>Action</th>


</tr>
                  </thead>
 <tbody>
@foreach ($services as $services)
<tr>
<td>{{$services->id}}</td>

<td>{!! $services->title !!}</td>
<td>{{$services->link}}</td>

<td>

<i class="fa fa-edit" onclick="edit{{$services->id}}()"> </i> 

<script type="text/javascript">
    
    function edit{{$services->id}}(){
        window.open('{{ route('links.edit',$services->id) }}', '_self');
    };
</script>


</td>
</tr>
@endforeach
</tbody>

                  <tfoot>
                 <tr>
<th>S.N.</th>
<th>Title</th>
<th>title</th>
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
