<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>{{ $invitation->nama_pria }} & {{ $invitation->nama_wanita }}</title>

    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&family=Great+Vibes&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
</head>

<body class="no-scroll">

<!-- COVER -->
<div class="cover" id="cover">
    <div class="cover-bg"></div>
    <div class="curtain-left"></div>
    <div class="curtain-right"></div>
    <div class="overlay"></div>

    <div class="cover-content">
        <p class="small">The Wedding Of</p>

        <h1 class="title">
            {{ $invitation->nama_pria }} & {{ $invitation->nama_wanita }}
        </h1>

        <p class="guest">
            Kepada Yth:
            <br>
            <span>{{ $guestName ?? 'Tamu Undangan' }}</span>
        </p>

        <button onclick="openInvitation()">Buka Undangan</button>
    </div>
</div>

<!-- CONTENT -->
<div id="content" class="content-hidden">

    <!-- COUPLE PROFILE -->
    <div class="section couple-section fade">
        <div class="ucapan-card couple-card">
            <p class="ucapan-subtitle">In The Name Of Jesus Christ</p>
            <h2 class="ucapan-heading">The Happy Couple</h2>
            <div class="ucapan-divider">
                <span class="ucapan-divider-line"></span>
                <span class="ucapan-divider-icon">&#9829;</span>
                <span class="ucapan-divider-line"></span>
            </div>

            <p class="couple-verse">
                "Demikianlah mereka bukan lagi dua, melainkan satu. Karena itu, apa yang telah dipersatukan Allah, tidak boleh diceraikan manusia."
                <br><span class="couple-verse-ref">— Matius 19:6</span>
            </p>

            <div class="couple-profiles">
                <!-- GROOM -->
                <div class="couple-profile">
                    <div class="couple-photo-wrap">
                        <div class="couple-photo-ring"></div>
                        <img src="{{ asset('image/man.jpg') }}" alt="{{ $invitation->nama_pria }}" class="couple-photo">
                    </div>
                    <h3 class="couple-name">{{ $invitation->nama_pria }}</h3>
                    <p class="couple-role">Mempelai Pria</p>
                    <p class="couple-parent">Putra dari<br>Bapak ... & Ibu ...</p>
                    <a href="#" target="_blank" rel="noopener noreferrer" class="couple-ig">
                        <svg viewBox="0 0 24 24" width="14" height="14" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                        </svg>
                        <span>@instagram_pria</span>
                    </a>
                </div>

                <!-- AMPERSAND -->
                <div class="couple-ampersand">
                    <span>&</span>
                </div>

                <!-- BRIDE -->
                <div class="couple-profile">
                    <div class="couple-photo-wrap">
                        <div class="couple-photo-ring"></div>
                        <img src="{{ asset('image/women.jpg') }}" alt="{{ $invitation->nama_wanita }}" class="couple-photo">
                    </div>
                    <h3 class="couple-name">{{ $invitation->nama_wanita }}</h3>
                    <p class="couple-role">Mempelai Wanita</p>
                    <p class="couple-parent">Putri dari<br>Bapak ... & Ibu ...</p>
                    <a href="#" target="_blank" rel="noopener noreferrer" class="couple-ig">
                        <svg viewBox="0 0 24 24" width="14" height="14" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                        </svg>
                        <span>@instagram_wanita</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- COUNTDOWN -->
    <div class="countdown-section fade">
        <div class="countdown-overlay"></div>
        <div class="countdown-inner">
            <p class="countdown-label">Menghitung Hari Bahagia</p>
            <h2 class="countdown-title">Save The Date</h2>
            <div class="countdown-divider">
                <span class="divider-line"></span>
                <span class="divider-diamond">&#9830;</span>
                <span class="divider-line"></span>
            </div>
            <div class="countdown-boxes" id="countdown">
                <div class="countdown-box">
                    <span class="countdown-number" id="cd-days">00</span>
                    <span class="countdown-unit">Hari</span>
                </div>
                <div class="countdown-separator">:</div>
                <div class="countdown-box">
                    <span class="countdown-number" id="cd-hours">00</span>
                    <span class="countdown-unit">Jam</span>
                </div>
                <div class="countdown-separator">:</div>
                <div class="countdown-box">
                    <span class="countdown-number" id="cd-minutes">00</span>
                    <span class="countdown-unit">Menit</span>
                </div>
            </div>
            <p class="countdown-date">{{ \Carbon\Carbon::parse($invitation->tanggal)->translatedFormat('l, d F Y') }}</p>
        </div>
    </div>

    <!-- GALLERY -->
    <div class="section fade" data-aos="fade-up">
        <h2>Gallery</h2>

        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="{{ asset('image/2.jpg') }}">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('image/3.jpg') }}">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('image/4.jpg') }}">
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>

    <!-- OUR LOVE STORY -->
    <div class="section lovestory-section fade">
        <div class="ucapan-card lovestory-card">
            <p class="ucapan-subtitle">Our Journey</p>
            <h2 class="ucapan-heading">Our Love Story</h2>
            <div class="ucapan-divider">
                <span class="ucapan-divider-line"></span>
                <span class="ucapan-divider-icon">&#9829;</span>
                <span class="ucapan-divider-line"></span>
            </div>

            <p class="lovestory-intro">
                Setiap kisah cinta ditulis oleh Tuhan dengan cara yang indah. Inilah perjalanan kasih kami hingga menuju hari bahagia ini.
            </p>

            <div class="lovestory-timeline">
                <!-- Milestone 1 -->
                <div class="lovestory-item fade">
                    <div class="lovestory-dot-wrap">
                        <div class="lovestory-dot">
                            <span class="lovestory-dot-icon">&#10084;</span>
                        </div>
                        <div class="lovestory-line"></div>
                    </div>
                    <div class="lovestory-content">
                        <span class="lovestory-date">Januari 2020</span>
                        <h3 class="lovestory-title">Pertama Bertemu</h3>
                        <div class="lovestory-img-wrap">
                            <img src="{{ asset('image/2.jpg') }}" alt="Pertama Bertemu" class="lovestory-img">
                        </div>
                        <p class="lovestory-text">
                            Tuhan mempertemukan kami di saat yang tidak kami duga. Pertemuan pertama yang sederhana namun meninggalkan kesan mendalam di hati kami.
                        </p>
                    </div>
                </div>

                <!-- Milestone 2 -->
                <div class="lovestory-item fade">
                    <div class="lovestory-dot-wrap">
                        <div class="lovestory-dot">
                            <span class="lovestory-dot-icon">&#9733;</span>
                        </div>
                        <div class="lovestory-line"></div>
                    </div>
                    <div class="lovestory-content">
                        <span class="lovestory-date">Maret 2020</span>
                        <h3 class="lovestory-title">Mulai Berkenalan</h3>
                        <div class="lovestory-img-wrap">
                            <img src="{{ asset('image/3.jpg') }}" alt="Mulai Berkenalan" class="lovestory-img">
                        </div>
                        <p class="lovestory-text">
                            Dari percakapan singkat, kami mulai saling mengenal lebih dalam. Setiap obrolan terasa bermakna dan penuh kehangatan.
                        </p>
                    </div>
                </div>

                <!-- Milestone 3 -->
                <div class="lovestory-item fade">
                    <div class="lovestory-dot-wrap">
                        <div class="lovestory-dot">
                            <span class="lovestory-dot-icon">&#10029;</span>
                        </div>
                        <div class="lovestory-line"></div>
                    </div>
                    <div class="lovestory-content">
                        <span class="lovestory-date">Juni 2020</span>
                        <h3 class="lovestory-title">Hari Jadian</h3>
                        <div class="lovestory-img-wrap">
                            <img src="{{ asset('image/4.jpg') }}" alt="Hari Jadian" class="lovestory-img">
                        </div>
                        <p class="lovestory-text">
                            Dengan penuh keberanian dan doa, kami memutuskan untuk memulai perjalanan bersama sebagai pasangan kekasih.
                        </p>
                    </div>
                </div>

                <!-- Milestone 4 -->
                <div class="lovestory-item fade">
                    <div class="lovestory-dot-wrap">
                        <div class="lovestory-dot">
                            <span class="lovestory-dot-icon">&#128141;</span>
                        </div>
                    </div>
                    <div class="lovestory-content">
                        <span class="lovestory-date">Desember 2025</span>
                        <h3 class="lovestory-title">Lamaran</h3>
                        <div class="lovestory-img-wrap lovestory-img-duo">
                            <img src="{{ asset('image/man.jpg') }}" alt="Mempelai Pria" class="lovestory-img lovestory-img-circle">
                            <div class="lovestory-img-heart">&#9829;</div>
                            <img src="{{ asset('image/women.jpg') }}" alt="Mempelai Wanita" class="lovestory-img lovestory-img-circle">
                        </div>
                        <p class="lovestory-text">
                            Dengan berkat Tuhan dan restu keluarga, kami melangkah lebih pasti menuju ikatan suci pernikahan.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- WEDDING EVENT -->
    <div class="section event-section fade">
        <div class="ucapan-card event-card">
            <p class="ucapan-subtitle">Wedding Event</p>
            <h2 class="ucapan-heading">Rangkaian Acara</h2>
            <div class="ucapan-divider">
                <span class="ucapan-divider-line"></span>
                <span class="ucapan-divider-icon">&#9829;</span>
                <span class="ucapan-divider-line"></span>
            </div>

            <div class="event-details">
                <div class="event-item">
                    <div class="event-icon">&#128197;</div>
                    <h3 class="event-title">Tanggal Acara</h3>
                    <p class="event-text">{{ \Carbon\Carbon::parse($invitation->tanggal)->translatedFormat('l, d F Y') }}</p>
                </div>

                <div class="event-item">
                    <div class="event-icon">&#128336;</div>
                    <h3 class="event-title">Waktu Pelaksanaan</h3>
                    <p class="event-text">09:00 WIB - Selesai</p>
                </div>

                <div class="event-item">
                    <div class="event-icon">&#128205;</div>
                    <h3 class="event-title">Alamat Lokasi</h3>
                    <div class="event-address-box">
                        <p class="event-text" id="event-address">Gereja HKBP Pardamean Jl. Taduan No.94, Sidorejo, Kec. Medan Tembung, Kota Medan, Sumatera Utara</p>
                        <button type="button" class="gift-copy-btn" onclick="copyGift('event-address', this)">
                            <span class="copy-icon">&#128203;</span> Salin Alamat
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- LOKASI ACARA -->
    <div class="section fade">
        <div class="ucapan-card">
            <p class="ucapan-subtitle">Wedding Location</p>
            <h2 class="ucapan-heading">Lokasi Acara</h2>
            <div class="ucapan-divider">
                <span class="ucapan-divider-line"></span>
                <span class="ucapan-divider-icon">&#9830;</span>
                <span class="ucapan-divider-line"></span>
            </div>

            <div class="lokasi-map-wrap">
                <iframe
                    src="{{ $invitation->maps_link }}"
                    width="100%"
                    height="280"
                    style="border:0;"
                    allowfullscreen=""
                    loading="lazy">
                </iframe>
            </div>

            <a href="https://maps.app.goo.gl/2tefgSjALuDB4cBr7" target="_blank" style="text-decoration: none;">
                <button type="button" class="btn-submit" style="margin-top: 20px;">
                    &#9906; Lihat di Google Maps
                </button>
            </a>
        </div>
    </div>

    <!-- UCAPAN & DOA -->
    <div class="section ucapan-section fade">
        <div class="ucapan-card">
            <p class="ucapan-subtitle">Kirimkan Doa & Ucapan</p>
            <h2 class="ucapan-heading">Ucapan & Doa</h2>
            <div class="ucapan-divider">
                <span class="ucapan-divider-line"></span>
                <span class="ucapan-divider-icon">&#10084;</span>
                <span class="ucapan-divider-line"></span>
            </div>

            <form id="rsvpForm" class="rsvp-form">
                @csrf

                <div class="form-group">
                    <input type="text" name="nama" placeholder="Nama Lengkap" required>
                </div>

                <div class="form-group">
                    <input type="hidden" name="status" id="statusInput" value="Hadir">
                    <div class="status-toggle">
                        <button type="button" class="status-btn active" data-value="Hadir" onclick="selectStatus(this)">
                            <span class="status-icon">&#10003;</span>
                            Hadir
                        </button>
                        <button type="button" class="status-btn" data-value="Tidak Hadir" onclick="selectStatus(this)">
                            <span class="status-icon">&#10007;</span>
                            Tidak Hadir
                        </button>
                    </div>
                </div>

                <div class="form-group">
                    <textarea name="ucapan" placeholder="Tulis ucapan dan doa terbaik untuk kedua mempelai..." rows="4"></textarea>
                </div>

                <button type="submit" class="btn-submit">
                    Kirim Ucapan
                </button>
            </form>
        </div>

        <!-- UCAPAN TAMU -->
        <div class="ucapan-card" id="ucapan">
            <h3 class="ucapan-heading" style="font-size: 28px;">Doa & Ucapan Tamu</h3>
            <div class="ucapan-divider">
                <span class="ucapan-divider-line"></span>
                <span class="ucapan-divider-icon">&#9830;</span>
                <span class="ucapan-divider-line"></span>
            </div>

            <div class="ucapan-box">
                @foreach($rsvps as $rsvp)
                <div class="ucapan-item">
                    <div class="ucapan-avatar">{{ strtoupper(substr($rsvp->nama, 0, 1)) }}</div>
                    <div class="ucapan-content">
                        <div class="ucapan-header">
                            <span class="ucapan-nama">{{ $rsvp->nama }}</span>
                            <span class="ucapan-status {{ strtolower($rsvp->status) === 'hadir' ? 'status-hadir' : 'status-tidak' }}">{{ strtolower($rsvp->status) }}</span>
                        </div>
                        <p class="ucapan-text">{{ $rsvp->ucapan }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- WEDDING GIFT -->
    <div class="section gift-section fade">
        <div class="ucapan-card">
            <p class="ucapan-subtitle">Wedding Gift</p>
            <h2 class="ucapan-heading">Hadiah Pernikahan</h2>
            <div class="ucapan-divider">
                <span class="ucapan-divider-line"></span>
                <span class="ucapan-divider-icon">&#9829;</span>
                <span class="ucapan-divider-line"></span>
            </div>
            <p class="gift-desc">Doa restu Anda merupakan karunia yang sangat berarti bagi kami. Namun, jika Anda ingin memberikan tanda kasih, kami menyediakan informasi berikut:</p>

            <!-- BRI -->
            <div class="gift-card">
                <div class="gift-card-header">
                    <div class="gift-bank-logo">
                        <svg viewBox="0 0 120 40" width="100" height="34" xmlns="http://www.w3.org/2000/svg">
                            <rect width="120" height="40" rx="8" fill="#003D79"/>
                            <text x="12" y="28" font-family="Arial,Helvetica,sans-serif" font-weight="900" font-size="22" fill="#fff">BRI</text>
                            <rect x="58" y="10" width="2" height="20" rx="1" fill="rgba(255,255,255,0.3)"/>
                            <text x="68" y="22" font-family="Arial,Helvetica,sans-serif" font-size="7" fill="rgba(255,255,255,0.8)" letter-spacing="0.5">BANK RAKYAT</text>
                            <text x="68" y="31" font-family="Arial,Helvetica,sans-serif" font-size="7" fill="rgba(255,255,255,0.8)" letter-spacing="0.5">INDONESIA</text>
                        </svg>
                    </div>
                </div>
                <div class="gift-account">
                    <span class="gift-number" id="gift-bri">1234 5678 9012 3456</span>
                    <button type="button" class="gift-copy-btn" onclick="copyGift('gift-bri', this)">
                        <span class="copy-icon">&#128203;</span> Salin
                    </button>
                </div>
                <p class="gift-holder">a.n. {{ $invitation->nama_pria }}</p>
            </div>

            <!-- DANA -->
            <div class="gift-card">
                <div class="gift-card-header">
                    <div class="gift-bank-logo">
                        <svg viewBox="0 0 120 40" width="100" height="34" xmlns="http://www.w3.org/2000/svg">
                            <rect width="120" height="40" rx="8" fill="#108EE9"/>
                            <circle cx="22" cy="20" r="12" fill="none" stroke="#fff" stroke-width="2.5"/>
                            <circle cx="22" cy="20" r="5" fill="#fff"/>
                            <text x="42" y="27" font-family="Arial,Helvetica,sans-serif" font-weight="800" font-size="18" fill="#fff" letter-spacing="2">dana</text>
                        </svg>
                    </div>
                </div>
                <div class="gift-account">
                    <span class="gift-number" id="gift-dana">0812 3456 7890</span>
                    <button type="button" class="gift-copy-btn" onclick="copyGift('gift-dana', this)">
                        <span class="copy-icon">&#128203;</span> Salin
                    </button>
                </div>
                <p class="gift-holder">a.n. {{ $invitation->nama_wanita }}</p>
            </div>

        </div>
    </div>

    <!-- TERIMA KASIH -->
    <div class="section thankyou-section fade">
        <div class="ucapan-card thankyou-card">
            <div class="thankyou-icon-wrap">
                <svg viewBox="0 0 80 80" width="60" height="60" class="thankyou-heart-svg">
                    <defs>
                        <linearGradient id="heartGrad" x1="0%" y1="0%" x2="100%" y2="100%">
                            <stop offset="0%" style="stop-color:rgba(255,255,255,0.6)"/>
                            <stop offset="100%" style="stop-color:rgba(255,255,255,0.2)"/>
                        </linearGradient>
                    </defs>
                    <path d="M40 68 C20 50 8 38 8 26 C8 16 16 8 26 8 C32 8 37 12 40 16 C43 12 48 8 54 8 C64 8 72 16 72 26 C72 38 60 50 40 68Z" fill="url(#heartGrad)" stroke="rgba(255,255,255,0.3)" stroke-width="1.5"/>
                </svg>
            </div>

            <p class="ucapan-subtitle">Thank You</p>
            <h2 class="ucapan-heading">Terima Kasih</h2>
            <div class="ucapan-divider">
                <span class="ucapan-divider-line"></span>
                <span class="ucapan-divider-icon">&#9829;</span>
                <span class="ucapan-divider-line"></span>
            </div>

            <p class="thankyou-message">
                Merupakan suatu kehormatan dan kebahagiaan bagi kami apabila Bapak/Ibu/Saudara/i berkenan hadir dan memberikan doa restu kepada kedua mempelai.
            </p>

            <div class="thankyou-signature">
                <p class="thankyou-regards">Kami yang berbahagia,</p>
                <h3 class="thankyou-names">
                    {{ $invitation->nama_pria }} & {{ $invitation->nama_wanita }}
                </h3>
                <p class="thankyou-family">beserta Keluarga Besar</p>
            </div>

            <div class="thankyou-ornament">
                <span class="thankyou-ornament-line"></span>
                <span class="thankyou-ornament-icon">&#10053;</span>
                <span class="thankyou-ornament-line"></span>
            </div>
        </div>
    </div>

    <!-- FOOTER -->
    <footer class="invitation-footer">
        <div class="footer-inner">
            <div class="footer-divider">
                <span class="footer-divider-line"></span>
                <span class="footer-divider-diamond">&#9830;</span>
                <span class="footer-divider-line"></span>
            </div>

            <p class="footer-brand">by <span class="footer-brand-name">tamuin.id</span></p>

            <div class="footer-socials">
                <a href="https://wa.me/6281393803610" target="_blank" rel="noopener noreferrer" class="footer-social-link" aria-label="WhatsApp">
                    <svg viewBox="0 0 24 24" width="22" height="22" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                    </svg>
                </a>
                <a href="https://www.instagram.com/tamuin.id?igsh=MXV4b2ZoOWc3c2xwYg%3D%3D&utm_source=qr" target="_blank" rel="noopener noreferrer" class="footer-social-link" aria-label="Instagram">
                    <svg viewBox="0 0 24 24" width="22" height="22" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                    </svg>
                </a>
            </div>

            <p class="footer-copyright">&copy; 2025 tamuin.id. All rights reserved.</p>
        </div>
    </footer>

    <!-- PREMIUM CSS BUTTERFLY -->
    <div class="butterfly-container">
        <svg class="butterfly-svg" viewBox="0 0 100 100" width="70" height="70">
            <defs>
                <linearGradient id="wingGrad" x1="0%" y1="0%" x2="100%" y2="100%">
                    <stop offset="0%" stop-color="rgba(255, 255, 255, 0.9)" />
                    <stop offset="50%" stop-color="rgba(180, 225, 255, 0.6)" />
                    <stop offset="100%" stop-color="rgba(255, 255, 255, 0.1)" />
                </linearGradient>
            </defs>
            <!-- Left Wing -->
            <g class="left-wing">
                <path d="M50 50 C 25 15, -5 30, 10 65 C 18 85, 40 85, 48 55 Z" fill="url(#wingGrad)" stroke="rgba(255,255,255,0.7)" stroke-width="1.5" />
                <path d="M48 55 C 30 75, 15 95, 25 100 C 35 105, 45 90, 50 65 Z" fill="url(#wingGrad)" stroke="rgba(255,255,255,0.5)" stroke-width="1" />
            </g>
            <!-- Right Wing -->
            <g class="right-wing">
                <path d="M50 50 C 75 15, 105 30, 90 65 C 82 85, 60 85, 52 55 Z" fill="url(#wingGrad)" stroke="rgba(255,255,255,0.7)" stroke-width="1.5" />
                <path d="M52 55 C 70 75, 85 95, 75 100 C 65 105, 55 90, 50 65 Z" fill="url(#wingGrad)" stroke="rgba(255,255,255,0.5)" stroke-width="1" />
            </g>
            <!-- Body -->
            <ellipse cx="50" cy="55" rx="3" ry="18" fill="rgba(255,255,255,0.9)" />
            <!-- Antennae -->
            <path d="M49 37 C 45 25, 35 20, 35 20" fill="none" stroke="rgba(255,255,255,0.8)" stroke-width="1.5" stroke-linecap="round" />
            <path d="M51 37 C 55 25, 65 20, 65 20" fill="none" stroke="rgba(255,255,255,0.8)" stroke-width="1.5" stroke-linecap="round" />
        </svg>
    </div>

</div> <!-- end #content -->

<!-- SUCCESS MODAL -->
<div class="success-modal-overlay" id="successModal">
    <div class="success-modal">
        <div class="success-modal-icon">
            <svg viewBox="0 0 80 80" width="80" height="80">
                <circle cx="40" cy="40" r="36" fill="none" stroke="rgba(255,255,255,0.15)" stroke-width="2"/>
                <path class="success-check" d="M24 42 L35 53 L56 28" fill="none" stroke="#8ee4af" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </div>
        <h3 class="success-modal-title">Terima Kasih!</h3>
        <p class="success-modal-text">Ucapan dan doa Anda telah berhasil dikirim. Semoga menjadi berkah bagi kedua mempelai.</p>
        <div class="success-modal-divider">
            <span class="ucapan-divider-line"></span>
            <span class="ucapan-divider-icon">&#9829;</span>
            <span class="ucapan-divider-line"></span>
        </div>
        <button type="button" class="success-modal-btn" onclick="closeSuccessModal()">Tutup</button>
    </div>
</div>

<!-- MUSIC -->
<audio id="music" loop>
    <source src="{{ asset('music/music.mp3') }}" type="audio/mp3">
</audio>

<!-- MUSIC TOGGLE -->
<button id="musicToggle" class="music-toggle" onclick="toggleMusic()" aria-label="Toggle Music">
    <div class="music-bars">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
    </div>
</button>

<!-- ========== SCRIPTS ========== -->

<script>
// Open invitation: trigger curtain animation, unlock scroll, show content
function openInvitation() {
    const cover = document.getElementById('cover');
    const content = document.getElementById('content');

    // Add opened class to trigger curtain animation
    cover.classList.add('opened');

    // Wait for curtain animation (1.5s) before completely hiding the cover wrapper
    setTimeout(() => {
        cover.style.display = 'none';
        
        // Unlock scroll & show content
        document.body.classList.remove('no-scroll');
        content.classList.remove('content-hidden');
    }, 1500);

    // Start music
    const music = document.getElementById('music');
    music.play().catch(() => {});

    // Show music toggle
    const toggle = document.getElementById('musicToggle');
    toggle.classList.add('visible', 'playing');

    // Remove cover from DOM after transition
    setTimeout(() => {
        cover.style.display = 'none';
    }, 1100);
}

// Music toggle
function toggleMusic() {
    const music = document.getElementById('music');
    const toggle = document.getElementById('musicToggle');
    if (music.paused) {
        music.play();
        toggle.classList.add('playing');
    } else {
        music.pause();
        toggle.classList.remove('playing');
    }
}

// Countdown
let eventDate = new Date("{{ $invitation->tanggal }}").getTime();

function updateCountdown() {
    let now = new Date().getTime();
    let distance = eventDate - now;

    if (distance < 0) {
        document.getElementById("cd-days").textContent = "00";
        document.getElementById("cd-hours").textContent = "00";
        document.getElementById("cd-minutes").textContent = "00";
        return;
    }

    let days = Math.floor(distance / (1000 * 60 * 60 * 24));
    let hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));

    let daysEl = document.getElementById("cd-days");
    let hoursEl = document.getElementById("cd-hours");
    let minutesEl = document.getElementById("cd-minutes");

    let newDays = String(days).padStart(2, '0');
    let newHours = String(hours).padStart(2, '0');
    let newMinutes = String(minutes).padStart(2, '0');

    if (daysEl.textContent !== newDays) {
        daysEl.classList.add('flip');
        setTimeout(() => daysEl.classList.remove('flip'), 600);
    }
    if (hoursEl.textContent !== newHours) {
        hoursEl.classList.add('flip');
        setTimeout(() => hoursEl.classList.remove('flip'), 600);
    }
    if (minutesEl.textContent !== newMinutes) {
        minutesEl.classList.add('flip');
        setTimeout(() => minutesEl.classList.remove('flip'), 600);
    }

    daysEl.textContent = newDays;
    hoursEl.textContent = newHours;
    minutesEl.textContent = newMinutes;
}

updateCountdown();
setInterval(updateCountdown, 1000);
</script>

<!-- Success modal functions -->
<script>
function showSuccessModal() {
    const modal = document.getElementById('successModal');
    modal.classList.add('active');
    // Auto close after 4s
    setTimeout(() => closeSuccessModal(), 4000);
}

function closeSuccessModal() {
    const modal = document.getElementById('successModal');
    modal.classList.remove('active');
}
</script>

<!-- Status toggle -->
<script>
function selectStatus(btn) {
    document.querySelectorAll('.status-btn').forEach(b => b.classList.remove('active'));
    btn.classList.add('active');
    document.getElementById('statusInput').value = btn.dataset.value;
}
</script>

<!-- Copy gift number -->
<script>
function copyGift(id, btn) {
    const text = document.getElementById(id).textContent.trim();
    navigator.clipboard.writeText(text).then(() => {
        const original = btn.innerHTML;
        btn.innerHTML = '<span class="copy-icon">&#10003;</span> Tersalin!';
        btn.style.borderColor = 'rgba(100, 200, 150, 0.5)';
        btn.style.color = '#8ee4af';
        setTimeout(() => {
            btn.innerHTML = original;
            btn.style.borderColor = '';
            btn.style.color = '';
        }, 2000);
    });
}
</script>

<!-- Session redirect (after RSVP submit) -->
<script>
    @if(session('success'))
        document.addEventListener("DOMContentLoaded", function() {
            document.getElementById("cover").classList.add('hidden');
            document.getElementById("cover").style.display = 'none';
            document.getElementById("content").classList.remove('content-hidden');
            document.body.classList.remove('no-scroll');

            setTimeout(() => {
                document.getElementById("ucapan").scrollIntoView({
                    behavior: "smooth"
                });
            }, 300);
        });
    @endif
</script>

<!-- RSVP form submit -->
<script>
    document.getElementById('rsvpForm').addEventListener('submit', function(e) {
        e.preventDefault();

        let form = this;
        let formData = new FormData(form);

        fetch('/rsvp', {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
            },
            body: formData
        })
        .then(res => res.json())
        .then(data => {
            if(data.success) {

                showSuccessModal();
                let container = document.querySelector('.ucapan-box');

                let newItem = `
                    <div class="ucapan-item">
                        <div class="ucapan-avatar">${data.data.nama.charAt(0).toUpperCase()}</div>
                        <div class="ucapan-content">
                            <div class="ucapan-header">
                                <span class="ucapan-nama">${data.data.nama}</span>
                                <span class="ucapan-status ${data.data.status.toLowerCase() === 'hadir' ? 'status-hadir' : 'status-tidak'}">${data.data.status.toLowerCase()}</span>
                            </div>
                            <p class="ucapan-text">${data.data.ucapan ?? ''}</p>
                        </div>
                    </div>
                `;

                container.insertAdjacentHTML('afterbegin', newItem);

                form.reset();
            }
        });
    });
</script>

<!-- Fade-in on scroll -->
<script>
const faders = document.querySelectorAll('.fade');

const appearOptions = {
    threshold: 0.15,
    rootMargin: "0px 0px -50px 0px"
};

const appearOnScroll = new IntersectionObserver(function(entries, appearOnScroll) {
    entries.forEach(entry => {
        if (!entry.isIntersecting) {
            return;
        } else {
            entry.target.classList.add('show');
            appearOnScroll.unobserve(entry.target);
        }
    });
}, appearOptions);

faders.forEach(fader => {
    appearOnScroll.observe(fader);
});
</script>

<!-- Swiper init -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
var swiper = new Swiper(".mySwiper", {
    loop: true,
    grabCursor: true,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
        pauseOnMouseEnter: true,
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    touchRatio: 1.5,
    speed: 600,
});
</script>

</body>
</html>
