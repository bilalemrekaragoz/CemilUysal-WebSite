var names = ["Ben", "Joel", "Judy", "Anne"];
var scores = [88, 98, 77, 88];

var $ = function (id) { return document.getElementById(id); };



window.onload = function () {
	$("add").onclick = addScore;
	$("display_results").onclick = displayResults;
	$("display_scores").onclick = displayScores;
	$("name").focus();
	
};
var addScore = function(){
	var nametxt = document.getElementById('name');
	var scoretxt = document.getElementById('score');
	if(nametxt.value == ""){
		alert("You should enter the name!!!");
	}
	else if (scoretxt.value > 0 && scoretxt.value <100){
		names[names.length] = nametxt.value;
		scores[scores.length] = scoretxt.value;	
	}
	else{
		alert("You should enter valid score!!!");
		
	}
	nametxt.value = "";
	scoretxt.value = "";
	if(document.getElementById('results').innerHTML != ""){
		displayResults();
	}
	if(document.getElementById('scores_table').innerHTML != ""){
		displayScores();
	}
	$("name").focus();
	
}
var displayResults = function () {
	var results = document.getElementById('results');
	var maxScoreController = 0; 
	var sumOfScores = 0;
	for( var i = 0 ; i < scores.length; i++){
		sumOfScores += Number(scores[i]);
		if(scores[i] > scores[maxScoreController]){
			maxScoreController = i;
		}
	}
	results.innerHTML = "<h2> Results </h2>";
	results.innerHTML += "<p>Average score = "+ ( sumOfScores / scores.length) +"</p>";
	results.innerHTML += "<p> High score = " + names[maxScoreController] + " with a score of " + scores[maxScoreController] + "</p>";
}
var displayScores = function() {
	var score_table = document.getElementById("scores_table");

	score_table.innerHTML = "<h2> Scores </h2>";
	score_table.innerHTML += "<tr> <th>Name</th> <th>Score</th></tr>";
	for(var i = 0 ; i < scores.length; i++){
		score_table.innerHTML += "<tr> <td>"+ names[i] +"</td> <td>"+scores[i]+ "</td></tr>";
	} 
}


