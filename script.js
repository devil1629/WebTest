
// Generate alert when green box is clicked
function green(){
	alert("Green coulumn is clicked");      
}

// Generate alert when blue box is clicked
function blue(){
	var person = prompt("Please enter your name", "Zain Khan");
    
    if (person != null) {
        document.getElementById("demo").innerHTML =
        "Hello " + person + "! How are you today?";
    }
}

// Generate an animation that changes color over 3 secs when White box is clicked
function white(){                               //Animation done using jquery UI API
	$("#two").click(function(){
        $("#two").animate({backgroundColor: "yellow"},3000);
    });
}
