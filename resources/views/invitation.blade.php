<!DOCTYPE html>
<html>
<head>
    <title>{{ $invitation->nama_pria }} & {{ $invitation->nama_wanita }}</title>

    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&family=Great+Vibes&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
</head>

<body>

<!-- COVER -->
<div class="cover" id="cover">
    <h1>{{ $invitation->nama_pria }} & {{ $invitation->nama_wanita }}</h1>
    <p>Kepada Yth:</p>
    <h3>{{ $guestName ?? 'Tamu Undangan' }}</h3>
    <button onclick="openInvitation()">Buka Undangan</button>
</div>

<!-- CONTENT -->
<div id="content" style="display:none;">

    <div class="section">
        <h2 class="nama">
            {{ $invitation->nama_pria }} & {{ $invitation->nama_wanita }}
        </h2>
        <p>{{ $invitation->tanggal }}</p>
        <p>{{ $invitation->lokasi }}</p>
    </div>

    <div class="section card">
        <h3>Countdown</h3>
        <div id="countdown"></div>
    </div>

</div>

<script>
function openInvitation() {
    const cover = document.getElementById('cover');
    const content = document.getElementById('content');

    cover.style.opacity = 0;
    cover.style.transition = "1s";

    setTimeout(() => {
        cover.style.display = 'none';
        content.style.display = 'block';

        document.getElementById('music').play();
    }, 1000);
}

// countdown
let eventDate = new Date("{{ $invitation->tanggal }}").getTime();

setInterval(() => {
    let now = new Date().getTime();
    let distance = eventDate - now;

    let days = Math.floor(distance / (1000 * 60 * 60 * 24));
    document.getElementById("countdown").innerHTML = days + " hari lagi";
}, 1000);
</script>

<!-- MUSIC -->
<audio id="music" loop>
    <source src="{{ asset('music/music.mp3') }}" type="audio/mp3">
</audio>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<div class="section" data-aos="fade-up">
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
    </div>
</div>

<script>
var swiper = new Swiper(".mySwiper", {
    loop: true,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
});
</script>

<div class="section">
    <h2>Ucapan & Doa</h2>

    <form id="rsvpForm">
    @csrf

    <input type="text" name="nama" placeholder="Nama" required>

    <select name="status">
        <option value="Hadir">Hadir</option>
        <option value="Tidak Hadir">Tidak Hadir</option>
    </select>

    <textarea name="ucapan" placeholder="Tulis ucapan..."></textarea>

    <button type="submit">Kirim</button>
</form>
</div>

<div class="section" id="ucapan">
    <h3>Ucapan Tamu</h3>

<div class="ucapan-box">

    @foreach($rsvps as $rsvp)
    <div class="ucapan-item">
        <div class="ucapan-header">
            <span class="nama">{{ $rsvp->nama }}</span>
            <span class="status">{{ strtolower($rsvp->status) }}</span>
        </div>
        <p class="ucapan-text">{{ $rsvp->ucapan }}</p>
    </div>
    @endforeach


</div>
</div>
<script>
    @if(session('success'))
        document.addEventListener("DOMContentLoaded", function() {
            document.getElementById("cover").style.display = "none";
            document.getElementById("content").style.display = "block";

            document.getElementById("ucapan").scrollIntoView({
                behavior: "smooth"
            });
        });
@endif
</script>

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

                alert("Ucapan berhasil dikirim 💚");
                let container = document.querySelector('.ucapan-box');

                let newItem = `
                    <div class="ucapan-item">
                        <div class="ucapan-header">
                            <span class="nama">${data.data.nama}</span>
                            <span class="status">${data.data.status.toLowerCase()}</span>
                        </div>
                        <p class="ucapan-text">${data.data.ucapan ?? ''}</p>
                    </div>
                `;

                container.insertAdjacentHTML('afterbegin', newItem);

                form.reset();
            }
        });
    });
</script>

<!-- TANGGAL DAN LOKASI -->
<div class="section">
    <h2>Lokasi Acara</h2>
    <iframe
        src="{{ $invitation->maps_link }}"
        width="100%"
        height="300"
        style="border:0; border-radius:15px;"
        allowfullscreen=""
        loading="lazy">
    </iframe>

    <br><br>

    <a href="https://maps.app.goo.gl/2tefgSjALuDB4cBr7" target="_blank">
        <button>Lihat di Google Maps</button>
    </a>
    </div>

<!-- share by WA -->
<div class="section">
    <h2>Bagikan Undangan</h2>

    <a href="https://wa.me/?text={{ urlencode('Kepada Yth ' . ($guestName ?? 'Tamu') . ', Anda diundang ke pernikahan ' . $invitation->nama_pria . ' & ' . $invitation->nama_wanita . '. Lihat di: ' . url()->current()) }}" target="_blank">
    <button>Kirim via WhatsApp</button>
    </a>
</div>
</body>
</html>
