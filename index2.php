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
        <nav> <h1> Registration for Application Development and Emerging Technologies </h1> </nav>
        <div class = 'sub-navbar'> <h3> Submitted by: GALLARDO, Louis Oliver B. - 202110838 </h3> </div>
        <hr>
        <div class = 'container'>
            <?php

                function insertData($namearr){
                    $name = $_POST[$namearr];
                    
                    return strip_tags(trim($name));
                }

                function consoleLog($script){
                    echo '<script> console.log("' . $script . '")</script>';
                }
    

                echo '<h2> FULL NAME </h2><hr><br>';

                echo '<span class = "name">' . insertData('fname') . ' ' .
                insertData('mname') . ' ' . insertData('lname') . ' - '. insertData('gender') . '</span>';

                echo '<h2> ADDRESS </h2><hr><br>';
                
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

                function returnZodiac($month, $day){
                    
                    $zodiac = array('', 'Capricorn', 'Aquarius', 'Pisces', 'Aries', 'Taurus', 'Gemini', 'Cancer', 'Leo', 'Virgo', 'Libra', 'Scorpio', 'Sagittarius', 'Capricorn');
                    $last_day = array('', 19, 18, 20, 20, 21, 21, 22, 22, 21, 22, 21, 20, 19);

                    return ($day > $last_day[$month]) ? $zodiac[$month + 1] : $zodiac[$month];
                }

                echo '<span class = "address">' . $addressStr . '</span>';

                echo '<h2> CONTACTS </h2><hr><br>';
                echo '<div class="field"><span class = "title"> Contact Number: </span>'. '<span> '.' ' .insertData('contactno') . '</span></div>';

                echo '<div class="field"><span class = "title"> Email Address: </span>'. '<span> '.' ' .insertData('emailad') . '</span></div>';

                # BIRTHDAY

                $month_parse = date_parse(insertData('userbdaymm'))['month'];

                $birthday = ((string) $month_parse) .'/' . insertData('userbdaydd') . '/' . insertData('userbdayyyyy');

                $zodiac = returnZodiac($month_parse, insertData('userbdaydd'));

                consoleLog($birthday);
                consoleLog($zodiac);

                echo '<h2> DATE OF BIRTH </h2><hr><br>';
                echo '<div class="field">'. '<span> '.' ' .
                    insertData('userbdaymm') . ' ' .
                    insertData('userbdaydd') . ', ' .
                    insertData('userbdayyyyy') .
                    ' - ' . $zodiac . '</span></div>' . '<br>';

            ?>
        </div>
    </body>
</html>