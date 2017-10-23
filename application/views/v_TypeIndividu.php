<html>
    <head>
        <title>MEDICATOR</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script type="text/javascript" src = "<?php echo base_url();?>JS/lesFonctions.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>JQuery/jquery-3.1.1.js"></script>
        
        
        <script>
             $(
                function()
                {
                    
                    $('#lstTypes').change
                    (                           
                            function()
                           {
                                
                                $('#txt1').val($('#lstTypes option:selected').text());
                           }
                    );    
                    $('#sub1').click
                    (
                        function()
                        {
                          modifIndividu();
                        }
                    );
                    $('#sub2').click
                    (
                        function()
                        {  
                            
                          creerIndividu();
                            
                        }
                    );
                }
            );
  
        </script>
        
        
    </head>
    <body>
        <div id="divTypesIndividus">
        <h1>Les Types Individus</h1>
                <br>
            <input type="button" value="médicaments" onClick="location.href='../../index.php/Ctrl_Medoc/getAllMedicaments'">
            <input type="button" value="prescription" onClick="location.href='../../index.php/Ctrl_Medoc/getPrescription'">
            <input type="button" value="Accueil" onClick="location.href='../../../PPE'">
        <div>
            <p>Saisir un type d'individus :</p>
            <input id="txt1" type="text">
            <input id="sub1" type="button" value ="Modifier"  >
            <input id="sub2" type="button" value ="Inserer">
        </div>
            <table>
                <thead>
                    <tr>
                        <th>Libellé</th>
                        <th>code</th>
                    </tr>
                </thead>
                <?php 
                 
                    foreach($lesIndividus as $tin)
                        {
                        ?>
            <tbody>
                <tr>
                    <td><?php echo $tin->TIN_LIBELLE; ?></td>
                    <td><?php echo $tin->TIN_CODE;?></td>
                    <td><input id="btn2" type="button" value="Modifier"></td>
                </tr>
            </tbody>
            <?php
                        }
            ?>
            </table>      
        <div id="div1"></div> 
        <div id="div2"></div>  
        
        </div>
    </body>
</html>