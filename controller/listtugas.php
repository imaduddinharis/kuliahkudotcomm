<?php
				include('../controller/config.php');
				$tugas = $_GET['id'];
				$sql = mysql_query("SELECT * FROM tb_tugas_kuis where tipe='$tugas' ORDER BY id DESC");
				if(mysql_num_rows($sql) > 0){
					$no = 1;
					while($data = mysql_fetch_assoc($sql)){
						echo '
						<tr bgcolor="#fff">
							<td align="center">'.$data['judul'].'</td>
							<td align="center">'.$data['nama_file'].'</td>
							<td align="center">'.$data['durasi'].'</td>
							
							<td >
							<a href="'.$data['path'].'">
							<input type="image" class="block" id="download" src="images/download%20button.png" alt="" width="31" height="31"  />
							</a>
							
						</tr>
						';
						$no++;
					}
				}else{
					echo '
					<tr bgcolor="#fff">
						<td align="center" colspan="4" align="center">Tidak ada data!</td>
					</tr>
					';
				}
				
				?>