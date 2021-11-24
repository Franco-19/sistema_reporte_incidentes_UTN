<h1>{{ $titulo}}</h1>
<form method= "post" action="{{route('alumnos.store');}}">
    @csrf
    <label> Socio: </label> <input type="text" name="nroSocio"><br>
    <label> Nombre: </label> <input type="text" name="nombre"><br>
    <label> Apellido: </label> <input type="text" name="apellido"><br>
    <label> DNI: </label> <input type="text" name="dni"><br>
    <button type="submit"> Agregar </button>
</form>