var url = "http://api.flickr.com/services/feeds/photos_public.gne?" +
"format=json&jsoncallback=?&tags=istanbul,bogaz";

$.getJSON(url, function(data){
    var html = "";
    $.each(data.items, function(i, item){
        html += "<h2>" + item.title + "</h2>";	
        html += "<img src=" + item.media.m + ">";
        html += "<p>"+item.date_taken+"</p>";
    });

    $("#photos").html(html);
});          