<div class="sidebar-wrapper">
    <div>
      <div class="logo-wrapper"><a href="index.html"><img class="img-fluid for-light" src="{{asset('/backend/assets/images/logo/logo.png')}}" alt=""></a>
        <div class="back-btn"><i data-feather="grid"></i></div>
        <div class="toggle-sidebar icon-box-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
      </div>
      <div class="logo-icon-wrapper"><a href="#">
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
                <li><a class="lan-4" href="#">Default</a></li>
                <li><a class="lan-5" href="#">Ecommerce</a></li>
              </ul>
            </li>
            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="javascript:void(0)"><i data-feather="shopping-bag"></i><span class="">Package</span></a>
              <ul class="sidebar-submenu">
                <li><a href="{{route('package.view')}}">Package List</a></li>
                <li><a href="{{route('package.create')}}">Package Create</a></li>
              </ul>
            </li>
            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="javascript:void(0)"><i data-feather="layout"></i><span class="">Hotel</span></a>
              <ul class="sidebar-submenu">
                <li><a href="{{route('hotel.view')}}">Hotel List</a></li>
                <li><a href="{{route('hotel.create')}}">Hotel Create</a></li>
              </ul>
            </li>
            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="javascript:void(0)"><i data-feather="shopping-bag"></i><span class="">Prime Destination</span></a>
              <ul class="sidebar-submenu">
                <li><a href="{{route('prime.destinations.view')}}">Destination List</a></li>
                <li><a href="{{route('prime.destinations.create')}}">Destination Create</a></li>
              </ul>
            </li>
            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="javascript:void(0)"><i data-feather="layers"></i><span class="">Package Price</span></a>
              <ul class="sidebar-submenu">
                <li><a href="{{route('package.price.view')}}">Package Price List</a></li>
                <li><a href="{{route('package.price.create')}}">Package Price Create</a></li>
              </ul>
            </li>
            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="#"><i data-feather="git-pull-request"> </i><span>File manager</span></a></li>
            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="#"><i data-feather="monitor"> </i><span>kanban Board</span></a></li>
            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="javascript:void(0)"><i data-feather="message-circle"></i><span>Chat</span></a>
              <ul class="sidebar-submenu">
                <li><a href="#">Chat App</a></li>
                <li><a href="#">Video chat</a></li>
              </ul>
            </li>
            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="javascript:void(0)"><i data-feather="users"></i><span>Users</span></a>
              <ul class="sidebar-submenu">
                <li><a href="#">Users Profile</a></li>
                <li><a href="#">Users Edit</a></li>
                <li><a href="#">Users Cards</a></li>
              </ul>
            </li>
            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="#"><i data-feather="heart"> </i><span>Bookmarks</span></a></li>
            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="#"><i data-feather="list"> </i><span>Contacts</span></a></li>
            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="#"><i data-feather="check-square"> </i><span>Tasks</span></a></li>
            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="#"><i data-feather="calendar"> </i><span>Calendar</span></a></li>
            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="#"><i data-feather="zap"> </i><span>Social App</span></a></li>
            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="#"><i data-feather="clock"> </i><span>To-Do</span></a></li>
            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="#"><i data-feather="search"> </i><span>Search Result</span></a></li>
            
            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="#"><i data-feather="cast"> </i><span>Landing page</span></a></li>
            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="#"><i data-feather="file-text"> </i><span>Sample page</span></a></li>
            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="#"><i data-feather="globe"> </i><span>Internationalize</span></a></li>
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
                          <li><a href="#">Error Page 1</a></li>
                          <li><a href="#">Error Page 2</a></li>
                          <li><a href="#">Error Page 3</a></li>
                          <li><a href="#">Error Page 4</a></li>
                          <li><a href="#">Error Page 5</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="col mega-box">
                      <div class="link-section">
                        <div class="submenu-title">
                          <h5> Authentication</h5>
                        </div>
                        <ul class="submenu-content opensubmegamenu">
                          <li><a href="#" target="_blank">Login Simple</a></li>
                          <li><a href="#" target="_blank">Login with bg image</a></li>
                          <li><a href="#" target="_blank">Login with image two</a></li>
                          <li><a href="#" target="_blank">Login With validation</a></li>
                          <li><a href="#" target="_blank">Login with tooltip</a></li>
                          <li><a href="#" target="_blank">Login with sweetalert</a></li>
                          <li><a href="#" target="_blank">Register Simple</a></li>
                          <li><a href="#" target="_blank">Register with Bg Image</a></li>
                          <li><a href="#" target="_blank">Register with Image Two</a></li>
                          <li><a href="#">Unlock User</a></li>
                          <li><a href="#">Forget Password</a></li>
                          <li><a href="#">Reset Password</a></li>
                          <li><a href="#">Maintenance</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="col mega-box">
                      <div class="link-section">
                        <div class="submenu-title">
                          <h5>Coming Soon</h5>
                        </div>
                        <ul class="submenu-content opensubmegamenu">
                          <li><a href="#">Coming Simple</a></li>
                          <li><a href="#">Coming with Bg video</a></li>
                          <li><a href="#">Coming with Bg Image</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="col mega-box">
                      <div class="link-section">
                        <div class="submenu-title">
                          <h5>Email templates</h5>
                        </div>
                        <ul class="submenu-content opensubmegamenu">
                          <li><a href="#">Basic Email</a></li>
                          <li><a href="#">Basic With Header</a></li>
                          <li><a href="#">Ecommerce Template</a></li>
                          <li><a href="#">Email Template 2</a></li>
                          <li><a href="#">Ecommerce Email</a></li>
                          <li><a href="#">Order Success</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="javascript:void(0)"><i data-feather="image"></i><span>Gallery</span></a>
              <ul class="sidebar-submenu">
                <li><a href="#">Gallery Grid</a></li>
                <li><a href="#">Gallery Grid Desc</a></li>
                <li><a href="#">Masonry Gallery</a></li>
                <li><a href="#">Masonry with Desc</a></li>
                <li><a href="#">Hover Effects</a></li>
              </ul>
            </li>
            <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="#"><i data-feather="users"> </i><span>Support Ticket</span></a></li>
          </ul>
        </div>
        <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
      </nav>
    </div>
  </div>
