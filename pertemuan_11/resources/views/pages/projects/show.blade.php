@extends('layouts.app')

@section('title', $title)
@section('description', $description)

@section('content')
<!-- Hero Section -->
<section class="pt-20 min-h-[60vh] bg-gradient-to-br from-electric-blue to-dark-blue text-white flex items-center">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-5xl lg:text-7xl font-black mb-6">
            <span class="gradient-text">Detail</span> Proyek
        </h1>
        <p class="text-xl text-blue-100 max-w-2xl mx-auto">
            {{ $project['title'] }}
        </p>
    </div>
</section>

<!-- Project Detail -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white rounded-3xl p-8 shadow-2xl card-hover">
            <div class="grid lg:grid-cols-2 gap-8 items-center">
                <div>
                    <div class="inline-flex items-center px-4 py-2 bg-electric-orange text-white text-sm rounded-full mb-4 font-semibold">
                        <i class="fas fa-lightbulb mr-2"></i>
                        {{ $project['category'] }}
                    </div>
                    <h2 class="text-4xl font-black text-gray-800 mb-4">
                        {{ $project['title'] }}
                    </h2>
                    <div class="flex items-center gap-4 mb-6">
                        <div class="flex items-center gap-2 text-gray-600">
                            <i class="fas fa-calendar text-electric-orange"></i>
                            <span>{{ $project['year'] }}</span>
                        </div>
                        <div class="flex items-center gap-2 text-gray-600">
                            <i class="fas fa-map-marker-alt text-electric-orange"></i>
                            <span>{{ $project['location'] }}</span>
                        </div>
                    </div>
                    <p class="text-lg text-gray-600 mb-6 leading-relaxed">
                        {{ $project['description'] }}
                    </p>
                    
                    @if(isset($project['scope']))
                    <h3 class="text-xl font-black text-gray-800 mb-4">Scope Pekerjaan:</h3>
                    <ul class="space-y-3 text-gray-600 mb-8">
                        @foreach($project['scope'] as $item)
                        <li class="flex items-center gap-3">
                            <i class="fas fa-check text-green-500"></i>
                            <span>{{ $item }}</span>
                        </li>
                        @endforeach
                    </ul>
                    @endif

                    @if(isset($project['technologies']))
                    <h3 class="text-xl font-black text-gray-800 mb-4">Teknologi yang Digunakan:</h3>
                    <ul class="space-y-3 text-gray-600 mb-8">
                        @foreach($project['technologies'] as $tech)
                        <li class="flex items-center gap-3">
                            <i class="fas fa-check text-green-500"></i>
                            <span>{{ $tech }}</span>
                        </li>
                        @endforeach
                    </ul>
                    @endif

                    <div class="grid grid-cols-3 gap-4 mb-6">
                        @foreach($project['stats'] as $stat)
                        <div class="text-center p-4 bg-blue-50 rounded-xl">
                            <div class="text-2xl font-black text-electric-blue">{{ $stat }}</div>
                            <div class="text-sm text-gray-600">Achievement</div>
                        </div>
                        @endforeach
                    </div>

                    @if(isset($project['client']))
                    <div class="bg-gray-100 rounded-xl p-4 mb-6">
                        <h4 class="font-black text-gray-800 mb-2 flex items-center gap-2">
                            <i class="fas fa-user-tie text-electric-orange"></i>
                            Client
                        </h4>
                        <p class="text-gray-600">{{ $project['client'] }}</p>
                    </div>
                    @endif
                </div>
                
                <div class="relative">
                    <img src="{{ asset('images/' . $project['image']) }}" 
                         alt="{{ $project['title'] }}" 
                         class="w-full h-auto rounded-2xl shadow-lg">
                </div>
            </div>
        </div>

        <!-- Navigation -->
        <div class="flex justify-between items-center mt-8">
            <a href="{{ route('projects.index') }}" class="flex items-center gap-2 text-electric-blue hover:text-blue-700 font-semibold">
                <i class="fas fa-arrow-left"></i>
                Kembali ke Daftar Proyek
            </a>
            <a href="{{ route('contact.index') }}" class="bg-electric-orange hover:bg-orange-600 text-white px-6 py-3 rounded-xl font-semibold transition-all duration-300">
                <i class="fas fa-phone mr-2"></i>
                Konsultasi Proyek Serupa
            </a>
        </div>
    </div>
</section>
@endsection