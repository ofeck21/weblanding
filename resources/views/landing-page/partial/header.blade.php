<header class="header header-style-1 header-position-over sticky-header-on" style="height: 110px;">
    <div class="sticky-wrapper">
        <div class="header-row">

            <!-- Left Info Block -->
            <div class="header-icons-container">
                <div class="header-icon dropdown-trigger">
                    <span class="dropdown-trigger-icon"></span>
                </div>
                <div class="logo-container">
                    <div class="logo retina-logo">
                        <a class="logo-link" href="/">
                            <img loading="lazy" width="185" height="38"
                                src="{{ asset('landing-page/assets/logo_light_x2(1).png') }}"
                                alt="WebInstan">
                        </a>
                    </div>
                </div>
            </div>

            <!-- Standard Menu Block -->
            <div class="header-menu-container">
                <nav>
                    <ul id="menu-custom-menu-1" class="main-menu">
                        <li
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-6027 current_page_item menu-item-6048">
                            <a href="{{route('landing-page')}}" aria-current="page">HOME</a>
                        </li>
                        <li
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6080">
                            <a href="{{route('faq')}}">PERTANYAAN</a>
                        </li>
                        <li
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6050">
                            <a href="#tutorial">TUTORIAL</a>
                        </li>
                    </ul>
                </nav>
            </div>

            <!-- Right Info Block -->
            <div class="header-icons-container">
                <div class="header-icon header-button-container">
                    <a class="header-button" target="_blank" href="https://wa.me/62822333444555">Get in
                        Touch</a>
                </div>
            </div>
        </div>
    </div>
</header>
