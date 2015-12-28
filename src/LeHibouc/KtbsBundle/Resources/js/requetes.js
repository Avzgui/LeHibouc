(function() {
	
	var actionSelect = document.getElementById("action"),
		url = "http://dsi-liris-silex.univ-lyon1.fr/m2ia/ktbs/Hibouc/",
		
		divCreationTrc = document.getElementById("creation_trace"),
		divCreationObs = document.getElementById("creation_obsels"),
		
		nomTrace = document.getElementById("nomTrace"),
		nomTrace_o = document.getElementById("nomTrace_o"),
		
		nomObsel = document.getElementById("nomObsels"),
		typeObsel = document.getElementById("typeObsels"),
		
		reset = document.getElementById("reset"),
		reset_o = document.getElementById("reset_o"),
		
		bget = document.getElementById("bGET"),
		bpost = document.getElementById("bPOST"),
		bpost_o = document.getElementById("bPOST_o"),
		bput = document.getElementById("bPUT"),
		method = "",
		action = "";
				
	function afficherAction(evt){
		action = actionSelect.value;
		switch(actionSelect.value){
			case "creerTr":
				if(divCreationObs.hidden === true && divCreationTrc.hidden !== false){
					divCreationTrc.hidden = false;
				}
				break;
			case "creerObs":
				if(divCreationTrc.hidden === true && divCreationObs.hidden !== false){
					divCreationObs.hidden = false;
				}
				break;
			case "getTr":
				if(divCreationObs.hidden === true && divCreationTrc.hidden !== false){
					divCreationTrc.hidden = false;
				}
				break;
			case "getObs":
				if(divCreationObs.hidden === true && divCreationTrc.hidden !== false){
					divCreationTrc.hidden = false;
				}
				break;
			default :
		}
	}
	
	function envoyerRequete(evt) {
			
		switch(action){
			case "creerTr":
				
				method = "POST";
				var Trace = {
					"@id": nomTrace.value + "/",
					"@type": "StoredTrace",
					"hasModel": "http://dsi-liris-silex.univ-lyon1.fr/m2ia/ktbs/Hibouc/traceUtilisateurs/",
					"origin": "1970-01-01T00:00:00Z"
				};
				postTrace(Trace);
				break;
				
			case "creerObs":
				
				method = "POST";
				//Rajouter attribut pour plus tard TODO
				alert("cc " + nomTrace_o.value);
				var Obsel = {
					"@id": nomObsel.value,
					"@type": "m:"+typeObsel.value,
					"begin": 1361462605000,
					"end":   1361462647000
				};
				postObsel(Obsel,nomTrace_o.value);
				break;
				
			case "getTr":
				getTrace();
				break;
			case "getObs":
				getObsels(nomTrace.value);
				break;
			default :
		}
	
	}
	
	function getTrace(){
		var req = new XMLHttpRequest();
		
		req.onreadystatechange = function() {
    		if (req.readyState == XMLHttpRequest.DONE) {
    			var _traces = JSON.parse(req.responseText);
        		alert(JSON.stringify(_traces));
        		return _traces;
    		}
		}
		req.open("GET","http://dsi-liris-silex.univ-lyon1.fr/m2ia/ktbs/Hibouc/");
		
		req.setRequestHeader("cache-control", "private;no-cache");
        req.setRequestHeader("accept", "application/json");
        req.setRequestHeader("content-type", "application/json");
        
        req.send();
	}
	
	function getObsels(nomTrace){
		var req = new XMLHttpRequest();
		
		req.onreadystatechange = function() {
    		if (req.readyState == XMLHttpRequest.DONE) {
    			var _obsels = JSON.parse(req.responseText);
        		//alert(JSON.stringify(_obsels));
        		return _obsels;
    		}
		}
		req.open("GET","http://dsi-liris-silex.univ-lyon1.fr/m2ia/ktbs/Hibouc/"+nomTrace+"/@obsels");
		
		req.setRequestHeader("cache-control", "private;no-cache");
        req.setRequestHeader("accept", "application/json");
        req.setRequestHeader("content-type", "application/json");
        
        req.send();
	}
	
	function postObsel(Obsel,nomTrace){
		var req = new XMLHttpRequest();
		
		req.onreadystatechange = function() {
    		if (req.readyState == XMLHttpRequest.DONE) {
    			var _obsels = JSON.parse(req.responseText);
        		alert(JSON.stringify(_obsels));	
    		}
		}
		req.open("POST","http://dsi-liris-silex.univ-lyon1.fr/m2ia/ktbs/Hibouc/"+nomTrace+"/");
		
		req.setRequestHeader("cache-control", "private;no-cache");
        req.setRequestHeader("accept", "application/json");
        req.setRequestHeader("content-type", "application/json");
        
        alert(JSON.stringify(Obsel));
        req.send(JSON.stringify(Obsel));
	}
	
	function postTrace(Trace){
		var req = new XMLHttpRequest();
		
		req.open("POST","http://dsi-liris-silex.univ-lyon1.fr/m2ia/ktbs/Hibouc/");
		
		req.setRequestHeader("cache-control", "private;no-cache");
        req.setRequestHeader("accept", "application/json");
        req.setRequestHeader("content-type", "application/json");
     	   
        req.send(JSON.stringify(Trace));
	} 
	
	function renitialiser(){
		location.reload();
	}
	
	reset.addEventListener("click",renitialiser);
	reset_o.addEventListener("click",renitialiser);
	
	bget.addEventListener("click", envoyerRequete);
	bpost.addEventListener("click", envoyerRequete);
	bpost_o.addEventListener("click", envoyerRequete);
	
	actionSelect.addEventListener("change", afficherAction);
	
})();
