window.addEvent('domready', function(){
    
    $('txtBuscar').value = $('hddBuscar').value;
    $('txtBuscar').focus();
    
    
    $('cerrarContenidoSuperior').addEvent('click',function() {
        $('capaTransparente').setStyle('display', 'none');
        $('contenidoSuperior').setStyle('display', 'none');
        $('cerrarContenidoSuperior').setStyle('display', 'none');
    });
    
    cerrarSuperior = function(){
        $('capaTransparente').setStyle('display', 'none');
        $('contenidoSuperior').setStyle('display', 'none');
        $('cerrarContenidoSuperior').setStyle('display', 'none');
    }
    
    
    
    $('btnAdd').addEvent('click',function(codigo) {
        $('capaTransparente').setStyle('display', 'block');
        $('contenidoSuperior').setStyle('display', 'block');
        $('cerrarContenidoSuperior').setStyle('display', 'block');
        
        listaProveedores = $('hddProveedores').value;
        listaProveedores = listaProveedores.split('##');
        
        listaFamilias = $('hddFamilias').value;
        listaFamilias = listaFamilias.split('##');
        
        responder =  '<form id="frmAddArticulo" onsubmit="return sendInsertarArticulo();"  method="POST" action="./?menu=articulos&opcion=articulos&addArticulo=ok"><div class="tituloCapaSuperior">INSERTAR ARTICULO</div>';
        
        responder += '<input type="hidden" name="hddAddArticulo" id="hddAddArticulo" value="'+ codigo +'">';
        
        responder += '<div class="contenidoCapaSuperior">proveedor <select id="slcProveedor" name="slcProveedor">';
        responder += '<option value="" selected="selected">---seleccione un proveedor---</option>';
        
        for(i=0;i<listaProveedores.length;i++){
            proveedorCod = listaProveedores[i].split('--');
            
            responder += '<option value="'+ proveedorCod[0] +'">'+ proveedorCod[1] +'</option>';
        }
        
        responder += '</select></div>';
        responder += '<div class="contenidoCapaSuperior">precio proveedor <input type="text" name="txtPrecioProveedor" id="txtPrecioProveedor" style="width: 50px;" /></div>';
        
        responder += '<br />';
        
        responder += '<div class="contenidoCapaSuperior">familia <select id="slcFamilia" name="slcFamilia" onchange="changeSubfamilia(this);">';
        responder += '<option value="" selected="selected">---seleccione una familia---</option>';
        
        for(i=0;i<listaFamilias.length;i++){
            familiaCod = listaFamilias[i].split('--');
            
            responder += '<option value="'+ familiaCod[0] +'">'+ familiaCod[1] +'</option>';
        }
        
        responder += '</select></div>';
        responder += '<div class="contenidoCapaSuperior">subfamilia <span id="contenidoSubfamilia"><select id="slcSubFamilia" name="slcSubFamilia">';
        responder += '<option value="" selected="selected">---seleccione una familia---</option>';
        
        responder += '</select></span></div>';
        responder += '<div class="contenidoCapaSuperior">descripcion <input type="text" name="txtDescripcion" id="txtDescripcion" style="width: 240px;" /></div>';
        responder += '<div class="contenidoCapaSuperior">detalles <input type="text" name="txtDetalles" id="txtDetalles" style="width: 240px;" /></div>';
        responder += '<div class="contenidoCapaSuperior">precio en tienda <input type="text" name="txtPrecioTienda" id="txtPrecioTienda" style="width: 50px;" /></div>';
        responder += '<div class="contenidoCapaSuperior">stock <input type="text" name="txtStock" id="txtStock" style="width: 50px;" /></div>';
        responder += '<div class="contenidoCapaSuperior">bajo minimo <input type="text" name="txtBajoMinimo" id="txtBajoMinimo" style="width: 50px;" /></div>';
        responder += '<div class="contenidoCapaSuperior">mostrar en web <select id="slcWeb" name="slcWeb"><option value="si">si</option><option value="no" selected="selected">no</option></select></div>';
        responder += '<div class="contenidoCapaSuperior">oferta <select id="slcOferta" name="slcOferta"><option value="si">si</option><option value="no" selected="selected">no</option></select></div>';
        responder += '<div class="contenidoCapaSuperior">codigo de barras <input type="text" name="txtCodigoBarras" id="txtCodigoBarras" style="width: 120px;" /></div>';
        responder += '<div class="contenidoCapaSuperior">iva <input type="text" name="txtIva" id="txtIva" style="width: 35px;" /></div>';
        
        responder += '<center style="clear: both;"><input type="button" name="btnInsertarArticulo" id="btnInsertarArticulo" value="INSERTAR" class="stlBoton" onclick="sendInsertarArticulo();" /></center></form>';
        
        $('contenidoSuperior').innerHTML = responder;
    });
    
    
    changeSubfamilia = function(e){
        id = e.value;
        
        listaSubFamilias = $('hddSubFamilias').value;
        listaSubFamilias = listaSubFamilias.split('##');
        
        responder = '';
        if(id != ''){
            responder += '<select id="slcSubFamilia" name="slcSubFamilia">';
            
            for(i=0;i<listaSubFamilias.length;i++){
                subfamiliaId = listaSubFamilias[i].split('@');
                subfamiliaCod = subfamiliaId[1].split('--');
                subfamiliaId = subfamiliaId[0];
                
                if(id == subfamiliaId) responder += '<option value="'+ subfamiliaCod[0] +'">'+ subfamiliaCod[1] +'</option>';
            }
            
            responder += '</select>';
            
        }
        else{
            responder += '<select id="slcSubFamilia" name="slcSubFamilia">';
            
            responder += '<option value="">---seleccione una familia---</option>';
            
            responder += '</select>';
        }
        
        $('contenidoSubfamilia').innerHTML = responder;
    }
    
    
    sendInsertarArticulo = function(){
        proveedor       = $('slcProveedor').value;
        pvpProveedor    = $('txtPrecioProveedor').value;
        
        familia         = $('slcFamilia').value;
        subfamilia      = $('slcSubFamilia').value;
        descripcion     = $('txtDescripcion').value;
        detalles        = $('txtDetalles').value;
        pvp             = $('txtPrecioTienda').value;
        stock           = $('txtStock').value;
        bajoMinimo      = $('txtBajoMinimo').value;
        web             = $('slcWeb').value;
        oferta          = $('slcOferta').value;
        codBarras       = $('txtCodigoBarras').value;
        iva             = $('txtIva').value;
        
        if(proveedor != '' && 
           pvpProveedor != '' && 
           familia != '' && 
           subfamilia != '' && 
           descripcion != '' && 
           detalles != '' && 
           pvp != '' && 
           stock != '' && 
           bajoMinimo != '' && 
           web != '' && 
           oferta != '' && 
           codBarras != '' && 
           iva != ''){
            $('frmAddArticulo').submit();
        }
        else
            return false;
    }
    
    
    btnMostrar = function(codigo) {
        $('capaTransparente').setStyle('display', 'block');
        $('contenidoSuperior').setStyle('display', 'block');
        $('cerrarContenidoSuperior').setStyle('display', 'block');
        
        
        
        
        
        
        responder =  '<div class="tituloCapaSuperior">MOSTRAR ARTICULO</div>';


        responder += '<div class="contenidoCapaSuperior">familia <input type="text" name="txtFamilia" id="txtFamilia" style="width: 240px;" /></div>';
        responder += '<div class="contenidoCapaSuperior">subfamilia <input type="text" name="txtSubFamilia" id="txtSubFamilia" style="width: 240px;" /></div>';
        responder += '<div class="contenidoCapaSuperior">descripcion <input type="text" name="txtDescripcion" id="txtDescripcion" style="width: 240px;" /></div>';
        responder += '<div class="contenidoCapaSuperior">detalles <input type="text" name="txtDetalles" id="txtDetalles" style="width: 240px;" /></div>';
        responder += '<div class="contenidoCapaSuperior">precio en tienda <input type="text" name="txtPrecioTienda" id="txtPrecioTienda" style="width: 50px;" /></div>';
        responder += '<div class="contenidoCapaSuperior">stock <input type="text" name="txtStock" id="txtStock" style="width: 50px;" /></div>';
        responder += '<div class="contenidoCapaSuperior">bajo minimo <input type="text" name="txtBajoMinimo" id="txtBajoMinimo" style="width: 50px;" /></div>';
        responder += '<div class="contenidoCapaSuperior">mostrar en web <select id="slcWeb" name="slcWeb"><option value="si">si</option><option value="no" selected="selected">no</option></select></div>';
        responder += '<div class="contenidoCapaSuperior">oferta <select id="slcOferta" name="slcOferta"><option value="si">si</option><option value="no" selected="selected">no</option></select></div>';
        responder += '<div class="contenidoCapaSuperior">codigo de barras <input type="text" name="txtCodigoBarras" id="txtCodigoBarras" style="width: 120px;" /></div>';
        responder += '<div class="contenidoCapaSuperior">iva <input type="text" name="txtIva" id="txtIva" style="width: 35px;" /></div>';
        
        
        $('contenidoSuperior').innerHTML = responder;
    }
    
});