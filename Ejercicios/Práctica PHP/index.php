<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador - Empleados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>


    <div class="content">

        <div class="container">
            <h3 class="h3 m-3">Ver datos de los empleados</h3>

            <form action="buscar.php" class="form-horizontal" method="POST">

                <div class="row mb-3">
                    <div class="col-sm-4">
                        <input class="form-control "type="text" name="buscar" placeholder="Departamento o puesto del empleado..." id="buscar_emp">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-1">
                        <input class="btn btn-success" type="submit" value="Buscar..." name="busqueda">
                    </div>
                    <div class="col-sm-1">
                        <input type="submit" class="btn btn-primary" value="Ver todos...">
                    </div>
                </div>
            </form>
        </div>

        <div class="container">
            <h3 class="h3 mb-3">Registro de empleados</h3>

            <form action="guardar.php" class="form-horizontal" method="POST">

                <div class="row mb-3">
                    <div class="col-sm-3">
                        <label for="id_emp" class="form-label"><strong>ID: </strong></label>
                        <input id="id_emp" type="number" class="form-control" name="id" placeholder="ID..." readonly />
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-3">
                        <label for="nombre_emp" class="form-label"><strong>Nombres: </strong></label>
                        <input id="nombre_emp" type="text" class="form-control" name="nombre"
                            placeholder="Nombres..." />
                    </div>

                    <div class="col-sm-3">
                        <label for="apellido_emp" class="form-label"><strong>Apellidos: </strong></label>
                        <input id="apellido_emp" type="text" class="form-control" name="apellido"
                            placeholder="Apellidos..." />
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-3">
                        <label for="cedula_emp" class="form-label"><strong>Cédula: </strong></label>
                        <input id="cedula_emp" type="text" class="form-control" name="cedula"
                            placeholder="Cédula de identidad..." />
                    </div>

                    <div class="col-sm-3">
                        <label for="tel_emp" class="form-label"><strong>Teléfono: </strong></label>
                        <input id="tel_emp" type="text" class="form-control" name="telefono"
                            placeholder="Teléfono de contacto..." />
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-6">
                        <label for="correo_emp" class="form-label"><strong>Correo: </strong></label>
                        <input class="form-control" id="correo_emp" type="text" name="correo" placeholder="Correo...">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-3">
                        <label for="depto_emp" class="form-label">
                            <strong>Departamento: </strong>
                        </label>
                        <select id="depto_emp" class="form-select" aria-label="Default select example"
                            name="departamento">
                            <option selected>Departamentos... </option>
                            <option value="Administración">Admistración</option>
                            <option value="Contabilidad">Contabilidad</option>
                            <option value="Limpieza">Limpieza</option>
                            <option value="Producción">Producción</option>
                            <option value="Ventas">Ventas</option>
                        </select>
                    </div>

                    <div class="col-sm-3">
                        <label for="puesto_emp" class="form-label">
                            <strong>Puesto: </strong>
                        </label>
                        <select id="puesto_emp" class="form-select" aria-label="Default select example" name="puesto">
                            <option selected>Puestos...</option>
                            <option value="Asistente">Asistente</option>
                            <option value="Conserje">Conserje</option>
                            <option value="Diseñador">Diseñador</option>
                            <option value="Editor">Editor</option>
                            <option value="Encargado">Encargado</option>
                            <option value="Gerente">Gerente</option>
                            <option value="Gerente general">Gerente general</option>
                            <option value="Supervisor">Supervisor</option>
                        </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-6">
                        <label for="estado_emp" class="form-label">
                            <strong>Estado: </strong>
                        </label>
                        <select id="estado_emp" class="form-select" aria-label="Default select example" name="estado">
                            <option selected>Estado...</option>
                            <option value="Activo">Activo</option>
                            <option value="Licencia medica">Licencia médica</option>
                            <option value="Vacaciones anules">Vacaciones anules</option>
                            <option value="Inactivo">Inactivo</option>
                        </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-1">
                        <input class="btn btn-success" type="submit" value="Guardar">
                    </div>
                </div>

            </form>
        </div>

</body>

</html>