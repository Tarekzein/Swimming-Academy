

var nav2=document.getElementsByClassName("navmob1")[0];

var button=document.getElementById("navButton2");
var myDiv = document.getElementsByClassName("navbar-collapse");
button.addEventListener("click",function(){
  var nav2=document.getElementsByClassName("navmob1")[0];
  nav2.style.display="block";
});
var nav=document.getElementsByClassName("navmob")[0];
var close=document.getElementById("closeButton2");
close.addEventListener("click" , function(){
  var nav=document.getElementsByClassName("navmob1")[0];
  nav.style.display="none";
});





//on resize event (NOTE:the 577 value is the same one used to display block the button in ur media query)
window.onresize = function(){
  if(window.innerWidth > 577){
    var nav=document.getElementsByClassName("navmob")[0];
    nav2.style.display="none";
    var nav=document.getElementsByClassName("navmob1")[0];
    nav2.style.display="none";
  }
}
