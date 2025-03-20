<x-app-layout pageName="{{$pageName}}">
    <x-hogent.banner title="{{$pageName}}"/>
    <div class="page-content">
        <!-- page-blog-details -->
        <section class="section-blog-details ">
            <div class="tf-container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="heading">
                            <h2 class="title-heading ">{{ $post->title }}</h2>
                            <div class="meta flex">
                                <div class="meta-item flex align-center">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M14.25 15.75V14.25C14.25 13.4544 13.9339 12.6913 13.3713 12.1287C12.8087 11.5661 12.0456 11.25 11.25 11.25H6.75C5.95435 11.25 5.19129 11.5661 4.62868 12.1287C4.06607 12.6913 3.75 13.4544 3.75 14.25V15.75"
                                            stroke="#A8ABAE" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"/>
                                        <path
                                            d="M9 8.25C10.6569 8.25 12 6.90685 12 5.25C12 3.59315 10.6569 2.25 9 2.25C7.34315 2.25 6 3.59315 6 5.25C6 6.90685 7.34315 8.25 9 8.25Z"
                                            stroke="#A8ABAE" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"/>
                                    </svg>
                                    <p class=" text-color-primary ">{{ $post->user->name() }}</p>
                                </div>
                                <div class="meta-item flex align-center">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M15 15C15.3978 15 15.7794 14.842 16.0607 14.5607C16.342 14.2794 16.5 13.8978 16.5 13.5V6C16.5 5.60218 16.342 5.22064 16.0607 4.93934C15.7794 4.65804 15.3978 4.5 15 4.5H9.075C8.82414 4.50246 8.57666 4.44196 8.35523 4.32403C8.13379 4.20611 7.94547 4.03453 7.8075 3.825L7.2 2.925C7.06342 2.7176 6.87748 2.54736 6.65887 2.42955C6.44027 2.31174 6.19583 2.25004 5.9475 2.25H3C2.60218 2.25 2.22064 2.40804 1.93934 2.68934C1.65804 2.97064 1.5 3.35218 1.5 3.75V13.5C1.5 13.8978 1.65804 14.2794 1.93934 14.5607C2.22064 14.842 2.60218 15 3 15H15Z"
                                            stroke="#A8ABAE" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"/>
                                    </svg>
                                    @foreach ($post->categories as $category)
                                        <p class=" text-color-primary">{{ $category->name }}</p>
                                    @endforeach
                                </div>
                                <div class="meta-item flex align-center">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M5.925 15C7.35643 15.7343 9.00306 15.9332 10.5682 15.5609C12.1333 15.1885 13.5139 14.2694 14.4613 12.9692C15.4087 11.6689 15.8606 10.0731 15.7354 8.46916C15.6103 6.86524 14.9164 5.35876 13.7789 4.22118C12.6413 3.0836 11.1348 2.38972 9.53088 2.2646C7.92697 2.13947 6.3311 2.59132 5.03086 3.53872C3.73063 4.48612 2.81152 5.86677 2.43917 7.43187C2.06682 8.99697 2.26571 10.6436 3 12.075L1.5 16.5L5.925 15Z"
                                            stroke="#A8ABAE" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"/>
                                    </svg>
                                    <p>0 comment</p>
                                </div>
                                <div class="meta-item flex align-center">
                                    <p>{{ $post->formattedPublishedDate() }}</p>
                                </div>
                            </div>
                        </div>
                        <p class="fw-5 text-color-heading mb-30">{{ $post->sub_title }}</p>
                        <div class="image-wrap mb-30">
                            <img class="lazyload" data-src="{{ $post->featurePhoto  }}"
                                 src="{{ $post->featurePhoto }}" alt="{{ $post->photo_alt_text }}">
                        </div>
                        <div class="wrap-content mb-30">
                            {!! tiptap_converter()->asHTML($post->body, toc: true, maxDepth: 3) !!}
                        </div>
                        <div class="tag-wrap flex justify-between items-center">
                            @if($post->tags->count())
                                <div class="tags">
                                    <p>Tags:</p>
                                    <div class="tags ">
                                        @foreach ($post->tags as $tag)
                                            <a href="#">{{ $tag->name }}</a>
                                        @endforeach
                                    </div>
                                </div>
                            @endif
                            <div class="wrap-social">
                                <p>Share this post:</p>
                                <ul class="tf-social style-1">
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
                        <x-hogent.comments/>
                        <div class="box-send ">
                            <div class="heading-box">
                                <h4 class="title fw-7">Leave A Comment</h4>
                                <p>Your email address will not be published. Required fields are marked *</p>
                            </div>
                            <form class="form-add-review">
                                <div class="cols">
                                    <fieldset class="name">
                                        <label class="text-1 fw-6 " for="name">Name</label>
                                        <input type="text" class="tf-input style-2" placeholder="Your Name*"
                                               tabindex="2" aria-required="true" id="name" name="name" required>
                                    </fieldset>
                                    <fieldset class="email">
                                        <label class="text-1 fw-6" for="email">Email</label>
                                        <input type="email" class="tf-input style-2" placeholder="Your Email*"
                                               tabindex="2" aria-required="true" id="email" name="email" required>
                                    </fieldset>
                                </div>
                                <div class="checkbox-item style-1">
                                    <label>
                                        <span class="text-1">Save your name, email for the next time review</span>
                                        <input type="checkbox">
                                        <span class="btn-checkbox"></span>
                                    </label>
                                </div>
                                <fieldset class="message">
                                    <label class="text-1 fw-6" for="message-comment">Comment</label>
                                    <textarea id="message-comment" class="tf-input" name="message" rows="4"
                                              placeholder="Your comment" tabindex="4" aria-required="true"
                                              required></textarea>
                                </fieldset>
                                <button class="tf-btn bg-color-primary pd-2 fw-7" type="submit">
                                    Post Comment
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class=" tf-sidebar">
                            <div class="sidebar-search sidebar-item">
                                <h4 class="sidebar-title">Search Blog</h4>
                                <form action="#" class="form-search">
                                    <fieldset>
                                        <input class="" type="text" placeholder="Search" name="text" tabindex="2"
                                               value="" aria-required="true" required="">
                                    </fieldset>
                                    <div class="button-submit">
                                        <button class="" type="submit"><i class="icon-MagnifyingGlass"></i></button>
                                    </div>
                                </form>
                            </div>
                            @if($categories->count())
                                <div class="sidebar-item sidebar-categories">
                                    <h4 class="sidebar-title">Categories</h4>
                                    <ul class="list-categories">
                                        @foreach($categories as $category)
                                            <li class="flex items-center justify-between">
                                                <a href="#" class="text-1 lh-20 fw-5">{{ $category->name }}</a>
                                                <div class="number">({{ $category->posts_count }})</div>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <div class="sidebar-item sidebar-featured  pb-36">
                                <h4 class="sidebar-title">Featured Listings</h4>
                                <ul>
                                    <li class="box-listings hover-img">
                                        <div class="image-wrap">
                                            <img class="lazyload" data-src="images/blog/box-listings-1.jpg"
                                                 src="images/blog/box-listings-1.jpg" alt="">
                                        </div>
                                        <div class="content">
                                            <div class="text-1 title fw-5">
                                                <a href="blog-single.html">Key Real Estate Trends to Watch in
                                                    2024</a>
                                            </div>
                                            <p><span class="icon"><svg width="16" height="17" viewBox="0 0 16 17"
                                                                       fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M4.5 2.5V4M11.5 2.5V4M2 13V5.5C2 5.10218 2.15804 4.72064 2.43934 4.43934C2.72064 4.15804 3.10218 4 3.5 4H12.5C12.8978 4 13.2794 4.15804 13.5607 4.43934C13.842 4.72064 14 5.10218 14 5.5V13M2 13C2 13.3978 2.15804 13.7794 2.43934 14.0607C2.72064 14.342 3.10218 14.5 3.5 14.5H12.5C12.8978 14.5 13.2794 14.342 13.5607 14.0607C13.842 13.7794 14 13.3978 14 13M2 13V8C2 7.60218 2.15804 7.22064 2.43934 6.93934C2.72064 6.65804 3.10218 6.5 3.5 6.5H12.5C12.8978 6.5 13.2794 6.65804 13.5607 6.93934C13.842 7.22064 14 7.60218 14 8V13"
                                                                stroke="#A8ABAE" stroke-linecap="round"
                                                                stroke-linejoin="round"/>
                                                        </svg>
                                                    </span>February 16, 2024
                                            </p>
                                        </div>
                                    </li>
                                    <li class="box-listings hover-img">
                                        <div class=" image-wrap">
                                            <img class="lazyload" data-src="images/blog/box-listings-2.jpg"
                                                 src="images/blog/box-listings-2.jpg" alt="">
                                        </div>
                                        <div class="content">
                                            <div class="text-1 title fw-5">
                                                <a href="blog-single.html">Expert Tips for Profitable Real Estate
                                                    Investments.</a>
                                            </div>
                                            <p><span class="icon"><svg width="16" height="17" viewBox="0 0 16 17"
                                                                       fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M4.5 2.5V4M11.5 2.5V4M2 13V5.5C2 5.10218 2.15804 4.72064 2.43934 4.43934C2.72064 4.15804 3.10218 4 3.5 4H12.5C12.8978 4 13.2794 4.15804 13.5607 4.43934C13.842 4.72064 14 5.10218 14 5.5V13M2 13C2 13.3978 2.15804 13.7794 2.43934 14.0607C2.72064 14.342 3.10218 14.5 3.5 14.5H12.5C12.8978 14.5 13.2794 14.342 13.5607 14.0607C13.842 13.7794 14 13.3978 14 13M2 13V8C2 7.60218 2.15804 7.22064 2.43934 6.93934C2.72064 6.65804 3.10218 6.5 3.5 6.5H12.5C12.8978 6.5 13.2794 6.65804 13.5607 6.93934C13.842 7.22064 14 7.60218 14 8V13"
                                                                stroke="#A8ABAE" stroke-linecap="round"
                                                                stroke-linejoin="round"/>
                                                        </svg>
                                                    </span>February 16, 2024
                                            </p>

                                        </div>
                                    </li>
                                    <li class="box-listings hover-img">
                                        <div class=" image-wrap">
                                            <img class="lazyload" data-src="images/blog/box-listings-3.jpg"
                                                 src="images/blog/box-listings-3.jpg" alt="">
                                        </div>
                                        <div class="content">
                                            <div class="text-1 title fw-5">
                                                <a href="blog-single.html">10 Steps to Prepare for a Successful Real
                                                    Estate...</a>
                                            </div>
                                            <p><span class="icon"><svg width="16" height="17" viewBox="0 0 16 17"
                                                                       fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M4.5 2.5V4M11.5 2.5V4M2 13V5.5C2 5.10218 2.15804 4.72064 2.43934 4.43934C2.72064 4.15804 3.10218 4 3.5 4H12.5C12.8978 4 13.2794 4.15804 13.5607 4.43934C13.842 4.72064 14 5.10218 14 5.5V13M2 13C2 13.3978 2.15804 13.7794 2.43934 14.0607C2.72064 14.342 3.10218 14.5 3.5 14.5H12.5C12.8978 14.5 13.2794 14.342 13.5607 14.0607C13.842 13.7794 14 13.3978 14 13M2 13V8C2 7.60218 2.15804 7.22064 2.43934 6.93934C2.72064 6.65804 3.10218 6.5 3.5 6.5H12.5C12.8978 6.5 13.2794 6.65804 13.5607 6.93934C13.842 7.22064 14 7.60218 14 8V13"
                                                                stroke="#A8ABAE" stroke-linecap="round"
                                                                stroke-linejoin="round"/>
                                                        </svg>
                                                    </span>February 16, 2024
                                            </p>

                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="sidebar-newslatter sidebar-item">
                                <h4 class="sidebar-title">Join Our Newsletter</h4>
                                <p>Signup to be the first to hear about exclusive deals, special offers and upcoming
                                    collections</p>
                                <form action="#" class="form-search">
                                    <fieldset>
                                        <input class="" type="text" placeholder="Search" name="text" tabindex="2"
                                               value="" aria-required="true" required="">
                                    </fieldset>
                                    <div class="button-submit">
                                        <button class="" type="submit"><i class="icon-send-message"></i></button>
                                    </div>
                                </form>
                            </div>
                            @if($tags->count())
                                <div class="sidebar-item sidebar-tags ">
                                    <h4 class="sidebar-title">Popular Tags</h4>
                                    <ul class="tags-list">
                                        @foreach($tags as $tag)
                                            <li><a href="#" class="tags-item">{{$tag->name}}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class=" sidebar-ads">
                                <div class="image-wrap">
                                    <img class="lazyload" data-src="images/blog/ads.jpg" src="images/blog/ads.jpg"
                                         alt="">
                                </div>
                                <div class="logo relative z-5">
                                    <img src="images/logo/logo-2%402x.png" alt="">
                                </div>
                                <div class="box-ads relative z-5">
                                    <div class="content ">
                                        <h4 class="title"><a href="property-detail-v1.html">We can help you find a
                                                local real estate agent</a></h4>
                                        <div class="text-addres ">
                                            <p>Connect with a trusted agent who knows the market inside out -
                                                whether you’re buying or selling.</p>
                                        </div>
                                    </div>
                                    <a href="#" class="tf-btn fw-6 bg-color-primary w-full">
                                        Connect with an agent
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /page-blog-details -->

        @if($relatedPosts->count())
            <section class="section-related-posts">
                <div class="tf-container">
                    <div class="row">
                        <div class="col-12">
                            <h4 class="heading">Related posts</h4>
                            <div class="swiper style-pagination tf-sw-latest" data-preview="3" data-tablet="2"
                                 data-mobile-sm="2" data-mobile="1" data-space-lg="40" data-space-md="20"
                                 data-space="15">
                                <div class="swiper-wrapper ">
                                    @foreach($relatedPosts as $relatedPost)
                                        <x-hogent.blog-card :post="$relatedPost"/>
                                    @endforeach

                                </div>
                                <div class="sw-pagination sw-pagination-latest text-center d-lg-none d-block mt-20">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endif

        <!-- section-CTA -->
        <section class="section-CTA">
            <div class="tf-container">
                <div class="row">
                    <div class="col-12">
                        <div class="content-inner">
                            <img src="images/section/cta.png" alt="">
                            <div class="content">
                                <h4 class="text-white mb-8 ">Find a Local Real Estate Agent Today</h4>
                                <p class="text-white text-1">If you’re looking to buy or sell a home. We’ll help you
                                    make
                                    the most money
                                    possible.</p>
                            </div>
                            <a href="#" class="tf-btn style-2 fw-6 ">Find your location agent <i
                                    class="icon-MagnifyingGlass fw-6"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /section-CTA -->
    </div>
</x-app-layout>
