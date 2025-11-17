@extends('layouts.app')

@section('title', $title)
@section('description', $description)

@section('content')
 
<section class="pt-20 min-h-[60vh] section-bg text-white flex items-center">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-5xl lg:text-7xl font-black mb-6">
            <span class="gradient-text">Tentang</span> Kami
        </h1>
        <p class="text-xl text-blue-100 max-w-2xl mx-auto">
            Mengenal lebih dekat PT. Triputra Gowata Mandiri - TRITAMA
        </p>
    </div>
</section>

<!-- About Content -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <div class="space-y-8">
                <div class="space-y-6">
                    <h2 class="text-5xl font-black text-gray-800 mb-4">
                        PT. Triputra Gowata Mandiri
                        <span class="gradient-text block">TRITAMA</span>
                    </h2>
                    <div class="w-24 h-1 bg-gradient-to-r from-electric-blue to-electric-orange rounded-full"></div>
                    
                    <p class="text-lg text-gray-600 leading-relaxed">
                        <strong>PT. TRIPUTRA GOWATA MANDIRI (TRITAMA)</strong> didirikan pada tahun 2020 sebagai perusahaan kontraktor listrik Indonesia Timur yang bergerak di bidang jasa pembangunan jaringan listrik distribusi, instalasi pelanggan, penanganan gangguan listrik, inspeksi, pelatihan dan konsultan.
                    </p>
                    
                    <p class="text-lg text-gray-600 leading-relaxed">
                        Perusahaan kami berkomitmen untuk memberikan layanan terbaik dengan mengutamakan <span class="text-electric-blue font-bold">kualitas, keselamatan, dan kepuasan klien</span>. Setiap proyek yang kami kerjakan dilakukan oleh tenaga profesional yang bersertifikat kompetensi dan berpengalaman di bidang kelistrikan.
                    </p>

                    <p class="text-lg text-gray-600 leading-relaxed">
                        TRITAMA telah dipercaya oleh berbagai instansi pemerintah, perusahaan swasta, dan masyarakat umum untuk menangani proyek-proyek kelistrikan dengan skala dan kompleksitas yang beragam.
                    </p>
                </div>

                <div class="grid grid-cols-2 gap-6">
                    <div class="text-center p-6 bg-blue-50 rounded-2xl">
                        <div class="text-3xl font-black text-electric-blue mb-2">4+</div>
                        <div class="text-gray-600">Tahun Pengalaman</div>
                    </div>
                    <div class="text-center p-6 bg-orange-50 rounded-2xl">
                        <div class="text-3xl font-black text-electric-orange mb-2">50+</div>
                        <div class="text-gray-600">Proyek Selesai</div>
                    </div>
                    <div class="text-center p-6 bg-green-50 rounded-2xl">
                        <div class="text-3xl font-black text-green-600 mb-2">100%</div>
                        <div class="text-gray-600">Client Puas</div>
                    </div>
                    <div class="text-center p-6 bg-purple-50 rounded-2xl">
                        <div class="text-3xl font-black text-purple-600 mb-2">10+</div>
                        <div class="text-gray-600">Tenaga Ahli</div>
                    </div>
                </div>
            </div>

            <div class="relative">
                <div class="bg-gray-200 rounded-3xl shadow-2xl h-96 flex items-center justify-center">
                    <div class="text-center text-gray-500">
                        <i class="fas fa-building text-6xl mb-4"></i>
                        <p class="text-xl">Gambar Perusahaan</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
 
<section class="py-20 section-bg text-white relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-16">
            <h2 class="text-5xl font-black mb-4">Nilai <span class="gradient-text">Perusahaan</span></h2>
            <p class="text-xl max-w-3xl mx-auto">
                Prinsip-prinsip yang menjadi pedoman dalam setiap pekerjaan kami
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <div class="text-center bg-white/10 backdrop-blur-lg p-8 rounded-2xl card-hover border border-white/20">
                <div class="w-20 h-20 bg-gradient-to-r from-electric-blue to-blue-600 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-medal text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-black mb-4">Kualitas Terbaik</h3>
                <p class="leading-relaxed">
                    Mengutamakan kualitas dalam setiap pekerjaan dengan standar tertinggi dan material berkualitas
                </p>
            </div>
            
            <div class="text-center bg-white/10 backdrop-blur-lg p-8 rounded-2xl card-hover border border-white/20">
                <div class="w-20 h-20 bg-gradient-to-r from-electric-orange to-orange-600 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-shield-alt text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-black mb-4">Keselamatan Utama</h3>
                <p class="leading-relaxed">
                    Memprioritaskan keselamatan pekerja dan lingkungan dalam setiap proyek yang dikerjakan
                </p>
            </div>
            
            <div class="text-center bg-white/10 backdrop-blur-lg p-8 rounded-2xl card-hover border border-white/20">
                <div class="w-20 h-20 bg-gradient-to-r from-green-500 to-green-600 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-handshake text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-black mb-4">Profesionalisme</h3>
                <p class="leading-relaxed">
                    Bekerja dengan tim profesional bersertifikat dan berpengalaman di bidang kelistrikan
                </p>
            </div>
        </div>
    </div>
</section>
@endsection