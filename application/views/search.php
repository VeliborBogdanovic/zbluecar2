<div class="bg-theme">
	<div class="filter zerogrid">
		<h2 class="t-center">FIND CAR THAT YOU LOVE</h2>
		
                    <?php echo form_open('search_ajax/ajax2',$form); ?>
			<div class="col-1-4">
				<div class="wrap-col">
					<?php echo form_label('Brand ','brand'); ?>
                                    <select id="brands"  >
                                        <option value="0">Select brand</option>
                                        <?php 
                                            foreach ($all_cars as $car) {
                                               echo "<option value=".$car->brand.">".$car->brand."</option>";
                                              
                                            }
                                        ?>
                                    </select>
					
				</div>
			</div>
			<div class="col-1-4">
                             <div class="wrap-col" id="wrap-col1">
                                   <label>Modal</label>
                                   <select id="modals" >
                                       <option value="null">Select model</option>
                                   </select>
				</div>
                            <div id="modalilo"></div>
			</div>
			
			<div class="col-1-4">
				<div class="wrap-col" id="por">
					<br>
                                       
                                        <input  type="button" class="dugme" id="dugme"  value="SEARCH "/>
                                   
				</div>
			<!--</div>-->
                    <?php echo form_close(); ?>
		
	</div>
</div>
