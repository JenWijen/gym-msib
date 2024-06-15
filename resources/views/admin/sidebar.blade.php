<style>
  .nav-link.active {
    background-color: #f8f9fa; /* Example active state styling */
    color: #007bff; /* Example active state color */
  }
</style>

<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item">
      <a class="nav-link" href="{{ route('admin.master') }}">
        <i class="icon-grid menu-icon"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('roles.index') }}">
        <i class="bi bi-person-badge-fill menu-icon"></i>
        <span class="menu-title">User Role</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('trainers.index') }}">
        <i class="bi bi-person-badge-fill menu-icon"></i>
        <span class="menu-title">Trainer</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('member_list.index') }}">
        <i class="bi bi-people-fill menu-icon"></i>
        <span class="menu-title">Member</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('packages.index') }}">
        <i class="bi bi-box-seam menu-icon"></i>
        <span class="menu-title">Trainer Package</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('non_package.index') }}">
        <i class="bi bi-box menu-icon"></i>
        <span class="menu-title">Non-Trainer Package</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('memberships.index') }}">
        <i class="bi bi-card-checklist menu-icon"></i>
        <span class="menu-title">Membership + Trainer</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('non_membership.index') }}">
        <i class="bi bi-card-list menu-icon"></i>
        <span class="menu-title">Membership</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('rent_package.index') }}">
        <i class="bi bi-bag-plus menu-icon"></i>
        <span class="menu-title">Rental Package</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('rent_book.index') }}">
        <i class="bi bi-bag-plus menu-icon"></i>
        <span class="menu-title">Rental</span>
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
  </ul>
</nav>

