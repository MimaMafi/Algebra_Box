@extends('layouts.index')

@section('title', 'AlgebraBox | The greatest cloud storage')

@section('content')
<div class="row">
  <ol class="breadcrumb">
    <li class="active">Home</li>
  </ol>
  
  	<table class="table table-hover">
		<tr>
		<th>Name</th>
		<th>Modified</th>
		</tr>
		
		<tr>
		<td>File</td>
		<td>Date</td>
		<td><button class="btn btn-primary" type="submit">Delete</button></td>
		</tr>
		<tr>
		<td>File</td>
		<td>Date</td>
		<td><button class="btn btn-primary" type="submit">Delete</button></td>
		</tr>
		<tr>
		<td>File</td>
		<td>Date</td>
		<td><button class="btn btn-primary" type="submit">Delete</button></td>
		</tr>
		
	</table>
	
	<button class="btn btn-primary" type="submit">Upload a file</button>
</div>
<div class="row">

</div>
@stop
