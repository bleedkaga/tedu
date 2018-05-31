function ajax(url, methods, data, callback){
	var xhr, responseResult;
	if(window.XMLHttpRequest){		
		xhr = new XMLHttpRequest();
	} else {
		xhr = new ActiveXObject("Microsoft.XMLHTTP")
	}

	xhr.open(methods, url, true);
	xhr.send();

	xhr.onreadystatechange = function(){
		if(xhr.readyState == 4 && xhr.status == 200){
			callback( xhr.responseResult )
		}
	}
	
}