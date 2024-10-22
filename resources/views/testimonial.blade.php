@include('include.header') 
        
        <!-- Page Header Start -->
        <div class="container-fluid page-header py-5">
            <div class="container text-center py-5">
                <h1 class="display-2 text-white mb-4 animated slideInDown">Testimonial</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-0 animated slideInDown">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item text-white" aria-current="page">Testimonial</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Page Header End -->


        <!-- Testiminial Start -->
        <div class="container-fluid testimonial py-5">
            <div class="container py-5">
                <div class="text-center mb-5 wow fadeInUp" data-wow-delay=".3s">
                    <h5 class="mb-2 px-3 py-1 text-dark rounded-pill d-inline-block border border-2 border-primary">Testimonial</h5>
                    <h1 class="display-5 w-50 mx-auto">What Clients Say About Our Services</h1>
                </div>
                <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay=".5s">
                    @foreach ($testimonial as $item)
                    <div class="testimonial-item">
                        <div class="testimonial-content rounded mb-4 p-4">
                            <p class="fs-5 m-0">{{$item->description}}</p>
                        </div>
                        <div class="d-flex align-items-center  mb-4" style="padding: 0 0 0 25px;">
                            <div class="position-relative">
                                <img src="{{'storage/'.$item->image}}" class="img-fluid rounded-circle py-2" alt="">
                                <div class="position-absolute" style="top: 33px; left: -25px;">
                                    <i class="fa fa-quote-left rounded-pill bg-primary text-dark p-3"></i>
                                </div>
                            </div>
                            <div class="ms-3">
                                <h4 class="mb-0">{{$item->name}}</h4>
                                <p class="mb-1">{{$item->designation}}</p>
                                <div class="d-flex">
                                    <small class="fas fa-star text-primary me-1"></small>
                                    <small class="fas fa-star text-primary me-1"></small>
                                    <small class="fas fa-star text-primary me-1"></small>
                                    <small class="fas fa-star text-primary me-1"></small>
                                    <small class="fas fa-star text-primary me-1"></small>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    {{-- <div class="testimonial-item">
                        <div class="testimonial-content rounded mb-4 p-4">
                            <p class="fs-5 m-0">Lorem ipsum dolor sit amet elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam quis tempor.</p>
                        </div>
                        <div class="d-flex align-items-center  mb-4" style="padding: 0 0 0 25px;">
                            <div class="position-relative">
                                <img src="img/testimonial-2.jpg" class="img-fluid rounded-circle py-2" alt="">
                                <div class="position-absolute" style="top: 33px; left: -25px;">
                                    <i class="fa fa-quote-left rounded-pill bg-primary text-dark p-3"></i>
                                </div>
                            </div>
                            <div class="ms-3">
                                <h4 class="mb-0">Client Name</h4>
                                <p class="mb-1">Profession</p>
                                <div class="d-flex">
                                    <small class="fas fa-star text-primary me-1"></small>
                                    <small class="fas fa-star text-primary me-1"></small>
                                    <small class="fas fa-star text-primary me-1"></small>
                                    <small class="fas fa-star text-primary me-1"></small>
                                    <small class="fas fa-star text-primary me-1"></small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-content rounded mb-4 p-4">
                            <p class="fs-5 m-0">Lorem ipsum dolor sit amet elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam quis tempor.</p>
                        </div>
                        <div class="d-flex align-items-center  mb-4" style="padding: 0 0 0 25px;">
                            <div class="position-relative">
                                <img src="img/testimonial-3.jpg" class="img-fluid rounded-circle py-2" alt="">
                                <div class="position-absolute" style="top: 33px; left: -25px;">
                                    <i class="fa fa-quote-left rounded-pill bg-primary text-dark p-3"></i>
                                </div>
                            </div>
                            <div class="ms-3">
                                <h4 class="mb-0">Client Name</h4>
                                <p class="mb-1">Profession</p>
                                <div class="d-flex">
                                    <small class="fas fa-star text-primary me-1"></small>
                                    <small class="fas fa-star text-primary me-1"></small>
                                    <small class="fas fa-star text-primary me-1"></small>
                                    <small class="fas fa-star text-primary me-1"></small>
                                    <small class="fas fa-star text-primary me-1"></small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-content rounded mb-4 p-4">
                            <p class="fs-5 m-0">Lorem ipsum dolor sit amet elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam quis tempor.</p>
                        </div>
                        <div class="d-flex align-items-center  mb-4" style="padding: 0 0 0 25px;">
                            <div class="position-relative">
                                <img src="img/testimonial-4.jpg" class="img-fluid rounded-circle py-2" alt="">
                                <div class="position-absolute" style="top: 33px; left: -25px;">
                                    <i class="fa fa-quote-left rounded-pill bg-primary text-dark p-3"></i>
                                </div>
                            </div>
                            <div class="ms-3">
                                <h4 class="mb-0">Client Name</h4>
                                <p class="mb-1">Profession</p>
                                <div class="d-flex">
                                    <small class="fas fa-star text-primary me-1"></small>
                                    <small class="fas fa-star text-primary me-1"></small>
                                    <small class="fas fa-star text-primary me-1"></small>
                                    <small class="fas fa-star text-primary me-1"></small>
                                    <small class="fas fa-star text-primary me-1"></small>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
        <!-- Testiminial End -->
        @include('include.footer') 