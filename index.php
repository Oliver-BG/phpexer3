<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;700&family=Roboto:wght@100;300&display=swap" rel="stylesheet">
    <link rel ='stylesheet' href = 'style.css'>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav> <h1> SAMPLE REGISTRATION </h1> </nav>
    <hr>
    <div class = 'container'>

        <!-- START FORMS -->

        <?php
        
        # lname, fname, mname
        # emailad, bday-mm, bday-dd, bday-yyyy
            function insertFormSection($title1,$title2,$title3,$ph1, $ph2, $ph3, $name1,$name2,$name3,)
            {
                // GENERIC COMPONENT WITH THREE INPUTS

                $tags = 
                "<article class = 'field-container'>".
                    "<form action = '' method = \"post\">".
                        "<div class ='sub-div'>".
                           "<span class = 'field-title'> $title1 </span>".
                            "<input class = 'field' type = 'text' name = $name1 placeholder = '$ph1'>".
                        "</div>".  

                        "<div class ='sub-div'>".
                            "<span class = 'field-title'> $title2 </span>".
                            "<input class = \"field\" type = \"text\" name = $name2 placeholder = '$ph2'>".
                        "</div>".  

                        "<div class ='sub-div'>".
                           "<span class = 'field-title'> $title3 </span>".
                            "<input class = 'field' type = 'text' name = $name3 placeholder = '$ph3'>".
                        "</div>".

                    "</form>".
                "</article>";

                return $tags;
            }

            function insertBdayDropdown($namemm, $namedd, $nameyyyy){
                // INSERTS DROPDOWN MENU FOR THE USER'S BIRTHDAY

                $tags = 
                "<div class ='sub-div'>".
                    "<span class = 'field-title'> Birthday </span>".
                    "<div class = 'bday-container'>".
                        "<select class = 'dd-bday-mm' name = $namemm>".
                            "<!-- JS INJECTION -->".
                        "</select>".
    
                        "<select class = 'dd-bday-dd' name = $namedd>".
                            "<!-- JS INJECTION -->".
                        "</select>".
    
                        "<select class = 'dd-bday-yyyy' name = $nameyyyy>".
                            "<!-- JS INJECTION -->".
                        "</select>".
    
                    "</div>";
                
                    return $tags;
            }

            function insertCountrySection($title1,$title2,$title3,$ph1, $ph2,$name1,$name2)
            {
                // INSERTS SECTION FOR THE COUNTRY, CITY AND ZIPCODE

                $tags = 
                "<article class = 'field-container'>".
                    "<form action = '' method = \"post\">".
                        "<div class ='sub-div'>".
                           "<span class = 'field-title'> $title1 </span>".
                            "<input class = 'field' type = 'text' name = $name1 placeholder = '$ph1'>".
                        "</div>".  

                        "<div class ='sub-div'>".
                            "<span class = 'field-title'> $title2 </span>".
                            "<input class = \"field\" type = \"text\" name = $name2 placeholder = '$ph2'>".
                        "</div>".  

                        "<div class ='sub-div'>".
                            "<span class = 'field-title'> $title3 </span>".
                            "<select class = 'dd-country' name = 'country'>".
                                "<!-- JS INJECTION -->".
                            "</select>".
                        "</div>". 

                    "</form>".
                "</article>";

                return $tags;
            }

            function insertEmailBdaySection()
            {
                // INSERTS A BIRTHDAY DROPDOWN

                $birthdayDD = insertBdayDropdown('userbdaymm','userbdaydd','userbdayyyyy');

                $tags = 
                "<article class = 'field-container'>".
                "<form action = \"\" method = \"post\">".
                    "<div class ='sub-div'>".
                        "<span class = 'field-title'> Email address </span>".
                        "<input type = 'email' class = 'field' type = 'text' name = 'emailad' placeholder = 'e.g oliverbgallardo@gmail.com'>".
                        "<span class = 'subtitle'> We won't share this information with anyone </span>".
                    "</div>".  

                        $birthdayDD . 

                        "<span class = 'subtitle'> Please make sure you are over 18 years old </span>".
                    "</div>".
                "</form>".
                "</article>";

                return $tags;
            }

            function insertContactandGender(){
                $tags = 
                "<article class = 'field-container'>".
                "<form action = \"\" method = \"post\">".
                
                    "<div class ='sub-div'>".
                        "<span class = 'field-title'> Email address </span>".
                        "<input type = 'email' class = 'field' type = 'text' name = 'emailad' placeholder = 'e.g 09617178515'>".
                    "</div>".
                    
                    "<div class ='sub-div'>".
                        "<span class = 'field-title' id = 'radio-gender'> Gender </span>".
                        "<div class = 'radio-gender'>" .
                            "<input type=\"radio\" name=\"gender\" value='male'>" .
                            "<label for=\"male\">Male</label>" .
                            "<input type=\"radio\" name=\"gender\" value='female'>" .
                            "<label for=\"female\">Female</label>" .
                        "</div>".
                    "</div>" .

                "</form>".
                "</article>";

                return $tags;
            }

            function insertDependentsSection($name1, $name2, $name3, $depbdaymm, $depbdaydd, $depbdayyyyy, $i){
                $tags = 
                "<h2> DEPENDENT $i </h2>" .
                "<article class = 'field-container'>".
                    "<form action = '' method = \"post\">".
                        "<div class ='sub-div'>".
                           "<span class = 'field-title'> Given Name </span>".
                            "<input class = 'field-dependents' type = 'text' name = $name1 placeholder = 'e.g Louis Oliver'>".
                        "</div>".  

                        "<div class ='sub-div'>".
                            "<span class = 'field-title'> Middle Name </span>".
                            "<input class = 'field-dependents' type = \"text\" name = $name2 placeholder = 'e.g Bronto'>".
                        "</div>".  

                        "<div class ='sub-div'>".
                            "<span class = 'field-title'> Middle Name </span>".
                            "<input class = 'field-dependents' type = \"text\" name = $name3 placeholder = 'e.g Bronto'>".
                        "</div>".  

                        insertBdayDropdown($depbdaymm,$depbdaydd, $depbdayyyyy) .

                    "</div>".

                    "</form>".
                "</article>";

                return $tags;
            
            }

            function insertAgreeSection(){
                $tags = 
                "<div class = 'agree-container'>".
                    "<form method=\"post\" action=\"./index2.php\">".
                        "<div>".         
                            "<input id = 'cb' type=\"checkbox\" name=\"cbagree\" value=\"agree\">".
                                
                            "<label class ='label-agree'>I agree all the following information is correct.</label></div>".
                        "<input id = 'btn-agree' type=\"submit\" name=\"agree\" value=\"Submit\">".   
                    "</form>".
                "</div>";

                return $tags;
            }

            function CreateDataBase()
            {
                # CONNECT TO MYSQL

                $servername = "localhost";
                $username = "root";
                $password = "admin";
                $dbname = "formsdb";

                $conn = new mysqli($servername, $username, $password, $dbname);
                
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                    return;
                } 

                $sqlCreateTableClient = "CREATE TABLE IF NOT EXISTS Client(".
                        "client_id          INTEGER PRIMARY KEY AUTO_INCREMENT,".
                        "first_name         VARCHAR(20) NOT NULL,".  
                        "middle_name        VARCHAR(20) NOT NULL,".  
                        "last_name          VARCHAR(20) NOT NULL,".    
                        "house_no           VARCHAR(20) NOT NULL,".
                        "street             VARCHAR(20) NOT NULL,".
                        "village            VARCHAR(40),".
                        "city               VARCHAR(20) NOT NULL,".
                        "zip_code           VARCHAR(5) NOT NULL,".
                        "country            VARCHAR(20) NOT NULL,".
                        "email              VARCHAR(30),".
                        "gender             VARCHAR(7),".
                        "birthday           DATE".
                    ")";
                
                $sqlCreateTableDependencies = "CREATE TABLE IF NOT EXISTS Dependency(" .
                        "id                 INTEGER PRIMARY KEY AUTO_INCREMENT," .
                        "first_name         VARCHAR(20) NOT NULL," .  
                        "middle_name        VARCHAR(20) NOT NULL," .  
                        "last_name          VARCHAR(20) NOT NULL," .  
                        "birthday           DATE,".
                        "client_id          INTEGER,".

                        "CONSTRAINT client_id_fk FOREIGN KEY(client_id)".
                            "REFERENCES Client(id)".
                                "ON DELETE CASCADE".
                    ")";

                $conn -> query($sqlCreateTableClient);
                $conn -> query($sqlCreateTableDependencies);
            }

            function checkEmpty()
            {
                $required = array(
                    'fname','mname','lname',
                    'email', 'gender',
                    'bdaymm', 'bdaydd', 'bdayyyyy',
                    'hoseuno', 'street', 'subdiv',
                    'city', 'zipcode', 'country',
                    'cbagree'
                );

                for($i = 0; count($required) > $i; $i++)
                {
                    if(empty($_POST[$required[$i]])){
                        return false;
                    }
                    
                    return true;
                }
                
            }

            # First Name, Middle Name, Surname
            echo insertFormSection('First Name', 'Middle Name', 'Last Name', 'e.g Louis Oliver','e.g Bronto','e.g Gallardo', 'fname','mname','lname');
            
            echo "<hr>";

            # Email and Address
            echo insertEmailBdaySection();
            echo "<hr>";

            # Address
            echo insertFormSection('Unit/House/Lot/Block', 'Street', 'Subdivision/Village/Building', 'e.g L8 Blk16','Lemon Rd.','Palmera Hills 6', 'houseno','street','subdiv');
            
            echo insertCountrySection('City', 'Zip Code', 'Country/Region', 'e.g. Taytay', 'e.g. 1920', 'city', 'zipcode');

            echo "<hr>";

            echo insertContactandGender();
            
            for($i = 1; 3 >= $i; $i++){

                $depfname = 'dep'. $i .'fname';
                $depmname = 'dep'. $i .'mname';
                $deplname = 'dep'. $i .'lname';
                $depbdaymm = 'dep'. $i .'bdaymm';
                $depbdaydd = 'dep'. $i .'bdaydd';
                $depbdayyyyy = 'dep'. $i .'bdayyyyy';

                echo insertDependentsSection($depfname, $depmname, $deplname, $depbdaymm,  $depbdaydd, $depbdayyyyy, $i);

                echo "<hr>";
            }

            echo insertAgreeSection();

            CreateDataBase();
    
        ?>
    </div>
</body>
<script type ='module' src = 'script.js'></script>
</html>