function pauseSlideshow() {
    document.querySelector('.slides').style.animationPlayState = 'paused'; 
}

function resumeSlideshow() {
    document.querySelector('.slides').style.animationPlayState = 'running'; 
}

function myFunction() {
    var x = document.getElementById("navbar");
    if (x.className === "topnav") {
      x.className += " responsive";
    } else {
      x.className = "topnav";
    }
  }

