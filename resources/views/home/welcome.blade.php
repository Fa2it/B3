@extends('layouts.main')
@push('styles_ad_css')
<style>
#scroll-text {
   -webkit-transition: opacity 1s ease-in-out;
   -moz-transition: opacity 1s ease-in-out;
   -ms-transition: opacity 1s ease-in-out;
   -o-transition: opacity 1s ease-in-out;
   transition: opacity 1s ease-in-out;
}
</style>


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

@push('script_ad_per_page')
<script>
  //alert("Added");
  document.addEventListener("DOMContentLoaded", function(event) {
  //do work
  var counter = 0;
  var scrolltest = document.getElementById('scroll-text');
  setInterval(scrollText, 5000)

  function scrollText(){
      var  display_texts=[
                      'About your Customers',
                      'About your Competitors',
                      'On how to Boost your PR strategy',
                      'On how to Optimized your Digital Effectiveness',
                      'On how to make the right strategic decission',
                      'Info trends as they happend',
                      'Monitor your campaign, keyboard, hashtag',
                      'Of the various communities within your customer base',
                      'On how guage sentiment',
                      'Win your market'
                    ];
      scrolltest.innerHTML =  display_texts[counter];
      scrolltest.style.opacity = 0;
      scrolltest.style.opacity = 1;


      counter++
      if(counter == display_texts.length )
          counter =0;
  }


});

</script>
@endpush
