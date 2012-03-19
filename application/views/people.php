
<div id="">
<table cellpadding="0" cellspacing="0" border="0" class="display" id="">
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
            <?php for ($i = 0; $i < $result_entries['count']; $i++) { ?>
        
             <tr class=odd gradeC>
                 <td><?php  if(isset($result_entries[$i]['department'][0])) { echo  $result_entries[$i]['department'][0]; }?></td>
                 <td><?php if(isset($result_entries[$i]['title'][0])) { echo  $result_entries[$i]['title'][0]; }?></td>
                 <td><b><?php echo $result_entries[$i]['cn'][0]; ?></b></td>
                 
                 <td><?php if(isset($result_entries[$i]['userprincipalname'][0])) { echo  $result_entries[$i]['userprincipalname'][0]; }?></td> 
                 <td><b><?php if(isset($result_entries[$i]['telephonenumber'][0])) { echo  $result_entries[$i]['telephonenumber'][0]; }?></b></td> 
             </tr>
            <?php } ?>
	</tbody>
	
</table>
			</div>