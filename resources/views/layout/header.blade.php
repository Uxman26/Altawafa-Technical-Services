<div id="header" class="header-section type-header-1 header-skin-light header-no-transparent">


    <div id="header-top-bar" class="header-top-section navbar">
        <div class="container">
            <!-- ==================== Toggle Icon ==================== -->
            <div class="navbar-header nav-respons">
                <button type="button" aria-expanded="false" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target=".zozo-topnavbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <div class="navbar-collapse zozo-topnavbar-collapse collapse">
                <!-- ==================== Header Top Bar Left ==================== -->
                <ul class="nav navbar-nav zozo-top-left">
                    <li>
                        <div id="header-contact-info" class="top-contact-info">
                            <ul class="header-contact-details">
                                <li class="header-phone"><a href="tel::{{auth()->user() ? auth()->user()->number : ''}}">:{{auth()->user() ? auth()->user()->number : ''}}</a></li>
                                <li class="header-email"><a
                                        href="mailto::{{auth()->user() ? auth()->user()->contact_email : ''}}">:{{auth()->user() ? auth()->user()->contact_email : ''}}</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>

                <!-- ==================== Header Top Bar Right ==================== -->
                <ul class="nav navbar-nav navbar-right zozo-top-right">
                    <li>
                        <div id="header-sidebar-social" class="sidebar-social">
                            <ul class="zozo-social-icons soc-icon-transparent">
                                <li class="facebook"><a target="_blank"
                                        href="https://www.facebook.com/altawafatechnicalservice"><i
                                            class="fa fa-facebook"></i></a></li>
                                <li class="twitter"><a target="_blank" href="https://twitter.com/altawafa"><i
                                            class="fa fa-twitter"></i></a></li>
                                <li class="linkedin"><a target="_blank"
                                        href="https://www.linkedin.com/company/altawafatechnicalservices"><i
                                            class="fa fa-linkedin"></i></a></li>
                                <li class="instagram"><a target="_blank"
                                        href="https://www.instagram.com/altawafatechnical/"><i
                                            class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div><!-- .container -->
    </div>

    <div id="header-main" class="header-main-section navbar">
        <div class="container">

            <!-- ============ Logo ============ -->
            <div class="navbar-header nav-respons zozo-logo zozo-has-sticky-logo zozo-no-mobile-logo">
                <!-- ==================== Toggle Icon ==================== -->
                <button type="button" aria-expanded="false" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target=".zozo-mainnavbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a href="{{ route('home') }}" class="navbar-brand"
                    title="Al Tawafa Technical Services L.L.C - Al Tawafa Technical Services L.L.C" rel="home">
                    <img class="img-responsive zozo-standard-logo"
                        src="{{ asset('wp-content/uploads/2021/03/logo.png') }}" style="width:40px;"
                        alt="Al Tawafa Technical Services L.L.C" width="50" height="28" />
                    <img class="img-responsive zozo-sticky-logo"
                        src="{{ asset('wp-content/uploads/2021/03/logo.png') }}" style="width:40px;"
                        alt="Al Tawafa Technical Services L.L.C" width="532" height="158" />
                </a>
            </div>

            <div class="navbar-collapse zozo-mainnavbar-collapse collapse zozo-header-main-bar">
                <!-- ==================== Header Right ==================== -->
                <ul class="nav navbar-nav navbar-right zozo-main-bar">
                    <li>
                        <div class="hidden-xs">
                            <div id="main-nav-container" class="main-nav main-menu-container">
                                <ul id="main-menu" class="nav navbar-nav navbar-main zozo-main-nav">
                                    <li id="menu-item-10511"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-7 current_page_item menu-item-10511 active">
                                        <a title="Home" href="{{ route('home') }}">Home</a>
                                    </li>
                                    <li id="menu-item-10386"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-10386">
                                        <a title="About Us" href="{{ route('about_us') }}">About Us</a>
                                    </li>
                                    <li id="menu-item-10469"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-10469 dropdown">
                                        <a title="Our Services" href="{{ route('services') }}"
                                            class="dropdown-toggle">Our Services <span class="caret"></span></a>
                                        <ul role="menu" class=" dropdown-menu sub-nav">
                                            <li id="menu-item-10522"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-10522">
                                                <a title="Technical Services Works "
                                                    href="{{ route('technical_services') }}">Technical Services Works
                                                </a>
                                            </li>
                                            <li id="menu-item-10522"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-10522">
                                                <a title="Exterior Building Cladding Contracting "
                                                    href="{{ route('exterior_building') }}">Exterior Building Cladding
                                                    Contracting </a>
                                            </li>
                                            <li id="menu-item-10522"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-10522">
                                                <a title="Electromechanical Works Contracting "
                                                    href="{{ route('electromechanical_work') }}">Electromechanical Works
                                                    Contracting </a>
                                            </li>
                                            <li id="menu-item-10522"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-10522">
                                                <a title="Electromechanical Equipment Intallation & Maintenance "
                                                    href="{{ route('electromechanical_equipment') }}">Electromechanical Equipment
                                                    Intallation & Maintenance </a>
                                            </li>
                                            <li id="menu-item-10522"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-10522">
                                                <a title="Plumbing & Sanitary Installation "
                                                    href="{{ route('plumbing') }}">Plumbing & Sanitary
                                                    Installation </a>
                                            </li>
                                            <li id="menu-item-10522"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-10522">
                                                <a title="Carpentry & Wood Flooring Works"
                                                    href="{{ route('carpentery') }}">Carpentery & Wood Flooring
                                                    Works</a>
                                            </li>
                                            <li id="menu-item-10522"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-10522">
                                                <a title="False Ceiling & light Partitions Installations "
                                                    href="{{ route('ceiling') }}">False Ceiling & light
                                                    Partitions Installations </a>
                                            </li>
                                            <li id="menu-item-10522"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-10522">
                                                <a title="Electrical Fittings & Fixtures Repairing & Maintenance"
                                                    href="{{ route('electrical_fittings') }}">Electrical Fittings &
                                                    Fixtures Repairing & Maintenance</a>
                                            </li>
                                            <li id="menu-item-10522"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-10522">
                                                <a title="Plaster Workks "
                                                    href="{{ route('plaster_works') }}">Plaster Works </a>
                                            </li>

                                            <li id="menu-item-10522"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-10522">
                                                <a title="Floor & Wall Tiling Works "
                                                    href="{{ route('marble_fixing') }}">Floor & Wall Tiling Works
                                                </a>
                                            </li>
                                            <li id="menu-item-10521"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-10521">
                                                <a title="Sanitary Installation & Pipes Repairing"
                                                    href="{{ route('kitchen_work') }}">Sanitary Installation & Pipes
                                                    Repairing</a>
                                            </li>
                                            <li id="menu-item-10520"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-10520">
                                                <a title="Wallpaer Fixing Works"
                                                    href="{{ route('wall_painting') }}">Wallpaer Fixing Works</a>
                                            </li>
                                            <li id="menu-item-10519"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-10519">
                                                <a title="Air Conditioning, Ventilations & Air Filteration Systems Installation & Maintenance "
                                                    href="{{ route('ac_maintenance') }}">Air Conditioning,
                                                    Ventilations & Air Filteration Systems Installation &
                                                    Maintenance </a>
                                            </li>
                                            <li id="menu-item-10518"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-10518">
                                                <a title="Engraving & Ornamentation Works"
                                                    href="{{ route('garden_maintenance') }}">Engraving
                                                    & Ornamentation Works</a>
                                            </li>
                                            <li id="menu-item-10517"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-10517">
                                                <a title="Sanitary Installation & Pipes Repairing"
                                                    href="{{ route('swimming_pool') }}">Sanitary Installation &
                                                    Pipes Repairing</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li id="menu-item-10530"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-10530">
                                        <a title="Gallery" href="{{ route('gallery') }}">Gallery</a>
                                    </li>
                                    <li id="menu-item-10360"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-10360">
                                        <a title="Contact Us" href="{{ route('contact_us') }}">Contact Us</a>
                                    </li>
                                    @auth
                                    <li id="menu-item-10360"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-10360">
                                        <a title="Profile" href="{{ route('profile') }}">Profile</a>
                                        @else
                                        <li id="menu-item-10360"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-10360">
                                        <a title="Login" href="{{ route('login') }}">Login</a>
                                    </li>
                                    @endauth

                                </ul>
                            </div>
                        </div>
                        <div id="main-mobile-menu-wrapper" class="visible-xs mobile-menu">
                            <div id="main-mobile-nav" class="main-nav main-mobile-nav main-menu-navigation">
                                <ul id="main-mobile-menu" class="nav navbar-nav navbar-main zozo-main-nav">
                                    <li
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-7 current_page_item menu-item-10511 active">
                                        <a title="Home" href="{{ route('home') }}">Home</a>
                                    </li>
                                    <li
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-10386">
                                        <a title="About Us" href="{{ route('about_us') }}">About Us</a>
                                    </li>
                                    <li
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-10469 dropdown ">
                                        <a title="Our Services" href="{{ route('services') }}">Our
                                            Services</a><span class="menu-toggler" data-toggle="collapse"
                                            data-target=".collapse-10469">
                                            <i class="fa fa-angle-down"></i>
                                        </span>
                                        <div class='zozo-mobile-megamenu-wrapper zozo-mobile-megamenu'>

                                            <ul role="menu"
                                                class="mobile-sub-menu mobile-megamenu collapse collapse-10469 ">
                                                <li
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-10522">
                                                    <h6 class='zozo-megamenu-title'><a
                                                            href="{{ route('marble_fixing') }}">Floor & Wall Tiling
                                                            Works </a></h6>
                                                </li>
                                                <li
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-10521">
                                                    <h6 class='zozo-megamenu-title'><a
                                                            href="{{ route('kitchen_work') }}">Sanitary Installation
                                                            & Pipes Repairing</a></h6>
                                                </li>
                                                <li
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-10520">
                                                    <h6 class='zozo-megamenu-title'><a
                                                            href="{{ route('wall_painting') }}">Wallpaer Fixing
                                                            Works</a></h6>
                                                </li>
                                                <li
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-10519">
                                                    <h6 class='zozo-megamenu-title'><a
                                                            href="{{ route('ac_maintenance') }}">Air
                                                            Conditioning, Ventilations & Air Filteration Systems
                                                            Installation & Maintenance </a></h6>
                                                </li>
                                                <li
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-10518">
                                                    <h6 class='zozo-megamenu-title'><a
                                                            href="{{ route('garden_maintenance') }}">Engraving
                                                            & Ornamentation Works</a></h6>
                                                </li>
                                                <li
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-10517">
                                                    <h6 class='zozo-megamenu-title'><a
                                                            href="{{ route('swimming_pool') }}">Sanitary
                                                            Installation & Pipes Repairing</a></h6>
                                                </li>

                                            </ul>
                                        </div>
                                    </li>
                                    <li
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-10530">
                                        <a title="Gallery" href="{{ route('gallery') }}">Gallery</a>
                                    </li>
                                    <li
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-10360">
                                        <a title="Contact Us" href="{{ route('contact_us') }}">Contact Us</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>


                    <li class="extra-nav">
                        <div id="header-main-search" class="header-main-right-search">
                            <i class="fa fa-search btn-trigger"></i>
                            <form method="get" action="" class="search-form">
                                <div class="input-group">
                                    <input type="text" value="" name="s" class="form-control"
                                        placeholder="Search.." />
                                    <span class="input-group-btn">
                                        <button class="btn btn-search" type="submit">Go</button>
                                    </span>
                                </div>
                            </form>
                        </div>
                    </li>

                </ul>
            </div>
        </div><!-- .container -->
    </div><!-- .header-main-section -->
</div><!-- #header -->
<div id="section-top" class="zozo-top-anchor"></div>
