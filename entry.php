<?php
	include"submenu.php"
?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h6></h6>
			<table class="table">
				<thead>
					<tr>
						<th scope="col">Supplier List</th>
						<th scope="col"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="background-color: #067CB9;">
							Add New Supplier
						</button></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row">1</th>
						<td>Mark</td>
						<td>Otto</td>
						<td>@mdo</td>
					</tr>
					<tr>
						<th scope="row">2</th>
						<td>Jacob</td>
						<td>Thornton</td>
						<td>@fat</td>
					</tr>
					<tr>
						<th scope="row">3</th>
						<td>Larry</td>
						<td>the Bird</td>
						<td>@twitter</td>
					</tr>
				</tbody>
			</table>
			<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add a new supplier</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
		<div class="col-md-12">
			
			<br>
			<form>

				<div class="row">
					<div class="col">
						<label>Supplier Name</label>
						<input type="text" class="form-control" placeholder="Full name">
					</div>
					<div class="col">
						<label>Phone</label>
						<input type="text" class="form-control" placeholder="+8801*********">
					</div>
				</div>
				<div class="row">
					<div class="col">

						<label>A/C</label>
						<input type="text" class="form-control" placeholder="">

						<label>Bank Name</label>
						<input type="text" class="form-control" placeholder="">


						<label>Account Number</label>
						<input type="text" class="form-control" placeholder="">


						<label>Branch Name</label>
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
		</div>
	</div>
</div>