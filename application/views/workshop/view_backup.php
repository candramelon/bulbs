<div class="col-md-12" style="padding:0px;" >
      <img src="<?= base_url(); ?>assets/images/workshop/<?= $data_workshop['workshop_img'] ?>" class="img_banner_project">
</div>

<div class="col-md-12">
    <div class="row">
        <div class="project_desc" style="background:#fff;">
            <div class="container">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-9">
                                <div class="profile_name"><?= $data_workshop['workshop_name'] ?></div>
                                <div class="profile_location">by <?= $data_workshop['creative_wp_name'] ?>o</div>
                                <div class="profile_description_title">Project Info</div>
                                <div class="profile_description_content">
                               <?= $data_workshop['workshop_description'] ?>
                                </div>
                                 <a href="javascript: history.back()" class="btn btn-primary">Back</a>
                        </div>

                        <div class="col-md-3">
                            <div class="profile_name">&nbsp;</div>
                            <div class="profile_location">Published on <?php echo $this->access->format_date($data_workshop['workshop_date']);  ?></div>
                            <div class="profile_description_title"></div>
                            <div class="profile_description_content">
                              
                            </div>
                        </div>

                    </div>
                </div>

                <div style="clear:both; height:30px;"></div>
				<!--
                 <div class="form-group">
                     <div class="row">
                        <div class="col-md-12">
                            <img src="<?= base_url(); ?>assets/images/project2.jpg" class="img_banner_project">
                        </div>
                     </div>
                </div>

                -->

                 <div style="clear:both; height:50px;"></div>



            </div>
        </div>
    </div>
</div>
