<?php
    session_start();
    require('ConnectDB.php');
    if (isset($_REQUEST['update_ho'])){
        $update_ho       = $_REQUEST['update_ho'];
        $update_ten      = $_REQUEST['update_ten'];
        $update_sdt      = $_REQUEST['update_sdt'];
        $update_email    = $_REQUEST['update_email'];
        $update_address  = $_REQUEST['update_address'];
        $update_username = $_SESSION['username'];

        $sql = sprintf("UPDATE khach_hang SET ho='%s', ten='%s', sdt='%s', email='%s', dia_chi='%s' WHERE username='%s'",$update_ho,$update_ten,$update_sdt,$update_email,$update_address,$update_username);

        if ($conn->query($sql) === TRUE) {
?>    
        <script>
            alert("Cập nhật thành công.");
            window.open("user_info.php","_self");
        </script>
<?php
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
?>