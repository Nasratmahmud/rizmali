<!doctype html>
<html lang="en" dir="ltr">
  <head>
      <title>@yield('title')</title>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="tivo admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
      <meta name="keywords" content="admin template, Tivo admin template, dashboard template, flat admin template, responsive admin template, web app">
      <meta name="author" content="pixelstrap">
      <link rel="icon" href="{{asset('/backend/assets/images/favicon/favicon.png')}}" type="image/x-icon">
      <link rel="shortcut icon" href="{{asset('/backend/assets/images/favicon/favicon.png')}}" type="image/x-icon">
      <title>Tivo - Premium Admin Template</title><link rel="preconnect" href="https://fonts.googleapis.com/">
      <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">

      @include('backend.partials.styles')
  </head>

  <body onload="startTime()">
      <!-- tap on top starts-->
      <div class="tap-top"><i data-feather="chevrons-up"></i></div>
      <!-- tap on tap ends-->
      <!-- Loader starts-->
      <div class="loader-wrapper">
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"> </div>
        <div class="dot"></div>
      </div>

      <div class="page-wrapper compact-wrapper" id="pageWrapper">
          <div class="page-header">
              @include('backend.partials.header')
          </div>
            <div class="page-body-wrapper">

              @include('backend.partials.sidebar')

              <div class="page-body">
                  @yield('content')
              </div>

              @include('backend.partials.footer')

            </div>
      </div>

      @include('backend.partials.scripts')
  </body>
</html>























{{--










<body onload="startTime()">
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- Loader starts-->
    <div class="loader-wrapper">
      <div class="dot"></div>
      <div class="dot"></div>
      <div class="dot"></div>
      <div class="dot"> </div>
      <div class="dot"></div>
    </div>
    <!-- Loader ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
      <!-- Page Header Start-->
      <div class="page-header">
        <div class="header-wrapper row m-0">
          <div class="header-logo-wrapper col-auto p-0">
            <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
            <div class="logo-header-main"><a href="index.html"><img class="img-fluid for-light img-100" src="../assets/images/logo/logo2.png" alt=""><img class="img-fluid for-dark" src="../assets/images/logo/logo.png" alt=""></a></div>
          </div>
          <div class="left-header col horizontal-wrapper ps-0">
            <div class="left-menu-header">
              <ul class="app-list">
                <li class="onhover-dropdown">
                  <div class="app-menu"> <i data-feather="folder-plus"></i></div>
                  <ul class="onhover-show-div left-dropdown">
                    <li> <a href="file-manager.html">File Manager</a></li>
                    <li> <a href="kanban.html"> Kanban board</a></li>
                    <li> <a href="social-app.html"> Social App</a></li>
                    <li> <a href="bookmark.html"> Bookmark</a></li>
                  </ul>
                </li>
              </ul>
              <ul class="header-left">
                <li class="onhover-dropdown"><span class="f-w-600">Dashboard</span><span><i class="middle" data-feather="chevron-down"></i></span>
                  <ul class="onhover-show-div left-dropdown">
                    <li> <a href="index.html">Default</a></li>
                    <li> <a href="dashboard-02.html"> Ecommerce</a></li>
                  </ul>
                </li>
                <li class="onhover-dropdown"><span class="f-w-600">Application</span><span><i class="middle" data-feather="chevron-down"></i></span>
                  <ul class="onhover-show-div left-dropdown">
                    <li class="flyout-right"><a href="javascript:void(0)">Project</a>
                      <ul>
                        <li> <a href="projects.html">Project List</a></li>
                        <li> <a href="projectcreate.html">Project Create</a></li>
                      </ul>
                    </li>
                    <li><a href="file-manager.html">File manager</a></li>
                    <li><a href="kanban.html">kanban</a></li>
                    <li class="flyout-right"><a href="javascript:void(0)">Ecommerce</a>
                      <ul>
                        <li> <a href="product.html">Product</a></li>
                        <li> <a href="product-page.html">Product Page</a></li>
                        <li> <a href="list-products.html">Product List</a></li>
                        <li> <a href="payment-details.html">Payment Details</a></li>
                        <li> <a href="order-history.html">Order History</a></li>
                        <li> <a href="invoice-template.html">Invoice</a></li>
                        <li> <a href="cart.html">Cart</a></li>
                        <li> <a href="list-wish.html">Wishlist</a></li>
                        <li> <a href="checkout.html">Checkout</a></li>
                        <li> <a href="pricing.html">Pricing </a></li>
                      </ul>
                    </li>
                    <li class="flyout-right"><a href="javascript:void(0)">Email</a>
                      <ul>
                        <li> <a href="email_inbox.html">Mail Inbox</a></li>
                        <li> <a href="email_read.html">Read Mail</a></li>
                        <li> <a href="email_compose.html">Compose</a></li>
                      </ul>
                    </li>
                    <li class="flyout-right"><a href="javascript:void(0)">Chat</a>
                      <ul>
                        <li> <a href="chat.html">Chat App</a></li>
                        <li> <a href="chat-video.html">Video Chat</a></li>
                      </ul>
                    </li>
                    <li class="flyout-right"><a href="javascript:void(0)">Users</a>
                      <ul>
                        <li> <a href="user-profile.html">User Profile</a></li>
                        <li> <a href="edit-profile.html">Users Edit</a></li>
                        <li> <a href="user-cards.html">User Cards</a></li>
                      </ul>
                    </li>
                    <li><a href="bookmark.html">Bookmarks</a></li>
                    <li><a href="contacts.html">Contacts</a></li>
                    <li><a href="social-app.html">Social App</a></li>
                  </ul>
                </li>
                <li class="onhover-dropdown"> <span class="f-w-600">More pages</span><span><i class="middle" data-feather="chevron-down"></i></span>
                  <ul class="onhover-show-div left-dropdown">
                    <li><a href="landing-page.html">Landing Page</a></li>
                    <li><a href="sample-page.html">Sample Page</a></li>
                    <li><a href="internationalization.html">Internationalization</a></li>
                    <li class="flyout-right"><a href="javascript:void(0)">Starter-Kit</a>
                      <ul>
                        <li class="flyout-right"><a href="javascript:void(0)">Color version</a>
                          <ul>
                            <li> <a href="starter-kit/index.html">Layout Light</a></li>
                            <li> <a href="starter-kit/layout-dark.html">Layout Dark</a></li>
                          </ul>
                        </li>
                        <li class="flyout-right"><a href="javascript:void(0)">Page Layout</a>
                          <ul>
                            <li> <a href="starter-kit/boxed.html">Boxed</a></li>
                            <li> <a href="starter-kit/layout-rtl.html">RTL</a></li>
                          </ul>
                        </li>
                        <li> <a href="starter-kit/hide-on-scroll.html">Hide Menu On Scroll</a></li>
                        <li class="flyout-right"><a href="javascript:void(0)">Footers</a>
                          <ul>
                            <li> <a href="starter-kit/footer-light.html">Footer Light</a></li>
                            <li> <a href="starter-kit/footer-dark.html">Footer Dark </a></li>
                            <li> <a href="starter-kit/footer-fixed.html">Footer Fixed</a></li>
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
                        <p><a href="order-history.html">Delivery processing </a><span class="pull-right">6 hr</span></p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="d-flex align-items-center">
                      <div class="flex-shrink-0"><i data-feather="shopping-cart"></i></div>
                      <div class="flex-grow-1">
                        <p><a href="cart.html">Order Complete</a><span class="pull-right">3 hr</span></p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="d-flex align-items-center">
                      <div class="flex-shrink-0"><i data-feather="file-text"></i></div>
                      <div class="flex-grow-1">
                        <p><a href="invoice-template.html">Tickets Generated</a><span class="pull-right">1 hr</span></p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="d-flex align-items-center">
                      <div class="flex-shrink-0"><i data-feather="send"></i></div>
                      <div class="flex-grow-1">
                        <p><a href="email_inbox.html">Delivery Complete</a><span class="pull-right">45 min</span></p>
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
                        <h5 class="mb-1"><a href="email_inbox.html">Emay Walter</a></h5>
                        <p>Do you want to go see movie?</p>
                      </div>
                      <div class="notification-right"><i data-feather="x"></i></div>
                    </div>
                  </li>
                  <li>
                    <div class="d-flex align-items-start">
                      <div class="message-img bg-light-primary"><img src="../assets/images/user/6.jpg" alt=""></div>
                      <div class="flex-grow-1">
                        <h5 class="mb-1"><a href="email_inbox.html">Jason Borne</a></h5>
                        <p>Thank you for rating us.</p>
                      </div>
                      <div class="notification-right"><i data-feather="x"></i></div>
                    </div>
                  </li>
                  <li>
                    <div class="d-flex align-items-start">
                      <div class="message-img bg-light-primary"><img src="../assets/images/user/10.jpg" alt=""></div>
                      <div class="flex-grow-1">
                        <h5 class="mb-1"><a href="email_inbox.html">Sarah Loren</a></h5>
                        <p>What`s the project report update?</p>
                      </div>
                      <div class="notification-right"><i data-feather="x"></i></div>
                    </div>
                  </li>
                  <li><a class="btn btn-primary" href="email_inbox.html">Check Messages</a></li>
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
                  <li><a href="user-profile.html"><i data-feather="user"></i><span>Account</span></a></li>
                  <li><a href="email_inbox.html"><i data-feather="mail"></i><span>Inbox</span></a></li>
                  <li><a href="edit-profile.html"><i data-feather="settings"></i><span>Settings</span></a></li>
                  <li><a href="login.html"><i data-feather="log-in"> </i><span>Log in</span></a></li>
                </ul>
              </li>
            </ul>
          </div>
          <script class="result-template" type="text/x-handlebars-template">
            <div class="ProfileCard u-cf">
            <div class="ProfileCard-avatar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></div>
            <div class="ProfileCard-details">
            <div class="ProfileCard-realName">{{name}}</div>
            </div>
            </div>
          </script>
          <script class="empty-template" type="text/x-handlebars-template"><div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div></script>
        </div>
      </div>
      <!-- Page Header Ends-->
      <!-- Page Body Start-->
      <div class="page-body-wrapper">
        <!-- Page Sidebar Start-->
        <div class="sidebar-wrapper">
          <div>
            <div class="logo-wrapper"><a href="index.html"><img class="img-fluid for-light" src="../assets/images/logo/logo.png" alt=""></a>
              <div class="back-btn"><i data-feather="grid"></i></div>
              <div class="toggle-sidebar icon-box-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
            </div>
            <div class="logo-icon-wrapper"><a href="index.html">
                <div class="icon-box-sidebar"><i data-feather="grid"></i></div></a></div>
            <nav class="sidebar-main">
              <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
              <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar">
                  <li class="back-btn">
                    <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                  </li>
                  <li class="pin-title sidebar-list">
                    <h6>Pinned</h6>
                  </li>
                  <hr>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="javascript:void(0)"><i data-feather="home"></i><span class="lan-3">Dashboard</span></a>
                    <ul class="sidebar-submenu">
                      <li><a class="lan-4" href="index.html">Default</a></li>
                      <li><a class="lan-5" href="dashboard-02.html">Ecommerce</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="javascript:void(0)"><i data-feather="airplay"></i><span class="lan-6">Widgets</span></a>
                    <ul class="sidebar-submenu">
                      <li><a href="general-widget.html">General</a></li>
                      <li><a href="chart-widget.html">Chart</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="javascript:void(0)"><i data-feather="layout"></i><span class="lan-7">Page layout</span></a>
                    <ul class="sidebar-submenu">
                      <li><a href="box-layout.html">Boxed</a></li>
                      <li><a href="layout-rtl.html">RTL</a></li>
                      <li><a href="layout-dark.html">Dark Layout</a></li>
                      <li><a href="hide-on-scroll.html">Hide Nav Scroll</a></li>
                      <li><a href="footer-light.html">Footer Light</a></li>
                      <li><a href="footer-dark.html">Footer Dark</a></li>
                      <li><a href="footer-fixed.html">Footer Fixed</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="javascript:void(0)"><i data-feather="box"></i><span>Project</span></a>
                    <ul class="sidebar-submenu">
                      <li><a href="projects.html">Project List</a></li>
                      <li><a href="projectcreate.html">Create new</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="file-manager.html"><i data-feather="git-pull-request"> </i><span>File manager</span></a></li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="kanban.html"><i data-feather="monitor"> </i><span>kanban Board</span></a></li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="javascript:void(0)"><i data-feather="shopping-bag"></i><span>Ecommerce</span></a>
                    <ul class="sidebar-submenu">
                      <li><a href="product.html">Product</a></li>
                      <li><a href="product-page.html">Product page</a></li>
                      <li><a href="add-products.html">Add Product</a></li>
                      <li><a href="list-products.html">Product list</a></li>
                      <li><a href="payment-details.html">Payment Details</a></li>
                      <li><a href="order-history.html">Order History</a></li>
                      <li><a href="invoice-template.html">Invoice</a></li>
                      <li><a href="cart.html">Cart</a></li>
                      <li><a href="list-wish.html">Wishlist</a></li>
                      <li><a href="checkout.html">Checkout</a></li>
                      <li><a href="pricing.html">Pricing              </a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="javascript:void(0)"><i data-feather="mail"></i><span>Email</span></a>
                    <ul class="sidebar-submenu">
                      <li><a href="email_inbox.html">Mail Inbox</a></li>
                      <li><a href="email_read.html">Read mail</a></li>
                      <li><a href="email_compose.html">Compose</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="javascript:void(0)"><i data-feather="message-circle"></i><span>Chat</span></a>
                    <ul class="sidebar-submenu">
                      <li><a href="chat.html">Chat App</a></li>
                      <li><a href="chat-video.html">Video chat</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="javascript:void(0)"><i data-feather="users"></i><span>Users</span></a>
                    <ul class="sidebar-submenu">
                      <li><a href="user-profile.html">Users Profile</a></li>
                      <li><a href="edit-profile.html">Users Edit</a></li>
                      <li><a href="user-cards.html">Users Cards</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="bookmark.html"><i data-feather="heart"> </i><span>Bookmarks</span></a></li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="contacts.html"><i data-feather="list"> </i><span>Contacts</span></a></li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="task.html"><i data-feather="check-square"> </i><span>Tasks</span></a></li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="calendar-basic.html"><i data-feather="calendar"> </i><span>Calendar</span></a></li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="social-app.html"><i data-feather="zap"> </i><span>Social App</span></a></li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="to-do.html"><i data-feather="clock"> </i><span>To-Do</span></a></li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="search.html"><i data-feather="search"> </i><span>Search Result</span></a></li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="javascript:void(0)"><i data-feather="file-text"></i><span>Forms</span></a>
                    <ul class="sidebar-submenu">
                      <li><a class="submenu-title" href="javascript:void(0)">Form Controls<span class="sub-arrow"><i class="fa fa-angle-right"></i></span></a>
                        <ul class="nav-sub-childmenu submenu-content">
                          <li><a href="form-validation.html">Form Validation</a></li>
                          <li><a href="base-input.html">Base Inputs</a></li>
                          <li><a href="radio-checkbox-control.html">Checkbox & Radio</a></li>
                          <li><a href="input-group.html">Input Groups</a></li>
                          <li><a href="megaoptions.html">Mega Options</a></li>
                        </ul>
                      </li>
                      <li><a class="submenu-title" href="javascript:void(0)">Form Widgets<span class="sub-arrow"><i class="fa fa-angle-right"></i></span></a>
                        <ul class="nav-sub-childmenu submenu-content">
                          <li><a href="datepicker.html">Datepicker</a></li>
                          <li><a href="time-picker.html">Timepicker</a></li>
                          <li><a href="datetimepicker.html">Datetimepicker</a></li>
                          <li><a href="daterangepicker.html">Daterangepicker</a></li>
                          <li><a href="touchspin.html">Touchspin</a></li>
                          <li><a href="select2.html">Select2</a></li>
                          <li><a href="switch.html">Switch</a></li>
                          <li><a href="typeahead.html">Typeahead</a></li>
                          <li><a href="clipboard.html">Clipboard</a></li>
                        </ul>
                      </li>
                      <li><a class="submenu-title" href="javascript:void(0)">Form layout<span class="sub-arrow"><i class="fa fa-angle-right"></i></span></a>
                        <ul class="nav-sub-childmenu submenu-content">
                          <li><a href="default-form.html">Default Forms</a></li>
                          <li><a href="form-wizard.html">Form Wizard 1</a></li>
                          <li><a href="form-wizard-two.html">Form Wizard 2</a></li>
                          <li><a href="form-wizard-three.html">Form Wizard 3</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="javascript:void(0)"><i data-feather="server"></i><span>Tables</span></a>
                    <ul class="sidebar-submenu">
                      <li><a class="submenu-title" href="javascript:void(0)">Bootstrap Tables<span class="sub-arrow"><i class="fa fa-angle-right"></i></span></a>
                        <ul class="nav-sub-childmenu submenu-content">
                          <li><a href="bootstrap-basic-table.html">Basic Tables</a></li>
                          <li><a href="table-components.html">Table components</a></li>
                        </ul>
                      </li>
                      <li><a class="submenu-title" href="javascript:void(0)">Data Tables<span class="sub-arrow"><i class="fa fa-angle-right"></i></span></a>
                        <ul class="nav-sub-childmenu submenu-content">
                          <li><a href="datatable-basic-init.html">Basic Table</a></li>
                          <li><a href="datatable-advance.html">Advance Init</a></li>
                          <li><a href="datatable-API.html">Data API </a></li>
                          <li><a href="datatable-data-source.html">Data Source</a></li>
                        </ul>
                      </li>
                      <li><a href="datatable-ext-autofill.html">Ex. Data Table     </a></li>
                      <li><a href="jsgrid-table.html">Js Grid Table        </a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="javascript:void(0)"><i data-feather="box"></i><span>Ui Kits</span></a>
                    <ul class="sidebar-submenu">
                      <li><a href="typography.html">Typography</a></li>
                      <li><a href="avatars.html">Avatars</a></li>
                      <li><a href="helper-classes.html">helper classes</a></li>
                      <li><a href="grid.html">Grid</a></li>
                      <li><a href="tag-pills.html">Tag & pills</a></li>
                      <li><a href="progress-bar.html">Progress</a></li>
                      <li><a href="modal.html">Modal</a></li>
                      <li><a href="alert.html">Alert</a></li>
                      <li><a href="popover.html">Popover</a></li>
                      <li><a href="tooltip.html">Tooltip</a></li>
                      <li><a href="loader.html">Spinners</a></li>
                      <li><a href="dropdown.html">Dropdown</a></li>
                      <li><a href="according.html">Accordion</a></li>
                      <li><a class="submenu-title" href="javascript:void(0)">Tabs<span class="sub-arrow"><i class="fa fa-angle-right"></i></span></a>
                        <ul class="nav-sub-childmenu submenu-content">
                          <li><a href="tab-bootstrap.html">Bootstrap Tabs</a></li>
                          <li><a href="tab-material.html">Line Tabs</a></li>
                        </ul>
                      </li>
                      <li><a href="box-shadow.html">Shadow</a></li>
                      <li><a href="list.html">Lists</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="javascript:void(0)"><i data-feather="folder-plus"></i><span>Bonus Ui</span></a>
                    <ul class="sidebar-submenu">
                      <li><a href="scrollable.html">Scrollable</a></li>
                      <li><a href="tree.html">Tree view</a></li>
                      <li><a href="bootstrap-notify.html">Bootstrap Notify</a></li>
                      <li><a href="rating.html">Rating</a></li>
                      <li><a href="dropzone.html">dropzone</a></li>
                      <li><a href="tour.html">Tour</a></li>
                      <li><a href="sweet-alert2.html">SweetAlert2</a></li>
                      <li><a href="modal-animated.html">Animated Modal</a></li>
                      <li><a href="owl-carousel.html">Owl Carousel</a></li>
                      <li><a href="ribbons.html">Ribbons</a></li>
                      <li><a href="pagination.html">Pagination</a></li>
                      <li><a href="breadcrumb.html">Breadcrumb</a></li>
                      <li><a href="range-slider.html">Range Slider</a></li>
                      <li><a href="image-cropper.html">Image cropper</a></li>
                      <li><a href="sticky.html">Sticky</a></li>
                      <li><a href="basic-card.html">Basic Cards</a></li>
                      <li><a href="dragable-card.html">Draggable Card</a></li>
                      <li><a class="submenu-title" href="javascript:void(0)">Timeline<span class="sub-arrow"><i class="fa fa-angle-right"></i></span></a>
                        <ul class="nav-sub-childmenu submenu-content">
                          <li><a href="timeline-v-1.html">Timeline 1</a></li>
                          <li><a href="timeline-v-2.html">Timeline 2</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="javascript:void(0)"><i data-feather="cloud-drizzle"></i><span>Animation</span></a>
                    <ul class="sidebar-submenu">
                      <li><a href="animate.html">Animate</a></li>
                      <li><a href="scroll-reval.html">Scroll Reveal</a></li>
                      <li><a href="AOS.html">AOS animation</a></li>
                      <li><a href="tilt.html">Tilt Animation</a></li>
                      <li><a href="wow.html">Wow Animation</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="javascript:void(0)"><i data-feather="command"></i><span>Icons</span></a>
                    <ul class="sidebar-submenu">
                      <li><a href="flag-icon.html">Flag icon</a></li>
                      <li><a href="font-awesome.html">Fontawesome Icon</a></li>
                      <li><a href="ico-icon.html">Ico Icon</a></li>
                      <li><a href="themify-icon.html">Themify Icon</a></li>
                      <li><a href="feather-icon.html">Feather icon</a></li>
                      <li><a href="whether-icon.html">Whether Icon</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="javascript:void(0)"><i data-feather="cloud"></i><span>Buttons</span></a>
                    <ul class="sidebar-submenu">
                      <li><a href="buttons.html">Default Style</a></li>
                      <li><a href="button-group.html">Button Group</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="javascript:void(0)"><i data-feather="bar-chart"></i><span>Charts</span></a>
                    <ul class="sidebar-submenu">
                      <li><a href="chart-apex.html">Apex Chart</a></li>
                      <li><a href="chart-sparkline.html">Sparkline chart</a></li>
                      <li><a href="chart-flot.html">Flot Chart</a></li>
                      <li><a href="chart-knob.html">Knob Chart</a></li>
                      <li><a href="chart-morris.html">Morris Chart</a></li>
                      <li><a href="chartjs.html">Chatjs Chart</a></li>
                      <li><a href="chartist.html">Chartist Chart</a></li>
                      <li><a href="chart-peity.html">Peity Chart</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="landing-page.html"><i data-feather="cast"> </i><span>Landing page</span></a></li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="sample-page.html"><i data-feather="file-text"> </i><span>Sample page</span></a></li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="internationalization.html"><i data-feather="globe"> </i><span>Internationalize</span></a></li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="http://admin.pixelstrap.com/tivo/starter-kit/index.html" target="_blank"><i data-feather="anchor"></i><span>Starter kit</span></a></li>
                  <li class="mega-menu sidebar-list"> <i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="javascript:void(0)"><i data-feather="layers"></i><span>Others</span></a>
                    <div class="mega-menu-container menu-content">
                      <div class="container-fluid">
                        <div class="row">
                          <div class="col mega-box">
                            <div class="link-section">
                              <div class="submenu-title">
                                <h5>Error Page</h5>
                              </div>
                              <ul class="submenu-content opensubmegamenu">
                                <li><a href="error-page1.html">Error Page 1</a></li>
                                <li><a href="error-page2.html">Error Page 2</a></li>
                                <li><a href="error-page3.html">Error Page 3</a></li>
                                <li><a href="error-page4.html">Error Page 4</a></li>
                                <li><a href="error-page5.html">Error Page 5</a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="col mega-box">
                            <div class="link-section">
                              <div class="submenu-title">
                                <h5> Authentication</h5>
                              </div>
                              <ul class="submenu-content opensubmegamenu">
                                <li><a href="login.html" target="_blank">Login Simple</a></li>
                                <li><a href="login_one.html" target="_blank">Login with bg image</a></li>
                                <li><a href="login_two.html" target="_blank">Login with image two</a></li>
                                <li><a href="login-bs-validation.html" target="_blank">Login With validation</a></li>
                                <li><a href="login-bs-tt-validation.html" target="_blank">Login with tooltip</a></li>
                                <li><a href="login-sa-validation.html" target="_blank">Login with sweetalert</a></li>
                                <li><a href="sign-up.html" target="_blank">Register Simple</a></li>
                                <li><a href="sign-up-one.html" target="_blank">Register with Bg Image</a></li>
                                <li><a href="sign-up-two.html" target="_blank">Register with Image Two</a></li>
                                <li><a href="unlock.html">Unlock User</a></li>
                                <li><a href="forget-password.html">Forget Password</a></li>
                                <li><a href="reset-password.html">Reset Password</a></li>
                                <li><a href="maintenance.html">Maintenance</a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="col mega-box">
                            <div class="link-section">
                              <div class="submenu-title">
                                <h5>Coming Soon</h5>
                              </div>
                              <ul class="submenu-content opensubmegamenu">
                                <li><a href="comingsoon.html">Coming Simple</a></li>
                                <li><a href="comingsoon-bg-video.html">Coming with Bg video</a></li>
                                <li><a href="comingsoon-bg-img.html">Coming with Bg Image</a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="col mega-box">
                            <div class="link-section">
                              <div class="submenu-title">
                                <h5>Email templates</h5>
                              </div>
                              <ul class="submenu-content opensubmegamenu">
                                <li><a href="basic-template.html">Basic Email</a></li>
                                <li><a href="email-header.html">Basic With Header</a></li>
                                <li><a href="template-email.html">Ecommerce Template</a></li>
                                <li><a href="template-email-2.html">Email Template 2</a></li>
                                <li><a href="ecommerce-templates.html">Ecommerce Email</a></li>
                                <li><a href="email-order-success.html">Order Success</a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="javascript:void(0)"><i data-feather="image"></i><span>Gallery</span></a>
                    <ul class="sidebar-submenu">
                      <li><a href="gallery.html">Gallery Grid</a></li>
                      <li><a href="gallery-with-description.html">Gallery Grid Desc</a></li>
                      <li><a href="gallery-masonry.html">Masonry Gallery</a></li>
                      <li><a href="masonry-gallery-with-disc.html">Masonry with Desc</a></li>
                      <li><a href="gallery-hover.html">Hover Effects</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="javascript:void(0)"><i data-feather="film"></i><span>Blog</span></a>
                    <ul class="sidebar-submenu">
                      <li><a href="blog.html">Blog Details</a></li>
                      <li><a href="blog-single.html">Blog Single</a></li>
                      <li><a href="add-post.html">Add Post</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="faq.html"><i data-feather="help-circle"> </i><span>FAQ</span></a></li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="javascript:void(0)"><i data-feather="package"></i><span>Job Search</span></a>
                    <ul class="sidebar-submenu">
                      <li><a href="job-cards-view.html">Cards view</a></li>
                      <li><a href="job-list-view.html">List View</a></li>
                      <li><a href="job-details.html">Job Details</a></li>
                      <li><a href="job-apply.html">Apply</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="javascript:void(0)"><i data-feather="radio"></i><span>Learning</span></a>
                    <ul class="sidebar-submenu">
                      <li><a href="learning-list-view.html">Learning List</a></li>
                      <li><a href="learning-detailed.html">Detailed Course</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="javascript:void(0)"><i data-feather="map"></i><span>Maps</span></a>
                    <ul class="sidebar-submenu">
                      <li><a href="map-js.html">Maps JS</a></li>
                      <li><a href="vector-map.html">Vector Maps</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="javascript:void(0)"><i data-feather="edit"></i><span>Editors</span></a>
                    <ul class="sidebar-submenu">
                      <li><a href="summernote.html">Summer Note</a></li>
                      <li><a href="ckeditor.html">CK editor</a></li>
                      <li><a href="simple-MDE.html">MDE editor</a></li>
                      <li><a href="ace-code-editor.html">ACE code editor</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="javascript:void(0)"><i data-feather="sunrise"> </i><span>Knowledgebase</span></a>
                    <ul class="sidebar-submenu">
                      <li><a href="knowledgebase.html">Knowledgebase</a></li>
                      <li><a href="knowledge-category.html">Knowledge category</a></li>
                      <li><a href="knowledge-detail.html">Knowledge detail              </a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="support-ticket.html"><i data-feather="users"> </i><span>Support Ticket</span></a></li>
                </ul>
              </div>
              <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
            </nav>
          </div>
        </div>
        <!-- Page Sidebar Ends-->
        <div class="page-body">
          <div class="container-fluid">
            <div class="page-title">
              <div class="row">
                <div class="col-sm-6">
                  <h3>Default</h3>
                </div>
                <div class="col-sm-6">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Dashboard</li>
                    <li class="breadcrumb-item active">Default</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid dashboard-default">
            <div class="row">
              <div class="col-xxl-6 col-xl-5 col-lg-6 dash-45 box-col-40">
                <div class="card profile-greeting">
                  <div class="card-body">
                    <div class="d-sm-flex d-block justify-content-between">
                      <div class="flex-grow-1">
                        <div class="weather d-flex">
                          <h2 class="f-w-400"> <span>28<sup><i class="fa fa-circle-o f-10"></i></sup>C </span></h2>
                          <div class="span sun-bg"><i class="icofont icofont-sun font-primary"></i></div>
                        </div><span class="font-primary f-w-700">Sunny Day</span>
                        <p>Beautiful Sunny Day Walk</p>
                      </div>
                      <div class="badge-group">
                        <div class="badge badge-light-primary f-12">                         <i class="fa fa-clock-o"></i><span id="txt"></span></div>
                      </div>
                    </div>
                    <div class="greeting-user">
                      <div class="profile-vector">
                        <ul class="dots-images">
                          <li class="dot-small bg-info dot-1"></li>
                          <li class="dot-medium bg-primary dot-2"></li>
                          <li class="dot-medium bg-info dot-3"></li>
                          <li class="semi-medium bg-primary dot-4"></li>
                          <li class="dot-small bg-info dot-5"></li>
                          <li class="dot-big bg-info dot-6"></li>
                          <li class="dot-small bg-primary dot-7"></li>
                          <li class="semi-medium bg-primary dot-8"></li>
                          <li class="dot-big bg-info dot-9"></li>
                        </ul><img class="img-fluid" src="../assets/images/dashboard/default/profile.png" alt="">
                        <ul class="vector-image">
                          <li> <img src="../assets/images/dashboard/default/ribbon1.png" alt=""></li>
                          <li> <img src="../assets/images/dashboard/default/ribbon3.png" alt=""></li>
                          <li> <img src="../assets/images/dashboard/default/ribbon4.png" alt=""></li>
                          <li> <img src="../assets/images/dashboard/default/ribbon5.png" alt=""></li>
                          <li> <img src="../assets/images/dashboard/default/ribbon6.png" alt=""></li>
                          <li> <img src="../assets/images/dashboard/default/ribbon7.png" alt=""></li>
                        </ul>
                      </div>
                      <h4><a href="user-profile.html"><span>Welcome Back</span> John  </a><span class="right-circle"><i class="fa fa-check-circle font-primary f-14 middle"></i></span></h4>
                      <div><span class="badge badge-primary">Your 5</span><span class="font-primary f-12 middle f-w-500 ms-2"> Task Is Pending</span></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-6 col-md-6 box-col-25">
                <div class="card total-revenue overflow-hidden">
                  <div class="card-header">
                    <div class="d-flex justify-content-between">
                      <div class="flex-grow-1">
                        <p class="square-after f-w-600 header-text-primary">Total Revenue<i class="fa fa-circle"></i></p>
                        <h4>96.564%</h4>
                      </div>
                      <div class="setting-list">
                        <ul class="list-unstyled setting-option">
                          <li>
                            <div class="setting-light"><i class="icon-layout-grid2"></i></div>
                          </li>
                          <li><i class="view-html fa fa-code font-white"></i></li>
                          <li><i class="icofont icofont-maximize full-card font-white"></i></li>
                          <li><i class="icofont icofont-minus minimize-card font-white"></i></li>
                          <li><i class="icofont icofont-refresh reload-card font-white"></i></li>
                          <li><i class="icofont icofont-error close-card font-white"> </i></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="revenue-chart" id="revenue-chart"></div>
                    <div class="code-box-copy">
                      <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#revenue"><i class="icofont icofont-copy-alt"></i></button>
                        <pre><code class="language-html" id="revenue">&lt;div class="card total-revenue overflow-hidden"&gt;
                            &lt;div class="card-header"&gt;
                                &lt;div class="d-flex justify-content-between"&gt;
                                &lt;div class="flex-grow-1"&gt;
                                    &lt;p class="square-after f-w-600 header-text-primary"&gt; Total Revenue
                                    &lt;i class="fa fa-circle"&gt;&lt;/i&gt;
                                    &lt;/p&gt;
                                    &lt;h4&gt; 96.564%&lt;/h4&gt;
                                &lt;/div&gt;
                                &lt;div class="setting-list"&gt;
                                    &lt;ul class="list-unstyled setting-option"&gt;
                                    &lt;li&gt;&lt;div class="setting-light"&gt;&lt;i class="icon-layout-grid2"&gt;&lt;/i&gt;&lt;/div&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;i class="view-html fa fa-code font-white"&gt;&lt;/i&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;i class="icofont icofont-maximize full-card font-white"&gt;&lt;/i&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;i class="icofont icofont-minus minimize-card font-white"&gt;&lt;/i&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;i class="icofont icofont-refresh reload-card font-white"&gt;&lt;/i&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;i class="icofont icofont-error close-card font-white"&gt; &lt;/i&gt;&lt;/li&gt;
                                    &lt;/ul&gt;
                                &lt;/div&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;
                            &lt;div class="card-body p-0"&gt;
                                &lt;div class="revenue-chart" id="revenue-chart"&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;
                            &lt;/div&gt;</code>
                        </pre>
                    </div>
                  </div>
                </div>
                <div class="card total-investment">
                  <div class="card-header pb-0">
                    <div class="d-flex justify-content-between">
                      <div class="flex-grow-1">
                        <p class="square-after f-w-600 header-text-primary">Total Investment<i class="fa fa-circle"> </i></p>
                        <h4>96.564%</h4>
                      </div>
                      <div class="setting-list">
                        <ul class="list-unstyled setting-option">
                          <li>
                            <div class="setting-light"><i class="icon-layout-grid2"></i></div>
                          </li>
                          <li><i class="view-html fa fa-code font-white"></i></li>
                          <li><i class="icofont icofont-maximize full-card font-white"></i></li>
                          <li><i class="icofont icofont-minus minimize-card font-white"></i></li>
                          <li><i class="icofont icofont-refresh reload-card font-white"></i></li>
                          <li><i class="icofont icofont-error close-card font-white"> </i></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="progress sm-progress-bar">
                      <div class="progress-colors" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                        <div class="bg-secondary progress-1"></div>
                        <div class="bg-primary progress-2"></div>
                      </div>
                    </div>
                    <div class="bottom-progress"><span class="badge round-badge-primary font-worksans">3.56% <i class="fa fa-caret-up"></i></span><span class="pull-right font-primary font-worksans f-w-700">75%</span></div>
                    <div class="code-box-copy">
                      <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#investment"><i class="icofont icofont-copy-alt"></i></button>
                      <pre><code class="language-html" id="investment">&lt;div class="card total-investment"&gt;
                            &lt;div class="card-header pb-0"&gt;
                                &lt;div class="d-flex justify-content-between"&gt;
                                &lt;div class="flex-grow-1"&gt;
                                    &lt;p class="square-after f-w-600 header-text-primary"&gt; Total Investment
                                    &lt;i class="fa fa-circle"&gt;&lt;/i&gt;
                                    &lt;/p&gt;
                                    &lt;h4&gt; 96.564%&lt;/h4&gt;
                                &lt;/div&gt;
                                &lt;div class="setting-list"&gt;
                                    &lt;ul class="list-unstyled setting-option"&gt;
                                    &lt;li&gt;&lt;div class="setting-light"&gt;&lt;i class="icon-layout-grid2"&gt;&lt;/i&gt;&lt;/div&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;i class="view-html fa fa-code font-white"&gt;&lt;/i&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;i class="icofont icofont-maximize full-card font-white"&gt;&lt;/i&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;i class="icofont icofont-minus minimize-card font-white"&gt;&lt;/i&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;i class="icofont icofont-refresh reload-card font-white"&gt;&lt;/i&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;i class="icofont icofont-error close-card font-white"&gt; &lt;/i&gt;&lt;/li&gt;
                                    &lt;/ul&gt;
                                &lt;/div&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;
                            &lt;div class="card-body p-0"&gt;
                                &lt;div class="progress sm-progress-bar"&gt;
                                &lt;div class="progress-colors" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"&gt;
                                    &lt;div class="bg-secondary.progress-1"&gt;&lt;/div&gt;
                                    &lt;div class="bg-primary.progress-2"&gt;&lt;/div&gt;
                                &lt;/div&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;
                            &lt;/div&gt;</code>
                     </pre>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xxl-3 col-xl-4 col-md-6 dash-30 box-col-35">
                <div class="card our-user">
                  <div class="card-header pb-0">
                    <div class="d-flex justify-content-between">
                      <div class="flex-grow-1">
                        <p class="square-after f-w-600 header-text-primary">Our Total Users<i class="fa fa-circle"></i></p>
                        <h4>96.564%</h4>
                      </div>
                      <div class="setting-list">
                        <ul class="list-unstyled setting-option">
                          <li>
                            <div class="setting-light"><i class="icon-layout-grid2"></i></div>
                          </li>
                          <li><i class="view-html fa fa-code font-white"></i></li>
                          <li><i class="icofont icofont-maximize full-card font-white"></i></li>
                          <li><i class="icofont icofont-minus minimize-card font-white"></i></li>
                          <li><i class="icofont icofont-refresh reload-card font-white"></i></li>
                          <li><i class="icofont icofont-error close-card font-white"> </i></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="user-chart">
                      <div id="user-chart"></div>
                      <div class="icon-donut"><i data-feather="arrow-up-circle"></i></div>
                    </div>
                    <ul>
                      <li>
                        <p class="f-w-600 font-primary f-12">Desktop</p><span class="f-w-600">96.564%</span>
                      </li>
                      <li>
                        <p class="f-w-600 font-primary f-12">Mobile </p><span class="f-w-600">92.624%</span>
                      </li>
                      <li>
                        <p class="f-w-600 font-primary f-12">Tablet </p><span class="f-w-600">46.564%</span>
                      </li>
                    </ul>
                    <div class="code-box-copy">
                      <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#users"><i class="icofont icofont-copy-alt"></i></button>
                        <pre><code class="language-html" id="users">&lt;div class="card our-user"&gt;
                            &lt;div class="card-header pb-0"&gt;
                                &lt;div class="d-flex justify-content-between"&gt;
                                &lt;div class="flex-grow-1"&gt;
                                    &lt;p class="square-after f-w-600 header-text-primary"&gt; Our Total Users
                                    &lt;i class="fa fa-circle"&gt;&lt;/i&gt;
                                    &lt;/p&gt;
                                    &lt;h4&gt; 96.564% &lt;/h4&gt;
                                &lt;/div&gt;
                                &lt;div class="setting-list"&gt;
                                    &lt;ul class="list-unstyled setting-option"&gt;
                                    &lt;li&gt;&lt;div class="setting-light"&gt;&lt;i class="icon-layout-grid2"&gt;&lt;/i&gt;&lt;/div&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;i class="view-html fa fa-code font-white"&gt;&lt;/i&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;i class="icofont icofont-maximize full-card font-white"&gt;&lt;/i&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;i class="icofont icofont-minus minimize-card font-white"&gt;&lt;/i&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;i class="icofont icofont-refresh reload-card font-white"&gt;&lt;/i&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;i class="icofont icofont-error close-card font-white"&gt; &lt;/i&gt;&lt;/li&gt;
                                    &lt;/ul&gt;
                                &lt;/div&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;
                            &lt;div class="card-body"&gt;
                                &lt;div class="user-chart"&gt;
                                &lt;div id="user-chart"&gt;&lt;/div&gt;
                                &lt;div class="icon-donut"&gt;
                                    &lt;i class="feather feather-arrow-up-circle"&gt;&lt;/div&gt;
                                &lt;/div&gt;
                                &lt;/div&gt;
                                &lt;ul&gt;
                                &lt;li&gt;
                                    &lt;p class="f-w-600 font-primary f-12"&gt; Desktop &lt;/p&gt;
                                    &lt;span class="f-w-600"&gt; 96.564% &lt;/span&gt;
                                &lt;/li&gt;
                                &lt;li&gt;
                                    &lt;p class="f-w-600 font-primary f-12"&gt; Mobile &lt;/p&gt;
                                    &lt;span class="f-w-600"&gt; 92.624% &lt;/span&gt;
                                &lt;/li&gt;
                                &lt;li&gt;
                                    &lt;p class="f-w-600 font-primary f-12"&gt; Tablet &lt;/p&gt;
                                    &lt;span class="f-w-600"&gt; 46.564% &lt;/span&gt;
                                &lt;/li&gt;
                                &lt;/ul&gt;
                            &lt;/div&gt;
                            &lt;/div&gt;</code>
                        </pre>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-lg-6 box-col-30 xl-30">
                <div class="card our-earning">
                  <div class="card-header pb-0">
                    <div class="d-flex justify-content-between">
                      <div class="flex-grow-1">
                        <p class="square-after f-w-600 header-text-primary">Our Total Earning<i class="fa fa-circle"> </i></p>
                        <h4>96.564%</h4>
                        <div class="setting-list">
                          <ul class="list-unstyled setting-option">
                            <li>
                              <div class="setting-light"><i class="icon-layout-grid2"></i></div>
                            </li>
                            <li><i class="view-html fa fa-code font-white"></i></li>
                            <li><i class="icofont icofont-maximize full-card font-white"></i></li>
                            <li><i class="icofont icofont-minus minimize-card font-white"></i></li>
                            <li><i class="icofont icofont-refresh reload-card font-white"></i></li>
                            <li><i class="icofont icofont-error close-card font-white"> </i></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="earning-chart">
                      <div id="earning-chart"></div>
                    </div>
                    <div class="code-box-copy">
                      <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#earning"><i class="icofont icofont-copy-alt"></i></button>
                      <pre><code class="language-html" id="earning">&lt;div class="card our-earning"&gt;
                            &lt;div class="card-header pb-0"&gt;
                                &lt;div class="d-flex justify-content-between"&gt;
                                &lt;div class="flex-grow-1"&gt;
                                    &lt;p class="square-after f-w-600 header-text-primary"&gt; Our Total Earning
                                    &lt;i class="fa fa-circle"&gt;&lt;/i&gt;
                                    &lt;/p&gt;
                                    &lt;h4&gt; 96.564% &lt;/h4&gt;
                                &lt;/div&gt;
                                &lt;div class="setting-list"&gt;
                                    &lt;ul class="list-unstyled setting-option"&gt;
                                    &lt;li&gt;&lt;div class="setting-light"&gt;&lt;i class="icon-layout-grid2"&gt;&lt;/i&gt;&lt;/div&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;i class="view-html fa fa-code font-white"&gt;&lt;/i&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;i class="icofont icofont-maximize full-card font-white"&gt;&lt;/i&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;i class="icofont icofont-minus minimize-card font-white"&gt;&lt;/i&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;i class="icofont icofont-refresh reload-card font-white"&gt;&lt;/i&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;i class="icofont icofont-error close-card font-white"&gt; &lt;/i&gt;&lt;/li&gt;
                                    &lt;/ul&gt;
                                &lt;/div&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;
                            &lt;div class="card-body p-0"&gt;
                                &lt;div class="earning-chart"&gt;
                                &lt;div id="earning-chart"&gt;&lt;/div&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;
                            &lt;div class="card-footer"&gt;
                                &lt;ul class="d-sm-flex d-block"&gt;
                                &lt;li&gt;
                                    &lt;p class="f-w-600 font-primary f-12"&gt; Daily Earning
                                    &lt;span class="f-w-600"&gt; 96.564% &lt;/span&gt;
                                &lt;/li&gt;
                                &lt;li&gt;
                                    &lt;p class="f-w-600 font-primary f-12"&gt; Monthly Earning
                                    &lt;span class="f-w-600"&gt; 96.564% &lt;/span&gt;
                                &lt;/li&gt;
                                &lt;/ul&gt;
                            &lt;/div&gt;
                            &lt;/div&gt;</code>
                        </pre>
                    </div>
                  </div>
                  <div class="card-footer">
                    <ul class="d-sm-flex d-block">
                      <li>
                        <p class="f-w-600 font-primary f-12">Daily Earning</p><span class="f-w-600">96.564%</span>
                      </li>
                      <li>
                        <p class="f-w-600 font-primary f-12">Monthly Earning </p><span class="f-w-600">96.564%</span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-md-6 box-col-40 xl-40">
                <div class="card appointment-detail">
                  <div class="card-header pb-0">
                    <div class="d-flex justify-content-between">
                      <div class="flex-grow-1">
                        <p class="square-after f-w-600 header-text-primary">total appointment<i class="fa fa-circle"> </i></p>
                        <h4>12 meet</h4>
                      </div>
                      <div class="setting-list">
                        <ul class="list-unstyled setting-option">
                          <li>
                            <div class="setting-light"><i class="icon-layout-grid2"></i></div>
                          </li>
                          <li><i class="view-html fa fa-code font-white"></i></li>
                          <li><i class="icofont icofont-maximize full-card font-white"></i></li>
                          <li><i class="icofont icofont-minus minimize-card font-white"></i></li>
                          <li><i class="icofont icofont-refresh reload-card font-white"></i></li>
                          <li><i class="icofont icofont-error close-card font-white"> </i></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive theme-scrollbar">
                      <table class="table">
                        <tbody>
                          <tr>
                            <td>
                              <div class="d-flex"><img class="img-fluid align-top circle" src="../assets/images/dashboard/default/01.png" alt="">
                                <div class="flex-grow-1"><a href="user-profile.html"><span>Ossim keter</span></a>
                                  <p class="mb-0">1 Hour</p>
                                </div>
                                <div class="active-status active-online"></div>
                              </div>
                            </td>
                            <td>16 August </td>
                            <td class="text-end">
                              <button class="btn btn-primary" type="button" onclick="document.location='user-cards.html'">Pending</button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="d-flex"><img class="img-fluid align-top circle" src="../assets/images/dashboard/default/02.png" alt="">
                                <div class="flex-grow-1"><a href="user-profile.html"><span>Venter loren</span></a>
                                  <p class="mb-0">Now</p>
                                </div>
                                <div class="active-status active-busy"></div>
                              </div>
                            </td>
                            <td>21 September </td>
                            <td class="text-end">
                              <button class="btn btn-secondary" type="button" onclick="document.location='user-cards.html'">Done<i class="fa fa-check-circle"></i></button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="d-flex"><img class="img-fluid align-top circle" src="../assets/images/dashboard/default/03.png" alt="">
                                <div class="flex-grow-1"><a href="user-profile.html"><span>Fran loain</span></a>
                                  <p class="mb-0">2 Day After</p>
                                </div>
                                <div class="active-status active-offline"></div>
                              </div>
                            </td>
                            <td>06 March</td>
                            <td class="text-end">
                              <button class="btn btn-success" type="button" onclick="document.location='user-cards.html'">Pending</button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="d-flex"><img class="img-fluid align-top circle" src="../assets/images/dashboard/default/04.png" alt="">
                                <div class="flex-grow-1"><a href="user-profile.html"><span>Loften Horen</span></a>
                                  <p class="mb-0">Day End</p>
                                </div>
                                <div class="active-status active-online"></div>
                              </div>
                            </td>
                            <td>12 February</td>
                            <td class="text-end">
                              <button class="btn btn-info" type="button" onclick="document.location='user-cards.html'">Pending</button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="d-flex"><img class="img-fluid align-top circle" src="../assets/images/dashboard/default/05.png" alt="">
                                <div class="flex-grow-1"><a href="user-profile.html"><span>Loie fenter</span></a>
                                  <p class="mb-0">2 Day After</p>
                                </div>
                                <div class="active-status active-offline"></div>
                              </div>
                            </td>
                            <td>06 March</td>
                            <td class="text-end">
                              <button class="btn btn-danger" type="button" onclick="document.location='user-cards.html'">Pending</button>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="code-box-copy">
                      <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#appoinment"><i class="icofont icofont-copy-alt"></i></button>
                      <pre><code class="language-html" id="appoinment">&lt;div class="card appointment-detail"&gt;
                            &lt;div class="card-header pb-0"&gt;
                                &lt;div class="d-flex justify-content-between"&gt;
                                &lt;div class="flex-grow-1"&gt;
                                    &lt;p class="square-after f-w-600 header-text-primary"&gt; total appointment
                                    &lt;i class="fa fa-circle"&gt;&lt;/i&gt;
                                    &lt;/p&gt;
                                    &lt;h4&gt; 12 meet &lt;/h4&gt;
                                &lt;/div&gt;
                                &lt;div class="setting-list"&gt;
                                    &lt;ul class="list-unstyled setting-option"&gt;
                                    &lt;li&gt;&lt;div class="setting-light"&gt;&lt;i class="icon-layout-grid2"&gt;&lt;/i&gt;&lt;/div&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;i class="view-html fa fa-code font-white"&gt;&lt;/i&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;i class="icofont icofont-maximize full-card font-white"&gt;&lt;/i&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;i class="icofont icofont-minus minimize-card font-white"&gt;&lt;/i&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;i class="icofont icofont-refresh reload-card font-white"&gt;&lt;/i&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;i class="icofont icofont-error close-card font-white"&gt; &lt;/i&gt;&lt;/li&gt;
                                    &lt;/ul&gt;
                                &lt;/div&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;
                            &lt;div class="card-body"&gt;
                                &lt;div class="table-responsive.theme-scrollbar"&gt;
                                &lt;table class="table"&gt;
                                    &lt;tbody&gt;
                                    &lt;tr&gt;
                                        &lt;td&gt;
                                        &lt;div class="d-flex"&gt;
                                            &lt;img class="img-fluid align-top circle" src="../assets/images/dashboard/default/01.png" alt=""&gt;&lt;/img&gt;
                                            &lt;div class="flex-grow-1"&gt;
                                            &lt;a href="user-profile.html"&gt;
                                                &lt;span&gt;Ossim keter&lt;/span&gt;
                                            &lt;/a&gt;
                                            &lt;p class="mb-0"&gt; 1 Hour &lt;/p&gt;
                                            &lt;/div&gt;
                                            &lt;div class="active-status active-online"&gt;&lt;/div&gt;
                                        &lt;/div&gt;
                                        &lt;/td&gt;
                                        &lt;td&gt; 16 august &lt;/td&gt;
                                        &lt;td class="text-end"&gt;
                                        &lt;button class="btn btn-primary" type="button" onclick="document.location='user-cards.html'"&gt; Pending &lt;/button&gt;
                                        &lt;/td&gt;
                                    &lt;/tr&gt;
                                    &lt;tr&gt;
                                        &lt;td&gt;
                                        &lt;div class="d-flex"&gt;
                                            &lt;img class="img-fluid align-top circle" src="../assets/images/dashboard/default/02.png" alt=""&gt;&lt;/img&gt;
                                            &lt;div class="flex-grow-1"&gt;
                                            &lt;a href="user-profile.html"&gt;
                                                &lt;span&gt;Venter loren&lt;/span&gt;
                                            &lt;/a&gt;
                                            &lt;p class="mb-0"&gt; Now &lt;/p&gt;
                                            &lt;/div&gt;
                                            &lt;div class="active-status active-busy"&gt;&lt;/div&gt;
                                        &lt;/div&gt;
                                        &lt;/td&gt;
                                        &lt;td&gt; 21 September &lt;/td&gt;
                                        &lt;td class="text-end"&gt;
                                        &lt;button class="btn btn-secondary" type="button" onclick="document.location='user-cards.html'"&gt; Done
                                            &lt;i class="fa fa-check-circle"&gt;
                                        &lt;/button&gt;
                                        &lt;/td&gt;
                                    &lt;/tr&gt;
                                    &lt;tr&gt;
                                        &lt;td&gt;
                                        &lt;div class="d-flex"&gt;
                                            &lt;img class="img-fluid align-top circle" src="../assets/images/dashboard/default/03.png" alt=""&gt;&lt;/img&gt;
                                            &lt;div class="flex-grow-1"&gt;
                                            &lt;a href="user-profile.html"&gt;
                                                &lt;span&gt;Fran loain&lt;/span&gt;
                                            &lt;/a&gt;
                                            &lt;p class="mb-0"&gt; 2 Day After &lt;/p&gt;
                                            &lt;/div&gt;
                                            &lt;div class="active-status active-online"&gt;&lt;/div&gt;
                                        &lt;/div&gt;
                                        &lt;/td&gt;
                                        &lt;td&gt; 06 March &lt;/td&gt;
                                        &lt;td class="text-end"&gt;
                                        &lt;button class="btn btn-success" type="button" onclick="document.location='user-cards.html'"&gt; Pending &lt;/button&gt;
                                        &lt;/td&gt;
                                    &lt;/tr&gt;
                                    &lt;tr&gt;
                                        &lt;td&gt;
                                        &lt;div class="d-flex"&gt;
                                            &lt;img class="img-fluid align-top circle" src="../assets/images/dashboard/default/04.png" alt=""&gt;&lt;/img&gt;
                                            &lt;div class="flex-grow-1"&gt;
                                            &lt;a href="user-profile.html"&gt;
                                                &lt;span&gt;Loften Horen&lt;/span&gt;
                                            &lt;/a&gt;
                                            &lt;p class="mb-0"&gt; Day End &lt;/p&gt;
                                            &lt;/div&gt;
                                            &lt;div class="active-status active-online"&gt;&lt;/div&gt;
                                        &lt;/div&gt;
                                        &lt;/td&gt;
                                        &lt;td&gt; 12 February &lt;/td&gt;
                                        &lt;td class="text-end"&gt;
                                        &lt;button class="btn btn-info" type="button" onclick="document.location='user-cards.html'"&gt; Pending &lt;/button&gt;
                                        &lt;/td&gt;
                                    &lt;/tr&gt;
                                    &lt;tr&gt;
                                        &lt;td&gt;
                                        &lt;div class="d-flex"&gt;
                                            &lt;img class="img-fluid align-top circle" src="../assets/images/dashboard/default/05.png" alt=""&gt;&lt;/img&gt;
                                            &lt;div class="flex-grow-1"&gt;
                                            &lt;a href="user-profile.html"&gt;
                                                &lt;span&gt;Loie fenter&lt;/span&gt;
                                            &lt;/a&gt;
                                            &lt;p class="mb-0"&gt; 2 Day After &lt;/p&gt;
                                            &lt;/div&gt;
                                            &lt;div class="active-status active-offline"&gt;&lt;/div&gt;
                                        &lt;/div&gt;
                                        &lt;/td&gt;
                                        &lt;td&gt; 06 March &lt;/td&gt;
                                        &lt;td class="text-end"&gt;
                                        &lt;button class="btn btn-danger" type="button" onclick="document.location='user-cards.html'"&gt; Pending &lt;/button&gt;
                                        &lt;/td&gt;
                                    &lt;/tr&gt;
                                    &lt;/tbody&gt;
                                &lt;/table&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;
                            &lt;/div&gt;</code>
                        </pre>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-md-6 box-col-30 xl-30">
                <div class="card use-country">
                  <div class="card-header pb-0">
                    <div class="d-flex justify-content-between">
                      <div class="flex-grow-1">
                        <p class="square-after f-w-600 header-text-primary">User By Country<i class="fa fa-circle"> </i></p>
                        <h4>96.564%</h4>
                      </div>
                      <div class="setting-list">
                        <ul class="list-unstyled setting-option">
                          <li>
                            <div class="setting-light"><i class="icon-layout-grid2"></i></div>
                          </li>
                          <li><i class="view-html fa fa-code font-white"></i></li>
                          <li><i class="icofont icofont-maximize full-card font-white"></i></li>
                          <li><i class="icofont icofont-minus minimize-card font-white"></i></li>
                          <li><i class="icofont icofont-refresh reload-card font-white"></i></li>
                          <li><i class="icofont icofont-error close-card font-white"> </i></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="jvector-map-height" id="asia"></div>
                    <div class="code-box-copy">
                      <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#country"><i class="icofont icofont-copy-alt"></i></button>
                      <pre><code class="language-html" id="country">&lt;div class="card use-country"&gt;
                            &lt;div class="card-header pb-0"&gt;
                                &lt;div class="d-flex justify-content-between"&gt;
                                &lt;div class="flex-grow-1"&gt;
                                    &lt;p class="square-after f-w-600 header-text-primary"&gt; User By Country
                                    &lt;i class="fa fa-circle"&gt;&lt;/i&gt;
                                    &lt;/p&gt;
                                    &lt;h4&gt; 96.564%&lt;/h4&gt;
                                &lt;/div&gt;
                                &lt;div class="setting-list"&gt;
                                    &lt;ul class="list-unstyled setting-option"&gt;
                                    &lt;li&gt;&lt;div class="setting-light"&gt;&lt;i class="icon-layout-grid2"&gt;&lt;/i&gt;&lt;/div&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;i class="view-html fa fa-code font-white"&gt;&lt;/i&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;i class="icofont icofont-maximize full-card font-white"&gt;&lt;/i&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;i class="icofont icofont-minus minimize-card font-white"&gt;&lt;/i&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;i class="icofont icofont-refresh reload-card font-white"&gt;&lt;/i&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;i class="icofont icofont-error close-card font-white"&gt; &lt;/i&gt;&lt;/li&gt;
                                    &lt;/ul&gt;
                                &lt;/div&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;
                            &lt;div class="card-body p-0"&gt;
                                &lt;div class="jvector-map-height" id="asia"&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;
                            &lt;/div&gt;</code>
                        </pre>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-12 box-col-12">
                <div class="card total-growth">
                  <div class="card-header pb-0">
                    <div class="d-flex justify-content-between">
                      <div class="flex-grow-1">
                        <p class="square-after f-w-600 header-text-primary">Our Total Growth<i class="fa fa-circle"> </i></p>
                        <h4>96.564%</h4>
                      </div>
                      <div class="setting-list">
                        <ul class="list-unstyled setting-option">
                          <li>
                            <div class="setting-light"><i class="icon-layout-grid2"></i></div>
                          </li>
                          <li><i class="view-html fa fa-code font-white"></i></li>
                          <li><i class="icofont icofont-maximize full-card font-white"></i></li>
                          <li><i class="icofont icofont-minus minimize-card font-white"></i></li>
                          <li><i class="icofont icofont-refresh reload-card font-white"></i></li>
                          <li><i class="icofont icofont-error close-card font-white"> </i></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="card-body pb-0">
                    <div class="growth-chart">
                      <div id="growth-chart"></div>
                    </div>
                    <div class="code-box-copy">
                      <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#growth"><i class="icofont icofont-copy-alt"></i></button>
                      <pre><code class="language-html" id="growth">&lt;div class="card total-growth"&gt;
                            &lt;div class="card-header pb-0"&gt;
                                &lt;div class="d-flex justify-content-between"&gt;
                                &lt;div class="flex-grow-1"&gt;
                                    &lt;p class="square-after f-w-600 header-text-primary"&gt; Our Total Growth
                                    &lt;i class="fa fa-circle"&gt;&lt;/i&gt;
                                    &lt;/p&gt;
                                    &lt;h4&gt; 96.564%&lt;/h4&gt;
                                &lt;/div&gt;
                                &lt;div class="setting-list"&gt;
                                    &lt;ul class="list-unstyled setting-option"&gt;
                                    &lt;li&gt;&lt;div class="setting-light"&gt;&lt;i class="icon-layout-grid2"&gt;&lt;/i&gt;&lt;/div&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;i class="view-html fa fa-code font-white"&gt;&lt;/i&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;i class="icofont icofont-maximize full-card font-white"&gt;&lt;/i&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;i class="icofont icofont-minus minimize-card font-white"&gt;&lt;/i&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;i class="icofont icofont-refresh reload-card font-white"&gt;&lt;/i&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;i class="icofont icofont-error close-card font-white"&gt; &lt;/i&gt;&lt;/li&gt;
                                    &lt;/ul&gt;
                                &lt;/div&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;
                            &lt;div class="card-body p-0"&gt;
                                &lt;div class="growth-chart"&gt;
                                &lt;div id="growth-chart"&gt;&lt;/div&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;
                            &lt;/div&gt;</code>
                        </pre>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-md-6 box-col-33">
                <div class="card">
                  <div class="card-header pb-0">
                    <div class="d-flex justify-content-between">
                      <div class="flex-grow-1">
                        <p class="square-after f-w-600 header-text-primary">Recent Activity<i class="fa fa-circle"> </i></p>
                        <h4>New & Update</h4>
                      </div>
                      <div class="setting-list">
                        <ul class="list-unstyled setting-option">
                          <li>
                            <div class="setting-light"><i class="icon-layout-grid2"></i></div>
                          </li>
                          <li><i class="view-html fa fa-code font-white"></i></li>
                          <li><i class="icofont icofont-maximize full-card font-white"></i></li>
                          <li><i class="icofont icofont-minus minimize-card font-white"></i></li>
                          <li><i class="icofont icofont-refresh reload-card font-white"></i></li>
                          <li><i class="icofont icofont-error close-card font-white"> </i></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="activity-timeline">
                      <div class="d-flex">
                        <div class="activity-line"></div>
                        <div class="activity-dot-primary"></div>
                        <div class="flex-grow-1"><span class="f-w-600 d-block">Updated Product</span>
                          <p class="mb-0">I like to be real. I don't like things to be staged or fussy.</p>
                        </div>
                      </div>
                      <div class="d-flex">
                        <div class="activity-dot-primary"></div>
                        <div class="flex-grow-1"><span class="f-w-600 d-block">You liked James products</span>
                          <p class="mb-0">If you have it, you can make anything look good.</p>
                        </div>
                      </div>
                      <div class="d-flex align-items-start">
                        <div class="activity-dot-secondary"></div>
                        <div class="flex-grow-1"><span class="f-w-600 d-block">James just like your product</span>
                          <p class="mb-0">I like to design everything to do with the body.</p>
                        </div><i class="fa fa-circle circle-dot-primary"></i>
                      </div>
                      <div class="d-flex">
                        <div class="activity-dot-primary"></div>
                        <div class="flex-grow-1"><span class="f-w-600 d-block">Jenna commented on your product</span>
                          <p class="mb-0">Fashion fades, only style remain the same.</p>
                        </div>
                      </div>
                      <div class="d-flex align-items-start">
                        <div class="activity-dot-secondary"></div>
                        <div class="flex-grow-1"><span class="f-w-600 d-block">Jihan Doe just like your product</span>
                          <p class="mb-0">Design and style should work toward making you look good and feel good without lot of effort.</p>
                        </div><i class="fa fa-circle circle-dot-secondary"></i>
                      </div>
                    </div>
                    <div class="code-box-copy">
                      <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#activity"><i class="icofont icofont-copy-alt"></i></button>
                      <pre><code class="language-html" id="activity">&lt;div class="card"&gt;
                            &lt;div class="card-header pb-0"&gt;
                                &lt;div class="d-flex justify-content-between"&gt;
                                &lt;div class="flex-grow-1"&gt;
                                    &lt;p class="square-after f-w-600 header-text-primary"&gt; Recent Activity
                                    &lt;i class="fa fa-circle"&gt;&lt;/i&gt;
                                    &lt;/p&gt;
                                    &lt;h4&gt; New & Update &lt;/h4&gt;
                                &lt;/div&gt;
                                &lt;div class="setting-list"&gt;
                                    &lt;ul class="list-unstyled setting-option"&gt;
                                    &lt;li&gt;&lt;div class="setting-light"&gt;&lt;i class="icon-layout-grid2"&gt;&lt;/i&gt;&lt;/div&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;i class="view-html fa fa-code font-white"&gt;&lt;/i&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;i class="icofont icofont-maximize full-card font-white"&gt;&lt;/i&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;i class="icofont icofont-minus minimize-card font-white"&gt;&lt;/i&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;i class="icofont icofont-refresh reload-card font-white"&gt;&lt;/i&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;i class="icofont icofont-error close-card font-white"&gt; &lt;/i&gt;&lt;/li&gt;
                                    &lt;/ul&gt;
                                &lt;/div&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;
                            &lt;div class="card-body p-0"&gt;
                                &lt;div class="activity-timeline"&gt;
                                &lt;div class="d-flex"&gt;
                                    &lt;div class="activity-line"&gt;&lt;/div&gt;
                                    &lt;div class="activity-dot-primary"&gt;&lt;/div&gt;
                                    &lt;div class="flex-grow-1"&gt;
                                    &lt;span class="f-w-600 d-block"&gt; Updated Product &lt;/span &gt;
                                    &lt;p class="mb-0"&gt; I like to be real. I don't like things to be staged or fussy.&lt;/p&gt;
                                    &lt;/div&gt;
                                &lt;/div&gt;
                                &lt;div class="d-flex"&gt;
                                    &lt;div class="activity-dot-primary"&gt;&lt;/div&gt;
                                    &lt;div class="flex-grow-1"&gt;
                                    &lt;span class="f-w-600 d-block"&gt; You liked James products &lt;/span &gt;
                                    &lt;p class="mb-0"&gt; If you have it, you can make anything look good.&lt;/p&gt;
                                    &lt;/div&gt;
                                &lt;/div&gt;
                                &lt;div class="d-flex align-items-start"&gt;
                                    &lt;div class="activity-dot-secondary"&gt;&lt;/div&gt;
                                    &lt;div class="flex-grow-1"&gt;
                                    &lt;span class="f-w-600 d-block"&gt; James just like your product &lt;/span &gt;
                                    &lt;p class="mb-0"&gt; I like to design everything to do with the body.&lt;/p&gt;
                                    &lt;/div&gt;
                                &lt;/div&gt;
                                &lt;div class="d-flex"&gt;
                                    &lt;div class="activity-dot-primary"&gt;&lt;/div&gt;
                                    &lt;div class="flex-grow-1"&gt;
                                    &lt;span class="f-w-600 d-block"&gt; Jenna commented on your product &lt;/span &gt;
                                    &lt;p class="mb-0"&gt;Fashion fades, only style remain the same.&lt;/p&gt;
                                    &lt;/div&gt;
                                &lt;/div&gt;
                                &lt;div class="d-flex align-items-start"&gt;
                                    &lt;div class="activity-dot-secondary"&gt;&lt;/div&gt;
                                    &lt;div class="flex-grow-1"&gt;
                                    &lt;span class="f-w-600 d-block"&gt; James just like your product &lt;/span &gt;
                                    &lt;p class="mb-0"&gt;Design and style should work toward making you look good and feel good without lot of effort.&lt;/p&gt;
                                    &lt;/div&gt;
                                &lt;/div&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;
                            &lt;/div&gt; </code>
                        </pre>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 proorder box-col-33">
                <div class="card user-chat">
                  <div class="card-header pb-0">
                    <div class="d-flex justify-content-between">
                      <div class="flex-grow-1">
                        <p class="square-after f-w-600 header-text-primary">Chat With Our Users<i class="fa fa-circle"> </i></p>
                        <h4>Chat</h4>
                      </div>
                      <div class="setting-list">
                        <ul class="list-unstyled setting-option">
                          <li>
                            <div class="setting-light"><i class="icon-layout-grid2"></i></div>
                          </li>
                          <li><i class="view-html fa fa-code font-white"></i></li>
                          <li><i class="icofont icofont-maximize full-card font-white"></i></li>
                          <li><i class="icofont icofont-minus minimize-card font-white"></i></li>
                          <li><i class="icofont icofont-refresh reload-card font-white"></i></li>
                          <li><i class="icofont icofont-error close-card font-white"> </i></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="card-body chat-box">
                    <div class="d-flex left-chat">
                      <div class="flex-grow-1">
                        <div class="message-main">
                          <p class="mb-0">Hii</p>
                        </div>
                        <div class="sub-message message-main">
                          <p class="mb-0">Good Evening, My Friend</p>
                        </div>
                      </div>
                      <p class="f-w-500 mb-0 px-0">7:28 PM</p>
                    </div>
                    <div class="d-flex right-chat">
                      <div class="flex-grow-1 text-end">
                        <div class="message-main pull-right">
                          <p class="text-start mb-0">What can do for you</p>
                          <div class="clearfix"></div>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex left-chat">
                      <div class="flex-grow-1">
                        <div class="sub-message message-main mt-0">
                          <p class="mb-0">Can i Borrow some money</p>
                        </div>
                      </div>
                    </div>
                    <div class="input-group">
                      <input class="form-control" id="mail" type="text" placeholder="Type Your Message" name="text">
                      <div class="send-msg"><i data-feather="send"></i></div>
                    </div>
                    <div class="code-box-copy">
                      <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#chat"><i class="icofont icofont-copy-alt"></i></button>
                      <pre><code class="language-html" id="chat">&lt;div class="card user-chat"&gt;
                            &lt;div class="card-header pb-0"&gt;
                                &lt;div class="d-flex justify-content-between"&gt;
                                &lt;div class="flex-grow-1"&gt;
                                    &lt;p class="square-after f-w-600 header-text-primary"&gt; Chat With Our Users
                                    &lt;i class="fa fa-circle"&gt;&lt;/i&gt;
                                    &lt;/p&gt;
                                    &lt;h4&gt; Chat&lt;/h4&gt;
                                &lt;/div&gt;
                                &lt;div class="setting-list"&gt;
                                    &lt;ul class="list-unstyled setting-option"&gt;
                                    &lt;li&gt;&lt;div class="setting-light"&gt;&lt;i class="icon-layout-grid2"&gt;&lt;/i&gt;&lt;/div&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;i class="view-html fa fa-code font-white"&gt;&lt;/i&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;i class="icofont icofont-maximize full-card font-white"&gt;&lt;/i&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;i class="icofont icofont-minus minimize-card font-white"&gt;&lt;/i&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;i class="icofont icofont-refresh reload-card font-white"&gt;&lt;/i&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;i class="icofont icofont-error close-card font-white"&gt; &lt;/i&gt;&lt;/li&gt;
                                    &lt;/ul&gt;
                                &lt;/div&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;
                            &lt;div class="card-body chat-box"&gt;
                                &lt;div class="d-flex left-chat"&gt;
                                &lt;div class="flex-grow-1"&gt;
                                    &lt;div class="message-main"&gt;
                                    &lt;p class="mb-0"&gt; Hii &lt;/p&gt;
                                    &lt;/div &gt;
                                    &lt;div class="sub-message message-main"&gt;
                                    &lt;p class="mb-0"&gt; Good Evening, My Friend &lt;/p&gt;
                                    &lt;/div &gt;
                                &lt;/div&gt;
                                &lt;p class="f-w-500 mb-0 px-0"&gt; 7:28 PM &lt;/p&gt;
                                &lt;/div&gt;
                                &lt;div class="d-flex right-chat"&gt;
                                &lt;div class="flex-grow-1 text-end"&gt;
                                    &lt;div class="message-main pull-right"&gt;
                                    &lt;p class="text-start mb-0"&gt; What can do for you &lt;/p&gt;
                                    &lt;div class="clearfix"&gt;&lt;/div&gt;
                                    &lt;/div &gt;
                                &lt;/div&gt;
                                &lt;/div&gt;
                                &lt;div class="d-flex left-chat"&gt;
                                &lt;div class="flex-grow-1"&gt;
                                    &lt;div class="sub-message message-main mt-0"&gt;
                                    &lt;p class="mb-0"&gt; Can i Borrow some money &lt;/p&gt;
                                    &lt;/div &gt;
                                &lt;/div&gt;
                                &lt;/div&gt;
                                &lt;div class="input-group"&gt;
                                &lt;input id="mail" class="form-control" type="text" placeholder="Type Your Message" name="text"/&gt;
                                &lt;div class="send-msg"&gt;
                                    &lt;i class="feather feather-send"&gt;&lt;/i&gt;
                                &lt;/div&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;
                            &lt;/div&gt;</code>
                        </pre>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-md-6 box-col-33">
                <div class="card our-todolist">
                  <div class="card-header pb-0">
                    <div class="d-flex justify-content-between">
                      <div class="flex-grow-1">
                        <p class="square-after f-w-600 header-text-primary">Our To-Do List<i class="fa fa-circle"> </i></p>
                        <h4>Todo List</h4>
                      </div>
                      <div class="setting-list">
                        <ul class="list-unstyled setting-option">
                          <li>
                            <div class="setting-light"><i class="icon-layout-grid2"></i></div>
                          </li>
                          <li><i class="view-html fa fa-code font-white"></i></li>
                          <li><i class="icofont icofont-maximize full-card font-white"></i></li>
                          <li><i class="icofont icofont-minus minimize-card font-white"></i></li>
                          <li><i class="icofont icofont-refresh reload-card font-white"></i></li>
                          <li><i class="icofont icofont-error close-card font-white"> </i></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="activity-timeline todo-timeline">
                      <div class="d-flex">
                        <div class="activity-line"></div>
                        <div class="activity-dot-primary"></div>
                        <div class="flex-grow-1">
                          <p class="mt-0 todo-font"><span class="font-primary">20-04-2022 </span>Today</p>
                          <div class="d-flex mt-0"><img class="img-fluid img-30" src="../assets/images/dashboard/default/todo.png" alt="">
                            <div class="flex-grow-1"><span class="f-w-600">New Order $2340<i class="fa fa-circle circle-dot-primary pull-right"></i></span>
                              <p class="mb-0">Update New Product Pdf And Delivery Product</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="d-flex">
                        <div class="activity-dot-secondary"></div>
                        <div class="flex-grow-1">
                          <p class="mt-0 todo-font"><span class="font-primary">20-04-2022 </span>Today<span class="badge badge-primary ms-2">New</span></p><span class="f-w-600">James just like your product<i class="fa fa-circle circle-dot-secondary pull-right"></i></span>
                        </div>
                      </div>
                      <div class="d-flex">
                        <div class="activity-dot-primary"></div>
                        <div class="flex-grow-1">
                          <p class="mt-0 todo-font"><span class="font-primary">20-04-2022 </span>Today</p><span class="f-w-600">Jihan Doe just like your product</span>
                          <p class="mb-0">Design and style should work making you look good and feel good without lot of effort.</p>
                        </div>
                      </div>
                      <div class="d-flex">
                        <div class="activity-dot-primary"></div>
                        <div class="flex-grow-1">
                          <p class="mt-0 todo-font"><span class="font-primary">20-04-2022 </span>Today</p><span class="f-w-600">Take Our Client Metting<i class="fa fa-circle circle-dot-primary pull-right"></i></span>
                          <p class="mb-0">Hosting an effective client meeting.</p>
                        </div>
                      </div>
                    </div>
                    <div class="code-box-copy">
                      <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#to-do"><i class="icofont icofont-copy-alt"></i></button>
                      <pre><code class="language-html" id="to-do">&lt;div class="card our-todolist"&gt;
                            &lt;div class="card-header pb-0"&gt;
                                &lt;div class="d-flex justify-content-between"&gt;
                                &lt;div class="flex-grow-1"&gt;
                                    &lt;p class="square-after f-w-600 header-text-primary"&gt; Our To-Do List
                                    &lt;i class="fa fa-circle"&gt;&lt;/i&gt;
                                    &lt;/p&gt;
                                    &lt;h4&gt; Todo List &lt;/h4&gt;
                                &lt;/div&gt;
                                &lt;div class="setting-list"&gt;
                                    &lt;ul class="list-unstyled setting-option"&gt;
                                    &lt;li&gt;&lt;div class="setting-light"&gt;&lt;i class="icon-layout-grid2"&gt;&lt;/i&gt;&lt;/div&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;i class="view-html fa fa-code font-white"&gt;&lt;/i&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;i class="icofont icofont-maximize full-card font-white"&gt;&lt;/i&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;i class="icofont icofont-minus minimize-card font-white"&gt;&lt;/i&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;i class="icofont icofont-refresh reload-card font-white"&gt;&lt;/i&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;i class="icofont icofont-error close-card font-white"&gt; &lt;/i&gt;&lt;/li&gt;
                                    &lt;/ul&gt;
                                &lt;/div&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;
                            &lt;div class="card-body p-0"&gt;
                                &lt;div class="activity-timeline"&gt;
                                &lt;div class="d-flex"&gt;
                                    &lt;div class="activity-line"&gt;&lt;/div&gt;
                                    &lt;div class="activity-dot-primary"&gt;&lt;/div&gt;
                                    &lt;div class="flex-grow-1"&gt;
                                    &lt;p class="todo-font mt-0"&gt;
                                        &lt;span class="font-primary"&gt; 20-04-2022 &lt;/span&gt;
                                        Today
                                    &lt;/p &gt;
                                    &lt;div class="d-flex mt-0"&gt;
                                        &lt;img class="img-fluid img-30" src="../assets/images/dashboard/default/todo.png" alt=""/&gt;
                                        &lt;div class="flex-grow-1"&gt;
                                        &lt;span class="f-w-600"&gt; New Order $2340
                                            New Order $2340
                                            &lt;i class="fa fa-circle circle-dot-primary pull-right"&gt;
                                        &lt;/span&gt;
                                        &lt;p class="mb-0"&gt; Update New Product Pdf And Delivery Product &lt;/p&gt;
                                        &lt;/div&gt;
                                    &lt;/div&gt;
                                    &lt;/div&gt;
                                &lt;/div&gt;
                                &lt;div class="d-flex"&gt;
                                    &lt;div class="activity-dot-secondary"&gt;&lt;/div&gt;
                                    &lt;div class="flex-grow-1"&gt;
                                    &lt;p class="todo-font mt-0"&gt;
                                        &lt;span class="font-primary"&gt; 20-04-2022 &lt;/span&gt;
                                        Today
                                        &lt;span class="badge badge-primary ms-2"&gt; New &lt;/span&gt;
                                    &lt;/p &gt;
                                    &lt;span class="f-w-600"&gt; James just like your product
                                        &lt;i class="fa fa-circle circle-dot-secondary pull-right"&gt;&lt;/i&gt;
                                    &lt;/span&gt;
                                    &lt;/div&gt;
                                &lt;/div&gt;
                                &lt;div class="d-flex"&gt;
                                    &lt;div class="activity-dot-primary"&gt;&lt;/div&gt;
                                    &lt;div class="flex-grow-1"&gt;
                                    &lt;p class="mt-0 todo-font"&gt;
                                        &lt;span class="font-primary"&gt; 20-04-2022 &lt;/span&gt;
                                        Today
                                    &lt;/p &gt;
                                    &lt;span class="f-w-600"&gt; Jihan Doe just like your product
                                    &lt;/span&gt;
                                    &lt;p class="mb-0"&gt; Design and style should work making you look good and feel good without lot of effort. &lt;/p&gt;
                                    &lt;/div&gt;
                                &lt;/div&gt;
                                &lt;div class="d-flex"&gt;
                                    &lt;div class="activity-dot-primary"&gt;&lt;/div&gt;
                                    &lt;div class="flex-grow-1"&gt;
                                    &lt;p class="todo-font mt-0"&gt;
                                        &lt;span class="font-primary"&gt; 20-04-2022 &lt;/span&gt;
                                        Today
                                    &lt;/p &gt;
                                    &lt;span class="f-w-600"&gt; Take Our Client Metting
                                        &lt;i class="fa fa-circle circle-dot-primary pull-right"&gt;&lt;/i&gt;
                                    &lt;/span&gt;
                                    &lt;p class="mb-0"&gt; Hosting an effective client meeting. &lt;/p&gt;
                                    &lt;/div&gt;
                                &lt;/div&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;
                            &lt;/div&gt; </code>
                        </pre>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>
        <!-- footer start-->
        <footer class="footer">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6 p-0 footer-left">
                <p class="mb-0">Copyright © 2023 Tivo. All rights reserved.</p>
              </div>
              <div class="col-md-6 p-0 footer-right">
                <p class="mb-0">Hand-crafted & made with <i class="fa fa-heart font-danger"></i></p>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <!-- latest jquery-->
    <script src="../assets/js/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap js-->
    <script src="../assets/js/bootstrap/bootstrap.bundle.min.js"></script>
    <!-- feather icon js-->
    <script src="../assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="../assets/js/icons/feather-icon/feather-icon.js"></script>
    <!-- scrollbar js-->
    <script src="../assets/js/scrollbar/simplebar.js"></script>
    <script src="../assets/js/scrollbar/custom.js"></script>
    <!-- Sidebar jquery-->
    <script src="../assets/js/config.js"></script>
    <script src="../assets/js/sidebar-menu.js"></script>
    <script src="../assets/js/chart/chartist/chartist.js"></script>
    <script src="../assets/js/chart/chartist/chartist-plugin-tooltip.js"></script>
    <script src="../assets/js/chart/apex-chart/apex-chart.js"></script>
    <script src="../assets/js/chart/apex-chart/stock-prices.js"></script>
    <script src="../assets/js/prism/prism.min.js"></script>
    <script src="../assets/js/clipboard/clipboard.min.js"></script>
    <script src="../assets/js/custom-card/custom-card.js"></script>
    <script src="../assets/js/notify/bootstrap-notify.min.js"></script>
    <script src="../assets/js/vector-map/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="../assets/js/vector-map/map/jquery-jvectormap-world-mill-en.js"></script>
    <script src="../assets/js/vector-map/map/jquery-jvectormap-us-aea-en.js"></script>
    <script src="../assets/js/vector-map/map/jquery-jvectormap-uk-mill-en.js"></script>
    <script src="../assets/js/vector-map/map/jquery-jvectormap-au-mill.js"></script>
    <script src="../assets/js/vector-map/map/jquery-jvectormap-chicago-mill-en.js"></script>
    <script src="../assets/js/vector-map/map/jquery-jvectormap-in-mill.js"></script>
    <script src="../assets/js/vector-map/map/jquery-jvectormap-asia-mill.js"></script>
    <script src="../assets/js/dashboard/default.js"></script>
    <script src="../assets/js/notify/index.js"></script>
    <script src="../assets/js/typeahead/handlebars.js"></script>
    <script src="../assets/js/typeahead/typeahead.bundle.js"></script>
    <script src="../assets/js/typeahead/typeahead.custom.js"></script>
    <script src="../assets/js/typeahead-search/handlebars.js"></script>
    <script src="../assets/js/typeahead-search/typeahead-custom.js"></script>
    <!-- Template js-->
    <script src="../assets/js/script.js"></script>
    <script src="../assets/js/theme-customizer/customizer.js">  </script>
    <!-- login js-->
  </body> --}}

</html>