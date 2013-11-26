<h3>Navigation</h3>
	<ul class="nav">
    	<li><a href="item.php">New item</a></li>
		<li class="last"><a href="sub_item.php">New sub-item</a></li>
	</ul>
		<a onclick="return s_select_table()" href="#" class="link">Select Table</a>
        <div id="select_table" style="display:none"></div>
		<a onclick="return s_new_table()" href="#" class="link">Create New</a>
        <div id="new_table" style="display:none;"></div>
<?php
if ($uid==="logged_in") {
?>
<p>&nbsp;</p><h3><a href="logout.php">Logout</a></h3>
<?php
}
?>
