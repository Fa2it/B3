@extends('layouts.main')

@section('content')
    <div class="row bg-primary">
        <div class="container text-center pt-4 pb-4 text-light">
          <h1>Pick your Plan</h1>
          <h2>Manage your hashtags and campaigns on Twitter and Instagram</h2>
        </div>
    </div><!-- Pick Plan Section Ends -->
    <div class="row"><!-- choose Plan Section-->
        <div class="container text-center pt-4 pb-4">
          <h1>Choose a Plan and Start your Unlimited Free Trial</h1>
          <h2><span><!-- react-text: 16 -->Cancel anytime <!-- /react-text --><svg width="24" height="24" viewBox="0 0 24 24" style="width: 24px; height: 24px;"><g transform="translate(0,-1028.3622)"><g transform="matrix(0.08107642,0,0,0.08107642,-12.347533,1006.0511)"><path d="m 448.312,404.694 c 0,12.333 0,24.669 0,37.002 -0.736,2.118 -1.729,4.185 -2.171,6.364 -12.196,60.259 -47.979,99.242 -106.319,117.793 -6.878,2.188 -14.006,3.586 -21.017,5.35 -12.335,0 -24.668,0 -37.002,0 -2.12,-0.733 -4.188,-1.723 -6.366,-2.166 -59.738,-12.098 -98.773,-47.32 -117.413,-105.213 -2.332,-7.24 -3.839,-14.745 -5.729,-22.128 0,-12.333 0,-24.669 0,-37.002 0.729,-2.127 1.71,-4.205 2.152,-6.392 12.09,-59.747 47.332,-98.765 105.222,-117.399 7.241,-2.331 14.749,-3.831 22.133,-5.716 12.334,0 24.667,0 37.002,0 2.127,0.729 4.204,1.71 6.389,2.155 59.732,12.119 98.744,47.363 117.367,105.254 2.329,7.233 3.856,14.724 5.752,22.098 z M 308.733,481.97 c 1.07,-5.845 1.568,-9.558 2.445,-13.18 4.803,-19.803 10.403,-39.453 14.11,-59.456 1.044,-5.63 -1.592,-14.786 -5.78,-17.753 -4.31,-3.056 -13.605,-2.606 -18.883,0.011 -9.151,4.539 -17.106,11.667 -25.095,18.277 -2.767,2.288 -4.143,6.258 -6.154,9.463 0.645,0.784 1.29,1.567 1.935,2.351 5.541,-1.534 11.081,-3.067 18.135,-5.019 -0.756,5.328 -0.999,9.458 -1.959,13.413 -4.718,19.427 -10.207,38.691 -14.098,58.278 -1.108,5.576 0.579,13.41 4.084,17.643 2.631,3.178 11.704,4.788 15.336,2.674 11.84,-6.893 22.605,-15.678 33.492,-24.11 1.493,-1.156 1.336,-4.44 2.49,-8.812 -7.282,2.259 -12.523,3.885 -20.058,6.22 z m 20.103,-125.232 c -0.136,-11.773 -9.809,-21.347 -21.423,-21.202 -11.611,0.145 -21.114,9.951 -21.011,21.681 0.104,11.694 9.869,21.317 21.502,21.186 11.69,-0.128 21.071,-9.837 20.932,-21.665 z" style="fill: rgb(25, 118, 210);"></path></g></g></svg></span></h2>
        </div>
    </div> <!-- choose Plan Section Ends -->
    <div class="row"> <!-- Month Year Button Starts -->
        <div class="container text-center pt-4 pb-4">
            <span class="hashtagify-frequency-base-monthly" style="color: rgb(25, 118, 210);">Monthly</span>
            <svg width="24" height="24" viewBox="0 0 24 24" style="width: 74px;"><g><rect ry="5.4157705" y="6.5383282" x="0.11282825" height="10.923344" width="23.774343" style="fill: rgb(194, 244, 253); fill-opacity: 1; stroke: rgb(25, 118, 210); stroke-width: 0.225657; stroke-miterlimit: 4; stroke-dasharray: none; stroke-opacity: 1;"></rect><circle r="4.4290028" cy="11.999998" cx="5.8421712" style="fill: rgb(25, 118, 210); fill-opacity: 1; stroke: rgb(25, 118, 210); stroke-width: 0.225657; stroke-miterlimit: 4; stroke-dasharray: none; stroke-opacity: 1;"></circle></g></svg>
            <span class="hashtagify-frequency-base-yearly" style="color: rgb(176, 176, 176);">Annually</span>
        </div>
    </div> <!-- Month Year Button Ends -->
    <div class="row"><!-- Price Section Starts -->
        <div class="container text-center pt-4 pb-4">
            <div class="row">
                  <div class="col">
                    <div class="card">
                      <div class="card-header bg-primary">
                        <h2>Free</h2>
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <div class="p-2 bg-warning"><div class=""><strong>Free 100%</strong></div></div>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card">
                      <div class="card-header bg-primary">
                        <h2>Personal</h2>
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <div class="p-2 bg-warning"><div class="font-weight-bold"><strong>29</strong><span>$/mo +VAT*</span></div></div>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card">
                      <div class="card-header bg-primary">
                        <h2>Business</h2>
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <div class="p-2 bg-warning"><div class="eZzNrU"><strong>29</strong><span>$/mo +VAT*</span></div></div>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
    </div> <!-- Price Section Ends -->
    <div class="row"><!-- FAQ Section Starts -->
        <div class="container text-center pt-4 pb-4"> <!-- List Group inner Container -->
          <h1>Frequently Asked Questions</h1>
          <div class="row"> <!-- List Group inner Row Starts -->
              <div class="col">
                        <ul class="list-group"><!-- List Group Starts -->
                          <li class="list-group-item">
                              <h5 class="mb-1">List group item heading</h5>
                              <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                          </li>
                          <li class="list-group-item list-group-item-action flex-column align-items-start">
                            <div class="d-flex w-100 justify-content-between">
                              <h5 class="mb-1">List group item heading</h5>
                              <small class="text-muted">3 days ago</small>
                            </div>
                            <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                            <small class="text-muted">Donec id elit non mi porta.</small>
                          </li>
                          <li class="list-group-item list-group-item-action flex-column align-items-start">
                            <div class="d-flex w-100 justify-content-between">
                              <h5 class="mb-1">List group item heading</h5>
                              <small class="text-muted">3 days ago</small>
                            </div>
                            <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                            <small class="text-muted">Donec id elit non mi porta.</small>
                          </li>
                          <li class="list-group-item list-group-item-action flex-column align-items-start">
                            <div class="d-flex w-100 justify-content-between">
                              <h5 class="mb-1">List group item heading</h5>
                              <small class="text-muted">3 days ago</small>
                            </div>
                            <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                            <small class="text-muted">Donec id elit non mi porta.</small>
                          </li>
                          <li class="list-group-item list-group-item-action flex-column align-items-start">
                            <div class="d-flex w-100 justify-content-between">
                              <h5 class="mb-1">List group item heading</h5>
                              <small class="text-muted">3 days ago</small>
                            </div>
                            <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                            <small class="text-muted">Donec id elit non mi porta.</small>
                          </li>
                        </ul><!-- List Group Ends -->
              </div>
              <div class="col">
                      <ul class="list-group"><!-- List Group Starts -->
                        <li class="list-group-item list-group-item-action flex-column align-items-start">
                          <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">List group item heading</h5>
                            <small class="text-muted">3 days ago</small>
                          </div>
                          <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                          <small class="text-muted">Donec id elit non mi porta.</small>
                        </li>
                        <li class="list-group-item list-group-item-action flex-column align-items-start">
                          <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">List group item heading</h5>
                            <small class="text-muted">3 days ago</small>
                          </div>
                          <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                          <small class="text-muted">Donec id elit non mi porta.</small>
                        </li>
                        <li class="list-group-item list-group-item-action flex-column align-items-start">
                          <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">List group item heading</h5>
                            <small class="text-muted">3 days ago</small>
                          </div>
                          <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                          <small class="text-muted">Donec id elit non mi porta.</small>
                        </li>
                        <li class="list-group-item list-group-item-action flex-column align-items-start">
                          <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">List group item heading</h5>
                            <small class="text-muted">3 days ago</small>
                          </div>
                          <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                          <small class="text-muted">Donec id elit non mi porta.</small>
                        </li>
                        <li class="list-group-item list-group-item-action flex-column align-items-start">
                          <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">List group item heading</h5>
                            <small class="text-muted">3 days ago</small>
                          </div>
                          <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                          <small class="text-muted">Donec id elit non mi porta.</small>
                        </li>
                      </ul><!-- List Group Ends -->
              </div>
          </div> <!-- List Group inner Row Ends -->
        </div> <!-- List Group inner Container Ends -->
    </div><!-- FAQ Section Ends -->
@endsection
