
let showOutput = document.getElementById("showOutput");
let output = document.getElementById("output");

showOutput.addEventListener('click', handlerFunction);

function handlerFunction(event){ 

	output.innerHTML = "";

	let table = document.createElement("table");
	table.addEventListener("click",close);

	function close(e){
		table.remove();
	}

	var xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function(e){  
    if(xhr.readyState === 4){     
        let prices = JSON.parse(xhr.responseText);

		let output = document.querySelectorAll("#output")[0];

        for(let i=0; i<prices.length; i++){

			let tr = document.createElement("tr");
	  		table.appendChild(tr);
  
	  		let td = document.createElement("td");
	  		let td2 = document.createElement("td");
	  		tr.appendChild(td);
	  		tr.appendChild(td2);
  
	  		let service = document.createTextNode(prices[i].service)
	  		let price = document.createTextNode(prices[i].price)
	  		td.appendChild(service);
	  		td2.appendChild(price);
		}
		console.log(table);

		output.appendChild(table);
	}
	};

	xhr.open("GET", "getPriceData.php", true);
    xhr.send();

};



   
 
