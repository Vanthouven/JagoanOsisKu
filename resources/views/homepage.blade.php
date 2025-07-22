<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OSIS Dipta Baskara – SMKN 1 Probolinggo | Portal Pemilihan 2025</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --deep-purple: #2E0066;
            --bright-magenta: #A944D4;
            --royal-purple: #6D28D9;
            --clean-white: #FFFFFF;
            --light-gray: #F8F9FA;
            --text-dark: #333333;
            --text-light: #666666;
        }

        body {
            font-family: 'Inter', sans-serif;
            line-height: 1.6;
            color: var(--text-dark);
            overflow-x: hidden;
        }

        /* Navigation */
        .navbar {
            background: var(--clean-white);
            box-shadow: 0 2px 20px rgba(0,0,0,0.1);
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
            transition: all 0.3s ease;
        }

        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 2rem;
        }

        .logo-section {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .logo {
            width: 50px;
            height: 50px;
            border-radius: 10px;
        }

        .logo-text {
            font-weight: 700;
            font-size: 1.2rem;
            color: var(--deep-purple);
        }

        .nav-menu {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        .nav-link {
            text-decoration: none;
            color: var(--text-dark);
            font-weight: 500;
            padding: 0.5rem 1rem;
            border-radius: 8px;
            transition: all 0.3s ease;
            position: relative;
        }

        .nav-link:hover,
        .nav-link.active {
            color: var(--royal-purple);
            background: rgba(109, 40, 217, 0.1);
        }

        .mobile-menu-toggle {
            display: none;
            background: none;
            border: none;
            font-size: 1.5rem;
            color: var(--deep-purple);
            cursor: pointer;
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(135deg, var(--deep-purple) 0%, var(--bright-magenta) 100%);
            padding: 8rem 2rem 4rem;
            text-align: center;
            color: white;
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000"><polygon fill="rgba(255,255,255,0.05)" points="0,0 1000,300 1000,1000 0,700"/><polygon fill="rgba(255,255,255,0.03)" points="0,200 1000,0 1000,400 0,600"/></svg>');
            background-size: cover;
        }

        .hero-content {
            max-width: 800px;
            margin: 0 auto;
            position: relative;
            z-index: 2;
        }

        .hero h1 {
            font-size: 3rem;
            font-weight: 800;
            margin-bottom: 1rem;
            text-shadow: 0 2px 10px rgba(0,0,0,0.3);
        }

        .hero p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }

        .cta-buttons {
            display: flex;
            gap: 1rem;
            justify-content: center;
            flex-wrap: wrap;
        }

        .btn {
            padding: 1rem 2rem;
            border: none;
            border-radius: 12px;
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
            background: var(--clean-white);
            color: var(--royal-purple);
            box-shadow: 0 4px 15px rgba(255,255,255,0.3);
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 25px rgba(255,255,255,0.4);
        }

        .btn-secondary {
            background: transparent;
            color: white;
            border: 2px solid white;
        }

        .btn-secondary:hover {
            background: white;
            color: var(--royal-purple);
            transform: translateY(-2px);
        }

        /* Section Styling */
        .section {
            padding: 4rem 2rem;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .section-title {
            text-align: center;
            margin-bottom: 3rem;
        }

        .section-title h2 {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--deep-purple);
            margin-bottom: 1rem;
        }

        .section-title p {
            font-size: 1.1rem;
            color: var(--text-light);
        }

        /* Candidates Section */
        .candidates {
            background: var(--light-gray);
        }

        .candidates-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .candidate-card {
            background: white;
            border-radius: 20px;
            padding: 2rem;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .candidate-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, var(--deep-purple), var(--bright-magenta));
        }

        .candidate-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        }

        .candidate-photo {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            margin: 0 auto 1.5rem;
            background: linear-gradient(135deg, var(--deep-purple), var(--bright-magenta));
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 3rem;
            font-weight: bold;
        }

        .candidate-name {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--deep-purple);
            margin-bottom: 0.5rem;
        }

        .candidate-class {
            color: var(--text-light);
            margin-bottom: 1rem;
        }

        .candidate-vision {
            font-size: 0.9rem;
            color: var(--text-light);
            margin-bottom: 1.5rem;
            line-height: 1.6;
        }

        /* Timeline Section */
        .timeline-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .timeline-item {
            background: white;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.08);
            text-align: center;
            position: relative;
        }

        .timeline-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, var(--royal-purple), var(--bright-magenta));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1rem;
            color: white;
            font-size: 1.5rem;
        }

        .timeline-title {
            font-size: 1.2rem;
            font-weight: 600;
            color: var(--deep-purple);
            margin-bottom: 0.5rem;
        }

        .timeline-date {
            color: var(--text-light);
            font-size: 0.9rem;
            margin-bottom: 1rem;
        }

        .timeline-desc {
            color: var(--text-light);
            font-size: 0.9rem;
        }

        /* Voting Section */
        .voting-section {
            background: linear-gradient(135deg, var(--royal-purple), var(--bright-magenta));
            color: white;
            text-align: center;
        }

        .voting-status {
            background: rgba(255,255,255,0.1);
            padding: 2rem;
            border-radius: 20px;
            margin-top: 2rem;
            backdrop-filter: blur(10px);
        }

        .voting-status h3 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }

        .vote-btn {
            background: white;
            color: var(--royal-purple);
            padding: 1rem 3rem;
            font-size: 1.2rem;
            font-weight: 700;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(255,255,255,0.3);
        }

        .vote-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 30px rgba(255,255,255,0.4);
        }

        .voted-status {
            background: rgba(16, 185, 129, 0.2);
            border: 2px solid rgba(16, 185, 129, 0.5);
            color: #10B981;
            padding: 1rem 2rem;
            border-radius: 12px;
            font-weight: 600;
        }

        /* Results Section */
        .results {
            background: var(--light-gray);
        }

        .chart-container {
            background: white;
            padding: 2rem;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            max-width: 600px;
            margin: 0 auto;
        }

        /* Footer */
        .footer {
            background: var(--deep-purple);
            color: white;
            padding: 3rem 2rem 2rem;
        }

        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .footer-section h3 {
            margin-bottom: 1rem;
            color: var(--bright-magenta);
        }

        .footer-section p,
        .footer-section a {
            color: rgba(255,255,255,0.8);
            text-decoration: none;
            margin-bottom: 0.5rem;
            display: block;
        }

        .footer-section a:hover {
            color: white;
        }

        .social-links {
            display: flex;
            gap: 1rem;
            margin-top: 1rem;
        }

        .social-links a {
            width: 40px;
            height: 40px;
            background: rgba(255,255,255,0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }

        .social-links a:hover {
            background: var(--bright-magenta);
            transform: translateY(-2px);
        }

        .footer-bottom {
            text-align: center;
            margin-top: 2rem;
            padding-top: 2rem;
            border-top: 1px solid rgba(255,255,255,0.1);
            color: rgba(255,255,255,0.6);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .nav-menu {
                display: none;
                position: absolute;
                top: 100%;
                left: 0;
                right: 0;
                background: white;
                flex-direction: column;
                padding: 1rem;
                box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            }

            .nav-menu.active {
                display: flex;
            }

            .mobile-menu-toggle {
                display: block;
            }

            .hero h1 {
                font-size: 2rem;
            }

            .hero p {
                font-size: 1rem;
            }

            .cta-buttons {
                flex-direction: column;
                align-items: center;
            }

            .section-title h2 {
                font-size: 2rem;
            }

            .candidates-grid {
                grid-template-columns: 1fr;
            }

            .timeline-container {
                grid-template-columns: 1fr;
            }
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

        .fade-in-up {
            animation: fadeInUp 0.6s ease forwards;
        }

        /* Scroll animations */
        .scroll-animate {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s ease;
        }

        .scroll-animate.visible {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar">
        <div class="nav-container">
            <div class="logo-section">
                <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/logoosis.jpg-Ht7GvHJIhj5BTjKfxmVjWHlfoYEebb.jpeg" alt="OSIS Dipta Baskara" class="logo">
                <div class="logo-text">OSIS Dipta Baskara</div>
            </div>
            <ul class="nav-menu" id="navMenu">
                <li><a href="#home" class="nav-link active">Home</a></li>
                <li><a href="#kandidat" class="nav-link">Kandidat</a></li>
                <li><a href="#jadwal" class="nav-link">Jadwal</a></li>
                <li><a href="#voting" class="nav-link">Voting</a></li>
                <li><a href="#hasil" class="nav-link">Hasil</a></li>
                <li><a href="#" class="nav-link" onclick="logout()">Logout</a></li>
            </ul>
            <button class="mobile-menu-toggle" id="mobileToggle">
                <i class="fas fa-bars"></i>
            </button>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="hero-content fade-in-up">
            <h1>Selamat Datang di Portal Pemilihan Ketua OSIS 2025</h1>
            <p>Bersama kita tentukan pemimpin terbaik untuk masa depan sekolah</p>
            <div class="cta-buttons">
                <a href="#kandidat" class="btn btn-primary">
                    <i class="fas fa-users"></i>
                    Lihat Kandidat
                </a>
                <a href="#voting" class="btn btn-secondary">
                    <i class="fas fa-vote-yea"></i>
                    Mulai Voting
                </a>
            </div>
        </div>
    </section>

    <!-- Candidates Section -->
    <section class="section candidates" id="kandidat">
        <div class="container">
            <div class="section-title scroll-animate">
                <h2>Kandidat Ketua OSIS 2025</h2>
                <p>Kenali visi dan misi dari setiap kandidat</p>
            </div>
            <div class="candidates-grid">
                <div class="candidate-card scroll-animate">
                    <div class="candidate-photo">A</div>
                    <div class="candidate-name">Ahmad Rizki</div>
                    <div class="candidate-class">XII RPL 1</div>
                    <div class="candidate-vision">
                        "Membangun OSIS yang inovatif, kreatif, dan mampu menjadi wadah aspirasi seluruh siswa untuk kemajuan sekolah."
                    </div>
                    <a href="#" class="btn btn-primary">
                        <i class="fas fa-info-circle"></i>
                        Lihat Detail
                    </a>
                </div>
                <div class="candidate-card scroll-animate">
                    <div class="candidate-photo">S</div>
                    <div class="candidate-name">Sari Indah</div>
                    <div class="candidate-class">XII TKJ 2</div>
                    <div class="candidate-vision">
                        "Menciptakan lingkungan sekolah yang harmonis, produktif, dan mendukung pengembangan potensi setiap siswa."
                    </div>
                    <a href="#" class="btn btn-primary">
                        <i class="fas fa-info-circle"></i>
                        Lihat Detail
                    </a>
                </div>
                <div class="candidate-card scroll-animate">
                    <div class="candidate-photo">D</div>
                    <div class="candidate-name">Dimas Pratama</div>
                    <div class="candidate-class">XII MM 1</div>
                    <div class="candidate-vision">
                        "Mewujudkan OSIS yang transparan, akuntabel, dan mampu menghadirkan program-program yang bermanfaat."
                    </div>
                    <a href="#" class="btn btn-primary">
                        <i class="fas fa-info-circle"></i>
                        Lihat Detail
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Timeline Section -->
    <section class="section" id="jadwal">
        <div class="container">
            <div class="section-title scroll-animate">
                <h2>Jadwal Pemilihan</h2>
                <p>Timeline lengkap proses pemilihan Ketua OSIS 2025</p>
            </div>
            <div class="timeline-container">
                <div class="timeline-item scroll-animate">
                    <div class="timeline-icon">
                        <i class="fas fa-user-plus"></i>
                    </div>
                    <div class="timeline-title">Pendaftaran</div>
                    <div class="timeline-date">1 - 7 Februari 2025</div>
                    <div class="timeline-desc">Periode pendaftaran kandidat dan verifikasi berkas</div>
                </div>
                <div class="timeline-item scroll-animate">
                    <div class="timeline-icon">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <div class="timeline-title">Verifikasi</div>
                    <div class="timeline-date">8 - 10 Februari 2025</div>
                    <div class="timeline-desc">Proses verifikasi dan validasi kandidat</div>
                </div>
                <div class="timeline-item scroll-animate">
                    <div class="timeline-icon">
                        <i class="fas fa-bullhorn"></i>
                    </div>
                    <div class="timeline-title">Kampanye</div>
                    <div class="timeline-date">11 - 17 Februari 2025</div>
                    <div class="timeline-desc">Masa kampanye dan sosialisasi program kandidat</div>
                </div>
                <div class="timeline-item scroll-animate">
                    <div class="timeline-icon">
                        <i class="fas fa-vote-yea"></i>
                    </div>
                    <div class="timeline-title">Pemilihan</div>
                    <div class="timeline-date">18 Februari 2025</div>
                    <div class="timeline-desc">Hari pemilihan dan penghitungan suara</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Voting Section -->
    <section class="section voting-section" id="voting">
        <div class="container">
            <div class="section-title scroll-animate">
                <h2>Status Pemilihan</h2>
                <p>Berpartisipasilah dalam menentukan pemimpin masa depan</p>
            </div>
            <div class="voting-status scroll-animate" id="votingStatus">
                <h3>Kamu belum memberikan suara</h3>
                <p>Gunakan hak pilihmu untuk menentukan Ketua OSIS terbaik</p>
                <button class="btn vote-btn" onclick="startVoting()">
                    <i class="fas fa-vote-yea"></i>
                    Mulai Memilih
                </button>
            </div>
        </div>
    </section>

    <!-- Results Section -->
    <section class="section results" id="hasil">
        <div class="container">
            <div class="section-title scroll-animate">
                <h2>Hasil Sementara</h2>
                <p>Pantau perkembangan hasil pemilihan secara real-time</p>
            </div>
            <div class="chart-container scroll-animate">
                <canvas id="resultsChart" width="400" height="200"></canvas>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-content">
            <div class="footer-section">
                <h3>OSIS Dipta Baskara</h3>
                <p>Organisasi Siswa Intra Sekolah</p>
                <p>SMK Negeri 1 Probolinggo</p>
                <p>Jl. Raya Panglima Sudirman No.1</p>
                <p>Probolinggo, Jawa Timur</p>
            </div>
            <div class="footer-section">
                <h3>Kontak</h3>
                <a href="mailto:osis@smkn1probolinggo.sch.id">
                    <i class="fas fa-envelope"></i> osis@smkn1probolinggo.sch.id
                </a>
                <a href="tel:+62335421234">
                    <i class="fas fa-phone"></i> (0335) 421234
                </a>
                <div class="social-links">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
            <div class="footer-section">
                <h3>Quick Links</h3>
                <a href="#home">Beranda</a>
                <a href="#kandidat">Kandidat</a>
                <a href="#jadwal">Jadwal</a>
                <a href="#voting">Voting</a>
                <a href="#hasil">Hasil</a>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2025 OSIS Dipta Baskara - SMKN 1 Probolinggo. Developed by SMKN 1 Probolinggo.</p>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        const mobileToggle = document.getElementById('mobileToggle');
        const navMenu = document.getElementById('navMenu');

        mobileToggle.addEventListener('click', () => {
            navMenu.classList.toggle('active');
            const icon = mobileToggle.querySelector('i');
            icon.classList.toggle('fa-bars');
            icon.classList.toggle('fa-times');
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
                // Close mobile menu if open
                navMenu.classList.remove('active');
                mobileToggle.querySelector('i').classList.add('fa-bars');
                mobileToggle.querySelector('i').classList.remove('fa-times');
            });
        });

        // Active navigation link
        window.addEventListener('scroll', () => {
            const sections = document.querySelectorAll('section[id]');
            const navLinks = document.querySelectorAll('.nav-link');

            let current = '';
            sections.forEach(section => {
                const sectionTop = section.offsetTop - 100;
                if (scrollY >= sectionTop) {
                    current = section.getAttribute('id');
                }
            });

            navLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href') === `#${current}`) {
                    link.classList.add('active');
                }
            });
        });

        // Scroll animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, observerOptions);

        document.querySelectorAll('.scroll-animate').forEach(el => {
            observer.observe(el);
        });

        // Voting functionality
        let hasVoted = localStorage.getItem('hasVoted') === 'true';

        function updateVotingStatus() {
            const votingStatus = document.getElementById('votingStatus');
            if (hasVoted) {
                votingStatus.innerHTML = `
                    <h3>Terima kasih sudah berpartisipasi!</h3>
                    <div class="voted-status">
                        <i class="fas fa-check-circle"></i>
                        Kamu sudah memberikan suara
                    </div>
                `;
            }
        }

        function startVoting() {
            if (hasVoted) {
                alert('Anda sudah memberikan suara sebelumnya!');
                return;
            }

            // Simulate voting process
            const candidates = ['Ahmad Rizki', 'Sari Indah', 'Dimas Pratama'];
            const choice = prompt(`Pilih kandidat:\n1. ${candidates[0]}\n2. ${candidates[1]}\n3. ${candidates[2]}\n\nMasukkan nomor (1-3):`);

            if (choice && choice >= 1 && choice <= 3) {
                const selectedCandidate = candidates[choice - 1];
                const confirm = window.confirm(`Anda yakin memilih ${selectedCandidate}?\nPilihan tidak dapat diubah setelah dikonfirmasi.`);

                if (confirm) {
                    // Save vote
                    localStorage.setItem('hasVoted', 'true');
                    localStorage.setItem('selectedCandidate', choice);
                    hasVoted = true;

                    alert(`Terima kasih! Suara Anda untuk ${selectedCandidate} telah tercatat.`);
                    updateVotingStatus();
                    updateChart();
                }
            }
        }

        function logout() {
            const confirm = window.confirm('Apakah Anda yakin ingin keluar?');
            if (confirm) {
                // Clear session data
                localStorage.clear();
                // Redirect to login page
                window.location.href = 'login.html';
            }
        }

        // Chart.js for results
        let resultsChart;

        function initChart() {
            const ctx = document.getElementById('resultsChart').getContext('2d');

            resultsChart = new Chart(ctx, {
                type: 'doughnut',
                data: {
                    labels: ['Ahmad Rizki', 'Sari Indah', 'Dimas Pratama'],
                    datasets: [{
                        data: [45, 35, 20],
                        backgroundColor: [
                            '#2E0066',
                            '#A944D4',
                            '#6D28D9'
                        ],
                        borderWidth: 0,
                        hoverOffset: 10
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'bottom',
                            labels: {
                                padding: 20,
                                font: {
                                    size: 14,
                                    family: 'Inter'
                                }
                            }
                        },
                        tooltip: {
                            callbacks: {
                                label: function(context) {
                                    return context.label + ': ' + context.parsed + '%';
                                }
                            }
                        }
                    }
                }
            });
        }

        function updateChart() {
            // Simulate updated results after voting
            const newData = [46, 34, 20]; // Updated percentages
            resultsChart.data.datasets[0].data = newData;
            resultsChart.update();
        }

        // Initialize on page load
        document.addEventListener('DOMContentLoaded', () => {
            updateVotingStatus();
            initChart();
        });

        // Navbar scroll effect
        window.addEventListener('scroll', () => {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 100) {
                navbar.style.background = 'rgba(255, 255, 255, 0.95)';
                navbar.style.backdropFilter = 'blur(10px)';
            } else {
                navbar.style.background = '#FFFFFF';
                navbar.style.backdropFilter = 'none';
            }
        });
    </script>
</body>
</html>
