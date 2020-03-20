$(document).ready( function () {
    $('#tableau-contact').DataTable({
        paging: false,
        searching: false,
        bInfo: false
    });

    $('#nblignes').change(function() {
        var nbLignes = $('#nblignes').val();
        var url = '/contact?nbParPage=' + nbLignes;
        window.location.replace(url);
    });

    $('#nblignes').val($('.nom').length);

} );

