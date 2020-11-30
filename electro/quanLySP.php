<?php
if(isset($_REQUEST['btnSuaSP'])) {
	$loaiSP = $_REQUEST['cboLoai'];
	$tenSP = $_REQUEST['txtTenSP'];
	$gia = $_REQUEST['txtGiaSP'];
	$hinh1 = uploadHinh("fileHinh1");
	$hinh2 = uploadHinh("fileHinh2");
	$hinh3 = uploadHinh("fileHinh3");
	$hinh4 = uploadHinh("fileHinh4");
	$moTa = $_REQUEST['txtMoTa'];
	$idSP = $_REQUEST['id'];
	$cong_nghe = $_REQUEST['txtCong_nghe'];
	$phan_giai_mh = $_REQUEST['txtPGiai_manhinh'];
	$man_hinh = $_REQUEST['txtMan_hinh'];
	$phan_giai = $_REQUEST['txtPhan_giai'];
	$quay_phim = $_REQUEST['txtQuay_phim'];

	$moTa = htmlspecialchars($moTa, ENT_QUOTES);
	
	$sql = sprintf("UPDATE san_pham SET id_loai=%d, ten_sp='%s', gia=%f, hinh1='%s', hinh2='%s', hinh3='%s', hinh4='%s', mota='%s', cong_nghe='%s', phan_giai_man_hinh='%s', man_hinh='%s', phan_giai='%s', quay_phim='%s' WHERE id=%d", $loaiSP, $tenSP, $gia, $hinh1, $hinh2, $hinh3, $hinh4, $moTa,$cong_nghe,$phan_giai_mh,$man_hinh,$phan_giai,$quay_phim, $idSP);
	// echo ($sql);
	
	// insert into DB
	require('ConnectDB.php');
	if ($conn->query($sql) === TRUE) {
		  echo "Update successfully";
	?>
		<script>
	  		alert("Cập nhật thành công.");
			window.open("admin_suaSP.php?trang=1","_self");
		</script>
	<?php
	} else {
	  echo "Error: " . $sql . "<br>" . $conn->error;
	}
	$conn->close();
}
?>

<?php
if(isset($_REQUEST['ctrlXoa'])) {
	$idSP = $_REQUEST['idSP'];
	
	$sql = sprintf("DELETE FROM san_pham WHERE id=%d", $idSP);
	//echo ($sql);
	
	// query DB
	require('ConnectDB.php');
	if ($conn->query($sql) === TRUE) {
	  echo "Deleted successfully";
	?>
	  	<script>
			alert("Xoá sản phẩm thành công.");
		  window.open("admin_suaSP.php?trang=1","_self");
	  	</script>
  	<?php
	} else {
	  echo "Error: " . $sql . "<br>" . $conn->error;
	}
	$conn->close();
}
?>
<?php
if(isset($_REQUEST['btnThemSP'])) {
	$loaiSP = $_REQUEST['cboLoai'];
	$tenSP = $_REQUEST['txtTenSP'];
	$gia = $_REQUEST['txtGiaSP'];
	$hinh1 = uploadHinh("fileHinh1");
	$hinh2 = uploadHinh("fileHinh2");
	$hinh3 = uploadHinh("fileHinh3");
	$hinh4 = uploadHinh("fileHinh4");
	$moTa = $_REQUEST['txtMoTa'];
	$cong_nghe = $_REQUEST['txtCong_nghe'];
	$phan_giai_mh = $_REQUEST['txtPGiai_manhinh'];
	$man_hinh = $_REQUEST['txtMan_hinh'];
	$phan_giai = $_REQUEST['txtPhan_giai'];
	$quay_phim = $_REQUEST['txtQuay_phim'];

	$moTa = htmlspecialchars($moTa, ENT_QUOTES);
	
	$sql = sprintf("INSERT INTO san_pham (id_loai, ten_sp, gia, hinh1, hinh2, hinh3, hinh4, mota, cong_nghe, phan_giai_man_hinh, man_hinh, phan_giai, quay_phim ) VALUES (%d, '%s', %f, '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s')", $loaiSP, $tenSP, $gia, $hinh1, $hinh2, $hinh3, $hinh4, $moTa,$cong_nghe,$phan_giai_mh,$man_hinh,$phan_giai,$quay_phim);
	// echo ($sql);

	// insert into DB
	require('ConnectDB.php');
	if ($conn->query($sql) === FALSE) {
	  	echo "Error: " . $sql . "<br>" . $conn->error;
	}else {
	?>
		<script>
	  		alert("Thêm sản phẩm thành công.");
			window.open("admin_suaSP.php?trang=1","_self");
		</script>
	<?php
	}
	$conn->close();
}
?>

<?php
function uploadHinh($name) {
	$target_dir = "uploads/";
	$target_file = $target_dir . basename($_FILES[$name]["name"]);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

	// Check if image file is a actual image or fake image
	if(isset($_POST["btnThemSP"])) {
	  $check = getimagesize($_FILES[$name]["tmp_name"]);
	  if($check !== false) {
		echo "File is an image - " . $check["mime"] . ".";
		$uploadOk = 1;
	  } else {
		echo "File is not an image.";
		$uploadOk = 0;
	  }
	}
	
	// Check if file already exists
	if (file_exists($target_file)) {
	//   echo "Sorry, file already exists.";
	//   $uploadOk = 0;
		return $target_file;
	}
	
	// Check file size
	if ($_FILES[$name]["size"] > 500000) {
	  echo "Sorry, your file is too large.";
	  $uploadOk = 0;
	}
	
	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "gif" ) {
	  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
	  $uploadOk = 0;
	}
	
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
	  return "Sorry, your file was not uploaded.";
	// if everything is ok, try to upload file
	} else {
	  if (move_uploaded_file($_FILES[$name]["tmp_name"], $target_file)) {
		echo "The file ". basename( $_FILES[$name]["name"]). " has been uploaded.";
	  } else {
		return "Sorry, there was an error uploading your file.";
	  }
	}
	
	return $target_file;
}
?>