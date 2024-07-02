<div class="grid-container">

	<header>
		<h1>Trang quản lý nhân viên</h1>
		<link rel="stylesheet" type="text/css" href="vendors/styles/container.css" />
		<script src="vendors/scripts/container.js"></script>
		
	</header>
	<main>
		<div class="search-bar">
           
			<input type="text" placeholder="Tìm kiếm..." id="search-box">
			<button type="button" id="search-btn">Tìm kiếm</button>
		</div>
		<div class="table-container">
			<table>
				<thead>
					<tr>
						<th>ID</th>
						<th>Tên</th>
						<th>Giới tính</th>
						<th>Số điện thoại</th>
                        <th>Email</th>
						<th>Ngày tạo</th>
						<th>Hành động</th>
					</tr>
				</thead>
				<tbody>
			@foreach($customerList as $customer)
				<tr>
					<td>{{$index++ }}</td>
					<td>{{$customer->username}}</td>
					<td>{{$customer->gender}}</td>
					<td>{{$customer->email}}</td>
					<td>{{$customer->created_at}}</td>
					<td><button class="btn btn-warning">Edit</button></td>
					<td><button class="btn btn-danger">Delete</button></td>
				</tr>
							
			@endforeach
				</tbody>
			</table>
		</div>
		<div class="pagination">
			<ul>
				<li><a href="#">1</a></li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li><a href="#">4</a></li>
				<li><a href="#">5</a></li>
			</ul>
		</div>
	</main>
</div>