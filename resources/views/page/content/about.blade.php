@extends('page.master')
@section('title', 'Giới Thiệu')
@section('slider')
@include('page.blocks.slider')
@endsection
@section('about')

<div class="row animate-box">
          <h2>Giới Thiệu</h2>
</div>
<div class="row">
       <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
       <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
         <a class="thumbnail">
           <img src="{!! $about->image_link !!}" alt="{!! $about->title !!}">
         </a>
       </div>
        </div>
        <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
        <div class="desc animate-box"> <h3>{!! $about->title !!} </h3>
        <h4>{!! $about->intro !!}</h4>
         <p>  {!! $about->content !!}</p>
        </div>
         </div> 
</div>
@endsection
