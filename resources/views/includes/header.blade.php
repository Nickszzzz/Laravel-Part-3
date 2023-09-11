<div class="header">    
    <div class="header-content clearfix">
        
        <div class="nav-control">
            <div class="hamburger">
                <span class="toggle-icon"><i class="icon-menu"></i></span>
            </div>
        </div>
        
        <div class="header-right">
            <ul class="clearfix">
                <li class="icons dropdown">
                    <div class="user-img c-pointer position-relative"   data-toggle="dropdown">
                        <span class="activity active"></span>
                        <img src="{{ asset('admin/images/user/1.png') }}" height="40" width="40" alt="">
                    </div>
                    <div class="drop-down dropdown-profile   dropdown-menu">
                        <div class="dropdown-content-body">
                            <ul>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                  document.getElementById('logout-form').submit();">
                                                  <i class="icon-key"></i> <span>
                                     {{ __('Logout') }}
                                 </a>

                                 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                     @csrf
                                 </form></li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>