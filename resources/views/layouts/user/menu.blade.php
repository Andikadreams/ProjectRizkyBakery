<section id="menu" class="menu">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            {{-- <h2>Our Menu</h2> --}}
            <p>Check Our <span>Yummy Menu</span></p>
        </div>

        {{-- <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">

        @if(Auth::user())
            <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#menu-starters">
                    <h4>Starters</h4>
                </a>
            </li><!-- End tab nav item -->

            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-breakfast">
                    <h4>Breakfast</h4>
                </a><!-- End tab nav item -->

            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-lunch">
                    <h4>Lunch</h4>
                </a>
            </li><!-- End tab nav item -->

            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-dinner">
                    <h4>Dinner</h4>
                </a>
            </li>
            <!-- End tab nav item -->
            @else
            @endif
        </ul>| --}}
        <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

            <div class="tab-pane fade active show" id="menu-starters">

                <div class="tab-header text-center">
                    <p>Menu</p>
                    <h3>Starters</h3>
                </div>

                <div class="row gy-5">

                    <div class="col-lg-4 menu-item">
                        <a href="assets/img/menu/menu-item-1.png" class="glightbox"><img
                                src="img/croissant.jpg" class="menu-img img-fluid" alt="" style="height: 300px; object-fit: cover; width: 100%; object-position:center"></a>
                        <h4>Quassong</h4>
                        <p class="ingredients">
                            Its Quasong
                        </p>
                        <p class="price">
                            $5.95
                        </p>
                    </div>

                    <!-- Menu Item -->

                    <div class="col-lg-4 menu-item">
                        <a href="assets/img/menu/menu-item-2.png" class="glightbox"><img
                                src="img/pancake.jpg" class="menu-img img-fluid" alt="" style="height: 300px; object-fit: cover; width: 100%; object-position:bottom"></a>
                        <h4>A Cake Make on PAN</h4>
                        <p class="ingredients">
                            Its Pancake
                        </p>
                        <a href="#" class="price">
                            $14.95
                        </a>
                        <br>
                    </div><!-- Menu Item -->

                    <div class="col-lg-4 menu-item">
                        <a href="assets/img/menu/menu-item-3.png" class="glightbox"><img
                                src="img/croffle.jpg" class="menu-img img-fluid" alt="" style="height: 300px; object-fit: cover; width: 100%; object-position:bottom"></a>
                        <h4>Croffle</h4>
                        <p class="ingredients">
                            A cake make with fully love
                        </p>
                        <p class="price">
                            $8.95
                        </p>
                    </div><!-- Menu Item -->

                    <div class="col-lg-4 menu-item">
                        <a href="assets/img/menu/menu-item-4.png" class="glightbox"><img
                                src="img/coklat_cake.jpg" class="menu-img img-fluid" alt="" style="height: 300px; object-fit: cover; width: 100%; object-position:bottom"></a>
                        <h4>A Cake from Choco</h4>
                        <p class="ingredients">
                            Fully Chocolate Cake
                        </p>
                        <p class="price">
                            $12.95
                        </p>
                    </div><!-- Menu Item -->

                    <div class="col-lg-4 menu-item">
                        <a href="assets/img/menu/menu-item-5.png" class="glightbox"><img
                                src="img/Fa Ez Cake.jpg" class="menu-img img-fluid" alt="" style="height: 300px; object-fit: cover; width: 100%; object-position:bottom"></a>
                        <h4>Cake create by FA EZ</h4>
                        <p class="ingredients">
                            Cake Create by FAEZ
                        </p>
                        <p class="price">
                            $12.95
                        </p>
                    </div><!-- Menu Item -->

                    <div class="col-lg-4 menu-item">
                        <a href="assets/img/menu/menu-item-6.png" class="glightbox"><img
                                src="img/coklat_cheese_cake.jpg" class="menu-img img-fluid" alt="" style="height: 300px; object-fit: cover; width: 100%; object-position:bottom"></a>
                        <h4>Triple C</h4>
                        <p class="ingredients">
                            Chocolate Cheese Cake (3x C)
                        </p>
                        <p class="price">
                            $9.95
                        </p>
                    </div><!-- Menu Item -->

                </div>
            </div><!-- End Starter Menu Content -->

            {{-- <div class="tab-pane fade" id="menu-breakfast">

                <div class="tab-header text-center">
                    <p>Menu</p>
                    <h3>Breakfast</h3>
                </div>

                <div class="row gy-5">

                    <div class="col-lg-4 menu-item">
                        <a href="assets/img/menu/menu-item-1.png" class="glightbox"><img
                                src="assets/img/menu/menu-item-1.png" class="menu-img img-fluid" alt=""></a>
                        <h4>Magnam Tiste</h4>
                        <p class="ingredients">
                            Lorem, deren, trataro, filede, nerada
                        </p>
                        <p class="price">
                            $5.95
                        </p>
                    </div><!-- Menu Item -->

                    <div class="col-lg-4 menu-item">
                        <a href="assets/img/menu/menu-item-2.png" class="glightbox"><img
                                src="assets/img/menu/menu-item-2.png" class="menu-img img-fluid" alt=""></a>
                        <h4>Aut Luia</h4>
                        <p class="ingredients">
                            Lorem, deren, trataro, filede, nerada
                        </p>
                        <p class="price">
                            $14.95
                        </p>
                    </div><!-- Menu Item -->

                    <div class="col-lg-4 menu-item">
                        <a href="assets/img/menu/menu-item-3.png" class="glightbox"><img
                                src="assets/img/menu/menu-item-3.png" class="menu-img img-fluid" alt=""></a>
                        <h4>Est Eligendi</h4>
                        <p class="ingredients">
                            Lorem, deren, trataro, filede, nerada
                        </p>
                        <p class="price">
                            $8.95
                        </p>
                    </div><!-- Menu Item -->

                    <div class="col-lg-4 menu-item">
                        <a href="assets/img/menu/menu-item-4.png" class="glightbox"><img
                                src="assets/img/menu/menu-item-4.png" class="menu-img img-fluid" alt=""></a>
                        <h4>Eos Luibusdam</h4>
                        <p class="ingredients">
                            Lorem, deren, trataro, filede, nerada
                        </p>
                        <p class="price">
                            $12.95
                        </p>
                    </div><!-- Menu Item -->

                    <div class="col-lg-4 menu-item">
                        <a href="assets/img/menu/menu-item-5.png" class="glightbox"><img
                                src="assets/img/menu/menu-item-5.png" class="menu-img img-fluid" alt=""></a>
                        <h4>Eos Luibusdam</h4>
                        <p class="ingredients">
                            Lorem, deren, trataro, filede, nerada
                        </p>
                        <p class="price">
                            $12.95
                        </p>
                    </div><!-- Menu Item -->

                    <div class="col-lg-4 menu-item">
                        <a href="assets/img/menu/menu-item-6.png" class="glightbox"><img
                                src="assets/img/menu/menu-item-6.png" class="menu-img img-fluid" alt=""></a>
                        <h4>Laboriosam Direva</h4>
                        <p class="ingredients">
                            Lorem, deren, trataro, filede, nerada
                        </p>
                        <p class="price">
                            $9.95
                        </p>
                    </div><!-- Menu Item -->

                </div>
            </div><!-- End Breakfast Menu Content -->

            <div class="tab-pane fade" id="menu-lunch">

                <div class="tab-header text-center">
                    <p>Menu</p>
                    <h3>Lunch</h3>
                </div>

                <div class="row gy-5">

                    <div class="col-lg-4 menu-item">
                        <a href="assets/img/menu/menu-item-1.png" class="glightbox"><img
                                src="assets/img/menu/menu-item-1.png" class="menu-img img-fluid" alt=""></a>
                        <h4>Magnam Tiste</h4>
                        <p class="ingredients">
                            Lorem, deren, trataro, filede, nerada
                        </p>
                        <p class="price">
                            $5.95
                        </p>
                    </div><!-- Menu Item -->

                    <div class="col-lg-4 menu-item">
                        <a href="assets/img/menu/menu-item-2.png" class="glightbox"><img
                                src="assets/img/menu/menu-item-2.png" class="menu-img img-fluid" alt=""></a>
                        <h4>Aut Luia</h4>
                        <p class="ingredients">
                            Lorem, deren, trataro, filede, nerada
                        </p>
                        <p class="price">
                            $14.95
                        </p>
                    </div><!-- Menu Item -->

                    <div class="col-lg-4 menu-item">
                        <a href="assets/img/menu/menu-item-3.png" class="glightbox"><img
                                src="assets/img/menu/menu-item-3.png" class="menu-img img-fluid" alt=""></a>
                        <h4>Est Eligendi</h4>
                        <p class="ingredients">
                            Lorem, deren, trataro, filede, nerada
                        </p>
                        <p class="price">
                            $8.95
                        </p>
                    </div><!-- Menu Item -->

                    <div class="col-lg-4 menu-item">
                        <a href="assets/img/menu/menu-item-4.png" class="glightbox"><img
                                src="assets/img/menu/menu-item-4.png" class="menu-img img-fluid" alt=""></a>
                        <h4>Eos Luibusdam</h4>
                        <p class="ingredients">
                            Lorem, deren, trataro, filede, nerada
                        </p>
                        <p class="price">
                            $12.95
                        </p>
                    </div><!-- Menu Item -->

                    <div class="col-lg-4 menu-item">
                        <a href="assets/img/menu/menu-item-5.png" class="glightbox"><img
                                src="assets/img/menu/menu-item-5.png" class="menu-img img-fluid" alt=""></a>
                        <h4>Eos Luibusdam</h4>
                        <p class="ingredients">
                            Lorem, deren, trataro, filede, nerada
                        </p>
                        <p class="price">
                            $12.95
                        </p>
                    </div><!-- Menu Item -->

                    <div class="col-lg-4 menu-item">
                        <a href="assets/img/menu/menu-item-6.png" class="glightbox"><img
                                src="assets/img/menu/menu-item-6.png" class="menu-img img-fluid" alt=""></a>
                        <h4>Laboriosam Direva</h4>
                        <p class="ingredients">
                            Lorem, deren, trataro, filede, nerada
                        </p>
                        <p class="price">
                            $9.95
                        </p>
                    </div><!-- Menu Item -->

                </div>
            </div><!-- End Lunch Menu Content -->

            <div class="tab-pane fade" id="menu-dinner">

                <div class="tab-header text-center">
                    <p>Menu</p>
                    <h3>Dinner</h3>
                </div>

                <div class="row gy-5">

                    <div class="col-lg-4 menu-item">
                        <a href="assets/img/menu/menu-item-1.png" class="glightbox"><img
                                src="assets/img/menu/menu-item-1.png" class="menu-img img-fluid" alt=""></a>
                        <h4>Magnam Tiste</h4>
                        <p class="ingredients">
                            Lorem, deren, trataro, filede, nerada
                        </p>
                        <p class="price">
                            $5.95
                        </p>
                    </div><!-- Menu Item -->

                    <div class="col-lg-4 menu-item">
                        <a href="assets/img/menu/menu-item-2.png" class="glightbox"><img
                                src="assets/img/menu/menu-item-2.png" class="menu-img img-fluid" alt=""></a>
                        <h4>Aut Luia</h4>
                        <p class="ingredients">
                            Lorem, deren, trataro, filede, nerada
                        </p>
                        <p class="price">
                            $14.95
                        </p>
                    </div><!-- Menu Item -->

                    <div class="col-lg-4 menu-item">
                        <a href="assets/img/menu/menu-item-3.png" class="glightbox"><img
                                src="assets/img/menu/menu-item-3.png" class="menu-img img-fluid" alt=""></a>
                        <h4>Est Eligendi</h4>
                        <p class="ingredients">
                            Lorem, deren, trataro, filede, nerada
                        </p>
                        <p class="price">
                            $8.95
                        </p>
                    </div><!-- Menu Item -->

                    <div class="col-lg-4 menu-item">
                        <a href="assets/img/menu/menu-item-4.png" class="glightbox"><img
                                src="assets/img/menu/menu-item-4.png" class="menu-img img-fluid" alt=""></a>
                        <h4>Eos Luibusdam</h4>
                        <p class="ingredients">
                            Lorem, deren, trataro, filede, nerada
                        </p>
                        <p class="price">
                            $12.95
                        </p>
                    </div><!-- Menu Item -->

                    <div class="col-lg-4 menu-item">
                        <a href="assets/img/menu/menu-item-5.png" class="glightbox"><img
                                src="assets/img/menu/menu-item-5.png" class="menu-img img-fluid" alt=""></a>
                        <h4>Eos Luibusdam</h4>
                        <p class="ingredients">
                            Lorem, deren, trataro, filede, nerada
                        </p>
                        <p class="price">
                            $12.95
                        </p>
                    </div><!-- Menu Item -->

                    <div class="col-lg-4 menu-item">
                        <a href="assets/img/menu/menu-item-6.png" class="glightbox"><img
                                src="assets/img/menu/menu-item-6.png" class="menu-img img-fluid" alt=""></a>
                        <h4>Laboriosam Direva</h4>
                        <p class="ingredients">
                            Lorem, deren, trataro, filede, nerada
                        </p>
                        <p class="price">
                            $9.95
                        </p>
                    </div><!-- Menu Item -->

                </div>
            </div><!-- End Dinner Menu Content --> --}}
        </div>
        <div class="card-footer p-4 pt-0 mt-1 border-top-0 bg-transparent">
            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="{{ route('shop') }}">Order Now</a></div>
        </div>
    </div>
</section>
