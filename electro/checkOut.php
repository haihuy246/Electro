<?php
    session_start();
    require('ConnectDB.php');

    $sql = sprintf("SELECT id FROM khach_hang WHERE username LIKE '%s' ",$_SESSION['username']);
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    $cus_id = $row['id'];
    $ngay = date("Y-m-d");
    $pro_id = $_SESSION['product'];

    //$sql = sprintf("INSERT INTO san_pham (id_loai,_giuay_phim ) VALUES (%d, '%s', %f,s', '%s')", $loaiSP, $tenSP);
    $sql = sprintf("INSERT INTO don_hang (cus_id, pro_id, ngay, trang_thai) VALUES ($cus_id, $pro_id, CURDATE(), 'Chưa giao')");

    if ($conn->query($sql) === FALSE) {
        echo "Error: " . $sql . "<br>" . $conn->error;
    } else {
?>
        <script>
            alert("Đặt mua thành công.");
            window.open("index.php","_self");
        </script>
<?php
    }

    $conn->close();

?>