<section id="menu" class="menu">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h2>Our Menu</h2>
            <p>Check Our <span>Menu</span></p>
        </div>

        <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

            <div class="tab-pane fade active show" id="menu-starters">

                <!-- <div class="tab-header text-center">
                    <p>Menu</p>
                    <h3>Starters</h3>
                </div> -->

                <div class="row gy-5">
                    @foreach ($produks->take(6) as $produk)
                    <div class="col-lg-4 menu-item">
                        <a href="" class="glightbox"><img src="{{ asset('storage/foto_produk/'.$produk->foto_produk) }}" 
                        class="menu-img img-fluid" alt="" style="height: 300px; object-fit: cover; width: 100%; object-position:bottom;border-radius:10%"></a>
                        <h4>{{ $produk->nama_produk }}</h4>
                        <!-- <p class="ingredients">
                            Must Try This 1
                        </p> -->
                        <p class="price">
                            Rp {{ number_format($produk->harga) }}
                        </p>
                    </div>
                    @endforeach
                    <a type="button" class="btn btn-outline-success d-flex justify-content-center" href="{{route('shop')}}">Order Now</a>
                </div>
            </div>
        </div>
    </div>
</section>
