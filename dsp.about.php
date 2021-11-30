<?php
$systemInfo = file_get_contents('system.info');
$systemExp = explode('=||=', $systemInfo);
$systemInfoName = $systemExp[0];
$systemInfoVersion = $systemExp[1];
?>
<label><b>Name:</b> <?=$systemInfoName;?></label>
<label><b>Version:</b> <?=$systemInfoVersion;?></label>