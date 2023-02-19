@extends('home')
 
@section('content')
<div class="row" ><!-- 1 row Starts -->

<div class="col-lg-12" ><!-- col-lg-12 Starts --> 

<ol class="breadcrumb"><!-- breadcrumb Starts -->

<li>

<i class="fa fa-dashboard" ></i> Dashboard </li>
<li class="active"><i class="fa fa-fw fa-list"></i>  Application Enter </li>

</li>

</ol><!-- breadcrumb Ends -->



</div><!-- col-lg-12 Ends --> 

</div><!-- 1 row Ends -->
<div class="row"><!-- 2 row Starts --> 

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<div class="panel panel-primary"><!-- panel panel-default Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<h3 class="panel-title">

<i class="fa fa-eye  fa-fw"></i> Application Enter 
</h3>

</div><!-- panel-heading Ends -->

<div class="panel-body">
   <div class="row">
    <div class="col-xs-12">
        <button class="btn btn-info" onclick="show()"><i class="fa fa-table"> </i> </button>
<button class="btn btn-info" onclick="edit()"><i class="fa fa-pencil"> </i>  
</button>

<script type="text/javascript">
    function show(){
        window.open('{{ route('applications.index') }}', '_self');
    };
    
    function edit(){
       window.open('{{ route('applications.edit',$application->id) }}','_self');
  };
</script>
</div>
</div>
<br> 

  
  <div class="row"><!-- 2 row Starts --> 
<div class="col-lg-6"><!-- col-lg-12 Starts -->

 <div class="panel panel-primary"><!-- panel panel-default Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<h3 class="panel-title">



</h3>

</div><!-- panel-heading Ends -->

<div class="panel-body"><!-- panel-body Starts -->

<table class="table table-striped" ><!-- table table-bordered table-hover table-striped Starts -->

<tbody>
<tr>
  <th>Addlied For Company</th>
  <td>{{$application->company_addlied}}</td>
</tr>
<tr>
  <th>Applied For Country</th>
  <td>{{$application->applied_for_country}}</td>
</tr>
<tr>
  <th>Post</th>
  <td>{{$application->post}}</td>
</tr>

</tbody>
</table>

</div><!-- 2 row Starts --> 
</div><!-- col-lg-12 Starts -->

<div class="panel panel-primary"><!-- panel panel-default Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<h3 class="panel-title">

Personal Details

</h3>

</div><!-- panel-heading Ends -->

<div class="panel-body"><!-- panel-body Starts -->

<table class="table table-striped" ><!-- table table-bordered table-hover table-striped Starts -->

<tbody>

<tr>
  <th>Applicant's Name</th>
  <td>{{$application->applicants_name}}</td>
</tr>
<tr>
  <th>Father's Name</th>
  <td>{{$application->fathers_name}}</td>
</tr>
<tr>
  <th>Mother's Name </th>
  <td>{{$application->mothers_name }}</td>
</tr>
<tr>
  <th> Wife's Name  </th>
  <td>{{$application->wifes_name}}</td>
</tr>
<tr>
  <th>Marital Status </th>
  <td>{{$application->marital_status }}</td>
</tr>
<tr>
  <th>Nationality & State </th>
  <td>{{$application->nationality_state}}</td>
</tr>
<tr>
  <th>Religion  </th>
  <td>{{$application->religion}}</td>
</tr>
</tbody>
</table>
</div><!-- 2 row Starts --> 
</div><!-- col-lg-12 Starts -->

</div><!-- panel-body Ends -->
<div class="col-lg-6"><!-- col-lg-12 Starts -->
 <div class="panel panel-primary"><!-- panel panel-default Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<h3 class="panel-title">

Passport Details

</h3>

</div><!-- panel-heading Ends -->

<div class="panel-body"><!-- panel-body Starts -->


<table class="table table-striped" ><!-- table table-bordered table-hover table-striped Starts -->

<tbody>

<tr>
  <th>Passport No.</th>
  <td>{{$application->passport_no}}</td>
</tr>
<tr>
  <th>Permanent Address</th>
  <td>{{$application->permanent_address}}</td>
</tr>
<tr>
  <th>Palace Of Birth</th>
  <td>{{$application->palace_of_birth}}</td>
</tr>
<tr>
  <th>Date of Issue </th>
  <td>{{$application->date_of_issue}}</td>
</tr>
<tr>
  <th>Date of Expiry</th>
  <td>{{$application->date_of_expiry}}</td>
</tr>
<tr>
  <th>Date of Birth </th>
  <td>{{$application->date_of_birth}}</td>
</tr>
<tr>
  <th>Age </th>
  <td>{{$application->age}}</td>
</tr>
<tr>
  <th>Language Know & Standard </th>
  <td>{{$application->language_know_standard}}</td>
</tr>
<tr>
  <th>Medical Status </th>
  <td>{{$application->medical_status}}</td>
</tr>
</tbody>
</table>  

</div><!-- col-lg-12 Starts -->

</div>
</div>
</div><!-- panel panel-default Ends -->
<br>
<div class="row"><!-- 2 row Starts --> 
<div class="col-lg-12"><!-- col-lg-12 Starts -->
<div class="row"><!-- 2 row Starts --> 
<div class="col-md-2"></div>
<div class="col-md-8">
<div class="panel panel-primary"><!-- panel panel-default Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<h3 class="panel-title">

Qualification

</h3>

</div><!-- panel-heading Ends -->

<div class="panel-body"><!-- panel-body Starts -->
<center>
<table class="table table-striped" ><!-- table table-bordered table-hover table-striped Starts -->

<thead>

<tr>
<th>Examination</th>
<th>Board / University</th>
<th>Date / Year</th>



</tr>

</thead>

<tbody>
    <tr>
<td>{{$application->examination_a}}</td>
<td>{{$application->board_university_a}}</td>
<td>{{$application->date_year_a}}</td>
</tr>

<tr>
<td>{{$application->examination_b}}</td>
<td>{{$application->board_university_b}}</td>
<td>{{$application->date_year_b}}</td>
</tr>

<tr>
<td>{{$application->examination_c}}</td>
<td>{{$application->board_university_c}}</td>
<td>{{$application->date_year_c}}</td>
</tr>
<tr>
<td>{{$application->examination_d}}</td>
<td>{{$application->board_university_d}}</td>
<td>{{$application->date_year_d}}</td>
</tr>
    </tbody>
    </table>
    </center>
    
</div><!-- 2 row Starts --> 
</div><!-- col-lg-12 Starts -->
</div>
    <div class="col-md-2"></div>
    </div>
</div><!-- panel-body Ends -->
<div class="col-lg-12"><!-- col-lg-12 Starts -->
  <br>
<div class="row"><!-- 2 row Starts --> 
<div class="col-md-2"></div>
<div class="col-md-8">
<div class="panel panel-primary"><!-- panel panel-default Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<h3 class="panel-title">

Work Experience

</h3>

</div><!-- panel-heading Ends -->

<div class="panel-body"><!-- panel-body Starts -->
<center>
<table class="table table-striped" ><!-- table table-bordered table-hover table-striped Starts -->

<thead>

<tr>
<th>Company / Institution Name</th>
<th>Position</th>
<th>Date / Year</th>



</tr>

</thead>

<tbody>
    <tr>
<td>{{$application->company_a}}</td>
<td>{{$application->position_a}}</td>
<td>{{$application->date_year_e}}</td>
</tr>

<tr>
<td>{{$application->company_b}}</td>
<td>{{$application->position_b}}</td>
<td>{{$application->date_year_f}}</td>
</tr>

<tr>
<td>{{$application->company_c}}</td>
<td>{{$application->position_c}}</td>
<td>{{$application->date_year_g}}</td>
</tr>
    </tbody>
    </table>
    </center>
    
</div><!-- 2 row Starts --> 
</div><!-- col-lg-12 Starts -->
</div>
    <div class="col-md-2"></div>
    </div>
</div>
<div class="col-lg-12"><!-- col-lg-12 Starts -->
  <br>
<div class="row"><!-- 2 row Starts --> 
<div class="col-md-2"></div>
<div class="col-md-8">
<div class="panel panel-primary"><!-- panel panel-default Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<h3 class="panel-title">

Professional Training

</h3>

</div><!-- panel-heading Ends -->

<div class="panel-body"><!-- panel-body Starts -->
<center>
<table class="table table-striped" ><!-- table table-bordered table-hover table-striped Starts -->

<thead>

<tr>
<th>Company / Institution Name</th>
<th>Course</th>
<th>Date / Year</th>



</tr>

</thead>

<tbody>
    <tr>
<td>{{$application->company_institution_a}}</td>
<td>{{$application->course_a}}</td>
<td>{{$application->date_year_h}}</td>
</tr>

<tr>
<td>{{$application->company_institution_b}}</td>
<td>{{$application->course_b}}</td>
<td>{{$application->date_year_i}}</td>
</tr>

<tr>
<td>{{$application->company_institution_c}}</td>
<td>{{$application->course_c}}</td>
<td>{{$application->date_year_j}}</td>
</tr>

    </tbody>
    </table>
    </center>
    
</div><!-- 2 row Starts --> 
</div><!-- col-lg-12 Starts -->
</div>
    <div class="col-md-2"></div>
    </div>
</div>
</div>
<br>
<div class="row"><!-- 2 row Starts --> 
<div class="col-md-6"><!-- col-lg-12 Starts -->
<div class="panel panel-primary"><!-- panel panel-default Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<h3 class="panel-title">

Correspondence Add

</h3>

</div><!-- panel-heading Ends -->

<div class="panel-body"><!-- panel-body Starts -->

<table class="table table-striped" ><!-- table table-bordered table-hover table-striped Starts -->

<tbody>

<tr>
  <th>Tel. No.</th>
  <td>{{$application->tel}}</td>
</tr>
<tr>
  <th>Mobile No.</th>
  <td>{{$application->mobile}}</td>
</tr>
<tr>
  <th>Email ID</th>
  <td>{{$application->email}}</td>
</tr>

</tbody>
</table>
</div><!-- 2 row Starts --> 
</div><!-- col-lg-12 Starts -->

</div><!-- panel-body Ends -->
<div class="col-md-6"><!-- col-lg-12 Starts -->
 <div class="panel panel-primary"><!-- panel panel-default Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<h3 class="panel-title">
Declaration:
</h3>

</div><!-- panel-heading Ends -->

<div class="panel-body"><!-- panel-body Starts -->
<table class="table table-striped" ><!-- table table-bordered table-hover table-striped Starts -->

<tbody>

<tr>
  <th>Date</th>
  <td>{{$application->date}}</td>
</tr>
<tr>
  <th>Place</th>
  <td>{{$application->place}}</td>
</tr>
<tr>
  <th>Name</th>
  <td>{{$application->name}}</td>
</tr>
</tbody>
</table>
</div><!-- col-lg-12 Starts -->

</div>
</div>
</div>

<center>Remarks:{{$application->remarks}}</center>


    

</div><!-- panel-body Ends -->

</div><!-- panel panel-default Ends -->

</div><!-- col-lg-12 Ends -->
</div>

@endsection