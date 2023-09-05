<?php

echo '<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="keepnote.css">
    <title>Document</title>
</head>

<body>
    <div class="A">';

while($res=$query->fetch_array()){
    echo '
        <div class="B">
            <div class="C">
                <p> '.$res['title'].'</p>

                
                <p>'.$res['date'].'</p>
            </div>
            <div class="D">
               <p>Note</p>
               <p>Date</p>
            </div>
        </div>
        <div class="B">
            <span>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nemo ex rem porro. Beatae, deserunt? Nihil
            voluptate beatae nam blanditiis ipsa vitae tenetur maxime, aspernatur cum numquam tempora? Qui, alias
            accusamus!
        </span>
        </div>';
}


        echo '
    </div>
</body>

</html>';

?>