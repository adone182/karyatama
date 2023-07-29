@extends('layouts.main')

@section('content')
    <!-- main content -->
    <img class="element-atas" src="img/element.png" alt="" />
    <img class="element-bawah" src="img/element.png" alt="" />
    <main>
      <div class="container">
        <h1 class="h1-berita text-center">
          Jelajahi Informasi Terbaru Tentang Karyatama
        </h1>
        <p class="text-center sub-paragraf">
          Simak terus berita dan informasi mengenai Karyatama, pelopor Toko Grosir Sembako yang inovatif di Sumatera Selatan
        </p>
      </div>

      <!-- background & download -->
      {{-- <div class="bg-berita">
        <div class="padd-berita container">
          <div class="row mb-4">
            <div class="col-md-5">
              <h2 class="h2-berita-terbaru">Berita Terbaru</h2>
            </div>
            <div class="col-md-7">
              <p class="p-ragam mt-2">
                Mauris placerat viverra neque semper nibh hendrerit vulputate
                augue sagittis. Auctor turpis cursus egesta.
              </p>
            </div>
          </div>

          <!-- carosel -->
          <div
            id="carouselExampleIndicators"
            class="carousel slide mt-4 caroselForDesktop"
            data-bs-ride="carousel"
          >
            <div class="carousel-indicators">
              <button
                type="button"
                data-bs-target="#carouselExampleIndicators"
                data-bs-slide-to="0"
                class="active"
                aria-current="true"
                aria-label="Slide 1"
              ></button>
              <button
                type="button"
                data-bs-target="#carouselExampleIndicators"
                data-bs-slide-to="1"
                aria-label="Slide 2"
              ></button>
            </div>

            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="d-inline" style="position: relative;">
                  <img
                    src="img/carosel-img1.png"
                    class="d-inline"
                    alt=""
                    style="width: 49%;margin-right: 15px"
                  />
                  <div class="img-caption">
                    <span>Daya Beli Meningkat Akibat <br> Transaksi Digital di UMKM</span>
                  
                    <div class="d-flex mt-2 mb-4">
                      <div class="ico-carosel me-4">
                        <i class="bi bi-clock"></i>
                        <span>12 Jan 2023</span>
                      </div>

                      <div class="ico-carosel">
                        <i class="bi bi-pencil-square"></i>
                        <span>Karyatama</span>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="d-inline" style="position: relative;">
                  <img
                    src="img/carosel-image2.png"
                    class="d-inline"
                    alt="..."
                    style="width: 49%;"
                  />
                  <div class="img-caption">
                    <span>Harga Produk Meningkat Akibat <br>Pandemi Covid-19</span>
                    <div class="d-flex mt-2 mb-4">
                  <div class="ico-carosel me-4">
                    <i class="bi bi-clock"></i>
                    <span>12 Jan 2023</span>
                  </div>

                  <div class="ico-carosel">
                    <i class="bi bi-pencil-square"></i>
                    <span>Karyatama</span>
                  </div>
                </div>
                  </div>
                </div>
              </div>
              
              <div class="carousel-item">
                <div class="d-inline" style="position: relative;">
                  <img
                    src="img/carosel-img1.png"
                    class="d-inline"
                    alt="..."
                    style="width: 49%;margin-right: 15px"
                  />
                  <div class="img-caption">
                    <span>Daya Beli Meningkat Akibat <br> Transaksi Digital di UMKM</span>
                  
                    <div class="d-flex mt-2 mb-4">
                      <div class="ico-carosel me-4">
                        <i class="bi bi-clock"></i>
                        <span>12 Jan 2023</span>
                      </div>

                      <div class="ico-carosel">
                        <i class="bi bi-pencil-square"></i>
                        <span>Karyatama</span>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="d-inline" style="position: relative;">
                  <img
                    src="img/carosel-image2.png"
                    class="d-inline"
                    alt="..."
                    style="width: 49%;"
                  />
                  <div class="img-caption">
                    <span>Harga Produk Meningkat Akibat <br>Pandemi Covid-19</span>

                    <div class="d-flex mt-2 mb-4">
                      <div class="ico-carosel me-4">
                        <i class="bi bi-clock"></i>
                        <span>12 Jan 2023</span>
                      </div>

                      <div class="ico-carosel">
                        <i class="bi bi-pencil-square"></i>
                        <span>Karyatama</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <button
              class="carousel-control-prev"
              type="button"
              data-bs-target="#carouselExampleIndicators"
              data-bs-slide="prev"
            >
              <span
                class="carousel-control-prev-icon"
                aria-hidden="true"
              ></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button
              class="carousel-control-next"
              type="button"
              data-bs-target="#carouselExampleIndicators"
              data-bs-slide="next"
            >
              <span
                class="carousel-control-next-icon"
                aria-hidden="true"
              ></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>

          <div
            id="carouselExampleIndicators2"
            class="carousel slide mt-4 caroselForMobile"
            data-bs-ride="carousel"
          >
            <div class="carousel-indicators">
              <button
                type="button"
                data-bs-target="#carouselExampleIndicators2"
                data-bs-slide-to="0"
                class="active"
                aria-current="true"
                aria-label="Slide 1"
              ></button>
              <button
                type="button"
                data-bs-target="#carouselExampleIndicators2"
                data-bs-slide-to="1"
                aria-label="Slide 2"
              ></button>
              <button
                type="button"
                data-bs-target="#carouselExampleIndicators2"
                data-bs-slide-to="2"
                aria-label="Slide 3"
              ></button>
              <button
                type="button"
                data-bs-target="#carouselExampleIndicators2"
                data-bs-slide-to="3"
                aria-label="Slide 4"
              ></button>
            </div>

            <div class="carousel-inner">
              
              <div class="carousel-item active">
                <div class="d-inline" style="position: relative;">
                  <img
                    src="img/carosel-img1.png"
                    class="d-block w-100"
                    alt="..."
                  />
                  <div class="img-caption">
                    <span>Daya Beli Meningkat Akibat <br> Transaksi Digital di UMKM</span>
                  
                    <div class="d-flex mt-2 mb-4">
                      <div class="ico-carosel me-4">
                        <i class="bi bi-clock"></i>
                        <span>12 Jan 2023</span>
                      </div>

                      <div class="ico-carosel">
                        <i class="bi bi-pencil-square"></i>
                        <span>Karyatama</span>
                      </div>
                    </div>
                  </div>
              </div>
              </div>
              <div class="carousel-item">
                <div class="d-inline" style="position: relative;">
                  <img
                    src="img/carosel-image2.png"
                    class="d-block w-100"
                    alt="..."
                  />
                  <div class="img-caption">
                    <span>Daya Beli Meningkat Akibat <br> Transaksi Digital di UMKM</span>
                  
                    <div class="d-flex mt-2 mb-4">
                      <div class="ico-carosel me-4">
                        <i class="bi bi-clock"></i>
                        <span>12 Jan 2023</span>
                      </div>

                      <div class="ico-carosel">
                        <i class="bi bi-pencil-square"></i>
                        <span>Karyatama</span>
                      </div>
                    </div>
                  </div>
              </div>
              </div>
              <div class="carousel-item">
                <div class="d-inline" style="position: relative;">
                  <img
                    src="img/carosel-img1.png"
                    class="d-block w-100"
                    alt="..."
                  />
                  <div class="img-caption">
                    <span>Daya Beli Meningkat Akibat <br> Transaksi Digital di UMKM</span>
                  
                    <div class="d-flex mt-2 mb-4">
                      <div class="ico-carosel me-4">
                        <i class="bi bi-clock"></i>
                        <span>12 Jan 2023</span>
                      </div>

                      <div class="ico-carosel">
                        <i class="bi bi-pencil-square"></i>
                        <span>Karyatama</span>
                      </div>
                    </div>
                  </div>
              </div>
              </div>
              <div class="carousel-item">
                <div class="d-inline" style="position: relative;">
                  <img
                    src="img/carosel-image2.png"
                    class="d-block w-100"
                    alt="..."
                  />
                  <div class="img-caption">
                    <span>Daya Beli Meningkat Akibat <br> Transaksi Digital di UMKM</span>
                  
                    <div class="d-flex mt-2 mb-4">
                      <div class="ico-carosel me-4">
                        <i class="bi bi-clock"></i>
                        <span>12 Jan 2023</span>
                      </div>

                      <div class="ico-carosel">
                        <i class="bi bi-pencil-square"></i>
                        <span>Karyatama</span>
                      </div>
                    </div>
                  </div>
              </div>
              </div>

            </div>
            <button
              class="carousel-control-prev"
              type="button"
              data-bs-target="#carouselExampleIndicators2"
              data-bs-slide="prev"
            >
              <span
                class="carousel-control-prev-icon"
                aria-hidden="true"
              ></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button
              class="carousel-control-next"
              type="button"
              data-bs-target="#carouselExampleIndicators2"
              data-bs-slide="next"
            >
              <span
                class="carousel-control-next-icon"
                aria-hidden="true"
              ></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          
        </div>
      </div> --}}

      <!-- section news search -->
      <div class="container mt-5">
        <div class="row justify-content-center">
          <div class="col-lg-8 col-md-10 col-sm-4">
            <input
            type="text"
            name="search"
            id="search-item" 
            onkeyup="search()"
            class="form-control"
            placeholder="🔍 Cari Berita Disini..."
          />
          </div>
        </div>
      </div>

      <div class="news-list container" style="padding:0 20px" id="news-list">
        <span class="span-news">Karyatama News</span>

        <div class="row mt-4 mb-5">
          
          @foreach ($artikel as $item)
          <div class="news-query col-lg-4 col-md-6 col-sm-12">
            {{-- <a href="{{route('singlenews', $item->slug)}}" style="color:#252525;text-decoration: none;"> --}}
              <img
                class="cards"
                src="{{ asset('storage/' . $item->gambar) }}"
                alt="benefit-card-01"
              />
              
              <h4 class="judul-news text-justify">
              {{$item->judul}}
              </h4>
            {{-- </a>    --}}
              <div class="d-flex mt-2 mb-4">
                <div class="ico-news me-4">
                  <i class="bi bi-clock"></i>
                  <span>{{$item->created_at}}</span>
                </div>

                <div class="ico-news">
                  <i class="bi bi-pencil-square"></i>
                  <span>{{$item->author}}</span>
                </div>
              </div>
          </div>
          @endforeach
              </div>
           
          </div>

          {{-- <div class="news-query col-lg-4 col-md-6 col-sm-12">
            <a href="{{url('/news-details')}}" style="color:#252525;text-decoration: none;">
            <img
              class="cards"
              src="img/Rectangle 3 (1).png"
              alt="benefit-card-02"
            />

            <h4 class="judul-news text-justify">
              Tenetur nostrum sint liquid eum vero animi expedita quaerat.
            </h4>
          </a>
            <div class="d-flex mt-2 mb-4">
              <div class="ico-news me-4">
                <i class="bi bi-clock"></i>
                <span>12 Jan 2023</span>
              </div>

              <div class="ico-news">
                <i class="bi bi-pencil-square"></i>
                <span>Karyatama</span>
              </div>
            </div>
          </div>

          <div class="news-query col-lg-4 col-md-6 col-sm-12">
            <a href="{{url('/news-details')}}" style="color:#252525;text-decoration: none;">
            <img
              class="cards"
              src="img/Rectangle 3 (2).png"
              alt="benefit-card-01"
            />

            <h4 class="judul-news text-justify">
              Ipsum dolor sit dualo consectetur adipisicing elit Reprehenderit Esse 
            </h4>
            </a>
            <div class="d-flex mt-2 mb-4">
              <div class="ico-news me-4">
                <i class="bi bi-clock"></i>
                <span>12 Jan 2023</span>
              </div>

              <div class="ico-news">
                <i class="bi bi-pencil-square"></i>
                <span>Karyatama</span>
              </div>
            </div>
          </div> --}}

        </div>

        {{-- <span class="span-news">Karyatama Story</span>

        <div class="row mt-4 mb-5">

          <div class="news-query col-lg-4 col-md-6 col-sm-12">
            <a href="{{url('/news-details')}}" style="color:#252525;text-decoration: none;">
            <img
              class="cards"
              src="img/Rectangle 3 (3).png"
              alt="benefit-card-01"
            />

            <h4 class="judul-news text-justify">
              At aliquam amet ut morbi orci nisi eu nulla orci neque et
              id.
            </h4>
            </a>
            <div class="d-flex mt-2 mb-4">
              <div class="ico-news me-4">
                <i class="bi bi-clock"></i>
                <span>12 Jan 2023</span>
              </div>

              <div class="ico-news">
                <i class="bi bi-pencil-square"></i>
                <span>Karyatama</span>
              </div>
            </div>
          </div>

          <div class="news-query col-lg-4 col-md-6 col-sm-12">
            <a href="{{url('/news-details')}}" style="color:#252525;text-decoration: none;">
            <img
              class="cards"
              src="img/Rectangle 3 (4).png"
              alt="benefit-card-02"
            />

            <h4 class="judul-news text-justify">
              Posuere dui viverra proin ipsum odio nec erat sed. Dictum et
              leo.
            </h4>
            </a>
            <div class="d-flex mt-2 mb-4">
              <div class="ico-news me-4">
                <i class="bi bi-clock"></i>
                <span>12 Jan 2023</span>
              </div>

              <div class="ico-news">
                <i class="bi bi-pencil-square"></i>
                <span>Karyatama</span>
              </div>
            </div>
          </div>

          <div class="news-query col-lg-4 col-md-6 col-sm-12">
            <a href="{{url('/news-details')}}" style="color:#252525;text-decoration: none;">
            <img
              class="cards"
              src="img/Rectangle 3 (5).png"
              alt="benefit-card-01"
            />

            <h4 class="judul-news text-justify">
              Feugiat tempor blandit tortor 
              non in quisque et sit in.
            </h4>
            </a>
            <div class="d-flex mt-2 mb-4">
              <div class="ico-news me-4">
                <i class="bi bi-clock"></i>
                <span>12 Jan 2023</span>
              </div>

              <div class="ico-news">
                <i class="bi bi-pencil-square"></i>
                <span>Karyatama</span>
              </div>
            </div>
          </div>

        </div> --}}

      </div>

      <!-- section category -->
      {{-- <div class="bg-berita-umum container">
        <span class="span-news">Berita Umum</span>

        <div class="row">
          <div class="col-md-4 col-sm-12">
            <p class="filter my-3">Filter</p>

            <div class="form-check">
              <label class="form-check-label" for="flexCheckDefault">
                Terbaru
              </label>

              <input
                class="form-check-input"
                type="checkbox"
                value=""
                id="flexCheckDefault"
              />
            </div>

            <div class="form-check">
              <label class="form-check-label" for="flexCheckDefault">
                Umum
              </label>

              <input
                class="form-check-input"
                type="checkbox"
                value=""
                id="flexCheckDefault"
              />
            </div>

            <div class="form-check">
              <label class="form-check-label" for="flexCheckDefault">
                Poppuler
              </label>

              <input
                class="form-check-input"
                type="checkbox"
                value=""
                id="flexCheckDefault"
              />
            </div>

            <div class="form-check">
              <label class="form-check-label" for="flexCheckDefault">
                Paling Diminati
              </label>

              <input
                class="form-check-input"
                type="checkbox"
                value=""
                id="flexCheckDefault"
              />
            </div>

            <div class="form-check">
              <label class="form-check-label" for="flexCheckDefault">
                Terbaru
              </label>

              <input
                class="form-check-input"
                type="checkbox"
                value=""
                id="flexCheckDefault"
              />
            </div>

            <p class="tags my-3">Tags</p>

            <div>
              <span class="bg-span-tags">Produk</span>
              <span class="bg-span-tags">Harga Produk</span>
            </div>

            <div class="mt-3">
              <span class="bg-span-tags">Penjualan</span>
              <span class="bg-span-tags">Umum</span>
            </div>

            <div class="mt-3">
              <span class="bg-span-tags">Pasar</span>
              <span class="bg-span-tags">Terbaru</span>
            </div>
          </div>

          <div class="col-md-8 col-sm-12">
            <div class="category-in-news">
                <div class="col-sm-6 middle">
                  <img
                    class="cards img-news"
                    src="img/Rectangle 3 (10).png"
                    alt="benefit-card-01"
                  />
                </div>

                <div class="col-sm-6">
                  <div class="">
                    <h4 class="judul-beritaumum text-justify">
                      Feugiat tempor blandit tortor
                      non in quisque et sit in.
                    </h4>

                    <div class="d-flex mt-2 mb-4">
                      <div class="ico-news me-4">
                        <i class="bi bi-clock"></i>
                        <span>12 Jan 2023</span>
                      </div>

                      <div class="ico-news">
                        <i class="bi bi-pencil-square"></i>
                        <span>Karyatama</span>
                      </div>
                    </div>

                  </div>
                </div>
            </div>

            <div class="category-in-news mt-3">
              <div class="col-sm-6 middle">
                <img
                  class="cards img-news"
                  src="img/Rectangle 3 (6).png"
                  alt="benefit-card-01"
                />
              </div>

              <div class="col-sm-6">
                <div class="">
                  <h4 class="judul-beritaumum text-justify">
                    Feugiat tempor blandit tortor
                    non in quisque et sit in.
                  </h4>

                  <div class="d-flex mt-2 mb-4">
                    <div class="ico-news me-4">
                      <i class="bi bi-clock"></i>
                      <span>12 Jan 2023</span>
                    </div>

                    <div class="ico-news">
                      <i class="bi bi-pencil-square"></i>
                      <span>Karyatama</span>
                    </div>
                  </div>

                </div>
              </div>
              
            </div>

            <div class="category-in-news mt-3">
              <div class="col-sm-6 middle">
                <img
                  class="cards img-news"
                  src="img/Rectangle 3 (8).png"
                  alt="benefit-card-01"
                />
              </div>

              <div class="col-sm-6">
                <div class="">
                  <h4 class="judul-beritaumum text-justify">
                    Feugiat tempor blandit tortor
                    non in quisque et sit in.
                  </h4>

                  <div class="d-flex mt-2 mb-4">
                    <div class="ico-news me-4">
                      <i class="bi bi-clock"></i>
                      <span>12 Jan 2023</span>
                    </div>

                    <div class="ico-news">
                      <i class="bi bi-pencil-square"></i>
                      <span>Karyatama</span>
                    </div>
                  </div>

                </div>
              </div>

            </div>

            <div class="category-in-news mt-3">
              <div class="col-sm-6 middle">
                <img
                  class="cards img-news"
                  src="img/Rectangle 3 (7).png"
                  alt="benefit-card-01"
                />
              </div>

              <div class="col-sm-6">
                <div class="">
                  <h4 class="judul-beritaumum text-justify">
                    Feugiat tempor blandit tortor
                    non in quisque et sit in.
                  </h4>

                  <div class="d-flex mt-2 mb-4">
                    <div class="ico-news me-4">
                      <i class="bi bi-clock"></i>
                      <span>12 Jan 2023</span>
                    </div>

                    <div class="ico-news">
                      <i class="bi bi-pencil-square"></i>
                      <span>Karyatama</span>
                    </div>
                  </div>

                </div>
              </div>

            </div>

            <div class="category-in-news mt-3">
              <div class="col-sm-6 middle">
                <img
                  class="cards img-news"
                  src="img/Rectangle 3 (9).png"
                  alt="benefit-card-01"
                />
              </div>

              <div class="col-sm-6">
                <div class="">
                  <h4 class="judul-beritaumum text-justify">
                    Feugiat tempor blandit tortor
                    non in quisque et sit in.
                  </h4>

                  <div class="d-flex mt-2 mb-4">
                    <div class="ico-news me-4">
                      <i class="bi bi-clock"></i>
                      <span>12 Jan 2023</span>
                    </div>

                    <div class="ico-news">
                      <i class="bi bi-pencil-square"></i>
                      <span>Karyatama</span>
                    </div>
                  </div>

                </div>
              </div>

            </div>
          </div>

            <div aria-label="Page navigation example">
              <ul class="pagination justify-content-end mt-5">
                <li class="page-item">
                  <a
                    class="page-link text-danger"
                    href="#"
                    aria-label="Previous"
                  >
                    <span aria-hidden="true">&laquo;</span>
                  </a>
                </li>
                <li class="page-item">
                  <a class="page-link text-danger" href="#">1</a>
                </li>
                <li class="page-item">
                  <a class="page-link text-danger" href="#">2</a>
                </li>
                <li class="page-item">
                  <a class="page-link text-danger" href="#">3</a>
                </li>
                <li class="page-item">
                  <a class="page-link text-danger" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div> --}}

    </main>
 @endsection