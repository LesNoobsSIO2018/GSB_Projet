<html>
    <head>
        <title>Medicaments</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script type="text/javascript" src = "<?php echo base_url();?>JS/lesFonctions.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>JQuery/jquery-3.1.1.js"></script>
        <script type="text/javascript">
            $(
                    function()
                    {
                        $('#btn1').click
                    (
                        function()
                        {  
                            creerMedicament();
                          
                        }
                    ); 
                       
   
                        $('tr').click
                        (
                                function()
                        {
                            $('#txtDepot').val($(this).children(0).eq(0).text());
                            $('#txtNom').val($(this).children(0).eq(1).text());
                            $('#txtFam').val($(this).children(0).eq(2).text());
                            $('#txtCompo').val($(this).children(0).eq(3).text());
                            $('#txtEffets').val($(this).children(0).eq(4).text());
                            $('#txtContre').val($(this).children(0).eq(5).text());
                            $('#txtPrix').val($(this).children(0).eq(6).text());
                        }
                        );
                        $('#btn2').click
                    (
                        function()
                        {  
                           // alert($('#txtEffets').val());
                            modifMedicament();
                          
                        }
                    ); 
                  
                }
                
               );
        </script>
    </head>
    <body>
        <h1> Medicaments </h1>
        <input id="txtDepot" type="text" placeholder="dépot légal">
        <input id="txtNom" type="text" placeholder="nom commercial">
        <input id="txtFam" type="text" placeholder="code famille">
        <input id="txtCompo" type="text" placeholder="composition">
        <input id="txtEffets" type="text" placeholder="effets">
        <input id="txtContre" type="text" placeholder="contre indication">
        <input id="txtPrix" type="text" placeholder="prix échantillon">
        <input id="btn1" type="button" value="Inserer">
            <br>
            <br>
        <input type="button" value="individu" onClick="location.href='../../index.php/Ctrl_Medoc/getIndividus'">
        <input type="button" value="prescription" onClick="location.href='../../index.php/Ctrl_Medoc/getPrescription'">
        <input type="button" value="Accueil" onClick="location.href='../../../PPE'">
            <br>
            <br>
            <br>
        <table>
            <thead>
                <tr> 
                        <th>Depot</th>
                        <th>Nom</th>
                        <th>Code</th>
                        <th>Composition</th>
                        <th>Effets</th>
                        <th>Contre-indication</th>
                        <th>Prix</th>
                </tr>
            </thead>
                <?php 
                 
                    foreach($lesMedicaments as $med)
                        {
                        ?>
            <tbody>
                <tr>
                    <td><?php echo $med->MED_DEPOTLEGAL; ?></td>
                    <td><?php echo $med->MED_NOMCOMMERCIAL;?></td>
                    <td><?php echo $med->FAM_CODE;?></td>
                    <td><?php echo $med->MED_COMPOSITION;?></td>
                    <td><?php echo $med->MED_EFFETS;?></td>
                    <td><?php echo $med->MED_CONTREINDIC;?></td>
                    <td><?php echo $med->MED_PRIXECHANTILLON;?></td>
                    <td><input id="btn2" type="button" value="Modifier"></td>
                </tr>
            </tbody>
                 <?php 
                        }                       
                ?>
        </table>
        <div id="div1"></div>
        <div id="div2"></div>
    </body>
</html>
    


