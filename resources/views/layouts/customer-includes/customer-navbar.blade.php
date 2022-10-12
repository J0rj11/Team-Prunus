<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="index.html"><img src="/images/zlogo.png" class="mr-2"
                alt="logo" /></a>
        <a class="navbar-brand brand-logo-mini" href="index.html"><img src="/images/zlogo.png" alt="logo" /></a>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <ul class="navbar-nav mr-lg-2">
            <li class="nav-item nav-search d-none d-lg-block">
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <button class="btn btn-sm btn-outline-primary dropdown-toggle w-color no-border"
                                type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">All
                                Products</button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Product 1</a>
                                <a class="dropdown-item" href="#">Product 1</a>
                                <a class="dropdown-item" href="#">Product 1</a>
                                <a class="dropdown-item" href="#">Product 1</a>
                            </div>
                        </div>
                        <input type="text" class="form-color form-control"
                            aria-label="Text input with dropdown button">
                    </div>
                </div>
            </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item dropdown">
                <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#"
                    data-toggle="dropdown">
                    <i class="fa-solid fa-bars mx-0"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                    aria-labelledby="notificationDropdown">
                    <div class="center">
                        <div class="customer-nav-item customer-nav-profile">
                            <div class="">
                                <img src="/images/faces/user-icon.png" alt="user">
                                <p class="font-weight-bolder my-3">
                                    {{ auth()->user()->first_name . ' ' . auth()->user()->last_name }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="preview-thumbnail px-2 py-1">
                        <a class="nav-link nav-color px-3" href="">
                            <i class="menu-icon icon-md">
                                <iconify-icon icon="mdi:shovel"></iconify-icon>
                            </i>
                            <span class="menu-title">PRODUCT</span>
                        </a>
                    </div>
                    <div class="preview-thumbnail px-2 py-1">
                        <a class="nav-link nav-color px-3" href="{{ route('customer.reservation.index') }}">
                            <i class="menu-icon icon-md">
                                <iconify-icon icon="fluent:notepad-edit-16-regular">
                            </i>
                            <span class="menu-title">RESERVATION</span>
                        </a>
                    </div>
                    <div class="preview-thumbnail px-2 py-1">
                        <a class="nav-link nav-color px-3" href="">
                            <i class="menu-icon icon-md">
                                <iconify-icon icon="emojione-monotone:ballot-box-with-check"></iconify-icon>
                            </i>
                            <span class="menu-title">STATUS</span>
                        </a>
                    </div>

                    <div class="preview-thumbnail px-2 py-1">
                        <button class="nav-link nav-color px-3"
                            onclick="document.getElementById('logoutForm').submit();">
                            <i class="menu-icon icon-md">
                                <iconify-icon icon="emojione-monotone:ballot-box-with-check"></iconify-icon>
                            </i>
                            <span class="menu-title">Logout</span>
                        </button>
                        <form action="{{ route('logout') }}" method="POST" id="logoutForm">
                            @csrf
                        </form>
                    </div>
            </li>
        </ul>
    </div>
</nav>
