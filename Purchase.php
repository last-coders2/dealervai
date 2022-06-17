<?php
	include"submenu.php"
?>
<div class="container">
	<h2>Purchase</h2>
	<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="background-color: #067CB9;">
							Add New Purchase
						</button>
	<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add a new Purchase</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
		<div class="col-md-12">
			
			<br>
			<form>

				<div class="row">
					<div class="col">
						<label>Product Code</label>
						<input type="text" class="form-control" placeholder="">
					</div>
					<div class="col">
						<label>Piece</label>
						<input type="text" class="form-control" placeholder="">
					</div>
				</div>
				<div class="row">
					<div class="col">

						<label>Date</label>
						<input type="text" class="form-control" placeholder="">

						<label>Supplier Price</label>
						<input type="text" class="form-control" placeholder="">


						<label>Dealer Price</label>
						<input type="text" class="form-control" placeholder="">


						<label>SR Price</label>
						<input type="text" class="form-control" placeholder="">
					</div>

				</div>
				
				
			</form>
		</div>
	</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" >Save changes</button>
      </div>
    </div>
  </div>
</div>
<!---->
    <!----->
	<div class="row">
		<div class="col-md-4">
			<h6>RFL</h6>
			<select class="form-select" aria-label="Default select example">
				<option selected>Today</option>
				<option value="1">Last Month</option>
				<option value="2">Two</option>
				<option value="3">Three</option>
			</select>

		</div>
		<div class="col-md-8">
			<h3>RFL</h3>
			<table class="table">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">Date</th>
						<th scope="col">Piece</th>
						<th scope="col">Product Code</th>
						<th scope="col">Supplier Price</th>
						<th scope="col">Dealer Price</th>
						<th scope="col">SR Price</th>
						<th scope="col">#</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row">1</th>
						<td>Mark</td>
						<td>Otto</td>
						<td>@mdo</td>
						<td>Jacob</td>
						<td>Thornton</td>
						<td>@fat</td>
						<td>Edit</td>
					</tr>
					<tr>
						<th scope="row">2</th>
						
					</tr>
					<tr>
						<th scope="row">3</th>
						
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>