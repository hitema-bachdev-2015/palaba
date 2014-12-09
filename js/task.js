var Task=function(params){
	this.id=params.id;
	this.idCategory = params.idCategory;
	this.content = params.content;
	this.dateEnd = params.dateEnd;
	this.endType = params.endType;
	this.status = params.status;
	
	addTask(params);
}
function addTask(params){
	//Mise de l'id de l'element+1 à ajouter, dans une variable
	var id=params.id;
	var li = document.createElement("li");        // Create a <li> element
	//Ajout de l'élément node li avant l'élément ayant la valeur de l'id element+1
	var content = document.createTextNode(params.content);       // Create a text node
	li.appendChild(content); 
	var att = document.createAttribute("data-id");       // Create a "class" attribute
	att.value = id; // Set the value of the class attribute
	li.setAttributeNode(att);	
	var refElement=document.getElementById(id);// Append the text to <li>
	var insertElement = parentElement.insertBefore(li, refElement); //append before refElement
}