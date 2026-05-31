<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Software;

class SoftwareSeeder extends Seeder
{
    public function run(): void
    {
        
        $softwares = [
            [
                'title' => 'Visual Studio Code',
                'description' => 'Code editor terpopuler buatan Microsoft. Ringan, powerful, dan mendukung ribuan ekstensi untuk segala bahasa pemrograman.',
                'category' => 'Development',
                'version' => '1.85.1',
                'image_url' => 'https://www.svgrepo.com/show/354522/visual-studio-code.svg',
                'screenshot_url' => 'https://sujeeth-varma.github.io/VsCode_LandingPageClone/imgs/vs4.png',
                'download_url' => 'https://code.visualstudio.com/download',
                'install_instructions' => "1. Download installer sesuai OS (Windows/Mac).\n2. Klik 2x file Setup.exe.\n3. Centang 'Add to PATH' agar bisa dipanggil di terminal.\n4. Klik Next sampai Finish.",
                'downloads_count' => 0
            ],
            [
                'title' => 'VLC Media Player',
                'description' => 'Pemutar video legendaris yang bisa memutar hampir semua format file video dan audio tanpa perlu codec tambahan.',
                'category' => 'Multimedia',
                'version' => '3.0.20',
                'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/38/VLC_icon.png/1024px-VLC_icon.png',
                'screenshot_url' => 'https://www.ghacks.net/wp-content/uploads/2019/02/vlc-media-player-4.0.png',
                'download_url' => 'https://www.videolan.org/vlc/',
                'install_instructions' => "1. Buka file installer vlc.exe.\n2. Pilih Bahasa (English recommended).\n3. Pilih komponen (biarkan default).\n4. Tunggu instalasi selesai.",
                'downloads_count' => 0
            ],
            [
                'title' => 'WPS Office',
                'description' => 'Alternatif Microsoft Office gratis terbaik. Bisa membuka Word, Excel, PPT, dan PDF dalam satu aplikasi ringan.',
                'category' => 'Office',
                'version' => '2024 Free',
                'image_url' => 'https://cdn.worldvectorlogo.com/logos/wps-office.svg',
                'screenshot_url' => 'https://website-prod.cache.wpscdn.com/img/slider_4.77efb53.png',
                'download_url' => 'https://www.wps.com/download/',
                'install_instructions' => "1. Jalankan wps_setup.exe.\n2. Klik tombol 'Install Now'.\n3. WPS akan otomatis mendownload file tambahan.\n4. Login akun Google untuk fitur cloud gratis.",
                'downloads_count' => 0
            ],
            [
                'title' => 'Spotify',
                'description' => 'Layanan streaming musik digital terbesar. Dengarkan jutaan lagu dan podcast dari seluruh dunia secara gratis.',
                'category' => 'Multimedia',
                'version' => 'Latest',
                'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/8/84/Spotify_icon.svg/1920px-Spotify_icon.svg.png',
                'screenshot_url' => 'https://i.pinimg.com/originals/53/69/6f/53696f8ec288846c09967b25e9c27ff5.jpg',
                'download_url' => 'https://www.spotify.com/id/download/windows/',
                'install_instructions' => "1. Download SpotifySetup.exe.\n2. Jalankan file, instalasi akan berjalan otomatis di background.\n3. Login menggunakan Email atau Facebook.",
                'downloads_count' => 0
            ],
            [
                'title' => 'XAMPP',
                'description' => 'Paket web server wajib bagi developer PHP. Berisi Apache, MySQL/MariaDB, dan PHPMyAdmin dalam satu instalasi.',
                'category' => 'Development',
                'version' => '8.2.12',
                'image_url' => 'https://www.svgrepo.com/show/354575/xampp.svg',
                'screenshot_url' => 'https://static1.xdaimages.com/wordpress/wp-content/uploads/wm/2023/12/6-xampp-on-windows-11-1.jpg',
                'download_url' => 'https://www.apachefriends.org/download.html',
                'install_instructions' => "1. Download XAMPP Installer.\n2. PENTING: Jangan install di folder Program Files, pilih C:/xampp.\n3. Matikan UAC jika diminta.\n4. Jalankan XAMPP Control Panel sebagai Admin.",
                'downloads_count' => 0
            ],
            [
                'title' => 'Laragon',
                'description' => 'Paket web server wajib bagi developer PHP. Berisi Apache, MySQL/MariaDB, dan PHPMyAdmin dalam satu instalasi.',
                'category' => 'Development',
                'version' => '8.4.0',
                'image_url' => 'https://cdn.worldvectorlogo.com/logos/laragon.svg',
                'screenshot_url' => 'https://laragon.app/images/docs/laragon-ui.png',
                'download_url' => 'https://laragon.org/download',
                'install_instructions' => "1. Download XAMPP Installer.\n2. PENTING: Jangan install di folder Program Files, pilih C:/xampp.\n3. Matikan UAC jika diminta.\n4. Jalankan XAMPP Control Panel sebagai Admin.",
                'downloads_count' => 0
            ],
            [
                'title' => 'OBS Studio',
                'description' => 'Software gratis terbaik untuk merekam layar dan live streaming ke YouTube/Twitch. Sangat ringan dan full fitur.',
                'category' => 'Multimedia',
                'version' => '30.0',
                'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/d/d3/OBS_Studio_Logo.svg',
                'screenshot_url' => 'https://obsproject.com/assets/images/features-new/studio.png',
                'download_url' => 'https://obsproject.com/',
                'install_instructions' => "1. Jalankan Auto-Configuration Wizard saat pertama buka.\n2. Pilih 'Optimize for streaming' atau 'Recording' sesuai kebutuhan.\n3. Atur sumber input (Display Capture).",
                'downloads_count' => 0
            ],
        ];

        // Looping untuk Insert Data
        foreach ($softwares as $sw) {
            Software::create($sw);
        }
    }
}