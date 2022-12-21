
@extends('home.master')
@section('content')
        <!-- Sale Banner -->
        <section class="position-relative my-5 my-md-7 my-lg-9 bg-dark" data-aos="fade-in">
            <!-- SVG Shape Divider-->
            <div class="position-absolute text-white z-index-50 top-0 end-0 start-0">
                <svg class="align-self-start d-flex" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1283 53.25"><polygon fill="currentColor" points="1283 0 0 0 0 53.25 1283 0"/></svg></div>
            <!-- /SVG Shape Divider-->

            <div class="py-7 py-lg-10">
                <div class="container text-white py-4 py-md-6">
                    <div class="row g-5 align-items-center">
                        <div class="col-12 col-lg-4 justify-content-center d-flex justify-content-lg-start"
                            data-aos="fade-right" data-aos-delay="250">
                            <h3 class="fs-1 fw-bold mb-0 lh-1"><i class="ri-timer-flash-line align-bottom"></i> Sale
                                Extended</h3>
                        </div>
                        <div class="col-12 col-lg-4 d-flex justify-content-center flex-column" data-aos="fade-up"
                            data-aos-delay="250">
                            <a href="./category.html"
                                class="btn btn-orange btn-orange-chunky text-white my-1"><span>Shop
                                    Menswear</span></a>
                            <a href="./category.html"
                                class="btn btn-orange btn-orange-chunky text-white my-1"><span>Shop
                                    Womenswear</span></a>
                            <a href="./category.html"
                                class="btn btn-orange btn-orange-chunky text-white my-1"><span>Shop
                                    Kidswear</span></a>
                            <a href="./category.html"
                                class="btn btn-orange btn-orange-chunky text-white my-1"><span>Shop
                                    Accessories</span></a>
                        </div>
                        <div class="col-12 col-lg-4 text-center text-lg-end" data-aos="fade-left"
                            data-aos-delay="250">
                            <p class="lead fw-bolder">Discount applied to products at checkout.</p>
                            <a class="text-white fw-bolder text-link-border border-2 border-white align-self-start pb-1 transition-all opacity-50-hover"
                                href="#">Exclusions apply. Learn more <i
                                    class="ri-arrow-right-line align-bottom"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- SVG Shape Divider-->
            <div class="position-absolute z-index-50 text-white bottom-0 start-0 end-0">
                <svg class="align-self-end d-flex" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1283 53.25"><polygon fill="currentColor" points="0 53.25 1283 53.25 1283 0 0 53.25"/></svg></div>
            <!-- /SVG Shape Divider-->        </section>
        <!-- /Sale Banner -->

        <!-- Reviews-->
        <section>
            <div class="container" data-aos="fade-in">
                <h2 class="fs-1 fw-bold mb-3 text-center mb-5">Customer Reviews</h2>
                <div class="row g-3">
                    <div class="col-12 col-lg-4" data-aos="fade-left">
                        <div class="bg-light p-4 d-flex h-100 justify-content-start align-items-center flex-column text-center">
                            <p class="fw-bolder lead">Amazing Service!</p>
                            <p class="mb-3">I have shopped with them for a few years now. Very easy to select items, items always as
                                described. Never had to return any item. Good value.</p>
                            <small class="text-muted d-block mb-2 fw-bolder">John Doe, London</small>
                            <!-- Review Stars Small-->
                            <div class="rating position-relative d-table">
                                <div class="position-absolute stars" style="width: 75%">
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
                            </div>        </div>
                    </div>
                    <div class="col-12 col-lg-4" data-aos="fade-left" data-aos-delay="150">
                        <div class="bg-light p-4 d-flex h-100 justify-content-start align-items-center flex-column text-center">
                            <p class="fw-bolder lead">Great Prices</p>
                            <p class="mb-3">Always find these guys competitive,and with a huge range of products,coupled with great
                                marketing,its difficult not to buy something.</p>
                            <small class="text-muted d-block mb-2 fw-bolder">Sally Smith, Dublin</small>
                            <!-- Review Stars Small-->
                            <div class="rating position-relative d-table">
                                <div class="position-absolute stars" style="width: 75%">
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
                            </div>        </div>
                    </div>
                    <div class="col-12 col-lg-4" data-aos="fade-left" data-aos-delay="300">
                        <div class="bg-light p-4 d-flex h-100 justify-content-start align-items-center flex-column text-center">
                            <p class="fw-bolder lead">Fantastic Website</p>
                            <p class="mb-3">My package was missing an item but customer services resolved it immediately and i got
                                another delivery quite promptly.
                                Also the product was absolutely lovely</p>
                            <small class="text-muted d-block mb-2 fw-bolder">John Patrick, London</small>
                            <!-- Review Stars Small-->
                            <div class="rating position-relative d-table">
                                <div class="position-absolute stars" style="width: 75%">
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
                            </div>        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center flex-column mt-7 align-items-center">
                    <h3 class="mb-4 fw-bold fs-4">See what others have said</h3>
                    <div class="d-flex justify-content-center align-items-center">
                        <span class="fs-3 fw-bold me-4">4.85 / 5</span>
                        <!-- Review Stars Medium-->
                        <div class="rating position-relative d-table">
                            <div class="position-absolute stars" style="width: 88%">
                                <i class="ri-star-fill text-dark ri-2x mr-1"></i>
                                <i class="ri-star-fill text-dark ri-2x mr-1"></i>
                                <i class="ri-star-fill text-dark ri-2x mr-1"></i>
                                <i class="ri-star-fill text-dark ri-2x mr-1"></i>
                                <i class="ri-star-fill text-dark ri-2x mr-1"></i>
                            </div>
                            <div class="stars">
                                <i class="ri-star-fill ri-2x mr-1 text-muted"></i>
                                <i class="ri-star-fill ri-2x mr-1 text-muted"></i>
                                <i class="ri-star-fill ri-2x mr-1 text-muted"></i>
                                <i class="ri-star-fill ri-2x mr-1 text-muted"></i>
                                <i class="ri-star-fill ri-2x mr-1 text-muted"></i>
                            </div>
                        </div>    </div>
                    <a href="#" class="btn btn-dark rounded-0 mt-4">Read 4,215 more reviews</a>
                </div>            </div>
        </section>
        <!-- /Reviews-->

        <!-- /Page Content -->
    </section>
    <!-- / Main Section-->

  @endsection
