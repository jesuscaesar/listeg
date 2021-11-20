<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td class="iat">
<label for="enterPkg">Existing package:</label>
<input id="enterPkg" size="30" name="pkg" type="text" value="from">
</td>
</tr>
<tr>
<td class="iat">
<label for="enterRepo">GitHub repo:</label>
<input id="enterRepo" size="30" name="repo" type="text" value="">
</td>
</tr>
<tr>
<td class="iat">
<label for="enterUser">GitHub user:</label>
<input id="enterUser" size="30" name="user" type="text" value="">
</td>
</tr>
<tr>
<td>
<label for="enterKey">Method:</label>
<select id="enterKey" onchange="
var keyVal = enterKey.options[enterKey.selectedIndex].value;
if (keyVal == 'i') {
    enterPkg.value = 'from';
    enterRepo.value = '';
    enterUser.value = '';
} else if (keyVal == 'r') {
    enterPkg.value = '';
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
<input type="button" onclick="get(enterKey.options[enterKey.selectedIndex].value,enterPkg.value,enterRepo.value,enterUser.value);" value="GET">
</td>
</td>
</tr>
</table>