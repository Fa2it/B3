@extends('layouts.main')

@section('content')
<div class="row bg-primary">
    <div class="container">
      <div style="height:12rem" id="hide-on-scroll-one">&nbsp</div>
      <div class="">
      <h2 id="hide-on-scroll-oneh" class="d-flex justify-content-center font-weight-bold text-white mt-4" style="font-size:2.7rem">Increase your success rate, Gain market understandings</h2>
        <div class="d-flex justify-content-center font-weight-bold text-white">
                @include('components.homepage.slider-info')
        </div>
            @include('components.searchform')
      </div>
    </div>
    <div class="container d-flex align-items-end" style="height:22rem" id="hide-on-scroll-two">
        <page-corsor-component></page-corsor-component>
    </div>
</div>
<div class="row mt-5">
  <div class="container">
      @include('components.homepage.circular-chart-analysis')
  </div>
</div>
<div class="row mt-5">
  <div class="container">
      @include('components.homepage.popularity-analysis')
  </div>
</div>
@endsection
