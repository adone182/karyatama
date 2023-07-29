@extends('layouts.main')

@section('content')
<!-- background with text -->
    <div class="background-with-text">
      <div class="container">
        <div class="row g-0 text-left">
          <div class="col-sm-6 col-md-6">
            <div class="section-heading-banner">
              <div class="heading-banner">
                <span class="font-size48"
                  >Digitalisasi Warung Kelontong Demi Tercapainya
                  Efisiensi</span
                >
              </div>
              <div class="sub-heading-banner">
                <span class="font-size-16">
                  Restock kebutuhan warung dengan waktu, tenaga, dan biaya yang lebih hemat melalui aplikasi
                </span>
              </div>
            </div>
            <div class="section-button-banner">
              <div class="section-button-unduh">
                <a href="#unduh" class="button-unduh"
                  >Unduh Aplikasi <i class="bi bi-arrow-down"></i>
                </a>
              </div>
              <div class="section-hubungi-banner">
                <a href="{{url('/hubungi-kami')}}" class="hubungi-banner">Hubungi Kami</a>
              </div>
            </div>
          </div>
          {{-- <div class="col-sm-6 col-md-6 text-center">
            <div class="section-image-banner">
              <img
                src="assets/img/orang1 copy.webp"
                width="578"
                height="611"
                alt="Image pembuka - Karyatama"
                class="img-fluid" style="margin-top: 62px;"
              />
            </div>
          </div> --}}
        </div>
      </div>
    </div>
    <div class="background-with-text-mobile">
      <div class="container">
        <div class="row g-0 text-left">
          <div class="col-sm-6 col-md-6">
            <div class="section-heading-banner">
              <div class="heading-banner">
                <span class="font-size48"
                  >Digitalisasi Warung Kelontong Demi Tercapainya
                  Efisiensi</span
                >
              </div>
              <div class="sub-heading-banner">
                <span class="font-size-16">
                  Restock kebutuhan warung dengan waktu, tenaga, dan biaya yang
                  lebih hemat melalui inovasi teknologi
                </span>
              </div>
            </div>
            <div class="section-button-banner">
              <div class="section-button-unduh">
                <a href="" class="button-unduh"
                  >Unduh Aplikasi <i class="bi bi-arrow-down"></i>
                </a>
              </div>
              <div class="section-hubungi-banner">
                <a href="" class="hubungi-banner">Hubungi Kami</a>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-6 text-center">
            <div class="section-image-banner">
              <img
                src="{{url('img/test.webp')}}"
                width="578"
                height="611"
                alt="Image pembuka - Karyatama"
                class="img-fluid"
              />
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- background with text end -->

    <!-- section visi misi -->
    <div class="container-global">
      <div class="row g-0 grid-visi-misi">
        <div class="col-sm-6 col-md-12 col-lg-6">
          <div class="section-visi-misi">
            <div class="heading-visi-misi">
              <span>TUJUAN, VISI & MISI</span>
            </div>
            <div class="sub-heading-visi-misi">
              <span
                >Tujuan Karyatama
                Dalam Membantu 
                Warung Kelontong</span
              >
            </div>
            <div class="section-button-visi-misi">
              <a href="" class="button-visi-misi"
                >Tonton Video <i class="bi bi-play"></i
              ></a>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-12 col-lg-6">
          <div class="section-video-visi-misi">
            <iframe class="video-compro" width="560" height="315" src="https://www.youtube.com/embed/lIcR_hl2DPo" title="YouTube video player" frameborder="0"></iframe>
          </div>
        </div>
      </div>
    </div>
    <!-- section visi misi end -->

    <!-- section nilai utama -->
    <div class="container-global">
      <div class="section-heading-nilai-utama">
        <div class="heading-nilai-utama">
          <span>Mengapa Memilih Kami</span>
        </div>
        <div class="sub-heading-nilai-utama">
          <span>Tiga Nilai Utama Kami</span>
        </div>
      </div>
      <div class="row g-5" style="justify-content: space-between ">
        <div class="col-sm-12 col-md-12 col-lg-3">
          <div class="section-nilai-utama-content">
            <div class="icon-nilai-utama">
              <img
                class="icon-img-nilai-utama"
                src="{{url('img/money.png')}}"
                alt=""
              />
            </div>
            <div class="heading-nilai-utama-content">
              <span>Harga Yang kompetitif</span>
            </div>
            <div class="sub-heading-nilai-utama-content">
              <span>Memberikan harga yang terbaik untuk para pelanggan </span>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-3">
          <div class="section-nilai-utama-content">
            <div class="icon-nilai-utama">
              <img
                class="icon-img-nilai-utama"
                src="{{url('img/time.png')}}"
                alt=""
              />
            </div>
            <div class="heading-nilai-utama-content">
              <span>Pengalaman Lebih Dari 20 Tahun</span>
            </div>
            <div class="sub-heading-nilai-utama-content">
              <span
                >Kami sangat memahami apa yang dibutuhkan oleh para pelanggan
                kami</span
              >
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-3">
          <div class="section-nilai-utama-content">
            <div class="icon-nilai-utama">
              <img
                class="icon-img-nilai-utama"
                src="{{url('img/hands.png')}}"
                alt=""
              />
            </div>
            <div class="heading-nilai-utama-content">
              <span>Tanpa Perantara</span>
            </div>
            <div class="sub-heading-nilai-utama-content">
              <span>Produk yang kami jual langsung dari gudang Karyatama </span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- section nilai utama end -->

    <!-- section kata mereka -->
    <div class="container-kata-mereka">
        <div class="section-heading-kata-mereka">
          <div class="heading-nilai-utama">
            <span>KATA MEREKA</span>
          </div>
          <div class="sub-heading-kata-mereka">
            <span>Cerita Mereka Tentang Karyatama</span>
          </div>
        </div>
  
        <div class="swiper mySwiper" style="margin-top: 30px;">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="section-review-toko">
                  <div class="section-rating-toko">
                    <div class="section-star-toko">
                      <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <div class="section-heading-toko">
                      <span class="heading-toko">Toko Sembako - Ana</span>
                    </div>
                    <div class="section-description-toko">
                      <span class="description-toko">Simak, cerita dari mas eko yang sudah berlangganan 1 tahun di karyatama, semenjak berbelanja via karyatama tidak lagi terburu dengan waktu.</span>
                    </div>
                  </div>
                  <div class="section-video-review-toko">
                    <iframe class="video-testimoni" width="300" height="315" src="https://www.youtube.com/embed/oncNrEqwLLQ" title="YouTube video player" frameborder="0"></iframe>
                  </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="section-review-toko">
                  <div class="section-rating-toko">
                    <div class="section-star-toko">
                      <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <div class="section-heading-toko">
                      <span class="heading-toko">Toko Sembako - Alex Aqil</span>
                    </div>
                    <div class="section-description-toko">
                      <span class="description-toko">Simak, cerita dari kak Charles yang sudah berlangganan 4 tahun di Karyatama , beliau benar benar merasakan kecepatan delivery ketika melakukan order di Karyatama.</span>
                    </div>
                  </div>
                  <div class="section-video-review-toko">
                    <iframe class="video-testimoni" width="300" height="315" src="https://www.youtube.com/embed/4Qnu7i1Qxsc" title="YouTube video player" frameborder="0"></iframe>
                  </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="section-review-toko">
                  <div class="section-rating-toko">
                    <div class="section-star-toko">
                      <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <div class="section-heading-toko">
                      <span class="heading-toko">Toko Sembako - Klakon</span>
                    </div>
                    <div class="section-description-toko">
                      <span class="description-toko">
                        Simak, cerita dari  pak David yang berlokasi di kabupaten muara beliti, beliau menyarankan kepada pemilik toko sembako yang lainya agar beralih ke Karyatama, karna harga karyatama di jamin aman.</span>
                    </div>
                  </div>
                  <div class="section-video-review-toko">
                    <iframe class="video-testimoni" width="300" height="315" src="https://www.youtube.com/embed/_a3qtMuGlHs" title="YouTube video player" frameborder="0"></iframe>
                  </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="section-review-toko">
                  <div class="section-rating-toko">
                    <div class="section-star-toko">
                      <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <div class="section-heading-toko">
                      <span class="heading-toko">Cafe Hambalayo</span>
                    </div>
                    <div class="section-description-toko">
                      <span class="description-toko">Simak, cerita dari cafe hambalayo yang sudah berlangganan dari tahun 2022 di Karyatama, beliau merasakan kecepatan dalam proses orderan dikaryatama.</span>
                    </div>
                  </div>
                  <div class="section-video-review-toko">
                    <iframe class="video-testimoni" width="300" height="315" src="https://www.youtube.com/embed/7rTlNJDKyTk" title="YouTube video player" frameborder="0"></iframe>
                  </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="section-review-toko">
                  <div class="section-rating-toko">
                    <div class="section-star-toko">
                      <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <div class="section-heading-toko">
                      <span class="heading-toko">Toko Sembako - Viona</span>
                    </div>
                    <div class="section-description-toko">
                      <span class="description-toko">Simak, cerita dari ibu lisma yang sudah berlangganan 2 tahun di karyatama, ibu lisma tidak perlu lagi keluar dari desanya untuk berbelanja , cukup pesan lewat Aplikasi Karyatama. </span>
                    </div>
                  </div>
                  <div class="section-video-review-toko">
                    <iframe class="video-testimoni" width="300" height="315" src="https://www.youtube.com/embed/O8Mbxh8PZgA" title="YouTube video player" frameborder="0"></iframe>
                  </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="section-review-toko">
                  <div class="section-rating-toko">
                    <div class="section-star-toko">
                      <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <div class="section-heading-toko">
                      <span class="heading-toko">Toko Sembako - Maju Bersama</span>
                    </div>
                    <div class="section-description-toko">
                      <span class="description-toko">Simak, cerita dari kak habibi salam yang sudah berlangganan di karyatama sejak awal buka toko sembako , beliau sangat puas dengan pelayanan karyawan karyatama.</span>
                    </div>
                  </div>
                  <div class="section-video-review-toko">
                    <iframe class="video-testimoni" width="300" height="315" src="https://www.youtube.com/embed/O8Mbxh8PZgA" title="YouTube video player" frameborder="0"></iframe>
                  </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="section-review-toko">
                  <div class="section-rating-toko">
                    <div class="section-star-toko">
                      <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <div class="section-heading-toko">
                      <span class="heading-toko">Toko Sembako - Alex Mart</span>
                    </div>
                    <div class="section-description-toko">
                      <span class="description-toko">Simak, cerita dari kak habibi salam yang sudah berlangganan di karyatama sejak awal buka toko sembako , beliau sangat puas dengan pelayanan karyawan karyatama.</span>
                    </div>
                  </div>
                  <div class="section-video-review-toko">
                    <iframe class="video-testimoni" width="300" height="315" src="https://www.youtube.com/embed/PfMpExRgobw" title="YouTube video player" frameborder="0"></iframe>
                  </div>
                </div>
            </div>
        
          </div>
          <div class="swiper-button-next" style="color: #c70101; width: 1px; height: 5px;"></div>
          <div class="swiper-button-prev" style="color: #c70101; width: 1px; height: 5px;"></div>
          <!-- <div class="swiper-scrollbar"></div> -->
          <div class="swiper-pagination"></div>
        </div>
      </div>
    <!-- section kata mereka end -->

    <!-- section berita -->
    <div class="container-global">
      <div class="row g-0 text-left other-berita">
        <div class="col-sm-12 col-md-12 col-lg-6">
          <div class="section-berita">
            <div class="heading-nilai-utama">
              <span>BERITA</span>
            </div>
            @foreach ($artikels as $item)
                
            <div class="sub-heading-berita">
              <span
              ><a href="">{{$item->judul}}</a></span
              >
            </div>
            <div class="desc-sub-heading-berita">
              <span
                >{{$item->half_body}}</span
                >
              </div>
              
              <div class="section-time-writer-berita">
                <div class="time-berita">
                <span><i class="bi bi-clock"></i> {{$item->created_at}}</span>
              </div>
              <div class="writer-berita">
                <span><i class="bi bi-pencil"></i> {{$item->author}}</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6 align-center">
          <div class="section-img-berita-favorit">
            <a href=""><img src="{{ asset('storage/' . $item->gambar) }}" alt="" class="img-berita-favorit" /></a>
            @endforeach
          </div>
        </div>
      </div>

      <div class="row g-0">
        @foreach ($artikel as $a)
        <div class="section-content-berita">
          <div class="section-img-berita align-center">
            <img src="{{ asset('storage/' . $a->gambar) }}" alt="" class="img-berita" />
          </div>
          <div class="section-heading-sub-heading-berita">
            <div class="heading-content-berita">
              <span>{{$a->judul}}</span>
            </div>
            <div class="desc-sub-heading-berita">
              <span
                >{{$item->half_body}}</span
              >
            </div>
            <div class="section-content-time-writer-berita">
              <div class="time-berita">
                <span><i class="bi bi-clock"></i>{{$a->created_at}}</span>
              </div>
              <div class="writer-berita">
                <span><i class="bi bi-pencil"></i>{{$a->author}}</span>
              </div>
            </div>
          </div>
        </div>
        
        @endforeach
        {{-- <div class="section-content-berita">
          <div class="section-img-berita align-center">
            <img src="{{url('img/berita-home2.png')}}" alt="" class="img-berita" />
          </div>
          <div class="section-heading-sub-heading-berita">
            <div class="heading-content-berita">
              <span>Daya Beli Meningkat Akibat Transaksi Digital di UMKM</span>
            </div>
            <div class="desc-sub-heading-berita">
              <span
                >Quis arcu viverra adipiscing nisi erat fusce molestie. Vel
                adipiscing diam elementum scelerisque viverra. Ut sit mauris
                ac.</span
              >
            </div>
            <div class="section-content-time-writer-berita">
              <div class="time-berita">
                <span><i class="bi bi-clock"></i> 12 Jan 2023</span>
              </div>
              <div class="writer-berita">
                <span><i class="bi bi-pencil"></i> Karyatama</span>
              </div>
            </div>
          </div>
        </div>
        <div class="section-content-berita">
          <div class="section-img-berita align-center">
            <img src="{{url('img/berita-home3.png')}}" alt="" class="img-berita" />
          </div>
          <div class="section-heading-sub-heading-berita">
            <div class="heading-content-berita">
              <span>Daya Beli Meningkat Akibat Transaksi Digital di UMKM</span>
            </div>
            <div class="desc-sub-heading-berita">
              <span
                >Quis arcu viverra adipiscing nisi erat fusce molestie. Vel
                adipiscing diam elementum scelerisque viverra. Ut sit mauris
                ac.</span
              >
            </div>
            <div class="section-content-time-writer-berita">
              <div class="time-berita">
                <span><i class="bi bi-clock"></i> 12 Jan 2023</span>
              </div>
              <div class="writer-berita">
                <span><i class="bi bi-pencil"></i> Karyatama</span>
              </div>
            </div>
          </div>
        </div>
        <div class="section-berita-lainya">
          <a href="" class="baca-berita-lainya">Baca Berita Lainya</a>
        </div> --}}
      </div>
    </div>
      <!-- section berita end -->

      <!-- section vendor -->
      <div class="container-vendor">
        <div class="section-heading-nilai-utama">
          <div class="heading-nilai-utama">
            <span>VENDOR</span>
          </div>
          <div class="sub-heading-nilai-utama">
            <span>Partner Terbaik Kami</span>
          </div>

          <div class="display-vendor">
              <div class="grid-vendor">
                <div class="img-vendor">
                  <img src="{{url('img/Dua-kelinci.png')}}" alt="Vendor Karyatama">
                </div>
                <div class="img-vendor">
                  <img src="{{url('img/coca-colaa.png')}}" alt="Vendor Karyatama">
                </div>
                <div class="img-vendor">
                  <img src="{{url('img/abc.png')}}" alt="Vendor Karyatama">
                </div>
                <div class="img-vendor">
                  <img src="{{url('img/sidomuncul.png')}}" alt="Vendor Karyatama">
                </div>
                <div class="img-vendor">
                  <img src="{{url('img/clas mild.png')}}" alt="Vendor Karyatama">
                </div>
                <div class="img-vendor">
                  <img src="{{url('img/ABC.jpg')}}" alt="Vendor Karyatama">
                </div>
                <div class="img-vendor">
                  <img src="{{url('img/Wings.png')}}" alt="Vendor Karyatama">
                </div>
                <div class="img-vendor">
                  <img src="{{url('img/unilever.jpg')}}" alt="Vendor Karyatama">
                </div>
                <div class="img-vendor">
                  <img src="{{url('img/bendera.jpg')}}" alt="Vendor Karyatama">
                </div>
                <div class="img-vendor">
                  <img src="{{url('img/sari-husada.jpg')}}" alt="Vendor Karyatama">
                </div>
                <div class="img-vendor">
                  <img src="{{url('img/Sampoerna.jpg')}}" alt="Vendor Karyatama">
                </div>
                <div class="img-vendor">
                  <img src="{{url('img/download.png')}}" alt="Vendor Karyatama">
                </div>
                <div class="img-vendor">
                  <img src="{{url('img/Bintang-toedjoe.png')}}" alt="Vendor Karyatama">
                </div>
                <div class="img-vendor">
                  <img src="{{url('img/Indomarco.jpg')}}" alt="Vendor Karyatama">
                </div>
                <div class="img-vendor">
                  <img src="{{url('img/Korea-Tomorrow.png')}}" alt="Vendor Karyatama">
                </div>
                <div class="img-vendor">
                  <img src="{{url('img/psm.jpg')}}" alt="Vendor Karyatama">
                </div>
                <div class="img-vendor">
                  <img src="{{url('img/PG.jpg')}}" alt="Vendor Karyatama">
                </div>
                <div class="img-vendor">
                  <img src="{{url('img/wilmar.png')}}" alt="Vendor Karyatama">
                </div>
                <div class="img-vendor">
                  <img src="{{url('img/diplomat.png')}}" alt="Vendor Karyatama">
                </div>
                <div class="img-vendor">
                  <img src="{{url('img/Mayora.png')}}" alt="Vendor Karyatama">
                </div>
                <div class="img-vendor">
                  <img src="{{url('img/Ajinomto.png')}}" alt="Vendor Karyatama">
                </div>
                <div class="img-vendor">
                  <img src="{{url('img/pas.png')}}" alt="Vendor Karyatama">
                </div>
                
                <div class="img-vendor">
                  <img src="{{url('img/jarum.png')}}" alt="Vendor Karyatama">
                </div>
                <div class="img-vendor">
                  <img src="{{url('img/PT Surya.jpg')}}" alt="Vendor Karyatama">
                </div>
              </div>
          </div>

          </div>
        </div>
      </div>
    </div>
    <!-- section vendor end -->

    <!-- section bergabung-->
    <div class="bg-bergabung">
      <div class="container-bergabung">
        <div class="row">
          <div class="col-md-6 col-sm-12 mb-2">
            <main>
            <span class="span-benefit">BERGABUNG</span>
            <h2 class="h2-ragam mt-2" style="margin-bottom: 40px">
              Langkah Bergabung <br />Bersama Kami
            </h2>

            <a
              onclick="changeImage('{{url('img/gabung.png')}}')"
              class="btn-gabung mb-3"
            >
              <span>1</span>
              <span>
                Unduh Aplikasi Karyatama Di App <br />
                Store atau Play Store
              </span>
            </a>

            <a
              onclick="changeImage('{{url('img/gabung2.png')}}')"
              class="btn-gabung mb-3"
            >
              <span>2</span>
              <span>
                Isi formulir pendaftaran dengan <br />
                Nama, Alamat Email kamu
              </span>
            </a>

            <a
              onclick="changeImage('{{url('img/gabung3.png')}}')"
              class="btn-gabung mb-3"
            >
              <span>3</span>
              <span>
                Masukan alamat tempat tinggal <br />
                yang valid sesuai dengan domisili
              </span>
            </a>

            <a
              onclick="changeImage('{{url('img/gabung4.png')}}')"
              class="btn-gabung mb-3"
            >
              <span>4</span>
              <span> Pembuatan akun telah selesai </span>
            </a>
          </div>
        </main>

          <div class="col-md-6 col-sm-12 mb-2">
            {{-- <center> --}}
              <img
                id="bannerImage"
                src="{{url('img/gabung2.png')}}"
                alt="Langkah Bergabung"
                class="img-bergabung"
              />
            {{-- </center> --}}
          </div>
        </div>
      </div>
    </div>
@endsection