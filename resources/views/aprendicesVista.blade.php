
<html>
    <head>
        <link href="https://bootswatch.com/5/cyborg/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <table class="table table-striped table-hover">
            <thead>
            <th>Id</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Telefono</th>
            <th>Direccion</th>
            <th>Correo</th>
            <th>Nombre ficha</th>
            <th>Coordinacion</th>
            </thead>
            <tbody>
                @foreach($aprendices -> $aprendiz)
                <th>{{$aprendiz->id}}</th>
                <th>{{$aprendiz->nombre}}</th>
                <th>{{$aprendiz->apellido}}</th>
                <th>{{$aprendiz->telefono}}</th>
                <th>{{$aprendiz->direccion}}</th>
                <th>{{$aprendiz->correo}}</th>
                <th>{{$aprendiz->fichas->nombre_ficha}}</th>
                <th>{{$aprendiz->fichas->coordinacion}}</th>
                @endforeach
            </tbody>   
        </table>
    </body>
</html>