<!DOCTYPE html>
<html>
<head>
	<title>Membuat Upload File Dengan PHP Dan MySQL | www.malasngoding.com</title>
</head>
<body>
	<h1>Membuat Upload File Dengan PHP Dan MySQL <br/> www.malasngoding.com</h1>
	<form action="yuk gais.php" method="post" enctype="multipart/form-data">
	<table>
         <tr>
         <td>NRP</td>
         <td>:</td>
         <td><input type="text" name="nrp"/></td>
         </tr>
         <tr>
         <td>Nama</td>
         <td>:</td>
         <td><input type="text" name="nama"/></td>
         </tr>
         <tr>
         <td>Alamat</td>
         <td>:</td>
         <td><input type="text" name="alamat"/></td>
         </tr>
         <tr>
         <td>Foto</td>
         <td>:</td>
         <td>	<input type="file" name="file"></td>
         </tr>
         <tr>
         <td>Jurusan</td>
         <td>:</td>
         <td>   
              <select type="text" name="jurusan">
          <option value="telkom">Telekomunikasi</option>
          <option value="elka">Elektronika</option>
          <option value="IT">Informatika</option>
        </select></td>
         </tr>
         <tr>
         <td></td>
         <td></td>
         <td><input type="submit" name="upload" value="Upload"></td>
         </tr>
      </table>

	</form>
</body>
</html>