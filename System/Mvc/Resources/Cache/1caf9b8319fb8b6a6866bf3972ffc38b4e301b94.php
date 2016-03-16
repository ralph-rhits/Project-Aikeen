	
	
	<div class="fl">
		<table class="table" >
		<thead>
			<tr>
				<th>Id</th>
				<th>City</th>
			</tr>
		</thead>

		<tbody>

		<?php foreach($data as $data): ?>
		
			<tr>
				<td><?php echo e($data['_id']); ?></td>
				<td><?php echo e($data['title']); ?></td>
			</tr>
		<?php endforeach; ?>
		</tbody>

		</table>
	</div>
