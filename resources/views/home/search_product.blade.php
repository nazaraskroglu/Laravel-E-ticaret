@include('home.header')
@include('home.navbar')
    <!-- Main Section-->
    <section class="mt-0 ">

        <!-- Category Top Banner -->
        <div class="py-6 bg-img-cover bg-dark bg-overlay-gradient-dark position-relative overflow-hidden mb-4 bg-pos-center-center"
            style="background-image: url({{asset('assets/')}}/frontend/assets/images/banners/banner-1.jpg);">
            <div class="container position-relative z-index-20" data-aos="fade-right" data-aos-delay="300">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item breadcrumb-light"><a href="#">Home</a></li>
                      <li class="breadcrumb-item breadcrumb-light"><a href="#">Activities</a></li>
                      <li class="breadcrumb-item active breadcrumb-light" aria-current="page">Clothing</li>
                    </ol>
                </nav>                <h1 class="fw-bold display-6 mb-4 text-white">Latest Arrivals (121)</h1>
                <div class="col-12 col-md-6">
                    <p class="lead text-white mb-0">
                        Move, stretch, jump and hike in our latest waterproof arrivals. We've got you covered for your
                        hike or climbing sessions, from Gortex jackets to lightweight waterproof pants. Discover our
                        latest range of outdoor clothing.
                    </p>
                </div>
            </div>
        </div>
        <!-- Category Top Banner -->

        <div class="container">

            <div class="row">

                <!-- Category Aside/Sidebar -->
                <div class="d-none d-lg-flex col-lg-3">
                    <div class="pe-4">
                        <!-- Category Aside -->
                        <aside>

                        </aside>
                        <!-- / Category Aside-->                    </div>
                </div>
                <!-- / Category Aside/Sidebar -->

                <!-- Category Products-->
                <div class="col-12 col-lg-9">
                  @livewire('search')

                    <!-- Top Toolbar-->
                    <div class="mb-4 d-md-flex justify-content-between align-items-center">
                        <div class="d-flex justify-content-start align-items-center flex-grow-1 mb-4 mb-md-0">
                            <small class="d-inline-block fw-bolder">Filtered by:</small>
                            <ul class="list-unstyled d-inline-block mb-0 ms-2">
                                <li class="bg-light py-1 fw-bolder px-2 cursor-pointer d-inline-block me-1 small">Type: Slip On <i
                                        class="ri-close-circle-line align-bottom ms-1"></i></li>
                            </ul>
                            <span
                                class="fw-bolder text-muted-hover text-decoration-underline ms-2 cursor-pointer small">Clear
                                All</span>
                        </div>
                        <div class="d-flex align-items-center flex-column flex-md-row">
                            <!-- Filter Trigger-->
                            <button class="btn bg-light p-3 d-flex d-lg-none align-items-center fs-xs fw-bold text-uppercase w-100 mb-2 mb-md-0 w-md-auto"
                                type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasFilters"
                                aria-controls="offcanvasFilters">
                                <i class="ri-equalizer-line me-2"></i> Filters
                            </button>
                            <!-- / Filter Trigger-->
                            <div class="dropdown ms-md-2 lh-1 p-3 bg-light w-100 mb-2 mb-md-0 w-md-auto">
                                <p class="fs-xs fw-bold text-uppercase text-muted-hover p-0 m-0" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">Sort By <i
                                        class="ri-arrow-drop-down-line ri-lg align-bottom"></i></p>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item fs-xs fw-bold text-uppercase text-muted-hover mb-2"
                                            href="#">Price: Hi Low</a></li>
                                    <li><a class="dropdown-item fs-xs fw-bold text-uppercase text-muted-hover mb-2"
                                            href="#">Price: Low Hi</a></li>
                                    <li><a class="dropdown-item fs-xs fw-bold text-uppercase text-muted-hover mb-2"
                                            href="#">Name</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>                    <!-- / Top Toolbar-->

                    <!-- Products-->
                    <div class="row g-4 mb-5">
                        @foreach ($product as $products)

                                <div class="col-12 col-sm-6 col-md-4">
                                    <!-- Card Product-->
                                    <div class="card position-relative h-100 card-listing hover-trigger">
                                        <div class="card-header">
                                            <picture class="position-relative overflow-hidden d-block bg-light">
                                                <img class="w-100 img-fluid position-relative z-index-10" title="" src="{{$products->image}}" alt="">
                                            </picture>
                                            <div class="card-actions">
                                                <span class="small text-uppercase tracking-wide fw-bolder text-center d-block">Quick Add</span>
                                                <div class="d-flex justify-content-center align-items-center flex-wrap mt-3">
                                                    <button class="btn btn-outline-dark btn-sm mx-2">S</button>
                                                    <button class="btn btn-outline-dark btn-sm mx-2">M</button>
                                                    <button class="btn btn-outline-dark btn-sm mx-2">L</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body px-0 text-center">
                                            <div class="d-flex justify-content-center align-items-center mx-auto mb-1">
                                                <!-- Review Stars Small-->
                                    <div class="rating position-relative d-table">
                                        <div class="position-absolute stars" style="width: 90%">
                                            <i class="ri-star-fill text-dark mr-1"></i>
                                            <i class="ri-star-fill text-dark mr-1"></i>
                                            <i class="ri-star-fill text-dark mr-1"></i>
                                            <i class="ri-star-fill text-dark mr-1"></i>
                                            <i class="ri-star-fill text-dark mr-1"></i>
                                        </div>
                                        <div class="stars">
                                            <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                            <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                            <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                            <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                            <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                        </div>
                                    </div> <span class="small fw-bolder ms-2 text-muted"> 4.7 (456)</span>
                                            </div>
                                            <a class="mb-0 mx-2 mx-md-4 fs-p link-cover text-decoration-none d-block text-center"
                                            href="{{route('home.detail',$products->id)}}">{{$products->title}}</a>
                                                @if($products->discount_price!=null)
                                                  <div class="d-flex justify-content-center align-items-center mt-2">
                                                  <p class="mb-0 me-2 text-danger fw-bolder">$<span>{{$products->discount_price}}</span></p>
                                                  <p class="mb-0 text-muted fw-bolder"><s>$<span>{{$products->price}}</span></s></p>
                                                </div>
                                              @else
                                                <p class="fw-bolder m-0 mt-2">${{$products->price}}</p>
                                                @endif
                                        </div>
                                    </div>
                                    <!--/ Card Product-->
                                </div>
                              @endforeach
                    </div>
                    <!-- / Products-->

                    <!-- Pagiation-->
                    <!-- Pagination-->
                    <nav class="border-top mt-5 pt-5 d-flex justify-content-between align-items-center" aria-label="Category Pagination">
                      <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#"><i class="ri-arrow-left-line align-bottom"></i> Prev</a></li>
                      </ul>
                      <ul class="pagination">
                        {{$product->links()}}
                      </ul>
                      <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#">Next <i class="ri-arrow-right-line align-bottom"></i></a></li>
                      </ul>
                    </nav>                    <!-- / Pagination-->

                    <!-- Related Categories-->
                    <div class="border-top mt-5 pt-5">
                        <p class="lead fw-bolder">Related Categories</p>
                        <div class="d-flex flex-wrap justify-content-start align-items-center">
                            <a class="btn btn-sm btn-outline-dark rounded-pill me-2 mb-2 mb-md-0 text-white-hover"
                                href="#">Hiking
                                Shoes</a>
                            <a class="btn btn-sm btn-outline-dark rounded-pill me-2 mb-2 mb-md-0 text-white-hover"
                                href="#">Waterproof Trousers</a>
                            <a class="btn btn-sm btn-outline-dark rounded-pill me-2 mb-2 mb-md-0 text-white-hover"
                                href="#">Hiking
                                Shirts</a>
                            <a class="btn btn-sm btn-outline-dark rounded-pill me-2 mb-2 mb-md-0 text-white-hover"
                                href="#">Jackets</a>
                            <a class="btn btn-sm btn-outline-dark rounded-pill me-2 mb-2 mb-md-0 text-white-hover"
                                href="#">Gilets</a>
                            <a class="btn btn-sm btn-outline-dark rounded-pill me-2 mb-2 mb-md-0 text-white-hover"
                                href="#">Hiking
                                Socks</a>
                            <a class="btn btn-sm btn-outline-dark rounded-pill me-2 mb-2 mb-md-0 text-white-hover"
                                href="#">Rugsacks</a>
                        </div>
                    </div>
                    <!-- Related Categories-->

                </div>
                <!-- / Category Products-->

            </div>
        </div>

    </section>
    <!-- / Main Section-->

    @include('home.footer')
