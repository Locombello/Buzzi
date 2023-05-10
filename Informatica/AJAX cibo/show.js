const showIngredients = (str) => {
    if (str === "") {
        document.getElementById("txtIngredients").innerHTML = "";
    } else {
        const xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = () => {
            if (this.readyState === 4 && this.status === 200) {
                document.getElementById("txtIngredients").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","ingredients.php?q="+str,true);
        xmlhttp.send();
    }
}