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
                <li class="menu-item  {{setActiveMenu('home', 'current-menu-item') }}">
                    <a href="{{route('home')}}" class="item-menu-mobile ">Home</a>
                </li>
                <li class="menu-item  {{ setActiveMenu('listing', 'current-menu-item') }}">
                    <a href="{{route('listing')}}" class="item-menu-mobile ">Listing</a>
                </li>
                <li class="menu-item  {{ setActiveMenu('agents', 'current-menu-item') }}">
                    <a href="{{route('agents')}}" class="item-menu-mobile ">Agents</a>
                </li>
                <li class="menu-item  {{ setActiveMenu('blog', 'current-menu-item') }}">
                    <a href="{{route('blog')}}" class="item-menu-mobile ">Blog</a>
                </li>
                <li class="menu-item  {{ setActiveMenu('about', 'current-menu-item') }}">
                    <a href="{{route('about')}}" class="item-menu-mobile ">About Us</a>
                </li>
                <li class="menu-item  {{ setActiveMenu('contact', 'current-menu-item') }}">
                    <a href="{{route('contact')}}" class="item-menu-mobile ">Contact Us</a>
                </li>
            </ul>

        </div>
    </div>
</div>
</div>
