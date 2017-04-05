<div class="col-md-12">
<?php 
                           $i=1;?>

                    <div class="table">
                    <table class=" table col-sm-1"  id="modify_table">
    <thead>
                        <tr>
                            <th class="center"></th>
                            <th class="center">Fuel</th>
                            
                            <th  style="text-align: center" class="center">Options</th>
                        </tr>
    </thead>
    <tbody>
                            <?php foreach($fuels as $f){?>
                        <tr>
                            <td class="center">
                                 <?php echo $i;?>
                            </td>
                            <td class="center">
                               <?php echo $f->type?>
                            </td>
                            
                           
    
                            <td class="center">
                                 
                                 <a href="javascript:formodify('fuels',<?php echo $i?>);"><b style="color:green;">Modify</b></a>
                                
                            </td>
                            <td class="center">
                                <a href="javascript:deletee('fuels',<?php echo $f->id_fuel;?>);"><b style="color:red;">Delete</b></a>
                            </td>
                            <td class="hidden">
                                <?php echo $f->id_fuel ?>
                            </td>
                        </tr>
                        
                       <?php $i++; }?>
    <tbody>
                    </table>
                        <h4>Add new fuel type</h4>
                        <input id="Fuel" placeholder="Fuel.." type="text"/>
                        
                        <h4><a href="javascript:add('fuels');" class="success"><b style="color:green;" class='center'>Add </b></a></h4>
                        <div height="800px" ></div>
                        <div>
                            
                    </div>