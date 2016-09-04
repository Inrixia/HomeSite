<script>
$(document).ready(function() {
    var quotes = new Array("Because Games are Fun.", "Hisss......", "Spooky...", "Whatever you do, Don-", "Unbansheee is beautiful", "Unbansheee is ugly", "Gotcha", "I Host To Play"),
    randno = quotes[Math.floor( Math.random() * quotes.length )];
    $('.random').text( randno );
});
</script>