<?php

if(isset($_GET['menu'])){
    switch($_GET['menu']){
        case 'articulos': echo '<input type="hidden" id="control" value="articulos" />'; break;
        case 'clientes': echo '<input type="hidden" id="control" value="clientes" />'; break;
        case 'proveedores': echo '<input type="hidden" id="control" value="proveedores" />'; break;
        case 'facturacion': echo '<input type="hidden" id="control" value="facturacion" />'; break;
        case 'estadisticas': echo '<input type="hidden" id="control" value="estadisticas" />'; break;
        case 'utilidades': echo '<input type="hidden" id="control" value="utilidades" />'; break;
    }
}
else
    echo '<input type="hidden" id="control" value="home" />';
    
if(isset($_GET['opcion'])){
    switch($_GET['opcion']){
        case 'familias':    echo '<input type="hidden" id="control1" value="familias" />'; break;
        case 'articulos':   echo '<input type="hidden" id="control1" value="articulos" />'; break;
        
        case 'clientes':    echo '<input type="hidden" id="control1" value="clientes" />'; break;
        case 'enviarEmail': echo '<input type="hidden" id="control1" value="enviarEmail" />'; break;
        case 'formasPago':  echo '<input type="hidden" id="control1" value="formasPago" />'; break;
        case 'provincias':    echo '<input type="hidden" id="control1" value="provincias" />'; break;
        
        case 'proveedores':             echo '<input type="hidden" id="control1" value="proveedores" />'; break;
        case 'precioProveedores':       echo '<input type="hidden" id="control1" value="precioProveedores" />'; break;
        case 'facturasProveedores':     echo '<input type="hidden" id="control1" value="facturasProveedores" />'; break;
        
        case 'partes':             echo '<input type="hidden" id="control1" value="partes" />'; break;
        case 'albaranes':       echo '<input type="hidden" id="control1" value="albaranes" />'; break;
        case 'facturas':     echo '<input type="hidden" id="control1" value="facturas" />'; break;
        case 'presupuestos':     echo '<input type="hidden" id="control1" value="presupuestos" />'; break;
        
        case 'eclientes':             echo '<input type="hidden" id="control1" value="eclientes" />'; break;
        case 'earticulos':       echo '<input type="hidden" id="control1" value="earticulos" />'; break;
        case 'resumenFacturacion':     echo '<input type="hidden" id="control1" value="resumenFacturacion" />'; break;
        case 'modelosHacienda':     echo '<input type="hidden" id="control1" value="modelosHacienda" />'; break;
        
        case 'copiaSeguridad':       echo '<input type="hidden" id="control1" value="copiaSeguridad" />'; break;
        case 'limpieza':     echo '<input type="hidden" id="control1" value="limpieza" />'; break;
        case 'configuraciones':     echo '<input type="hidden" id="control1" value="configuraciones" />'; break;
    }
}
else
    echo '<input type="hidden" id="control1" value="" />';
    
if(isset($_GET['subopcion'])){
    switch($_GET['subopcion']){
        case 'gestionPartes':    echo '<input type="hidden" id="control2" value="gestionPartes" />'; break;
        case 'partesFinalizados':   echo '<input type="hidden" id="control2" value="partesFinalizados" />'; break;
        case 'partesAnulados':   echo '<input type="hidden" id="control2" value="partesAnulados" />'; break;
        case 'gestionTrabajadores':   echo '<input type="hidden" id="control2" value="gestionTrabajadores" />'; break;
        case 'estadisticasTrabajadores':   echo '<input type="hidden" id="control2" value="estadisticasTrabajadores" />'; break;
        
        case 'gestionAlbaranes':   echo '<input type="hidden" id="control2" value="gestionAlbaranes" />'; break;
        case 'albaranesFinalizados':   echo '<input type="hidden" id="control2" value="albaranesFinalizados" />'; break;
        case 'albaranesAnulados':   echo '<input type="hidden" id="control2" value="albaranesAnulados" />'; break;
        
        case 'facturasClientes':   echo '<input type="hidden" id="control2" value="facturasClientes" />'; break;
        case 'facturasPeriodicas':   echo '<input type="hidden" id="control2" value="facturasPeriodicas" />'; break;
        case 'emisionFacturas':   echo '<input type="hidden" id="control2" value="emisionFacturas" />'; break;
        
        case 'presupuestos':   echo '<input type="hidden" id="control2" value="presupuestos" />'; break;
        case 'presupuestosAceptados':   echo '<input type="hidden" id="control2" value="presupuestosAceptados" />'; break;
        case 'presupuestosRechazados':   echo '<input type="hidden" id="control2" value="presupuestosRechazados" />'; break;
        
        case 'comprasCliente':   echo '<input type="hidden" id="control2" value="comprasCliente" />'; break;
        case 'estadoPagos':   echo '<input type="hidden" id="control2" value="estadoPagos" />'; break;
        case 'emailEnviados':   echo '<input type="hidden" id="control2" value="emailEnviados" />'; break;
        
        case 'resumenArticulosVendidos':   echo '<input type="hidden" id="control2" value="resumenArticulosVendidos" />'; break;
        case 'articulosVendidosAClientes':   echo '<input type="hidden" id="control2" value="articulosVendidosAClientes" />'; break;
        case 'articulosFamilia':   echo '<input type="hidden" id="control2" value="articulosFamilia" />'; break;
        case 'articulosFamiliaIVA':   echo '<input type="hidden" id="control2" value="articulosFamiliaIVA" />'; break;
        case 'articulosProveedores':   echo '<input type="hidden" id="control2" value="articulosProveedores" />'; break;
        case 'articulosBajoMinimos':   echo '<input type="hidden" id="control2" value="articulosBajoMinimos" />'; break;
        
        case 'ventas':   echo '<input type="hidden" id="control2" value="ventas" />'; break;
        case 'compras':   echo '<input type="hidden" id="control2" value="compras" />'; break;
        case 'resumenAnualFacturacionClientes':   echo '<input type="hidden" id="control2" value="resumenAnualFacturacionClientes" />'; break;
        
        case 'modelo347Ventas':   echo '<input type="hidden" id="control2" value="modelo347Ventas" />'; break;
        case 'modelo347Compras':   echo '<input type="hidden" id="control2" value="modelo347Compras" />'; break;
        
        case 'realizarCopiaDatos':   echo '<input type="hidden" id="control2" value="realizarCopiaDatos" />'; break;
        case 'realizarCopiaDatosTabla':   echo '<input type="hidden" id="control2" value="realizarCopiaDatosTabla" />'; break;
        case 'restaurarCopia':   echo '<input type="hidden" id="control2" value="restaurarCopia" />'; break;
        
        case 'limpiarTemporales':   echo '<input type="hidden" id="control2" value="limpiarTemporales" />'; break;
        case 'eliminarEjercicioEconomico':   echo '<input type="hidden" id="control2" value="eliminarEjercicioEconomico" />'; break;
        case 'ponerCeroExistencias':   echo '<input type="hidden" id="control2" value="ponerCeroExistencias" />'; break;
        
        case 'disenioDocumentos':   echo '<input type="hidden" id="control2" value="disenioDocumentos" />'; break;
        case 'confDatosEmpresa':   echo '<input type="hidden" id="control2" value="confDatosEmpresa" />'; break;
        case 'confDatosServidorCorreo':   echo '<input type="hidden" id="control2" value="confDatosServidorCorreo" />'; break;
        case 'confSeriesFacturas':   echo '<input type="hidden" id="control2" value="confSeriesFacturas" />'; break;
        case 'usuarios':   echo '<input type="hidden" id="control2" value="usuarios" />'; break;
        case 'asistente':   echo '<input type="hidden" id="control2" value="asistente" />'; break;
    }
}
else
    echo '<input type="hidden" id="control2" value="" />';

?>


<a href="./"><img src="img/logo.png" id="logo" /></a>

<br />

<div id="unlogin">Bienvenido <b><?php echo $_SESSION['fac_user']; ?> · <a href="./?unlogin=ok">Desconectarse</a></b></div>

<ul id="menu">
    <li id="articulos"><img src="img/articulos.png" /> Articulos</li>
    <li id="clientes"><img src="img/clientes.png" /> Clientes</li>
    <li id="proveedores"><img src="img/proveedores.png" /> Proveedores</li>
    <li id="facturacion"><img src="img/facturacion.png" /> Facturacion</li>
    <li id="estadisticas"><img src="img/estadisticas.png" /> Estadisticas</li>
    <li id="utilidades"><img src="img/utilidades.png" /> Utilidades</li>
    <div style="clear: both;"></div>
</ul>

<div id="subMenu">
    <?php
    
    if(isset($_GET['menu'])){
        switch($_GET['menu']){
            case 'articulos': echo '<a href="./?menu=articulos&opcion=familias" id="a_familias">Familias</a>
                                    <a href="./?menu=articulos&opcion=articulos" id="a_articulos">Articulos</a>'; 
                              break;
                              
            case 'clientes': echo '<a href="./?menu=clientes&opcion=clientes" id="c_clientes">Clientes</a>
                                   <a href="./?menu=clientes&opcion=enviarEmail" id="c_enviarEmail">Enviar Email</a>
                                   <a href="./?menu=clientes&opcion=formasPago" id="c_formasPago">Formas de Pago</a>
                                   <a href="./?menu=clientes&opcion=provincias" id="c_provincias">Provincias</a>'; 
                             break;
                              
            case 'proveedores': echo '<a href="./?menu=proveedores&opcion=proveedores" id="p_proveedores">Proveedores</a>
                                      <a href="./?menu=proveedores&opcion=precioProveedores" id="p_precioProveedores">Precio de Proveedores</a>
                                      <a href="./?menu=proveedores&opcion=facturasProveedores" id="p_facturasProveedores">Facturas de Proveedores</a>'; 
                                break;
                              
            case 'facturacion': echo '<a href="./?menu=facturacion&opcion=partes" id="f_partes">Partes</a>
                                      <a href="./?menu=facturacion&opcion=albaranes" id="f_albaranes">Albaranes</a>
                                      <a href="./?menu=facturacion&opcion=facturas" id="f_facturas">Facturas</a>
                                      <a href="./?menu=facturacion&opcion=presupuestos" id="f_presupuestos">Presupuestos</a>';
                                break;
                              
            case 'estadisticas': echo '<a href="./?menu=estadisticas&opcion=eclientes" id="e_clientes">Clientes</a>
                                       <a href="./?menu=estadisticas&opcion=earticulos" id="e_articulos">Articulos</a>
                                       <a href="./?menu=estadisticas&opcion=resumenFacturacion" id="e_resumenFacturacion">Resumen de Facturacion</a>
                                       <a href="./?menu=estadisticas&opcion=modelosHacienda" id="e_modelosHacienda">Modelos de Hacienda</a>'; 
                                 break;
                              
            case 'utilidades': echo '<a href="./?menu=utilidades&opcion=copiaSeguridad" id="u_copiaSeguridad">Copia de Seguridad</a>
                                     <a href="./?menu=utilidades&opcion=limpieza" id="u_limpieza">Limpieza</a>
                                     <a href="./?menu=utilidades&opcion=configuraciones" id="u_configuraciones">Configuraciones</a>'; 
                               break;
        }
    }
    
    ?>
</div>

<?php
    if(isset($_GET['opcion'])){
        switch($_GET['opcion']){
            case 'partes': echo '<div id="subSubMenu">
                                 <a href="./?menu=facturacion&opcion=partes&subopcion=gestionPartes" id="f_p_gestionPartes">Gestion de Partes</a>
                                 <a href="./?menu=facturacion&opcion=partes&subopcion=partesFinalizados" id="f_p_partesFinalizados">Partes Finalizados</a>
                                 <a href="./?menu=facturacion&opcion=partes&subopcion=partesAnulados" id="f_p_partesAnulados">Partes Anulados</a>
                                 <a href="./?menu=facturacion&opcion=partes&subopcion=gestionTrabajadores" id="f_p_gestionTrabajadores">Gestion de Trabajadores</a>
                                 <a href="./?menu=facturacion&opcion=partes&subopcion=estadisticasTrabajadores" id="f_p_estadisticasTrabajadores">Estadisticas de Trabajadores</a>
                                 </div>'; 
                           break;
            case 'albaranes': echo '<div id="subSubMenu">
                                    <a href="./?menu=facturacion&opcion=albaranes&subopcion=gestionAlbaranes" id="f_a_gestionAlbaranes">Gestion de Albaranes</a>
                                    <a href="./?menu=facturacion&opcion=albaranes&subopcion=albaranesFinalizados" id="f_a_albaranesFinalizados">Albaranes Finalizados</a>
                                    <a href="./?menu=facturacion&opcion=albaranes&subopcion=albaranesAnulados" id="f_a_albaranesAnulados">Albaranes Anulados</a>
                                    </div>'; 
                              break;
            case 'facturas': echo '<div id="subSubMenu">
                                   <a href="./?menu=facturacion&opcion=facturas&subopcion=facturasClientes" id="f_f_facturasClientes">Facturas a Clientes</a>
                                   <a href="./?menu=facturacion&opcion=facturas&subopcion=facturasPeriodicas" id="f_f_facturasPeriodicas">Facturas Periodicas</a>
                                   <a href="./?menu=facturacion&opcion=facturas&subopcion=emisionFacturas" id="f_f_emisionFacturas">Emision de Facturas</a>
                                   </div>'; 
                             break;
            case 'presupuestos': echo '<div id="subSubMenu">
                                       <a href="./?menu=facturacion&opcion=presupuestos&subopcion=presupuestos" id="f_p_presupuestos">Presupuestos</a>
                                       <a href="./?menu=facturacion&opcion=presupuestos&subopcion=presupuestosAceptados" id="f_p_presupuestosAceptados">Presupuestos Aceptados</a>
                                       <a href="./?menu=facturacion&opcion=presupuestos&subopcion=presupuestosRechazados" id="f_p_presupuestosRechazados">Presupuestos Rechazados</a>
                                       </div>'; 
                                 break;
                                 
                                 
                                 
            case 'eclientes': echo '<div id="subSubMenu">
                                    <a href="./?menu=estadisticas&opcion=eclientes&subopcion=comprasCliente" id="e_c_comprasCliente">Compras por Clinete</a>
                                    <a href="./?menu=estadisticas&opcion=eclientes&subopcion=estadoPagos" id="e_c_estadoPagos">Estado de Pagos</a>
                                    <a href="./?menu=estadisticas&opcion=eclientes&subopcion=emailEnviados" id="e_c_emailEnviados">E-mail Enviados</a>
                                    </div>'; 
                              break;
            case 'earticulos': echo '<div id="subSubMenu">
                                     <a href="./?menu=estadisticas&opcion=earticulos&subopcion=resumenArticulosVendidos" id="e_a_resumenArticulosVendidos">Resumen de Articulos Vendidos</a>
                                     <a href="./?menu=estadisticas&opcion=earticulos&subopcion=articulosVendidosAClientes" id="e_a_articulosVendidosAClientes">Articulos Vendidos a Clientes</a>
                                     <a href="./?menu=estadisticas&opcion=earticulos&subopcion=articulosFamilia" id="e_a_articulosFamilia">Articulos por Familia</a>
                                     <a href="./?menu=estadisticas&opcion=earticulos&subopcion=articulosFamiliaIVA" id="e_a_articulosFamiliaIVA">Articulos por Familia con IVA</a>
                                     <a href="./?menu=estadisticas&opcion=earticulos&subopcion=articulosProveedores" id="e_a_articulosProveedores">Articulos por Proveedor</a>
                                     <a href="./?menu=estadisticas&opcion=earticulos&subopcion=articulosBajoMinimos" id="e_a_articulosBajoMinimos">Articulos Bajo Minimos</a>
                                     </div>'; 
                              break;
            case 'resumenFacturacion': echo '<div id="subSubMenu">
                                             <a href="./?menu=estadisticas&opcion=resumenFacturacion&subopcion=ventas" id="e_r_ventas">Ventas</a>
                                             <a href="./?menu=estadisticas&opcion=resumenFacturacion&subopcion=compras" id="e_r_compras">Compras</a>
                                             <a href="./?menu=estadisticas&opcion=resumenFacturacion&subopcion=resumenAnualFacturacionClientes" id="e_r_resumenAnualFacturacionClientes">Resumen Anual de Facturacion a Clientes</a>
                                             </div>'; 
                                       break;
            case 'modelosHacienda': echo '<div id="subSubMenu">
                                          <a href="./?menu=estadisticas&opcion=modelosHacienda&subopcion=modelo347Ventas" id="e_m_modelo347Ventas">Modelo 347 Ventas</a>
                                          <a href="./?menu=estadisticas&opcion=modelosHacienda&subopcion=modelo347Compras" id="e_m_modelo347Compras">Modelo 347 Compras</a>
                                          </div>'; 
                                    break;
                                    
                                    
                                    
            case 'copiaSeguridad': echo '<div id="subSubMenu">
                                         <a href="./?menu=utilidades&opcion=copiaSeguridad&subopcion=realizarCopiaDatos" id="u_c_realizarCopiaDatos">Realizar Copia Solo de Datos</a>
                                         <a href="./?menu=utilidades&opcion=copiaSeguridad&subopcion=realizarCopiaDatosTabla" id="u_c_realizarCopiaDatosTabla">Realizar Copia de Datos y Tabla</a>
                                         <a href="./?menu=utilidades&opcion=copiaSeguridad&subopcion=restaurarCopia" id="u_c_restaurarCopia">Restaurar Copia</a>
                                         </div>'; 
                                   break;
            case 'limpieza': echo '<div id="subSubMenu">
                                   <a href="./?menu=utilidades&opcion=limpieza&subopcion=limpiarTemporales" id="u_l_limpiarTemporales">Limpiar Temporales</a>
                                   <a href="./?menu=utilidades&opcion=limpieza&subopcion=eliminarEjercicioEconomico" id="u_l_eliminarEjercicioEconomico">Eliminar Ejercicio Economico</a>
                                   <a href="./?menu=utilidades&opcion=limpieza&subopcion=ponerCeroExistencias" id="u_l_ponerCeroExistencias">Poner a Cero las Existencias</a>
                                   </div>'; 
                             break;
            case 'configuraciones': echo '<div id="subSubMenu">
                                          <a href="./?menu=utilidades&opcion=configuraciones&subopcion=disenioDocumentos" id="u_c_disenioDocumentos">Diseño de Documentos</a>
                                          <a href="./?menu=utilidades&opcion=configuraciones&subopcion=confDatosEmpresa" id="u_c_confDatosEmpresa">Conf. Datos de Empresa</a>
                                          <a href="./?menu=utilidades&opcion=configuraciones&subopcion=confDatosServidorCorreo" id="u_c_confDatosServidorCorreo">Conf. Datos Servidor de Correo</a>
                                          <a href="./?menu=utilidades&opcion=configuraciones&subopcion=confSeriesFacturas" id="u_c_confSeriesFacturas">Conf. Series de Factura</a>
                                          <a href="./?menu=utilidades&opcion=configuraciones&subopcion=usuarios" id="u_c_usuarios">Usuarios</a>
                                          <a href="./?menu=utilidades&opcion=configuraciones&subopcion=asistente" id="u_c_asistente">Asistente</a>
                                          </div>'; 
                                    break;
        }
    }
    
    ?>
