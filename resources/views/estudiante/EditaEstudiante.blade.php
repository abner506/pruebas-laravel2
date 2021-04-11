<!DOCTYPE html>
    <html lang="en">
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"crossorigin="anonymous">
         <title>Actualizar estudiantes</title>
        </head>
        <body>
            <section class="vh-100 bg-img d-flex justify-content-center align-items-center text-dark">
                <div class="col-3 bg-glass-06 blur p-0 rounded shadow d-flex animated fadeIn">
                    <div class="bg-glass-06 rounded-left p-2">
                        <div clas="container">
                            <div class="row">
                                <div class="col">
                                    <h2>Actualizar estudiantes</h2>
                                    <form method="POST" action="{{route('Lista.update' ,$estudiante)}}" >
                                        @method('PATCH')
                                        <div class="form-group">
                                            <input type="text" name="Matricula" class="form-control" placeholder="Matricula" value="{{$estudiante->Matricula}}">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="Nombre" class="form-control"placeholder="Nombre" value="{{$estudiante->Nombre}}">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="Direccion" class="form-control"placeholder="Dirección" value="{{$estudiante->Direccion}}"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" value="Actualizar" class="btn btn-success">
                                            {{ csrf_field() }}
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </body>
                    </html>
