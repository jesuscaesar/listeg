<?php
$systemInfo = file_get_contents('system.info');
$systemData = explode('=||=', $systemInfo);
?>
<p><label><b>Name:</b> <?=$systemData[0];?></label></p>
<p><label><b>Version:</b> <?=$systemData[1];?></label></p>