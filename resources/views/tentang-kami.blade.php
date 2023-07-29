@extends('layouts.main')

@section('content')

    <!-- section upper background body -->
    {{-- <div class="bg-about"> --}}
    <div class="container">
        <div class="row g-0">
          <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
            <div class="section-heading-tentang-kami">
              <h1 class="heading-tentang-kami">Kenal Lebih Jauh Tentang Karyatama</h1>
              <span class="sub-heading-tentang-kami">Karyatama merupakan pioneer toko grosir sembako yang terletak di salah satu kota pada provinsi Sumatera Selatan, dipercaya lebih dari 20 tahun dan telah berinovasi go digital sejak tahun 2020</span>
              <div class="section-cerita-kami">
                <a href="{{route('news')}}" class="cerita-kami">Lihat Cerita Kami</a>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
            <div class="section-img-tentang-kami">
              <img
                src="{{url('img/bg-about-mobile.png')}}"
                alt=""
                class="text-center img-tentang-kami"
              />
            </div>
          </div>
        </div>
    </div>
    {{-- </div> --}}
    <!-- section upper background body end -->

    <!-- section cerita kami -->
    <div class="bg-body-about">
      <div class="container">
          <div class="section-cerita-kami">
            <div class="row g-0">
                <div class="col-sm-12 col-md-6">
                  <div class="section-heading-cerita-kami">
                      <div class="heading-cerita-kami">
                      <span>CERITA KAMI</span>
                      </div>
                      <div class="sub-heading-cerita-kami">
                      <span>Cerita Bagaimana <br> Karyatama Berdiri</span>
                      </div>
                  </div>
                </div>
                <div class="col-sm-12 col-md-6">
                  <div class="section-desc-cerita-kami">
                      <p>
                      "Sejak tahun 1999, Karyatama telah berdiri sebagai toko grosir
                      sembako terkemuka. Kami bangga menjadi salah satu pionir dalam
                      bidang ini di Kota Lubuklinggau dan terus berinovasi untuk
                      memberikan yang terbaik bagi pelanggan kami.
                      </p>
                      <p>
                      Waktu demi waktu, kami terus berkembang dan beradaptasi dengan
                      perkembangan teknologi. Kini, kami memiliki inovasi di bidang
                      teknologi berupa aplikasi yang memungkinkan kami menjaga
                      eksistensi dan kesuksesan . Kami memberikan pelayanan terbaik
                      dan pengalaman belanja yang mudah bagi pelanggan kami, dengan
                      menggabungkan teknologi terbaru dan praktik bisnis yang baik dan
                      bertanggung jawab kepada pelanggan."
                      </p>
                  </div>
                </div>
            </div>
          </div>
  
          <div class="news-list" id="news-list">
          <span class="span-news">Karyatama News</span>
  
          <div class="row mt-4 mb-5">
            @foreach ($artikel as $item)
            <div class="news-query col-lg-4 col-md-6 col-sm-12">
            <img
                class="cards"
                src="{{ asset('storage/' . $item->gambar) }}"
                alt="benefit-card-02"
            />

            <h4 class="judul-news text-justify">
                {{$item->judul}}
            </h4>

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

      <div class="section-berita-lainya">
        <a href="{{route('news')}}" class="baca-berita-lainya">Baca Berita Lainnya</a>
      </div>
    </div>
    <!-- section cerita kami end -->

    <!-- tim terbaik karyatama -->
    <div class="section-tim">
      <div class="container">
        <div class="section-heading-nilai-utama">
          <div class="heading-nilai-utama">
            <span>TIM KARYATAMA</span>
          </div>
          <div class="sub-heading-nilai-utama">
            <span>Team Terbaik dari Karyatama</span>
          </div>
        </div>

        <div class="row g-0">
          {{-- <div class="col-12 col-md-6 col-lg-4">
            <div class="card-tim">
              <img
                src="{{url('img/tim-1.webp')}}"
                class="img-fluid"
                alt=""
              />
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">
                  Some quick example text to build on the card title and make up
                  the bulk of the card's content.
                </p>
                
              </div>
            </div>
          </div> --}}
          <div class="col-12 col-md-6 col-lg-4">
            <div class="card-tim">
              <img
                src="{{url('img/tim-1.webp')}}"
                class="card-img-top"
                alt="assets/img/tim1.png"
              />
              <div class="card-body">
                <h6>Senior Advisor</h6>
                <h5 class="card-title">Rahmat Hidayat</h5>
                <p class="card-text">
                  Founder yang telah mendirikan Karyatama <b>dari 0 hingga sekarang</b>, kini juga menjabat sebagai senior advisor di karyatama
                </p>
                
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-4">
            <div class="card-tim">
              <img
                src="{{url('img/tim-2.webp')}}"
                class="card-img-top"
                alt="assets/img/tim1.png"
              />
              <div class="card-body">
                <h6>Senior Advisor</h6>
                <h5 class="card-title">Patri Hartuti</h5>
                <p class="card-text">
                  Mendampingi founder mendirikan karyatama dari tahun <b>1999</b>, kini juga menjabat sebagai senior advisor di karyatama
                </p>
                
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-4" style="border: none">
            <div class="card-tim">
              <img
                src="{{url('img/tim-3.webp')}}"
                class="card-img-top"
                alt="assets/img/tim1.png"
              />
              <div class="card-body">
                <h6>Chief Executive Officer</h6>
                <h5 class="card-title">Febriansyah Hidayat</h5>
                <p class="card-text">
                  Generasi kedua dari karyatama yang telah berhasil <b> meningkatkan omset karyatama hingga 2x lipat </b> melalui digitalisati, membuat karyatama semakin kuat secara fundamental
                </p>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- tim terbaik karyatama end -->

    <!-- section tujuan & visi misi -->
    <div class="container-form">
      <div class="box-toggle">
          <div class="toggle  active" data-text="Visi & Misi Kami"></div>
          <div class="toggle" data-text="Tujuan Kami"></div>
      </div>

      <div class="content active">
          <div class="d-flex justify-content-center flex-wrap flex-md-nowrap align-items-center pt-0 pb-0 mb-3 mt-5">
              <h2 class="headOfVision">Visi & Misi Kami</h2>
          </div>

          <div class="wrapper-content">
              <p class="heading-about-visi text-start"> Visi </span>
              <p class="text-justify text-secondary mb-3">
                Memberikan kemudahan akses rantai pasokan B2B Retail Tradisional </p>

              <p class="heading-about-misi text-start">Misi</span>
              <p class="text-justify text-secondary mb-3">
                Memberdayakan pedangan eceran retail agar dapat melakukan transaksi lebih cepat, mudah serta mendapatkan harga terbaik melalui teknologi.</p>
          </div>
      </div>

      <div class="content">
          <div class="d-flex justify-content-center flex-wrap flex-md-nowrap align-items-center pt-0 pb-0 mb-3 mt-5">
              <h2 class="headOfVision">Tujuan Kami</h2>
          </div>

          <div class="wrapper-content">
            <p class="text-justify text-secondary mb-3">Tujuan utama dari  Karyatama adalah sebagai berikut:</p>
              
            <p class="text-justify text-secondary mb-3">1. Menjaga dan meningkatkan kualitas produk dan layanan untuk memenuhi kebutuhan pelanggan dengan harga yang bersaing.</p>

            <p class="text-justify text-secondary mb-3">2. Mengembangkan kerjasama yang kuat dengan pemasok dan produsen sembako untuk mendapatkan produk dengan kualitas terbaik dan harga yang kompetitif.</p>

            <p class="text-justify text-secondary mb-3">3. Meningkatkan efisiensi dan efektivitas dalam operasional toko dengan teknologi terbaru, seperti menggunakan aplikasi mobile untuk mempermudah proses pembelian dan pengiriman produk.</p>

            <p class="text-justify text-secondary mb-3">4. Terus mengembangkan inovasi dalam pengelolaan toko offline dan online untuk memberikan pengalaman belanja yang lebih baik bagi pelanggan.</p>

            <p class="text-justify text-secondary mb-3">5. Menjalin hubungan yang baik dengan komunitas dan konsumen melalui kegiatan sosial dan pemberian informasi yang bermanfaat tentang sembako dan penggunaannya.</p>

            <p class="text-justify text-secondary mb-3">Dengan berbagai tujuan tersebut,  Karyatama dapat terus tumbuh dan berkembang dalam bisnis sembako, meningkatkan kepuasan pelanggan, serta membantu masyarakat dalam memenuhi kebutuhan dasar mereka dengan mudah dan terjangkau.</p>
            
          </div>
      </div>
    </div>
    <!-- section wilayah -->
    <div class="section-area">
      <div class="container">
        <div class="row gy-5">
          <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8">
            <div class="section-heading-cerita-kami">
              <div class="heading-cerita-kami">
                <span>JANGKAU AREA</span>
              </div>
              <div class="sub-heading-cerita-kami">
                <span>Cakupan Wilayah Kami</span>
              </div>
              <div class="section-img-wilayah">
                <img src="{{url('img/wilayah.png')}}" class="maps img-fluid" alt="..." />
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
            <div class="section-cakupan-wilayah">
              <div class="heading-cakupan-wilayah">
                <a href="" class="cek-cakupan-wilayah">Cek Cakupan Areamu</a>
              </div>
              <div class="section-background-wilayah">
                <div class="content-background-wilayah">
                  <div class="icon-wilayah"><i class="bi bi-map"></i></div>
                  <div class="jumlah-jangkauan-wilayah">
                    <span>200+</span>
                  </div>
                  <div class="jangkaun-kota">
                    <span class="heading-jangkauan-kota"
                      >Jangkauan Kota, Kabupaten, <br> Kecataman & Desa</span
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- section tujuan & visi misi end -->

    <!-- section wilayah -->
    {{-- <div class="section-area">
      <div class="container-global">
        <div class="row gy-5">
          <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8">
            <div class="section-heading-cerita-kami">
              <div class="heading-cerita-kami">
                <span>JANGKAU AREA</span>
              </div>
              <div class="sub-heading-cerita-kami">
                <span>Cakupan Wilayah Kami</span>
              </div>
              <div class="section-img-wilayah">
                <img src="assets/img/wilayah.png" class="img-fluid" alt="..." />
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
            <div class="section-cakupan-wilayah">
              <div class="heading-cakupan-wilayah">
                <a href="" class="cek-cakupan-wilayah">Cek Cakupan Areamu</a>
              </div>
              <div class="section-background-wilayah">
                <div class="content-background-wilayah">
                  <div class="icon-wilayah"><i class="bi bi-map"></i></div>
                  <div class="jumlah-jangkauan-wilayah">
                    <span>200+</span>
                  </div>
                  <div class="jangkaun-kota">
                    <span class="heading-jangkauan-kota"
                      >Jangkauan Kota, Kabupaten, <br> Kecataman & Desa</span
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> --}}
  
<script>
  // Mengatur toggle button untuk mengganti konten
  const toggleButtons = document.querySelectorAll('.toggle');
  const panduanContent = document.querySelectorAll('.content')[0];
  const formPengajuanContent = document.querySelectorAll('.content')[1];

  toggleButtons.forEach(function(button) {
      button.addEventListener('click', function() {
          toggleButtons.forEach(function(btn) {
              btn.classList.toggle('active');
          });

          panduanContent.classList.toggle('active');
          formPengajuanContent.classList.toggle('active');
      });
  });
</script>
@endsection