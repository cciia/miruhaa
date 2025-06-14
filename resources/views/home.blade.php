<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MI Roudlotul Huda Wedoro Klurak</title>
    <link rel="icon" href="{{ asset('images/logo-sekolah.ico') }}">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: #f5f5f5;
            color: #333;
        }
        
        /* Header Styles */
        .header-top {
            background-color: #4CAF50;
            color: white;
            padding: 8px 5%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .contact-info {
            display: flex;
            align-items: center;
            gap: 15px;
        }
        
        .contact-info i {
            margin-right: 5px;
        }
        
        /* Navigation Styles */
        .main-nav {
            background-color: white;
            padding: 10px 5%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        
        .logo {
            display: flex;
            align-items: center;
        }
        
        .logo img {
            height: 50px;
            margin-right: 10px;
        }
        
        .logo-text {
            font-size: 1.2rem;
            font-weight: bold;
            color: #333;
        }
        
        .nav-links {
            display: flex;
            gap: 20px;
            align-items: center;
        }
        
        .nav-links a {
            text-decoration: none;
            color: #333;
            font-weight: 500;
            padding: 8px 15px;       
            border-radius: 5px;      
            display: inline-flex;    
            align-items: center;     
            height: 36px;     
        }
        
        .nav-button {
            background-color: #FF8C00;
            color: white;
            border: none;
            padding: 8px 15px;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            height: 36px;
            display: inline-flex;
            align-items: center;
        }
        
        /* Hero Section */
        .hero {
            background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url("{{ asset('images/sekolahmiruha.jpg') }}");
            background-size: cover;
            background-position: center;
            color: white;
            padding: 230px 5%;  
            text-align: left;
            margin-bottom: 20px;
        }
        
        .hero h1 {
            font-size: 2.5rem;
            margin-bottom: 10px;
            text-shadow: 1px 1px 3px rgba(0,0,0,0.8);
        }
        
        .hero h4 {
            font-size: 1.5rem;
            margin-bottom: 5px;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.8);
        }
        
        .hero p {
            font-size: 1rem;
            margin-bottom: 20px;
            max-width: 600px;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.8);
        }
        
        .hero-button {
            background-color: #FF8C00;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            text-decoration: none;
            display: inline-block;
            margin-top: 10px;
            transition: all 0.3s ease;
        }
        
        .hero-button:hover {
            background-color: #e67e00;
            transform: translateY(-2px);
        }
        
        /* Sambutan and Achievement Container */
        .sambutan-achievement-container {
            display: flex;
            padding: 0 5%;
            gap: 30px;
            margin: 20px 0;
            flex-wrap: wrap;
        }
        
        /* Sambutan Section */
        .sambutan {
            background-color: #4CAF50;
            padding: 20px;
            color: white;
            display: flex;
            align-items: center;
            gap: 20px;
            flex: 1 1 70%;
            min-width: 300px;
            border-radius: 5px;
        }
        
        .sambutan-img {
            flex: 0 0 200px;
        }
        
        .sambutan-img img {
            width: 100%;
            border-radius: 5px;
        }
        
        .sambutan-text {
            flex: 1;
        }
        
        .sambutan-text h2 {
            margin-bottom: 15px;
        }
        
        .sambutan-text p {
            margin-bottom: 10px;
            line-height: 1.6;
        }
        
        .nama-kepala {
            background-color: #FF8C00;
            padding: 10px;
            text-align: center;
            margin-top: 10px;
            border-radius: 5px;
        }
        
        /* Achievement Section */
        .achievement-section {
            flex: 1 1 25%;
            min-width: 250px;
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        
        .section-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        
        .section-title {
            color: #4CAF50;
            border-left: 5px solid #4CAF50;
            padding-left: 10px;
        }
        
        .achievement-list {
            list-style-type: none;
        }
        
        .achievement-item {
            background-color: white;
            padding: 15px;
            margin-bottom: 10px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
        }
        
        .achievement-item:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        .achievement-list {
            list-style-type: none;
            max-height: 300px;       
            overflow-y: auto;        
            padding-right: 10px;     
        }
        
        /* News Section */
        .news-section {
            padding: 20px 5%;
        }
        
        .news-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
        }
        
        .news-item {
            background-color: white;
            border-radius: 5px;
            overflow: hidden;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
        }
        
        .news-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }

        .news-scroll-wrapper {
            max-height: 800px; /* atur sesuai kebutuhan */
            overflow-y: auto;  /* scroll vertikal */
            padding-right: 10px; /* agar tidak nempel scrollbar ke konten */
        }

        /* opsional, styling scrollbar agar lebih rapi */
        .news-scroll-wrapper::-webkit-scrollbar {
            width: 8px;
        }

        .news-scroll-wrapper::-webkit-scrollbar-thumb {
            background-color: rgba(0,0,0,0.2);
            border-radius: 4px;
        }
        
        .news-item img {
            width: 100%;
            height: 200px;           
            object-fit: cover;       
            image-rendering: auto;   
            image-rendering: crisp-edges; 
            -webkit-backface-visibility: hidden; 
            backface-visibility: hidden;
            -webkit-transform: translateZ(0); 
            transform: translateZ(0);
        }

        .news-content {
            padding: 15px;
        }
        
        .news-date {
            color: #777;
            font-size: 0.8rem;
            margin-bottom: 5px;
        }
        
        .news-title {
            font-size: 1.1rem;
            margin-bottom: 10px;
        }
        
        .news-excerpt {
            font-size: 0.9rem;
            color: #555;
            margin-bottom: 15px;
            line-height: 1.5;
        }
        
        .read-more {
            background-color: #FF8C00;
            color: white;
            text-decoration: none;
            padding: 5px 10px;
            border-radius: 3px;
            font-size: 0.8rem;
            display: inline-block;
            transition: all 0.3s ease;
        }
        
        .read-more:hover {
            background-color: #e67e00;
        }
        
        .featured-news {
            grid-column: 1 / -1;
        }
        
        .featured-news img {
            height: 350px;
        }
        
        .category-tag {
            display: inline-block;
            padding: 3px 8px;
            font-size: 0.7rem;
            color: white;
            border-radius: 3px;
            margin-bottom: 5px;
        }
        
        .category-pramuka {
            background-color: #28a745;
        }
        
        .category-olahraga {
            background-color: #17a2b8;
        }
        
        .category-kegiatan {
            background-color: #dc3545;
        }
        
        .category-akademik {
            background-color: #6f42c1;
        }
        
        /* Profile Section */
        .profile-section {
            padding: 40px 5%;
            text-align: center;
        }
        
        .profile-section h2 {
            color: #333;
            margin-bottom: 30px;
        }
        
        .profile-content {
            display: flex;
            justify-content: space-between;
            gap: 30px;
            margin-top: 30px;
            flex-wrap: wrap;
        }
        
        .profile-left {
            flex: 1 1 300px;
        }
        
        .vision-card, .mission-card {
            background-color: #FF8C00;
            padding: 20px;
            color: white;
            border-radius: 5px;
            margin-bottom: 20px;
            transition: all 0.3s ease;
        }
        
        .vision-card:hover, .mission-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        
        .vision-card h3, .mission-card h3 {
            font-size: 1.2rem;
            margin-bottom: 20px;
            text-align: center;
        }
        
        .vision-card p {
            line-height: 1.6;
            text-align: center;
        }
        
        .mission-card ol {
            padding-left: 20px;
            line-height: 1.6;
            text-align: left;
        }
        
        .mission-card li {
            margin-bottom: 10px;
        }
        
        .profile-right {
            flex: 2 1 500px;
            text-align: left;
        }
        
        .profile-right h3 {
            color: #FF8C00;
            margin-bottom: 20px;
        }
        
        .profile-right p {
            line-height: 1.6;
            margin-bottom: 20px;
        }
        
        /* Location Section */
        .location-section {
            margin-top: 30px;
        }
        
        .location-section h4 {
            color: #4CAF50;
            margin-bottom: 20px;
        }
        
        .map-container {
            height: 300px;
            background-color: #e9e9e9;
            border-radius: 5px;
            overflow: hidden;
        }
        
        /* Activities Section */
        .activities-section {
            padding: 40px 5%;
            text-align: center;
        }
        
        .activities-section h2 {
            margin-bottom: 30px;
            color: #333;
        }
        
        .activities-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
        }
        
        .activity-item {
            text-align: center;
            transition: all 0.3s ease;
        }
        
        .activity-item:hover {
            transform: translateY(-5px);
        }
        
        .activity-item img {
            width: 100%;
            height: 150px;
            object-fit: cover;
            border-radius: 5px;
            margin-bottom: 10px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.2);
        }
        
        .activity-item p {
            font-weight: 500;
        }
        
        /* Footer */
        .footer {
            background-color: #FF8C00;
            color: white;
            padding: 30px 5%;
            margin-top: 40px;
        }
        
        .footer-content {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 30px;
        }
        
        .footer-left {
            flex: 1 1 300px;
        }
        
        .footer-title {
            font-size: 1.2rem;
            font-weight: bold;
            margin-bottom: 15px;
        }
        
        .footer-address {
            margin-bottom: 15px;
            line-height: 1.6;
        }
        
        .social-links {
            display: flex;
            gap: 15px;
            margin-bottom: 15px;
        }
        
        .social-links a {
            display: flex;
            align-items: center;
            color: white;
            text-decoration: none;
            transition: all 0.3s ease;
        }
        
        .social-links a:hover {
            transform: translateY(-3px);
        }
        
        .footer-right {
            flex: 1 1 300px;
        }
        
        .footer-map {
            height: 200px;
            background-color: #e9e9e9;
            border-radius: 5px;
            overflow: hidden;
        }

        @media (max-width: 768px) {
            .hero {
                padding: 60px 5%;
                text-align: center;
            }
            
            .hero p {
                margin-left: auto;
                margin-right: auto;
            }
            
            .sambutan {
                flex-direction: column;
            }
            
            .sambutan-img {
                margin-bottom: 20px;
            }
            
            .featured-news img {
                height: 200px;
            }
            

            .hamburger {
                display: none;
                font-size: 24px;
                cursor: pointer;    
            }

            .nav-links {
                display: none;
                flex-direction: column;
                background-color: white;
                position: absolute;
                top: 60px;
                right: 5%;
                width: 200px;
                box-shadow: 0 2px 10px rgba(0,0,0,0.1);
                z-index: 100;
            }

            .nav-links a {
                padding: 10px 0;
                border-bottom: 1px solid #eee;
                width: 100%;
            }

           .nav-links.show {
                display: flex;
            }

            .hamburger {
                display: block;
                color: #333;
                margin-left: auto;
            }

            .main-nav {
                position: relative;
                flex-direction: column;
                align-items: flex-start;
            }
        }
        </style>
</head> 
<body>
    <!-- Header Top -->
    <div class="header-top">
        <div class="contact-info">
            <span>📱 +62 857 0700 9311</span>
            <span>✉️ miroudlotulhuda@gmail.com</span>
        </div>
    </div>
    
   <!-- Main Navigation -->
<nav class="main-nav">
    <div class="logo">
        <img src="/images/logomiruha.jpg" alt="Logo MI Roudlotul Huda">
        <div class="logo-text">MI Roudlotul Huda<br>Wedoro, Klurak, Sidoarjo</div>
    </div>

    <!-- Hamburger Menu (for mobile) -->


        <!-- Navigation Links -->
        <div class="nav-links mobile-menu" id="mobileMenu">
            <a href="{{ url('/') }}" class="active">Beranda</a>
            <a href="{{ route('tentang') }}">Tentang Kami</a>
            <a href="{{ route('hubungi') }}">Hubungi Kami</a>
        </div>
    </nav>

    
    <!-- Hero Section with new background image -->
    <div class="hero">
        <h4>Selamat Datang di Website</h4>
        <h1>MI ROUDLOTUL HUDA</h1>
        <p>Website ini sebagai sarana informasi dan komunikasi untuk memberikan kemudahan dalam mengakses seluruh informasi seputar kegiatan, prestasi, dan berita yang terjadi, terbaru, dan juga mengedukasi siswa-siswi.</p>
    </div>
    
    <!-- Sambutan and Achievement Container -->
    <div class="sambutan-achievement-container">
        <!-- Sambutan Kepala Sekolah -->
        <div class="sambutan">
            <div class="sambutan-img">
                <img src="/images/kepalasekolah.jpg" alt="Kepala Sekolah">
                <div class="nama-kepala">
                    Ida Rokhimawati, S.Pd<br>
                    MI ROUDLOTUL HUDA
                </div>
            </div>
            <div class="sambutan-text">
                <h2>Sambutan Kepala Sekolah</h2>
                <p>Puji Syukur Kita Panjatkan ke Hadirat Allah SWT, Tuhan Yang Maha Esa. Atas limpahan Rahmat Dan Karunia-Nya sehingga Website Madrasah kami, berupa beranda Infomasi Digital yang berfungsi sebagai salah satu media komunikasi dengan masyarakat telah dapat dipertahankan.</p>
                <p>Selamat Datang di Website MI Roudlotul Huda. Kami berharap Website ini dapat dijadikan wahana interaksi yang positif baik antar civitas akademika maupun masyarakat pada umumnya sehingga dapat menjalin silaturahmi yang erat disegala unsur.</p>
            </div>
        </div>
        
        <!-- Achievement Section - now more responsive -->
        <div class="achievement-section">
            <div class="section-header">
                <h2 class="section-title">Prestasi Terbaru</h2>
            </div>
            
            <ul class="achievement-list">
                @forelse ($prestasis as $prestasi)
                <li class="achievement-item">{{ $prestasi->judul}}</li>
                @empty
                <li class="achirvement-item">Belum ada prestasi yang ditampilkan.</li>
                @endforelse
            </ul>

        </div>
    </div>
     
     <!-- Berita -->
    <div class="news-section">
    <div class="section-header">
        <h2 class="section-title">Berita Terbaru</h2>
    </div>

    <div class="news-scroll-wrapper">
        <div class="news-grid">
            @foreach ($beritas as $berita)
                <div class="news-item {{ $loop->first ? 'featured-news' : '' }}">
                    <img src="{{ asset('storage/berita/' . $berita->gambar) }}" alt="{{ $berita->judul }}">
                    <div class="news-content">
                        <span class="category-tag category-{{ strtolower($berita->kategori) }}">{{ $berita->kategori }}</span>
                        <div class="news-date">📅 {{ $berita->created_at->format('d F Y') }}</div>
                        <h3 class="news-title">{{ $berita->judul }}</h3>
                        <p class="news-excerpt">{{ Str::limit(strip_tags($berita->isi), 100) }}</p>
                        <a href="{{ route('berita.show.public', ['slug' => $berita->slug]) }}" class="read-more">
                            Selengkapnya
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

    
    <!-- Profile Section -->
    <div class="profile-section">
        <h2>Profile Sekolah</h2>
        
        <div class="profile-content">
            <div class="profile-left">
                <div class="vision-card">
                    <h3>Visi<br>MI Roudlotul Huda</h3>
                    <p>Mewujudkan Siswa - Siswai Madrasah Ibtidaiyah Yang Inklusif, Gender Responsive Berbasis Islam</p>
                </div>
                
                <div class="mission-card">
                    <h3>Misi<br>MI Roudlotul Huda</h3>
                    <ol>
                        <li>Menjalankan Peserta Didik Yang Berprestasi</li>
                        <li>Menjadikan Peserta Didik Yang Memiliki Ilmu Pengetahuan Umum Dan Agama</li>
                        <li>Menjadikan Peserta Didik Yang Mempunyai Akhlak Yang Mulia</li>
                        <li>Menjadikan Hak Didik Mendapatkan Hak Yang Sama Untuk Meningkatkan Potensi Dirinya</li>
                        <li>Menjadikan Madrasah Sebagai Pusat Dakwah Islam</li>
                        <li>Mendorong Dan Mengantisipasi Peserta Didik Untuk Berkembang Secara Maksimal Yang Meliputi Aspek Intelektual, Sosial, Religi, Emosi Dan Fisik</li>
                    </ol>
                </div>
            </div>
            
            <div class="profile-right">
                <h3>MI ROUDLOTUL HUDA</h3>
                <h4>Deskripsi Sekolah</h4>
                
                <p>Sekolah adalah tempat belajar dan mengembangkan diri, baik dalam bidang akademis maupun karakter. Di sekolah, siswa dibimbing oleh guru untuk menjadi pribadi yang cerdas, berakhlak, dan siap menghadapi masa depan. Dengan fasilitas yang memadai dan lingkungan yang mendukung, sekolah menjadi wadah tumbuh kembang generasi penerus bangsa.</p>
                
                <div class="location-section">
                    <h4>Lokasi MI Roudlotul Huda</h4>
                    <div class="map-container">
                    <a href="https://maps.app.goo.gl/GXGbhuRiG6ThPVjm8" target="_blank">
                        <img src="/images/mapsmiruha.jpg" alt="Peta Lokasi" style="width: 100%; height: 100%; object-fit: cover;">
                    </a>
                </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Activities Section -->
    <div class="activities-section">
        <h2>Kegiatan Dan Ekstra Kurikuler</h2>
        
        <div class="activities-grid">
            <div class="activity-item">
                <img src="/images/melukis.png" alt="Maulids">
                <p>Melukis</p>
            </div>
            
            <div class="activity-item">
                <img src="/images/pramukamiruha.jpg" alt="Pramuka">
                <p>Pramuka</p>
            </div>
            
            <div class="activity-item">
                <img src="/images/berenang.png" alt="Renang">
                <p>Berenang</p>
            </div>
            
            <div class="activity-item">
                <img src="/images/bhsinggris.png" alt="Bahasa Inggris">
                <p>Bahasa Inggris</p>
            </div>
            
            <div class="activity-item">
                <img src="/images/banjari.png" alt="Seni Tari">
                <p>Banjari</p>
            </div>
            
            <div class="activity-item">
                <img src="/images/btq.png" alt="Baca Tulis Qur'an">
                <p>Baca Tulis Qur'an</p>
            </div>
            
            <div class="activity-item">
                <img src="/images/outdoorlearning.png" alt="Outdoor Learning">
                <p>Outdoor Learning</p>
            </div>
            
            <div class="activity-item">
                <img src="/images/pencaksilat.png" alt="Pencak Silat">
                <p>Pencak Silat</p>
            </div>
        </div>
    </div>
    
    <!-- Footer -->
    <div class="footer">
        <div class="footer-content">
            <div class="footer-left">
                <div class="footer-title">MI ROUDLOTUL HUDA WEDORO KLURAK</div>
                <div class="footer-address">
                    Alamat: Desa Wedoro Kulon RT 03 RW 02<br>
                    Candi Sidoarjo, Jawa Timur, Indonesia
                </div>
                
                <div class="social-links">
    <a href="https://wa.me/6285707009311" target="_blank">
        <span>📱 +62 857 0700 9311</span>
    </a>
            </div>
            <div class="social-links">
                <a href="mailto:miroudlotulhuda@gmail.com">
                    <span>✉️ miroudlotulhuda@gmail.com</span>
                </a>
            </div>
            <div class="social-links">
                <a href="https://www.instagram.com/miruha06" target="_blank">
                    <span>📷 @miruha06</span>
                </a>
            </div>

            </div>
            
            <div class="footer-right">
                <div class="footer-map">
                    <a href="https://maps.app.goo.gl/GXGbhuRiG6ThPVjm8" target="_blank">
                    <img src="/images/mapsmiruha.jpg" alt="Peta Lokasi" style="width: 100%; height: 100%; object-fit: cover;">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <script>
    function toggleMenu() {
        const menu = document.getElementById('mobileMenu');
        menu.classList.toggle('show');
    }
    </script>
</body>
</html>