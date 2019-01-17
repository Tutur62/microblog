$(document).ready(function() {
    console.log( "ready!" );
    $('#connexion').submit(function(e){
        if(!$('input').val()) {
            $('input').each(function(){
                if(!$(this).val()) {
                    $(this).next(".erreur").show();
                }else{
                    $(this).next(".erreur").remove();
                }
            });
          e.preventDefault();
        }
      });
      $('.jaime').click(function(){
        var data = $(this).attr('data-id');
        var jaime = $(this);
        $.ajax({
            type: 'POST',
            url: 'vote.php',
            data: {id:data},
            success: function(msg){
            if(msg!="erreur"){
            jaime.empty();
            jaime.text("J'aime - "+msg);
            }else{
                alert("Vous avez votez trop de fois");
            }
            }
        });
    });
});