<?php require_once "header.php";
if(isset($_GET['page'])){
    $page = $_GET['page'];
    if($page == "modernahero"){
        echo "its true";
        require_once "templates/pages/modernahero.php";
    }
    if($page == "services"){
        echo "its true";
        require_once "templates/pages/services.php";
    }
}else{
    header("Location:index.php");
}

require_once "footer.php" ;?>