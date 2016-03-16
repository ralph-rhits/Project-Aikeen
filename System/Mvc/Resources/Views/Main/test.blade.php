	
	
	<div class="fl">
		<table class="table" >
		<thead>
			<tr>
				<th>Id</th>
				<th>City</th>
			</tr>
		</thead>

		<tbody>

		@foreach($data as $data)
		
			<tr>
				<td>{{$data['_id']}}</td>
				<td>{{$data['title']}}</td>
			</tr>
		@endforeach
		</tbody>

		</table>
	</div>
