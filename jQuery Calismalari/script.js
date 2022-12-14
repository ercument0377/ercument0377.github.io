$(document).ready(function(){
    var tikSayisi = 0;
   
    $('h1').click(function(){ // h1 taglarini saklar
        $(this).attr("style","background-color:red; color:blue");
        $(this).attr("class","tiklanmis");  // bu ozellik tıklanabilenlerin rengi desiştirir
    });

    $('#h').click(function(){ //id'si h olan elemanlari saklar
        $('#h').hide();
    });

    $('.h').click(function(){ //class'si h olan elemanlari saklar
        $('.h').hide();
    });
 
    /*$('*').click(function(){ //tum elemanlari secer, hepsine tum elemanlari saklama fonksiyonu atar
        $('*').hide();
    });*/

/*  div1 in içindeki herşeyi saklar 
        $('#div1').click(function(){

            $('#div1').find('*').fadeOut(5000);
       
    });
*/

// div1 in içindeki paragraf 2 yi saklar sadece 
// hide=siler  fadeOut=yavas yavas siler    fadeIn= yavas yavas görünür
    $('#div1').click(function(){
        $('#div1').find('#p2').fadeOut(5000);
        $('#div1').find('#p2').fadeIn(2000);
       
    });

// div1 in rengini değiştirir
    $('#buton').click(function(){
        $('#div1').css("background-color","blue");
   
    });

    $('#img1').click(function(){
        $('#img1').attr("width","50px");
   
    });

    $('#btn2').click(function(){
       
        if(tikSayisi%2==1)
            $('#p4').append(" seviyor ");
           
        else
            $('#p4').append(" sevmiyor ");
        tikSayisi++;
        debugger;  //programı durdurur
      /*  var eskiDeger = $('#p4').html();
        var eskiTiklanmaSayisi = parseInt(eskiDeger.substr(18));
        var yeniTiklanmaSayisi=eskiTiklanmaSayisi+1;
        $('#p4').html(eskiDeger.substr(0,18) + yeniTiklanmaSayisi);*/
    });

    $('#btn3').click(function(){
        tikSayisi++;
        $('#p5').html("Tiklama Sayisi: "+tikSayisi);
    });
});