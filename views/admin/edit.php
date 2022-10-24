<section class="signin-page account">
<div class="panel panel-default">
  <div class="panel-body">
    <form method="post" action="<?php echo ROOT_URL; ?>admin/change/<?=$model['id_user'];?>">
    	<div class="form-group">
		<table>
			<tr>
				<td class="reg_tab_title" colspan="2">
				   Dane identyfikacyjne
				</td>
			</tr>
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
					<p id="name_firm"><?php if ($model['NIP'] != null) echo 'nazwa firmy'; else echo 'imię i nazwisko';?></p>
				</td>
				<td>
				   <input id="name" type="text" name="name" class="name" value="<?php if ($model['NIP'] != null) echo $model['Firma']; else echo $model['imie_i_nazwisko'];?>">
			   </td>
			</tr>
			</br>
			
		
			<tr>
				<td align="right" width="40%" class="label" id="td_street">                                                                 
					Ulica, nr domu
				</td>
				<td>
				   <input id="street" type="text" name="street" value="<?php echo $model['ulica']?>" class="in_street ">
				   <input id="localNo" type="text" name="localNo" maxlength="8" class="in_localNo"    value="<?php echo $model['nr_domu']?>">
				</td>
			</tr>
			</br>
			
			<tr>
				<td align="right" width="40%" class="label" id="td_postCode">                        
					Miejscowość,Kod pocztowy
				</td>
				<td>  
					<input id="place" type="text" name="place" value="<?php echo $model['Miejscowosc']?>" class="in_place">
					<input id="postCode" type="text" name="postCode" maxlength="6" class="in_postCode" value="<?php echo $model['kod_pocztowy']?>">
			   </td>
			</tr>
			</br>
			<tr>
				<td align="right" width="40%" class="label" id="td_voivodeship">
					Województwo
				</td>
				<td>
				   <select id="voivodeship" name="voivodeship" class="voivodeship">
					   <option>Województwo</option>
					</select>
			   </td>
			</tr>
			</br>
			<tr>
				<td align="right" width="40%" class="label" id="td_phonePrefix">                                                                                              
					 Telefon 
				</td>
				<td>
				   <input id="phonePrefix" type="text" name="phonePrefix" value="<?php echo $model['telefon_prefix']?>" class="in_phonePrefix ">
				   <input id="phone" type="text" name="phone" value="<?php echo $model['telefon']?>"  class="in_phone" >
			   </td>
			</tr>
			</br>
			<tr>
				<td align="right" width="40%" class="label" id="td_Email">
					E-mail
				</td>
				<td>
				   <input id="Email" type="mail" name="Email" value="<?php echo $model['email']?>"  class="in_Email">
				</td>
			</tr>
		
			<tr>
				<td align="right" width="40%" class="label" id="td_PESEL">
					<p id="PESEL_NIP"><?php if ($model['NIP'] != null) echo 'NIP'; else echo 'PESEL';?></p>
				</td>
				<td>
				   <input id="PESEL_NIP" type="text" name="PESEL_NIP" value="<?php if ($model['NIP'] != null) echo $model['NIP']; else echo $model['PESEL'];?>"  class="in_PESEL_NIP" >
				</td>
			</tr>
			
			
		</table>
    	</div>
    	<input class="btn btn-primary" name="submit" type="submit" value="Zmień" />
        <a class="btn btn-danger" href="<?php echo ROOT_URL; ?>admin">Anuluj</a>
    </form>
  </div>
</div>
</section>
