function getNextWed() {
    var d = new Date();
    var wed = d.setDate(d.getDate() + (3 + 7 - d.getDay()) % 7);
    var today = new Date();
    if (d.getDate() === today.getDate()) {
      return "Today";
    }
    return d.toDateString();
}

function logout()
{
    window.location.replace("logout.php");
}

function fixGrammer()
{
    var num = document.getElementById("num").innerHTML;
    if(num === "1") {
        return "student";
    }
    return "students";
}

function viewInfo() {
    var x = document.getElementById("info");
    if (x.style.display === "none") {
        x.style.display = "block";
        document.getElementById("roster").style.display = "none";
        document.getElementById("change").style.display = "none";
    }
}

function viewRoster() {
    var x = document.getElementById("roster");
    if (x.style.display === "none") {
        x.style.display = "block";
        document.getElementById("info").style.display = "none";
        document.getElementById("change").style.display = "none";
    }
}

function makeChange() {
    var x = document.getElementById("change");
    if (x.style.display === "none") {
        x.style.display = "block";
        document.getElementById("roster").style.display = "none";
        document.getElementById("info").style.display = "none";
    }
}

function approveChange() {
    
}


document.getElementById("date").innerHTML = getNextWed();
document.getElementById("grammer").innerHTML = fixGrammer();
document.getElementById("roster").style.display = "none";
document.getElementById("change").style.display = "none";
