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
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style_ivan.css" />
         <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>Jquery/jquery-3.1.1.js"></script>
         <script type="text/javascript" src="  <?php echo base_url(); ?>js/functions.js"></script>
         <script type="text/javascript">
         $(
                  function(){
 
                      $('#idMeds').click(
                              function(){
                                 $('.bg-info').show();
                                      
                              });
                      $('#idMeds').show(
                         function(){
                             $('#hidden_id_meds').val(($(this).val()));
                         });
                         $('#idMeds').change(
                         function(){
                             $('#hidden_id_meds').val(($(this).val()));
                         });
                         
                         $('#selComp').show(
                         function(){
                             $('#hidden_id_comps').val(($(this).val()));
                         });
                         $('#selComp').change(
                         function(){
                             $('#hidden_id_comps').val(($(this).val()));
                         });

                         $('#btnValidCom').click(
                         function(){
                           IncererMedCom();
                            
                         });
                         
                        $('#idMeds').show(
                        function(){
                            AfficherComposantMeds($(this).val());
                        });
                         $('#idMeds').change(
                         function(){
                             AfficherComposantMeds($(this).val());
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
        <div id="MedComps">
        <h2>Ajouter les composants d'un medicament</h2>
        <hr>
            <h3>Choisissez un medicament</h3>
        
            
              <?php // echo form_open(base_url().'index.php/Ctrl_Composant_Ivan/validate'); ?>
            <select class="form-control" id='idMeds'>
                <?php 
                    foreach ($lesMedicaments as $meds){
                        echo "<option name='lstMedes' value='".$meds->MED_DEPOTLEGAL."'>".$meds->MED_NOMCOMMERCIAL."</option>";
                    }
                ?>

            </select>
             <input type="hidden" name="hidden " id="hidden_id_meds" >
            <input type="hidden" name="hidden " id="hidden_id_comps" >
       <div class="row">
           <div class="col-md-6">

                
            <br>
            <div id='idComps'>
                <h3>Choisissez les composants</h3>
                        <select id="selComp" class="form-control">
                        <?php 
                                foreach ($lesComposants as $comps){
                                    echo "<option value='".$comps->CMP_CODE."'>".$comps->CMP_LIBELLE."</option>";
                                }
                            ?>
                        </select><br>
            <label>CST Quantité</label><input class="form-control" type="text" id="CST_QTE">
            </div>
            <input id="btnValidCom" class="btn btn-success" type="submit" name="submitAJCM" value="Ajouter" style="margin-top: 20px;"><br>
            <input style="margin-top: 20px;"   class=" divImp btn btn-info" type="button" onClick="location.href='<?php echo base_url(); ?>index.php/Ctrl_Composant_Ivan/afficherMedicaments'" value="Liste de composants d'un medicament">
            <input id="RevPA" data-toggle="tooltip" data-placement="top" style="margin-top: 20px;" title="Acceuil"  class=" divImp btn btn-info" type="button" onClick="location.href='<?php echo base_url(); ?>'" value="Revenir à la page d'accueil"> 
        </div>
           <div class="col-md-6">
               <br>
               <h3>Les composant d'un medicament</h3>
               <div id="divComps"></div>
           </div>
       </div>
            
    
        </div> 
    
    </div>

    </body>
</html>
