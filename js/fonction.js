var toReach = new Date("June 04 00:00:00 2021") ;

function countdown() {


    var now = new Date();

    var diff = Math.floor( (toReach.getTime() - now.getTime()) /1000 );
    if (diff > 0){
    var days = Math.floor(diff / (60*60*24));
    var hours = Math.floor(diff%86400 / 3600);
    var minutes = Math.floor(diff%3600 / 60);
    var seconds = diff % 60;

    document.getElementById("Days").innerHTML = days +" d";
    document.getElementById("Hours").innerHTML = hours+" h";
    document.getElementById("Minutes").innerHTML = minutes+" m";
    document.getElementById("Seconds").innerHTML = seconds +" s";
    } else {
    document.getElementById("countdown").innerHTML = "Ouvert !";
    }

};

setInterval(countdown, 1000);