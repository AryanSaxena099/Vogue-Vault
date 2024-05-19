var mode = document.querySelector(".mode");
var shopsec = document.querySelector(".shopersection");
var h = document.querySelector("h2");
var currmode ="dark";
mode.onclick=()=>{
    if(currmode=="dark")
    {
        currmode="light";
        h.style.color ="black";
        shopsec.style.backgroundColor="white";
    }
    else{
        currmode="dark";
        h.style.color ="white";
        shopsec.style.backgroundColor="rgba(0,0,0,0.821)";
    }
}