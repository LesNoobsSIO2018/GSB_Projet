
<table class='table'>
                <tr class="info">
<!--                    <th class="thLC">
                        Code d'un composant
                    </th>-->
                    <th class="thLC">
                        Libelle d'un composant 
                    </th>
                    <th class="thLC">
                        CST Quantité 
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
                    <td class="cLC">
                         <?php echo $comps->CST_QTE; ?>
                    </td>
                </tr>      
     <?php           
    }
    ?>
</table>