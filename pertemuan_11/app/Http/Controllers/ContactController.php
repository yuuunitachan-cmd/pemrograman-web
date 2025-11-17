<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Kontak - TRITAMA | Konsultasi Gratis',
            'description' => 'Hubungi TRITAMA untuk konsultasi proyek kelistrikan Anda'
        ];

        return view('pages.contact.index', $data);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'service' => 'required|string|max:255',
            'message' => 'required|string|max:1000'
        ]);

 
        $this->sendNotificationEmail($validated);

 
        $whatsappUrl = $this->generateWhatsAppUrl($validated);

        return redirect()->away($whatsappUrl);
    }

    private function sendNotificationEmail($data)
    {
        $to = 'triputragowatamandir@gmail.com';
        $subject = 'Konsultasi Baru dari Website TRITAMA';
        
        $message = "
            🔌 KONSULTASI BARU TRITAMA 🔌

            📋 DATA CLIENT:
            • Nama: {$data['name']}
            • Telepon: {$data['phone']}
            • Email: {$data['email']}

            💡 JENIS LAYANAN:
            {$data['service']}

            📝 DETAIL PROYEK:
            {$data['message']}

            ⏰ TIMESTAMP:
            " . now()->format('d/m/Y H:i:s') . "
        ";

 
    }

    private function generateWhatsAppUrl($data)
    {
        $text = "🔌 *KONSULTASI TRITAMA* 🔌

📋 *DATA CLIENT:*
• Nama: {$data['name']}
• Telepon: {$data['phone']}
• Email: {$data['email']}

💡 *JENIS LAYANAN:*
{$data['service']}

📝 *DETAIL PROYEK:*
{$data['message']}

⏰ *TIMESTAMP:*
" . now()->format('d/m/Y H:i:s') . "

_*Pesan otomatis dari website TRITAMA*_";

        $encodedText = urlencode($text);
        return "https://wa.me/6285341306123?text={$encodedText}";
    }
}