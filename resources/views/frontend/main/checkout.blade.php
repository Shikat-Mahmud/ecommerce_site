@extends('frontend.layouts.master')
@section('title', '- Checkout')

@section('content')
<!-- Breadcrumb -->
<section
    class="section-breadcrumb mb-[50px] max-[1199px]:mb-[35px] border-b-[1px] border-solid border-[#eee] bg-[#f8f8fb]">
    <div
        class="flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
        <div class="flex flex-wrap w-full">
            <div class="w-full px-[12px]">
                <div class="flex flex-wrap w-full bb-breadcrumb-inner m-[0] py-[20px] items-center">
                    <div class="min-[768px]:w-[50%] min-[576px]:w-full w-full px-[12px]">
                        <h2
                            class="bb-breadcrumb-title font-quicksand tracking-[0.03rem] leading-[1.2] text-[16px] font-bold text-[#3d4750] max-[767px]:text-center max-[767px]:mb-[10px]">
                            Checkout</h2>
                    </div>
                    <div class="min-[768px]:w-[50%] min-[576px]:w-full w-full px-[12px]">
                        <ul class="bb-breadcrumb-list mx-[-5px] flex justify-end max-[767px]:justify-center">
                            <li class="bb-breadcrumb-item text-[14px] font-normal px-[5px]"><a
                                    href="{{ route('home') }}"
                                    class="font-Poppins text-[14px] leading-[28px] tracking-[0.03rem] font-semibold text-[#686e7d]">Home</a>
                            </li>
                            <li class="text-[14px] font-normal px-[5px]"><i
                                    class="ri-arrow-right-double-fill text-[14px] font-semibold leading-[28px]"></i>
                            </li>
                            <li
                                class="bb-breadcrumb-item font-Poppins text-[#686e7d] text-[14px] leading-[28px] font-normal tracking-[0.03rem] px-[5px] active">
                                Checkout</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- checkout -->
<section class="section-checkout py-[50px] max-[1199px]:py-[35px]">
    <div
        class="flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
        <div class="flex flex-wrap w-full mb-[-24px]">
            <div class="min-[992px]:w-[33.33%] w-full px-[12px] mb-[24px]">
                <div class="bb-checkout-sidebar mb-[-24px]">
                    <div class="checkout-items border-[1px] border-solid border-[#eee] p-[20px] rounded-[20px] mb-[24px]"
                        data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                        <div class="sub-title mb-[12px]">
                            <h4
                                class="font-quicksand tracking-[0.03rem] leading-[1.2] text-[20px] font-bold text-[#3d4750]">
                                summary</h4>
                        </div>
                        <div class="checkout-summary mb-[20px] border-b-[1px] border-solid border-[#eee]">
                            <ul class="mb-[20px]">
                                <li class="flex justify-between leading-[28px] mb-[8px]">
                                    <span
                                        class="left-item font-Poppins leading-[28px] tracking-[0.03rem] text-[14px] font-medium text-[#686e7d]">sub-total</span>
                                    <span
                                        class="font-Poppins leading-[28px] tracking-[0.03rem] text-[14px] font-medium text-[#686e7d]">৳{{ number_format($subTotalAmount, 2) }}</span>
                                </li>
                                <li class="flex justify-between leading-[28px] mb-[8px]">
                                    <span
                                        class="left-item font-Poppins leading-[28px] tracking-[0.03rem] text-[14px] font-medium text-[#686e7d]">Delivery
                                        Charges</span>
                                    <span
                                        class="font-Poppins leading-[28px] tracking-[0.03rem] text-[14px] font-medium text-[#686e7d]">৳{{ number_format($deliveryCharge, 2) }}</span>
                                </li>
                                <li class="flex justify-between leading-[28px] mb-[8px]">
                                    <span
                                        class="left-item font-Poppins leading-[28px] tracking-[0.03rem] text-[14px] font-medium text-[#686e7d]">Coupon
                                        Discount</span>
                                    <span
                                        class="font-Poppins leading-[28px] tracking-[0.03rem] text-[14px] font-medium text-[#686e7d]">
                                        <a href="javascript:void(0)"
                                            class="apply drop-coupon font-Poppins leading-[28px] tracking-[0.03rem] text-[14px] font-medium text-[#ff0000]">Apply
                                            Coupon</a>
                                    </span>
                                </li>
                                <li class="flex justify-between leading-[28px]">
                                    <div class="coupon-down-box w-full">
                                        <form class="relative">
                                            <input
                                                class="bb-coupon w-full p-[10px] text-[14px] font-normal text-[#686e7d] border-[1px] border-solid border-[#eee] outline-[0] rounded-[10px]"
                                                type="text" placeholder="Enter Your coupon Code" name="bb-coupon"
                                                required>
                                            <button
                                                class="bb-btn-2 transition-all duration-[0.3s] ease-in-out my-[8px] mr-[8px] flex justify-center items-center absolute right-[0] top-[0] bottom-[0] font-Poppins leading-[28px] tracking-[0.03rem] py-[2px] px-[12px] text-[13px] font-normal text-[#fff] bg-[#6c7fd8] rounded-[10px] border-[1px] border-solid border-[#6c7fd8] hover:bg-transparent hover:border-[#3d4750] hover:text-[#3d4750]"
                                                type="submit">Apply</button>
                                        </form>
                                    </div>
                                </li>
                                <hr class="mt-[10px] mb-[8px]">
                                <li class="flex justify-between leading-[28px] mb-[8px]">
                                    <span class="text-left font-Poppins text-[16px] leading-[28px] tracking-[0.03rem] font-semibold text-[#686e7d]">Total Amount</span>
                                    <span class="text-right font-Poppins text-[16px] leading-[28px] tracking-[0.03rem] font-semibold text-[#686e7d]" id="total">৳{{ number_format($totalAmount, 2) }}</span>
                                </li>
                            </ul>
                        </div>
                        
                        <div class="bb-checkout-pro mb-[-24px]">

                            <!-- single item  -->
                            @if (!$cartItems->isEmpty())
                                @foreach ($cartItems as $cartItem)
                                    @php
                                        $cartImage = $cartItem->attributes['cartImage'];
                                    @endphp

                                    <div
                                        class="pro-items p-[15px] bg-[#f8f8fb] border-[1px] border-solid border-[#eee] rounded-[20px] flex mb-[24px] max-[420px]:flex-col">
                                        <div class="image mr-[15px] max-[420px]:mr-[0] max-[420px]:mb-[15px]">
                                            @if (isset($cartImage))
                                                <img src="{{ asset('storage/' . $cartImage) }}"
                                                    alt="{{ $cartItem->name }}"
                                                    class="max-w-max w-[100px] h-[100px] border-[1px] border-solid border-[#eee] rounded-[20px] max-[1399px]:h-[80px] max-[1399px]:w-[80px]">
                                            @else
                                                <img src="{{ asset('frontend/img/new-product/1.jpg') }}" alt="new-product-1"
                                                    class="max-w-max w-[100px] h-[100px] border-[1px] border-solid border-[#eee] rounded-[20px] max-[1399px]:h-[80px] max-[1399px]:w-[80px]">
                                            @endif
                                        </div>
                                        <div class="items-contact">
                                            <h4 class="text-[16px]"><a
                                                    href="{{ route('view.product', $cartItem->id) }}"
                                                    class="font-Poppins tracking-[0.03rem] text-[15px] font-medium leading-[18px] text-[#3d4750]">{{ $cartItem->name }}</a>
                                            </h4>
                                            <span class="bb-pro-rating flex">
                                                <i class="ri-star-fill float-left text-[15px] mr-[3px] text-[#fea99a]"></i>
                                                <i class="ri-star-fill float-left text-[15px] mr-[3px] text-[#fea99a]"></i>
                                                <i class="ri-star-fill float-left text-[15px] mr-[3px] text-[#fea99a]"></i>
                                                <i class="ri-star-fill float-left text-[15px] mr-[3px] text-[#fea99a]"></i>
                                                <i class="ri-star-line float-left text-[15px] mr-[3px] text-[#777]"></i>
                                            </span>
                                            <div class="inner-price flex items-center justify-left mb-[4px]">
                                                <span
                                                    class="new-price font-Poppins text-[#3d4750] font-semibold leading-[26px] tracking-[0.02rem] text-[15px]">৳{{ $cartItem->price }}</span>
                                            </div>
                                            <div class="bb-pro-variation">
                                                <ul class="flex flex-wrap m-[-2px]">
                                                    <li
                                                        class="h-[22px] m-[2px] py-[2px] px-[8px] cursor-pointer border-[1px] border-solid border-[#eee] text-[#777] flex items-center justify-center text-[12px] leading-[22px] rounded-[20px] font-normal active">
                                                        <a href="javascript:void(0)"
                                                            class="bb-opt-sz font-Poppins text-[12px] leading-[22px] font-normal text-[#777] tracking-[0.03rem]"
                                                            data-tooltip="Small">{{ $cartItem->quantity }} Pcs</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif

                        </div>
                    </div>

                    <div class="checkout-items border-[1px] border-solid border-[#eee] p-[20px] rounded-[20px] mb-[24px]"
                        data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                        <div class="sub-title mb-[12px]">
                            <h4
                                class="font-quicksand tracking-[0.03rem] leading-[1.2] text-[20px] font-bold text-[#3d4750]">
                                Payment Method</h4>
                        </div>
                        <div class="checkout-method mb-[24px]">
                            <span
                                class="details font-Poppins leading-[26px] tracking-[0.02rem] text-[15px] font-medium text-[#686e7d]">Please
                                select the preferred shipping method to use on this
                                order.</span>
                            <div class="bb-del-option mt-[12px] flex max-[480px]:flex-col">
                                <div class="inner-del w-[50%] max-[480px]:w-full">
                                    <div class="radio-itens">
                                        <input type="radio" id="Cash1" name="radio-items"
                                            class="w-full p-[10px] text-[14px] font-normal text-[#686e7d] border-[1px] border-solid border-[#eee] outline-[0] rounded-[10px]" 
                                            checked>
                                        <label for="Cash1"
                                            class="relative pl-[26px] cursor-pointer leading-[16px] inline-block text-[#686e7d] tracking-[0]">Cash
                                            On Delivery</label>
                                    </div>
                                </div>
                                <div class="inner-del w-[50%] max-[480px]:w-full">
                                    <div class="radio-itens">
                                        <input type="radio" id="Cash2" name="radio-items"
                                            class="w-full p-[10px] text-[14px] font-normal text-[#686e7d] border-[1px] border-solid border-[#eee] outline-[0] rounded-[10px]">
                                        <label for="Cash2"
                                            class="relative pl-[26px] cursor-pointer leading-[16px] inline-block text-[#686e7d] tracking-[0]">Card</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="about-order">
                            <h5
                                class="font-quicksand tracking-[0.03rem] leading-[1.2] mb-[12px] text-[15px] font-medium text-[#686e7d]">
                                Add Comments About Your Order</h5>
                            <textarea name="your-commemt" placeholder="Comments"
                                class="w-full h-[100px] p-[10px] text-[14px] font-normal text-[#686e7d] border-[1px] border-solid border-[#eee] outline-[0] rounded-[10px]"></textarea>
                        </div>
                    </div>
                    <div class="checkout-items border-[1px] border-solid border-[#eee] p-[20px] rounded-[20px] mb-[24px]"
                        data-aos="fade-up" data-aos-duration="1000" data-aos-delay="800">
                        <div class="sub-title mb-[12px]">
                            <h4
                                class="font-quicksand tracking-[0.03rem] leading-[1.2] text-[20px] font-bold text-[#3d4750]">
                                Payment Method</h4>
                        </div>
                        <div class="payment-img">
                            <img src="{{ asset('frontend/img/payment/payment.png') }}" alt="payment" class="w-full">
                        </div>
                    </div>
                </div>
            </div>
            <div class="min-[992px]:w-[66.66%] w-full px-[12px] mb-[24px]">
                <div class="bb-checkout-contact border-[1px] border-solid border-[#eee] p-[20px] rounded-[20px]"
                    data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                    <div class="main-title mb-[20px]">
                        <h4
                            class="font-quicksand tracking-[0.03rem] leading-[1.2] text-[20px] font-bold text-[#3d4750]">
                            Billing Details</h4>
                    </div>

                    <div class="input-box-form mt-[20px]">
                        <form action="{{ isset($billingDetail) ? route('update.billing.detail', $billingDetail->id) : route('store.billing.detail') }}" method="POST">
                            @csrf
                            @if(isset($billingDetail))
                                @method('PUT')
                            @endif
                            <div class="flex flex-wrap mx-[-12px]">
                                <div class="min-[992px]:w-[50%] w-full px-[12px]">
                                    <div class="input-item mb-[24px]">
                                        <label for="fname"
                                            class="inline-block font-Poppins leading-[26px] tracking-[0.02rem] mb-[8px] text-[14px] font-medium text-[#3d4750]">First Name <span class="text-[#ff0000]">*</span></label>
                                        <input 
                                            type="text" 
                                            name="fname" 
                                            id="fname" 
                                            placeholder="Enter your first name"
                                            value="{{ $billingDetail->fname ?? $user->name ?? '' }}"
                                            class="w-full p-[10px] text-[14px] font-normal text-[#686e7d] border-[1px] border-solid border-[#eee] leading-[26px] outline-[0] rounded-[10px]"
                                            required>
                                    </div>
                                </div>

                                <div class="min-[992px]:w-[50%] w-full px-[12px]">
                                    <div class="input-item mb-[24px]">
                                        <label for="lname"
                                            class="inline-block font-Poppins leading-[26px] tracking-[0.02rem] mb-[8px] text-[14px] font-medium text-[#3d4750]">Last Name </label>
                                        <input type="text" 
                                            name="lname" 
                                            id="lname" 
                                            placeholder="Enter your last name"
                                            value="{{ $billingDetail->lname ?? '' }}"
                                            class="w-full p-[10px] text-[14px] font-normal text-[#686e7d] border-[1px] border-solid border-[#eee] leading-[26px] outline-[0] rounded-[10px]"
                                            >
                                    </div>
                                </div>

                                <div class="min-[992px]:w-[50%] w-full px-[12px]">
                                    <div class="input-item mb-[24px]">
                                        <label for="phone"
                                            class="inline-block font-Poppins leading-[26px] tracking-[0.02rem] mb-[8px] text-[14px] font-medium text-[#3d4750]">Phone No <span class="text-[#ff0000]">*</span></label>
                                        <input 
                                            type="text" 
                                            name="phone" 
                                            id="phone" 
                                            placeholder="Enter your phone no"
                                            value="{{ $billingDetail->phone ?? $user->phone ?? '' }}"
                                            class="w-full p-[10px] text-[14px] font-normal text-[#686e7d] border-[1px] border-solid border-[#eee] leading-[26px] outline-[0] rounded-[10px]"
                                            required>
                                    </div>
                                </div>

                                <div class="min-[992px]:w-[50%] w-full px-[12px]">
                                    <div class="input-item mb-[24px]">
                                        <label for="email"
                                            class="inline-block font-Poppins leading-[26px] tracking-[0.02rem] mb-[8px] text-[14px] font-medium text-[#3d4750]">Email </label>
                                        <input 
                                            type="text" 
                                            name="email" 
                                            id="email" 
                                            placeholder="Enter your email"
                                            value="{{ $billingDetail->email ?? $user->email ?? '' }}"
                                            class="w-full p-[10px] text-[14px] font-normal text-[#686e7d] border-[1px] border-solid border-[#eee] leading-[26px] outline-[0] rounded-[10px]"
                                            >
                                    </div>
                                </div>

                                <div class="w-full px-[12px]">
                                    <div class="input-item mb-[24px]">
                                        <label for="address"
                                            class="inline-block font-Poppins leading-[26px] tracking-[0.02rem] mb-[8px] text-[14px] font-medium text-[#3d4750]">Address <span class="text-[#ff0000]">*</span></label>
                                        <input 
                                            type="text" 
                                            name="address" 
                                            id="address" 
                                            placeholder="Address Line 1"
                                            value="{{ $billingDetail->address ?? $user->address ?? '' }}"
                                            class="w-full p-[10px] text-[14px] font-normal text-[#686e7d] border-[1px] border-solid border-[#eee] leading-[26px] outline-[0] rounded-[10px]"
                                            required>
                                    </div>
                                </div>

                                <div class="min-[992px]:w-[50%] w-full px-[12px]">
                                    <div class="input-item mb-[24px]">
                                        <label for="city" class="inline-block font-Poppins leading-[26px] tracking-[0.02rem] mb-[8px] text-[14px] font-medium text-[#3d4750]">City <span class="text-[#ff0000]">*</span></label>
                                        <input 
                                            type="text" 
                                            name="city" 
                                            id="city" 
                                            placeholder="Enter your city" 
                                            value="{{ $billingDetail->city ?? '' }}" 
                                            class="w-full p-[10px] text-[14px] font-normal text-[#686e7d] border-[1px] border-solid border-[#eee] leading-[26px] outline-[0] rounded-[10px]"
                                            required>
                                    </div>
                                </div>

                                <div class="min-[992px]:w-[50%] w-full px-[12px]">
                                    <div class="input-item mb-[24px]">
                                        <label for="postal_code" class="inline-block font-Poppins leading-[26px] tracking-[0.02rem] mb-[8px] text-[14px] font-medium text-[#3d4750]">Post Code <span class="text-[#ff0000]">*</span></label>
                                        <input 
                                            type="text" 
                                            name="postal_code" 
                                            id="postal_code" 
                                            placeholder="Enter your post code" 
                                            value="{{ $billingDetail->postal_code ?? '' }}" 
                                            class="w-full p-[10px] text-[14px] font-normal text-[#686e7d] border-[1px] border-solid border-[#eee] leading-[26px] outline-[0] rounded-[10px]"
                                            required>
                                    </div>
                                </div>

                                <div class="min-[992px]:w-[50%] w-full px-[12px]">
                                    <div class="input-item mb-[24px]">
                                        <label for="country" class="inline-block font-Poppins leading-[26px] tracking-[0.02rem] mb-[8px] text-[14px] font-medium text-[#3d4750]">Country <span class="text-[#ff0000]">*</span></label>
                                        <input 
                                            type="text" 
                                            name="country" 
                                            id="country" 
                                            placeholder="Enter your country" 
                                            value="{{ $billingDetail->country ?? '' }}" 
                                            class="w-full p-[10px] text-[14px] font-normal text-[#686e7d] border-[1px] border-solid border-[#eee] leading-[26px] outline-[0] rounded-[10px]"
                                            required>
                                    </div>
                                </div>

                                <div class="min-[992px]:w-[50%] w-full px-[12px]">
                                    <div class="input-item mb-[24px]">
                                        <label for="state" class="inline-block font-Poppins leading-[26px] tracking-[0.02rem] mb-[8px] text-[14px] font-medium text-[#3d4750]">Region/State <span class="text-[#ff0000]">*</span></label>
                                        <input 
                                            type="text" 
                                            name="state" 
                                            id="state" 
                                            placeholder="Enter your state or state" 
                                            value="{{ $billingDetail->state ?? '' }}" 
                                            class="w-full p-[10px] text-[14px] font-normal text-[#686e7d] border-[1px] border-solid border-[#eee] leading-[26px] outline-[0] rounded-[10px]"
                                            required>
                                    </div>
                                </div>
                                
                                <div class="w-full px-[12px]">
                                    <div class="input-button">
                                        <button type="submit"
                                            class="bb-btn-2 inline-block items-center justify-center check-btn transition-all duration-[0.3s] ease-in-out font-Poppins leading-[28px] tracking-[0.03rem] py-[4px] px-[25px] text-[14px] font-normal text-[#fff] bg-[#6c7fd8] rounded-[10px] border-[1px] border-solid border-[#6c7fd8] hover:bg-transparent hover:border-[#3d4750] hover:text-[#3d4750]">
                                            {{ isset($billingDetail) ? 'Place Order' : 'Save Billing Details & Place Order' }}
                                        </button>
                                    </div>
                                </div>
                            </div>
                                
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection