<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JagoanOsisKu - Platform Pemilihan OSIS Digital</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --deep-red: #973838ff;
            --purple: #9a1b1bff;
            --soft-lavender: #e7bebeff;
            --white: #FFFFFF;
            --light-gray: #F8F9FA;
            --medium-gray: #E9ECEF;
            --dark-gray: #495057;
            --text-primary: #2C3E50;
            --text-secondary: #6C757D;
            --accent-blue: #4A90E2;
            --success-green: #28A745;
            --sidebar-width: 280px;
        }
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Inter', sans-serif;
            line-height: 1.6;
            color: var(--text-primary);
            background-color: var(--light-gray);
        }
        html {
            scroll-behavior: smooth;
        }
        /* Sidebar Navigation */
        .sidebar {
            position: fixed;
            left: 0;
            top: 0;
            width: var(--sidebar-width);
            height: 100vh;
            background: linear-gradient(180deg, var(--deep-red) 0%, var(--purple) 100%);
            color: var(--white);
            z-index: 1000;
            transition: transform 0.3s ease;
            overflow-y: auto;
        }
        .sidebar-header {
            padding: 2rem 1.5rem;
            text-align: center;
            border-bottom: 1px solid rgba(255,255,255,0.1);
        }
        .sidebar-logo {
            width: 60px;
            height: 60px;
            border-radius: 12px;
            margin-bottom: 1rem;
        }
        .sidebar-title {
            font-size: 1.4rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
        }
        .sidebar-subtitle {
            font-size: 0.85rem;
            opacity: 0.8;
        }
        /* Voter Profile in Sidebar */
        .sidebar-profile {
            padding: 1.5rem;
            border-bottom: 1px solid rgba(255,255,255,0.1);
        }
        .profile-card {
            background: rgba(255,255,255,0.15);
            border-radius: 16px;
            padding: 1.75rem 1rem;
            text-align: center;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255,255,255,0.2);
        }
        .profile-avatar {
            width: 95px; /* Slightly enlarged */
            height: 95px; /* Slightly enlarged */
            border-radius: 50%;
            margin: 0 auto 0.75rem;
            border: 3px solid rgba(255,255,255,0.4);
            object-fit: cover;
            object-position: center; /* Ensures the image fills the circle evenly */
            box-shadow: 0 4px 12px rgba(0,0,0,0.2);
            transition: all 0.3s ease;
        }
        .profile-avatar:hover {
            transform: scale(1.05);
            border-color: rgba(255,255,255,0.6);
            box-shadow: 0 6px 16px rgba(0,0,0,0.3);
        }
        .profile-name {
            font-size: 1rem;
            font-weight: 600;
            margin-bottom: 0.25rem;
            text-shadow: 0 1px 2px rgba(0,0,0,0.1);
        }
        .profile-class {
            font-size: 0.85rem;
            opacity: 0.9;
            margin-bottom: 0.75rem;
            font-weight: 500;
        }
        .profile-status {
            display: inline-flex;
            align-items: center;
            gap: 0.4rem;
            font-size: 0.8rem;
            background: rgba(255,255,255,0.25);
            padding: 0.4rem 0.8rem;
            border-radius: 25px;
            font-weight: 500;
            backdrop-filter: blur(5px);
            border: 1px solid rgba(255,255,255,0.2);
        }
        /* Sidebar Navigation Menu */
        .sidebar-nav {
            padding: 1rem 0;
        }
        .nav-item {
            margin-bottom: 0.5rem;
        }
        .nav-link {
            display: flex;
            align-items: center;
            gap: 1rem;
            padding: 0.75rem 1.5rem;
            color: var(--white);
            text-decoration: none;
            transition: all 0.3s ease;
            border-left: 3px solid transparent;
        }
        .nav-link:hover, .nav-link.active {
            background: rgba(255,255,255,0.1);
            border-left-color: var(--soft-lavender);
        }
        .nav-link i {
            width: 20px;
            text-align: center;
        }
        /* Mobile Sidebar Toggle */
        .sidebar-toggle {
            display: none;
            position: fixed;
            top: 1rem;
            left: 1rem;
            z-index: 1001;
            background: var(--deep-red);
            color: var(--white);
            border: none;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            font-size: 1.2rem;
            cursor: pointer;
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        }
        /* Main Content */
        .main-content {
            margin-left: var(--sidebar-width);
            min-height: 100vh;
            transition: margin-left 0.3s ease;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }
        /* Hero Section */
        .hero {
            /* Simplified background with a soft gradient */
            background: linear-gradient(135deg, var(--soft-lavender) 0%, var(--white) 50%, var(--light-gray) 100%);
            padding: 4rem 0;
            position: relative;
            overflow: hidden;
            box-shadow: 0 8px 20px rgba(0,0,0,0.08); /* Subtle shadow */
            /* Removed animation for a simpler effect */
        }
        /* Removed @keyframes heroPulse */
        .hero-content {
            position: relative;
            z-index: 2;
            text-align: center;
        }
        .hero h1 {
            font-size: 3rem;
            font-weight: 700;
            color: var(--deep-red);
            margin-bottom: 1rem;
            animation: fadeInUp 1s ease;
        }
        .hero p {
            font-size: 1.2rem;
            color: var(--text-secondary);
            margin-bottom: 2rem;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
            animation: fadeInUp 1s ease 0.2s both;
        }
        .cta-buttons {
            display: flex;
            gap: 1rem;
            justify-content: center;
            flex-wrap: wrap;
            animation: fadeInUp 1s ease 0.4s both;
        }
        .btn {
            padding: 1rem 2rem;
            border: none;
            border-radius: 50px;
            font-weight: 600;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            transition: all 0.3s ease;
            cursor: pointer;
            font-size: 1rem;
        }
        .btn-primary {
            background: linear-gradient(135deg, var(--deep-red), var(--purple));
            color: var(--white);
        }
        .btn-secondary {
            background: var(--white);
            color: var(--deep-red);
            border: 2px solid var(--deep-red);
        }
        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.15);
        }
        /* Section Styling */
        .section {
            padding: 4rem 0;
        }
        .section-title {
            text-align: center;
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 3rem;
            color: var(--deep-red);
        }
        /* Quick Vote Section */
        .quick-vote {
            background: var(--white);
            border-radius: 20px;
            padding: 3rem;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
            border: 1px solid var(--medium-gray);
        }
        .vote-icon {
            width: 100px;
            height: 100px;
            background: linear-gradient(135deg, var(--deep-red), var(--purple));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 2rem;
            color: var(--white);
            font-size: 3rem;
        }
        /* Candidates Section */
        .candidates-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }
        .candidate-card {
            background: var(--white);
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 8px 25px rgba(0,0,0,0.08);
            border: 1px solid var(--medium-gray);
            transition: all 0.3s ease;
        }
        .candidate-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(0,0,0,0.12);
        }
        .candidate-image {
            width: 100%;
            height: 250px;
            object-fit: cover;
            background: linear-gradient(135deg, var(--soft-lavender), var(--medium-gray));
        }
        .candidate-info {
            padding: 2rem;
        }
        .candidate-info h3 {
            color: var(--deep-red);
            font-size: 1.4rem;
            margin-bottom: 0.5rem;
        }
        .candidate-info .position {
            color: var(--purple);
            font-weight: 600;
            margin-bottom: 1rem;
            font-size: 0.9rem;
        }
        .candidate-info p {
            color: var(--text-secondary);
            margin-bottom: 1.5rem;
            line-height: 1.6;
        }
        .candidate-actions {
            display: flex;
            gap: 1rem;
        }
        .btn-small {
            padding: 0.7rem 1.5rem;
            font-size: 0.9rem;
            border-radius: 25px;
            flex: 1;
            text-align: center;
        }
        /* Vote Results */
        .vote-results {
            background: var(--white);
            border-radius: 20px;
            padding: 3rem;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
            border: 1px solid var(--medium-gray);
        }
        .results-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }
        .result-item {
            text-align: center;
            padding: 2rem;
            background: var(--light-gray);
            border-radius: 15px;
            transition: all 0.3s ease;
        }
        .result-item:hover {
            background: var(--soft-lavender);
            transform: translateY(-2px);
        }
        .result-number {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--deep-red);
            margin-bottom: 0.5rem;
        }
        .result-label {
            color: var(--text-secondary);
            font-weight: 500;
        }
        .progress-bar {
            width: 100%;
            height: 8px;
            background: var(--medium-gray);
            border-radius: 4px;
            margin: 1rem 0;
            overflow: hidden;
        }
        .progress-fill {
            height: 100%;
            background: linear-gradient(90deg, var(--deep-red), var(--purple));
            border-radius: 4px;
            transition: width 2s ease;
        }
        /* Footer */
        .footer {
            background: var(--white);
            border-top: 1px solid var(--medium-gray);
            padding: 3rem 0 2rem;
        }
        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 3rem;
            margin-bottom: 2rem;
        }
        .footer-section h3 {
            color: var(--deep-red);
            margin-bottom: 1rem;
            font-size: 1.2rem;
        }
        .footer-section p, .footer-section a {
            color: var(--text-secondary);
            text-decoration: none;
            margin-bottom: 0.5rem;
            display: block;
        }
        .footer-section a:hover {
            color: var(--deep-red);
        }
        .footer-logos {
            display: flex;
            align-items: center;
            gap: 2rem;
            margin-top: 1rem;
        }
        .footer-logo {
            width: 80px;
            height: 80px;
            border-radius: 12px;
        }
        .footer-bottom {
            border-top: 1px solid var(--medium-gray);
            padding-top: 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 1rem;
        }
        .social-links {
            display: flex;
            gap: 1rem;
        }
        .social-links a {
            width: 40px;
            height: 40px;
            background: var(--light-gray);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--text-secondary);
            transition: all 0.3s ease;
        }
        .social-links a:hover {
            background: var(--deep-red);
            color: var(--white);
            transform: translateY(-2px);
        }
        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        /* Mobile Responsiveness */
        @media (max-width: 768px) {
            .sidebar {
                transform: translateX(-100%);
            }
            .sidebar.active {
                transform: translateX(0);
            }
            .sidebar-toggle {
                display: block;
            }
            .main-content {
                margin-left: 0;
            }
            .hero h1 {
                font-size: 2.2rem;
            }
            .cta-buttons {
                flex-direction: column;
                align-items: center;
            }
            .candidates-grid {
                grid-template-columns: 1fr;
            }
            .footer-bottom {
                flex-direction: column;
                text-align: center;
            }
            .footer-logos {
                justify-content: center;
            }
        }
        @media (max-width: 480px) {
            .container {
                padding: 0 1rem;
            }
            .hero {
                padding: 2rem 0;
            }
            .section {
                padding: 2rem 0;
            }
        }
    </style>
</head>
<body>
    <!-- Mobile Sidebar Toggle -->
    <button class="sidebar-toggle" id="sidebarToggle">
        <i class="fas fa-bars"></i>
    </button>
    <!-- Sidebar Navigation -->
    <nav class="sidebar" id="sidebar">
        <!-- Sidebar Header -->
        <div class="sidebar-header">
            <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/JagoanOsisKu-Logo-zF5evax6Gyn0RQ9yjnlWM3O34IcnG1.png" alt="JagoanOsisKu Logo" class="sidebar-logo">
            <h1 class="sidebar-title">JagoanOsisKu</h1>
            <p class="sidebar-subtitle">Platform Pemilihan OSIS</p>
        </div>
        <!-- Voter Profile -->
        <div class="sidebar-profile"> 
            <div class="profile-card">
                {{-- Foto profil (gunakan default jika belum ada) --}}
                <img src="{{ Auth::user()->avatar ?? 'https://i.pinimg.com/736x/35/c5/87/35c58704d8812a9cd32e2ce30121ed6e.jpg' }}" 
                     alt="{{ Auth::user()->nama }}" 
                     class="profile-avatar">

                {{-- Nama pengguna --}}
                <div class="profile-name">{{ Auth::user()->nama }}</div>

                {{-- Kelas (pastikan kolom ini ada di database users/student) --}}
                <div class="profile-class">{{ Auth::user()->kelas ?? 'Kelas tidak diketahui' }}</div>

                {{-- Status (contoh saja, bisa diubah sesuai data di database) --}}
                <div class="profile-status">
                    @if(Auth::user()->status == 'belum')
                        <i class="fas fa-circle" style="color: #ffc107;"></i> Belum Memilih
                    @else
                        <i class="fas fa-circle" style="color: #28a745;"></i> Sudah Memilih
                    @endif
                </div>
            </div>
        </div>
        <!-- Navigation Menu -->
        <div class="sidebar-nav">
            <div class="nav-item">
                <a href="#home" class="nav-link active">
                    <i class="fas fa-home"></i>
                    <span>Beranda</span>
                </a>
            </div>
            <div class="nav-item">
                <a href="#vote" class="nav-link">
                    <i class="fas fa-vote-yea"></i>
                    <span>Voting</span>
                </a>
            </div>
            <div class="nav-item">
                <a href="#candidates" class="nav-link">
                    <i class="fas fa-users"></i>
                    <span>Kandidat</span>
                </a>
            </div>
            <div class="nav-item">
                <a href="#results" class="nav-link">
                    <i class="fas fa-chart-bar"></i>
                    <span>Hasil</span>
                </a>
            </div>
            <div class="nav-item">
                <a href="#profile" class="nav-link">
                    <i class="fas fa-user"></i>
                    <span>Profil Saya</span>
                </a>
            </div>
            <div class="nav-item">
                <a href="#" id="logoutLink" class="nav-link">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Keluar</span>
                </a>

                <!-- Form POST tersembunyi untuk logout -->
                <form id="logoutForm" action="{{ route('logout') }}" method="POST" style="display:none;">
                    @csrf
                </form>
            </div>
        </div>
    </nav>
    <!-- Main Content -->
    <main class="main-content">
        <!-- Hero Section -->
        <section id="home" class="hero">
            <div class="container">
                <div class="hero-content">
                    <h1>Pilih Pemimpin Masa Depan</h1>
                    <p>Platform digital untuk pemilihan OSIS yang transparan, aman, dan mudah digunakan. Suaramu menentukan masa depan sekolah!</p>
                    <div class="cta-buttons">
                        <a href="#vote" class="btn btn-primary">
                            <i class="fas fa-vote-yea"></i>
                            Mulai Voting
                        </a>
                        <a href="#candidates" class="btn btn-secondary">
                            <i class="fas fa-users"></i>
                            Lihat Kandidat
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <div class="container">
            <!-- Quick Vote Section -->
            <section id="vote" class="section">
                <div class="quick-vote">
                    <div class="vote-icon">
                        <i class="fas fa-crown"></i>
                    </div>
                    <h2>Voting Cepat</h2>
                    <p>Pilih kandidat favoritmu dengan sekali klik. Proses voting yang aman dan terjamin kerahasiaannya.</p>
                    <a href="#candidates" class="btn btn-primary" style="margin-top: 1.5rem;">
                        <i class="fas fa-arrow-right"></i>
                        Pilih Kandidat
                    </a>
                </div>
            </section>
            <!-- Candidates Section -->
            <section id="candidates" class="section">
                <h2 class="section-title">Kandidat OSIS 2024</h2>
                <div class="candidates-grid">
                    <div class="candidate-card">
                        <img src="/placeholder.svg?height=250&width=320&text=Kandidat+1" alt="Kandidat 1" class="candidate-image">
                        <div class="candidate-info">
                            <h3>Muhammad Fajar Sidiq</h3>
                            <p class="position">Calon Ketua OSIS</p>
                            <p>Visi: Mewujudkan OSIS yang inovatif, kreatif, dan berprestasi untuk kemajuan sekolah dan kesejahteraan siswa.</p>
                            <div class="candidate-actions">
                                <a href="#" class="btn btn-primary btn-small">
                                    <i class="fas fa-vote-yea"></i>
                                    Pilih
                                </a>
                                <a href="#" class="btn btn-secondary btn-small">
                                    <i class="fas fa-info-circle"></i>
                                    Detail
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="candidate-card">
                        <img src="/placeholder.svg?height=250&width=320&text=Kandidat+2" alt="Kandidat 2" class="candidate-image">
                        <div class="candidate-info">
                            <h3>Siti Nurhaliza</h3>
                            <p class="position">Calon Wakil Ketua OSIS</p>
                            <p>Visi: Membangun komunikasi yang harmonis antara siswa dan guru serta menciptakan lingkungan sekolah yang kondusif.</p>
                            <div class="candidate-actions">
                                <a href="#" class="btn btn-primary btn-small">
                                    <i class="fas fa-vote-yea"></i>
                                    Pilih
                                </a>
                                <a href="#" class="btn btn-secondary btn-small">
                                    <i class="fas fa-info-circle"></i>
                                    Detail
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="candidate-card">
                        <img src="/placeholder.svg?height=250&width=320&text=Kandidat+3" alt="Kandidat 3" class="candidate-image">
                        <div class="candidate-info">
                            <h3>Dimas Pratama</h3>
                            <p class="position">Calon Sekretaris OSIS</p>
                            <p>Visi: Meningkatkan transparansi dan akuntabilitas dalam setiap kegiatan OSIS untuk kepercayaan siswa.</p>
                            <div class="candidate-actions">
                                <a href="#" class="btn btn-primary btn-small">
                                    <i class="fas fa-vote-yea"></i>
                                    Pilih
                                </a>
                                <a href="#" class="btn btn-secondary btn-small">
                                    <i class="fas fa-info-circle"></i>
                                    Detail
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Real-time Vote Results -->
            <section id="results" class="section">
                <h2 class="section-title">Hasil Voting Real-time</h2>
                <div class="vote-results">
                    <div class="results-grid">
                        <div class="result-item">
                            <div class="result-number" id="totalVotes">1,247</div>
                            <div class="result-label">Total Suara</div>
                        </div>
                        <div class="result-item">
                            <div class="result-number" id="participation">78%</div>
                            <div class="result-label">Partisipasi</div>
                        </div>
                        <div class="result-item">
                            <div class="result-number" id="timeLeft">2d 14h</div>
                            <div class="result-label">Waktu Tersisa</div>
                        </div>
                    </div>
                    <div style="margin-top: 3rem;">
                        <h3 style="margin-bottom: 2rem; color: var(--deep-red);">Perolehan Suara Sementara</h3>
                        <div style="margin-bottom: 2rem;">
                            <div style="display: flex; justify-content: space-between; margin-bottom: 0.5rem;">
                                <span>Muhammad Fajar Sidiq</span>
                                <span>45.2% (564 suara)</span>
                            </div>
                            <div class="progress-bar">
                                <div class="progress-fill" style="width: 45.2%"></div>
                            </div>
                        </div>
                        <div style="margin-bottom: 2rem;">
                            <div style="display: flex; justify-content: space-between; margin-bottom: 0.5rem;">
                                <span>Siti Nurhaliza</span>
                                <span>32.8% (409 suara)</span>
                            </div>
                            <div class="progress-bar">
                                <div class="progress-fill" style="width: 32.8%"></div>
                            </div>
                        </div>
                        <div style="margin-bottom: 2rem;">
                            <div style="display: flex; justify-content: space-between; margin-bottom: 0.5rem;">
                                <span>Dimas Pratama</span>
                                <span>22.0% (274 suara)</span>
                            </div>
                            <div class="progress-bar">
                                <div class="progress-fill" style="width: 22.0%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- Footer -->
        <footer class="footer">
            <div class="container">
                <div class="footer-content">
                    <div class="footer-section">
                        <h3>JagoanOsisKu</h3>
                        <p>Platform digital untuk pemilihan OSIS yang transparan dan demokratis di SMK Negeri 1 Probolinggo. Mendukung demokrasi siswa dengan teknologi modern.</p>
                        <div class="footer-logos">
                            <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/JagoanOsisKu-Logo-zF5evax6Gyn0RQ9yjnlWM3O34IcnG1.png" alt="JagoanOsisKu" class="footer-logo">
                            <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/logoosis.jpg-acpHUdolMJFX6fLgEt2pFbcgtefjaP.jpeg" alt="OSIS Dipta Baskara" class="footer-logo">
                            <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/image-SItg6DmkJoYLpIJFQKEeU8NwYwAEve.png" alt="SMK Negeri 1 Probolinggo" class="footer-logo">
                        </div>
                    </div>
                    <div class="footer-section">
                        <h3>Kontak</h3>
                        <p><i class="fas fa-envelope"></i> info@jagoanosisku.sch.id</p>
                        <p><i class="fas fa-phone"></i> (0335) 421234</p>
                        <p><i class="fas fa-map-marker-alt"></i> SMK Negeri 1 Probolinggo</p>
                        <p><i class="fas fa-globe"></i> www.smkn1probolinggo.sch.id</p>
                    </div>
                    <div class="footer-section">
                        <h3>Tautan Cepat</h3>
                        <a href="#home">Beranda</a>
                        <a href="#candidates">Kandidat</a>
                        <a href="#results">Hasil Voting</a>
                        <a href="#profile">Profil Saya</a>
                    </div>
                </div>
                <div class="footer-bottom">
                    <p>&copy; 2024 JagoanOsisKu - OSIS Dipta Baskara SMK Negeri 1 Probolinggo. Pribadi Baru Sakana. Semua hak dilindungi.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </footer>
    </main>
    <script>
        // Sidebar toggle functionality
        const sidebarToggle = document.getElementById('sidebarToggle');
        const sidebar = document.getElementById('sidebar');
        sidebarToggle.addEventListener('click', () => {
            sidebar.classList.toggle('active');
        });
        // Close sidebar when clicking outside on mobile
        document.addEventListener('click', (e) => {
            if (window.innerWidth <= 768) {
                if (!sidebar.contains(e.target) && !sidebarToggle.contains(e.target)) {
                    sidebar.classList.remove('active');
                }
            }
        });
        // Navigation link active state
        const navLinks = document.querySelectorAll('.nav-link');
        navLinks.forEach(link => {
            link.addEventListener('click', (e) => {
                // Remove active class from all links
                navLinks.forEach(l => l.classList.remove('active'));
                // Add active class to clicked link
                e.target.closest('.nav-link').classList.add('active');
                // Close sidebar on mobile after clicking
                if (window.innerWidth <= 768) {
                    sidebar.classList.remove('active');
                }
            });
        });
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
        // Animated counter for vote results
        function animateCounter(element, target, duration = 2000) {
            const start = 0;
            const increment = target / (duration / 16);
            let current = start;
            const timer = setInterval(() => {
                current += increment;
                if (current >= target) {
                    current = target;
                    clearInterval(timer);
                }
                if (element.id === 'totalVotes') {
                    element.textContent = Math.floor(current).toLocaleString();
                } else if (element.id === 'participation') {
                    element.textContent = Math.floor(current) + '%';
                }
            }, 16);
        }
        // Intersection Observer for animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.animation = 'fadeInUp 0.8s ease forwards';
                    // Animate counters when results section is visible
                    if (entry.target.id === 'results') {
                        setTimeout(() => {
                            animateCounter(document.getElementById('totalVotes'), 1247);
                            animateCounter(document.getElementById('participation'), 78);
                        }, 500);
                    }
                }
            });
        }, observerOptions);
        // Observe elements for animation
        document.querySelectorAll('.candidate-card, .result-item, .vote-results').forEach(el => {
            observer.observe(el);
        });
        // Observe results section
        const resultsSection = document.getElementById('results');
        if (resultsSection) {
            observer.observe(resultsSection);
        }
        // Real-time updates simulation
        function updateVoteCount() {
            const totalVotesEl = document.getElementById('totalVotes');
            const currentVotes = parseInt(totalVotesEl.textContent.replace(',', ''));
            const newVotes = currentVotes + Math.floor(Math.random() * 5) + 1;
            totalVotesEl.textContent = newVotes.toLocaleString();
            // Update participation
            const participationEl = document.getElementById('participation');
            const newParticipation = Math.min(100, Math.floor((newVotes / 1600) * 100));
            participationEl.textContent = newParticipation + '%';
        }
        // Update vote count every 30 seconds
        setInterval(updateVoteCount, 30000);
        // Countdown timer
        function updateCountdown() {
            const timeLeftEl = document.getElementById('timeLeft');
            const now = new Date().getTime();
            const endDate = new Date('2024-12-31 23:59:59').getTime();
            const distance = endDate - now;
            const days = Math.floor(distance / (1000 * 60 * 60 * 24));
            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            timeLeftEl.textContent = `${days}d ${hours}h`;
        }
        // Update countdown every minute
        setInterval(updateCountdown, 60000);
        updateCountdown(); // Initial call
        // Update profile status dynamically
        function updateProfileStatus(hasVoted) {
            const statusElement = document.querySelector('.profile-status');
            const icon = statusElement.querySelector('i');
            if (hasVoted) {
                statusElement.innerHTML = '<i class="fas fa-check-circle" style="color: #28a745;"></i> Sudah Memilih';
            } else {
                statusElement.innerHTML = '<i class="fas fa-circle" style="color: #ffc107;"></i> Belum Memilih';
            }
        }
        // Handle window resize
        window.addEventListener('resize', () => {
            if (window.innerWidth > 768) {
                sidebar.classList.remove('active');
            }
        });

        document.getElementById('logoutLink').addEventListener('click', function(e){
            e.preventDefault();

            // optional: konfirmasi
            if (!confirm('Yakin ingin keluar?')) return;

            document.getElementById('logoutForm').submit();
        });
    </script>
</body>
</html>