<?php 

class Mnfields{



    public function __construct(){


    }

    public static function getFields($type,$name,$label = "Username *",$icon){

        $icons = [
            'user' => 'fa-user',
            'email' => 'fa-envelope',
            'pass' => 'fa-asterisk',
            'website' => 'fa-globe',
            'calendar' => 'fa-calendar',
        ];


    $fileds = <<<EOD
    <div class="form-group">
        <label class="control-label col-md-2" for="mn_{$name}">{$label}</label>
        <div class="col-md-3">
            <div class="input-group">
EOD;
        if(!$icon == null){
            $fileds .= <<<EOD
            <span class="input-group-addon">
            <i class="fa {$icon} fa-fw"></i>
            </span>
EOD;
        }
$fileds .= <<<EOD
        <input type="{$type}" id="mn_{$name}" name="mn_{$name}" class="form-control">
                        </div>
                    </div>
                </div>    
EOD;
        return $fileds;

    }
    // Field Select
    public static function getSelectField($type = "single",$name,$label,$values = []){

    if(is_array($values)){
        $select  = <<<EOD
        <div class="form-group">
        <label class="control-label col-md-2" for="val_skill">{$label}</label>
        <div class="col-md-2">       
    EOD;              
    if($type == "multiple"){          
        $select  .= <<<EOD
        <select id="mn_{$name}" multiple name="mn_{$name}[]" class="form-control">
        <option value="">Please select</option>
EOD;
     }else{
        $select  .= <<<EOD
        <select id="mn_{$name}" name="mn_{$name}" class="form-control">
        <option value="">Please select</option>
EOD;
     }
   
  
        foreach($values as $keys => $value){
           $keys =  strtolower($keys);
        $select .= "<option value='$keys'>$value</option>";
        }
              
       
        $select  .= <<<EOD
                </select>
            </div>
        </div>
EOD;
        return $select;
        }
        
    }
    // Field Textarea
    public function getTextareaField($label,$name,$value=null){
        
    $textarea = <<<EOD
    <div class="form-group">
        <label class="control-label col-md-2" for="mn_{$name}">{$label}</label>
        <div class="col-md-3">
            <div class="input-group">
            <textarea type="textarea" id="mn_{$name}" name="mn_{$name}" class="form-control"></textarea>
            </div>
        </div>
    </div> 
EOD;
    return $textarea;

    }

}