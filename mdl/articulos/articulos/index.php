<?php

genereProveedoresInput();
genereFamiliasInput();
genereSubFamiliasInput();

if(isset($_GET['addArticulo']) AND 
   isset($_POST['slcProveedor']) AND 
   isset($_POST['txtPrecioProveedor']) AND 
   isset($_POST['slcFamilia']) AND 
   isset($_POST['slcSubFamilia']) AND 
   isset($_POST['txtDescripcion']) AND 
   isset($_POST['txtDetalles']) AND 
   isset($_POST['txtPrecioTienda']) AND 
   isset($_POST['txtStock']) AND 
   isset($_POST['txtBajoMinimo']) AND 
   isset($_POST['slcWeb']) AND 
   isset($_POST['slcOferta']) AND 
   isset($_POST['txtCodigoBarras']) AND 
   isset($_POST['txtIva'])){
    $proveedor      = $_POST['slcProveedor'];
    $pvpProveedor   = $_POST['txtPrecioProveedor'];
    
    $familia        = $_POST['slcFamilia'];
    $subfamilia     = $_POST['slcSubFamilia'];
    $descripcion    = $_POST['txtDescripcion'];
    $detalles       = $_POST['txtDetalles'];
    $pvp            = $_POST['txtPrecioTienda'];
    $stock          = $_POST['txtStock'];
    $bajoMinimo     = $_POST['txtBajoMinimo'];
    $web            = $_POST['slcWeb'];
    $oferta         = $_POST['slcOferta'];
    $codBarras      = $_POST['txtCodigoBarras'];
    $iva            = $_POST['txtIva'];
    
    addArticulo($proveedor, $pvpProveedor, $familia, $subfamilia, $descripcion, $detalles, $pvp, $stock, $bajoMinimo, $web, $oferta, $codBarras, $iva);
    
    echo "<script language='javascript'> location.href = './?menu=articulos&opcion=articulos&busqueda=". $descripcion ."'; </script>";
}
?>

<div id="buscador">
    <form name="searchArticulo" method="POST" action="./?menu=articulos&opcion=articulos"><input type="hidden" name="hddBuscar" id="hddBuscar" value="<?php 
                                                                if(isset($_GET['busqueda']))
                                                                    echo $_GET['busqueda']; 
                                                                elseif(isset($_POST['txtBuscar']))
                                                                    echo $_POST['txtBuscar'];    
                                                                elseif(isset($_POST['txtInsertarArticulo']))
                                                                    echo $_POST['txtInsertarArticulo']; 
                                                                ?>" /> 

    <input type="text" name="txtBuscar" id="txtBuscar" value="" class="select" /></form>
    
    <input type="button" name="btnAdd" id="btnAdd" value="+" class="stlBoton" />
    <div style="clear: both;"></div>
</div>

<div id="titulo">
    ARTICULOS
</div>

<table id="tblDatos" cellpadding="0" cellspacing="1">
    <thead>
        <td>Articulo</td>
        <td align="center" width="80px">Pvp</td>
        <td align="center" width="100px">Mostrar</td>
        <td align="center" width="100px">Modificar</td>
        <td align="center" width="100px">Eliminar</td>
    </thead>
    
    <?php  
    
    if(isset($_GET['busqueda']))
        articulos($_GET['busqueda']); 
    elseif(isset($_POST['txtBuscar']))
        articulos($_POST['txtBuscar']);
    else
        articulos();
    ?>
</table>