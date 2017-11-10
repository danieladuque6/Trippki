  <div id="tk-ft">
    <div class="container">
      <div class="row hidden-sm-down">
        <div class="col-xs-3 col-sm-12 col-md-3"><img alt="" class="d-inline-block align-top logo" height="33%" src="assets/img/ft-logo.png"></div>
        <div class="col-md-9 hidden-sm-down">
          <div class="navbar navbar-toggleable-sm">
            <ul class="nav navbar-nav ml-auto">
              <?php /*?>
              <li class="nav-item active">
                <a class="nav-link" href="terms">Legal</a>
              </li><?php */?>
              <li class="nav-item">
                <a class="nav-link" href="/legal.php">Legal</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="privacy">Privacy</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="discover">Discover</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="faq">FAQ</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="team">Team</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="row hidden-sm-down">
        <div class="col-md-12">
          <div class="breakline"></div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3 hidden-sm-down">
          <p class="copy mt">Trippki &copy; 2017 All Rights Reserved</p>
        </div>
        <div class="col-xs-3 col-sm-12 col-md-7">
          <p class="mt ml-auto icons">
            <a href="https://www.reddit.com/r/trippki/" target="_blank"><i aria-hidden="true" class="fa fa-reddit-alien"></i></a>
            <a href="https://blog.trippki.com/" target="_blank"><i aria-hidden="true" class="fa fa-medium"></i></a>
            <a href="https://t.me/trippki" target="_blank"><i class="fa fa-telegram" aria-hidden="true"></i></a>          
            <?php /*?><a href="#" target="_blank"><i aria-hidden="true" class="fa fa-btc"></i></a><?php */?>
            <?php /*?><a href="https://trippkiproject.slack.com/" target="_blank"><i aria-hidden="true" class="fa fa-slack"></i></a><?php */?>
            <a href="slack"><i aria-hidden="true" class="fa fa-slack"></i></a>
            <a href="https://github.com/Trippki/" target="_blank"><i aria-hidden="true" class="fa fa-github"></i></a>
            <a href="https://twitter.com/trippki_" target="_blank"><i aria-hidden="true" class="fa fa-twitter"></i></a>
            <a href="https://www.instagram.com/trippki/" target="_blank"><i aria-hidden="true" class="fa fa-instagram"></i></a>
            <a href="https://www.youtube.com/channel/UCZuXyS8ynpibvO1j6fgNbwA" target="_blank"><i aria-hidden="true" class="fa fa-youtube-play"></i></a>
          </p>
        </div>
        <div class="col-md-2 text-right hidden-sm-down">
          <p class="copy mt">info@trippki.com</p>
        </div>
      </div>
      <div class="row hidden-sm-up text-center">
        <div class="col-md-12">
          <div class="breakline"></div><img alt="" class="d-inline-block align-top logo" height="33%" src="assets/img/ft-logo.png">
          <p class="copy">Trippki &copy; 2017 All Rights Reserved</p>
        </div>
      </div>
    </div>
  </div>
  <script src="assets/js/retina-1.1.0.js">
  </script>
  <script src="assets/js/wow.js">
  </script>
  <style>
  .wow{ opacity: 0; }
  </style>
  <script>
    function afterReveal( el ) { el.addEventListener('animationend', function( event ) { $('.wow').each(function(){ $(this).css('opacity',1); }); }); } new WOW({ callback: afterReveal }).init()
  </script>
  <script>
  $.fn.extend({
    animateCss: function (animationName) {
        var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        this.addClass('animated ' + animationName).one(animationEnd, function() {
            $(this).removeClass('animated ' + animationName);
        });
        return this;
    }
  });
  </script>
