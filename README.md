Penjelasan Praktikum OOP PHP
Praktikum ini bertujuan untuk mempelajari konsep Object Oriented Programming (OOP) pada bahasa pemrograman PHP. OOP merupakan metode pemrograman yang menggunakan konsep class dan object untuk mengorganisasi kode agar lebih terstruktur, mudah dikembangkan, dan dapat digunakan kembali.
Pada praktikum ini dibuat sebuah class bernama Mahasiswa yang berfungsi sebagai blueprint atau template untuk merepresentasikan data mahasiswa. Class tersebut memiliki beberapa property dan method yang digunakan untuk mengelola data.
1. Class Mahasiswa
Class Mahasiswa dibuat untuk menyimpan data mahasiswa yang terdiri dari beberapa atribut atau property, yaitu:
•	nim → menyimpan Nomor Induk Mahasiswa
•	nama → menyimpan nama mahasiswa
•	programStudi → menyimpan program studi mahasiswa
Selain property, class ini juga memiliki beberapa method yang digunakan untuk mengelola data mahasiswa, yaitu:
•	setData()
Method ini digunakan untuk mengisi atau menetapkan nilai pada property nim, nama, dan programStudi.
•	getData()
Method ini digunakan untuk mengambil data mahasiswa dan mengembalikannya dalam bentuk array associative.
•	tampilData()
Method ini digunakan untuk menampilkan data mahasiswa secara langsung ke halaman web.
2. Pembuatan Object
Setelah class dibuat, langkah berikutnya adalah membuat object dari class tersebut pada file index.php. Object merupakan instansi dari class yang dapat digunakan untuk menjalankan method yang ada di dalam class.
Contohnya:
•	Object pertama menyimpan data mahasiswa Teknik Informatika
•	Object kedua menyimpan data mahasiswa Sistem Informasi
•	Object ketiga menyimpan data mahasiswa Manajemen Informatika
Setiap object akan memanggil method setData() untuk mengisi data dan getData() atau tampilData() untuk menampilkan data tersebut.
3. Menjalankan Program
Program dijalankan menggunakan server lokal seperti XAMPP dan diakses melalui browser dengan alamat:
http://localhost/oop-php
Ketika halaman dibuka, program akan menampilkan data mahasiswa yang telah dimasukkan melalui object yang dibuat dari class Mahasiswa.
4. Tujuan Praktikum
Melalui praktikum ini, mahasiswa diharapkan dapat:
•	Memahami konsep dasar Object Oriented Programming
•	Membuat class dan object menggunakan PHP
•	Menggunakan property dan method dalam sebuah class
•	Menjalankan program PHP melalui browser menggunakan server lokal
•	Mengelola project dan mengunggah hasil praktikum ke GitHub
