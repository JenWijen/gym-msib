<style>
  .nav-link.active {
    background-color: #f8f9fa; /* Example active state styling */
    color: #007bff; /* Example active state color */
  }
</style>

<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item">
      <a class="nav-link" href="/admin/dashboard">
        <i class="icon-grid menu-icon"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('trainers.index') }}">
        <i class="mdi mdi-account-star menu-icon"></i>
        <span class="menu-title">Trainer</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('admin.members.index') }}">
        <i class="mdi mdi-account-star menu-icon"></i>
        <span class="menu-title">Member</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('packages.index') }}">
        <i class="mdi mdi-account-box-outline menu-icon"></i>
        <span class="menu-title">Trainer Package</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('npackages.index') }}">
        <i class="mdi mdi-account-box-outline menu-icon"></i>
        <span class="menu-title">Non-Trainer Package</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('memberships.index') }}">
        <i class="mdi mdi-account-multiple-plus menu-icon"></i>
        <span class="menu-title">Membership + Trainer</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('nmemberships.index') }}">
        <i class="mdi mdi-account-multiple-outline menu-icon"></i>
        <span class="menu-title">Membership</span>
      </a>
    </li>

    <script>
      // Get all nav links
      var navLinks = document.querySelectorAll('.nav-link');
  
      // Add click event listener to each nav link
      navLinks.forEach(function(link) {
        link.addEventListener('click', function() {
          // Remove active class from all nav links
          navLinks.forEach(function(nav) {
            nav.classList.remove('active');
          });
  
          // Add active class to the clicked nav link
          link.classList.add('active');
        });
      });
    </script>
    
      {{-- <div class="collapse" id="icons">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="pages/icons/mdi.html">Mdi icons</a></li>
        </ul>
      </div> --}}
    
    {{-- <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
        <i class="icon-head menu-icon"></i>
        <span class="menu-title">User Pages</span>
      </a>
      <div class="collapse" id="auth">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
          <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
        </ul>
      </div>
    </li> --}}
  </ul>
</nav>

