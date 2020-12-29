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

# membuat controler

Selanjutnya kita buat controller untuk mengatur data yang akan kita jadikan RESTfull API. Ketikkan kode berikut pada terminal atau command prompt untuk membuat

`php artisan make:controller apicontroller`

![image](https://user-images.githubusercontent.com/56968542/103269156-c8332480-49e7-11eb-81c2-1c82d2f4968b.png)

Jika sudah maka akan muncul controller dengan nama api pada direktori app->Http->Controller

![image](https://user-images.githubusercontent.com/56968542/103269220-f1ec4b80-49e7-11eb-89d6-5283240305db.png)

# membuat model
kita sudah membuat table lewat migration dan juga membuat controller ,selanjutnya  akan membuat model. Untuk membuat model kita bisa masukkan kode berikut pada cmd:

`php artisan make:model BarangModel`

![image](https://user-images.githubusercontent.com/56968542/103269533-a1292280-49e8-11eb-8766-28ff4f8994bc.png)

nanti pada directori app akan muncul BarangModel

![image](https://user-images.githubusercontent.com/56968542/103269659-dafa2900-49e8-11eb-83f0-0193eb49c9c4.png)

