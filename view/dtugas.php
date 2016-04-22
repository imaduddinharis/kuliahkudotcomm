            <div class="clearfix colelem" id="pppu840">
                <!-- group -->
                <div class="clearfix grpelem" id="ppu840">
                    <!-- column -->
                    <div class="clearfix colelem" id="pu840">
                        <!-- group -->
                        <a class="nonblock nontext clip_frame grpelem" id="u840" href="forward.php">
                            <!-- image --><img class="block" id="u840_img" src="images/menu%20button.png" alt="" width="67" height="67" />
                        </a>
						<?php 
						if($_GET['id']=="tugas"){
                       echo ' <img class="grpelem" id="u839-4" alt="Tugas" width="311" height="54" src="images/u839-4.png" />
                        <!-- rasterized frame -->';
						}elseif($_GET['id']=="quiz"){
                       echo ' <img class="grpelem" id="u839-4" alt="Quiz" width="311" height="54" src="images/u1517-4.png"/>
                        <!-- rasterized frame -->';
						}
						?>
                    </div>
					
					<?php echo'<form method="post" action="/kuliahkudotcom/controller/upload.php?id='.$_GET["id"].'"  enctype="multipart/form-data">';?>
                    <div class="clearfix colelem" id="pu1471-4">
                        <!-- group -->
                        <img class="grpelem" id="u1471-4" alt="Judul" width="103" height="25" src="images/u1471-4.png" />
                        <!-- rasterized frame -->
                        <div>
                            <div class="clearfix grpelem" id="u1469">
                                <!-- simple frame -->
                                <!--<div class="clearfix grpelem" id="j123" style="width:382px; heigth:32px">-->
                                    <input type="text" name="judul" placeholder="Judul">
                                <!--</div>-->
                            </div>
                        </div>
                    </div>
					<div class="clearfix colelem" id="pu1474">
                        <!-- group -->
                        <div class="clearfix grpelem" id="u1474">
                            <!-- group -->
                        <input type="number" name="pertemuan" style="margin-top:5px; margin-left:3px;" class="grpelem" id="u951-4" alt="tugas" width="87" height="17" placeholder="pertemuan ke?" /><!-- rasterized frame -->    
                        </div>
                        
                    </div>
                    <div class="clearfix colelem" id="pu1474">
                        <!-- group -->
                        <div class="clearfix grpelem" id="u1474">
                            <!-- group -->
                        <input type="file" name="tugas" class="grpelem" style="margin-top:5px; margin-left:3px;" id="u951-4" alt="tugas" width="87" height="17" /><!-- rasterized frame -->    
                        </div>
                        
                    </div>
					
                    <div class="clearfix colelem" id="u1478-4">
                        <!-- content -->
                        <p>*docx, xlsx, pdf, ppt</p>
                    </div>
                    <div class="clearfix colelem" id="pu1479-4">
                        <!-- group -->
                        <img class="grpelem" id="u1479-4" alt="Durasi" width="103" height="25" src="images/u1479-4.png" />
                        <!-- rasterized frame -->
                        <div class="clearfix grpelem" id="u984">
                        	<select id="combobox123" name="deadline" >
                            	<option value="1">01</option>
          						<option value="2">02</option>
                                <option value="3">03</option>
          						<option value="4">04</option>
                                <option value="5">05</option>
          						<option value="6">06</option>
                                <option value="7">07</option>
          						<option value="8">08</option>
                                <option value="9">09</option>
          						<option value="10">10</option>
                                <option value="11">11</option>
          						<option value="12">12</option>
                            </select>
                        </div>
                        <div class="clearfix grpelem" id="u1015">
                        	<select id="combobox321" name="deadline-hari">
                            	<option value="Jam">Jam</option>
                                <option value="Hari">Hari</option>                    
                            </select>
                            <!-- group -->
                       
                            <!-- rasterized frame -->
                        </div>
                    </div>
                    <div class="clearfix colelem" id="u1043">
                        <!-- group -->
                        <div class="clearfix grpelem" id="u1046-4">
                            <!-- content -->
                            <input type="submit" name="uploadtugas" class="grpelem" id="u1359-4" style="color:#FFF;background-color:#FDA51B;" value="Upload"/><!-- rasterized frame -->
                        </div>
                    </div>
					</form>
					
                    <div class="clearfix colelem" id="pu1480">
                        <!-- group -->
                    <div class="clip_frame grpelem" id="u1480">
                        <table style="width:100%">
                        	<tr id="headertable">
                            	<td>Nama File</td>
                                <td>Judul</td>
                                <td>Deadline</td>
                                <td colspan="2">Aksi</td>
                            </tr>
                          
                            <?php include("../controller/listtugas.php");?>
                            
                          
                        </table>
                        </div>
                    </div>
                </div>
                <div class="clearfix grpelem" id="u1064">
                    <!-- column -->
                     <div class="clip_frame colelem" id="u1205"><!-- image -->
	    <?php echo'<img class="block" id="u1205_img" src="'.$_SESSION['path'].'" alt="Profile Image" width="213" height="213"/>';?>
      </div>
      <p style="font-size:20px;color:#FFF;margin-top:30px;" alt="Nama:" id="u609-4" class="colelem"> <?php echo $_SESSION['nama'];?></p>
         <!-- rasterized frame -->
      <p style="font-size:20px;color:#FFF;margin-top:30px;" alt="NIP:" id="u610-4" class="colelem"> <?php echo $_SESSION['id'];?></p>
      <!-- rasterized frame -->
      <p style="font-size:20px;color:#FFF;margin-top:30px;" alt="Email:" id="u611-4" class="colelem"> <?php echo $_SESSION['mail'];?></p>
      <!-- rasterized frame -->
                    <div class="clearfix colelem" id="pu1215">
                        <!-- group -->
                        <div class="clip_frame grpelem" id="u1215">
              			</div>
                        <!-- rasterized frame -->
                    </div>
                </div>
                <div class="clearfix grpelem" id="u1473-3">
                    <!-- content -->
                    <p>&nbsp;</p>
                </div>
            </div>