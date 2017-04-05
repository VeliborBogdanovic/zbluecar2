 <div id="sidebar" class="col-1-3">
    
                <div class="wrap-col">
                        <!---- Start Widget ---->
                        <div class="widget">
                                <div class="wid-header">
                                        <h5><?php echo $polls[0]->text ;?></h5>
                                </div>
                                <div class="wid-content" id="for_votes">
                                        <?php echo form_open('polls',$form); ?>
                                    <table>
                                        
                                        
                                        <tbody>
                                            <?php $offset=$this->uri->segment(3,0)+1?>
                                            <?php foreach ($polls as $v) :?>
                                            <tr>
                                                <td><?php echo $offset++ ?></td>
                                                <td><?php echo form_label($v->text_a,'q1');?></td>
                                         <td><?php echo form_radio(array('name'=>'pole','id'=> $v->id_question,'value'=> $v->id_answer,'class'=>'anketa'));?></td>
                                         
                                                
                                            </tr>
                                            
                                            <?php endforeach;?>
                                            <tr><td><?php echo form_input($submit);?></td></tr>
                                        </tbody>
                                       
                                    </table>  
                                    
                                    <?php echo form_close(); ?>
                                   
                                    <div id="pageul"> <?php echo $page_links ;?></div> 
                                </div>
                        </div>
                        <!---- Start Widget ---->
                       
                        </div>
                       
                </div>
            </div>
            </div>
    </div>
</div>
</div>
</div>
</section>