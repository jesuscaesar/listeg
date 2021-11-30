<?php
$systemInfo = file_get_contents('system.info');
$systemData = explode('=||=', $systemInfo);
foreach ($systemData as $key=>$value) {
    $valueExp = explode('||', $value);
?>
<label><b><?=$valueExp[0];?></b> <?=$valueExp[1];?></label><br>
<?php } ?>