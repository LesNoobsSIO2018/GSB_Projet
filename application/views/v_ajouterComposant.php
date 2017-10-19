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
        <div class="container">
        <h1>Incerer des composants</h1>
            <?php
            echo form_open('Ctrl_Composant_Ivan/form_composant');
            if(isset($unComposant)){
                //foreach ($unComposant as $lst){
                 //   print_r($unComposant);
            ?>
            <div class="row">
                    <table class="table">
                        <tr>
                            <th>
                                <h2  class="clth"> Code du composant  <input name="CMP_CODE" class="form-control" id="disabledInput" type="text"  value="<?php echo $unComposant[0]->CMP_CODE;?>"disabled></div>   <?php  //echo form_input('CMP_CODE',set_value($lst->CMP_CODE)); ?> </h2><spam><?php echo form_error("CMP_CODE"); ?></span>
                            </th> 
                        </tr>

                        <tr>
                            <th >
                                <h2 class="clth">Libelle du composant  <input name="CMP_LIBELLE" class="form-control" id="disabledInput" type="text" name="" value="<?php echo $unComposant[0]->CMP_LIBELLE;?>"> <?php //echo form_input('CMP_LIBELLE',set_value($lst->CMP_LIBELLE)); ?></h2><span><?php echo form_error("CMP_LIBELLE"); ?>
                            </th>
                        </tr>

                    </table>
                <input type="hidden" name="hidden_id" value="<?php echo $unComposant[0]->CMP_CODE; ?>">
                      <input id="Modifier" class="btn btn-success" type="submit" name="Modifier" value="Modifier"><?php// echo form_submit('btnModifier','Modifier');?>
            </div>
             <?php       
                }
            //}
            else{
                
            ?>
            <?php
            foreach($leDernierComposants as $dcom){
               $dernier=Array();
               foreach ($dcom as $lo){
                   echo "<h3 class='clth'>Le dernier code : ".$lo." </h3>";
               }
            }  
            ?>
        <div class="row">
                <table class="table">
                    <tr>
                        <th>
                            <h2  class="clth"> Code du composant  <input class="form-control" id="disabledInput" type="text" name="CMP_CODE" > <?php  //echo form_input('CMP_CODE',set_value('CMP_CODE')); ?> </h2><spam><?php echo form_error("CMP_CODE"); ?></span>
                        </th> 
                    </tr>

                    <tr>
                        <th >
                            <h2 class="clth">Libelle du composant  <input class="form-control" id="disabledInput" type="text" name="CMP_LIBELLE"> <?php  //echo form_input('CMP_LIBELLE',set_value('CMP_LIBELLE')); ?></h2><span><?php echo form_error("CMP_LIBELLE"); ?>
                        </th>
                    </tr>

                </table>
            <input id="btnValid" class="btn btn-success" type="submit" name="btnValider" value="Valider"><?php //echo form_submit('btnValider','Valider');?>
        </div>
        
        <?php 
            }
            echo form_close();
        ?>
          
             
             
        
           <!-- <input id="btnIncCom" name="incert" data-toggle="tooltip" data-placement="top" title="Afficher les actions"  class=" divImp btn btn-success" type="submit" value="Sauvgarder">--><br><br>
           
         <input id="RevPA" data-toggle="tooltip" data-placement="top" title="Afficher les actions"  class=" divImp btn btn-info" type="button" value="Revenir à la page d'accueil"> 
    </div>
    </body>
    </form>
</html> <!--code d'Ivan-->

