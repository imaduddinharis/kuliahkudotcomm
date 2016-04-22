<?php
				include('../controller/config.php');
				$nim = $_SESSION['id'];
				echo'<table style="width:100%">
                <tr>
						<td colspan="2">Pertemuan ke?</td>
                		<td colspan="2">NIM</td>
                        <td colspan="2">Total Nilai</td>
						
                </tr>
				';
				$sql = mysql_query("SELECT * FROM tb_nilai where nim='$nim' ORDER BY id_pertemuan ASC ");
				if(mysql_num_rows($sql) > 0){
					while($data = mysql_fetch_assoc($sql)){
						
						echo '
				
						<tr bgcolor="#fff">
							<td colspan="2" align="center">'.$data['id_pertemuan'].'</td>
							<td colspan="2"  align="center">'.$data['nim'].'</td>
							<td colspan="2"  align="center">'.$data['score'].'</td>
						
						</tr>
				 </br>
				';}
				echo'</table>';
				}
				else{
					echo '
		<table style="width:100%">
                <tr id="header2">
						<td colspan="2">Pertemuan ke?</td>
                		<td colspan="2">NIM</td>
                        <td colspan="2">Total</td>
                </tr>
							<tr bgcolor="#fff">
						<td align="center" colspan="6" align="center">Tidak ada data!</td>
					</tr>
</table>				
				';
				}
				
				?>