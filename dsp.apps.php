<?php
foreach ($appList as $key=>$value) {
    $fileContent = file_get_contents($value);
    $fileExp = explode('|[1]|', $fileContent);
    $fileTitle = $fileExp[0];
    $fileLink = $fileExp[2];
?>
<input type="button" onclick="<?=$fileLink;?>" value="<?=$fileTitle;?>">
<?php } ?>