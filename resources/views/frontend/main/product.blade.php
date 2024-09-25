@extends('frontend.layouts.master')
@section('title', content: '- View Product')

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
                            product Page</h2>
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
                                product Page</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- product page -->
<section class="section-product py-[50px] max-[1199px]:py-[35px]">
    <div
        class="flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
        <div class="flex flex-wrap w-full">
            <div class="w-full px-[12px]">
                <div class="bb-single-pro mb-[24px]">
                    <div class="flex flex-wrap mx-[-12px]">
                        <div class="min-[992px]:w-[41.66%] w-full px-[12px] mb-[24px]">
                            <div
                                class="single-pro-slider sticky top-[0] p-[15px] border-[1px] border-solid border-[#eee] rounded-[24px] max-[991px]:max-w-[500px] max-[991px]:m-auto">
                                <div class="single-product-cover">
                                    <div class="single-slide zoom-image-hover rounded-tl-[15px] rounded-tr-[15px]">
                                        @if (isset($product->image))
                                            <img class="img-responsive rounded-tl-[15px] rounded-tr-[15px]"
                                                src="{{ asset('storage/' . $product->image) }}" alt="product">
                                        @else
                                            <img class="img-responsive rounded-tl-[15px] rounded-tr-[15px]"
                                                src="{{ asset('frontend/img/new-product/1.jpg') }}" alt="product">
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="min-[992px]:w-[58.33%] w-full px-[12px] mb-[24px]">
                            <div class="bb-single-pro-contact">
                                <div class="bb-sub-title mb-[20px]">
                                    <h4
                                        class="font-quicksand text-[22px] tracking-[0.03rem] font-bold leading-[1.2] text-[#3d4750]">
                                        {{ $product->name }}
                                    </h4>
                                </div>
                                <div class="bb-single-rating mb-[12px]">
                                    <span class="bb-pro-rating mr-[10px]">
                                        <i class="ri-star-fill float-left text-[15px] mr-[3px] text-[#fea99a]"></i>
                                        <i class="ri-star-fill float-left text-[15px] mr-[3px] text-[#fea99a]"></i>
                                        <i class="ri-star-fill float-left text-[15px] mr-[3px] text-[#fea99a]"></i>
                                        <i class="ri-star-fill float-left text-[15px] mr-[3px] text-[#fea99a]"></i>
                                        <i class="ri-star-line float-left text-[15px] mr-[3px] text-[#777]"></i>
                                    </span>
                                    <span class="bb-read-review">
                                        |&nbsp;&nbsp;<a href="#bb-spt-nav-review"
                                            class="font-Poppins text-[15px] font-light leading-[28px] tracking-[0.03rem] text-[#6c7fd8]">992
                                            Ratings</a>
                                    </span>
                                </div>
                                <p class="font-Poppins text-[15px] font-light leading-[28px] tracking-[0.03rem]">
                                    {{ $product->description }}
                                </p>
                                <div class="bb-single-price-wrap flex justify-between py-[10px]">
                                    <div class="bb-single-price py-[15px]">
                                        <div class="price mb-[8px]">
                                            <h5
                                                class="font-quicksand leading-[1.2] tracking-[0.03rem] text-[20px] font-extrabold text-[#3d4750]">
                                                ৳{{ $product->price }}</h5>
                                        </div>
                                    </div>
                                    <div class="bb-single-price py-[15px]">
                                        <div class="sku mb-[8px]">
                                            <h5
                                                class="font-quicksand text-[18px] font-extrabold leading-[1.2] tracking-[0.03rem] text-[#3d4750]">
                                                Product Id: ECOM0{{ $product->id }}</h5>
                                        </div>

                                        <!-- Under Development -->
                                        <!-- <div class="stock">
                                            <span class="text-[18px] text-[#6c7fd8]">In stock</span>
                                            <span class="item-left px-[3px] text-[14px] text-[#6c7fd8]">Out Of Stock</span>
                                        </div> -->
                                    </div>
                                </div>
                                <div class="bb-single-list mb-[30px]">
                                    <ul class="my-[-8px] pl-[18px]">
                                        <li
                                            class="my-[8px] font-Poppins text-[14px] font-light leading-[28px] tracking-[0.03rem] text-[#777] list-disc">
                                            <span class="font-Poppins text-[#777] text-[14px]">Closure :</span> Hook &
                                            Loop
                                        </li>
                                        <li
                                            class="my-[8px] font-Poppins text-[14px] font-light leading-[28px] tracking-[0.03rem] text-[#777] list-disc">
                                            <span class="font-Poppins text-[#777] text-[14px]">Sole :</span> Polyvinyl
                                            Chloride
                                        </li>
                                        <li
                                            class="my-[8px] font-Poppins text-[14px] font-light leading-[28px] tracking-[0.03rem] text-[#777] list-disc">
                                            <span class="font-Poppins text-[#777] text-[14px]">Width :</span> Medium
                                        </li>
                                        <li
                                            class="my-[8px] font-Poppins text-[14px] font-light leading-[28px] tracking-[0.03rem] text-[#777] list-disc">
                                            <span class="font-Poppins text-[#777] text-[14px]">Outer Material :</span>
                                            A-Grade Standard Quality
                                        </li>
                                    </ul>
                                </div>

                                <div class="bb-single-qty flex flex-wrap m-[-2px]">

                                    <!-- Add to cart  -->
                                    <form action="{{ route('add.to.cart', $product->id) }}" method="POST"
                                        class="flex items-center space-x-2">
                                        @csrf
                                        <div
                                            class="qty-plus-minus w-[85px] h-[40px] py-[7px] border-[1px] border-solid border-[#eee] flex items-center justify-between bg-[#fff] rounded-[10px]">
                                            <input
                                                class="qty-input text-[#777] text-[14px] text-center w-[36px] outline-none font-normal leading-[35px] rounded-[10px]"
                                                type="num" name="quantity" value="1" min="1" readonly>
                                        </div>
                                        <button type="submit"
                                            class="bb-btn-2 transition-all duration-[0.3s] ease-in-out h-[40px] py-[6px] px-[25px] text-[14px] font-normal text-[#fff] bg-[#6c7fd8] rounded-[10px] border-[1px] border-solid border-[#6c7fd8] hover:bg-transparent hover:border-[#3d4750] hover:text-[#3d4750]">
                                            Add To Cart
                                        </button>
                                    </form>

                                    <ul class="bb-pro-actions my-[2px] flex">
                                        <!-- <li class="bb-btn-group">
                                                <a href="javascript:void(0)" title="heart" class="transition-all duration-[0.3s] ease-in-out w-[40px] h-[40px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] hover:bg-[#6c7fd8] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                    <i class="ri-heart-line text-[16px] leading-[10px] text-[#777]"></i>
                                                </a>
                                            </li> -->
                                        <li class="bb-btn-group">
                                            <a href="{{ route('cart') }}" title="Go To Cart"
                                                class="transition-all duration-[0.3s] ease-in-out w-[40px] h-[40px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] hover:bg-[#6c7fd8] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                <i
                                                    class="ri-shopping-cart-line text-[16px] leading-[10px] text-[#777]"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bb-single-pro-tab">
                    <div class="bb-pro-tab mb-[24px]">
                        <ul class="bb-pro-tab-nav flex flex-wrap mx-[-20px] max-[991px]:justify-center" id="ProTab">
                            <li class="nav-item relative leading-[28px]">
                                <a class="nav-link px-[20px] font-Poppins text-[16px] text-[#686e7d] font-medium capitalize leading-[28px] tracking-[0.03rem] block active"
                                    href="#detail">Detail</a>
                            </li>
                            <li class="nav-item relative leading-[28px]">
                                <a class="nav-link px-[20px] font-Poppins text-[16px] text-[#686e7d] font-medium capitalize leading-[28px] tracking-[0.03rem] block"
                                    href="#information">Information</a>
                            </li>
                            <li class="nav-item relative leading-[28px]">
                                <a class="nav-link px-[20px] font-Poppins text-[16px] text-[#686e7d] font-medium capitalize leading-[28px] tracking-[0.03rem] block"
                                    href="#reviews">Reviews</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pro-pane" id="detail">
                            <div class="bb-inner-tabs border-[1px] border-solid border-[#eee] p-[15px] rounded-[20px]">
                                <div class="bb-details">
                                    <p
                                        class="mb-[12px] font-Poppins text-[#686e7d] leading-[28px] tracking-[0.03rem] font-light">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero,
                                        voluptatum. Vitae dolores alias repellat eligendi, officiis, exercitationem
                                        corporis
                                        quisquam delectus cum non recusandae numquam dignissimos molestiae
                                        magnam hic natus. Cumque.</p>
                                    <div class="details-info">
                                        <ul class="list-disc pl-[20px] mb-[0]">
                                            <li
                                                class="py-[5px] text-[15px] text-[#686e7d] font-Poppins leading-[28px] font-light">
                                                Any Product types that You want - Simple, Configurable</li>
                                            <li
                                                class="py-[5px] text-[15px] text-[#686e7d] font-Poppins leading-[28px] font-light">
                                                Downloadable/Digital Products, Virtual Products</li>
                                            <li
                                                class="py-[5px] text-[15px] text-[#686e7d] font-Poppins leading-[28px] font-light">
                                                Inventory Management with Backordered items</li>
                                            <li
                                                class="py-[5px] text-[15px] text-[#686e7d] font-Poppins leading-[28px] font-light">
                                                Flatlock seams throughout.</li>
                                        </ul>
                                        <ul class="list-disc pl-[20px] mb-[0]">
                                            <li
                                                class="py-[5px] text-[15px] text-[#686e7d] font-Poppins leading-[28px] font-light">
                                                <span
                                                    class="inline-flex font-medium min-w-[150px]">Highlights</span>Form
                                                FactorWhole
                                            </li>
                                            <li
                                                class="py-[5px] text-[15px] text-[#686e7d] font-Poppins leading-[28px] font-light">
                                                <span class="inline-flex font-medium min-w-[150px]">Seller</span>No
                                                Returns Allowed
                                            </li>
                                            <li
                                                class="py-[5px] text-[15px] text-[#686e7d] font-Poppins leading-[28px] font-light">
                                                <span class="inline-flex font-medium min-w-[150px]">Services</span>Cash
                                                on Delivery available
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pro-pane" id="information">
                            <div class="bb-inner-tabs border-[1px] border-solid border-[#eee] p-[15px] rounded-[20px]">
                                <div class="information">
                                    <ul class="list-disc pl-[20px]">
                                        <li
                                            class="font-Poppins text-[15px] font-light tracking-[0.03rem] leading-[28px] text-[#686e7d] py-[5px]">
                                            <span class="inline-flex min-w-[130px] font-medium">Weight</span> 500 g
                                        </li>
                                        <li
                                            class="font-Poppins text-[15px] font-light tracking-[0.03rem] leading-[28px] text-[#686e7d] py-[5px]">
                                            <span class="inline-flex min-w-[130px] font-medium">Dimensions</span> 17 ×
                                            15 × 3 cm
                                        </li>
                                        <li
                                            class="font-Poppins text-[15px] font-light tracking-[0.03rem] leading-[28px] text-[#686e7d] py-[5px]">
                                            <span class="inline-flex min-w-[130px] font-medium">Color</span>
                                            black,yellow,red
                                        </li>
                                        <li
                                            class="font-Poppins text-[15px] font-light tracking-[0.03rem] leading-[28px] text-[#686e7d] py-[5px]">
                                            <span class="inline-flex min-w-[130px] font-medium">Brand</span> Wonder Fort
                                        </li>
                                        <li
                                            class="font-Poppins text-[15px] font-light tracking-[0.03rem] leading-[28px] text-[#686e7d] py-[5px]">
                                            <span class="inline-flex min-w-[130px] font-medium">Form Factor</span>Whole
                                        </li>
                                        <li
                                            class="font-Poppins text-[15px] font-light tracking-[0.03rem] leading-[28px] text-[#686e7d] py-[5px]">
                                            <span class="inline-flex min-w-[130px] font-medium">Quantity</span>1
                                        </li>
                                        <li
                                            class="font-Poppins text-[15px] font-light tracking-[0.03rem] leading-[28px] text-[#686e7d] py-[5px]">
                                            <span class="inline-flex min-w-[130px] font-medium">Container
                                                Type</span>Pouch
                                        </li>
                                        <li
                                            class="font-Poppins text-[15px] font-light tracking-[0.03rem] leading-[28px] text-[#686e7d] py-[5px]">
                                            <span class="inline-flex min-w-[130px] font-medium">Shelf Life</span>12
                                            Months
                                        </li>
                                        <li
                                            class="font-Poppins text-[15px] font-light tracking-[0.03rem] leading-[28px] text-[#686e7d] py-[5px]">
                                            <span
                                                class="inline-flex min-w-[130px] font-medium">Ingredients</span>Dalchini,
                                            Dhaniya, Badi Elaichi, Laung
                                        </li>
                                        <li
                                            class="font-Poppins text-[15px] font-light tracking-[0.03rem] leading-[28px] text-[#686e7d] py-[5px]">
                                            <span class="inline-flex min-w-[130px] font-medium">Other
                                                Features</span>Ingredient Type: Vegetarian
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pro-pane" id="reviews">
                            <div class="bb-inner-tabs border-[1px] border-solid border-[#eee] p-[15px] rounded-[20px]">
                                <div class="bb-reviews">
                                    <div class="reviews-bb-box flex mb-[24px] max-[575px]:flex-col">
                                        <div class="inner-image mr-[12px] max-[575px]:mr-[0] max-[575px]:mb-[12px]">
                                            <img src="{{ asset('frontend/img/reviews/1.jpg') }}" alt="img-1"
                                                class="w-[50px] h-[50px] max-w-[50px] rounded-[10px]">
                                        </div>
                                        <div class="inner-contact">
                                            <h4
                                                class="font-quicksand leading-[1.2] tracking-[0.03rem] mb-[5px] text-[16px] font-bold text-[#3d4750]">
                                                Mariya Lykra</h4>
                                            <div class="bb-pro-rating flex">
                                                <i
                                                    class="ri-star-fill float-left text-[15px] mr-[3px] text-[#fea99a]"></i>
                                                <i
                                                    class="ri-star-fill float-left text-[15px] mr-[3px] text-[#fea99a]"></i>
                                                <i
                                                    class="ri-star-fill float-left text-[15px] mr-[3px] text-[#fea99a]"></i>
                                                <i
                                                    class="ri-star-fill float-left text-[15px] mr-[3px] text-[#fea99a]"></i>
                                                <i class="ri-star-line float-left text-[15px] mr-[3px] text-[#777]"></i>
                                            </div>
                                            <p
                                                class="font-Poppins text-[14px] leading-[26px] font-light tracking-[0.03rem] text-[#686e7d]">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo,
                                                hic expedita asperiores eos neque cumque impedit quam, placeat
                                                laudantium soluta repellendus possimus a distinctio voluptate
                                                veritatis nostrum perspiciatis est! Commodi!</p>
                                        </div>
                                    </div>
                                    <div class="reviews-bb-box flex mb-[24px] max-[575px]:flex-col">
                                        <div class="inner-image mr-[12px] max-[575px]:mr-[0] max-[575px]:mb-[12px]">
                                            <img src="{{ asset('frontend/img/reviews/2.jpg') }}" alt="img-2"
                                                class="w-[50px] h-[50px] max-w-[50px] rounded-[10px]">
                                        </div>
                                        <div class="inner-contact">
                                            <h4
                                                class="font-quicksand leading-[1.2] tracking-[0.03rem] mb-[5px] text-[16px] font-bold text-[#3d4750]">
                                                Saddika Alard</h4>
                                            <div class="bb-pro-rating flex">
                                                <i
                                                    class="ri-star-fill float-left text-[15px] mr-[3px] text-[#fea99a]"></i>
                                                <i
                                                    class="ri-star-fill float-left text-[15px] mr-[3px] text-[#fea99a]"></i>
                                                <i
                                                    class="ri-star-fill float-left text-[15px] mr-[3px] text-[#fea99a]"></i>
                                                <i
                                                    class="ri-star-fill float-left text-[15px] mr-[3px] text-[#fea99a]"></i>
                                                <i class="ri-star-line float-left text-[15px] mr-[3px] text-[#777]"></i>
                                            </div>
                                            <p
                                                class="font-Poppins text-[14px] leading-[26px] font-light tracking-[0.03rem] text-[#686e7d]">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo,
                                                hic expedita asperiores eos neque cumque impedit quam, placeat
                                                laudantium soluta repellendus possimus a distinctio voluptate
                                                veritatis nostrum perspiciatis est! Commodi!</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="bb-reviews-form">
                                    <h3
                                        class="font-quicksand tracking-[0.03rem] leading-[1.2] mb-[8px] text-[20px] font-bold text-[#3d4750]">
                                        Add a Review</h3>
                                    <div class="bb-review-rating flex mb-[12px]">
                                        <span
                                            class="pr-[10px] font-Poppins text-[15px] font-semibold leading-[26px] tracking-[0.02rem] text-[#3d4750]">Your
                                            ratting :</span>
                                        <div class="bb-pro-rating">
                                            <i class="ri-star-fill float-left text-[15px] mr-[3px] text-[#fea99a]"></i>
                                            <i class="ri-star-fill float-left text-[15px] mr-[3px] text-[#fea99a]"></i>
                                            <i class="ri-star-fill float-left text-[15px] mr-[3px] text-[#fea99a]"></i>
                                            <i class="ri-star-fill float-left text-[15px] mr-[3px] text-[#fea99a]"></i>
                                            <i class="ri-star-line float-left text-[15px] mr-[3px] text-[#777]"></i>
                                        </div>
                                    </div>
                                    <form action="#">
                                        <div class="input-box mb-[24px]">
                                            <input type="text" placeholder="Name" name="your-name"
                                                class="w-full h-[50px] border-[1px] border-solid border-[#eee] pl-[20px] outline-[0] text-[14px] font-normal text-[#777] rounded-[20px] p-[10px]">
                                        </div>
                                        <div class="input-box mb-[24px]">
                                            <input type="email" placeholder="Email" name="your-email"
                                                class="w-full h-[50px] border-[1px] border-solid border-[#eee] pl-[20px] outline-[0] text-[14px] font-normal text-[#777] rounded-[20px] p-[10px]">
                                        </div>
                                        <div class="input-box mb-[24px]">
                                            <textarea name="your-comment" placeholder="Enter Your Comment"
                                                class="w-full h-[100px] border-[1px] border-solid border-[#eee] py-[20px] pl-[20px] pr-[10px] outline-[0] text-[14px] font-normal text-[#777] rounded-[20px] p-[10px]"></textarea>
                                        </div>
                                        <div class="input-button">
                                            <a href="javascript:void(0)"
                                                class="bb-btn-2 transition-all duration-[0.3s] ease-in-out h-[40px] inline-flex font-Poppins leading-[28px] tracking-[0.03rem] py-[4px] px-[15px] text-[14px] font-normal text-[#fff] bg-[#6c7fd8] rounded-[10px] border-[1px] border-solid border-[#6c7fd8] hover:bg-transparent hover:border-[#3d4750] hover:text-[#3d4750]">View
                                                Cart</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Related product section -->
<section class="section-related-product py-[50px] max-[1199px]:py-[35px]">
    <div
        class="flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
        <div class="flex flex-wrap w-full">
            <div class="w-full px-[12px]">
                <div class="section-title mb-[20px] pb-[20px] z-[5] relative flex flex-col items-center text-center max-[991px]:pb-[0]"
                    data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <div class="section-detail max-[991px]:mb-[12px]">
                        <h2
                            class="bb-title font-quicksand mb-[0] p-[0] text-[25px] font-bold text-[#3d4750] relative inline capitalize leading-[1] tracking-[0.03rem] max-[767px]:text-[23px]">
                            Related <span class="text-[#6c7fd8]">Product</span></h2>
                        <p
                            class="font-Poppins max-w-[400px] mt-[10px] text-[14px] text-[#686e7d] leading-[18px] font-light tracking-[0.03rem] max-[991px]:mx-[auto]">
                            Browse The Collection of Top Products.</p>
                    </div>
                </div>
            </div>
            <div class="w-full px-[12px]">

                <!-- Single Related Product -->
                @if (!$relatedProducts->isEmpty())
                    <div class="bb-deal-slider m-[-12px]">
                        <div class="bb-deal-block owl-carousel">
                            @foreach ($relatedProducts as $relatedProduct)
                                <div class="bb-deal-card p-[12px]" data-aos="fade-up" data-aos-duration="1000"
                                    data-aos-delay="200">
                                    <div class="bb-pro-box bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[20px]">
                                        <div
                                            class="bb-pro-img overflow-hidden relative border-b-[1px] border-solid border-[#eee] z-[4]">
                                            <span
                                                class="flags transition-all duration-[0.3s] ease-in-out absolute z-[5] top-[10px] left-[6px]">
                                                <span class="text-[14px] text-[#777] font-medium uppercase">New</span>
                                            </span>
                                            <a href="javascript:void(0)">
                                                @if (isset($relatedProduct->image))
                                                    <div
                                                        class="inner-img relative block overflow-hidden pointer-events-none rounded-t-[20px]">
                                                        <img class="main-img transition-all duration-[0.3s] ease-in-out w-full"
                                                            src="{{ asset('storage/' . $relatedProduct->image) }}" alt="product-1">
                                                        <img class="hover-img transition-all duration-[0.3s] ease-in-out absolute z-[2] top-[0] left-[0] opacity-[0] w-full"
                                                            src="{{ asset('storage/' . $relatedProduct->image) }}" alt="product-1">
                                                    </div>
                                                @else
                                                    <div
                                                        class="inner-img relative block overflow-hidden pointer-events-none rounded-t-[20px]">
                                                        <img class="main-img transition-all duration-[0.3s] ease-in-out w-full"
                                                            src="{{ asset('frontend/img/product/1.jpg') }}" alt="product-1">
                                                        <img class="hover-img transition-all duration-[0.3s] ease-in-out absolute z-[2] top-[0] left-[0] opacity-[0] w-full"
                                                            src="{{ asset('frontend/img/product/back-1.jpg') }}" alt="product-1">
                                                    </div>
                                                @endif
                                            </a>
                                            <ul
                                                class="bb-pro-actions transition-all duration-[0.3s] ease-in-out my-[0] mx-[auto] absolute z-[9] left-[0] right-[0] bottom-[0] flex flex-row items-center justify-center opacity-[0]">
                                                <li
                                                    class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                    <button onclick="addToWishList({{ $relatedProduct->id }})" title="Wishlist"
                                                        class="w-[35px] h-[35px] flex items-center justify-center">
                                                        <i id="wishlist-icon-{{ $relatedProduct->id }}"
                                                            class="{{ $relatedProduct->isFavorited() ? 'ri-heart-fill' : 'ri-heart-line' }} transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                    </button>
                                                </li>
                                                <li
                                                    class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                    <a href="javascript:void(0)" title="Quick View"
                                                        class="bb-modal-toggle w-[35px] h-[35px] flex items-center justify-center"
                                                        data-product-id="{{ $relatedProduct->id }}">
                                                        <i
                                                            class="ri-eye-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                    </a>
                                                </li>
                                                <li
                                                    class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                    <button onclick="addToCart({{ $relatedProduct->id }})" title="Add To Cart"
                                                        class="w-[35px] h-[35px] flex items-center justify-center">
                                                        <i
                                                            class="ri-shopping-cart-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="bb-pro-contact p-[20px]">
                                            <div class="bb-pro-subtitle mb-[8px] flex flex-wrap justify-between">
                                                <a href="{{ route('category.product', $relatedProduct->category->id) }}"
                                                    class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[13px] leading-[16px] text-[#777] font-light tracking-[0.03rem]">{{ $relatedProduct->category->name }}</a>
                                                <span class="bb-pro-rating">
                                                    <i
                                                        class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i
                                                        class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i
                                                        class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i
                                                        class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                                    <i
                                                        class="ri-star-line float-left text-[15px] mr-[3px] leading-[18px] text-[#777]"></i>
                                                </span>
                                            </div>
                                            <h4 class="bb-pro-title mb-[8px] text-[16px] leading-[18px]">
                                                <a href="{{ route('view.product', $relatedProduct->id) }}"
                                                    class="transition-all duration-[0.3s] ease-in-out font-quicksand w-full block whitespace-nowrap overflow-hidden text-ellipsis text-[15px] leading-[18px] text-[#3d4750] font-semibold tracking-[0.03rem]">{{ $relatedProduct->name }}</a>
                                            </h4>
                                            <div class="bb-price flex flex-wrap justify-between">
                                                <div class="inner-price mx-[-3px]">
                                                    <span
                                                        class="new-price px-[3px] text-[16px] text-[#686e7d] font-bold">৳{{ $relatedProduct->price }}</span>
                                                    <!-- <span class="old-price px-[3px] text-[14px] text-[#686e7d] line-through">$30</span> -->
                                                </div>
                                                <span class="last-items text-[14px] text-[#686e7d]">1 Pack</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @else
                    <div class="w-full my-5 flex justify-center">
                        <p>
                            No Related Product Found!
                        </p>
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>
@endsection