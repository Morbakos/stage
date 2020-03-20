$(document).ready( function () {

    // Générer le tri du tableau
    $('#tableau-contact').DataTable({
        paging: false,
        searching: false,
        bInfo: false
    });

    // Détecter le changement du nombre de ligne à afficher
    $('#nblignes').change(function() {
        var nbLignes = $('#nblignes').val();
        var url = '/contact?nbParPage=' + nbLignes;
        window.location.replace(url);
    });

    // Correction du select
    $('#nblignes').val($('.nom').length);

} );

