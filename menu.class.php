<?php
/*
Mr. Menu v1 (July 2009)
Exclusive to http://www.themeforest.net
Coded by Davide Gaido
Contact: david.0plus1@gmail.com
Url: http://www.0plus1.com/mrmenu
*/
class Menu {
	
/*-----------------
	Options
----------------*/

//----------------------------------------------------------------Start editing here:

	//database options: (required)
	var $host = "localhost";
	var $user = "root";
	var $pass = "root";
	var $db = "mpe";
	var $table = "menu";
	/*
	CSS OPTIONS
	*/
	//<ul> that wraps menu
	var $css_id = ""; //id
	var $css_class = "mrmenu_hor"; //class
	//menu classes
	var $css_active = "active"; //active link
	var $css_parent = "parent"; //parent item
	var $css_special = "special"; //special item<br />
	var $css_hidden = "hidden"; //class to hide the submenu
	/*
	HTML OPTIONS
	*/
	//Outputs <span> tag?
	var $span = "";
	//Set this to append a special class to a particular label
	var $special = "";
	//Set this to an url to have it preceding every link (absolute links)
	var $url = ""; //must have a / (forward slash) after the url
	/*
	JAVA OPTIONS
	*/
	//dropdown speed
	var $show_speed = "fast"; //show
	var $hide_speed = "fast"; //hide
	var $js_jquery = "1"; //Include jquery?
	var $js_safe = "1"; //jquery safemode?
	/*
	AUTH
	*/
	var $username = "iamclif";
	var $password = "mpe";	
	
//-------------------------------------------------------------------stop editing here

	function Menu($table=""){
		if($table) {$this->table=$table;}
		$this->initSQL();
		ob_start();
	}
	//initSQL initialize mysql
	function initSQL(){
		mysql_connect($this->host,$this->user,$this->pass);
		mysql_select_db($this->db) or die("Errore sul database: ".mysql_error());
	}
	//makeMenu creates menu
	function makeMenu(){
		//Menu vero e proprio
		$array=$this->query();
		$this->makeULLI($array['parent'],$array['sub']);
	}
	function makeFooter(){
		$this->queryFoot();
	}
	//query retrieve elements to create the menu
	function query(){
		$sql = "SELECT id, label, link_url, parent_id FROM `".$this->table."` ORDER BY `order` ASC";
		$items = mysql_query($sql) or die(mysql_error());
		while ($obj = mysql_fetch_object($items)) {
			if ($obj->parent_id == 0) {
				$parent_menu[$obj->id]['id'] = $obj->id;
				$parent_menu[$obj->id]['label'] = $obj->label;
				$parent_menu[$obj->id]['link'] = $obj->link_url;
			} else {
				$sub_menu[$obj->id]['id'] = $obj->id;
				$sub_menu[$obj->id]['parent'] = $obj->parent_id;
				$sub_menu[$obj->id]['label'] = $obj->label;
				$sub_menu[$obj->id]['link'] = $obj->link_url;
				$parent_menu[$obj->parent_id]['count']++;
			}
		}
		mysql_free_result($items);
		$array['parent'] = $parent_menu;
		$array['sub'] = $sub_menu;
		return $array;
	}
	//QueryFoot retrieves elements specifically for the footer
	function queryFoot(){
		$this->initSQL();
		$sql = "SELECT id, label, link_url FROM ".$this->table." ORDER BY `order` ASC";
		$items = mysql_query($sql) or die(mysql_error());
		while ($obj = mysql_fetch_object($items)) {
			$menu[$obj->id]['id'] = $obj->id;
			$menu[$obj->id]['label'] = $obj->label;
			$menu[$obj->id]['link'] = $obj->link_url;
		}
		mysql_free_result($items);
		$this->makeA($menu);
	}
	//MakeUlli ($array, $sub_array) creates the menu after recieving the arrays
	function makeULLI($array, $sub_array) {
		
		if ($this->url) {$url = $this->url;}
		
		//opening <ul> tag
		$return = '<ul';
		if ($this->css_id) { $return.= ' id="'.$this->css_id.'"'; }
		if ($this->css_class) { $return.= ' class="'.$this->css_class.'"'; }
		$return.= '>';
		
         if (is_array($array) && count($array) > 0) {
         	foreach ($array as $k => $v) {
				
				/*
				MENU WITH CHILDS
				*/
				if (empty($v['link'])) {
					//This <li> is a parent
					$return .= '<li class="'.$this->css_parent.'">'."\n".'<a href="#" class="'.$this->css_parent.'"';
					//Is the current link active?
					if ($this->checkLink($v['link'],$v['id'],$sub_array)) {$return.='class="'.$this->css_active.'"';}
					//close <li>
					$return.='>'."\n";
					//span?
					if ($this->span) {
						$return .= '<span';
							//Is the current link active?
							if ($this->checkLink($v['link'],$v['id'],$sub_array)) { $return.='class="'.$this->css_active.'"';}
						$return .= '>'."\n";
					}
					//Item label
					$return .= $v['label'];
					//span?
					if ($this->span) {$return .= '</span>'."\n";}
					//close <a>
					$return .= '</a>'."\n";
						//Create the submenu
						if (is_array($sub_array) && count($sub_array) > 0) {
							$return .= '<ul class="'.$this->css_hidden.'">';
							foreach ($sub_array as $sub_k => $sub_v) {
								if ($v['id'] == $sub_v['parent']) {
									$return .= '<li>'."\n".'<a href="';
									$parsed_link = substr($sub_v['link'], 0, 7);
									//If it's not an external link we append the absolute url parameter (if it's there)
									if ($parsed_link!='http://') { $return .= $url; }
									$return .= $sub_v['link']. '">'."\n". $sub_v['label'] . '</a>'."\n".'</li>'."\n";
								}
							}
							$return .= '</ul>'."\n";
						}
					$return.='</li>'."\n";
           		}
				/*
				NORMAL MENU
				*/
				
				else {
					$parsed_link = substr($v['link'], 0, 7);
					$return .= '<li>'."\n".'<a href="';
					//If it's not an external link we append the absolute url parameter (if it's there)
					if ($parsed_link!='http://') { $return .= $url; }
					//link
					$return .= $v['link'].'"';
					//This has a special attribute?
						//special?
						if ($v['label']==$this->special) {$return .= ' class="'.$this->css_special.'"';}
						//active?
						elseif ($this->checkLink($v['link'],$v['id'],$array)) {$return .= ' class="'.$this->css_active.'"';}
					$return .= '>'."\n";
					if ($this->span) {
						$return .= '<span';
						//This has a special attribute?
							//special?
							if ($v['label']==$this->special) {$return .= ' class="'.$this->css_special.'"';}
							//active?
							elseif ($this->checkLink($v['link'],$v['id'],$array)) {$return .= ' class="'.$this->css_active.'"';}
						$return.= '>'."\n";
					}
					$return .= $v['label'];
					if ($this->span) {'</span>'."\n";}
					$return.='</a>'."\n".'</li>'."\n";
       			}
			}
        } else {$return.='<li> (Empty Menu) </li>';}
        $return .= '</ul>'."\n";
    	echo $return;
	}
	//checkLink($link) checks if the link is active!
	function checkLink($link,$id,$array) {
		//Array may be empty if no child exists
		$cur_page = $_SERVER['PHP_SELF'];
		$cur_page = substr($cur_page, 1);

		if (is_array($array)) {
			foreach ($array as $k=>$v) {
				if (($v['link'] == $cur_page)&&($v['parent']==$id)) {$check="1";}
			}
		}
		if ($link == $cur_page) {return true;}
		elseif ($check) {return true;}
		else {return false;}
	}
	//makeA
	function makeA($array) {
		if (is_array($array) && count($array) > 0) {
			//VArs to get last element
			$i=1;
			$total = count($array);
			//Start the foreach cycle
			foreach ($array as $k => $v) {
				$return .= '<a href="';
					if(empty($v['link'])) { $return.= '#'; }
					else { $return.= $v['link']; }
				$return.='">';
					if($this->span) { $return.= '<span>'; }
				$return .= $v['label'];
					if($this->span) { $return .= '</span>';}
				$return .= '</a>';
					//is this the last item?
					if ($i!=$total) {$return .= '&nbsp;|&nbsp;';}
				$return .= "\n";
				//Increment the value of i
				$i++;
			}
			echo $return;
		}
	}
}
?>