@extends('layouts.main')
@push('styles_ad_css')
<style>
.container-slider {
      width: 25em;
      height: 2em;
      margin: 0.5em auto;
      overflow: hidden;
      position: relative;
    }
    .slider {
        top: 1em;
        position: relative;
        box-sizing: border-box;
        animation: slider 30s linear infinite;
        list-style-type: none;
        text-align: center;
        color: black;
    }


    @keyframes slider {
        0%   { top:   10em }
        100% { top: -14em }
    }

    .blur .slider {
        margin: 0;
        padding: 0 1em;
        line-height: 1.5em;
    }

    .blur:before, .blur::before,
    .blur:after,  .blur::after {
        left: 0;
        z-index: 1;
        content: '';
        position: absolute;
        width: 100%;
        height: 2em;
    }

    .blur:after, .blur::after {
        bottom: 0;
        transform: rotate(180deg);
    }

    .blur:before, .blur::before {
        top: 0;
    }
</style>
@endpush

@section('content')
<!-- Blue searchbox section -->
<div class="row bg-primary">
  @include('home.sections.welcome.searchbox')
</div>

<!-- Popularity-Trend time series section -->
<div class="row mt-5">
    <welcome-trend-map-component></welcome-trend-map-component>
</div>
<!-- KPI section -->
<div class="row mt-5">
    <welcome-kpis-component></welcome-kpis-component>
</div>
<!-- Inside section -->
<div class="row mt-5">

</div>
@endsection
