jQuery(document).ready(function(){
   $('.install').css('width','0%'); 
});

function install(p)
{
    $('.progress_container').fadeIn();
    $.post("index.php/ajax/install",
    {
      p: p
    },
    function(data,status){
      //alert("Data: " + data + "\nStatus: " + status);
      //$('.install').css('width', '100%');
      $(".install").animate({width:'100%'}, 600);
    });
}
