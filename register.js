// alert("You opened register"); 
var form=document.querySelector("#form");
form.onsubmit=(e)=>{
    var usrname =document.querySelector("#username").value;
    var pswd =document.querySelector("#pass").value;
    var repass =document.querySelector("#repass").value;
    var ph = document.querySelector("#pno").value;
    var add= document.querySelector("#desc").value;
    var email = document.querySelector("#email").value;
    var regularxUsr =/^[a-zA-Z0-9_]{3,20}$/;
    if (usrname == "" || pswd == "" || repass == "" || ph == "" || add == "" || email == "") {
        e.preventDefault(); // Stop form submission
        alert("Please fill in all fields");
        
    }
    else
    {
        if (usrname.match(regularxUsr))
        {

        }
        else
        {
            e.preventDefault();//Stopped form submission
            alert("Enter a valid username");
        }
        
        var pswdRegex = /^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
        if(pswd.match(pswdRegex))
        {

        }
        else
        {
            e.preventDefault();//Stopped form submission
            alert("Enter a valid password");
        }
        
        if (repass.match(pswdRegex))
        {

        }
        else
        {
            e.preventDefault();//Stopped form submission
            alert("Enter a valid repassword");
        }
        
        var regPh = /^\d{10}$/;
        if(ph.match(regPh))
        {

        }
        else
        {
            e.preventDefault();//Stopped form submission
            alert("Enter a valid Phone number");
        }
        
        var regAdd = /^[a-zA-Z0-9\s\.,#-]+$/;
        if(add.match(regAdd))
        {

        }
        else{
            e.preventDefault();//Stopped form submission
            alert("Enter a valid Address");
        }
        
        var regEmail = /^[a-zA-Z0-9+_.-]+@[a-zA-Z0-9.-]+$/;
        if(email.match(regEmail))
        {

        }
        else{
            e.preventDefault();//Stopped form submission
            alert("Enter a valid email");
        }

    }
    
}