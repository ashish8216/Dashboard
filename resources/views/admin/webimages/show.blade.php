
@extends('admin.home')
 
@section('content')
     <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1> Jobs</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active"> Jobs</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
   
     <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title"></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
      
                  <tbody>
<tr>
<th>नाम</th>
<td>{{$job->name}} {{$job->last_name}}</td>
</tr>
<tr>
<th>उमेर</th>
<td>{{$job->age}}</td>
</tr>
  <tr>
<th>बाबुको नाम</th>
<td>{{$job->father_name}}</td>
</tr>
  <tr>
<th>शिक्ष</th>
<td>{{$job->education}}</td>
</tr>
  <tr>
<th>लिङ्ग</th>
<td>{{$job->gender}}</td>
</tr>
  <tr>
<th>प्रदेश</th>
<td>{{$job->province}}</td>
</tr>
  <tr>
<th>जिल्ला</th>
<td>{{$job->district}}</td>
</tr>
  <tr>
<th>नगरपालिका</th>
<td>{{$job->municipality}}</td>
</tr>
  <tr>
<th>गाउँ</th>
<td>{{$job->village}}</td>
</tr>
  <tr>
<th>वार्ड नं।</th>
<td>{{$job->ward}}</td>
</tr>
  <tr>
<th>चालक अनुमति पत्र</th>
<td>{{$job->driver_license}}</td>
</tr>
  <tr>
<th>खेतिपाति</th>
<td>{{$job->farming}}</td>
</tr>
  <tr>
<th>वालिको विवरण</th>
<td>{{$job->details_guardian}}</td>
</tr>
  <tr>
<th>वालि सम्वन्धी ज्ञान</th>
<td>{{$job->parenta_knowledge}}</td>
</tr>
  <tr>
<th>फोन नं.</th>
<td>{{$job->phone_no}}</td>
</tr>
  <tr>
<th>इमेल</th>
<td>{{$job->email}}</td>
</tr>

</tbody>
                 
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
