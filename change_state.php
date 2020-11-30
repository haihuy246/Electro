<?php
    require('ConnectDB.php');
    if ( isset($_REQUEST['don_hang_id']) ){
        $dh_id = $_REQUEST['don_hang_id'];
        //$sql = sprintf("UPDATE san_pham SET id_%s'ai='%sphim='%s' WHERE id=%d", $loaiai,$qu, $idSP);
        $sql = sprintf("SELECT trang_thai FROM don_hang WHERE id=%d",$dh_id);
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $da_giao = 'Đã giao';
        $chua_giao = 'Chưa giao';
        $state = $row['trang_thai'];
        if ($state == 'Đã giao'){
            $sql = sprintf("UPDATE don_hang SET trang_thai='%s' WHERE id=%d",$chua_giao,$dh_id);
        } else if ($state == 'Chưa giao'){
            $sql = sprintf("UPDATE don_hang SET trang_thai='%s' WHERE id=%d",$da_giao,$dh_id);
        }
        if ($conn->query($sql) === TRUE) {
            echo "update successful";
            header("Location: admin_quanly.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
    }

?>