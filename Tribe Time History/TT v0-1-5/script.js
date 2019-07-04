var x = document.getElementById("select")
var sClass = x.options[x.selectedIndex].text;
var rClass = x.options[x.selectedIndex].value;

document.getElementById("change").style.display = "none";
document.getElementById("date").innerHTML = getNextWed();
document.getElementById("class").innerHTML = sClass;
document.getElementById("room").innerHTML = rClass;

for(var i=0; i<8;i++)
{
    var opt = document.createElement('option');
    opt.value = "RNum";
    opt.innerHTML = "CName";
    x.appendChild(opt);
}
//TODO remove and replace with actual dynamic responses
document.getElementById("Name").innerHTML = "John Smith";
document.getElementById("idnum").innerHTML = "0000000";

document.getElementById("logout").onclick = function (){
    document.getElementById("body").innerHTML = "logout complete";
};
document.getElementById("approveChange").onclick = function()  {
    sClass = x.options[x.selectedIndex].text;
    rClass = x.options[x.selectedIndex].value;
    document.getElementById("class").innerHTML = sClass;
    document.getElementById("room").innerHTML = rClass;
    viewCurrent();
}


function getNextWed() {
    var d = new Date();
    d.setDate(d.getDate() + (3 + 7 - d.getDay()) % 7);
    return d.toDateString();
}

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