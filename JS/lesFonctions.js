function creerMedicament()
{
    $.ajax
    (
            {
                type:"post",
                url:"creerMedicament",
                data:"depot="+$('#MED_DEPOTLEGAL').val()+" &nom="+$('#MED_NOMCOMMERCIAL').val()+" &code="+$('#FAM_CODE').val()+" &compo="+$('#MED_COMPOSITION').val()+" &effets="+$('#MED_EFFETS').val()+" &contreindic="+$('#MED_CONTREINDIC').val()+" &prix="+$('#MED_PRIXECHANTILLON').val(),
                success:function(data)
                {
                    $('#div1').empty();
                    $('#div1').append(data);
                },
                error:function()
                {
                    alert("Erreur de saisie");
                }
            }
    );
}
function modifMedoc()
{
    $.ajax
    (
            {
                type:"post",
                url:"modifMedoc",
            }
    );
}

