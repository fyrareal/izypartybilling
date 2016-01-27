<link rel="stylesheet" type="text/css" href="css/ganti.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<button class="buttons1" id="postYourAdd" onclick="postYourAdd()" type="button">OPEN</button>
<iframe class="iframe1" id="frames" src="test.php" width="200" height="200" style="background:#ffffff"></iframe>
<script>
    function postYourAdd() {
        var iframe = $("#frames");
        iframe.style.visibility="hidden";
        iframe.attr("src", iframe.data("src"));
    }
   
</script>

