<div class="col-md-12">
<?php 
                           $i=1;?>

                    <div class="table">
                    <table class=" table col-sm-1"  id="modify_table">
    <thead>
                        <tr>
                            <th class="center"></th>
                            <th class="center">Path</th>
                            <th class="center">Headline</th>
                            <th colspan="2" style="text-align: center" class="center">Options</th>
                        </tr>
    </thead>
    <tbody>
                            <?php foreach($meni as $m){?>
                        <tr>
                            <td class="center">
                                 <?php echo $i;?>
                            </td>
                            <td class="center">
                               <?php echo $m->path?>
                            </td>
                            
                            <td class="center">
                                <?php echo $m->meni_name?>
                               
                            </td>
    
                            <td class="center">
                                 
                                 <a href="javascript:formodify('meni',<?php echo $i?>);"><b style="color:green;">Modify</b></a>
                                
                            </td>
                            <td class="center">
                                <a href="javascript:deletee('meni',<?php echo $m->id_meni;?>);"><b style="color:red;">Delete</b></a>
                            </td>
                            <td class="hidden">
                                <?php echo $m->id_meni ?>
                            </td>
                        </tr>
                        
                       <?php $i++; }?>
    <tbody>
                    </table>
                        <h4>Add menu item</h4>
                        <input id="MenuPath" placeholder="Path.." type="text"/>
                        <input id="MenuName" placeholder="Menu item name..." type="text"/>
                        <h4><a href="javascript:add('meni');" class="success"><b style="color:green;" class='center'>Add </b></a></h4>
                        <div height="800px" ></div>
                        <div>
                            <!--<a href="javascript:mainColor();" class="success"><b style="color:green;" class='center'>color </b></a></h4>-->
                    </div>