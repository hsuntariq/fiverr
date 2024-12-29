<x-layout>
    <x-nav />
    <div class="container-fluid py-4 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card shadow mb-4">
                        <div class="card-body text-center">
                            <img src="https://fiverr-res.cloudinary.com/t_profile_original,q_auto,f_auto/attachments/profile/photo/f73f36c92e49717450a28ca3fd018de4-1706100210964/67d2dfee-aece-43a2-a055-14d9ae0af0df.jpg"
                                alt="Profile" class="rounded-circle mb-2" style="width: 80px; height: 80px;">
                            <h5>Aqqaqa</h5>
                            <p class="m-0">@aqua7</p>
                            <i class="bi bi-pencil cursor-pointer text-secondary mb-2"></i>
                            <button class="btn w-100 d-block my-2 btn-outline-secondary">
                                Preview fiverr profile
                            </button>
                            <hr>
                            <div class="d-flex mb-2 justify-content-between align-items-center">
                                <div class="d-flex gap-2">
                                    <i class="bi bi-geo-alt text-secondary"></i>
                                    <p class="m-0 text-secondary">From</p>
                                </div>
                                <h6 class="m-0 text-secondary">Pakistan</h6>
                            </div>
                            <div class="d-flex mb-2 justify-content-between align-items-center">
                                <div class="d-flex gap-2">
                                    <i class="bi bi-person text-secondary"></i>
                                    <p class="m-0 text-secondary">Member since</p>
                                </div>
                                <h6 class="m-0 text-secondary">Jan 2024</h6>
                            </div>
                        </div>
                    </div>
                    <div class="my-3">
                        <div class="card p-3 shadow bg-white">
                            <img width="100px"
                                src="https://fiverr-res.cloudinary.com/image/upload/q_auto,f_png/v1/attachments/generic_asset/asset/6bef0aaa4d62dcf41383658e5e3211ee-1571214998624/fiverrlearn_logo.svg"
                                alt="">
                            <h5>
                                <img src="https://npm-assets.fiverrcdn.com/assets/@fiverr-private/fiverr_learn/enroll-icon.69b770f.svg"
                                    width="100%" alt="">
                            </h5>
                            <h4>Earn badges and stand out</h4>
                            <p>Boost your sales, by boosting your expertise.</p>
                            <button class="d-block mx-auto btn btn-success">
                                Enroll Now
                            </button>
                        </div>
                    </div>
                    <div class="my-3">
                        <div class="card p-3 shadow">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5>Description</h5>
                                <p class="text-primary-emphasis fw-semibold edit-description cursor-pointer"
                                    style="cursor: pointer">
                                    Edit Desctiption
                                </p>
                            </div>
                            {{-- edit description --}}
                            <form action="" class="d-flex p-3 border rounded-2 flex-column desc d-none"
                                style="background:#F4F4F4">
                                <textarea style="height: 200px;overflow-y:scroll;resize:none;background:#F4F4F4" class="form-control border-0"
                                    id="" cols="30" rows="10">am a WordPress developer and SEO (Search Engine Optimisation) expert. If you’re looking for a beautiful website that can generate good passive income as well, then you find the right person. I helped hundreds of businesses to succeed and make money online. Feel free to co
                                </textarea>
                                <hr>
                                <div class="d-flex gap-2">
                                    <button type="button" type="button"
                                        class="btn cancel-desc btn-outline-dark w-100">
                                        Cancel
                                    </button>
                                    <button class="btn btn-success w-100">
                                        Update
                                    </button>
                                </div>
                            </form>
                            <p class="text-secondary-emphasis description">
                                am a WordPress developer and SEO (Search Engine Optimisation) expert. If you’re looking
                                for a beautiful website that can generate good passive income as well, then you find the
                                right person. I helped hundreds of businesses to succeed and make money online. Feel
                                free to co
                            </p>
                            <hr>
                            <div class="d-flex justify-content-between align-items-center">
                                <h5>Languages</h5>
                                <p style="cursor: pointer;"
                                    class="text-primary-emphasis cursor-pointer fw-semibold add-language">
                                    Add New
                                </p>
                            </div>
                            {{-- edit language --}}
                            <form action="" class="language d-none p-3 border rounded-2"
                                style="background: #F4F4F4">
                                <input type="text" placeholder="Add language" class="form-control my-1">
                                <select name="" class="form-control" id="">
                                    <option value="" disabled selected>Language level</option>
                                    <option value="basic">Basic</option>
                                    <option value="conversational">Conversational</option>
                                    <option value="fluent">Fluent</option>
                                    <option value="native/bilingual">Basic</option>
                                </select>
                                <hr>
                                <div class="d-flex gap-2">
                                    <button type="button" class="btn cancel-lang w-100 btn-outline-dark">
                                        Cancel
                                    </button>
                                    <button disabled class="btn w-100 btn-success btn-disabled">
                                        Add
                                    </button>
                                </div>
                            </form>
                            <div class=" justify-content-between align-items-center">
                                <p>English - <span class="text-secondary">
                                        Fluent
                                    </span></p>
                                <p>Urdu - <span class="text-secondary">
                                        Fluent
                                    </span></p>

                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <h5>Skills</h5>
                                <p class="text-primary">
                                    Add New
                                </p>
                            </div>
                            <hr>
                            <div class="d-flex flex-wrap gap-3">
                                <div class="border  rounded-pill py-2 px-3">web</div>
                                <div class="border rounded-pill py-2 px-3">AI</div>
                                <div class="border rounded-pill py-2 px-3">JS</div>
                                <div class="border rounded-pill py-2 px-3">ML</div>
                                <div class="border rounded-pill py-2 px-3">Development</div>
                            </div>
                            <hr>
                            <div class="d-flex justify-content-between align-items-center">
                                <h5>Education</h5>
                                <p class="text-primary">
                                    Add New
                                </p>
                            </div>
                            <p>B.Sc. - softwareengineering</p>
                            <p class="text-secondary">
                                AIR UNI, Pakistan, Graduated 2026
                            </p>
                            <p>B.Sc. - softwareengineering</p>
                            <p class="text-secondary">
                                AIR UNI, Pakistan, Graduated 2026
                            </p>
                            <p>B.Sc. - softwareengineering</p>
                            <p class="text-secondary">
                                AIR UNI, Pakistan, Graduated 2026
                            </p>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>

    <x-jquery />

    <script>
        function toggleMenus(showBtn, show, hide, hideBtn) {
            $(showBtn).on('click', function() {
                $(hide).removeClass('d-none')
                $(show).addClass('d-none')
                $(showBtn).hide()
            })
            $(hideBtn).on('click', function() {
                $(hide).addClass('d-none')
                $(show).removeClass('d-none')
                $(showBtn).show()
            })
        }


        toggleMenus('.edit-description', '.description', '.desc', '.cancel-desc')
        toggleMenus('.add-language', '', '.language', '.cancel-lang')
    </script>


</x-layout>
