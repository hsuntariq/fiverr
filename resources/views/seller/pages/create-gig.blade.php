<x-layout>
    <style>
        .section-box {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
        }

        h2 {
            color: #343a40;
        }

        .form-label {
            font-weight: bold;
            color: #495057;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>
    <x-nav />
    <x-sidebar />



    <div class="container-fluid bg-light p-2">


        <div class="container mt-5">
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-lg-6">
                        <!-- Overview Section -->
                        <div class="section-box">
                            <h2>Overview</h2>
                            <div class="mb-3">
                                <label for="gigTitle" class="form-label">Gig Title</label>
                                <input type="text" class="form-control" id="gigTitle"
                                    placeholder="I will do marketing design for your business">
                            </div>

                            <div class="mb-3">
                                <label for="category" class="form-label">Category</label>
                                <select class="form-select" id="category">
                                    @foreach ($categories as $item)
                                        <option value="{{ $item->name }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Platform Type</label>
                                {{-- <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="facebook">
                                    <label class="form-check-label" for="facebook">Facebook</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="instagram">
                                    <label class="form-check-label" for="instagram">Instagram</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="linkedin">
                                    <label class="form-check-label" for="linkedin">LinkedIn</label>
                                </div> --}}
                            </div>


                        </div>
                        <!-- Description & FAQ Section -->
                        <div class="section-box">
                            <h2>Description & FAQ</h2>
                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea class="form-control" id="description" rows="4" placeholder="Write a detailed description of your gig"></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="faq" class="form-label">FAQ</label>
                                <textarea class="form-control" id="faq" rows="4" placeholder="Add frequently asked questions"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!-- Pricing Section -->
                        <div class="section-box">
                            <h2>Pricing</h2>
                            <div class="mb-3">
                                <label for="basicPrice" class="form-label">Basic Package</label>
                                <input type="text" class="form-control" id="basicPrice"
                                    placeholder="Enter basic package price">
                            </div>

                            <div class="mb-3">
                                <label for="standardPrice" class="form-label">Standard Package</label>
                                <input type="text" class="form-control" id="standardPrice"
                                    placeholder="Enter standard package price">
                            </div>

                            <div class="mb-3">
                                <label for="premiumPrice" class="form-label">Premium Package</label>
                                <input type="text" class="form-control" id="premiumPrice"
                                    placeholder="Enter premium package price">
                            </div>

                        </div>
                        <!-- Gallery Section -->
                        <div class="section-box">
                            <h2>Gallery</h2>

                            <div class="mb-3">
                                <label for="galleryUpload" class="form-label">Upload Images</label>
                                <input class="form-control" type="file" id="galleryUpload" multiple>
                            </div>

                        </div>
                        <div class="section-box">
                            <h2>Search Tags</h2>

                            <div class="mb-3">
                                <label for="galleryUpload" class="form-label">Search tags</label>
                                <input class="form-control" type="search" id="search-tags" multiple>
                            </div>

                        </div>
                        <button type="submit" class="btn btn-primary d-block ms-auto ">Save &
                            Continue</button>
                    </div>
                </div>
            </form>









        </div>



    </div>
    <x-jquery />


    <script></script>

</x-layout>
