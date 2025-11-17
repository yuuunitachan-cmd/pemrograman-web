@extends('layouts.app')

@section('title', $title)
@section('description', $description)

@section('content')
 
<section class="pt-20 min-h-[60vh] section-bg text-white flex items-center" style="background-image: url('/images/gallery-bg.jpg')">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-5xl lg:text-7xl font-black mb-6">
            <span class="gradient-text">Kontak</span> Kami
        </h1>
        <p class="text-xl text-blue-100 max-w-2xl mx-auto">
            Konsultasikan kebutuhan proyek kelistrikan Anda dengan tim profesional kami
        </p>
    </div>
</section>

 
<section class="py-20 section-bg text-white relative overflow-hidden" style="background-image: url('/images/gallery-bg.jpg')">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid lg:grid-cols-2 gap-16">
    
            <div class="space-y-8">
                <h2 class="text-3xl font-black mb-6">Informasi Kontak</h2>
                
                <div class="space-y-6">
                    <div class="flex items-start gap-4 p-6 bg-white/10 backdrop-blur-lg rounded-xl card-hover border border-white/20">
                        <div class="p-3 bg-electric-orange rounded-xl">
                            <i class="fas fa-map-marker-alt text-white text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-black mb-2">Alamat Kantor</h4>
                            <p class="leading-relaxed">
                                Jalan Faisal X Kompleks Green Faisal No 41A<br>
                                Kel. Banta-Bantaeng, Kec. Rappocini<br>
                                Kota Makassar, Sulawesi Selatan
                            </p>
                        </div>
                    </div>
                    
                    <div class="flex items-start gap-4 p-6 bg-white/10 backdrop-blur-lg rounded-xl card-hover border border-white/20">
                        <div class="p-3 bg-green-500 rounded-xl">
                            <i class="fas fa-phone text-white text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-black mb-2">Telepon & WhatsApp</h4>
                            <p class="text-xl font-black">085341306123</p>
                            <p class="text-blue-200 text-sm">24/7 Siap Melayani</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4 p-6 bg-white/10 backdrop-blur-lg rounded-xl card-hover border border-white/20">
                        <div class="p-3 bg-blue-500 rounded-xl">
                            <i class="fas fa-envelope text-white text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-black mb-2">Email</h4>
                            <p>triputragowatamandir@gmail.com</p>
                            <p class="text-blue-200 text-sm">Respon dalam 24 jam</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="bg-white/10 backdrop-blur-lg p-8 rounded-3xl card-hover border border-white/20">
                <h2 class="text-3xl font-black mb-6">Form Konsultasi</h2>
                <form action="{{ route('contact.store') }}" method="POST" class="space-y-6">
                    @csrf
                    <div class="grid md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-black mb-2">Nama Lengkap *</label>
                            <input type="text" name="name" required class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-xl focus:ring-2 focus:ring-electric-blue text-white placeholder-blue-200" placeholder="Masukkan nama lengkap">
                        </div>
                        <div>
                            <label class="block text-sm font-black mb-2">No. Telepon *</label>
                            <input type="tel" name="phone" required class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-xl focus:ring-2 focus:ring-electric-blue text-white placeholder-blue-200" placeholder="08XXXXXXXXXX">
                        </div>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-black mb-2">Email *</label>
                        <input type="email" name="email" required class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-xl focus:ring-2 focus:ring-electric-blue text-white placeholder-blue-200" placeholder="nama@email.com">
                    </div>
                    
                    <div>
                        <label class="block text-sm font-black mb-2">Jenis Layanan *</label>
                        <select name="service" required class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-xl focus:ring-2 focus:ring-electric-blue text-white">
                            <option value="" class="text-gray-500">Pilih jenis layanan</option>
                            <option value="Listrik Distribusi" class="text-gray-800">Listrik Distribusi</option>
                            <option value="Listrik Instalasi" class="text-gray-800">Listrik Instalasi</option>
                            <option value="Inspeksi Kendala Listrik" class="text-gray-800">Inspeksi Kendala Listrik</option>
                            <option value="Konsultasi Umum" class="text-gray-800">Konsultasi Umum</option>
                            <option value="Maintenance" class="text-gray-800">Maintenance</option>
                        </select>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-black mb-2">Detail Proyek *</label>
                        <textarea name="message" rows="4" required class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-xl focus:ring-2 focus:ring-electric-blue text-white placeholder-blue-200 resize-none" placeholder="Jelaskan kebutuhan proyek Anda secara detail..."></textarea>
                    </div>
                    
                    <button type="submit" class="w-full bg-gradient-to-r from-electric-orange to-orange-600 text-white py-4 rounded-xl font-bold transition-all duration-300 transform hover:scale-105 flex items-center justify-center gap-2 electric-glow">
                        <i class="fas fa-paper-plane"></i>
                        Kirim via WhatsApp
                        <i class="fab fa-whatsapp ml-2"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>


<section class="py-20 bg-gradient-to-r from-electric-blue to-dark-blue text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-4xl font-black mb-6">Butuh Konsultasi Cepat?</h2>
        <p class="text-xl text-blue-100 mb-8 max-w-2xl mx-auto">
            Hubungi kami langsung via WhatsApp untuk respon yang lebih cepat
        </p>
        <a href="https://wa.me/6285341306123?text=Halo%20TRITAMA,%20saya%20tertarik%20dengan%20layanan%20kelistrikan%20Anda" 
           target="_blank"
           class="inline-flex items-center gap-3 bg-green-500 hover:bg-green-600 text-white px-8 py-4 rounded-xl font-bold text-lg transition-all duration-300 transform hover:scale-105">
            <i class="fab fa-whatsapp text-2xl"></i>
            Chat via WhatsApp
            <i class="fas fa-external-link-alt ml-2"></i>
        </a>
    </div>
</section>
@endsection