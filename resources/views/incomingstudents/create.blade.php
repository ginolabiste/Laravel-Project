<!-- 
=========================================================
 Light Bootstrap Dashboard - v2.0.1
=========================================================

 Product Page: https://www.creative-tim.com/product/light-bootstrap-dashboard
 Copyright 2019 Creative Tim (https://www.creative-tim.com) & Updivision (https://www.updivision.com)
 Licensed under MIT (https://github.com/creativetimofficial/light-bootstrap-dashboard/blob/master/LICENSE)

 Coded by Creative Tim & Updivision

=========================================================

 The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.  -->
 <!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('light-bootstrap/img/apple-icon.png') }}">
        <link rel="icon" type="image/png" href="{{ asset('light-bootstrap/img/favicon.ico') }}">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>{{ __('Register') }}</title>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
        <!--     Fonts and icons     -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
        <!-- CSS Files -->
        <link href="{{ asset('light-bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('light-bootstrap/css/light-bootstrap-dashboard.css?v=2.0.0') }} " rel="stylesheet" />
        <!-- CSS Just for demo purpose, don't include it in your project -->
        <link href="{{ asset('light-bootstrap/css/demo.css') }}" rel="stylesheet" />
    </head>

    <body>
        <div class="wrapper wrapper-full-page">
            <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute">
                <div class="container">
                    <div class="navbar-wrapper">
                        <a class="navbar-brand" href="/">{{ __('Davao Oriental State University') }}</a>
                        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-bar burger-lines"></span>
                            <span class="navbar-toggler-bar burger-lines"></span>
                            <span class="navbar-toggler-bar burger-lines"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse justify-content-end" id="navbar">
                        <!-- <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="{{ route('dashboard') }}" class="nav-link">
                                    <i class="nc-icon nc-chart-pie-35"></i> {{ __('Dashboard') }}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('register') }}" class="nav-link">
                                    <i class="nc-icon nc-badge"></i> {{ __('Register') }}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('login') }}" class="nav-link">
                                    <i class="nc-icon nc-mobile"></i> {{ __('Login') }}
                                </a>
                            </li>
                        </ul> -->
                    </div>
                </div>
            </nav>
            <div class="full-page register-page section-image" data-color="orange" data-image="{{ asset('light-bootstrap/img/dorsu-background.jpg') }}">
                <div class="content">
                    <div class="container">
                        <div class="wrapper">
                            <div class="col-lg-10" id="forms">
                                <div class="progressbar">
                                    <div class="progress" id="progress"></div>
                                    <div class="progress-step progress-step-active" data-title="Give consent"></div>
                                    <div class="progress-step" data-title="Identify yourself"></div>
                                    <div class="progress-step" data-title="Fill up Forms"></div>
                                    <div class="progress-step" data-title="Get ticket number Download/Print/Sign"></div>
                                    <div class="progress-step" data-title="Upload Documents"></div>
                                    <div class="progress-step" data-title="Confirm"></div>
                                </div>
                            </div>
                            
                            <div class="col-lg-10 cont fadeInDown hdn-div">
                                <div class="t-center">
                                    <h1 style="font-weight: 800;">DATA PRIVACY</h1>
                                </div>
                                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;In compliance with the Data Privacy Act(DPA)
                                    of 2012, and its Implementing Rules and Regulations (IRR) effective since
                                    September8, 2016, I allow DOrSU-GCTC to collect and process my personal
                                    sensitive information. Furthermore, I am Particular, I agree that DOrSU-GCTC shall:
                                <ol>
                                    <li>
                                        Collect and process my Personal Data, Parent's Information, SCAST Results,
                                        Unique Features, Educational and Career Plan and Self-Assessment;
                                    </li>
                                    <li>
                                        Collect and process the aforementioned data solely for counseling and intervention purposes;
                                    </li>
                                    <li>Collect the data using online platform, and</li>
                                    <li>
                                        Store the data for no longer than necessary or upon the termination of the purpose for which
                                        the data are to be utilized. I am fully aware of my rights, specifically: <br>
                                        A. The exercise of my rights to access, correction, as well as the right to lodge a complaint before
                                        the University's Data Protection Officer; <br>
                                        B. That my personal and sensitive personal information shall not be disclosed or transferred to any
                                        other individuals or entities without my express consent.
                                    </li>
                                </ol>
                                </p>
                                <p>By participating in this data collection, I hereby agree with the foregoing conditions in compliance to
                                    Republic
                                    Act 10173 or the Data Privacy of 2012.
                                </p>
                                <div class="t-center"><button class="btn btn-primary fadeIn second">OK</button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="container">
                    <nav>
                        <ul class="footer-menu">
                            <li>
                                <a href="https://dorsu.edu.ph/" class="nav-link" target="_blank">{{ __('DOrSU Main') }}</a>
                            </li>
                            <li>
                                <a href="https://dorsu.edu.ph/bec/" class="nav-link" target="_blank">{{ __('Banay-banay Ext.') }}</a>
                            </li>
                            <li>
                                <a href="https://dorsu.edu.ph/cec/" class="nav-link" target="_blank">{{ __('Cateel Ext.') }}</a>
                            </li>
                            <li>
                                <a href="https://dorsu.edu.ph/siec/" class="nav-link" target="_blank">{{ __('San Isidro Ext.') }}</a>
                            </li>
                        </ul>
                        <p class="copyright text-center">
                            ©
                            <script>
                                document.write(new Date().getFullYear())
                            </script>
                            <a href="https://dorsu.edu.ph/">{{ __('DoRSU Creations') }}</a>{{ __(', made with love for a better learning.') }}
                        </p>
                    </nav>
                </div>
            </footer>
        </div>
    </body>
        <!--   Core JS Files   -->
    <script src="{{ asset('light-bootstrap/js/core/jquery.3.2.1.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('light-bootstrap/js/core/popper.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('light-bootstrap/js/core/bootstrap.min.js') }}" type="text/javascript"></script>

    <script src="{{ asset('light-bootstrap/js/plugins/jquery.sharrre.js') }}"></script>
    <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
    <script src="{{ asset('light-bootstrap/js/plugins/bootstrap-switch.js') }}"></script>
    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!--  Chartist Plugin  -->
    <script src="{{ asset('light-bootstrap/js/plugins/chartist.min.js') }}"></script>
    <!--  Notifications Plugin    -->
    <script src="{{ asset('light-bootstrap/js/plugins/bootstrap-notify.js') }}"></script>
    <!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
    <script src="{{ asset('light-bootstrap/js/light-bootstrap-dashboard.js?v=2.0.0') }}" type="text/javascript"></script>
    <!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
    <script src="{{ asset('light-bootstrap/js/demo.js') }}"></script>
    @stack('js')
    <script>
      $(document).ready(function () {
        
        $('#facebook').sharrre({
          share: {
            facebook: true
          },
          enableHover: false,
          enableTracking: false,
          enableCounter: false,
          click: function(api, options) {
            api.simulateClick();
            api.openPopup('facebook');
          },
          template: '<i class="fab fa-facebook-f"></i> Facebook',
          url: 'https://light-bootstrap-dashboard-laravel.creative-tim.com/login'
        });

        $('#google').sharrre({
          share: {
            googlePlus: true
          },
          enableCounter: false,
          enableHover: false,
          enableTracking: true,
          click: function(api, options) {
            api.simulateClick();
            api.openPopup('googlePlus');
          },
          template: '<i class="fab fa-google-plus"></i> Google',
          url: 'https://light-bootstrap-dashboard-laravel.creative-tim.com/login'
        });

        $('#twitter').sharrre({
          share: {
            twitter: true
          },
          enableHover: false,
          enableTracking: false,
          enableCounter: false,
          buttons: {
            twitter: {
              via: 'CreativeTim'
            }
          },
          click: function(api, options) {
            api.simulateClick();
            api.openPopup('twitter');
          },
          template: '<i class="fab fa-twitter"></i> Twitter',
          url: 'https://light-bootstrap-dashboard-laravel.creative-tim.com/login'
        });
      });
    </script>
</html>
