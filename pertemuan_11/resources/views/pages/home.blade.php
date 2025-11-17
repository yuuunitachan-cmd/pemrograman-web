@extends('layouts.app')

@section('title', $title)
@section('description', $description)

@section('content')
 
<section id="beranda" class="pt-20 min-h-screen section-bg text-white flex items-center relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 relative z-10">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <div class="space-y-8">
                <div class="space-y-6">
                    
                    <div class="inline-flex items-center px-4 py-2 bg-electric-orange/20 backdrop-blur-sm rounded-full text-electric-orange border border-electric-orange/30 animate-pulse-glow">
                        <i class="fas fa-certificate mr-2"></i>
                        Kontraktor Listrik Bersertifikat ISO
                    </div>
                    
                     
                    <h1 class="text-4xl md:text-5xl lg:text-7xl font-black leading-tight text-shadow hero-title">
                        <span class="gradient-text block">TRITAMA</span>
                        <span class="block text-xl md:text-2xl lg:text-4xl text-blue-200 mt-4 md:mt-6">
                            SOLUSI KELISTRIKANMU
                        </span>
                    </h1>
                    
                   
                    <p class="text-xl text-blue-100 max-w-2xl leading-relaxed">
                        Kontraktor listrik terpercaya Indonesia Timur dengan standar ISO, teknologi modern, dan tenaga profesional bersertifikat untuk semua kebutuhan kelistrikan Anda.
                    </p>
                </div>
                
                
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('contact.index') }}" class="magnetic-btn group bg-gradient-to-r from-electric-orange to-yellow-500 hover:from-electric-orange hover:to-orange-600 text-white px-8 py-4 rounded-xl font-bold flex items-center justify-center gap-3 transition-all duration-300 transform hover:scale-105 electric-glow">
                        <i class="fas fa-phone-alt group-hover:animate-bounce"></i>
                        Konsultasi Gratis
                        <i class="fas fa-arrow-right ml-2 group-hover:translate-x-2 transition-transform duration-300"></i>
                    </a>
                    <a href="{{ route('projects.index') }}" class="magnetic-btn border-2 border-white text-white px-8 py-4 rounded-xl font-bold hover:bg-white hover:text-blue-600 transition-all duration-300 flex items-center justify-center gap-3 group">
                        <i class="fas fa-project-diagram group-hover:animate-wiggle"></i>
                        Lihat Proyek
                    </a>
                </div>

                 
                <div class="grid grid-cols-2 md:grid-cols-3 gap-4 md:gap-8 pt-6 md:pt-8 border-t border-blue-600/50 mobile-stats">
                    <div class="text-center group">
                        <div class="text-4xl font-black group-hover:scale-110 transition-transform duration-300">{{ $stats['years'] }}</div>
                        <div class="text-blue-200 text-sm mt-2">Tahun Pengalaman</div>
                    </div>
                    <div class="text-center group">
                        <div class="text-4xl font-black group-hover:scale-110 transition-transform duration-300">{{ $stats['projects'] }}</div>
                        <div class="text-blue-200 text-sm mt-2">Project Selesai</div>
                    </div>
                    <div class="text-center group">
                        <div class="text-4xl font-black group-hover:scale-110 transition-transform duration-300">{{ $stats['clients'] }}</div>
                        <div class="text-blue-200 text-sm mt-2">Client Puas</div>
                    </div>
                </div>
            </div>

            
            <div class="relative">
                <div class="relative bg-white/10 backdrop-blur-lg p-8 rounded-2xl shadow-2xl border border-white/20">
                    <div class="space-y-6">
                       
                        <div class="flex items-center gap-4 group cursor-pointer">
                            <div class="w-14 h-14 bg-gradient-to-r from-green-400 to-green-600 rounded-full flex items-center justify-center group-hover:scale-110 transition-transform duration-300 animate-pulse-glow">
                                <i class="fas fa-check-circle text-white text-xl"></i>
                            </div>
                            <div>
                                <div class="font-bold text-lg text-white">Bersertifikat ISO</div>
                                <div class="text-sm text-blue-200">9001:2015 & 45001:2018</div>
                            </div>
                        </div>
                        
                        
                        <div class="flex items-center gap-4 group cursor-pointer">
                            <div class="w-14 h-14 bg-gradient-to-r from-blue-400 to-blue-600 rounded-full flex items-center justify-center group-hover:scale-110 transition-transform duration-300 animate-pulse-glow">
                                <i class="fas fa-shield-alt text-white text-xl"></i>
                            </div>
                            <div>
                                <div class="font-bold text-lg text-white">K3 Terjamin</div>
                                <div class="text-sm text-blue-200">SMK3 & CSMS</div>
                            </div>
                        </div>
                        
                         
                        <div class="flex items-center gap-4 group cursor-pointer">
                            <div class="w-14 h-14 bg-gradient-to-r from-electric-orange to-orange-600 rounded-full flex items-center justify-center group-hover:scale-110 transition-transform duration-300 animate-pulse-glow">
                                <i class="fas fa-users text-white text-xl"></i>
                            </div>
                            <div>
                                <div class="font-bold text-lg text-white">Tenaga Ahli</div>
                                <div class="text-sm text-blue-200">Bersertifikat Kompetensi</div>
                            </div>
                        </div>

                        
                        <div class="flex items-center gap-4 group cursor-pointer">
                            <div class="w-14 h-14 bg-gradient-to-r from-purple-400 to-purple-600 rounded-full flex items-center justify-center group-hover:scale-110 transition-transform duration-300 animate-pulse-glow">
                                <i class="fas fa-handshake text-white text-xl"></i>
                            </div>
                            <div>
                                <div class="font-bold text-lg text-white">Mitra PLN</div>
                                <div class="text-sm text-blue-200">Kerjasama Resmi</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

 
<section id="tentang" class="py-20 section-bg text-white relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <div class="space-y-8">
                <div class="space-y-4">
                    <div class="inline-flex items-center px-4 py-2 bg-electric-blue/10 text-electric-blue rounded-full font-semibold">
                        <i class="fas fa-building mr-2"></i>
                        Tentang Perusahaan
                    </div>
                    <h2 class="text-5xl font-black mb-4">
                        Tentang 
                        <span class="gradient-text">TRITAMA</span>
                    </h2>
                    <div class="w-24 h-1 bg-gradient-to-r from-electric-blue to-electric-orange rounded-full"></div>
                    <p class="text-lg leading-relaxed">
                        <strong>PT. TRIPUTRA GOWATA MANDIRI (TRITAMA)</strong> didirikan pada tahun 2020 sebagai perusahaan kontraktor listrik Indonesia Timur yang bergerak di bidang jasa pembangunan jaringan listrik distribusi, instalasi pelanggan, penanganan gangguan listrik, inspeksi, pelatihan dan konsultan.
                    </p>
                    <p class="text-lg leading-relaxed">
                        Layanan listrik yang diberikan oleh TRITAMA sesuai standar kelistrikan Indonesia, melibatkan <span class="text-electric-blue font-bold">tenaga profesional bersertifikat kompetensi (serkom)</span> yang berpengalaman dan kompeten di bidang kelistrikan dengan menerapkan prinsip <span class="text-electric-orange font-bold">K3 (Keselamatan dan Kesehatan Kerja)</span>.
                    </p>
                </div>

                <div class="grid grid-cols-2 gap-6">
                    <div class="bg-white/10 backdrop-blur-lg p-6 rounded-2xl card-hover border border-white/20">
                        <div class="w-12 h-12 bg-gradient-to-r from-electric-blue to-blue-600 rounded-xl flex items-center justify-center mb-4 animate-pulse-glow">
                            <i class="fas fa-calendar-alt text-white text-xl"></i>
                        </div>
                        <div class="text-3xl font-black mb-2">2020</div>
                        <div class="text-blue-200">Tahun Berdiri</div>
                    </div>
                    <div class="bg-white/10 backdrop-blur-lg p-6 rounded-2xl card-hover border border-white/20">
                        <div class="w-12 h-12 bg-gradient-to-r from-electric-orange to-orange-600 rounded-xl flex items-center justify-center mb-4 animate-pulse-glow">
                            <i class="fas fa-map-marker-alt text-white text-xl"></i>
                        </div>
                        <div class="text-3xl font-black mb-2">Makassar</div>
                        <div class="text-blue-200">Kantor Pusat</div>
                    </div>
                </div>
            </div>

            <div class="space-y-8">
                <!-- Visi Misi Card -->
                <div class="bg-white/10 backdrop-blur-lg p-8 rounded-3xl card-hover border border-white/20">
                    <h3 class="text-3xl font-black mb-8 flex items-center gap-3">
                        <i class="fas fa-eye text-electric-orange"></i>
                        Visi & Misi
                    </h3>
                    
                    <div class="space-y-8">
                        <!-- Visi -->
                        <div class="relative">
                            <div class="flex items-start gap-4">
                                <div class="w-8 h-8 bg-electric-orange rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                    <i class="fas fa-bullseye text-white text-sm"></i>
                                </div>
                                <div>
                                    <h4 class="text-2xl font-black mb-3 text-electric-orange">VISI</h4>
                                    <p class="leading-relaxed">
                                        Menjadi perusahaan kontraktor listrik <span class="font-black">terbaik di Indonesia</span> yang terpercaya, profesional, mandiri, unggul dan berdaya saing.
                                    </p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Misi -->
                        <div class="relative">
                            <div class="flex items-start gap-4">
                                <div class="w-8 h-8 bg-electric-blue rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                    <i class="fas fa-rocket text-white text-sm"></i>
                                </div>
                                <div>
                                    <h4 class="text-2xl font-black mb-4">MISI</h4>
                                    <ul class="space-y-3">
                                        <li class="flex items-start gap-3">
                                            <i class="fas fa-check-circle text-electric-orange mt-1 flex-shrink-0"></i>
                                            <span>Menjalankan bisnis ketenagalistrikan yang berorientasi pada <span class="font-semibold">mutu dan kepuasan klien</span> sebagai mitra kerja</span>
                                        </li>
                                        <li class="flex items-start gap-3">
                                            <i class="fas fa-check-circle text-electric-orange mt-1 flex-shrink-0"></i>
                                            <span>Menyediakan jasa kelistrikan kepada masyarakat dalam memenuhi keperluan tenaga listrik yang <span class="font-semibold">aman dan handal</span></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
 
<section id="layanan" class="py-20 section-bg text-white relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-16">
            <div class="inline-flex items-center px-4 py-2 bg-yellow-100 text-yellow-600 rounded-full font-semibold mb-6">
                <i class="fas fa-tools mr-2"></i>
                Layanan Profesional
            </div>
            <h2 class="text-5xl font-black mb-4">Layanan Kami</h2>
            <div class="w-24 h-1 bg-gradient-to-r from-electric-blue to-electric-orange rounded-full mx-auto mb-8"></div>
            <p class="text-xl max-w-3xl mx-auto">
                Kami menyediakan layanan kelistrikan komprehensif dengan standar kualitas tinggi dan teknologi terkini
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            @foreach($services as $service)
            <div class="group bg-white/10 backdrop-blur-lg p-8 rounded-2xl card-hover border border-white/20">
                <div class="w-16 h-16 bg-blue-600 rounded-2xl flex items-center justify-center mb-6 group-hover:animate-wiggle">
                    <i class="{{ $service['icon'] }} text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-black mb-4 group-hover:text-electric-orange transition-colors duration-300">{{ $service['title'] }}</h3>
                <p class="mb-6 leading-relaxed">{{ $service['description'] }}</p>
                <ul class="space-y-2">
                    @foreach($service['features'] as $feature)
                    <li class="flex items-center gap-2">
                        <i class="fas fa-check text-green-500 text-sm"></i>
                        <span class="text-sm">{{ $feature }}</span>
                    </li>
                    @endforeach
                </ul>
            </div>
            @endforeach
        </div>

        <div class="text-center mt-12">
            <a href="{{ route('services') }}" class="inline-flex items-center gap-3 bg-electric-blue hover:bg-blue-700 text-white px-8 py-4 rounded-xl font-bold transition-all duration-300 transform hover:scale-105">
                <i class="fas fa-eye"></i>
                Lihat Semua Layanan
            </a>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-gradient-to-r from-electric-blue to-dark-blue text-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="bg-white rounded-3xl p-12 shadow-2xl card-hover">
            <h2 class="text-4xl font-black text-gray-800 mb-6">Percayakan Proyek Listrik Anda pada <span class="gradient-text">Ahlinya</span></h2>
            <p class="text-lg text-gray-600 mb-8 max-w-2xl mx-auto">
                Dengan sertifikat dan akreditasi lengkap, kami menjamin kualitas dan keamanan pekerjaan kelistrikan Anda
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('contact.index') }}" class="inline-flex items-center gap-3 bg-electric-orange hover:bg-orange-600 text-white px-8 py-4 rounded-xl font-bold text-lg transition-all duration-300 transform hover:scale-105 electric-glow">
                    <i class="fas fa-phone-alt"></i>
                    Konsultasi Gratis
                </a>
                <a href="{{ route('projects.index') }}" class="inline-flex items-center gap-3 border-2 border-electric-blue text-electric-blue hover:bg-electric-blue hover:text-white px-8 py-4 rounded-xl font-bold text-lg transition-all duration-300">
                    <i class="fas fa-project-diagram"></i>
                    Lihat Proyek Kami
                </a>
            </div>
        </div>
    </div>
</section>
@endsection