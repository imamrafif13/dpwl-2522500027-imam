# pertemuan-01
1. Gimana Hubungan PWD, DPW, dan DPWL?
  PWD (Pemrograman Web Dasar): Ini level newbie. Fokusnya baru belajar fondasi—HTML, CSS, sama JS dasar buat bikin tampilan web statis. PHP-nya juga baru perkenalan sintaks dasar.
  DPW (Desain & Pemrograman Web): Level intermediate. Di sini kita udah mulai mainan web dinamis. Belajar connect-in PHP ke database (CRUD) pake struktur MVC Native tanpa framework.
  DPWL (Desain & Pemrograman Web Lanjutan): Level pro. Semua ilmu di DPW langsung dipraktikkan pake framework modern kaya Laravel atau CodeIgniter biar standar kodingannya siap buat dunia industri.
2. PHP Gaya Lama (Terstruktur) vs MVC
  PHP Terstruktur (Procedural): Kode gado-gado. Logika bisnis, query database, sama tampilan HTML numpuk jadi satu di satu file (misal index.php). Kalau aplikasinya makin gede, kodingannya bakal bikin pusing sendiri.
  PHP MVC: Kode udah dipisah-pisah sesuai "kamar"-nya masing-masing (data, logika, sama tampilan). Efeknya, kodingan jadi super rapi, gampang di-maintain, dan enak banget pas kerja kelompok/teamwork.
3. Siapa Model, View, dan Controller Itu?
  Model: Si tukang data. Urusannya cuma ngambil, nyimpen, atau ngolah data ke/dari database.
  View: Si tukang rias. Ini tampilan web (HTML/CSS) yang dilihat langsung sama user. Pokoknya View nggak boleh sentuh-sentuh query database!
  Controller: Si manajer/otak. Dia yang nangkep perintah dari user, minta tolong ke Model buat narik data, terus ngasih hasilnya ke View biar ditampilin.
4. Cara Kerja Request–Response MVC
  User klik sesuatu di browser (misal klik tombol "Lihat Profil").
  Controller nangkep request itu.
  Controller bilang ke Model: "Bro, tolong ambil data profil user ini dong."
  Model narik data dari Database, terus dikasihin lagi ke Controller.
  Controller lempar data itu ke View: "Nih datanya, tolong rapihin kodingan tampilannya ya."
  View bikin tampilan HTML-nya, terus dikirim ke Browser buat dilihat sama user.
5. Contoh Penerapan: Fitur Login Pengguna
  Model (UserModel.php):
    Kenapa? Dia yang ngecek ke database: "Ada nggak username & password ini di tabel users?"
  Controller (AuthController.php):
    Kenapa? Dia yang nangkep isian form login, nyuruh Model ngecek, bikin session kalau berhasil, terus ngatur halaman redirect-nya.
  View (login.php):
    Kenapa? Dia cuma nyediain kotak isian username, password, tombol submit, sama tulisan error kalau gagal login.
6. Ringkasan Singkat
Pola MVC ini kunci utama dalam web dev modern biar urusan data, logika, dan tampilan nggak saling tumpang tindih. Paham cara bikin MVC manual di DPW itu modal penting banget sebelum kita "enaknya aja" pakaikan framework di DPWL nanti.