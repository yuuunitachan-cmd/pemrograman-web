<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $services = [
            [
                'icon' => 'fas fa-bolt',
                'title' => 'Listrik Distribusi',
                'description' => 'Pembangunan konstruksi jaringan listrik distribusi tegangan menengah, tegangan rendah, konstruksi gardu trafo dan pemasangan alat pengukur.',
                'features' => ['Tegangan Menengah & Rendah', 'Gardu Trafo', 'Alat Pengukur']
            ],
            [
                'icon' => 'fas fa-wrench',
                'title' => 'Listrik Instalasi',
                'description' => 'Pemasangan peralatan instalasi listrik gedung/bangunan untuk perumahan, perkantoran, pusat bisnis dan industri.',
                'features' => ['Perumahan', 'Perkantoran', 'Industri']
            ],
            [
                'icon' => 'fas fa-search',
                'title' => 'Inspeksi Kendala',
                'description' => 'Inspeksi instalasi listrik untuk memberikan jaminan keamanan serta keandalan listrik di tempat anda.',
                'features' => ['Jaminan Keamanan', 'Keandalan Listrik', 'Sertifikat Laik']
            ]
        ];

        $data = [
            'title' => 'TRITAMA - PT. Triputra Gowata Mandiri | Kontraktor Listrik Terpercaya',
            'description' => 'Kontraktor listrik terpercaya Indonesia Timur dengan sertifikat ISO',
            'stats' => [
                'years' => '4+',
                'projects' => '50+',
                'clients' => '100%'
            ],
            'services' => $services 
        ];

        return view('pages.home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'Tentang Kami - TRITAMA',
            'description' => 'Tentang PT. Triputra Gowata Mandiri - Kontraktor listrik bersertifikat'
        ];

        return view('pages.about', $data);
    }

 
    public function services()
    {
        $services = [
            [
                'icon' => 'fas fa-bolt',
                'title' => 'Listrik Distribusi',
                'description' => 'Pembangunan konstruksi jaringan listrik distribusi tegangan menengah, tegangan rendah, konstruksi gardu trafo dan pemasangan alat pengukur. Layanan kami mencakup perencanaan, instalasi, dan maintenance sistem distribusi listrik yang handal.',
                'features' => [
                    'Tegangan Menengah & Rendah',
                    'Gardu Trafo Distribusi', 
                    'Pemasangan Jaringan Udara & Kabel Bawah Tanah',
                    'Instalasi Panel Listrik',
                    'Pemasangan Alat Pengukur (KWH Meter)',
                    'Testing & Commissioning'
                ]
            ],
            [
                'icon' => 'fas fa-wrench',
                'title' => 'Listrik Instalasi',
                'description' => 'Pemasangan peralatan instalasi listrik gedung/bangunan untuk perumahan, perkantoran, pusat bisnis dan industri. Kami menggunakan material berkualitas tinggi sesuai standar PLN dan SNI.',
                'features' => [
                    'Instalasi Listrik Perumahan',
                    'Sistem Listrik Gedung Perkantoran',
                    'Instalasi Industri & Pabrik',
                    'Sistem Penerangan Bangunan',
                    'Instalasi Tenaga & Penerangan',
                    'Instalasi Grounding & Proteksi'
                ]
            ],
            [
                'icon' => 'fas fa-search',
                'title' => 'Inspeksi Kendala',
                'description' => 'Inspeksi instalasi listrik untuk memberikan jaminan keamanan serta keandalan listrik di tempat anda. Layanan pemeriksaan dan troubleshooting sistem kelistrikan.',
                'features' => [
                    'Inspeksi Rutin Instalasi Listrik',
                    'Troubleshooting Gangguan Listrik',
                    'Analisis Beban & Daya Listrik',
                    'Pemeriksaan Sistem Grounding',
                    'Sertifikasi Laik Operasi',
                    'Pemeriksaan Thermography'
                ]
            ],
            [
                'icon' => 'fas fa-tools',
                'title' => 'Maintenance & Perawatan',
                'description' => 'Layanan perawatan dan pemeliharaan sistem kelistrikan untuk menjaga performa dan keandalan instalasi listrik Anda.',
                'features' => [
                    'Maintenance Preventif',
                    'Perawatan Panel Listrik',
                    'Pemeliharaan Gardu Distribusi',
                    'Cleaning Electrical Equipment',
                    'Kalibrasi Alat Ukur',
                    'Emergency Response Team'
                ]
            ],
            [
                'icon' => 'fas fa-lightbulb',
                'title' => 'Penerangan Jalan Umum',
                'description' => 'Instalasi dan perawatan sistem penerangan jalan umum (PJU) dengan teknologi LED modern yang hemat energi dan ramah lingkungan.',
                'features' => [
                    'Instalasi PJU LED',
                    'Sistem Kontrol Otomatis',
                    'Maintenance PJU',
                    'Relokasi Tiang Lampu',
                    'Solar PJU System',
                    'Smart Lighting Control'
                ]
            ],
            [
                'icon' => 'fas fa-charging-station',
                'title' => 'Energi Terbarukan',
                'description' => 'Instalasi sistem energi terbarukan seperti solar panel untuk mendukung efisiensi energi dan keberlanjutan lingkungan.',
                'features' => [
                    'Instalasi Solar Panel',
                    'Sistem PLTS Off-grid & On-grid',
                    'Energy Monitoring System',
                    'Maintenance Solar Panel',
                    'Energy Audit',
                    'Consulting Renewable Energy'
                ]
            ]
        ];

        $data = [
            'title' => 'Layanan - TRITAMA | Jasa Kontraktor Listrik Profesional',
            'description' => 'Layanan lengkap PT. Triputra Gowata Mandiri - Listrik Distribusi, Instalasi, Inspeksi Kendala, Maintenance, PJU, dan Energi Terbarukan',
            'services' => $services
        ];

        return view('pages.services', $data);
    }
}