@extends('layouts.main')   

@section('content')
  
    <!-- main content -->
    <div class="container-global">
      <h1 class="h1-produk">Berinovasi Dengan Karyatama</h1>
      <p class="text-center sub-paragraf">
        Karyatama berkomitmen untuk terus mempertahankan eksistensi dan memperluas pangsa pasar di wilayah Sumatera Selatan, dengan terus berinovasi baik di toko offline maupun dengan aplikasi mobile. Dengan terus berinovasi, Karyatama dapat memberikan pengalaman berbelanja yang lebih baik kepada pelanggan, meningkatkan efisiensi dalam proses pembelian dan penjualan, serta meningkatkan kualitas produk yang ditawarkan.
      </p>
    </div>

    <div class="d-flex justify-content-center">
      <a href="#unduh" class="button-produk-red"> Unduh Aplikasi &#129131; </a>
    </div>

    <!-- background & download -->
    <div class="bg-produk" style="margin-top: 170px">
      <center>
        <img class="img-phone" src="{{url('img/produks.png')}}" alt=""/>
      </center>

      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-12">
            <h2 class="h2-unduh">
              Unduh Aplikasinya Dan Bergabung Bersama Kami
            </h2>
          </div>
          <div class="col-md-6 col-sm-12">
            <div
              class="unduh d-flex justify-content-center align-items-end gap-3"
            >
              <a href="https://apps.apple.com/id/app/pasar-karyatama/id1527856049">
                <img class="img-on-bg" src="{{('img/App Store.png')}}" alt=""
              /></a>
              <a href="https://play.google.com/store/apps/details?id=com.pasarkaryatama.app">
                <img
                  class="img-on-bg2"
                  src="{{url('img/Google Play.png')}}"
                  alt=""
                />
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- section benefit -->
    <div class="bg-secondary-produk">
      <div class="container-global" style="padding: 86px 20px 86px">
        <span class="span-benefit">Benefit</span>
        <div class="row" style="margin-top: 15px">
          <div class="col-md-5">
            <h2 class="h2-ragam">Ragam Keuntungan <br />Dari Karyatama</h2>
          </div>
          <div class="col-md-7">
            <p class="p-ragam mt-2">
              <p><b>1. Harga yang kompetitif - </b> Toko grosir sembako Karyatama menawarkan harga yang kompetitif dan lebih murah dibandingkan dengan harga di pasar atau toko lainnya. Hal ini tentunya memberikan keuntungan bagi pelanggan yang ingin membeli barang dalam jumlah besar untuk dijual kembali atau untuk kebutuhan bisnisnya.</p>

              <p><b>2. Pilihan barang yang lengkap - </b> Toko grosir sembako Karyatama menyediakan berbagai macam barang sembako yang lengkap, dari beras, minyak goreng, gula, mie instan, dan lain sebagainya. Hal ini memudahkan pelanggan untuk membeli barang sesuai dengan kebutuhan dan keinginannya.</p> 
        
              <p><b>3. Kualitas barang yang terjamin - </b> Toko grosir sembako Karyatama hanya menjual barang yang berkualitas baik dan terjamin keasliannya. Pelanggan tidak perlu khawatir akan mendapatkan barang palsu atau barang yang tidak berkualitas jika membeli di toko ini.</p> 

              <p><b>4. Inovasi dan kemudahan berbelanja - </b>Toko grosir sembako Karyatama menggunakan inovasi di toko offline dan juga menggunakan aplikasi mobile yang memudahkan pelanggan untuk berbelanja. Pelanggan dapat memesan barang dengan mudah dan cepat melalui aplikasi mobile tanpa harus datang ke toko. Selain itu, toko juga menyediakan layanan antar barang ke lokasi pelanggan dengan harga yang terjangkau.</p>

              <p><b>5. Layanan yang ramah dan professional - </b>Toko grosir sembako Karyatama memiliki karyawan yang ramah dan professional dalam melayani pelanggan. Mereka siap membantu dan memberikan informasi yang dibutuhkan oleh pelanggan, serta memberikan saran dan solusi terbaik jika pelanggan mengalami masalah dalam berbelanja.</p>
            </p>
          </div>
        </div>

        <div class="card-benefit mt-5">
          <div class="benefit-cards">
            <i class="bi bi-grid icon"></i>

            <p class="title-benefit">
              Kemudahan Akses Dalam Genggaman Tangan
            </p>
          </div>

          <div class="benefit-card">
            <i class="bi bi-tags icon"></i>

            <p class="title-benefits">
              Menjamin Harga Terbaik Tanpa Perantara
            </p>
          </div>

          <div class="benefit-cards">
            <i class="bi bi-box2 icon"></i>
            <!-- <i class="bi bi-shop icon"></i> -->

            <p class="title-benefit">
              Isi Ulang Stok Cepat Tanpa Keluar Keringat
            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- section category -->
    <div class="container" style="padding: 86px 15px">
      <span class="span-kategori text-center">Kategori</span>
      <h2 class="h2-sub-heading-main-produk text-center mt-2">
        Lebih Dari 3.000 Produk Tersedia Disini
      </h2>

      <div class="card-produk-top">
        <div class="section-produk-top">
          <div class="section-heading-produk">
            <h4 class="heading-produk">Sembako</h4>
          </div>
          <div class="sub-heading-produk">
            <span class="sub-heading-produk">28 Produk Tersedia</span>
          </div>
          <div class="img-produk-sembako">
            <img src="{{url('img/sembako.png')}}" alt="">
          </div>
        </div>
        <div class="section-produk-top">
          <div class="section-heading-produk">
            <h4 class="heading-produk">Home Care</h4>
          </div>
          <div class="sub-heading-produk">
            <span class="sub-heading-produk">62 Produk Tersedia</span>
          </div>
          <div class="img-produk-home-care">
            <img src="{{url('img/home-care.png')}}" alt="">
          </div>
        </div>
      </div>

      <div class="card-produk-bottom">
        <div class="section-produk-top">
          <div class="section-heading-produk">
            <h4 class="heading-produk">Minyak</h4>
          </div>
          <div class="sub-heading-produk">
            <span class="sub-heading-produk">48 Produk Tersedia</span>
          </div>
          <div class="img-produk-minyak">
            <img src="{{url('img/minyak.png')}}" alt="">
          </div>
        </div>
        <div class="section-produk-top" style="background: #FBFBFB; border:  border-radius: 20px;">
          <div class="section-heading-produk">
            <h4 class="heading-produk">Makanan Ringan</h4>
          </div>
          <div class="sub-heading-produk">
            <span class="sub-heading-produk">18 Produk Tersedia</span>
          </div>
          <div class="img-produk-makanan-ringan">
            <img src="{{url('img/makanan-ringan.png')}}" alt="">
          </div>
        </div>
        <div class="section-produk-top" style="background: #FBFBFB; border:  border-radius: 20px;">
          <div class="section-heading-produk">
            <h4 class="heading-produk">Minuman</h4>
          </div>
          <div class="sub-heading-produk">
            <span class="sub-heading-produk">17 Produk Tersedia</span>
          </div>
          <div class="img-produk-minuman">
            <img src="{{url('img/minuman.png')}}" alt="">
          </div>
        </div>
      </div>

      <div class="d-flex justify-content-center mt-5">
        <a href="#" class="button-produk-red"> Unduh Laporan Stok</a>
      </div>
    </div>

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

            </main>
          </div>

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