<div class="bb-modal-overlay w-full h-screen hidden fixed top-0 left-0 z-[26] bg-[#000000b3]"></div>
<div
    class="bb-modal quickview-modal max-[575px]:w-full fixed top-[45%] max-[767px]:top-[50%] left-[50%] z-[30] max-[767px]:w-full hidden max-[767px]:max-h-full max-[767px]:overflow-y-auto">
    <div
        class="bb-modal-dialog h-full my-[0%] mx-auto max-w-[700px] w-[700px] max-[991px]:max-w-[650px] max-[991px]:w-[650px] max-[767px]:w-[80%] max-[767px]:h-auto max-[767px]:max-w-[80%] max-[767px]:m-[0] max-[767px]:py-[35px] max-[767px]:mx-auto max-[575px]:w-[90%] transition-transform duration-[0.3s] ease-out cr-fadeOutUp">
        <div class="modal-content p-[24px] relative bg-[#fff] rounded-[20px] overflow-hidden">
            <button type="button"
                class="bb-close-modal transition-all duration-[0.3s] ease-in-out w-[16px] h-[20px] absolute top-[-5px] right-[27px] bg-[#e04e4eb3] rounded-[10px] cursor-pointer hover:bg-[#e04e4e]"
                title="Close"></button>
            <div class="modal-body mx-[-12px] max-[767px]:mx-[0]">
                <div class="flex flex-wrap mx-[-12px] mb-[-24px]">
                    <div class="min-[768px]:w-[41.66%] min-[576px]:w-full px-[12px] mb-[24px]">
                        <div
                            class="single-pro-img single-pro-img-no-sidebar h-full border-[1px] border-solid border-[#eee] overflow-hidden rounded-[20px]">
                            <div class="single-product-scroll h-full">
                                <div class="single-slide zoom-image-hover h-full bg-[#fff] flex items-center">
                                    <img class="img-responsive max-w-full block product-image" src=""
                                        alt="Product Image">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="min-[768px]:w-[58.33%] min-[576px]:w-full px-[12px] mb-[24px]">
                        <div class="quickview-pro-content">
                            <h5 class="bb-quick-title">
                                <a href="#"
                                    class="font-Poppins tracking-[0.03rem] mb-[10px] block text-[#3d4750] text-[20px] leading-[30px] font-medium product-name">Product
                                    Name</a>
                            </h5>
                            <div class="bb-pro-rating flex mb-[10px]">
                                <!-- Product rating stars (static or dynamic) -->
                            </div>
                            <div
                                class="bb-quickview-desc mb-[10px] text-[15px] leading-[24px] text-[#777] font-light product-description">
                                Product Description
                            </div>
                            <div class="bb-quickview-price pt-[5px] pb-[10px] flex items-center justify-left">
                                <span
                                    class="new-price px-[3px] text-[16px] text-[#686e7d] font-bold product-price">৳0</span>
                            </div>
                            <div class="bb-pro-variation mt-[15px] mb-[25px]">
                                <!-- Variations or options for the product (e.g., sizes) -->
                            </div>
                            <div class="bb-quickview-qty flex max-[360px]:justify-center">
                                <form action="#" method="POST" class="flex items-center space-x-2 add-to-cart-form">
                                    @csrf
                                    <div
                                        class="qty-plus-minus w-[85px] h-[40px] py-[7px] border-[1px] border-solid border-[#eee] flex items-center justify-between bg-[#fff] rounded-[10px]">
                                        <input
                                            class="qty-input text-[#777] text-[14px] text-center w-[32px] outline-none font-normal leading-[35px] rounded-[10px]"
                                            type="num" name="quantity" value="1" min="1" readonly>
                                    </div>
                                    <button type="submit"
                                        class="bb-btn-2 transition-all duration-[0.3s] ease-in-out h-[40px] py-[6px] px-[25px] text-[14px] font-normal text-[#fff] bg-[#6c7fd8] rounded-[10px] border-[1px] border-solid border-[#6c7fd8] hover:bg-transparent hover:border-[#3d4750] hover:text-[#3d4750]">
                                        Add To Cart
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>