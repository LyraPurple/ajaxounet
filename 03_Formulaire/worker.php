<script>
    var praynom_re = /^[a-z-]+{2}$/i;
    var praynom = $('#praynom');

    if ( ! praynom_re.test( praynom.val() ) ) {
        console.log("Erreur sur le champ praynom");
        send = false;
    }
</script>