<?php
/*
Mr. Menu v1 (July 2009)
Exclusive to http://www.themeforest.net
Coded by Davide Gaido
Contact: david.0plus1@gmail.com
Url: http://www.0plus1.com/mrmenu
*/

include( dirname(__FILE__) . '/../../menu.class.php');

function makeSafe($value) {
	if (is_array($value)) {
		foreach($value as $k=>$v) { $value[$k]=mysql_real_escape_string($v); }
	} else {
		$safe=mysql_real_escape_string($value);
	}
	return $safe;
}

class Admin extends Menu {
		
	function lista(){
		$array=$this->query();
		echo $this->makeList($array['parent'],$array['sub']);
	}
	//makeList
	function makeList($array,$sub_array){
		//Check if it's an array
		if (is_array($array) && count($array) > 0) {
			$last = count($array);
			$i=0;
        	foreach ($array as $k => $v) {
				$i++;
				$pos = $this->checkPos($i,$last);
				//The item has a child!
				if (empty($v[link])) {
					//We print the parent
					$return .= $this->makeRow($v['id'],$v['label'],"parent",$pos);
					//We print the child if it already exists!
					if (is_array($sub_array) && count($sub_array) > 0) {
						$s_i=0;
						foreach ($sub_array as $sub_k => $sub_v) {
							//We check if the child id is the same as the parent
							if ($v['id'] == $sub_v[parent]) {
								$s_i++;
									//We get count elements
									$sql = "SELECT COUNT(`id`) as conta FROM ".$this->table." WHERE `parent_id`=".$sub_v[parent]." LIMIT 1;";
									$result = mysql_query($sql) or die(mysql_error());
									$row = mysql_fetch_array($result);
									$s_last = $row['conta'];
									$s_pos = $this->checkPos($s_i,$s_last);								
								//echo 'i: '.$s_i . '   last:'. $s_last. '<br>';
								$return .= $this->makeRow($sub_v['id'],$sub_v['label'],"child",$s_pos);
							}					
						}
					}
				//The item is single!
            	} else {
					$return .= $this->makeRow($v['id'],$v['label'],"standard",$pos);
                }			
        	}
        } else {}
 		
        return $return;
	}
	function checkPos($i,$last){
		if(($i=="1")&&($last!="1")) {$pos="first";}
		elseif (($i==$last)&&($last!="1")) {$pos="last";}
		elseif ($last=="1") {$pos="unique";}
		else {$pos="m";}
		return $pos;
	}
	//
	function makeRow($id,$label,$type,$pos){
		$return  = '<tr>';
			$return .= '<td class="first '.$type.'"><a href = "';
			if ($type=="child") {$return.='sub_';}
			$return .= 'item.php?id='.$id;
			if ($type=="parent") { $return .= '&has_child=1'; }
			$return .= '">'.$label.'</td>' ."\n";
			$return .= '<td>';
				if (($pos!="first")&&($pos!="unique")) {$return.='<a href="#" onclick="return shifter(\''.$id.'\',\'down\');"><img src="img/arrow_up.png" width="16" height="16" alt="" /></a>';}
			$return.='</td>';
			$return .= '<td>';
				if (($pos!="last")&&($pos!="unique")) {$return .= '<a href="#" onclick="return shifter(\''.$id.'\',\'up\');"><img src="img/arrow_down.png" width="16" height="16" alt="" /></a>';}
			$return.='</td>';
			$return .= '<td class="last"><a href="#" onclick="return s_delete(\''.$id.'\');"><img src="img/hr.gif" width="16" height="16" alt="" /></a></td>'. "\n";
		$return .= '</tr>';
		return $return;
	}
}
/*
shifter.php
*/
class Shifter extends Menu {
	
	var $multiplier = "10000";
	
	function sorter($id,$direction){
		$id=makeSafe($id);//makeDbSafe
		//create the order temp field based on the current order
		$this->checkIn();
		//We get the current item position
		$sql = "SELECT `order` FROM ". $this->table . " WHERE id = '" . $id . "' LIMIT 1;";
		$result = mysql_query($sql) or die(mysql_error());
		$row = mysql_fetch_array($result);
		$id_order = $row['order'];
		//Get the mid of the multiplier
		$mid=(($this->multiplier)/2)+($this->multiplier);
		//Select items based upon current order
		if($direction=='up') {
			$id_order=$id_order+1;
			$many=$this->hasParent($id_order);
			if ($many) {$many=$many*$this->multiplier; $mid=$mid+$many;}
			echo $sql = "UPDATE ".$this->table." SET `order_temp`=`order_temp`+$mid WHERE id=$id LIMIT 1;";
		}
		else {
			$many=$this->hasParent($id_order);
			if ($many) {$many=$many*$this->multiplier; $mid=$mid+$many;}
			echo $sql = "UPDATE ".$this->table." SET `order_temp`=`order_temp`-$mid WHERE id=$id LIMIT 1;";
		}
		//Set the new order_temp of the item
		$items = mysql_query($sql) or die(mysql_error());
		//Rearrange the items
		$this->checkOut();
		
	}
	function hasParent($id_order){
		$id_order=makeSafe($id_order);//makeDbSafe
		//Select items based upon current order
		$sql = "SELECT `parent_id` FROM ".$this->table." WHERE `order`=$id_order LIMIT 1;";
		$result = mysql_query($sql) or die(mysql_error());
		$row = mysql_fetch_array($result);
		$parent_id=$row['parent_id'];
		
		if($parent_id){
			$sql = "SELECT COUNT(`id`) as conta FROM ".$this->table." WHERE `parent_id`=$parent_id LIMIT 1;";
			$result = mysql_query($sql) or die(mysql_error());
			$row = mysql_fetch_array($result);
			return $row['conta'];			
		}
		else {return false;}
	}
	//checkIn
	function checkIn(){
		$sql = "SELECT `id`, `order` FROM ".$this->table.";";
		$items = mysql_query($sql) or die(mysql_error());
		while ($obj = mysql_fetch_object($items)) {
			$array[$obj->id]['id'] = $obj->id;
			$array[$obj->id]['order'] = $obj->order;
		}
		mysql_free_result($items);
		
		if (is_array($array) && count($array) > 0) {
			foreach ($array as $k => $v) {
				$id = $v['id'];
				//We multiply for a big number to allow enough room to shif the items!
				$order_temp = $v['order']*$this->multiplier;
				//The query
				$query = "UPDATE ".$this->table." SET order_temp=$order_temp WHERE id=$id";
				$result = mysql_query($query) or die(mysql_error());
			}
		}
	}
	//checkOut
	function checkOut(){
		$sql = "SELECT `id` FROM ".$this->table." ORDER BY order_temp ASC;";
		$items = mysql_query($sql) or die(mysql_error());
		while ($obj = mysql_fetch_object($items)) {
			$array[$obj->id]['id'] = $obj->id;
		}
		
		mysql_free_result($items);
		
		if (is_array($array) && count($array) > 0) {
			$i=1;
			foreach ($array as $k => $v) {
				$id = $v['id'];
				//The query
				$query = "UPDATE ".$this->table." SET `order`=$i WHERE id=$id";
				$result = mysql_query($query) or die(mysql_error());
				$i++;
			}
		}
	}
	//function inBetween (deprecated)
	function inBetween($one,$two) {
		//one is supposed to be smaller than two if this is not the case we swap it!
		if($one>$two) {$swap=$one;$one=$two;$two=$swap;}
		//return the value
		$mid = (($two-$one)/2)+$one;
		return $mid;
	}
}
/*
edit.php
*/
class Item extends Menu {
	
	function row($id) {
		$id=makeSafe($id);//makeDbSafe
		$query = "SELECT * FROM ". $this->table . " WHERE id = '" . $id . "' ;";
		$result = mysql_query($query) or die(mysql_error());
		$row = mysql_fetch_array($result);
		return $row;
	}
	function child($id){
		$id=makeSafe($id);//makeDbSafe
		$sql = "SELECT id, label, link_url, parent_id FROM " . $this->table . " WHERE parent_id = " .$id. ";";
		$items = mysql_query($sql);
		while ($obj = mysql_fetch_object($items)) {
				$array[$obj->id]['id'] = $obj->id;
				$array[$obj->id]['label'] = $obj->label;
				$array[$obj->id]['link'] = $obj->link_url;
		}
		mysql_free_result($items);
		
		if (is_array($array) && count($array) > 0) {
			return $array; 
		} else {
			return false;
		}
	}
	//select
	function select($parent_id){
		$parent_id=makeSafe($parent_id);//makeDbSafe
		$sql = "SELECT id, label, link_url FROM " . $this->table . ";";
		$items = mysql_query($sql);
		while ($obj = mysql_fetch_object($items)) {
				$array[$obj->id]['id'] = $obj->id;
				$array[$obj->id]['label'] = $obj->label;
				$array[$obj->id]['link_url'] = $obj->link_url;
		}
		mysql_free_result($items);
		
		if (is_array($array) && count($array) > 0) {
			foreach ($array as $k => $v) {
				echo '<option value="'.$v['id'].'"';
				if($v['link_url']) {echo 'class="red"';}
				if($v['id']==$parent_id) {echo 'SELECTED';}
				echo '>'.$v['label'].'</option>';
			}
		}
	}
	//
	function order($id){
		$id=makeSafe($id);//makeDbSafe
		$sql = "UPDATE ".$this->table." SET `order` = '$id'	WHERE id = '$id';";
		$result	= mysql_query($sql) or die(mysql_error());
	}
}

class Table extends Menu {
	function select(){
		$sql = "SHOW TABLES;";
		$result	= mysql_query($sql) or die(mysql_error());
		while($row = mysql_fetch_array($result)){
			echo '<option value="'.$row[0].'">'.$row[0].'</option>';
		}
	}
	function create($name){
		$name=makeSafe($name);//makeDbSafe
		$sql = "CREATE TABLE `".$name."` (
				  `id` int(5) NOT NULL auto_increment,
				  `label` varchar(50) NOT NULL default '',
				  `link_url` varchar(100) NOT NULL default '',
				  `parent_id` int(5) NOT NULL default '0',
				  `has_child` varchar(1) NOT NULL default '0',
				  `order` int(5) NOT NULL,
				  `order_temp` int(10) NOT NULL,
				  PRIMARY KEY  (`id`)
				) ENGINE=MyISAM  DEFAULT CHARSET=latin1;";
		$result	= mysql_query($sql) or die(mysql_error());
	}
}
/*
ajax/delete.php
*/
class Delete extends Menu {
	function del($id){
		$id=makeSafe($id);//makeDbSafe
		$sql = "SELECT `id`, `link_url` FROM ".$this->table." WHERE `id`=$id LIMIT 1;";
		$result	= mysql_query($sql) or die(mysql_error());
		$row = mysql_fetch_array($result);
		if(empty($row['link_url'])) {
			$sql = "DELETE FROM ".$this->table." WHERE parent_id = $id;";
			$result	= mysql_query($sql) or die(mysql_error());
			echo '<p>Item and all his child deleted succesfully</p>';
		}
		$sql = "DELETE FROM ".$this->table." WHERE id = $id LIMIT 1;";
		$result	= mysql_query($sql) or die(mysql_error());
		echo '<p>Item deleted succesfully</p>';
	}
}
/*
Autorizer
*/
class Authorizer extends Menu {
	
	var $session_name = "mrmenu";
	var $session_username = "";
	var $session_password = "";
	//
	function Authorizer() {
		parent::Menu();
		session_start();
	}
	function isLogged(){
		if(($this->username)&&($this->password)) {
			if ($this->sessionSet()) {
				$this->getSession();
				if ($this->userExists($this->session_username,$this->session_password)) { return "logged_in"; }
				else {$this->redirect();$this->killAll();}
			} else {$this->redirect();$this->killAll();}
		} else {
			return true;
		}
	}
	//Function cookieSet controlla se essite un cookie (non lo legge e non autentica l' utente)
	function sessionSet(){
		if(isset($_SESSION["$this->session_name"])) {
			return true;
		} else {
			return false;
		}
	}
	//getSession
	function getSession(){
		$session = explode(",",$_SESSION["$this->session_name"]);	
		$this->session_username = $session[0];
		$this->session_password = $session[1];
	}
	//userExist
	function userExists($username,$password) {
		if (($this->username==$username)&&($this->password==$password)) {
        	return true;
    	} else {
			return false;
		}
	}
	//setSession
	function setSession($username,$password){
		$values = array($username,$password);
		$session = implode(",",$values);
		$_SESSION["$this->session_name"] = $session;
	}
	//utils
	function logout(){
		unset($_SESSION["$this->session_name"]);
		session_unset();
		$this->redirect();
	}
	function redirect($location="login.php"){
		header("location:".$location);
	}
	
	function killAll(){
		$this->username = "";
		$this->password = "";
		die('Please don\'t hack us.');
	}
}
?>