<?php
    require("conn.php");
    if(isset($_POST['hidden'])){
        $tTitle = $_POST['hidden'];
    }
    $travelsInfo = $mongo->findOne("travels",array("tTitle"=>$tTitle));
    $mongo->remove("travels", array("tTitle"=>$travelsInfo['tTitle']));
    echo "您已成功删除该游记!";

?>