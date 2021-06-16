<style type="text/css">
    li.nav-header {
    list-style: none;
    }

    .card-header span{
      margin-left: 40px;
}

</style>
<div class="col-md-3">
            <div class="card">
                <div class="card-header"><span >{{ __('My Profile') }}</span></div>

                <div class="card-body">
                <ul class="user-sidebar" style="margin: 0px !important"> 

                <li class="nav-header"><a href="{{ route('supplier-dashboard') }}"><p class="mt-2">Dashboard</p></a></li>
                <li class="nav-header"><a href="{{ route('supplier-profile') }}"><p class="mt-2">My Profile</p></a></li>
                <li class="nav-header"><a href="{{ route('supplier-bookings')}}"><p class=" mt-2">Bookings</p></a></li>
                <li class="nav-header"><a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><p class=" mt-2">Logout</p></a>
                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
                </ul>
            </div>
            </div>
         </div>