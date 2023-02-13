

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

var yourDataBtn=document.getElementById("yourDataBtn");
var achivementsBtn=document.getElementById("achivementsBtn");
var appointmentBtn=document.getElementById("appointmentsBtn");


var yourDataSections=document.getElementById("yourData");
var achivementsSection=document.getElementById("achivementsSection");
var appointmentSection=document.getElementById("yourAppointments");


yourDataBtn.addEventListener("click",function(){
  yourDataSections.style.display="block";
  achivementsSection.style.display="none";
  appointmentSection.style.display="none";
});
achivementsBtn.addEventListener("click",function(){
  achivementsSection.style.display="block";
  yourDataSections.style.display="none";
  appointmentSection.style.display="none";
});

appointmentBtn.addEventListener("click",function(){
  appointmentSection.style.display="block";
  yourDataSections.style.display="none";
  achivementsSection.style.display="none";
});


/* window.onresize = function(){
  if(window.outerWidth > 577){
    yourDataSections.style.display="none";
    achivementsSection.style.display="none";
    appointmentSection.style.display="none";
  }
} */
if ($(window).width() < 577){
  achivementsBtn.click();
  achivementsBtn.focus();
}

window.onresize = function(){
  if(window.outerWidth < 577){
    achivementsBtn.click();
    achivementsBtn.focus();
  }
}
if ($(window).width() > 577){
  yourDataSections.style.display="none";
    achivementsSection.style.display="none";
    appointmentSection.style.display="none";
}

window.onresize = function(){
  if(window.innerWidth > 577){
    yourDataSections.style.display="none";
    achivementsSection.style.display="none";
    appointmentSection.style.display="none";
  }
}

