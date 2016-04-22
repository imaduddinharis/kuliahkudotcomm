<?php
				include('../controller/config.php');
				$nim=$_SESSION['id'];
				$mahasiswa = mysql_query("SELECT * from tb_mahasiswa where nim='$nim'");
				$dosen = mysql_query("SELECT * from tb_dosen");
				$cekpertemuan = mysql_query("SELECT * FROM tb_pertemuan");
				$cekkehadiran = mysql_query("SELECT * FROM tb_trans_kehadiran");
				$datamahasiswa = mysql_fetch_assoc($mahasiswa);
				$datadosen = mysql_fetch_assoc($dosen);
				$pertemuan = mysql_num_rows($cekpertemuan);
				$kehadiran = mysql_num_rows($cekkehadiran);
				$persen = ($kehadiran/$pertemuan) *100;
						echo '
						<tr>
						<td colspan="5">Nama Dosen / Matkul : '.$datadosen['nama'].'</td>
						</tr>
						<tr id="headertable">
                            	<td>NIM</td>
                                <td>NAMA</td>
                                <td>Jumlah Kehadiran</td>
                                <td>Jumlah Pertemuan</td>
								<td>Persentase Kehadiran</td>
                                
                                
                            </tr>
                          
						<tr bgcolor="#fff">
							<td align="center">'.$datamahasiswa['nim'].'</td>
							<td align="center">'.$datamahasiswa['nama'].'</td>
							<td align="center">'.$kehadiran.'</td>
							<td align="center">'.$pertemuan.'</td>
							<td align="center">'.$persen.' %</td>
							
							
							
						</tr>
						';
				
				
				?>