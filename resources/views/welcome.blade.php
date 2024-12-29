<x-layout>
    <x-nav />
    <div class="hero my-4">
        <div class="container p-4">

            <h1 class="display-4 font-bold text-white">Welcome back, Username</h1>
            <div class="row">
                <div class="col-md-6">
                    <div class="card mb-3 p-4 shadow border-0 rounded-4">
                        <p class="text-semibold text-uppercase text-secondary">
                            recommended for you
                        </p>
                        <div class="d-flex align-items-center">
                            <div
                                class="p-3 clip-circle d-flex justify-content-center align-items-center bg-light shadow">
                                <i class="bi bi-book"></i>
                            </div>
                            <div class="">
                                <h6>Post a project brief</h6>
                                <p class="text-secondary">
                                    Get tailored offers for your need
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card p-4 shadow border-0 rounded-4">
                        <p class="text-semibold text-uppercase text-secondary">
                            recommended for you
                        </p>
                        <div class="d-flex align-items-center">
                            <div
                                class="p-3 clip-circle d-flex justify-content-center align-items-center bg-light shadow">
                                <i class="bi bi-book"></i>
                            </div>
                            <div class="">
                                <h6>Post a project brief</h6>
                                <p class="text-secondary">
                                    Get tailored offers for your need
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- jobs section --}}
    <div class="container">
        <h4>Based on your browsing history</h4>
        <ul class=" mt-4 mb-1 text-secondary list-unstyled text-capitalize fw-semibold fs-6 d-flex gap-3">
            <li class="active relevent-li cursor-pointer">keep exploring</li>
            <li class=" font-bold text-secondary relevent-li cursor-pointer ">Python development</li>
            <li class=" font-bold text-secondary relevent-li cursor-pointer ">JS</li>
            <li class=" font-bold text-secondary relevent-li cursor-pointer ">Web</li>
            <li class=" font-bold text-secondary relevent-li cursor-pointer ">AI</li>
        </ul>
        <hr class="m-0">
    </div>










    <x-jquery />

    <script>
        let btn = $('.sidebar-btn')
        $('.sidebar').on('click', (e) => {
            e.stopPropagation()
        })
        btn.on('click', function() {
            $('.underlay').removeClass('translate-nx-100')
            setTimeout(() => {
                $('.sidebar').removeClass('translate-nx-100')
            }, 400);
        })

        $('.underlay').on('click', function() {
            $('.sidebar').addClass('translate-nx-100')
            setTimeout(() => {
                $('.underlay').addClass('translate-nx-100')

            }, 400);
        })
        $('.close-sidebar').on('click', function() {
            $('.sidebar').addClass('translate-nx-100')
            setTimeout(() => {
                $('.underlay').addClass('translate-nx-100')

            }, 400);
        })


        // get the relevent li

        $('.relevent-li').each(function(index) {

            $(this).on('click', function() {
                $('.relevent-li').each(function() {
                    $(this).removeClass('active')
                })
                $(this).addClass('active')
            })


        })
    </script>

</x-layout>
