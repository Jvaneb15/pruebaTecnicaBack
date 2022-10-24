@extends('welcome')

@section('content')
<div class="container">
    <h1 class="text">Listar Estudiantes</h1><br>
	<div class="table-responsive">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>Id</th>
					<th>Nombres</th>
					<th>Apellidos</th>
					<th>Teléfono</th>
					<th>Dirección</th>
					<th>Email</th>
					<th>Tipo documento</th>
					<th>Documento</th>
					<th>Curso</th>
					<th>Estado</th>
					<th>Accion</th>
				</tr>
			</thead>
            <tbody>
                @foreach($dataListar as $list)
                <tr>
                    <td>{{ $list->id }}</td>
                    <td>{{ $list->nombre }}</td>
                    <td>{{ $list->apellido }}</td>
                    <td>{{ $list->telefono }}</td>
                    <td>{{ $list->direccion }}</td>
                    <td>{{ $list->email }}</td>
                    <td>{{ $list->tipo_documento->nombre }}</td>
                    <td>{{ $list->numero_documento }}</td>
                    <td>{{ $list->curso->nombre }}</td>
                    <td>{{ $list->activo }}</td>
                    <td></td>
                </tr>
                @endforeach
            </tbody>
		</table>

	</div>	

</div>
@endsection