<?php
$dir = '.';
$page = ($_GET['page'] != '') ? $_GET['page'] : 'main';
$disp = ($_GET['disp'] != '') ? $_GET['disp'] : 'get';
$itemList = str_replace($dir.'/','',(glob($dir.'/mod.*.php')));
$dispList = str_replace($dir.'/','',(glob($dir.'/dsp.*.php')));
$revItemList = array_reverse(str_replace($dir.'/','',(glob($dir.'/mod.*.php'))), true);
$appPkgList = str_replace($dir.'/','',(glob($dir.'/*.{app,pkg}', GLOB_BRACE)));
$pkgList = str_replace($dir.'/','',(glob($dir.'/*.pkg')));
$appList = str_replace($dir.'/','',(glob($dir.'/*.app')));
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Listeg</title>
<link rel="shortcut icon" href="favicon.png?rev=<?=time();?>" type="image/x-icon">
<link href="styles.css" rel="stylesheet">
<script src="jquery.js"></script>
<script src="base.js"></script>
<script>
window.onload = function() {
    document.getElementById('enterSeq').focus();
}
</script>
</head>
<body>
<div class="header">
<div class="logo">
<img src="logo.png" width="68" height="23" alt="Project">
</div>
<div class="clearfix"></div>
</div>
<div class="clear">
<ul class="main-menu">
<?php
foreach ($itemList as $key=>$value) {
    $itemID = str_replace('mod.', '', $value);
    $itemID = str_replace('.php', '', $itemID);
    $itemTitle = ucfirst($itemID);
?>
<li><a href="<?='index.php?page='.$itemID;?>"><?=$itemTitle;?></a></li>
<?php } ?>
</ul>
</div>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td class="left-collum-index">
<?php include 'mod.'.$page.'.php'; ?>
</td>
<td class="right-collum-index">
<div class="project-folders-menu">
<ul class="main-menu">
<?php
foreach ($dispList as $key=>$value) {
    $itemID = str_replace('dsp.', '', $value);
    $itemID = str_replace('.php', '', $itemID);
    $itemTitle = ucfirst($itemID);
?>
<li><a href="<?='index.php?disp='.$itemID;?>"><?=$itemTitle;?></a></li>
<?php } ?>
</ul>
<div class="clearfix"></div>
</div>
<div class="index-auth">
<?php include 'dsp.'.$disp.'.php'; ?>
</td>
</tr>
</table>
<div class="clearfix">
<ul class="main-menu">
<?php
foreach ($revItemList as $key=>$value) {
    $itemID = str_replace('mod.', '', $value);
    $itemID = str_replace('.php', '', $itemID);
    $itemTitle = ucfirst($itemID);
?>
<li><a href="<?='index.php?page='.$itemID;?>"><?=$itemTitle;?></a></li>
<?php } ?>
</ul>
</div>
<div class="footer">
&copy;&nbsp;<nobr>2018</nobr> Project.
</div>
</body>
</html>