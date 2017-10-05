function Subscribe() {
    if(confirm("Subscribe to our newsletter:\nWant to be notified when new promotions are available?\nSubscribe Now!")==true){
        alert("You have successfully subscribed to our newsletter.\n Welcome to the Deallo family!");
    }
}

function paymentconfirm(){
    if(confirm("Confirm payment?")==true){
        alert("You have successfully purchased the items");
    }
}

function regisvalid(){
    var pass=document.getElementById("password").value;
    var repass=document.getElementById("repassword").value;
    if (pass != repass){
        alert("password does not match!");
        return false;
    }else{
        alert("Thank You,\nYou have successfully registered.");
        return true;
    }
}