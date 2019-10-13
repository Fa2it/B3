@extends('layouts.main')

@section('content')
<div class="row bg-primary">
    <div class="container">
      <div style="height:12rem" id="hide-on-scroll-one">&nbsp</div>
      <div class="">
      <h2 id="hide-on-scroll-oneh" class="d-flex justify-content-center font-weight-bold text-white mt-4" style="font-size:2.7rem">Increase your success rate, Gain market understandings</h2>
        <div class="d-flex justify-content-center font-weight-bold text-white">
          <div class="container-slider blur rounded border border-light">
              <ul class="slider">
                <li class="mb-3">About your Customers </li>
                <li class="mb-3">About your Competitors </li>
                <li class="mb-3">On how to Boost your PR strategy </li>
                <li class="mb-3">On how to Optimized your Digital Effectiveness</li>
                <li class="mb-3">On how to make the right strategic decission</li>
                <li class="mb-3">Info trends as they happend</li>
                <li class="mb-3">Monitor your campaign, keyboard, hashtag </li>
                <li class="mb-3">Of the various communities within your customer base</li>
                <li class="mb-3">On how guage sentiment</li>
                <li class="mb-3">Win your market</li>
                <li class="mb-3">About your Customers </li>
                <li class="mb-3">About your Competitors </li>
                <li class="mb-3">On how to Boost your PR strategy </li>
                <li class="mb-3">On how to Optimized your Digital Effectiveness</li>
                <li class="mb-3">On how to make the right strategic decission</li>
                <li class="mb-3">Info trends as they happend</li>
                <li class="mb-3">Monitor your campaign, keyboard, hashtag </li>
                <li class="mb-3">Of the various communities within your customer base</li>
                <li class="mb-3">On how guage sentiment</li>
                <li class="mb-3">Win your market</li>
                <li class="mb-3">About your Customers </li>
                <li class="mb-3">About your Competitors </li>
                <li class="mb-3">On how to Boost your PR strategy </li>
                <li class="mb-3">On how to Optimized your Digital Effectiveness</li>
                <li class="mb-3">On how to make the right strategic decission</li>
                <li class="mb-3">Info trends as they happend</li>
                <li class="mb-3">Monitor your campaign, keyboard, hashtag </li>
                <li class="mb-3">Of the various communities within your customer base</li>
                <li class="mb-3">On how guage sentiment</li>
                <li class="mb-3">Win your market</li>
              </ul>
          </div>
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
