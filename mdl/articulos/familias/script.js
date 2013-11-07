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
        
        responder =  '<form id="frmAddFamilia" onsubmit="return sendInsertarFamilia();"  method="POST" action="./?menu=articulos&opcion=familias&addFamilia=ok"><div class="tituloCapaSuperior">INSERTAR FAMILIA</div>';
        responder += '<div class="contenidoCapaSuperior">familia <input type="text" name="txtInsertarFamilia" id="txtInsertarFamilia" style="width: 230px;" /></div>';
        responder += '<div class="contenidoCapaSuperior">mostrar en web <select id="slcInsertarWeb" name="slcInsertarWeb"><option value="si">si</option><option value="no">no</option></select></div>';
        
        responder += '<center style="clear: both;"><input type="button" name="btnInsertarFamilia" id="btnInsertarFamilia" value="INSERTAR" class="stlBoton" onclick="sendInsertarFamilia();" /></center></form>';
        
        $('contenidoSuperior').innerHTML = responder;
        
        $('txtInsertarFamilia').focus();
    });
    
    
    insertarSubFamilia = function(codigo){
        $('capaTransparente').setStyle('display', 'block');
        $('contenidoSuperior').setStyle('display', 'block');
        $('cerrarContenidoSuperior').setStyle('display', 'block');
        
        responder  = '<div class="tituloCapaSuperior">INSERTAR SUBFAMILIA</div>';
        
        responder += '<form id="frmAddSubFamilia" onsubmit="return sendInsertarSubFamilia();"  method="POST" action="./?menu=articulos&opcion=familias&addSubFamilia=ok">';
        
        responder += '<input type="hidden" name="hddIdFamilia" id="hddIdFamilia" value="'+ codigo +'">';
        
        responder += '<div class="contenidoCapaSuperior">subfamilia <input type="text" name="txtInsertarSubfamilia" id="txtInsertarSubfamilia" style="width: 230px;" /></div>';
        responder += '<div class="contenidoCapaSuperior">mostrar en web <select id="slcInsertarWeb" name="slcInsertarWeb"><option value="si">si</option><option value="no">no</option></select></div>';
        responder += '<div class="contenidoCapaSuperior">beneficios <input type="text" name="txtInsertarBeneficios" id="txtInsertarBeneficios" style="width: 100px;" /></div>';
        
        responder += '<center style="clear: both;"><input type="button" name="btnInsertarSubfamilia" id="btnInsertarSubfamilia" value="INSERTAR" class="stlBoton" onclick="sendInsertarSubFamilia();" /></center></form>';
        
        $('contenidoSuperior').innerHTML = responder
    }
    
    
    modificarFamilia = function(codigo, familia, web){
        $('capaTransparente').setStyle('display', 'block');
        $('contenidoSuperior').setStyle('display', 'block');
        $('cerrarContenidoSuperior').setStyle('display', 'block');
        
        responder =  '<div class="tituloCapaSuperior">MODIFICAR FAMILIA</div>';
        
        responder += '<form id="frmModFamilia" onsubmit="return sendModificarFamilia();"  method="POST" action="./?menu=articulos&opcion=familias&modificarFamilia=ok">';
        
        responder += '<input type="hidden" name="hddIdFamilia" id="hddIdFamilia" value="'+ codigo +'">';
        
        responder += '<div class="contenidoCapaSuperior">familia <input type="text" name="txtModificarFamilia" id="txtModificarFamilia" style="width: 230px;" value="'+ familia +'" /></div>';
        responder += '<div class="contenidoCapaSuperior">mostrar en web <select id="slcModificarWeb" name="slcModificarWeb">';
        web == 'si' ? responder += '<option value="si" selected="selected">si</option>' : responder += '<option value="si">si</option>';
        web == 'no' ? responder += '<option value="no" selected="selected">no</option>' : responder += '<option value="no">no</option>';
        responder += '</select></div>';
        
        responder += '<center style="clear: both;"><input type="button" name="btnMoficiarSubfamilia" id="btnMoficiarSubfamilia" value="MODIFICAR" class="stlBoton" onclick="sendModificarFamilia();" /></center></form>';
        
        $('contenidoSuperior').innerHTML = responder
    }
    
    
    modificarSubFamilia = function(codigo, subfamilia, web, beneficios){
        $('capaTransparente').setStyle('display', 'block');
        $('contenidoSuperior').setStyle('display', 'block');
        $('cerrarContenidoSuperior').setStyle('display', 'block');
        
        responder =  '<div class="tituloCapaSuperior">MODIFICAR SUBFAMILIA</div>';
       
        responder += '<form id="frmModSubFamilia" onsubmit="return sendModificarSubFamilia();"  method="POST" action="./?menu=articulos&opcion=familias&modificarSubFamilia=ok">';
        
        responder += '<input type="hidden" name="hddIdSubFamilia" id="hddIdSubFamilia" value="'+ codigo +'">';
        
        responder += '<div class="contenidoCapaSuperior">subfamilia <input type="text" name="txtModificarSubfamilia" id="txtModificarSubfamilia" style="width: 230px;" value="'+ subfamilia +'"/></div>';
        responder += '<div class="contenidoCapaSuperior">mostrar en web <select id="slcModificarWeb" name="slcModificarWeb">';
        web == 'si' ? responder += '<option value="si" selected="selected">si</option>' : responder += '<option value="si">si</option>';
        web == 'no' ? responder += '<option value="no" selected="selected">no</option>' : responder += '<option value="no">no</option>';
        responder += '</select></div>';
        responder += '<div class="contenidoCapaSuperior">beneficios <input type="text" name="txtModificarBeneficios" id="txtModificarBeneficios" style="width: 100px;" value="'+ beneficios +'" /></div>';
        
        responder += '<center style="clear: both;"><input type="button" name="btnModificarSubfamilia" id="btnModificarSubfamilia" value="MODIFICAR" class="stlBoton" onclick="sendModificarSubFamilia();" /></center></form>';
        
        $('contenidoSuperior').innerHTML = responder
    }
    
    
    confirmarBorradoFamilia = function(codigo){
        $('capaTransparente').setStyle('display', 'block');
        $('contenidoSuperior').setStyle('display', 'block');
        $('cerrarContenidoSuperior').setStyle('display', 'block');
        
        responder =  '<div class="tituloCapaSuperior">¿DESEA BORRAR LA FAMILIA SELECCIONADA?</div>';
        
        responder += '<form name="frmDeleteFamilia" id="frmDeleteFamilia" method="POST" action="./?menu=articulos&opcion=familias&borrarFamilia=ok">';
        responder += '<input type="hidden" name="hddIdDeleteFamilia" id="hddIdDeleteFamilia" value="'+ codigo +'" />';
        
        responder += '<center><span class="btnAcept"><input type="submit" name="btnAceptarBorrarFamilia" id="btnAceptarBorrarFamilia" value="BORRAR" class="stlBoton" /></span> <span class="btnCancel"><input type="button" name="btnCancelarBorrarFamilia" id="btnCancelarBorrarFamilia" value="CANCELAR" class="stlBoton" onclick="cerrarSuperior();" /></span></center></from>';
        
        $('contenidoSuperior').innerHTML = responder
    }
    
    
    confirmarBorradoSubFamilia = function(codigo){
        $('capaTransparente').setStyle('display', 'block');
        $('contenidoSuperior').setStyle('display', 'block');
        $('cerrarContenidoSuperior').setStyle('display', 'block');
        
        responder =  '<div class="tituloCapaSuperior">¿DESEA BORRAR LA SUBFAMILIA SELECCIONADA?</div>';
        
        responder += '<form name="frmDeleteSubFamilia" id="frmDeleteSubFamilia" method="POST" action="./?menu=articulos&opcion=familias&borrarSubFamilia=ok">';
        responder += '<input type="hidden" name="hddIdDeleteSubFamilia" id="hddIdDeleteSubFamilia" value="'+ codigo +'" />';
        
        responder += '<center><span class="btnAcept"><input type="submit" name="btnAceptarBorrarSubfamilia" id="btnAceptarBorrarSubfamilia" value="BORRAR" class="stlBoton" /></span> <span class="btnCancel"><input type="button" name="btnCancelarBorrarSubfamilia" id="btnCancelarBorrarSubfamilia" value="CANCELAR" class="stlBoton" onclick="cerrarSuperior();" /></span></center>';
        
        $('contenidoSuperior').innerHTML = responder
    }
    
    
    
    
    
    
    
    
    
    
    sendInsertarFamilia = function(codigo){
        familia     = $('txtInsertarFamilia').value;
        web         = $('slcInsertarWeb').value;
        
        if(familia != '' && web != ''){
            $('frmAddFamilia').submit();
        }
        else
            return false;
    }
    
    sendInsertarSubFamilia = function(codigo){
        subfamilia  = $('txtInsertarSubfamilia').value;
        web         = $('slcInsertarWeb').value;
        beneficio   = $('txtInsertarBeneficios').value;
        
        if(subfamilia != '' && web != '' && beneficio != ''){
            $('frmAddSubFamilia').submit();
        }
        else
            return false;
    }
    
    sendModificarFamilia = function(codigo){
        familia     = $('txtModificarFamilia').value;
        web         = $('slcModificarWeb').value;
        
        if(familia != '' && web != ''){
            $('frmModFamilia').submit();
        }
        else
            return false;
    }
    
    sendModificarSubFamilia = function(codigo){
        familia     = $('txtModificarSubfamilia').value;
        web         = $('slcModificarWeb').value;
        beneficios  = $('txtModificarBeneficios').value;
        
        if(familia != '' && web != ''){
            $('frmModSubFamilia').submit();
        }
        else
            return false;
    }
});