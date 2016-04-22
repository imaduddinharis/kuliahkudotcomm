<?php
				include('../controller/config.php');
				$sql = mysql_query("SELECT * FROM tb_laporan ORDER BY id ASC");
				if(mysql_num_rows($sql) > 0){
					$no = 1;
					while($data = mysql_fetch_assoc($sql)){
						echo '
						<tr bgcolor="#fff">
							<td align="center">'.$data['nama_file'].'</td>
							<td >
							<a href="'.$data['path'].'">
							<center><input type="image" class="block" id="download" src="images/download%20button.png" alt="" width="31" height="31"  /><center>
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