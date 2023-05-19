<!DOCTYPE html>
<html lang="en">
    <head>
        <title>SUCCESS!</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;700&family=Roboto:wght@100;300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style2.css">
    </head>
    <body>
        <nav> <h1> SAMPLE REGISTRATION </h1> </nav>
        <hr>
        <div class = 'container'>
            <?php

                function insertData($namearr){
                    $name = $_POST[$namearr];
    
                    return $name ;
                }

                echo '<h2> FULL NAME </h2><hr>';

                echo '<span class = "name">' . insertData('fname') . ' ' .
                insertData('mname') . ' ' . insertData('lname') . ' - '. insertData('gender') . '</span>';

                echo '<hr> <h2> ADDRESS </h2><hr>';
                
                $addressArr = array('houseno', 'street', 'subdiv', 'city', 'zipcode', 'country');

                $addressStr = '';
    
                for($i = 0; 6>$i;$i++)
                {
                    if(empty(insertData($addressArr[$i]))){
                        continue;
                    }

                    if($i==5)
                    {
                        $addressStr .= insertData($addressArr[$i]);
                    }
                    else
                    {
                        $addressStr .= insertData($addressArr[$i]) . ', ';
                    }
                }

                echo '<span class = "address">' . $addressStr . '</span>';

                echo '<hr> <h2> CONTACTS </h2><hr>';
                echo '<div class="field"><span class = "title"> Contact Number: </span>'. '<span> '.' ' .insertData('contactno') . '</span></div>';

                echo '<div class="field"><span class = "title"> Email Address: </span>'. '<span> '.' ' .insertData('emailad') . '</span></div>' . '<br>';

                echo '<hr> <h2> DATE OF BIRTH </h2><hr>';
                echo '<div class="field">'. '<span> '.' ' .
                    insertData('userbdaymm') . ' ' .
                    insertData('userbdaydd') . ', ' .
                    insertData('userbdayyyyy') .
                    '</span></div>' . '<br>';
            ?>
        </div>
    </body>
</html>