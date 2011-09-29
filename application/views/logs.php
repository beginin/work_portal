<table>
    <tr>
        <td valign="top">
<?php foreach($row as $man): ?>
<div>
                 <a href="#" onclick="
                                 var id = '<?php echo md5($man['User']); ?>';
                                 if (document.getElementById(id).style.display != 'block')
                                 {document.getElementById(id).style.display = 'block'}
                                 else {document.getElementById(id).style.display = 'none'}
                                 return false;"><?php echo $man['User'];  ?></a>
<div id="<?php echo md5($man['User']); ?>" style="display: none;">
<?php foreach($man['log'] as $row): ?>
<div>
<?php
if ($row['in']==true){echo "вход";}
else {echo "выход";};
echo " ";
echo $row['Time']." ";
echo $row['Comp']." ";

?></div>
<?php endforeach; ?>
</div>
</div>
<?php endforeach; ?>
</td>

<td valign="top">
<?php foreach($comps as $man): ?>
<div>
                 <a href="#" onclick="
                                 var id = '<?php echo md5($man['Comp']); ?>';
                                 if (document.getElementById(id).style.display != 'block')
                                 {document.getElementById(id).style.display = 'block'}
                                 else {document.getElementById(id).style.display = 'none'}
                                 return false;"><?php echo $man['Comp'];  ?></a>
<div id="<?php echo md5($man['Comp']); ?>" style="display: none;">
<?php foreach($man['log'] as $row): ?>
<div>
<?php
if ($row['in']==true){echo "вход";}
else {echo "выход";};
echo " ";
echo $row['Time']." ";
echo $row['User']." ";

?></div>
<?php endforeach; ?>
</div>
</div>
<?php endforeach; ?>
</td>



</tr>
</table>