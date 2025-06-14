<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Roudlotul Huda Wedoro Klurak</title>
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
            line-height: 1.6;
        }

            /* Header Top */
            .header-top {
                background-color: #4CAF50;
                color: white;
                padding: 8px 5%;
                display: flex;
                justify-content: space-between;
                align-items: center;
                font-size: 14px;
            }

            .contact-info {
                display: flex;
                align-items: center;
                gap: 30px;
            }

            .contact-info span {
                display: flex;
                align-items: center;
                gap: 5px;
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

        /* Main Content */
        .main-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 60px 20px;
        }

        /* School Description Section */
        .school-intro {
            display: grid;
            grid-template-columns: 350px 1fr;
            gap: 60px;
            align-items: center;
            margin-bottom: 80px;
        }

        .school-logo {
        text-align: center;
        margin-top: 15px;
        }

        .logo-img {
        width: 250px; /* Ubah sesuai ukuran yang kamu mau, bisa 250px, 300px, dll */
        height: auto;
        }

        .logo-badge {
            width: 300px;
            height: 300px;
            background: linear-gradient(135deg, #4CAF50, #2E7D32);
            border-radius: 50% 50% 50% 50% / 45% 45% 55% 55%;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            box-shadow: 0 20px 40px rgba(76, 175, 80, 0.3);
        }

        .logo-badge::before {
            content: '';
            position: absolute;
            width: 280px;
            height: 280px;
            background: linear-gradient(135deg, #66BB6A, #4CAF50);
            border-radius: 50% 50% 50% 50% / 45% 45% 55% 55%;
            border: 3px solid #FFD700;
        }

        .logo-badge::after {
            content: 'MI ROUDLOTUL HUDA\AWEDORO KLURAK';
            position: absolute;
            color: white;
            font-size: 14px;
            font-weight: bold;
            text-align: center;
            z-index: 2;
            white-space: pre-line;
        }

        .school-info h1 {
            font-size: 42px;
            color: #FF9800;
            margin-bottom: 10px;
            font-weight: bold;
        }

        .school-info h2 {
            font-size: 24px;
            color: #FF9800;
            margin-bottom: 30px;
            font-weight: normal;
        }

        .school-info p {
            font-size: 16px;
            color: #333;
            line-height: 1.8;
            text-align: justify;
        }

        /* Accreditation Section */
        .accreditation {
            display: flex;
            align-items: center;
            gap: 40px;
            background: linear-gradient(135deg, #FF9800, #FFB74D);
            padding: 40px;
            border-radius: 20px;
            margin-bottom: 80px;
            color: white;
            box-shadow: 0 15px 35px rgba(255, 152, 0, 0.3);
        }

        .accreditation-text {
            flex: 1;
            font-size: 18px;
            font-weight: 500;
            text-align: center;
            line-height: 1.6;
        }

        .accreditation-badge {
            width: 120px;
            height: 120px;
            background: linear-gradient(135deg, #FFD700, #FFA000);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            box-shadow: 0 10px 25px rgba(255, 193, 7, 0.4);
        }

        .accreditation-badge::before {
            content: 'A';
            font-size: 48px;
            font-weight: bold;
            color: #333;
        }

        .accreditation-badge::after {
            content: 'TERAKREDITASI';
            position: absolute;
            bottom: -25px;
            font-size: 12px;
            color: #333;
            background: #FFD700;
            padding: 5px 15px;
            border-radius: 15px;
            font-weight: bold;
        }

        /* Organizational Structure */
        .structure-section {
            margin-bottom: 80px;
        }

        .structure-section h1 {
            font-size: 36px;
            color: #4CAF50;
            margin-bottom: 10px;
            font-weight: bold;
        }

        .structure-section h2 {
            font-size: 24px;
            color: #4CAF50;
            margin-bottom: 40px;
        }

        .org-chart {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 30px;
        }

        .level {
            display: flex;
            justify-content: center;
            gap: 30px;
            flex-wrap: wrap;
        }

        .position-box {
            background: white;
            border: 2px solid #ddd;
            border-radius: 10px;
            padding: 15px 20px;
            text-align: center;
            min-width: 180px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            position: relative;
        }

        .position-box.head {
            background: linear-gradient(135deg, #4CAF50, #66BB6A);
            color: white;
            border-color: #4CAF50;
        }

        .position-box.manager {
            background: linear-gradient(135deg, #81C784, #A5D6A7);
            color: white;
            border-color: #81C784;
        }

        .position-box.staff {
            background: linear-gradient(135deg, #FF9800, #FFB74D);
            color: white;
            border-color: #FF9800;
        }

        .position-box.teacher {
            background: linear-gradient(135deg, #FFD54F, #FFF176);
            color: #333;
            border-color: #FFD54F;
        }

        .position-title {
            font-size: 12px;
            font-weight: bold;
            margin-bottom: 5px;
            text-transform: uppercase;
        }

        .position-name {
            font-size: 14px;
            font-weight: normal;
        }

        /* Connection Lines */
        .level::before {
            content: '';
            position: absolute;
            top: -15px;
            left: 50%;
            transform: translateX(-50%);
            width: 2px;
            height: 15px;
            background: #ddd;
        }

        .level:first-child::before {
            display: none;
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

        /* Responsive */
        @media (max-width: 768px) {
            .header-top {
                font-size: 12px;
                gap: 15px;
            }

            .nav-container {
                flex-direction: column;
                gap: 15px;
            }

            .nav-menu {
                gap: 20px;
            }

            .main-content {
                padding: 40px 15px;
            }

            .school-intro {
                grid-template-columns: 1fr;
                gap: 40px;
                text-align: center;
            }

            .logo-badge {
                width: 250px;
                height: 250px;
            }

            .logo-badge::before {
                width: 230px;
                height: 230px;
            }

            .school-info h1 {
                font-size: 32px;
            }

            .accreditation {
                flex-direction: column;
                text-align: center;
                gap: 20px;
            }

            .level {
                flex-direction: column;
                align-items: center;
            }

            .footer-content {
                grid-template-columns: 1fr;
                gap: 30px;
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
                    display: block;
                    position: absolute;
                    top: 20px;
                    right: 20px;
                    font-size: 26px;
                    cursor: pointer;
                    z-index: 1000; /* biar muncul di atas */
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
        } }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="header">
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


        <!-- Navigation Links -->
        <div class="nav-links mobile-menu" id="mobileMenu">
            <a href="{{ url('/') }}" class="active">Beranda</a>
            <a href="{{ route('tentang') }}">Tentang Kami</a>
            <a href="{{ route('hubungi') }}">Hubungi Kami</a>
        </div>
    </nav>
    </header>

    <!-- Main Content -->
    <main class="main-content">
        <!-- School Introduction -->
        <section class="school-intro">
            <div class="school-logo">
                <img src="images/logo.png" alt="Logo Sekolah" class="logo-img">
            </div>
            <div class="school-info">
                <h1>MI ROUDLOTUL HUDA</h1>
                <h2>Deskripsi Sekolah</h2>
                <p>
                    Sekolah adalah tempat belajar dan mengembangkan diri, baik dalam bidang 
                    akademik maupun karakter. Di sekolah, siswa dibimbing oleh guru untuk menjadi pribadi yang 
                    cerdas, berakhlak, dan siap menghadapi masa depan. Dengan fasilitas yang memadai dan 
                    lingkungan yang mendukung, sekolah menjadi wadah tumbuh kembang generasi penerus 
                    bangsa.
                </p>
            </div>
        </section>

        <!-- Accreditation -->
        <section class="accreditation">
            <div class="accreditation-text">
                "Sekolah kami telah terakreditasi A oleh Badan Akreditasi Nasional, sebagai bukti komitmen kami 
                dalam menyediakan pendidikan berkualitas tinggi dan lingkungan belajar yang mendukung 
                perkembangan siswa secara holistik."
            </div>
            <div class="accreditation-badge"></div>
        </section>

        <!-- Organizational Structure -->
        <section class="structure-section">
            <h1>MI ROUDLOTUL HUDA</h1>
            <h2>Struktur Guru</h2>
            
            <div class="org-chart">
                <!-- Level 1: Ketua Yayasan -->
                <div class="level">
                    <div class="position-box head">
                        <div class="position-title">Ketua Yayasan</div>
                        <div class="position-name">MOEN. ARIF</div>
                    </div>
                </div>

                <!-- Level 2: Pembina dan Ketua Komite -->
                <div class="level">
                    <div class="position-box manager">
                        <div class="position-title">Pembina</div>
                        <div class="position-name">AMININ</div>
                    </div>
                    <div class="position-box manager">
                        <div class="position-title">Ketua Komite</div>
                        <div class="position-name"></div>
                    </div>
                </div>

                <!-- Level 3: Kepala Madrasah -->
                <div class="level">
                    <div class="position-box head">
                        <div class="position-title">Kepala Madrasah</div>
                        <div class="position-name">Dra ROHMAWATI, S.Pd</div>
                    </div>
                </div>

                <!-- Level 4: Staff -->
                <div class="level">
                    <div class="position-box staff">
                        <div class="position-title">Kurikulum</div>
                        <div class="position-name">YUSRI KHIWAN JOKIR, S.Pd</div>
                    </div>
                    <div class="position-box staff">
                        <div class="position-title">Operator</div>
                        <div class="position-name">DWI NUR DHOTIK, S.Pd</div>
                    </div>
                    <div class="position-box staff">
                        <div class="position-title">TU</div>
                        <div class="position-name">MURSYIDIK ALY</div>
                    </div>
                    <div class="position-box staff">
                        <div class="position-title">Bendahara</div>
                        <div class="position-name">HENDRA PRIYANTO, S.Pd</div>
                    </div>
                </div>

                <!-- Level 5: Guru Kelas 1-3 -->
                <div class="level">
                    <div class="position-box teacher">
                        <div class="position-title">Guru Kelas 1</div>
                        <div class="position-name">ROFIQATUL HASANAH, S.Pd</div>
                    </div>
                    <div class="position-box teacher">
                        <div class="position-title">Guru Kelas 2</div>
                        <div class="position-name">DWI NUR DHOTIK, S.Pd</div>
                    </div>
                    <div class="position-box teacher">
                        <div class="position-title">Guru Kelas 3</div>
                        <div class="position-name">SITI NING ZHURO, S.Pd</div>
                    </div>
                </div>

                <!-- Level 6: Guru Kelas 4-6 -->
                <div class="level">
                    <div class="position-box teacher">
                        <div class="position-title">Guru Kelas 4</div>
                        <div class="position-name">HENDRA PRIYANTO, S.Pd</div>
                    </div>
                    <div class="position-box teacher">
                        <div class="position-title">Guru Kelas 5</div>
                        <div class="position-name">Dra NURUL HUDA EFFENDI</div>
                    </div>
                    <div class="position-box teacher">
                        <div class="position-title">Guru Kelas 6</div>
                        <div class="position-name">YUSRI KHIWAN JOKIR, S.Pd</div>
                    </div>
                </div>
            </div>
        </section>
    </main>

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
    </footer>
    <script>
    function toggleMenu() {
        const menu = document.getElementById('mobileMenu');
        menu.classList.toggle('show');
    }
    </script>
</body>
</html>