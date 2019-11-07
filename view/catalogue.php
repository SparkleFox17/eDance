<?php
include("./controller/controller.catalogue.php");

echo "<div class='cards'>";
foreach($items as $k=>$v){
    echo  "<a href='./view/catalogue-item.php'><div class='card' data-id='$k' style='background-image:url(".$v['main-image'].")'>
            <div class='txt'>"
                .$v['title'].
            "</div>
        </div></a>";
}
echo "</div>";
?>



