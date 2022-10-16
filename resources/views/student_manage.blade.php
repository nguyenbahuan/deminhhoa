@extends('layout.app')
@section('main')
<div class="container">
	<div class="row">
		<div class="col-12 text-center pt-5">
			<h1 class="display-one m-5">Students</h1>
            <div class="text-left"><a href="student_manage/create" class="btn btn-outline-primary">Add new
				Student</a></div>
			<table class="table mt-3  text-left">
				<thead>
					<tr>
						<th scope="col">Name</th>
						<th scope="col" class="pr-5">Birthday</th>
						<th scope="col">Address</th>
						<th scope="col">Action</th>
					</tr>
				</thead>
				<tbody>
					@forelse ($students as $student)
                    <tr>
                        <td>{!! $student->fullname !!}</td>
                        <td class="pr-5 text-right">{!! $student->birthday !!}</td>
                        <td>{!! $student->address !!}</td>
                        <td><a href="student_manage/{!! $student->id !!}/edit"
                            class="btn btn-outline-primary">Edit</a>
                            <a href="student_manage/{!! $student->id !!}/delete" class="btn btn-dark">DELETE</a>
                            </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4">not found</td>
                    </tr> 
                    @endforelse                     
				</tbody>
			</table>
		</div>
	</div>
</div>

@endsection