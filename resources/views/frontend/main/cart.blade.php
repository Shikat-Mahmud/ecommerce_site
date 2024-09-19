@extends('frontend.layouts.master')
@section('title', '- My Cart')

@section('content')
<!-- Cart -->
<section class="section-cart py-[50px] max-[1199px]:py-[35px]">
    <div
        class="flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
        <div class="flex flex-wrap w-full mb-[-24px]">
            <div class="min-[992px]:w-[33.33%] w-full px-[12px] mb-[24px]">
                <div class="bb-cart-sidebar-block p-[20px] bg-[#f8f8fb] border-[1px] border-solid border-[#eee] rounded-[20px]"
                    data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <div class="bb-sb-title mb-[20px]">
                        <h3
                            class="font-quicksand tracking-[0.03rem] leading-[1.2] text-[20px] font-bold text-[#3d4750]">
                            Summary</h3>
                    </div>
                    <div class="bb-sb-blok-contact">
                        <div class="bb-cart-summary">
                            <div class="inner-summary">
                                <ul>
                                    <li class="mb-[12px] flex justify-between leading-[28px]">
                                        <span
                                            class="text-left font-Poppins leading-[28px] tracking-[0.03rem] text-[14px] text-[#686e7d] font-medium">Sub-Total</span>
                                        <span
                                            class="text-right font-Poppins leading-[28px] tracking-[0.03rem] text-[14px] text-[#686e7d] font-semibold"
                                            id="subtotal">৳{{ number_format($totalAmount, 2) }}</span>
                                    </li>
                                    <li class="mb-[12px] flex justify-between leading-[28px]">
                                        <span
                                            class="text-left font-Poppins leading-[28px] tracking-[0.03rem] text-[14px] text-[#686e7d] font-medium">Delivery
                                            Charges</span>
                                        <span
                                            class="text-right font-Poppins leading-[28px] tracking-[0.03rem] text-[14px] text-[#686e7d] font-semibold">৳00.00</span>
                                    </li>
                                    <li class="mb-[12px] flex justify-between leading-[28px]">
                                        <span
                                            class="text-left font-Poppins leading-[28px] tracking-[0.03rem] text-[14px] text-[#686e7d] font-medium">Coupon
                                            Discount</span>
                                        <span
                                            class="text-right font-Poppins leading-[28px] tracking-[0.03rem] text-[14px] text-[#686e7d] font-semibold">
                                            <a
                                                class="bb-coupon drop-coupon font-Poppins leading-[28px] tracking-[0.03rem] text-[14px] font-medium text-[#ff0000] cursor-pointer">Apply
                                                Coupon</a>
                                        </span>
                                    </li>
                                    <li class="mb-[12px] flex justify-between leading-[28px]">
                                        <div class="coupon-down-box w-full">
                                            <form class="relative mb-[15px]">
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
                                </ul>
                            </div>
                            <div class="summary-total border-t-[1px] border-solid border-[#eee] pt-[15px]">
                                <ul class="mb-[0]">
                                    <li class="mb-[6px] flex justify-between">
                                        <span
                                            class="text-left font-Poppins text-[16px] leading-[28px] tracking-[0.03rem] font-semibold text-[#686e7d]">Total
                                            Amount</span>
                                        <span
                                            class="text-right font-Poppins text-[16px] leading-[28px] tracking-[0.03rem] font-semibold text-[#686e7d]"
                                            id="total">৳{{ number_format($totalAmount, 2) }}</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="min-[992px]:w-[66.66%] w-full px-[12px] mb-[24px]">
                <div class="bb-cart-table border-[1px] border-solid border-[#eee] rounded-[20px] overflow-hidden max-[1399px]:overflow-y-auto"
                    data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400" style="overflow-x: auto;">
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
                                    quality</th>
                                <th
                                    class="font-Poppins p-[12px] text-left text-[16px] font-medium text-[#3d4750] leading-[26px] tracking-[0.02rem] capitalize">
                                    Total</th>
                                <th
                                    class="font-Poppins p-[12px] text-left text-[16px] font-medium text-[#3d4750] leading-[26px] tracking-[0.02rem] capitalize">
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (!$cartItems->isEmpty())
                                @foreach ($cartItems as $cartItem)
                                    @php
                                        $cartImage = $cartItem->attributes['cartImage'];
                                    @endphp
                                    
                                    <tr class="border-b-[1px] border-solid border-[#eee] cart-item"
                                        id="cart-item-{{ $cartItem->id }}">
                                        <td class="p-[12px]">
                                            <a href="{{ route('view.product', $cartItem->id) }}">
                                                <div class="Product-cart flex items-center">
                                                    @if (isset($cartImage))
                                                        <img src="{{ asset('storage/' . $cartImage) }}"
                                                            alt="{{ $cartItem->name }}"
                                                            class="w-[70px] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                    @else
                                                        <img src="{{ asset('frontend/img/new-product/1.jpg') }}" alt="new-product-1"
                                                            class="w-[70px] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                    @endif
                                                    <span
                                                        class="ml-[10px] font-Poppins text-[14px] font-normal leading-[28px] tracking-[0.03rem] text-[#686e7d]">{{ $cartItem->name }}</span>
                                                </div>
                                            </a>
                                        </td>
                                        <td class="p-[12px]">
                                            <span
                                                class="price font-Poppins text-[15px] font-medium leading-[26px] tracking-[0.02rem] text-[#686e7d]"
                                                data-price="{{ $cartItem->price }}">৳{{ number_format($cartItem->price, 2) }}</span>
                                        </td>

                                        <td class="p-[12px]">
                                            <div class="h-[45px] py-[7px] border-[1px] border-solid border-[#eee] overflow-hidden relative flex items-center justify-between bg-[#fff] rounded-[10px]">
                                                <button class="minus px-[10px] text-[#777] text-[20px] bg-transparent border-none" id="{{ $cartItem->id }}" onclick="decrementQuantity('{{ $cartItem->id }}')">-</button>
                                                <input id="cart-item-quantity-{{ $cartItem->id }}" class="text-[#777] text-[14px] m-[0] p-[0] text-center w-[32px] outline-none bg-transparent border-none qty-input" type="text" value="{{ $cartItem->quantity }}" readonly>
                                                <button class="plus px-[10px] text-[#777] text-[20px] bg-transparent border-none" id="{{ $cartItem->id }}" onclick="incrementQuantity('{{ $cartItem->id }}')">+</button>
                                            </div>
                                        </td>

                                        <td class="p-[12px]">
                                            <input type="hidden" id="unit-price-{{ $cartItem->id }}" value="{{ $cartItem->price }}">
                                            <span  id="total-price-{{ $cartItem->id }}"
                                                class="total-price font-Poppins text-[15px] font-medium leading-[26px] tracking-[0.02rem] text-[#686e7d]">৳{{ number_format($cartItem->price * $cartItem->quantity, 2) }}</span>
                                        </td>

                                        <td class="p-[12px]">
                                            <div class="pro-remove">
                                                <a href="javascript:void(0)" onclick="removeCartItem({{ $cartItem->id }})">
                                                    <i
                                                        class="ri-delete-bin-line transition-all duration-[0.3s] ease-in-out text-[20px] text-[#686e7d] hover:text-[#ff0000]"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr class="border-b-[1px] border-solid border-[#eee]">
                                    <td colspan="5" class="py-5 text-center">
                                        <p>Cart is empty!</p>
                                    </td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
                <a href="{{ $cartItems->isEmpty() ? 'javascript:void(0)' : route('checkout') }}"
                    class="bb-btn-2 mt-[24px] inline-flex items-center justify-center check-btn transition-all duration-[0.3s] ease-in-out font-Poppins leading-[28px] tracking-[0.03rem] py-[8px] px-[20px] text-[14px] font-normal text-[#fff] bg-[#6c7fd8] rounded-[10px] border-[1px] border-solid border-[#6c7fd8] hover:bg-transparent hover:border-[#3d4750] hover:text-[#3d4750]"
                    data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">Check Out</a>
            </div>
        </div>
    </div>
</section>
@endsection

<script>
    function removeCartItem(itemId) {
        $.ajax({
            url: '/remove-cart/' + itemId,
            type: 'DELETE',
            data: {
                _token: $('meta[name="csrf-token"]').attr('content') // Fetch CSRF token from meta
            },
            success: function (response) {
                toastr.success(response.success);
                // Remove the cart item from the DOM
                $('#cart-item-' + itemId).remove();
                updateCartTotals(); // Update totals after removal
            },
            error: function (response) {
                toastr.error(response.responseJSON.error || 'Something went wrong!');
            }
        });
    }

    function incrementQuantity(itemId) {
    $.ajax({
        url: '/increment-cart/' + itemId,
        type: 'GET',
        dataType: 'json',
        success: function (data) {
            let quantityInput = $('#cart-item-quantity-' + itemId);
            let newQuantity = parseInt(quantityInput.val()) + 1;
            quantityInput.val(newQuantity);

            // Update total price for this item
            let unitPrice = parseFloat($('#unit-price-' + itemId).val());
            let newTotalPrice = (unitPrice * newQuantity).toFixed(2);
            $('#total-price-' + itemId).text('৳' + newTotalPrice);

            updateCartTotals();  // Update overall totals
        },
        error: function (data) {
            console.error('Error incrementing quantity');
        }
    });
}

function decrementQuantity(itemId) {
    $.ajax({
        url: '/decrement-cart/' + itemId,
        type: 'GET',
        dataType: 'json',
        success: function (data) {
            let quantityInput = $('#cart-item-quantity-' + itemId);
            let newQuantity = parseInt(quantityInput.val()) - 1;

            if (newQuantity >= 1) {
                quantityInput.val(newQuantity);

                // Update total price for this item
                let unitPrice = parseFloat($('#unit-price-' + itemId).val());
                let newTotalPrice = (unitPrice * newQuantity).toFixed(2);
                $('#total-price-' + itemId).text('৳' + newTotalPrice);
            }

            updateCartTotals();  // Update overall totals
        },
        error: function (data) {
            console.error('Error decrementing quantity');
        }
    });
}

function updateCartTotals() {
    let subtotal = 0;

    $('.cart-item').each(function () {
        const price = parseFloat($(this).find('.price').data('price'));
        const quantity = parseInt($(this).find('.qty-input').val());

        if (!isNaN(price) && !isNaN(quantity)) {
            subtotal += price * quantity;
        }
    });

    // Update subtotal and total in the DOM
    $('#subtotal').text('৳' + subtotal.toFixed(2));
    $('#total').text('৳' + subtotal.toFixed(2));
}

</script>

