<!-- Navbar Vertical -->
@php
    use App\Traits\SettingsTrait;
@endphp
<aside
class="js-navbar-vertical-aside navbar navbar-vertical-aside navbar-vertical navbar-vertical-fixed navbar-expand-xl navbar-bordered bg-white  ">
<div class="navbar-vertical-container">
    <div class="navbar-vertical-footer-offset">
        <!-- Logo -->

        <a class="navbar-brand" href="{{ route('dashboard') }}" aria-label="Front">
            <img class="navbar-brand-logo"
                src="{{ asset('/public/settings/' . SettingsTrait::settings('logo')) }}" alt="Logo"
                data-hs-theme-appearance="default">
            <img class="navbar-brand-logo"
                src="{{ asset('/public/settings/' . SettingsTrait::settings('logo')) }}" alt="Logo"
                data-hs-theme-appearance="dark">
            <img class="navbar-brand-logo-mini"
                src="{{ asset('/public/settings/' . SettingsTrait::settings('logo')) }}" alt="Logo"
                data-hs-theme-appearance="default">
            <img class="navbar-brand-logo-mini"
                src="{{ asset('/public/settings/' . SettingsTrait::settings('logo')) }}" alt="Logo"
                data-hs-theme-appearance="dark">
        </a>

        <!-- End Logo -->

        <!-- Navbar Vertical Toggle -->
        <button type="button" class="js-navbar-vertical-aside-toggle-invoker navbar-aside-toggler">
            <i class="bi-arrow-bar-left navbar-toggler-short-align"
                data-bs-template='<div class="tooltip d-none d-md-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
                data-bs-toggle="tooltip" data-bs-placement="right" title="Collapse"></i>
            <i class="bi-arrow-bar-right navbar-toggler-full-align"
                data-bs-template='<div class="tooltip d-none d-md-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
                data-bs-toggle="tooltip" data-bs-placement="right" title="Expand"></i>
        </button>

        <!-- End Navbar Vertical Toggle -->

        <!-- Content -->
        <div class="navbar-vertical-content">
            <div id="navbarVerticalMenu" class="nav nav-pills nav-vertical card-navbar-nav">
                @hasanyrole('admin|photographer')
                    <div class="nav-item">
                        <a class="nav-link" href="{{ route('dashboard') }}" data-placement="left">
                            <i class="bi-house-door nav-icon"></i>
                            <span class="nav-link-title">Dashboard</span>
                        </a>
                    </div>
                    @hasrole('admin')
                        <div class="nav-item">
                            <a class="nav-link dropdown-toggle" href="#navbarVerticalMenuClient" role="button"
                                data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuClient"
                                aria-expanded="false" aria-controls="navbarVerticalMenuClient">
                                <i class="bi bi-images nav-icon"></i>
                                <span class="nav-link-title">Client Manager</span>
                            </a>

                            <div id="navbarVerticalMenuClient" class="nav-collapse collapse hide"
                                data-bs-parent="#navbarVerticalMenu">
                                <a class="nav-link" href="{{ route('client.createclientslider') }}">Add
                                    Slider</a>
                                <a class="nav-link " href="{{ route('client.viewclientslider') }}">View
                                    Slider</a>
                            </div>
                        </div>
                        
                        <!--Hero Section-->
                        <div class="nav-item">
                            <a class="nav-link dropdown-toggle" href="#navbarVerticalMenuhero" role="button"
                                data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuhero"
                                aria-expanded="false" aria-controls="navbarVerticalMenuhero">
                                <i class="bi bi-dot nav-icon"></i>
                                <span class="nav-link-title">Hero Section</span>
                            </a>

                            <div id="navbarVerticalMenuhero" class="nav-collapse collapse hide"
                                data-bs-parent="#navbarVerticalMenu">
                                <a class="nav-link" href="{{ route('hero.index') }}">Add
                                    text </a>
                                <a class="nav-link " href="{{ route('hero.view') }}">View
                                    text</a>
                            </div>

                        </div>
                        
                        <!--Gallery Section-->
                        <div class="nav-item">
                            <a class="nav-link dropdown-toggle" href="#navbarVerticalMenugallery" role="button"
                                data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenugallery"
                                aria-expanded="false" aria-controls="navbarVerticalMenugallery">
                                <i class="bi bi-dot nav-icon"></i>
                                <span class="nav-link-title">Gallery Section</span>
                            </a>

                            <div id="navbarVerticalMenugallery" class="nav-collapse collapse hide"
                                data-bs-parent="#navbarVerticalMenu">
                                <a class="nav-link" href="{{ route('image.index') }}">Add
                                    image </a>
                                <a class="nav-link " href="{{ route('image.view') }}">View
                                    image</a>
                                <a class="nav-link" href="{{ route('video.index') }}">Add
                                    video </a>
                                <a class="nav-link " href="{{ route('hero.view') }}">View
                                    video</a>
                            </div>
                        </div>
                        
                        <!--social section-->
                        <div class="nav-item">
                            <a class="nav-link dropdown-toggle {{ request()->routeIs('social.*') ? 'active' : '' }}" href="#navbarVerticalMenuSocial" role="button"
                                data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuSocial"
                                aria-expanded="{{ request()->routeIs('social.*') ? 'true' : 'false' }}" aria-controls="navbarVerticalMenuSocial">
                                <i class="bi bi-file-person nav-icon"></i>
                                <span class="nav-link-title">Social Manager</span>
                            </a>

                            <div id="navbarVerticalMenuSocial" class="nav-collapse collapse  {{ request()->routeIs('social.*') ? 'show' : '' }}"
                                data-bs-parent="#navbarVerticalMenu">
                                <a href="{{route('social.index')}}"  class="nav-link ">View Socials</a>
                            </div>
                        </div>

                        <!--youtube section-->
                        <div class="nav-item">
                            <a class="nav-link dropdown-toggle {{ request()->routeIs('youtube.*') ? 'active' : '' }}" href="#navbarVerticalMenuYoutube" role="button"
                                data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuYoutube"
                                aria-expanded="{{ request()->routeIs('youtube.*') ? 'true' : 'false' }}" aria-controls="navbarVerticalMenuYoutube">
                                <i class="bi bi-file-person nav-icon"></i>
                                <span class="nav-link-title">Youtube Manager</span>
                            </a>

                            <div id="navbarVerticalMenuYoutube" class="nav-collapse collapse  {{ request()->routeIs('youtube.*') ? 'show' : '' }}"
                                data-bs-parent="#navbarVerticalMenu">
                                <a href="{{route('youtube.index')}}"  class="nav-link ">View youtube</a>
                            </div>
                        </div>

                        <!--career manager-->
                        <div class="nav-item">
                            <a class="nav-link dropdown-toggle {{ request()->routeIs('carrier.*') ? 'active' : '' }}"  href="#navbarVerticalMenuCarrier" role="button"
                                data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuCarrier"
                                aria-expanded="{{ request()->routeIs('carrier.*') ? 'true' : 'false' }}" aria-controls="navbarVerticalMenuCarrier">
                                <i class="bi bi-file-person nav-icon"></i>
                                <span class="nav-link-title">Carrier Manager</span>
                            </a>

                            <div id="navbarVerticalMenuCarrier" class="nav-collapse collapse {{ request()->routeIs('carrier.*') ? 'show' : '' }}"
                                data-bs-parent="#navbarVerticalMenu">
                                <a class="nav-link " href="{{ route('carrier.view') }}">View
                                    Carrier</a>
                            </div>
                        </div>

                        <!--Portfolio Manager-->
                        <div class="nav-item">
                            <a class="nav-link dropdown-toggle  {{ request()->routeIs('portfolio.*') ? 'active' : '' }}"   href="#navbarVerticalMenuPortfolio" role="button"
                                data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuPortfolio"
                                aria-expanded="{{ request()->routeIs('portfolio.*') ? 'true' : 'false' }}" aria-controls="navbarVerticalMenuPortfolio">
                                <i class="bi bi-camera-fill nav-icon"></i>
                                <span class="nav-link-title">Portfolio Manager</span>
                            </a>

                            <div id="navbarVerticalMenuPortfolio" class="nav-collapse collapse {{ request()->routeIs('portfolio.*') ? 'show' : '' }}"
                                data-bs-parent="#navbarVerticalMenu">
                                <a class="nav-link" href="{{ route('category.createpcategory') }}">Add
                                    Category</a>
                                <a class="nav-link " href="{{ route('category.viewpcategory') }}">View
                                    Category</a>
                                <a class="nav-link" href="{{ route('portfolio.createportfolio') }}">Add
                                    Portfolio</a>
                                <a class="nav-link " href="{{ route('portfolio.viewportfolio') }}">View
                                    Portfolio</a>
                            </div>
                        </div>

                        <!--Photographer Category Manager-->
                        <div class="nav-item">
                            <a class="nav-link dropdown-toggle" href="#navbarVerticalMenuPhotoCate" role="button"
                                data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuPhotoCate"
                                aria-expanded="false" aria-controls="navbarVerticalMenuPhotoCate">
                                <i class="bi-diagram-3-fill nav-icon"></i>
                                <span class="nav-link-title">Photographer Category Manager</span>
                            </a>

                            <div id="navbarVerticalMenuPhotoCate" class="nav-collapse collapse hide"
                                data-bs-parent="#navbarVerticalMenu">
                                <a class="nav-link" href="{{ route('category.createpphotocategory') }}">Add
                                    Category</a>
                                <a class="nav-link " href="{{ route('category.viewpphotocategory') }}">View
                                    Category</a>
                            </div>
                        </div>
                        
                        <!--Blog Category Manager-->
                        <div class="nav-item">
                            <a class="nav-link dropdown-toggle {{ request()->routeIs('blogcategory.*') ? 'active' : '' }}" href="#navbarVerticalMenuBlogCategory" role="button"
                                data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuBlogCategory"
                                aria-expanded="{{ request()->routeIs('blogcategory.*') ? 'true' : 'false' }}" aria-controls="navbarVerticalMenBlogCategory">
                                <i class="bi-diagram-2-fill nav-icon"></i>
                                <span class="nav-link-title">Blog Category Manager</span>
                            </a>

                            <div id="navbarVerticalMenuBlogCategory" class="nav-collapse collapse {{ request()->routeIs('blogcategory.*') ? 'show' : '' }}"
                                data-bs-parent="#navbarVerticalMenu">
                                <a class="nav-link" href="{{ route('blogcategory.index') }}">Add
                                    Category</a>
                                <a class="nav-link " href="{{ route('blogcategory.view') }}">View
                                    Category</a>
                            </div>
                        </div>

                        <!--Blog Manager-->
                        <div class="nav-item">
                            <a class="nav-link dropdown-toggle {{ request()->routeIs('blog.*') ? 'active' : '' }}" href="#navbarVerticalMenuBlog" role="button"
                                data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuBlog"
                                aria-expanded="{{ request()->routeIs('blog.*') ? 'true' : 'false' }}" aria-controls="navbarVerticalMenuBlog">
                                <i class="bi-bootstrap-fill nav-icon"></i>
                                <span class="nav-link-title">Blog Manager</span>
                            </a>

                            <div id="navbarVerticalMenuBlog" class="nav-collapse collapse {{ request()->routeIs('blog.*') ? 'show' : '' }}"
                                data-bs-parent="#navbarVerticalMenu">
                                <a class="nav-link" href="{{ route('blog.index') }}">Add
                                    Blog</a>
                                <a class="nav-link " href="{{ route('blog.view') }}">View
                                    Blog</a>
                            </div>
                        </div>

                        <!--Contact Manager-->
                        <div class="nav-item">
                            <a class="nav-link dropdown-toggle  {{ request()->routeIs('contact.*') ? 'active' : '' }}" href="#navbarVerticalMenuContact" role="button"
                                data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuContact"
                                aria-expanded="{{ request()->routeIs('contact.*') ? 'true' : 'false' }}" aria-controls="navbarVerticalMenuContact">
                                <i class="bi bi-envelope nav-icon"></i>
                                <span class="nav-link-title">Contact Manager</span>
                            </a>

                            <div id="navbarVerticalMenuContact" class="nav-collapse collapse {{ request()->routeIs('contact.*') ? 'show' : '' }}"
                                data-bs-parent="#navbarVerticalMenu">
                                <a class="nav-link" href="{{ route('contact.viewbooking') }}">Booking</a>
                                <a class="nav-link " href="{{ route('contact.viewcontact') }}">Contact Us</a>
                            </div>
                        </div>

                        <!--City Manager-->
                        <div class="nav-item">
                            <a class="nav-link dropdown-toggle {{ request()->routeIs('city.*') ? 'active' : '' }}" href="#navbarVerticalMenuCity" role="button"
                                data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuCity"
                                aria-expanded="{{ request()->routeIs('city.*') ? 'true' : 'false' }}" aria-controls="navbarVerticalMenuCity">
                                <i class="bi bi-geo-alt-fill nav-icon"></i>
                                <span class="nav-link-title">City Manager</span>
                            </a>

                            <div id="navbarVerticalMenuCity" class="nav-collapse collapse {{ request()->routeIs('city.*') ? 'show' : '' }}"
                                data-bs-parent="#navbarVerticalMenu">
                                <a class="nav-link" href="{{ route('city.add_city') }}">Add City</a>
                                <a class="nav-link " href="{{ route('city.view_city') }}">View City</a>
                            </div>
                        </div>
                        
                        <!--Home Page Manager-->
                        <div class="nav-item">
                            <a class="nav-link dropdown-toggle" href="#navbarVerticalMenuHome" role="button"
                                data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuHome"
                                aria-expanded="" aria-controls="navbarVerticalMenuHome">
                                <i class="bi bi-laptop-fill nav-icon"></i>
                                <span class="nav-link-title">Home Page Manager</span>
                            </a>

                            <div id="navbarVerticalMenuHome" class="nav-collapse collapse"
                                data-bs-parent="#navbarVerticalMenu">
                                <a class="nav-link" href="{{ route('city.createexpertise') }}">Add Expertise</a>
                                <a class="nav-link " href="{{ route('city.viewexpertise') }}">View Expertise</a>
                            </div>
                        </div>

                        <!--Photographer Manager-->
                        <div class="nav-item">
                            <a class="nav-link dropdown-toggle {{ request()->routeIs('photographer.*') ? 'active' : '' }}" href="#navbarVerticalMenuPhotogrpher" role="button"
                                data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuPhotogrpher"
                                aria-expanded="{{ request()->routeIs('photographer.*') ? 'true' : 'false' }}" aria-controls="navbarVerticalMenuPhotogrpher">
                                <i class="bi-people-fill nav-icon"></i>
                                <span class="nav-link-title">Photographer Manager</span>
                            </a>

                            <div id="navbarVerticalMenuPhotogrpher" class="nav-collapse collapse {{ request()->routeIs('photographer.*') ? 'show' : '' }}"
                                data-bs-parent="#navbarVerticalMenu">
                                <a class="nav-link " href="{{ route('photographer.viewrequests') }}">View
                                    Photographer Requests</a>
                                <a class="nav-link " href="{{ route('photographer.viewphotographers') }}">View
                                    Photographers</a>
                            </div>
                        </div>
                        <!-- End Collapse -->
                    @endhasrole
                    {{-- <div class="nav-item">
                    <a class="nav-link dropdown-toggle" href="#navbarVerticalMenuImagestock" role="button"
                        data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuImagestock"
                        aria-expanded="false" aria-controls="navbarVerticalMenuImagestock">
                        <i class="bi bi-camera-fill nav-icon"></i>
                        <span class="nav-link-title">Image Stock Manager</span>
                    </a>

                    <div id="navbarVerticalMenuImagestock" class="nav-collapse collapse hide"
                        data-bs-parent="#navbarVerticalMenu">
                        <a class="nav-link" href="{{ route('createimagestock') }}">Add
                            Image</a>
                        <a class="nav-link " href="{{ route('viewimagestock') }}">View
                            Images</a>
                    </div>
                </div> --}}
                    <div class="nav-item">
                        <a class="nav-link dropdown-toggle" href="#navbarVerticalMenuPhotoortfolio"
                            role="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarVerticalMenuPhotoortfolio" aria-expanded="false"
                            aria-controls="navbarVerticalMenuPhotoortfolio">
                            <i class="bi bi-camera-fill nav-icon"></i>
                            <span class="nav-link-title">PhotoG Portfolio Manager</span>
                        </a>

                        <div id="navbarVerticalMenuPhotoortfolio" class="nav-collapse collapse hide"
                            data-bs-parent="#navbarVerticalMenu">
                            <a class="nav-link" href="{{ route('createphotoportfolio') }}">Add
                                Portfolio</a>
                            <a class="nav-link " href="{{ route('viewphotoportfolio') }}">View
                                Portfolio</a>
                        </div>
                    </div>
                @endhasrole

            </div>

        </div>
        <!-- End Content -->

        <!-- Footer -->
        <div class="navbar-vertical-footer">
            <ul class="navbar-vertical-footer-list">
                <li class="navbar-vertical-footer-list-item">
                    <!-- Style Switcher -->
                    <div class="dropdown dropup">
                        <button type="button" class="btn btn-ghost-secondary btn-icon rounded-circle"
                            id="selectThemeDropdown" data-bs-toggle="dropdown" aria-expanded="false"
                            data-bs-dropdown-animation>

                        </button>

                        <div class="dropdown-menu navbar-dropdown-menu navbar-dropdown-menu-borderless"
                            aria-labelledby="selectThemeDropdown">
                            <a class="dropdown-item" href="#" data-icon="bi-moon-stars"
                                data-value="auto">
                                <i class="bi-moon-stars me-2"></i>
                                <span class="text-truncate" title="Auto (system default)">Auto (system
                                    default)</span>
                            </a>
                            <a class="dropdown-item" href="#" data-icon="bi-brightness-high"
                                data-value="default">
                                <i class="bi-brightness-high me-2"></i>
                                <span class="text-truncate" title="Default (light mode)">Default (light
                                    mode)</span>
                            </a>
                            <a class="dropdown-item active" href="#" data-icon="bi-moon"
                                data-value="dark">
                                <i class="bi-moon me-2"></i>
                                <span class="text-truncate" title="Dark">Dark</span>
                            </a>
                        </div>
                    </div>

                    <!-- End Style Switcher -->
                </li>

                <li class="navbar-vertical-footer-list-item">
                    <!-- Other Links -->
                    <div class="dropdown dropup">
                        <button type="button" class="btn btn-ghost-secondary btn-icon rounded-circle"
                            id="otherLinksDropdown" data-bs-toggle="dropdown" aria-expanded="false"
                            data-bs-dropdown-animation>
                            <i class="bi-info-circle"></i>
                        </button>

                        <div class="dropdown-menu navbar-dropdown-menu-borderless"
                            aria-labelledby="otherLinksDropdown">
                            <span class="dropdown-header">Contacts</span>
                            <a class="dropdown-item" href="#">
                                <i class="bi bi-envelope dropdown-item-icon"></i>
                                <span class="text-truncate"
                                    title="Contact support">ajays1.img@gmail.com</span>
                            </a>
                        </div>
                    </div>
                    <!-- End Other Links -->
                </li>
            </ul>
        </div>
        <!-- End Footer -->
    </div>
</div>
</aside>

<!-- End Navbar Vertical -->