<div class="col-md-12">
<?php 
                           $i=1;?>

                    <div class="table">
                    <table class=" table col-sm-1"  id="modify_table">
    <thead>
                        <tr>
                            <th class="center"></th>
                            <th class="center">Brand</th>
                            
                            <th  style="text-align: center" class="center">Options</th>
                        </tr>
    </thead>
    <tbody>
                            <?php foreach($brands as $b){?>
                        <tr>
                            <td class="center">
                                 <?php echo $i;?>
                            </td>
                            <td class="center">
                               <?php echo $b->brand?>
                            </td>
                            
                           
    
                            <td class="center">
                                 
                                 <a href="javascript:formodify('brand',<?php echo $i?>);"><b style="color:green;">Modify</b></a>
                                
                            </td>
                            <td class="center">
                                <a href="javascript:deletee('brands',<?php echo $b->id_brand;?>);"><b style="color:red;">Delete</b></a>
                            </td>
                            <td class="hidden">
                                <?php echo $b->id_brand ?>
                            </td>
                        </tr>
                        
                       <?php $i++; }?>
    <tbody>
                    </table>
                        <h4>Add new brand</h4>
                        <input id="Brand" placeholder="Brand.." type="text"/>
                        
                        <h4><a href="javascript:add('brand');" class="success"><b style="color:green;" class='center'>Add </b></a></h4>
                        <div height="800px" ></div>
                        <div>
                            
                    </div>