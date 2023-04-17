<div class="top-nav top-header sticky-header">
    <div class="container-fluid-lg">
        <div class="row">
            <div class="col-12">
                <div class="navbar-top">
                    <button class="navbar-toggler d-xl-none d-inline navbar-menu-button" type="button"
                            data-bs-toggle="offcanvas" data-bs-target="#primaryMenu">
                                <span class="navbar-toggler-icon">
                                    <i class="fa-solid fa-bars"></i>
                                </span>
                    </button>
                    <a href="index.html" class="web-logo nav-logo">
                        <img src="../assets/images/logo/1.png" class="img-fluid blur-up lazyload" alt="">
                    </a>

                    <div class="middle-box">

                        <div class="search-box">
                            <div class="input-group">
                                <input type="search" class="form-control" placeholder="I'm searching for..."
                                       aria-label="Recipient's username" aria-describedby="button-addon2">
                                <button class="btn" type="button" id="button-addon2">
                                    <i data-feather="search"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="rightside-box">
                        <div class="search-full">
                            <div class="input-group">
                                        <span class="input-group-text">
                                            <i data-feather="search" class="font-light"></i>
                                        </span>
                                <input type="text" class="form-control search-type" placeholder="Search here..">
                                <span class="input-group-text close-search">
                                            <i data-feather="x" class="font-light"></i>
                                        </span>
                            </div>
                        </div>
                        <ul class="right-side-menu">
                            <li class="right-side">
                                <div class="delivery-login-box">
                                    <div class="delivery-icon">
                                        <div class="search-box">
                                            <i data-feather="search"></i>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="right-side">
                                <a href="wishlist.html" class="btn p-0 position-relative header-wishlist">
                                    <i data-feather="heart"></i>
                                </a>
                            </li>
                            <li class="right-side onhover-dropdown">
                                <div class="delivery-login-box">
                                    <div class="delivery-icon">
                                        <i data-feather="user"></i>
                                    </div>
                                    <div class="delivery-detail">
                                        <h6>Hello,</h6>
                                        <h5>My Account</h5>
                                    </div>
                                </div>

                                <div class="onhover-div onhover-div-login">
                                    <ul class="user-box-name">
                                        @guest
                                            <li class="product-box-contain">
                                                <i></i>
                                                <a href="{{ route('login') }}">Masuk</a>
                                            </li>

                                            <li class="product-box-contain">
                                                <a href="{{ route('register') }}">Daftar</a>
                                            </li>
                                        @else
                                            <li class="product-box-contain">
                                                <a href="{{ route('dashboard.index') }}">Dashboard</a>
                                            </li>

                                            <li class="product-box-contain">
                                                <a href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>
                                            </li>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                  class="d-none">
                                                @csrf
                                            </form>
                                        @endguest
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid-lg">
    <div class="row">
        <div class="col-12">
            <div class="header-nav">
                <div class="header-nav-left">
                    <button class="dropdown-category">
                        <i data-feather="align-left"></i>
                        <span>All Categories</span>
                    </button>

                    <div class="category-dropdown">
                        <div class="category-title">
                            <h5>Categories</h5>
                            <button type="button" class="btn p-0 close-button text-content">
                                <i class="fa-solid fa-xmark"></i>
                            </button>
                        </div>

                        <ul class="category-list">
                            <li class="onhover-category-list">
                                <a href="javascript:void(0)" class="category-name">
                                    <img src="https://themes.pixelstrap.com/fastkart/assets/svg/1/vegetable.svg"
                                         alt="">
                                    <h6>Vegetables & Fruit</h6>
                                    <i class="fa-solid fa-angle-right"></i>
                                </a>

                                <div class="onhover-category-box">
                                    <div class="list-1">
                                        <div class="category-title-box">
                                            <h5>Organic Vegetables</h5>
                                        </div>
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0)">Potato & Tomato</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">Cucumber & Capsicum</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">Leafy Vegetables</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">Root Vegetables</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">Beans & Okra</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">Cabbage & Cauliflower</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">Gourd & Drumstick</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">Specialty</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="list-2">
                                        <div class="category-title-box">
                                            <h5>Fresh Fruit</h5>
                                        </div>
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0)">Banana & Papaya</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">Kiwi, Citrus Fruit</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">Apples & Pomegranate</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">Seasonal Fruits</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">Mangoes</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">Fruit Baskets</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>

                            <li class="onhover-category-list">
                                <a href="javascript:void(0)" class="category-name">
                                    <img src="https://themes.pixelstrap.com/fastkart/assets/svg/1/cup.svg" alt="">
                                    <h6>Beverages</h6>
                                    <i class="fa-solid fa-angle-right"></i>
                                </a>

                                <div class="onhover-category-box w-100">
                                    <div class="list-1">
                                        <div class="category-title-box">
                                            <h5>Energy & Soft Drinks</h5>
                                        </div>
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0)">Soda & Cocktail Mix</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">Soda & Cocktail Mix</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">Sports & Energy Drinks</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">Non Alcoholic Drinks</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">Packaged Water</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">Spring Water</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">Flavoured Water</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>

                            <li class="onhover-category-list">
                                <a href="javascript:void(0)" class="category-name">
                                    <img src="https://themes.pixelstrap.com/fastkart/assets/svg/1/meats.svg" alt="">
                                    <h6>Meats & Seafood</h6>
                                    <i class="fa-solid fa-angle-right"></i>
                                </a>

                                <div class="onhover-category-box">
                                    <div class="list-1">
                                        <div class="category-title-box">
                                            <h5>Meat</h5>
                                        </div>
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0)">Fresh Meat</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">Frozen Meat</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">Marinated Meat</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">Fresh & Frozen Meat</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="list-2">
                                        <div class="category-title-box">
                                            <h5>Seafood</h5>
                                        </div>
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0)">Fresh Water Fish</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">Dry Fish</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">Frozen Fish & Seafood</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">Marine Water Fish</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">Canned Seafood</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">Prawans & Shrimps</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">Other Seafood</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>

                            <li class="onhover-category-list">
                                <a href="javascript:void(0)" class="category-name">
                                    <img src="https://themes.pixelstrap.com/fastkart/assets/svg/1/breakfast.svg"
                                         alt="">
                                    <h6>Breakfast & Dairy</h6>
                                    <i class="fa-solid fa-angle-right"></i>
                                </a>

                                <div class="onhover-category-box">
                                    <div class="list-1">
                                        <div class="category-title-box">
                                            <h5>Breakfast Cereals</h5>
                                        </div>
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0)">Oats & Porridge</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">Kids Cereal</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">Muesli</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">Flakes</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">Granola & Cereal Bars</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">Instant Noodles</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">Pasta & Macaroni</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">Frozen Non-Veg Snacks</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="list-2">
                                        <div class="category-title-box">
                                            <h5>Dairy</h5>
                                        </div>
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0)">Milk</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">Curd</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">Paneer, Tofu & Cream</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">Butter & Margarine</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">Condensed, Powdered Milk</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">Buttermilk & Lassi</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">Yogurt & Shrikhand</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">Flavoured, Soya Milk</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>

                            <li class="onhover-category-list">
                                <a href="javascript:void(0)" class="category-name">
                                    <img src="https://themes.pixelstrap.com/fastkart/assets/svg/1/frozen.svg"
                                         alt="">
                                    <h6>Frozen Foods</h6>
                                    <i class="fa-solid fa-angle-right"></i>
                                </a>

                                <div class="onhover-category-box w-100">
                                    <div class="list-1">
                                        <div class="category-title-box">
                                            <h5>Noodle, Pasta</h5>
                                        </div>
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0)">Instant Noodles</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">Hakka Noodles</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">Cup Noodles</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">Vermicelli</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">Instant Pasta</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>

                            <li class="onhover-category-list">
                                <a href="javascript:void(0)" class="category-name">
                                    <img src="https://themes.pixelstrap.com/fastkart/assets/svg/1/biscuit.svg"
                                         alt="">
                                    <h6>Biscuits & Snacks</h6>
                                    <i class="fa-solid fa-angle-right"></i>
                                </a>

                                <div class="onhover-category-box">
                                    <div class="list-1">
                                        <div class="category-title-box">
                                            <h5>Biscuits & Cookies</h5>
                                        </div>
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0)">Salted Biscuits</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">Marie, Health, Digestive</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">Cream Biscuits & Wafers</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">Glucose & Milk Biscuits</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">Cookies</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="list-2">
                                        <div class="category-title-box">
                                            <h5>Bakery Snacks</h5>
                                        </div>
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0)">Bread Sticks & Lavash</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">Cheese & Garlic Bread</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">Puffs, Patties, Sandwiches</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">Breadcrumbs & Croutons</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>

                            <li class="onhover-category-list">
                                <a href="javascript:void(0)" class="category-name">
                                    <img src="https://themes.pixelstrap.com/fastkart/assets/svg/1/grocery.svg"
                                         alt="">
                                    <h6>Grocery & Staples</h6>
                                    <i class="fa-solid fa-angle-right"></i>
                                </a>

                                <div class="onhover-category-box">
                                    <div class="list-1">
                                        <div class="category-title-box">
                                            <h5>Grocery</h5>
                                        </div>
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0)">Lemon, Ginger & Garlic</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">Indian & Exotic Herbs</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">Organic Vegetables</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">Organic Fruits</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="list-2">
                                        <div class="category-title-box">
                                            <h5>Organic Staples</h5>
                                        </div>
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0)">Organic Dry Fruits</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">Organic Dals & Pulses</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">Organic Millet & Flours</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">Organic Sugar, Jaggery</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">Organic Masalas & Spices</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">Organic Rice, Other Rice</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">Organic Flours</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">Organic Edible Oil, Ghee</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="header-nav-middle">
                    <div class="main-nav navbar navbar-expand-xl navbar-light navbar-sticky">
                        <div class="offcanvas offcanvas-collapse order-xl-2" id="primaryMenu">
                            <div class="offcanvas-header navbar-shadow">
                                <h5>Menu</h5>
                                <button class="btn-close lead" type="button" data-bs-dismiss="offcanvas"
                                        aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link {{ request()->routeIs('home.index') ? 'active' : '' }}"
                                           href="{{ route('home.index') }}">Beranda</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link {{ request()->routeIs('home.products.index') ? 'active' : '' }}"
                                           href="{{ route('home.products.index') }}">Produk</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link {{ request()->routeIs('home.about') ? 'active' : '' }}"
                                           href="{{ route('home.about') }}">Tentang Kami</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link {{ request()->routeIs('home.articles.index') ? 'active' : '' }}"
                                           href="{{ route('home.articles.index') }}">Artikel</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link {{ request()->routeIs('home.contact') ? 'active' : '' }}"
                                           href="{{ route('home.contact') }}">Hubungi Kami</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link {{ request()->routeIs('home.faq') ? 'active' : '' }}"
                                           href="{{ route('home.faq') }}">Bantuan</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
