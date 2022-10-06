<!DOCTYPE html>
<html>
<head>
<title>Insert ordenador</title>
<meta charset="UTF-8">
</head>
<body>
	<form>
		<h2>Registar Ordenador</h2>
		<b>Sistema Operativo: </b><input name="SO" placeholder="sistema operativo"><br><br>
		<b>Código HZ: </b><input name="CodHZ" placeholder="codigo"><br><br>
		<input type="radio" id="sobremesa" name="tipo" value="sobremesa"> 
		<label for="tipo">Sobremesa</label><br><br>
		<input type="radio" id="portatil" name="tipo" value="portatil"> 
		<label for="tipo">Portatil</label><br><br>
		<input type="submit" name="Guardar" value="Guardar">
		<input type="submit" name="Modificar" value="Modificar"> 
		<input type="submit" name="Eliminar" value="Eliminar">
	</form>
	
            <?php
            include 'ordenador.php';

            $ordenadores = Ordenador::getOrdenadoresUnselizados('storeordenador');

            foreach ($ordenadores as $ordenador) {
                $ordenador->imprimir();
            }

            // Guardar
            if (isset($_GET['Guardar'])) {
                if (isset($_GET['SO']) && isset($_GET['CodHZ']) && isset($_GET['tipo'])) {

                    $SO = $_GET['SO'];
                    $CodHZ = $_GET['CodHZ'];
                    $Tipo = $_GET['tipo'];

                    if ($SO != NULL && $CodHZ != NULL && $Tipo != NULL) {

                        $ordenadorNuevo = new Ordenador($SO, $CodHZ, $Tipo);
                        $ordenadorNuevo->imprimir();

                        $ordenadores[] = $ordenadorNuevo;

                        Ordenador::guardarSerializado('storeordenador', $ordenadores);
                    }
                }
            //Modificar
            } elseif (isset($_GET['Modificar'])) {
                if (isset($_GET['SO']) && isset($_GET['CodHZ']) && isset($_GET['tipo'])) {
                    for ($i = 0; $i < count($ordenadores); $i ++) {
                        if ($ordenadores[$i]->getCodHZ() == ($_GET['CodHZ'])) {
                            
                            unset($ordenadores[$i]);
                            
                            $newSO = $_GET['SO'];
                            $newCodHZ = $_GET['CodHZ'];
                            $newTipo = $_GET['tipo'];
                            
                            if ($newSO != NULL && $newCodHZ != NULL && $newTipo != NULL) {

                                $ordenadorNuevo = new Ordenador($newSO, $newCodHZ, $newTipo);
                                $ordenadorNuevo->imprimirMod();

                                $ordenadores[$i] = $ordenadorNuevo;
                                
                                Ordenador::guardarSerializado('storeordenador', $ordenadores);
                            }
                        } else {
                            echo "El codigo no coincide con ningun ordenador de nuestra base de datos.";
                        }
                    }
                }
            }
            //Eliminar
            elseif (isset ($_GET['Eliminar'])){
                for ($i = 0; $i < count($ordenadores); $i ++) {
                    if ($ordenadores[$i]->getCodHZ() == ($_GET['CodHZ'])) {
                        unset($ordenadores[$i]);
                        echo "Hasta aqui entra pero no puto borra";
                        
                    }
                }
            }
            ?>


</body>
</html>