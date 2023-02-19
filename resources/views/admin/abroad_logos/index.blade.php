
@extends('admin.home')
 
@section('content')
     <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Enrollment Open</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active"> Enrollment Open</li>
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
          <div class="row" ><!-- 3 row Starts -->

<div class="col-lg-12" ><!-- col-lg-8 Starts -->

<div class="card card-primary" ><!-- panel panel-primary Starts -->
<div class="card-header" ><!-- panel-heading Starts -->

<h3 class="card-title" ><!-- panel-title Starts -->

 {{ __('Study Abroad')}}

</h3><!-- panel-title Ends -->

<div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                      </button>
                      <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                      </button>
                    </div>
</div><!-- panel-heading Ends -->

<div class="card-body" ><!-- panel-body Starts -->

<div id="chartContainer5444" style="height: 300px; width: 100%;"></div>

</div>

</div>


</div><!-- col-lg-8 Ends -->



</div><!-- 3 row Ends -->    
        <div class="row">
          <div class="col-12">
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                 <h3 class="card-title"><a href="{{ route('abroad_logos.create')}}" style="color:#ffffff;"> <button class="btn btn-info"><i class="fa fa-plus"> </i></button></a></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                 <tr>
<th>S.N.</th>
<th>Study</th>
<th>Website</th>
<th>Image</th>
<th>RTO Code</th>
<th>CRICOS No</th>
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

<td>{{App\Models\Abroad::where('id', $blog->study)->first()->name}}</td>
<td>{{$blog->url}}</td>
<td><img src="{{$blog->image}}" style="height:100px"></td>
<td>{{$blog->rtocode}}</td>
<td>{{$blog->cricos}}</td>
<td>
  <i class="fa fa-pencil" onclick="edit{{$blog->id}}()" style="height: "> </i> 
        <script type="text/javascript">function edit{{$blog->id}}(){ window.open('{{ route('abroad_logos.edit',$blog->id) }}', '_self'); };</script>
<form action="{{ route('abroad_logos.destroy', $blog->id)}}" method="post">
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
<th>Study</th>
<th>Website</th>
<th>Image</th>
<th>RTO Code</th>
<th>CRICOS No</th>
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

<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer5444", {
    animationEnabled: true,
    theme: "light2", // "light1", "light2", "dark1", "dark2"
    title:{
        text: " "
    },
    axisY: {
        title: "Enrollment Open"
    },
    data: [{        
        type: "column",  
        showInLegend: true, 
        legendMarkerColor: "grey",
        legendText: "Study Abroad",
        dataPoints: [ 
          @foreach ($productssubcategories as $productssubcategorie)  
  
      { y: {{App\Models\Abroad_logo::where('study',$productssubcategorie->id)->get()->count()}}, label: "{!!$productssubcategorie->name!!}" },
    
    @endforeach   
            
        ]
    }]
});
chart.render();
}
</script>
@endsection
