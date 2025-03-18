<div class="offcanvas offcanvas-start mobile-nav-wrap " tabindex="-1" id="menu-mobile"
     aria-labelledby="menu-mobile">
    <div class="offcanvas-header top-nav-mobile">
        <div class="offcanvas-title">
            <a href="{{route('home')}}"><img src="{{logo()}}" alt=""></a>
        </div>
        <div data-bs-dismiss="offcanvas" aria-label="Close">
            <i class="icon-close"></i>
        </div>
    </div>
    <div class="offcanvas-body inner-mobile-nav">
        <div class="mb-body">
            <ul id="menu-mobile-menu">
                <li class="menu-item menu-item-has-children-mobile current-menu-item">
                    <a href="#dropdown-menu-one" class="item-menu-mobile collapsed" data-bs-toggle="collapse"
                       aria-expanded="true" aria-controls="dropdown-menu-one">
                        Home
                    </a>
                    <div id="dropdown-menu-one" class="collapse" data-bs-parent="#menu-mobile-menu">
                        <ul class="sub-mobile ">
                            <li class="menu-item "><a href="index-2.html">Home Page 01</a></li>
                            <li class="menu-item"><a href="home02.html">Home Page 02</a></li>
                            <li class="menu-item"><a href="home03.html">Home Page 03</a></li>
                            <li class="menu-item"><a href="home04.html">Home Page 04</a></li>
                            <li class="menu-item current-item"><a href="home05.html">Home Page 05</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="menu-item menu-item-has-children-mobile">
                    <a href="#dropdown-menu-two" class="item-menu-mobile collapsed" data-bs-toggle="collapse"
                       aria-expanded="true" aria-controls="dropdown-menu-two">
                        Listing
                    </a>
                    <div id="dropdown-menu-two" class="collapse" data-bs-parent="#menu-mobile-menu">
                        <ul class="sub-mobile">
                            <li class="menu-item menu-item-has-children-mobile-2">
                                <a href="#sub-layout" class="item-menu-mobile  collapsed" data-bs-toggle="collapse"
                                   aria-expanded="true" aria-controls="sub-agents">Layout</a>
                                <div id="sub-layout" class="collapse" data-bs-parent="#dropdown-menu-two">
                                    <ul class="sub-mobile">
                                        <li class="menu-item ">
                                            <a href="property-grid-full-width.html" class="item-menu-mobile ">Grid
                                                Style - Full Width</a>
                                        </li>
                                        <li class="menu-item ">
                                            <a href="property-gird-top-search.html" class="item-menu-mobile ">Grid
                                                Style - Top Search</a>
                                        </li>
                                        <li class="menu-item ">
                                            <a href="property-gird-left-sidebar.html" class="item-menu-mobile ">Grid
                                                Style - Sidebar Left</a>
                                        </li>
                                        <li class="menu-item ">
                                            <a href="property-gird-right-sidebar.html" class="item-menu-mobile ">
                                                Grid Style - Sidebar Right</a>
                                        </li>
                                        <li class="menu-item ">
                                            <a href="property-list-full-width.html" class="item-menu-mobile "> List
                                                Style - Full Width</a>
                                        </li>
                                        <li class="menu-item ">
                                            <a href="property-list-top-search.html" class="item-menu-mobile "> List
                                                Style - Top Search</a>
                                        </li>
                                        <li class="menu-item ">
                                            <a href="property-list-left-sidebar.html" class="item-menu-mobile ">List
                                                Style - Sidebar Left</a>
                                        </li>
                                        <li class="menu-item ">
                                            <a href="property-list-right-sidebar.html" class="item-menu-mobile ">
                                                List Style - Sidebar Right</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="menu-item menu-item-has-children-mobile-2">
                                <a href="#sub-feaure" class="item-menu-mobile  collapsed" data-bs-toggle="collapse"
                                   aria-expanded="true" aria-controls="sub-agents">Feature</a>
                                <div id="sub-feaure" class="collapse" data-bs-parent="#dropdown-menu-two">
                                    <ul class="sub-mobile">
                                        <li class="menu-item">
                                            <a href="property-half-map-grid.html">Property Half Map Grid</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="property-half-map-list.html">Property Half Map List</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="property-half-top-map.html">Property Half Top Map</a>
                                        </li>
                                        <li class="menu-item ">
                                            <a href="property-filter-popup.html" class="item-menu-mobile ">
                                                Property Filter Popup</a>
                                        </li>
                                        <li class="menu-item ">
                                            <a href="property-filter-popup-left.html"
                                               class="item-menu-mobile ">Property Filter Popup Left</a>
                                        </li>
                                        <li class="menu-item ">
                                            <a href="property-filter-popup-right.html" class="item-menu-mobile ">
                                                Property Filter Popup Right</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="menu-item menu-item-has-children-mobile-2">
                                <a href="#sub-details" class="item-menu-mobile  collapsed" data-bs-toggle="collapse"
                                   aria-expanded="true" aria-controls="sub-agents">Listing Details</a>
                                <div id="sub-details" class="collapse" data-bs-parent="#dropdown-menu-two">
                                    <ul class="sub-mobile">
                                        <li class="menu-item">
                                            <a href="property-detail-v1.html">Property Details 1</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="property-detail-v2.html">Property Details 2</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="property-detail-v3.html">Property Details 3</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="property-detail-v4.html">Property Details 4</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="property-detail-v5.html">Property Details 5</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="menu-item menu-item-has-children-mobile">
                    <a href="#dropdown-menu-four" class="item-menu-mobile collapsed" data-bs-toggle="collapse"
                       aria-expanded="true" aria-controls="dropdown-menu-four">
                        Pages
                    </a>
                    <div id="dropdown-menu-four" class="collapse" data-bs-parent="#menu-mobile-menu">
                        <ul class="sub-mobile">
                            <li class="menu-item menu-item-has-children-mobile-2">
                                <a href="#sub-agents" class="item-menu-mobile  collapsed" data-bs-toggle="collapse"
                                   aria-expanded="true" aria-controls="sub-agents">Agents</a>
                                <div id="sub-agents" class="collapse" data-bs-parent="#dropdown-menu-four">
                                    <ul class="sub-mobile">
                                        <li class="menu-item ">
                                            <a href="agents.html" class="item-menu-mobile "> Agents</a>
                                        </li>
                                        <li class="menu-item ">
                                            <a href="agents-details.html" class="item-menu-mobile "> Agnet
                                                Details</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="menu-item menu-item-has-children-mobile-2">
                                <a href="#sub-agency" class="item-menu-mobile  collapsed" data-bs-toggle="collapse"
                                   aria-expanded="true" aria-controls="sub-agency">Agencies</a>
                                <div id="sub-agency" class="collapse" data-bs-parent="#dropdown-menu-four">
                                    <ul class="sub-mobile">
                                        <li class="menu-item ">
                                            <a href="agency-grid.html" class="item-menu-mobile ">Agencies Grid</a>
                                        </li>
                                        <li class="menu-item ">
                                            <a href="agency-list.html" class="item-menu-mobile "> Agencies List</a>
                                        </li>
                                        <li class="menu-item ">
                                            <a href="agency-details.html" class="item-menu-mobile "> Agencies
                                                Details</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="menu-item"><a href="home-loan-process.html">Home Loan Process</a></li>
                            <li class="menu-item"><a href="career.html">Career</a></li>
                            <li class="menu-item"><a href="faq.html">Faq's</a></li>
                            <li class="menu-item"><a href="dashboard.html">Dashboard</a></li>
                        </ul>
                    </div>
                </li>
                <li class="menu-item menu-item-has-children-mobile">
                    <a href="#dropdown-menu-five" class="item-menu-mobile collapsed" data-bs-toggle="collapse"
                       aria-expanded="true" aria-controls="dropdown-menu-five">
                        Blogs
                    </a>
                    <div id="dropdown-menu-five" class="collapse" data-bs-parent="#menu-mobile-menu">
                        <ul class="sub-mobile ">
                            <li class="menu-item"><a href="blog-grid.html">Blog Grid</a></li>
                            <li class="menu-item"><a href="blog-list.html">Blog List</a></li>
                            <li class="menu-item"><a href="blog-details.html">Blog Details </a></li>
                        </ul>
                    </div>
                </li>
                <li class="menu-item ">
                    <a href="contact.html" class="tem-menu-mobile "> Contact</a>
                </li>
            </ul>
            <div class="support">
                <a href="#" class="text-need"> Need help?</a>
                <ul class="mb-info">
                    <li>Call Us Now: <span class="number">1-555-678-8888</span></li>
                    <li>Support 24/7: <a href="#">themesflat@gmail.com</a></li>
                    <li>
                        <div class="wrap-social">
                            <p>Follow us:</p>
                            <ul class="tf-social  style-2">
                                <li>
                                    <a href="#">
                                        <i class="icon-fb"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icon-X"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icon-linked"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icon-ins"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>

            </div>
        </div>
    </div>
</div>
