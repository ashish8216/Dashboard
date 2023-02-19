@extends('admin.home')
 
@section('content')
     <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1> Contacts Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active"> Contacts Form</li>
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
                 
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                 <tr>
<th>S.N.</th>
<th>Name</th>
<th>Email</th>
<th>Phone</th>
<th>subject</th>
<th>message</th>
<th>Date</th>


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


<td>{{$blog->email}}</td>

<td>{{$blog->phone}}</td>
<td>{{$blog->subject}}</td>
<td>{!!$blog->message!!}</td>
<td><p id="demo{{$blog->id}}"></p>
                                    <script>
var d{{$blog->id}} = new Date('{!! $blog->created_at!!}');
    document.getElementById("demo{{$blog->id}}").innerHTML = '' + d{{$blog->id}}.toDateString();
</script></td>

</tr>
@endforeach
</tbody>
                  <tfoot>
                 <tr>
<th>S.N.</th>
<th>Name</th>
<th>Email</th>
<th>Phone</th>
<th>subject</th>
<th>message</th>
<th>Date</th>

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
