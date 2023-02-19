<html>
    <head>
       <link href="https://iglobal.edu.np/assets/vendors/fontawesome/css/all.min.css" rel="stylesheet" type="text/css" />
<style>
    /* 
  print 
*/
       @CHARSET "UTF-8";
    .page-break {
      page-break-after: always;
      page-break-inside: avoid;
      clear:both;
    }
    .page-break-before {
      page-break-before: always;
      page-break-inside: avoid;
      clear:both;
    }
  </style> 
    </head>
    
    <body>
    
   
    <!-- /.content-header -->

    <!-- Main content -->
    
         <button   onclick="createPDF()"><i class="fa fa-file-pdf"></i></button>
 <div id="element-to-print">   
 <div style="width:720px;">
<div style="text-align:center;">
    <img src="https://iglobal.edu.np/public/storage/files/2/1672224132Iglobal%20bridge%20to%20success.jpeg" width="300px"><br>
    <h2>Application Form</h2>
</div>
 <br>
 <div style="text-align:right;"><p id="demo{{$member->id}}"></p></div>
                                    <script>
var d{{$member->id}} = new Date('{!! $member->created_at!!}');
    document.getElementById("demo{{$member->id}}").innerHTML = 'Date: ' + d{{$member->id}}.toDateString();
</script>
<br>
<div style="width:30%;float: right;">
<img src="{{url('/image/'.$member->image)}}" style="width:212px;height: 200px;border: 1px solid black;">
</div>
<div style="width:70%;float:left ;">1.	Personal Details:<br>
<br>
Full Name: {{$member->name}}<br>
Sex: {{$member->sex}}<br>
Date of Birth: {{$member->birth}}<br>
Parent's Name: {{$member->parent}}<br>
Occupation: {{$member->occupation}}<br>
Permanent   Address: {{$member->permanent_address}}<br>
Mobile no: {{$member->mobile}}<br>
Email: {{$member->email}}<br>
</div>
<div style="clear: both;"></div>
<br>
<br> 2.	Education Qualification:<br><br>
<div style="width:50%;float:left ;">Level: {{$member->level}}</div>
<div style="width:50%;float: right;">Stream: {{$member->stream}}</div>
<br>
<div style="width:50%;float:left ;">GPA: {{$member->gpa}}</div>
<div style="width:50%;float: right;">Passed Year: {{$member->year}}</div>
<br><br>
3.	Destination Country:<br><br>
4. Have you taken IELTS/PTE?  
<input type="radio"  id="vehicle1" name="yes" value="1" {{  ($member->yes ==  1 ? ' checked' : '') }}>Yes 
<input type="radio"  id="vehicle12" name="yes" value="12" {{  ($member->yes ==  12 ? ' checked' : '') }}>No<br><br>
<div style="width:33%;float:left ;">Listening: {{$member->listening}}</div>
<div style="width:33%;float:left ;">Reading: {{$member->reasing}}</div>
<div style="width:33%;float: right;">Writing: {{$member->writing}}</div>
<br>
<div style="width:50%;float:left ;"> Speaking: {{$member->speaking}}</div>
<div style="width:50%;float: right;">Overall: {{$member->overall}}</div>
<br>
 <br>
 5. Japanese Language Skills : <br> <br>
<input type="checkbox" id="vehicle2" name="nat" value="2" {{  ($member->nat ==  2 ? ' checked' : '') }}> NAT
  <input type="checkbox" id="vehicle3" name="jlpt" value="3" {{  ($member->jlpt ==  3 ? ' checked' : '') }}> JLPT
  <input type="checkbox" id="vehicle4" name='top' value="4" {{  ($member->top ==  4 ? ' checked' : '') }}> TOP.J
   <br><br>
6. How did you know about-Iglobal?<br><br>
<input type="checkbox" id="vehicle5" name="friends" value="5"  {{  ($member->friends ==  5 ? ' checked' : '') }}> Friends
  <input type="checkbox" id="vehicle6" name="relatives" value="6"  {{  ($member->relatives ==  6 ? ' checked' : '') }}> Relatives
  <input type="checkbox" id="vehicle7" name="website" value="7"  {{  ($member->website ==  7 ? ' checked' : '') }}> Website
  <input type="checkbox" id="vehicle8" name="facebook" value="8"  {{  ($member->facebook ==  8 ? ' checked' : '') }}> Facebook
  <input type="checkbox" id="vehicle9" name="seminars" value="9"  {{  ($member->seminars ==  9 ? ' checked' : '') }}> Seminars
  <input type="checkbox" id="vehicle10" name="walk_in" value="10"  {{  ($member->walk_in ==  10 ? ' checked' : '') }}> Walk-in
  <input type="checkbox" id="vehicle11" name="others" value="11"  {{  ($member->others ==  11 ? ' checked' : '') }}> Others
  <br><br>
 Counselor Comments:<br>
 <br>
 {{$member->comments}}
 
</div>
</div>
  
 



<script src="{{url('pdf/lib/html2pdf.min.js')}}"></script>
<script>
function createPDF() {
    

// Get the element to print
var element = document.getElementById('element-to-print');

// Define optional configuration
var options = {
  filename: 'from{{$member->id}}.pdf',
  image:        { type: 'jpeg', quality: 0.98 },
  html2canvas:  { scale: 2, logging: true, dpi: 192, letterRendering: true },
  jsPDF:        { unit: 'mm', format: 'a4', orientation: 'portrait' }
};

// Create instance of html2pdf class
var exporter = new html2pdf(element, options);

// You can also use static methods for one time use...
options.source = element;
options.download = true;
html2pdf.getPdf(options);


}
</script>
    
    </body>
</html>
