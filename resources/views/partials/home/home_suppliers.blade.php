{{-- @extends('home.index')

@section('content')
<section id="hero">
    <div class="container mt-0 mt-lg-5">
        <div class="row">
            <div class="col-md-6 pt-5 pt-lg-0 order-md-1 d-flex flex-column justify-content-center" data-aos="fade-up">
                <div>
                    <h1>INI PAGE SUPPLIER</h1>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur nobis vero a officiis commodi,
                        nam esse
                        saepe sapiente hic exercitationem reiciendis eveniet ipsa alias accusamus? Non molestias
                        nesciunt
                        accusantium suscipit?</p>
                    <a href="#about" class="btn-get-started scrollto">Get Started</a>
                </div>
            </div>
            <div class="col-md-6 order-md-2 mt-5 mt-lg-0 pt-5 pt-lg-0 d-none d-md-block hero-img" data-aos="fade-left">
                <img src="{{ asset('storage/home/coffee.jpg') }}" class="img-fluid" alt="Coffee">
</div>
</div>
</div>

</section>

<main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">

        <div class="container" data-aos="fade-up">
            <div class="row">

                <div class="col-lg-5 col-md-6 d-none d-md-block">
                    <div class="about-img" data-aos="fade-right" data-aos-delay="100">
                        <img src="{{ asset('storage/home/laracoffee.jpg') }}" alt="laracoffee">
                    </div>
                </div>

                <div class="col-lg-7 col-md-6">
                    <div class="about-content" data-aos="fade-left" data-aos-delay="100">
                        <h2>About Laracoffee</h2>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quas, quae saepe alias dicta illum
                            eveniet qui
                            fugiat laborum, molestiae nesciunt placeat aliquam voluptate ratione minus nemo quos
                            consectetur harum id
                            quibusdam cumque odit at, est velit? Neque totam voluptate possimus eum tempore, dolorum
                            odio itaque
                            dolores inventore atque omnis ad.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="services" class="services section-bg">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>Additional Information</h2>
            </div>

            <div class="row">
                <div class="col-md-12 col-lg-6 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in">
                    <div class="icon-box icon-box-pink">
                        <div class="icon"><i class="fa fa-fw fa-dumpster"
                                style="font-size: 48px;margin-bottom: 15px;line-height: 1;color:orange;"></i></div>
                        <h4 class="title"><a href="">Why Laracoffee?</a></h4>
                        <p class="description">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Unde natus
                            nesciunt
                            exercitationem, libero odit quia consequuntur ullam nostrum ducimus, fugit aspernatur error,
                            placeat
                            voluptatibus incidunt modi eligendi culpa dolor nihil.</p>
                        <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione hic
                            temporibus, et
                            odit sed ut molestiae. Architecto, suscipit!</p>
                    </div>
                </div>

                <div class="col-md-12 col-lg-6 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in"
                    data-aos-delay="100">
                    <div class="icon-box icon-box-cyan">
                        <div class="icon"><i class="fa fa-basket-shopping"
                                style="font-size: 48px;margin-bottom: 15px;line-height: 1;color:#3fcdc7;"></i></div>
                        <h4 class="title"><a href="">Easy way to order!</a></h4>
                        <p class="description">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolor suscipit
                            odio, autem
                            quos eos eveniet explicabo perferendis dolore quae cum molestiae itaque nostrum!</p>
                        <ul class="description">
                            <li>Lorem ipsum dolor sit amet consectetur.</li>
                            <li>Lorem ipsum dolor sit.</li>
                            <li>Lorem, ipsum dolor.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection --}}

@extends('layouts.main')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Dashboard Supplier</h2>

    <!-- Pesan Sukses -->
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <!-- Tabel Produk -->
    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($products as $product)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $product->product_name }}</td>
                    <td>Rp{{ number_format($product->price, 0, ',', '.') }}</td>
                    <td>{{ $product->stock }}</td>
                    <td>
                        <!-- Thumbnail -->
                        <img src="{{ asset('storage/' . $product->image) }}" alt="Gambar Produk" class="img-thumbnail"
                            style="width: 100px; cursor: pointer;" data-bs-toggle="modal"
                            data-bs-target="#imageModal-{{ $product->id }}">

                        <!-- Modal -->
                        <div class="modal fade" id="imageModal-{{ $product->id }}" tabindex="-1"
                            aria-labelledby="imageModalLabel-{{ $product->id }}" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-xl">
                                <!-- Class modal-xl untuk ukuran besar -->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="imageModalLabel-{{ $product->id }}">Gambar Produk
                                        </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body text-center">
                                        <!-- Fullscreen Image -->
                                        <img src="{{ asset('storage/' . $product->image) }}" alt="Gambar Produk Full"
                                            class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>


                    <td>
                        <!-- Tombol Edit -->
                        <a href="" class="btn btn-warning btn-sm">
                            Edit
                        </a>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="7" class="text-center">Belum ada produk yang diinputkan.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection

{{-- {{ route('supplier.editProduct', $product->id) }} --}}
