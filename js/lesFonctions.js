function AfficherLFC3(){
    document.getElementById('col7').style.display='';

}

function AfficherComposantMeds(idMedicament)
{
    $.ajax(
    {
        type:"get",
        url:"afficherComposantMeds",
        data:"idMedicament="+idMedicament,
        success:function(data)
        {
         //   alert('test');
           $('#divComps').empty();
            $('#divComps').append(data);
        },
        error:function()
        {
            alert('Erreur SQL');
        }
    }
    );
}
//function AfficherListComp(){
//    var rdo=document.getElementsByName('list');
//    
//    if(rdo[0].checked){
//     document.getElementById('ListComposant').style.display='';
//         document.getElementById('ListComposantDunMed').style.display='none';
//    }
//    if (rdo[1].checked){
//            document.getElementById('ListComposant').style.display='none';
//        document.getElementById('ListComposantDunMed').style.display='';
//      
//    }
// }
    
