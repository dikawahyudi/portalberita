<?php
function nama($parameter){
	
$data=mysqli_fetch_array(mysqli_query($koneksi,"select nama_lengkap from admin where id_admin='$parameter'"));
return $data[0];
}
function random(){
echo rand(0,999);
}
function msgbox($msg,$url){
echo "<script>window.alert('$msg');window.location=('$url');</script>";
}
function rdir($url){
header("location:$url");
}
function status($parameter){
if($parameter==1)
$status="Aktif";
else
$status="Non Aktif";
return $status;
}
function rupiah($parameter){ 
  $rupiah="<sup>Rp</sup>".number_format($parameter,0,',','.');
  return $rupiah;
}
function selisihwaktu($waktupembuatan){$waktusekarang=date("Y-m-d h:i:s");
$datetime1 = new DateTime($waktusekarang);
$datetime2 = new DateTime($waktupembuatan);
$interval = $datetime1->diff($datetime2);
return $selisih;
}
function tgl_ina($parameter){
$thn=substr($parameter,0,4);
$b=substr($parameter,5,2);
$tgl=substr($parameter,-2);
if($b==1) {$bln="Januari";}
else if($b==2) {$bln="Februari";}
else if($b==3) {$bln="Maret";}
else if($b==4) {$bln="April";}
else if($b==5) {$bln="Mei";}
else if($b==6) {$bln="Juni";}
else if($b==7) {$bln="Juli";}
else if($b==8) {$bln="Agustus";}
else if($b==9) {$bln="September";}
else if($b==10){$bln="Oktober";}
else if($b==11){$bln="November";}
else if($b==12){$bln="April";}
$tanggal=$tgl . " ".$bln ." ".$thn;
return $tanggal;
}
function tgl_ina2($parameter1){
$parameter2=substr($parameter1,0,10);
$parameter3=substr($parameter1,-8);
$thn=substr($parameter2,2,2);
$bln=substr($parameter2,5,2);
$tgl=substr($parameter2,-2);
$tanggal=$tgl . "/".$bln ."/".$thn ;
$jam=$parameter3;
$waktu=$tanggal . " .:::. ". $jam;
return $waktu;
}
function tgl_ina3($parameter){ 
$thn=substr($parameter,2,2); 
$bln=substr($parameter,5,2);
$tgl=substr($parameter,-2); 
$tanggal=$tgl . "/".$bln ."/".$thn ;
$waktu=$tanggal;
return $waktu;
}
function hari_ina($day)
{
if ($day=="Monday")
{$hari="Senin";}
else if ($day=="Tuesday")
{$hari="Selasa";}
else if ($day=="Wednesday")
{$hari="Rabu";}
else if ($day=="Thursday")
{$hari="Kamis";}
else if ($day=="Friday")
{$hari="Jumat";}
else if ($day=="Saturday")
{$hari="Sabtu";}
else if ($day=="Sunday")
{$hari="Minggu";}
return $hari;
}
function jangkawaktu($waktu1,$waktu2){
$start_date = new DateTime($waktu1);
$end_date = new DateTime($waktu2);
$interval = $start_date->diff($end_date);
$selisih = $interval->d;
$jangkawaktu = $selisih+1;
return $jangkawaktu;
}
?>