@extends('user_view.layouts.app')

@section('title')
PPDB Nurul 'Ilmi Tenggarong
@endsection

@section('content')
<div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-6">

  {{-- Informasi Pendaftaran --}}
  <section class="py-7">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="row justify-content-start">
              <div class="col-md-6">
                <div class="info">
                  <i class="material-icons text-3xl text-gradient text-info mb-3">public</i>
                  <h5>Fully integrated</h5>
                  <p>We get insulted by others, lose trust for those We get back freezes</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info">
                  <i class="material-icons text-3xl text-gradient text-info mb-3">payments</i>
                  <h5>Payments functionality</h5>
                  <p>We get insulted by others, lose trust for those We get back freezes</p>
                </div>
              </div>
            </div>
            <div class="row justify-content-start mt-4">
              <div class="col-md-6">
                <div class="info">
                  <i class="material-icons text-3xl text-gradient text-info mb-3">apps</i>
                  <h5>Prebuilt components</h5>
                  <p>We get insulted by others, lose trust for those We get back freezes</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info">
                  <i class="material-icons text-3xl text-gradient text-info mb-3">3p</i>
                  <h5>Improved platform</h5>
                  <p>We get insulted by others, lose trust for those We get back freezes</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 ms-auto mt-lg-0 mt-4">
            <div class="card">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <a class="d-block blur-shadow-image">
                  <img src="https://images.unsplash.com/photo-1544717302-de2939b7ef71?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80" alt="img-colored-shadow" class="img-fluid border-radius-lg">
                </a>
              </div>
              <div class="card-body text-center">
                <h5 class="font-weight-normal">
                  <a href="javascript:;">Get insights on Search</a>
                </h5>
                <p class="mb-0">
                  Website visitors today demand a frictionless user expericence — especially when using search. Because of the hight standards.
                </p>
                <button type="button" class="btn bg-gradient-info btn-sm mb-0 mt-3">Find out more</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  {{-- Visi --}}
  {{-- <div class="container">
    <div class="row">
      <div class="row justify-content-center text-center my-sm-5">
        <div class="col-lg-6">
          <span class="badge bg-danger mb-3">Visi PPDB</span>
          <h2 class="text-dark mb-0">Visi Sekolah Kami</h2>
          <p class="lead">"Terwujudnya sekolah Islam Terpadu yang mencetak generasi unggul, bersih, sehat dan berkarakter berdasarkan IMTAQ dan IPTEK." </p>
        </div>
      </div>
    </div>
  </div> --}}

  <!-- Misi -->
  {{-- <section class="py-5">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-4 ms-auto me-auto p-lg-4 mt-lg-0 mt-4 mb-5 mb-lg-0">
          <div class="rotating-card-container">
            <div class="card card-rotate card-background card-background-mask-success shadow-success mt-md-0 mt-5">
              <div class="front front-background" style="background-image: url(frontend/assets/img/PPDB/3.jpg); background-size: cover;">
                <div class="card-body py-7 text-center">
                  <i class="material-icons text-white text-4xl my-3">touch_app</i>
                  <h3 class="text-white">Jelajahi <br /> PPDB Nurul 'Ilmi</h3>
                  <p class="text-white opacity-8">Mengenal program dan bidang PPDB dalam pengembangan didunia pendidikan.</p>
                </div>
              </div>
              <div class="back back-background" style="background-image: url(frontend/assets/img/PPDB/2.jpg); background-size: cover;">
                <div class="card-body pt-7 text-center">
                  <h3 class="text-white">Jelajahi PPDB</h3>
                  <p class="text-white opacity-8">Mengenal program dan bidang PPDB dalam pengembangan didunia pendidikan.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 ms-auto">
          <div class="row justify-content-start">
            <div class="col-md-6">
              <div class="info">
                <i class="material-icons text-gradient text-danger text-3xl">flip_to_front</i>
                <h5 class="font-weight-bolder mt-2">Pendidikan Islam Terpadu</h5>
                <p class="pe-5">Menerapkan sistem pendidikan Islam Terpadu yang mengintegrasikan ayat-ayat qouliyah dan kauniyah, Iman dan ‘Amal, Ruhiyah dan Jasadiyah dalam lingkungan pendidikan yang Islami, Sehat, Bersih, aman dan nyaman.</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info">
                <i class="material-icons text-gradient text-danger text-3xl">flip_to_front</i>
                <h5 class="font-weight-bolder mt-2">Pendidikan Karakter, Berwawasan dan Sehat</h5>
                <p class="pe-3">Membiasakan pola hidup Jujur, Disiplin dan Bertanggung Jawab, Membiasakan siswa untuk bersikap sopan santun (Adab Islami), Membiasakan pola hidup bersih serta Peduli Terhadap Pengendalian Pencemaran dan kerusakan juga Pelestarian lingkungan hidup, sehingga tercipta sekolah berwawasan, dan berbudaya lingkungan yang sehat.</p>
              </div>
            </div>
          </div>
          <div class="row justify-content-start mt-3">
            <div class="col-md-6 mt-2">
              <i class="material-icons text-gradient text-danger text-3xl">flip_to_front</i>
              <h5 class="font-weight-bolder mt-3">Pendidikan Pusat Inovasi dan Inspirasi</h5>
              <p class="pe-5">Menyelenggarakan pendidikan yang menjadi pusat inovasi dan inspirasi pengembangan mutu pendidikan.</p>
            </div>
            <div class="col-md-6 mt-2">
              <i class="material-icons text-gradient text-danger text-3xl">flip_to_front</i>
              <h5 class="font-weight-bolder mt-3">Pendidikan Tanah Air</h5>
              <p class="pe-5">Menanamkan rasa cinta tanah air dan bangsa.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> --}}

  <!-- Gallery -->
  {{-- <section class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="row mt-4">
            <div class="col-md-6">
              <a href="">
                <div class="card move-on-hover">
                  <img class="w-100" src="{{ url('frontend/assets/img/PPDB/1.jpeg')}}" alt="aboutus">
                </div>
                <div class="mt-2 ms-2">
                  <h6 class="mb-0">-</h6>
                </div>
              </a>
            </div>
            <div class="col-md-6 mt-md-0 mt-5">
              <a href="">
                <div class="card move-on-hover">
                  <img class="w-100" src="{{ url('frontend/assets/img/PPDB/2.jpg')}}" alt="contacus">
                </div>
                <div class="mt-2 ms-2">
                  <h6 class="mb-0">-</h6>
                </div>
              </a>
            </div>
            <div class="col-md-6 mt-md-3 mt-6">
              <a href="">
                <div class="card move-on-hover">
                  <img class="w-100" src="{{ url('frontend/assets/img/PPDB/3.jpg')}}" alt="signin">
                </div>
                <div class="mt-2 ms-2">
                  <h6 class="mb-0">-</h6>
                </div>
              </a>
            </div>
            <div class="col-md-6 mt-md-3 mt-6">
              <a href="">
                <div class="card move-on-hover">
                  <img class="w-100" src="{{ url('frontend/assets/img/PPDB/4.jpg')}}" alt="author">
                </div>
                <div class="mt-2 ms-2">
                  <h6 class="mb-0">-</h6>
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-3 mx-auto mt-md-0 mt-5">
          <div class="position-sticky" style="top:100px !important">
            <h4 class="">Galeri PPDB Nurul 'Ilmi</h4>
            <h6 class="text-secondary font-weight-normal">Bagian dari landscape kegiatan kami sekolah PPDB Nurul 'Ilmi</h6>
          </div>
        </div>
      </div>
  </section> --}}

  <!-- Prakata Guru -->
  <section class="pb-5 mt-5 position-relative bg-gradient-dark mx-n3">
    <div class="container">
      <div class="row">
        <div class="col-md-8 text-start mb-5 mt-5">
          <h3 class="text-white z-index-1 position-relative">Guru-guru PPDB Nurul 'Ilmi Tenggarong</h3>
          <p class="text-white opacity-8 mb-0">Pesan-pesan guru kami.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 col-12">
          <div class="card card-profile mt-4">
            <div class="row">
              <div class="col-lg-4 col-md-6 col-12 mt-n5">
                <a href="javascript:;">
                  <div class="p-3 pe-md-0">
                    <img class="w-100 border-radius-md shadow-lg" src="{{ url('frontend/assets/img/user.jpg')}}" alt="image">
                  </div>
                </a>
              </div>
              <div class="col-lg-8 col-md-6 col-12 my-auto">
                <div class="card-body ps-lg-0">
                  <h5 class="mb-0">Dewan Guru</h5>
                  <h6 class="text-info">Kepala Sekolah</h6>
                  <p class="mb-0">Pesan-pesan.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-12">
          <div class="card card-profile mt-lg-4 mt-5">
            <div class="row">
              <div class="col-lg-4 col-md-6 col-12 mt-n5">
                <a href="javascript:;">
                  <div class="p-3 pe-md-0">
                    <img class="w-100 border-radius-md shadow-lg" src="{{ url('frontend/assets/img/user.jpg')}}" alt="image">
                  </div>
                </a>
              </div>
              <div class="col-lg-8 col-md-6 col-12 my-auto">
                <div class="card-body ps-lg-0">
                  <h5 class="mb-0">Dewan Guru</h5>
                  <h6 class="text-info">Wakil Kepala Sekolah</h6>
                  <p class="mb-0">Pesan-pesan.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-lg-6 col-12">
          <div class="card card-profile mt-4 z-index-2">
            <div class="row">
              <div class="col-lg-4 col-md-6 col-12 mt-n5">
                <a href="javascript:;">
                  <div class="p-3 pe-md-0">
                    <img class="w-100 border-radius-md shadow-lg" src="{{ url('frontend/assets/img/user.jpg')}}" alt="image">
                  </div>
                </a>
              </div>
              <div class="col-lg-8 col-md-6 col-12 my-auto">
                <div class="card-body ps-lg-0">
                  <h5 class="mb-0">Dewan Guru</h5>
                  <h6 class="text-info">-</h6>
                  <p class="mb-0">-.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-12">
          <div class="card card-profile mt-lg-4 mt-5 z-index-2">
            <div class="row">
              <div class="col-lg-4 col-md-6 col-12 mt-n5">
                <a href="javascript:;">
                  <div class="p-3 pe-md-0">
                    <img class="w-100 border-radius-md shadow-lg" src="{{ url('frontend/assets/img/user.jpg')}}" alt="image">
                  </div>
                </a>
              </div>
              <div class="col-lg-8 col-md-6 col-12 my-auto">
                <div class="card-body ps-lg-0">
                  <h5 class="mb-0">Dewan Guru</h5>
                  <h6 class="text-info">-</h6>
                  <p class="mb-0">-.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  {{-- <section class="py-sm-4" id="download-soft-ui">
    <div class="bg-gradient-dark position-relative m-3 border-radius-xl overflow-hidden">
      <img src="{{ url('frontend/material_kit/assets/img/shapes/waves-white.svg')}}" alt="pattern-lines" class="position-absolute start-0 top-md-0 w-100 opacity-2">
      <div class="container py-7 postion-relative z-index-2 position-relative">
        <div class="row">
          <div class="col-md-7 mx-auto text-center">
            <h3 class="text-white mb-0">PPDB Nurul 'Ilmi Tenggarong</h3>
            <h3 class="text-white">Daftarkan segera putra putri anda disekolah PPDB Nurul 'Ilmi</h3>
            <p class="text-white mb-5">Berkomitmen mengimplementasikan sistem pendidikan Islam secara terpadu untuk melahirkan generasi muslim terbaik menuju terwujudnya kejayaan Islam.</p>
            <a href="https://ynikoetaikartanagara.com/ppdb/smait_create" class="btn btn-info btn-lg mb-3 mb-sm-0">Pendaftaran Online PPDB</a>
          </div>
        </div>
      </div>
    </div>
  </section> --}}

  {{-- Kotak Saran --}}
  {{-- <section class="py-lg-5">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="card box-shadow-xl overflow-hidden mb-5">
            <div class="row">
              <div class="col-lg-5 position-relative bg-cover px-0" style="background-image: url('frontend/material_kit/assets/img/examples/blog2.jpg')" loading="lazy">
                <div class="z-index-2 text-center d-flex h-100 w-100 d-flex m-auto justify-content-center">
                  <div class="mask bg-gradient-dark opacity-8"></div>
                  <div class="p-6 ps-sm-6 position-relative text-start z-index-2">
                    <h3 class="text-white">Kontak Informasi</h3>
                    <p class="text-white opacity-8 mb-4">Silahkan hubungi untuk informasi lebih lanjut.</p>
                    <div class="d-flex p-2 text-white">
                      <div>
                        <i class="fas fa-phone text-sm"></i>
                      </div>
                      <div class="ps-3">
                        <span class="text-sm opacity-8">-</span>
                      </div>
                    </div>
                    <div class="d-flex p-2 text-white">
                      <div>
                        <i class="fas fa-envelope text-sm"></i>
                      </div>
                      <div class="ps-3">
                        <span class="text-sm opacity-8">-</span>
                      </div>
                    </div>
                    <div class="d-flex p-2 text-white">
                      <div>
                        <i class="fas fa-map-marker-alt text-sm"></i>
                      </div>
                      <div class="ps-3">
                        <span class="text-sm opacity-8">Jl. Ahmad Dahlan RT 12, Keluharan Baru, Tenggarong, Kab. Kutai Kartanegara</span>
                      </div>
                    </div>
                    <div class="mt-4">
                      <button type="button" class="btn btn-icon-only btn-link text-white btn-lg mb-0" data-toggle="tooltip" data-placement="bottom" data-original-title="Log in with Facebook">
                        <i class="fab fa-facebook"></i>
                      </button>
                      <button type="button" class="btn btn-icon-only btn-link text-white btn-lg mb-0" data-toggle="tooltip" data-placement="bottom" data-original-title="Log in with Instagram">
                        <i class="fab fa-instagram"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-7">
                <form class="p-3" id="contact-form" method="post">
                  <div class="card-header px-4 py-sm-5 py-3">
                    <h2>Assalamu'alaikum!</h2>
                    <p class="lead"> Kami senang bisa berkomunikasi dengan anda.</p>
                  </div>
                  <div class="card-body pt-1">
                    <div class="row">
                      <div class="col-md-12 pe-2 mb-3">
                        <div class="input-group input-group-static mb-4">
                          <label>Nama Lengkap</label>
                          <input type="text" class="form-control" placeholder="Nama Lengkap">
                        </div>
                      </div>
                      <div class="col-md-12 pe-2 mb-3">
                        <div class="input-group input-group-static mb-4">
                          <label>Nomor HP</label>
                          <input type="text" class="form-control" placeholder="Nomor HP">
                        </div>
                      </div>
                      <div class="col-md-12 pe-2 mb-3">
                        <div class="input-group input-group-static mb-4">
                          <label>Domisili</label>
                          <input type="text" class="form-control" placeholder="Domisili">
                        </div>
                      </div>
                      <div class="col-md-12 pe-2 mb-3">
                        <div class="input-group input-group-static mb-4">
                          <label>Pesan, Saran dan Masukan</label>
                          <textarea name="message" class="form-control" id="message" rows="6" placeholder="Pesan, Saran dan Masukan"></textarea>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6 text-end ms-auto">
                        <button type="submit" class="btn bg-gradient-info mb-0">Kirim Pesan</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> --}}
</div>
@endsection

