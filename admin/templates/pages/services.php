<?php
$services = new Services();
$insertService = [];
if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['addsrvc'])){   
    $insertService = $services->addService($_POST);

}
?>


<div id="page-content">
    <ul id="nav-info" class="clearfix">
        <li><a href="index.php.html"><i class="fa fa-home"></i></a></li>
        <li><a href="javascript:void(0)">Pages</a></li>
        <li><a href="">Home</a></li>
        <li class="active"><a href="">Sevices</a></li>
    </ul>
    <form id="form-validation" action="" method="post" class="form-horizontal form-box remove-margin">
        <h4 class="form-box-header">Services</h4>
        <div class="form-box-content">
            <pre>
                <?php print_r($insertService); ?>
            </pre>

        <div class="sliderContainer">
        
            <ul class="slider_wrapper">
            
            </ul>
            <button type="submit"  class="btn btn-success">
            <i class="fa fa-check"></i>
            Add Slider
        </button> 
     </div>  
       <?php 
                echo $fields->getFields("text",'srv_title',"Service Name *",null);

                echo $fields->getTextareaField("Description",'srv_description');

                $icons = [
                    'bxl-dribbble' => "Dribble",
                    'bx-file' => "File",
                    'bx-tachometer' => 'Tachometer',
                    'bx-world' => 'World',
                ];
                echo $fields->getSelectField("single","srv_icon","Select Icon",$icons);
                echo '<input type="color" name="redcolor" id="">';
                $colors = [
                    'pink'=>'Pink',
                    'blue'=>'Blue',
                    'green'=>'Green',                    
                ];
                echo $fields->getSelectField("single","srv_color","Select Color",$colors);
 
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
                    <button type="submit" name="addsrvc" class="btn btn-success"><i class="fa fa-check"></i> Add Service</button>
                </div>
            </div>
        </div>
    </form>
</div>