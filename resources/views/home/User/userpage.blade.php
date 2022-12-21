@include('home.header')
@include('home.navbar2')
    <!-- Main Section-->
    <section class="mt-5 container ">
        <!-- Page Content Goes Here -->

        <h1 class="mb-6 display-5 fw-bold text-center">User Page</h1>
<br><br>
        <div class="row g-4 g-md-8">

            @auth()
                <a href="#" class="btn btn-orange w-5 text-center mt-3"
                   role="button"><i class=" align-bottom"></i>Account</a>
                <a href="{{route('home.user.logout')}}" class="btn btn-white w-5 text-center mt-3"
                   role="button"><i class=" align-bottom"></i>Logout</a>
            @else
                    <a href="{{route('home.user.login')}}" class="btn btn-dark w-5 text-center mt-3"
                        role="button"><i class=" align-bottom"></i>Login</a>
                    <a href="{{route('home.user.register')}}" class="btn btn-orange w-5 text-center mt-3"
                        role="button"><i class="align-bottom"></i>Register</a>
            @endauth
                </div>


    </section>
    <!-- / Main Section-->

  @include('home.footer')
