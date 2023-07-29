@extends('layouts.main')

@section('content')
<!-- main content -->
<main>
  <div class="container">
    <div class="row">
      <div class="about-1 col-lg-7 col-md-7 col-sm-12">
        <h1 class="h1-about">Kami Mendengar Apa yang anda butuhkan</h1>
        <p class="p-about">
          Mauris placerat viverra neque semper nibh hendrerit vulputate
          augue sagittis. Auctor turpis cursus egesta.
        </p>
      </div>

      <div class="about-2 col-lg-4 col-md-5 col-sm-12">
        <span class="span-about">Hubungi Kami</span>
        <div class="ico-about">
          <i class="bi bi-telephone">
            <span style="margin-left: 10px">+62 853 3752 2288</span></i
          >
        </div>
        <div class="ico-about">
          <i class="bi bi-envelope-paper-heart">
            <span style="margin-left: 10px">Admin@karyatama.co.id</span></i
          >
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="bg-form">
      <h4 class="form-subtitle">Tanyakan Segala Pertanyaanmu</h4>

      <form
        id="contact-form"
        class="row g-3"
        action="https://formspree.io/f/mdovldgy"
        method="POST"
      >
        <div class="col-md-6 col-sm-12">
          <label for="name" class="form-label red-bold">Nama Lengkap</label>
          <input
            type="text"
            name="name"
            id="name"
            class="form-control form-color"
            placeholder="Masukan nama lengkap"
            required
          />
        </div>
        <div class="col-md-6 col-sm-12">
          <label for="email" class="form-label red-bold"
            >Alamat Email</label
          >
          <input
            type="email"
            id="email"
            name="email"
            class="form-control form-color"
            placeholder="contoh@mail.com"
            required
          />
        </div>
        <div class="col-md-6 col-sm-12">
          <label for="phone" class="form-label red-bold"
            >Nomor Handphone</label
          >
          <input
            type="phone number"
            class="form-control form-color"
            id="phone"
            name="phone"
            placeholder="0800  9090  8890"
            maxlength="16"
            required
          />
        </div>
        <div class="col-md-6 col-sm-12">
          <label for="subject" class="form-label red-bold"
            >Hal Yang Ditanyakan</label
          >
          <select
            id="subject"
            name="subject"
            class="form-select form-color"
            required
          >
            <option value="Cara Order Produk di Karyatama">
              Cara Order Produk di Karyatama
            </option>
            <option value="Cara download applikasi Karyatama">
              Cara download applikasi Karyatama
            </option>
            <option value="Cara daftar di aplikasi Karyatama">
              Cara daftar di aplikasi Karyatama
            </option>
          </select>
        </div>
        <div class="col-12 mb-3">
          <label for="message" class="form-label red-bold"
            >Tulis Pesanmu..</label
          >
          <textarea
            class="form-control form-color"
            id="message"
            name="message"
            rows="5"
            placeholder="Ketik pertanyaanmu disini dengan detail.."
            required
          ></textarea>
        </div>
        <div class="button-about col-12">
          <button type="submit" class="btn-form">Kirim Pesan</button>
        </div>
      </form>
    </div>
  </div>
</main>
@endsection