<?php

class form {

	public function input($label,$name,$id=null, $value=null,$placeholder=null,$onclick=null,$fonction=null) {
		echo "<div class='form-group'>";
		echo "<label>".$label."</label>";
		echo "<input required class='form-control' type='text' name='".$name."' id='".$id."' value='".$value."' placeholder='".$placeholder."' onclick='".$onclick."'>";
		echo "</div>";
	}

	public function textarea($label,$name,$id=null,$value=null) {
		echo "<div class='form-group'>";
		echo "<label>".$label."</label>";
		echo "<textarea required class='form-control' rows='10' name='".$name."' id='".$id."' style='display:none;'>";
		echo $value."</textarea></div>";
	}

    public function iframe(){
        echo "<div class='form-group'>";
		echo "<iframe required name='editor' class='form-control' id='editor' rows='10' style='width:100%;height:400px; box-shadow: inset 0px 10px 10px -10px #656565; border-top:none;'></iframe>";
    }

	public function hiddenInput($name,$value){
		echo "<input hidden value='".$value."' name='".$name."'>";
	}

	public function button($class,$value,$onclick=null, $ico, $indic=null){
		echo "<button class='".$class."' type='button' value='".$value."' onclick='".$onclick."'>".$ico."<span>".$indic."</span></button>";
	}

	public function file($label,$name,$id,$multiple,$required=null){
		echo "<label>".$label."</label>";
        echo"<input ".$required." id='".$id."' name='".$name."' type='file' ".$multiple." class='file-loading'>";
	}

	public function submit($value){
        echo "<input type='submit' onclick='formsubmit()' value=$value class='btn btn-primary' style='width:100%; margin-top:50px;''>";
	}


}

?>
