<footer>
    <div class="footer_bg_image">
      <div class="footer_top container-lg">
        <div class="col_left">
          <div class="row">

            <div class="col-2 py-5">
              <div class="col_title">Dc Comics</div>
              <ul>
                <li><a href="#">Characters</a></li>
                <li><a href="#">Comics</a></li>
                <li><a href="#">Movies</a></li>
                <li><a href="#">TV</a></li>
                <li><a href="#">Games</a></li>
                <li><a href="#">Videos</a></li>
                <li><a href="#">News</a></li>
              </ul>

              <div class="col_title">Shop</div>
              <ul>
                <li><a href="#">Shop DC</a></li>
                <li><a href="#">Shop Collectibles</a></li>
              </ul>
            </div>

            <div class="col-2 py-5">
              <div class="col_title">Dc</div>
              <ul>
                <li><a href="#">Terms of use</a></li>
                <li><a href="#">Privacy Policy (new)</a></li>
                <li><a href="#">Ad Choices</a></li>
                <li><a href="#">Advertising</a></li>
                <li><a href="#">Jobs</a></li>
                <li><a href="#">Subscriptions</a></li>
                <li><a href="#">Talent Workshops</a></li>
                <li><a href="#">CPSC Certificates</a></li>
                <li><a href="#">Ratings</a></li>
                <li><a href="#">Shop Help</a></li>
                <li><a href="#">Contact Us</a></li>
              </ul>
            </div>

            <div class="col-2 py-5">
              <div class="col_title">Sites</div>
              <ul>
                <li><a href="#">DC</a></li>
                <li><a href="#">MAD Magazine</a></li>
                <li><a href="#">DC Kids</a></li>
                <li><a href="#">DC Universe</a></li>
                <li><a href="#">DC Power Visa</a></li>
              </ul>
            </div>

          </div>
        </div>

      </div>
    </div>

    <div class="footer_bottom container-lg">
      <div class="col_left px-3">
        <button class=sign_up>Sign-Up Now!</button>
      </div>
      <div class="col_right px-3">
        <div class="follow_us_box">
          <span>Follow us</span>
          <div class="social_icons">

            @foreach ($socials as $social )
                <a href="{{$social->link}}"><img src="{{asset($social->image)}}" alt="{{$social->title}}"></a>
            @endforeach
          </div>

        </div>
      </div>
    </div>


</footer>
