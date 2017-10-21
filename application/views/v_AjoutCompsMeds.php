<html>
    <head>
        <title>Medicament</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
               <!-- Latest compiled and minified CSS -->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
            <!-- Optional theme -->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
            <!-- Latest compiled and minified JavaScript -->
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css" />
         
        <script type="text/javascript" src="<?php echo base_url(); ?>Jquery/jquery-3.1.1.js"></script>
         <script type="text/javascript" src="  <?php echo base_url(); ?>js/functions.js"></script>
         <script type="text/javascript">
         $(
                  function(){
 
                      $('#idMeds').click(
                              function(){
                                 $('.bg-info').show();
                                      
                              });
   
             } );
        </script>
    </head>
        <body>

<!--        <header class="bg-primary text-white" style=" margin-bottom: 30px; background-color: #007AFF;">
            <div class="container text-center">
              <h1>GSB</h1>
              <h1>Liste composants d'un medicament</h1>
            </div>
        </header>-->
    <div class="container">
        <h2>Ajouter les composants d'un medicament</h2>
        <hr>
            <h3>Choisissez un medicament</h3>
        
            <select class="form-control" id='idMeds'>
                <?php 
                    foreach ($lesMedicaments as $meds){
                        echo "<option value='".$meds->MED_DEPOTLEGAL."'>".$meds->MED_NOMCOMMERCIAL."</option>";
                    }
                ?>

            </select>
            <br>
            <div id='idComps' class="bg-info">
                <h3>Choisissez les composants</h3>
                <div class="checkbox">
  
                <?php 
                        foreach ($lesComposants as $comps){
                         echo "<label>";
                         echo  "<input  type='checkbox'  name='composants[]' value='".$comps->CMP_CODE."'>".$comps->CMP_LIBELLE;
                         echo "</label><br>";
                        }
                    ?>
                </div>
            </div>
         
            <input id="RevPA" data-toggle="tooltip" data-placement="top" style="margin-top: 20px;" title="Acceuil"  class=" divImp btn btn-info" type="button" onClick="location.href='<?php echo base_url(); ?>'" value="Revenir à la page d'accueil"> 
    </div>
            
<!--             <footer class="footer-basic-centered">

			<p class="footer-company-motto">By Ivan Naluzhnyi</p>

			<p class="footer-links">
				<a href="#">Home</a>
				·
				<a href="#">Blog</a>
				·
				<a href="#">Pricing</a>
				·
				<a href="#">About</a>
				·
				<a href="#">Faq</a>
				·
				<a href="#">Contact</a>
			</p>
                        <br>
			<p class="footer-company-name">PPE3 &copy; 2017</p>

		</footer>-->
    </body>
</html>
