<h1>{{ $titulo }}</h1>
<form method = "get" action = "alumnos">
<!--    <form method ="get" action = "{{route ('alumnos.index');}}">   -->
    <label>Nº Socio: </label> <input type = "text" name ="nroSocio"><br>
    <label>Nombre:</label> <input type = "text" name="nombre"><br>
    <label>Apellido: </label> <input type = "text" name ="apellido"><br>
    <label>DNI: </label> <input type = "text" name ="dni"><br>

    <button type = "submit"> Filtrar </button>
</form>
<table>
    <thead>
        <tr>
            <th>Socio:</th>
            <th>Nombre:</th>
            <th>Apellido:</th>
            <th>DNI: </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($arrayAlumnos as $alumno)
            <tr>
                <td>{{$alumno->nroSocio}}</td>
                <td>{{$alumno->nombre}}</td>
                <td>{{$alumno->apellido}}</td>
                <td>{{$alumno->dni}}</td>
            </tr>
        @endforeach
    </tbody>  
</table>
        

