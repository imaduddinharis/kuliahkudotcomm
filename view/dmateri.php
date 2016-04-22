   <a class="nonblock nontext clip_frame grpelem" id="u715" href="forward.php"><!-- image -->
<img class="block" id="u715_img" src="images/menu%20button.png" alt="" width="67" height="67"/></a>
 <div class="clearfix grpelem" id="pu557-4"><!-- column -->
      <img class="colelem" id="u557-4" alt="Materi" width="311" height="54" src="images/u557-4.png"/><!-- rasterized frame -->
      <form method="post" action="/kuliahkudotcom/controller/upload.php"  enctype="multipart/form-data">
	  <div class="clearfix colelem" id="pu969-4"><!-- group judul materi-->
       <div class="grpelem" id="u968"><!-- simple frame -->
       	
            	<input type="text" name="judul" placeholder="Judul">
          
       </div>
      </div>
      <div class="clearfix colelem" id="pu970-4"><!-- group pertemuan -->
       <div class="clearfix grpelem" id="u971"><!-- group -->
        <div class="clearfix grpelem" id="u977-4" ><!-- content -->
         		<input type="number" name="pertemuan" class="grpelem" id="u951-4" alt="number" width="83" height="17" placeholder="untuk pertemuan ke?" /><!-- rasterized frame -->
        </div>
       </div>
       
      </div>

      <div class="clearfix colelem" id="pu970-4"><!-- group file upload -->
       <div class="clearfix grpelem" id="u971"><!-- group -->
        <div class="clearfix grpelem" id="u977-4"><!-- content -->
         		<input type="file" name="materi" class="grpelem" id="u951-4" alt="materi" width="87" height="17" /><!-- rasterized frame -->
        </div>
       </div>
       
      </div>
      <div class="clearfix colelem" id="u1333-4"><!-- content -->
       <p>*docx, xlsx, pdf, ppt</p>
      </div>

      <div class="clearfix colelem" id="u1360"><!-- group -->
       <input type="submit" name="uploadmateri" class="grpelem" id="u1359-4" style="background-color:#FDA51B;" value="Upload"/><!-- rasterized frame -->
      </div>
	  </form>
	  
      <div class="clearfix colelem" id="pu1335"><!-- group -->
       <div class="clip_frame grpelem" id="u1335"><!-- image -->
       		<table style="width:100%">
                        	<tr id="headertable">
                            	<td>Nama File</td>
                                <td>Judul</td>
                                <td colspan="3">Aksi</td>
                            </tr>
                          <?php include("../controller/listmateri.php");?>
        </table>
       </div>
      </div>
      
     </div>
</div>