@if(session('t-success'))
<script>
    toastr.success("{{ session('t-success') }}");
</script>
@endif

<!-- Check if there is an error message and display the error toast -->
@if(session('t-error'))
<script>
    toastr.error("{{ session('t-error') }}");
</script>
@endif


<div class="header-wrapper row m-0">
    <div class="header-logo-wrapper col-auto p-0">
      <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
      <div class="logo-header-main"><a href="#"><img class="img-fluid for-light img-100" src="../assets/images/logo/logo2.png" alt=""><img class="img-fluid for-dark" src="{{asset('/backend/assets/images/logo/logo.png')}}" alt=""></a></div>
    </div>
    <div class="left-header col horizontal-wrapper ps-0">
      <div class="left-menu-header">
        <ul class="app-list">
          <li class="onhover-dropdown">
            <div class="app-menu"> <i data-feather="folder-plus"></i></div>
            <ul class="onhover-show-div left-dropdown">
              <li> <a href="#">File Manager</a></li>
              <li> <a href="#"> Kanban board</a></li>
              <li> <a href="#"> Social App</a></li>
              <li> <a href="#"> Bookmark</a></li>
            </ul>
          </li>
        </ul>
        <ul class="header-left">
          <li class="onhover-dropdown"><span class="f-w-600">Dashboard</span><span><i class="middle" data-feather="chevron-down"></i></span>
            <ul class="onhover-show-div left-dropdown">
              <li> <a href="#">Default</a></li>
              <li> <a href="#"> Ecommerce</a></li>
            </ul>
          </li>
          <li class="onhover-dropdown"><span class="f-w-600">Package</span><span><i class="middle" data-feather="chevron-down"></i></span>
            <ul class="onhover-show-div left-dropdown">
              <li class="flyout-right"><a href="javascript:void(0)">Package</a>
                <ul>
                  <li> <a href="#">Package List</a></li>
                  <li> <a href="#">Package Create</a></li>
                  <li> <a href="#">Package Edit</a></li>
                </ul>
              </li>
              <li><a href="#">File manager</a></li>
              <li><a href="#">kanban</a></li>
              <li class="flyout-right"><a href="javascript:void(0)">Ecommerce</a>
                <ul>
                  <li> <a href="#">Product</a></li>
                  <li> <a href="#">Product Page</a></li>
                  <li> <a href="#">Product List</a></li>
                  <li> <a href="#">Payment Details</a></li>
                  <li> <a href="#">Order History</a></li>
                  <li> <a href="#">Invoice</a></li>
                  <li> <a href="#">Cart</a></li>
                  <li> <a href="#">Wishlist</a></li>
                  <li> <a href="#">Checkout</a></li>
                  <li> <a href="#">Pricing </a></li>
                </ul>
              </li>
              <li class="flyout-right"><a href="javascript:void(0)">Email</a>
                <ul>
                  <li> <a href="#">Mail Inbox</a></li>
                  <li> <a href="#">Read Mail</a></li>
                  <li> <a href="#">Compose</a></li>
                </ul>
              </li>
              <li class="flyout-right"><a href="javascript:void(0)">Chat</a>
                <ul>
                  <li> <a href="#">Chat App</a></li>
                  <li> <a href="#">Video Chat</a></li>
                </ul>
              </li>
              <li class="flyout-right"><a href="javascript:void(0)">Users</a>
                <ul>
                  <li> <a href="#">User Profile</a></li>
                  <li> <a href="#">Users Edit</a></li>
                  <li> <a href="#">User Cards</a></li>
                </ul>
              </li>
              <li><a href="#">Bookmarks</a></li>
              <li><a href="#">Contacts</a></li>
              <li><a href="#">Social App</a></li>
            </ul>
          </li>
          <li class="onhover-dropdown"> <span class="f-w-600">More pages</span><span><i class="middle" data-feather="chevron-down"></i></span>
            <ul class="onhover-show-div left-dropdown">
              <li><a href="#">Landing Page</a></li>
              <li><a href="#">Sample Page</a></li>
              <li><a href="#">Internationalization</a></li>
              <li class="flyout-right"><a href="javascript:void(0)">Starter-Kit</a>
                <ul>
                  <li class="flyout-right"><a href="javascript:void(0)">Color version</a>
                    <ul>
                      <li> <a href="#">Layout Light</a></li>
                      <li> <a href="#">Layout Dark</a></li>
                    </ul>
                  </li>
                  <li class="flyout-right"><a href="javascript:void(0)">Page Layout</a>
                    <ul>
                      <li> <a href="#">Boxed</a></li>
                      <li> <a href="#">RTL</a></li>
                    </ul>
                  </li>
                  <li> <a href="#">Hide Menu On Scroll</a></li>
                  <li class="flyout-right"><a href="javascript:void(0)">Footers</a>
                    <ul>
                      <li> <a href="#">Footer Light</a></li>
                      <li> <a href="#">Footer Dark </a></li>
                      <li> <a href="#">Footer Fixed</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
    <div class="nav-right col-6 pull-right right-header p-0">
      <ul class="nav-menus">
        <li>
          <div class="right-header ps-0">
            <div class="input-group">
              <div class="input-group-prepend"><span class="input-group-text mobile-search"><i class="fa fa-search"></i></span></div>
              <input class="form-control" type="text" placeholder="Search Here........">
            </div>
          </div>
        </li>
        <li class="serchinput">
          <div class="serchbox"><i data-feather="search"></i></div>
          <div class="form-group search-form">
            <input type="text" placeholder="Search here...">
          </div>
        </li>
        <li>
          <div class="mode"><i class="fa fa-moon-o"></i></div>
        </li>
        <li class="onhover-dropdown">
          <div class="notification-box"><i data-feather="bell"></i></div>
          <ul class="notification-dropdown onhover-show-div">
            <li><i data-feather="bell">            </i>
              <h6 class="f-18 mb-0">Notitications</h6>
            </li>
            <li>
              <div class="d-flex align-items-center">
                <div class="flex-shrink-0"><i data-feather="truck"></i></div>
                <div class="flex-grow-1">
                  <p><a href="#">Delivery processing </a><span class="pull-right">6 hr</span></p>
                </div>
              </div>
            </li>
            <li>
              <div class="d-flex align-items-center">
                <div class="flex-shrink-0"><i data-feather="shopping-cart"></i></div>
                <div class="flex-grow-1">
                  <p><a href="#">Order Complete</a><span class="pull-right">3 hr</span></p>
                </div>
              </div>
            </li>
            <li>
              <div class="d-flex align-items-center">
                <div class="flex-shrink-0"><i data-feather="file-text"></i></div>
                <div class="flex-grow-1">
                  <p><a href="#">Tickets Generated</a><span class="pull-right">1 hr</span></p>
                </div>
              </div>
            </li>
            <li>
              <div class="d-flex align-items-center">
                <div class="flex-shrink-0"><i data-feather="send"></i></div>
                <div class="flex-grow-1">
                  <p><a href="#">Delivery Complete</a><span class="pull-right">45 min</span></p>
                </div>
              </div>
            </li>
            <li><a class="btn btn-primary" href="javascript:void(0)">Check all notification</a></li>
          </ul>
        </li>
        <li class="onhover-dropdown">
          <div class="message"><i data-feather="message-square"></i></div>
          <ul class="message-dropdown onhover-show-div">
            <li><i data-feather="message-square">            </i>
              <h6 class="f-18 mb-0">Messages</h6>
            </li>
            <li>
              <div class="d-flex align-items-start">
                <div class="message-img bg-light-primary"><img src="../assets/images/user/3.jpg" alt=""></div>
                <div class="flex-grow-1">
                  <h5 class="mb-1"><a href="#">Emay Walter</a></h5>
                  <p>Do you want to go see movie?</p>
                </div>
                <div class="notification-right"><i data-feather="x"></i></div>
              </div>
            </li>
            <li>
              <div class="d-flex align-items-start">
                <div class="message-img bg-light-primary"><img src="../assets/images/user/6.jpg" alt=""></div>
                <div class="flex-grow-1">
                  <h5 class="mb-1"><a href="#">Jason Borne</a></h5>
                  <p>Thank you for rating us.</p>
                </div>
                <div class="notification-right"><i data-feather="x"></i></div>
              </div>
            </li>
            <li>
              <div class="d-flex align-items-start">
                <div class="message-img bg-light-primary"><img src="../assets/images/user/10.jpg" alt=""></div>
                <div class="flex-grow-1">
                  <h5 class="mb-1"><a href="#">Sarah Loren</a></h5>
                  <p>What`s the project report update?</p>
                </div>
                <div class="notification-right"><i data-feather="x"></i></div>
              </div>
            </li>
            <li><a class="btn btn-primary" href="#">Check Messages</a></li>
          </ul>
        </li>
        <li class="maximize"><a href="#!" onclick="javascript:toggleFullScreen()"><i data-feather="maximize-2"></i></a></li>
        <li class="language-nav">
          <div class="translate_wrapper">
            <div class="current_lang">
              <div class="lang"><i data-feather="globe"></i></div>
            </div>
            <div class="more_lang">
              <div class="lang selected" data-value="en"><i class="flag-icon flag-icon-us"></i><span class="lang-txt">English<span> (US)</span></span></div>
              <div class="lang" data-value="de"><i class="flag-icon flag-icon-de"></i><span class="lang-txt">Deutsch</span></div>
              <div class="lang" data-value="es"><i class="flag-icon flag-icon-es"></i><span class="lang-txt">Espa&ntilde;ol</span></div>
              <div class="lang" data-value="fr"><i class="flag-icon flag-icon-fr"></i><span class="lang-txt">Fran&ccedil;ais</span></div>
              <div class="lang" data-value="pt"><i class="flag-icon flag-icon-pt"></i><span class="lang-txt">Portugu&ecirc;s<span> (BR)</span></span></div>
              <div class="lang" data-value="cn"><i class="flag-icon flag-icon-cn"></i><span class="lang-txt">&#x7B80;&#x4F53;&#x4E2D;&#x6587;</span></div>
              <div class="lang" data-value="ae"><i class="flag-icon flag-icon-ae"></i><span class="lang-txt">&#x644;&#x639;&#x631;&#x628;&#x64A;&#x629; <span> (ae)</span></span></div>
            </div>
          </div>
        </li>
        <li class="profile-nav onhover-dropdown">
          <div class="account-user"><i data-feather="user"></i></div>
          <ul class="profile-dropdown onhover-show-div">
            <li><a href="#"><i data-feather="user"></i><span>Account</span></a></li>
            <li><a href="#"><i data-feather="mail"></i><span>Inbox</span></a></li>
            <li><a href="#"><i data-feather="settings"></i><span>Settings</span></a></li>
            <li><a href="#"><i data-feather="log-in"> </i><span>Log in</span></a></li>
          </ul>
        </li>
      </ul>
    </div>
    <script class="result-template" type="text/x-handlebars-template">
      <div class="ProfileCard u-cf">
      <div class="ProfileCard-avatar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></div>
      <div class="ProfileCard-details">
      {{-- <div class="ProfileCard-realName">{{name}}</div> --}}
      </div>
      </div>
    </script>
    <script class="empty-template" type="text/x-handlebars-template"><div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div></script>
  </div>
