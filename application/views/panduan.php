<?php
$this->load->view('template/head');
?>

<!--tambahkan custom css disini-->


	<style type="text/css">
.kontainer {
width:100%;    /* penuh layar atau fluid/flexible, gunakan ukuran px untuk fixed width */
margin:0 auto; /* opsional, supaya table berada di tengah jika dalam mode fixed,*/
               /* bertindak seperti <table align="center">*/
}
.baris {
width: 100%    /* harus 100% supaya penuh ke area table */
}
.kolom {
width: 34%; /* pembagian 100% dengan 8 kolom, seharusnya 12.5%, */
              /* diberikan kompensasi seperlunya karena penggunaan margin,*/
              /* padding maupun border nantinya akan mempengaruhi lebar kolom */
float: left;  /* kolom yang lebih duluan akan ditempatkan di kiri, begitu seterusnya */
}
</style>

<!-- iCheck -->
<link href="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/iCheck/flat/blue.css') ?>" rel="stylesheet" type="text/css" />
<!-- Morris chart -->
<link href="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/morris/morris.css') ?>" rel="stylesheet" type="text/css" />
<!-- jvectormap -->
<link href="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/jvectormap/jquery-jvectormap-1.2.2.css') ?>" rel="stylesheet" type="text/css" />
<!-- Date Picker -->
<link href="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/datepicker/datepicker3.css') ?>" rel="stylesheet" type="text/css" />
<!-- Daterange picker -->
<link href="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/daterangepicker/daterangepicker-bs3.css') ?>" rel="stylesheet" type="text/css" />
<!-- bootstrap wysihtml5 - text editor -->
<link href="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') ?>" rel="stylesheet" type="text/css" />


<?php
$this->load->view('template/topbar');
$this->load->view('template/sidebar');
?>


<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        <a href="<?php echo base_url('panduan') ?>"><b>Panduan Pelaksanaan Tes Identifikasi Bakat Sport Search</b></a>
    </h1>

</section>
<!-- Main content -->
<section class="content">
   
    <!-- Main row -->
    <div class="row">
        <!-- Left col -->
        <section class="col-lg-12 ">
            <!-- Custom tabs (Charts with tabs)-->
          

          

            <!-- quick email widget -->
            <div class="box box-info">
                 <div class="modal-body form">                
                
                
                <div class="box-header">
                    <h3 class="box-title"><b>A. Petunjuk Umum</b></h3>
                </div>
                <div class="box-body" style="text-align:justify;">
                 <ol>
                 <li>Seluruh   peralatan   dan   fasilitas   yang   diperlukan   termasuk format pencatatan hasil harus disiapkan. Yakinkan bahwa peralatandan   fasilitas   tersebut   dalam   kondisi   yang   baik   dan   memenuhi persyaratan.</li>
                 <li>Siswa calon peserta tes harus dalam kondisi sehat.</li>
                 <li>Siswa perlu diatur agar tidak mengelompok pada butir butirtes tertentu.</li>
                 <li>Tes   dapat   dilakukan   dengan   urutan   yang   berbeda   dengan urutan   dalam   petunjuk   ini,   kecuali   untuk   butir   tes   lari   bolak   balik multitahap, harus dilakukan pada giliran terakhir.</li>
                 <li>Petugas pelaksana tes hendaknya dilatih sebelumnya agardapat melaksanakan tugas dengan baik.</li>
                 <li>Siswa harus memakai pakaian olahraga yang sesuai (kaos, celana dan sepatu olahraga). Pakaian tersebut hendaknya dipakai selama mengikuti tes  kecuali untuk tes tertentu yang menghendaki lain   (misalnya   sepatu   harus   dilepas   dalam   pengukuran   tinggi   dan berat badan).</li>
                 <li>Siswa   sebaiknya   diberikan   kesempatan   untuk   melakukan pemanasan yang meliputi gerakan aerobik ringan dan peregangan (penguluran) tubuh bagian atas dan bawah.</li>
                 <li>Pelaksanaan   tes   supaya   diupayakan   dalam   kondisi   sama bagi setiap siswa.</li>
				 </ol>	
                </div>
                
                <br>
                
                <div class="box-header">
                    <h3 class="box-title"><b>B. Urutan Pelaksanaan</b></h3>
                </div>
                <div class="box-body" style="text-align:justify;">
                 
                 <p>Ada   10   butir   tes   di   dalam   Sport   Search.   Pengadministrasian seluruh   butir   tes   dalam   suatu   sesi   (session)  berdurasi   90   menit   yang memungkinkan dilaksanakan dengan perbandingan antara testi dan tester sebesar   10:1.   Perlu   mengatur   urutan   butir   tes   dalam   dua  bagian   atau lebih.</p>
                 <p>Apabila   dikelompokkan   dalam   dua   bagian,   maka   sebaiknya menggunakan   lima   tester.  Masing-masing   tester   sebaiknya   menangani satu pos pengetesan dan testi sebaiknya melakukan dari satu pos ke pos lain.</p>
                 <p>Urutan pelaksanaan tes yang disarankan adalah  bagian pertama, meliputi   tinggi   badan,   tinggi   duduk,   berat   badan,   rentangan   lengan   dan lempar-tangkap   bola   tenis;   kemudian  bagian kedua,   meliputi   melempar bola   basket,   loncat   tegak,   lari   kelincahan,   lari   cepat   40   meter,   dan   lari multitahap.   Perlu   diperhatikan   bahwa   lari   multitahap   dilaksanakan   yang paling akhir dalam bagian kedua.</p>
                 <p>Jika   testi   atau   siswa   dilatih   secara   memadai,   maka   testi   dapat membantu   melaksanakan   tes   tersebut.   Testi   senior   dapat   membantu dalam   melaksanakan   pengetesan   sebagai   bagian   dari   studi   pendidikan jasmani yang lebih tinggi.</p>
                </div>
                
                
                <br>
                
                <div class="box-header">
                    <h3 class="box-title"><b>C. Tempat Pelaksanaan</b></h3>
                </div>
                <div class="box-body" style="text-align:justify;">
                 <p>Untuk melaksanakan tes dapat menggunakan gedung olahraga atau bagian ruang dalam aula olahraga. Tempat tersebut harus memiliki permukaan atau lantai yang tidak licin, terutama untuk pelaksanan lari kelincahan. Apabila lantai berdebu, maka waktu pelaksanaan tes ini akan menjadi lebih lambat. Apabila terjadi hal semacam itu, lebih baik tes lari kelincahan dilakukan pada permukaan batu bara atau di halaman. Pelaksanaan lari cepat 40 meter perlu diukur dan dilakukan di tempat terbuka. Lintasan harus lurus, rata dan ditempatkan pada angin yang melintang (cross wind). Apabila menggunakan permukaan berumput, pilihlah permukaan yang kering.</p>
                 </div>
                
                
                
                <br>
                
                <div class="box-header">
                    <h3 class="box-title"><b>D. Pakaian</b></h3>
                </div>
                <div class="box-body" style="text-align:justify;">
                 <p>Testi harus mengenakan pakaian olahraga yang layak (berupa T-shirt dan celana pendek atau skirt) dengan alas kaki sepatu olahraga. Pakaian ini sebaiknya digunakan untuk seluruh tes kecuali apabila ada perkecualian yang disebutkan secara khusus di dalam tata cara tes (misalnya pelepasan sepatu untuk pengukuran tinggi).</p>
                 </div>
                
                
                
                
                <br>
                
                <div class="box-header">
                    <h3 class="box-title"><b>E. Persiapan Pre-Test</b></h3>
                </div>
                <div class="box-body" style="text-align:justify;">
                 <p>Testi harus melakukan pemanasan secara menyeluruh termasuk aktifitas aerobik ringan dan peregangan baik pada tubuh bagian atas maupun bawah sebelum pelaksanaan tes melempar bola basket, loncat tegak, lari kelincahan, lari cepat 40 meter dan lari multitahap.</p>
                 </div>
                
                
                
                
                
                <br>
                
                <div class="box-header">
                    <h3 class="box-title"><b>F. Instruksi-instruksi kepada testi</b></h3>
                </div>
                <div class="box-body" style="text-align:justify;">
                 <p>Testi harus diberi informasi sebelumnya mengenai tugas-tugas dan tujuan tes pengukuran tersebut. Dalam tiap kesempatan, testi harus didorong agar melakukan yang terbaik. Berikan dorongan-dorongan sewaktu testi melaksanakan tes tersebut.</p>
                 </div>
                
                
                
                
                
                
                <br>
                
                <div class="box-header">
                    <h3 class="box-title"><b>G. Percobaan</b></h3>
                </div>
                <div class="box-body" style="text-align:justify;">
                 <p>Testi harus diberi kesempatan melakukan latihan atau percobaan hanya dalam tugas penangkap bola. Percobaan semacam ini sebaiknya dilakukan sehingga testi memahami persyaratan-persyaratan dalam melakukan tes tertentu dan telah mencoba “merasakannya”. Percobaan tidak diperkenankan untuk butir tes lain yang manapun karena akan diberikan dua kali percobaan, kemudian dicatat hasil terbaik dari dua kali pelaksanaan tes tersebut. Testi hendaknya diberi waktu istirahat di antara tes satu dengan yang lain (sebaiknya tester mengetes seluruh testi kemudian mengulanginya untuk melakukan tes yang kedua, untuk memberikan waktu istirahat yang cukup bagi testi).</p>
                 </div>
                
                
                
                
                <br>
                
                <div class="box-header">
                    <h3 class="box-title"><b>H. Petunjuk Pelaksanaan</b></h3>
                </div>
                <div class="box-body" style="text-align:justify;">
                 <p>Para pelaksana atau tester harus menguasai petunjuk pelaksanaan tes sebelum memulai pengukuran. Petunjuk pelaksanaan harus mengikuti apa yang disarankan di dalam Manual Metode Tes keluaran/terbitan The Laboratory Standards Assistance Scheme of the National Sport Research Centre, Australian Commission (Draper, Minikin & Telford; 1991).</p>
                 </div>
                
                
                
                
                </div>
                
            </div>
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            <!-- quick email widget -->
            <div class="box box-info">
                 <div class="modal-body form">                
                
                
                <div class="box-header" style="text-align:center;">
                    <h3 class="box-title"><b>I. TINGGI BADAN</b></h3>
                </div>
                
                
                
                <div class="box-header">
                    <h3 class="box-title"><b>A. Tujuan</b></h3>
                </div>
                <div class="box-body" style="text-align:justify;">
                 <p>Tinggi badan adalah jarak vertikal dari lantai ke ujung kepala (<em>vertex</em>). Tinggi badan ini merupakan faktor penting di dalarn berbagai cabang olahraga. Misalnya, para pemain bola basket dan atlet dayung (rower), biasanya memiliki tubuh yang tinggi, sedangkan pemain senam seringkali badannya kecil.</p>
                 </div>
                
                
                
                <br>
                
                <div class="box-header">
                    <h3 class="box-title"><b>B. Perlengkapan</b></h3>
                </div>
                <div class="box-body" style="text-align:justify;">
                 <ol>
                <li>Stadiometer atau pita pengukur yang dilekatkan dengan kuat secara vertikal di dinding, dengan tingkat ketelitian sampai 0,1 cm.</li>
                <li>Sebaiknya dinding tidak mengandung papan yang mudah mengerut.</li>
                <li>Apabila menggunakan pita pengukur, dipersiapkan pula segi tiga siku-siku.</li>
                <li>Permukaan lantai yang dipergunakan harus rata dan padat.</li>
                </ol>
                 </div>
                
                
                
                
                <br>
                
                <div class="box-header">
                    <h3 class="box-title"><b>C. Prosedur</b></h3>
                </div>
                <div class="box-body" style="text-align:justify;">
                 <ol>
                <li>Testi berdiri tegak tanpa alas kaki, tumit, pantat dan kedua bahu menekan pada stadiometer atau pita pengukur.</li>
                <li>Kedua tumit sejajar dengan kedua lengan yang menggantung bebas di samping badan (dengan telapak tangan menghadap ke arah paha).</li>
                <li>Dengan berhati-hati tester menempatkan kepala testi di belakang telinga agar tegak agar tubuh terentang secara penuh.</li>
                <li>Pandangan testi lurus ke depan sambil menarik napas panjang dan berdiri tegak.</li>
                <li>Upayakan tumit testi tidak terangkat (jinjit).</li>
                <li>Apabila pengukuran menggunakan stadiometer, turunkan <em>platform</em>nya sehingga dapat menyentuh bagian atas kepala. Apabila menggunakan pita pengukur, letakkan segi tiga siku-siku tegak lurus pada pita pengukur di atas kepala, kemudian turunkan ke bawah sehingga menyentuh bagian atas kepala.</li>
                </ol>
                 </div>
                
                
            
                
                
                <br>
                
                <div class="box-header">
                    <h3 class="box-title"><b>D. Penilaian</b></h3>
                </div>
                <div class="box-body" style="text-align:justify;">
                 <p>Catatlah tinggi badan dalam posisi berdiri tersebut dengan ketelitian mendekati 0,1 cm.</p>
                 
                 <p style="text-align:center;">
                 <img style=max-height:400px;" src="<?php echo base_url('assets/Tinggi-badan.jpg') ?>">
                 </p>
                 </div>
                
                
                
                
                </div>
                
            </div>
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            <!-- quick email widget -->
            <div class="box box-info">
                 <div class="modal-body form">                
                
                
                <div class="box-header" style="text-align:center;">
                    <h3 class="box-title"><b>II. TINGGI DUDUK</b></h3>
                </div>
                
                
                
                <div class="box-header">
                    <h3 class="box-title"><b>A. Tujuan</b></h3>
                </div>
                <div class="box-body" style="text-align:justify;">
                 <p>Tinggi duduk adalah jarak vertikal dari alas permukaan tempat testi duduk hingga bagian atas <em>(vertex)</em> kepala. Pengukuran ini meliputi panjang togok, leher, dan sampai panjang kepala. Perbandingan tinggi duduk dengan tinggi badan pada saat berdiri adalah berkaitan dengan penampilan dalam berbagai cabang olahraga. Misalnya, dalam lonpat tinggi, perbandingannya adalah tungkai lebih panjang daripada togok.</p>
                 </div>
                
                
                
                <br>
                
                <div class="box-header">
                    <h3 class="box-title"><b>B. Perlengkapan</b></h3>
                </div>
                <div class="box-body" style="text-align:justify;">
                 <ol>
                <li>Stadiometer atau pita pengukur yang ditempelkan secara vertikal pada dinding, dengan tingkat ketelitian 0,1 cm.</li>
                <li>Dinding yang digunakan tidak mengandung papan yang dapat menggeliat.</li>
                <li>Apabila menggunakan pita pengukur, maka diperlukan juga segi tiga siku-siku.</li>
                <li>Permukaan lantai yang digunakan harus rata.</li>
                <li>Bangku kecil dengan ketinggian (kira-kira 40 cm).</li>
                </ol>
                 </div>
                
                
                
                
                <br>
                
                <div class="box-header">
                    <h3 class="box-title"><b>C. Prosedur</b></h3>
                </div>
                <div class="box-body" style="text-align:justify;">
                <ol>
                <li>Tempatkan bangku kecil tersebut di tengah bagian dasar stadiometer atau pita pengukur.</li>
                <li>Testi duduk di atas bangku dengan kedua lutut ke arah depan dan ditekuk, sedangkan kedua tangan dalam keadaan istirahat di atas kedua paha sejajar dengan permukaan lantai.</li>
                <li>Pantat dan kedua bahu bersandar dengan ringan ke arah stadiometer atau pita pengukur yang ditempatkan secara vertikal pada garis tengah di belakang testi.</li>
                <li>Tester menempatkan kepala testi di belakang telinga agar tubuh testi terentang secara penuh.</li>
                <li>Pandangan testi lurus ke arah depan, sambil menarik napas panjang, dan duduk dalam keadaan tegak.</li>
                <li>Apabila pengukuran menggunakan stadiometer, rendahkan platform-nya sehingga menyentuh bagian atas kepala. Apabila menggunakan pita pengukur, tempatkan segi tiga siku-siku tegak lurus pada pita pengukur di atas kepala, kemudian turunkan ke bawah, sehingga menyentuh bagian atas kepala.</li>
                </ol>
                 </div>
                
                
            
                
                
                <br>
                
                <div class="box-header">
                    <h3 class="box-title"><b>D. Penilaian</b></h3>
                </div>
                <div class="box-body" style="text-align:justify;">
                 <p>Ketinggian ujung kepala dicatat dengan ketelitian mencapai 0,1 cm. Untuk mengukur tinggi duduk, kurangkan ketinggian bangku dengan hasil pengukuran yang telah dicatat.</p>
                <p>Ukuran tinggi duduk (dalam centimeter) secara otomatis diubah ke dalam prosentase yang dibandingkan dengan tinggi badan, apabila hasil tersebut dimasukkan ke dalam program <em>software</em>.</p>
                 
                 
                 <p style="text-align:center;">
                 <img style="width:100%; max-width:300px;" src="<?php echo base_url('assets/image002.jpg') ?>">
                 </p>
                 
                 </div>
                
                
                
                
                </div>
                
            </div>
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            <!-- quick email widget -->
            <div class="box box-info">
                 <div class="modal-body form">                
                
                
                <div class="box-header" style="text-align:center;">
                    <h3 class="box-title"><b>III. BERAT BADAN</b></h3>
                </div>
                
                
                
                <div class="box-header">
                    <h3 class="box-title"><b>A. Tujuan</b></h3>
                </div>
                <div class="box-body" style="text-align:justify;">
                 <p>Berat badan berkaitan erat dengan baberapa cabang olahraga yang membutuhkan tubuh yang ringan, seperti senam, apabila dibandingkan dengan cabang olahraga olahraga yang memerlukan berat badan lebih berat, seperti olahraga lempar dalam atletik.</p>
                 </div>
                
                
                
                <br>
                
                <div class="box-header">
                    <h3 class="box-title"><b>B. Perlengkapan</b></h3>
                </div>
                <div class="box-body" style="text-align:justify;">
                 <ol>
                <li>Alat penimbang dengan ketelitian hingga 0,5 kg, ditempatkan pada permukaan yang rata.</li>
                <li>Skala alat penimbang harus ditera lebih dahulu agar alat tersebut memenuhi standar.</li>
                </ol>
                 </div>
                
                
                
                
                <br>
                
                <div class="box-header">
                    <h3 class="box-title"><b>C. Prosedur</b></h3>
                </div>
                <div class="box-body" style="text-align:justify;">
                <ol>
                <li>Testi tanpa alas kaki dan hanya mengenakan pakaian renang atau pakaian yang ringan (seperti <em>T-shirt</em> dan celana pendek/<em>skirt</em>).</li>
                <li>Alat penimbang disetel pada angka nol.</li>
                <li>Testi berdiri tegak dengan berat tubuh terdistribusi secara merata di bagian tengah alat penimbang.</li>
                </ol>
                 </div>
                
                
            
                
                
                <br>
                
                <div class="box-header">
                    <h3 class="box-title"><b>D. Penilaian</b></h3>
                </div>
                <div class="box-body" style="text-align:justify;">
                 <p>Catatlah berat badan testi hingga ukuran 0,5 kilogram yang terdekat dan jika diperlukan alat penimbang ditera lebih dahulu.</p>
                 
                 <p style="text-align:center;">
                 <img style="width:100%; max-width:300px;" src="<?php echo base_url('assets/berat-badan.jpg') ?>">
                 </p>
                 </div>
                
                
                
                
                </div>
                
            </div>
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            <!-- quick email widget -->
            <div class="box box-info">
                 <div class="modal-body form">                
                
                
                <div class="box-header" style="text-align:center;">
                    <h3 class="box-title"><b>IV. RENTANG LENGAN</b></h3>
                </div>
                
                
                
                <div class="box-header">
                    <h3 class="box-title"><b>A. Tujuan</b></h3>
                </div>
                <div class="box-body" style="text-align:justify;">
                 <p>Rentang lengan adalah jarak horisontal antara ujung jari tengah dengan lengan terentang secara menyamping setinggi bahu. Rentang lengan meliputi lebar kedua bahu dan panjang anggota badan bagian atas (tangan). Rentang lengan berkaitan erat dengan olahraga, seperti dalam olahraga dayung dan melempar, yang rentangan lengan yang lebar, karena sangat bermanfaat bagi penampilannya.</p>
                 </div>
                
                
                
                <br>
                
                <div class="box-header">
                    <h3 class="box-title"><b>B. Perlengkapan</b></h3>
                </div>
                <div class="box-body" style="text-align:justify;">
                <ol>
                <li>Pita pengukur (setidaknya sepanjang 3 meter dengan tingkat ketelitian hingga mencapai 0,1 cm) yang ditempatkan secara horisontal pada dinding kira-kira setinggi 1,5 rneter di atas permukaan tanah. Sudut dinding sebaiknya digunakan sebagai titik nol.</li>
                <li>Penggaris.</li>
                </ol>
                 </div>
                
                
                
                
                <br>
                
                <div class="box-header">
                    <h3 class="box-title"><b>C. Prosedur</b></h3>
                </div>
                <div class="box-body" style="text-align:justify;">
                <ol>
                <li>Testi berdiri tegak dengan punggung menempel pada dinding, kedua kaki merapat; sedangkan tumit, pantat dan kedua bahu menyentuh dinding.</li>
                <li>Kedua lengan terentang menyamping setinggi pahu (secara horisontal) dan kedua telapak tangan menghadap ke depan. Ujung jari tengah (tangan kiri dan kanan) menyatu dengan ujung pita pengukur. Apabila testi memiliki postur tubuh yang tinggi atau pendek, maka lengan testi berada di sebelah atas atau bawah pita pengukur. Oleh karena itu, kedua lengan direntangkan dalam posisi horisontal dan gunakan mistar penggaris untuk menggaris ujung (akhir) dari ujung jari ke atas atau ke bawah hingga memotong pita pengukur.</li>
                <li>Ukurlah jarak antara ujung jari tengah lengan yang lain yang direntangkan ke samping.</li>
                </ol>
                 </div>
                
                
            
                
                
                <br>
                
                <div class="box-header">
                    <h3 class="box-title"><b>D. Penilaian</b></h3>
                </div>
                <div class="box-body" style="text-align:justify;">
                 <p>Catatlah rentang lengan hingga ukuran 0,1 cm terdekat.</p>
                 
                 <p style="text-align:center;">
                 <img style="width:100%; max-width:300px;" src="<?php echo base_url('assets/rentang-lengan.jpg') ?>">
                 </p>
                 </div>
                
                
                
                
                </div>
                
            </div>
            
            
            
            
            
            
            
            
            
            
            
            <!-- quick email widget -->
            <div class="box box-info">
                 <div class="modal-body form">                
                
                
                <div class="box-header" style="text-align:center;">
                    <h3 class="box-title"><b>V. LEMPAR-TANGKAP BOLA TENIS</b></h3>
                </div>
                
                
                
                <div class="box-header">
                    <h3 class="box-title"><b>A. Tujuan</b></h3>
                </div>
                <div class="box-body" style="text-align:justify;">
                 <p>Tes lempar-tangkap bola tenis bertujuan untuk mengukur kemampuan testi melempar bola tenis dengan ayunan dari bawah lengan (<em>underarm</em>) ke arah sasaran dan menangkapnya dengan satu tangan. Koordinasi tangan dan mata berkaitan dengan penampilan dalam berbagai permainan bola yang bersifat beregu yang menuntut atlet untuk dapat membawa, menggiring dan menangkap bola.</p>
                 </div>
                
                
                
                <br>
                
                <div class="box-header">
                    <h3 class="box-title"><b>B. Perlengkapan</b></h3>
                </div>
                <div class="box-body" style="text-align:justify;">
                <ol>
                <li>Bola tenis</li>
                <li>Sarung tangan</li>
                <li>Sasaran bundar (berwarna hitam) berdiameter 30 sentimeter.</li>
                <li>Pita pengukur (sepanjang 3 meter dengan tingkat ketelitian hingga 1 cm).</li>
                <li>Agar lebih efisien tester menyiapkan 2 atau 3 sasaran dan menugaskan di antara testi saling menilai, sedangkan tester mengawasi pelaksanaannya.</li>
                </ol>
                 </div>
                
                
                
                
                <br>
                
                <div class="box-header">
                    <h3 class="box-title"><b>C. Prosedur</b></h3>
                </div>
                <div class="box-body" style="text-align:justify;">
                <ol>
                <li>Sasaran harus ditempatkan pada dinding dengan ujung bawah setingkat dengan tinggi bahu testi.</li>
                <li>Beri tanda dengan sebuah garis di tanah atau lantai berjarak 2,5 meter dari sasaran dengan menggunakan pita pembatas.</li>
                <li>Testi berdiri di belakang garis tersebut.</li>
                <li>Testi melempar bola dengan tangan yang disukai ke arah sasaran kemudian menangkap dengan tangan yang sama. Percobaan diperkenankan sehingga testi memahami tugas tersebut dan telah dapat merasakan (<em>&ldquo;feel for it&rdquo;)</em> gerakan tersebut<em>.</em></li>
                <li>Bola harus dilemparkan dengan <em>underarm</em> dan tidak diperbolehkan memantul di lantai sebelum ditangkap.</li>
                <li>Tiap lemparan dianggap sah, apabila bola mengenai sasaran (bagian bola yang mana saja yang mengenai sasaran dapat diterima) dan testi dapat menangkapnya.</li>
                <li>Tangkapan dianggap sah, apabila bola ditangkap dengan &ldquo;bersih&rdquo; dan tidak mengenai tubuh.</li>
                <li>Testi tidak diperbolehkan berdiri di depan garis batas pada waktu menangkap bola.</li>
                <li>Tiap testi diberi kesempatan 10 kali untuk melempar dan menang- kap dengan tangan yang disukai, kemudian diikuti dengan 10 kali kesempatan untuk melempar dengan tangan yang disukai dan menangkap dengan tangan yang lain.</li>
                <li>Testi yang menggunakan kacamata diperkenankan mengenakan kacamata pada saat melaksanakan tugas ini.</li>
                </ol>
                 </div>
                
                
            
                
                
                <br>
                
                <div class="box-header">
                    <h3 class="box-title"><b>D. Penilaian</b></h3>
                </div>
                <div class="box-body" style="text-align:justify;">
                 <ol>
                <li>Tiap lemparan yang mengenai sasaran dan tertangkap tangan memperoleh satu nilai.</li>
                <li>Untuk dapat memperoleh 1 nilai:</li>
                <ul>
                <li>bola harus dilemparkan dengan <em>underarm</em></li>
                <li>bola harus mengenai sasaran</li>
                <li>bola harus berhasil ditangkap tanpa terhalang badan</li>
                <li>testi tidak beranjak atau berpindah ke depan garis batas untuk menangkap bola.</li>
                </ul>
                <li>Jumlahkan skor hasil 10 lemparan pertama dan 10 lemparan kedua. Skor total yang mungkin dapat dicapai adalah 20.</li>
                </ol>
                
                
                 <p style="text-align:center;">
                 <img style="width:100%; max-width:300px;" src="<?php echo base_url('assets/image003.jpg') ?>">
                 </p>
                 </div>
                
                
                
                
                </div>
                
            </div>
            
            
            
            
            
            
            
            
            
            
            
            
            
            <!-- quick email widget -->
            <div class="box box-info">
                 <div class="modal-body form">                
                
                
                <div class="box-header" style="text-align:center;">
                    <h3 class="box-title"><b>VI. LEMPAR BOLA BASKET</b></h3>
                </div>
                
                
                
                <div class="box-header">
                    <h3 class="box-title"><b>A. Tujuan</b></h3>
                </div>
                <div class="box-body" style="text-align:justify;">
                 <p>Tes melempar bola basket dirancang untuk mengukur kekuatan tubuh bagian atas. Olahraga yang membutuhkan kekuatan yang tinggi pada tubuh bagian atas, antara lain gulat dan angkat besi.</p>
                 </div>
                
                
                
                <br>
                
                <div class="box-header">
                    <h3 class="box-title"><b>B. Perlengkapan</b></h3>
                </div>
                <div class="box-body" style="text-align:justify;">
                <ol>
                <li>Bola basket ukuran 7</li>
                <li>Pita pengukur sepanjang 15 meter dengan tingkat ketelitian 5 cm.</li>
                </ol>
                 </div>
                
                
                
                
                <br>
                
                <div class="box-header">
                    <h3 class="box-title"><b>C. Prosedur</b></h3>
                </div>
                <div class="box-body" style="text-align:justify;">
                <ol>
                <li>Testi duduk dengan pantat, punggung dan kepala bersandar pada dinding. Kaki diistirahatkan dalam keadaan menjulur secara horisontal ke lantai di depan tubuh.</li>
                <li>Testi menggunakan kedua tangan yang diangkat di atas dada untuk mendorong bola secara horisontal ke arah depan sejauh mungkin. Tidak diperbolehkan melempar melampaui tinggi lengan atau melebihi tinggi bahu.</li>
                <li>Upayakan agar kepala, bahu dan pantat tetap menempel pada dinding, dan bola dilempar hanya dengan menggunakan otot-otot bahu dan lengan.</li>
                <li>Berikan dua kali kesempatan kepada testi untuk melakukan lemparan.</li>
                </ol>
                 </div>
                
                
            
                
                
                <br>
                
                <div class="box-header">
                    <h3 class="box-title"><b>D. Penilaian</b></h3>
                </div>
                <div class="box-body" style="text-align:justify;">
                 <p>
                Catatlah jarak terjauh yang dapat dilemparkan oleh tiap testi dengan tingkat ketelitian sekitar 5 cm (ukurlah dari dasar bola pada saat terjadi kontak dengan tanah pada pantulan pertama).     
                 </p>
                 
                 <p style="text-align:center;">
                 <img style="width:100%; max-width:300px;" src="<?php echo base_url('assets/image004.jpg') ?>">
                 </p>
                 </div>
                
                
                
                
                </div>
                
            </div>
            
            
            
            
            
            
            
            
            
            
            
            
            
            <!-- quick email widget -->
            <div class="box box-info">
                 <div class="modal-body form">                
                
                
                <div class="box-header" style="text-align:center;">
                    <h3 class="box-title"><b>VII. LONCAT TEGAK</b></h3>
                </div>
                
                
                
                <div class="box-header">
                    <h3 class="box-title"><b>A. Tujuan</b></h3>
                </div>
                <div class="box-body" style="text-align:justify;">
                 <p>Tes loncat tegak adalah mengukur kemampuan untuk meloncat dalam arah vertikal. Daya ledak kedua kaki berkaitan dengan penampilan dalam olahraga, misalnya bola basket, bola voli dan sepakbola Australia <em>(Australian football).</em></p>
                 </div>
                
                
                
                <br>
                
                <div class="box-header">
                    <h3 class="box-title"><b>B. Perlengkapan</b></h3>
                </div>
                <div class="box-body" style="text-align:justify;">
                <ol>
                <li>Kapur bubuk (bubuk bedak atau tepung).</li>
                <li>Papan yang ditempel pada dinding dengan ketinggian dari 150 hingga 350 cm (tingkat ketelitian hingga sebesar 1 cm).</li>
                </ol>
                 </div>
                
                
                
                
                <br>
                
                <div class="box-header">
                    <h3 class="box-title"><b>C. Prosedur</b></h3>
                </div>
                <div class="box-body" style="text-align:justify;">
                <ol>
                <li>Testi memasukkan ujung jari yang digunakan untuk menjangkau ke dalam kapur bubuk.</li>
                <li>Testi berdiri dengan tangan yang digunakan meraih di dekat papan dan meraih ke atas dengan lengan sebelah dalam, kemudian menyentuh papan dengan ujung jari tengah untuk menempelkan tanda pada titik terjauh yang dapat dicapai.</li>
                <li>Kedua telapak kaki harus menginjak rata dengan lantai, sedangkan lengan/tangan terentang sejauh mungkin.</li>
                <li>Catatlah posisi tanda hingga 1 cm yang terdekat (mencapai ketinggian).</li>
                <li>Kedua lengan testi harus tetap berada di dalam posisi yang sama (tangan/lengan yang disukai diangkat dalam posisi vertikal dan lengan yang lain bergantung di samping badan) pada waktu testi mengambil posisi berjongkok. Testi dapat memilih kedalaman/ kerendahan tertentu dari posisi jongkok dan diperbolehkan melambung apabila menghendaki. Testi tidak diperkenankan mengayunkan lengan untuk membantu mementum loncatan.</li>
                <li>Testi kemudian meloncat ke atas untuk menyentuh dinding pada titik ketinggian yang mampu dicapai dengan lengan sebelah dalam terentang ke arah luar.</li>
                <li>Testi diperbolehkan melakukan loncatan sebanyak dua kali.</li>
                </ol>
                 </div>
                
                
            
                
                
                <br>
                
                <div class="box-header">
                    <h3 class="box-title"><b>D. Penilaian</b></h3>
                </div>
                <div class="box-body" style="text-align:justify;">
                 <ol>
                <li>Catatlah ketinggian yang dapat dicapai pada sentimeter yang terdekat.</li>
                <li>Catatlah ketinggian yang dapat dicapai (hingga hitungan sentimeter terdekat) pada loncatan yang paling tinggi.</li>
                <li>Kurangkan tinggi jangkauan dengan tinggi loncatan dalam hitungan centimeter.</li>
                </ol>
                 
                 <p style="text-align:center;">
                 <img style="width:100%; max-width:300px;" src="<?php echo base_url('assets/tes-vertikal jump power.jpg') ?>">
                 </p>
                 </div>
                
                
                
                
                </div>
                
            </div>
            
            
            
            
            
            
            
            
            
            
            
            
            
            <!-- quick email widget -->
            <div class="box box-info">
                 <div class="modal-body form">                
                
                
                <div class="box-header" style="text-align:center;">
                    <h3 class="box-title"><b>VIII. LARI KELINCAHAN</b></h3>
                </div>
                
                
                
                <div class="box-header">
                    <h3 class="box-title"><b>A. Tujuan</b></h3>
                </div>
                <div class="box-body" style="text-align:justify;">
                 <p>Kelincahan (kemampuan untuk mengubah arah tubuh secara cepat sambil bergerak) merupakan komponen penting di dalam kebanyakan olahraga beregu, misalnya <em>squash</em> dan tenis.</p>
                 </div>
                
                
                
                <br>
                
                <div class="box-header">
                    <h3 class="box-title"><b>B. Peralatan</b></h3>
                </div>
                <div class="box-body" style="text-align:justify;">
                <ol>
                <li><em>Stopwatch</em></li>
                <li>Dua buah garis paralel (sepanjang 1,2 meter) yang ditandai di atas tanah, jarak antara garis 5 meter (diukur di antara kedua ujung sebelah dalam dari masing-masing garis).</li>
                <li>Kerucut pembatas lintasan atau patok 4 buah</li>
                <li>Permukaan lantai harus datar, rata, dan tidak licin. Seringkali lantai gedung olahraga berdebu dan licin. Apabila lantai berdebu, lebih baik tes ini dilaksanakan di luar gedung pada permukaan beton atau permukaan yang berlantai batubara muda (bitumen).</li>
                </ol>
                 </div>
                
                
                
                
                <br>
                
                <div class="box-header">
                    <h3 class="box-title"><b>C. Prosedur</b></h3>
                </div>
                <div class="box-body" style="text-align:justify;">
                <ol>
                <li>Testi melakukan <em>start</em> dari belakang garis dengan kaki depan menginjak garis.</li>
                <li>Pada saat terdengar aba-aba &ldquo;Ya&rdquo; testi lari menuju ke depan secepat mungkin ke arah garis yang lain, berputar dan lari kembali menuju ke garis <em>start</em></li>
                <li>Tiap kali lari bolak-balik dihitung satu siklus. Testi melakukan lima siklus.</li>
                <li>Testi harus meyentuhkan kedua telapak kaki di belakang garis dan di antara kedua kerucut pembatas, kecuali pada akhir siklus kelima, ketika testi melampaui garis <em>finish</em> tanpa harus memperlambat lari.</li>
                <li>Jalankan <em>stopwatch</em> pada saat terdengar aba-aba &ldquo;Ya&rdquo; dan hentikan putaran jarumnya ketika dada pelari melewati di atas garis</li>
                <li>Berikan kesempatan testi melakukan dua kali.</li>
                <li>Apabila testi ada yang tergelincir jangan dicatat hasilnya, dan ulangi lagi.</li>
                </ol>
                 </div>
                
                
            
                
                
                <br>
                
                <div class="box-header">
                    <h3 class="box-title"><b>D. Penilaian</b></h3>
                </div>
                <div class="box-body" style="text-align:justify;">
                 <p>Catatlah waktu yang diperlukan hingga pada hitungan 0,1 detik yang terdekat pada saat pelaksanaan yang tercepat.</p>
                 
                 <p style="text-align:center;">
                 <img style="width:100%; max-width:300px;" src="<?php echo base_url('assets/tes-kelincahan.jpg') ?>">
                 </p>
                 </div>
                
                
                
                
                </div>
                
            </div>
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            <!-- quick email widget -->
            <div class="box box-info">
                 <div class="modal-body form">                
                
                
                <div class="box-header" style="text-align:center;">
                    <h3 class="box-title"><b>IX. LARI CEPAT 40 METER</b></h3>
                </div>
                
                
                
                <div class="box-header">
                    <h3 class="box-title"><b>A. Tujuan</b></h3>
                </div>
                <div class="box-body" style="text-align:justify;">
                 <p>Kemampuan lari dengan cepat dari posisi tak bergerak dibutuhkan di dalam permainan beregu, misalnya bola keranjang dan permainan bola kriket. Kecepatan juga penting di dalam beberapa cabang olahraga yang membutuhkan ledakan aktivitas yang pendek dengan intensitas tinggi.</p>
                 </div>
                
                
                
                <br>
                
                <div class="box-header">
                    <h3 class="box-title"><b>B. Peralatan</b></h3>
                </div>
                <div class="box-body" style="text-align:justify;">
                <ol>
                <li><em>Stopwatch</em></li>
                <li>Kerucut Pembatas atau patok 10 buah</li>
                <li>Lintasan lari 40 meter yang lurus, datar dan ditempatkan pada <em>cross</em> Apabila permukaan yang digunakan berumput, rumput harus dalam keadaan kering.</li>
                </ol>
                 </div>
                
                
                
                
                <br>
                
                <div class="box-header">
                    <h3 class="box-title"><b>C. Prosedur</b></h3>
                </div>
                <div class="box-body" style="text-align:justify;">
                <ol>
                <li>Berilah tanda lintasan lari sepanjang 40 meter dengan kerucut pembatas ditempatkan pada tiap interval 10 meter.</li>
                <li>Tiap testi melakukan <em>start</em> dengan posisi berdiri, dan kaki depan tepat berada di atas garis.</li>
                <li>Pamberi tanda waktu berdiri pada garis <em>finish</em>, meneriakkan aba-aba &ldquo;siap&rdquo; dan mengayunkan bendera untuk memberi tanda <em>start</em> pada testi. Pada saat lengan diayunkan, pemberi tanda waktu secara bersamaan mulai menghidupkan <em>stopwatch</em> yang dipegang.</li>
                <li>Hentikan <em>stopwatch</em> pada saat dada testi telah melewati garis finish.</li>
                <li>Tekankan kepada testi agar lari secepat mungkin.</li>
                <li>Testi diperbolehkan melakukan dua kali.</li>
                </ol>
                 </div>
                
                
            
                
                
                <br>
                
                <div class="box-header">
                    <h3 class="box-title"><b>D. Penilaian</b></h3>
                </div>
                <div class="box-body" style="text-align:justify;">
                 <p>Catatlah waktu yang diperlukan pada pelaksanaan yang paling cepat dengan ketelitian 0,1 detik yang terdekat.</p>
                 
                 <p style="text-align:center;">
                 <img style="width:100%; max-width:300px;" src="<?php echo base_url('assets/tes - kecepatan (Lari 40m).jpg') ?>">
                 </p>
                 </div>
                
                
                
                
                </div>
                
            </div>
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            <!-- quick email widget -->
            <div class="box box-info">
                 <div class="modal-body form">                
                
                
                <div class="box-header" style="text-align:center;">
                    <h3 class="box-title"><b>X. LARI MULTITAHAP</b></h3>
                </div>
                
                
                
                <div class="box-header">
                    <h3 class="box-title"><b>A. Tujuan</b></h3>
                </div>
                <div class="box-body" style="text-align:justify;">
                 <p>Kesegaran aerobik merupakan komponen penting dari berbagai cabang olahraga berbasiskan daya tahan (<em>endurance</em>), misalnya olahraga renang jarak jauh, bersepeda dan lari jarak jauh. Kebanyakan permainan beregu juga mepersyaratkan kesegaran aerobik karena para pemainnya harus senantiasa bergerak selama jangka waktu yang lama. Lari Bolak-Balik (<em>Shuttle Run</em>) atau Lari Multitahap (<em>Multistage Fitness Test</em>) digunakan untuk menilai kesegaran aerobik.</p>
                 </div>
                
                
                
                <br>
                
                <div class="box-header">
                    <h3 class="box-title"><b>B. Perlengkapan</b></h3>
                </div>
                <div class="box-body" style="text-align:justify;">
                <ol>
                <li>Pita <em>cadence</em> untuk lari bolak balik</li>
                <li>Lintasan lari permukaan yang datar, rata dan tidak licin.</li>
                <li>Mesin pemutar kaset (<em>Tape recorder</em>)</li>
                <li><em>Stopwatch</em></li>
                <li>Kerucut pembatas atau patok 4</li>
                <li>Formulir</li>
                </ol>
                 </div>
                
                
                
                
                <br>
                
                <div class="box-header">
                    <h3 class="box-title"><b>C. Prosedur</b></h3>
                </div>
                <div class="box-body" style="text-align:justify;">
                <ol>
<li>Ceklah kecepatan mesin pemutar kaset dengan menggunakan periode kalibrasi satu menit dan sesuaikan jarak lari bilamana perlu (telah dijelaskan di dalam pita rekaman dan di dalam manual pitanya). &ldquo;Menghidupkan tape recorder, pada bagian permulaan pita kaset tersebut, jarak antar sinyal tut&rdquo; menandai suatu interval 1 menit yang Telah terukur secara akurat. Pergunakan saat permulaan ini untuk memastikan bahwa pita dalam kaset belum &ldquo;mulur&rdquo; dan juga kecepatan mesin pemutar tape recorder bekerja dengan benar. Ketelitian 0,5 detik ke arah yang mananpun. Apabila waktunya berselisih lebih besar 0,5 detik maka jarak tempat berlari perlu diubah.<br /><br />Waktu standar adalah 60 detik. Dengan menggunakan sebuah stopwatch, periksalah apakah durasi pereode waktu standar benar-benar 60 detik. Apabila durasi tersebut lebih pendek atau lebih lama dari 60 detik, koreksilah jarak lintasan lari sejauh (lihat tabel: &hellip; meter) berdasarkan tabel berikut:<br /><br />
<table border="1">
<tbody style="text-align:center;">
<tr>
<td style="max-width:200px; width:50%;">
<p><strong>Periode Waktu Standar (Detik)</strong></p>
</td>
<td style="max-width:200px; width:50%;">
<p><strong>Jarak Lari (meter)</strong></p>
</td>
</tr>
<tr>
<td>
<p>55</p>
</td>
<td>
<p>18,333</p>
</td>
</tr>
<tr>
<td>
<p>55,5</p>
</td>
<td>
<p>18,5</p>
</td>
</tr>
<tr>
<td>
<p>56</p>
</td>
<td>
<p>18,666</p>
</td>
</tr>
<tr>
<td>
<p>56,5</p>
</td>
<td>
<p>18,833</p>
</td>
</tr>
<tr>
<td>
<p>57</p>
</td>
<td>
<p>19</p>
</td>
</tr>
<tr>
<td>
<p>57,5</p>
</td>
<td>
<p>19,166</p>
</td>
</tr>
<tr>
<td>
<p>58</p>
</td>
<td>
<p>19,333</p>
</td>
</tr>
<tr>
<td>
<p>58,5</p>
</td>
<td>
<p>19,5</p>
</td>
</tr>
<tr>
<td>
<p>59</p>
</td>
<td>
<p>19,666</p>
</td>
</tr>
<tr>
<td>
<p>59,5</p>
</td>
<td>
<p>19,833</p>
</td>
</tr>
<tr>
<td>
<p>60</p>
</td>
<td>
<p>20</p>
</td>
</tr>
<tr>
<td>
<p>60,5</p>
</td>
<td>
<p>20,166</p>
</td>
</tr>
<tr>
<td>
<p>61</p>
</td>
<td>
<p>20,333</p>
</td>
</tr>
<tr>
<td>
<p>61,5</p>
</td>
<td>
<p>20,5</p>
</td>
</tr>
<tr>
<td>
<p>62</p>
</td>
<td>
<p>20,666</p>
</td>
</tr>
<tr>
<td>
<p>62,5</p>
</td>
<td>
<p>20,833</p>
</td>
</tr>
<tr>
<td>
<p>63</p>
</td>
<td>
<p>21</p>
</td>
</tr>
<tr>
<td>
<p>63,5</p>
</td>
<td>
<p>21,166</p>
</td>
</tr>
<tr>
<td>
<p>64</p>
</td>
<td>
<p>21,333</p>
</td>
</tr>
<tr>
<td>
<p>64,5</p>
</td>
<td>
<p>21,5</p>
</td>
</tr>
</tbody>
</table>
<br /><br /></li>
<li>Ukurlah jarak <strong>sesuai tabel</strong> dan berilah tanda dengan pita dan pembatas jarak.

                 <p style="text-align:center;"><br>
                 <img style="width:100%; max-width:300px;" src="<?php echo base_url('assets/image006.jpg') ?>">
                 </p>
</li>
<li>Jalankan pita cadencenya.</li>
<li>Instruksikan kepada testi untuk lari ke arah ujung/akhir yang berlawanan dan ssentuhkan satu kaki dibelakang garis batas pada saat terdengar bunyi &ldquo;tuut&rdquo;. Apabila testi telah sampai sebelumbunyi &ldquo;tuut&rdquo;, testi harus bertumpu pada titik putar, menanti tanda bunyi, kemudian lari ke arah garis yang berlawanan agar supaya dapat mencapai tepat pada saat tanda berikutnya berbunyi.</li>
<li>Pada akhir dari tiap menit interval waktu di antara dua bunyi &ldquo;tuut&rdquo; makin pendek, oleh karena itu, kecepatan lari makin bertambah cepat.</li>
<li>Testi harus dapat mencapai garis ujung pada waktu yang ditentukan dan tidak terlambat. Tekankan kepada testi agar berputar dan lari kembali, bukanya lari membuat belokan melengkung, karena akan memakan lebih banyak waktu.</li>
<li>Tiap testi terus berlari selama mungkin sehingga testi tidak dapat lagi mengejar tanda bunyi &ldquo;tuut&rdquo; dari pita rekaman. Kriteria untuk menghentikan testi adalah apabila testi tertinggal tanda bunyi &ldquo;tuut&rdquo; dua kali lebih dari dua langkah di belakang garis ujung.</li>
</ol>
                 </div>
                
                
            
                
                
                <br>
                
                <div class="box-header">
                    <h3 class="box-title"><b>D. Penilaian</b></h3>
                </div>
                <div class="box-body" style="text-align:justify;">
                 <p>Catatlah <em>level</em> dan <em>shuttle</em> terakhir yang dapat dilakukan atau diselesaikan testi.</p>
                 </div>
                
                
                
                
                </div>
                
            </div>
            
            
            
            
            
            
            
            
  
            
            
            
            
            
            
            
            
            
            
            <!-- quick email widget -->
            <div class="box box-info">
                 <div class="modal-body form">                
                
                
                <div class="box-header" style="text-align:center;">
                    <h3 class="box-title"><b>LAMPIRAN PERALATAN/PERLENGKAPAN</b></h3>
                </div>
                
                
                
                <div class="box-body" style="text-align:justify;">
                <ol>
<li><strong> TINGGI BADAN<br /></strong>Stadiometer atau pita pengukur dengan keakuratan sampai 0,1 cm.</li>
</ol>
<p>&nbsp;</p>
<ol start="2">
<li><strong> TINGGI DUDUK<br /></strong>Stadiometer atau pita pengukur dengan keakuratan sampai 0,1 cm. Bangku kecil dengan ketinggian 40 cm.</li>
</ol>
<p>&nbsp;</p>
<ol start="3">
<li><strong> BERAT BADAN<br /></strong>Timbangan dengan keakuratan sampai 0,5 kg.</li>
</ol>
<p>&nbsp;</p>
<ol start="4">
<li><strong> RENTANG LENGAN<br /></strong>Pita pengukur (minimal 2 meter dengan keakuratan sampai 1 cm.) Penggaris.</li>
</ol>
<p>&nbsp;</p>
<ol start="5">
<li><strong>LEMPAR-TANGKAP BOLA TENIS<br /></strong>Bola tenis<strong><br /></strong>Sarung tangan<strong><br /></strong>Pita pengukur (3 meter dengan keakuratan sampai 1 cm).
<ul>
<li>Sasaran bundar dengan diameter 30 cm. Alternatif lain, dinding dapat ditandai dengan sasaran permanen pada berbagai ketinggian.</li>
</ul>
</li>
</ol>
<p><strong>&nbsp;</strong></p>
<ol start="6">
<li><strong>LEMPAR BOLA BASKET<br /></strong>Bola basket ukuran 7.<br />Pita pengukur (minimal 15 meter dengan keakuratan sampai 5 cm.)</li>
</ol>
<p>&nbsp;</p>
<ol start="7">
<li><strong>LONCAT TEGAK</strong><strong><br /></strong>Bubuk kapur<strong><br /></strong>Dinding/papan dengan ketinggian 150 - 350 cm.</li>
</ol>
<p><strong>&nbsp;</strong></p>
<ol start="8">
<li><strong>LARI KELINCAHAN<br /></strong><em>Stopwatch<br /></em>Pita pengukur
<ul>
<li>Garis paralel 2 buah (kurang lebih 1,2 m.) Patok 4 buah</li>
</ul>
</li>
</ol>
<p>&nbsp;</p>
<ol start="9">
<li><strong>LARI CEPAT 40 METER</strong><strong><br /></strong><em>Stopwatch</em><strong><br /></strong>Patok 10 buah<strong><br /></strong>Lintasan lari sepanjang 40 meter</li>
</ol>
<p><strong>&nbsp;</strong></p>
<ol start="10">
<li><strong>LARI MULTITAHAP<br /></strong>Radio kaset Kaset<br />Lintasan lari sepanjang 20 meter<br /><em>Stopwatch<br /></em>Patok<br />Formulir</li>
</ol> 
                 
                 </div>
                
                
                
                
                </div>
                
            </div>
            
            
            
            
                      
            
            
            
            
            
            
            
            
            

        </section><!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        
    </div><!-- /.row (main row) -->
</section><!-- /.content -->
 
 
<?php
$this->load->view('template/js');
?>

<!--tambahkan custom js disini-->




<!-- jQuery UI 1.11.2 -->
<script src="<?php echo base_url('assets/js/jquery-ui.min.js') ?>" type="text/javascript"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Morris.js charts -->
<script src="<?php echo base_url('assets/js/raphael-min.js') ?>"></script>
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/morris/morris.min.js') ?>" type="text/javascript"></script>
<!-- Sparkline -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/sparkline/jquery.sparkline.min.js') ?>" type="text/javascript"></script>
<!-- jvectormap -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') ?>" type="text/javascript"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/knob/jquery.knob.js') ?>" type="text/javascript"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/daterangepicker/daterangepicker.js') ?>" type="text/javascript"></script>
<!-- datepicker -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/datepicker/bootstrap-datepicker.js') ?>" type="text/javascript"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') ?>" type="text/javascript"></script>
<!-- iCheck -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/iCheck/icheck.min.js') ?>" type="text/javascript"></script>

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/dist/js/pages/dashboard.js') ?>" type="text/javascript"></script>

<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/dist/js/demo.js') ?>" type="text/javascript"></script>

<?php
$this->load->view('template/foot');
?>