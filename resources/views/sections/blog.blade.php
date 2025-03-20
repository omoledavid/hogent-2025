<section class="section-opinion tf-spacing-1 pt-0">
    <div class="tf-container">
        <div class="row">
            <div class="col-12">
                <div class="heading-section text-center mb-48">
                    <h2 class="title text-anime-wave">Insight & Opinion</h2>
                    <p class="text-1 wow animate__fadeInUp animate__animated" data-wow-duration="1.5s"
                       data-wow-delay="0s">Thousands of luxury home enthusiasts just like you
                        visit our website.
                    </p>
                </div>
                <div class="swiper style-pagination tf-sw-latest" data-preview="3" data-tablet="2"
                     data-mobile-sm="2" data-mobile="1" data-space-lg="40" data-space-md="20"
                     data-space="15">
                    <div class="swiper-wrapper ">
                        @forelse ($posts as $post)
                            <x-hogent.blog-card :post="$post"/>
                        @empty
                            <div class="mx-auto col-span-3">
                                <div class="flex items-center justify-center">
                                    <p class="text-2xl font-semibold text-gray-300">No posts found</p>
                                </div>
                            </div>
                        @endforelse

                    </div>
                    <div class="sw-pagination sw-pagination-latest text-center d-lg-none d-block mt-20">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
