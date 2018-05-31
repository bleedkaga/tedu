function $(id){
	return document.getElementById(id)
}


function createXhr(){
	var xhr;
	if(window.XMLHttpRequest){
		xhr = new XMLHttpRequest();
	} else {
		xhr = new ActiveXObject("Microsoft.XMLHTTP")
	}

	return xhr;
}

function $_gets(url){
	return new Promise( (resolve, reject) => {
		var xhr = createXhr();
		xhr.open("GET", url, true);
		xhr.onreadystatechange = function() {
			if(xhr.readyState == 4){
				if(xhr.status == 200){
					resolve( xhr.responseText )
				} else {
					reject(xhr.status )
				}
				
			} else {
				
			}
		}

		xhr.send(null);
	})
}


function $_post( url, data ){
	return new Promise( ( resolve, reject ) => {
		var xhr = createXhr();
		xhr.open("POST", url, true)
		xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		xhr.onreadystatechange = function() {
			if(xhr.readyState == 4){
				if(xhr.status == 200){
					resolve( xhr.responseText )
				} else {
					reject(xhr.status )
				}
				
			} else {
				
			}
		}

		xhr.send(data);
	})
}