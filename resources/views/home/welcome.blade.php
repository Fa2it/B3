@extends('layouts.main')

@section('content')
<!-- Blue searchbox section -->
<div class="row bg-primary">
  @include('home.sections.welcome.searchbox')
</div>
<!-- KPI section -->
<div class="row mt-5">
    @include('home.sections.welcome.kpis')
</div>
<!-- Inside section -->
<div class="row mt-5">
    @include('home.sections.welcome.insides')
</div>
<!-- Popularity-Trend time series section -->
<div class="row mt-5">
    @include('home.sections.welcome.polularitytrend')
</div>
@endsection
