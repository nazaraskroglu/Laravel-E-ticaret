
    <!-- Navbar -->
    <div class="position-relative z-index-30">
        <!-- Navbar -->
        <nav
            class="navbar navbar-expand-lg navbar-light bg-white border-bottom mx-0 p-0 flex-column  border-0 position-absolute w-100 z-index-30 bg-transparent navbar-dark navbar-transparent bg-white-hover transition-all">
            <div class="w-100 pb-lg-0 pt-lg-0 pt-4 pb-3">
                <div class="container-fluid d-flex justify-content-between align-items-center flex-wrap">

                    <!-- Logo-->
                    <a class="navbar-brand fw-bold fs-3 m-0 p-0 flex-shrink-0" href="{{route('home.index')}}">
                        <!-- Start of Logo-->
                        <div class="d-flex align-items-center">
                            <div class="f-w-6 d-flex align-items-center me-2 lh-1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 194 194"><path fill="currentColor" class="svg-logo-white" d="M47.45,60l1.36,27.58,53.41-51.66,50.87,50,3.84-26L194,100.65V31.94A31.94,31.94,0,0,0,162.06,0H31.94A31.94,31.94,0,0,0,0,31.94v82.57Z"/><path fill="currentColor" class="svg-logo-dark" d="M178.8,113.19l1,34.41L116.3,85.92l-14.12,15.9L88.07,85.92,24.58,147.53l.93-34.41L0,134.86v27.2A31.94,31.94,0,0,0,31.94,194H162.06A31.94,31.94,0,0,0,194,162.06V125.83Z"/></svg>
                            </div> <span class="fs-5">Alpine</span>
                        </div>
                        <!-- / Logo-->

                    </a>
                    <!-- / Logo-->

                    <!-- Main Navigation-->
                    <div class="ms-5 flex-shrink-0 collapse navbar-collapse navbar-collapse-light w-auto flex-grow-1" id="navbarNavDropdown">

                        <!-- Mobile Nav Toggler-->
                        <button
                            class="btn btn-link px-2 text-decoration-none navbar-toggler border-0 position-absolute top-0 end-0 mt-3 me-2"
                            data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <i class="ri-close-circle-line ri-2x"></i>
                        </button>
                        <!-- / Mobile Nav Toggler-->
                       @include('home.category')
                    <!-- / Main Navigation-->

                    <!-- Navbar Icons-->
                    <ul class="list-unstyled mb-0 d-flex align-items-center">

                        <!-- Navbar Toggle Icon-->
                        <li class="d-inline-block d-lg-none">
                            <button
                                class="btn btn-link px-2 text-decoration-none navbar-toggler border-0 d-flex align-items-center"
                                data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <i class="ri-menu-line ri-lg align-middle"></i>
                            </button>
                        </li>
                        <!-- /Navbar Toggle Icon-->

                        <!-- Navbar Search-->
                        <li class="ms-1 d-inline-block">
                            <button
                                class="btn btn-link px-2 text-decoration-none d-flex align-items-center"
                                data-pr-search>
                                <i class="ri-search-2-line ri-lg align-middle"></i>
                            </button>
                        </li>
                        <!-- /Navbar Search-->

                        <!-- Navbar Wishlist-->
                        <li class="ms-1 d-none d-lg-inline-block">
                            <a  class="btn btn-link px-2 py-0 text-decoration-none d-flex align-items-center"
                                href="#">
                                <i class="ri-heart-line ri-lg align-middle"></i>
                            </a>
                        </li>
                        <!-- /Navbar Wishlist-->

                        <!-- Navbar Login-->
                        <li class="ms-1 d-none d-lg-inline-block">
                            <a href="{{route('home.user.index')}}" class="btn btn-link px-2 text-decoration-none d-flex align-items-center" >
                                <i class="ri-user-line ri-lg align-middle"></i>
                            </a>
                        </li>

                        <!-- /Navbar Login-->

                        <!-- Navbar Cart-->
                        <li class="ms-1 d-inline-block position-relative">
                            <button
                                class="btn btn-link px-2 text-decoration-none d-flex align-items-center disable-child-pointer"
                                data-bs-toggle="offcanvas" data-bs-target="#offcanvasCart" aria-controls="offcanvasCart">
                                <i class="ri-shopping-cart-2-line ri-lg align-middle position-relative z-index-10"></i>
                                <span
                                    class="fs-xs fw-bolder f-w-5 f-h-5 bg-orange rounded-lg d-block lh-1 pt-1 position-absolute top-0 end-0 z-index-20 mt-2 text-white cart-count">5</span>
                            </button>
                        </li>
                        <!-- /Navbar Cart-->

                    </ul>
                    <!-- Navbar Icons-->

                </div>
            </div>
        </nav>
        <!-- / Navbar-->    </div>
    <!-- / Navbar-->
