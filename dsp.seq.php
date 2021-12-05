<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td class="iat">
<label for="enterSeq">GET Sequence:</label>
</td>
</tr>
<tr>
<td class="iat">
<textarea id="enterSeq" size="30" name="seq" type="text" placeholder="Enter GET command sequence"></textarea>
</td>
</tr>
<tr>
<td>
<input type="button" onclick="seq(enterSeq.innerText);" value="GET">
</td>
</tr>
</table>