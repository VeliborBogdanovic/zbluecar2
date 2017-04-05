<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>zBlueCar</title>
	<meta name="description" content="Free Responsive Html5 Css3 Templates | zerotheme.com">
	<meta name="author" content="www.zerotheme.com">
	
    <!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- CSS
  ================================================== -->
    <link rel="stylesheet" href="<?php echo base_url()?>css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url()?>css/zerogrid.css">
	<link rel="stylesheet" href="<?php echo base_url()?>css/style.css">
	<link rel="stylesheet" href="<?php echo base_url()?>css/responsiveslides.css">
	
	<script src="<?php echo base_url()?>js/jquery-latest.min.js"></script>
	<script src="<?php echo base_url()?>js/script.js"></script>
    <script src="<?php echo base_url()?>js/jquery183.min.js"></script>
    <script src="<?php echo base_url()?>js/responsiveslides.min.js"></script>
    <script>
		
		$(function () {
		 
		  $("#slider").responsiveSlides({
			auto: true,
			pager: false,
			nav: true,
			speed: 500,
			namespace: "callbacks",
			before: function () {
			  $('.events').append("<li>before event fired.</li>");
			},
			after: function () {
			  $('.events').append("<li>after event fired.</li>");
			}
		  });
		});
	</script>
        <script type="text/javascript">
            $(document).ready(
               function (){
                   
                $("#item").hide();
                 $("#item1").hide();
                 $("#h2").hide();
                 $("#modals").prop("disabled", true);
               $('#brands').change(function (){
                 var  brand= $( "#brands" ).val();
                 
                $.ajax({
                      type:'post',
                      data:{brand:brand},
                      url:'<?php echo base_url(); ?>search_ajax/ajaxx/' ,
                      success:function (result)
                         {
                             $('#modals option').remove();
                           $("#modals").prop("disabled", false);
                            $('#modals').append(result);
                           }
                                   
                         });
                  }); 
                 
                }
                
                );
       </script>
       <script type="text/javascript">
            $(document).ready(function (){
            $('#dugme').click(function()
                  {
                      
                       var  brand= $( "#brands" ).val();
                       var  model= $( "#modals" ).val();
                       var  price= $( "#price" ).val();
                       
                       if(brand!=='0'){
                    $.ajax({
                 type:'post',
                 data:{brand:brand,model:model,price:price},
                 url:'<?php echo base_url() ;?>search_ajax/ajax2/' ,
                 success:function (result)
                    {
                   var res=result.split(",");
                           $("#item").show();
                     $("#h2").show();
                     $('#trip').empty();
                        $('#trip').append("<div class='stickit .t-center'>"+result+"</div>");




                    }
                      

}); }
                  });
              });
       </script>
       <script type="text/javascript">
            $(document).ready(function (){
            $('#vote').click(function()
                  {
                      
                       var id_answer=$('input[name=pole]:checked').val();
                      
                       if(typeof id_answer!==undefined && typeof id_answer !=='undefined'){
                          
                    $.ajax({
                 type:'post',
                 data:{id_answer:id_answer},
                 url:'<?php echo base_url() ?>pole/ajax' ,
                 success:function (result)
                    {
                      $('#for_votes').empty();
                     $('#for_votes').append("Thanks for voting");
                     
                     

                    }
                      

}); }
                  });});
              
       </script>
<!--       <script type="text/javascript">
           $(document).ready(function (){
              $.ajax({
                 type:'post',
                 url:'<?#php echo base_url(); ?>/pole/ajax2' ,
                 success:function (result)
                    {
                         
                        $('#for_votes').append(result);
                        //$('#for_links').prepend(offset);
                    }
               
           });});
       </script>-->
<!--       <script>
           $(document).ready(function (){
               $("#mica a").click(function(){
                    var theUrl=$(this).attr('href') ;
                    alert(theUrl);
                    var rb=theUrl.split("/");
                    var broj=rb[6];
                    $.ajax({
                    type:'post',
                    url:'<?#php echo base_url() ;?>/pole/ajax2' ,
                    success:function (result)
                    {
                         
                        $('#for_votes').append(result);
                        //$('#for_links').prepend(offset);
                    }
               });
             
           });
          
           
       </script>
	-->
	<!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
		<script src="js/html5.js"></script>
		<script src="js/css3-mediaqueries.js"></script>
	<![endif]-->
    
</head>
