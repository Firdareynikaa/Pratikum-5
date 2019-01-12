<?php 
	session_start();
	include("functionFirda.php");
	echo check_login();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Form Pendaftaran</title>
	<style media="screen">
		*:focus{
  			outline: none;
		}
		.form-input, textarea, select{
 			 padding: 0;
 			 border: 0;
 			 width: 100%;
		}
		*{
  			box-sizing: border-box;
  		}

		.wrapper{
  			display: grid;
 			grid-template-columns: 1fr 1fr;
  			min-height: 100vh;
 			margin: 0 auto;
  			background-color: #89253e;
  			opacity: 1.0;
  			width: 600px;
		}
		h1{
  			font-family: GeoSlab703 MdCn BT;
  			font-size: 45px;
  			color: white;
  			text-align: center;
		}

		label{
  			display: block;
  			padding: 10px 0;
  			font-family: candara;
  			font-size: 19px;
  			color: white;
		}

		.form-input{
 			transition: 0.3s;
  			padding: 5px 0;
  			opacity: 1.0;
  			background-color: #efc3ce;
  			font-family: candara;
  			font-size: 15px;
  			color: black;
  			font-weight: bold;
		}

		.form-input:hover{
 			opacity: 1.0;
  			background-color: white;
  			transition: 0.5s;
		}
		.form{
  			width: 500px;
  			margin-left: 50px;
		}
		textarea, select{
			padding: 5px;
			background-color: #efc3ce;
			opacity: 0.9;
			font-family: candara;
			font-size: 15px;
			color: black;
			font-weight: bold;
		}
		textarea:hover, select:hover{
			opacity: 0.9;
			background-color: white;
			transition: 0.5s;
		}
		input[type="submit"]{
		  	width: 155px;
		  	height: 30px;
		  	background-color: #1f3447;
		  	border: 2px solid #1f3447;
		  	color: white;
		  	margin-top: 15px;
		  	font-size: 15px;
		  	font-family: candara;
		  	font-weight: bold;
			border-radius: 6px;
			margin-right: 13px;
			margin-left: 11px;
  			cursor: pointer;
		}
		input[type="reset"]{
		  width: 155px;
		  height: 30px;
		  background-color: #1f3447;
		  border: 2px solid #1f3447;
		  color: white;
		  margin-top: 15px;
		  font-size: 15px;
		  font-family: candara;
		  font-weight: bold;
		  border-radius: 6px;
		  cursor: pointer;
	}
	input[type="submit"]:hover{
		  background-color: white;
		  color: #1f3447;
	}
	input[type="reset"]:hover{
		  background-color: white;
		  color: #1f3447;
	}
	input[type="radio"]{
		  margin-left: 3px;
		  cursor: pointer;
}
input[type="checkbox"]{
  margin-left: 3px;
  cursor: pointer;
}
form{
  width: 70%;
  margin: 0 auto;
}
body{
  background-image: linear-gradient(to top, rgba(58, 97, 134, 0.7), rgba(137, 37, 62, 0.7)), url(1000.jpg);
  background-size: cover;
  background-position: center;
  display: flex;
  align-items: center;
  justify-content: center;
}
#wii{
  font-family: candara;
  font-size: 17px;
  font-weight: bold;
  color: white;
  margin: 0;
}
input[type="checkbox"]{
  margin: 0 7px;
}
.link1{
  float: left;
      padding: 8px;
      margin-bottom: 900px;

      border-radius: 40px;
      background-color: #8cb3d9;
      font-family: GeoSlab703 MdCn BT;
      font-size: 23px;
      transition: all 0.5s;
      display: inline-block;
}
.link1:hover{
      background-color: #c6d9ec;
      color: #000;
    }

	</style>
</head>
<body>
  <div class="link1">
      <h3><a href="logout.php">LOGOUT!</a></h3>
  </div>
	<div class="wrapper">

      <div class="form">
        <form class="" action="" method="">
          <h1>Join Our Club Now!</h1>
          <p>
          <label for="Nama Lengkap">Nama Lengkap</label>
          <input type="text" name="Nama Lengkap" value=" " id="Nama Lengkap"class="form-input">
        </p>
          <p>
            <label for="Gender">Gender</label>
            <label id="woo"for="L">Male</label>
          <input type="radio" name="Gender" value="L" id="L">
          <label id="woo"for="P">Female</label>
          <input type="radio" name="Gender" value="P" id="P">
          </p>

          <p>
          <label for="Email">Email</label>
          <input type="email" name="Email" value=" "id="Email"class="form-input">
        </p>

          <p>
            <label for="Nomor Telepon">Nomor Telepon</label>
          <input type="number" name="Nomor Telepon" value=" "id="Nomor Telepon"class="form-input">
        </p>

          <p>
          	<label for="Alamat">Alamat</label>
          <textarea name="name" rows="6" cols="40" id="Alamat"></textarea>
        </p>

          <p>
          <label for="Angkatan">Angkatan</label>
          <select class="" name="Angkatan">
            <option value="" disabled selected>Pilih Angkatan</option>
            <option value="">2015</option>
            <option value="">2014</option>
            <option value="">2013</option>
          </select>
        </p>

        <p>
          <label for="">Materi yang Diambil : </label>
          <p id="wii">
          <input type="checkbox" name="materi" value="" id="Html">HTML/CSS3
          <input type="checkbox" name="materi" value="" id="javascript">Javascript
          <input type="checkbox" name="materi" value="" id="sql">SQL
          <input type="checkbox" name="materi" value="" id="php">PHP
          </p>
          </p>

          <p>
          <input type="submit" onclick="" name="" value="Submit"> <input type="reset" name="" value="Reset">
        </p>
        </form>
      </div>
    </div>
</body>
</html>