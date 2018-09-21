"use strict";
var $ = function(id) {
    return document.getElementById(id);
};
var joinList = function() {
    var emailAddress1 = $("email_address1").value;
    var lastName = $("last_name").value;
    var firstName = $("first_name").value;
    var isValid = true;

    // validate the first entry
    if (emailAddress1 === "") { 
        $("email_address1").nextElementSibling.firstChild.nodeValue = 
            "This field is required.";
        isValid = false;
    } else {
        $("email_address1").nextElementSibling.firstChild.nodeValue = "";
    } 

    // validate the second entry
    if (lastName === "") { 
        $("last_name").nextElementSibling.firstChild.nodeValue = 
            "This field is required.";
        isValid = false; 
    
    } else {
        $("last_name").nextElementSibling.firstChild.nodeValue = "";
    }

    // validate the third entry  
    if (firstName === "") {
        $("first_name").nextElementSibling.firstChild.nodeValue = 
            "This field is required.";
        isValid = false;
    } else {
        $("first_name").nextElementSibling.firstChild.nodeValue = "";
    }  

    $("comments").nextElementSibling.firstChild.nodeValue = "";

    // submit the form if all entries are valid
    if (isValid) {
        $("email_form").submit(); 
    }
};

window.onload = function() {
    $("join_list").onclick = joinList;
    $("email_address1").focus();
};
