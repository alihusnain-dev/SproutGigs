<!doctype html>
<!--[if IE 7]><html class="ie ie7"><![endif]-->
<!--[if IE 8]><html class="ie ie8"><![endif]-->
<!--[if !(IE 7) | !(IE 8)]><!-->
<html lang="en">
<!--<![endif]-->

    <head>
                <title>API Documentation | SproutGigs</title>
        <meta charset="utf-8">
        <meta name="description" content="Learn more about the API for SproutGigs">
                        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;display=swap&amp;family=Farsan" rel="stylesheet">

        <!-- Hotjar Tracking Code for https://sproutgigs.com/ -->
        <script>
            (function(h,o,t,j,a,r){
                h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
                h._hjSettings={hjid:2261922,hjsv:6};
                a=o.getElementsByTagName('head')[0];
                r=o.createElement('script');r.async=1;
                r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
                a.appendChild(r);
            })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
        </script>

        <script>
            var arguments = {};
                        arguments = { userId: '2bbff89f' };
                        window.dataLayer = window.dataLayer || [];
            window.dataLayer.push(arguments);
        </script>

        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-P6G6QRQ');</script>
        <!-- End Google Tag Manager -->

                    <link rel="stylesheet" href="/assets/css/vendor.min.css?v=202310261236"/>
            <link rel="stylesheet" href="/assets/css/app.min.css?v=202409201812"/>
            <script src="/assets/js/jquery.min.js"></script>
            <script src="/assets/js/pico-vendor.min.js?v=202410031253"></script>
            <script src="/assets/js/pico-app.min.js?v=202410031253"></script>
        
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
        <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">

        <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <script src="/assets/js/vendor/respond.min.js"></script>
        <script src="/assets/js/vendor/PIE.js"></script>
        <![endif]-->

        <script>
            var csrf_token = '65e2bbbf53039c60fc13812626b110dd';
            var systemAlert = '103';
            var tasks_ok = '0';
        </script>

            </head>

    <body class="dark-mode ">
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P6G6QRQ"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->

        <div class="site d-flex flex-column min-vh-100">
                  <nav class="navbar navbar-expand-lg navbar-light">
  <div class="container-fluid container-fluid--max-lg">
    <img class="navbar__gradient" src="/gradient.php">
    <a class="navbar-brand" href="/browse-gigs.php">
      <img src="/assets/images/logo-sg.svg" alt="SproutGigs" class="navbar-brand__regular d-none">
      <img src="/assets/images/logo-sg-light.svg" alt="SproutGigs" class="navbar-brand__dark-mode">
    </a>

    <div class="d-none d-lg-block flex-grow-0">
      <ul class="navbar-nav mr-auto">
                            <li class="nav-item dropdown ml-0">
            <a class="nav-link" href="/employer/gigs.php" data-toggle="dropdown">
              <span>
                Gigs <i class="fas fa-caret-down"></i>
              </span>
                          </a>
            <div class="dropdown-menu mt-3">
              <a class="dropdown-item d-flex align-items-center justify-content-between text-body" href="/browse-gigs.php">Browse Gigs</a>
                              <a class="dropdown-item d-flex align-items-center justify-content-between text-body disabled">My Gigs</a>
                <a
                  class="dropdown-item d-flex align-items-center justify-content-between text-body"
                  href="/buyer/hired-gigs.php"
                                  >
                  <span class="ml-3">Hired Gigs</span>
                                  </a>
                <a class="dropdown-item d-flex align-items-center justify-content-between text-body"
                  href="/buyer/requested-gigs.php"
                >
                  <span class="ml-3">Gig Requests</span>
                </a>
                <a class="dropdown-item d-flex align-items-center justify-content-between text-body" href="/buyer/post-gig-request.php">Post Gig Request</a>
                          </div>
          </li>
        
                              <li class="nav-item dropdown ml-0">
              <a class="nav-link" href="/employer.php" data-toggle="dropdown"><span>MicroJobs <i class="fas fa-caret-down"></i></span></a>
              <div class="dropdown-menu mt-3">
                <a class="dropdown-item d-flex align-items-center justify-content-between text-body" href="/employer/post-job.php">Post Job</a>
                <a class="dropdown-item d-flex align-items-center justify-content-between text-body" href="/employer.php">My Jobs <span>0</span></a>
                <hr class="m-0">
                <div class="py-2 px-4">
                  <div class="py-2 mb-0 op-6 d-flex align-items-center justify-content-between">
                    <strong>tasks to rate</strong>
                    <span>0</span>
                  </div>
                  <div class="py-2 mb-0 op-6 d-flex align-items-center justify-content-between">
                    <strong>pending admin review</strong>
                    <span>0</span>
                  </div>
                </div>
              </div>
            </li>
                  
                  <li class="nav-item dropdown ml-0">
            <a class="nav-link" href="/surveys-offers.php" data-toggle="dropdown"><span>Surveys &amp; Offers</span> <i class="fas fa-caret-down"></i><sup class="symbol symbol--warning pb-0 ml-1">New</sup></a>
            <div class="dropdown-menu mt-3">
              <a class="dropdown-item text-body pb-2" href="/surveys-offers.php">Browse Surveys &amp; Offers</a>
              <a class="dropdown-item text-body" href="/my-surveys-offers.php">My Surveys &amp; Offers</a>
            </div>
          </li>
        
        <li class="nav-item ml-0">
          <a class="nav-link" href="/wallet.php"><span>Wallet</span></a>
        </li>
      </ul>
    </div>

    <div class="navbar-right d-flex align-items-center">
      <ul class="nav align-items-center navbar-nav-2 nav--dynamic d-none d-lg-flex">

                  <a class="nav-link switch-profile-text switch-profile-text--desktop d-flex align-items-center flex-nowrap" href="#" data-change-profile-to="worker">
            <span>buyer</span>
            <div class="zawp-toggle zawp-toggle--checked-first not-functional mx-2"><span class="zawp-toggle__switch m-0"></span></div>
            <span>freelancer</span>
          </a>
        
                  <li class="nav-item">
            <a class="nav-link" href="/tickets.php" data-tippy="true" data-tippy-content="support center">
              <i class="far fa-question-circle"></i>
            </a>
          </li>
                <li class="nav-item dropdown navbar__dropdown" id="notificationsDropdown">
          <a class="nav-link notificationDropdown" href="#" data-toggle="dropdown" data-tippy="true" data-tippy-content="view notifications">
            <i class="far fa-bell"></i>
                      </a>
          <div class="notifications dropdown-menu dropdown-menu-right">
                <ul class="nav nav-tabs justify-content-between" id="notificationsTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link text-primary" id="gigs-notifications-tab" href="#gigs-notifications" role="tab" aria-controls="gigs-notifications" aria-selected="false">Gigs</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link text-primary" id="jobs-notifications-tab" href="#jobs-notifications" role="tab" aria-controls="jobs-notifications" aria-selected="false">MicroJobs</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link text-primary active" id="other-notifications-tab" href="#other-notifications" role="tab" aria-controls="other-notifications" aria-selected="true">Other</a>
                    </li>
                </ul>
                <div class="tab-content" id="notificationsTabContent">
                    <div class="tab-pane fade" id="gigs-notifications" role="tabpanel" aria-labelledby="gigs-notifications-tab">
                                                    <span class="notification text-center">You don't have any notifications at the moment.</span>
                                                                    </div>
                    <div class="tab-pane fade" id="jobs-notifications" role="tabpanel" aria-labelledby="jobs-notifications-tab">
                                                    <span class="notification text-center">You don't have any notifications at the moment.</span>
                                                                    </div>
                    <div class="tab-pane fade show active" id="other-notifications" role="tabpanel" aria-labelledby="other-notifications-tab">
                                                    <span class="notification text-center">You don't have any notifications at the moment.</span>
                                                                    </div>
                </div>
          </div>
        </li>
        <li class="nav-item dropdown navbar__dropdown navbar__logs logs-dd">
          <a class="nav-link" href="#" data-toggle="dropdown"
            data-tippy="true"
            data-tippy-content="view logs"
          >
            <i class="fas fa-history"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right custom-scrollbar-css">
                                      <div class="dropdown-item d-block">
                                  <span class="logs-dd__desc">You created an account - Welcome to SproutGigs!</span>
                                <br>
                <span class="logs-dd__time">Oct 20, 2024 at 16:34</span>
              </div>
                                      <div class="see-all w-100 text-center pt-2 pb-2">
                <a href="/user-history.php#log-tab">See all</a>
              </div>
                      </div>
        </li>
      </ul>

      <button class="navbar-toggler ml-3" type="button" aria-expanded="false">
        <span class="navbar-toggler-icon"></span>
              </button>

      <ul class="d-none d-lg-block nav align-items-center navbar-nav-2">
        <li class="nav-item navbar-nav__profile profile-dropdown dropdown dropdown-stick">
          <a class="nav-link" href="#" data-toggle="dropdown" data-tippy="true" data-tippy-content="profile">
            <div class="d-flex align-items-center flex-nowrap">
              <img src="/assets/images/profile_no_image.gif" alt="alihusnain_dev">
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-right">
            <span class="profile-dropdown__name">Hello, alihusnain_dev</span>
            <span class="dropdown-hr mt-0"></span>
            <a class="dropdown-item" href="/account.php">Account Settings</a>
            <a class="dropdown-item" href="/u/alihusnain_dev">My Profile</a>
            <a class="dropdown-item" href="/ranks.php">MicroJobs Ranking</a>
            <a class="dropdown-item" href="/ranks-gigs.php">Gigs Ranking</a>
            <a class="dropdown-item" href="/faq.php">FAQ</a>
            <a class="dropdown-item" href="/faq.php#our-rules">Rules</a>
            <a class="dropdown-item" href="/account.php#programs-offers">Share &amp; Earn</a>
            <a class="dropdown-item" href="/auth/logout.php">Logout</a>
          </div>
        </li>
      </ul>
      <div class="setting-toggle navbar__dark-mode d-none d-sm-block" data-setting-toggle="darkmode">
        <input type="checkbox" id="darkModeNavToggle" class="toggle__input" checked="checked">
        <label for="darkModeNavToggle" class="text-gray p-2 mb-0 setting-toggle__label-enable align-items-center d-none"
          data-tippy="true"
          data-tippy-content="dark mode"
        >
          <i class="fas fa-moon"></i>
        </label>
        <label for="darkModeNavToggle" class="text-gray p-2 mb-0 setting-toggle__label-disable align-items-center"
          data-tippy="true"
          data-tippy-content="light mode"
        >
          <svg fill="#ffffff" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 8.467 8.467"><path d="M 15.988281 0.98242188 A 1.0001 1.0001 0 0 0 15.886719 0.98828125 A 1.0001 1.0001 0 0 0 15 2 L 15 6.0019531 A 1.0002461 1.0002461 0 1 0 17 6.0019531 L 17 2 A 1.0001 1.0001 0 0 0 15.988281 0.98242188 z M 6.0898438 5.0878906 A 1.0001 1.0001 0 0 0 5.9863281 5.09375 A 1.0001 1.0001 0 0 0 5.3964844 6.8066406 L 8.2226562 9.6328125 A 1.0001 1.0001 0 1 0 9.6328125 8.2226562 L 6.8066406 5.3964844 A 1.0001 1.0001 0 0 0 6.0898438 5.0878906 z M 25.880859 5.09375 A 1.0001 1.0001 0 0 0 25.195312 5.3964844 L 22.367188 8.2226562 A 1.0001 1.0001 0 1 0 23.777344 9.6328125 L 26.603516 6.8066406 A 1.0001 1.0001 0 0 0 25.880859 5.09375 z M 16 8 A 7.9999995 7.9999995 0 0 0 8 16 A 7.9999995 7.9999995 0 0 0 16 24 A 7.9999995 7.9999995 0 0 0 24 16 A 7.9999995 7.9999995 0 0 0 16 8 z M 2 15 A 1.000252 1.000252 0 1 0 2 17 L 6.0019531 17 A 1.000252 1.000252 0 1 0 6.0019531 15 L 2 15 z M 25.998047 15 A 1.000252 1.000252 0 1 0 25.998047 17 L 30 17 A 1.000252 1.000252 0 1 0 30 15 L 25.998047 15 z M 23.060547 22.058594 A 1.0001 1.0001 0 0 0 22.957031 22.064453 A 1.0001 1.0001 0 0 0 22.367188 23.777344 L 25.195312 26.603516 A 1.0001 1.0001 0 1 0 26.603516 25.193359 L 23.777344 22.367188 A 1.0001 1.0001 0 0 0 23.060547 22.058594 z M 8.9101562 22.064453 A 1.0001 1.0001 0 0 0 8.2226562 22.367188 L 5.3964844 25.193359 A 1.0001 1.0001 0 1 0 6.8066406 26.603516 L 9.6328125 23.777344 A 1.0001 1.0001 0 0 0 8.9101562 22.064453 z M 15.982422 24.986328 A 1.0001 1.0001 0 0 0 15 25.998047 L 15 30 A 1.0002461 1.0002461 0 1 0 17 30 L 17 25.998047 A 1.0001 1.0001 0 0 0 15.982422 24.986328 z " paint-order="fill markers stroke" transform="scale(.26458)"/></svg>
        </label>
      </div>
                                    <a href="/employer/post-job.php" class="d-none d-lg-block btn btn-primary btn-md navbar__post-job ml-4">Post Job</a>
                            </div>
  </div>
</nav>

<div class="site-notice">
  <div class="container-fluid container-fluid--max">
    <div class="row align-items-center">
      <div class="col-sm-5 mb-2 mb-sm-0">
        <a href="/api/documentation.php">API</a>
        <span class="mx-1">|</span>
        <a href="/account.php#programs-offers">Refer a Friend</a>
                  <span class="mx-1">|</span>
          <a href="/wallet.php?tab=deposits">Deposit Funds</a>
              </div>
      <div class="col-sm-7 d-flex align-items-center justify-content-sm-end flex-wrap">
                          <div class="mb-0 mr-5 d-flex justify-content-center">
            <strong class="mr-2">Spendable:</strong>
            <a href="/wallet.php">
              <span id="spendable-balance" class="mr-1">$0.0000</span>
            </a>
          </div>
              </div>
    </div>
  </div>
</div>

<div class="side-nav">
  <div class="side-nav__inner">
    <div class="side-nav__header d-flex align-items-center justify-content-between p-0">
      <ul class="nav align-items-center navbar-nav-2">
        <li class="nav-item navbar-nav__profile">
          <a class="nav-link" href="#">
            <div class="d-flex align-items-center flex-nowrap">
              <img src="/assets/images/profile_no_image.gif" alt="alihusnain_dev" class="mr-3">
              <span>Hello, alihusnain_dev</span>
            </div>
          </a>
        </li>
      </ul>
      <button class="navbar-btn--close btn btn-link ml-auto mr-0 p-4"><i class="sg-icon sg-icon-cross-2"></i></button>
    </div>
    <div class="side-nav__body">
      <div class="nav flex-column pt-1">
        <li class="nav-item">
                      <a class="nav-link switch-profile-text d-flex align-items-center flex-nowrap" href="#" data-change-profile-to="worker">
              <span>buyer</span>
              <div class="zawp-toggle zawp-toggle--checked-first not-functional mx-2"><span class="zawp-toggle__switch m-0"></span></div>
              <span>freelancer</span>
            </a>
                  </li>
      </div>
      <ul class="nav flex-column pt-3">
                  <li class="nav-item position-relative" id="gigs-menu" style="width: fit-content;">
            <div class="list-group">
              <a href="#gigs-submenu" class="nav-link list-group-header border-0 pt-0" data-toggle="collapse" data-parent="#gigs-menu" >
                Gigs<i class="fa fa-caret-down mx-2"></i>
                              </a>
              <div class="collapse" id="gigs-submenu">
                <a class="ml-2 list-group-item small text-body border-0" href="/browse-gigs.php">Browse Gigs</a>
                                  <a
                    class="ml-2 list-group-item small text-body border-0 pt-0"
                    href="/buyer/hired-gigs.php"
                    style="width: fit-content;"
                                      >
                    My Hired Gigs
                                      </a>
                  <a class="ml-2 list-group-item small text-body border-0 pt-0" href="/buyer/requested-gigs.php">Gig Requests</a>
                  <a class="ml-2 list-group-item small text-body border-0 pt-0" href="/buyer/post-gig-request.php">Post Gig Request</a>
                              </div>
            </div>
          </li>
        
                  <li class="nav-item position-relative" id="microjobs-menu" style="width: fit-content;">
            <div class="list-group">
              <a href="#microjobs-submenu" class="nav-link list-group-header border-0 pt-0" data-toggle="collapse" data-parent="#microjobs-menu" >
                MicroJobs<i class="fa fa-caret-down mx-2"></i>
              </a>
                          <div class="collapse" id="microjobs-submenu">
                <a class="ml-2 list-group-item small text-body border-0" href="/employer/post-job.php">Post Job</a>
                <a class="ml-2 list-group-item small text-body border-0" href="/employer.php">My Jobs <span class="badge badge-primary ml-2">0</span></a>
                <span class="ml-2 list-group-item small text-gray border-0 font-italic">tasks to rate <span class="badge badge-primary ml-2">0</span></span>
                <span class="ml-2 list-group-item small text-gray border-0 font-italic">pending admin review <span class="badge badge-primary ml-2">0</span></span>
              </div>
                        </div>
          </li>
        
                  <li class="nav-item position-relative" id="surveys-offers-menu" style="width: fit-content;">
            <div class="list-group">
              <a href="#surveys-offers-submenu" class="nav-link list-group-header border-0 pt-0" data-toggle="collapse" data-parent="#surveys-offers-menu" >
                Surveys &amp; Offers<i class="fa fa-caret-down mx-2"><sup class="symbol symbol--warning pb-0 ml-1">New</sup></i>
              </a>
            <div class="collapse" id="surveys-offers-submenu">
                <a class="ml-2 list-group-item small text-body border-0" href="/surveys-offers.php">Browse Surveys &amp; Offers</a>
                <a class="ml-2 list-group-item small text-body border-0" href="/my-surveys-offers.php">My Surveys &amp; Offers</span></a>
            </div>
          </li>
        
        <li class="nav-item">
          <a class="nav-link" href="/wallet.php">Wallet</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/account.php">Account Settings</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/ranks.php">MicroJobs Ranking</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/ranks-gigs.php">Gigs Ranking</a>
        </li>
        <li class="nav-item position-relative">
          <a class="nav-link" href="/tickets.php">Support Tickets</a>
                  </li>
        <li class="nav-item position-relative">
          <a class="nav-link notificationDropdown" href="/user-history.php">Notifications</a>
                  </li>
        <li class="nav-item">
          <a class="nav-link" href="/user-history.php#log-tab">Logs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/faq.php">FAQ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/faq.php#our-rules">Rules</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/account.php#programs-offers">Share &amp; Earn</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/auth/logout.php">Logout</a>
        </li>
      </ul>
    </div>
    <div class="side-nav__footer">
                                    <a href="/employer/post-job.php" class="btn btn-primary btn-lg btn-block">Post Job</a>
                            </div>
  </div>
</div>

<div class="modal share-gig-modal fade" tabindex="-1" id="hdr-cpx" aria-hidden="true" style="display: none;">
  <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title pl-4">CPX Research</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body pt-0">
        <div>
          <iframe id="hdr-cpx-iframe" data-src="https://offers.cpx-research.com/index.php?app_id=7858&amp;ext_user_id=2bbff89f&amp;secure_hash=37cee45eee14626c34f9b6702d82b9af&amp;username=alihusnain_dev&amp;email=alihusnain@finjineers.com&amp;subid_1=&amp;subid_2=&amp;main_info=true&amp;birthday_day=00&amp;birthday_month=00&amp;birthday_year=0000&amp;gender=u&amp;user_country_code=pk&amp;zip_code=" style="width:100%; height:800px; border:0; padding:0; margin:0;" scrolling="yes" frameborder="0"></iframe>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  jQuery(document).ready(function() {
    jQuery("#hdr-cpx").on('shown.bs.modal', function() {
      jQuery('#hdr-cpx iframe').attr('src', jQuery('#hdr-cpx iframe').attr('data-src') );
    });
  });
</script>

                                  <div class="mb-0 rounded-0 pw-banner align-items-center" style="display: none;"></div>

                <div class="site-alerts">
  <div class="container-fluid container-fluid--max">
    
    
    
            <div class="alert alert-with-icon pw-badge-warning alert-dismissible fade show font-weight-medium mt-3" role="alert">
          <i class="svg-icon-emergency-green alert-icon"></i>
          Improve your account security. Add a recovery email now to ensure uninterrupted access to your account. Safeguard your account in case you lose access to your main email. <a href="/account.php#security" class="text-warning">Go to Account Settings > Security</a>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
    
    
                    <div class="alert alert-with-icon pw-badge-info alert-dismissible fade show font-weight-medium system-alert-103 mt-3" data-alert="103" role="alert">
            <i class="svg-icon-emergency-green alert-icon"></i>
            We’re thrilled to announce a limited-time promotion: Get 10% referral earnings bonus on all new account deposits until the end of 2024  <a href="https://www.facebook.com/groups/sproutgigs/permalink/1847850875725961">Learn more here.</a>
            <button type="button" class="close close-system-alert" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          
    
      </div>
</div>

              
            <div class="main">  <section class="section">
    <div class="container-fluid container-fluid--max">
      <h4 class="big-sub-heading"><span>SproutGigs' API Documentation</span></h4>
      <p>Last updated at <span class="font-weight-bold font-italic">Mar 04, 2024</span></p>

      <h3 class="api-topic">Contents</h3>
      <p class="api-paragraph">
        <ul>
          <li><a href="#overview">Overview</a></li>
          <li><a href="#authentication">Authentication</a></li>
          <li><a href="#rate-limit">Rate Limit</a><sup class="symbol symbol--premium ml-2">new</sup></li>
          <li>
            <a href="#gigs">Gigs</a><sup class="symbol symbol--premium ml-2">new</sup>
            <ul>
              <li><a href="#gigs-categories">Get Categories</a></li>
              <li><a href="#gigs-get-one">Get Gig</a></li>
              <li><a href="#gigs-get">Get Gigs</a></li>
              <li><a href="#gigs-get-public-questions">Get Gig Public Questions</a></li>
              <li><a href="#gigs-get-reviews">Get Gig Reviews</a></li>
            </ul>
          </li>
          <li>
            <a href="#jobs">Jobs</a>
            <ul>
              <li><a href="#jobs-positions">Add Positions</a></li>
              <li><a href="#jobs-feature">Feature Job</a><sup class="symbol symbol--premium ml-2">new</sup></li>
              <li><a href="#jobs-categories">Get Categories</a></li>
              <li><a href="#jobs-get-one">Get Job</a></li>
              <li><a href="#jobs-get">Get Jobs</a></li>
              <li><a href="#jobs-lists">Get Lists</a></li>
              <li><a href="#jobs-predicted-position">Get Predicted Position</a><sup class="symbol symbol--premium ml-2">new</sup></li>
              <li><a href="#jobs-rated-tasks">Get Rated Tasks</a></li>
              <li><a href="#jobs-unrated-tasks">Get Unrated Tasks</a>
              <li><a href="#jobs-zones">Get Zones</a></li>
              <li><a href="#jobs-pause">Pause Jobs</a></li>
              <li><a href="#jobs-post">Post Job</a></li>
              <li><a href="#jobs-rate-multiple-tasks">Rate Multiple Tasks</a></li>
              <li><a href="#jobs-rate-single-task">Rate Single Task</a></li>
              <li><a href="#jobs-restart">Restart Jobs</a></li>
              <li><a href="#jobs-resume">Resume Jobs</a></li>
              <li><a href="#jobs-speed">Set Speed</a></li>
              <li><a href="#jobs-ttr">Set TTR</a></li>
              <li><a href="#jobs-stop">Stop Jobs</a></li>
            </ul>
          </li>
          <li>
            <a href="#lists">Lists</a>
            <ul>
              <li><a href="#lists-add-workers">Add freelancers</a></li>
              <li><a href="#lists-block-workers">Block freelancers</a></li>
              <li><a href="#lists-unblock-workers">Unblock freelancers</a></li>
            </ul>
          </li>
          <li>
            <a href="#users">Users</a>
            <ul>
              <li><a href="#users-balances">Get Balances</a></li>
            </ul>
          </li>
          <li>
            <a href="#webhooks">Webhooks</a>
            <ul>
              <li><a href="#webhook-submitted-tasks">Submitted Tasks</a>
            </ul>
          </li>
        </ul>
      </p>

      <a id="overview" class="api-anchor"></a>
      <h3 class="api-topic">Overview</h3>
      <p class="api-paragraph">
        SproutGigs API is a JSON based API where buyers can manage jobs programatically.
        <br>
        Recently, we've started developing an API for gigs.
        <br>
        Anyone interested in using our gigs platform will be able to list and get details of gigs.
        <br>
        It's a preliminary work and we will be adding more endpoints to the gigs API in the future.
        <br>
        It's currently in Beta and all feedback and suggestions are appreciated.
        <br><br>
        If you have deposited over $1,000 in crypto, please message support for auto approval posts. Others considered on a case by case basis.
        <br><br>
        The base endpoint for all requests is <span class="font-weight-bold">https://sproutgigs.com/api/</span>
      </p>

      <a id="authentication" class="api-anchor"></a>
      <h3 class="api-topic">Authentication</h3>
      <p class="api-paragraph">
        Every API request needs to be authenticated. You can create or reset you API secret in the tab SETTINGS of your Account Settings page.
      </p>
      <p class="api-paragraph">
        To sign requests, add the header <span class="font-weight-bold">Authorization</span> with the value of
        <span class="font-weight-bold">'Basic ' + the base 64 encoding of your USER_ID and API_SECRET separated by colon</span>
        <br><br>
        Example:
        <br><br>
        1. Generate the base64 encoding of your user_id and api_secret
      </p>
      <pre class="api-code">
        php> echo base64_encode('user_id:api_secret');
        php> dXNlcl9pZDphcGlfc2VjcmV0
      </pre>
      <p class="api-paragraph">
        2. Send the header Authorization in the request
      </p>
      <pre class="api-code">
        $ curl -H 'Authorization: Basic dXNlcl9pZDphcGlfc2VjcmV0' \
        https://sproutgigs.com/api/jobs/get-zones.php
      </pre>

      <a id="rate-limit" class="api-anchor"></a>
      <h3 class="api-topic">Rate Limit</h3>
      <p class="api-paragraph">
        SproutGigs API has a rate limit of 1 request per seconds.
        <br>
        Requests will receive a 429 HTTP code back when they go over the rate limit.
        <br><br>
        If you reach the rate limit, please wait 10 seconds before sending requests to the API again.
      </p>

      <a id="gigs" class="api-anchor"></a>
      <h3 class="api-topic">Gigs</h3>
      <p class="api-paragraph">
        Get information about gigs.
      </p>

      <a id="gigs-categories" class="api-anchor"></a>
      <h4 class="api-subtopic">Categories Endpoint</h4>
      <p class="api-paragraph">
        Get the list of categories and the minimum price per gig.<br>
      </p>
      <pre class="api-request">
        GET https://sproutgigs.com/api/gigs/get-categories.php</pre>
      <p class="api-paragraph">
        Example request
      </p>
      <pre class="api-request">
        GET /api/gigs/get-categories.php HTTP/1.1
        Host: sproutgigs.com
        Authorization: Basic dXNlcl9pZDphcGlfc2VjcmV0
      </pre>
      <p class="api-paragraph">
        Example response
      </p>
      <pre class="api-request">
        [
          {
            "category_id": "02",
            "subcategory_id": "0215",
            "category": "Artificial Intelligence",
            "subcategory": "AI Consulting",
            "min_price": "1.00"
          },
          {
            "category_id": "02",
            "subcategory_id": "0220",
            "category": "Artificial Intelligence",
            "subcategory": "AI Development",
            "min_price": "1.00"
          },

          ...

          {
            "category_id": "95",
            "subcategory_id": "9510",
            "category": "Telemarketing",
            "subcategory": "Supply chain management",
            "min_price": "1.00"
          },
          {
            "category_id": "95",
            "subcategory_id": "9511",
            "category": "Telemarketing",
            "subcategory": "Business Consulting",
            "min_price": "1.00"
          }
        ]
      </pre>

      <a id="gigs-get-one" class="api-anchor"></a>
      <h4 class="api-subtopic">Get Gig</h4>
      <p class="api-paragraph">
        Get a gig by id.
      </p>
      <pre class="api-request">
        GET https://sproutgigs.com/api/gigs/get-gig.php</pre>
      <p class="api-paragraph">
        Example request
      </p>
      <pre class="api-request">
        GET /api/gigs/get-gig.php HTTP/1.1
        Host: sproutgigs.com
        Authorization: Basic dXNlcl9pZDphcGlfc2VjcmV0
        Content-Type: application/json

        {
          "gig_id": "dc716a672cdc"
        }

      </pre>
      <p>The following attributes are available:</p>
      <table class="table table-responsive">
        <thead>
          <tr>
            <th>Attribute</th>
            <th class="text-center">Type</th>
            <th class="text-center">Required?</th>
            <th class="text-center">Default</th>
            <th>Description</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><code>gig_id</code></td>
            <td class="text-center">string</td>
            <td class="text-center">yes</td>
            <td class="text-center">&mdash;</td>
            <td>The ID of gig you want to retrieve.</td>
          </tr>
        </tbody>
      </table>
      <p class="api-paragraph">
        Example response
      </p>
      <pre class="api-request">
        {
          "id": "dc716a672cdc",
          "title": "I Will Setup WordPress/Blogger Website for AD Revenue Approval",
          "category_id": "40",
          "category": "Web Development",
          "subcategory_id": "4001",
          "subcategory": "Web Development",
          "price": 3.11,
          "links": [],
            "images": [
              {
                "url": "https://static.sproutgugs.com/gigs/2023/12/01/d6d49ed7/1608a5b6.png"
              },
              {
                "url": "https://static.sproutgugs.com/gigs/2023/12/01/d6d49ed7/81388834.png"
              },
              {
                "url": "https://static.sproutgugs.com/gigs/2023/12/01/d6d49ed7/f4fe1af6.png"
              },
              {
                "url": "https://static.sproutgugs.com/gigs/2023/12/01/d6d49ed7/708db330.png"
              },
              {
                "url": "https://static.sproutgugs.com/gigs/2023/12/01/d6d49ed7/665b547a.png"
              },
            ],
          "description": "Hello,\r\n\r\n\ud83d\udfeaI will build a WordPress/Blogger website that is ready to apply for  Ad Revenue approval.\r\n\r\n\u2714\ufe0f This gig Includes and ensures that your website looks professional and follows Ad Revenue guidelines\r\n\u2714\ufe0f And 100% Ready to apply for Ad Revenue\r\n\r\n\ud83d\udfeaWith over four years of Ad Revenue experience, my gig offers you a better chance of Ad Revenue approval.\r\n\ud83d\udfeaCheck out my satisfied client's review and images to see my work for yourself.\r\n\r\n\ud83d\udfe9WHAT'S IN THE PACKAGE\r\n\r\n\u2714\ufe0f 100% Responsive and mobile-friendly theme.\r\n\u2714\ufe0f Ad Revenue Ready.\r\n\u2714\ufe0f Google Search Console Configuration.\r\n\u2714\ufe0f Google Analytics Configuration\r\n\u2714\ufe0f Fully customizable theme.\r\n\u2714\ufe0f SEO Setup.\r\n\u2714\ufe0f Table of Content\r\n\u2714\ufe0f 4 Plugins (WordPress)\r\n\u2714\ufe0f 4 Pages (About us - Contact us - Privacy policy - Terms and conditions)\r\n\u2714\ufe0f Custom logo + site icon.\r\n\u2714\ufe0f Header menu + footer.\r\n\u2714\ufe0f Social share button.\r\n\u2714\ufe0f Custom file + widget.\r\n\r\n\r\n\ud83d\udfe5REQUIREMENTS\r\n\r\n\u2714\ufe0f For Blogger - Must have a blogger account or name for your Blog\r\n\u2714\ufe0f For WordPress - Must have a WordPress website\r\n\r\nHurry up!!! Place your order now.\r\n\r\nNote: This Gig does not guarantee at 100% your site is going to be approved by Ad Revenue\"\r\n\r\nRegards,\r\nPolando8",
          "seller_nickname": "Polando8",
          "seller_gigs_total": 952,
          "seller_rating_total": 4.8,
          "seller_member_since": "2020-07-06 22:27:10",
          "seller_avatar": "https://static.sproutgigs.com/avatars/2020/07/06/d6d49ed7_1668183031.png",
          "seller_last_refresh_datetime": "2024-03-04 14:14:32",
          "seller_countrycode": "bd",
          "seller_countryname": "Bangladesh",
          "delivery_time": "1d",
          "revisions": 2,
          "seller_chats_response_time": "3 hrs",
          "published_at": "2024-02-15 08:42:42",
          "active_orders": 40
        }
      </pre>

      <a id="gigs-get" class="api-anchor"></a>
      <h4 class="api-subtopic">Get Gigs</h4>
      <p class="api-paragraph">
        Get all active gigs. Make sure to iterate through all pages to get all the gigs.
      </p>
      <pre class="api-request">
        GET https://sproutgigs.com/api/gigs/get-gigs.php</pre>
      <p class="api-paragraph">
        Example request
      </p>
      <pre class="api-request">
        GET /api/gigs/get-gigs.php HTTP/1.1
        Host: sproutgigs.com
        Authorization: Basic dXNlcl9pZDphcGlfc2VjcmV0
        Content-Type: application/json

        {
          "page": 1,
          "results_per_page": 10,
          "order" "newest"
        }

      </pre>
      <p>The following attributes are available:</p>
      <table class="table table-responsive">
        <thead>
          <tr>
            <th>Attribute</th>
            <th class="text-center">Type</th>
            <th class="text-center">Required?</th>
            <th class="text-center">Default</th>
            <th>Description</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><code>category_id</code></td>
            <td class="text-center">string</td>
            <td class="text-center">no</td>
            <td class="text-center">&mdash;</td>
            <td>Gig category ID. Use the categories endpoint to get the list of available categories. The category ID must be exactly what is returned in the category endpoint, respecting the leading zeroes that may exist.</td>
          </tr>
          <tr>
            <td><code>subcategory_ids</code></td>
            <td class="text-center">string array</td>
            <td class="text-center">no</td>
            <td class="text-center">&mdash;</td>
            <td>List of subcategory IDs. Use the categories endpoint to get the list of available subcategories. The subcategory ID must be exactly what is returned in the category endpoint, respecting the leading zeroes that may exist. The maximum number of subcategories is <b>10</b>.</td>
          </tr>
          <tr>
            <td><code>countries</code></td>
            <td class="text-center">string array</td>
            <td class="text-center">no</td>
            <td class="text-center">&mdash;</td>
            <td>List of two letter countries codes (ISO-3166-1 alpha2). The maximum number of countries is <b>10</b>.</span></td>
          </tr>
          <tr>
            <td><code>min_price</code></td>
            <td class="text-center">float</td>
            <td class="text-center"><b>Required</b> if <b>max_price</b> is provided</td>
            <td class="text-center">&mdash;</td>
            <td>Mininum gig price.</td>
          </tr>
          <tr>
            <td><code>max_price</code></td>
            <td class="text-center">float</td>
            <td class="text-center"><b>Required</b> if <b>min_price</b> is provided</td>
            <td class="text-center">&mdash;</td>
            <td>Maxinum gig price.</td>
          </tr>
          <tr>
            <td><code>search_term</code></td>
            <td class="text-center">string</td>
            <td class="text-center">no</td>
            <td class="text-center">&mdash;</td>
            <td>Filter gigs by title. If provided all other filter parameters will be ignored.</span></td>
          </tr>
          <tr>
            <td><code>page</code></td>
            <td class="text-center">int</td>
            <td class="text-center">no</td>
            <td class="text-center">1</td>
            <td>The page of gigs you want to retrieve.</span></td>
          </tr>
          <tr>
            <td><code>results_per_page</code></td>
            <td class="text-center">int</td>
            <td class="text-center">no</td>
            <td class="text-center">10</td>
            <td>Number of results per page. It can range from 10 to 100.</span></td>
          </tr>
          <tr>
            <td><code>order</code></td>
            <td class="text-center">string</td>
            <td class="text-center">no</td>
            <td class="text-center">&mdash;</td>
            <td>Retrieve gigs sorted by criteria. Leave it blank for default sort (Best Selling). Possible values: <span class="font-weight-bold">newest, oldest, price_highest, price_lowest, reviews_highest, title</span></td>
          </tr>
        </tbody>
      </table>
      <p class="api-paragraph">
        Example response
      </p>
      <pre class="api-request">
        {
          "current_page": 1,
          "results_per_page": 10,
          "next_page": true,
          "gigs": [
            {
              "id": "ad94f20491f3",
              "title": "I Will Create 1000+  Do-Follow Backlinks (Today Offers)",
              "category_id": "20",
              "category": "Digital Marketing",
              "subcategory_id": "2082",
              "subcategory": "Search Engine Optimization (SEO)",
              "price": 1.04,
              "cover_image": "https://static.sproutgigs.com/gigs/2024/02/15/56184ee3/9de80da4.png",
              "seller_nickname": "TopSeller123",
              "seller_gigs_total": 572,
              "seller_rating_total": 4.8,
              "url": "https://sproutgigs.com/g/ad94f20491f3/i-will-create-1000-do-follow-backlinks-today-offers"
            },
            {
              "id": "dc716a672cdc",
              "title": "I Will Setup WordPress/Blogger Website for AD Revenue Approval",
              "category_id": "40",
              "category": "Web Development",
              "subcategory_id": "4001",
              "subcategory": "Web Development",
              "price": 3.11,
              "cover_image" : "https://static.sproutgigs.com/gigs/2023/12/01/d6d49ed7/1608a5b6.png",
              "seller_nickname": "Polando8",
              "seller_gigs_total": 572,
              "seller_rating_total": 4.8,
              "url": "https://sproutgigs.com/g/dc716a672cdc/i-will-setup-wordpressblogger-website-for-ad-revenue-approval"
            }

            ...

            {
              "id": "96a23a1620b3",
              "title": "I will promote your brand to more than 3.4 million pinterest views",
              "category_id": "20",
              "category": "Digital Marketing",
              "subcategory_id": "2040",
              "subcategory": "Influencer Marketing",
              "price": 1.5,
              "cover_image": "https://static.sproutgigs.com/gigs/2024/01/09/e170e2e2/e1c31d0b.png",
              "seller_nickname": "Tourmalin",
              "seller_gigs_total": 64,
              "seller_rating_total": 4.9,
              "url": "https://sproutgigs.com/g/96a23a1620b3/i-will-promote-your-brand-to-more-than-34-million-pinterest-views"
            },
            {
              "id": "aa3c91d164c0",
              "title": "I will Create Ad revenue Ready Blogger and WordPress Website in 24 Hr",
              "category_id": "40",
              "category": "Web Development",
              "subcategory_id": "4001",
              "subcategory": "Web Development",
              "price": 5.18,
              "cover_image": "https://static.sproutgigs.com/gigs/2024/01/06/d44f67bb/e389164a.png",
              "seller_nickname": "mirzuddin",
              "seller_gigs_total": 98,
              "seller_rating_total": 4.7,
              "url": "https://sproutgigs.com/g/aa3c91d164c0/i-will-create-ad-revenue-ready-blogger-and-wordpress-website-in-24-hr"
            }
          ]
        }
      </pre>

      <a id="gigs-get-public-questions" class="api-anchor"></a>
      <h4 class="api-subtopic">Get Gig Public Questions</h4>
      <p class="api-paragraph">
        Get all gig public questions.
      </p>
      <pre class="api-request">
        GET https://sproutgigs.com/api/gigs/get-gig-public-questions.php</pre>
      <p class="api-paragraph">
        Example request
      </p>
      <pre class="api-request">
        GET /api/gigs/get-gig-public-questions.php HTTP/1.1
        Host: sproutgigs.com
        Authorization: Basic dXNlcl9pZDphcGlfc2VjcmV0
        Content-Type: application/json

        {
          "gig_id": "dc716a672cdc",
          "page": 1,
          "results_per_page": 10
        }

      </pre>
      <p>The following attributes are available:</p>
      <table class="table table-responsive">
        <thead>
          <tr>
            <th>Attribute</th>
            <th class="text-center">Type</th>
            <th class="text-center">Required?</th>
            <th class="text-center">Default</th>
            <th>Description</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><code>gig_id</code></td>
            <td class="text-center">string</td>
            <td class="text-center">yes</td>
            <td class="text-center">&mdash;</td>
            <td>The ID of gig you want to retrieve public questions.</td>
          </tr>
          <tr>
            <td><code>page</code></td>
            <td class="text-center">int</td>
            <td class="text-center">no</td>
            <td class="text-center">1</td>
            <td>The page of public questions you want to retrieve.</span></td>
          </tr>
          <tr>
            <td><code>results_per_page</code></td>
            <td class="text-center">int</td>
            <td class="text-center">no</td>
            <td class="text-center">10</td>
            <td>Number of results per page. It can range from 10 to 100.</span></td>
          </tr>
          <tr>
            <td><code>order</code></td>
            <td class="text-center">string</td>
            <td class="text-center">no</td>
            <td class="text-center">&mdash;</td>
            <td>Retrieve gig public questions sorted by criteria. Leave it blank for default sort (Newest). Possible values: <span class="font-weight-bold">oldest, likes_lowest, likes_highest</span></td>
          </tr>
        </tbody>
      </table>
      <p class="api-paragraph">
        Example response
      </p>
      <pre class="api-request">
        {
          "current_page": 1,
          "results_per_page": 10,
          "next_page": true,
          "questions": [
            {
              "question": "Dear,friend\r\n\r\nIam interested in having a blog according to your gig please let me know what requirements needed and how soon we can start?",
              "answer": "\u1f7e5REQUIREMENTS\r\n\r\n\u2714 For Blogger - Must have a blogger account or name for your Blog\r\n\u2714 For WordPress - Must have a WordPress website\r\n",
              "total_likes": 6,
              "created_at": "2024-02-18 14:02:43",
              "user_countrycode": "kw",
              "user_avatar": "https://static.sproutgigs.com/avatars/2023/07/27/ff9e8636_1690459323.png",
              "user_nickname": "zarari",
              "user_countryname": "Kuwait"
            },
            {
              "question": "Hello my friend, can you provide a website in Arabic? ",
              "answer": "Your site can be in any language you wish to be. ",
              "total_likes": 0,
              "created_at": "2024-02-16 10:23:13",
              "user_countrycode": "dz",
              "user_avatar": "https://sproutgigs.com/assets/images/profile_no_image.gif",
              "user_nickname": "Abibas33",
              "user_countryname": "Algeria"
            },

            ...

            {
              "question": "please i would like to hire your services what would be the procedure, i want you to build a blog, like this one https://blog.zulu.id/?job=aa33cd9083ab&worker=99301ea1 what would be the procedure and values please",
              "answer": "You need an AdSense approved website. You can place an order to start the process. ",
              "total_likes": 8,
              "created_at": "2024-01-08 14:59:00",
              "user_countrycode": "br",
              "user_avatar": "https://static.sproutgigs.com/avatars/2023/12/16/99907fbc_1702734799.png",
              "user_nickname": "Lindaosoueu",
              "user_countryname": "Brazil"
            },
            {
              "question": "what is ad revenue? can you send me this company link?\r\n\r\n",
              "answer": "It's AdSense.\r\n\r\n",
              "total_likes": 10,
              "created_at": "2024-01-05 00:15:44",
              "user_countrycode": "ng",
              "user_avatar": "https://static.sproutgigs.com/avatars/2023/11/14/5b502594_1704413256.png",
              "user_nickname": "ABUTECH",
              "user_countryname": "Nigeria"
            }
          ]
        }
      </pre>

      <a id="gigs-get-reviews" class="api-anchor"></a>
      <h4 class="api-subtopic">Get Gig Reviews</h4>
      <p class="api-paragraph">
        Get all gig reviews.
      </p>
      <pre class="api-request">
        GET https://sproutgigs.com/api/gigs/get-gig-reviews.php</pre>
      <p class="api-paragraph">
        Example request
      </p>
      <pre class="api-request">
        GET /api/gigs/get-gig-reviews.php HTTP/1.1
        Host: sproutgigs.com
        Authorization: Basic dXNlcl9pZDphcGlfc2VjcmV0
        Content-Type: application/json

        {
          "gig_id": "dc716a672cdc",
          "page": 1,
          "results_per_page": 10
        }

      </pre>
      <p>The following attributes are available:</p>
      <table class="table table-responsive">
        <thead>
          <tr>
            <th>Attribute</th>
            <th class="text-center">Type</th>
            <th class="text-center">Required?</th>
            <th class="text-center">Default</th>
            <th>Description</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><code>gig_id</code></td>
            <td class="text-center">string</td>
            <td class="text-center">yes</td>
            <td class="text-center">&mdash;</td>
            <td>The ID of gig you want to retrieve reviews.</td>
          </tr>
          <tr>
            <td><code>page</code></td>
            <td class="text-center">int</td>
            <td class="text-center">no</td>
            <td class="text-center">1</td>
            <td>The page of reviews you want to retrieve.</span></td>
          </tr>
          <tr>
            <td><code>results_per_page</code></td>
            <td class="text-center">int</td>
            <td class="text-center">no</td>
            <td class="text-center">10</td>
            <td>Number of results per page. It can range from 10 to 100.</span></td>
          </tr>
          <tr>
            <td><code>order</code></td>
            <td class="text-center">string</td>
            <td class="text-center">no</td>
            <td class="text-center">&mdash;</td>
            <td>Retrieve gig reviews sorted by criteria. Leave it blank for default sort (Newest). Possible values: <span class="font-weight-bold">oldest</span></td>
          </tr>
        </tbody>
      </table>
      <p class="api-paragraph">
        Example response
      </p>
      <pre class="api-request">
        {
          "current_page": 1,
          "results_per_page": 10,
          "next_page": true,
          "reviews": [
            {
              "buyer": {
                "rating": "5",
                "comment": "Your work is very nice. I like it",
                "created_at": "2024-02-03 09:04:19",
                "user_countrycode": "lk",
                "user_nickname": "oppv",
                "user_countryname": "Sri Lanka",
                "user_avatar": "https://sproutgigs.com/assets/images/profile_no_image.gif"
              },
              "seller": {
                "rating": "5",
                "comment": "Thanks for ordering, and I hope to see you again! Have a wonderful rest of your day.",
                "created_at": "2024-02-03 21:14:04",
                "user_countrycode": "bd",
                "user_nickname": "Polando8",
                "user_countryname": "Bangladesh",
                "user_avatar": "https://static.sproutgigs.com/avatars/2020/07/06/d6d49ed7_1668183031.png"
              }
            },
            {
              "buyer": {
                "rating": "5",
                "comment": "Thank you very much \u1f60a",
                "created_at": "2024-02-05 06:55:26",
                "user_countrycode": "us",
                "user_nickname": "Narcisse1992",
                "user_countryname": "United States",
                "user_avatar": "https://sproutgigs.com/assets/images/profile_no_image.gif"
              },
              "seller": {
                "rating": "5",
                "comment": "Patient, understanding, and a pleasure to work with. Hope to see you again. Have a great rest of your day.",
                "created_at": "2024-02-05 07:04:18",
                "user_countrycode": "bd",
                "user_nickname": "Polando8",
                "user_countryname": "Bangladesh",
                "user_avatar": "https://static.sproutgigs.com/avatars/2020/07/06/d6d49ed7_1668183031.png"
              }
            },

              ...

            {
              "buyer": {
                "rating": "4",
                "comment": "Good.",
                "created_at": "2023-10-16 23:55:27",
                "user_countrycode": "bj",
                "user_nickname": "JulesP",
                "user_countryname": "Benin",
                "user_avatar": "https://static.sproutgigs.com/avatars/2020/01/14/8ffac5f3_1688379232.png"
              },
              "seller": {
                "rating": "4",
                "comment": "Super understanding person.",
                "created_at": "2023-10-18 05:46:01",
                "user_countrycode": "bd",
                "user_nickname": "Polando8",
                "user_countryname": "Bangladesh",
                "user_avatar": "https://static.sproutgigs.com/avatars/2020/07/06/d6d49ed7_1668183031.png"
              }
            },
            {
              "buyer": {
                "rating": "4",
                "comment": "GOOD JOB",
                "created_at": "2023-09-23 23:43:57",
                "user_countrycode": "ma",
                "user_nickname": "kanouz",
                "user_countryname": "Morocco",
                "user_avatar": "https://sproutgigs.com/assets/images/profile_no_image.gif"
              },
              "seller": {
                "rating": "4",
                "comment": "Great client",
                "created_at": "2023-09-23 23:52:14",
                "user_countrycode": "bd",
                "user_nickname": "Polando8",
                "user_countryname": "Bangladesh",
                "user_avatar": "https://static.sproutgigs.com/avatars/2020/07/06/d6d49ed7_1668183031.png"
              }
            }
          ]
        }
      </pre>

      <!-- JOBS -->
      <a id="jobs" class="api-anchor"></a>
      <h3 class="api-topic">Jobs</h3>
      <p class="api-paragraph">
        In order to create jobs, you need to inform the <code>zone_id</code> and <code>excluded_countries</code>, if any, OR the <code>list_id</code>,
        if it's a job targeted to one of your list of freelancers, and the <code>category_id</code>.
      </p>
      <p class="api-paragraph">
        The most updated information can be obtained using the <span class="font-weight-bold">zones, lists and categories</span> endpoints.
        Refer to those endpoints to set up the job correctly.
      </p>

      <a id="jobs-positions" class="api-anchor"></a>
      <h4 class="api-subtopic">Add Positions</h4>
      <p class="api-paragraph">
        Add positions
      </p>
      <pre class="api-request">
        POST https://sproutgigs.com/api/jobs/add-positions.php</pre>
      <p class="api-paragraph">
        Example request
      </p>
      <pre class="api-request">
        POST /api/jobs/add-positions.php HTTP/1.1
        Host: sproutgigs.com
        Authorization: Basic dXNlcl9pZDphcGlfc2VjcmV0
        Content-Type: application/json

        {
          "job_id": "fc7b3bd10d08",
          "positions": 1
        }
      </pre>
      <p>The following attributes are available:</p>
      <table class="table table-responsive">
        <thead>
          <tr>
            <th>Attribute</th>
            <th class="text-center">Type</th>
            <th class="text-center">Required?</th>
            <th class="text-center">Default</th>
            <th>Description</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><code>job_id</code></td>
            <td class="text-center">string</td>
            <td class="text-center">yes</td>
            <td class="text-center">&mdash;</td>
            <td>Id of the job you want to add positions.</td>
          </tr>
          <tr>
            <td><code>positions</code></td>
            <td class="text-center">int</td>
            <td class="text-center">yes</td>
            <td class="text-center">&mdash;</td>
            <td>Number of positions to add in that job. From 1 to 9999.</td>
          </tr>
        </tbody>
      </table>
      <p class="api-paragraph">
        Example response
      </p>
      <pre class="api-request">
        {
          "ok": true,
          "message": "The position(s) has been added."
        }
      </pre>

      <a id="jobs-feature" class="api-anchor"></a>
      <h4 class="api-subtopic">Feature Job</h4>
      <p class="api-paragraph">
        Feature a running job without the need to stop and edit it.
      </p>
      <pre class="api-request">
        POST https://sproutgigs.com/api/jobs/feature-job.php</pre>
      <p class="api-paragraph">
        Example request
      </p>
      <pre class="api-request">
        POST /api/jobs/feature-job.php HTTP/1.1
        Host: sproutgigs.com
        Authorization: Basic dXNlcl9pZDphcGlfc2VjcmV0
        Content-Type: application/json

        {
          "job_id": "fc7b3bd10d08",
          "amount": 5.00
        }
      </pre>
      <p>The following fields can be added in the query string:</p>
      <table class="table table-responsive">
        <thead>
          <tr>
            <th>Attribute</th>
            <th class="text-center">Type</th>
            <th class="text-center">Required?</th>
            <th class="text-center">Default</th>
            <th>Description</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><code>job_id</code></td>
            <td class="text-center">string</td>
            <td class="text-center">yes</td>
            <td class="text-center">&mdash;</td>
            <td>Id of the job to be featured.</td>
          </tr>
          <tr>
            <td><code>amount</code></td>
            <td class="text-center">float</td>
            <td class="text-center">yes</td>
            <td class="text-center">&mdash;</td>
            <td>Amount to be spent on featuring the job. Higher amounts may position your job higher in the list of available jobs. Minimum amount is $2.00</td>
          </tr>
        </tbody>
      </table>
      <p class="api-paragraph">
        Example response
      </p>
      <pre class="api-request">
        {
          "ok": true
        }
      </pre>

      <a id="jobs-categories" class="api-anchor"></a>
      <h4 class="api-subtopic">Categories Endpoint</h4>
      <p class="api-paragraph">
        Get the list of categories and the minimum payment per task you must set to run the job.<br>
        For a list job, please use the <span class="font-weight-bold">international</span> zone pricing as the minimum payment per task.
      </p>
      <pre class="api-request">
        GET https://sproutgigs.com/api/jobs/get-categories.php</pre>
      <p class="api-paragraph">
        Example request
      </p>
      <pre class="api-request">
        GET /api/jobs/get-categories.php HTTP/1.1
        Host: sproutgigs.com
        Authorization: Basic dXNlcl9pZDphcGlfc2VjcmV0
      </pre>
      <p class="api-paragraph">
        Example response
      </p>
      <pre class="api-request">
        [
          {
            "id": "0500",
            "category": "Sign up",
            "subcategory": "Email submit only",
            "min_task_value": {
              "int": "0.080",
              "west1": "0.240",
              "europe1": "0.200",
              "europe2": "0.160",
              "asia1": "0.100",
              "africa1": "0.100",
              "latin": "0.100",
              "muslim": "0.100",
              "arab1": "0.100"
            }
          },
          {
            "id": "0501",
            "category": "Sign up",
            "subcategory": "Simple Sign up",
            "min_task_value": {
              "int": "0.080",
              "west1": "0.240",
              "europe1": "0.200",
              "europe2": "0.160",
              "asia1": "0.100",
              "africa1": "0.100",
              "latin": "0.100",
              "muslim": "0.100",
              "arab1": "0.100"
            }
          },

          ...

          {
            "id": "9002",
            "category": "Surveys / Offers",
            "subcategory": "Up to 50 questions",
            "min_task_value": {
              "int": "0.500",
              "west1": "1.200",
              "europe1": "1.000",
              "europe2": "0.800",
              "asia1": "0.600",
              "africa1": "0.600",
              "latin": "0.600",
              "muslim": "0.600",
              "arab1": "0.600"
            }
          },
          {
            "id": "9900",
            "category": "Other",
            "subcategory": "Describe and set acceptable price",
            "min_task_value": {
              "int": "0.050",
              "west1": "0.150",
              "europe1": "0.130",
              "europe2": "0.100",
              "asia1": "0.060",
              "africa1": "0.060",
              "latin": "0.060",
              "muslim": "0.060",
              "arab1": "0.060"
            }
          }
        ]
      </pre>

      <a id="jobs-get-one" class="api-anchor"></a>
      <h4 class="api-subtopic">Get Job</h4>
      <p class="api-paragraph">
        Get a job by id.
      </p>
      <pre class="api-request">
        GET https://sproutgigs.com/api/jobs/get-job.php</pre>
      <p class="api-paragraph">
        Example request
      </p>
      <pre class="api-request">
        GET /api/jobs/get-job.php HTTP/1.1
        Host: sproutgigs.com
        Authorization: Basic dXNlcl9pZDphcGlfc2VjcmV0
      </pre>
      <p>The following fields can be added in the query string:</p>
      <table class="table table-responsive">
        <thead>
          <tr>
            <th>Attribute</th>
            <th class="text-center">Type</th>
            <th class="text-center">Required?</th>
            <th class="text-center">Default</th>
            <th>Description</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><code>job_id</code></td>
            <td class="text-center">string</td>
            <td class="text-center">yes</td>
            <td class="text-center">&mdash;</td>
            <td>The ID of job you want to retrieve.</td>
          </tr>
        </tbody>
      </table>
      <p class="api-paragraph">
        Example response
      </p>
      <pre class="api-request">
        {
          "id": "0950e7d99b65",
          "id_user": "67d33033",
          "zone_id": "int",
          "excluded_countries": [
              "pk",
              "bd",
              "in"
          ],
          "category_id": "2004",
          "created_at": "2021-01-25T07:42:35Z",
          "status": "PAUSED",
          "task_value": 0.06,
          "tasks_done": 3741,
          "num_tasks": 4030,
          "unrated_tasks": 64,
          "workers_max_tasks": 1,
          "workers_level": "starter",
          "start_time": "00:00",
          "end_time": "24:00",
          "speed": 1000,
          "ttr": 7,
          "autorate": "NO",
          "pause_after_approval": 0,
          "hold_time": 15,
          "title": "Play Video",
          "instructions": [
              "Go to url",
              "Play the video."
          ],
          "notes": "",
          "proofs": [
              {
                  "description": "example",
                  "type": "screenshot"
              }
          ],
          "challenge_action": "",
          "challenges": [],
          "distribution": 25
        }
      </pre>

      <a id="jobs-get" class="api-anchor"></a>
      <h4 class="api-subtopic">Get Jobs</h4>
      <p class="api-paragraph">
        Get your active jobs. Archived jobs will not be retrieved. Make sure to iterate through all pages to get all the jobs.
      </p>
      <pre class="api-request">
        GET https://sproutgigs.com/api/jobs/get-jobs.php</pre>
      <p class="api-paragraph">
        Example request
      </p>
      <pre class="api-request">
        GET /api/jobs/get-jobs.php HTTP/1.1
        Host: sproutgigs.com
        Authorization: Basic dXNlcl9pZDphcGlfc2VjcmV0
      </pre>
      <p>The following fields can be added in the query string:</p>
      <table class="table table-responsive">
        <thead>
          <tr>
            <th>Attribute</th>
            <th class="text-center">Type</th>
            <th class="text-center">Required?</th>
            <th class="text-center">Default</th>
            <th>Description</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><code>page</code></td>
            <td class="text-center">int</td>
            <td class="text-center">no</td>
            <td class="text-center">1</td>
            <td>The page of jobs you want to retrieve.</td>
          </tr>
          <tr>
            <td><code>status</code></td>
            <td class="text-center">string</td>
            <td class="text-center">no</td>
            <td class="text-center">&mdash;</td>
            <td>You can filter the retrieved jobs by status. Possible values are: <span class="font-weight-bold">running, finished, pending_review, pending_restart, paused, paused_system, paused_admin, blocked, declined</span></td>
          </tr>
          <tr>
            <td><code>unrated_tasks</code></td>
            <td class="text-center">int</td>
            <td class="text-center">no</td>
            <td class="text-center">0</td>
            <td>Retrieve jobs with unrated tasks only. Possible values are 0 and 1.</td>
          </tr>
          <tr>
            <td><code>order</code></td>
            <td class="text-center">string</td>
            <td class="text-center">no</td>
            <td class="text-center">asc</td>
            <td>Retrieve jobs sorted by creation date. Possible values: <span class="font-weight-bold">asc, desc</span></td>
          </tr>
        </tbody>
      </table>
      <p class="api-paragraph">
        Example response
      </p>
      <pre class="api-request">
        {
          "current_page": 1,
          "pages": 1,
          "jobs": [
            {
              "id": "0950e7d99b65",
              "id_user": "abcd1234",
              "zone_id": "int",
              "excluded_countries": [],
              "category_id": "2004",
              "created_at": "2021-10-25T07:42:35Z",
              "status": "RUNNING",
              "task_value": 0.06,
              "tasks_done": 3741,
              "num_tasks": 4030,
              "unrated_tasks": 4,
              "workers_max_tasks": 1,
              "workers_level": "starter",
              "start_time": "00:00",
              "end_time": "24:00",
              "speed": 1000,
              "ttr": 7,
              "autorate": "NO",
              "pause_after_approval": 0,
              "hold_time": 15,
              "title": "Play Video",
              "instructions": [
                "Go to https://video-website.io/watch/1",
                "Play the video."
              ],
              "notes": "",
              "proofs": [
                {
                  "description": "FULL screenshot showing video is playing.",
                  "type": "screenshot"
                }
              ],
              "challenge_action": "",
              "challenges": []
            }
          ]
        }
      </pre>

      <a id="jobs-lists" class="api-anchor"></a>
      <h4 class="api-subtopic">Lists Endpoint</h4>
      <p class="api-paragraph">
        Get the available lists of freelancers created in the tab Emp. Lists of your Account Settings.<br>
        SproutGigs requires at least 10 freelancers to run a job posted using the API. Only lists with 10 freelancers or more will be accepted.
      </p>
      <pre class="api-request">
        GET https://sproutgigs.com/api/jobs/get-lists.php</pre>
      <p class="api-paragraph">
        Example request
      </p>
      <pre class="api-request">
        GET /api/jobs/get-lists.php HTTP/1.1
        Host: sproutgigs.com
        Authorization: Basic dXNlcl9pZDphcGlfc2VjcmV0
      </pre>
      <p class="api-paragraph">
        Example response
      </p>
      <pre class="api-request">
        [
          {
            "id": 12870,
            "name": "Successfully Completed",
            "workers": 147
          },
          {
            "id": 14118,
            "name": "Awesome freelancers",
            "workers": 102
          },
          {
            "id": 14256,
            "name": "Freelancers from Brazil",
            "workers": 53
          },
          {
            "id": 16329,
            "name": "My special list",
            "workers": 18
          }
        ]
      </pre>

      <a id="jobs-predicted-position" class="api-anchor"></a>
      <h4 class="api-subtopic">Get Predicted Position</h4>
      <p class="api-paragraph">
        Check the predicted position your job will show up in the list with and without the category filter. Higher bids improves your job position.
      </p>
      <pre class="api-request">
        POST https://sproutgigs.com/api/jobs/get-predicted-position.php</pre>
      <p class="api-paragraph">
        Example request
      </p>
      <pre class="api-request">
        POST /api/jobs/get-predicted-position.php HTTP/1.1
        Host: sproutgigs.com
        Authorization: Basic dXNlcl9pZDphcGlfc2VjcmV0
        Content-Type: application/json

        {
          "category_id": "2501",
          "amount": 5.00
        }
      </pre>
      <p>The following fields can be added in the query string:</p>
      <table class="table table-responsive">
        <thead>
          <tr>
            <th>Attribute</th>
            <th class="text-center">Type</th>
            <th class="text-center">Required?</th>
            <th class="text-center">Default</th>
            <th>Description</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><code>category_id</code></td>
            <td class="text-center">string</td>
            <td class="text-center">yes</td>
            <td class="text-center">&mdash;</td>
            <td>Category ID to publish the job. Use the categories endpoint to get the list of available categories. The category ID must be exactly what is returned in the category endpoint, respecting the leading zeroes that may exist.</td>
          </tr>
          <tr>
            <td><code>amount</code></td>
            <td class="text-center">float</td>
            <td class="text-center">yes</td>
            <td class="text-center">&mdash;</td>
            <td>Amount to be spent on featuring the job. Higher amounts may position your job higher in the list of available jobs. Minimum amount is $2.00</td>
          </tr>
        </tbody>
      </table>
      <p class="api-paragraph">
        Example response
      </p>
      <pre class="api-request">
        {
          "position_in_all": 1,
          "position_in_category": 1
        }
      </pre>

      <a id="jobs-rated-tasks" class="api-anchor"></a>
      <h4 class="api-subtopic">Get Rated Tasks</h4>
      <p class="api-paragraph">
        Get the rated tasks of a specific job or all jobs. Make sure to iterate through all pages to get all the tasks.
      </p>
      <pre class="api-request">
        GET https://sproutgigs.com/api/jobs/get-rated-tasks.php</pre>
      <p class="api-paragraph">
        Example request
      </p>
      <pre class="api-request">
        GET /api/jobs/get-rated-tasks.php HTTP/1.1
        Host: sproutgigs.com
        Authorization: Basic dXNlcl9pZDphcGlfc2VjcmV0
      </pre>
      <p>The following fields can be added in the query string:</p>
      <table class="table table-responsive">
        <thead>
          <tr>
            <th>Attribute</th>
            <th class="text-center">Type</th>
            <th class="text-center">Required?</th>
            <th class="text-center">Default</th>
            <th>Description</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><code>page</code></td>
            <td class="text-center">int</td>
            <td class="text-center">no</td>
            <td class="text-center">1</td>
            <td>The page of tasks you want to retrieve.</td>
          </tr>
          <tr>
            <td><code>job_id</code></td>
            <td class="text-center">string</td>
            <td class="text-center">no</td>
            <td class="text-center">&mdash;</td>
            <td>Get the rated tasks of a specific job. If empty, the rated tasks of all your jobs will be retrieved.</td>
          </tr>
          <tr>
            <td><code>task_ids</code></td>
            <td class="text-center">string array</td>
            <td class="text-center">no</td>
            <td class="text-center">&mdash;</td>
            <td>Get the specified rated tasks of a specific job. Separate values by comma.</td>
          </tr>
        </tbody>
      </table>
      <p class="api-paragraph">
        Example response
      </p>
      <pre class="api-request">
        {
          "current_page": 1,
          "pages": 1,
          "tasks": [
            {
              "id": "158004285a3523",
              "job_id": "abcdef123456",
              "worker_id": "abcd1234",
              "finished_at": "2021-11-01T17:04:45Z",
              "ip_address": "127.0.0.1",
              "country_code": "XX",
              "revision_number": 1,
              "variables": [],
              "status": "OK",
              "proofs": [
                {
                  "text": "latest submitted proof"
                }
              ],
              "previous_proofs": [
                {
                  "employer_comment": "Sorry, the answer is incorrect. Please try again.",
                  "finished_at": "2021-02-07 09:59:41",
                  "proofs": [
                    {
                      "text": "previous unnacepted proof"
                    }
                  ]
                }
              ]
            }
          ]
        }
      </pre>

      <a id="jobs-unrated-tasks" class="api-anchor"></a>
      <h4 class="api-subtopic">Get Unrated Tasks</h4>
      <p class="api-paragraph">
        Get the unrated tasks of a specific job or all jobs. Make sure to iterate through all pages to get all the tasks.
      </p>
      <pre class="api-request">
        GET https://sproutgigs.com/api/jobs/get-unrated-tasks.php</pre>
      <p class="api-paragraph">
        Example request
      </p>
      <pre class="api-request">
        GET /api/jobs/get-unrated-tasks.php HTTP/1.1
        Host: sproutgigs.com
        Authorization: Basic dXNlcl9pZDphcGlfc2VjcmV0
      </pre>
      <p class="api-paragraph">
        Example request with parameters
      </p>
      <pre class="api-request">
        GET /api/jobs/get-unrated-tasks.php?job_id=abc123dfae98&task_ids=99900012abcd1f,99923817f2bce4,99924617ab23df HTTP/1.1
        Host: sproutgigs.com
        Authorization: Basic dXNlcl9pZDphcGlfc2VjcmV0
      </pre>
      <p>The following fields can be added in the query string:</p>
      <table class="table table-responsive">
        <thead>
          <tr>
            <th>Attribute</th>
            <th class="text-center">Type</th>
            <th class="text-center">Required?</th>
            <th class="text-center">Default</th>
            <th>Description</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><code>page</code></td>
            <td class="text-center">int</td>
            <td class="text-center">no</td>
            <td class="text-center">1</td>
            <td>The page of tasks you want to retrieve.</td>
          </tr>
          <tr>
            <td><code>job_id</code></td>
            <td class="text-center">string</td>
            <td class="text-center">no</td>
            <td class="text-center">&mdash;</td>
            <td>Get the unrated tasks of a specific job. If empty, the unrated tasks of all your jobs will be retrieved.</td>
          </tr>
          <tr>
            <td><code>task_ids</code></td>
            <td class="text-center">string array</td>
            <td class="text-center">no</td>
            <td class="text-center">&mdash;</td>
            <td>Get the specified unrated tasks of a specific job. Separate values by comma.</td>
          </tr>
        </tbody>
      </table>
      <p class="api-paragraph">
        Example response
      </p>
      <pre class="api-request">
        {
          "current_page": 1,
          "pages": 1,
          "tasks": [
            {
              "id": "158004285a3523",
              "job_id": "abcdef123456",
              "worker_id": "abcd1234",
              "finished_at": "2021-11-01T17:04:45Z",
              "ip_address": "127.0.0.1",
              "country_code": "XX",
              "revision_number": 0,
              "variables": [],
              "proofs": [
                {
                  "text": "submitted proof"
                }
              ]
            }
          ]
        }
      </pre>

      <a id="jobs-zones" class="api-anchor"></a>
      <h4 class="api-subtopic">Zones Endpoint</h4>
      <p class="api-paragraph">
        Get the available zones and the list of countries that can be excluded from a zone.
      </p>
      <pre class="api-request">
        GET https://sproutgigs.com/api/jobs/get-zones.php</pre>
      <p class="api-paragraph">
        Example request
      </p>
      <pre class="api-request">
        GET /api/jobs/get-zones.php HTTP/1.1
        Host: sproutgigs.com
        Authorization: Basic dXNlcl9pZDphcGlfc2VjcmV0
      </pre>
      <p class="api-paragraph">
        Example response
      </p>
      <pre class="api-request">
        [
          {
            "id": "africa1",
            "zone": "Africa",
            "excludable_countries": [ "ao", "bw", "cg", "eg", "et", "gh", "ke", "ly", "ma", "mz", "ng", "rw", "za", "tz", "ug", "zw", "tn" ]
          },
          {
            "id": "arab1",
            "zone": "Arab Countries",
            "excludable_countries": [ "ae", "bh", "kw", "sa", "ye", "qa", "om", "jo", "sy", "lb", "ps", "iq", "eg", "ma", "ly", "tn", "dz", "sd", "mr", "so", "dj", "km" ]
          },
          {
            "id": "asia1",
            "zone": "Asia",
            "excludable_countries": [ "bd", "cn", "in", "id", "jp", "kr", "lk", "my", "pk", "ph", "sg", "th", "vn" ]
          },
          {
            "id": "europe1",
            "zone": "Europe West",
            "excludable_countries": [ "at", "be", "ch", "de", "dk", "es", "fi", "fr", "uk", "ie", "is", "it", "lu", "mc", "no", "pt", "se", "sm" ]
          },
          {
            "id": "europe2",
            "zone": "Europe East",
            "excludable_countries": [ "al", "am", "by", "ba", "bg", "cy", "cz", "ee", "gr", "hu", "hr", "lt", "mk", "mt", "rs", "ru", "si", "sk", "tr", "ua", "pl", "ro" ]
          },
          {
            "id": "int",
            "zone": "International",
            "excludable_countries": [ "al", "pk", "bd", "id", "in", "ph", "ro", "eg", "pl", "my", "np", "vn", "cn", "lt", "ma", "us", "ca", "uk", "au", "de", "fr", "lk", "si", "ve", "co" ]
          },
          {
            "id": "latin",
            "zone": "Latin America",
            "excludable_countries": [ "ar", "bo", "br", "cl", "co", "ec", "fk", "gf", "gy", "mx", "py", "pe", "sr", "uy", "ve" ]
          },
          {
            "id": "muslim",
            "zone": "Muslim Countries",
            "excludable_countries": [ "dz", "id", "in", "pk", "bd", "ma", "ng", "eg", "ir", "tr", "tn" ]
          },
          {
            "id": "west1",
            "zone": "USA & Western",
            "excludable_countries": [ "us", "uk", "ca", "au", "nz" ]
          }
        ]
      </pre>

      <a id="jobs-pause" class="api-anchor"></a>
      <h4 class="api-subtopic">Pause Jobs</h4>
      <p class="api-paragraph">
        Pause a Job.
      </p>
      <pre class="api-request">
        POST https://sproutgigs.com/api/jobs/job-pause.php</pre>
      <p class="api-paragraph">
        Example request
      </p>
      <pre class="api-request">
        POST /api/jobs/job-pause.php HTTP/1.1
        Host: sproutgigs.com
        Authorization: Basic dXNlcl9pZDphcGlfc2VjcmV0
        Content-Type: application/json

        {
          "job_id": "fc7b3bd10d08"
        }
      </pre>
      <p>The following fields can be added in the query string:</p>
      <table class="table table-responsive">
        <thead>
          <tr>
            <th>Attribute</th>
            <th class="text-center">Type</th>
            <th class="text-center">Required?</th>
            <th class="text-center">Default</th>
            <th>Description</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><code>job_id</code></td>
            <td class="text-center">string</td>
            <td class="text-center">yes</td>
            <td class="text-center">&mdash;</td>
            <td>Id of the job to be paused.</td>
          </tr>
        </tbody>
      </table>
      <p class="api-paragraph">
        Example response
      </p>
      <pre class="api-request">
        {
          "ok": true
        }
      </pre>

      <a id="jobs-post" class="api-anchor"></a>
      <h4 class="api-subtopic">Post Job</h4>
      <p class="api-paragraph">
        Post a new job.
      </p>
      <pre class="api-request">
        POST https://sproutgigs.com/api/jobs/post-job.php</pre>
      <p class="api-paragraph">
        Example request
      </p>
      <pre class="api-request">
        POST /api/jobs/post-job.php HTTP/1.1
        Host: sproutgigs.com
        Authorization: Basic dXNlcl9pZDphcGlfc2VjcmV0
        Content-Type: application/json

        {
          "zone_id": "int",
          "category_id": "0501",
          "title": "Sign up to ACME website",
          "instructions": [
              "visit the ACME website",
              "Create an account"
          ],
          "proofs": [
              {
                  "description": "Screenshot of your profile at ACME website",
                  "type": "screenshot"
              }
          ],
          "num_tasks": 25,
          "task_value": 0.10,
          "speed": 1000,
          "ttr": 7,
          "hold_time": 15
        }
      </pre>
      <p>The following attributes are available:</p>
      <table class="table table-responsive">
        <thead>
          <tr>
            <th>Attribute</th>
            <th class="text-center">Type</th>
            <th class="text-center">Required?</th>
            <th class="text-center">Default</th>
            <th>Description</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><code>test</code></td>
            <td class="text-center">integer</td>
            <td class="text-center">no</td>
            <td class="text-center">0</td>
            <td>Set this attribute 1 if you are in development. The job will be validated but it will not be created. No costs will be charged from your spendable balance.</td>
          </tr>
          <tr>
            <td><code>zone_id</code></td>
            <td class="text-center">string</td>
            <td class="text-center">yes</td>
            <td class="text-center">&mdash;</td>
            <td>Zone ID to publish the job. Conditionally required: <code>zone_id</code> or <code>list_id</code> is required to run the job. Use the zones and/or lists endpoints to get the list of zones and/or buyer lists.</td>
          </tr>
          <tr>
            <td><code>excluded_countries</code></td>
            <td class="text-center">string array</td>
            <td class="text-center">no</td>
            <td class="text-center">&mdash;</td>
            <td>List of countries codes to be excluded from the target zone. Use the zones endpoint to get a list of excludable countries for each zone.</td>
          </tr>
          <tr>
            <td><code>list_id</code></td>
            <td class="text-center">int</td>
            <td class="text-center">yes</td>
            <td class="text-center">&mdash;</td>
            <td>List ID to publish the job. Conditionally required: <code>zone_id</code> or <code>list_id</code> is required to run the job. Use the zones and/or lists endpoints to get the list of zones and/or buyer lists.</td>
          </tr>
          <tr>
            <td><code>category_id</code></td>
            <td class="text-center">string</td>
            <td class="text-center">yes</td>
            <td class="text-center">&mdash;</td>
            <td>Category ID to publish the job. Use the categories endpoint to get the list of available categories. The category ID must be exactly what is returned in the category endpoint, respecting the leading zeroes that may exist.</td>
          </tr>
          <tr>
            <td><code>title</code></td>
            <td class="text-center">string</td>
            <td class="text-center">yes</td>
            <td class="text-center">&mdash;</td>
            <td>Job title.</td>
          </tr>
          <tr>
            <td><code>notes</code></td>
            <td class="text-center">string</td>
            <td class="text-center">no</td>
            <td class="text-center">&mdash;</td>
            <td>Additional work notes for freelancers.</td>
          </tr>
          <tr>
            <td><code>instructions</code></td>
            <td class="text-center">string array</td>
            <td class="text-center">yes</td>
            <td class="text-center">&mdash;</td>
            
            <td>List of instructions of expected work from freelancers. You may also include variables. Example: ["Visit website ABC", "Click the first post.", "Click the {{ORDINAL}} link from the top."]</td>
            
          </tr>
          <tr>
            <td><code>variables</code></td>
            <td class="text-center">object array</td>
            <td class="text-center">no</td>
            <td class="text-center">&mdash;</td>
            <td>
              Nested object with the following attributes. Mandatory if a variable has been informed in the instructions.
              <br><br>
              <table class="table">
                <thead>
                  <tr>
                    <th>Attribute</th>
                    <th class="text-center">Type</th>
                    <th class="text-center">Required?</th>
                    <th class="text-center">Default</th>
                    <th>Description</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><code>name</code></td>
                    <td class="text-center">string</td>
                    <td class="text-center">yes</td>
                    <td class="text-center">&mdash;</td>
                    
                    <td>Variable name as informed in the instructions without the braces {{}}. For example, if you have added a variable in the instructions like {{URL}}, just use "URL" as the name of the variable.</td>
                    
                  </tr>
                  <tr>
                    <td><code>values</code></td>
                    <td class="text-center">array</td>
                    <td class="text-center">yes</td>
                    <td class="text-center">&mdash;</td>
                    <td>Variable values. It must have more than 1 value and less than 1000. If there are more variables, the number of values in all variables must be the same.</td>
                  </tr>
                </tbody>
              </table>
            </td>
          </tr>
          <tr>
            <td><code>proofs</code></td>
            <td class="text-center">object array</td>
            <td class="text-center">yes</td>
            <td class="text-center">&mdash;</td>
            <td>
              Nested object with the following attributes. A max of 4 proofs can be required.
              <br><br>
              <table class="table">
                <thead>
                  <tr>
                    <th>Attribute</th>
                    <th class="text-center">Type</th>
                    <th class="text-center">Required?</th>
                    <th class="text-center">Default</th>
                    <th>Description</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><code>type</code></td>
                    <td class="text-center">string</td>
                    <td class="text-center">yes</td>
                    <td class="text-center">&mdash;</td>
                    <td>Proof type. Possible values are <span class="font-weight-bold">text</span> and <span class="font-weight-bold">screenshot</span>.</td>
                  </tr>
                  <tr>
                    <td><code>description</code></td>
                    <td class="text-center">string</td>
                    <td class="text-center">yes</td>
                    <td class="text-center">&mdash;</td>
                    <td>Proof description. What is required from freelancers to prove they have completed the task.</td>
                  </tr>
                </tbody>
              </table>
            </td>
          </tr>
          <tr>
            <td><code>challenges</code></td>
            <td class="text-center">object array</td>
            <td class="text-center">no</td>
            <td class="text-center">&mdash;</td>
            <td>
              Nested object with the following attributes. A max of 3 challenges can be set up.
              <br><br>
              <table class="table">
                <thead>
                  <tr>
                    <th>Attribute</th>
                    <th class="text-center">Type</th>
                    <th class="text-center">Required?</th>
                    <th class="text-center">Default</th>
                    <th>Description</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><code>question</code></td>
                    <td class="text-center">string</td>
                    <td class="text-center">yes</td>
                    <td class="text-center">&mdash;</td>
                    <td>Challenge question that will be displayed to users.</td>
                  </tr>
                  <tr>
                    <td><code>answer</code></td>
                    <td class="text-center">string</td>
                    <td class="text-center">yes</td>
                    <td class="text-center">&mdash;</td>
                    <td>The correct answer to the challenge question to be verified against the answer from freelancers.</td>
                  </tr>
                </tbody>
              </table>
            </td>
          </tr>
          <tr>
            <td><code>challenge_action</code></td>
            <td class="text-center">string</td>
            <td class="text-center">no</td>
            <td class="text-center">&mdash;</td>
            <td>Action to be taken when freelancer answer the challenge incorrectly. Possible values are <span class="font-weight-bold">rate_nok</span>, to rate the task as Not Satisfied, and <span class="font-weight-bold">rate_nok_block</span>, to rate the task as Not Satisfied and block the freelancer from future jobs. Required if there are challenges set up.</td>
          </tr>
          <tr>
            <td><code>num_tasks</code></td>
            <td class="text-center">int</td>
            <td class="text-center">no</td>
            <td class="text-center">&mdash;</td>
            <td>Number of tasks to be performed by freelancers. Minimum of 10 tasks is required.</td>
          </tr>
          <tr>
            <td><code>workers_level</code></td>
            <td class="text-center">string</td>
            <td class="text-center">no</td>
            <td class="text-center">starter</td>
            <td>Target a minimum level of freelancers. Possible values are "starter", "expert" and "advanced".</td>
          </tr>
          <tr>
            <td><code>workers_max_tasks</code></td>
            <td class="text-center">int</td>
            <td class="text-center">no</td>
            <td class="text-center">1</td>
            <td>Number of tasks that the same freelancer can submit. It can range from 1 to 10. For greater than 1, the <code>workers_level</code> must not be "starter".</td>
          </tr>
          <tr>
            <td><code>task_value</code></td>
            <td class="text-center">float</td>
            <td class="text-center">yes</td>
            <td class="text-center">&mdash;</td>
            <td>Amount each freelancer will earn if the task is rated as Satisfied.</td>
          </tr>
          <tr>
            <td><code>speed</code></td>
            <td class="text-center">int</td>
            <td class="text-center">no</td>
            <td class="text-center">1000</td>
            <td>Speed which the job is displayed to freelancers. From 1-1000 (1 is slow, 1000 is fast-normal. Each page refresh generates a random number. All job speed setting numbers above this random number are shown. A speed of 10 or even 100, the probability of showing up is really low.)</td>
          </tr>
          <tr>
            <td><code>start_time</code></td>
            <td class="text-center">string</td>
            <td class="text-center">no</td>
            <td class="text-center">00:00</td>
            <td>Start time for the job to be available to freelancers. Use UTC time in the format `HH:mm`, where `HH` ranges from 00 to 24 and `mm` ranges from 00:59</td>
          </tr>
          <tr>
            <td><code>end_time</code></td>
            <td class="text-center">int</td>
            <td class="text-center">no</td>
            <td class="text-center">24:00</td>
            <td>End time for the job to be available to freelancers. Use UTC time in the format `HH:mm`, where `HH` ranges from 00 to 24 and `mm` ranges from 00:59</td>
          </tr>
          <tr>
            <td><code>ttr</code></td>
            <td class="text-center">int</td>
            <td class="text-center">no</td>
            <td class="text-center">7</td>
            <td>Number of days the buyer has to rate the task before it is auto rated as Satisfied by the system. It ranges from 1 to 90 days</td>
          </tr>
          <tr>
            <td><code>autorate</code></td>
            <td class="text-center">string</td>
            <td class="text-center">no</td>
            <td class="text-center">NO</td>
            <td>Used to let the system auto rate tasks based on the PCODE submitted by the freelancers. Possible values are <span class="font-weight-bold">NO</span>, where the system will not do anything and all rating will be left for the buyer. <span class="font-weight-bold">V</span>, where the system will verify if the freelancer has submitted the correct PCODE but will not rate the task. <span class="font-weight-bold">V+R</span>, where the system will verify and auto rate the task as Satisfied if the freelancer submitted the correct PCODE. To learn more about PCODE, visit <a href="/employer/pcode.php">Auto-rating with PCODE</a></td>
          </tr>
          <tr>
            <td><code>pause_after_approval</code></td>
            <td class="text-center">int</td>
            <td class="text-center">no</td>
            <td class="text-center">0</td>
            <td>Used to immediately pause the job after it's approved. Possible values are 0, to not pause it and 1, to pause it.</td>
          </tr>
          <tr>
            <td><code>hold_time</code></td>
            <td class="text-center">int</td>
            <td class="text-center">no</td>
            <td class="text-center">15</td>
            <td>The number of minutes a freelancer can hold a position before submitting the task. It range from 5 to 90.</td>
          </tr>
          <tr>
            <td><code>hold_required</code></td>
            <td class="text-center">int</td>
            <td class="text-center">no</td>
            <td class="text-center">0</td>
            <td>Require freelancers to hold the position before submitting the task. It's better used when the hold time is longer than 5 minutes</td>
          </tr>
          <tr>
            <td><code>distribution</code></td>
            <td class="text-center">int</td>
            <td class="text-center">no</td>
            <td class="text-center">—</td>
            <td>Maximum percentage of tasks done by freelancers in a single country. Value can range from 25 to 100. For example, if a job has 100 positions and the max distribution is 50%, 50 tasks could be done by freelancers in the same country and the other 50 tasks must be done by freelancers in a different country.</td>
          </tr>
          <tr>
            <td><code>notify_followers</code></td>
            <td class="text-center">int</td>
            <td class="text-center">no</td>
            <td class="text-center">0</td>
            <td>Freelancers that follow you will receive a notifications about the new job posted. It costs 3% of the total job cost with a minimum of $1.</td>
          </tr>
          <tr>
            <td><code>premium_amount</code></td>
            <td class="text-center">float</td>
            <td class="text-center">no</td>
            <td class="text-center">0</td>
            <td>You can add an amount to feature your job as premium. The job position depends on the premium amount set by other buyers at the time. The amount can range from 2.00 to 50.00.</td>
          </tr>
        </tbody>
      </table>
      <p class="api-paragraph">
        Example response
      </p>
      <pre class="api-request">
        {
          "ok": true,
          "url": "https://sproutgigs.com/employer/campaign-details.php?Id=JOB_ID",
          "message": "Job posted successfully"
        }
      </pre>

      <a id="jobs-rate-multiple-tasks" class="api-anchor"></a>
      <h4 class="api-subtopic">Rate Multiple Tasks</h4>
      <p class="api-paragraph">
        Rate multiple tasks of a job. You can rate up to 1000 tasks per request
      </p>
      <pre class="api-request">
        POST https://sproutgigs.com/api/jobs/rate-multiple-tasks.php</pre>
      <p class="api-paragraph">
        Example request
      </p>
      <pre class="api-request">
        POST /api/jobs/rate-single-task.php HTTP/1.1
        Host: sproutgigs.com
        Authorization: Basic dXNlcl9pZDphcGlfc2VjcmV0
        Content-Type: application/json

        {
          "job_id": "fc7b3bd10d08",
          "tasks": [
            {
                "id": "1416896140ecb7",
                "rating": "ok",
                "satisfaction": "good",
                "comment": "great job!",
                "list_id": 0,
                "block_worker": false,
                "bonus": 0.0
            },

            ...

            {
                "id": "158004285a3523",
                "rating": "nok",
                "satisfaction": "incorrect",
                "comment": "wrong answer",
                "list_id": 0,
                "block_worker": false,
                "bonus": 0.0
            }
          ]
      </pre>
      <p>The following fields can be added in the query string:</p>
      <table class="table table-responsive">
        <thead>
          <tr>
            <th>Attribute</th>
            <th class="text-center">Type</th>
            <th class="text-center">Required?</th>
            <th class="text-center">Default</th>
            <th>Description</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><code>job_id</code></td>
            <td class="text-center">string</td>
            <td class="text-center">yes</td>
            <td class="text-center">&mdash;</td>
            <td>Id of the Job.</td>
          </tr>
          <tr>
            <td><code>tasks</code></td>
            <td class="text-center">object array</td>
            <td class="text-center">yes</td>
            <td class="text-center">&mdash;</td>
            <td>
              Nested object with the following attributes.
              <br><br>
              <table class="table">
                <thead>
                  <tr>
                    <th>Attribute</th>
                    <th class="text-center">Type</th>
                    <th class="text-center">Required?</th>
                    <th class="text-center">Default</th>
                    <th>Description</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><code>id</code></td>
                    <td class="text-center">string</td>
                    <td class="text-center">yes</td>
                    <td class="text-center">&mdash;</td>
                    <td>Id of the task to be rated.</td>
                  </tr>
                  <tr>
                    <td><code>rating</code></td>
                    <td class="text-center">string</td>
                    <td class="text-center">yes</td>
                    <td class="text-center">&mdash;</td>
                    <td>Task rating. Possible values are: <span class="font-weight-bold">ok, not_ok, revise</span></td>
                  </tr>
                  <tr>
                    <td><code>satisfaction</code></td>
                    <td class="text-center">string</td>
                    <td class="text-center">no</td>
                    <td class="text-center">&mdash;</td>
                    <td>Your satisfaction with the task. Possible values are: <span class="font-weight-bold">excellent, good, ok</span> (if rating is <span class="font-weight-bold">ok</span>), or: <span class="font-weight-bold">incorrect, spam, dupe</span> (if rating is <span class="font-weight-bold">not_ok</span>)</td>
                  </tr>
                  <tr>
                    <td><code>comment</code></td>
                    <td class="text-center">string</td>
                    <td class="text-center">no</td>
                    <td class="text-center">&mdash;</td>
                    <td>Task comments. Required if <span class="font-weight-bold">task_rating</span> is <span class="font-weight-bold">not_ok</span> or <span class="font-weight-bold">revise</span></td>
                  </tr>
                  <tr>
                    <td><code>list_id</code></td>
                    <td class="text-center">int</td>
                    <td class="text-center">no</td>
                    <td class="text-center">0</td>
                    <td>Inform the id of a custom list in case you want to add the freelancer to it.</td>
                  </tr>
                  <tr>
                    <td><code>block_worker</code></td>
                    <td class="text-center">boolean</td>
                    <td class="text-center">no</td>
                    <td class="text-center">false</td>
                    <td>Freelancer should be blocked?</td>
                  </tr>
                  <tr>
                    <td><code>bonus</code></td>
                    <td class="text-center">float</td>
                    <td class="text-center">no</td>
                    <td class="text-center">0.0</td>
                    <td>Bonus amount to be sent to the freelancer.</td>
                  </tr>
                </tbody>
              </table>
            </td>
          </tr>
        </tbody>
      </table>
      <p class="api-paragraph">
        Example response
      </p>
      <pre class="api-request">
        {
          "tasks": [
            {
                "id": "1416896140ecb7",
                "ok": true,
                "message": "Task rated successfully."
            },

            ...

            {
                "id": "158004285a3523",
                "ok": false,
                "message": "Task cannot be rated."
            }
          ]
        }
      </pre>

      <a id="jobs-rate-single-task" class="api-anchor"></a>
      <h4 class="api-subtopic">Rate Single Task</h4>
      <p class="api-paragraph">
        Rate a task.
      </p>
      <pre class="api-request">
        POST https://sproutgigs.com/api/jobs/rate-single-task.php</pre>
      <p class="api-paragraph">
        Example request
      </p>
      <pre class="api-request">
        POST /api/jobs/rate-single-task.php HTTP/1.1
        Host: sproutgigs.com
        Authorization: Basic dXNlcl9pZDphcGlfc2VjcmV0
        Content-Type: application/json

        {
          "job_id": "fc7b3bd10d08",
          "task_id": "1416896140ecb7",
          "task_rating": "ok",
          "task_satisfaction": "good",
          "task_comment": "great job!",
          "list_id": 0,
          "block_worker": false,
          "task_bonus": 0.0
        }
      </pre>
      <p>The following fields can be added in the query string:</p>
      <table class="table table-responsive">
        <thead>
          <tr>
            <th>Attribute</th>
            <th class="text-center">Type</th>
            <th class="text-center">Required?</th>
            <th class="text-center">Default</th>
            <th>Description</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><code>task_id</code></td>
            <td class="text-center">string</td>
            <td class="text-center">yes</td>
            <td class="text-center">&mdash;</td>
            <td>Id of the task to be rated.</td>
          </tr>
          <tr>
            <td><code>job_id</code></td>
            <td class="text-center">string</td>
            <td class="text-center">yes</td>
            <td class="text-center">&mdash;</td>
            <td>Id of the Job.</td>
          </tr>
          <tr>
            <td><code>task_rating</code></td>
            <td class="text-center">string</td>
            <td class="text-center">yes</td>
            <td class="text-center">&mdash;</td>
            <td>Task rating. Possible values are: <span class="font-weight-bold">ok, not_ok, revise</span></td>
          </tr>
          <tr>
            <td><code>task_satisfaction</code></td>
            <td class="text-center">string</td>
            <td class="text-center">no</td>
            <td class="text-center">&mdash;</td>
            <td>Your satisfaction with the task. Possible values are: <span class="font-weight-bold">excellent, good, ok</span> (if rating is <span class="font-weight-bold">ok</span>), or: <span class="font-weight-bold">incorrect, spam, dupe</span> (if rating is <span class="font-weight-bold">not_ok</span>)</td>
          </tr>
          <tr>
            <td><code>task_comment</code></td>
            <td class="text-center">string</td>
            <td class="text-center">no</td>
            <td class="text-center">&mdash;</td>
            <td>Task comments. Required if <span class="font-weight-bold">task_rating</span> is <span class="font-weight-bold">not_ok</span> or <span class="font-weight-bold">revise</span></td>
          </tr>
          <tr>
            <td><code>list_id</code></td>
            <td class="text-center">int</td>
            <td class="text-center">no</td>
            <td class="text-center">0</td>
            <td>Inform the id of a custom list in case you want to add the freelancer to it.</td>
          </tr>
          <tr>
            <td><code>block_worker</code></td>
            <td class="text-center">boolean</td>
            <td class="text-center">no</td>
            <td class="text-center">false</td>
            <td>Freelancer should be blocked?</td>
          </tr>
          <tr>
            <td><code>task_bonus</code></td>
            <td class="text-center">float</td>
            <td class="text-center">no</td>
            <td class="text-center">0.0</td>
            <td>Bonus amount to be sent to the freelancer.</td>
          </tr>
        </tbody>
      </table>
      <p class="api-paragraph">
        Example response
      </p>
      <pre class="api-request">
        {
          "ok": true,
          "message": "Task rated successfully."
        }
      </pre>

      <a id="jobs-restart" class="api-anchor"></a>
      <h4 class="api-subtopic">Restart Jobs</h4>
      <p class="api-paragraph">
        Restart a Job.
      </p>
      <pre class="api-request">
        POST https://sproutgigs.com/api/jobs/job-restart.php</pre>
      <p class="api-paragraph">
        Example request
      </p>
      <pre class="api-request">
        POST /api/jobs/job-restart.php HTTP/1.1
        Host: sproutgigs.com
        Authorization: Basic dXNlcl9pZDphcGlfc2VjcmV0
        Content-Type: application/json

        {
          "job_id": "fc7b3bd10d08",
          "positions": 10
        }
      </pre>
      <p>The following fields can be added in the query string:</p>
      <table class="table table-responsive">
        <thead>
          <tr>
            <th>Attribute</th>
            <th class="text-center">Type</th>
            <th class="text-center">Required?</th>
            <th class="text-center">Default</th>
            <th>Description</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><code>job_id</code></td>
            <td class="text-center">string</td>
            <td class="text-center">yes</td>
            <td class="text-center">&mdash;</td>
            <td>Id of the job to be stoped.</td>
          </tr>
          <tr>
            <td><code>positions</code></td>
            <td class="text-center">int</td>
            <td class="text-center">no</td>
            <td class="text-center">&mdash;</td>
            <td>Number of positions to add in that job.</td>
          </tr>
        </tbody>
      </table>
      <p class="api-paragraph">
        Example response
      </p>
      <pre class="api-request">
        {
          "ok": true,
          "notice": "job restarted successfully"
        }
      </pre>

      <a id="jobs-resume" class="api-anchor"></a>
      <h4 class="api-subtopic">Resume Jobs</h4>
      <p class="api-paragraph">
        Resume a paused Job.
      </p>
      <pre class="api-request">
        POST https://sproutgigs.com/api/jobs/job-resume.php</pre>
      <p class="api-paragraph">
        Example request
      </p>
      <pre class="api-request">
        POST /api/jobs/job-resume.php HTTP/1.1
        Host: sproutgigs.com
        Authorization: Basic dXNlcl9pZDphcGlfc2VjcmV0
        Content-Type: application/json

        {
          "job_id": "fc7b3bd10d08"
        }
      </pre>
      <p>The following fields can be added in the query string:</p>
      <table class="table table-responsive">
        <thead>
          <tr>
            <th>Attribute</th>
            <th class="text-center">Type</th>
            <th class="text-center">Required?</th>
            <th class="text-center">Default</th>
            <th>Description</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><code>job_id</code></td>
            <td class="text-center">string</td>
            <td class="text-center">yes</td>
            <td class="text-center">&mdash;</td>
            <td>Id of the job to be resumed.</td>
          </tr>
        </tbody>
      </table>
      <p class="api-paragraph">
        Example response
      </p>
      <pre class="api-request">
        {
          "ok": true
        }
      </pre>

      <a id="jobs-speed" class="api-anchor"></a>
      <h4 class="api-subtopic">Set Speed</h4>
      <p class="api-paragraph">
        Set the job speed.
      </p>
      <pre class="api-request">
        POST https://sproutgigs.com/api/jobs/set-speed.php</pre>
      <p class="api-paragraph">
        Example request
      </p>
      <pre class="api-request">
        POST /api/jobs/set-speed.php HTTP/1.1
        Host: sproutgigs.com
        Authorization: Basic dXNlcl9pZDphcGlfc2VjcmV0
        Content-Type: application/json

        {
          "job_id": "fc7b3bd10d08",
          "speed": 800
        }
      </pre>
      <p>The following attributes are available:</p>
      <table class="table table-responsive">
        <thead>
          <tr>
            <th>Attribute</th>
            <th class="text-center">Type</th>
            <th class="text-center">Required?</th>
            <th class="text-center">Default</th>
            <th>Description</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><code>job_id</code></td>
            <td class="text-center">string</td>
            <td class="text-center">yes</td>
            <td class="text-center">&mdash;</td>
            <td>Id of the job you want to set the new speed.</td>
          </tr>
          <tr>
            <td><code>speed</code></td>
            <td class="text-center">int</td>
            <td class="text-center">yes</td>
            <td class="text-center">1000</td>
            <td>Speed of the job. From 1 to 1000.</td>
          </tr>
        </tbody>
      </table>
      <p class="api-paragraph">
        Example response
      </p>
      <pre class="api-request">
        {
          "ok": true,
          "message": "Job speed updated successfully."
        }
      </pre>

      <a id="jobs-ttr" class="api-anchor"></a>
      <h4 class="api-subtopic">Set TTR</h4>
      <p class="api-paragraph">
        Set the job time to rate.
      </p>
      <pre class="api-request">
        POST https://sproutgigs.com/api/jobs/set-ttr.php</pre>
      <p class="api-paragraph">
        Example request
      </p>
      <pre class="api-request">
        POST /api/jobs/set-ttr.php HTTP/1.1
        Host: sproutgigs.com
        Authorization: Basic dXNlcl9pZDphcGlfc2VjcmV0
        Content-Type: application/json

        {
          "job_id": "fc7b3bd10d08",
          "ttr": 3
        }
      </pre>
      <p>The following attributes are available:</p>
      <table class="table table-responsive">
        <thead>
          <tr>
            <th>Attribute</th>
            <th class="text-center">Type</th>
            <th class="text-center">Required?</th>
            <th class="text-center">Default</th>
            <th>Description</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><code>job_id</code></td>
            <td class="text-center">string</td>
            <td class="text-center">yes</td>
            <td class="text-center">&mdash;</td>
            <td>Id of the job you want to set the new TTR.</td>
          </tr>
          <tr>
            <td><code>ttr</code></td>
            <td class="text-center">int</td>
            <td class="text-center">yes</td>
            <td class="text-center">7</td>
            <td>Time to rate of the job. From 1 to 90.</td>
          </tr>
        </tbody>
      </table>
      <p class="api-paragraph">
        Example response
      </p>
      <pre class="api-request">
        {
          "ok": true,
          "message": "Job time to rate (TTR) updated successfully."
        }
      </pre>

      <a id="jobs-stop" class="api-anchor"></a>
      <h4 class="api-subtopic">Stop Jobs</h4>
      <p class="api-paragraph">
        Stop a Job.
      </p>
      <pre class="api-request">
        POST https://sproutgigs.com/api/jobs/job-stop.php</pre>
      <p class="api-paragraph">
        Example request
      </p>
      <pre class="api-request">
        POST /api/jobs/job-stop.php HTTP/1.1
        Host: sproutgigs.com
        Authorization: Basic dXNlcl9pZDphcGlfc2VjcmV0
        Content-Type: application/json

        {
          "job_id": "fc7b3bd10d08"
        }
      </pre>
      <p>The following fields can be added in the query string:</p>
      <table class="table table-responsive">
        <thead>
          <tr>
            <th>Attribute</th>
            <th class="text-center">Type</th>
            <th class="text-center">Required?</th>
            <th class="text-center">Default</th>
            <th>Description</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><code>job_id</code></td>
            <td class="text-center">string</td>
            <td class="text-center">yes</td>
            <td class="text-center">&mdash;</td>
            <td>Id of the job to be stoped.</td>
          </tr>
        </tbody>
      </table>
      <p class="api-paragraph">
        Example response
      </p>
      <pre class="api-request">
        {
          "ok": true,
          "message": "Job stoped successfully."
        }
      </pre>

      <!-- LISTS -->
      <a id="lists" class="api-anchor"></a>
      <h3 class="api-topic">Lists</h3>
      <p class="api-paragraph">
        Manage your custom lists.
      </p>

      <a id="lists-add-workers" class="api-anchor"></a>
      <h4 class="api-subtopic">Add Freelancers</h4>
      <p class="api-paragraph">
        Add one or more freelancers to a custom list. Invalid and blocked freelancers will not be added.
      </p>
      <pre class="api-request">
        POST https://sproutgigs.com/api/lists/add-workers.php</pre>
      <p class="api-paragraph">
        Example request
      </p>
      <pre class="api-request">
        POST /api/lists/add-workers.php HTTP/1.1
        Host: sproutgigs.com
        Authorization: Basic dXNlcl9pZDphcGlfc2VjcmV0
        Content-Type: application/json

        {
          "list_id": 15237,
          "workers": ["0de178af", "ffcc1278", "abcd0129"]
        }
      </pre>
      <p>The following attributes are available:</p>
      <table class="table table-responsive">
        <thead>
          <tr>
            <th>Attribute</th>
            <th class="text-center">Type</th>
            <th class="text-center">Required?</th>
            <th class="text-center">Default</th>
            <th>Description</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><code>list_id</code></td>
            <td class="text-center">int</td>
            <td class="text-center">yes</td>
            <td class="text-center">&mdash;</td>
            <td>Id of the list you want to add the freelancers.</td>
          </tr>
          <tr>
            <td><code>workers</code></td>
            <td class="text-center">string array</td>
            <td class="text-center">yes</td>
            <td class="text-center">&mdash;</td>
            <td>List of freelancer ids to be added to the custom list.</td>
          </tr>
        </tbody>
      </table>
      <p class="api-paragraph">
        Example response
      </p>
      <pre class="api-request">
        {
          "ok": true,
          "message": "Freelancers added to the list successfully."
        }
      </pre>

      <a id="lists-block-workers" class="api-anchor"></a>
      <h4 class="api-subtopic">Block Freelancers</h4>
      <p class="api-paragraph">
        Block one or more freelancers and remove from all lists.
      </p>
      <pre class="api-request">
        POST https://sproutgigs.com/api/lists/block-workers.php</pre>
      <p class="api-paragraph">
        Example request
      </p>
      <pre class="api-request">
        POST /api/lists/block-workers.php HTTP/1.1
        Host: sproutgigs.com
        Authorization: Basic dXNlcl9pZDphcGlfc2VjcmV0
        Content-Type: application/json

        {
          "workers": ["0de178af", "ffcc1278", "abcd0129"]
        }
      </pre>
      <p>The following attributes are available:</p>
      <table class="table table-responsive">
        <thead>
          <tr>
            <th>Attribute</th>
            <th class="text-center">Type</th>
            <th class="text-center">Required?</th>
            <th class="text-center">Default</th>
            <th>Description</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><code>workers</code></td>
            <td class="text-center">string array</td>
            <td class="text-center">yes</td>
            <td class="text-center">&mdash;</td>
            <td>List of freelancer ids to be blocked.</td>
          </tr>
        </tbody>
      </table>
      <p class="api-paragraph">
        Example response
      </p>
      <pre class="api-request">
        {
          "ok": true,
          "message": "Freelancers blocked and removed from all lists successfully."
        }
      </pre>

      <a id="lists-unblock-workers" class="api-anchor"></a>
      <h4 class="api-subtopic">Unblock Freelancers</h4>
      <p class="api-paragraph">
        Unblock one or more freelancers.
      </p>
      <pre class="api-request">
        POST https://sproutgigs.com/api/lists/unblock-workers.php</pre>
      <p class="api-paragraph">
        Example request
      </p>
      <pre class="api-request">
        POST /api/lists/unblock-workers.php HTTP/1.1
        Host: sproutgigs.com
        Authorization: Basic dXNlcl9pZDphcGlfc2VjcmV0
        Content-Type: application/json

        {
          "workers": ["0de178af", "ffcc1278", "abcd0129"]
        }
      </pre>
      <p>The following attributes are available:</p>
      <table class="table table-responsive">
        <thead>
          <tr>
            <th>Attribute</th>
            <th class="text-center">Type</th>
            <th class="text-center">Required?</th>
            <th class="text-center">Default</th>
            <th>Description</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><code>workers</code></td>
            <td class="text-center">string array</td>
            <td class="text-center">yes</td>
            <td class="text-center">&mdash;</td>
            <td>List of freelancer ids to be unblocked.</td>
          </tr>
        </tbody>
      </table>
      <p class="api-paragraph">
        Example response
      </p>
      <pre class="api-request">
        {
          "ok": true,
          "message": "Freelancers unblocked successfully."
        }
      </pre>

      <!-- USER -->
      <a id="users" class="api-anchor"></a>
      <h3 class="api-topic">Users</h3>
      <p class="api-paragraph">
        Get information about your user.
      </p>

      <a id="users-balances" class="api-anchor"></a>
      <h4 class="api-subtopic">Balances Endpoint</h4>
      <p class="api-paragraph">
        Get the balances from your user.
      </p>
      <pre class="api-request">
        GET https://sproutgigs.com/api/users/get-balances.php</pre>
      <p class="api-paragraph">
        Example request
      </p>
      <pre class="api-request">
        GET /api/users/get-balances.php HTTP/1.1
        Host: sproutgigs.com
        Authorization: Basic dXNlcl9pZDphcGlfc2VjcmV0
        Content-Type: application/json
      </pre>
      <p class="api-paragraph">
        Example response
      </p>
      <pre class="api-request">
        {
          "earned": "0.4200",
          "spendable": "3.3482"
        }
      </pre>

      <!-- WEBHOOKS -->
      <a id="webhooks" class="api-anchor"></a>
      <h3 class="api-topic">Webhooks</h3>
      <p class="api-paragraph">
        Get notified when certain events happen.
      </p>

      <a id="webhook-submitted-tasks" class="api-anchor"></a>
      <h4 class="api-subtopic">Submitted Tasks</h4>
      <p class="api-paragraph">
        Receive a postback when freelancers submit tasks to your jobs.
        It runs every minute and will send the list of task ids submitted for each jobin that period.
        In case the URL defined does not return a 200 HTTP code response, the system will retry sending the list of task ids every 5 minutes for 24 hours.
        After that, it will stop trying to send the task ids.<br><br>
        Go to <a href="/account.php">Account > Settings</a> to define the URL to receive postbacks whenever freelancers submit tasks to your jobs and leave it blank to stop the postback.
      </p>
      <p>The following attributes are available:</p>
      <table class="table table-responsive">
        <thead>
          <tr>
            <th>Attribute</th>
            <th class="text-center">Type</th>
            <th>Description</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><code>job_id</code></td>
            <td class="text-center">string array</td>
            <td>List of submitted tasks. Example: ["99900012abcd1f", "99923817f2bce4", "99924617ab23df"]
            </td>
          </tr>
        </tbody>
      </table>
      <p class="api-paragraph">
        Example postback parameters sent:
      </p>
      <pre class="api-request">
        {
          "abc123dfae98": ["99900012abcd1f", "99923817f2bce4", "99924617ab23df"],
          "09876abce173": ["81204582ff321c", "84671036ccdefc"]
        }
      </pre>
    </div>
  </section>
</div>

                        <footer class="footer mt-auto">
  <div class="container-fluid container-fluid--max">
    <div class="footer__top d-lg-flex align-lg-items-center">
      <a href="/browse-gigs.php">
        <img src="/assets/images/logo-sg.svg" alt="SproutGigs" class="navbar-brand__regular d-none">
        <img src="/assets/images/logo-sg-light.svg" alt="SproutGigs" class="navbar-brand__dark-mode">
      </a>
      <ul class="footer__nav nav ml-auto">
        <li class="nav-item"><a href="/referral-program.php" class="nav-link"><span>Referral Program</span></a></li>
        <li class="nav-item"><a href="/faq.php" class="nav-link"><span>FAQ</span></a></li>
        <li class="nav-item"><a href="/faq.php#our-rules" class="nav-link"><span>Rules</span></a></li>
        <li class="nav-item"><a href="/api/documentation.php" class="nav-link"><span>API docs</span></a></li>
        <li class="nav-item"><a href="/terms.php" class="nav-link"><span>Terms of Use</span></a></li>
        <li class="nav-item"><a href="/privacy.php" class="nav-link"><span>Privacy Policy</span></a></li>
        <li class="nav-item"><a href="/tickets.php" class="nav-link"><span>Support Help</span></a></li>
      </ul>
    </div>
    <div class="footer__bottom d-flex justify-content-center pt-0 pb-2 justify-content-md-end">
      <div class="setting-toggle align-items-center d-flex flex-nowrap">
  <span class="mr-2">darkmode</span>
        <span>off</span>
        <div id="darkModeToggle" class="zawp-toggle zawp-toggle--checked-last not-functional mx-2 switch-darkmode" data-change-darkmode-to="off"><span class="zawp-toggle__switch m-0"></span></div>
      <span>on</span>
  </div>

    </div>
    <div class="footer__bottom d-md-flex align-items-center justify-content-between">
      <p class="text-muted mb-md-0">&copy; 2024 SproutGigs.com. All Rights Reserved.</p>
      <div class="social">
        <a href="/tickets.php"><i class="fas fa-envelope"></i></a>
        <a href="https://www.facebook.com/groups/sproutgigs/" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook-square"></i></a>
        <a href="https://twitter.com/sproutgigs" target="_blank" rel="noopener noreferrer"><i class="fab fa-twitter"></i></a>
        <a href="https://www.reddit.com/r/SproutGigs" target="_blank" rel="noopener noreferrer"><i class="fab fa-reddit-square"></i></a>
        <a href="https://www.linkedin.com/company/sproutgigs/" target="_blank" rel="noopener noreferrer"><i class="fab fa-linkedin"></i></a>
      </div>
    </div>
    <div class="row mt-3 pl-4">
      <span class="text-muted text-sm">47 U.S. Code § 230 Disclaimer: SproutGigs shall not be treated as the publisher or speaker of any information provided by job publishers.</span>
    </div>
  </div>
</footer>

              </div>

        <script src="https://js.stripe.com/v3"></script>
        <script type="text/javascript">
            if (self == top) {
                document.getElementsByTagName('body')[0].style.display='block';
            } else {
                top.location = self.location;
            }
        </script>

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-141600439-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'UA-141600439-1');
                        gtag('set', {'user_id': '2bbff89f'});
                    </script>

            <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"8d5a74d7acd54497","serverTiming":{"name":{"cfExtPri":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}},"version":"2024.10.1","token":"8ab37f5b1f244daa9b89bb0f45eba75c"}' crossorigin="anonymous"></script>
</body>
</html>
