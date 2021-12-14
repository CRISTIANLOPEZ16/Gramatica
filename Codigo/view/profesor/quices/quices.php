<html>
    <head>
        <meta charset="utf-8">
        <script language="JavaScript" src="https://code.jquery.com/jquery-1.11.1.min.js" type="text/javascript"></script>
        <script language="JavaScript" src="https://cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js" type="text/javascript"></script>
        <script language="JavaScript" src="https://cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.js" type="text/javascript"></script>
        <link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.css">
        <link rel="stylesheet" type="text/css" href="../../dataTable/styles.css">
        <script language="JavaScript" src="../../dataTable/script.js" type="text/javascript"></script>
        <script src="https://kit.fontawesome.com/a9633e48d1.js" crossorigin="anonymous"></script>
        <title>Pagina Principal</title>
        <link rel="shortcut icon" href="../../components/img/logoApiDos.png">
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
            <header>
                <div class="contenedor">
                    <div class="menu">
                        <img src="../../components/img/logoApiDos.png" class="logotipo">
                        <nav>
                            <a href="">Ejercicios</a>
                            <a href="#">Quices</a>
                            <a href="">Crear clase</a>
                            <a href="#"><i class="fas fa-sign-out-alt"></i></a>
                        </nav>
                    </div>
                </div>
            </header>
            <div class="container">
                <div class="row">
                    <h2 class="text-center">Lista de quices</h2>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th>N°</th>
                                <th>Problema</th>
                                <th>Nota</th>
                                <th>Visualizar</th>
                                <th>Calificar</th>
                                <th>Editar</th>
                                <th>Eliminar</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>N°</th>
                                <th>Problema</th>
                                <th>Nota</th>
                                <th>Visualizar</th>
                                <th>Calificar</th>
                                <th>Editar</th>
                                <th>Eliminar</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>Problema 1</td>
                                <td>4.0</td>
                                <td><p data-placement="top" data-toggle="tooltip" title="Check"><button class="btn btn-info btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-zoom-in"></span></button></p></td>
                                <td><p data-placement="top" data-toggle="tooltip" title="Check"><button class="btn btn-success btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-ok"></span></button></p></td>
                                <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
                                <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Problema 2</td>
                                <td>3.2</td>
                                <td><p data-placement="top" data-toggle="tooltip" title="Check"><button class="btn btn-info btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-zoom-in"></span></button></p></td>
                                <td><p data-placement="top" data-toggle="tooltip" title="Check"><button class="btn btn-success btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-ok"></span></button></p></td>
                                <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
                                <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Problema 3</td>
                                <td>4.6</td>
                                <td><p data-placement="top" data-toggle="tooltip" title="Check"><button class="btn btn-info btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-zoom-in"></span></button></p></td>
                                <td><p data-placement="top" data-toggle="tooltip" title="Check"><button class="btn btn-success btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-ok"></span></button></p></td>
                                <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
                                <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Problema 4</td>
                                <td>2.0</td>
                                <td><p data-placement="top" data-toggle="tooltip" title="Check"><button class="btn btn-info btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-zoom-in"></span></button></p></td>
                                <td><p data-placement="top" data-toggle="tooltip" title="Check"><button class="btn btn-success btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-ok"></span></button></p></td>
                                <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
                                <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div><br>
            <div class="boton">
                <input type="submit" value="Agregar">
            </div>
    </body>
</html>