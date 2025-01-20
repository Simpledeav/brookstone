<!DOCTYPE html>
<html data-wf-domain="www.brookstonecm.com" data-wf-page="623208af18993055866f074f" data-wf-site="60f88e4b0ddb8e1d95163233">
   
   <head>
      <meta charset="utf-8"/>
      <title>Financial Advisor Asset Management Platform | Brookstone</title>
      <meta content="Brookstone helps independent investment advisors grow their business and AUM by providing financial advisors with a turnkey asset management platform." name="description"/>
      <meta content="Financial Advisor Asset Management Platform | Brookstone" property="og:title"/>
      <meta content="Brookstone helps independent investment advisors grow their business and AUM by providing financial advisors with a turnkey asset management platform." property="og:description"/>
      <meta content="Financial Advisor Asset Management Platform | Brookstone" property="twitter:title"/>
      <meta content="Brookstone helps independent investment advisors grow their business and AUM by providing financial advisors with a turnkey asset management platform." property="twitter:description"/>
      <meta property="og:type" content="website"/>
      <meta content="summary_large_image" name="twitter:card"/>
      <meta content="width=device-width, initial-scale=1" name="viewport"/>
      <link href="https://cdn.prod.website-files.com/60f88e4b0ddb8e1d95163233/css/brookstonecm.0e30362f4.min.css" rel="stylesheet" type="text/css"/>
      <link href="https://fonts.googleapis.com/" rel="preconnect"/>
      <link href="https://fonts.gstatic.com/" rel="preconnect" crossorigin="anonymous"/>
      <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
      <script type="text/javascript">WebFont.load({  google: {    families: ["Rubik:regular,italic,500,500italic,700,700italic","Inter:100,200,regular,700"]  }});</script>
      <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
      <link href="https://cdn.prod.website-files.com/60f88e4b0ddb8e1d95163233/612d65266a5e360eef0892ea_brookstone_favicon.png" rel="shortcut icon" type="image/x-icon"/>
      <link href="https://cdn.prod.website-files.com/60f88e4b0ddb8e1d95163233/612d6562846737a3790aceec_brookstone_webclip.png" rel="apple-touch-icon"/>

      
      <style>
         body{
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
         }
      </style>
    @php $user = App\Models\User::find(auth()->id()); @endphp
   </head>
   <body>

   <div id="Top" class="navbar-container-dark">
         <div class="toolbar-container-dark">
            <div class="container toolbar">
                @if($user)
                    <div class="user-menu-copy">
                        <a href="{{ route('dashboard') }}" class="toolbar-item-dark"> Dashboard</a>
                    </div>
                @else
                    <div class="user-menu-copy">
                        <a href="{{ route('login') }}" class="toolbar-item-dark">Login</a>
                        <a href="{{ route('register') }}" class="toolbar-item-dark"> Register</a>
                    </div>
                @endif
            </div>
         </div>
         <div class="container-copy">
            <div data-collapse="medium" data-animation="default" data-duration="400" data-easing="ease" data-easing2="ease" role="banner" class="navbar-copy nav-individual-investors w-nav">
               <a href="{{ route('home') }}" aria-current="page" class="navbar-logo w-nav-brand w--current"><img src="https://cdn.prod.website-files.com/60f88e4b0ddb8e1d95163233/60f89738fb94ad8c69fab365_brookstone_logoFULL_WHITE_2021.svg" width="200" alt="Brookstone Capital Management"/></a>
               <nav role="navigation" class="nav-menu w-nav-menu">
                  <div class="div-block-3">
                     <div data-delay="0" data-hover="true" class="dropdown-2 w-dropdown">
                        <div class="nav-link w-dropdown-toggle">
                           <div class="text-white-copy mobile-nav-link-copy">Solutions</div>
                        </div>
                        <nav class="dropdown-list dropdown-list-top dropdown-footer w-dropdown-list">
                            <a href="{{ route('solution') }}" class="dropdown-link w-dropdown-link">Scale your practice</a>
                            <a href="{{ route('platform') }}" class="dropdown-link w-dropdown-link">Technology</a>
                            <a href="{{ route('investment') }}" class="dropdown-link w-dropdown-link">Investments</a>
                            <a href="{{ route('turnkey') }}" class="dropdown-link w-dropdown-link">Turnkey marketing</a>
                            <a href="{{ route('service') }}" class="dropdown-link w-dropdown-link">Back-office support</a>
                            <a href="{{ route('financial') }}" class="dropdown-link w-dropdown-link">Financial Planning</a>
                        </nav>
                     </div>
                     <a href="{{ route('traning') }}" class="white-top-level-nav-link-copy">Advisor Training</a>
                     <div data-delay="0" data-hover="true" class="dropdown-3 w-dropdown">
                        <div class="nav-link w-dropdown-toggle">
                           <div class="text-white-copy mobile-nav-link-copy">Resources</div>
                        </div>
                        <nav class="dropdown-list dropdown-list-top dropdown-footer w-dropdown-list">
                           <div class="w-dyn-list">
                              <div role="list" class="w-dyn-items">
                                 <div role="listitem" class="w-dyn-item"><a href="{{ route('advisor') }}" class="dropdown-link w-condition-invisible w-dropdown-link">Advisor Resources</a><a href="{{ route('solution') }}" class="dropdown-link w-condition-invisible w-dropdown-link">Advisor Training</a><a href="news.html" class="dropdown-link w-condition-invisible w-dropdown-link">News</a></div>
                                 <div role="listitem" class="w-dyn-item"><a href="{{ route('traning') }}" class="dropdown-link w-dropdown-link">Advisor Resources</a>
                                 <a href="{{ route('market') }}" class="dropdown-link w-dropdown-link">Market Analysis</a>
                                 <a href="{{ route('news') }}" class="dropdown-link w-dropdown-link">News</a>
                                </div>
                              </div>
                           </div>
                           <div class="dropdown-list-footer">
                              <div class="dropdown-link-pair">
                                 <a href="news.html" class="dropdown-link-text">View all</a>
                                 <div class="resources-badge badge-small bg-primary-2">New</div>
                              </div>
                           </div>
                        </nav>
                     </div>
                     <div data-delay="0" data-hover="true" class="dropdown-4 w-dropdown">
                        <div class="nav-link w-dropdown-toggle">
                           <div class="text-white-copy mobile-nav-link-copy">Company</div>
                        </div>
                        <nav class="dropdown-list dropdown-list-top dropdown-footer w-dropdown-list">
                            <a href="{{ route('about') }}" class="dropdown-link w-dropdown-link">About us</a>
                            <a href="{{ route('testimonial') }}" class="dropdown-link">Testimonials</a>
                            <a href="{{ route('press') }}" class="dropdown-link">Press</a>
                            <a href="https://www.brookstoneam.com/" target="_blank" class="dropdown-link">Brookstone Asset Management</a>
                            <a href="https://www.brookstoneinsurancegroup.com/" target="_blank" class="dropdown-link">Brookstone Insurance Group</a>
                            <a href="{{ route('demo') }}" class="dropdown-link">Contact us</a>
                        </nav>
                     </div>
                     <a href="{{ route('login') }}" class="button-nav-main-copy navbar-button-copy w-inline-block">
                        <div class="nav-button-text-white">Are you a client?</div>
                        <img src="https://cdn.prod.website-files.com/60f88e4b0ddb8e1d95163233/62c4ad6f9efc0fec178d7d07_white-arrow-right.svg" loading="eager" alt="White arrow pointing right" class="nav-button-arrow-white"/>
                     </a>
                  </div>
               </nav>
               <div class="nav-buttons-container-copy">
                  <a href="{{ route('login') }}" class="button-nav-main navbar-button-copy w-inline-block">
                     <div class="nav-button-text-white">Are you a client?</div>
                     <img src="https://cdn.prod.website-files.com/60f88e4b0ddb8e1d95163233/62c4ad6f9efc0fec178d7d07_white-arrow-right.svg" loading="eager" alt="Are you a client button" class="nav-button-arrow-white"/>
                  </a>
                  <div data-w-id="cb3f89f8-4d03-bb65-c934-08d37d60789c" class="menu-button w-nav-button"><img src="https://cdn.prod.website-files.com/60f88e4b0ddb8e1d95163233/60f88e4b0ddb8e48081632e1_icon-menu-light.svg" alt="dropdown menu icon" class="menu-button-toggle"/><img src="https://cdn.prod.website-files.com/60f88e4b0ddb8e1d95163233/60f88e4b0ddb8e88471632e3_icon-x-light.svg" alt="exit icon white" class="menu-button-cross"/></div>
               </div>
            </div>
         </div>
      </div>



      @yield('content')


      <!-- Smartsupp Live Chat script -->
      <script type="text/javascript">
         var _smartsupp = _smartsupp || {};
         _smartsupp.key = '9c14b6a6277136b3074bb05c3b45b39f0b87d0d8';
         window.smartsupp||(function(d) {
         var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
         s=d.getElementsByTagName('script')[0];c=d.createElement('script');
         c.type='text/javascript';c.charset='utf-8';c.async=true;
         c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
         })(document);
      </script>

      <div class="footer">
         <div class="container">
            <div class="footer-row">
               <div class="footer-info">
                  <a href="index.html" aria-current="page" class="footer-logo-link w-inline-block w--current"><img src="https://cdn.prod.website-files.com/60f88e4b0ddb8e1d95163233/60f89753ce8105038912ef68_brookstone_logoFULL_2021.svg" width="240" alt="Brookstone Capital Management logo"/></a>
                  <p class="disclosure-text footer-description">Brookstone Capital Management, LLC and its representatives are in compliance with the current filing requirements as required by those states in which Brookstone Capital Management, LLC maintains clients. Brookstone Capital Management, LLC may only transact business in those states in which it is registered or qualifies for an exemption or exclusion from registration requirements.</p>
                  <p class="disclosure-text footer-description">(630) 653-1400<br/>1745 S Naperville Rd, Wheaton, IL 60189</p>
                  <div class="social-links"><a href="https://www.facebook.com/brookstonecm" target="_blank" class="social-link w-inline-block"><img src="https://cdn.prod.website-files.com/60f88e4b0ddb8e1d95163233/60f88e4b0ddb8eafb8163277_facebook.svg" alt="Facebook logo"/></a><a href="https://www.linkedin.com/company/brookstone-capital-management" target="_blank" class="social-link w-inline-block"><img src="https://cdn.prod.website-files.com/60f88e4b0ddb8e1d95163233/613939379270cde73c3cf404_linkedin.svg" width="24" alt="LinkedIn logo"/></a></div>
               </div>
               <div class="footer-menus-row">
                  <div class="footer-menu-column">
                     <h6 class="h6-small">For Advisors</h6>
                     <ul role="list" class="link-menu w-list-unstyled">
                        <li class="link-menu-item"><a href="{{ route('solution') }}" class="footer-link">Solutions</a></li>
                        <li class="link-menu-item"><a href="{{ route('platform') }}" class="footer-link">Platform</a></li>
                        <li class="link-menu-item"><a href="{{ route('traning') }}" class="footer-link">Training</a></li>
                        <li class="link-menu-item"><a href="{{ route('turnkey') }}" class="footer-link">Marketing</a></li>
                        <li class="link-menu-item"><a href="{{ route('advisor') }}" class="footer-link">Advisor Resources</a></li>
                     </ul>
                     <a href="{{ route('investment') }}" class="footer-link">Investments</a>
                  </div>
                  <div class="footer-menu-column">
                     <h6 class="h6-small">Company</h6>
                     <ul role="list" class="link-menu w-list-unstyled">
                        <li class="link-menu-item"><a href="{{ route('press') }}" class="footer-link">Press</a></li>
                        <li class="link-menu-item"><a href="{{ route('about') }}" class="footer-link">About us</a></li>
                        <li class="link-menu-item"><a href="{{ route('demo') }}" class="footer-link">Contact us</a></li>
                        <li class="link-menu-item"><a href="{{ route('testimonial') }}" class="footer-link">Testimonials</a></li>
                     </ul>
                  </div>
                  <div class="footer-menu-column">
                     <h6 class="h6-small">Account Access</h6>
                     <ul role="list" class="link-menu w-list-unstyled">
                        <li class="link-menu-item"><a href="{{ route('login') }}" class="footer-link">Advisor Portal</a></li>
                        <li class="link-menu-item"><a href="{{ route('crypto') }}" target="_blank" class="footer-link">Crypto</a></li>
                        <li class="link-menu-item"><a href="{{ route('crypto') }}" class="footer-link">Stocks</a></li>
                        <li class="link-menu-item"><a href="{{ route('register') }}" class="footer-link">Advisor login</a></li>
                     </ul>
                     <a href="{{ route('dashboard') }}" class="footer-link">Individual clients</a>
                  </div>
                  <div class="footer-menu-column">
                     <h6 class="h6-small">Legal</h6>
                     <ul role="list" class="link-menu w-list-unstyled">
                        <li class="link-menu-item"><a href="{{ route('privacy') }}" class="footer-link">Privacy</a></li>
                        <li class="link-menu-item"><a href="{{ route('terms') }}" class="footer-link">Terms</a></li>
                        <li class="link-menu-item"><a href="{{ asset('PDF/ADV-BS.pdf') }}" target="_blank" class="footer-link">Form ADV</a></li>
                        <li class="link-menu-item"><a href="{{ asset('PDF/Wrap-BS.pdf') }}" target="_blank" class="footer-link">Wrap brochure</a></li>
                        <li class="link-menu-item"><a href="{{ asset('PDF/Form-BS.pdf') }}" class="footer-link">Form CRS</a></li>
                        <li class="link-menu-item"><a href="{{ asset('PDF/Business-BS.pdf') }}" target="_blank" class="footer-link">Business Continuity <br/>Plan Summary</a></li>
                     </ul>
                  </div>
               </div>
            </div>
            <div>
               <div class="text-small">© 2024 Brookstone Capital Management</div>
            </div>
         </div>
      </div>
      <header data-w-id="31a58d08-14b1-cd0c-9506-180401f38f5a" class="back-to-top-copy"><a href="#Top" class="button button-round back-to-top-button w-inline-block"><img src="https://cdn.prod.website-files.com/60f88e4b0ddb8e1d95163233/60f88e4b0ddb8e331b1632e6_icon-arrow-up-light.svg" alt="White arrow pointing up"/></a></header>
      <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=60f88e4b0ddb8e1d95163233" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script><script src="https://cdn.prod.website-files.com/60f88e4b0ddb8e1d95163233/js/brookstonecm.47c0d2205.js" type="text/javascript"></script><script type="text/javascript" src="https://th351.infusionsoft.app/app/webTracking/getTrackingCode"></script>
   </body>
</html>



