/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready(function() {
          var location = window.location.href;
         if(location[location.length-1] !== "/"){
             location = location+'/';
         }
	 
         $.ajax({
		url: 'https://api.themoviedb.org/3/movie/now_playing',
		type: 'GET',
		data: {api_key: 'e97d806c11d3090ae15e404c087f658a',page:'1'},
		success: function(data) {
                    pageno=data.total_pages;
                    //alert(pageno);
                   for(var i=0 ;i<data.results.length;i++){
                       var obj = data.results[i];
                       //http://image.tmdb.org/t/p/w500/7SGGUiTE6oc2fh9MjIk5M00dsQd.jpg
                      // $("#tbody").append("<tr>");
                      // $("#tbody").append("<td>"+obj.id+"</td>");
                      // $("#tbody").append("<td><img src=http://image.tmdb.org/t/p/w500/"+obj.poster_path+" width='100' height ='150'></td>");
                      //  $("#tbody").append("<td>"+obj.original_title+"</td>");
                      // $("#tbody").append("</tr>");
//                      $("#tbody").append("<div class='jumbotron'><div class='container'><div class='col-md-4'><h4>#"+obj.id+"</h4><img src=http://image.tmdb.org/t/p/w500/"+obj.poster_path+" width='200' height='300'></div><div class='col-md-8'><H2>"+obj.title+"</H2>"+obj.overview+"</div></div></div>");
          $("#tbody").append("<div class='jumbotron'><div class='container'><div class='col-md-4'><h4>#"+obj.id+"</h4><img src=http://image.tmdb.org/t/p/w500/"+obj.poster_path+" class='img-responsive'></div><div class='col-md-8'><H2><a href='"+location+"../moviedetails?id="+obj.id+"&tittle="+obj.title+"'>"+obj.title+"</a></H2>"+obj.overview+"</div></div></div>");
                   }
                   
                   
                    $("#pagination").paginate({
                                
				count 		: 1000,
				start 		: 1,
				display     : 10,
				border		: false,
				text_color  			: '#888',
				background_color    	: '#EEE',	
				text_hover_color  		: 'black',
				background_hover_color	: '#CFCFCF',
                                onChange : function(page){
                                    searchPage(page);
                                    }
			});
		},
		dataType: 'json'
	});
        
    
    
       
});

function searchPage(pagenumber){
    
     $.ajax({
		url: 'https://api.themoviedb.org/3/movie/now_playing',
		type: 'GET',
		data: {api_key: 'e97d806c11d3090ae15e404c087f658a',page:pagenumber},
		success: function(data) {
                    pageno=data.total_pages;
                    //alert(pageno);
                    $("#tbody").html("");
                   for(var i=0 ;i<data.results.length;i++){
                       var obj = data.results[i];
                       //http://image.tmdb.org/t/p/w500/7SGGUiTE6oc2fh9MjIk5M00dsQd.jpg
                      // $("#tbody").append("<tr>");
                      // $("#tbody").append("<td>"+obj.id+"</td>");
                      // $("#tbody").append("<td><img src=http://image.tmdb.org/t/p/w500/"+obj.poster_path+" width='100' height ='150'></td>");
                      //  $("#tbody").append("<td>"+obj.original_title+"</td>");
                      // $("#tbody").append("</tr>");
                      $("#tbody").append("<div class='jumbotron'><div class='container'><div class='col-md-4'><h4>#"+obj.id+"</h4><img src=http://image.tmdb.org/t/p/w500/"+obj.poster_path+" class='img-responsive'></div><div class='col-md-8'>"+obj.overview+"</div></div></div>");
  
                       $(window).scrollTop(0);
                   }
                   
                   
                 
		},
		dataType: 'json'
	});
    
}
 