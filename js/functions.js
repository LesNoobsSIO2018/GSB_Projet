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
function IncererMedCom()
{
    $.ajax(
    {
        type:"post",
        url:"IncererComposantMedic",
        data:"medicament="+$('#hidden_id_meds').val()+"&composant="+$('#hidden_id_comps').val()+"&quantite="+$('#CST_QTE').val(),
        success:function(data)
        { swal(
                'Le composant a était ajouté!',
                'Vous pouvez ajouter un autre!',
                'success',{timer: 2000}
              );

           $('#MedComps').empty();
            $('#MedComps').append(data);
        },
        error:function()
        {
       swal({
                title: 'Ce composant est deja dans la liste!',
                text: "Choisissez un autre",
                type: 'warning',
                showCancelButton: true,
                timer: 2000
              });
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
    
