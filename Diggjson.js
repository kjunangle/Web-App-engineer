$(document).ready(function() {
         
	 
         $.ajax({
		url: 'https://localhost/Diggfile.php',
		type: 'GET',
		data: {
    },
		success: function(data) {
                    
                    //alert(pageno);
                   for(var i=0 ;i<data.results.length;i++){
                       var obj = data.results[i];
                       //http://image.tmdb.org/t/p/w500/7SGGUiTE6oc2fh9MjIk5M00dsQd.jpg
                      $("#tbody").append("<div class='col-md-10 row'>");
                      $("#tbody").append("<iframe src='"+obj.channel.item.link+"' height='350'></iframe>");
                      $("#tbody").append("</div>");
                  }
                   },
    dataType: 'json'
  });
        
    
    
       
});