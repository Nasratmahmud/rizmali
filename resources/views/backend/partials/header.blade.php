@if(session('t-success'))
<script>
    toastr.success("{{ session('t-success') }}");
</script>
@endif

@if(session('t-error'))
<script>
    toastr.error("{{ session('t-error') }}");
</script>
@endif

<div class="header-wrapper row m-0">
    <div class="header-logo-wrapper col-auto p-0">
      {{-- <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div> --}}
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
        {{-- <ul class="header-left">
          <li class="onhover-dropdown link-nav"><span class="f-w-600 "><a href="#">Dashboard</a></span><span><i class="middle" data-feather="chevron-down"></i></span>
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
        </ul> --}}
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
        <li class="profile-nav onhover-dropdown">
          <div class="account-user"><i data-feather="user"></i></div>
          <ul class="profile-dropdown onhover-show-div">
            <li><a href="#"><i data-feather="user"></i><span>Account</span></a></li>
            <form action="{{route('logout')}}" method="post">
              @csrf
              <li><button><i data-feather="log-in"> </i><span>Log out</span></button></li>
            </form>
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
  </div>
