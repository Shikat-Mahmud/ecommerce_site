<nav class="pc-sidebar">
    <div class="navbar-wrapper">
    <div class="m-header">
            <a href="{{ route('home') }}" class="b-brand text-primary">

                @php
                $settings = generalSettings()
                @endphp
                @if($settings->logo)
                <img src="{{ asset('storage/' . $settings->logo) }}" class="logo-lg" alt="Logo image"
                    style="max-height: 40px; width: auto; max-width: 100%;">
                @else
                <img src="{{ asset('frontend/img/logo/logo.png') }}"
                    alt="logo image" class="logo-lg">
                @endif
        </div>
        <div class="navbar-content">
            <div class="text-center my-3">
                @php
                    $user = user(auth()->user()->id)
                @endphp

                @if (isset($user))
                    @if (isset($user->photo))
                        <img src="{{ asset('storage/' . $user->photo) }}" alt="Photo" class="rounded-circle"
                            style="height: 100px; width: 100px; object-fit: cover; border: 3px solid #60AAFF; padding: 2px;">
                    @else
                        <img src="{{ asset('/assets/images/user/avatar-2.jpg') }}" class="img-radius mb-4"
                            alt="User-Profile-Image">
                    @endif

                    <div class="mt-3">
                        <h5>{{ $user->name }}</h5>
                        <span>{{ $user->email }}</span>
                    </div>
                @endif
            </div>
            <ul class="pc-navbar">
                <li class="pc-item pc-hasmenu">
                    <a href="{{ route('customer.dashboard') }}" class="pc-link"><span class="pc-micon">
                            <i class="ph ph-gauge"></i></span><span class="pc-mtext">Dashboard</span></a>
                </li>

                <li class="pc-item pc-hasmenu">
                    <a href="{{ route('customer.orders') }}" class="pc-link"><span class="pc-micon">
                            <i class="ph ph-shopping-cart"></i></span><span class="pc-mtext">My Orders</span></a>
                </li>

                <li class="pc-item pc-hasmenu">
                    <a href="{{ route('customer.billing.detail') }}" class="pc-link"><span class="pc-micon">
                            <i class="ph ph-receipt"></i></span><span class="pc-mtext">Billing Address</span></a>
                </li>
                
                <li class="pc-item pc-hasmenu">
                    <a href="{{ route('customer.profile.edit') }}" class="pc-link"><span class="pc-micon">
                            <i class="ph ph-user-circle"></i></span><span class="pc-mtext">Edit profile</span></a>
                </li>
                
                <li class="pc-item pc-hasmenu">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a href="#" class="pc-link" onclick="event.preventDefault(); this.closest('form').submit();"
                            style="color: #FF5E79;">
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