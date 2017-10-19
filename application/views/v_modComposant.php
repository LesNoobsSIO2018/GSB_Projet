<html>
    <head>
        <title>Incert</title>
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
                      $('#RevPA').click(
                              function(){
                                AfficherPageA();   
                        });
             } );
        </script>
    </head>
    <body>
        <h1> Modifier un  composant</h1>
            <?php
            echo form_open('Ctrl_Composant_Ivan/mod_composant/');
            if(isset($unComposant)){
                foreach ($listeComposant as $lst){
            ?>
            
            <table class="table">
                <tr>
                    <th>
                        <h2  class="clth"> Code du composant : <?php  echo form_input('CMP_CODE',set_value($lst->CMP_CODE)); ?> </h2><spam><?php echo form_error("CMP_CODE"); ?></span>
                    </th> 
                </tr>

                <tr>
                    <th >
                        <h2 class="clth">Libelle du composant : <?php  echo form_input('CMP_LIBELLE',set_value($lst->CMP_LIBELLE)); ?></h2><span><?php echo form_error("CMP_LIBELLE"); ?>
                    </th>
                </tr>

            </table>
              <input type="hidden" value="<?php echo $lst->CMP_CODE; ?>">
              <p id='btnSubmit'> <?php echo form_submit('btnModifier','Modifier');?></p>
       
             <?php       
                }
            }
           
            echo form_close();
        ?>
          
             
             
        
           <!-- <input id="btnIncCom" name="incert" data-toggle="tooltip" data-placement="top" title="Afficher les actions"  class=" divImp btn btn-success" type="submit" value="Sauvgarder">--><br><br>
            <br />
         <input id="RevPA" data-toggle="tooltip" data-placement="top" title="Afficher les actions"  class=" divImp btn btn-info" type="button" value="Revenir à la page d'accueil"> 
    </body>
    </form>
</html> <!--code d'Ivan-->

