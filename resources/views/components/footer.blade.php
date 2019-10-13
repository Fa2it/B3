<footer class="container-fluid mt-4">
  <div class="row bg-secondary">
      <div class="container pt-4 pb-4 text-light">
        <div class="row">
              <div class="col">
                  <h3>About Us</h3>
                  <p class="p-2"><img > Hashtagify is the most advanced Twitter hashtag tracking tool.
                    It allows you to find the best hashtags to reach your audience,
                    gives you custom suggestions, and helps you getting to know your
                    influencers and competitors better.
                    Since April 2011, hashtagify.me analyzed 8,223,243,485 tweets,
                    collecting data about 12,411,194 hashtags.
                  </p>
                    <h3>help</h3>
                    <hr >
                    <a href="#" class="text-white">FAQ</a>
              </div>
              <div class="col">
                  <h3>Contact Us</h3>
                  <ul class="small_list">
                    <li><i class="far fa-envelope"></i> &nbsp; <a title="E-mail hello@hashtagify.me" class="send_hello" href="mailto:hello@hashtagify.me" data-goal="email_to_hello_at_hashtagify">hello@hashtagify.me</a></li>
                    <li><i class="fab fa-twitter-square"></i> &nbsp; <a title="Twitter - @hashtagify" href="http://twitter.com/hashtagify" data-goal="twitter_at_hashtagify">@hashtagify</a></li>
                    <li><i class="fab fa-facebook-square"></i></i> &nbsp; <a title="Facebook - Hashtagify.me" href="https://www.facebook.com/Hashtagify.me/" data-goal="facebook_at_hashtagify">Hashtagify.me</a></li>
                  </ul>
                  <h3>Follow Us </h3>
                  <hr class="m-1">
                  <div>
                    <img src="https://d2bsn9sp5cxln0.cloudfront.net/assets/logo/social-facebook-logo-50f9a4a6e96917ee937b51bc600b1fad.png" alt="facebook logo" width="30" height="30" class="mr-2">
                    <img alt="Twitter - @hashtagify" src="https://d2bsn9sp5cxln0.cloudfront.net/assets/logo/social-twitter-logo-e37ecfcfd5470819132ded154f44b6d6.png" width="30" height="30">
                  </div>
              </div>
              <div class="col">
                  <h3>Use Cases</h3>
                  <ol class="list-group">
                    <li class="list-group-item d-flex align-items-center bg-secondary">
                      <span class="badge badge-primary badge-pill">1</span>
                      <a href="#" class="ml-2 text-white">Brand Awareness</a>
                    </li>
                    <li class="list-group-item d-flex align-items-center bg-secondary">
                      <span class="badge badge-primary badge-pill">2</span>
                      <a href="#" class="ml-2 text-white">Opinion Mining</a>
                    </li>
                    <li class="list-group-item d-flex align-items-center bg-secondary">
                      <span class="badge badge-primary badge-pill">3</span>
                      <a href="#" class="ml-2 text-white">Competitive Intelligence</a>
                    </li>
                    <li class="list-group-item d-flex align-items-center bg-secondary">
                      <span class="badge badge-primary badge-pill">4</span>
                      <a href="#" class="ml-2 text-white">Community Reaction</a>
                    </li>
                    <li class="list-group-item d-flex align-items-center bg-secondary">
                      <span class="badge badge-primary badge-pill">5</span>
                      <a href="#" class="ml-2 text-white">Contact Analysis</a>
                    </li>
                    <li class="list-group-item d-flex align-items-center bg-secondary">
                      <span class="badge badge-primary badge-pill">6</span>
                      <a href="#" class="ml-2 text-white">Brand Awareness</a>
                    </li>
                  </ol>
              </div>
        </div>
      </div>
  </div><!-- Pick Plan Section Ends -->
  <div class="row bg-dark">
    <div class="container pt-4 pb-4 text-light">
        <div class="row">
              <div class="col-8">
                <div><span>Copyright © 2011-2019 CyBranding Ltd.</span></div>
              </div>
              <div class="col-4">
                <div>
                  <a class="text-white" href="https://www.iubenda.com/privacy-policy/17653994/cookie-policy" title="Cookie Policy" target="_blank">Cookie Policy</a> &nbsp;|&nbsp;
                  <a class="text-white" href="/explorer/privacy_policy" data-goal="privacy_policy" title="Privacy Policy">Privacy Policy</a> &nbsp;|&nbsp;
                  <a class="text-white" href="/explorer/terms_of_service" data-goal="terms_of_service" title="Terms of Service">Terms Of Service</a>
                </div>
              </div>

        </div>
      </div>
  </div>
</footer>
<script src="{{ asset('js/jquery-3.4.1.min.js') }}" data-cfasync="false"></script>
<script src="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js" data-cfasync="false"></script>
<script src="{{ asset('js/pagescroll.js') }}"></script>
<script>
$("#page-scroll-reduce").click(function(){
      $(this).hide();
      $("#hide-on-scroll-two").hide( 3000, function(){
        $(this).remove();
      });
});
window.cookieconsent.initialise({
  "palette": {
    "popup": {
      "background": "#237afc"
    },
    "button": {
      "background": "#fff",
      "text": "#237afc"
    }
  },
  "theme": "edgeless"
});

</script>
