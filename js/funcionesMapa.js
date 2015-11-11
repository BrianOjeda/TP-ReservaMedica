function VerEnMapa()
{
   
    var dire="Gral. Rodriguez 158";
    var loc="Monte Grande";
    var prov="Buenos Aires";
     //alert(prov + dire +  loc);
    var punto = dire + " , " +  loc  +" , " +  prov + " , Argentina";
    alert(punto);
    //console.log(punto);
    var funcionAjax=$.ajax({
    url:"nexoPartes.php",
    type:"post",
    data:{
      queHacer:"VerEnMapa"
    }
  });
    funcionAjax.done(function(retorno){
      //alert(retorno);
    $("#principal").html(retorno);
       // $("#punto").val(punto);
        // $("#id").val(id);
    
  });
}