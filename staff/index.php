<?php include 'reader.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">0
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <title>Document</title>
</head>
<body>

    <div class="container">
        <h1 class="h1 text-center" style="margin-top:10%">BUGC Queee</h1>
        <form>
        <div class="row text-center">
            <div class="col-6">
                <a class="btn btn-primary" href="reader.php?next=0">
                    <h1 class="h1" style="font-size: 10vw"><</h1>
                    <h3 class="h3 text-center">Previous</h3>
                </a>
            </div>
            <div class="col-6">
                <a class="btn btn-primary" href="reader.php?next=1" >
                    <h1 class="h1" style="font-size: 10vw">></h1>
                    <h3 class="h3 text-center">Next</h3>
                </a>
            </div>
        </div>
    </div>
    <h1 class="h1 text-center" id="noti_number"><?php echo $username ?></h1>


<script src="../assets/js/bootstrap.js"></script>
</body>
</html>