
<div class="wrap-box t-center" style="background: #fff; box-shadow: 2px 2px 5px 0px rgba(0,0,0,0.3);margin-top: 50px;"><!--Start Box-->
            <div class="zerogrid">
                <?php if($this->session->flashdata('message'))
         {          $or="";
                 $arr=$this->session->flashdata('message');
                 foreach ($arr as $v) {
                    echo $v->id_user;
                 }
                 
         }?>
                <div class="item">
                    <div class="col-1-3">
                        
                        
                            
                            <img src="<?php echo base_url() ?>/images/me.jpg">
                        
                    </div>
                    <div class="col-2-3">
                        <div class="wrap-col">
                            <div class="item-info">
                                <a href="single.html"><h3>Velibor Bogdanovic</h3></a>
                               <p>Moje ime je Velibor Bogdanović rodjen sam 17 novembra 1994 godine u Beogradu.Završio sam srednju elektrotehničku školu "Nikola Tesla",smer elektrotehničar multimedija.
                                   Trenutno sam student zavrsne godine Visoke ICT škole  </p></p>
                            
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                        </div>
            </div>
    </div>
