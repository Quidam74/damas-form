


document.addEventListener("DOMContentLoaded", function() {
	isSelected = false
let numberaleaChange = 5000
reloadRandom(numberaleaChange)
document.querySelector(".stopJourNuit").addEventListener("click",function(){
	if(isSelected == false)
		isSelected = true
	else
		isSelected = false
})
var inputs = document.querySelectorAll(".daynight-choice input")

inputs.forEach(function(element) { 
	element.addEventListener("click",function(){
		isSelected = false
	})
 	});
})



function reloadRandom(number){

	number = Math.round(Math.random()*1000)
	setTimeout(function(){ 
		reloadRandom(number)
		if(isSelected == false)
			changeTicBox(Math.random())
	 }, number);
	
}

function changeTicBox(number){
	var inputs = document.querySelectorAll(".daynight-choice input")
	if(number>0.5)
		inputs[0].checked =true
	else
		inputs[1].checked = true
}