@php
    $Parentcategories = \App\Http\Controllers\HomepageController::categorylist()
@endphp
<ul class="navbar-nav py-lg-2 mx-auto">
    @foreach($Parentcategories as $rs)

        <li class="nav-item me-lg-4 dropdown position-static">
            <a class="nav-link fw-bolder dropdown-toggle py-lg-4" href="" role="button" data-bs-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false">
                {{$rs->title}}

            </a>
            <!-- Menswear dropdown menu-->
            <div class="dropdown-menu dropdown-megamenu">
                <div class="container">
                    <div class="row g-0">
                        <!-- Dropdown Menu Links Section-->
                        <div class="col-12 col-lg-7">
                            <div class="row py-lg-5">

                                <!-- menu row-->
                                <div class="col col-lg-6 mb-5 mb-sm-0">
                                    <ul class="list-unstyled">
                                        <li class="dropdown-list-item"><a class="dropdown-item" href="">
                                                @if(count($rs->children))
                                                    @include('home.categorytree', ['children' => $rs->children])
                                                @endif
                                            </a></li>
                                    </ul>

                                </div>
                                <!-- /menu row-->

                            </div>                    </div>
                        <!-- /Dropdown Menu Links Section-->

                        <!-- Dropdown Menu Images Section-->
                        <div class="d-none d-lg-block col-lg-5">
                            <div class="vw-50 h-100 bg-img-cover bg-pos-center-center position-absolute" ></div>
                        </div>
                        <!-- Dropdown Menu Images Section-->
                    </div>
                </div>
            </div>
            <!-- / Menswear dropdown menu-->
        </li>
    @endforeach
</ul>            </div>
