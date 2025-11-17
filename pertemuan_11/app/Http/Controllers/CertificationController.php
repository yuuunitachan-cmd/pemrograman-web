<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CertificationController extends Controller
{
    public function index()
    {
        $certifications = [
            'international' => [
                [
                    'type' => 'ISO 9001:2015',
                    'description' => 'Sistem Manajemen Mutu untuk memastikan konsistensi kualitas dalam setiap proyek kelistrikan yang kami kerjakan.',
                    'validity' => '2023-2026',
                    'status' => 'Aktif',
                    'icon' => 'fas fa-certificate',
                    'color' => 'blue'
                ],
                [
                    'type' => 'ISO 45001:2018',
                    'description' => 'Sistem Manajemen Keselamatan dan Kesehatan Kerja untuk menjamin keamanan pekerja dan lingkungan proyek.',
                    'validity' => '2023-2026',
                    'status' => 'Aktif',
                    'icon' => 'fas fa-shield-alt',
                    'color' => 'orange'
                ]
            ],
            'national' => [
                [
                    'type' => 'Sertifikat SMK3',
                    'description' => 'Sistem Manajemen Keselamatan dan Kesehatan Kerja dengan pencapaian tingkat Awal sebesar 85.94% (64 Kriteria).',
                    'level' => 'Awal (85.94%)',
                    'validity' => '3 Tahun',
                    'icon' => 'fas fa-hard-hat',
                    'color' => 'green'
                ],
                [
                    'type' => 'CSMS',
                    'description' => 'Contractor Safety Management System dengan klasifikasi Risiko Ekstrem. Lulus prakualifikasi sistem manajemen keselamatan kontraktor.',
                    'classification' => 'Risiko Ekstrem',
                    'validity' => '3 Tahun',
                    'icon' => 'fas fa-clipboard-check',
                    'color' => 'red'
                ]
            ],
            'accreditations' => [
                [
                    'type' => 'Badan Usaha Jasa Penunjang Tenaga Listrik',
                    'description' => 'Terakreditasi oleh Direktorat Jenderal Ketenagalistrikan Kementerian Energi dan Sumber Daya Mineral Republik Indonesia.',
                    'issuer' => 'Kementerian ESDM',
                    'icon' => 'fas fa-bolt',
                    'color' => 'purple'
                ],
                [
                    'type' => 'AKLI',
                    'description' => 'Anggota aktif Asosiasi Kontraktor Listrik Indonesia, sebagai wadah profesional dalam industri ketenagalistrikan nasional.',
                    'issuer' => 'Asosiasi Profesi',
                    'icon' => 'fas fa-user-tie',
                    'color' => 'indigo'
                ]
            ]
        ];

        $data = [
            'title' => 'Sertifikat & Akreditasi - TRITAMA | Kontraktor Listrik Bersertifikat ISO',
            'description' => 'Sertifikat dan akreditasi PT. Triputra Gowata Mandiri - ISO 9001:2015, ISO 45001:2018, SMK3, CSMS',
            'certifications' => $certifications
        ];

        return view('pages.certifications.index', $data);
    }
}