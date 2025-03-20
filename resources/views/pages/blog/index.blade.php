<x-app-layout pageName="{{$pageName}}">
    <x-hogent.banner title="{{$pageName}}"/>
    <div class="page-content">
        <!-- page-blog-grid -->
        <section class="section-blog-grid ">
            <div class="tf-container">
                <div class="row">
                    <div class="col-12">
                        <div class="box-title">
                            <h2>All Blog Post</h2>
                        </div>
                        <div class="grid-layout-3">
                            @forelse ($posts as $post)
                                <x-hogent.blog-card-blog :post="$post"/>
                            @empty
                                <div class="mx-auto col-span-3">
                                    <div class="flex items-center justify-center">
                                        <p class="text-2xl font-semibold text-gray-300">No posts found</p>
                                    </div>
                                </div>
                            @endforelse
                        </div>
                        <ul class="wg-pagination justify-center">
                            <li class="arrow">
                                <a href="#"><i class="icon-arrow-left"></i></a>
                            </li>
                            <li>
                                <a href="#">1</a>
                            </li>
                            <li class="active">
                                <a href="#">2</a>
                            </li>
                            <li>
                                <a href="#">...</a>
                            </li>
                            <li>
                                <a href="#">20</a>
                            </li>
                            <li class="arrow">
                                <a href="#"><i class="icon-arrow-right"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- /page-blog-grid -->

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
