 <aside class="left-side sidebar-offcanvas">                
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="image" style="text-align:center; margin-bottom:10px; margin-top:10px;">
                        	 <?php
                            
							if($data_user['user_img']==""){
								$img = base_url()."assets/images/user/default.jpg";
							}else{
								$img = base_url()."assets/images/user/".$data_user['user_img'];
							}
							?>
                            <img src="<?= $img ?>" class="img-circle" alt="User Image" />
                        </div>
                        <div class="info" style="text-align:center;">
                            <p style="color:#a0acbf; ">
                                        <?php
                                       
                                        echo "Welcome, ".$data_user['user_username'];
                                        ?>
                                </p>

                            <a style="color:#a0acbf;  "><?= $data_user['user_type_name']?></a>
                        </div>
                    </div>
                   
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                   <?php //if(isset($_SESSION['menu_active'])) { echo $_SESSION['menu_active']; }?>
                    <ul class="sidebar-menu">
                  
                    <li <?php if(isset($_SESSION['menu_active']) && $_SESSION['menu_active'] == 2){ echo "class='active'"; } ?>>
                            <a href="<?= site_url('admin_slider') ?>">
                                <i class="fa fa-circle"></i>
                                <span>Slideshow</span>
                               
                            </a>
                            
                  </li>
                   
                 
                  
                        <li <?php if(isset($_SESSION['menu_active']) && $_SESSION['menu_active'] == 4){ echo "class='active'"; } ?>>
                            <a href="<?= site_url('admin_category') ?>">
                                <i class="fa  fa-circle"></i>
                                <span>Category</span>
                               
                            </a>
                            
                  </li>
                  
                  
                 
                 <!--
                  <li <?php if(isset($_SESSION['menu_active']) && $_SESSION['menu_active'] == 6){ echo "class='active'"; } ?>>
                            <a href="<?= site_url('admin_location') ?>">
                                <i class="fa  fa-circle"></i>
                                <span>Location</span>
                               
                            </a>
                            
                  </li>
                  -->
                  
                   	<li <?php if(isset($_SESSION['menu_active']) && $_SESSION['menu_active'] == 7){ echo "class='active'"; } ?>>
                            <a href="<?= site_url('admin_feature') ?>">
                                <i class="fa fa-circle"></i>
                                <span>Feature Project</span>
                            </a>     
                 	 </li>
                     <li <?php if(isset($_SESSION['menu_active']) && $_SESSION['menu_active'] == 8){ echo "class='active'"; } ?>>
                            <a href="<?= site_url('admin_page_content') ?>">
                                <i class="fa  fa-circle"></i>
                                <span>Page Content</span>
                            </a>     
                 	 </li>
                        
                   
                 
                 
                  <li <?php if(isset($_SESSION['menu_active']) && $_SESSION['menu_active'] == 9){ echo "class='active'"; } ?>>
                            <a href="<?= site_url('admin_member') ?>">
                                <i class="fa fa-users"></i>
                                <span>Member</span>
                               
                            </a>
                            
                  </li>
               
            
              
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>