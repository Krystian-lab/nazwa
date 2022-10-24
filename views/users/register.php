
<section class="signin-page account">
<div class="container">
  <div class="row">
    <div class="col-md-8 mx-auto">
	<form method="post" name="registerFrom" id="registerFrom" action="<?php echo ROOT_URL; ?>users/createAccount">
		<table calass ="table">
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
					<input class="radio_check" type="radio" name="firm" value="1" checked="checked" id="statusFirm">
					<span class="ie-inline-fix">firma</span>            
					<input class="radio_check" type="radio" name="firm" value="0" id="statusNotFirm">
					<span class="ie-inline-fix">klient indywidualny</span>    
				</td>
			</tr>
</br>
			<tr>
				<td align="right" width="40%" class="label" id="td_name" >
					<p id="name_firm">Nazwa Firmy</p>
				</td>
				<td>
				   <input style="width:230px;" id="in_name_firm" type="text" name="name_firm" class="name_firm" value="">
			   </td>
			</tr>
			</br>
			
		
			<tr>
				<td align="right" width="40%" class="label" id="td_street">                                                                 
					Ulica, nr domu
				</td>
				<td>
				   <input style="width:165px;" id="in_street" type="text" name="street" value="" class="in_street ">
				   <input style="width:60px;" id="in_localNo" type="text" name="localNo" maxlength="8" class="in_localNo"    value="">
				</td>
			</tr>
			</br>
			
			<tr>
				<td align="right" width="40%" class="label" id="td_postCode">                        
					Miejscowość,Kod pocztowy
				</td>
				<td>  
					<input style="width:165px;" id="place" type="text" name="place" value="" class="in_place">
					<input style="width:60px;" id="in_postCode" type="text" name="postCode" maxlength="6" class="in_postCode" value="">
			   </td>
			</tr>
			</br>
			<tr>
				<td align="right" width="40%" class="label" id="td_voivodeship">
					Województwo
				</td>
				<td>
				   <select style="width:230px;" id="voivodeship" name="voivodeship" class="voivodeship">
					   <option value="0">Województwo</option>
					</select>
			   </td>
			</tr>
			</br>
			<tr>
				<td align="right" width="40%" class="label" id="td_phonePrefix">                                                                                              
					 Telefon 
				</td>
				<td>
				   <input style="width:40px;" id="in_phonePrefix" type="text" name="phonePrefix" value="+48" class="in_phonePrefix ">
				   <input style="width:185px;" id="phone" type="text" name="phone" value=""  class="in_phone" >
			   </td>
			</tr>
			</br>
			<tr>
				<td align="right" width="40%" class="label" id="td_Email">
					E-mail
				</td>
				<td>
				   <input style="width:230px;" id="in_Email" type="mail" name="Email" value=""  class="in_Email">
				</td>
			</tr>
		
			<tr>
				<td align="right" width="40%" class="label" id="td_PESEL">
					<p id="PESEL_NIP">NIP</p>
				</td>
				<td>
				   <input style="width:230px;" id="in_PESEL_NIP" type="text" name="PESEL_NIP" value=""  class="in_PESEL_NIP" ">
				</td>
			</tr>
			
			
		</table>
		<div class=hoverdiv>
    <button type="submit" class="form-submit" id= "form-submit">Zapisz</button>
 </form>
   
          
   </div>
  </div>
 </div>
</div> 
</section>
	
	