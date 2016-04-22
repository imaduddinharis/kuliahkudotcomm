<form method="post" action="/kuliahkudotcom/controller/register.php" enctype="multipart/form-data">
	<p>Nama Lengkap</p>
    		 <input type="text" name="judul" placeholder="Type here....">
      <p>NIM/NIP</p>
    		 <input type="text" name="nimnip" placeholder="Type here....">
      <p>Jenis Kelamin</p>
      <select name="jk">
          <option value="Man">Laki-Laki</option>
          <option value="Woman">Perempuan</option>
		</select>
      <p>Username</p>
     	<input type="text" name="username" placeholder="Type here....">
      <p>Password</p>
     	<input type="password" name="password" placeholder="Type here....">
      <p>Email</p>
     	<input type="text" name="email" placeholder="abcde@example.com">
      <p>Tipe Akun</p>
      	<select name="tipe">
          <option value="1">Dosen</option>
          <option value="2">Mahasiswa</option>
		</select>
      <p>Photo Profile</p>
      <input type="file" name="file" class="grpelem" id="u951-4" alt="Choose" width="87" height="17" /><!-- rasterized frame -->
      <p>ID Card</p>
      <input type="file" name="idp" class="grpelem" id="u951-4" alt="Choose" width="87" height="17" /><!-- rasterized frame -->
     <input class="pointer_cursor clearfix colelem" type="submit" name="submit" style="padding-top:10px;color:#FFF;background-color:#7F7F7F;" id="u962"  width="87" height="17"/><!-- rasterized frame -->
    </form>