var mode = document.querySelector(".mode");
var shopsec = document.querySelector(".shopersection");
var h = document.querySelectorAll("h2");
var currmode ="dark";
mode.onclick=()=>{
    if(currmode=="dark")
    {
        currmode="light";
        h[0].style.color ="black";
        h[1].style.color ="black";
        h[2].style.color ="black";
        shopsec.style.backgroundColor="white";
    }
    else{
        currmode="dark";
        h[0].style.color ="white";
        h[1].style.color ="white";
        h[2].style.color ="white";
        shopsec.style.backgroundColor="rgba(0,0,0,0.821)";
    }
}