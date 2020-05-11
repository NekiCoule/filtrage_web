//fontcion permettant de validé le formulaire
function Validation(){

    //validation du nom
    if(document.getElementById("iptNom").value=="")
    {
        document.getElementById("ErrNom").innerHTML="Veuillez entrer un nom.";
        document.getElementById("iptNom").focus();
        return;
    }
    else
    {
        document.getElementById("ErrNom").innerHTML="";
    }

    //validation du prénom
    if(document.getElementById("iptPrenom").value=="")
    {
        document.getElementById("ErrPrenom").innerHTML="Veuillez entrer un prénom.";
        document.getElementById("iptPrenom").focus();
        return;
    }
    else
    {
        document.getElementById("ErrPrenom").innerHTML="";
    }

    //validation du choix du sexe
    if(document.getElementById("rdbHomme").checked==false && document.getElementById("rdbFemme").checked==false && document.getElementById("rdbAutre").checked==false)
    {
        document.getElementById("ErrRadioSexe").innerHTML="Le sexe n'a pas été choisi.";
        return;
    }
    else
    {
        document.getElementById("ErrRadioSexe").innerHTML="";
    }

    //validation de l'email
    email=document.getElementById("iptEmail").value.toString();
    email=email.split(".");
    if(email.length!=3)
    {
        document.getElementById("ErrEmail").innerHTML="Votre email n'est pas valide.";
        document.getElementById("iptEmail").focus();
        return;
    }
    else
    {
        if(email[0].indexOf("@")!=-1){
            document.getElementById("ErrEmail").innerHTML="Votre email n'est pas valide.";
            document.getElementById("iptEmail").focus();
            return;
        }
        if(email[1].indexOf("@")==-1){
            document.getElementById("ErrEmail").innerHTML="Votre email n'est pas valide.";
            document.getElementById("iptEmail").focus();
            return;
        }
        if(email[2].indexOf("@")!=-1){
            document.getElementById("ErrEmail").innerHTML="Votre email n'est pas valide.";
            document.getElementById("iptEmail").focus();
            return;
        }
        document.getElementById("ErrEmail").innerHTML="";
    }

    //envoie du formulaire
    document.getElementById("frmInscription").submit();
}
