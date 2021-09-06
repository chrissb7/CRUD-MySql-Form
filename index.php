<!DOCTYPE html>
<!------------------------------------Front end Code---------------------------------->
<!-- Please use on Google chrome -->
<html>

<head>
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- Use W3.CSS for the Modal -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

 
    </head>
    
    <body>
    <form class="form-horizontal" id = "addUserForm" method="POST">
    <fieldset>
    
   <!-- Form created for the front end -->
   <!-- Inputs fields are taken for use in the ajax call -->
   <!-- 2 seperate form, one for submission and one form for retrieving -->


    <!-- Form Name -->
    <legend>Form: Assignment 04</legend>
     
    <!-- Button Drop Down -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="buttondropdown">Title</label>
      <div class="col-md-4">
        <div class="input-group">
          <input id="title" name="title" class="form-control" placeholder="Please select title" type="text">
          <div class="input-group-btn">
            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
              -
              <span class="caret"></span>
            </button>
            <ul class="dropdown-menu pull-right">
              <li><a href="#">Mx</a></li>
              <li><a href="#">Ms</a></li>
              <li><a href="#">Mr</a></li>
              <li><a href="#">Mrs</a></li>
              <li><a href="#">Miss</a></li>
              <li><a href="#">Dr</a></li>
              <li><a href="#">Other</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="firstName">First Name(s)</label>  
      <div class="col-md-4">
      <input id="firstName" name="firstName" type="text" placeholder="First Name(s) (required)" class="form-control input-md" required="">
        
      </div>
    </div>
    
    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="surname">Surname</label>  
      <div class="col-md-4">
      <input id="surname" name="surname" type="text" placeholder="Surname (required)" class="form-control input-md" required="">
        
      </div>
    </div>
    
    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="mobile">Mobile</label>  
      <div class="col-md-4">
      <input id="mobile" name="mobile" type="text" placeholder="Mobile no. (required)" class="form-control input-md" required="">
        
      </div>
    </div>
    
    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="email">Email Address</label>  
      <div class="col-md-4">
      <input id="email" name="email" type="text" placeholder="Email Address (required)" class="form-control input-md" required="">
        
      </div>
    </div>
    
    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="address1">Address Line 1</label>  
      <div class="col-md-4">
      <input id="address1" name="address1" type="text" placeholder="Address Line 1 (required)" class="form-control input-md" required="">
        
      </div>
    </div>
    
    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="address2">Address Line 2</label>  
      <div class="col-md-4">
      <input id="address2" name="address2" type="text" placeholder="Address Line 1 (required)" class="form-control input-md" required="">
        
      </div>
    </div>
    
    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="town">Town</label>  
      <div class="col-md-4">
      <input id="town" name="town" type="text" placeholder="Town (required)" class="form-control input-md" required="">
        
      </div>
    </div>
    
    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="county">County/City</label>  
      <div class="col-md-4">
      <input id="county" name="county" type="text" placeholder="County/City (required)" class="form-control input-md" required="">
        
      </div>
    </div>
    
    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="eircode">Eircode</label>  
      <div class="col-md-4">
      <input id="eircode" name="eircode" type="text" placeholder="Eircode" class="form-control input-md">
        
      </div>
    </div>

    <br>

    <h1 style="text-align:center"> Delivery Address </h1>

    <br>

      <!-- Text input-->
      <div class="form-group">
      <label class="col-md-4 control-label" for="deliveryAddress1">Address Line 1</label>  
      <div class="col-md-4">
      <input id="deliveryAddress1" name="deliveryAddress1" type="text" placeholder="Delivery address Line 1 (required)" class="form-control input-md" required="">
        
      </div>
    </div>
    
    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="address2">Address Line 2</label>  
      <div class="col-md-4">
      <input id="address2" name="deliveryAddress2" type="text" placeholder="Delivery Address2 (required)" class="form-control input-md" required="">
        
      </div>
    </div>
    
    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="town">Town</label>  
      <div class="col-md-4">
      <input id="deliveryTown" name="deliveryTown" type="text" placeholder="Delivery Town (required)" class="form-control input-md" required="">
        
      </div>
    </div>
    
    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="county">County/City</label>  
      <div class="col-md-4">
      <input id="deliveryCounty" name="deliveryCounty" type="text" placeholder="County/City (required)" class="form-control input-md" required="">
        
      </div>
    </div>
    
    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="eircode">Eircode</label>  
      <div class="col-md-4">
      <input id="deliveryEircode" name="deliveryEircode" type="text" placeholder="Eircode" class="form-control input-md">
        
      </div>
    </div>
    
    <!-- Button -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="submit">Submit User</label>
      <div class="col-md-4">
        <button id="submitbtn" name="submitbtn" class="btn btn-primary">Submit</button>
      </div>
    </div>
    
    </fieldset>
    </form>

<form class="form-horizontal" method="POST">
<fieldset>


<legend>Retrieve User</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nameDatabase">Search Name</label>  
  <div class="col-md-4">
  <input id="nameDatabase" name="nameDatabase" type="text" placeholder="Input Name" class="form-control input-md">
  </div>
</div>
<br>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton">Query Database</label>
  <div class="col-md-4">
    <button id="submitbtn2" name="submitbtn2" class="btn btn-primary">Query</button>
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="showUserDatabase">Show User Data</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="showUserDatabase" name="showUserDatabase"></textarea>
  </div>
</div>

</fieldset>
</form>

    



    
 <!-- Reference: Prof.John Keating/CS230 provided the bootstrap and form template -->
   
   <script>
        $(document).ready(function () {
            $('#submitbtn').on("click", function (e) { //Event handler, Button clicked on 1st form will send data to the user database provided all required fields are filled in
                
                //Take input variables from the form and store in a JSON object.
                    const dataObj = {                    
                    title : $('input[name=title]').val(),
                    firstname :$('input[name=firstName]').val(),
                    surname : $('input[name=surname]').val(),
                    email : $('input[name=email]').val(),
                    mobile : $('input[name=mobile]').val(),
                    address1 : $('input[name=address1]').val(),
                    address2 : $('input[name=address2]').val(),
                    town : $('input[name=town').val(),
                    county : $('input[name=county]').val(),
                    eircode : $('input[name=eircode]').val(),
                    deliveryAddress1 : $('input[name=deliveryAddress1]').val(),
                    deliveryAddress2 : $('input[name=deliveryAddress2]').val(),
                    deliveryTown : $('input[name=deliveryTown').val(),
                    deliveryCounty : $('input[name=deliveryCounty]').val(),
                    deliveryEircode : $('input[name=deliveryEircode]').val(),
                    }
              
                $.ajax({ //ajax function to allow asynchronous javascript i.e. no reloading of page
                  url: "assignment04.php", //Send the data to the following URL
                  type: "POST", //POST method, more secure
                    data: dataObj, // JSON object above with variables sent to the backend assignment04.php file
                      })
                      
                    .done(function (data) { 
                        // reset the form for next time!
                        console.log(data); //Response data from the backend server is console logged
                        alert(data); //Alert is also issued to show visibly whether a user has been added or not
                        $('input[name=firstName]').val('');
                        $('input[name=surname]').val('');
                        $('input[name=email]').val('');
                        $('input[name=mobile]').val('');
                        $('input[name=address1]').val('');
                        $('input[name=address2]').val('');
                        $('input[name=town').val('');
                        $('input[name=county]').val('');
                        $('input[name=eircode]').val('');
                        $('input[name=deliveryAddress1]').val('');
                        $('input[name=deliveryAddress2]').val('');
                        $('input[name=deliveryTown').val('');
                        $('input[name=deliveryCounty]').val('');
                        $('input[name=deliveryEircode]').val('');

                        // show confirmation message from API
                        // showUserModal(data);
                    });
                e.preventDefault(); // when method is called, the default action of the event will not be triggered.
                                    // meand that clicked submit button will not take the browser to a new URL.
            });


            
            $('#submitbtn2').on("click", function (e) { //Event handler function for the 2nd button to submit a retrieve request from the Database

              const textbox = {nameQuery: $('input[name=nameDatabase]').val()} //userinput taken from the 2nd form  
               
              $.ajax({
                  url: "assignment04.php",  //w//Send the data to the following URL
                  type:"POST", //POST method again, as more secure, used for retrieve
                  data: textbox, //Data being sent to backend
                  })
                    .done(function (data) {
                        $('#showUserDatabase').val(data);  //Data is returned and places in the showUserData text box
                        console.log(data); //Data is also logged to the console
                    });
                e.preventDefault(); // when method is called, the default action of the event will not be triggered.
                                    
            });

            $("#showUserDatabase").on("input", function () {
                this.style.height = (this.scrollHeight) + "px;overflow-y:hidden;";
                this.style.height = "auto";
                this.style.height = (this.scrollHeight) + "px";
            });

        });

       

    </script>


</body>

</html>
    
    