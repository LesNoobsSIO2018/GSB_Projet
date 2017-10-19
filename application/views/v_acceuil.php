<html><!--code d'Ivan-->
    <head>
        <title>Menu</title>
        <meta charset="UTF-8">
         <script type="text/javascript" src="<?php echo base_url(); ?>js/lesFonctions.js"></script>
        <!-- Latest compiled and minified CSS -->
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
                <!-- Optional theme -->
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
                <!-- Latest compiled and minified JavaScript -->
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css" />
       
        <script type="text/javascript" src="<?php echo base_url(); ?>Jquery/jquery-3.1.1.js"></script>
        <script type="text/javascript">
           $(
                  function(){
                    
             }
            );
        </script>
        
        <script type="text/javascript">
		
		function btnFunIncerer() {
   				 document.getElementById("divIncComp").innerHTML = "<a class='btn btn-warning' href='index.php/Ctrl_Composant_Ivan/ajouterComposant' >Inserer";
   				 document.getElementById("divModComp").innerHTML = "<a class='btn btn-warning' href='index.php/Ctrl_Composant_Ivan/*' >Modifier";
   				 document.getElementById("divListComp").innerHTML = "<a class='btn btn-warning' href='index.php/Ctrl_Composant_Ivan/AfficherPageList' >Listes";
		}

		function btnComposant_dun_medicament(){
					 document.getElementById("divIncCM").innerHTML = "<a class='btn btn-warning' href='index.php/Ctrl_Composant_Ivan/*' >Inserer";
   					 document.getElementById("divModCM").innerHTML = "<a class='btn btn-warning' href='index.php/Ctrl_Composant_Ivan/*' >Modifier";
   					 document.getElementById("divListCM").innerHTML = "<a class='btn btn-warning' href='index.php/Ctrl_Composant_Ivan/afficherMedicaments' >Listes";

		}
		function btnFormationMed(){
					 document.getElementById("divIncFM").innerHTML = "<a class='btn btn-warning' href='index.php/Ctrl_Composant_Ivan/*' >Inserer";

		}
</script>

    </head>
    <body>
      <div class="container"> 
        <h1>Gestion des composants et des présentations de médicaments</h1>
        
              <div class="row">
			<div class="col-xs-6 col-sm-4">

				<input data-toggle="tooltip" data-placement="top" title="Afficher les actions" class="btn btn-success" type="button" value="Composant" onclick="btnFunIncerer()">

				<div>
				<br>
					<p id="divIncComp"></p>
				</div>
				<div>
					<p id="divModComp"></p>
				</div>
				<div>
					<p id="divListComp"></p>
				</div>
			</div>
		  <div class="col-xs-6 col-sm-4">
		  		<input data-toggle="tooltip" data-placement="top" title="Afficher les actions" class="btn btn-success" type="button" value="Des composant d'un medicament" onclick="btnComposant_dun_medicament()">
		  		<div >
		  			<br>
		  			<p id="divIncCM"></p>
		  		</div>
				<div>
					<p id="divModCM"></p>
				</div>
				<div >
					<p id="divListCM"></p>
				</div>
		  </div>
		  <!-- Optional: clear the XS cols if their content doesn't match in height -->
		  <div class="col-xs-6 col-sm-4">
		  		<input data-toggle="tooltip" data-placement="top" title="Afficher les actions" class="btn btn-success" type="button" value="Formulation d'un medicament" onclick="btnFormationMed()">
		  		<div>
		  			<br>
		  			<p id="divIncFM"></p>
		  		</div>
				
			</div>
                
             </div>
      </div> 
    </body>
</html><!--code d'Ivan-->
