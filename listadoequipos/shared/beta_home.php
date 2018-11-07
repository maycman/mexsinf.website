<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-md-offset-4">
                            <div class="panel panel-primary animated bounceInDown"><div class="panel-heading"><h2><span class="glyphicon glyphicon-shopping-cart"></span> Tiendas</h2></div></div>
                        </div>
                    </div>
                    <br/>
                    <ul class="nav nav-pills nav-justified animated bounceInDown">
                        <li class="active"><a href="#mata" role="tab" data-toggle="tab"><h4><span class="glyphicon glyphicon-th" aria-hidden="true"></span> MATAMOROS TOLUCA</h4></a></li>
                        <li><a href="#juan" role="tab" data-toggle="tab"><h4><span class="glyphicon glyphicon-th" aria-hidden="true"></span> SAN JUAN</h4></a></li>
                        <li><a href="#gale" role="tab" data-toggle="tab"><h4><span class="glyphicon glyphicon-th" aria-hidden="true"></span> GALERIAS</h4></a></li>
                        <li><a href="#fabela" role="tab" data-toggle="tab"><h4><span class="glyphicon glyphicon-th" aria-hidden="true"></span> FABELA SUR</h4></a></li>
                        <li><a href="#pachuca" role="tab" data-toggle="tab"><h4><span class="glyphicon glyphicon-th" aria-hidden="true"></span> PORTAL PACHUCA</h4></a></li>
                    </ul>
                    <div class="tab-content margen">
                        <div class="tab-pane fade active in" id="mata">
                            <div class="container animated bounceInUp">
                        <?php
                          try
                          {
                            $conexion = new PDO('mysql:host=mysql.hostinger.mx;dbname=u492945132_b1','u492945132_user','123456');
                            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                            $matamoros1 = 'select * from equipo e left join (casados c left join sim s on c.id_sim=s.id_sim) on e.id_equipo=c.id_equipo where c.id_equipo>5 and c.id_sim>5 and e.vista=0 and s.vista=0 and e.id_tienda=1 and s.id_tienda=1;';
                            $result = $conexion->query($matamoros1);
                            $rows = $result->fetchAll();
                            foreach ($rows as $row)
                            {
                        ?>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="panel panel-info">
                                            <div class="panel-heading"><span class="glyphicon glyphicon-phone" aria-hidden="true"></span> <?php echo $row['nombre_equipo'];?></div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-md-7">
                                                        <p>IMEI: <?php echo $row['imei'];?></p>
                                                        <p>ICCI: <?php echo $row['iccid'];?></p>
                                                        <p>Descripción: <?php echo $row['descrip_e'];?></p>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <form role="form" method="post" action="index.php?page=soli">
                                                            <input type="hidden" name="casado" id="casado" value="<?php echo $row['id_casado']?>"></input>
                                                            <input type="submit" id="david" value="David" name="david" class="btn btn-primary btn-lg"></input>
                                                            <input type="submit" id="cesar" value="Alejandro" name="cesar" class="btn btn-success btn-lg"></input>
                                                            <input type="submit" id="osvaldo" value="Osvaldo" name="osvaldo" class="btn btn-info btn-lg"></input>
                                                            <input type="hidden" name="imei" id="imei" value="<?php echo $row['imei']?>"></input>
                                                            <input type="hidden" name="iccid" id="iccid" value="<?php echo $row['iccid']?>"></input>
                                                            <input type="hidden" name="equip" id="equip" value="<?php echo $row['nombre_equipo']?>"></input>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        <?php
                            }//Cierro foreach
                            $matamoros2 = 'select * from equipo e left join (casados c left join sim s on c.id_sim=s.id_sim) on e.id_equipo=c.id_equipo where c.id_equipo<6 and c.id_sim>5 and s.vista=0 and e.id_tienda=1 and s.id_tienda=1;';
                            $result = $conexion->query($matamoros2);
                            $rows = $result->fetchAll();
                            foreach ($rows as $row)
                            {
                        ?>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="panel panel-success">
                                            <div class="panel-heading"><span class="glyphicon glyphicon-credit-card" aria-hidden="true"></span> <?php echo $row['nombre_equipo'];?></div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-md-7">
                                                        <p>Imei: <?php echo $row['imei'];?></p>
                                                        <p>ICCID: <?php echo $row['iccid'];?></p>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <form role="form" method="post" action="index.php?page=soli">
                                                            <input type="hidden" name="casado" id="casado" value="<?php echo $row['id_casado']?>"></input>
                                                            <input type="submit" id="david" value="David" name="david" class="btn btn-primary btn-lg"></input>
                                                            <input type="submit" id="cesar" value="Alejandro" name="cesar" class="btn btn-success btn-lg"></input>
                                                            <input type="submit" id="osvaldo" value="Osvaldo" name="osvaldo" class="btn btn-info btn-lg"></input>
                                                            <input type="hidden" name="imei" id="imei" value="<?php echo $row['imei']?>"></input>
                                                            <input type="hidden" name="iccid" id="iccid" value="<?php echo $row['iccid']?>"></input>
                                                            <input type="hidden" name="equip" id="equip" value="<?php echo $row['nombre_equipo']?>"></input>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        <?php
                            }//cierro segundo foreach
                          $matamoros3 = 'select * from equipo e left join (casados c left join sim s on c.id_sim=s.id_sim) on e.id_equipo=c.id_equipo where c.id_equipo>5 and c.id_sim<6 and e.vista=0 and e.id_tienda=1 and s.id_tienda=1;';
                            $result = $conexion->query($matamoros3);
                            $rows = $result->fetchAll();
                            foreach ($rows as $row)
                            {
                        ?>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="panel panel-warning">
                                            <div class="panel-heading"><span class="glyphicon glyphicon-phone" aria-hidden="true"></span> <?php echo $row['nombre_equipo']?></div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-md-7">
                                                        <p>IMEI: <?php echo $row['imei'];?></p>
                                                        <p>ICCID: <?php echo $row['iccid'];?></p>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <form role="form" method="post" action="index.php?page=soli">
                                                            <input type="hidden" name="casado" id="casado" value="<?php echo $row['id_casado']?>"></input>
                                                            <input type="submit" id="david" value="David" name="david" class="btn btn-primary btn-lg"></input>
                                                            <input type="submit" id="cesar" value="Alejandro" name="cesar" class="btn btn-success btn-lg"></input>
                                                            <input type="submit" id="osvaldo" value="Osvaldo" name="osvaldo" class="btn btn-info btn-lg"></input>
                                                            <input type="hidden" name="imei" id="imei" value="<?php echo $row['imei']?>"></input>
                                                            <input type="hidden" name="iccid" id="iccid" value="<?php echo $row['iccid']?>"></input>
                                                            <input type="hidden" name="equip" id="equip" value="<?php echo $row['nombre_equipo']?>"></input>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        <?php
                            }//Cierro tercer foreach
                          }
                          catch(PDOException $e)
                          {
                            echo 'Error: ' . $e->getMessage();
                          }
                        ?>
                            </div><!--Cierra container de tienda-->
                        </div><!--Cierra tab (tienda)-->