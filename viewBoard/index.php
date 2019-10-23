
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <title>Document</title>
</head>
<body>

    <div class="container-fluid">
    <br><br>

        <div class="card bg-light mb-3" style="max-width: 35rem;">
        <div class="card-header text-center"><h3>Table 1</h3></div>
        <div class="card-body">
            <h5 class="card-title text-center">Now Serving Student</h5>
            <h1 class="h1 text-center" id="noti_number" style="font-size:15vw"></h1>
        </div>
        </div>

    </div>
    
    


    <script type="text/javascript">
    function loadDoc() {
    
        setInterval(function(){

        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
            document.getElementById("noti_number").innerHTML = this.responseText;
            }
        };
        xhttp.open("GET", "reader.php", true);
        xhttp.send();

        },1000);

    }
    loadDoc();
    </script>


<script src="../assets/js/bootstrap.js"></script>
</body>
</html>