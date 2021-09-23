

function printError(elemId, hintMsg) {
    document.getElementById(elemId).innerHTML = hintMsg;
}

//fucntion to validate vehicle form
function vehiclevalidate()
{
    var vehicle_no = document.vehicleForm.vehicle_no.value;
   // var vehicle_no =document.vehicleform..value;
         // Validate name
         var vehicle_noErr=true;
    if(vehicle_no == "") {
        printError("vehicle_noErr", "Please enter your name");
    //  alert("please fill out");
    } else {
       
            printError("vehicle_noErr", "");
            vehicle_noErr = false;
        }
    

}



// Defining a function to validate form 
function validateForm() {
    // Retrieving the values of form elements 
    var name = document.loginform.name.value;
    var password = document.loginform.password.value;
   	// Defining error variables with a default value
    var nameErr = passwordErr = true;
    
    // Validate name
    if(name == "") {
        printError("nameErr", "Please enter your name");
    } else {
        var regex = /^[a-zA-Z\s]+$/;                
        if(regex.test(name) === false) {
            printError("nameErr", "Please enter a valid name");
        } else {
            printError("nameErr", "");
            nameErr = false;
        }
    }


    if(password == "") {
        printError("passErr", "Please enter your password");
    } else {
        var regex = /^[a-zA-Z]\{7,14}$/;                
        if(regex.test(password) === false) {
            printError("passErr", "Please enter a valid Password");
        } else {
            printError("passErr", "");
            nameErr = false;
        }
    }
    
    // Validate email address3
    if(email == "") {
        printError("emailErr", "Please enter your email address");
    } else {
        // Regular expression for basic email validation
        var regex = /^\S+@\S+\.\S+$/;
        if(regex.test(email) === false) {
            printError("emailErr", "Please enter a valid email address");
        } else{
            printError("emailErr", "");
            emailErr = false;
        }
    }
    
    // Validate mobile number
    if(mobile == "") {
        printError("mobileErr", "Please enter your mobile number");
    } else {
        var regex = /^[1-9]\d{9}$/;
        if(regex.test(mobile) === false) {
            printError("mobileErr", "Please enter a valid 10 digit mobile number");
        } else{
            printError("mobileErr", "");
            mobileErr = false;
        }
    }
    
    // Validate country
    if(country == "Select") {
        printError("countryErr", "Please select your country");
    } else {
        printError("countryErr", "");
        countryErr = false;
    }
    
   
    
    // Prevent the form from being submitted if there are any errors
    if((nameErr || emailErr || mobileErr || countryErr || genderErr) == true) {
       return false;
    } else {
        // Creating a string from input data for preview
        var dataPreview = "You've entered the following details: \n" +
                          "Full Name: " + name + "\n" +
                          "Email Address: " + email + "\n" +
                          "Mobile Number: " + mobile + "\n" +
                          "Country: " + country + "\n" +
                          "Gender: " + gender + "\n";
        if(hobbies.length) {
            dataPreview += "Hobbies: " + hobbies.join(", ");
        }
        // Display input data in a dialog box before submitting the form
        alert(dataPreview);
    }
};