<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
  <title>Trippki Pre-Sale2</title>
  <meta content="" name="description">
  <meta content="" name="author">
  <link rel="apple-touch-icon" sizes="120x120" href="assets/img//apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/img//favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon-16x16.png">
  <link rel="manifest" href="/manifest.json">
  <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="theme-color" content="#ffffff">
  <link href="/favicon.ico" rel="icon">
<?php include("inc/css.php"); ?><?php include("inc/js.php"); ?>
</head>
<body style="background: white;" class="presale-page">
  <?php include("./inc/tracker-pixel.php"); ?>
  <!-- <img src="assets/img/desktop2.png" style="top: -5px;right: 138px;opacity:0.8; text-align: center;position: absolute;z-index:100;"/> -->
    <div class="row justify-content-center">
      <div class="col-md-12">
        <?php include("inc/header.php"); ?>
        <div class="main-content">
          <div class="container" id="">
            <div class="col-md-12 main-content">
              <div class="container-pre-sale-purple">
                <div class="container-title-presale">
                  <h2>Trippki Pre-sale is open!</h2>
                  <p>Time left until it's over...</p>
                </div>
                <div class="countdown-container-presale">
                  <div class="">
                    <div class="countdown-data" id="countdown16"></div>
                  </div>
                </div>
                <div class="registration-container-presale">
                  <div class="registration-text-presale">
                    <p>There’s still time to join the Trippki Pre-sale.</p>
                    <p>Register to get started.</p>
                  </div>
                  <div class="registration-input-presale">
                    <form class="signup-form" id="signup-form">
                      <input class="signup-form__email-field" name="email" id="email-presale" type="email" placeholder="Your email..." />
                      <input class="signup-form__submit-button" type="submit" value="JOIN"/>
                      <div class="signup-form__element--hidden signup-form__processing-indicator">Submitting...</div>
                      <div class="signup-form__element--hidden signup-form__alert signup-form__success-alert">This was successful!</div>
                      <div class="signup-form__element--hidden signup-form__alert signup-form__error-alert">
                        <div class="signup-form__error-alert__title">Oh no, you have error!!</div>
                        <div class="signup-form__error-alert__message"></div>
                      </div>
                    </form>
                    <script type="text/javascript">(function ($) {
                      var ERROR_UNKNOWN = 'Unknown error',
                          ERROR_INVALID_EMAIL = 'Invalid email',
                          ERROR_NO_EMAIL = 'Please provide an email',
                          TRACKING_PIXLE = '<img height="1" width="1" style="border-style:none;" alt="" src="https://api.adsymptotic.com/api/s/trackconversion?_pid=15095&_psign=c2297cc215a59eb6dbf633cb90d3c1bc&_aid=15095&_lbl=CT&_pc_ev_tp=Trippki-ThankYou"/>';

                      function setError(form, err) {
                        var $error = $(form).find('.signup-form__error-alert'),
                            $message = $(form).find('.signup-form__error-alert__message');

                        $message.html(err ? err.toString() : '');
                        err ? showElement($error) : hideElement($error);
                      }

                      function showElement(element) {
                        $(element).removeClass('signup-form__element--hidden');
                      }

                      function hideElement(element) {
                        $(element).addClass('signup-form__element--hidden');
                      }

                      function startProcessing(form) {
                        showElement($(form).find('.signup-form__processing-indicator'));
                      }

                      function stopProcessing(form) {
                        hideElement($(form).find('.signup-form__processing-indicator'));
                      }

                      function showSuccess(form) {
                        showElement($(form).find('.signup-form__success-alert'));
                      }

                      function reportSuccess(form) {
                        $(form).append(TRACKING_PIXLE);
                      }

                      function hideSuccess(form) {
                        hideElement($(form).find('.signup-form__success-alert'));
                      }

                      function getErrorFromXhr(xhr) {
                        var err = xhr;

                        if (err.responseJSON) {
                          err = err.responseJSON.error;
                        } else if (err.responseText) {
                          err = err.responseText;

                          try {
                            err = JSON.parse(err);
                            err = err.message.error;
                          } catch (err) {
                            console.error(err);
                          }
                        }

                        switch (typeof err) {
                          case 'object':
                            if (err.message) {
                              err = err.message;
                            }

                            if (err.code) {
                              err += ' (' + err.code + ')';
                            }
                            break;
                          case 'string':
                            break;
                          default:
                            err = err.toString();
                            break;
                        }

                        return err || ERROR_UNKNOWN;
                      }

                      $('#signup-form')
                        .submit(function (event) {
                          var form = event.target,
                              emailRegExp = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/,
                              email = event.target.email.value;

                          event.preventDefault();
                          
                          startProcessing(form);
                          setError(form, null);

                          if (email && email.trim()) {
                            if (emailRegExp.test(email)) {
                              $.post('/api/signup.php', {
                                  email: email
                                })
                                .done(function () {
                                  showSuccess(form);
                                  reportSuccess(form);
                                })
                                .fail(function (xhr) {
                                  setError(form, getErrorFromXhr(xhr));
                                })
                                .always(function () {
                                  stopProcessing(form);
                                });
                            } else {
                              setError(form, ERROR_INVALID_EMAIL);
                              stopProcessing(form);
                            }
                          } else {
                              setError(form, ERROR_NO_EMAIL);
                              stopProcessing(form);                            
                          }
                        });
                    }(window.jQuery))</script>
                    <style type="text/css">
                      .signup-form {
                      }

                      .signup-form__email-field {
                      }

                      .signup-form__submit-button {
                      }

                      .signup-form__processing-indicator {
                      }

                      .signup-form__element--hidden {
                        display: none;
                      }

                      .signup-form__success-alert {
                      }

                      .signup-form__error-alert {
                      }

                      .signup-form__error-alert__title {
                      }

                      .signup-form__error-alert__message {
                      }

                    </style>
                  </div>
                  <div class="registration-presale-buttons">
                    <a class="first-button-presale" href="/assets/docs/TrippkiWhitePaper_Sept17.pdf">WHITEPAPER</a>
                    <a class="second-button-presale" href="/assets/docs/TrippkiTokenSaleSummary_Sept17.pdf" target="_blank">Token Sale Summary</a>
                    <a class="third-button-presale" href="https://blog.trippki.com/">Blog</a>
                  </div>
                  <div class="registration-container-graphics">
                    <img src="assets/img/vignette-vault.png"/>
                    <img src="assets/img/coins-presale.svg"/>
                  </div>
                </div>
              </div>
              <div class="second-container-presale">
                <div class="col-md-6">
                  <div class="second-section-presale-heading">
                    <h2>Bonus Structure</h2>
                    <p>Participation in the Pre-Sale ensures additional bonus tokens from the 80M tokens being made available in the token sale. </p>
                    <div class="image-bonus-chart-container">
                      <img src="assets/img/chart-chart.png"/>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="second-section-presale-heading">
                    <h2>Token Distribution</h2>
                    <div class="image-token-distribution-container">
                      <img src="assets/img/chart_distribution.png"/>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php include("inc/footer.php"); ?>
  <script src="assets/js/jquery.classycountdown.js">
  </script>
  <script src="assets/js/jquery.knob.js">
  </script>
  <script src="assets/js/jquery.throttle.js">
  </script>
  <script>
  $(document).ready(function() {
    $('#countdown16').ClassyCountdown({
        theme: "flat-colors-wide",
        now: $.now() / 1000,
        end: Date.UTC(2017, 10, 14, 0, 0, 0) / 1000,
        onEndCallback: function() {
          console.log('is this working?');
          $('.ClassyCountdown-wrapper').addClass('ClassyCountdown-wrapper--presale');
        }
    });
  });
  </script>
</body>
</html>
