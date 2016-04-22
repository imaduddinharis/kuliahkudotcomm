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
		if(@$_POST['submit']){
				$nama=$_POST['judul'];
				$id=$_POST['nimnip'];
				$jk=$_POST['jk'];
				$username=$_POST['username'];
				$password=$_POST['password'];
				$email=$_POST['email'];
				$tipe=$_POST['tipe'];
				
				$allowed_ext	= array('jpg', 'png', 'jpeg');
				$file_name		= $_FILES['pp']['name'];
				$file_ext		= strtolower(end(explode('.', $file_name)));
				$file_size		= $_FILES['pp']['size'];
				$file_tmp		= $_FILES['pp']['tmp_name'];
 				$tgl			= date("Y-m-d");
				
				$allowed_ext1	= array('jpg', 'png', 'jpeg');
				$file_name1		= $_FILES['idp']['name'];
				$file_ext1		= strtolower(end(explode('.', $file_name1)));
				$file_size1		= $_FILES['idp']['size'];
				$file_tmp1		= $_FILES['idp']['tmp_name'];
 				
				
				
				if(in_array($file_ext, $allowed_ext) === true){
					if($file_size < 2000000){
						$lokasi = '../view/files/profile/'.$id.'photoprofile.'.$file_ext;
						$lokasi1 = '../view/files/idcard/'.$id.'photoid.'.$file_ext1;
						move_uploaded_file($file_tmp, $lokasi);
						move_uploaded_file($file_tmp1, $lokasi1);
						$pro ='files/profile/'.$id.'photoprofile.'.$file_ext;
						$idcard = 'files/idcard/'.$id.'photoid.'.$file_ext1;
						
						$in = mysql_query("INSERT INTO tb_user VALUES(NULL, '$username', '$password', '$email','$tipe','$c')");
						if($tipe!=2){
						$mado = mysql_query("INSERT INTO tb_dosen VALUES('$id', '$nama', '$jk', '$pro', '$idcard', '$c')");	
						}else if($tipe=2){
						$mado = mysql_query("INSERT INTO tb_mahasiswa VALUES('$id', '$nama', '$jk', '$pro', '$idcard', '$c')");
						}
						if($mado!=0){
							?><script>alert('Success');</script><?php
							header("Location:/kuliahkudotcom/view");
						}else{
							echo 'failed';
						}
					}else{
						echo 'ERROR: Besar ukuran file (file size) maksimal 1 Mb!';
					}
				}else{
					echo 'ERROR: Ekstensi file tidak di izinkan!';
				}
		}
?>