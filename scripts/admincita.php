<?php
include "../templates/sidebar.php";
?>

    <div class="text-center">
        <h3 class="m-0">Citas</h3>
    </div>
    
    <div class="container-fluid px-4">
    <form method="post">
    <div class="mb-3 col-6">
        <label  class="form-label"><h3 class="fw-bold">Buscar por cliente</h3></label>
        <input type="text" name="nombre_usuario" class="form-control mt-2">
    </div>
        <div class="col-12">
        <table class="table">
            <thead>
               <tr>
               <th>
                   <h3 class="fw-bold">Estado</h3>
                   <select name="estado" class="form-control mt-2" >
                   <option value="">Seleccionar...</option>
                    <option value="Aceptada">Aceptadas</option>
                    <option value="Cancelada">Canceladas</option>
                    <option value="Pendiente">Pendientes</option>
                    </select>
                </th>
                <th>
                    <h3 class="fw-bold">Fecha Desde</h3>
                    <input type="date" name="fecha_desde" class="form-control mt-2">
                </th>
                <th>
                    <h3 class="fw-bold">Fecha Hasta</h3>
                    <input type="date" name="fecha_hasta" class="form-control mt-2">
                </th>
                <th>
                    <div class="d-grid gap-2 col-2 mx-auto">
                    <button class="btn btn-primary btn-lg" type="submit">Ver</button>
                    </div>
                </th>
               </tr>
            </thead>
        </table>
        </div>
    </form>
    </div>

    <?php
    extract($_POST);
    if ($_POST)
    { ?>
    <?php
    $citas = "SELECT * FROM tipos_servicio INNER JOIN detalles_registros_cita 
    ON detalles_registros_cita.tipo_servicio_registro_cita_FK = tipos_servicio.id_tipo_servicio 
    INNER JOIN registros_cita 
    ON detalles_registros_cita.registro_cita_detalle_registro_FK = registros_cita.id_registro_cita
    INNER JOIN usuarios ON usuarios.id_usuario = registros_cita.cliente_registro_cita_FK 
    WHERE 1 = 1";

    if (!empty($estado)) {
        $citas .= " AND registros_cita.estado_registro_cita = '$estado'";
    }

    if (!empty($fecha_desde) && !empty($fecha_hasta)) {
        $citas .= " AND registros_cita.fecha_creacion_registro_cita BETWEEN '$fecha_desde' AND '$fecha_hasta'";
    }

    if (!empty($nombre_usuario)) {
        $citas .= " AND usuarios.nombre_usuario LIKE '%$nombre_usuario%'";
    }

    $tablac = $conexion->seleccionar($citas);
    ?>
                    <div class="table-responsive container">
                    <table class="table table-hover table-borderless align-middle">
                        <thead>
                        <tr>
                               <th>ID cita</th>
                               <th>Cliente</th>
                               <th>Tipo de servicio</th>
                               <th>Precio</th>
                               <th>Fecha de registro</th>
                               <th>Fecha de la cita</th>
                               <th>Hora de la cita</th>
                               <th>Estado</th>
                               <th>Opciones</th>
                               </tr>
                        </thead>
                        <tbody class="">
                            <?php
                            if (empty($tablac)) 
                            {
                               echo "<tr><td colspan='9'><p class='fw-bold text-center'>No se encontraron resultados.</p></td></tr>";
                            }
                            else
                            {
                                foreach($tablac as $reg)
                            {
                                echo "<tr>";
                                echo "<td> $reg->id_registro_cita</td>";
                                echo "<td> $reg->nombre_usuario</td>";
                                echo "<td> $reg->nombre_tipo_servicio</td>";
                                echo "<td> $reg->precio_registro_cita</td>";
                                echo "<td> $reg->fecha_creacion_registro_cita</td>";
                                echo "<td> $reg->fecha_cita_registro_cita</td>";
                                echo "<td> $reg->hora_registro_cita</td>";
                                if ($reg->estado_registro_cita == "Aceptada")
                                {
                                    echo "<td><span class='badge text-bg-success'>$reg->estado_registro_cita</span></td>";
                                }
                                else if ($reg->estado_registro_cita == "Cancelada")
                                {
                                    echo "<td><span class='badge text-bg-danger'>$reg->estado_registro_cita</span></td>";
                                }
                                else if ($reg->estado_registro_cita == "Pendiente")
                                {
                                    echo "<td><span class='badge text-bg-secondary'>$reg->estado_registro_cita</span></td>";
                                }
                                echo "<td>
                                <div class='dropdown'>
                                  <button type='button' class='btn p-0 dropdown-toggle hide-arrow' data-bs-toggle='dropdown'>
                                    <i class='bx bx-dots-vertical-rounded'></i>
                                  </button>
                                  <div class='dropdown-menu'>
                                    <a class='dropdown-item'>
                                      <i class='bx bx-edit-alt me-1'></i> Editar</a>
                                    <a class='dropdown-item'><i class='bx bx-trash me-1'></i> Eliminar</a
                                    >
                                  </div>
                                </div>
                              </td>";
                                echo "</tr>";
                            }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
                <?php } ?>

<!-- SCRIPTS -->
<script src="../prueba/js/clock.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>
</body>