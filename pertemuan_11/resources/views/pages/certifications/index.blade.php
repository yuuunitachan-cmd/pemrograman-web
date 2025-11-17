@extends('layouts.app')

@section('title', $title)
@section('description', $description)

@section('content')
 
<section class="pt-20 min-h-[60vh] section-bg text-white flex items-center" style="background-image: url('/images/certifications-bg.jpg')">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-5xl lg:text-7xl font-black mb-6">
            <span class="gradient-text">Sertifikat</span> & Akreditasi
        </h1>
        <p class="text-xl text-blue-100 max-w-2xl mx-auto">
            Standar kualitas dan keamanan yang diakui secara nasional dan internasional
        </p>
    </div>
</section>
 
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
  
        <div class="mb-16">
            <div class="text-center mb-12">
                <div class="inline-flex items-center px-4 py-2 bg-blue-100 text-electric-blue rounded-full font-semibold mb-4">
                    <i class="fas fa-globe mr-2"></i>
                    Sertifikat Internasional
                </div>
                <h2 class="text-4xl font-black text-gray-800 mb-4">Standar <span class="gradient-text">Internasional</span></h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Sertifikat sistem manajemen mutu dan K3 yang diakui secara global
                </p>
            </div>

            <div class="grid md:grid-cols-2 gap-8">
                @foreach($certifications['international'] as $cert)
                <div class="bg-white rounded-3xl p-8 shadow-2xl card-hover border border-blue-200">
                    <div class="flex items-start gap-6">
                        <div class="w-20 h-20 bg-gradient-to-r from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center flex-shrink-0 animate-pulse-glow">
                            <i class="{{ $cert['icon'] }} text-white text-2xl"></i>
                        </div>
                        <div>
                            <div class="inline-flex items-center px-3 py-1 bg-blue-100 text-blue-600 text-sm rounded-full mb-3 font-semibold">
                                ISO Certified
                            </div>
                            <h3 class="text-2xl font-black text-gray-800 mb-3">{{ $cert['type'] }}</h3>
                            <p class="text-gray-600 mb-4 leading-relaxed">
                                {{ $cert['description'] }}
                            </p>
                            <div class="flex items-center gap-4 text-sm text-gray-500">
                                <div class="flex items-center gap-2">
                                    <i class="fas fa-calendar text-blue-500"></i>
                                    <span>Berlaku: {{ $cert['validity'] }}</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <i class="fas fa-check-circle text-green-500"></i>
                                    <span>Status: {{ $cert['status'] }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

         
        <div class="mb-16">
            <div class="text-center mb-12">
                <div class="inline-flex items-center px-4 py-2 bg-green-100 text-green-600 rounded-full font-semibold mb-4">
                    <i class="fas fa-flag mr-2"></i>
                    Sertifikat Nasional
                </div>
                <h2 class="text-4xl font-black text-gray-800 mb-4">Akreditasi <span class="gradient-text">Nasional</span></h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Sertifikat dan akreditasi resmi dari instansi pemerintah Indonesia
                </p>
            </div>

            <div class="grid md:grid-cols-2 gap-8">
                @foreach($certifications['national'] as $cert)
                <div class="bg-white rounded-3xl p-8 shadow-2xl card-hover border border-green-200">
                    <div class="flex items-start gap-6">
                        <div class="w-20 h-20 bg-gradient-to-r from-green-500 to-green-600 rounded-2xl flex items-center justify-center flex-shrink-0 animate-pulse-glow">
                            <i class="{{ $cert['icon'] }} text-white text-2xl"></i>
                        </div>
                        <div>
                            <div class="inline-flex items-center px-3 py-1 bg-green-100 text-green-600 text-sm rounded-full mb-3 font-semibold">
                                Kementerian Ketenagakerjaan
                            </div>
                            <h3 class="text-2xl font-black text-gray-800 mb-3">{{ $cert['type'] }}</h3>
                            <p class="text-gray-600 mb-4 leading-relaxed">
                                {{ $cert['description'] }}
                            </p>
                            <div class="space-y-2 text-sm text-gray-600">
                                @if(isset($cert['level']))
                                <div class="flex items-center gap-2">
                                    <i class="fas fa-star text-yellow-500"></i>
                                    <span>Tingkat: {{ $cert['level'] }}</span>
                                </div>
                                @endif
                                @if(isset($cert['classification']))
                                <div class="flex items-center gap-2">
                                    <i class="fas fa-exclamation-triangle text-red-500"></i>
                                    <span>Klasifikasi: {{ $cert['classification'] }}</span>
                                </div>
                                @endif
                                <div class="flex items-center gap-2">
                                    <i class="fas fa-clock text-blue-500"></i>
                                    <span>Masa Berlaku: {{ $cert['validity'] }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        
        <div>
            <div class="text-center mb-12">
                <div class="inline-flex items-center px-4 py-2 bg-purple-100 text-purple-600 rounded-full font-semibold mb-4">
                    <i class="fas fa-users mr-2"></i>
                    Akreditasi & Keanggotaan
                </div>
                <h2 class="text-4xl font-black text-gray-800 mb-4">Legalisasi <span class="gradient-text">Resmi</span></h2>
            </div>

            <div class="grid md:grid-cols-2 gap-8">
                @foreach($certifications['accreditations'] as $cert)
                <div class="bg-white rounded-3xl p-8 shadow-2xl card-hover border border-purple-200">
                    <div class="flex items-start gap-6">
                        <div class="w-20 h-20 bg-gradient-to-r from-purple-500 to-purple-600 rounded-2xl flex items-center justify-center flex-shrink-0 animate-pulse-glow">
                            <i class="{{ $cert['icon'] }} text-white text-2xl"></i>
                        </div>
                        <div>
                            <div class="inline-flex items-center px-3 py-1 bg-purple-100 text-purple-600 text-sm rounded-full mb-3 font-semibold">
                                {{ $cert['issuer'] }}
                            </div>
                            <h3 class="text-2xl font-black text-gray-800 mb-3">{{ $cert['type'] }}</h3>
                            <p class="text-gray-600 mb-4 leading-relaxed">
                                {{ $cert['description'] }}
                            </p>
                            <div class="text-sm text-gray-500">
                                <i class="fas fa-check-circle text-green-500 mr-2"></i>
                                <span>Terdaftar dan diawasi secara resmi</span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

 
<section class="py-20 section-bg text-white relative overflow-hidden" style="background-image: url('/images/certifications-bg.jpg')">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-black mb-6">Komitmen <span class="text-electric-orange">Kualitas</span> Terbaik</h2>
            <p class="text-xl text-blue-100 max-w-3xl mx-auto">
                Setiap sertifikat dan akreditasi yang kami miliki merupakan bukti komitmen kami terhadap kualitas, keselamatan, dan kepuasan klien
            </p>
        </div>

        <div class="grid md:grid-cols-4 gap-8">
            <div class="text-center">
                <div class="w-16 h-16 bg-electric-orange/20 rounded-2xl flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-award text-electric-orange text-2xl"></i>
                </div>
                <h4 class="font-black mb-2">Standar Internasional</h4>
                <p class="text-blue-200 text-sm">Mengikuti standar kualitas global terbaik</p>
            </div>
            <div class="text-center">
                <div class="w-16 h-16 bg-green-500/20 rounded-2xl flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-shield-alt text-green-400 text-2xl"></i>
                </div>
                <h4 class="font-black mb-2">K3 Terjamin</h4>
                <p class="text-blue-200 text-sm">Prioritas keselamatan pekerja dan lingkungan</p>
            </div>
            <div class="text-center">
                <div class="w-16 h-16 bg-blue-500/20 rounded-2xl flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-file-contract text-blue-400 text-2xl"></i>
                </div>
                <h4 class="font-black mb-2">Legalitas Lengkap</h4>
                <p class="text-blue-200 text-sm">Terdaftar dan diawasi instansi resmi</p>
            </div>
            <div class="text-center">
                <div class="w-16 h-16 bg-purple-500/20 rounded-2xl flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-user-check text-purple-400 text-2xl"></i>
                </div>
                <h4 class="font-black mb-2">Profesional Bersertifikat</h4>
                <p class="text-blue-200 text-sm">Tenaga ahli dengan kompetensi terverifikasi</p>
            </div>
        </div>
    </div>
</section>
@endsection