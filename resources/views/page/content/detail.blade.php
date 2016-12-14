@extends('page.master')
@section('title', $project->title)
@section('description', $project->description)
@section('keywords', $project->keywords)
@section('about')
<div class="row">
        <div class="col-md-10">
              <div class="inner">
                <div class="desc">
                <h2 class="text-center" >{!! $project->title !!}</h2>
                <h4>{!! $project->intro !!}</h4>
                <p>{!! $project->content !!}</p>
              </div>
              </div>
          </a>
        </div>
</div>
@endsection
