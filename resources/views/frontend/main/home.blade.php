@extends('frontend.layouts.master')
@section('title', '- Home')

@section('content')
<!-- Hero -->
<section class="section-hero mb-[50px] max-[1199px]:mb-[35px] py-[50px] relative bg-[#f8f8fb] overflow-hidden">
    <div class="bb-social-follow absolute left-[20px] bottom-[30px] max-[1250px]:hidden">
        <ul class="inner-links">
            <li class="p-[6px] rotate-[270deg]">
                <a href="javascript:void(0)"
                    class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[16px] font-medium text-[#777] hover:text-[#6c7fd8] leading-[28px] tracking-[0.03rem] uppercase">Fb</a>
            </li>
            <li class="p-[6px] rotate-[270deg]">
                <a href="javascript:void(0)"
                    class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[16px] font-medium text-[#777] hover:text-[#6c7fd8] leading-[28px] tracking-[0.03rem] uppercase">Li</a>
            </li>
            <li class="p-[6px] rotate-[270deg]">
                <a href="javascript:void(0)"
                    class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[16px] font-medium text-[#777] hover:text-[#6c7fd8] leading-[28px] tracking-[0.03rem] uppercase">Dr</a>
            </li>
            <li class="p-[6px] rotate-[270deg]">
                <a href="javascript:void(0)"
                    class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[16px] font-medium text-[#777] hover:text-[#6c7fd8] leading-[28px] tracking-[0.03rem] uppercase">In</a>
            </li>
        </ul>
    </div>
    <div
        class="flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
        <div class="flex flex-wrap w-full">
            <div class="w-full">
                <div class="hero-slider swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide slide-1">
                            <div class="flex flex-wrap w-full mb-[-24px]">
                                <div class="min-[992px]:w-[50%] w-full px-[12px] min-[992px]:order-1 order-2 mb-[24px]">
                                    <div
                                        class="hero-contact h-full flex flex-col items-start justify-center max-[991px]:items-center">
                                        <!-- <p class="mb-[20px] font-Poppins text-[18px] text-[#777] font-light leading-[28px] tracking-[0.03rem] max-[1199px]:mb-[10px] max-[1199px]:text-[16px]">
                                            Flat 30% Off</p> -->
                                        <h1
                                            class="mb-[20px] font-quicksand text-[50px] text-[#3d4750] font-bold tracking-[0.03rem] leading-[1.2] max-[1199px]:mb-[10px] max-[1199px]:text-[38px] max-[991px]:text-center max-[991px]:text-[45px] max-[767px]:text-[40px] max-[575px]:text-[35px] max-[420px]:text-[30px] max-[360px]:text-[28px]">
                                            Explore <span class="relative text-[#6c7fd8]">Healthy</span><br> & Fresh
                                            Fruits</h1>
                                        <a href="{{ route('shop') }}"
                                            class="bb-btn-1 transition-all duration-[0.3s] ease-in-out font-Poppins leading-[28px] tracking-[0.03rem] py-[8px] px-[20px] text-[14px] font-normal text-[#3d4750] bg-transparent rounded-[10px] border-[1px] border-solid border-[#3d4750] max-[1199px]:py-[3px] max-[1199px]:px-[15px] hover:bg-[#6c7fd8] hover:border-[#6c7fd8] hover:text-[#fff]">Shop
                                            Now</a>
                                    </div>
                                </div>
                                <div class="min-[992px]:w-[50%] w-full px-[12px] min-[992px]:order-2 order-1 mb-[24px]">
                                    <div
                                        class="hero-image pr-[50px] relative max-[991px]:px-[50px] max-[575px]:px-[30px] flex justify-center max-[420px]:p-[0]">
                                        <img src="{{ asset('frontend/img/hero/hero-1.png') }}" alt="hero"
                                            class="w-full pb-[50px] opacity-[1] max-[1199px]:pr-[30px] max-[991px]:pr-[0] max-[575px]:pb-[30px] max-[420px]:pb-[15px]">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 300"
                                            class="animate-shape w-[120%] absolute top-[-50px] right-[-50px] z-[-1] max-[1399px]:right-[-30px] max-[1199px]:w-[125%] max-[991px]:w-[100%] max-[991px]:top-[0] max-[575px]:right-[0] max-[420px]:w-[110%] max-[420px]:right-[-30px]">
                                            <linearGradient id="shape_1" x1="100%" x2="0%" y1="100%" y2="0%">
                                            </linearGradient>
                                            <path d="">
                                                <animate repeatCount="indefinite" attributeName="d" dur="15s"
                                                    values="" />
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide slide-2">
                            <div class="flex flex-wrap w-full mb-[-24px]">
                                <div class="min-[992px]:w-[50%] w-full px-[12px] min-[992px]:order-1 order-2 mb-[24px]">
                                    <div
                                        class="hero-contact h-full flex flex-col items-start justify-center max-[991px]:items-center">
                                        <!-- <p class="mb-[20px] font-Poppins text-[18px] text-[#777] font-light leading-[28px] tracking-[0.03rem] max-[1199px]:mb-[10px] max-[1199px]:text-[16px]">
                                            Flat 20% Off</p> -->
                                        <h2
                                            class="mb-[20px] font-quicksand text-[50px] text-[#3d4750] font-bold tracking-[0.03rem] leading-[1.2] max-[1199px]:mb-[10px] max-[1199px]:text-[38px] max-[991px]:text-center max-[991px]:text-[45px] max-[767px]:text-[40px] max-[575px]:text-[35px] max-[420px]:text-[30px] max-[360px]:text-[28px]">
                                            Explore <span class="relative text-[#6c7fd8]">Warm</span><br> Fast Food &
                                            Snacks</h2>
                                        <a href="{{ route('shop') }}"
                                            class="bb-btn-1 transition-all duration-[0.3s] ease-in-out font-Poppins leading-[28px] tracking-[0.03rem] py-[8px] px-[20px] text-[14px] font-normal text-[#3d4750] bg-transparent rounded-[10px] border-[1px] border-solid border-[#3d4750] max-[1199px]:py-[3px] max-[1199px]:px-[15px] hover:bg-[#6c7fd8] hover:border-[#6c7fd8] hover:text-[#fff]">Shop
                                            Now</a>
                                    </div>
                                </div>
                                <div class="min-[992px]:w-[50%] w-full px-[12px] min-[992px]:order-2 order-1 mb-[24px]">
                                    <div
                                        class="hero-image pr-[50px] relative max-[991px]:px-[50px] max-[575px]:px-[30px] flex justify-center max-[420px]:p-[0]">
                                        <img src="{{ asset('frontend/img/hero/hero-2.png') }}" alt="hero"
                                            class="w-full pb-[50px] opacity-[1] max-[1199px]:pr-[30px] max-[991px]:pr-[0] max-[575px]:pb-[30px] max-[420px]:pb-[15px]">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 300"
                                            class="animate-shape w-[120%] absolute top-[-50px] right-[-50px] z-[-1] max-[1399px]:right-[-30px] max-[1199px]:w-[125%] max-[991px]:w-[100%] max-[991px]:top-[0] max-[575px]:right-[0] max-[420px]:w-[110%] max-[420px]:right-[-30px]">
                                            <linearGradient id="shape_2" x1="80%" x2="0%" y1="80%" y2="0%">
                                            </linearGradient>
                                            <path d="">
                                                <animate repeatCount="indefinite" attributeName="d" dur="15s"
                                                    values="" />
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide slide-3">
                            <div class="flex flex-wrap w-full mb-[-24px]">
                                <div class="min-[992px]:w-[50%] w-full px-[12px] min-[992px]:order-1 order-2 mb-[24px]">
                                    <div
                                        class="hero-contact h-full flex flex-col items-start justify-center max-[991px]:items-center">
                                        <!-- <p class="mb-[20px] font-Poppins text-[18px] text-[#777] font-light leading-[28px] tracking-[0.03rem] max-[1199px]:mb-[10px] max-[1199px]:text-[16px]">
                                            Flat 30% Off</p> -->
                                        <h2
                                            class="mb-[20px] font-quicksand text-[50px] text-[#3d4750] font-bold tracking-[0.03rem] leading-[1.2] max-[1199px]:mb-[10px] max-[1199px]:text-[38px] max-[991px]:text-center max-[991px]:text-[45px] max-[767px]:text-[40px] max-[575px]:text-[35px] max-[420px]:text-[30px] max-[360px]:text-[28px]">
                                            Explore <span class="relative text-[#6c7fd8]">Organic</span><br> & Fresh
                                            Vegetables</h2>
                                        <a href="{{ route('shop') }}"
                                            class="bb-btn-1 transition-all duration-[0.3s] ease-in-out font-Poppins leading-[28px] tracking-[0.03rem] py-[8px] px-[20px] text-[14px] font-normal text-[#3d4750] bg-transparent rounded-[10px] border-[1px] border-solid border-[#3d4750] max-[1199px]:py-[3px] max-[1199px]:px-[15px] hover:bg-[#6c7fd8] hover:border-[#6c7fd8] hover:text-[#fff]">Shop
                                            Now</a>
                                    </div>
                                </div>
                                <div class="min-[992px]:w-[50%] w-full px-[12px] min-[992px]:order-2 order-1 mb-[24px]">
                                    <div
                                        class="hero-image pr-[50px] relative max-[991px]:px-[50px] max-[575px]:px-[30px] flex justify-center max-[420px]:p-[0]">
                                        <img src="{{ asset('frontend/img/hero/hero-3.png') }}" alt="hero"
                                            class="w-full pb-[50px] opacity-[1] max-[1199px]:pr-[30px] max-[991px]:pr-[0] max-[575px]:pb-[30px] max-[420px]:pb-[15px]">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 300"
                                            class="animate-shape w-[120%] absolute top-[-50px] right-[-50px] z-[-1] max-[1399px]:right-[-30px] max-[1199px]:w-[125%] max-[991px]:w-[100%] max-[991px]:top-[0] max-[575px]:right-[0] max-[420px]:w-[110%] max-[420px]:right-[-30px]">
                                            <linearGradient id="shape_3" x1="80%" x2="0%" y1="80%" y2="0%">
                                            </linearGradient>
                                            <path d="">
                                                <animate repeatCount="indefinite" attributeName="d" dur="15s"
                                                    values="" />
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination swiper-pagination-white"></div>
                    <div class="swiper-buttons">
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bb-scroll-Page absolute right-[-15px] bottom-[75px] rotate-[270deg] max-[575px]:hidden">
        <span class="scroll-bar transition-all duration-[0.3s] ease-in-out relative max-[1250px]:hidden">
            <a href="javascript:void(0)"
                class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[16px] font-medium leading-[28px] tracking-[0.03rem] text-[#686e7d]">Scroll
                Page</a>
        </span>
    </div>
</section>

<!-- Category -->
<section class="section-category overflow-hidden py-[50px] max-[1199px]:py-[35px]">
    <div
        class="flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
        <div class="flex flex-wrap w-full mb-[-24px]">
            <div class="min-[992px]:w-[41.66%] w-full px-[12px] mb-[24px]">
                <div class="bb-category-img relative max-[991px]:hidden">
                    <img src="{{ asset('frontend/img/category/category.jpg') }}" alt="category"
                        class="w-full rounded-[30px]">
                    <div
                        class="bb-offers py-[5px] px-[15px] absolute top-[20px] right-[20px] bg-[#000] opacity-[0.8] rounded-[15px]">
                        <span class="text-[14px] font-normal text-[#fff]">50% Off</span>
                    </div>
                </div>
            </div>
            <div class="min-[992px]:w-[58.33%] w-full px-[12px] mb-[24px]">
                <div class="bb-category-contact max-[991px]:mt-[-24px]">
                    <div class="category-title mb-[30px] max-[991px]:hidden" data-aos="fade-up" data-aos-duration="1000"
                        data-aos-delay="600">
                        <h2
                            class="font-quicksand text-[124px] text-[#fff] opacity-[0.15] font-bold leading-[1.2] tracking-[0.03rem] max-[1399px]:text-[95px] max-[1199px]:text-[70px] max-[767px]:text-[42px]">
                            Explore Categories</h2>
                    </div>
                    <div
                        class="bb-category-block owl-carousel ml-[-150px] w-[calc(100%+150px)] pt-[30px] pl-[30px] bg-[#fff] rounded-tl-[30px] relative max-[991px]:ml-[0] max-[991px]:w-full max-[991px]:p-[0]">
                        @php
                            $colorIndex = 0; // Initialize the color index
                        @endphp

                        @if (isset($categories))
                            @foreach ($categories as $category)
                                @php
                                    $color = $catBg[$colorIndex % $bgColorCount];
                                    $colorIndex++; // Increment the color index
                                @endphp
                                <div class="bb-category-box p-[30px] rounded-[20px] flex flex-col items-center text-center max-[1399px]:p-[20px] category-items-1"
                                    data-aos="flip-left" data-aos-duration="1000" data-aos-delay="200"
                                    style="background-color: #{{ $color }};">
                                    <div class="category-image mb-[12px]">
                                        @if (isset($category->image))
                                            <img src="{{ asset('storage/' . $category->image) }}" alt="category"
                                                class="w-[50px] h-[50px] max-[1399px]:h-[65px] max-[1399px]:w-[65px] max-[1199px]:h-[50px] max-[1199px]:w-[50px]">
                                        @else
                                            <img src="{{ asset('frontend/img/category/1.svg') }}" alt="category"
                                                class="w-[50px] h-[50px] max-[1399px]:h-[65px] max-[1399px]:w-[65px] max-[1199px]:h-[50px] max-[1199px]:w-[50px]">
                                        @endif
                                    </div>
                                    <div class="category-sub-contact">
                                        <h5
                                            class="mb-[2px] text-[16px] font-quicksand text-[#3d4750] font-semibold tracking-[0.03rem] leading-[1.2]">
                                            <a href="shop-left-sidebar-col-3.html"
                                                class="font-Poppins text-[16px] font-medium leading-[1.2] tracking-[0.03rem] text-[#3d4750] capitalize">{{ $category->name }}</a>
                                        </h5>
                                        <!-- <p class="font-Poppins text-[13px] text-[#686e7d] leading-[25px] font-light tracking-[0.03rem]">485 items</p> -->
                                        <p
                                            class="font-Poppins text-[13px] text-[#686e7d] leading-[25px] font-light tracking-[0.03rem]">
                                            Explore</p>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- New Product tab Area -->
<section class="section-product-tabs overflow-hidden py-[50px] max-[1199px]:py-[35px]">
    <div
        class="flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
        <div class="flex flex-wrap w-full">
            <div class="w-full px-[12px]">
                <div class="section-title mb-[20px] pb-[20px] z-[5] relative flex justify-between max-[991px]:pb-[0] max-[991px]:flex-col max-[991px]:justify-center max-[991px]:text-center"
                    data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <div class="section-detail max-[991px]:mb-[12px]">
                        <h2
                            class="bb-title font-quicksand mb-[0] p-[0] text-[25px] font-bold text-[#3d4750] relative inline capitalize leading-[1] tracking-[0.03rem] max-[767px]:text-[23px]">
                            New <span class="text-[#6c7fd8]">Arrivals</span></h2>
                        <p
                            class="font-Poppins max-w-[400px] mt-[10px] text-[14px] text-[#686e7d] leading-[18px] font-light tracking-[0.03rem] max-[991px]:mx-[auto]">
                            Shop online for new arrivals and get free shipping!</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-wrap w-full mb-[-24px]">

            <!-- Single Product -->
            @if (isset($products))
                @foreach ($products as $product)
                    <div class="min-[1200px]:w-[25%] min-[768px]:w-[33.33%] w-[50%] max-[480px]:w-full px-[12px] mb-[24px]"
                        data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                        <div class="bb-pro-box bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[20px]">
                            <div class="bb-pro-img overflow-hidden relative border-b-[1px] border-solid border-[#eee] z-[4]">
                                <!-- <span
                                                        class="flags transition-all duration-[0.3s] ease-in-out absolute z-[5] top-[10px] left-[6px]">
                                                        <span class="text-[14px] text-[#777] font-medium uppercase">New</span>
                                                    </span> -->
                                @if (isset($product->image))
                                    <a href="{{ route('view.product',$product->id)}}">
                                        <div class="inner-img relative block overflow-hidden pointer-events-none rounded-t-[20px]">
                                            <img class="main-img transition-all duration-[0.3s] ease-in-out w-full"
                                                src="{{ asset('storage/' . $product->image) }}" alt="product-1"
                                                style="height: 300px; object-fit: cover;">
                                            <img class="hover-img transition-all duration-[0.3s] ease-in-out absolute z-[2] top-[0] left-[0] opacity-[0] w-full"
                                                src="{{ asset('storage/' . $product->image) }}" alt="product-1"
                                                style="height: 300px; object-fit: cover;">
                                        </div>
                                    </a>
                                @else
                                    <a href="{{ route('view.product',$product->id)}}">
                                        <div class="inner-img relative block overflow-hidden pointer-events-none rounded-t-[20px]">
                                            <img class="main-img transition-all duration-[0.3s] ease-in-out w-full"
                                                src="{{ asset('frontend/img/new-product/1.jpg') }}" alt="product-1">
                                            <img class="hover-img transition-all duration-[0.3s] ease-in-out absolute z-[2] top-[0] left-[0] opacity-[0] w-full"
                                                src="{{ asset('frontend/img/new-product/back-1.jpg') }}" alt="product-1">
                                        </div>
                                    </a>
                                @endif
                                <ul
                                    class="bb-pro-actions transition-all duration-[0.3s] ease-in-out my-[0] mx-[auto] absolute z-[9] left-[0] right-[0] bottom-[0] flex flex-row items-center justify-center opacity-[0]">
                                    <li
                                        class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                        <a href="javascript:void(0)" title="Wishlist"
                                            class="w-[35px] h-[35px] flex items-center justify-center">
                                            <i
                                                class="ri-heart-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                        </a>
                                    </li>
                                    <li
                                        class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                        <a href="javascript:void(0)" title="Quick View"
                                            class="bb-modal-toggle w-[35px] h-[35px] flex items-center justify-center">
                                            <i
                                                class="ri-eye-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                        </a>
                                    </li>
                                    <li
                                        class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                        <a href="javascript:void(0)" title="Add To Cart"
                                            class="w-[35px] h-[35px] flex items-center justify-center">
                                            <i
                                                class="ri-shopping-cart-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="bb-pro-contact p-[20px]">
                                <div class="bb-pro-subtitle mb-[8px] flex flex-wrap justify-between">
                                    <a href="shop-left-sidebar-col-3.html"
                                        class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[13px] leading-[16px] text-[#777] font-light tracking-[0.03rem]">{{ $product->category->name }}</a>
                                    <span class="bb-pro-rating">
                                        <i
                                            class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                        <i
                                            class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                        <i
                                            class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                        <i
                                            class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                        <i class="ri-star-line float-left text-[15px] mr-[3px] leading-[18px] text-[#777]"></i>
                                    </span>
                                </div>
                                <h4 class="bb-pro-title mb-[8px] text-[16px] leading-[18px]">
                                    <a href="{{ route('view.product',$product->id)}}"
                                        class="transition-all duration-[0.3s] ease-in-out font-quicksand w-full block whitespace-nowrap overflow-hidden text-ellipsis text-[15px] leading-[18px] text-[#3d4750] font-semibold tracking-[0.03rem]">
                                        {{ $product->name }}</a>
                                </h4>
                                <div class="bb-price flex flex-wrap justify-between">
                                    <div class="inner-price mx-[-3px]">
                                        <span class="new-price px-[3px] text-[16px] text-[#686e7d] font-bold">৳{{ $product->price }}</span>
                                        <!-- <span class="old-price px-[3px] text-[14px] text-[#686e7d] line-through">$22</span> -->
                                    </div>
                                    <span class="last-items text-[14px] text-[#686e7d]">500g</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</section>

<!-- Services -->
<section class="section-services overflow-hidden py-[50px] max-[1199px]:py-[35px]">
    <div
        class="flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
        <div class="flex flex-wrap w-full mb-[-24px]">
            <div class="min-[992px]:w-[25%] min-[768px]:w-[50%] w-full px-[12px] mb-[24px]" data-aos="flip-up"
                data-aos-duration="1000" data-aos-delay="200">
                <div
                    class="bb-services-box p-[30px] border-[1px] border-solid border-[#eee] rounded-[20px] text-center">
                    <div class="services-img mb-[20px] flex justify-center">
                        <img src="{{ asset('frontend/img/services/1.png') }}" alt="services-1" class="w-[50px]">
                    </div>
                    <div class="services-contact">
                        <h4
                            class="font-quicksand mb-[8px] text-[18px] font-bold text-[#3d4750] leading-[1.2] tracking-[0.03rem]">
                            Free Shipping</h4>
                        <p class="font-Poppins font-light text-[14px] leading-[20px] text-[#686e7d] tracking-[0.03rem]">
                            Free shipping on all Us order or above $200</p>
                    </div>
                </div>
            </div>
            <div class="min-[992px]:w-[25%] min-[768px]:w-[50%] w-full px-[12px] mb-[24px]" data-aos="flip-up"
                data-aos-duration="1000" data-aos-delay="400">
                <div
                    class="bb-services-box p-[30px] border-[1px] border-solid border-[#eee] rounded-[20px] text-center">
                    <div class="services-img mb-[20px] flex justify-center">
                        <img src="{{ asset('frontend/img/services/2.png') }}" alt="services-2" class="w-[50px]">
                    </div>
                    <div class="services-contact">
                        <h4
                            class="font-quicksand mb-[8px] text-[18px] font-bold text-[#3d4750] leading-[1.2] tracking-[0.03rem]">
                            24x7 Support</h4>
                        <p class="font-Poppins font-light text-[14px] leading-[20px] text-[#686e7d] tracking-[0.03rem]">
                            Contact us 24 hours a day, 7 days a week</p>
                    </div>
                </div>
            </div>
            <div class="min-[992px]:w-[25%] min-[768px]:w-[50%] w-full px-[12px] mb-[24px]" data-aos="flip-up"
                data-aos-duration="1000" data-aos-delay="600">
                <div
                    class="bb-services-box p-[30px] border-[1px] border-solid border-[#eee] rounded-[20px] text-center">
                    <div class="services-img mb-[20px] flex justify-center">
                        <img src="{{ asset('frontend/img/services/3.png') }}" alt="services-3" class="w-[50px]">
                    </div>
                    <div class="services-contact">
                        <h4
                            class="font-quicksand mb-[8px] text-[18px] font-bold text-[#3d4750] leading-[1.2] tracking-[0.03rem]">
                            30 Days Return</h4>
                        <p class="font-Poppins font-light text-[14px] leading-[20px] text-[#686e7d] tracking-[0.03rem]">
                            Simply return it within 30 days for an exchange</p>
                    </div>
                </div>
            </div>
            <div class="min-[992px]:w-[25%] min-[768px]:w-[50%] w-full px-[12px] mb-[24px]" data-aos="flip-up"
                data-aos-duration="1000" data-aos-delay="800">
                <div
                    class="bb-services-box p-[30px] border-[1px] border-solid border-[#eee] rounded-[20px] text-center">
                    <div class="services-img mb-[20px] flex justify-center">
                        <img src="{{ asset('frontend/img/services/4.png') }}" alt="services-4" class="w-[50px]">
                    </div>
                    <div class="services-contact">
                        <h4
                            class="font-quicksand mb-[8px] text-[18px] font-bold text-[#3d4750] leading-[1.2] tracking-[0.03rem]">
                            Payment Secure</h4>
                        <p class="font-Poppins font-light text-[14px] leading-[20px] text-[#686e7d] tracking-[0.03rem]">
                            Contact us 24 hours a day, 7 days a week</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Vendors -->
<section class="section-vendors overflow-hidden pt-[50px] max-[1199px]:pt-[35px] pb-[100px] max-[1199px]:pb-[70px]">
    <div
        class="flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
        <div class="flex flex-wrap w-full mb-[-24px]">
            <div class="w-full px-[12px]">
                <div class="section-title mb-[20px] pb-[20px] z-[5] relative flex flex-col items-center text-center max-[991px]:pb-[0]"
                    data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <div class="section-detail max-[991px]:mb-[12px]">
                        <h2
                            class="bb-title font-quicksand mb-[0] p-[0] text-[25px] font-bold text-[#3d4750] relative inline capitalize leading-[1] tracking-[0.03rem] max-[767px]:text-[23px]">
                            Top <span class="text-[#6c7fd8]">Vendors</span></h2>
                        <p
                            class="font-Poppins max-w-[400px] mt-[10px] text-[14px] text-[#686e7d] leading-[18px] font-light tracking-[0.03rem] max-[991px]:mx-[auto]">
                            Discover Our Trusted Partners: Excllence & Reliability in Every choice</p>
                    </div>
                </div>
            </div>
            <div class="min-[992px]:w-[41.66%] w-full px-[12px] mb-[24px]" data-aos="fade-up" data-aos-duration="1000"
                data-aos-delay="200">
                <div class="bb-vendors-img sticky top-[0]">
                    <div class="tab-content">
                        <div class="tab-vendors-pane" id="vendors_tab_one">
                            <a href="javascript:void(0)"
                                class="bb-vendor-init transition-all duration-[0.3s] ease-in-out absolute right-[20px] top-[20px] h-[35px] w-[35px] bg-[#00000080] hover:bg-[#000000cc] flex justify-center items-center rounded-[10px]">
                                <i class="ri-arrow-right-up-line text-[20px] text-[#fff]"></i>
                            </a>
                            <img src="{{ asset('frontend/img/vendors/img-1.jpg') }}" alt="vendors-img-1"
                                class="w-full rounded-[30px] border-[1px] border-solid border-[#eee]">
                            <div
                                class="vendors-local-shape absolute bottom-[0] right-[0] h-[120px] w-[120px] bg-[#fff] pt-[20px] pl-[20px] rounded-tl-[30px]">
                                <div class="inner-shape relative"></div>
                                <img src="{{ asset('frontend/img/vendors/vendor-1.jpg') }}" alt="vendor"
                                    class="w-[100px] h-[100px] rounded-[30px] border-[1px] border-solid border-[#eee]">
                            </div>
                        </div>
                        <div class="tab-vendors-pane" id="vendors_tab_two">
                            <a href="javascript:void(0)"
                                class="bb-vendor-init transition-all duration-[0.3s] ease-in-out absolute right-[20px] top-[20px] h-[35px] w-[35px] bg-[#00000080] hover:bg-[#000000cc] flex justify-center items-center rounded-[10px]">
                                <i class="ri-arrow-right-up-line text-[20px] text-[#fff]"></i>
                            </a>
                            <img src="{{ asset('frontend/img/vendors/img-2.jpg') }}" alt="vendors-img-2"
                                class="w-full rounded-[30px] border-[1px] border-solid border-[#eee]">
                            <div
                                class="vendors-local-shape absolute bottom-[0] right-[0] h-[120px] w-[120px] bg-[#fff] pt-[20px] pl-[20px] rounded-tl-[30px]">
                                <div class="inner-shape relative"></div>
                                <img src="{{ asset('frontend/img/vendors/vendor-2.jpg') }}" alt="vendor"
                                    class="w-[100px] h-[100px] rounded-[30px] border-[1px] border-solid border-[#eee]">
                            </div>
                        </div>
                        <div class="tab-vendors-pane" id="vendors_tab_three">
                            <a href="javascript:void(0)"
                                class="bb-vendor-init transition-all duration-[0.3s] ease-in-out absolute right-[20px] top-[20px] h-[35px] w-[35px] bg-[#00000080] hover:bg-[#000000cc] flex justify-center items-center rounded-[10px]">
                                <i class="ri-arrow-right-up-line text-[20px] text-[#fff]"></i>
                            </a>
                            <img src="{{ asset('frontend/img/vendors/img-3.jpg') }}" alt="vendors-img-3"
                                class="w-full rounded-[30px] border-[1px] border-solid border-[#eee]">
                            <div
                                class="vendors-local-shape absolute bottom-[0] right-[0] h-[120px] w-[120px] bg-[#fff] pt-[20px] pl-[20px] rounded-tl-[30px]">
                                <div class="inner-shape relative"></div>
                                <img src="{{ asset('frontend/img/vendors/vendor-3.jpg') }}" alt="vendor"
                                    class="w-[100px] h-[100px] rounded-[30px] border-[1px] border-solid border-[#eee]">
                            </div>
                        </div>
                        <div class="tab-vendors-pane" id="vendors_tab_four">
                            <a href="javascript:void(0)"
                                class="bb-vendor-init transition-all duration-[0.3s] ease-in-out absolute right-[20px] top-[20px] h-[35px] w-[35px] bg-[#00000080] hover:bg-[#000000cc] flex justify-center items-center rounded-[10px]">
                                <i class="ri-arrow-right-up-line text-[20px] text-[#fff]"></i>
                            </a>
                            <img src="{{ asset('frontend/img/vendors/img-4.jpg') }}" alt="vendors-img-4"
                                class="w-full rounded-[30px] border-[1px] border-solid border-[#eee]">
                            <div
                                class="vendors-local-shape absolute bottom-[0] right-[0] h-[120px] w-[120px] bg-[#fff] pt-[20px] pl-[20px] rounded-tl-[30px]">
                                <div class="inner-shape relative"></div>
                                <img src="{{ asset('frontend/img/vendors/vendor-4.jpg') }}" alt="vendor"
                                    class="w-[100px] h-[100px] rounded-[30px] border-[1px] border-solid border-[#eee]">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="min-[992px]:w-[58.33%] w-full px-[12px] mb-[24px]">
                <ul class="bb-vendors-tab-nav flex flex-wrap mb-[-24px]" id="vendorstab">
                    <li class="nav-item w-full mb-[24px]" data-aos="fade-up" data-aos-duration="1000"
                        data-aos-delay="200">
                        <a class="nav-link p-[30px] bg-[#f8f8fb] border-[1px] border-solid border-[#eee] rounded-[30px] block"
                            href="#vendors_tab_one">
                            <div class="bb-vendors-box">
                                <div class="inner-heading mb-[5px] flex justify-between max-[420px]:flex-col">
                                    <h5
                                        class="font-quicksand text-[18px] font-bold tracking-[0.03rem] leading-[1.2] text-[#3d4750]">
                                        Mira Fashion Pvt. Ltd.</h5>
                                    <span
                                        class="font-Poppins text-[14px] text-[#686e7d] leading-[28px] font-normal tracking-[0.03rem]">Sales
                                        - 587</span>
                                </div>
                                <p
                                    class="font-Poppins text-[14px] leading-[20px] text-[#686e7d] font-light tracking-[0.03rem]">
                                    Fruits (5) | Vegetables (30) | Snacks (09) </p>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item w-full mb-[24px]" data-aos="fade-up" data-aos-duration="1000"
                        data-aos-delay="400">
                        <a class="nav-link p-[30px] bg-[#f8f8fb] border-[1px] border-solid border-[#eee] rounded-[30px] block"
                            href="#vendors_tab_two">
                            <div class="bb-vendors-box">
                                <div class="inner-heading mb-[5px] flex justify-between max-[420px]:flex-col">
                                    <h5
                                        class="font-quicksand text-[18px] font-bold tracking-[0.03rem] leading-[1.2] text-[#3d4750]">
                                        Eelna Fashion Pvt. Ltd.</h5>
                                    <span
                                        class="font-Poppins text-[14px] text-[#686e7d] leading-[28px] font-normal tracking-[0.03rem]">Sales
                                        - 428</span>
                                </div>
                                <p
                                    class="font-Poppins text-[14px] leading-[20px] text-[#686e7d] font-light tracking-[0.03rem]">
                                    Fruits (8) | Vegetables (15) | Snacks (04) </p>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item w-full mb-[24px]" data-aos="fade-up" data-aos-duration="1000"
                        data-aos-delay="600">
                        <a class="nav-link p-[30px] bg-[#f8f8fb] border-[1px] border-solid border-[#eee] rounded-[30px] block"
                            href="#vendors_tab_three">
                            <div class="bb-vendors-box">
                                <div class="inner-heading mb-[5px] flex justify-between max-[420px]:flex-col">
                                    <h5
                                        class="font-quicksand text-[18px] font-bold tracking-[0.03rem] leading-[1.2] text-[#3d4750]">
                                        Mario Fashion Pvt. Ltd.</h5>
                                    <span
                                        class="font-Poppins text-[14px] text-[#686e7d] leading-[28px] font-normal tracking-[0.03rem]">Sales
                                        - 1024</span>
                                </div>
                                <p
                                    class="font-Poppins text-[14px] leading-[20px] text-[#686e7d] font-light tracking-[0.03rem]">
                                    Fruits (16) | Vegetables (42) | Snacks (18) </p>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item w-full mb-[24px]" data-aos="fade-up" data-aos-duration="1000"
                        data-aos-delay="800">
                        <a class="nav-link p-[30px] bg-[#f8f8fb] border-[1px] border-solid border-[#eee] rounded-[30px] block"
                            href="#vendors_tab_four">
                            <div class="bb-vendors-box">
                                <div class="inner-heading mb-[5px] flex justify-between max-[420px]:flex-col">
                                    <h5
                                        class="font-quicksand text-[18px] font-bold tracking-[0.03rem] leading-[1.2] text-[#3d4750]">
                                        Maria Fashion Pvt. Ltd.</h5>
                                    <span
                                        class="font-Poppins text-[14px] text-[#686e7d] leading-[28px] font-normal tracking-[0.03rem]">Sales
                                        - 210</span>
                                </div>
                                <p
                                    class="font-Poppins text-[14px] leading-[20px] text-[#686e7d] font-light tracking-[0.03rem]">
                                    Fruits (2) | Vegetables (10) | Snacks (03) </p>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials -->
<section class="section-testimonials overflow-hidden py-[100px] max-[1199px]:py-[70px] max-[991px]:p-[0]">
    <div
        class="flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
        <div class="flex flex-wrap w-full">
            <div class="w-full px-[12px]">
                <div class="bb-testimonials relative" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                    <img src="{{ asset('frontend/img/testimonials/img-1.png') }}" alt="testimonials-1"
                        class="testimonials-img-1 z-[-1] h-[70px] w-[70px] absolute top-[0] left-[25px] rounded-[20px] rotate-[-10deg] max-[1399px]:h-[60px] max-[1399px]:w-[60px] max-[1399px]:left-[10px] max-[1199px]:hidden">
                    <img src="{{ asset('frontend/img/testimonials/img-2.png') }}" alt="testimonials-2"
                        class="testimonials-img-2 z-[-1] h-[50px] w-[50px] absolute bottom-[0] left-[0] rounded-[15px] rotate-[15deg] blur-[3px] max-[1199px]:hidden">
                    <img src="{{ asset('frontend/img/testimonials/img-3.png') }}" alt="testimonials-3"
                        class="testimonials-img-3 z-[-1] h-[60px] w-[60px] absolute top-[-50px] right-[500px] rounded-[20px] rotate-[-30deg] blur-[3px] max-[991px]:hidden">
                    <img src="{{ asset('frontend/img/testimonials/img-4.png') }}" alt="testimonials-4"
                        class="testimonials-img-4 z-[-1] h-[60px] w-[60px] absolute top-[50px] right-[250px] rounded-[20px] rotate-[15deg] max-[1399px]:top-[20px] max-[991px]:hidden">
                    <img src="{{ asset('frontend/img/testimonials/img-5.png') }}" alt="testimonials-5"
                        class="testimonials-img-5 z-[-1] h-[70px] w-[70px] absolute top-[0] right-[20px] rounded-[20px] blur-[3px] max-[991px]:hidden">
                    <img src="{{ asset('frontend/img/testimonials/img-6.png') }}" alt="testimonials-6"
                        class="testimonials-img-6 z-[-1] h-[60px] w-[60px] absolute bottom-[30px] right-[100px] rounded-[20px] rotate-[-25deg] max-[1399px]:h-[50px] max-[1399px]:w-[50px] max-[1399px]:right-[50px] max-[1199px]:right-[0] max-[991px]:hidden">
                    <div
                        class="inner-banner rotate-[270deg] absolute top-[0] z-[-1] left-[150px] bottom-[0] max-[1399px]:left-[110px] max-[1199px]:left-[30px] max-[991px]:hidden">
                        <h4
                            class="font-quicksand text-[#fff] tracking-[0.03rem] opacity-[0.15] text-[42px] font-bold leading-[1.2] max-[1399px]:text-[38px] max-[1199px]:text-[34px]">
                            Testimonials</h4>
                    </div>
                    <div class="owl-carousel testimonials-slider">
                        <div class="bb-testimonials-inner max-w-[900px] m-[auto] max-[1399px]:max-w-[800px]">
                            <div class="flex flex-wrap mx-[-12px] testimonials-row">
                                <div class="min-[768px]:w-[33.33%] w-full px-[12px] max-[767px]:hidden">
                                    <div
                                        class="testimonials-image relative max-[575px]:mb-[20px] max-[575px]:max-w-[200px]">
                                        <img src="{{ asset('frontend/img/testimonials/1.jpg') }}" alt="testimonials"
                                            class="w-full rounded-[30px] block">
                                    </div>
                                </div>
                                <div class="min-[768px]:w-[66.66%] w-full px-[12px]">
                                    <div class="testimonials-contact h-full flex flex-col justify-end">
                                        <div class="user max-[767px]:flex max-[767px]:items-center">
                                            <img src="{{ asset('frontend/img/testimonials/1.jpg') }}" alt="testimonials"
                                                class="w-full hidden rounded-[15px] max-[767px]:max-w-[60px] max-[767px]:mr-[15px] max-[767px]:flex">
                                            <div class="detail">
                                                <h4
                                                    class="font-quicksand text-[#3d4750] tracking-[0.03rem] leading-[1.2] mb-[8px] text-[20px] font-bold max-[767px]:mb-[4px] max-[767px]:text-[18px]">
                                                    Isabella Oliver</h4>
                                                <span
                                                    class="font-Poppins font-normal tracking-[0.02rem] text-[14px] text-[#777]">(Manager)</span>
                                            </div>
                                        </div>
                                        <div
                                            class="inner-contact bg-[#fff] mt-[10px] border-[1px] border-solid border-[#eee] p-[20px] rounded-[30px]">
                                            <p
                                                class="font-Poppins text-[#686e7d] text-[14px] leading-[25px] tracking-[0.03rem] font-light">
                                                "Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto
                                                at sint eligendi possimus perspiciatis asperiores reiciendis hic
                                                amet alias aut quaerat maiores blanditiis."</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bb-testimonials-inner max-w-[900px] m-[auto] max-[1399px]:max-w-[800px]">
                            <div class="flex flex-wrap mx-[-12px] testimonials-row">
                                <div class="min-[768px]:w-[33.33%] w-full px-[12px] max-[767px]:hidden">
                                    <div
                                        class="testimonials-image relative max-[575px]:mb-[20px] max-[575px]:max-w-[200px]">
                                        <img src="{{ asset('frontend/img/testimonials/2.jpg') }}" alt="testimonials"
                                            class="w-full rounded-[30px] block">
                                    </div>
                                </div>
                                <div class="min-[768px]:w-[66.66%] w-full px-[12px]">
                                    <div class="testimonials-contact h-full flex flex-col justify-end">
                                        <div class="user max-[767px]:flex max-[767px]:items-center">
                                            <img src="{{ asset('frontend/img/testimonials/2.jpg') }}" alt="testimonials"
                                                class="w-full hidden rounded-[15px] max-[767px]:max-w-[60px] max-[767px]:mr-[15px] max-[767px]:flex">
                                            <div class="detail">
                                                <h4
                                                    class="font-quicksand text-[#3d4750] tracking-[0.03rem] leading-[1.2] mb-[8px] text-[20px] font-bold max-[767px]:mb-[4px] max-[767px]:text-[18px]">
                                                    Nikki Albart</h4>
                                                <span
                                                    class="font-Poppins font-normal tracking-[0.02rem] text-[14px] text-[#777]">(Team
                                                    Leader)</span>
                                            </div>
                                        </div>
                                        <div
                                            class="inner-contact bg-[#fff] mt-[10px] border-[1px] border-solid border-[#eee] p-[20px] rounded-[30px]">
                                            <p
                                                class="font-Poppins text-[#686e7d] text-[14px] leading-[25px] tracking-[0.03rem] font-light">
                                                "Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto
                                                at sint eligendi possimus perspiciatis asperiores reiciendis hic
                                                amet alias aut quaerat maiores blanditiis."</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bb-testimonials-inner max-w-[900px] m-[auto] max-[1399px]:max-w-[800px]">
                            <div class="flex flex-wrap mx-[-12px] testimonials-row">
                                <div class="min-[768px]:w-[33.33%] w-full px-[12px] max-[767px]:hidden">
                                    <div
                                        class="testimonials-image relative max-[575px]:mb-[20px] max-[575px]:max-w-[200px]">
                                        <img src="{{ asset('frontend/img/testimonials/3.jpg') }}" alt="testimonials"
                                            class="w-full rounded-[30px] block">
                                    </div>
                                </div>
                                <div class="min-[768px]:w-[66.66%] w-full px-[12px]">
                                    <div class="testimonials-contact h-full flex flex-col justify-end">
                                        <div class="user max-[767px]:flex max-[767px]:items-center">
                                            <img src="{{ asset('frontend/img/testimonials/3.jpg') }}" alt="testimonials"
                                                class="w-full hidden rounded-[15px] max-[767px]:max-w-[60px] max-[767px]:mr-[15px] max-[767px]:flex">
                                            <div class="detail">
                                                <h4
                                                    class="font-quicksand text-[#3d4750] tracking-[0.03rem] leading-[1.2] mb-[8px] text-[20px] font-bold max-[767px]:mb-[4px] max-[767px]:text-[18px]">
                                                    Stephen Smith</h4>
                                                <span
                                                    class="font-Poppins font-normal tracking-[0.02rem] text-[14px] text-[#777]">(Co
                                                    Founder)</span>
                                            </div>
                                        </div>
                                        <div
                                            class="inner-contact bg-[#fff] mt-[10px] border-[1px] border-solid border-[#eee] p-[20px] rounded-[30px]">
                                            <p
                                                class="font-Poppins text-[#686e7d] text-[14px] leading-[25px] tracking-[0.03rem] font-light">
                                                "Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto
                                                at sint eligendi possimus perspiciatis asperiores reiciendis hic
                                                amet alias aut quaerat maiores blanditiis."</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Blog -->
<section class="section-blog overflow-hidden pb-[50px] max-[1199px]:pb-[35px] pt-[100px] max-[1199px]:pt-[70px]">
    <div
        class="flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
        <div class="flex flex-wrap w-full">
            <div class="w-full px-[12px]">
                <div class="blog-2-slider owl-carousel">
                    <div class="blog-2-card relative overflow-hidden rounded-[30px]" data-aos="fade-up"
                        data-aos-duration="1000" data-aos-delay="200">
                        <div class="blog-img">
                            <img src="{{ asset('frontend/img/blog/7.jpg') }}" alt="blog-7"
                                class="transition-all duration-[0.3s] ease-in-out w-full block">
                        </div>
                        <div
                            class="blog-contact transition-all duration-[0.3s] ease-in-out m-[5px] p-[15px] absolute bottom-[0] right-[0] left-[0] bg-[#ffffffe6] rounded-[30px]">
                            <span
                                class="font-Poppins font-normal text-[13px] leading-[26px] tracking-[0.02rem] text-[#686e7d]">June
                                30,2024 - organic</span>
                            <h4 class="text-[16px] leading-[1.2]"><a href="blog-detail-left-sidebar.html"
                                    class="font-Poppins tracking-[0.03rem] text-[16px] font-medium leading-[1.3] text-[#3d4750]">Marketing
                                    Guide: 5 Steps to Success.</a></h4>
                        </div>
                    </div>
                    <div class="blog-2-card relative overflow-hidden rounded-[30px]" data-aos="fade-up"
                        data-aos-duration="1000" data-aos-delay="400">
                        <div class="blog-img">
                            <img src="{{ asset('frontend/img/blog/8.jpg') }}" alt="blog-8"
                                class="transition-all duration-[0.3s] ease-in-out w-full block">
                        </div>
                        <div
                            class="blog-contact transition-all duration-[0.3s] ease-in-out m-[5px] p-[15px] absolute bottom-[0] right-[0] left-[0] bg-[#ffffffe6] rounded-[30px]">
                            <span
                                class="font-Poppins font-normal text-[13px] leading-[26px] tracking-[0.02rem] text-[#686e7d]">May
                                10,2023 - organic</span>
                            <h4 class="text-[16px] leading-[1.2]"><a href="blog-detail-left-sidebar.html"
                                    class="font-Poppins tracking-[0.03rem] text-[16px] font-medium leading-[1.3] text-[#3d4750]">Best
                                    way to solve business deal issue.</a></h4>
                        </div>
                    </div>
                    <div class="blog-2-card relative overflow-hidden rounded-[30px]" data-aos="fade-up"
                        data-aos-duration="1000" data-aos-delay="600">
                        <div class="blog-img">
                            <img src="{{ asset('frontend/img/blog/9.jpg') }}" alt="blog-9"
                                class="transition-all duration-[0.3s] ease-in-out w-full block">
                        </div>
                        <div
                            class="blog-contact transition-all duration-[0.3s] ease-in-out m-[5px] p-[15px] absolute bottom-[0] right-[0] left-[0] bg-[#ffffffe6] rounded-[30px]">
                            <span
                                class="font-Poppins font-normal text-[13px] leading-[26px] tracking-[0.02rem] text-[#686e7d]">Jan
                                10,2022 - organic</span>
                            <h4 class="text-[16px] leading-[1.2]"><a href="blog-detail-left-sidebar.html"
                                    class="font-Poppins tracking-[0.03rem] text-[16px] font-medium leading-[1.3] text-[#3d4750]">Business
                                    ideas to grow your business.</a></h4>
                        </div>
                    </div>
                    <div class="blog-2-card relative overflow-hidden rounded-[30px]" data-aos="fade-up"
                        data-aos-duration="1000" data-aos-delay="800">
                        <div class="blog-img">
                            <img src="{{ asset('frontend/img/blog/10.jpg') }}" alt="blog-10"
                                class="transition-all duration-[0.3s] ease-in-out w-full block">
                        </div>
                        <div
                            class="blog-contact transition-all duration-[0.3s] ease-in-out m-[5px] p-[15px] absolute bottom-[0] right-[0] left-[0] bg-[#ffffffe6] rounded-[30px]">
                            <span
                                class="font-Poppins font-normal text-[13px] leading-[26px] tracking-[0.02rem] text-[#686e7d]">Feb
                                12,2022 - organic</span>
                            <h4 class="text-[16px] leading-[1.2]"><a href="blog-detail-left-sidebar.html"
                                    class="font-Poppins tracking-[0.03rem] text-[16px] font-medium leading-[1.3] text-[#3d4750]">31
                                    customer stats know in 2020.</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Instagram -->
<section class="section-instagram overflow-hidden py-[50px] max-[1199px]:py-[35px] relative">
    <div
        class="flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
        <div class="flex flex-wrap w-full">
            <div class="w-full px-[12px]">
                <div
                    class="bb-title m-[auto] py-[15px] px-[30px] bg-[#fff] rounded-[30px] absolute top-[50%] left-[50%] z-[5] max-[991px]:py-[8px] max-[991px]:px-[20px]">
                    <h3
                        class="font-quicksand m-[0] text-[#3d4750] font-semibold tracking-[0.03rem] leading-[1.2] text-[28px] max-[991px]:text-[25px]">
                        #Insta</h3>
                </div>
                <div class="bb-instagram-slider owl-carousel">
                    <div class="bb-instagram-card" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                        <div class="instagram-img relative overflow-hidden rounded-[30px]">
                            <a href="javascript:void(0)">
                                <img src="{{ asset('frontend/img/instagram/1.jpg') }}" alt="instagram-1"
                                    class="w-full rounded-[20px]">
                            </a>
                        </div>
                    </div>
                    <div class="bb-instagram-card" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                        <div class="instagram-img relative overflow-hidden rounded-[30px]">
                            <a href="javascript:void(0)">
                                <img src="{{ asset('frontend/img/instagram/2.jpg') }}" alt="instagram-2"
                                    class="w-full rounded-[20px]">
                            </a>
                        </div>
                    </div>
                    <div class="bb-instagram-card" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                        <div class="instagram-img relative overflow-hidden rounded-[30px]">
                            <a href="javascript:void(0)">
                                <img src="{{ asset('frontend/img/instagram/3.jpg') }}" alt="instagram-3"
                                    class="w-full rounded-[20px]">
                            </a>
                        </div>
                    </div>
                    <div class="bb-instagram-card" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
                        <div class="instagram-img relative overflow-hidden rounded-[30px]">
                            <a href="javascript:void(0)">
                                <img src="{{ asset('frontend/img/instagram/4.jpg') }}" alt="instagram-4"
                                    class="w-full rounded-[20px]">
                            </a>
                        </div>
                    </div>
                    <div class="bb-instagram-card" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                        <div class="instagram-img relative overflow-hidden rounded-[30px]">
                            <a href="javascript:void(0)">
                                <img src="{{ asset('frontend/img/instagram/5.jpg') }}" alt="instagram-5"
                                    class="w-full rounded-[20px]">
                            </a>
                        </div>
                    </div>
                    <div class="bb-instagram-card" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="700">
                        <div class="instagram-img relative overflow-hidden rounded-[30px]">
                            <a href="javascript:void(0)">
                                <img src="{{ asset('frontend/img/instagram/6.jpg') }}" alt="instagram-6"
                                    class="w-full rounded-[20px]">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection