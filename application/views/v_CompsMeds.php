
<table class='form-control'>
                <tr>
<!--                    <th class="thLC">
                        Code d'un composant
                    </th>-->
                    <th class="thLC">
                        Libelle d'un composant 
                    </th>                 
                </tr>
     <?php
       foreach ($lesComposantDeMedicaments as $comps){
        ?>  
                 <tr>
<!--                    <td class="cLC">
                          <?php //echo $comps->CMP_CODE; ?>
                    </td>-->
                    <td class="cLC">
                         <?php echo $comps->CMP_LIBELLE; ?>
                    </td>
                </tr>      
     <?php           
    }
    ?>
</table>