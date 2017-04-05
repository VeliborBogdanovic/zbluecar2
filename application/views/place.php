<div class="bg-theme">
     <?php if($this->session->flashdata('fail'))
         {
                echo $this->session->flashdata('fail')."Uploud failed";

         }
         if($this->session->flashdata('place'))
         {
                echo $this->session->flashdata('place');

         }

         ?>
	<div class="filter zerogrid">
		<h2 class="t-center">Place you ad</h2>

                    <?php echo form_open_multipart('/place_ad',$form); ?>
			<div class="col-2-1">
                             <?php echo validation_errors('<div></div>'); ?>
				<div class="wrap-col">
					<?php echo form_label('Brand: ','brand'); ?>
                                    <select id="brands" name="brands1">
                                        <option value="0">Select brand</option>
                                        <?php
                                            foreach ($all_cars as $car) {
                                               echo "<option value=".$car->brand.">".$car->brand."</option>";

                                            }
                                        ?>
                                    </select>

				</div>
			</div>
			<div class="col-2-1">
                             <div class="wrap-col" id="wrap-col1">
                                   <label>Model:</label>
                                   <select id="modals" name="model1">
                                       <option value="null">Select model</option>
                                   </select>
				</div>
                            <div id="modalilo"></div>
			</div>
			<div class="col-2-1">

                             <div class="wrap-col" id="wrap-col1">
                                   <label>Price:</label>
                                    <?php echo form_input($price) ?>
				</div>

			</div>
                    <div class="col-2-1">
                             <div class="wrap-col" id="wrap-col1">
                                   <label>Year:</label>
                                    <?php echo form_input($year);

                                    ?>
				</div>

			</div>
                    <div class="col-2-1">
                             <div class="wrap-col" id="wrap-col1">
                                 <fieldset style="" class="fieldset1">
                                     <legend> &nbsp;Fuel: &nbsp; &nbsp;&nbsp;</legend>
                                 &nbsp;&nbsp;  Petrol <?php echo form_input($fuel);  ?>
                                   </br>
                                 &nbsp;&nbsp;  Diesel <?php echo form_input($fuel1); ?>
                                 </fieldset>
				</div>

			</div>
                    <div class="col-1-4">
                             <div class="wrap-col" id="wrap-col1">
                                   <label>Upload your car picture</label>
                                   <?php echo form_input($pic); ?>

				</div>
                            <div id="modalilo"></div>
			</div>
			<div class="col-1-4">
				<div class="wrap-col" id="por">
					<br>
                                        <?php echo form_input($submit1); ?>


				</div>
			</div>
                    <?php echo form_close(); ?>

	</div>
</div>
