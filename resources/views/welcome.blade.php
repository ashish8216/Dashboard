@extends('top')
@section('app.name','Home')
@push('meta')
    @foreach ($seos as $seo)
      <meta name="description" content="{{$seo->title}}" />
    @endforeach
@endpush
@section('content')

@foreach ($popup as $blog)
<div id="overlay"></div>
<div id="popup">
    <div class="popupcontrols">
        <span id="popupclose">x</span>
    </div>
    <div class="popupcontent">
         <center><img src="{{$blog->image}}" style="max-width:100%;width:auto;max-height: 650px"></center>
        <h5>
    </div>
</div>
    @endforeach

 @include('home_setup.banner-one')


@include('home_setup.features-one')
  


@include('home_setup.about-one')
        

  
@include('home_setup.features-two')
       


@include('home_setup.counter-one')
        



@include('home_setup.service-one')
        

  
@include('home_setup.team-one')



@include('home_setup.cat-one')




@include('home_setup.testimonial-one')

        


@include('home_setup.blog-one')
       


 
@include('home_setup.partner-one')

        



@include('home_setup.partner-two')
   

 

 @include('home_setup.info-one')
         


@endsection