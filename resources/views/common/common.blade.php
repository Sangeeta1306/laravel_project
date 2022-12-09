<aside class="menu-sidebar d-none d-lg-block fw-bold" style="background-color:lightblue">
  
  <div class="menu-sidebar__content js-scrollbar1">
      <nav class="navbar-sidebar">
        <b>
          <ul class="list-unstyled navbar__list ">
        
              <li class="@yield('dashboard_select') px-4">
                  <a href="{{route('dashboard')}}">
                      <i class="fas fa-tachometer-alt"></i>Dashboard</a>
              </li>
            
              <li class="@yield('employee_select') px-4">
                  <a href="{{route('employee')}}">
                      <i class="fa fa-star"></i>Employee</a>                    
              </li>

              <li class="@yield('company_select') px-4">
                <a class="" href="{{ route('company') }}">
                      <i class="fa fa-paperclip"></i> &nbsp;Company</a>
              </li>

              <a class="nav-link" href="{{route('logout')}}">Logout</a>

          </ul>
        </b>
      </nav>
  </div>
</aside>


