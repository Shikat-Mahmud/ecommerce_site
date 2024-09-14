<nav class="pc-sidebar">
    <div class="navbar-wrapper">
        <div class="m-header">
            <a href="{{ route('admin.index') }}" class="b-brand text-primary">

                @php
                    $settings = generalSettings()
                @endphp
                @if($settings->logo)
                    <img src="{{ asset('storage/' . $settings->logo) }}" class="logo-lg" alt="Logo image"
                        style="max-height: 40px; width: auto; max-width: 100%;">
                @else
                    <img src="https://codedthemes.com/demos/admin-templates/gradient-able/bootstrap/default/assets/images/logo-dark.svg"
                        alt="logo image" class="logo-lg">
                @endif
        </div>
        <div class="navbar-content">
            <ul class="pc-navbar">
                <li class="pc-item pc-caption">
                    <label>Navigation</label>
                </li>
                <li class="pc-item pc-hasmenu">
                    <a href="{{ route('customer.dashboard') }}" class="pc-link"><span class="pc-micon">
                            <i class="ph ph-gauge"></i></span><span class="pc-mtext">Dashboard</span></a>
                </li>
                <li class="pc-item pc-hasmenu">
                    <a href="{{ route('customer.profile.edit') }}" class="pc-link"><span class="pc-micon">
                            <i class="ph ph-user-circle"></i></span><span class="pc-mtext">Edit profile</span></a>
                </li>
                <li class="pc-item pc-hasmenu text-danger">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a href="#" class="pc-link" onclick="event.preventDefault(); this.closest('form').submit();">
                            <span class="pc-micon">
                                <i class="ph ph-power"></i>
                            </span>
                            <span class="pc-mtext">Logout</span>
                        </a>
                    </form>
                </li>


            </ul>
        </div>
    </div>
</nav>