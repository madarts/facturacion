<?php

include('cfg/connect.php');



///////////////////////////
//////////////////////////
//  APARTADO LOGIN
if(isset($_GET['login'])){
    $user = $_POST['txtUsuario'];
    $pass = md5($_POST['txtPassword']);
	
	$queEmp = "SELECT * FROM user_list WHERE usuario = '". $user ."' AND pass = '". $pass ."';";
    $resEmp = mysql_query($queEmp, $conexion) or die(mysql_error());
    $totEmp = mysql_num_rows($resEmp);
    
	if($totEmp >= 1){
		$_SESSION['fac_user'] = $user;
		$_SESSION['fac_pass'] = $pass;
	}
		
	echo "<script language='javascript'> location.href = './'; </script>";
}
//  FINAL APARTADO LOGIN
///////////////////////////
//////////////////////////




///////////////////////////
//////////////////////////
//  APARTADO UNLOGIN
if(isset($_GET['unlogin'])){
	session_destroy();
    
	echo "<script language='javascript'> location.href = './'; </script>";
}
//  FINAL APARTADO UNLOGIN
///////////////////////////
//////////////////////////



///////////////////////////
//////////////////////////
//  APARTADO PARA EL CONTROL DEL CONTENIDO
function controlContenido(){
    if(isset($_GET['opcion'])){
        switch($_GET['opcion']){
            case 'familias': include('mdl/articulos/familias/index.php'); break;
            case 'articulos': include('mdl/articulos/articulos/index.php'); break;
        }
    }
}
//  FINAL APARTADO PARA EL CONTROL DEL CONTENIDO
///////////////////////////
//////////////////////////



///////////////////////////
//////////////////////////
//  APARTADO PARA FAMILIAS
function familias($busqueda=''){
    $queEmp = "SELECT familia.id as idFam, familia.codigo as codigoFam, familia.familia, familia.web, subfamilia.id, subfamilia.codigo, subfamilia.subfamilia, subfamilia.mostweb, subfamilia.beneficios 
               FROM familia LEFT JOIN subfamilia ON subfamilia.idfamilia = familia.codigo
               WHERE familia LIKE ('%". $busqueda ."%') OR subfamilia LIKE ('%". $busqueda ."%')
               ORDER BY familia, subfamilia ASC;";
    $resEmp = mysql_query($queEmp) or die(mysql_error());
    $totEmp = mysql_num_rows($resEmp);
    
    if ($totEmp> 0) {
        $familia = '----';
        while ($row = mysql_fetch_assoc($resEmp)) {
            if($familia != $row['familia']){
                echo "<tr>";
                echo "<td align='center' class='remarcado'>".$row['codigoFam']."</td>";
                echo "<td class='remarcado'>".$row['familia']."</td>";
                echo "<td align='center' class='remarcado'>".$row['web']."</td>";
                echo "<td align='center' class='remarcado'>-</td>";
                echo "<td align='center' class='remarcado'><input type='button' name='btnFamiliaInsertar' id='btnFamiliaInsertar' value='subfamilia' class='stlBoton' onclick='insertarSubFamilia(\"". $row['codigoFam'] ."\");' /></td>";
                echo "<td align='center' class='remarcado'><input type='button' name='btnFamiliaModificar' id='btnFamiliaModificar' value='modificar' class='stlBoton' onclick='modificarFamilia(\"". $row['idFam'] ."\", \"". $row['familia'] ."\", \"". $row['web'] ."\");' /></td>";
                echo "<td align='center' class='remarcado'><input type='button' name='btnFamiliaEliminar' id='btnFamiliaEliminar' value='eliminar' class='stlBoton' onclick='confirmarBorradoFamilia(\"". $row['idFam'] ."\");' /></td>";
                echo "</tr>";
            }
            if($row['subfamilia'] != ''){
                $beneficios = 0;
                if($row['beneficios'] != '') $beneficios = $row['beneficios'];
                
                echo "<tr>";
                echo "<td align='center' class='noRemarcado'>".$row['codigo']."</td>";
                echo "<td class='noRemarcado'>".$row['subfamilia']."</td>";
                echo "<td align='center' class='noRemarcado'>".$row['mostweb']."</td>";
                echo "<td align='center' class='noRemarcado'>".$beneficios."</td>";
                echo "<td align='center' class='noRemarcado'>-</td>";
                echo "<td align='center' class='noRemarcado'><input type='button' name='btnSubFamiliaModificar' id='btnSubFamiliaModificar' value='modificar' class='stlBoton' onclick='modificarSubFamilia(\"". $row['id'] ."\", \"". $row['subfamilia'] ."\", \"". $row['mostweb'] ."\", \"". $beneficios ."\");' /></td>";
                echo "<td align='center' class='noRemarcado'><input type='button' name='btnSubFamiliaEliminar' id='btnSubFamiliaEliminar' value='eliminar' class='stlBoton' onclick='confirmarBorradoSubFamilia(\"". $row['id'] ."\");' /></td>";
                echo "</tr>";
            }
            
            $familia = $row['familia'];
        }
    }
}
//  FINAL APARTADO PARA FAMILIAS
///////////////////////////
//////////////////////////



///////////////////////////
//////////////////////////
//  APARTADO PARA AÑADIR FAMILIAS
function addFamilia($familia='', $web=''){
    $queEmp = "SELECT * FROM familia WHERE familia = '". $familia ."';";
    $resEmp = mysql_query($queEmp) or die(mysql_error());
    $totEmp = mysql_num_rows($resEmp);
    
    if($totEmp == 0){
        $queEmp = "SELECT * FROM familia;";
        $resEmp = mysql_query($queEmp) or die(mysql_error());
    
        $codigo = 0;
        while ($row = mysql_fetch_assoc($resEmp)) {
            $codigo = $row['codigo'];
        }
        
        $codigo += 1;
        if(strlen($codigo) == 1) $codigo = '0'. $codigo;
        
        $queEmp = "INSERT INTO familia (codigo, familia, web) VALUES ('". $codigo ."', '". $familia ."', '". $web ."');";
        $resEmp = mysql_query($queEmp) or die(mysql_error());
    }
}
//  FINAL APARTADO PARA AÑADIR FAMILIAS
///////////////////////////
//////////////////////////



///////////////////////////
//////////////////////////
//  APARTADO PARA ELIMINAR FAMILIAS
function deleteFamilia($id=''){
    $queEmp = "DELETE FROM subfamilia WHERE idfamilia = ( SELECT codigo FROM familia WHERE id =  '". $id ."' )";
    mysql_query($queEmp) or die(mysql_error());
    $queEmp = "DELETE FROM familia WHERE id = '". $id ."';";
    mysql_query($queEmp) or die(mysql_error());
}
//  FINAL APARTADO PARA ELIMINAR FAMILIAS
///////////////////////////
//////////////////////////



///////////////////////////
//////////////////////////
//  APARTADO PARA AÑADIR SUBFAMILIAS
function addSubFamilia($cod, $nombre, $web, $beneficios){
    $queEmp = "SELECT * FROM subfamilia WHERE idfamilia = '". $cod ."' AND subfamilia = '". $nombre ."';";
    $resEmp = mysql_query($queEmp) or die(mysql_error());
    $totEmp = mysql_num_rows($resEmp);
    
    if($totEmp == 0){
        $queEmp = "SELECT * FROM subfamilia WHERE idfamilia = '". $cod ."';";
        $resEmp = mysql_query($queEmp) or die(mysql_error());
    
        $codigo = 0;
        while ($row = mysql_fetch_assoc($resEmp)) {
            $codigo = $row['codigo'];
        }
        
        $codigo += 1;
        if(strlen($codigo) == 1) $codigo = '0'. $codigo;
        
        $queEmp = "INSERT INTO subfamilia (idfamilia, codigo, subfamilia, beneficios, mostweb) VALUES ('". $cod ."', '". $codigo ."', '". $nombre ."', '". $beneficios ."', '". $web ."');";
        $resEmp = mysql_query($queEmp) or die(mysql_error());
    }
}
//  FINAL APARTADO AÑADIR SUBFAMILIAS
///////////////////////////
//////////////////////////



///////////////////////////
//////////////////////////
//  APARTADO PARA ELIMINAR SUBFAMILIAS
function deleteSubFamilia($codigo){
    $queEmp = "DELETE FROM subfamilia WHERE id='". $codigo ."'";
    mysql_query($queEmp) or die(mysql_error());
}
//  FINAL APARTADO ELIMINAR SUBFAMILIAS
///////////////////////////
//////////////////////////



///////////////////////////
//////////////////////////
//  APARTADO PARA MODIFICAR FAMILIAS
function modificarFamilia($id, $nombre, $web){
    $queEmp = "UPDATE familia SET familia = '". $nombre ."', web='". $web ."' WHERE id = '". $id ."';";
    mysql_query($queEmp) or die(mysql_error());
}
//  FINAL APARTADO MODIFICAR FAMILIAS
///////////////////////////
//////////////////////////



///////////////////////////
//////////////////////////
//  APARTADO PARA MODIFICAR SUBFAMILIAS
function modificarSubFamilia($id, $nombre, $web, $beneficios){
    $queEmp = "UPDATE subfamilia SET subfamilia='". $nombre ."', mostweb='". $web ."', beneficios='". $beneficios ."' WHERE id = '". $id ."';";
    mysql_query($queEmp) or die(mysql_error());
}
//  FINAL APARTADO MODIFICAR SUBFAMILIAS
///////////////////////////
//////////////////////////

































///////////////////////////
//////////////////////////
//  APARTADO PARA ARTICULOS
function articulos($busqueda=''){
    $queEmp = "SELECT * FROM articulos 
               WHERE descripcion LIKE ('%". $busqueda ."%') OR pvp LIKE ('%". $busqueda ."%') OR codbarras LIKE ('%". $busqueda ."%')
               ORDER BY descripcion ASC";
    $resEmp = mysql_query($queEmp) or die(mysql_error());
    $totEmp = mysql_num_rows($resEmp);
    
    if ($totEmp> 0) {
        while ($row = mysql_fetch_assoc($resEmp)) {
            echo "<tr>";
            echo "<td class='remarcado'><span style='color: #EE5353;'>".$row['id']."</span> - ".$row['descripcion']."</td>";
            echo "<td align='center' class='remarcado'>".$row['pvp']." €</td>";
            echo "<td align='center' class='remarcado'><input type='button' name='btnArticulosMostrar' id='btnArticulosMostrar' value='mostrar' class='stlBoton' onclick='btnMostrar(\"". $row['id'] ."\");' /></td>";
            echo "<td align='center' class='remarcado'><input type='button' name='btnArticulosModificar' id='btnArticulosModificar' value='modificar' class='stlBoton' /></td>";
            echo "<td align='center' class='remarcado'><input type='button' name='btnArticulosEliminar' id='btnArticulosEliminar' value='eliminar' class='stlBoton' /></td>";
            echo "</tr>";
        }
    }
}
//  FINAL APARTADO PARA ARTICULOS
///////////////////////////
//////////////////////////





///////////////////////////
//////////////////////////
//  APARTADO PARA GENERAR INPUT CON DATOS DE PROVEEDORES
function genereProveedoresInput(){
    $queEmp = "SELECT * FROM proveedores ORDER BY nombre;";
    $resEmp = mysql_query($queEmp) or die(mysql_error());
    $totEmp = mysql_num_rows($resEmp);
    
    $responder = '';
    if($totEmp != 0){
        while ($row = mysql_fetch_assoc($resEmp)) {
            $responder == '' ? $responder = $row['codproveedor'] ."--". $row['nombre'] : $responder .= "##". $row['codproveedor'] ."--". $row['nombre'];
        }
    }
    
    echo "<input type='hidden' name='hddProveedores' id='hddProveedores' value='". $responder ."' />";
}
//  FINAL APARTADO PARA GENERAR INPUT CON DATOS DE PROVEEDORES
///////////////////////////
//////////////////////////





///////////////////////////
//////////////////////////
//  APARTADO PARA GENERAR INPUT CON DATOS DE FAMILIAS
function genereFamiliasInput(){
    $queEmp = "SELECT * FROM familia ORDER BY familia;";
    $resEmp = mysql_query($queEmp) or die(mysql_error());
    $totEmp = mysql_num_rows($resEmp);
    
    $responder = '';
    if($totEmp != 0){
        while ($row = mysql_fetch_assoc($resEmp)) {
            $responder == '' ? $responder = $row['codigo'] ."--". $row['familia'] : $responder .= "##". $row['codigo'] ."--". $row['familia'];
        }
    }
    
    echo "<input type='hidden' name='hddFamilias' id='hddFamilias' value='". $responder ."' />";
}
//  FINAL APARTADO PARA GENERAR INPUT CON DATOS DE FAMILIAS
///////////////////////////
//////////////////////////





///////////////////////////
//////////////////////////
//  APARTADO PARA GENERAR INPUT CON DATOS DE SUBFAMILIAS
function genereSubFamiliasInput(){
    $queEmp = "SELECT * FROM subfamilia ORDER BY subfamilia;";
    $resEmp = mysql_query($queEmp) or die(mysql_error());
    $totEmp = mysql_num_rows($resEmp);
    
    $responder = '';
    if($totEmp != 0){
        while ($row = mysql_fetch_assoc($resEmp)) {
            $responder == '' ? $responder = $row['idfamilia'] ."@". $row['codigo'] ."--". $row['subfamilia'] : $responder .= "##". $row['idfamilia'] ."@". $row['codigo'] ."--". $row['subfamilia'];
        }
    }
    
    echo "<input type='hidden' name='hddSubFamilias' id='hddSubFamilias' value='". $responder ."' />";
}
//  FINAL APARTADO PARA GENERAR INPUT CON DATOS DE SUBFAMILIAS
///////////////////////////
//////////////////////////





///////////////////////////
//////////////////////////
//  APARTADO PARA AÑADIR ARTICULOS
function addArticulo($proveedor, $pvpPro, $familia, $subfamilia, $descripcion, $detalles, $pvp, $stock, $bajoMinimo, $mostweb, $oferta, $codigoBarras, $iva){
    $queEmp = "SELECT * FROM articulos WHERE codfamilia = '". $familia ."' AND codsubfamilia = '". $subfamilia ."' AND codbarras = '". $codigoBarras ."';";
    $resEmp = mysql_query($queEmp) or die(mysql_error());
    $totEmp = mysql_num_rows($resEmp);
    
    if($totEmp == 0){
        $queEmp = "SELECT * FROM articulos WHERE codfamilia = '". $familia ."' AND codsubfamilia = '". $subfamilia ."';";
        $resEmp = mysql_query($queEmp) or die(mysql_error());
    
        $codigo = 0;
        while ($row = mysql_fetch_assoc($resEmp)) {
            $codigo = $row['codigo'];
        }
        
        $codigo += 1;
        if(strlen($codigo) == 1) $codigo = '0'. $codigo;
        
        
        $queEmp = "INSERT INTO articulos (codfamilia, codsubfamilia, codigo, descripcion, detalles, pvp, stock, bajominimo, mostrweb, oferta, codbarras, iva) VALUES ('". $familia ."', '". $subfamilia ."', '". $codigo ."', '". $descripcion ."', '". $detalles ."', '". $pvp ."', '". $stock ."', '". $bajoMinimo ."', '". $mostweb ."', '". $oferta ."', '". $codigoBarras ."', '". $iva ."');";
        $resEmp = mysql_query($queEmp) or die(mysql_error());
    }
    
    
    $queEmp = "SELECT * FROM articulos WHERE codfamilia = '". $familia ."' AND codsubfamilia = '". $subfamilia ."' AND codbarras = '". $codigoBarras ."';";
    $resEmp = mysql_query($queEmp) or die(mysql_error());
    $idArticulo = 0;
    while ($row = mysql_fetch_assoc($resEmp)) {
        $idArticulo = $row['id'];
    }
    
    $queEmp = "SELECT * FROM artpro WHERE idarticulo = '". $familia ."' AND idproveedor = '". $subfamilia ."';";
    $resEmp = mysql_query($queEmp) or die(mysql_error());
    $totEmp = mysql_num_rows($resEmp);
    
    if($totEmp == 0){
        $queEmp = "INSERT INTO artpro (idarticulo, idproveedor, precio) VALUES ('". $idArticulo ."', '". $proveedor ."', '". $pvpPro ."');";
        $resEmp = mysql_query($queEmp) or die(mysql_error());
    }
}
//  FINAL APARTADO PARA AÑADIR ARTICULOS
///////////////////////////
//////////////////////////



?>