<?php
foreach ($lesQuantitéCDM as $qte ){
    $qte->CST_QTE;
    echo "<input class='form-control' type='text' id='CST_QTE' value='".$qte->CST_QTE."'>";
}