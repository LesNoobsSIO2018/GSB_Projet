function AfficherLFC2(){
    document.getElementById('col1').style.display='';
     document.getElementById('col2').style.display='';
      document.getElementById('col3').style.display='';
     
}
function AfficherLFC1   (){
    document.getElementById('col4').style.display='';
     document.getElementById('col5').style.display='';
      document.getElementById('col6').style.display='';
     
}
function AfficherLFC3(){
    document.getElementById('col7').style.display='';

}

function AfficherPageIncert(){
    window.location = "http://localhost/Projet/PPE_GSB/index.php/Ctrl_Composant_Ivan/ajouterComposant/";
}

function AfficherPageA(){
    window.location = "http://localhost/Projet/PPE_GSB/";
   // alert("lol");
}
function AfficherListComp(){
    var rdo=document.getElementsByName('list');
    
    if(rdo[0].checked){
     document.getElementById('ListComposant').style.display='';
         document.getElementById('ListComposantDunMed').style.display='none';
    }
    if (rdo[1].checked){
            document.getElementById('ListComposant').style.display='none';
        document.getElementById('ListComposantDunMed').style.display='';
      
    }
 }
    
