<section class="signin-page account">
<div class="panel panel-default">
  <div class="panel-body">
    <form method="post" action="<?php echo ROOT_URL; ?>admin/change/<?=$model['id_user'];?>">
    	<div class="form-group">
		<tbody>
			
			<tr>
				<td align="right" width="34%" class="top_cell" id="td_firm">
					Status prawny:
				</td>
				<td class="top_cell">
					
					<input class="radio_check" type="radio" name="firm" value="1" disabled="disabled"<?php if ($model['NIP'] != NULL) echo 'checked'  ?> >
					<span class="ie-inline-fix">firma</span>            
					<input class="radio_check" type="radio" name="firm" value="0"disabled="disabled" <?php if ($model['PESEL'] != NULL) echo 'checked'  ?> >
					<span class="ie-inline-fix">klient indywidualny</span>
			
				</td>
			</tr>
</br>
			<tr>
				<td align="right" width="40%" class="label" id="td_name" >
					<?php if ($model['NIP'] != null) echo 'nazwa firmy'; else echo 'imię i nazwisko';?>
				</td>
				<td>
				  <?php if ($model['NIP'] != null) echo $model['Firma']; else echo $model['imie_i_nazwisko'];?>
			   </td>
			</tr>
			</br>
			
		
			<tr>
				<td align="right" width="40%" class="label" id="td_street">                                                                 
					Ulica, nr domu
				</td>
				<td>
				<?php echo $model['ulica']?>
				<?php echo $model['nr_domu']?>
				</td>
			</tr>
			</br>
			
			<tr>
				<td align="right" width="40%" class="label" id="td_postCode">                        
					Miejscowość,Kod pocztowy
				</td>
				<td>  
					<?php echo $model['Miejscowosc']?>
					<?php echo $model['kod_pocztowy']?>
			   </td>
			</tr>
			</br>
			<tr>
				<td align="right" width="40%" class="label" id="td_voivodeship">
					Województwo
				</td>
				<td>
				<?php echo $model['wojewodztwo']?>
			   </td>
			</tr>
			</br>
			<tr>
				<td align="right" width="40%" class="label" id="td_phonePrefix">                                                                                              
					 Telefon 
				</td>
				<td>
				  <?php echo $model['telefon_prefix']?>
				   <?php echo $model['telefon']?>
			   </td>
			</tr>
			</br>
			<tr>
				<td align="right" width="40%" class="label" id="td_Email">
					E-mail
				</td>
				<td>
				  <?php echo $model['email']?>
				</td>
			</tr>
			</br>
			<tr>
				<td align="right" width="40%" class="label" id="td_PESEL">
					<?php if ($model['NIP'] != null) echo 'NIP'; else echo 'PESEL';?>
				</td>
				<td>
				  <?php if ($model['NIP'] != null) echo $model['NIP']; else echo $model['PESEL'];?>
				</td>
			</tr>
			
			
		</tbody>
    	</div>
    	
  </div>
</div>
</section>