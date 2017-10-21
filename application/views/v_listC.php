<html>
    <head>
        <title>TODO supply a title</title>
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
          <script type="text/javascript" src="  <?php echo base_url(); ?>js/lesFonctions.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>Jquery/jquery-3.1.1.js"></script>
        <script type="text/javascript">
         $(
                  function(){
//                      
                        $('#btnAfficher').click(
                                function(){
                                    AfficherListComp();
                        });
                        
                        
             } );
        </script>
    </head>
    <body>
        <header class="bg-primary text-white" style="background-color: #007AFF;">
        <div class="container text-center">
          <h1>GSB</h1>
          <h1> Listes des composants</h1>
        </div>
    </header>
        <div class="container">
        
            
<!--            <div class="divImp">
                    <h3 id="colorh3">Afficher : </h3>

                    <input class="rdoList" name="list" id="rd1" type="radio" value=""> Composant 
                    <input  class="rdoList" name="list" id="rd2" type="radio"> Composant d'un medicament  
                    <input class="btn btn-success" id="btnAfficher" type="button" value="Valider">
            </div>
            <div id="ListComposant" style="//display:none">-->

            <table id="table" class="table" >

                <tr class="info">
                    <th class="thLC">
                        Code d'un composant
                    </th>
                    <th class="thLC">
                        Libelle d'un composant 
                    </th>
                    <th class="thLC">
                        Options
                    </th>
                </tr>
                <?php
                foreach($lesComposants as $com){
                  ?>
                <tr>
                    <td class="cLC">
                          <?php echo $com->CMP_CODE; ?>
                    </td>
                    <td class="cLC">
                         <?php echo $com->CMP_LIBELLE; ?>
                    </td>
                    <td>
                        <a class="btn btn-warning" type="button" href="<?php echo base_url();?>index.php/Ctrl_Composant_Ivan/mod_composant/<?php echo $com->CMP_CODE; ?>" >Modifier</a>
                    </td>
                </tr>
             <?php   
            }
            ?>  
            </table>  <br>
            
            <div id="ListComposantDunMed" style="display:none">
                <p>lol</p>
            </div>
            <br>
            <input id="pageIncert" data-toggle="tooltip" data-placement="top" title="Afficher les actions"  class=" divImp btn btn-info" type="button" onClick="location.href='<?php echo base_url(); ?>index.php/Ctrl_Composant_Ivan/ajouterComposant/'" value="Incerer des composants">
          <input id="RevPA" data-toggle="tooltip" data-placement="top" title="Afficher les actions"  class=" divImp btn btn-info" type="button" onClick="location.href='<?php echo base_url(); ?>'" value="Revenir à la page d'accueil"> 
         </div>
        </div>
        
<!--         <footer class="footer-basic-centered">

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
</html><!--code d'Ivan-->
