const showIngredients = (str) => {
    if (str === "") {
        document.getElementById("txtIngredients").innerHTML = "";
    } else {
        const xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = (e) => {
            if (e.target.readyState === 4 && e.target.status === 200) {
                document.getElementById("txtIngredients").innerHTML = JSON.parse(e.target.responseText);
            }
        };
        xmlhttp.open("GET", `ingredienti.php?q=${str}`, true);
        xmlhttp.send();
    }
}