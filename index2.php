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
        <div class = 'main-navbar'>
            <nav class = 'navbar'> <h1> Registration for Application Development and Emerging Technologies </h1> </nav>
            <div class = 'sub-navbar'> <h3> Submitted by: GALLARDO, Louis Oliver B. - 202110838 </h3> </div>
        <hr>
        </div>
        <div class = 'success-container'>
            <h2 class = 'success-msg'> You have been registered SUCCESSFULLY! </h2>
        </div>
        <div class = 'container'>
            <?php

                function insertData($namearr){
                    $name = $_POST[$namearr];
                    
                    return strip_tags(trim($name));
                }

                function showDependencies(){

                    for($i = 1; 4 > $i; $i++)
                    {
                        $depfname = $_POST['dep'. $i .'fname']; //1
                        $depmname = $_POST['dep'. $i .'mname']; //2
                        $deplname = $_POST['dep'. $i .'lname']; //3
                        $depbdaymm = $_POST['dep'. $i .'bdaymm']; //4
                        $depbdaydd = $_POST['dep'. $i .'bdaydd']; //5
                        $depbdayyyyy = $_POST['dep'. $i .'bdayyyyy']; //6

                        $fullname = $depfname . ' ' . $depmname . ' ' . $deplname;

                        if(empty($depfname) && empty($depmname) && empty($deplname))
                        {
                            continue;
                        }
                        else
                        {
                            echo '<h2 class = "section-title"> DEPENDENCIES '. $i. ' </h2><hr><br>';
                            echo '<div class="field"><span class = "title"> Name: </span>'. '<span class="info"> '.' ' 
                                    . $fullname . '</span></div>';

                            $month_parse = date_parse($depbdaymm)['month'];

                            $birthday = ((string) $month_parse) .'-' . $depbdaydd . '-' . $depbdayyyyy;
                    
                            $zodiac = returnZodiac($month_parse, $depbdaydd);

                            echo '<div class="field">'. '<span class = "title"> Birthday: </span>' . '<span class="info"> '.' ' .
                                $depbdaymm . ' ' .
                                $depbdaydd . ', ' .
                                $depbdayyyyy .
                                ' - ' . $zodiac . '</span></div>' . '<br>';
                            
                            //insertToDependenciesTable($depfname, $depmname, $deplname, $birthday);
                        }
                    }

                }

                /* function insertToDependenciesTable($fname, $mname, $lname, $bday){
                    $conn = new mysqli('localhost', 'root', 'admin', 'formsdb');

                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                        return;
                    } 

                    $sql_select_query = "SELECT MAX(id) AS last_id FROM Client;";

                    consoleLog($sql_select_query);

                    $result = mysqli_query($conn, $sql_select_query);
                    $fk = '';

                    if(mysqli_num_rows($result) > 0)
                    {
                        foreach($result as $row)
                        {
                            $fk = (int) $row['last_id'];
                        }
                    }

                    $sql_insert_query = "INSERT INTO Dependency (".
                        "first_name, middle_name, last_name, birthday, client_id".
                        ")".
                        " VALUES ('".
                        $fname . '\', \'' .
                        $mname . '\', \'' .
                        $lname . '\',' .
                        'STR_TO_DATE('. '\'' . $bday. '\'' . ", '%m-%d-%Y')".
                        ", " . $fk . ');';

                    consoleLog($sql_insert_query);

                    $conn -> query($sql_insert_query);
                    $conn -> commit();
                    $conn -> close();
                }
 */
                function consoleLog($script){
                    echo '<script> console.log("' . $script . '")</script>';
                }
 
               /*  function insertToClientDB(){
    
                    $conn = new mysqli('localhost', 'root', 'admin', 'formsdb');

                    $fname = $_POST['fname'];
                    $mname = $_POST['mname'];
                    $lname = $_POST['lname'];
                    $houseno = $_POST['houseno'];
                    $street = $_POST['street'];
                    $subdiv = $_POST['subdiv'];
                    $city = $_POST['city'];
                    $zipcode = $_POST['zipcode'];
                    $country = $_POST['country'];
                    $email = $_POST['emailad'];
                    $gender = $_POST['gender'];

                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                        return;
                    } 

                    $month_parse = date_parse(insertData('userbdaymm'))['month'];

                    $birthday = ((string) $month_parse) .'-' . insertData('userbdaydd') . '-' . insertData('userbdayyyyy');

                    $insertQuery = "INSERT INTO Client (first_name, middle_name, last_name, house_no, street, village, city, zip_code, country, email, gender, birthday)".
                    " VALUES (".
                        '\'' . $fname. '\','.
                        '\''. $mname. '\','.
                        '\''. $lname. '\','.
                        '\''. $houseno. '\','.
                        '\''. $street. '\','.
                        '\''. $subdiv. '\','.
                        '\''. $city. '\','.
                        '\''. $zipcode. '\','.
                        '\''. $country. '\','.
                        '\''. $email. '\','.
                        '\''. $gender. '\','.
                        'STR_TO_DATE('. '\'' . $birthday. '\'' . ", '%m-%d-%Y')".
                    ");";

                    consoleLog($insertQuery);
                    $conn -> query($insertQuery);
                    $conn -> commit();
                    $conn -> close();
                } */
    

                echo '<h2 class = "section-title"> FULL NAME </h2><hr><br>';

                echo '<span class="info">' . insertData('fname') . ' ' .
                insertData('mname') . ' ' . insertData('lname') . ' - '. insertData('gender') . '</span>';

                echo '<h2 class = "section-title"> ADDRESS </h2><hr><br>';
                
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

                echo '<span class="info">' . $addressStr . '</span>';

                echo '<h2 class = "section-title"> CONTACTS </h2><hr><br>';
                echo '<div class="field"><span class = "title"> Contact Number: </span>'. '<span class="info"> '.' ' .insertData('contactno') . '</span></div>';

                echo '<div class="field"><span class = "title"> Email Address: </span>'. '<span class="info"> '.' ' .insertData('emailad') . '</span></div>';

                # BIRTHDAY

                $month_parse = date_parse(insertData('userbdaymm'))['month'];

                $birthday = ((string) $month_parse) .'/' . insertData('userbdaydd') . '/' . insertData('userbdayyyyy');

                $zodiac = returnZodiac($month_parse, insertData('userbdaydd'));

                consoleLog($birthday);
                consoleLog($zodiac);

                echo '<h2 class = "section-title"> DATE OF BIRTH </h2><hr><br>';
                echo '<div class="field">'. '<span class="info"> '.' ' .
                    insertData('userbdaymm') . ' ' .
                    insertData('userbdaydd') . ', ' .
                    insertData('userbdayyyyy') .
                    ' - ' . $zodiac . '</span></div>' . '<br>';
                
                //insertToClientDB();

                showDependencies();
            ?>
        </div>
    </body>
    <script src = 'script2.js'></script>
</html>