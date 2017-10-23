<html>
    <head>
        <title>Prescription</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
        <body>
            <h2>Création et modification d'une préscription</h2>
                <input type="text" name="MED_DEPOTLEGAL" placeholder="depot legal">
                <input type="text" name="TIN_CODE" placeholder="code individu">
                <input type="text" name="DOS_CODE" placeholder="code dosage">
                <input type="text" name="PRE_POSOLOGIE" placeholder="posologie">
                <input type="submit" value="créer">
                <input type="button" value="modifier">
                    <br>
                    <br>
                <input type="submit" value="Médicaments" onClick="location.href='../../index.php/Ctrl_Medoc/getAllMedicament'">
                <input type="button" value="Individus" onClick="location.href='../../index.php/Ctrl_Medoc/getAllIndividu'">
                <input type="button" value="Accueil" onClick="location.href='../../../PPE'">
                    <br>
                    <br>
                    <br>
            <h2>Liste des prescriptions existantes</h2>
                <select name="lstMedoc">
                    <?php
                        foreach($lesMedicaments as $med){
                    ?>
                    <option>
                        <?php echo $med->MED_NOMCOMMERCIAL;?>
                    </option>
                        <?php } ?>
                </select>
                <select name="lstTypeIndividu">
                    <?php
                        foreach($lesIndividus as $types){
                    ?>
                    <option id="1">
                        <?php echo $tin->TIN_LIBELLE;?>
                    </option>
                        <?php } ?>
                </select>
                <select name="dosage">
                    <?php
                        foreach($lesDosages as $dos){
                    ?>
                    <option value="1">
                        <?php echo $dos->DOS_QUANTITE;?>
                    </option>
                        <?php } ?> 
                </select>
        </body>
</html>
