@extends('layouts.main')

@section('content')
<!-- Blue searchbox section -->
<div class="row bg-primary">
  @include('home.sections.welcome.searchbox')
</div>
<!-- KPI section -->
<div class="row mt-5">
    <welcome-kpis-component></welcome-kpis-component>
</div>
<!-- Inside section -->
<div class="row mt-5">
    @include('home.sections.welcome.insides')
</div>
<!-- Popularity-Trend time series section -->
<div class="row mt-5">
    <welcome-trend-map-component></welcome-trend-map-component>
</div>
@endsection
