<!DOCTYPE HTML>
<html data-bs-theme="dark" lang="">
<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD' crossorigin='anonymous'>
<script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js' integrity='sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN' crossorigin='anonymous'></script>
<script>
    function showIngredients(str) {
        if (str === "") {
            document.getElementById("txtIngredients").innerHTML = "";
        } else {
            const xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState === 4 && this.status === 200) {
                    document.getElementById("txtIngredients").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET","mostra_ingredienti.php?q="+str,true);
            xmlhttp.send();
        }
    }
</script>
<body class="container mt-3">
<h1>Ingredienti dei cibi</h1>
<form>
    <?php include "select_cibi.php";?>
</form>
<br>
<div id="txtIngredients"><b>Gli ingredienti del cibo verrano mostrati qui</b></div>
</body>
</html>