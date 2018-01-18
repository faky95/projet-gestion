function affiche_cache(id)
{
    if(document.getElementById(id).style.visibility=="hidden")
    {
          document.getElementById(id).style.visibility="visible";
          document.getElementById(id).innerHTML=
      
    }
    else
    {
        document.getElementById(id).style.visibility="hidden";
        document.getElementById(id).innerHTML='affiche';
    }
    return true;
}












