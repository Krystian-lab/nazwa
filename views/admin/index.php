	<?php if(isset($_SESSION['is_logged_in'])) : ?>
	<?php endif; ?>
	<div class="col-lg-12">
	 <table id="customers">
	 <tr>
    <th>Nazwa</th>
    <th>Ulica</th>
    <th>Numer Domu</th>
	<th>Miejscowosc</th>
	<th>Kod pocztowy</th>
	<th>wojewodztwo</th>
	<th>telefon</th>
	<th>email</th>
	<th>NIP/PESEL</th>
	<th>Akcja</th>
	
  </tr>
	<?php foreach($model as $item) : ?>
  <tr>
    <td><?php if($item['imie_i_nazwisko']!=null) echo $item['imie_i_nazwisko']; else echo $item['Firma'] ?></td>
    <td><?php echo $item['ulica']; ?></td>
    <td><?php echo $item['nr_domu']; ?></td>
	<td><?php echo $item['Miejscowosc']; ?></td>
	<td><?php echo $item['kod_pocztowy']; ?></td>
	<td><?php echo $item['wojewodztwo']; ?></td>
	<td><?php echo $item['telefon_prefix']; ?></td>
	<td><?php echo $item['telefon']; ?></td>
	<td><?php echo $item['email']; ?></td>
	<td><?php if($item['PESEL']!=null)echo $item['PESEL']; else echo $item['NIP'];  ?></td>
	<td>
	<a class="btn btn-primary" href="<?php echo ROOT_URL; ?>admin/edit/<?php echo $item['id_user']?>">edytuj</a>
	<a class="btn btn-danger" href="<?php echo ROOT_URL; ?>admin/remove/<?php echo $item['id_user']?>">usuń</a>
	</td>
  </tr>	
	<?php endforeach; ?>
</table>
	</div>