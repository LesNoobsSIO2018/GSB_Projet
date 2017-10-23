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
        url:"incererComposantMedic",
        data:"medicament="+$('#hidden_id_meds').val()+"&composant="+$('#hidden_id_comps').val()+"&quantite="+$('#CST_QTE').val(),
        success:function(data)
        { swal(
                'Le composant a été ajouté!',
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
                dangerMode: true,
                type: 'warning',
                showCancelButton: true,
                timer: 2000
              });
        }
    }
    );
}
function ComposantMed()
{
    $.ajax(
    {
        type:"post",
        url:"composantMed",
        data:"medicament="+$('#hidden_id_meds').val(),
        success:function(data){
        
           $('#selComp').empty();
            $('#selComp').append(data);
        },
        error:function()
        {
            alert('Error');
        }
    });
    
}

function QuantiteMedCom()
{
    $.ajax(
    {
        type:"post",
        url:"quantiteComposantMedic",
        data:"medicament="+$('#hidden_id_meds').val()+"&composant="+$('#hidden_id_comps').val()+"&quantite="+$('#CST_QTE').val(),
        success:function(data){
        
           $('#inpQte').empty();
            $('#inpQte').append(data);
        },
        error:function()
        {
            alert('Error');
        }
    });
    
}

function ModifMedCom()
{
    $.ajax(
    {
        type:"post",
        url:"modifComposantMedic",
        data:"medicament="+$('#hidden_id_meds').val()+"&composant="+$('#hidden_id_comps').val()+"&quantite="+$('#CST_QTE').val(),
        success:function(data)
        { swal(
                'Reussi!',
                'Modification été éffectué!',
                'success',{timer: 2000}
              );

           $('#Aj').empty();
            $('#Aj').append(data);
        },
        error:function()
        {
       swal({
                title: 'Erreur!',
                text: "Quantité été déja modifié",
                dangerMode: true,
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
    
