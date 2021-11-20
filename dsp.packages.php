<?php
foreach ($pkgList as $key=>$value) {
    $packageID = basename($value, '.pkg');
    $fileTitle = 'Remove '.$packageID;
    $fileLink = "get('d', '".$packageID."', 'from', 'here');";
?>
<input type="button" onclick="<?=$fileLink;?>" value="<?=$fileTitle;?>">
<?php } ?>