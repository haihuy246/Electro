<?php
    $product_id = $_REQUEST['product'];
    session_start();

    $_SESSION['product'][] = $product_id;
    $_SESSION = array_merge($_SESSION);

    $_SESSION['product'][] = $product_id+1;
    $_SESSION = array_merge($_SESSION);

    $_SESSION['product'][] = $product_id+1;
    $_SESSION = array_merge($_SESSION);
    print_r($_SESSION);
    echo "<br> Favorite color is " . $_SESSION['product[1]'] . ".<br>";
    return false;
    
    
?>