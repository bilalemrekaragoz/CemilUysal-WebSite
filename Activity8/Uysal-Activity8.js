
$(function(){
    var score = 0;
    var leftmargin = 0;
    var topmargin = 0;
    $("#btn").click(function(){
        
        $("#score").text(keepScore());

    });
    $("#btn").mouseover(function(){
        timerPosition();
        
    });
    function keepScore(){
        score++;
        return "Score: " + score;
    }
    function positionchanger(){
        leftmargin = (Math.random()*850);
        topmargin = Math.random()*450;
        $("#btn").css("marginTop", topmargin+"px");
        $("#btn").css("marginLeft", leftmargin+"px");
    }
    function timerPosition(){
        if(score <= 3){
            setTimeout(positionchanger,500);
        }
        else if(score <= 6){
            setTimeout(positionchanger,400);
        }
        else if(score <= 9){
            setTimeout(positionchanger,300);
        }
        else if(score <= 12){
            setTimeout(positionchanger,200);
        }
        else if(score <= 15){
            setTimeout(positionchanger,100);
        }
        else{
            setTimeout(positionchanger,00);
        }
    }
   
});