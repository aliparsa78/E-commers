

<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-1 border-radius-xl fixed-start ms-3 shadow" id="sidenav-main">
    <div class="sidenav-header text-dark mt-3" >
        <span class="text-dark"> E-Shop</span>
    </div>
    
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item"">
          <a class="nav-link text-white {{Request::is('dashboard') ? 'active':''}}" href="{{url('dashboard')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-dashboard nav-link-text ms-1 text-bold">   Dashboard</i>
            </div>
          </a>
        </li>
        <li class="nav-item"">
          <a class="nav-link text-white {{Request::is('catagories') ? 'active':''}}" href="{{url('catagories')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-user nav-link-text ms-1 text-bold">  Catagories</i>
            </div>
          </a>
        </li>
        <li class="nav-item {{Request::is('add-catagory') ? 'active':''}}">
          <a class="nav-link text-white {{Request::is('add-catagory') ? 'active':''}}" href="{{url('add-catagory')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-users nav-link-text ms-1 text-bold">  Add Caragory</i>
              
            </div>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white {{Request::is('products') ? 'active':''}}" href="{{url('products')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-user nav-link-text ms-1 text-bold"> Products</i>
              
            </div>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white {{Request::is('add-products') ? 'active':''}}" href="{{url('add-products')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-user nav-link-text ms-1 text-bold">  Add Products</i>
            </div>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white {{Request::is('orders') ? 'active':''}}" href="{{url('orders')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-list  nav-link-text ms-1 text-bold">  Orders</i>
            </div>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white {{Request::is('users') ? 'active':''}}" href="{{url('users')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-users nav-link-text ms-1 text-bold"> Users</i>
            </div>
          </a>
        </li>
      </ul>
    </div>
   
  </aside>