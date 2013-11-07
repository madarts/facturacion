window.addEvent('resize', function(){
    x = $('documento').getSize().x;
    y = $('documento').getSize().y;
    
    $('documento').setStyle('width', x);
    $('documento').setStyle('height', y);
    $('capaTransparente').setStyle('width', '100%');
    
    if($('control').value == 'home' || $('control').value == 'articulos' || $('control').value == 'clientes' || $('control').value == 'proveedores' || $('control').value == 'facturacion' || $('control').value == 'estadisticas' || $('control').value == 'utilidades'){
        $('subMenu').setStyle('width', x-50);
    
        $('contenido').setStyle('width', x-50);
        $('contenido').setStyle('height', y-235);
    }
});



window.addEvent('domready', function(){
    x = $('documento').getSize().x;
    y = $('documento').getSize().y;
    
    $('documento').setStyle('width', x);
    $('documento').setStyle('height', y);
    
    $('capaTransparente').setStyle('width', x+17);
    
    if($('control').value == 'login') $('txtUsuario').focus();

    if($('control').value == 'home' || $('control').value == 'articulos' || $('control').value == 'clientes' || $('control').value == 'proveedores' || $('control').value == 'facturacion' || $('control').value == 'estadisticas' || $('control').value == 'utilidades'){
        $('subMenu').setStyle('width', x-50);
    
        $('contenido').setStyle('width', x-50);
        $('contenido').setStyle('height', y-220);
        
        
        switch($('control').value){
            case 'articulos': $('articulos').className  = 'select'; 
                              menuSelect = $('articulos');
                              
                              break;
            case 'clientes': $('clientes').className  = 'select'; 
                              menuSelect = $('clientes');
                              
                              break;
            case 'proveedores': $('proveedores').className  = 'select'; 
                              menuSelect = $('proveedores');
                              
                              break;
            case 'facturacion': $('facturacion').className  = 'select'; 
                              menuSelect = $('facturacion');
                              
                              break;
            case 'estadisticas': $('estadisticas').className  = 'select'; 
                              menuSelect = $('estadisticas');
                              
                              break;
            case 'utilidades': $('utilidades').className  = 'select'; 
                              menuSelect = $('utilidades');
                              
                              break;
            
            default: menuSelect = ''; break;
        }
        
        switch($('control1').value){
            case 'familias': $('a_familias').className  = 'select'; 
                              subMenuSelect = $('a_familias');
                              
                              break;
            case 'articulos': $('a_articulos').className  = 'select'; 
                              subMenuSelect = $('a_articulos');
                              
                              break;
                              
                              
            case 'clientes': $('c_clientes').className  = 'select'; 
                              subMenuSelect = $('c_clientes');
                              
                              break;
            case 'enviarEmail': $('c_enviarEmail').className  = 'select'; 
                              subMenuSelect = $('c_enviarEmail');
                              
                              break;
            case 'formasPago': $('c_formasPago').className  = 'select'; 
                              subMenuSelect = $('c_formasPago');
                              
                              break;
            case 'provincias': $('c_provincias').className  = 'select'; 
                              subMenuSelect = $('c_provincias');
                              
                              break;
                              
                              
            case 'proveedores': $('p_proveedores').className  = 'select'; 
                              subMenuSelect = $('p_proveedores');
                              
                              break;
            case 'precioProveedores': $('p_precioProveedores').className  = 'select'; 
                              subMenuSelect = $('p_precioProveedores');
                              
                              break;
            case 'facturasProveedores': $('p_facturasProveedores').className  = 'select'; 
                              subMenuSelect = $('p_facturasProveedores');
                              
                              break;
                              
                              
            case 'partes': $('f_partes').className  = 'select'; 
                              subMenuSelect = $('f_partes');
                              
                              break;
            case 'albaranes': $('f_albaranes').className  = 'select'; 
                              subMenuSelect = $('f_albaranes');
                              
                              break;
            case 'facturas': $('f_facturas').className  = 'select'; 
                              subMenuSelect = $('f_facturas');
                              
                              break;
            case 'presupuestos': $('f_presupuestos').className  = 'select'; 
                              subMenuSelect = $('f_presupuestos');
                              
                              break;
                              
                              
            case 'eclientes': $('e_clientes').className  = 'select'; 
                              subMenuSelect = $('e_clientes');
                              
                              break;
            case 'earticulos': $('e_articulos').className  = 'select'; 
                              subMenuSelect = $('e_articulos');
                              
                              break;
            case 'resumenFacturacion': $('e_resumenFacturacion').className  = 'select'; 
                              subMenuSelect = $('e_resumenFacturacion');
                              
                              break;
            case 'modelosHacienda': $('e_modelosHacienda').className  = 'select'; 
                              subMenuSelect = $('e_modelosHacienda');
                              
                              break;
                              
                              
            case 'copiaSeguridad': $('u_copiaSeguridad').className  = 'select'; 
                              subMenuSelect = $('u_copiaSeguridad');
                              
                              break;
            case 'limpieza': $('u_limpieza').className  = 'select'; 
                              subMenuSelect = $('u_limpieza');
                              
                              break;
            case 'configuraciones': $('u_configuraciones').className  = 'select'; 
                              subMenuSelect = $('u_configuraciones');
                              
                              break;
                              
            
            default: subMenuSelect = ''; break;
        }
        
        switch($('control2').value){
            case 'gestionPartes': $('f_p_gestionPartes').className  = 'select'; 
                              subSubMenuSelect = $('f_p_gestionPartes');
                              
                              break;
            case 'partesFinalizados': $('f_p_partesFinalizados').className  = 'select'; 
                              subSubMenuSelect = $('f_p_partesFinalizados');
                              
                              break;
            case 'partesAnulados': $('f_p_partesAnulados').className  = 'select'; 
                              subSubMenuSelect = $('f_p_partesAnulados');
                              
                              break;
            case 'gestionTrabajadores': $('f_p_gestionTrabajadores').className  = 'select'; 
                              subSubMenuSelect = $('f_p_gestionTrabajadores');
                              
                              break;
            case 'estadisticasTrabajadores': $('f_p_estadisticasTrabajadores').className  = 'select'; 
                              subSubMenuSelect = $('f_p_estadisticasTrabajadores');
                              
                              break;
                              
                              
                              
            case 'gestionAlbaranes': $('f_a_gestionAlbaranes').className  = 'select'; 
                              subSubMenuSelect = $('f_a_gestionAlbaranes');
                              
                              break;
            case 'albaranesFinalizados': $('f_a_albaranesFinalizados').className  = 'select'; 
                              subSubMenuSelect = $('f_a_albaranesFinalizados');
                              
                              break;
            case 'albaranesAnulados': $('f_a_albaranesAnulados').className  = 'select'; 
                              subSubMenuSelect = $('f_a_albaranesAnulados');
                              
                              break;
                              
                              
                              
            case 'facturasClientes': $('f_f_facturasClientes').className  = 'select'; 
                              subSubMenuSelect = $('f_f_facturasClientes');
                              
                              break;
            case 'facturasPeriodicas': $('f_f_facturasPeriodicas').className  = 'select'; 
                              subSubMenuSelect = $('f_f_facturasPeriodicas');
                              
                              break;
            case 'emisionFacturas': $('f_f_emisionFacturas').className  = 'select'; 
                              subSubMenuSelect = $('f_f_emisionFacturas');
                              
                              break;
                              
                              
                              
            case 'presupuestos': $('f_p_presupuestos').className  = 'select'; 
                              subSubMenuSelect = $('f_p_presupuestos');
                              
                              break;
            case 'presupuestosAceptados': $('f_p_presupuestosAceptados').className  = 'select'; 
                              subSubMenuSelect = $('f_p_presupuestosAceptados');
                              
                              break;
            case 'presupuestosRechazados': $('f_p_presupuestosRechazados').className  = 'select'; 
                              subSubMenuSelect = $('f_p_presupuestosRechazados');
                              
                              break;
                              
                              
                              
            case 'comprasCliente': $('e_c_comprasCliente').className  = 'select'; 
                              subSubMenuSelect = $('e_c_comprasCliente');
                              
                              break;
            case 'estadoPagos': $('e_c_estadoPagos').className  = 'select'; 
                              subSubMenuSelect = $('e_c_estadoPagos');
                              
                              break;
            case 'emailEnviados': $('e_c_emailEnviados').className  = 'select'; 
                              subSubMenuSelect = $('e_c_emailEnviados');
                              
                              break;
                              
                              
                              
            case 'resumenArticulosVendidos': $('e_a_resumenArticulosVendidos').className  = 'select'; 
                              subSubMenuSelect = $('e_a_resumenArticulosVendidos');
                              
                              break;
            case 'articulosVendidosAClientes': $('e_a_articulosVendidosAClientes').className  = 'select'; 
                              subSubMenuSelect = $('e_a_articulosVendidosAClientes');
                              
                              break;
            case 'articulosFamilia': $('e_a_articulosFamilia').className  = 'select'; 
                              subSubMenuSelect = $('e_a_articulosFamilia');
                              
                              break;
            case 'articulosFamiliaIVA': $('e_a_articulosFamiliaIVA').className  = 'select'; 
                              subSubMenuSelect = $('e_c_articulosFamiliaIVA');
                              
                              break;
            case 'articulosProveedores': $('e_a_articulosProveedores').className  = 'select'; 
                              subSubMenuSelect = $('e_c_articulosProveedores');
                              
                              break;
            case 'articulosBajoMinimos': $('e_a_articulosBajoMinimos').className  = 'select'; 
                              subSubMenuSelect = $('e_a_articulosBajoMinimos');
                              
                              break;
                              
                              
                              
            case 'ventas': $('e_r_ventas').className  = 'select'; 
                              subSubMenuSelect = $('e_r_ventas');
                              
                              break;
            case 'compras': $('e_r_compras').className  = 'select'; 
                              subSubMenuSelect = $('e_r_compras');
                              
                              break;
            case 'resumenAnualFacturacionClientes': $('e_r_resumenAnualFacturacionClientes').className  = 'select'; 
                              subSubMenuSelect = $('e_r_resumenAnualFacturacionClientes');
                              
                              break;
                              
                              
                              
            case 'modelo347Ventas': $('e_m_modelo347Ventas').className  = 'select'; 
                              subSubMenuSelect = $('e_m_modelo347Ventas');
                              
                              break;
            case 'modelo347Compras': $('e_m_modelo347Compras').className  = 'select'; 
                              subSubMenuSelect = $('e_m_modelo347Compras');
                              
                              break;
                              
                              
                              
            case 'realizarCopiaDatos': $('u_c_realizarCopiaDatos').className  = 'select'; 
                              subSubMenuSelect = $('u_c_realizarCopiaDatos');
                              
                              break;
            case 'realizarCopiaDatosTabla': $('u_c_realizarCopiaDatosTabla').className  = 'select'; 
                              subSubMenuSelect = $('u_c_realizarCopiaDatosTabla');
                              
                              break;
            case 'restaurarCopia': $('u_c_restaurarCopia').className  = 'select'; 
                              subSubMenuSelect = $('u_c_restaurarCopia');
                              
                              break;
                              
                              
                              
            case 'limpiarTemporales': $('u_l_limpiarTemporales').className  = 'select'; 
                              subSubMenuSelect = $('u_l_limpiarTemporales');
                              
                              break;
            case 'eliminarEjercicioEconomico': $('u_l_eliminarEjercicioEconomico').className  = 'select'; 
                              subSubMenuSelect = $('u_l_eliminarEjercicioEconomico');
                              
                              break;
            case 'ponerCeroExistencias': $('u_l_ponerCeroExistencias').className  = 'select'; 
                              subSubMenuSelect = $('u_l_ponerCeroExistencias');
                              
                              break;
                              
                              
                              
            case 'disenioDocumentos': $('u_c_disenioDocumentos').className  = 'select'; 
                              subSubMenuSelect = $('u_c_disenioDocumentos');
                              
                              break;
            case 'confDatosEmpresa': $('u_c_confDatosEmpresa').className  = 'select'; 
                              subSubMenuSelect = $('u_c_confDatosEmpresa');
                              
                              break;
            case 'confDatosServidorCorreo': $('u_c_confDatosServidorCorreo').className  = 'select'; 
                              subSubMenuSelect = $('u_c_confDatosServidorCorreo');
                              
                              break;
            case 'confSeriesFacturas': $('u_c_confSeriesFacturas').className  = 'select'; 
                              subSubMenuSelect = $('u_c_confSeriesFacturas');
                              
                              break;
            case 'usuarios': $('u_c_usuarios').className  = 'select'; 
                              subSubMenuSelect = $('u_c_usuarios');
                              
                              break;
            case 'asistente': $('u_c_asistente').className  = 'select'; 
                              subSubMenuSelect = $('u_c_asistente');
                              
                              break;
                              
                              
            
            default: subSubMenuSelect = ''; break;
        }
        
        var links = document.id('menu').getElements('li');

        links.each(function(link) {
            link.addEvent('click',function() {
                if(menuSelect != '') menuSelect.className  = ''
                link.className  = 'select'
                
                menuSelect = link;
            });
        });
        
        
        var links1 = document.id('subMenu').getElements('a');

        links1.each(function(link1) {
            link1.addEvent('click',function() {
                if(subMenuSelect != '') subMenuSelect.className  = ''
                link1.className  = 'select'
                
                subMSelect = link1;
            });
        });
        
        
        if(subSubMenuSelect != ''){
            var links2 = document.id('subSubMenu').getElements('a');
    
            links2.each(function(link2) {
                links2.addEvent('click',function() {
                    if(subSubMenuSelect != '') subSubMenuSelect.className  = ''
                    links2.className  = 'select'
                    
                    subSubMenuSelect = link2;
                });
            });
        }
        
        
        
        
        
        
        
        
        
        $('articulos').addEvent('click',function() {
            location.href = './?menu=articulos';
        });
        
        $('clientes').addEvent('click',function() {
            location.href = './?menu=clientes';
        });
        
        $('proveedores').addEvent('click',function() {
            location.href = './?menu=proveedores';
        });
        
        $('facturacion').addEvent('click',function() {
            location.href = './?menu=facturacion';
        });
        
        $('estadisticas').addEvent('click',function() {
            location.href = './?menu=estadisticas';
        });
        
        $('utilidades').addEvent('click',function() {
            location.href = './?menu=utilidades';
        });
    }
    
    
    
});