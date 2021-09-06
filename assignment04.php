<?php


// BACK END CODE


$servername = "8000";         //connect to local server
$username = "root";                //Username log in 
$password = "test1234";            //Password 
$db = "USERS";                     //Database 

$conn = mysqli_connect($servername, $username, $password, $db); //Make connection to data base

if($conn){
    echo "Successful connection to $servername"; //Success message will appear if connected to database. Message appears when a request is made from AJAX, 
    echo "\n";
   
}


//=========== BELOW IS CREATE & RETRIEVE COMPONENTS OF CRUD ACTIVITY. THIS IS SET UP SPECIFICALLY FOR AJAX CALL IN THE FRONT END. PLEASE UNCOMMENT AS FAR AS LINE 147 ============================ 


// Following if statement checks if varaibles from the front end that are required details, are not empty.


if (!empty($_POST['title'])&&!empty($_POST['firstname']) && !empty($_POST['surname']) && !empty($_POST['mobile']) &&
    !empty($_POST['email']) && !empty($_POST['address1']) && !empty($_POST['address2']) && !empty($_POST['town']) && !empty($_POST['county'])
    && !empty($_POST['deliveryAddress1']) && !empty($_POST['deliveryTown']) && !empty($_POST['deliveryCounty'])) 
    
    
    {
    
    //Variable names are passed from the frontend form, submitted by the AJAX POST call and stored in following values

    $title = $_POST['title'];
    $firstname = $_POST['firstname'];
    $surname = $_POST['surname'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $address1 = $_POST['address1'];
    $address2 = $_POST['address2'];
    $town = $_POST['town'];
    $county = $_POST['county'];
    $eircode = $_POST['eircode'];
    $deliveryAddress1 = $_POST['deliveryAddress1'];
    $deliveryAddress2 = $_POST['deliveryAddress2'];
    $deliveryTown = $_POST['deliveryTown'];
    $deliveryCounty = $_POST['deliveryCounty'];
    $deliveryEircode = $_POST['deliveryEircode'];


    //php PDO SQL statement below in order to make SQL insert query to database.
    //15 values to insert in total, although posting of insert table will occur if all variables in the if statement above are not empty.
    
    $stmt = $conn->prepare("INSERT INTO Details(title, firstname, surname, mobile, emailAddress, addressLine1, addressLine2, town, county, eircode, 
    deliveryAddressLine1, deliveryAddressLine2, deliveryTown, deliveryCounty, deliveryEircode)
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");


    //After preparing statement, the variables are binded to the statement above, e.g. the firstname variable in place of firstname in the statement above    
    $stmt->bind_param("sssssssssssssss", $title, $firstname, $surname, $mobile, $email, $address1, $address2, $town, $county, $eircode, $deliveryAddress1, 
    $deliveryAddress2, $deliveryTown, $deliveryCounty, $deliveryEircode);

    //If the user has been added successfully to the database a message will return to clarify the success
    if($stmt->execute()){

        echo "User $firstname $surname has been added to the database";
        echo "\n";
        
    }    

    $stmt->close(); //Close statement

} //End of if statement for posting to database

else{
   
    echo "User data has not been added to the database, please recheck required form fields are full.";
    echo "\n";
}



if (isset($_POST['nameQuery'])) { //Check if front end nameQuery has been set, if so execute following code to retrieve data from server
    $nameQuery = $_POST['nameQuery'];


    $sql2 = "SELECT * FROM Details WHERE firstname = '".$nameQuery."'"; //Make SQL statement for finding user in USER database
    

    $result = mysqli_query($conn, $sql2); //Query database with the query and store in $result variable

  

    //Checks if there are any rows returning from the USER database. Will then echo out each row and the column variables from MySql
    //Echo of the data returned will comeback to the AJAX call on the front end displayed on the page and in console.
   
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "==============Database User Retrieved==============";
            echo "\n";
            echo mysqli_num_rows($result);
            echo " rows affected";
            echo "\n";   
            echo "Title: ";    
            echo $row['title'];
            echo "\n";
            echo "Firstname: ";
            echo $row['firstname'];
            echo "\n";
            echo "Surname: ";
            echo $row['surname'];
            echo "\n";
            echo "Mobile: ";
            echo $row['mobile'];
            echo "\n";
            echo "Email Address: ";
            echo $row['emailAddress'];
            echo "\n";
            echo "Address Line 1: ";
            echo $row['addressLine1'];
            echo "\n";
            echo "Address Line 2: ";
            echo $row['addressLine2'];
            echo "\n";
            echo "Town: ";
            echo $row['town'];
            echo "\n";
            echo "County: ";
            echo $row['county'];
            echo "\n";
            echo "Eircode: ";
            echo $row['eircode'];
            echo "\n";
            echo "==================================================";
            echo "\n";
        }
        
    } 
    
    else {
        echo "No results!";
    }


} 

//END OF CREATING A USER ON MYSQL VIA AJAX FRONTEND CALL


// //============================================BACKEND TO RUN ON COMMAND LINE. PLEASE COMMENT OUT LINE 19-147 ABOVE, AND UNCOMMENT THE REST OF THE BELOW===================================================//
// //PLEASE UNCOMMENT CODE BELOW IF CLI IS BEING USED TO RUN assignment04.php
// //BELOW CODE IS TO RUN THE CREATE COMPONENT ON THE COMMAND LINE (line 152 onwards)


// ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// $title = "Mr"; //Harcoded data in order to insert USER into database
// $firstname = "Joe";
// $surname = "Bloggs";
// $mobile = "0875935961";
// $email = "joeBlagging@gmail.com";
// $address1 = "1";
// $address2 = "Mulview street";
// $town = "Galway City";
// $county = "Co. Galway";
// $eircode = "A53 FT72";
// $deliveryAddress1 = "1";
// $deliveryAddress2 = "Mulview street";
// $deliveryTown = "Galway City";
// $deliveryCounty = "Co. Galway";
// $deliveryEircode = "A53 FT72";


// //Same as front end, required variables must not be null in order to execute following sql statement.
// if ((!empty($title)) && (!empty($firstname)) && (!empty($surname)) && (!empty($mobile)) && (!empty($email)) && (!empty($address1)) && (!empty($address2)) && (!empty($town)) && (!empty($county)) && (!empty($address1)) 
//     &&  (!empty($deliveryAddress2)) && (!empty($deliveryAddress2)) && (!empty($deliveryTown)) && (!empty($deliveryCounty))) 
    
//     {

//     //php PDO SQL statement below in order to make SQL insert query to database.
//     //15 values to insert in total, although posting of insert table will occur if all variables in the if statement above are not empty.
//     $stmt = $conn->prepare("INSERT INTO Details(title, firstName, surname, mobile, emailAddress, addressLine1, addressLine2, town, county, eircode, 
//     deliveryAddressLine1, deliveryAddressLine2, deliveryTown, deliveryCounty, deliveryEircode)
//     VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");



//     $stmt->bind_param("sssisssssssssss", $title, $firstname, $surname, $mobile, $email, $address1, $address2, $town, $county, $eircode, $deliveryAddress1, 
//     $deliveryAddress2, $deliveryTown, $deliveryCounty, $deliveryEircode);

//     //If the user has been added successfully to the database a message will return to clarify the success    
//     if($stmt->execute()){
//         echo "User: $firstname $surname has been added to the USER database";
//         echo "\n";
//     }

//     else{
//         echo "$firstname $surname has not been added to USER database";
//     }
 
//     $stmt->close(); //Close statement and reset

// } 

// else{ echo "Please make sure variables contain values for insertion";} //If insertion does not occur due to missing values else statement executes


// ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// ////RETRIEVE component of CRUD activity

// $nameQuery = "Christopher";

// if (!empty($nameQuery)) {
    

//     $sql2 = "SELECT * FROM Details WHERE firstname = '".$nameQuery."'";
    

//     $result = mysqli_query($conn, $sql2);

  
//     $data = array();
//     if (mysqli_num_rows($result) > 0) {
//         while ($row = mysqli_fetch_assoc($result)) {
//             echo "==============Database User Retrieved==============";
//             echo "\n";    
//             echo $row['title'];
//             echo "\n";
//             echo $row['firstname'];
//             echo "\n";
//             echo $row['surname'];
//             echo "\n";
//             echo $row['mobile'];
//             echo "\n";
//             echo $row['emailAddress'];
//             echo "\n";
//             echo $row['addressLine1'];
//             echo "\n";
//             echo $row['addressLine2'];
//             echo "\n";
//             echo $row['town'];
//             echo "\n";
//             echo $row['county'];
//             echo "\n";
//             echo $row['eircode'];
//             echo "\n";
//             echo "===================================================";
//             echo "\n";
//         }
        
//     }  
//     else {
//         echo "No results for $nameQuery!";    
//     }


// } 

// ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


// // Beginning of update statement for UPDATE process of CRUD

// $updateName="Christopher"; //Hardcoded variables for the following SQL statement
// $updatePhone="0872680572";
// $updateEmail="chrissb8@hotmail.com";
// $title = "Mr";

// if (!empty($updateName)) {
    
//     $sql3 = "UPDATE Details SET mobile= '$updatePhone', emailAddress = '$updateEmail', title = '$title' where firstname = '$updateName'";  //mysql statement in order to execute update 

//     $query = mysqli_query($conn, $sql3); //Query mysql database with above statement

   
//     //Print following statements if the user UPDATED has been successful or not
//     if ($query) {
//         echo "Successful Update for $updateName";
        //    echo "\n";     
//     } else {
//         echo "Not successful, no such user $updateName exists";
//     }
// } 


// // End of update statement

// ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// ////Beginning of DELETE part of CRUD activities

// $deleteName="Christopher"; //User to delete
// $deleteEmail = "chrissb8@hotmail.com"; //Email parameter
// $deleteTitle= "Mr"; //title parameter

// if ((!empty($deleteName)) && (!empty($deleteEmail))&& (!empty($deleteTitle))){ //Ensure following fields are not empty for delete statement
    
//     $sql4 = "DELETE FROM Details WHERE firstname ='$deleteName' AND emailAddress='$deleteEmail' AND title = '$deleteTitle'"; // Delete statement for sql USER database

//     $deleteQuery = mysqli_query($conn, $sql4); //Query of the database with the above statement

//     if ($deleteQuery) { //If  Query is successful then print following message
//         echo "successful deletion of $deleteName";
//         echo "\n";
//     } 
   
// }

// else{
//     echo "error, please check that the details you have provided are correct";
// }
// ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
