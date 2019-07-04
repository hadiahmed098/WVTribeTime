function submitChange(){
    
}

function logout()
{
    window.location.replace("logout.php");
}

function getNextWed() {
    var d = new Date();
    var wed = d.setDate(d.getDate() + (3 + 7 - d.getDay()) % 7);
    var today = new Date();
    if (d.getDate() === today.getDate()) {
      return "Today";
    }
    return d.toDateString();
}

//Student View Change Functions
function viewCurrent() {
    var x = document.getElementById("current");
    if (x.style.display === "none") {
        x.style.display = "block";
        document.getElementById("change").style.display = "none";
    }
}

function makeChange() {
    var x = document.getElementById("change");
    if (x.style.display === "none") {
        x.style.display = "block";
        document.getElementById("current").style.display = "none";
    }
}

document.getElementById("date").innerHTML = getNextWed();
document.getElementById("change").style.display = "none";
