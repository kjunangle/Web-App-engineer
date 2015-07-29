/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready(function() {
          alert("obj.original_title");
	       $.ajax({
		url: 'https://api.themoviedb.org/3/movie/upcoming',
		type: 'GET',
		data: {api_key: 'e97d806c11d3090ae15e404c087f658a',page:'1'},
		success: function(data) {
                    
                    //alert(pageno);
                   for(var i=0 ;i<4;i++){
                       var obj = data.results[i];
                       //http://image.tmdb.org/t/p/w500/7SGGUiTE6oc2fh9MjIk5M00dsQd.jpg

                      $("#tbody2").append("<div class='col-md-3'>");
                      $("#tbody2").append(" <div class='panel panel-default'>");
                      $("#tbody2").append(" <div class='panel-heading'>");
                      $("#tbody2").append(" <h4><i class='fa fa-fw fa-check'></i> "+obj.original_title+ "</h4>");
                      $("#tbody2").append("</div>");
                      $("#tbody2").append("<div class='panel-body'>");
                      $("#tbody2").append("<img src=http://image.tmdb.org/t/p/w500/"+obj.poster_path+" width='100' height ='150'></td>");
                      $("#tbody2").append("</div>");
                      $("#tbody2").append("</div>");
                      $("#tbody2").append("</div>");
                   }
                   
                   
                    
		},
		dataType: 'json'
	});
        
   
    
    
       
});

 