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

lalu pada BarangModel isi dengan kode berikut

![image](https://user-images.githubusercontent.com/56968542/103271756-adfc4500-49ed-11eb-85ab-c7ab63451c09.png)

Model sudah kita buat dan kita bisa memulai untuk membuat RESTfull 💃💃

# 1. GET
Pertama, tambahkan dulu nama model yang sudah dibuat sebelumnya ke controller 

![image](https://user-images.githubusercontent.com/56968542/103270684-1f86c400-49eb-11eb-9c6f-22fe16680de2.png)

lalu kita  buat method function untuk ambil data dari database 

![image](https://user-images.githubusercontent.com/56968542/103271087-d71bd600-49eb-11eb-91e9-07ea4c58056e.png)

setelah membuat controller untuk ambil , selanjutnya kita buat routes untuk mengatur rute urlnya. pergi ke direktori` routes->api.php` dan isi kode berikut

![image](https://user-images.githubusercontent.com/56968542/103271395-bb64ff80-49ec-11eb-8408-90b8f021b4c1.png)

lalu tuliskan `php artisan serve` pada cmd dan buka link dibawah pada browser

`http://127.0.0.1:8000/api/barang`

maka akan muncul data pada tabel barang di database . di tabel barang sebelumnya sudah saya isi data untuk rinso

![image](https://user-images.githubusercontent.com/56968542/103271961-3549b880-49ee-11eb-840d-862588c30c7f.png)

kita cocokan data di databse dan hasilnya sama 

![image](https://user-images.githubusercontent.com/56968542/103272059-72ae4600-49ee-11eb-84f9-c3c1f69e56b8.png)

selanjutnya kita coba menggunakan aplikasi Postman dengan memilih method GET dan pada colomnya tuliskan

`http://127.0.0.1:8000/api/barang`

dan hasilnyapun dapat dilihat pada gambar dibawah 

![image](https://user-images.githubusercontent.com/56968542/103272413-624a9b00-49ef-11eb-890a-c0b12a4e4843.png)

# 2. POST
Kita buat method untuk menambah data kedalam database terlebih dahulu sebelum mencoba method post, pada controller isikan kode berikut

![image](https://user-images.githubusercontent.com/56968542/103275702-54007d00-49f7-11eb-835b-3f15d5782285.png)

lalu pada direktori` routes->api.php` dan isi kode berikut

`Route::post('barang/tambah_barang','apicontroller@insert_data_barang');`

![image](https://user-images.githubusercontent.com/56968542/103275739-68447a00-49f7-11eb-92d6-19865d5a74a0.png)

terakhir kita cek menggunakan aplikasi Postman dengan memilih method POST dan pada colomnya tuliskan

`http://127.0.0.1:8000/api/barang/tambah_barang` 

disini saya mencoba menambahkan barang baru yaitu detol dengan jumlah 11 dan hasilnya suskes

![image](https://user-images.githubusercontent.com/56968542/103276040-1bad6e80-49f8-11eb-8de1-060e6f54b858.png)

kita coba cek pada database dan datanya telah masuk kedalam tabel_barang

![image](https://user-images.githubusercontent.com/56968542/103276148-5a432900-49f8-11eb-8a71-3823236209e8.png)

# 3. PUT
Kita buat method untuk update data kedalam database terlebih dahulu sebelum mencoba method put, pada controller isikan kode berikut dibawahnya fungsi post 

![image](https://user-images.githubusercontent.com/56968542/103276519-61b70200-49f9-11eb-92b2-a6fa6c23c888.png)

lalu pada direktori` routes->api.php` dan isi kode berikut

`Route::put('/barang/update/{kode_barang}','apicontroller@update_data_barang');`

![image](https://user-images.githubusercontent.com/56968542/103276757-046f8080-49fa-11eb-9112-af7c105d3560.png)

terakhir kita cek menggunakan aplikasi Postman dengan memilih method PUT dan pada colomnya tuliskan

`http://127.0.0.1:8000/api/barang/update/1002` 

url diatas pada baris terkahir merupakan kode_barang yang akan kita coba update , disitu untuk kode 1002 merupakan kode barang detol . kita akan coba ganti menjadi pada namaBarang : lifeboy dan jmlBarang : 10 , dan hasilnya suskses

![image](https://user-images.githubusercontent.com/56968542/103277351-641a5b80-49fb-11eb-84b0-6e4e7338fa9d.png)

kita coba cek pada database dan datanya telah terupdate

![image](https://user-images.githubusercontent.com/56968542/103277514-c83d1f80-49fb-11eb-833b-66eb849b83ce.png)

# 4. DELETE

Kita buat method untuk delete data terlebih dahulu sebelum mencoba method delete, pada controller isikan kode berikut dibawahnya fungsi put

![image](https://user-images.githubusercontent.com/56968542/103277898-a85a2b80-49fc-11eb-945c-f90e5ba63c45.png)

lalu pada direktori` routes->api.php` dan isi kode berikut

`Route::delete('/barang/delete/{kode_barang}','apicontroller@delete_data_barang');`

![image](https://user-images.githubusercontent.com/56968542/103278014-0129c400-49fd-11eb-81f9-c2c3159a7ebe.png)

terakhir kita cek menggunakan aplikasi Postman dengan memilih method delete dan pada colomnya tuliskan

`http://127.0.0.1:8000/api/barang/delete/1002` 

url diatas pada baris terkahir merupakan kode_barang yang akan kita coba delete, disitu untuk kode 1002 merupakan kode barang lifeboy. kita akan coba delete , dan hasilnya suskses

![image](https://user-images.githubusercontent.com/56968542/103278127-4d750400-49fd-11eb-978d-f9f46cab13cc.png)

kita coba cek pada database dan datanya telah terdelete

![image](https://user-images.githubusercontent.com/56968542/103278147-5d8ce380-49fd-11eb-96a3-5dfe9ccaf4ca.png)

#  Selesai 





