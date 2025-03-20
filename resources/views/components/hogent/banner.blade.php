@props(['title'])
<section class="flat-title ">
    <div class="tf-container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-inner ">
                    <ul class="breadcrumb">
                        <li><a class="home fw-6 text-color-3" href="{{route('home')}}">Home</a></li>
                        <li>{{$title}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
