@extends('layouts.app')

@section('title', $title)
@section('description', $description)

@section('content')
 
<section class="pt-20 min-h-[60vh] section-bg text-white flex items-center" style="background-image: url('/images/services-bg.jpg')">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-5xl lg:text-7xl font-black mb-6">
            <span class="gradient-text">Layanan</span> Kami
        </h1>
        <p class="text-xl text-blue-100 max-w-2xl mx-auto">
            Solusi lengkap untuk semua kebutuhan kelistrikan Anda
        </p>
    </div>
</section>
 
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($services as $service)
            <div class="group bg-white p-8 rounded-2xl shadow-lg card-hover border border-gray-100 relative overflow-hidden">
                <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-electric-blue to-blue-600 transform origin-left scale-x-0 group-hover:scale-x-100 transition-transform duration-500"></div>
                <div class="w-16 h-16 bg-blue-600 rounded-2xl flex items-center justify-center mb-6 group-hover:animate-wiggle transition-all duration-300">
                    <i class="{{ $service['icon'] }} text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-black text-gray-800 mb-4 group-hover:text-electric-blue transition-colors duration-300">{{ $service['title'] }}</h3>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    {{ $service['description'] }}
                </p>
                <ul class="space-y-2 text-gray-600">
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
    </div>
</section>

 
<section class="py-20 section-bg text-white relative overflow-hidden" style="background-image: url('/images/services-bg.jpg')">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-16">
            <h2 class="text-5xl font-black mb-4">Mengapa Memilih <span class="gradient-text">TRITAMA</span>?</h2>
            <p class="text-xl max-w-3xl mx-auto">
                Keunggulan yang membuat kami menjadi pilihan terbaik untuk proyek kelistrikan Anda
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="text-center">
                <div class="w-16 h-16 bg-electric-blue rounded-2xl flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-certificate text-white text-2xl"></i>
                </div>
                <h4 class="font-black mb-2">Bersertifikat</h4>
                <p class="text-blue-200 text-sm">ISO 9001:2015 & 45001:2018</p>
            </div>
            
            <div class="text-center">
                <div class="w-16 h-16 bg-electric-orange rounded-2xl flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-user-tie text-white text-2xl"></i>
                </div>
                <h4 class="font-black mb-2">Tenaga Ahli</h4>
                <p class="text-blue-200 text-sm">Profesional bersertifikat kompetensi</p>
            </div>
            
            <div class="text-center">
                <div class="w-16 h-16 bg-green-500 rounded-2xl flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-shield-alt text-white text-2xl"></i>
                </div>
                <h4 class="font-black mb-2">K3 Terjamin</h4>
                <p class="text-blue-200 text-sm">Standar keselamatan tertinggi</p>
            </div>
            
            <div class="text-center">
                <div class="w-16 h-16 bg-purple-500 rounded-2xl flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-clock text-white text-2xl"></i>
                </div>
                <h4 class="font-black mb-2">Tepat Waktu</h4>
                <p class="text-blue-200 text-sm">Penyelesaian sesuai jadwal</p>
            </div>
        </div>
    </div>
</section>

 
<section class="py-20 bg-gradient-to-r from-electric-blue to-dark-blue text-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-4xl font-black mb-6">Siap Mengerjakan Proyek Listrik Anda?</h2>
        <p class="text-xl text-blue-100 mb-8 max-w-2xl mx-auto">
            Konsultasikan kebutuhan proyek kelistrikan Anda dengan tim profesional kami
        </p>
        <a href="{{ route('contact.index') }}" class="inline-flex items-center gap-3 bg-electric-orange hover:bg-orange-600 text-white px-8 py-4 rounded-xl font-bold text-lg transition-all duration-300 transform hover:scale-105 electric-glow">
            <i class="fas fa-phone-alt"></i>
            Konsultasi Gratis
            <i class="fas fa-arrow-right ml-2"></i>
        </a>
    </div>
</section>
@endsection