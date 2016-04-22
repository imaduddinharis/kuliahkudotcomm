<?php
include('config.php');
function ran($panjang)
{
   $pengacak = '1234567890';
   $string = '';
   for($i = 0; $i < $panjang; $i++) {
   $pos1 = rand(0, strlen($pengacak)-1);
   $string .= $pengacak{$pos1};
   }
    return $string;
}
//Contoh Pemanggilan
$c= ran(2);
		if(@$_POST['uploadmateri']){
				$nama=$_POST['judul'];
				$pertemuan=$_POST['pertemuan'];
				$allowed_ext	= array('docx', 'xlsx', 'pdf', 'ppt');
				$file_name		= $_FILES['materi']['name'];
				$file_ext		= strtolower(end(explode('.', $file_name)));
				$file_size		= $_FILES['materi']['size'];
				$file_tmp		= $_FILES['materi']['tmp_name'];
 				$tgl			= date("Y-m-d");
				if(in_array($file_ext, $allowed_ext) === true){
					if($file_size < 100000000){
						$lokasi = '../view/files/materi/'.$nama.''.$c.'.'.$file_ext;
						move_uploaded_file($file_tmp, $lokasi);
						$materi ='files/materi/'.$nama.''.$c.'.'.$file_ext;
						
						$in = mysql_query("INSERT INTO tb_materi VALUES(NULL, '$materi', '$nama', '$pertemuan',SYSDATE())");
						if($in!=0){
						
							header("Location:/kuliahkudotcom/view/materi.php");
								?><script>alert('Success');</script><?php
						}else{
							echo 'failed';
						}
					}else{
						echo 'ERROR: Besar ukuran file (file size) maksimal 100 Mb!';
					}
				}else{
					echo 'ERROR: Ekstensi file tidak di izinkan!';
				}
		}
		
		if(@$_POST['uploadtugas']){
				$evaluasi = $_GET['id'];
				$nama=$_POST['judul'];
				$pertemuan=$_POST['pertemuan'];
				$deadline=$_POST['deadline'];
				$deadlineh = $_POST['deadline-hari'];
				$durasi =$deadline.''.$deadlineh;
				$allowed_ext	= array('docx', 'xlsx', 'pdf', 'ppt');
				$file_name		= $_FILES['tugas']['name'];
				$file_ext		= strtolower(end(explode('.', $file_name)));
				$file_size		= $_FILES['tugas']['size'];
				$file_tmp		= $_FILES['tugas']['tmp_name'];
 				$tgl			= date("Y-m-d");
				if(in_array($file_ext, $allowed_ext) === true){
					if($file_size < 100000000){
						$lokasi = '../view/files/'.$evaluasi.'/'.$nama.''.$c.'.'.$file_ext;
						move_uploaded_file($file_tmp, $lokasi);
						$tugas ='files/'.$evaluasi.'/'.$nama.''.$c.'.'.$file_ext;
						
						$in = mysql_query("INSERT INTO tb_tugas_kuis VALUES(NULL, '$file_name', '$nama', '$durasi', '$pertemuan',SYSDATE(), '$tugas','$evaluasi')");
						if($in!=0){
						
							header("Location:/kuliahkudotcom/view/dashboard.php");
								?><script>alert('Success');</script><?php
						}else{
							echo 'failed';
						}
					}else{
						echo 'ERROR: Besar ukuran file (file size) maksimal 100 Mb!';
					}
				}else{
					echo 'ERROR: Ekstensi file tidak di izinkan!';
				}
		}
		if(@$_POST['uploadlaporan']){
				$nama=$_POST['judul'];
				$allowed_ext	= array('docx', 'xlsx', 'pdf', 'ppt');
				$file_name		= $_FILES['laporan']['name'];
				$file_ext		= strtolower(end(explode('.', $file_name)));
				$file_size		= $_FILES['laporan']['size'];
				$file_tmp		= $_FILES['laporan']['tmp_name'];
 				$tgl			= date("Y-m-d");
				if(in_array($file_ext, $allowed_ext) === true){
					if($file_size < 100000000){
						$lokasi = '../view/files/laporan/'.$nama.''.$c.'.'.$file_ext;
						move_uploaded_file($file_tmp, $lokasi);
						$laporan ='files/laporan/'.$nama.''.$c.'.'.$file_ext;
						
						$in = mysql_query("INSERT INTO tb_laporan VALUES(NULL, '$nama', '$file_name', '$laporan')");
						if($in!=0){
						
							header("Location:/kuliahkudotcom/view/laporan.php");
								?><script>alert('Success');</script><?php
						}else{
							echo 'failed';
						}
					}else{
						echo 'ERROR: Besar ukuran file (file size) maksimal 100 Mb!';
					}
				}else{
					echo 'ERROR: Ekstensi file tidak di izinkan!';
				}
		}
?>