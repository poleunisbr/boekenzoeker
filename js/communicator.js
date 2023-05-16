// Disable specefic interactions with the page
document.querySelectorAll('body').forEach(button => {
    button.onselectstart = function() { return false; };
    // Disable right click on the page
    button.oncontextmenu = function() { return false; };
    // Disable the text cursor on the page
    button.style.cursor = "default";
});

// Listen for a click on all buttons with class "button"
var buttons = document.getElementsByClassName("button");
var inCoolDown = false;

for (var i = 0; i < buttons.length; i++) {
    buttons[i].addEventListener("mouseenter", function() {
        if(!inCoolDown) {
            this.classList.add("button-hover");
        }
    });
    buttons[i].addEventListener("mouseleave", function() {
        if(!inCoolDown) {
            this.classList.remove("button-hover");
        }
    });

    buttons[i].addEventListener("click", function() {
        if (!inCoolDown) {
            inCoolDown = true;
            var lightID = this.id.split("-")[1];
            var hex = this.id.split("-")[2];
            hex = "#" + hex;
            
            doRequest(lightID);
            // this.classList.remove("bg-white");
            
            var floatingColor = this.querySelector(".floating-color");
            floatingColor.style.backgroundColor = hex;
            
            var animationDuration = 10000; // Animation duration in milliseconds
            var animationStep = 10; // Animation step in milliseconds
            var widthStep = 100 / (animationDuration / animationStep); // Calculate the width decrease per step
            
            var currentWidth = 100; // Initial width
            var interval = setInterval(function() {
                currentWidth -= widthStep; // Decrease the width per step
                
                if (currentWidth <= 0) {
                    clearInterval(interval); // Stop the interval when width reaches 0
                    currentWidth = 0; // Set the width to 0 to ensure it doesn't go below
                    inCoolDown = false;
                    // this.classList.add("bg-white");
                }
                
                floatingColor.style.width = currentWidth + "%";
            }.bind(this), animationStep);
            var self = this; // Store reference to 'this'
            setTimeout(function() {
                if(self.classList.contains("button-hover")) {
                    self.classList.remove("button-hover");
                }
                floatingColor.style.backgroundColor = "";
  
            }, animationDuration);
        }
    });
}

// This function sends a postrequest to /php/communicate.php with lightID as parameter and alerts the response
function doRequest(lightID) {
    var request = new XMLHttpRequest();
    request.open("POST", "./php/communicate.php", true);
    request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    request.onreadystatechange = function() {
        if (request.readyState == 4 && request.status == 200) {
            console.log(request.responseText);
        }
    }
    request.send("lightID=" + lightID);
}