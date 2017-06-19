@extends('layaout')
@section('content')
 <div class="container">
  <h1 class="page-header">
  	{{$titulo}}
  </h1>
 <table class="table table-hover table-striped">
 	<thead>
 		<tr>
 			<th>ID</th>
 			<th>Nombre</th>
 			<th>Email</th>
 			<th>Genero</th>
 			<th>Biografia</th>
 		</tr>
 	</thead>
   <tbody>
     @include('query.partial.methods')
   </tbody>
 </table>
 </div>
@endsection