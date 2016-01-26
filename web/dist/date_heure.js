function date_heure()
{
        date = new Date;
        annee = date.getFullYear();
        moi = date.getMonth();
        //j = date.getDate();
        jour = date.getDay();
        h = date.getHours();
		if(jour<10)
        {
                jour = "0"+jour;
        }
        if(moi<10)
        {
                moi = "0"+moi;
        }
        
        if(h<10)
        {
                h = "0"+h;
        }
        m = date.getMinutes();
        if(m<10)
        {
                m = "0"+m;
        }
        s = date.getSeconds();
        if(s<10)
        {
                s = "0"+s;
        }
        resultat = jour+'/'+moi+'/'+annee+':'+h+':'+m+':'+s;
        //document.getElementById(id).innerHTML = resultat;
        setTimeout( resultat,'1000');
        return resultat;
}// JavaScript Document