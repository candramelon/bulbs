

<link href="<?= base_url(); ?>assets/css/dropzone/jquery.ezdz.min.css" rel="stylesheet" />


<form id="form1" name="form1" method="post" action="<?= $data_project['action'] ?>" enctype="multipart/form-data">



<div class="profile_page">
<div class="row" style="margin-left:0px; margin-right:0px;">
    <div class="col-md-9" style="padding:0px; ">
      <div class="profile_left">
        
        <div class="profile_left_color2" style="min-height:800px">
        <div class="row" style="margin-left:0px; margin-right:0px;">
          <div class="profile_left_content">
            <div class="col-md-11 col-md-offset-1" >
                  <div class="col-md-12" >
                       
                  <div class="form-group">
                                      <div class="profile_name">Upload Work</div>
                                     
                             </div>
                       
                        </div>
            
                        <div class="col-md-12" >
                        
                          <div class="form-group">
                            
                               <div class="img_cover_image">
        
               
                              <input required class="upload_project" type="file" name="i_img_detail" id="i_img_detail" accept="image/png, image/jpeg" />
            
                                </div>
                             </div>



                             <div class="form-group">
                              <div class="profile_description_content">
                                  <textarea required name="i_description" cols="" rows="10" class="form-control" placeHolder="Enter text here..."><?= $data_project['project_description'] ?></textarea>                
                                </div>
                              </div>  

                              <div class="row">
                                <div class="col-md-4" >
                                  <input class="btn button_save" type="submit" value="SAVE"/>
                                </div>
                                <div class="col-md-4" >
                                  <a href="#" class="follow" id="" style="text-decoration:none;"><div class="button_creatives"><i class="fa fa-picture-o"> </i> + ADD IMAGE CONTENT </div></a>
                                </div>
                                <div class="col-md-4" >
                                  <a href="#" class="follow" id="" style="text-decoration:none;"><div class="button_creatives"><i class="fa fa-font"> </i> + ADD TEXT CONTENT</div></a>
                                </div>
                              </div>
                          
                        </div>
                        
                       
              </div>
          </div>
        </div>
        </div>
        
        </div>
  </div>
    
     <div class="col-md-3">
      <div class="profile_right">
        <div class="profile_right_content">
              
                    <div class="col-md-10" >
                        <div class="form-group">
                           <div class="profile_name">Project Details</div>
                        </div> 

                        <div class="form-group">
                        <label>Project Title</label>
                                    <input required type="text" name="i_name" class="form-control" value="<?= $data_project['project_name'] ?>" title="" id="i_name" style="background-color:#f2f2f2;"/>
                        </div>

                        <div class="form-group">
                        <label>Project Concentrations</label>
                                    <?php
                                    $q_project_category = mysql_query("select * from profile_categories order by pc_id");
                                    while($r_project_category = mysql_fetch_array($q_project_category)){
                                      $checked = "";
                                      if($data_project['project_name']){
                                        $q_p_valid = mysql_query("select count(pdc_id) as jumlah from project_detail_categories where project_id = '".$data_project['project_id']."' and pc_id = '".$r_project_category['pc_id']."'");
                                        $r_p_valid = mysql_fetch_array($q_p_valid);
                                        
                                        if($r_p_valid['jumlah'] > 0){
                                          $checked = " checked = 'checked'";
                                        }
                                      }
                                    ?>
                                <div>
                                   
                                        <input type="checkbox" name="i_pc_<?= $r_project_category['pc_id'] ?>" value="1" id="i_pc_<?= $r_project_category['pc_id'] ?>"  <?php echo $checked ?> class="rbutton" />
                                        <?= $r_project_category['pc_name']?>
                                  
                              </div>
                              <?php
                              }
                                ?>
                        </div> 

                        <div class="form-group">
                            
                               <div class="img_cover_image_right">
        
                           
                                  <input required class="" type="file" name="i_img" id="i_img" accept="image/png, image/jpeg" />
                               
                                </div>
                             </div>

                    </div>
            
                        
         
                       
        
            </div>
        </div>
  </div>      
</div>


</form>
<script src="<?= base_url(); ?>assets/js/dropzone/jquery.ezdz.min.js"></script>
<script>
  $('#i_img').ezdz({
			<?php
			if(@$data_project['project_id']){
			?>
			 text: 'Change Images',
			<?php
			}else{
			?>
            text: 'Upload Cover Image',
			<?php
			}
			?>
            validators: {
                maxWidth:  2000,
                maxHeight: 1600
            },
            reject: function(file, errors) {
                if (errors.mimeType) {
                    alert(file.name + ' must be an image.');
                }

                if (errors.maxWidth) {
                    alert(file.name + ' must be width:2000px max.');
                }

                if (errors.maxHeight) {
                    alert(file.name + ' must be height:1600px max.');
                }
            }
        }
		);

  $('.upload_project').ezdz({
     
      
            text: ' + Add Image',
     
            validators: {
                maxWidth:  2000,
                maxHeight: 1600
            },
            reject: function(file, errors) {
                if (errors.mimeType) {
                    alert(file.name + ' must be an image.');
                }

                if (errors.maxWidth) {
                    alert(file.name + ' must be width:2000px max.');
                }

                if (errors.maxHeight) {
                    alert(file.name + ' must be height:1600px max.');
                }
            }
        }
    );
		
		$(function() {
			var $inputs = $('input.rbutton');
			$inputs.change(function() {
				if ($('input.rbutton:checked').length == 3) {
					$inputs.not(':checked').prop('disabled', true);
				} else {
					$inputs.prop('disabled', false);
				}
			});
		});
		
		$(window).load(function(){
			var $inputs = $('input.rbutton');
			if ($('input.rbutton:checked').length == 3) {
					$inputs.not(':checked').prop('disabled', true);
				} else {
					$inputs.prop('disabled', false);
				}
		});
    </script>

		