/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


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
		url: 'https://api.themoviedb.org/3/movie/'+getUrlParameter('id'),
		type: 'GET',
		data: {api_key: 'e97d806c11d3090ae15e404c087f658a'},
		success: function(data) {
                       
                      $("#tbody").append("<tr>");
                      $("#tbody").append("<td>"+getUrlParameter('id')+"</td>");
                      
                    $("#tbody").append("<td><img src=http://image.tmdb.org/t/p/w500/"+data.backdrop_path+" width='100' height ='150'></td>");
                        $("#tbody").append("<td>"+data.original_title+"</td>");
                          $("#tbody").append("<td>"+data.overview+"</td>");
                          
                          $("#tbody").append("<td>");
                          for(var i=0; i<data.production_companies.length;i++){
                              
                              
                              $("#tbody").append(data.production_companies[i].name);
                              $("#tbody").append("<br>");
                          }
                          
                          
                           $("#tbody").append("</td>");
                          
                      $("#tbody").append("</tr>");
                      
                      
                      
                     },
                   
                   
                   
		dataType: 'json'
	});
        
    
    
       
});
 
 