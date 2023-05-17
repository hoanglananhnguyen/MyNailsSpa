var xhr = new XMLHttpRequest(); 

	xhr.onreadystatechange = function(e){  
	if(xhr.readyState === 4){     
		let imageData = JSON.parse(xhr.responseText);

	    let gallery = document.querySelectorAll("#gallery")[0];

		for(let i=0; (i<imageData.length && i < 6); i++){
			let img = document.createElement("img");

			console.log("loading images");

			img.setAttribute("src", 'uploads/'+imageData[i].imageName);
			gallery.appendChild(img);
		}
       } 
	};

	xhr.open("GET", "getImageData.php", true); 
	xhr.send(); 

