$(document).ready(function() {
         
	     var getUrlParameter = function getUrlParameter(sParam) {
    var sPageURL = decodeURIComponent(window.location.search.substring(1)),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return sParameterName[1] === undefined ? true : sParameterName[1];
        }
    }
};
         $.ajax({
		url: '../phpextension/Diggfile.php?title='+getUrlParameter('title'),
		type: 'GET',
		data: {
    },
		success: function(data) {
                    
                   // alert(data.channel.item.length);
                   for(var i=0 ;i<data.channel.item.length;i++){
                       //var obj = data.results[i];
                       
                      
                       
                      $("#digg").append("<div>");
                      $("#digg").append("<iframe src='"+ data.channel.item[i].link+"' height='350' width='800' ></iframe>");
                      $("#digg").append("</div>");
                  }
                   },
    dataType: 'json'
  });
        
    
    
       
});