@php
$currentURL = URL::current();
@endphp
<!-- Navbar Start -->
<div class="container-fluid mb-5">
    <div class="row border-top px-xl-5">
        @if (str_contains($currentURL, 'customer/profile') || str_contains($currentURL, 'service'))
            <div class="d-none"></div>
        @else
            <div class="col-lg-3 d-none d-lg-block">
                <a class="btn shadow-none d-flex align-items-center justify-content-between bg-primary text-white w-100"
                    data-toggle="collapse" href="#navbar-vertical"
                    style="height: 65px; margin-top: -1px; padding: 0 30px;">
                    <h6 class="m-0">Brand</h6>
                    <i class="fa fa-angle-down text-dark"></i>
                </a>
                {{-- List Brand --}}
                @if (str_contains($currentURL, 'customer/profile'))
                    <div></div>
                @else
                    @component('consument/components/brandlist')
                        @section('brandcontent')
                            @foreach ($brands as $name => $brand)
                                <a href="/category/{{ $name }}" class="nav-item nav-link">{{ $name }}</a>
                            @endforeach
                        @endsection
                    @endcomponent
                @endif
            </div>
        @endif

        <div class="@if (str_contains($currentURL, 'customer/profile') || str_contains($currentURL, 'service')) col-lg-12 @else col-lg-9 @endif">
            <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                @if (str_contains($currentURL, 'customer'))
                    <a href="{{ route('customer.dashboard') }}" class="text-decoration-none d-block d-lg-none">
                        <h1 class="m-0 display-5 font-weight-semi-bold"><span
                                class="text-primary font-weight-bold border px-3 mr-1">BD</span>Bumi Data</h1>
                    </a>
                @elseif(str_contains($currentURL, 'service-tracking'))
                    <a href="/" class="text-decoration-none d-block d-lg-none">
                        <h1 class="m-0 display-5 font-weight-semi-bold"><span
                                class="text-primary font-weight-bold border px-3 mr-1">BD</span>Bumi Data</h1>
                    </a>
                @else
                    <a href="/" class="text-decoration-none d-block d-lg-none">
                        <h1 class="m-0 display-5 font-weight-semi-bold"><span
                                class="text-primary font-weight-bold border px-3 mr-1">BD</span>Bumi Data</h1>
                    </a>
                @endif

                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    @if (str_contains($currentURL, 'customer'))
                        <div class="navbar-nav mr-auto py-0">
                            <a href="/customer" class="nav-item nav-link active">Home</a>
                            <a href="#" class="nav-item nav-link">Produk</a>
                            <a href="{{ route('profile.show', Auth::user()->id) }}" class="nav-item nav-link">Profil</a>
                            <a href="{{ route('customer.service-tracking') }}" class="nav-item nav-link">Service
                                Tracking</a>
                        </div>
                    @else
                        <div class="navbar-nav mr-auto py-0">
                            <a href="/" class="nav-item nav-link active">Home</a>
                            <a href="{{ route('public.product.page') }}" class="nav-item nav-link">Produk</a>
                            <a href="{{ route('service-tracking') }}" class="nav-item nav-link">Service Tracking</a>
                        </div>
                    @endif

                    <div class="navbar-nav ml-auto py-0">
                        @if (Route::has('login'))
                            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block d-flex">
                                @auth

                                    <p>Halo, </p>
                                    <a href="{{ route('profile.show', Auth::user()->id) }}"
                                        style="text-decoration: none; margin-right:15px;">
                                        {{ Auth::user()->name }}
                                    </a>


                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <a href="route('logout')"
                                            onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                        </a>
                                    </form>
                                @else
                                    <a href="{{ route('login') }}"
                                        class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
                                @endauth
                            </div>
                        @endif
                    </div>
                </div>
            </nav>
            @if (preg_match('(customer/product|produk/)', $currentURL) === 0)
                <div id="header-carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" style="height: auto;">
                            <img class="img-fluid" src="{{ asset('assets/shop/images/banner-1.jpg') }}" alt="Image">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h4 class="text-light text-uppercase font-weight-medium mb-3">Selamat Datang di
                                        Bumi Data</h4>
                                    <h3 class="display-4 text-white font-weight-semi-bold mb-4">Your Excellent Solution
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item" style="height: auto;">
                            <img class="img-fluid" src="{{ asset('assets/shop/images/banner-2.jpg') }}" alt="Image">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h4 class="text-light text-uppercase font-weight-medium mb-3">Selamat Datang di
                                        Bumi Data</h4>
                                    <h3 class="display-4 text-white font-weight-semi-bold mb-4">Your Excellent Solution
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                        <div class="btn btn-dark" style="width: 45px; height: 45px;">
                            <span class="carousel-control-prev-icon mb-n2"></span>
                        </div>
                    </a>
                    <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                        <div class="btn btn-dark" style="width: 45px; height: 45px;">
                            <span class="carousel-control-next-icon mb-n2"></span>
                        </div>
                    </a>
                </div>
            @endif
        </div>
    </div>
</div>
<!-- Navbar End -->
