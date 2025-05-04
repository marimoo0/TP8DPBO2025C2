# TP 8 DPBO 2025

## -- Janji --

Saya Khana Yusdiana NIM 2100991 mengerjakan soal TP 8 dalam mata kuliah Desain dan Pemrograman Berorientasi Objek untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin.

## -- Desain Program --

![1](https://github.com/marimoo0/TP8DPBO2025C2/blob/50ff96f4b2fadfa86887469d71ac4543a688529e/Desain%20Program.jpg)

Struktur Basis Data :

- Membuat tabel students (mahasiswa) seperti pada awalnya
- Menambahkan dua tabel baru: courses (mata kuliah) dan enrollments (pengambilan mata kuliah) dengan relasi yang sesuai
- Tabel enrollments menghubungkan mahasiswa dan mata kuliah, membentuk relasi many-to-many

Arsitektur MVC :

- Model: Membuat kelas model untuk Students, Courses, dan Enrollments
- View: Mengorganisasi tampilan berdasarkan entitas dan membuat template umum
- Controller: Membuat kelas controller untuk menangani permintaan pengguna

Fitur Aplikasi :

- Operasi CRUD lengkap untuk ketiga entitas
- Antarmuka pengguna yang ramah dengan tampilan menggunakan Bootstrap
- Validasi dan penanganan error yang baik
- Routing URL yang rapi melalui file index.php utama

Alur Aplikasi Student Management System

Halaman Mahasiswa (Students) :

- Tampil data seluruh mahasiswa dalam bentuk tabel: ID, Nama, NIM, No HP, Tanggal Masuk.
- Tombol Edit memungkinkan pengguna mengubah data mahasiswa.
- Tombol Delete akan menghapus data mahasiswa.
- Tombol Add New Student membuka form untuk menambahkan mahasiswa baru.

Halaman Mata Kuliah (Courses) :

- Menampilkan data seluruh mata kuliah yang tersedia: Kode, Nama Mata Kuliah, SKS.
- Tombol Edit dan Delete berfungsi untuk memperbarui atau menghapus data.
- Tombol Add New Course membuka form input untuk menambah mata kuliah baru.

Halaman Enrollments :

- Menampilkan data pengambilan mata kuliah oleh mahasiswa: Nama Mahasiswa, Mata Kuliah, Semester, dan Nilai.
- Tombol Edit dan Delete berfungsi seperti fitur lainnya.
- Tombol Add New Enrollment membuka form untuk menghubungkan mahasiswa dengan mata kuliah.

## -- Dokumentasi saat Program Dijalankan --

### Halaman Mahasiswa

![1](https://github.com/marimoo0/TP8DPBO2025C2/blob/2385e4884775403512b2b6ffe67a75be8d50eed5/SS/Screenshot_1.png)

### Halaman Mata Kuliah

![1](https://github.com/marimoo0/TP8DPBO2025C2/blob/2385e4884775403512b2b6ffe67a75be8d50eed5/SS/Screenshot_2.png)

### Halaman Enrollments

![1](https://github.com/marimoo0/TP8DPBO2025C2/blob/2385e4884775403512b2b6ffe67a75be8d50eed5/SS/Screenshot_3.png)

### Halaman New Student

![1](https://github.com/marimoo0/TP8DPBO2025C2/blob/2385e4884775403512b2b6ffe67a75be8d50eed5/SS/Screenshot_4.png)

### Halaman New Courses

![1](https://github.com/marimoo0/TP8DPBO2025C2/blob/2385e4884775403512b2b6ffe67a75be8d50eed5/SS/Screenshot_5.png)

### Halaman New Enrollments

![1](https://github.com/marimoo0/TP8DPBO2025C2/blob/2385e4884775403512b2b6ffe67a75be8d50eed5/SS/Screenshot_6.png)
