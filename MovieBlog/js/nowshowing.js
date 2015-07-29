/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready(function() {
          
	       $.ajax({
		url: 'https://api.themoviedb.org/3/movie/upcoming',
		type: 'GET',
		data: {api_key: 'e97d806c11d3090ae15e404c087f658a',page:'1'},
		success: function(data) {
                    
                    //alert(pageno);
          for(var i=0 ;i<4;i++){
            var obj = data.results[i];
                       //http://image.tmdb.org/t/p/w500/7SGGUiTE6oc2fh9MjIk5M00dsQd.jpg

//           $("#tbody2").append("<div class='col-md-3'><div class='panel panel-default'><div class='panel-hea1ding'><h4 class=""><i class='fa fa-film'></i> "+obj.original_title+ "</h4></div><div class='panel-body'><img src=http://image.tmdb.org/t/p/w500/"+obj.poster_path+" width='230' height ='280'></div></div></div>");
                       
 $("#tbody2").append("<div class='col-sm-4 col-xs-6 col-md-3'><div class='thumbnail'><div class='caption'><h4><i class='fa fa-film'></i>&nbsp"+obj.original_title+ "</h4></div><img src=http://image.tmdb.org/t/p/w500/"+obj.poster_path+"></div></div>");
  
                   }
                       
                    
		},
		dataType: 'json'
	});
        
   
    
    
       
});

 