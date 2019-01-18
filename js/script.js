$(document).ready(function() {
    console.log( "ready!" );
    afficherpage();
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
    function afficherpage(pages=0){
        if(pages==0){
            $(".page").eq(0).hide();
        }else{
            $(".page").eq(0).show();
        }
        if(pages+1>parseInt($(".messages").attr("nbpage"))){
            $(".page").eq(1).hide();
        }else{
            $(".page").eq(1).show();
        }
        $.ajax({
            type: 'POST',
            data : {page:pages},
            url: './includes/affichermessage.php',
            success: function(msg){
            $(".messages").html(msg);
            $(".messages").attr('page',pages);
            }
        });
    }
    $(".page").on('click',function(){
        var res;
        if($(this).attr("data-value")=="1"){
            res = parseInt($(".messages").attr("page"))+1;
        }else{
            res = parseInt($(".messages").attr("page"))-1;
        }
        afficherpage(res)
    });
    $(document).on('click', '.vote', function(){
        console.log("test");
      var data = $(this).attr('data-id');
      var jaime = $(this);
      $.ajax({
          type: 'POST',
          url: './includes/vote.php',
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