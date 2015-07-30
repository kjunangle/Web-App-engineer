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
                     GetMovieNowShowingID();
                     GetBoxOffice();
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

 function GetMovieNowShowingID(){
       var count=0;
     $.ajax({
		url: 'http://api.themoviedb.org/3/movie/now_playing',
		type: 'GET',
		data: {api_key: 'e97d806c11d3090ae15e404c087f658a',page:1},
                
		success: function(data) {
                    
//                  var picture;
                   $.each(data.results, function(i, obj) {
                        
                   
                           
                        GetSlide(obj.id,count);
                      count++;
                       
                       
                     });
                   
                   
                 
		},
		dataType: 'json'
	});
    
}

 function GetSlide(id,count){
         
          
     $.ajax({
		url: 'http://api.themoviedb.org/3/movie/'+id+'/images',
		type: 'GET',
		data: {api_key: 'e97d806c11d3090ae15e404c087f658a',page:1},
		success: function(data) {
              
                   $.each(data.backdrops, function(i, obj) {
//              console.log(obj);
                       //alert(obj.width);
                    
                         
                    
                       if(obj.width.toString()==="1920"){
//                             console.log(obj.width);

                                if(i===1){
                                   if(count===0){
                                       //alert("a");
                                      $(".carousel-inner").append(" <div class='item active'><img  src='http://image.tmdb.org/t/p/w"+obj.width+obj.file_path+"'width ='1920px' height='300px' ></div>");
                                   }else{
                                       $(".carousel-inner").append(" <div class='item'><img  src='http://image.tmdb.org/t/p/w"+obj.width+obj.file_path+"' width ='1920px' height='300px' ></div>");
                                   }
                                   
                                     
                                     
                                }
                             
                              
                       }
                       
                       
                       
                   });
           
                
                 
		},
		dataType: 'json'
	});
        
}

 function GetBoxOffice(){
        
     $.ajax({
		url: 'phpextension/boxOfficeAPI.php',
		type: 'GET',
                
		success: function(data) {
                   // console.log(data[0].THAI.item.item);
//                  var picture;
                   $.each(data[0].THAI, function(i, obj) {
                        $.each(obj, function(i, obj) {
                              // alert(obj.Title);
                              
                              $(".thai").append("<div class='row'><div class='col-md-2'>"+obj.Title+"</div><div class='col-md-3'>"+obj.Recent_Income+"</div><div class='col-md-2'>"+obj.Total_Income+"</div> </div>");
                           });
                     });
                   
                   $.each(data[0].USA, function(i, obj) {
                        $.each(obj, function(i, obj) {
                              // alert(obj.Title);
                              
                              $(".usa").append("<div class='row'><div class='col-md-2'>"+obj.Title+"</div><div class='col-md-3'>"+obj.Recent_Income+"</div><div class='col-md-2'>"+obj.Total_Income+"</div> </div>");
                           });
                     });
                 
		},
		dataType: 'json'
	});
    
}