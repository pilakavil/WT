function mylogin() {
	xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function(){
		if (this.readyState == 4 && this.status == 200) {
			compareXML(this);
		}
	};
	xhttp.open("GET", "database.xml", true);
    xhttp.send();
}
function compareXML (xmlObject) {
	flag = 0;
	xmlDoc = xmlObject.responseXML;

	username = document.getElementById("username").value;
	password = document.getElementById("password").value;
	x = xmlDoc.getElementsByTagName("account");

	for(i = 0; i < x.length; i++) {
		name = x[i].getElementsByTagName("username")[0].childNodes[0].nodeValue;
		pass = x[i].getElementsByTagName("password")[0].childNodes[0].nodeValue;

		if (username.localeCompare(name)) {}
		else{
			if (password.localeCompare(pass)) {}
			else
				flag = 1;
		}
	}
	if(flag == 1){
		window.open("home.html","_self");
	}
	else
		window.alert("Username/Password Incorrect")
}