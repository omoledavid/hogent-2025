<footer id="footer">
    <div class="tf-container">
        <div class="row">
            <div class="col-12">
                <div class="footer-top">
                    <div class="footer-logo">
                        <a href="{{route('home')}}">
                            <img id="logo_footer" src="{{logo()}}" alt="logo-footer">
                        </a>
                    </div>
                    <div class="footer-contact">
                        <div class="contact-item">
                            <div class="icons">
                                <svg width="48" height="49" viewBox="0 0 48 49" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M43.9989 34.34V40.34C44.0012 40.897 43.8871 41.4483 43.6639 41.9586C43.4408 42.469 43.1135 42.9271 42.703 43.3037C42.2926 43.6802 41.808 43.9669 41.2804 44.1454C40.7527 44.3238 40.1936 44.3901 39.6389 44.34C33.4846 43.6712 27.5729 41.5682 22.3789 38.2C17.5465 35.1293 13.4496 31.0323 10.3789 26.2C6.99885 20.9824 4.89538 15.0419 4.23889 8.85995C4.18891 8.30688 4.25464 7.74947 4.43189 7.2232C4.60914 6.69693 4.89403 6.21333 5.26842 5.80319C5.64281 5.39306 6.0985 5.06537 6.60647 4.84099C7.11444 4.61662 7.66357 4.50047 8.21889 4.49995H14.2189C15.1895 4.4904 16.1305 4.83411 16.8664 5.46702C17.6024 6.09992 18.083 6.97884 18.2189 7.93995C18.4721 9.86008 18.9418 11.7454 19.6189 13.5599C19.888 14.2758 19.9462 15.0538 19.7867 15.8017C19.6272 16.5496 19.2566 17.2362 18.7189 17.78L16.1789 20.3199C19.026 25.327 23.1718 29.4728 28.1789 32.32L30.7189 29.78C31.2627 29.2422 31.9492 28.8716 32.6971 28.7121C33.4451 28.5526 34.223 28.6109 34.9389 28.8799C36.7534 29.5571 38.6388 30.0267 40.5589 30.28C41.5304 30.417 42.4177 30.9064 43.052 31.6549C43.6862 32.4035 44.0232 33.3591 43.9989 34.34Z"
                                        stroke="#F1913D" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>
                            <div class="content">
                                <div class="title text-1">
                                    Call us
                                </div>
                                <h6>
                                    <a href="#"> {{format_phone_number($general->phone)}}</a>
                                </h6>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="icons">
                                <svg width="48" height="49" viewBox="0 0 48 49" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M40 8.5H8C5.79086 8.5 4 10.2909 4 12.5V36.5C4 38.7091 5.79086 40.5 8 40.5H40C42.2091 40.5 44 38.7091 44 36.5V12.5C44 10.2909 42.2091 8.5 40 8.5Z"
                                        stroke="#F1913D" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M44 14.5L26.06 25.9C25.4425 26.2869 24.7286 26.492 24 26.492C23.2714 26.492 22.5575 26.2869 21.94 25.9L4 14.5"
                                        stroke="#F1913D" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>

                            </div>
                            <div class="content">
                                <div class="title text-1">
                                    Nee live help
                                </div>
                                <h6 class="fw-4">
                                    <a href="#">
                                        {{$general->email}}
                                    </a>
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-main">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-menu-list footer-col-block style-2">
                            <h5 class="title lh-30 title-desktop">About us</h5>
                            <h5 class="title lh-30 title-mobile">About us</h5>
                            <ul class="tf-collapse-content">
                                @include('partials.footer-nav')
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-menu-list footer-col-block">
                            <h5 class="title lh-30 title-desktop">Popular house</h5>
                            <h5 class="title lh-30 title-mobile">Popular house</h5>
                            <ul class="tf-collapse-content">
                                <li><a href="property-gird.html">#Penthouses</a></li>
                                <li><a href="property-gird.html">#Villa</a></li>
                                <li><a href="property-gird.html">#Smart home</a></li>
                                <li><a href="property-gird.html">#Apartments</a></li>
                                <li><a href="property-gird.html">#Office</a></li>
                                <li><a href="property-gird.html">#Bungalow</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-menu-list footer-col-block style-2">
                            <h5 class="title lh-30 title-desktop">Quick links</h5>
                            <h5 class="title lh-30 title-mobile">Quick links</h5>
                            <ul class="tf-collapse-content">
                               @include('partials.quicklink')
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-menu-list newsletter ">
                            <h5 class="title lh-30 ">Newsletter</h5>
                            <div class="sib-form">
                                <div id="sib-form-container" class="sib-form-container">
                                    <div id="error-message" class="sib-form-message-panel">
                                        <div
                                            class="sib-form-message-panel__text sib-form-message-panel__text--center">
                                            <svg viewBox="0 0 512 512" class="sib-icon sib-notification__icon">
                                                <path
                                                    d="M256 40c118.621 0 216 96.075 216 216 0 119.291-96.61 216-216 216-119.244 0-216-96.562-216-216 0-119.203 96.602-216 216-216m0-32C119.043 8 8 119.083 8 256c0 136.997 111.043 248 248 248s248-111.003 248-248C504 119.083 392.957 8 256 8zm-11.49 120h22.979c6.823 0 12.274 5.682 11.99 12.5l-7 168c-.268 6.428-5.556 11.5-11.99 11.5h-8.979c-6.433 0-11.722-5.073-11.99-11.5l-7-168c-.283-6.818 5.167-12.5 11.99-12.5zM256 340c-15.464 0-28 12.536-28 28s12.536 28 28 28 28-12.536 28-28-12.536-28-28-28z" />
                                            </svg>
                                            <span class="sib-form-message-panel__inner-text">
                                                        Your subscription could not be saved. Please try again.
                                                    </span>
                                        </div>
                                    </div>
                                    <div id="success-message" class="sib-form-message-panel">
                                        <div
                                            class="sib-form-message-panel__text sib-form-message-panel__text--center">
                                            <svg viewBox="0 0 512 512" class="sib-icon sib-notification__icon">
                                                <path
                                                    d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 464c-118.664 0-216-96.055-216-216 0-118.663 96.055-216 216-216 118.664 0 216 96.055 216 216 0 118.663-96.055 216-216 216zm141.63-274.961L217.15 376.071c-4.705 4.667-12.303 4.637-16.97-.068l-85.878-86.572c-4.667-4.705-4.637-12.303.068-16.97l8.52-8.451c4.705-4.667 12.303-4.637 16.97.068l68.976 69.533 163.441-162.13c4.705-4.667 12.303-4.637 16.97.068l8.451 8.52c4.668 4.705 4.637 12.303-.068 16.97z" />
                                            </svg>
                                            <span class="sib-form-message-panel__inner-text">
                                                        Your subscription has been successful.
                                                    </span>
                                        </div>
                                    </div>
                                    <div id="sib-container"
                                         class="sib-container--large sib-container--vertical">
                                        <form id="sib-form" method="POST"
                                              action="https://3c02c1a1.sibforms.com/serve/MUIFABjeOIIJNMRgQ-0Mb1bjkLdsnuanXhO94qzsHBwAVG3reSaZ5DIq2ozIM0_PBl7b_lcysdmopwilW1dcjaAmtOu_es-dny_hZggPsstdEuk75SIQ1B7K-NuFEN5hBn9HqJ2SFLbleb-PnrNQY1dGLy7gXPmMlWJfT2Jfc2MeVJg4Ufeezo6UlJhAZwbC5nZ8aV9PghzVQVkE"
                                              data-type="subscription">
                                            <div class="sib-form-block">
                                                <div class="sib-text-form-block">
                                                    <p class="text-1">Sign up to receive the latest articles</p>
                                                </div>
                                            </div>
                                            <div class="sib-input sib-form-block">
                                                <div class="form__entry entry_block">
                                                    <div class="form__label-row ">
                                                        <fieldset class="entry__field">
                                                            <input class="input input-nl" type="text" id="EMAIL"
                                                                   name="EMAIL" autocomplete="off"
                                                                   placeholder="Your email address"
                                                                   data-required="true" required />
                                                        </fieldset>
                                                    </div>
                                                    <label class="  entry__error entry__error--primary">
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="sib-optin sib-form-block">
                                                <div class="form__entry entry_mcq">
                                                    <div class="form__label-row ">
                                                        <div class="checkbox-item ">
                                                            <label>
                                                                        <span class="text-2 text-color-default">I have
                                                                            read and agree to
                                                                            the terms &
                                                                            conditions</span>
                                                                <input type="checkbox" class="input_replaced"
                                                                       value="1" id="OPT_IN" name="OPT_IN">
                                                                <span class="btn-checkbox"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <label class="entry__error entry__error--primary">
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="sib-form-block">
                                                <button
                                                    class="sib-form-block__button sib-form-block__button-with-loader tf-btn bg-color-primary w-full"
                                                    form="sib-form" type="submit">
                                                    <svg class="icon clickable__icon progress-indicator__icon sib-hide-loader-icon"
                                                         viewBox="0 0 512 512">
                                                        <path
                                                            d="M460.116 373.846l-20.823-12.022c-5.541-3.199-7.54-10.159-4.663-15.874 30.137-59.886 28.343-131.652-5.386-189.946-33.641-58.394-94.896-95.833-161.827-99.676C261.028 55.961 256 50.751 256 44.352V20.309c0-6.904 5.808-12.337 12.703-11.982 83.556 4.306 160.163 50.864 202.11 123.677 42.063 72.696 44.079 162.316 6.031 236.832-3.14 6.148-10.75 8.461-16.728 5.01z" />
                                                    </svg>
                                                    SUBSCRIBE
                                                </button>
                                            </div>
                                    </div>
                                    <input type="text" name="email_address_check" value=""
                                           class="input--hidden">
                                    <input type="hidden" name="locale" value="en">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="footer-bottom">
                    <p>Copyright © 2024 <span class="fw-7">{{$general->site_name}}</span> . Designed & Developed
                        by
                        <a target="_blank" href="https://smavotex.com">Smavotex</a>
                    </p>
                    <div class="wrap-social">
                        <div class="text-3  fw-6 text-white">Follow us</div>
                        <ul class="tf-social ">
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
                </div>
            </div>
        </div>
    </div>
</footer>
