@extends('layouts.app')

@section('title', $title)
@section('description', $description)

@section('content')
<!-- Hero Section dengan Background Image -->
<section class="pt-20 min-h-[60vh] section-bg text-white flex items-center" style="background-image: url('/images/gallery-bg.jpg')">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-5xl lg:text-7xl font-black mb-6">
            <span class="gradient-text">Proyek</span> Kami
        </h1>
        <p class="text-xl text-blue-100 max-w-2xl mx-auto">
            Portfolio lengkap proyek kelistrikan yang telah kami selesaikan dengan standar kualitas terbaik
        </p>
    </div>
</section>

<!-- Projects Grid -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($projects as $project)
            <div class="bg-white rounded-2xl shadow-lg card-hover overflow-hidden">
                <div class="h-48 overflow-hidden">
                    <img src="{{ asset('images/' . $project['image']) }}" alt="{{ $project['title'] }}" class="w-full h-full object-cover">
                </div>
                <div class="p-6">
                    <div class="inline-flex items-center px-3 py-1 bg-electric-orange text-white text-sm rounded-full mb-3">
                        {{ $project['category'] }}
                    </div>
                    <h3 class="text-xl font-black text-gray-800 mb-3">{{ $project['title'] }}</h3>
                    <p class="text-gray-600 mb-4">{{ Str::limit($project['description'], 100) }}</p>
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-gray-500">{{ $project['year'] }}</span>
                        <a href="{{ route('projects.show', $project['id']) }}" class="text-electric-blue hover:text-blue-700 font-semibold">
                            Lihat Detail →
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Project Statistics dengan Background Image -->
<section class="py-20 section-bg text-white relative overflow-hidden" style="background-image: url('/images/gallery-bg.jpg')">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-black mb-6">Statistik <span class="gradient-text">Proyek</span></h2>
            <p class="text-xl text-blue-100 max-w-2xl mx-auto">
                Pencapaian kami dalam angka yang membuktikan kualitas kerja
            </p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
            <div class="text-center">
                <div class="w-16 h-16 bg-gradient-to-r from-electric-blue to-blue-600 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-project-diagram text-white text-xl"></i>
                </div>
                <div class="text-3xl font-bold mb-1">50+</div>
                <div class="text-blue-200 text-sm">Total Proyek</div>
            </div>
            <div class="text-center">
                <div class="w-16 h-16 bg-gradient-to-r from-green-500 to-green-600 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-users text-white text-xl"></i>
                </div>
                <div class="text-3xl font-bold mb-1">48+</div>
                <div class="text-blue-200 text-sm">Klien Puas</div>
            </div>
            <div class="text-center">
                <div class="w-16 h-16 bg-gradient-to-r from-electric-orange to-orange-600 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-clock text-white text-xl"></i>
                </div>
                <div class="text-3xl font-bold mb-1">100%</div>
                <div class="text-blue-200 text-sm">Tepat Waktu</div>
            </div>
            <div class="text-center">
                <div class="w-16 h-16 bg-gradient-to-r from-purple-500 to-purple-600 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-award text-white text-xl"></i>
                </div>
                <div class="text-3xl font-bold mb-1">Zero</div>
                <div class="text-blue-200 text-sm">Kecelakaan</div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-gradient-to-r from-electric-blue to-dark-blue text-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-4xl font-black mb-6">Tertarik Bekerja Sama?</h2>
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