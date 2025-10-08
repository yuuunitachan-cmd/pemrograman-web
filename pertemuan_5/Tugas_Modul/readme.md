# Analisis Percobaan JavaScript dari Modul 7

Repository ini berisi percobaan JavaScript berdasarkan Modul 7: Dasar JavaScript untuk praktikum Pemrograman WEB Teknik Komputer. Analisis mencakup deskripsi, fungsi, analisis per baris/fungsi (dengan menyebutkan baris atau fungsi terlebih dahulu lalu penjelasan), dan screenshot output. Kode diadaptasi dari modul PDF "M7 (1).pdf" dengan modifikasi kecil seperti nama pengguna.

## Struktur Folder
- `images/`: Screenshot hasil eksekusi dan ilustrasi modul.
- File kode: `percobaan2_a.html`, `percobaan2_b.js`, dll.
- `README.md`: Dokumentasi analisis.

## Percobaan 2

### File: percobaan2_a.html
**Deskripsi**: Demonstrasi penempatan script JavaScript di `<head>` dan `<body>`.  
**Fungsi**: Menampilkan teks "Program JavaSript Aku di kepala" di `<head>` dan "Program JavaSript Aku di body" di `<body>` menggunakan `document.write`.  
**Analisis**:  
- **Baris 1-2**: `<HTML> <HEAD><TITLE> contoh JavaScript</TITLE>` – Menyusun tag pembuka HTML dan head dengan judul dokumen.  
  - *Penjelasan*: Menginisialisasi struktur dokumen dengan judul "contoh JavaScript".  
- **Baris 4-6**: `<script language="JavaScript" src="percobaan2_b.js"> document.write("Program JavaSript Aku di kepala"); </script>` – Menambahkan script di head dengan referensi eksternal.  
  - *Penjelasan*: Menulis teks "Program JavaSript Aku di kepala" melalui `document.write`.  
- **Baris 7**: `</HEAD>` – Menutup tag head.  
  - *Penjelasan*: Mengakhiri bagian head dokumen.  
- **Baris 8**: `<BODY>` – Membuka tag body.  
  - *Penjelasan*: Memulai bagian isi utama dokumen.  
- **Baris 9-11**: `<script language="JavaScript"> document.write("Program JavaSript Aku di body"); </script>` – Menambahkan script di body.  
  - *Penjelasan*: Menulis teks "Program JavaSript Aku di body" melalui `document.write`.  
- **Baris 12**: `</BODY> </HTML>` – Menutup tag body dan HTML.  
  - *Penjelasan*: Mengakhiri struktur dokumen secara keseluruhan.  
**Output**:  
![alt text](https://github.com/yuuunitachan-cmd/pemrograman-web/blob/master/pertemuan_5/Tugas_Modul/images/outputPercobaan2_a.png?raw=true)

### File: percobaan2_b.js
**Deskripsi**: File script eksternal untuk mendukung event atau fungsi di HTML.  
**Fungsi**: Tidak ada (file kosong).  
**Analisis**:  
- **File keseluruhan**: File kosong tanpa baris kode.  
  - *Penjelasan*: Menyediakan ruang untuk fungsi tambahan yang belum diisi.  
**Output**: Tidak ada.

### File: percobaan2_c.html
**Deskripsi**: Pengenalan event `onclick` untuk manipulasi DOM.  
**Fungsi**: Tombol memicu fungsi untuk menampilkan "Nama Saya Adalah Yunita!" di `<div>` saat diklik.  
**Analisis**:  
- **Baris 1**: `<!DOCTYPE html>` – Menyatakan tipe dokumen HTML5.  
  - *Penjelasan*: Memastikan browser merender dokumen sebagai HTML modern.  
- **Baris 2**: `<html>` – Membuka tag html.  
  - *Penjelasan*: Memulai struktur utama dokumen.  
- **Baris 3-5**: `<head> <title>Belajar Javascript : Mengenal Event Pada Javascript</title> </head>` – Bagian head dengan judul.  
  - *Penjelasan*: Menambahkan judul halaman "Belajar Javascript : Mengenal Event Pada Javascript".  
- **Baris 6**: `<body>` – Membuka tag body.  
  - *Penjelasan*: Memulai isi utama halaman.  
- **Baris 7-8**: `<h1>Mengenal Event Pada Javascript</h1> <h2> Perograman WEB Event one click</h2>` – Heading utama dan subheading.  
  - *Penjelasan*: Menampilkan judul "Mengenal Event Pada Javascript" dan "Perograman WEB Event one click".  
- **Baris 9-10**: `<!-- memberikan event pada element tombol --> <button onclick="tampilkan_nama()">klik disini </button>` – Tombol dengan event onclick.  
  - *Penjelasan*: Menambahkan tombol yang memanggil fungsi `tampilkan_nama()` saat diklik.  
- **Baris 12-13**: `<!-- id hasil --> <div id="hasil"></div>` – Elemen div dengan id "hasil".  
  - *Penjelasan*: Menyediakan area untuk output dari fungsi JavaScript.  
- **Baris 15-19**: `<script> // membuat function tampilkan_nama function tampilkan_nama(){ document.getElementById("hasil").innerHTML = "<h3>Nama Saya Adalah Yunita! </h3>"; } </script>` – Script dengan fungsi tampilkan_nama.  
  - *Penjelasan*: Mendefinisikan fungsi yang mengubah isi div "hasil" menjadi "<h3>Nama Saya Adalah Yunita! </h3>".  
- **Baris 20**: `</body> </html>` – Menutup tag body dan html.  
  - *Penjelasan*: Mengakhiri struktur dokumen.  
**Output**:  
![alt text](https://github.com/yuuunitachan-cmd/pemrograman-web/blob/master/pertemuan_5/Tugas_Modul/images/outputPercobaan2_c.png?raw=true)

### File: percobaan2_d.html
**Deskripsi**: Contoh sederhana penggunaan `document.write` untuk output teks.  
**Fungsi**: Menampilkan dua baris teks: "Selamat Belajar Angkatan 2019" dan "JavaScript Pemrograman WEB Teknik Komputer".  
**Analisis**:  
- **Baris 1-2**: `<HTML> <HEAD><TITLE> contoh sederhana JavaScript</TITLE></HEAD>` – Tag pembuka HTML dan head dengan judul.  
  - *Penjelasan*: Menginisialisasi dokumen dengan judul "contoh sederhana JavaScript".  
- **Baris 3**: `</BODY>` – Tag penutup body awal (sebelum script).  
  - *Penjelasan*: Menandai akhir bagian body awal, meskipun script berikutnya.  
- **Baris 4-6**: `<script language="JavaScript"> document.write("Selamat Belajar Angkatan 2019","<br>"); document.write("JavaScript Pemrograman WEB Teknik Komputer"); </script>` – Script dengan `document.write`.  
  - *Penjelasan*: Menulis teks pertama dengan line break, kemudian teks kedua.  
- **Baris 7**: `</BODY> </HTML>` – Menutup tag body dan HTML.  
  - *Penjelasan*: Mengakhiri struktur dokumen.  
**Output**:  
![alt text](https://github.com/yuuunitachan-cmd/pemrograman-web/blob/master/pertemuan_5/Tugas_Modul/images/outputPercobaan2_d.png?raw=true)

## Percobaan 3

### File: percobaan3.html
**Deskripsi**: Menggunakan `prompt` untuk menerima input pengguna.  
**Fungsi**: Menampilkan "Hai, [nama]" berdasarkan input dari dialog prompt.  
**Analisis**:  
- **Baris 1-3**: `<HTML> <HEAD> <TITLE>Masukan Data</TITLE> </HEAD>` – Tag pembuka dan head dengan judul.  
  - *Penjelasan*: Mengatur judul "Masukan Data".  
- **Baris 4**: `<BODY>` – Membuka tag body.  
  - *Penjelasan*: Memulai isi dokumen.  
- **Baris 5-9**: `<SCRIPT LANGUAGE = "JavaScript"> //--> var nama = prompt("Siapa nama Anda?"); document.write("Hai, " + nama); //--> </SCRIPT>` – Script dengan prompt dan write.  
  - *Penjelasan*: Mengambil input melalui prompt dan menampilkan teks sapa dengan nama.  
- **Baris 10**: `</BODY> </HTML>` – Menutup tag body dan HTML.  
  - *Penjelasan*: Mengakhiri dokumen.  
**Output**:  
![alt text](https://github.com/yuuunitachan-cmd/pemrograman-web/blob/master/pertemuan_5/Tugas_Modul/images/outputPercobaan3.png?raw=true)
![alt text](https://github.com/yuuunitachan-cmd/pemrograman-web/blob/master/pertemuan_5/Tugas_Modul/images/outputPercobaan3.1.png?raw=true)

## Percobaan 4

### File: percobaan4_a.html
**Deskripsi**: Menampilkan dialog alert sederhana.  
**Fungsi**: Muncul alert "Apakah anda akan meninggalkan laman ini?" saat halaman dimuat.  
**Analisis**:  
- **Baris 1-3**: `<HTML> <HEAD> <TITLE>Alert Box</TITLE> </HEAD>` – Tag pembuka dan head dengan judul.  
  - *Penjelasan*: Mengatur judul "Alert Box".  
- **Baris 4**: `<BODY>` – Membuka tag body.  
  - *Penjelasan*: Memulai isi.  
- **Baris 5-8**: `<SCRIPT LANGUAGE = JavaScript > // window.alert("Apakah anda akan meninggalkan laman ini?"); // </SCRIPT>` – Script dengan alert.  
  - *Penjelasan*: Menampilkan dialog alert saat halaman dimuat.  
- **Baris 9**: `</BODY> </HTML>` – Menutup tag.  
  - *Penjelasan*: Mengakhiri dokumen.  
**Output**:  
![alt text](https://github.com/yuuunitachan-cmd/pemrograman-web/blob/master/pertemuan_5/Tugas_Modul/images/outputPercobaan4_a.png?raw=true)

### File: percobaan4_b.html
**Deskripsi**: Menggunakan dialog confirm untuk input boolean.  
**Fungsi**: Menampilkan hasil "true" atau "false" dari confirm "Apakah anda sudah yakin?".  
**Analisis**:  
- **Baris 1-3**: `<HTML> <HEAD> <TITLE>Konfirmasi</TITLE> </HEAD>` – Tag pembuka dan judul.  
  - *Penjelasan*: Mengatur judul "Konfirmasi".  
- **Baris 4**: `<BODY>` – Membuka body.  
  - *Penjelasan*: Memulai isi.  
- **Baris 5-10**: `<SCRIPT LANGUAGE = "JavaScript"> <!-- var jawaban = window.confirm( "Apakah anda sudah yakin ?"); document.write("Jawaban Anda: " + jawaban); //--> </SCRIPT>` – Script dengan confirm dan write.  
  - *Penjelasan*: Mengambil hasil confirm dan menampilkan teks dengan nilai jawaban.  
- **Baris 11**: `</BODY> </HTML>` – Menutup tag.  
  - *Penjelasan*: Mengakhiri dokumen.  
**Output**:
![alt text](https://github.com/yuuunitachan-cmd/pemrograman-web/blob/master/pertemuan_5/Tugas_Modul/images/outputPercobaan4_b.png?raw=true)
![alt text](https://github.com/yuuunitachan-cmd/pemrograman-web/blob/master/pertemuan_5/Tugas_Modul/images/outputPercobaan4_b1.png?raw=true)
![alt text](https://github.com/yuuunitachan-cmd/pemrograman-web/blob/master/pertemuan_5/Tugas_Modul/images/outputPercobaan4_b2.png?raw=true)

## Percobaan 5

### File: percobaan5_a.html
**Deskripsi**: Deklarasi dan operasi variabel sederhana.  
**Fungsi**: Mengalikan dua variabel (1234 * 3) dan menampilkan hasil.  
**Analisis**:  
- **Baris 1**: `<script language="Javascript">` – Membuka script.  
  - *Penjelasan*: Memulai blok JavaScript.  
- **Baris 2**: `//` – Komentar pembuka.  
  - *Penjelasan*: Menandai awal komentar.  
- **Baris 3-5**: `var VariabelKu; var VariabelKu2 = 3; VariabelKu = 1234;` – Deklarasi variabel.  
  - *Penjelasan*: Menginisialisasi variabel dengan nilai.  
- **Baris 6**: `document.write(VariabelKu*VariabelKu2);` – Menampilkan hasil perkalian.  
  - *Penjelasan*: Menghitung dan menulis hasil.  
- **Baris 7**: `// -->` – Komentar penutup.  
  - *Penjelasan*: Mengakhiri komentar.  
- **Baris 8**: `</script>` – Menutup script.  
  - *Penjelasan*: Mengakhiri blok JavaScript.  
**Output**:  
![alt text](https://github.com/yuuunitachan-cmd/pemrograman-web/blob/master/pertemuan_5/Tugas_Modul/images/outputPercobaan5_a.png?raw=true)

### File: percobaan5_b.html & percobaan5_c.html
**Deskripsi**: Demonstrasi variabel global dan lokal dalam fungsi.  
**Fungsi**: Mengalikan parameter fungsi dengan 2 dan menampilkan hasil serta nilai variabel global.  
**Analisis**:  
- **Baris 1**: `<SCRIPT language="Javascript">` – Membuka script.  
  - *Penjelasan*: Memulai blok JavaScript.  
- **Baris 2**: `<!--` – Komentar pembuka.  
  - *Penjelasan*: Menandai awal komentar.  
- **Baris 3-4**: `var a = 12; var b = 4;` – Deklarasi variabel global.  
  - *Penjelasan*: Menginisialisasi variabel a dan b.  
- **Fungsi PerkalianDengan2 (Baris 5-8)**: `function PerkalianDengan2(b) { var a = b * 2; return a; }` – Definisi fungsi.  
  - *Penjelasan*: Membuat fungsi yang mengalikan parameter b dengan 2 dan mengembalikan hasil.  
- **Baris 9-10**: `document.write("Dua kali dari ",b," adalah " , PerkalianDengan2(b)); document.write("Nilai dari a adalah",a);` – Menampilkan hasil.  
  - *Penjelasan*: Memanggil fungsi dan menulis output teks dengan nilai.  
- **Baris 11**: `// -->` – Komentar penutup.  
  - *Penjelasan*: Mengakhiri komentar.  
- **Baris 12**: `</SCRIPT>` – Menutup script.  
  - *Penjelasan*: Mengakhiri blok JavaScript.  
**Output**:  
![alt text](https://github.com/yuuunitachan-cmd/pemrograman-web/blob/master/pertemuan_5/Tugas_Modul/images/outputPercobaan5_b.png?raw=true)
![alt text](https://github.com/yuuunitachan-cmd/pemrograman-web/blob/master/pertemuan_5/Tugas_Modul/images/outputPercobaan5_c.png?raw=true)

## Percobaan 7

### File: percobaan7.html
**Deskripsi**: Konversi tipe data string ke angka menggunakan `parseInt` dan `parseFloat`.  
**Fungsi**: Menguji konversi berbagai string dan menampilkan hasil.  
**Analisis**:  
- **Baris 1-4**: `<HTML> <HEAD> <TITLE>Konversi Bilangan</TITLE> </HEAD>` – Tag pembuka dan judul.  
  - *Penjelasan*: Mengatur judul "Konversi Bilangan".  
- **Baris 5**: `<BODY>` – Membuka body.  
  - *Penjelasan*: Memulai isi.  
- **Baris 6**: `<SCRIPT LANGUAGE = JavaScript >` – Membuka script.  
  - *Penjelasan*: Memulai blok JavaScript.  
- **Baris 7**: `<!--` – Komentar pembuka.  
  - *Penjelasan*: Menandai awal komentar.  
- **Baris 8-15**: `var a = parseInt( "27" ); document.write( "1."  + a + "<BR>"); a = parseInt( "27.5" ); document.write( "2."  + a + "<BR>"); var a = parseInt( "27A"); document.write( "3."  + a + "<BR>"); a = parseInt("A27.5" ); document.write( "4."  + a + "<BR>");` – Uji parseInt.  
  - *Penjelasan*: Mengonversi string ke integer dan menampilkan hasil dengan nomor.  
- **Baris 16-23**: `var b = parseFloat( "27" ); document.write( "5."  + b + "<BR>"); b = parseFloat( "27.5" ); document.write( "6."  + b + "<BR>"); var b = parseFloat( "27A"); document.write( "7."  + b + "<BR>"); b = parseFloat("A27.5"); document.write("8."+b+"<BR>")` – Uji parseFloat.  
  - *Penjelasan*: Mengonversi string ke float dan menampilkan hasil dengan nomor.  
- **Baris 24**: `//-->` – Komentar penutup.  
  - *Penjelasan*: Mengakhiri komentar.  
- **Baris 25**: `</SCRIPT>` – Menutup script.  
  - *Penjelasan*: Mengakhiri blok JavaScript.  
- **Baris 26**: `</BODY> </HTML>` – Menutup tag.  
  - *Penjelasan*: Mengakhiri dokumen.  
**Output**:  
![alt text](https://github.com/yuuunitachan-cmd/pemrograman-web/blob/master/pertemuan_5/Tugas_Modul/images/outputPercobaan5_c.png?raw=true)

## Percobaan 8

### File: percobaan8.html
**Deskripsi**: Operasi aritmatika dasar.  
**Fungsi**: Menampilkan hasil penjumlahan, pengurangan, perkalian, dan pembagian.  
**Analisis**:  
- **Baris 1-4**: `<HTML> <HEAD> <TITLE>Operasi Matematika</TITLE> </HEAD>` – Tag pembuka dan judul.  
  - *Penjelasan*: Mengatur judul "Operasi Matematika".  
- **Baris 5**: `<BODY>` – Membuka body.  
  - *Penjelasan*: Memulai isi.  
- **Baris 6**: `<SCRIPT LANGUAGE = "JavaScript">` – Membuka script.  
  - *Penjelasan*: Memulai blok JavaScript.  
- **Baris 7**: `<!--` – Komentar pembuka.  
  - *Penjelasan*: Menandai awal komentar.  
- **Baris 8-15**: `document.write("2 + 3 = " + (2 + 3) ); document.write("<BR>"); document.write("20 + 3 = " + (20 - 3) ); document.write("<BR>"); document.write("20* 3 = " + (2 * 3) ); document.write("<BR>"); document.write("40 / 3 = " + (40 / 3) ); document.write("<BR>");` – Operasi dan output.  
  - *Penjelasan*: Menghitung operasi aritmatika dan menampilkan hasil dengan line break.  
- **Baris 16**: `//-->` – Komentar penutup.  
  - *Penjelasan*: Mengakhiri komentar.  
- **Baris 17**: `</SCRIPT>` – Menutup script.  
  - *Penjelasan*: Mengakhiri blok JavaScript.  
- **Baris 18**: `</BODY> </HTML>` – Menutup tag.  
  - *Penjelasan*: Mengakhiri dokumen.  
**Output**:  
![alt text](https://github.com/yuuunitachan-cmd/pemrograman-web/blob/master/pertemuan_5/Tugas_Modul/images/outputPercobaan8.png?raw=true)

## Percobaan 9

### File: percobaan9.html
**Deskripsi**: Penggunaan operator ternary untuk kondisional.  
**Fungsi**: Menentukan "Lulus" atau "Tidak Lulus" berdasarkan input nilai dari prompt.  
**Analisis**:  
- **Baris 1-3**: `<HTML> <HEAD> <TITLE>Operator ?</TITLE> </HEAD>` – Tag pembuka dan judul.  
  - *Penjelasan*: Mengatur judul "Operator ?".  
- **Baris 4**: `<BODY>` – Membuka body.  
  - *Penjelasan*: Memulai isi.  
- **Baris 5**: `<SCRIPT LANGUAGE = "JavaScript">` – Membuka script.  
  - *Penjelasan*: Memulai blok JavaScript.  
- **Baris 6**: `<!--` – Komentar pembuka.  
  - *Penjelasan*: Menandai awal komentar.  
- **Baris 7-9**: `var nilai = prompt("Nilai (0-100): ", 0); var hasil = (nilai >= 60) ? "Lulus" : "Tidak Lulus"; document.write("Hasil: " + hasil);` – Input, logika, dan output.  
  - *Penjelasan*: Mengambil input nilai, menggunakan ternary untuk menentukan hasil, dan menampilkan teks.  
- **Baris 10**: `//-->` – Komentar penutup.  
  - *Penjelasan*: Mengakhiri komentar.  
- **Baris 11**: `</SCRIPT>` – Menutup script.  
  - *Penjelasan*: Mengakhiri blok JavaScript.  
- **Baris 12**: `</BODY> </HTML>` – Menutup tag.  
  - *Penjelasan*: Mengakhiri dokumen.  
**Output**:  
![alt text](https://github.com/yuuunitachan-cmd/pemrograman-web/blob/master/pertemuan_5/Tugas_Modul/images/outputPercobaan9.png?raw=true)
