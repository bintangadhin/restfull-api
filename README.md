# Persiapan tools
Sebelum memulai pastikan untuk menyiapkan :


1.Xampp

2.Composser 

3.Laravel 

4.Editor

5.Postman 

# Membuat projek laravel
pastikan composer sudah terinstal terlebih dahulu , jika sudah  buat projek laravel baru dengan cara buka CMD > masuk ke direktori htdocs pada xampp lalu masukan perintah dibawah ini dan tunggu sampai proses instalasi selesai

`composer create-project –-prefer-dist Laravel/Laravel restfull-api-laravel`
![image](https://user-images.githubusercontent.com/56968542/103202366-c94f4d80-4924-11eb-8af7-7ac95962665d.png)

# Database
buat database dengan nama `db_restfull_api` pada mysql . jika sudah buka file `.env` pada folder `restfull-api-laravel` di `xampp\htdocs\restfull-api-laravel`ubah pada bagian  DB_DATABASE = ‘db_restfull_api’

![image](https://user-images.githubusercontent.com/56968542/103202817-07993c80-4926-11eb-8995-fa206cc2469a.png)

# membuat file migrasi
 buat file migrasi dan berinama create_table_barang , lalu ketikan kode berikut pada cmd

`php artisan make:migration create_table_barang`

![image](https://user-images.githubusercontent.com/56968542/103203040-a756ca80-4926-11eb-8572-69435a22bb9d.png)

jika sudah buka folder `database->migration->`dan buka file migration yang kita buat tadi yaitu `create_table_barang` lalu isi dengan code berikut

![image](https://user-images.githubusercontent.com/56968542/103203184-fa308200-4926-11eb-9855-1cd4a2a6a7a3.png)

Jika sudah simpan dan lanjut ketikkan perintah `php artisan migrate`  pada cmd sehingga database yang kalian buat berisi table table sesuai dengan file migrasi yang ada

![image](https://user-images.githubusercontent.com/56968542/103203340-4085e100-4927-11eb-917b-4cb877a43a68.png)

![image](https://user-images.githubusercontent.com/56968542/103203819-619b0180-4928-11eb-96b2-466346de1ea5.png)
