$(function(){
    
    $(".series-footer").mouseover(function(){
        var cardId = "#"+$(this).attr("id");
        $(cardId + " #s5").click(function(){
            $(cardId + " .fa-star").css("color", "white");
            $(this).css("color","red");
            $( cardId+" #s1").css("color", "red");
            $( cardId+" #s2").css("color", "red");
            $( cardId+" #s3").css("color", "red");
            $( cardId+" #s4").css("color", "red");
        });
        $(cardId+" #s1").click(function(){
            $(cardId + " .fa-star").css("color", "white");
            $(this).css("color","red");
        });
        $(cardId + " #s2").click(function(){
            $(cardId + " .fa-star").css("color", "white");
            $(this).css("color","red");
            $( cardId+" #s1").css("color", "red");
        });
        $(cardId + " #s3").click(function(){
            $(cardId + " .fa-star").css("color", "white");
            $(this).css("color","red");
            $( cardId+" #s1").css("color", "red");
            $( cardId+" #s2").css("color", "red");
        });
        $(cardId + " #s4").click(function(){
            $(cardId + " .fa-star").css("color", "white");
            $(this).css("color","red");
            $( cardId+" #s1").css("color", "red");
            $( cardId+" #s2").css("color", "red");
            $( cardId+" #s3").css("color", "red");
            
        });
        
        
        
    });
    var comments="";
    $(".series-footer").mouseover(function(){
        var cardId = "#"+$(this).attr("id");
        $(cardId + " .fa-star").click(function(){
            $(cardId+ " .comments").val(comments);
            $(cardId+" .comments").show("slide",500);
            
        });
        $(".comments-button").click(function(){
            comments = $(cardId+ " .comments").val();
            $(cardId+ " .comments").hide("fold",500);
        });
    });
    
    
    
});