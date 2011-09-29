
<div id="demo">
<table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
	<thead>
		<tr>
			<th>Организация</th>
                        <th>Должность</th>
                        <th>ФИО</th>
                        <th>Электронный адрес</th>
                        <th>Телефон</th>
                        <th>Второй телефон</th>
                        <th>Сотовый</th>
                        <th>Адрес</th>
                            
		</tr>
	</thead>
	<tbody>
            <? for ($i = 0; $i < $result_entries['count']; $i++) { ?>
        
             <tr class=odd gradeC>
                 <td><? if(isset($result_entries[$i]['department'][0])) { echo  $result_entries[$i]['department'][0]; }?></td>
                 <td><? if(isset($result_entries[$i]['title'][0])) { echo  $result_entries[$i]['title'][0]; }?></td>
                 <td><b><?=$result_entries[$i]['cn'][0] ?></b></td>
                 
                 <td><? if(isset($result_entries[$i]['mail'][0])) { echo  $result_entries[$i]['mail'][0]; }?></td> 
                 <td><b><? if(isset($result_entries[$i]['telephonenumber'][0])) { echo  $result_entries[$i]['telephonenumber'][0]; }?></b></td> 
                 <td><? if(isset($result_entries[$i]['othertelephone'][0])) { echo  $result_entries[$i]['othertelephone'][0]; }?></td>
                 <td><? if(isset($result_entries[$i]['mobile'][0])) { echo  $result_entries[$i]['mobile'][0]; }?></td>
                 <td><? if(isset($result_entries[$i]['streetaddress'][0])) { echo  $result_entries[$i]['streetaddress'][0]; }?></td>
             </tr>
            <? } ?>
	</tbody>
	
</table>
			</div>