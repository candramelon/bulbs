<div class="message_page">
	<div class="row" style="margin-left:0px; margin-right:0px;">
    
    	<div class="col-md-9" style="padding:0px; ">
        <?php
		if($this->session->userdata('user_type_id') == 2){
		?>
        <?= $this->access->get_navbar_category(); ?>
        <?php
        }else if($this->session->userdata('user_type_id') == 3){
		?>
        <?= $this->access->get_navbar_category_regular(); ?>
        <?php
        }
		?>
        
    		<div class="message_left">
            
            
            	
        		<div class="profile_left_color2">
        			<div class="profile_left_content">
                    	<?php
                        if($data_creatives['user_id']){
						?>
        				<div class="profile_name">Conversation with <?= $data_creatives['creative_wp_name']?></div>
                        <?php
						}else{
						?>
                        <div class="profile_name">Message not found</div>
                        <?php
						}
						?>
                    </div>
        		</div>
                
                <div class="profile_left_color2">
                	<!-- start chat -->
                    <?php
					if($data_creatives['user_id']){
                    $q_message = mysql_query("select a.*, c.creative_img, c.creative_wp_name
												from message_details a
												join messages b on b.message_id = a.message_id
												join creatives c on c.user_id = a.user_id
												where b.user_creative_id = '".$data_creatives['user_id']."'
												and b.user_regular_id = '".$this->session->userdata('user_id')."'
												order by md_id asc
												");
					while($r_message = mysql_fetch_array($q_message)){ 
					?>
        			<div class="profile_left_content">
        				<div class="col-xs-1">
                            <div class="row">
							  <?php
                               $img_class_message = $this->access->get_valid_profile_img(base_url()."assets/images/profile/".$r_message['creative_img']);
                              ?>
                                 <div class="box-showcase_profile">
                                    <div class="box-showcaseInnerProfile">
                                        <img src="<?= base_url(); ?>assets/images/profile/<?= $r_message['creative_img']?>" class="<?= $img_class_message ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                       	 <div class="col-xs-11">
                           	
                            	<div class="col-xs-7">
                                    <div class="form-group">
                                        <div class="following_name">
                                            <?= $r_message['creative_wp_name'] ?>
                                         </div>
                                    </div>
                                </div>
                                <div class="col-xs-5">
                                	<div class="form-group">
                                        <div  style="text-align:right;">
                                            <?= $this->access->format_date($r_message['md_date']); ?>
                                         </div>
                                    </div>
                                </div>
                               
                                <div class="col-md-12">
                                	<div class="form-group">
                                <?= $r_message['md_comment'] ?>
                                	</div>
                                </div>
                                
                        </div>
                    </div>
                    <?php
					}
					}
					?>
                    <!-- end chat-->
        		</div>
                
                <!-- message comment -->
                <?php
                if($data_creatives['user_id']){
				?>
                <form id="form1" name="form1" method="post" action="<?=site_url('message/send/'.$data_creatives['user_id'])?>" enctype="multipart/form-data">
                <div class="message_comment">
                	
                		<div class="profile_left_content">
                         	<div class="col-md-12" style="padding-left:0px;">
                                <div class="form-group">
                                    <textarea required name="i_comment" cols="" rows="5" class="form-control" placeholder="Write your message..."></textarea>
                                </div>
                                <div class="form-group">
                                	<input class="btn btn-primary" type="submit" value="SEND MESSAGE"/>
                                </div>
                            </div>
                        </div>
        			
                </div>
                </form>
                <?php
				}
				?>
                <!-- end message comment-->
                
        	</div>
		</div>
    	
        <div class="col-md-3" style="padding:0px; ">
    		<div class="message_right">
            	
        			<div class="message_right_content">
        				<div class="profile_name" style="margin-bottom:20px; padding-left:20px;">Chat List</div>
                        
                        <!-- chat list -->
                        <?php
                       /* $q_chat = mysql_query("select a.*, c.creative_img, c.creative_wp_name
												from messages a 
												join creatives c on c.user_id = a.user_creative_id
												where a.user_regular_id = '".$this->session->userdata('user_id')."'
												order by m_id desc");*/
						$q_chat = mysql_query("select * from creatives 
												where user_id <> '".$this->session->userdata('user_id')."'
												order by creative_id");						
						while($r_chat = mysql_fetch_array($q_chat)){ 
						?>
                        <a href="<?=site_url('message/view/'.$r_chat['user_id'])?>">
                        <div class="chat_content" <?php if($r_chat['user_id'] == $data_creatives['user_id']){ ?> style="background:#F2F2F2;" <?php }?>>
                            <div class="row">
                                <div class="col-xs-3">
                                   
                                      <?php
                                       $img_class_chat = $this->access->get_valid_profile_img(base_url()."assets/images/profile/".$r_chat['creative_img']);
                                      ?>
                                         <div class="box-showcase_profile">
                                            <div class="box-showcaseInnerProfile">
                                                <img src="<?= base_url(); ?>assets/images/profile/<?= $r_chat['creative_img']?>" class="<?= $img_class_chat ?>">
                                            </div>
                                        </div>
                                    
                                </div>
                                <div class="col-xs-9" >
                                			
                                                <div class="message_name">
                                                    <?= $r_chat['creative_wp_name'] ?>
                                                 </div>
                                            
                                           	 	20 Jun
                                </div>
                            </div>
                   		</div>
                        </a>
                        <?php
                        }
						?>
                        <!-- end chat list -->
                        
                        
                        
                        
                    </div>
            </div>
		</div>
    </div>    	
</div>


