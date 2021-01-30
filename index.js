function display1() {
	var p = document.getElementById("project1");
	var d = document.getElementById("dotsp1");
	var b = document.getElementById("btnp1");
	if(p.style.display === "none") {
		d.style.display = "none";
    	b.innerHTML = "View less";
    	p.style.display = "inline";
	}  
	else{
		d.style.display = "inline";
    	b.innerHTML = "View more"; 
    	p.style.display = "none";
	}

}

function display2() {
	var p = document.getElementById("project2");
	var d = document.getElementById("dotsp2");
	var b = document.getElementById("btnp2");
	if(p.style.display === "none") {
		d.style.display = "none";
    	b.innerHTML = "View less";
    	p.style.display = "inline";
	}  
	else{
		d.style.display = "inline";
    	b.innerHTML = "View more"; 
    	p.style.display = "none";
	}
}
function redirect()
{
	const message = document.getElementById("contact_message").value;
	const name = document.getElementById("contact_name").value;
	const subject = document.getElementById("contact_subject").value;
    window.location.href = `mailto:sandeepkr1084@gmail.com?subject=${subject}&body=Hi Sandeep%0A${message} %0A%0AThanks %0A ${name}`;
}

