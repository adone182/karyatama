@extends('layouts.main')

@section('content')
  <div class="background-with-text-karir">
    <div class="container">
      <p class="heading-top-karir">Mari Bergabung Dengan Karyatama Company</p>
      <p class="sub-heading-top-karir">Mauris placerat viverra neque semper nibh hendrerit vulputate augue sagittis. Auctor turpis cursus egesta.</p>
      <span class="d-block p-2">
        <div class="section-img-top-karir">
          <img src="{{url('img/company karir.png')}}" class="img-fluid" alt="" />
        </div>
      </span>
    </div>
  </div>
  <!-- background with text end -->

  <!-- section benefit -->
  <div class="section-benefit">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="heading-benefit">
              <span>BENEFIT</span>
            </div>

            <div class="sub-heading-benefit">
              <span>Keuntungan Bergabung Bersama Karyatama</span>
            </div>

            <div class="row">
              <div class="col-md-6 col-sm-12 mb-2">
                <div class="benefit-content">
                  
                    <img src="{{url('img/hospital.png')}}" width="24" height="24" class="img-fluid" alt="">

                  <div class="heading-benefit-content">
                    <span>Jaminan Keselamatan Kerja</span>
                  </div>
                  <div class="sub-heading-benefit-content">
                    <span>Maecenas suspendisse massa sit ornare.</span>
                  </div>
                </div>
              </div> 

              <div class="col-md-6 col-sm-12 mb-2">
                <div class="benefit-content">
                
                    <img src="{{url('img/jenjang-karir.png')}}" width="24" height="24" class="img-fluid" alt="">
                  
                  <div class="heading-benefit-content">
                    <span>Jenjang Karir Yang Menjanjikan</span>
                  </div>
                  <div class="sub-heading-benefit-content">
                    <span>Maecenas suspendisse massa sit ornare.</span>
                  </div>
                </div>
              </div>
              
              <div class="col-md-6 col-sm-12 mb-2">
                <div class="benefit-content">
                  <div class="logo-benefit">
                    <img src="{{url('img/lingkungan-kerja.png')}}" width="24" height="24" class="img-fluid" alt="">
                  </div>
                  <div class="heading-benefit-content">
                    <span>Lingkungan kerja yang memiliki budaya positif</span>
                  </div>
                  <div class="sub-heading-benefit-content">
                    <span>Maecenas suspendisse massa sit ornare.</span>
                  </div>
                </div>
              </div>

              <div class="col-md-6 col-sm-12 mb-2">
                <div class="benefit-content">
                  <div class="logo-benefit">
                    <img src="{{url('img/reward.png')}}" width="24" height="24" class="img-fluid" alt="">
                  </div>
                  <div class="heading-benefit-content">
                    <span>Reward Kerja Setiap 3 Bulan!</span>
                  </div>
                  <div class="sub-heading-benefit-content">
                    <span>Maecenas suspendisse massa sit ornare.</span>
                  </div>
                </div>
              </div>
          </div>
        </div>

        <div class="col-sm-12 col-md-12 col-lg-6 text-center">
        {{-- <div class="row"> --}}
          {{-- <div class="col-lg-12 col-md-4 col-sm-12"> --}}
            <div class="img-benefit">
              <img src="{{url('img/img-karir-kt-white.png')}}" alt="" class="img-fluid img-benefit-content-top">
            </div>
          {{-- </div> --}}
          {{-- <div class="col-lg-12 col-md-8 col-sm-12 mt-3">
            <div class="img-benefit2" >
              <img src="{{url('img/image-benefit-2.png')}}" alt="" class="img-benefit-content">

              <img src="{{url('img/image-benefit-3.png')}}" alt="" class="img-benefit-content">
            </div> --}}
          {{-- </div> --}}
        {{-- </div> --}}
        </div>

      </div>
    </div>
  </div>

  <!-- section benefit end -->

  <!-- section value -->
  <div class="section-kata-mereka">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
          <div class="">
            <div class="heading-nilai-utama">
              <span>CORE VALUE</span>
            </div>
            <div class="sub-heading-nilai-utama">
              <span>Kami Berpegang Teguh <br> Pada Inti Nilai Karyatama</span>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
          <div class="p-3">
            <div class="accordion" id="accordionExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Ethic For Everyone
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>1. Saling menghargai antar sesama rekan kerja,sales,dan semua yang berhubungan dengan karyatama </p>
                    <p>2. Melayani pelanggan dengan sepenuh hati</p>  
                    <p>3. Tidak ada senioritas</p>
                    <p>4. Sopan santun untuk semua</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    HAPPINESS
                  </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>1. Wajah yang ceria</p>
                    <p>2. Mengucapkan terima kasih, maaf, dan tolong</p>
                    <p>3. Tidak sombang</p>
                    <p>4. Rendah hati</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    COLLABORATION
                  </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>1. Selalu terbuka dan senang saat bekerja sama</p>  
                    <p>2. Semangat dan saling tolong menolong</p>  
                  </div>
                </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    CRITICS IS A GIFT
                  </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>1. Proaktif dalam meminta masukan</p>  
                    <p>2. Membari masukan bermakna buat teman kerja</p>  
                    <p>3. Menjalani masukan yang diterima dengan tulus</p>  
                  </div>
                </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingFive">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                    CARE FOR THE ENVIRONMENT 
                  </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>1. Tidak membuang sampah sembarangan</p>  
                    <p>2. Menjaga gudang tetap dalam keadaan rapi</p>  
                    <p>3. Mencabut stok kontak dan mengatur peralatan elektronik dalam kondisi auto off ketika tidak digunakan</p>  
                    <p>4. Tidak merokok di lingkungan kerja</p>  
                  </div>
                </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingSix">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                    DISCIPLINE
                  </button>
                </h2>
                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>1. Tidak datang terlambat</p>  
                    <p>2. Taat peraturan</p>  
                    <p>3. Inisiatif & kreatif</p>
                  </div>
                </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingSeven">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                    ALWAYS BE PREPARED
                  </button>
                </h2>
                <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>1. Memiliki rencana untuk berbagi scenario</p>  
                    <p>2. Ambil tindakan cepat untuk mengurangi risiko</p>  
                    <p>3. Mengerjakan semua tugas yang dibutuhkan</p>
                  </div>
                </div>
              </div>
              </div>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- section value end -->

  <!-- kata pekerja karyatama -->
  <div class="container">
      <div class="section-heading-nilai-utama">
        <div class="heading-nilai-utama">
          <span>KATA PEKERJA KARYATAMA</span>
        </div>
        <div class="sub-heading-nilai-utama">
          <span>Cerita Para Pekerja Karyatama</span>
        </div>
  
      <!-- carosel -->
        <div class="swiper swiperKarir" style="margin-top: 80px;">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="section-description">
                <span class="description">Bekerja di Karyatama membuat saya berkembang dan belajar banyak hal.</span>
              </div>
              <div class="section-detail-position">
                <div class="img-profile-karir">  
                  <img src="{{url('img/testimoni-1.jpg')}}" class="img-karir"/>
                </div>
                <div class="section-name-jobdesk">
                  <div class="name-karir">
                    <span class="name-person">Winda Susanti</span>
                  </div>
                  <div class="jobdesk-karir">
                    <span class="jobdesk">Finance Senior Staff</span>
                  </div>
                </div>
              </div>  
            </div>
            <div class="swiper-slide">
              <div class="section-description">
                <span class="description">Karyatama telah memberikan saya banyak pengalaman dan hal-hal baru.</span>
              </div>
              <div class="section-detail-position">
                <div class="img-profile-karir">  
                  <img src="{{url('img/tim-2.jpg')}}" class="img-karir" />
                </div>
                <div class="section-name-jobdesk">
                  <div class="name-karir">
                    <span class="name-person">Fitriana Sari</span>
                  </div>
                  <div class="jobdesk-karir">
                    <span class="jobdesk">Supervisor</span>
                  </div>
                </div>
              </div>  
            </div>
            {{-- <div class="swiper-slide">
              <div class="section-description">
                <span class="description">Sed nulla fringilla tempus ac. Mi ullamcorper egestas egestas rutrum accumsan. Semper arcu mauris tincidunt aliquam sed
                magna.</span>
              </div>
              <div class="section-detail-position">
                <div class="img-profile-karir">  
                  <img src="{{url('img/work-3.jpg')}}" class="img-karir" />
                </div>
                <div class="section-name-jobdesk">
                  <div class="name-karir">
                    <span class="name-person">Riyan Alahonk</span>
                  </div>
                  <div class="jobdesk-karir">
                    <span class="jobdesk">Lead Marketing Team</span>
                  </div>
                </div>
              </div>  
            </div> --}}
            <div class="swiper-slide">
              <div class="section-description">
                <span class="description">Rekan rekan di karyatama sangat seru, bekerja jadi lebih enak.</span>
              </div>
              <div class="section-detail-position">
                <div class="img-profile-karir">  
                  <img src="{{url('img/work-4.jpg')}}" class="img-karir"/>
                </div>
                <div class="section-name-jobdesk">
                  <div class="name-karir">
                    <span class="name-person">Ridho</span>
                  </div>
                  <div class="jobdesk-karir">
                    <span class="jobdesk">Kurir</span>
                  </div>
                </div>
              </div>  
            </div>
            <div class="swiper-slide">
              <div class="section-description">
                <span class="description">Rekan kerja di Karyatama semuanya energik membuat saya selalu semangat.</span>
              </div>
              <div class="section-detail-position">
                <div class="img-profile-karir">  
                  <img src="{{url('img/work-5.jpg')}}" class="img-karir"/>
                </div>
                <div class="section-name-jobdesk">
                  <div class="name-karir">
                    <span class="name-person">Jaka Kurniawan</span>
                  </div>
                  <div class="jobdesk-karir">
                    <span class="jobdesk">Driver Mobil</span>
                  </div>
                </div>
              </div>  
            </div>
            <div class="swiper-slide">
              <div class="section-description">
                <span class="description">Karyatama anti lingkungan toxic, membuat bekerja jadi lebih nyaman.</span>
              </div>
              <div class="section-detail-position">
                <div class="img-profile-karir">  
                  <img src="{{url('img/yessi.jpg')}}" class="img-karir"/>
                </div>
                <div class="section-name-jobdesk">
                  <div class="name-karir">
                    <span class="name-person">Yessi Dwi Aryani</span>
                  </div>
                  <div class="jobdesk-karir">
                    <span class="jobdesk">Admin Umum</span>
                  </div>
                </div>
              </div>  
            </div>
            {{-- <div class="swiper-slide">
              <div class="section-description">
                <span class="description">Sed nulla fringilla tempus ac. Mi ullamcorper egestas egestas rutrum accumsan. Semper arcu mauris tincidunt aliquam sed
                magna.</span>
              </div>
              <div class="section-detail-position">
                <div class="img-profile-karir">  
                  <img src="{{url('img/pekerja-1.png')}}" class="img-karir"/>
                </div>
                <div class="section-name-jobdesk">
                  <div class="name-karir">
                    <span class="name-person">Riyan Alahonk</span>
                  </div>
                  <div class="jobdesk-karir">
                    <span class="jobdesk">Lead Marketing Team</span>
                  </div>
                </div>
              </div>  
            </div> --}}
            {{-- <div class="swiper-slide">
              <div class="section-description">
                <span class="description">Sed nulla fringilla tempus ac. Mi ullamcorper egestas egestas rutrum accumsan. Semper arcu mauris tincidunt aliquam sed
                magna.</span>
              </div>
              <div class="section-detail-position">
                <div class="img-profile-karir">  
                  <img src="{{url('img/pekerja-1.png')}}" class="img-karir"/>
                </div>
                <div class="section-name-jobdesk">
                  <div class="name-karir">
                    <span class="name-person">Riyan Alahonk</span>
                  </div>
                  <div class="jobdesk-karir">
                    <span class="jobdesk">Lead Marketing Team</span>
                  </div>
                </div>
              </div>  
            </div> --}}
            {{-- <div class="swiper-slide">
              <div class="section-description">
                <span class="description">Sed nulla fringilla tempus ac. Mi ullamcorper egestas egestas rutrum accumsan. Semper arcu mauris tincidunt aliquam sed
                magna.</span>
              </div>
              <div class="section-detail-position">
                <div class="img-profile-karir">  
                  <img src="{{url('img/pekerja-1.png')}}" class="img-karir"/>
                </div>
                <div class="section-name-jobdesk">
                  <div class="name-karir">
                    <span class="name-person">Riyan Alahonk</span>
                  </div>
                  <div class="jobdesk-karir">
                    <span class="jobdesk">Lead Marketing Team</span>
                  </div>
                </div>
              </div>  
            </div> --}}
            {{-- <div class="swiper-slide">
              <div class="section-description">
                <span class="description">Sed nulla fringilla tempus ac. Mi ullamcorper egestas egestas rutrum accumsan. Semper arcu mauris tincidunt aliquam sed
                magna.</span>
              </div>
              <div class="section-detail-position">
                <div class="img-profile-karir">  
                  <img src="{{url('img/pekerja-1.png')}}" class="img-karir"/>
                </div>
                <div class="section-name-jobdesk">
                  <div class="name-karir">
                    <span class="name-person">Riyan Alahonk</span>
                  </div>
                  <div class="jobdesk-karir">
                    <span class="jobdesk">Lead Marketing Team</span>
                  </div>
                </div>
              </div>  
            </div> --}}
            
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
          <!-- <div class="swiper-scrollbar"></div> -->
          <div class="swiper-pagination"></div>
        </div>
      </div>
  </div>
@endsection