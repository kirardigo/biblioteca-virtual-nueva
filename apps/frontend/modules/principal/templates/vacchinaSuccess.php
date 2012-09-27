<script language="javascript" type="text/javascript">
    function MakeStaticHeader(gridId, height, width, headerHeight, isFooter) {
        var tbl = document.getElementById(gridId);
        if (tbl) {
        var DivHR = document.getElementById('DivHeaderRow');
        var DivMC = document.getElementById('DivMainContent');
        var DivFR = document.getElementById('DivFooterRow');

        //*** Set divheaderRow Properties ****
        DivHR.style.height = headerHeight + 'px';
        DivHR.style.width = (parseInt(width) - 16) + 'px';
        DivHR.style.position = 'relative';
        DivHR.style.top = '0px';
        DivHR.style.zIndex = '10';
        DivHR.style.verticalAlign = 'top';

        //*** Set divMainContent Properties ****
        DivMC.style.width = width + 'px';
        DivMC.style.height = height + 'px';
        DivMC.style.position = 'relative';
        DivMC.style.top = -headerHeight + 'px';
        DivMC.style.zIndex = '1';

        //*** Set divFooterRow Properties ****
        DivFR.style.width = (parseInt(width) - 16) + 'px';
        DivFR.style.position = 'relative';
        DivFR.style.top = -headerHeight + 'px';
        DivFR.style.verticalAlign = 'top';
        DivFR.style.paddingtop = '2px';

        if (isFooter) {
         var tblfr = tbl.cloneNode(true);
      tblfr.removeChild(tblfr.getElementsByTagName('tbody')[0]);
         var tblBody = document.createElement('tbody');
         tblfr.style.width = '100%';
         tblfr.cellSpacing = "0";
         //*****In the case of Footer Row *******
         tblBody.appendChild(tbl.rows[tbl.rows.length - 1]);
         tblfr.appendChild(tblBody);
         DivFR.appendChild(tblfr);
         }
        //****Copy Header in divHeaderRow****
        DivHR.appendChild(tbl.cloneNode(true));
     }
    }


    function OnScrollDiv(Scrollablediv) {
    document.getElementById('DivHeaderRow').scrollLeft = Scrollablediv.scrollLeft;
    document.getElementById('DivFooterRow').scrollLeft = Scrollablediv.scrollLeft;
    }
    
    window.onload = function() {
MakeStaticHeader('tablita', 710, 395, 45, false)
}
    </script>



<style type="text/css">
table.tableizer-table {border: 1px solid #CCC; font-family: Arial, Helvetica, sans-serif; font-size: 12px;} .tableizer-table td {padding: 4px; margin: 3px; border: 1px solid #ccc;}
.tableizer-table th {background-color: #2D3135; color: #FFF; font-weight: bold;}
</style>


     
        <div id="DivRoot" align="left" class="span5">
            <div style="overflow: hidden;" id="DivHeaderRow">
            </div>

            <div style="overflow:scroll;" onscroll="OnScrollDiv(this)" id="DivMainContent">
                <!--Place Your Table Heare-->

        <table class="tableizer-table" id="tablita">
        <tr class="tableizer-firstrow"><th> TITULO</th><th>AUTOR</th><th> EDITORIAL</th><th>TEMA/ UBICACIÓN</th></tr> <tr><td>Arquitectura de computadoras</td><td>Quiroga, Patricia</td><td>Alfaomega</td><td>Computacion</td></tr> <tr><td>Calculo de una variable</td><td>Stewart, James</td><td>Cengage Learning</td><td>Computacion</td></tr> <tr><td>El calculo</td><td>Leithold, Louis</td><td>&nbsp;</td><td>Computacion</td></tr> <tr><td>Enfermeria Medico Quirurgica</td><td>Swearingen, Pamela L.</td><td>Elsevier Mosby</td><td>Enfermeria</td></tr> <tr><td>Diccionario Mosby pocket de medicina …</td><td>Elsevier</td><td>Elsevier</td><td>Diccionarios</td></tr> <tr><td>Diagnostico Enfermero</td><td>Gordon, Marjory</td><td>Mosby Dayma libros</td><td>Enfermeria</td></tr> <tr><td>Informacion Tecnology</td><td>Demetriades Dinos</td><td>Oxford</td><td>Computacion</td></tr> <tr><td>Investigacion cualitativa en enfermeria</td><td>Doprado, Martha (y otros)</td><td>OMS</td><td>Enfermeria</td></tr> <tr><td>Tecnica Dietoterapica</td><td>Longo, Elsa y Navarro, Elizabeth</td><td>El Ateneo</td><td>Enfermeria</td></tr> <tr><td>Manual de etica y legislacion en enfermeria</td><td>Pastor Garcia, Luis y Leon Carrera, F.</td><td>Mosby </td><td>Enfermeria</td></tr> <tr><td>Vademecuon de medicamentos de uso en Arg.</td><td>Editorial Clyna S.A</td><td>Clyna</td><td>Enfermeria</td></tr> <tr><td>Algebra 1</td><td>Rojo, Armando</td><td>Magister eos</td><td>Enfermeria</td></tr> <tr><td>Comunicaciones y redes de computadores</td><td>Stalling, William</td><td>Pearson Prentice</td><td>Computacion</td></tr> <tr><td>The Merrian Webster Dictionary</td><td>Merrian Webster</td><td>Merrian Webster</td><td>Diccionarios</td></tr> <tr><td>Diccionario Enciclopedico de enfermeria</td><td>Miller, Keane</td><td>Panamericana</td><td>Diccionarios</td></tr> <tr><td>Diccionario de la lengua española T1</td><td>REAL ACADEMIA ESPAÑOLA</td><td>RAE</td><td>Diccionarios</td></tr> <tr><td>Diccionario de la lengua española T2</td><td>REAL ACADEMIA ESPAÑOLA</td><td>RAE</td><td>Diccionarios</td></tr> <tr><td>Diccionario de informatica telecomunicaciones y …</td><td>Leon, Mario</td><td>Diaz de Santos S.A</td><td>Diccionarios</td></tr> <tr><td>Modelos de sicologia comunitaria para la …</td><td>Balcazar, Fabricio (y otros)</td><td>OPS/OMS</td><td>Enfermeria</td></tr> <tr><td>Diagostico Enfermero</td><td>Elsevier</td><td>Elsevier </td><td>Enfermeria</td></tr> <tr><td>Aplicación del proceso enfermero</td><td>Lefevre, Rosalinda Alfaro</td><td>Elsevier</td><td>Enfermeria</td></tr> <tr><td>Problemas musculo- esqueleticos</td><td>Masson</td><td>Masson</td><td>Enfermeria</td></tr> <tr><td>Problemas metabolicos</td><td>Masson</td><td>Masson</td><td>Enfermeria</td></tr> <tr><td>Proceso de enfermeria y diagnostico de enfermeria</td><td>Iyer, Patricia  W. (y otros)</td><td>Mc Graw - Hill</td><td>Enfermeria</td></tr> <tr><td>Planificiacion estrategica de recursos humanos en …</td><td>Rovare, Mario R.</td><td>OMS</td><td>Enfermeria</td></tr> <tr><td>Lo esencial en sistema nervioso y sentidos …</td><td>Lasserson, Daniel (y otros)</td><td>Mosby</td><td>Enfermeria</td></tr> <tr><td>Lo esencial en aparato digestivo</td><td>Cheshire, Elizabeth</td><td>Mosby</td><td>Enfermeria</td></tr> <tr><td>Manejo integral de urgencias</td><td>MalaGon Londoño, Gustavo ( y colabs)</td><td>Panamericana</td><td>Enfermeria</td></tr> <tr><td>Sistemas opertativos</td><td>Tanembaum, A y Woodhull, A</td><td>Prentice Hall</td><td>Computacion</td></tr> <tr><td>Electronica digital: Logica </td><td>Acha, Santiago  (y otros)</td><td>Alfaomega</td><td>Computacion</td></tr> <tr><td>Diseño y evaluacion de arquitecturas de …</td><td>Beltran Pardo, M. y Guzman Sacristan, A.</td><td>Pearson </td><td>Computacion</td></tr> <tr><td>Electronica digital facil</td><td>Ruiz Vasallo, francisco</td><td>Alfaomega</td><td>Computacion</td></tr> <tr><td>Calculo 1 de una variable</td><td>Larson, Ron y Edwards, Bruce</td><td>Mc Graw - Hill</td><td>Computacion</td></tr> <tr><td>Tecnico en emergencias sanitarias</td><td>Chapleu, Will (y otros)</td><td>Mosby Jems</td><td>Enfermeria</td></tr> <tr><td>Enfermeria gerontologica </td><td>Tablosky, Patricia A.</td><td>Pearson</td><td>Enfermeria</td></tr> <tr><td>Atencion primaria vol. 1</td><td>Zurro, Martin A.</td><td>Elsevier</td><td>Enfermeria</td></tr> <tr><td>Atencion primaria vol. 2</td><td>Zurro, Martin A.</td><td>Elsevier</td><td>Enfermeria</td></tr> <tr><td>Farmacologia para enfermeria</td><td>Adam, Michael y Holland, Norman</td><td>Pearson</td><td>Enfermeria</td></tr> <tr><td>Fundamentos de enfermeria vol 1</td><td>Berman, Audrey (y otros)</td><td>Pearson</td><td>Enfermeria</td></tr> <tr><td>Fundamentos de enfermeria vol 2</td><td>Berman, Audrey (y otros)</td><td>Pearson</td><td>Enfermeria</td></tr> <tr><td>Algebra 1</td><td>Rojo, Armando</td><td>Magister eos</td><td>Computacion</td></tr> <tr><td>Enfermeria medico quirurgica 1</td><td>Long, Barbara C (y otros )</td><td>Harcout</td><td>Enfermeria</td></tr> <tr><td>Enfermeria medico quirurgica 2</td><td>Long, Barbara C (y otros )</td><td>Harcout</td><td>Enfermeria</td></tr> <tr><td>Fundamentos de enfermeria vol 1</td><td>Potter, Patricia y Griffin, Perry</td><td>Elsevier</td><td>Enfermeria</td></tr> <tr><td>Fundamentos de enfermeria vol 2</td><td>Potter, Patricia y Griffin, Perry</td><td>Elsevier</td><td>Enfermeria</td></tr> <tr><td>Obras completas y correspondencia cientifica …</td><td>Fundacion Ameghino</td><td>FA</td><td>DVD</td></tr> <tr><td>Obras completas y correspondencia cientifica …</td><td>Fundacion Ameghino</td><td>FA</td><td>DVD</td></tr> <tr><td>Asistencia de enfermeria materno - neonatal</td><td>Towle, Mary Ann</td><td>Pearson</td><td>Enfermeria</td></tr> <tr><td>Tecnicas de enfermeria clinica. Vol 1</td><td>Smith, Sandra (y otros)</td><td>Pearson</td><td>Enfermeria</td></tr> <tr><td>Tecnicas de enfermeria clinica. Vol 2</td><td>Smith, Sandra (y otros)</td><td>Pearson</td><td>Enfermeria</td></tr></table>

            </div>

            <div id="DivFooterRow" style="overflow:hidden">
            </div>

        </div>

    


            <div align="right">
                <img src="<?php echo image_path('bibliotek.jpg')?>" alt="Fondo" width="520px"></img>
            </div>
