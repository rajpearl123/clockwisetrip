<header data-add-bg="bg-red-1" class="header bg-green js-header" data-x="header" data-x-toggle="is-menu-opened">
  <div data-anim="fade" class="header__container px-20 sm:px-20">
    <div class="row justify-between items-center">
      <div class="col-auto">
        <div class="d-flex items-center">
          <a href="{{ url('/') }}" class="header-logo mr-20" data-x="header-logo" data-x-toggle="is-logo-dark">
            <img src="{{ asset('front/img/logo/logo_3.png') }}" alt="logo icon">
            <img src="{{ asset('front/img/logo/logo_3.png') }}" alt="logo icon">
          </a>
        </div>
      </div>
      <div class="col-auto">
        <div class="d-flex items-center">
          <div class="row x-gap-20 items-center lg:d-none">
            <div class="col-auto">  
              <button class="d-flex items-center text-16 text-white" data-x-click="currency">
                <span class="js-currencyMenu-mainTitle">INR</span>
                <!-- <i class="icon-chevron-sm-down text-7 ml-10"></i> -->
              </button>
            </div>
            <div class="col-auto">
              <div class="w-1 h-20 bg-white-20"></div>
            </div>
            <div class="col-auto">
              <button class="d-flex items-center text-16 text-white" data-x-click="lang">
                <img src="{{ asset('front/img/general/india.png') }}" alt="image" class="rounded-full mr-10" height="20" width="20">
                <span class="js-language-mainTitle ">India</span>
                <!-- <i class="icon-chevron-sm-down text-7 ml-15"></i> -->
              </button>
            </div>
          </div>
          <div class="d-flex items-center ml-20 is-menu-opened-hide lg:d-none">
            <a href="{{ url('get-property') }}" class="button px-20 fw-400 text-16 -white bg-white h-50 text-dark-1">List Your Property</a>
            @if (Auth::check())
            <div class="button px-20 fw-400 text-16 border-white -outline-white h-50 text-white ml-20">
              <div class="user-dropdown">
                <div class="d-flex align-items-center gap-2">
                  <div class="user-icon">
                    <i class="fas fa-user-circle " style="font-size: 25px;"></i> <!-- Correct Font Awesome user icon -->
                  </div>
                  <div class="user-name">
                   @auth
              {{ Auth::user()->name }}
               @else
             Guest
              @endauth
                    <span class="dropdown-arrow">&#9662;</span> <!-- Dropdown arrow -->
                  </div>
                </div>
                <div class="dropdown-menu" style="margin-right: 100px;">
                  <ul>
                    <li><a href="{{route('user.profile')}}">Dashboard</a></li>
                    <li><a href="{{route('logout')}}">Sign Out</a></li>
                  </ul>
                </div>
              </div>
            </div>
            @else
            <a href="{{ route('register') }}" class="button px-20 fw-400 text-16 border-white -outline-white h-50 text-white ml-20">Sign In / Register</a>
            @endif
          </div>
          <div class="d-none lg:d-flex x-gap-20 items-center text-white" data-x="header-mobile-icons" data-x-toggle="text-white">
            <div>
              <a href="#!" class="d-flex items-center text-inherit text-22 mobile_profileBtn">
                <div class="d-flex align-items-center gap-1 ">
                  <div class="user-icon">
                    <i class="fas fa-user-circle " style="font-size: 25px;"></i>
                  </div>
                  <div class="user-name">
                    {{ auth()->check() ? auth()->user()->name : 'Guest' }}

                    <!-- <span class="dropdown-arrow">&#9662;</span>  -->
                  </div>
                </div>
              </a>
            </div>
            <div><button class="d-flex items-center icon-menu text-inherit text-20" data-x-click="html, header, header-logo, header-mobile-icons, mobile-menu"></button></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="mobile-menu" id="mobileMenu">
    <!-- <div class="mobile-menu-header">
      <a href="index.html" class="header-logo mr-20" data-x="header-logo" data-x-toggle="is-logo-dark">
        <img src="{{ asset('front/img/logo/chockwisehotel_logo.png') }}" alt="logo icon">
        <img src="{{ asset('front/img/logo/chockwisehotel_logo.png') }}" alt="logo icon">
      </a>
    </div> -->
    <div class="col-auto">
      <div class="d-block">
        <div class="row x-gap-20 items-center mb-20">
          <div class="col-auto">
            <button class="d-flex items-center text-16 text-white" data-x-click="currency">
              <span class="js-currencyMenu-mainTitle">INR</span>
              <i class="icon-chevron-sm-down text-7 ml-10"></i>
            </button>
          </div>
          <div class="col-auto">
            <div class="w-1 h-20 bg-white-20"></div>
          </div>
          <div class="col-auto">
            <button class="d-flex items-center text-16 text-white" data-x-click="lang">
              <img src="{{ asset('front/img/general/india.png') }}" alt="image" class="rounded-full mr-10" height="20" width="20">
              <span class="js-language-mainTitle ">India</span>
              <i class="icon-chevron-sm-down text-7 ml-15"></i>
            </button>
          </div>
        </div>
        <div class="d-flex items-center">
          <a href="{{ url('get-property') }}" class="button px-20 fw-400 text-16 -white bg-white h-50 text-dark-1">List Your Property</a>
          <a href="{{ route('register') }}" class="button px-20 fw-400 text-16 border-white -outline-white h-50 text-white ml-20">Sign In / Register</a>
        </div>
        <div class="d-none xxl:d-none xl:d-flex x-gap-20 items-center  text-white" data-x="header-mobile-icons" data-x-toggle="text-white">
          <div><a href="#!" class="d-flex items-center icon-user text-inherit text-22"></a></div>
          <div><button class="d-flex items-center icon-menu text-inherit text-20" data-x-click="html, header, header-logo, header-mobile-icons, mobile-menu"></button></div>
        </div>
      </div>
    </div>
  </div>
</header>