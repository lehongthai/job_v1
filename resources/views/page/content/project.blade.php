@extends('page.master')
@section('title', 'Tất cả dự án')
@section('about')
<div class="row">
<h2 class="text-center fh5co-heading">Các Dự Án</h2>
@foreach($listProject as $key => $project)
        <div class="col-md-4 text-center animate-box">
          <a class="work" href="{!! URL('/detail'). '/' . $project->alias !!}">
            <div class="work-grid" style="background-image:url({!! $project->image_link !!});">
              <div class="inner">
                <div class="desc">
                <h3>{!! $project->title !!}</h3>
                <span class="cart">{!! $project->intro !!}</span>
              </div>
              </div>
            </div>
          </a>
        </div>
@endforeach
</div>
@endsection
