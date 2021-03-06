@extends('layouts.main')

@section('content')
<div class="row bg-primary vh-100">
    <div class="container">
      <div class="w-75 mx-auto">
      <h2 class="mt-5 font-weight-bold text-white">Increase your success rate and gain market understandings</h2>
        <p class="d-flex justify-content-center font-weight-bold text-white"><< About What your Customers are talking >></p>
            @include('components.searchform')
      </div>
    </div>
    <div class="container" style="padding-top:20%">
      <div id="page-scroll-reduce" class="mx-auto" style="border-radius: 50%; border: 2px solid #FFF; cursor: pointer; width:3rem; height:3rem">
          <div class="d-flex justify-content-center">
              <i class="fas fa-angle-down" style="font-size:3rem;color:#FFF"></i>
          </div>
      </div>
    </div>
</div>
<div class="row mt-5">
  <div class="container">
    <div class="row">
        <div class="col bg-primary">
          <div class="card" style="width: 18rem;">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
              </div>
          </div>
        </div>
        <div class="col bg-primary">
          <div class="card" style="width: 18rem;">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
              </div>
          </div>
        </div>
        <div class="col bg-primary">
          <div class="card" style="width: 18rem;">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
              </div>
          </div>
        </div>
    </div>
  </div>
</div>
@endsection
