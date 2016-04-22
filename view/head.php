<!DOCTYPE html>
<html class="html" lang="en-US">
 <head>

  <script type="text/javascript">
   if(typeof Muse == "undefined") window.Muse = {}; window.Muse.assets = {"required":["jquery-1.8.3.min.js", "museutils.js", "jquery.watch.js", "dashboard.css"], "outOfDate":[]};
</script>
  
  <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
  <meta name="generator" content="2015.0.0.309"/>
  <title>Dashboard</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/site_global.css?4052507572"/>
  <link rel="stylesheet" type="text/css" href="css/master_b-masteri.css?4019467318"/>
  <link rel="stylesheet" type="text/css" href="css/dashboard.css?4092179705" id="pagesheet"/>
  <!-- Other scripts -->
  <script type="text/javascript">
   document.documentElement.className += ' js';
</script>
   </head>
    <body>

  <div class="clearfix" id="page"><!-- column -->
   <div class="position_content" id="page_position_content">
    <div class="clearfix colelem" id="pu554"><!-- group -->
     <div class="browser_width grpelem" id="u554-bw">
      <div class="shadow" id="u554"><!-- group -->
       <div class="clearfix" id="u554_align_to_page">
        <div class="clip_frame grpelem" id="u552"><!-- image -->
         <img class="block" id="u552_img" src="images/1.png" alt="" width="82" height="69"/>
        </div>
        <img class="grpelem" id="u618-4" alt="KULIAHKU.com" width="447" height="64" src="images/u618-4.png"/><!-- rasterized frame -->
        <a class="nonblock nontext MuseLinkActive grpelem" id="u761-4" href="forward.php"><!-- rasterized frame --><img id="u761-4_img" alt="Dashboard" width="176" height="38" src="images/u761-4-a.png"/></a>
       </div>
      </div>
     </div>
     <img class="grpelem" id="u762" alt="Profile" src="images/blank.gif"/><!-- state-based BG images -->
     <a class="nonblock nontext grpelem" id="u764" href="/kuliahkudotcom/controller/logout.php"><!-- state-based BG images --><img id="u764_states" alt="Log Out" src="images/blank.gif"/></a>
     <div class="grpelem" id="u765"><!-- simple frame --></div>
     <div class="grpelem" id="u766"><!-- simple frame --></div>
    </div>
    <div class="clearfix colelem" id="pu556"><!-- group -->
     <div class="clearfix grpelem" id="u556"><!-- column -->
      <div class="clip_frame colelem" id="u1205"><!-- image -->
	    <?php echo'<img class="block" id="u1205_img" src="'.$_SESSION['path'].'" alt="Profile Image" width="213" height="213"/>';?>
      </div>
      <p style="font-size:20px;color:#FFF;margin-top:30px;" alt="Nama:" id="u609-4" class="colelem"> <?php echo $_SESSION['nama'];?></p>
         <!-- rasterized frame -->
      <p style="font-size:20px;color:#FFF;margin-top:30px;" alt="NIP:" id="u610-4" class="colelem"> <?php echo $_SESSION['id'];?></p>
      <!-- rasterized frame -->
      <p style="font-size:20px;color:#FFF;margin-top:30px;" alt="Email:" id="u611-4" class="colelem"> <?php echo $_SESSION['mail'];?></p>
      <!-- rasterized frame -->
      <div class="clearfix colelem" id="pu1208"><!-- group -->
       <div class="clip_frame grpelem" style="background-color:transparent; width:200px;box-shadow:0 0 5px 0 #ABC;" id="u1208"><!-- image -->
       		<?php 
			if($_SESSION['tipe_user']== '1' && !isset($_GET['id'])){
			echo '<form method="post" action="/kuliahkudotcom/controller/absensi.php?id='.$_SESSION['id'].'">'; ?>
            	<input type="submit" name="pertemuan" value="Buka Kelas" style="background-color:#FFF; width:100px; height:50px; box-shadow:0 0 10px 10px #ABC;">
            </form>
			<?php
			}else if($_SESSION['tipe_user']== '1' && $_GET['id'] == 'xxx'){
				?>
            	<input type="submit" name="pertemuan" value="Kelas telah dibuka" style="background-color:#FFF; width:200px; height:50px; " readonly="readonly">
			<?php
			}else if($_SESSION['tipe_user']== '2' && !isset($_GET['id'])){
			?>
            	<input type="submit" name="presensi" value="Kelas Belum dibuka" style="background-color:#FFF; width:200px; height:50px; box-shadow:0 0 10px 10px #ABC;"readonly="readonly">
            </form>
			<?php
			}else if($_SESSION['tipe_user']== '2' && $_GET['id'] == 'xxx'){
			echo '<form method="post" action="/kuliahkudotcom/controller/absensi.php?id='.$_SESSION['id'].'">'; ?>
            	<input type="submit" name="presensi" value="Klaim Hadir" style="background-color:#FFF; width:100px; height:50px; box-shadow:0 0 10px 10px #ABC;">
            </form>
			<?php
			}else if($_SESSION['tipe_user']== '2' && $_GET['id'] == 'hadir'){
				?>
            	<input type="submit" name="presensi" value="Kehadiran telah dicatat" style="background-color:#FFF; width:200px; height:50px; " readonly="readonly">
			<?php
			}
			?>
        <!--img class="block" id="u1208_img" src="images/checkbox%20white.png" alt="" width="33" height="33"/-->
       </div>
       
      </div>
     </div>