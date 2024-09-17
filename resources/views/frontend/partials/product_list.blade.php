@if (!$products->isEmpty())
    @foreach ($products as $product)
        <div class="min-[768px]:w-[33.33%] w-[50%] max-[480px]:w-full px-[12px] mb-[24px] pro-bb-content" data-aos="fade-up"
            data-aos-duration="1000" data-aos-delay="200">
            <div class="bb-pro-box bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[20px]">
                <div class="bb-pro-img overflow-hidden relative border-b-[1px] border-solid border-[#eee] z-[4]">
                    <a href="{{ route('view.product', $product->id)}}">
                        @if (isset($product->image))
                            <div class="inner-img relative block overflow-hidden pointer-events-none rounded-t-[20px]">
                                <img class="main-img transition-all duration-[0.3s] ease-in-out w-full"
                                    src="{{ asset('storage/' . $product->image) }}" alt="product-1">
                                <img class="hover-img transition-all duration-[0.3s] ease-in-out absolute z-[2] top-[0] left-[0] opacity-[0] w-full"
                                    src="{{ asset('storage/' . $product->image) }}" alt="product-1">
                            </div>
                        @else
                            <div class="inner-img relative block overflow-hidden pointer-events-none rounded-t-[20px]">
                                <img class="main-img transition-all duration-[0.3s] ease-in-out w-full"
                                    src="{{ asset('frontend/img/new-product/1.jpg') }}" alt="product-1">
                                <img class="hover-img transition-all duration-[0.3s] ease-in-out absolute z-[2] top-[0] left-[0] opacity-[0] w-full"
                                    src="{{ asset('frontend/img/new-product/back-1.jpg') }}" alt="product-1">
                            </div>
                        @endif
                    </a>
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
                            <form action="{{ route('single.add.to.cart', $product->id) }}" method="post">
                                @csrf
                                <button type="submit" title="Add To Cart"
                                    class="w-[35px] h-[35px] flex items-center justify-center">
                                    <i
                                        class="ri-shopping-cart-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
                <div class="bb-pro-contact p-[20px]">
                    <div class="bb-pro-subtitle mb-[8px] flex flex-wrap justify-between">
                        <a href="{{ route('category.product', $product->category->id) }}"
                            class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[13px] leading-[16px] text-[#777] font-light tracking-[0.03rem]">{{ $product->category->name }}</a>
                        <span class="bb-pro-rating">
                            <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                            <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                            <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                            <i class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                            <i class="ri-star-line float-left text-[15px] mr-[3px] leading-[18px] text-[#777]"></i>
                        </span>
                    </div>
                    <h4 class="bb-pro-title mb-[8px] text-[16px] leading-[18px]">
                        <a href="{{ route('view.product', $product->id)}}"
                            class="transition-all duration-[0.3s] ease-in-out font-quicksand w-full block whitespace-nowrap overflow-hidden text-ellipsis text-[15px] leading-[18px] text-[#3d4750] font-semibold tracking-[0.03rem]">{{ $product->name }}</a>
                    </h4>
                    <p class="hidden font-Poppins text-[14px] text-[#686e7d] font-light leading-[28px] tracking-[0.03rem]">
                        {{ $product->description }}
                    </p>
                    <div class="bb-price flex flex-wrap justify-between">
                        <div class="inner-price mx-[-3px]">
                            <span class="new-price px-[3px] text-[16px] text-[#686e7d] font-bold">৳{{ $product->price }}</span>
                        </div>
                        <!-- <span class="last-items text-[14px] text-[#686e7d]">500g</span> -->
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@else
    <div class="w-full my-5 flex justify-center">
        <p>
            No Product Found!
        </p>
    </div>
@endif