<?php 


class form {

	public function input($label,$name,$id=null, $value=null) {
		echo "<div class='form-group'>";
		echo "<label>".$label."</label>";
		echo "<input class='form-control' type='text' name='".$name."' id='".$id."' value='".$value."'>";
		echo "</div>";
	}

	public function textarea($label,$name,$id=null,$value=null) {
		echo "<div class='form-group'>";
		echo "<label>".$label."</label>";
		echo "<textarea class='form-control' rows='7' name='".$name."' id='".$id."'>";
		echo $value."</textarea></div>";
	}

	public function hiddenInput($name,$value){
		echo "<input hidden value='".$value."' name='".$name."'>";
	}

	public function button($class,$value,$onclick=null){
		echo "<button class='".$class."' type='button' value='".$value."' onclick='".$onclick."' style='margin:5px;'>".$value."</button>";
	}

	public function file($label,$name){
		echo "<div class='form-group'>";
		echo "<label>".$label."</label>";
		echo "<input type='file' name=".$name." class='form-control'>";
		echo "</div>";
	}

	public function submit(){
		echo "<button type='submit' class='btn btn-primary'>Envoyer</button>";
	}	


}

?>