<?php
$slider = new Sliders();
$sliders = $slider->getSliders();
$insertSlider = [];
if(isset($_POST['addslider']) && $_SERVER['REQUEST_METHOD'] == "POST"){
    $insertSlider = $slider->addSlider($_POST);
}

?>
<div id="page-content">
    <ul id="nav-info" class="clearfix">
        <li><a href="/"><i class="fa fa-home"></i></a></li>
        <li><a href="javascript:void(0)">Forms</a></li>
        <li class="active"><a href="">Slider</a></li>
    </ul>
    <form id="form-validation" action="" method="post" class="form-horizontal form-box remove-margin">
        <h4 class="form-box-header">Hero Slider</h4>
        <div class="form-box-content">
            <div class="sliderContainer">
                <ul class="slider_wrapper">
                    <?php
                        if(is_array($sliders)):
                         foreach($sliders as $slider): 
                    ?>
                    <li>                   
                        <a href="#"> 
                            <span><?= $slider['id']; ?>.</span> 
                            <?= $slider['mn_sl_title']; ?>
                        </a>
                    </li>
                    <?php endforeach;endif;?>
                </ul>
                <button type="submit"  class="btn btn-success">
                <i class="fa fa-check"></i>
                Add Slider
            </button> 
        </div>
        
        
      
        
        
           <?php 
                echo $fields->getFields("text",'sl_title',"Title *",null);
                echo $fields->getTextareaField("Description",'sl_description');
                
                echo $fields->getFields("text",'sl_btn',"Button Text *",null);   
                echo $fields->getFields("url",'sl_btn_url',"Button Url *",null);   
            ?>
        <?php if(isset($insertSlider['err'])):?>
        <div class="form-group" >
            <div class="col-md-10 col-md-offset-2">
                <div class="msg_wrapper" style="width: 270px;">
                <div style="padding: 8px!important;" class="alert alert-danger">
                    !<?= $insertSlider['err']; ?>
                </div>
                </div>
            </div>
        </div>
        <?php endif;?>
        <?php if(isset($insertSlider['success'])):?>
        <div class="form-group" >
            <div class="col-md-10 col-md-offset-2">
                <div class="msg_wrapper" style="width: 270px;">
                <div style="padding: 8px!important;" class="alert alert-success">
                    <?= $insertSlider['success']; ?>!
                </div>
                </div>
            </div>
        </div>
        <?php endif;?>


            <div class="form-group form-actions">
                <div class="col-md-10 col-md-offset-2">
                    <button type="reset" class="btn btn-danger"><i class="fa fa-repeat"></i> Reset</button>
                    <button type="submit" name="addslider" class="btn btn-success"><i class="fa fa-check"></i> Add Slider</button>
                </div>
            </div>
        </div>
    </form>
</div>