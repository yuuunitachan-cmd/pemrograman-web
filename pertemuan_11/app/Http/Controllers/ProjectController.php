<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    private $projects;

    public function __construct()
    {
        $this->projects = [
            [
                'id' => 1,
                'category' => 'Penerangan Jalan',
                'title' => 'Relokasi Lampu Jalan PJU Belopa dan Belopa Utara',
                'description' => 'Proyek strategis pemasangan dan relokasi sistem penerangan jalan umum menggunakan teknologi LED modern yang hemat energi dan ramah lingkungan.',
                'year' => '2023',
                'location' => 'Kabupaten Luwu',
                'image' => 'PJU.jpg',
                'stats' => ['150+', '5km', 'LED'],
                'scope' => [
                    'Relokasi tiang lampu PJU existing',
                    'Pemasangan sistem penerangan LED baru',
                    'Instalasi sistem kontrol otomatis',
                    'Testing dan commissioning'
                ],
                'client' => 'Pemerintah Kabupaten Luwu - Dinas Perhubungan'
            ],
            [
                'id' => 2,
                'category' => 'Telekomunikasi',
                'title' => 'Pekerjaan IKR WiFi',
                'description' => 'Instalasi infrastruktur jaringan telekomunikasi dan sistem WiFi untuk area komersial dan residensial dengan teknologi fiber optic terbaru.',
                'year' => '2023',
                'location' => 'Area Makassar',
                'image' => 'IKR.jpg',
                'stats' => ['25+', 'Fiber', 'WiFi6'],
                'technologies' => [
                    'Fiber Optic Network',
                    'WiFi 6 Technology',
                    'Network Management System'
                ]
            ],
            [
                'id' => 3,
                'category' => 'Distribusi Listrik',
                'title' => 'Instalasi Jaringan Distribusi',
                'description' => 'Pembangunan jaringan listrik distribusi tegangan menengah dan rendah sesuai standar PLN dengan material berkualitas tinggi.',
                'year' => '2024',
                'location' => 'Sulawesi Selatan',
                'image' => 'distribusi.jpg',
                'stats' => ['10km', 'TM/TR', 'PLN'],
                'scope' => [
                    'Jaringan distribusi TM/TR',
                    'Instalasi gardu distribusi',
                    'Sistem proteksi dan grounding'
                ]
            ]
        ];
    }

    public function index()
    {
        $data = [
            'title' => 'Proyek - TRITAMA | Portfolio Kontraktor Listrik',
            'description' => 'Portfolio proyek PT. Triputra Gowata Mandiri',
            'projects' => $this->projects
        ];

        return view('pages.projects.index', $data);
    }

    public function show($id)
    {
        $project = collect($this->projects)->firstWhere('id', $id);

        if (!$project) {
            abort(404);
        }

        $data = [
            'title' => $project['title'] . ' - TRITAMA',
            'description' => $project['description'],
            'project' => $project
        ];

        return view('pages.projects.show', $data);
    }
}