@extends('layouts.main')

@section('content')
  
    <!-- main content -->
    <div class="bg-berita-view"></div>
    <main>
      <div class="circular-view">
        <div class="container">
          <a class="backToBerita" href="{{url('/news')}}"
            >&#129128; <span style="margin-left: 10px">Kembali</span></a
          >
          <div class="row">
            {{-- @foreach ($artikel as $item) --}}
            <div class="col-lg-8 col-md-7 col-sm-12">
              <img src="{{ asset('storage/' . $artikel_detail->gambar) }}" alt="Image Null" title="" style="width: 200px">
              <h1 class="h1-berita-view">
                {{$artikel_detail->judul}}
              </h1>
              <div class="d-flex">
                <div class="ico-news me-4">
                  <i class="bi bi-clock"></i>
                  <span>{{$artikel_detail->created_at}}</span>
                </div>

                <div class="ico-news">
                  <i class="bi bi-pencil-square"></i>
                  <span>{{$artikel_detail->author}}</span>
                </div>
              </div>

              <p class="paragraf-news mt-5">
                {{$artikel_detail->body}}
              </p>
              {{-- @endforeach --}}

              <div class="d-flex mb-3" style="margin-top: 100px">
                <span class="span-news-view">Bagikan</span>
                <div class="ms-5 justify-content-between">
                  <a href="" style="text-decoration: none; color: #c70101">
                    <i class="bi bi-facebook me-4"></i>
                  </a>
                  <a href="" style="text-decoration: none; color: #c70101">
                    <i class="bi bi-twitter me-4"></i>
                  </a>
                  <a href="" style="text-decoration: none; color: #c70101">
                    <i class="bi bi-instagram me-4"></i>
                  </a>
                  <a href="" style="text-decoration: none; color: #c70101">
                    <i class="bi bi-whatsapp me-4"></i>
                  </a>
                  <a href="" style="text-decoration: none; color: #c70101">
                    <i class="bi bi-linkedin me-4"></i>
                  </a>
                </div>
              </div>

              <div class="d-flex">
                <span class="span-news-view">Tags</span>
                <div class="ms-5 justify-content-between">
                  <span
                    style="
                      background-color: #f7f7f7;
                      padding: 5px 20px;
                      border-radius: 5px;
                      margin-bottom: 10px;
                    "
                    >Produk</span
                  >
                  <span
                    style="
                      background-color: #f7f7f7;
                      padding: 5px 20px;
                      border-radius: 5px;
                      margin-bottom: 10px;
                    "
                    >Harga Produk</span
                  >
                  <span
                    style="
                      background-color: #f7f7f7;
                      padding: 5px 20px;
                      border-radius: 5px;
                      margin-bottom: 10px;
                    "
                    >Penjualan</span
                  >
                  <span
                    style="
                      background-color: #f7f7f7;
                      padding: 5px 20px;
                      border-radius: 5px;
                      margin-bottom: 10px;
                    "
                    >Digital</span
                  >
                </div>
              </div>
            </div>

            <div
              class="col-lg-4 col-md-5 col-sm-12"
              style="margin: 45px 0 140px"
            >
            <span class="span-news">Berita Lainnya</span>
            @foreach ($artikelterkait as $item)

              <div class="mt-4">
                {{-- <a
                  href="{{url('/news-details')}}"
                  style="color: #252525; text-decoration: none"
                > --}}
                  <img
                    class="cards"
                    src="{{ asset('storage/' . $item->gambar) }}"
                    alt=""
                  />
                  <h4 class="judul-news mt-2" style="text-align: justify">
                    {{$item->judul}}
                  </h4>
                {{-- </a> --}}
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
          </div>
        </div>
      </div>

    </main>
@endsection
