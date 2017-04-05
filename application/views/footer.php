<!--////////////////////////////////////Footer-->
<footer >
    <div  style="z-index:0;">
		<div class="wrap-footer">
                    <div class="row" >
                        <span><h2 id='main-color' style="text-align: left;margin-left:20px;width:300px">Change theme color<input value="#2D88CF" type="color" style="width:100px;height: 100px;"> </h2></span>
				<h3>Contact</h3>
				<span>Phone 065/555555 </span></br>
				<span>Email  bogdanovicvelja@gmail.com  </span></br>
                                <span><a href="<?php echo base_url(); ?>/pr_wp_67_13.docx">Documentation</a>
				<span><strong>Velibor Bogdanovic | MVC PHP and OO JS Project </strong></span>
			
         </div>
            <div>

            </div>
                    
		</div>

	</div>
</footer>
 <script type="text/javascript">
          
       
    var body=document.body;
    var colorInput = document.querySelector('input[type=color]');
    colorInput.value=localStorage.colorSetting;
    var bodyS = window.getComputedStyle(document.body);
    body.style.setProperty('--main-color', localStorage.colorSetting);
    colorInput.addEventListener('change', function (e)
    {
        colorInput.value=e.target.value;
        body.style.setProperty('--main-color', e.target.value);
        localStorage['colorSetting'] = colorInput.value;
    });

     
    
    var Options=function(type){
       
        this.type=type;
        this.div=document.getElementById("showing");

    };
    //--------------------------------------------SHOW SHOW-----------------------------------------------------------------
   Options.prototype.showing=function()
   {
      this.url='<?php echo base_url(); ?>adminPanel/show/'+this.type;
    
      if(window.XMLHttpRequest){ zahtev=new XMLHttpRequest(); }
        else {zahtev=new ActiveXObject();}
        zahtev.open("GET",this.url,false);
        zahtev.send();
        this.div.innerHTML=zahtev.responseText;
   };
   
   
    function show(type)
    {        
        var Option1=new Options(type);
        Option1.showing();
    }
     //--------------------------------------------Delete Delete-----------------------------------------------------------------
    
    Options.prototype.deleting=function(id)
       {
         var Option1=new Options(this.type);
         $.ajax({
                type:'post',
                data:{id:id},
                url:'<?php echo base_url(); ?>adminPanel/delete/'+this.type ,
                success:function ()
                   {
                        
                          Option1.showing();

                   }});

       };      
        function deletee(type,id)
        {        
            var Option1=new Options(type);
            Option1.deleting(id);
        }
   //--------------------------------------------Cancel Cancel-----------------------------------------------------------------
       
        function cancel(type)
        {
            var Option1=new Options(type);
            Option1.showing();
        }
    
    
    


    //--------------------------------------------Modify Modify----------------------------------------------------------------- 
function formodify(type,counter){
     formodify.table=document.getElementById("modify_table");
      if(type==="meni")
      {
         formodify.idmeni=formodify.table. rows.item(counter).cells[5].innerHTML;
         formodify.path=formodify.table. rows.item(counter).cells[1].innerHTML;
         formodify.meni=formodify.table. rows.item(counter).cells[2].innerHTML;
       
         formodify.table. rows.item(counter).cells[2].innerHTML="<input id='mytd' class='form-control sirina'  type='text' value='"+ formodify.meni.trim() +"'/>";
         formodify.table. rows.item(counter).cells[1].innerHTML="<input class='form-control sirina' type='text' value='"+ formodify.path.trim() +"'/>";
         formodify.table. rows.item(counter).cells[3].innerHTML="<a href='javascript:modify("+counter+ "," +1+ ");'><b style='color:green;'>Accept</b></a>";   
         formodify.table. rows.item(counter).cells[4].innerHTML="<a href='javascript:cancel(\""+type+"\")'><b style='color:red;'>Cancel</b></a>";
       }
       
      if(type==="users"){
         formodify.user=formodify.table. rows.item(counter).cells[1].innerHTML;
         formodify.email=formodify.table. rows.item(counter).cells[2].innerHTML;
         formodify.role=formodify.table. rows.item(counter).cells[3].innerHTML;
         formodify.iduser=formodify.table. rows.item(counter).cells[7].innerHTML; 
         formodify.idrole=formodify.table. rows.item(counter).cells[6].innerHTML; 
         
         formodify.table. rows.item(counter).cells[1].innerHTML="<input id='mytd' class='form-control sirina'  type='text' value='"+ formodify.user.trim() +"'/>";
         formodify.table. rows.item(counter).cells[2].innerHTML="<input class='form-control sirina' type='text' value='"+ formodify.email.trim() +"'/>";
         formodify.table. rows.item(counter).cells[3].innerHTML="<select class='form-control'><option value='1'>Admin</option><option value='2' selected='selected'>User</option> </select>";
         formodify.table. rows.item(counter).cells[4].innerHTML="<a href='javascript:modify("+counter+ "," +2+ ");'><b style='color:green;'>Accept</b></a>";   
         formodify.table. rows.item(counter).cells[5].innerHTML="<a href='javascript:cancel(\""+type+"\")'><b style='color:red;'>Cancel</b></a>";
                                                                                        
          }
          
       if(type==="brand"){
         formodify.brand=formodify.table. rows.item(counter).cells[1].innerHTML;   
         var brand="brands";
         formodify.table. rows.item(counter).cells[1].innerHTML="<input id='mytd' class='form-control sirina'  type='text' value='"+ formodify.brand.trim() +"'/>";
         formodify.table. rows.item(counter).cells[2].innerHTML="<a href='javascript:modify("+counter+ "," +3+ ");'><b style='color:green;'>Accept</b></a>";   
         formodify.table. rows.item(counter).cells[3].innerHTML="<a href='javascript:cancel(\""+brand+"\")'><b style='color:red;'>Cancel</b></a>";
         }
         if(type==="fuels"){
         formodify.fuels=formodify.table. rows.item(counter).cells[1].innerHTML;         
         formodify.table. rows.item(counter).cells[1].innerHTML="<input id='mytd' class='form-control sirina'  type='text' value='"+ formodify.fuels.trim() +"'/>";
         formodify.table. rows.item(counter).cells[2].innerHTML="<a href='javascript:modify("+counter+ "," +4+ ");'><b style='color:green;'>Accept</b></a>";   
         formodify.table. rows.item(counter).cells[3].innerHTML="<a href='javascript:cancel(\""+type+"\")'><b style='color:red;'>Cancel</b></a>";
         }
          
          
}    
function modify(counter,type){
    modify.table=document.getElementById("modify_table");
      if(type===1)
      {   
        modify.meniName=modify.table. rows.item(counter).cells[2].children[0].value;
        modify.path=modify.table. rows.item(counter).cells[1].children[0].value;
        modify.idmeni=modify.table. rows.item(counter).cells[5].innerHTML.trim();
        modify.div=document.getElementById("showing");
        $.ajax({
            type:'post',
            data:{idmeni:modify.idmeni,path:modify.path,meni:modify.meniName},
            url:'<?php echo base_url(); ?>adminPanel/modify/meni/' ,
            success:function (result)
               {
                      modify.div.innerHTML=result;  
                      
               }});   
       }
       if(type===2)
      {   
        modify.user=modify.table. rows.item(counter).cells[1].children[0].value;
        modify.email=modify.table. rows.item(counter).cells[2].children[0].value;
        modify.idrole=modify.table. rows.item(counter).cells[3].children[0].selectedIndex +1;
        modify.iduser=modify.table. rows.item(counter).cells[7].innerHTML; 
        
        modify.div=document.getElementById("showing");
        $.ajax({
            type:'post',
            data:{user:modify.user,email:modify.email,idrole:modify.idrole,iduser:modify.iduser},
            url:'<?php echo base_url(); ?>adminPanel/modify/users/' ,
            success:function (result)
               {
                      modify.div.innerHTML=result;  
                      
               }});   
       }
       if(type===3)
      {   
        modify.brand=modify.table. rows.item(counter).cells[1].children[0].value;
        modify.idbrand=modify.table. rows.item(counter).cells[4].innerHTML; 
        
        modify.div=document.getElementById("showing");
        $.ajax({
            type:'post',
            data:{brand:modify.brand,idbrand:modify.idbrand},
            url:'<?php echo base_url(); ?>adminPanel/modify/brands/' ,
            success:function (result)
               {
                      modify.div.innerHTML=result;  
                      
               }});   
       }
       if(type===4)
      {   
        modify.fuel=modify.table. rows.item(counter).cells[1].children[0].value;
        modify.idfuel=modify.table. rows.item(counter).cells[4].innerHTML; 
       
        modify.div=document.getElementById("showing");
        $.ajax({
            type:'post',
            data:{fuel:modify.fuel,idfuel:modify.idfuel},
            url:'<?php echo base_url(); ?>adminPanel/modify/fuels/' ,
            success:function (result)
               {
                      modify.div.innerHTML=result;  
                      
               }});   
       }

}
 


    //--------------------------------------------Add   Add-----------------------------------------------------------------
    

function add(type)
    {
        
        
        if(type==="meni")
        {
            add.path=document.getElementById('MenuPath').value;
            add.menuname=document.getElementById('MenuName').value;
            
            $.ajax({
            type:'post',
            data:{path:add.path,menuname:add.menuname},
            url:'<?php echo base_url(); ?>adminPanel/add/meni/' ,
            success:function (result)
               {
                      show("meni");  
                      
               }});
        }
        if(type==="users")
        {
            add.user=document.getElementById("Username").value;
            add.pass=document.getElementById("Pass").value;
            add.email=document.getElementById("Email").value;
            add.ddl=document.getElementById("RolesDDL");
            add.idrole=add.ddl.options[add.ddl.selectedIndex].value;
         
            
            $.ajax({
            type:'post',
            data:{user:add.user,pass:add.pass,email:add.email,idrole:add.idrole},
            url:'<?php echo base_url(); ?>adminPanel/add/users/' ,
            success:function (result)
               {
                      show("users");  
                      
               }});
        }
        if(type==="brand")
        {
            add.brand=document.getElementById("Brand").value;
            $.ajax({
            type:'post',
            data:{brand:add.brand},
            url:'<?php echo base_url(); ?>adminPanel/add/brand/' ,
            success:function (result)
               {
                      show("brands");  
                      
               }});
        }
        if(type==="fuels")
        {
            add.fuel=document.getElementById("Fuel").value;
            $.ajax({
            type:'post',
            data:{fuel:add.fuel},
            url:'<?php echo base_url(); ?>adminPanel/add/fuels/' ,
            success:function (result)
               {
                      show("fuels");  
                      
               }});
        }
    }
</script>

</div>
</body></html>
 