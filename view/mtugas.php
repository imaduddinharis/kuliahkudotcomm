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
                        <!-- rasterized frame -->
                    </div>
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