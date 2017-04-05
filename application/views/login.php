
<div class="zerogrid">
     <?php if($this->session->flashdata('message'))
         {
                echo "<p> Wrong username or password!</p>";
         }?>
<div class="wrap-box">
    <div class="wrap-box t-center" style="background: #fff; box-shadow: 2px 2px 5px 0px rgba(0,0,0,0.3);" ><!--Start Box-->
            <div class="zerogrid">
                <div class="header">
                        <h4>REGISTER</h4>
                </div>
                <strong></strong>
                <p><p>
            </div>
    </div>
    <div class="wrap-box t-center" style="background: #fff; box-shadow: 2px 2px 5px 0px rgba(0,0,0,0.3);"><!--Start Box-->
            <div class="zerogrid">
                <div class="header">
                       <div id="contact_form">
                             <?php echo validation_errors('<div></div>'); ?>
                                        <?php print form_open('/register/radi',$form); ?>
                           <div class="t-left">
                           <label class="row">
                                     <div class="row_selected">
                                                <div class="wrap-col">
                                                    <?php echo form_label('Your username:') ?>
                                                       <?php echo form_input($username) ?>
                                                </div>
                                        </div>
                                </label>
                           <label class="row">
                                        <div class="row_selected">
                                                <div class="wrap-col">
                                                     <?php echo form_label('Your password:') ?>
                                                     <?php echo form_password($password) ?>
                                                </div>
                                        </div>
                           </label>
                           <label class="row">
                                        <div class="row_selected">
                                                <div class="wrap-col">
                                                     <?php echo form_label('Your email:') ?>
                                                         <?php echo form_input($email) ?>
                                                </div>
                                        </div>
                               </label>
                           <label class="row">
                                        <div class="row_selected">
                                             <div class="wrap-col">
                                                    <?php echo form_input($submit1) ?>
                                             </div>
                                          </div>
                               </label>
                        
                </div>
                       <?php echo form_close(); ?>    </div>
                </div>
                <strong></strong>
                <p><p>
            </div>
    </div>
    <div class="wrap-box t-center" style="background: #fff; box-shadow: 2px 2px 5px 0px rgba(0,0,0,0.3);" ><!--Start Box-->
            <div class="zerogrid">
                <div class="header">
                        <h4>LOG IN</h4>
                </div>
                <strong></strong>
                <p><p>
            </div>
    </div>
     <div class="wrap-box t-center" style="background: #fff; box-shadow: 2px 2px 5px 0px rgba(0,0,0,0.3);"><!--Start Box-->
            <div class="zerogrid">
                <div class="header">
                       <div id="contact_form">
                             <?php echo validation_errors('<div></div>'); ?>
                                        <?php print form_open('/log_in',$form); ?>
                           <div class="t-left">
                           <label class="row">
                                     <div class="row_selected">
                                                <div class="wrap-col">
                                                    <?php echo form_label('Your username:') ?>
                                                       <?php echo form_input($username1) ?>
                                                </div>
                                        </div>
                                </label>
                           <label class="row">
                                        <div class="row_selected">
                                                <div class="wrap-col">
                                                     <?php echo form_label('Your password:') ?>
                                                     <?php echo form_password($password1) ?>
                                                </div>
                                        </div>
                           </label>
                           
                           <label class="row">
                                        <div class="row_selected">
                                             <div class="wrap-col">
                                                    <?php echo form_input($submit) ?>
                                             </div>
                                          </div>
                               </label>
                        
                </div>
                           </div>
                </div>
                <strong></strong>
                <p><p>
            </div>
    </div>
</div>    
</div>
