<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <style>
    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
    }
    th, td, tr {
        padding: 5px;
        text-align: center;    
    }
    </style>

        <script language="javascript" type="text/javascript">
    var base_url = "http://bpptpm.kotabogor.go.id/";
    function setSiteURL() {
        window.site = base_url;
    }
    setSiteURL();
</script><script type="text/javascript" src="http://bpptpm.kotabogor.go.id/assets/js/jquery-1.7.1.js"></script>
            <link rel="stylesheet" type="text/css" href="http://bpptpm.kotabogor.go.id/assets/css/default/superfish.css" media="screen">
            <script type="text/javascript" src="http://bpptpm.kotabogor.go.id/assets/js/superfish/hoverIntent.js"></script>
            <script type="text/javascript" src="http://bpptpm.kotabogor.go.id/assets/js/superfish/superfish.js"></script>
            <script type="text/javascript" src="http://bpptpm.kotabogor.go.id/assets/js/jqui/ui/jquery.ui.core.js"></script>
            <script type="text/javascript" src="http://bpptpm.kotabogor.go.id/assets/js/jqui/ui/jquery.ui.widget.js"></script>
            <script type="text/javascript" src="http://bpptpm.kotabogor.go.id/assets/js/jqui/ui/jquery.ui.datepicker.js"></script>
            <script type="text/javascript" src="http://bpptpm.kotabogor.go.id/assets/js/tiny_mce/tiny_mce.js"></script>
            <link rel="stylesheet" type="text/css" href="http://bpptpm.kotabogor.go.id/assets/js/datatables/css/demo_table_jui.css" media="screen">
            <link rel="stylesheet" type="text/css" href="http://bpptpm.kotabogor.go.id/assets/js/datatables/themes/smoothness/jquery-ui-1.8.4.custom.css" media="screen">
            <script type="text/javascript" src="http://bpptpm.kotabogor.go.id/assets/js/datatables/js/jquery.dataTables.js"></script>
            <script type="text/javascript" src="http://bpptpm.kotabogor.go.id/assets/js/validated/jquery.validationEngine-en.js"></script>
            <script type="text/javascript" src="http://bpptpm.kotabogor.go.id/assets/js/validated/jquery.validationEngine.js"></script>
            <link rel="stylesheet" type="text/css" href="http://bpptpm.kotabogor.go.id/assets/js/validated/validationEngine.jquery.css" media="screen">
            <script type="text/javascript" src="http://bpptpm.kotabogor.go.id/assets/js/validated/setvalidate.js"></script>
            <script type="text/javascript" src="http://bpptpm.kotabogor.go.id/assets/js/default/default.js"></script>
            <script type="text/javascript" src="http://bpptpm.kotabogor.go.id/assets/js/bootstrap/bootstrap.js"></script>
            <script type="text/javascript" src="http://bpptpm.kotabogor.go.id/assets/js/jquery.jticker.js"></script>
            <link rel="stylesheet" type="text/css" href="http://bpptpm.kotabogor.go.id/assets/css/default/style_front.css" media="screen">
            <link rel="stylesheet" type="text/css" href="http://bpptpm.kotabogor.go.id/assets/css/bootstrap/bootstrap.css" media="screen">
            <link rel="stylesheet" type="text/css" href="http://bpptpm.kotabogor.go.id/assets/css/bootstrap/font-awesome/css/font-awesome.css" media="screen">
            <link rel="stylesheet" type="text/css" href="http://bpptpm.kotabogor.go.id/assets/css/bootstrap/bootstrap-responsive.css" media="screen">
                    <title>Portal</title>
    </head>
    <body>
        <div class="container">
            <div class="header">
        <img src="http://bpptpm.kotabogor.go.id/uploads/header_file/header_ini4.png" />
</div><div class="navbar-wrapper">
    <div class="container">
        <div class="navbar navbar-inverse">
            <div class="navbar-inner">
                <a class="brand" href="http://bpptpm.kotabogor.go.id/"><img src="http://bpptpm.kotabogor.go.id/assets/css/default/icon/house.png" /> Beranda</a>
                <div class="nav-collapse collapse">
                    <ul class="nav">
                        <li><a href="http://bpptpm.kotabogor.go.id/main/profil">Profil</a></li>
                        <li><a href="http://bpptpm.kotabogor.go.id/main/jenis_perizinan">Info Perijinan</a></li>
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Layanan <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="http://bpptpm.kotabogor.go.id/main/pendaftaran_online2">Pendaftaran Izin</a></li>
                                <li><a href="http://bpptpm.kotabogor.go.id/main/pengaduan">Pengaduan</a></li>
                                <li><a href="http://bpptpm.kotabogor.go.id/main/download">Download</a></li>
                            </ul>
                        </li>
            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">PPID <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="http://bpptpm.kotabogor.go.id/ppid/tentangppid.php">Tentang PPID</a></li>
                                <li><a href="http://bpptpm.kotabogor.go.id/ppid/laporanberkala.php">Laporan Berkala</a></li>
                            </ul>
                        </li>
                        <li><a href="http://bpptpm.kotabogor.go.id/main/info_publik">Berita</a></li>
                        <li><a href="http://bpptpm.kotabogor.go.id/main/galeri">Galeri</a></li>
                        <li><a href="http://bpptpm.kotabogor.go.id/main/kontak">Kontak</a></li>
                    </ul>                
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$ekonomi = file_get_contents("ekonomi.json");
$fisik = file_get_contents("fisik.json");
$kesra = file_get_contents("kesra.json");

$izineko = json_decode($ekonomi); //objek
$izinfisik = json_decode($fisik); //objek
$izinkesra = json_decode($kesra); //objek
?>
<div class="isi">
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span9">
                <div class="widget stacked">
                    <div class="widget-header">
                        <h3>Laporan Realisasi Penertiban Izin Tahun 2014</h3>
                    </div>
                    <div class="widget-content">
<h3 style="text-align:center;">REKAPITULASI PERIZINAN TAHUN 2014</h3>
<table style="width:100%">
  <tr>
    <th colspan="1" rowspan="2">NO</th>
    <th colspan="1" rowspan="2">Jenis Pelayanan Perizinan</th>
    <th colspan="4" rowspan="1">Berkas Perizinan</th>
  </tr>
  <tr>
    <td >Diterima</td>
    <td>Dlm Proses</td>
    <td>Ditolak</td>
    <td>Diterbitkan</td>
  </tr>
  <tr>
    <th colspan="6" rowspan="1">- Bidang Fisik -</th>
  </tr>
  <?php
  foreach ($izinfisik as $key => $value) {
    echo "<tr>";
    echo "<td>".$value->ID."</td><td style='text-align:left;width:50%;'>".$value->Jenis."</td><td>".$value->Diterima."</td><td>".$value->DlmProses."</td><td>".$value->Ditolak."</td><td>".$value->Diterbitkan."</td>";
    echo "</tr>";
  }
  ?>
</table>

<h3 style="text-align:center;">REKAPITULASI PERIZINAN TAHUN 2014</h3>
<table style="width:100%">
  <tr>
    <th colspan="1" rowspan="2">NO</th>
    <th colspan="1" rowspan="2">Jenis Pelayanan Perizinan</th>
    <th colspan="4" rowspan="1">Berkas Perizinan</th>
  </tr>
  <tr>
    <td >Diterima</td>
    <td>Dlm Proses</td>
    <td>Ditolak</td>
    <td>Diterbitkan</td>
  </tr>
  <tr>
    <th colspan="6" rowspan="1">- Bidang Ekonomi -</th>
  </tr>
  <?php
  foreach ($izineko as $key => $value) {
    echo "<tr>";
    echo "<td>".$value->ID."</td><td style='text-align:left;width:50%;'>".$value->Jenis."</td><td>".$value->Diterima."</td><td>".$value->DlmProses."</td><td>".$value->Ditolak."</td><td>".$value->Diterbitkan."</td>";
    echo "</tr>";
  }
  ?>
</table>

<h3 style="text-align:center;">REKAPITULASI PERIZINAN TAHUN 2014</h3>
<table style="width:100%">
  <tr>
    <th colspan="1" rowspan="2">NO</th>
    <th colspan="1" rowspan="2">Jenis Pelayanan Perizinan</th>
    <th colspan="4" rowspan="1">Berkas Perizinan</th>
  </tr>
  <tr>
    <td >Diterima</td>
    <td>Dlm Proses</td>
    <td>Ditolak</td>
    <td>Diterbitkan</td>
  </tr>
  <tr>
    <th colspan="6" rowspan="1">- Bidang Kesra -</th>
  </tr>
  <?php
  foreach ($izinkesra as $key => $value) {
    echo "<tr>";
    echo "<td>".$value->ID."</td><td style='text-align:left;width:50%;'>".$value->Jenis."</td><td>".$value->Diterima."</td><td>".$value->DlmProses."</td><td>".$value->Ditolak."</td><td>".$value->Diterbitkan."</td>";
    echo "</tr>";
  }
  ?>
</table>
                    </div>
                </div>                
            </div>
            <div class="span3">
                <div class="sidebar-nav">
                    <div class="row-fluid">
    <div class="span12">
        <div class="widget stacked">
            <div class="widget-header">
                <i class="icon-search icon-2x"></i>
                <h3>Pencarian Info</h3>
            </div>
            <div class="widget-content">
                <form action="http://bpptpm.kotabogor.go.id/main/info_publik/search" method="post">                <input type="text" class="span12" name="id" placeholder="Cari di Berita..." />
                <input type="submit" value="Cari Info" class="btn btn-primary" />
                </form>            </div>
        </div>
    </div>
</div>
<div class="row-fluid">
    <div class="span12">
        <div class="widget stacked">
            <div class="widget-header">
                <i class="icon-comments icon-2x"></i>
                <h3>Jajak Pendapat</h3>
            </div>
            <div class="widget-content">
                <i style='color: #000;font-size: 14px; text-align: center; margin-top: 10px;'>Tidak ada jajak yang aktif</i>            </div>
        </div>        
    </div>
</div>




                    <style>
    .ti_table{
        padding: 5px; background: #cccccc; font-size: 14px; border: 1px solid #666666
    }
    table tr td{padding-bottom: 10px;}
    table tr td p{line-height: 20px;}
</style>
<div class="row-fluid">
    <div class="span12">
        <div class="widget stacked">
            <div class="widget-header">
                <i class="icon-bar-chart icon-2x"></i>
                <h3>Pengunjung</h3>
            </div>
            <div class="widget-content">
                                <p>Total pengunjung : <b>2788 Pengunjung</b></p>
            </div>
        </div>               
    </div>
</div>
<script type="text/javascript">
    jQuery(document).ready(function(){
        // binds form submission and fields to the validation engine
        $("#my_cek").submit(
        function(){
            var id_cak= $("#id_cak").val();
            if ($("#id_cak").val() == ''){
                alert(" Nomor Pendaftaran Tidak Boleh Kosong");
            }else{
                $("#entry h2").html('Cek Status Izin');
                $(".kiri").load(site+'main/cek_status/get/'+id_cak);
            }
            return false;
        });
    });
</script>

<script type="text/javascript">
    function reload_get(){
        $("#capcha").load(site+'main/pendaftaran_online/get_capcha');
    }
    $(document).ready(function() {
        //ini config tiny
        $("#formID").submit(function(){
            $("#error_data").val('0');
            if ($("#isi_capca").val() != $("#isi_capca2").val()){
                $("#isi_capca_error").html("<p>Data Tidak Sama Dengan Gambar</p>");
                $("#capcha").load(site+'main/pendaftaran_online/get_capcha');
                $("#error_data").val('1');
            }
            if ($("#error_data").val() == 1){
                return false;
            }
        });
        $("#capcha").load(site+'main/pendaftaran_online/get_capcha');
    });
</script>                </div>
            </div>
        </div>
    </div>
</div>
<div id="bottom">
    <div class="container">
        <div class="row-fluid">
            <div class="span2">
                <h3>Navigasi</h3>
                <ul>
                    <li><a href="http://bpptpm.kotabogor.go.id/main">Beranda</a></li>
                    <li><a href="http://bpptpm.kotabogor.go.id/main/profil">Profil</a></li>
                    <li><a href="http://bpptpm.kotabogor.go.id/main/jenis_perizinan">Info Perijinan</a></li>
                    <li><a href="http://bpptpm.kotabogor.go.id/main/pendaftaran_online2">Pendaftaran Izin</a></li>
                    <li><a href="http://bpptpm.kotabogor.go.id/main/pengaduan">Pengaduan</a></li>
                    <li><a href="http://bpptpm.kotabogor.go.id/main/download">Download</a></li>
                    <li><a href="http://bpptpm.kotabogor.go.id/main/info_publik">Berita</a></li>
                    <li><a href="http://bpptpm.kotabogor.go.id/main/galeri">Galeri</a></li>
                    <li><a href="http://bpptpm.kotabogor.go.id/main/kontak">Kontak</a></li>
                </ul>
            </div>
            <div class="span3">
                <h3>Tautan Lain</h3>
                <ul>
                    <li><a href="http://www.kotabogor.go.id" target="_blank">Website Pemerintahan Kota Bogor</a></li>
                    <li><a href="http://www.bogorkab.go.id" target="_blank">Website Pemerintah Kabupaten Bogor</a></li>
                    <li>&nbsp;</li>
                    <li>
                        <a href="feed/berita"><i class="icon-rss-sign icon-3x"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="http://twitter.com/@BPPTPMKotaBogor" target="_blank"><i class="icon-twitter-sign icon-3x"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="http://facebook.com/https://www.facebook.com/pages/Badan-Pelayanan-Perizinan-Terpadu-dan-Penanaman-Modal-bpptpm-Kota-Bogor/319221424919412" target="_blank"><i class="icon-facebook-sign icon-3x"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="http://plus.google.com/u/0/113702599122709222261/" target="_blank"><i class="icon-google-plus-sign icon-3x"></i></a>
                    </li>
                </ul>                
            </div>
            <div class="span2">
                <h3>Lokasi Kami</h3>
                <p>Jl. Kapt. Muslihat No. 21 <br />Telp. (0251) 8356167 <br />Bogor</p>
            </div>
            <div class="span5">
                <h3>Video</h3>

                <iframe width="380" height="220"
                        src="http://www.youtube.com/embed/5wXlFzhuDGA" frameborder="0">
                </iframe>
            </div>
        </div>
    </div>
</div><div class="footer">
    <p style="text-align: center; color: #f8f8f8; font-size: 12px;">Copyright &copy; 2015 Badan Pelayanan Perijinan Terpadu Dan Penanaman Modal Kota Bogor</p>
</div>
        </div>
    </body>
</html>
