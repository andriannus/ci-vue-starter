# CodeIgniter - Vue.js Starter
Paket awal untuk membuat Single Page Application (SPA) dengan CodeIgniter dan Vue.js

## Detail
1. CodeIgniter `3.1.9` dilengkapi dengan library `REST_Controller`
2. Vue.js `2.5.2` dengan template Webpack

## Dibutuhkan
1. Node.js dan npm (Paket manajer untuk Node.js)

## Konfigurasi
Setelah melakukan `Clone` atau `Download`, diperlukan konfigurasi, antara lain:

1. Install `node_modules`
```
// ci-vue-starter/client
npm install
```

## Cara Menjalankan
Terdapat 2 cara menjalankannya, yaitu `Development` dan `Production`

1. Development
Pada tahap ini, Vue.js masih dalam tahap pengerjaan. Dapat diartikan proyek tidak bisa dijalankan melalui CodeIgniter. Harus melalui server khusus Vue.js
Untuk menjalankannya seperti di bawah ini (Administrator mungkin dibutuhkan).
```
// ci-vue-starter/client
npm run dev
```

2. Production
Pada tahap ini, Vue.js akan dibuild dan menghasilkan direktori `dist` dan file `application/views/index.php`. Dapat diartikan proyek bisa dijalankan melalui Codeigniter.
Untuk menjalankannya, hanya tinggal mengunjungi:
`http://ci-vue-starter/`

## Lain - lain
1. Semua sintaks di atas dijalankan melalui `CMD` pada Windows atau `terminal` pada Linux/Mac
2. Contoller `Books` adalah contoh.
3. Pada tahap Production, mungkin dibutuhkan penambahan Construction `base` pada Routing di Vue. [Referensi](https://router.vuejs.org/api/#base)

## Kredit
[Vue.js](https://vuejs.org), 
[CodeIgniter REST Server](https://github.com/chriskacerguis/codeigniter-restserver)

## Lisensi
[MIT](https://github.com/andriannus/ci-vue-starter/blob/master/LICENSE)