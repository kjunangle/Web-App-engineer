
function searchMovie(key,id) {
   
   window.location="/movieblog/moviedetails?id="+id+"&tittle="+key;




	 
}

$(document).ready(function() {

	 
   // alert($("#keyword")[0]);
	$("#keyword").autocomplete({
	
		  source: function(request, response) {
        $.get('https://api.themoviedb.org/3/search/movie', { query: request.term,api_key:"e97d806c11d3090ae15e404c087f658a" }, function(data) {
            
            var x=[];
            $.each(data.results, function(i, item) {
                         //console.log(item.original_title);
                x.push({
                                   
                      label: item.original_title,
                      value: item.id
                   });
           });
             
            response(x);
        })},
		select: function(event, suggestion) {
             event.preventDefault();
		      $("#keyword").val(suggestion.item.label);
			searchMovie(suggestion.item.label,suggestion.item.value);
		
		} 
	});
    
});