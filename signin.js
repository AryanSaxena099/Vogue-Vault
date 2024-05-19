var form=document.querySelector(".form");
form.onsubmit=(e)=>{
    var usrname =document.querySelector("#username").value;
    var pswd =document.querySelector("#password").value;
   
    var regularxUsr =/^[a-zA-Z0-9_]{3,20}$/;
    if (usrname.match(regularxUsr))
    {

    }
    else
    {
        e.preventDefault();//Stopped form submission
        alert("Enter a valid username");
    }
  }  
    // var pswdRegex =  /^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
    // if(pswd.match(pswdRegex))
    // {

    // }
    // else
    // {
    //     e.preventDefault();//Stopped form submission
    //     alert("Enter a valid password");
    // }
    
    
