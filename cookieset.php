<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="voting2.css"><link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One|Bungee+Inline|Notable&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>voting2</title>
</head>
<body>
    <h1>Vote For Innovative Idea</h1>
    
            <form method="post" >
              <div class="checkbox">
                <ol class="list">
                   <li class="ol-list">
                       <label class="label" for="Checkbox">Team 1</label>
                       <input class="input" type="checkbox" aria-label="Checkbox">
                    </li> 
                    <li class="ol-list">
                        <label class="label" for="Checkbox">Team 2</label>
                        <input class="input" type="checkbox" aria-label="Checkbox">
                    </li> 
                    <li class="ol-list">
                        <label class="label" for="Checkbox">Team 3</label>
                        <input class="input" type="checkbox" aria-label="Checkbox">
                    </li> 
                    <li class="ol-list">
                        <label class="label" for="Checkbox">Team 4</label>
                        <input class="input" type="checkbox" aria-label="Checkbox">
                    </li> 
                    <li class="ol-list">
                        <label class="label" for="Checkbox">Team 5</label>
                        <input class="input" type="checkbox" aria-label="Checkbox">
                    </li> 
                    <li class="ol-list">
                        <label class="label" for="Checkbox">Team 6</label>
                        <input class="input" type="checkbox" aria-label="Checkbox">
                    </li> 
                    <li class="ol-list">
                        <label class="label" for="Checkbox">Team 7</label>
                        <input class="input" type="checkbox" aria-label="Checkbox">
                    </li> 
                    <li class="ol-list">
                        <label class="label" for="Checkbox">Team 8</label>
                        <input class="input" type="checkbox" aria-label="Checkbox" style="color:white">
                    </li> 
                    <li class="ol-list">
                         <label class="label" for="Checkbox">Team 9</label>
                         <input class="input" type="checkbox" aria-label="Checkbox">
                     </li> 
                </ol>
            </div>
            <button class="button"><a class="link" href="" name="submit">submit</a></button>
   <?php
            $name ="somename";
             $value= 100;
             $expiration = time() + (60*60*60);
             setcookie($name,$value,$expiration);
           
           
        
            ?>         
    </form>         
</body>
</html>