


window.onload = function() {

var parl=document.getElementsByClassName("bead");

for (i = 0; i < parl.length; i++) {
		parl[i].onclick = moveL;
	}

function moveL (bum){
	
	if (bum.target.style.cssFloat == "right") {
	    	bum.target.style.cssFloat = "left"; 
	    } else {
	    	bum.target.style.cssFloat = "right"; 
	    }
	}
}


