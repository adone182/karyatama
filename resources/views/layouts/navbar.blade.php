<!-- navigation bar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img
            src="{{url('img/main-logo-karyatama.png')}}"
            alt="Logo Karyatama"
            width="53"
            height="28"
          />
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto gap-3 mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link " aria-current="page" href="/" style="color: #fff;">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="{{url('/tentang-kami')}}">Tentang Kami</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="{{url('/product')}}">Produk</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="{{url('/news')}}">Berita</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="{{url('/karir')}}">Karir</a>
            </li>
          </ul>

          <ul class="navbar-nav mb-2 mb-lg-0">
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarDropdown"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                | ID
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li>
                  <a
                    href="#googtrans(id|id)"
                    class="dropdown-item lang-select"
                    data-lang="id"
                    >ID</a
                  >
                </li>
                <li>
                  <a
                    href="#googtrans(id|en)"
                    class="dropdown-item lang-select"
                    data-lang="en"
                    >EN</a
                  >
                </li>
              </ul>
            </li>
          </ul>
          
          <!-- Dropdown Bahasa -->
      {{-- <ul class="navbar-nav mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            | ID
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li>
              <a href="javascript:void(0);" class="dropdown-item lang-select" data-lang="id">ID</a>
            </li>
            <li>
              <a href="javascript:void(0);" class="dropdown-item lang-select" data-lang="en">EN</a>
            </li>
          </ul>
        </li>
      </ul> --}}
        </div>
      </div>
    </nav>
<!-- end navigation bar -->
{{-- <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-white">
  <div class="container">
      <a class="navbar-brand" href="#">
          <img
          src="{{url('img/logo.png')}}"
          alt="Logo Karyatama"
          width="53"
          height="28"
          />
      </a>
      <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
      >
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto gap-3 mb-2 mb-lg-0">
          <li class="nav-item">
              <a class="nav-link {{ $active === 'HOME' ? 'active' : '' }}" aria-current="page" href="/" style="color: #FFEBEB; font-family: 'Poppins'; font-size: 16px; font-weight: 400; line-height: 150%; letter-spacing: -0.01em;">Home</a>
          </li>
          <li class="nav-item">
              <a class="nav-link {{ $active === 'TENTANG KAMI' ? 'active' : '' }}" href="{{url('/tentang-kami')}}" style="color: #FFEBEB; font-family: 'Poppins'; font-size: 16px; font-weight: 400; line-height: 150%; letter-spacing: -0.01em;">Tentang Kami</a>
          </li>
          <li class="nav-item">
              <a class="nav-link {{ $active === 'PRODUCT' ? 'active' : '' }}" href="{{url('/product')}}" style="color: #FFEBEB; font-family: 'Poppins'; font-size: 16px; font-weight: 400; line-height: 150%; letter-spacing: -0.01em;">Produk</a>
          </li>
          <li class="nav-item">
              <a class="nav-link {{ $active === 'BERITA' ? 'active' : '' }}" href="{{url('/news')}}" style="color: #FFEBEB; font-family: 'Poppins'; font-size: 16px; font-weight: 400; line-height: 150%; letter-spacing: -0.01em;">Berita</a>
          </li>
          <li class="nav-item">
              <a class="nav-link {{ $active === 'KARIR' ? 'active' : '' }}" href="{{url('/karir')}}" style="color: #FFEBEB; font-family: 'Poppins'; font-size: 16px; font-weight: 400; line-height: 150%; letter-spacing: -0.01em;">Karir</a>
          </li>
          </ul>
      
          <ul class="navbar-nav mb-2 mb-lg-0">
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              | ID
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li>
                  <a href="#googtrans(id|id)" class="dropdown-item lang-select" data-lang="id">ID</a>
              </li>
              <li>
                  <a href="#googtrans(id|en)" class="dropdown-item lang-select" data-lang="en">EN</a>
              </li>
              </ul>
          </li>
          </ul>
      </div>
  </div>
</nav> --}}
<!-- end navigation bar -->
  