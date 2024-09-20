<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Blueberry - Multi Purpose eCommerce Template.">
    <meta name="keywords"
        content="eCommerce, mart, apparel, catalog, fashion, Tailwind, multipurpose, online store, shop, store, template">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Ecommerce @yield('title')</title>

    <!-- Site Favicon -->
    <link rel="icon" href="{{ asset('frontend/img/favicon/favicon.png') }}" type="image/x-icon">

    <!-- Css All Plugins Files -->
    <link rel="stylesheet" href="{{ asset('frontend/css/vendor/remixicon.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/vendor/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/vendor/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/vendor/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/vendor/slick.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/vendor/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/vendor/jquery-range-ui.css') }}">

    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <!-- tailwindcss -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.4.5/dist/tailwind.min.css" rel="stylesheet"> -->
    <!-- <script src="{{ asset('frontend/js/vendor/tailwindcss3.4.5.js') }}"></script> -->
    <link rel="stylesheet" href="{{ asset('frontend/css/output.css') }}">

    <!-- Main Style -->
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">

    {{-- toaster --}}
    <link rel="stylesheet" href="{{ asset('/css/toastr.min.css') }}">

</head>

<body>

    <!-- Loader -->
    <!-- <div class="bb-loader min-w-full w-full h-screen fixed top-[0] left-[0] flex items-center justify-center bg-[#fff] z-[45]">
        <img src="{{ asset('frontend/img/logo/loader.png') }}" alt="loader" class="absolute">
        <span class="loader w-[60px] h-[60px] relative"></span>
    </div> -->

    <!-- Header -->
    @include('frontend.partials.header')

    <!-- ============================================== -->
    <!-- Main Content -->
    @yield('content')
    <!-- ============================================== -->

    <!-- Footer -->
    @include('frontend.partials.footer')

    <!-- Cart sidebar -->
    @include('frontend.partials.cart_sidebar')

    <!-- Category Popup -->

    <!-- Quick view Modal -->
    @include('frontend.partials.quick_view')

    <!-- Tools side bar -->

    <!-- Back to top  -->
    <a href="#Top"
        class="back-to-top result-placeholder transition-all duration-[0.3s] ease-in-out w-[38px] h-[38px] hidden fixed right-[15px] bottom-[15px] z-[10] rounded-[20px] cursor-pointer bg-[#fff] text-[#6c7fd8] border-[1px] border-solid border-[#6c7fd8] text-center text-[22px] leading-[1.6]">
        <i class="ri-arrow-up-line text-[20px]"></i>
        <div class="back-to-top-wrap active-progress">
            <svg viewBox="-1 -1 102 102" class="w-[36px] h-[36px] fixed right-[16px] bottom-[16px]">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                    class="fill-transparent stroke-[5px] stroke-[#6c7fd8]"></path>
            </svg>
        </div>
    </a>

    <!-- Plugins -->
    <script src="{{ asset('frontend/js/vendor/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/js/vendor/jquery.zoom.min.js') }}"></script>
    <script src="{{ asset('frontend/js/vendor/aos.js') }}"></script>
    <script src="{{ asset('frontend/js/vendor/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/js/vendor/smoothscroll.min.js') }}"></script>
    <!-- <script src="{{ asset('frontend/js/vendor/countdownTimer.js') }}"></script> -->
    <script src="{{ asset('frontend/js/vendor/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/js/vendor/slick.min.js') }}"></script>
    <script src="{{ asset('frontend/js/vendor/jquery-range-ui.min.js') }}"></script>

    <!-- Toastr JS -->
    <script src="{{ asset('js/toastr.min.js') }}"></script>
    <script>
        toastr.options = {
            "closeButton": true,
            "progressBar": true,
            "timeOut": 5000,
            "extendedTimeOut": 1000,
            "positionClass": "toast-top-right",
            "preventDuplicates": true,
            "maxOpened": 3
        };

        @if (Session::has('success'))
            toastr.success("{{ Session::get('success') }}");
        @elseif(Session::has('error'))
            toastr.error("{{ Session::get('error') }}");
        @elseif(Session::has('warning'))
            toastr.warning("{{ Session::get('warning') }}");
        @elseif(Session::has('info'))
            toastr.info("{{ Session::get('info') }}");
        @endif
    </script>

    <script>
        function addToCart(productId) {
            $.ajax({
                url: '/single-add-to-cart/' + productId,
                type: 'POST',
                data: {
                    _token: $('meta[name="csrf-token"]').attr('content')
                },
                success: function (response) {
                    toastr.success(response.success);
                },
                error: function (xhr) {
                    toastr.error('An error occurred while adding the item to the cart.');
                }
            });
        }

        function addToWishList(productId) {
            $.ajax({
                url: '/toggle-wish-list/' + productId,
                type: 'POST',
                data: {
                    _token: $('meta[name="csrf-token"]').attr('content')
                },
                success: function (response) {
                    toastr.success(response.success);

                    var icon = $('#wishlist-icon-' + productId);

                    if (response.isFavorited) {
                        icon.removeClass('ri-heart-line').addClass('ri-heart-fill');
                    } else {
                        icon.removeClass('ri-heart-fill').addClass('ri-heart-line');
                    }
                },
                error: function (xhr) {
                    if(xhr.status === 401) {
                        window.location.href = '/login';  // Redirect to login if not authenticated
                    } else {
                        toastr.error('An error occurred while adding the item to the wish list.');
                    }
                }
            });
        }

        // ======================= js for load data in the quick view modal ====================== //

        // Function to truncate description to a maximum of `maxWords` words
        function truncateDescription(description, maxWords) {
            const words = description.split(/\s+/); // Split the description into words
            if (words.length <= maxWords) {
                return description; // Return the full description if within limit
            }
            return words.slice(0, maxWords).join(' ') + '...'; // Return truncated description with ellipsis
        }

        $(".bb-modal-toggle").on("click", function () {
            var productId = $(this).data('product-id');  // Get product ID from the button's data attribute

            // Fetch product data via AJAX
            $.ajax({
                url: "/quick-product/" + productId,
                method: "GET",
                success: function (product) {
                    // Update modal fields with product data
                    $(".product-name").text(product.name).attr("href", "/product/" + product.id);

                    // Truncate description to 100 words and update the modal
                    var truncatedDescription = truncateDescription(product.description, 50);
                    $(".product-description").text(truncatedDescription);

                    $(".product-price").text('৳' + product.price);
                    $(".product-image").attr("src", 'storage/' + product.image); // Assuming the image URL is returned in the response

                    // Update the form action for adding the product to the cart
                    $(".add-to-cart-form").attr("action", "/add-to-cart/" + product.id);

                    // Show the modal
                    $(".bb-modal-overlay").fadeIn();
                    $(".bb-modal").fadeIn();
                    $("body").addClass("bb-overflow-hidden");
                    $(".bb-modal-dialog").addClass("bb-fadeOutUp").removeClass("bb-fadeInDown");
                },
                error: function () {
                    alert("Failed to load product details.");
                }
            });
        });
    </script>

    <!-- main-js -->
    <script src="{{ asset('frontend/js/main.js') }}"></script>
</body>

</html>