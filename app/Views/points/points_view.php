<div class="container">
    <div class="row m-2">
	<div class="col">
	    <a class="btn btn-outline-success" href="<?php echo site_url('/clients/newclient') ?>" role="button">Nowy klient</a>
	    <a class="btn btn-outline-success" href="<?php echo site_url('/clients/archivelist') ?>" role="button">Archiwum</a>
	</div>
    </div>
    <div class="row">
		<div class="col">
			<table id="points_list" style="width:100%">
				<thead>
					<tr>
						<th>Opcje</th>
						<th>Nazwa</th>
						<th>Adres</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($points as $point):?>
						<tr>
							<td></td>
							<td><?php echo $point['name']; ?></td>
							<td><?php echo $point['address']; ?></td>
						</tr>
					<?php endforeach; ?>
				</tbody>
				<tfoot>
					<tr>
						<th>Opcje</th>
						<th>Nazwa</th>
						<th>Adres</th>
					</tr>
				</tfoot>
			</table>
		</div>
    </row>
</div>