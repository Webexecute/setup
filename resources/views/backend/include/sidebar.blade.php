<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="index.html">
          <img alt="image" src="{{ asset('public/backend/assets/img/logo.png') }}" class="header-logo" />
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
                     <div class="siderbar-profile-name"> Alexa Lopez </div>
                     <div class="siderbar-profile-position">Manager </div>
                 </div>
                 <div class="sidebar-profile-buttons">
                     <a class="tooltips waves-effect waves-block toggled" href="profile.html" data-toggle="tooltip" title="" data-original-title="Profile">
                         <i class="fas fa-user sidebarQuickIcon"></i>
                     </a>
                     <a class="tooltips waves-effect waves-block" href="email-inbox.html" data-toggle="tooltip" title="" data-original-title="Mail">
                         <i class="fas fa-envelope sidebarQuickIcon"></i>
                     </a>
                     <a class="tooltips waves-effect waves-block" href="chat.html" data-toggle="tooltip" title="" data-original-title="Chat">
                    <i class="fas fa-comment-dots  sidebarQuickIcon"></i>
                     </a>
                     <a class="tooltips waves-effect waves-block" href="auth-login.html" data-toggle="tooltip" title="" data-original-title="Logout">
                    <i class="fas fa-share-square sidebarQuickIcon"></i>
                     </a>
                 </div>
             </div>
         </li>

        <li class="menu-header">Main</li>
        <li class="active"><a class="nav-link" href="{{ route('admin-dashboard') }}"><i class="fas fa-boxes"></i><span>Widgets</span></a></li>

      </ul>
    </aside>
  </div>