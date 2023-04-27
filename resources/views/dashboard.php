<!-- 
Membuat Website Aplikasi Pendataan Barang

Ada 2 Role yaitu
- Admin
Bisa Create, Read, Update, dan Delete


Bikin Database Barang, terdiri dari:
- Kategori Barang, required string
- Nama Barang (minimal 5 huruf, maksimal 80 huruf), required string
- Harga Barang (harus dimulai dengan Rp. dari display-nya (HTML)), required integer
- Jumlah Barang (harus menggunakan angka), required integer
- Foto Barang 

Relationshipnya minimal 1 kategori dengan barang yang diinput

-User
Bisa Melihat semua barang, Mencetak Faktur seperti struk barang

Terdiri dari:
- Kategori Barang, required string
- Nama Barang (minimal 5 huruf, maksimal 80 huruf), required string
- Harga Barang (harus dimulai dengan Rp. dari displaynya (HTML)), required integer
- Jumlah Barang, (harus angka), required integer
- Foto Barang
- Button untuk memasukkan barang ke faktur (keranjang)

Khusus Faktur:
- Buat page khusus untuk cetak faktur
- Generate Nomor Invoice (otomatis)
- Kategori Barang
- Nama barang dan kuantitas (contoh, Bakmi x12 dan jumlah dapat diatur sendiri)
- Alamat Pengiriman,(minimal 10 huruf, maksimal 100 huruf) (input sendiri), required string
- Kode Pos (harus 5 digit angka, pake string aja) (input sendiri), required integer
- Display subtotal harga setiap barang
- Display total harga semua barang (menggunakan rumus matematika)
- Simpan data faktur

Halaman Login dan Registrasi -> buat User
Regis manual lewat database -> buat admin

Data User:
- Nama Lengkap (Minimal  3 huruf, Maksimal 40 huruf), required string
- Email (harus mempunyai @gmail.com), required string
- Password (minimal 6 huruf, maksimal 12 huruf), required string
- Nomor Handphone (harus diawali dengan 08), required string
- Submit Button


Data Admin:
- Nama Lengkap, required string
- ID Admin (1 admin saja dengan nama bebas), required string
- Email (format @gmail.com), required string
- Password (minimal 6 huruf, maksimal 12 huruf), required string
- Nomor HP (harus diawali dengan 08), required string
- Submit Button

** Perlu Validasi
- Kalau user biasa (role User) mencoba masuk ke page CRUD (Admin), maka ia akan di redirect ke halaman view barang user. (Middleware)
- Jika barang sudah habis, muncul validasi “Barang sudah habis, silakan tunggu hingga barang di-restock ulang” atau semacamnya.

DEADLINE 6 APRIL / 27 APRIL

 -->

 <!-- 
PROGRESS:

 Admin
- TAMPILAN LIST BARANG = DONE
- TAMPIILAN TAMBAH BARANG = DONE
  TAPI BELUM BISA NAMBAH DATA
- UPDATE DATA BLM SAMSEK
- DELETE DATA HARUSNYA UDAH BISA

 User 
- TAMPILAN LOGIN DONE
- TAMPILAN REGISTRASI DONE

 BARANG
- MODEL BARANG DONE
- BARANG CONTROLLER DONE
- BARANG REQUEST DONE TPI MASIH ADA DOESNT EXIST




-->