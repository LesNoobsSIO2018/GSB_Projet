<html>
    <head>
        <title>Accueil</title>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">     
                <script type="text/javascript" src="<?php echo base_url(); ?>JS/lesFonctions.js"></script>
                <script type="text/javascript" src="<?php echo base_url(); ?>JQuery/jquery-3.1.1.js"></script>
                <script type="text/javascript"></script>
    </head>
        <body>
            <table>
                <tr>
                    <td>
                        <h4>Gestion des médicaments</h4>
                        <input type="button" value="gestion médicaments" onClick="location.href='<?php echo base_url();?>index.php/Ctrl_Medoc/getAllMedicaments'">
                    </td>
                    <td>
                        <h4>Gestion des types d'individus</h4>
                            <input type="button" value="gestion des individus" onClick="location.href='<?php echo base_url();?>index.php/Ctrl_Medoc/getIndividus'">
                    </td>
                    <td>
                        <h4>Gestion des prescriptions</h4>
                            <input type="button" value="gestion des prescriptions" onClick="location.href='<?php echo base_url();?>index.php/Ctrl_Medoc/getPrescription'">
                    </td>
                </tr>
            </table>
        </body>
</html>

