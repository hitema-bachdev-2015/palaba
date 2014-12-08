var Task=function(params){
	this.id=params.id;
	this.idCategory = params.idCategory;
	this.content = params.content;
	this.dateEnd = params.dateEnd;
	this.endType = params.endType;
	this.status = params.status;
}
Task.prototype.addTask=function(params){
	//Mise de l'id de l'element+1 à ajouter, dans une variable
	//Ajout de l'élément node li avant l'élément ayant la valeur de l'id element+1
	//var li = document.createElement("li");        // Create a <li> element
	//var content = document.createTextNode("CLICK ME");       // Create a text node
	//li.appendChild(content);                                // Append the text to <li>
	//var insertElement = parentElement.insertBefore(li, refElement); //append before refElement