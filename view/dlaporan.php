            <div class="clearfix colelem" id="pppu840">
                <!-- group -->
                <div class="clearfix grpelem" id="ppu840">
                    <!-- column -->
                    <div class="clearfix colelem" id="pu840">
                        <!-- group -->
                        <a class="nonblock nontext clip_frame grpelem" id="u840" href="forward.php">
                            <!-- image --><img class="block" id="u840_img" src="images/menu%20button.png" alt="" width="67" height="67" />
                        </a>
						
                    </div>
					
					<form method="post" action="/kuliahkudotcom/controller/upload.php"  enctype="multipart/form-data">
                    <div class="clearfix colelem" id="pu1471-4">
                        <!-- group -->
                        <img class="grpelem" id="u1471-4" alt="Judul" width="103" height="25" src="images/u1471-4.png" />
                        <!-- rasterized frame -->
                        <div>
                            <div class="clearfix grpelem" id="u1469">
                                <!-- simple frame -->
                                <!--<div class="clearfix grpelem" id="j123" style="width:382px; heigth:32px">-->
                                    <input type="text" name="judul" placeholder="Nama File">
                                <!--</div>-->
                            </div>
                        </div>
                    </div>
					<div class="clearfix colelem" id="pu1474">
                        <!-- group -->
                        <div class="clearfix grpelem" id="u1474">
                            <!-- group -->
                        <input type="file" name="laporan" class="grpelem" style="margin-top:5px; margin-left:3px;" id="u951-4" alt="tugas" width="87" height="17" /><!-- rasterized frame -->    
                        </div>
                        
                    </div>
					
                    <div class="clearfix colelem" id="u1478-4">
                        <!-- content -->
                        <p>*docx, xlsx, pdf, ppt</p>
                    </div>
                   
                    <div class="clearfix colelem" id="u1043">
                        <!-- group -->
                        <div class="clearfix grpelem" id="u1046-4">
                            <!-- content -->
                            <input type="submit" name="uploadlaporan" class="grpelem" id="u1359-4" style="color:#FFF;background-color:#FDA51B;" value="Upload"/><!-- rasterized frame -->
                        </div>
                    </div>
					</form>
					
                    <div class="clearfix colelem" id="pu1480">
                        <!-- group -->
                    <div class="clip_frame grpelem" id="u1480">
                        <table style="width:100%">
                        	<tr id="headertable">
                            	<td>Nama File</td>
                                <td colspan="2">Aksi</td>
                            </tr>
                          
                            <?php include("../controller/laporan.php");?>
                            
                          
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