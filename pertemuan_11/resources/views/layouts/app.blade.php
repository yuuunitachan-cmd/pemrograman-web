<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'TRITAMA - PT. Triputra Gowata Mandiri')</title>
    <meta name="description" content="@yield('description', 'Kontraktor listrik terpercaya Indonesia Timur dengan sertifikat ISO')">
    
    <!-- Framework & Styles -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'inter': ['Inter', 'sans-serif'],
                    },
                    colors: {
                        'electric-blue': '#1e40af',
                        'electric-orange': '#f59e0b',
                        'dark-blue': '#1e3a8a',
                        'light-blue': '#dbeafe',
                    },
                    animation: {
                        'float': 'float 6s ease-in-out infinite',
                        'pulse-glow': 'pulse-glow 2s ease-in-out infinite alternate',
                        'slide-in': 'slide-in 0.8s ease-out',
                        'fade-in': 'fade-in 0.8s ease-out',
                    }
                }
            }
        }
    </script>
    
    <style>
        * { font-family: 'Inter', sans-serif; }
        
        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(5deg); }
        }
        
        @keyframes pulse-glow {
            0% { 
                box-shadow: 0 0 20px rgba(59, 130, 246, 0.5);
                transform: scale(1);
            }
            100% { 
                box-shadow: 0 0 30px rgba(59, 130, 246, 0.8), 0 0 40px rgba(59, 130, 246, 0.3);
                transform: scale(1.05);
            }
        }
        
        @keyframes slide-in {
            0% { opacity: 0; transform: translateY(50px) scale(0.9); }
            100% { opacity: 1; transform: translateY(0) scale(1); }
        }
        
        @keyframes fade-in {
            0% { opacity: 0; }
            100% { opacity: 1; }
        }
        
        .gradient-text {
            background: linear-gradient(135deg, #1e40af 0%, #f59e0b 50%, #1e40af 100%);
            background-size: 200% 200%;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            animation: gradient 3s ease infinite;
        }
        
        @keyframes gradient {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        
        /* BACKGROUND IMAGES SYSTEM */
        .section-bg {
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            position: relative;
        }
        
        .section-bg::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.6);
            z-index: 1;
        }
        
        .section-bg > * {
            position: relative;
            z-index: 2;
        }
        
        /* Specific Background Images */
        #beranda { 
            background-image: url('/images/hero-bg.jpg'); 
        }
        #beranda::before { 
            background: rgba(0, 0, 0, 0.7);
        }

        #tentang { 
            background-image: url('/images/about-bg.jpg'); 
        }

        #layanan { 
            background-image: url('/images/services-bg.jpg'); 
        }

        #galeri { 
            background-image: url('/images/gallery-bg.jpg'); 
        }

        #sertifikat { 
            background-image: url('/images/certifications-bg.jpg'); 
        }

        #struktur { 
            background-image: url('/images/struktur-bg.jpg'); 
        }

        #kontak { 
            background-image: url('/images/gallery-bg.jpg'); 
        }
        #kontak::before { 
            background: rgba(0, 0, 0, 0.8);
        }

        /* Text colors untuk sections dengan background */
        .section-bg .text-gray-800,
        .section-bg .text-gray-700,
        .section-bg .text-gray-900 {
            color: rgba(255, 255, 255, 0.9) !important;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.7);
        }

        .section-bg .text-gray-600 {
            color: rgba(255, 255, 255, 0.8) !important;
        }

        .section-bg .text-gray-500 {
            color: rgba(255, 255, 255, 0.7) !important;
        }

        .electric-glow {
            box-shadow: 0 0 20px rgba(245, 158, 11, 0.5);
            transition: all 0.3s ease;
        }
        
        .electric-glow:hover {
            box-shadow: 0 0 30px rgba(245, 158, 11, 0.8), 0 0 40px rgba(245, 158, 11, 0.3);
            transform: translateY(-5px) scale(1.02);
        }
        
        .card-hover {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .card-hover:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }

        /* Responsive fixes */
        @media (max-width: 640px) {
            .text-5xl, .text-6xl, .text-7xl { font-size: 2.5rem !important; }
            .text-4xl { font-size: 2rem !important; }
            .py-20 { padding-top: 3rem !important; padding-bottom: 3rem !important; }
            .grid-cols-2, .grid-cols-3, .grid-cols-4 { grid-template-columns: 1fr !important; }
            .section-bg { background-attachment: scroll; }
        }
    </style>
</head>
<body class="bg-white font-inter">
    <!-- Navigation -->
    <nav class="fixed top-0 w-full bg-white/95 backdrop-blur-md z-50 shadow-lg transition-all duration-500" id="navbar">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <!-- Logo -->
                <div class="flex items-center space-x-3 group cursor-pointer" onclick="window.location.href='{{ route('home') }}'">
                    <div class="w-12 h-12 flex items-center justify-center">
                        <img src="{{ asset('images/logo-tritama.png') }}" alt="TRITAMA Logo" class="w-full h-full object-contain">
                    </div>
                    <div>
                        <div class="text-2xl font-bold gradient-text">TRITAMA</div>
                        <div class="text-xs text-gray-600">PT. Triputra Gowata Mandiri</div>
                    </div>
                </div>

                <!-- Desktop Menu -->
                <div class="hidden lg:flex space-x-8">
                    <a href="{{ route('home') }}#beranda" class="nav-link text-gray-700 hover:text-electric-blue transition-all duration-300 font-medium relative group">
                        <span class="relative z-10">Beranda</span>
                    </a>
                    <a href="{{ route('home') }}#tentang" class="nav-link text-gray-700 hover:text-electric-blue transition-all duration-300 font-medium relative group">
                        <span class="relative z-10">Tentang</span>
                    </a>
                    <a href="{{ route('services') }}" class="nav-link text-gray-700 hover:text-electric-blue transition-all duration-300 font-medium relative group">
                        <span class="relative z-10">Layanan</span>
                    </a>
                    <a href="{{ route('projects.index') }}" class="nav-link text-gray-700 hover:text-electric-blue transition-all duration-300 font-medium relative group">
                        <span class="relative z-10">Proyek</span>
                    </a>
                    <a href="{{ route('certifications.index') }}" class="nav-link text-gray-700 hover:text-electric-blue transition-all duration-300 font-medium relative group">
                        <span class="relative z-10">Sertifikat</span>
                    </a>
                    <a href="{{ route('contact.index') }}" class="nav-link text-gray-700 hover:text-electric-blue transition-all duration-300 font-medium relative group">
                        <span class="relative z-10">Kontak</span>
                    </a>
                </div>

                <!-- CTA Button -->
                <div class="hidden lg:block">
                    <a href="{{ route('contact.index') }}" class="magnetic-btn bg-gradient-to-r from-electric-orange to-orange-600 text-white px-6 py-3 rounded-xl font-semibold hover:shadow-xl transition-all duration-300 transform hover:scale-105 electric-glow">
                        <i class="fas fa-phone mr-2"></i>Konsultasi
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <button class="lg:hidden text-gray-600 hover:text-electric-blue transition-colors duration-300" onclick="toggleMobileMenu()">
                    <i class="fas fa-bars text-2xl"></i>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobileMenu" class="lg:hidden bg-white/95 backdrop-blur-md border-t shadow-xl hidden">
            <div class="px-4 py-6 space-y-2">
                <a href="{{ route('home') }}#beranda" class="block text-gray-700 hover:text-electric-blue transition-all duration-300 py-3 px-4 rounded-lg hover:bg-blue-50 font-medium">
                    <i class="fas fa-home mr-3"></i>Beranda
                </a>
                <a href="{{ route('home') }}#tentang" class="block text-gray-700 hover:text-electric-blue transition-all duration-300 py-3 px-4 rounded-lg hover:bg-blue-50 font-medium">
                    <i class="fas fa-building mr-3"></i>Tentang
                </a>
                <a href="{{ route('services') }}" class="block text-gray-700 hover:text-electric-blue transition-all duration-300 py-3 px-4 rounded-lg hover:bg-blue-50 font-medium">
                    <i class="fas fa-tools mr-3"></i>Layanan
                </a>
                <a href="{{ route('projects.index') }}" class="block text-gray-700 hover:text-electric-blue transition-all duration-300 py-3 px-4 rounded-lg hover:bg-blue-50 font-medium">
                    <i class="fas fa-project-diagram mr-3"></i>Proyek
                </a>
                <a href="{{ route('certifications.index') }}" class="block text-gray-700 hover:text-electric-blue transition-all duration-300 py-3 px-4 rounded-lg hover:bg-blue-50 font-medium">
                    <i class="fas fa-certificate mr-3"></i>Sertifikat
                </a>
                <a href="{{ route('contact.index') }}" class="block bg-gradient-to-r from-electric-orange to-orange-600 text-white text-center py-3 px-4 rounded-xl font-semibold mt-4 hover:shadow-lg transition-all duration-300">
                    <i class="fas fa-phone mr-2"></i>Konsultasi Gratis
                </a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-4 gap-8">
                <div class="col-span-2">
                    <div class="flex items-center space-x-3 mb-6">
                        <div class="w-14 h-14 flex items-center justify-center">
                            <img src="{{ asset('images/logo-tritama.png') }}" alt="TRITAMA Logo" class="w-full h-full object-contain">
                        </div>
                        <div>
                            <div class="text-2xl font-black gradient-text">TRITAMA</div>
                            <div class="text-sm text-gray-400">PT. Triputra Gowata Mandiri</div>
                        </div>
                    </div>
                    <p class="text-gray-400 mb-6 max-w-md leading-relaxed">
                        Solusi terpercaya untuk semua kebutuhan kelistrikan Anda dengan standar kualitas tinggi dan layanan profesional bersertifikat.
                    </p>
                </div>
                
                <div>
                    <h4 class="font-black text-lg mb-6 text-electric-orange">Layanan</h4>
                    <ul class="space-y-3 text-gray-400">
                        <li><a href="{{ route('services') }}" class="hover:text-electric-orange transition-colors">Listrik Distribusi</a></li>
                        <li><a href="{{ route('services') }}" class="hover:text-electric-orange transition-colors">Listrik Instalasi</a></li>
                        <li><a href="{{ route('services') }}" class="hover:text-electric-orange transition-colors">Inspeksi Kendala</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="font-black text-lg mb-6 text-electric-blue">Kontak</h4>
                    <ul class="space-y-3 text-gray-400 text-sm">
                        <li class="flex items-start gap-2">
                            <i class="fas fa-map-marker-alt text-electric-orange mt-1"></i>
                            <span>Makassar, Sulawesi Selatan</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-phone text-green-400"></i>
                            <span>085341306123</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-envelope text-blue-400"></i>
                            <span>triputragowatamandir@gmail.com</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-gray-800 mt-12 pt-8 text-center text-gray-500 text-sm">
                © 2024 PT. Triputra Gowata Mandiri. All rights reserved.
            </div>
        </div>
    </footer>

    <script>
        function toggleMobileMenu() {
            $('#mobileMenu').slideToggle(300);
        }

        $(document).ready(function() {
            // Smooth scroll untuk anchor links
            $('a[href^="#"]').on('click', function(e) {
                e.preventDefault();
                var target = $(this.getAttribute('href'));
                if(target.length) {
                    $('html, body').animate({
                        scrollTop: target.offset().top - 80
                    }, 800);
                }
            });
        });
    </script>
</body>
</html>