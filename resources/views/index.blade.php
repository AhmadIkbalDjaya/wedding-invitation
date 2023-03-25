<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Anna & Kholis</title>
    <!-- Bootstrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    />
    <!-- My Style -->
    <link rel="stylesheet" href="/css/style.css" />
    <!-- Font Awesome -->
    <script
      src="https://kit.fontawesome.com/0d8b715e25.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <!-- WELCOME -->
    <section id="welcome">
      <div class="container">
        <p class="title">Pernikahan</p>
        <div class="row">
          <div class="col-12">
            <p class="couple-name anna">Anna</p>
            <p class="couple-and">&</p>
            <p class="couple-name kholis">Kholis</p>
          </div>
        </div>
        <p class="date">13.05.2023</p>
        <div class="row">
          <div class="col-12 text-center">
            <div class="box-to mx-auto">
              <p class="to">Kepada Yth Bapak/Ibu/Saudara/i</p>
              <p class="guest-name">{{ $guest->name }}</p>
              <p class="sorry">*mohon maaf apabila ada kesalahan pada nama</p>
            </div>
            <button class="btn-open mt-4" id="open">Buka Undangan</button>
          </div>
        </div>
      </div>
    </section>
    <!-- END WELCOME -->

    <!-- HOME -->
    <section id="home">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 text-center">
            <p class="couple-name anna">Anna</p>
            <p class="couple-name kholis">Kholis</p>
          </div>
        </div>
        <div class="row justify-content-center mb-2">
          <p><span id="countdown"></span></p>
        </div>
        <div class="row justify-content-center">
          <div class="col-12 col-md-6">
            <p>
              Dan di antara tanda-tanda (kebesaran)-Nya ialah Dia menciptakan
              pasangan-pasangan untukmu dari jenismu sendiri, agar kamu
              cenderung dan merasa tenteram kepadanya, dan Dia menjadikan di
              antaramu rasa kasih dan sayang. Sungguh, pada yang demikian itu
              benar-benar terdapat tanda-tanda (kebesaran Allah) bagi kaum yang
              berpikir.
            </p>
            <p>(QS. Ar-Rum Ayat 21)</p>
          </div>
        </div>
      </div>
    </section>
    <!-- END HOME -->

    <!-- COUPLE -->
    <section id="couple">
      <div class="container">
        <div class="row justify-content-center mb-3">
          <div class="col-11">
            <p class="caption">
              Maha Suci Allah yang telah menciptakan makhluk-Nya
              berpasang-pasangan. Ya Allah semoga ridho-Mu tercurah mengiringi
              pernikahan kami :
            </p>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-11">
            <p class="couple-name">Rihul Jannah Djaya, S.Si</p>
          </div>
          <div class="col-10">
            <p class="couple-parent">
              (Anak Kedua dari Bapak (Alm) Amir Djaya & Ibu Hasbiah Aliah)
            </p>
          </div>
          <div class="col-12">
            <p class="couple-and">&</p>
          </div>
          <div class="col-11">
            <p class="couple-name">Nur Khalish, S.Hum</p>
          </div>
          <div class="col-10">
            <p class="couple-parent">
              (Anak Pertama dari Bapak Muhammad Asri, S.Pd & Ibu St. Hamnah,
              S.Pd)
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- END COUPLE -->

    <!-- EVENT -->
    <section id="event">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-12 text-center">
            <p class="event-title">Akad Nikah</p>
          </div>
          <div class="col-11 col-md-5 col-lg-4">
            <div class="row justify-content-center event-time">
              <div class="col-2 p-0 text-end">
                <i class="event-icon fa-solid fa-calendar-days"></i>
              </div>
              <div class="col-9">
                <p class="mb-1">Sabtu, 13 Mei 2023</p>
                <p class="">10.00 WITA</p>
              </div>
            </div>
            <div class="row justify-content-center">
              <div class="col-2 p-0 text-end">
                <i class="event-icon fa-solid fa-map-location-dot"></i>
              </div>
              <div class="col-9 pe-0">
                <p class="mb-1 event-location">Gedung Mutiara</p>
                <p class="event-address">
                  Jl. KH Fadeli Luran, Minasatene, Pangkep
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-12 text-center">
            <p class="event-title">Resepsi</p>
          </div>
          <div class="col-11 col-md-5 col-lg-4">
            <div class="row justify-content-center event-time">
              <div class="col-2 p-0 text-end">
                <i class="event-icon fa-solid fa-calendar-days"></i>
              </div>
              <div class="col-9">
                <p class="mb-1">Sabtu, 13 Mei 2023</p>
                <p class="">11.30 - 15.00 WITA</p>
              </div>
            </div>
            <div class="row justify-content-center">
              <div class="col-2 p-0 text-end">
                <i class="event-icon fa-solid fa-map-location-dot"></i>
              </div>
              <div class="col-9 pe-0">
                <p class="mb-1 event-location">Gedung Mutiara</p>
                <p class="event-address">
                  Jl. KH Fadeli Luran, Minasatene, Pangkep
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END EVENT -->

    <!-- LOCATION -->
    <section id="location">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12">
            <p class="location-title">Save Location</p>
          </div>
          <div class="col-12 col-md-7 col-lg-5 text-center">
            <div class="ratio ratio-4x3">
              <iframe
                class="maps"
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7950.9661870397085!2d119.5737432!3d-4.8584023!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbe512bc258312d%3A0xbbd72b304e7f995d!2sGedung%20Mutiara!5e0!3m2!1sid!2sid!4v1679515131611!5m2!1sid!2sid"
                style="border: 0"
                allowfullscreen=""
                loading=""
                referrerpolicy="no-referrer-when-downgrade"
              ></iframe>
            </div>
          </div>
          <div class="col-12">
            <p class="address">
              Jl. KH Fadeli Luran, Kel. BontoKio, Kec. Minasatene, Kab. Pangkep,
              Provinsi Sulawesi Selatan
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- END LOCATION -->

    <!-- WISHES -->
    <section id="wishes">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-6">
            <p class="send-wishes-title">Kirim Doa dan Ucapan</p>
            <p class="send-wishes-subtitle">
              Tuliskan suseatu ucapan berapan harapan ataupun doa untuk kedua
              mempelai.
            </p>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-12 col-md-6">
            <form class="send-box" action="/wishes" method="post">
              @csrf
              <input type="hidden" name="guest_name" value="{{ $guest->name }}">
              <p class="title">Kirim Ucapan:</p>
              <div class="form-input">
                <input type="text" name="name" id="name" placeholder=" " required class=" @error('name') is-invalid @enderror"/>
                <label for="name"><i class="fa-solid fa-user"></i> Nama Lengkap</label>
              </div>
              <div class="form-input">
                <input type="text" name="address" id="address" placeholder=" " required class="@error('address') is-invalid @enderror"/>
                <label for="address"><i class="fa-solid fa-location-dot"></i> Alamat</label>
              </div>
              <div class="form-input ta">
                <textarea id="pesan" name="text" placeholder="" rows="3" required class="@error('text') is-invalid @enderror"></textarea>
                <label for="pesan"><i class="fa-solid fa-pen-to-square"></i> Pesan</label>
              </div>
              <div class="form-audio-box d-flex mb-3">
                <div class="form-radio me-3 d-flex align-items-center">
                  <input type="radio" name="isCome" value="1" id="comeTrue" class="me-1" required />
                  <label class="labelRadio" for="comeTrue">Hadir</label>
                </div>
                <div class="form-radio me-3 d-flex align-items-center">
                  <input type="radio" name="isCome" value="0" id="comeFalse" class="me-1" required/>
                  <label class="labelRadio" for="comeFalse">Tidak Hadir</label>
                </div>
              </div>

              <button type="submit" class="send-message">Kirim Sekarang</button>
            </form>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-12 col-md-6">
            <div class="message-container">
              @foreach ($messages as $message)
              <div class="message-box d-flex justify-content-center">
                <div class="circle-user">w</div>
                <div class="text-box">
                  <div class="arrow-left"></div>
                  <div class="d-flex align-items-center">
                    <p class="user-name me-1">{{ $message->name }}</p>
                    <span class="status">
                      @if ($message->isCome == 1)
                      <i class="fa-solid fa-check"></i>
                      @else
                      <i class="fa-solid fa-minus"></i>
                      @endif
                    </span>
                  </div>
                  <p class="user-address">{{ $message->address }}</p>
                  <p class="user-message">
                    "{{ $message->text }}"
                  </p>
                  <p class="message-date">{{ \Carbon\Carbon::parse($message->created_at)->format('d F Y') }}</p>
                </div>
              </div>
              @endforeach
              {{-- <div class="message-box d-flex justify-content-center">
                <div class="circle-user">w</div>
                <div class="text-box">
                  <div class="arrow-left"></div>
                  <div class="d-flex align-items-center">
                    <p class="user-name me-1">Fatih Djaya</p>
                    <span class="status">
                      <i class="fa-solid fa-check"></i>
                    </span>
                  </div>
                  <p class="user-address">di Rachita</p>
                  <p class="user-message">
                    "Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                    Blanditiis ipsam ducimus atque, quae quis eius?"
                  </p>
                  <p class="message-date">23-Maret-2023</p>
                </div>
              </div>
              <div class="message-box d-flex justify-content-center">
                <div class="circle-user">w</div>
                <div class="text-box">
                  <div class="arrow-left"></div>
                  <div class="d-flex align-items-center">
                    <p class="user-name me-1">Fatih Djaya</p>
                    <span class="status">
                      <i class="fa-solid fa-check"></i>
                    </span>
                  </div>
                  <p class="user-address">di Rachita</p>
                  <p class="user-message">
                    "Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                    Blanditiis ipsam ducimus atque, quae quis eius?"
                  </p>
                  <p class="message-date">23-Maret-2023</p>
                </div>
              </div>
              <div class="message-box d-flex justify-content-center">
                <div class="circle-user">w</div>
                <div class="text-box">
                  <div class="arrow-left"></div>
                  <div class="d-flex align-items-center">
                    <p class="user-name me-1">Fatih Djaya</p>
                    <span class="status">
                      <i class="fa-solid fa-check"></i>
                    </span>
                  </div>
                  <p class="user-address">di Rachita</p>
                  <p class="user-message">
                    "Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                    Blanditiis ipsam ducimus atque, quae quis eius?"
                  </p>
                  <p class="message-date">23-Maret-2023</p>
                </div>
              </div> --}}
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END WISHES -->

    <!-- NAVBAR -->
    <nav id="navbar">
      <a href="#couple">
        <i class="fa-solid fa-heart"></i>
        <span class="d-none">Couple</span>
      </a>
      <a href="#event">
        <i class="fa-solid fa-calendar-days"></i>
        <span class="d-none">Event</span>
      </a>
      <a href="#location">
        <i class="fa-solid fa-map-location-dot"></i>
        <span class="d-none">Location</span>
      </a>
      <a href="#wishes">
        <i class="fa-solid fa-pen-to-square"></i>
        <span class="d-none">Wishes</span>
      </a>
    </nav>
    <!-- END NAVBAR -->

    <!-- MUSIC -->
    <button id="musicPlayer">
      <i class="fa-solid fa-music"></i>
    </button>
    <!-- END MUSIC -->

    <!-- Bootstrap -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://code.jquery.com/jquery-3.6.4.js"
      integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E="
      crossorigin="anonymous"
    ></script>
    <script src="/js/script.js"></script>
  </body>
</html>