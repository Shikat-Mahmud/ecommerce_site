@php
    $settings = generalSettings();
    $categories = categories();
@endphp

<footer class="bb-footer mt-[50px] max-[1199px]:mt-[35px] bg-[#f8f8fb] text-[#fff]">
    <div class="footer-container border-t-[1px] border-solid border-[#eee]">
        <div class="footer-top py-[50px] max-[1199px]:py-[35px]">
            <div
                class="flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
                <div class="flex flex-wrap w-full max-[991px]:mb-[-30px]" data-aos="fade-up" data-aos-duration="1000"
                    data-aos-delay="200">
                    <div class="min-[992px]:w-[25%] max-[991px]:w-full w-full px-[12px] bb-footer-toggle bb-footer-cat">
                        <div class="bb-footer-widget bb-footer-company flex flex-col max-[991px]:mb-[24px]">
                            @if (isset($settings->logo))
                                <img src="{{ asset('storage/' . $settings->logo) }}"
                                    class="bb-footer-logo max-w-[144px] mb-[30px] max-[767px]:max-w-[130px]"
                                    alt="footer logo">
                                <img src="{{ asset('storage/' . $settings->logo) }}"
                                    class="bb-footer-dark-logo max-w-[144px] mb-[30px] max-[767px]:max-w-[130px] hidden"
                                    alt="footer logo">
                            @else
                                <img src="{{ asset('frontend/img/logo/logo.png') }}"
                                    class="bb-footer-logo max-w-[144px] mb-[30px] max-[767px]:max-w-[130px]"
                                    alt="footer logo">
                                <img src="{{ asset('frontend/img/logo/logo-dark.png') }}"
                                    class="bb-footer-dark-logo max-w-[144px] mb-[30px] max-[767px]:max-w-[130px] hidden"
                                    alt="footer logo">
                            @endif
                            <p
                                class="bb-footer-detail max-w-[400px] mb-[30px] p-[0] font-Poppins text-[14px] leading-[27px] font-normal text-[#686e7d] inline-block relative max-[1399px]:text-[15px] max-[1199px]:text-[14px]">
                                BlueBerry is the biggest market of grocery products. Get
                                your daily needs from our store.</p>
                            <div class="bb-app-store m-[-7px] flex flex-wrap">
                                <a href="javascript:void(0)" class="app-img">
                                    <img src="{{ asset('frontend/img/app/android.png') }}"
                                        class="adroid max-w-[140px] m-[7px] rounded-[5px] max-[1399px]:max-w-[120px]"
                                        alt="apple">
                                </a>
                                <a href="javascript:void(0)" class="app-img">
                                    <img src="{{ asset('frontend/img/app/apple.png') }}"
                                        class="apple max-w-[140px] m-[7px] rounded-[5px] max-[1399px]:max-w-[120px]"
                                        alt="apple">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div
                        class="min-[992px]:w-[25%] max-[991px]:w-full w-full px-[12px] bb-footer-toggle bb-footer-info">
                        <div class="bb-footer-widget">
                            <h4
                                class="bb-footer-heading font-quicksand leading-[1.2] text-[18px] font-bold mb-[20px] text-[#3d4750] tracking-[0] relative block w-full pb-[15px] capitalize border-b-[1px] border-solid border-[#eee] max-[991px]:text-[14px]">
                                Category</h4>
                            <div class="bb-footer-links bb-footer-dropdown hidden max-[991px]:mb-[35px]">
                                <ul class="align-items-center">
                                    @if (!$categories->isEmpty())
                                        @foreach ($categories->take(5) as $category)
                                            <li
                                                class="bb-footer-link leading-[1.5] flex items-center mb-[16px] max-[991px]:mb-[15px]">
                                                <a href="{{ route('category.product', $category->id) }}"
                                                    class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[14px] leading-[20px] text-[#686e7d] hover:text-[#6c7fd8] mb-[0] inline-block break-all tracking-[0] font-normal">
                                                    {{ $category->name }}
                                                </a>
                                            </li>
                                        @endforeach
                                    @endif
                                </ul>

                            </div>
                        </div>
                    </div>
                    <div
                        class="min-[992px]:w-[25%] max-[991px]:w-full w-full px-[12px] bb-footer-toggle bb-footer-account">
                        <div class="bb-footer-widget">
                            <h4
                                class="bb-footer-heading font-quicksand leading-[1.2] text-[18px] font-bold mb-[20px] text-[#3d4750] tracking-[0] relative block w-full pb-[15px] capitalize border-b-[1px] border-solid border-[#eee] max-[991px]:text-[14px]">
                                Links</h4>
                            <div class="bb-footer-links bb-footer-dropdown hidden max-[991px]:mb-[35px]">
                                <ul class="align-items-center">
                                    <li
                                        class="bb-footer-link leading-[1.5] flex items-center mb-[16px] max-[991px]:mb-[15px]">
                                        <a href="{{ route('login') }}"
                                            class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[14px] leading-[20px] text-[#686e7d] hover:text-[#6c7fd8] mb-[0] inline-block break-all tracking-[0] font-normal">Sign
                                            In</a>
                                    </li>
                                    <li
                                        class="bb-footer-link leading-[1.5] flex items-center mb-[16px] max-[991px]:mb-[15px]">
                                        <a href="{{ route('cart') }}"
                                            class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[14px] leading-[20px] text-[#686e7d] hover:text-[#6c7fd8] mb-[0] inline-block break-all tracking-[0] font-normal">View
                                            Cart</a>
                                    </li>
                                    <li
                                        class="bb-footer-link leading-[1.5] flex items-center mb-[16px] max-[991px]:mb-[15px]">
                                        <a href="{{ route('about') }}"
                                            class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[14px] leading-[20px] text-[#686e7d] hover:text-[#6c7fd8] mb-[0] inline-block break-all tracking-[0] font-normal">About
                                            us</a>
                                    </li>
                                    <li class="bb-footer-link leading-[1.5] flex items-center">
                                        <a href="{{ route('contact') }}"
                                            class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[14px] leading-[20px] text-[#686e7d] hover:text-[#6c7fd8] mb-[0] inline-block break-all tracking-[0] font-normal">Contact
                                            us</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div
                        class="min-[992px]:w-[25%] max-[991px]:w-full w-full px-[12px] bb-footer-toggle bb-footer-cont-social">
                        <div class="bb-footer-contact mb-[30px]">
                            <div class="bb-footer-widget">
                                <h4
                                    class="bb-footer-heading font-quicksand leading-[1.2] text-[18px] font-bold mb-[20px] text-[#3d4750] tracking-[0] relative block w-full pb-[15px] capitalize border-b-[1px] border-solid border-[#eee] max-[991px]:text-[14px]">
                                    Contact</h4>
                                <div class="bb-footer-links bb-footer-dropdown hidden max-[991px]:mb-[35px]">
                                    <ul class="align-items-center">
                                        <li
                                            class="bb-footer-link bb-foo-location flex items-center max-[991px]:mb-[15px] mb-[16px]">
                                            <span class="mt-[5px] w-[25px] basis-[auto] grow-[0] shrink-[0] flex">
                                                <i class="ri-map-pin-line leading-[0] text-[18px] text-[#6c7fd8]"></i>
                                            </span>
                                            <p
                                                class="m-[0] font-Poppins text-[14px] text-[#686e7d] font-normal leading-[28px] tracking-[0.03rem]">
                                                {{ $settings->business_address }}
                                            </p>
                                        </li>
                                        <li
                                            class="bb-footer-link bb-foo-call flex items-center max-[991px]:mb-[15px] mb-[16px]">
                                            <span class="w-[25px] basis-[auto] grow-[0] shrink-[0] flex">
                                                <i class="ri-whatsapp-line leading-[0] text-[18px] text-[#6c7fd8]"></i>
                                            </span>
                                            <a href="tel:{{ $settings->business_whatsapp ? $settings->business_whatsapp : $settings->business_number }}"
                                                class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[14px] leading-[20px] text-[#686e7d] inline-block relative break-all tracking-[0] font-normal max-[1399px]:text-[15px] max-[1199px]:text-[14px]">{{ $settings->business_whatsapp ? $settings->business_whatsapp : $settings->business_number }}</a>
                                        </li>
                                        <li class="bb-footer-link bb-foo-mail flex items-center">
                                            <span class="w-[25px] basis-[auto] grow-[0] shrink-[0] flex">
                                                <i class="ri-mail-line leading-[0] text-[18px] text-[#6c7fd8]"></i>
                                            </span>
                                            <a href="mailto:{{ $settings->business_email }}"
                                                class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[14px] leading-[20px] text-[#686e7d] inline-block relative break-all tracking-[0] font-normal max-[1399px]:text-[15px] max-[1199px]:text-[14px]">{{ $settings->business_email }}</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="bb-footer-social">
                            <div class="bb-footer-widget">
                                <div class="bb-footer-links bb-footer-dropdown hidden max-[991px]:mb-[35px]">
                                    <ul class="align-items-center flex flex-wrap items-center">
                                        <li class="bb-footer-link leading-[1.5] flex items-center pr-[5px]">
                                            <a href="javascript:void(0)"
                                                class="transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] rounded-[5px] bg-[#3d4750] hover:bg-[#6c7fd8] capitalize flex items-center justify-center text-[15px] leading-[20px] text-[#686e7d] relative break-all font-normal"><i
                                                    class="ri-facebook-fill text-[16px] text-[#fff]"></i></a>
                                        </li>
                                        <li class="bb-footer-link leading-[1.5] flex items-center pr-[5px]">
                                            <a href="javascript:void(0)"
                                                class="transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] rounded-[5px] bg-[#3d4750] hover:bg-[#6c7fd8] capitalize flex items-center justify-center text-[15px] leading-[20px] text-[#686e7d] relative break-all font-normal"><i
                                                    class="ri-twitter-fill text-[16px] text-[#fff]"></i></a>
                                        </li>
                                        <li class="bb-footer-link leading-[1.5] flex items-center pr-[5px]">
                                            <a href="javascript:void(0)"
                                                class="transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] rounded-[5px] bg-[#3d4750] hover:bg-[#6c7fd8] capitalize flex items-center justify-center text-[15px] leading-[20px] text-[#686e7d] relative break-all font-normal"><i
                                                    class="ri-linkedin-fill text-[16px] text-[#fff]"></i></a>
                                        </li>
                                        <li class="bb-footer-link leading-[1.5] flex items-center pr-[5px]">
                                            <a href="javascript:void(0)"
                                                class="transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] rounded-[5px] bg-[#3d4750] hover:bg-[#6c7fd8] capitalize flex items-center justify-center text-[15px] leading-[20px] text-[#686e7d] relative break-all font-normal"><i
                                                    class="ri-instagram-line text-[16px] text-[#fff]"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom py-[10px] border-t-[1px] border-solid border-[#eee] max-[991px]:py-[15px]">
            <div
                class="flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
                <div class="flex flex-wrap w-full">
                    <div
                        class="bb-bottom-info w-full flex flex-row items-center justify-between max-[991px]:flex-col px-[12px]">
                        <div class="footer-copy max-[991px]:mb-[15px]">
                            <div class="footer-bottom-copy max-[991px]:text-center">
                                <div
                                    class="bb-copy text-[#686e7d] text-[13px] tracking-[1px] text-center font-normal leading-[2]">
                                    Copyright © <span
                                        class="text-[#686e7d] text-[13px] tracking-[1px] text-center font-normal"
                                        id="copyright_year"></span>
                                    <a class="site-name transition-all duration-[0.3s] ease-in-out font-medium text-[#6c7fd8] hover:text-[#3d4750] font-Poppins text-[15px] leading-[28px] tracking-[0.03rem]"
                                        href="https://eftakharmahmud.com/">Saikat Mahmud</a> all rights reserved.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>