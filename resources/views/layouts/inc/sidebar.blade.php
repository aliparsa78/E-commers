

<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
        <img src="../assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white">Material Dashboard 2</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item ">
          <a class="nav-link text-white {{Request::is('dashboard') ? 'active':''}} " href="{{url('dashboard')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="nav-link-text ms-1 text-bold"id="one">
              Dashboard
              </i>
            </div>
           
          </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link text-white {{Request::is('catagories') ? 'active':''}}" href="{{url('catagories')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="nav-link-text ms-1 text-bold">Catagories</i>
            </div>
          </a>
        </li>
        <li class="nav-item {{Request::is('add-catagory') ? 'active':''}}">
          <a class="nav-link text-white {{Request::is('add-catagory') ? 'active':''}}" href="{{url('add-catagory')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="nav-link-text ms-1 text-bold">Add Caragory</i>
              
            </div>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white {{Request::is('products') ? 'active':''}}" href="{{url('products')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="nav-link-text ms-1 text-bold"> Products</i>
              
            </div>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white {{Request::is('add-products') ? 'active':''}}" href="{{url('add-products')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="nav-link-text ms-1 text-bold">Add Products</i>
              
            </div>
          </a>
        </li>
      </ul>
    </div>
   
  </aside>