@php

$currentRoute = Route::current()->getName();

if (!empty(Auth()->guard('admin')->user())) {
$data = Auth()->guard('admin')->user();

  if($data['usertype'] == "A"){
      $userType = "Admin";
  }
  if($data['usertype'] == "U"){
      $userType = "User";
  }
}
@endphp
<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="index.html">
          <img alt="image" src="{{ asset('public/uploads/my_image/'.$data['image']) }}" class="header-logo" />
          <span class="logo-name">Village</span>
        </a>
      </div>
      <ul class="sidebar-menu">
          <li class="dropdown active" style="display: block;">
               <div class="sidebar-profile">
                 <div class="siderbar-profile-pic">
                     <img src="{{ asset('public/backend/assets/img/users/user-6.png') }}" class="profile-img-circle box-center" alt="User Image">
                 </div>
                 <div class="siderbar-profile-details">
                     <div class="siderbar-profile-name"> {{  strtoupper($data['username']) }}</div>
                     <div class="siderbar-profile-position">{{ strtoupper($userType) }} </div>
                 </div>
                 <div class="sidebar-profile-buttons">
                 <a class="tooltips waves-effect waves-block toggled" href="{{ route('my-profile') }}" data-toggle="tooltip" title="" data-original-title="My Profile">
                        <i class="fas fa-user sidebarQuickIcon"></i>
                     </a>
                     
                     <a class="tooltips waves-effect waves-block" href="auth-login.html" data-toggle="tooltip" title="" data-original-title="Logout">
                        <i class="fas fa-share-square sidebarQuickIcon"></i>
                     </a>
                 </div>
             </div>
         </li>

        <li class="menu-header">Menu</li>
        <li class="{{ $currentRoute == 'admin-dashboard' ? "active" : ''}}">
                <a class="nav-link" href="{{ route('admin-dashboard') }}">
                  <i class="fas fa-desktop"></i>
                  <span>Dashboard</span></a>
            </li>

      </ul>
    </aside>
  </div>