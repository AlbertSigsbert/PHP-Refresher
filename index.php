<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search User</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <div class="container my-5 w-50">
        <h1>Search Users</h1>
        <form>
            <input type="text" class="form-control" onkeyup="showSuggestion(this.value)">
        </form>
        <p>Suggestions: <span id="output" class="fw-bold"></span> </p>
    </div>

    <script>
        function showSuggestion(str){
           if (str.length == 0) {
             document.getElementById('output').innerHTML = '';
           }
           else{
            //AJAX REQ
            const xhttp = new XMLHttpRequest();

            xhttp.onreadystatechange = function(){
                if (this.readyState === 4 && this.status === 200) {
                    document.getElementById('output').innerHTML = this.responseText;
                }
            }

            xhttp.open("GET", "suggest.php?q="+str,true);
            xhttp.send();
           }
        }
    </script>

</body>
</html>