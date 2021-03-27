function time() {
    var date_evenement = new Date("Jun 04 00:00:00 2021") ;

    var date_actuelle = new Date();

    var total_secondes = (date_evenement - date_actuelle) / 1000;

    var prefixe = "Ouverture Dans: ";
    var jours = Math.floor(total_secondes / (60 * 60 * 24));
    if (total_secondes > 0)
    {
        var heures = Math.floor((total_secondes - (jours * 60 * 60 * 24)) / (60 * 60));
        var minutes = Math.floor((total_secondes - ((jours * 60 * 60 * 24 + heures * 60 * 60))) / 60);
        var secondes = Math.floor(total_secondes - ((jours * 60 * 60 * 24 + heures * 60 * 60 + minutes * 60)));

        compte_a_rebours.innerHTML = prefixe + jours + ' jours ' + heures + ' heures ' + minutes + ' minutes et ' + secondes + ' secondes.';
    }
    else // Si total_secondes == 0 (puisque l'on a prit sa valeur absolue)
    {
        compte_a_rebours.innerHTML = 'Ouvert';
    }
};