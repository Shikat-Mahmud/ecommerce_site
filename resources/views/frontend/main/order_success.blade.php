@extends('frontend.layouts.master')
@section('title', '- Order Success')

@section('content')
<!-- Order Success -->
<section class="section-order-success py-[50px] max-[1199px]:py-[35px]">
    <div
        class="flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
        <div class="w-full mb-[-24px] text-center">
            <div class="m-3 flex justify-center">
                <img src="{{ asset('frontend/img/tick.jpg') }}" alt="Confirmed" style="height: 80px;">
            </div>
            <!-- Order Placed Successfully -->
            <h2 class="font-quicksand tracking-[0.03rem] leading-[1.2] text-[30px] font-bold text-[#3d4750] mb-[20px]">
                Order Placed Successfully
            </h2>
            <p class="font-Poppins text-[16px] text-[#686e7d] mb-[60px]">Thank you for your purchase! Your order has
                been placed successfully.</p>
        </div>

        <div class="w-full mb-[24px]">
            <div class="bb-cart-table border-[1px] border-solid border-[#eee] rounded-[20px] overflow-hidden max-[1399px]:overflow-y-auto"
                data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                <!-- Order Summary Table -->
                <table class="w-full max-[1399px]:w-[780px]">
                    <thead>
                        <tr class="border-b-[1px] border-solid border-[#eee]">
                            <th
                                class="font-Poppins p-[12px] text-left text-[16px] font-medium text-[#3d4750] leading-[26px] tracking-[0.02rem] capitalize">
                                Product</th>
                            <th
                                class="font-Poppins p-[12px] text-left text-[16px] font-medium text-[#3d4750] leading-[26px] tracking-[0.02rem] capitalize">
                                Price</th>
                            <th
                                class="font-Poppins p-[12px] text-left text-[16px] font-medium text-[#3d4750] leading-[26px] tracking-[0.02rem] capitalize">
                                Quantity</th>
                            <th
                                class="font-Poppins p-[12px] text-left text-[16px] font-medium text-[#3d4750] leading-[26px] tracking-[0.02rem] capitalize">
                                Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orderItems as $orderItem)
                            <tr class="border-b-[1px] border-solid border-[#eee]">
                                <td class="p-[12px]">
                                    <span
                                        class="ml-[10px] font-Poppins text-[14px] font-normal leading-[28px] tracking-[0.03rem] text-[#686e7d]">{{ $orderItem->product->name }}</span>
                                </td>
                                <td class="p-[12px]">
                                    <span
                                        class="font-Poppins text-[15px] font-medium leading-[26px] tracking-[0.02rem] text-[#686e7d]">৳{{ $orderItem->product->price }}</span>
                                </td>
                                <td class="p-[12px]">
                                    <span
                                        class="font-Poppins text-[15px] font-medium leading-[26px] tracking-[0.02rem] text-[#686e7d]">{{ $orderItem->quantity }}</span>
                                </td>
                                <td class="p-[12px]">
                                    <span
                                        class="font-Poppins text-[15px] font-medium leading-[26px] tracking-[0.02rem] text-[#686e7d]">৳{{ number_format($orderItem->product->price * $orderItem->quantity, 2) }}</span>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Summary & Actions -->
        <div class="w-full">
            <div class="bb-cart-sidebar-block p-[20px] bg-[#f8f8fb] border-[1px] border-solid border-[#eee] rounded-[20px]"
                data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                <div class="bb-cart-summary">
                    <div class="inner-summary">
                        <ul>
                            <li class="mb-[12px] flex justify-between leading-[28px]">
                                <span
                                    class="text-left font-Poppins leading-[28px] tracking-[0.03rem] text-[14px] text-[#686e7d] font-medium">Sub-Total</span>
                                <span
                                    class="text-right font-Poppins leading-[28px] tracking-[0.03rem] text-[14px] text-[#686e7d] font-semibold">
                                    ৳{{ number_format($totalAmount, 2) }}
                                </span>
                            </li>
                            <li class="mb-[12px] flex justify-between leading-[28px]">
                                <span
                                    class="text-left font-Poppins leading-[28px] tracking-[0.03rem] text-[14px] text-[#686e7d] font-medium">Delivery
                                    Charges</span>
                                <span
                                    class="text-right font-Poppins leading-[28px] tracking-[0.03rem] text-[14px] text-[#686e7d] font-semibold">
                                    ৳00.00
                                </span>
                            </li>
                            <li
                                class="mb-[12px] flex justify-between leading-[28px] border-t-[1px] border-solid border-[#eee] pt-[15px]">
                                <span
                                    class="text-left font-Poppins text-[16px] leading-[28px] tracking-[0.03rem] font-semibold text-[#686e7d]">Total
                                    Amount</span>
                                <span
                                    class="text-right font-Poppins text-[16px] leading-[28px] tracking-[0.03rem] font-semibold text-[#686e7d]">
                                    ৳{{ number_format($totalAmount, 2) }}
                                </span>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>

        <!-- Buttons -->
        <div class="w-full text-center mt-[20px]">
            <button
                class="bb-btn-2 mr-[10px] inline-flex items-center justify-center print-btn transition-all duration-[0.3s] ease-in-out font-Poppins leading-[28px] tracking-[0.03rem] py-[8px] px-[20px] text-[14px] font-normal text-[#fff] bg-[#6c7fd8] rounded-[10px] border-[1px] border-solid border-[#6c7fd8] hover:bg-transparent hover:border-[#3d4750] hover:text-[#3d4750]"
                onclick="window.print()">Print</button>

            <a href="{{ route('home') }}"
                class="bb-btn-2 inline-flex items-center justify-center back-btn transition-all duration-[0.3s] ease-in-out font-Poppins leading-[28px] tracking-[0.03rem] py-[8px] px-[20px] text-[14px] font-normal text-[#fff] bg-[#6c7fd8] rounded-[10px] border-[1px] border-solid border-[#6c7fd8] hover:bg-transparent hover:border-[#3d4750] hover:text-[#3d4750]">Back
                To Home</a>
        </div>
    </div>
</section>
@endsection