<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
           <link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css">
        
       <script src="https://code.jquery.com/jquery-1.9.1.js"></script>
       <script type="text/javascript" src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
         <script src="test.js"></script>
    </head>
    <body>
        <?php
       $url = 'http://www.nangdee.com/';
$content = file_get_contents($url);
$first_step = explode( '<div id="nd12Box_line_th">' , $content );
$second_step = explode("</div>" , $first_step[1] );

//print_r($second_step);
 // echo htmlspecialchars($second_step[1]);

//$split1 = explode( "title=" , $second_step[1]);
 
//echo strip_tags($second_step[1]);   //output Test paragraph. Other text
//print_r ($split1);

//$split2 = explode("</div>" , htmlspecialchars($first_step[1]) );
        ?>
        
        
        <?php  
        
        //from nangdee Top five in THAI
        $split = explode("\n\t",strip_tags($second_step[1]));
       $split2 = explode("\n\t",strip_tags($second_step[2]));
           $split3 = explode("\n\t",strip_tags($second_step[3]));
            $split4 = explode("\n\t",strip_tags($second_step[6]));
              $split5 = explode("\n\t",strip_tags($second_step[7]));
                   $split6 = explode("\n\t",strip_tags($second_step[8]));
                    $split7 = explode("\n\t",strip_tags($second_step[11]));
                           $split8 = explode("\n\t",strip_tags($second_step[12]));
                                  $split9 = explode("\n\t",strip_tags($second_step[13]));
                                  
                                  $split10 = explode("\n\t",strip_tags($second_step[16]));
                           $split11 = explode("\n\t",strip_tags($second_step[17]));
                                  $split12 = explode("\n\t",strip_tags($second_step[18]));
                                    $split13 = explode("\n\t",strip_tags($second_step[21]));
                           $split14 = explode("\n\t",strip_tags($second_step[22]));
                                  $split15 = explode("\n\t",strip_tags($second_step[23]));
                                  
                                  
         // End Of Thai Box office
            //from nangdee Top five in USA
                                  
      $split16 = explode("\n\t\t",strip_tags($second_step[34]));
       $split17 = explode("\n\t\t",strip_tags($second_step[35]));
           $split18 = explode("\n\t\t",strip_tags($second_step[36]));
                                  $split19 = explode("\n\t\t",strip_tags($second_step[39]));
                                        $split20 = explode("\n\t\t",strip_tags($second_step[40]));
                                             $split21 = explode("\n\t\t",strip_tags($second_step[41]));
                                                 $split22 = explode("\n\t\t",strip_tags($second_step[44]));
                                        $split23 = explode("\n\t\t",strip_tags($second_step[45]));
                                             $split24 = explode("\n\t\t",strip_tags($second_step[46]));
                                                    $split25 = explode("\n\t\t",strip_tags($second_step[49]));
                                        $split26 = explode("\n\t\t",strip_tags($second_step[50]));
                                             $split27 = explode("\n\t\t",strip_tags($second_step[51]));
                                                  $split28 = explode("\n\t\t",strip_tags($second_step[54]));
                                        $split29 = explode("\n\t\t",strip_tags($second_step[55]));
                                             $split30 = explode("\n\t\t",strip_tags($second_step[56]));
                                  //  // End Of USA Box office
                                  
        $json_data[]=array(  
            "THAI" => array(
        "Item"=>array(array("No"=>1,"Title"=>$split[1],"Recent_Income"=>$split2[1],"Total_Income"=>$split3[1]),
            array("No"=>2,"Title"=>$split4[1],"Recent_Income"=>$split5[1],"Total_Income"=>$split6[1]),
            array("No"=>3,"Title"=>$split7[1],"Recent_Income"=>$split8[1],"Total_Income"=>$split9[1]),
            array("No"=>4,"Title"=>$split10[1],"Recent_Income"=>$split11[1],"Total_Income"=>$split12[1])
            ,
            array("No"=>5,"Title"=>$split13[1],"Recent_Income"=>$split14[1],"Total_Income"=>$split15[1]))
                
                ),
            
            
            "USA" => array(
                
                "Item"=>array(
                    
                    array("No"=>1,"Title"=>$split16[1],"Recent_Income"=>$split17[1],"Total_Income"=>$split18[1]),
                    array("No"=>2,"Title"=>$split19[1],"Recent_Income"=>$split20[1],"Total_Income"=>$split21[1]),
                    array("No"=>3,"Title"=>$split22[1],"Recent_Income"=>$split23[1],"Total_Income"=>$split24[1]),
                     array("No"=>4,"Title"=>$split25[1],"Recent_Income"=>$split26[1],"Total_Income"=>$split27[1]),
                      array("No"=>5,"Title"=>$split28[1],"Recent_Income"=>$split29[1],"Total_Income"=>$split30[1])
                    
                    
                    
                    
                    
                )
                
                
                
                
                
                
            )
            
            );
       echo json_encode($json_data);
        
        ?>
        
        <div id="ul">
            
            
        </div>
    </body>
</html>
 