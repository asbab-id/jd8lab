# jd8lab
| jd8lab | Asbab Project	|
| ------------  | ------------ |
|<img src="https://github.com/asbab-id/jd8lab/blob/main/jd8_system/jd8.jpg?raw=true" width="200" />|![f](https://avatars.githubusercontent.com/u/126409850?s=200&v=4)

terinspirasi oleh jupyter notebook.  tools untuk mempresentasikan code secara blok demi blok. **code in document**.

# Story
mulanya kami hanya ingin membuat code playground untuk membantu presentasi saat meeting. kebetulan kami juga memiliki sedikit masalah dalam pendokumentasian code. kemudian karena tidak semua anggota tim kami mengerti code dan semua anggota dianjurkan untuk mengetahui alur dari code, maka jalan tengah kami adalah membuat code menjadi mudah dibaca dengan memberi penjelasan  langkah demi langkah.

maka inilah,  eksperimen **jd8lab**.  dibuat untuk bahagia dan bersenang-senang.

# Install
- Download : https://github.com/asbab-id/jd8lab/archive/refs/heads/main.zip
- Download jd8lab.zip kemudan extract di webserver kalian.

# Fitur
- Create New Note
- Create Blok (Heading, Comment, Code Editor, Output)
- Save
- Render Note to HTML (Experimental)

# Mode
- **Without Security**,  semua orang bisa *Create New Note, Save, Run PHP on server*.  sangat berbahaya jika dijalankan di Hosting. karena siapapun akan dapat merusak komputer anda.
- **Login Mode**, ketika fitur *Create New Note, Save, Run PHP on server* dijalankan, jd8lab akan meminta password. (default password: **jd8lab**). Kalian dapat mengubah Password Defaultnya dalam bentuk **md5**.
- **View Only**, siapapun tidak akan bisa menjalankan fitur *Create New Note, Save, Run PHP on server* meskipun memiliki password. mode ini paling aman jika kalian ingin merilis jd8lab ke publik.

# Setting
location : **jd8lab-system/setting.php**
```php
<?php

$login_setting         = true; // change true or false to setting secure jd8lab
$password_login        = "44d70a0c84908a036043c25d765c4da2"; // md5. default = jd8lab

$view_only             = false; // user cant (Save), (Create New File), (evalPhp)

?>
```
# Versi
 - v1 (codename: **yakuza**) - *04/03/2023*

# How jd8lab Work
jd8lab sangat mudah dimengerti. adapun jika susah dimengerti, itu pasti karena kami menulisnya dengan sangat buruk.

**Back-end**, hanya berisi route, beberapa algoritma, **api** untuk Create, Save dan Eval PHP.

**Front-end**, breakdown  :
- **CSS**, kami tulis dengan simple dan to the point.
- **Js**, kami hanya menuliskan beberapa function dan dipanggil menggunakan Inline Event Handlers. 
- **CodeMirror**, untuk memperindah code editor.
- **Highlight.js**, untuk meng-highlight output.


#### yang jd8lab lakukan dengan code kalian
- jd8lab memodifikasi code yang akan dieksekusi oleh **eval**.
- proses modifikasi code terdapat di function **parse***.
- code yang dimodifikasi antara lain adalah untuk returnFalse, Store ouput ke Variable, dan add NewLine.

# Kontribusi
kami menyadari bahwa code yang kami tulis dalam versi ini sangat buruk. yang dapat kalian lakukan untukk berkontribusi :
- Melaporkan kepada kami dengan mengisi issues.
- Membantu Menerjemahkan
- Membantu Refactory Code
- Memperbaiki UI/UX
- Menyempurnakan Fitur Render
- Menambahkan Fitur untuk bahasa pemrogrgraman baru. seperti **python** dan **nodeJS**.
- Membagikan pengalaman kalian saat menggunakan jd8lab.


# Links
- Asbab Project : https://asbab.id
- Instagram : https://instagram.com/asbab.id
- Facebook : https://facebook.com/cikupdev
- Donasi : https://asbab.id/donasi.html
