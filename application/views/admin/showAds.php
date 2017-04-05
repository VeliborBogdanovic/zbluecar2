<div class="col-md-12">
<?php 
                           $i=1;?>

    <div class="table" >
                    <table class="table-responsive col-md-12 col-sm-12 col-lg-12" id="modify_table" >
    <thead>
                        <tr>
                            <th class="center"></th>
                            <th class="center">Username</th>
                            <th class="center">Brand</th>
                            <th class="center">Model</th>
                            <th class="center">Price</th>
                            <th class="center">Year</th>
                            <th class="center">Fuel</th>
                            <th class="center">Date</th>
                            <th class="center">Photo</th>
                            
                        </tr>
    </thead>
    <tbody>
                            <?php foreach($ads as $a){?>
                        <tr>
                            <td class="center">
                                 <?php echo $i;?>
                            </td>
                            <td class="center">
                               <?php echo $a->username ?>
                            </td>
                            
                            <td class="center">
                                <?php echo $a->brand?>
                               
                            </td>
                            <td class="center">
                                <?php echo $a->model?>
                               
                            </td>
                            <td class="center">
                                <?php echo $a->price?>&euro;
                               
                            </td>
                            <td class="center">
                                <?php echo $a->year?>
                               
                            </td>
                            <td class="center">
                                <?php echo $a->type?>
                               
                            </td>
                            <td class="center">
                                <?php echo $a->date?>
                               
                            </td>
                            <td class="center">
                                <img src='<?php echo base_url().$a->photo?>' width="70px"/>
                               
                            </td>
                           
                            <td class="center" >
                               <a href="javascript:deletee('ads',<?php echo $a->id_ad;?>);"><b style="color:red;">Delete</b></a>
                            </td>

                        </tr>
                        
                       <?php $i++; }?>
    <tbody>
                    </table>
                        <h4> <a href="<?php echo base_url('place_ad') ?>" class="success"><b style="color:green;" class='center'>Place new ad </b></a></h4>
                        
                        <div>
                            
                    </div>
