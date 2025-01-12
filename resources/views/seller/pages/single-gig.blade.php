<x-layout>
    <x-nav />
    <hr>
    @include('seller.partials.skeleton')
    <div class="container mt-5 gig-content d-none">
        <div class="row">
            <!-- Image Section -->
            <div class="col-lg-8 col-md-6">
                <img src="" alt="Cartoon Caricature" class="mx-auto d-block gig-image rounded">
            </div>

            <!-- Details Section -->
            <div class="col-lg-4 col-md-6">
                <h1 class="title">I will draw cartoon caricature for you</h1>
                <div class="d-flex align-items-center mb-2">
                    <img src="path-to-seller-image.jpg" alt="Seller" class="rounded-circle me-2" width="50"
                        height="50">
                    <div>
                        <strong>Malik Z</strong>
                        <div class="rating-stars">
                            &#9733;&#9733;&#9733;&#9733;&#9733; <span class="text-muted">(168 reviews)</span>
                        </div>
                    </div>
                </div>
                <div class="border  rounded mb-3">

                    <div class="d-flex w-100 mb-3 " style="background: #FAFAFA">
                        <div style="cursor: pointer"
                            class="d-flex w-100 package align-items-center bg-white basic border w-25 justify-content-center text-capitalize fw-semibold fs-5 p-3 text-center">
                            Basic
                        </div>
                        <div style="cursor: pointer"
                            class="d-flex w-100 package text-secondary standard bg-light align-items-center border w-25 justify-content-center text-capitalize fw-semibold fs-5 p-3 text-center">
                            standard
                        </div>
                        <div style="cursor: pointer"
                            class="d-flex w-100 package text-secondary premium bg-light align-items-center border w-25 justify-content-center text-capitalize fw-semibold fs-5 p-3 text-center">
                            premium
                        </div>
                    </div>
                    <div class="p-3">
                        <p>1 headshot with 300 dpi and final result in JPG or PNG</p>
                        <ul>
                            <li>1 Figure</li>
                            <li>Include Source File</li>
                            <li>Printable resolution file</li>
                            <li>Add background/scene</li>
                            <li>Include colors in illustration</li>
                            <li>Commercial Use</li>
                            <li>1 Panel</li>
                        </ul>
                        <h3 class="text-success price"></h3>
                        <button class="btn btn-primary w-100 mb-2">Continue</button>
                        <button class="btn btn-outline-secondary w-100">Contact me</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- About Section -->
        <div class="row mt-4">
            <div class="col-12">
                <h3>About this gig</h3>
                <p>Provide more details about the gig here, such as what the buyer can expect and additional information
                    about the service.</p>
            </div>
        </div>
    </div>

    <x-jquery />


    <script>
        $(document).ready(function() {
            $('.gig-content').addClass('d-none')
            $('.gig-skeleton').removeClass('d-none')
            let gig_id = window.location.pathname.split('/').pop()

            $.ajax({
                url: `/seller/get-single-gig/${gig_id}`,
                type: 'GET',
                data: {},
                success: function(response) {
                    console.log(response)
                    $('.title').html(response?.title)
                    $('.gig-image').attr('src', `/storage/${response?.images}`)
                    $('.price').html(`$${response.base_package}`)
                    $('.gig-content').removeClass('d-none')
                    $('.gig-skeleton').addClass('d-none')
                    $('.basic').on('click', function() {
                        $('.price').html(`$${response.base_package}`);
                        $('.package').removeClass('bg-white text-dark').addClass(
                            'bg-light text-secondary');
                        $('.package').eq(0).addClass('bg-white text-dark');
                    });

                    $('.standard').on('click', function() {
                        $('.price').html(`$${response.standard_package}`);
                        $('.package').removeClass('bg-white text-dark').addClass(
                            'bg-light text-secondary');
                        $('.package').eq(1).addClass('bg-white text-dark');
                    });

                    $('.premium').on('click', function() {
                        $('.price').html(`$${response.premium_package}`);
                        $('.package').removeClass('bg-white text-dark').addClass(
                            'bg-light text-secondary');
                        $('.package').eq(2).addClass('bg-white text-dark');
                    });





                },
                error: function(xhr) {
                    console.log(xhr)
                    $('.gig-skeleton').addClass('d-none')
                }
            })



        })
    </script>


</x-layout>
