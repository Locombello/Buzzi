<!DOCTYPE HTML>
<html data-bs-theme="dark" lang="">
<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD' crossorigin='anonymous'>
<script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js' integrity='sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN' crossorigin='anonymous'></script>
<script>
    function showUser(str) {
        if (str === "") {
            document.getElementById("txtHint").innerHTML = "";
        } else {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState === 4 && this.status === 200) {
                    document.getElementById("txtHint").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET","mostra_videogiochi.php?q="+str,true);
            xmlhttp.send();
        }
    }
</script>
<body class="container mt-3">
<form>
    <label>
        <select class="form-select" name="game" onchange="showUser(this.value)">
            <option value="">Select a game:</option>
            <option value="The Last of Us">The Last of Us</option>
            <option value="Assassin">Assassin</option>
            <option value="FIFA 22">FIFA 22</option>
            <option value="Minecraft">Minecraft</option>
            <option value="Super Mario Bros.">Super Mario Bros.</option>
        </select>
    </label>
</form>
<br>
<div id="txtHint"><b>Person info will be listed here...</b></div>
<script>
    //<!--

    /*
    Submitted by David Gardner (davidgardner7@yahoo.com)
    Featured on JavaScript Kit (http://javascriptkit.com)
    For this and over 400+ free scripts, visit http://javascriptkit.com
    */

    function getpet () {

        const toyear = 1997;
        const birthyear = document.frm.inyear.value;
        let birthpet = "Ox";

        const x = (toyear - birthyear) % 12;
        if ((x === 1) || (x === -11)) {
            birthpet="Mouse"      }
        else  {
            if (x === 0)             {
                birthpet="Ox"           }
            else  {
                if ((x === 11) || (x === -1)) {
                    birthpet="Tiger"          }
                else  {
                    if ((x === 10) || (x === -2)) {
                        birthpet="Rabbit"         }
                    else  {
                        if ((x === 9) || (x === -3))  {
                            birthpet="Dragon"         }
                        else  {
                            if ((x === 8) || (x === -4))  {
                                birthpet="Snake"          }
                            else  {
                                if ((x === 7) || (x === -5))  {
                                    birthpet="Horse"          }
                                else  {
                                    if ((x === 6) || (x === -6))  {
                                        birthpet="Sheep"          }
                                    else  {
                                        if ((x === 5) || (x === -7))  {
                                            birthpet="Monkey"         }
                                        else  {
                                            if ((x === 4) || (x === -8))  {
                                                birthpet="Chicken"        }
                                            else  {
                                                if ((x === 3) || (x === -9))  {
                                                    birthpet="Dog"            }
                                                else  {
                                                    if ((x === 2) || (x === -10))  {
                                                        birthpet="Pig"             }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        document.frm.birth.value = birthpet;

    }
    // -->
</script>


<p>Enter your birth year. For example: "1975" </p>
<form NAME="frm">
    <p><label>
            <input TYPE="text" SIZE="4" NAME="inyear" value="1975">
        </label> <input TYPE="button" VALUE="My pet, please"
                                                                      onClick="getpet()"> <br>
    </p>
    <p><label>
            <input TYPE="text" SIZE="9" NAME="birth">
        </label> </font></p>
</form>

<p align="center"><font face="arial" size="-2">This free script provided by</font><br>
    <font face="arial, helvetica" size="-2"><a href="http://javascriptkit.com">JavaScript
            Kit</a></font></p>
</body>
</html>