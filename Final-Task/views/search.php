<!DOCTYPE html>
<html lang="en">
<head>
    <title>Search</title>
</head>
<body>

    <fieldset style="width:300px;">
        <legend><b>SEARCH</b></legend>

        <input type="text" name="name" id="name" value="" onkeyup="ajax()">

        <input type="button" name="btn" value="Search By Name">

        <hr>

        <div id="result"></div>
    </fieldset>

    <script>
        function ajax(){

            let name = document.getElementById('name').value;

            let xhttp = new XMLHttpRequest();
            xhttp.open('GET', '../controllers/search.php?name='+name, true);
            xhttp.send();

            xhttp.onreadystatechange = function(){
                if(this.readyState == 4 && this.status == 200){
                    document.getElementById('result').innerHTML = this.responseText;
                }
            }
        }
    </script>
    <br>
    <a href="display.php"><input type="button" value="Back"></a>

</body>
</html>
