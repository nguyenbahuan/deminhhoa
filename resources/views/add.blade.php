@extends('layout.app')
@section('main')
<div class="container">
	<div class="row">
		<div class="col-12 text-center pt-5">
			<div class="text-left"><a href="/student_manage" class="btn btn-outline-primary">Student List</a></div>

			<form id="edit-frm" method="post" action="" class="border p-3 mt-2">
				<div class="control-group col-6 text-left">
					<label for="title">Title</label>
					<div>
						<input type="text" id="title" class="form-control mb-4" name="fullname"
							placeholder="Enter Title" 
							required>
					</div>
				</div>
				<div class="control-group col-6 mt-2 text-left">
					<label for="body">Short Notes</label>
					<div>
						<input type="date" id="" class="form-control mb-4" name="bd"
							 required>
					</div>
				</div>

				<div class="control-group col-6 mt-2 text-left">
					<label for="body">Price</label>
					<div>
						<input type="text" id="price" class="form-control mb-4" name="address"
							placeholder="Enter address"
							required>
					</div>
				</div>

				@csrf 
				
				<div class="control-group col-6 text-left mt-2"><button class="btn btn-primary">ADD</button></div>
			</form>
		</div>
	</div>
</div>
@endsection