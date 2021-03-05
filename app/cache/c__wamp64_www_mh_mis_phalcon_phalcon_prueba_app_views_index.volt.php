<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>phalcon_prueba</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">


        <!-- estilos -->
        <!-- <link rel="stylesheet" type="text/css" href="css/estilos_final.css"> -->
        <!-- Tipografia -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
        <!-- favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
        <!-- fontawesome -->
        

        <!--ESTILOS DE PLANTILLA-->
        <?php echo $this->tag->stylesheetLink('css/bootstrap.css'); ?>
        <?php echo $this->tag->stylesheetLink('css/bootstrap.css.map'); ?>
        <?php echo $this->tag->stylesheetLink('css/bootstrap-table.css'); ?>
        <?php echo $this->tag->stylesheetLink('css/bootstrap-theme.css'); ?>
        <?php echo $this->tag->stylesheetLink('css/bootstrap-theme.css.map'); ?>
        <?php echo $this->tag->stylesheetLink('css/bootstrap-theme.min.css'); ?>
        <?php echo $this->tag->stylesheetLink('css/estilos.css'); ?>
        <!-- <?php echo $this->tag->stylesheetLink('css/styles.css'); ?> -->
        <?php echo $this->tag->stylesheetLink('css/simple-sidebar.css'); ?>
        <!-- <?php echo $this->tag->stylesheetLink('css/styles.css'); ?> -->
        <?php echo $this->tag->stylesheetLink('css/simple-sidebar.css'); ?>
        <?php echo $this->tag->stylesheetLink('css/estilos_final.css'); ?>
        <!-- ESTILOS DE GRID -->
        <?php echo $this->tag->stylesheetLink('css/bootstrap.min.css'); ?>
        
        




        <!-- JS jqwidgets -->
        <?php echo $this->tag->javascriptInclude('js/jquery-2.1.4.min.js'); ?>
        <?php echo $this->tag->javascriptInclude('js/jquery-ui.min.js'); ?>
		    <?php echo $this->tag->javascriptInclude('js/jquery.validate.min.js', false); ?>
        <?php echo $this->tag->javascriptInclude('js/jqwidgets/jqxcore.js'); ?>
        <?php echo $this->tag->javascriptInclude('js/jqwidgets/jqxdata.js'); ?>
        <?php echo $this->tag->javascriptInclude('js/jqwidgets/jqxinput.js'); ?>
        <?php echo $this->tag->javascriptInclude('js/jqwidgets/jqxbuttons.js'); ?>
        <?php echo $this->tag->javascriptInclude('js/jqwidgets/jqxscrollbar.js'); ?>
        <?php echo $this->tag->javascriptInclude('js/jqwidgets/jqxmenu.js'); ?>
        <?php echo $this->tag->javascriptInclude('js/jqwidgets/jqxgrid.js'); ?>
        <?php echo $this->tag->javascriptInclude('js/jqwidgets/jqxgrid.selection.js'); ?>
        <?php echo $this->tag->javascriptInclude('js/jqwidgets/jqxgrid.sort.js'); ?>
        <?php echo $this->tag->javascriptInclude('js/jqwidgets/jqxexpander.js'); ?>
        <?php echo $this->tag->javascriptInclude('js/jqwidgets/jqxdragdrop.js'); ?>
        <?php echo $this->tag->javascriptInclude('js/jqwidgets/jqxtabs.js'); ?>
        <?php echo $this->tag->javascriptInclude('js/jqwidgets/jqxtooltip.js'); ?>
        <?php echo $this->tag->javascriptInclude('js/demos.js'); ?>
        <?php echo $this->tag->javascriptInclude('js/generatedata.js'); ?>


        <!-- JS DEL TEMPLATE-->
        <?php echo $this->tag->javascriptInclude('js/bootstrap.min.js'); ?>
        <?php echo $this->tag->javascriptInclude('js/bootstrap.js'); ?>
        <!-- mensajes de alert personalizados -->
        <?php echo $this->tag->javascriptInclude('js/bootbox.min.js'); ?>
        <!-- OPERACIONES js BASICAS -->
        <?php echo $this->tag->javascriptInclude('js/operacionesbasicas-01v.js'); ?>
    	<!-- VAriables globales -->
    	<?php echo $this->tag->javascriptInclude('js/globales.js'); ?>
    		<!-- VAriables globales -->
    		<?php echo $this->tag->javascriptInclude('js/globales.js'); ?>


        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
        <?php echo $this->tag->javascriptInclude('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js', false); ?>
        <?php echo $this->tag->stylesheetLink('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css', false); ?>
          <!-- <?php echo $this->tag->stylesheetLink('css/fields.css'); ?> -->
        <script>
        	$(document).ready(function(){
        		var date_input=$(".date_input"); //our date input has the name "date"
        		var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
        		date_input.datepicker({
        			format: 'yyyy-mm-dd',
        			container: container,
        			todayHighlight: true,
        			autoclose: true
        		});
        	});
        </script>

        <?php echo $this->tag->javascriptInclude('js/jqwidgets/jqxloader.js'); ?>
        <?php echo $this->tag->javascriptInclude('js/jqwidgets/jqxcore.js'); ?>
        <?php echo $this->tag->javascriptInclude('js/jqwidgets/jqxdata.js'); ?>
        <?php echo $this->tag->javascriptInclude('js/jqwidgets/jqxbuttons.js'); ?>
        <?php echo $this->tag->javascriptInclude('js/jqwidgets/jqxscrollbar.js'); ?>
        <?php echo $this->tag->javascriptInclude('js/jqwidgets/jqxmenu.js'); ?>
        <?php echo $this->tag->javascriptInclude('js/jqwidgets/jqxcalendar.js'); ?>
        <?php echo $this->tag->javascriptInclude('js/jqwidgets/jqxdatetimeinput.js'); ?>
        <?php echo $this->tag->javascriptInclude('js/jqwidgets/jqxgrid.js'); ?>
        <?php echo $this->tag->javascriptInclude('js/jqwidgets/jqxgrid.selection.js'); ?>
        <?php echo $this->tag->javascriptInclude('js/jqwidgets/jqxgrid.sort.js'); ?>
        <?php echo $this->tag->javascriptInclude('js/jqwidgets/jqxgrid.filter.js'); ?>
        <?php echo $this->tag->javascriptInclude('js/jqwidgets/jqxgrid.grouping.js'); ?>
        <?php echo $this->tag->javascriptInclude('js/jqwidgets/jqxgrid.columnsresize.js'); ?>
        <?php echo $this->tag->javascriptInclude('js/jqwidgets/jqxgrid.edit.js'); ?>
        <?php echo $this->tag->javascriptInclude('js/jqwidgets/jqxgrid.columnsreorder.js'); ?>
        <?php echo $this->tag->javascriptInclude('js/jqwidgets/jqxgrid.pager.js'); ?>
        <?php echo $this->tag->javascriptInclude('js/jqwidgets/jqxexpander.js'); ?>
        <?php echo $this->tag->javascriptInclude('js/jqwidgets/jqxlistbox.js'); ?>
        <?php echo $this->tag->javascriptInclude('js/jqwidgets/jqxcheckbox.js'); ?>
        <?php echo $this->tag->javascriptInclude('js/jqwidgets/jqxcombobox.js'); ?>
        <?php echo $this->tag->javascriptInclude('js/jqwidgets/jqxdropdownlist.js'); ?>
        <?php echo $this->tag->javascriptInclude('js/jqwidgets/jqxdragdrop.js'); ?>
        <?php echo $this->tag->javascriptInclude('js/jqwidgets/jqxtooltip.js'); ?>
        <?php echo $this->tag->javascriptInclude('js/jqwidgets/globalization/globalize.js'); ?>
        <?php echo $this->tag->javascriptInclude('magicsuggest/magicsuggest.js'); ?>
        <?php echo $this->tag->stylesheetLink('magicsuggest/magicsuggest-min.css'); ?>


        <!-- IMPORTADOR NOMINAS -->
        <?php echo $this->tag->javascriptInclude('js/jqwidgets/jqxtabs.js'); ?>
        <?php echo $this->tag->javascriptInclude('js/jqwidgets/jqxpanel.js'); ?>
        <?php echo $this->tag->javascriptInclude('js/jqwidgets/jqxnotification.js'); ?>
        <!-- CALCULO NOMINAS -->
        <?php echo $this->tag->javascriptInclude('js/calculo_nominas/isr.js'); ?>
        <?php echo $this->tag->javascriptInclude('js/calculo_nominas/tradicional.js'); ?>

        <?php echo $this->assets->outputJs(); ?>




    </head>
    <body>
        <!-- No poner en container para que no se centre la aplicación-->
              <?php echo $this->getContent(); ?>
          <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    </body>
</html>
