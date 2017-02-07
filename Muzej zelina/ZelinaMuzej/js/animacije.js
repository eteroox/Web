window.onscroll = function() {myFunction()};


function myFunction() {
	if(window.innerWidth > 400){
    if (document.body.scrollTop > 0 || document.documentElement.scrollTop > 30) {
        document.getElementById("prvi").className = "dva";
    } else {
        document.getElementById("prvi").className = "";
    }
	
	 if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 400) {
        document.getElementById("dva").className = "cetiri";
    } else {
        document.getElementById("dva").className = "";
    }
	
	if (document.body.scrollTop > 900 || document.documentElement.scrollTop > 900) {
        document.getElementById("tri").className = "dva";
    } else {
        document.getElementById("tri").className = "";
    }
	
	if (document.body.scrollTop > 1300 || document.documentElement.scrollTop > 1300) {
        document.getElementById("cetiri").className = "cetiri";
    } else {
        document.getElementById("cetiri").className = "";
    }
	
	if (document.body.scrollTop > 1500 || document.documentElement.scrollTop > 2000) {
        document.getElementById("pet").className = "pet";
    } else {
        document.getElementById("pet").className = "";
    }
	
	if (document.body.scrollTop > 2400 || document.documentElement.scrollTop > 2400) {
        document.getElementById("sest").className = "cetiri";
    } else {
        document.getElementById("sest").className = "";
    }
	
	if (document.body.scrollTop > 2900 || document.documentElement.scrollTop > 2900) {
        document.getElementById("sedam").className = "dva";
    } else {
        document.getElementById("sedam").className = "";
    }
	
	if (document.body.scrollTop > 3400 || document.documentElement.scrollTop > 3400) {
        document.getElementById("osam").className = "cetiri";
    } else {
        document.getElementById("osam").className = "";
    }
	
	if (document.body.scrollTop > 3900 || document.documentElement.scrollTop > 3900) {
        document.getElementById("devet").className = "dva";
    } else {
        document.getElementById("devet").className = "";
    }
	
	if (document.body.scrollTop > 4400 || document.documentElement.scrollTop > 4400) {
        document.getElementById("deset").className = "cetiri";
    } else {
        document.getElementById("deset").className = "";
    }
	
	if (document.body.scrollTop > 4800 || document.documentElement.scrollTop > 5000) {
        document.getElementById("jedanaest").className = "dva";
    } else {
        document.getElementById("jedanaest").className = "";
    }
	
	if (document.body.scrollTop > 5200 || document.documentElement.scrollTop > 5500) {
        document.getElementById("dvanaest").className = "cetiri";
    } else {
        document.getElementById("dvanaest").className = "";
    }
	
	if (document.body.scrollTop > 6000 || document.documentElement.scrollTop > 6000) {
        document.getElementById("trinaest").className = "dva";
    } else {
        document.getElementById("trinaest").className = "";
    }
	
	if (document.body.scrollTop > 6500 || document.documentElement.scrollTop > 6500) {
        document.getElementById("cetrnaest").className = "cetiri";
    } else {
        document.getElementById("cetrnaest").className = "";
    }
	
	if (document.body.scrollTop > 7000 || document.documentElement.scrollTop > 7000) {
        document.getElementById("petnaest").className = "dva";
    } else {
        document.getElementById("petnaest").className = "";
    }
	
	if (document.body.scrollTop > 7200 || document.documentElement.scrollTop > 7500) {
        document.getElementById("sesnaest").className = "cetiri";
    } else {
        document.getElementById("sesnaest").className = "";
    }
}
	
}