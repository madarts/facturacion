<input type="hidden" id="control" value="login" />

<a href="./"><img src="img/logo.png" id="logo" /></a>

<center>
    <div id="registro" align="left">
        <div id="top">INTRODUZCA SU NOMBRE DE USUARIO</div>
        <form name="frmLogin" method="post" action="./?login=ok">
            <div class="opcionesRegistro">
                Usuario <input type="text" name="txtUsuario" id="txtUsuario" value="" />
            </div>
            <div class="opcionesRegistro">
                Password <input type="password" name="txtPassword" id="txtPassword" value="" />
            </div>
            
            <div style="clear: both;"></div>
            
            <center><input type="submit" name="btnLogin" id="btnLogin" class="stlBoton" value="ENTRAR" /></center>
        </form>
    </div>
</center>