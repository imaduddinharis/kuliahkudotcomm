<?php
				include('../controller/config.php');
				$sql = mysql_query("SELECT * FROM tb_materi ORDER BY id DESC");
				if(mysql_num_rows($sql) > 0){
					$no = 1;
					while($data = mysql_fetch_assoc($sql)){
						echo '
						<tr bgcolor="#fff">
							<td align="center">'.$data['judul'].'</td>
							<td align="center">'.$data['nama_file'].'</td>
							<td >
							<a href="'.$data['nama_file'].'">
							<img class="block" id="u1361_img" src="images/download%20button.png" alt="" width="31" height="31"/>
							</a>
							</td>
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