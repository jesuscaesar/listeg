<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td class="iat">
<label for="enterPkg">Existing package:</label>
<input id="enterPkg" size="30" name="pkg" type="text" value="from">
</td>
</tr>
<tr>
<td class="iat">
<label for="enterRepo">Git Repository:</label>
<input id="enterRepo" size="30" name="repo" type="text" value="">
</td>
</tr>
<tr>
<td class="iat">
<label for="enterBranch">Repository branch:</label>
<input id="enterBranch" size="30" name="branch" type="text" value="">
</td>
</tr>
<tr>
<td class="iat">
<label for="enterUser">Git User:</label>
<input id="enterUser" size="30" name="user" type="text" value="">
</td>
</tr>
<tr>
<td>
<label for="enterRepo">Git Host:</label>
<select id="enterHost">
<option value="68747470733a2f2f6769746875622e636f6d">GitHub</option>
<option value="68747470733a2f2f6769746c61622e636f6d">GitLab</option>
<option value="68747470733a2f2f6269746275636b65742e6f7267">BitBucket</option>
</select> 
<label for="enterKey">Method:</label>
<select id="enterKey" onchange="
var curSys = getButton.name;
var keyVal = enterKey.options[enterKey.selectedIndex].value;
if (keyVal == 'i') {
    enterPkg.value = 'from';
    enterRepo.value = '';
    enterUser.value = '';
} else if (keyVal == 'r') {
    enterPkg.value = curSys;
    enterRepo.value = '';
    enterUser.value = '';
} else if (keyVal == 'd') {
    enterPkg.value = '';
    enterRepo.value = 'from';
    enterUser.value = 'here';
}">
<option value='i'>Install</option>
<option value='r'>Replace</option>
<option value='d'>Remove</option>
</select>
<input id='getButton' name="<?=file_get_contents('system.info');?>" type="button" onclick="get(enterKey.options[enterKey.selectedIndex].value, enterHost.options[enterHost.selectedIndex].value, enterPkg.value, enterRepo.value, enterBranch.value, enterUser.value);" value="GET">
</td>
</td>
</tr>
</table>