<?php
function content(){
?>
<style>
div.pagination {
	padding: 3px;
	margin: 3px;
}

div.pagination a {
	padding: 2px 5px 2px 5px;
	margin: 2px;
	border: 1px solid #AAAADD;
	
	text-decoration: none; /* no underline */
	color: #000099;
}
div.pagination a:hover, div.pagination a:active {
	border: 1px solid #000099;

	color: #000;
}
div.pagination span.current {
	padding: 2px 5px 2px 5px;
	margin: 2px;
		border: 1px solid #000099;
		
		font-weight: bold;
		background-color: #000099;
		color: #FFF;
	}
	div.pagination span.disabled {
		padding: 2px 5px 2px 5px;
		margin: 2px;
		border: 1px solid #EEE;
	
		color: #DDD;
	}
	
</style>
<?php

	/*
		Place code to connect to your DB here.
	*/

	$tbl_name= $_SESSION['user_id']."_content";		//your table name
	// How many adjacent pages should be shown on each side?
	$adjacents = 3;
	
?>
    <?php
	$where = '';
	$where1 = '';
	$real_link = '';
	if(isset($_GET['CAT'])){
		if(($_GET['CAT'])!='ALL'){
		$where = '`category` = '.$_GET['CAT'].' AND ';
		$where1 = 'WHERE `category` = '.$_GET['CAT'].' ';
		$real_link = 'CAT='.$_GET['CAT'].'&amp;';
		}}

	/* 
	   First get total number of rows in data table. 
	   If you have a WHERE clause in your query, make sure you mirror it here.
	*/
	$query = "SELECT COUNT(*) as num FROM $tbl_name ".$where1;
	$total_pages = mysql_fetch_array(mysql_query($query)) or die(mysql_error());
	$total_pages = $total_pages['num'];
	
	/* Setup vars for query. */
	$targetpage = "?CAT=ALL&amp;".$real_link; 	//your file name  (the name of this file)
	$limit = 5; 								//how many items to show per page
	if (isset($_GET['page'])) {$page = $_GET['page'];}
	if(isset($page)) {
		$start = ($page - 1) * $limit; } 				//first item to display on this page
	else {
		$start = 0; } 				//if no page var is given, set start to 0
	
	/* Get data. */
	$sql = "SELECT * FROM $tbl_name WHERE $where status='0' AND domain='".$_SESSION['domain']."' LIMIT $start, $limit ";
	$result = mysql_query($sql) or die(mysql_error());
	
	/* Setup page vars for display. */
	if (isset($page) == 0) $page = 1;					//if no page var is given, default to 1.
	$prev = $page - 1;							//previous page is page - 1
	$next = $page + 1;							//next page is page + 1
	$lastpage = ceil($total_pages/$limit);		//lastpage is = total pages / items per page, rounded up.
	$lpm1 = $lastpage - 1;						//last page minus 1
	
	/* 
		Now we apply our rules and draw the pagination object. 
		We're actually saving the code to a variable in case we want to draw it more than once.
	*/
	$pagination = "";
	if($lastpage > 1)
	{	
		$pagination .= "<div class=\"pagination\">";
		//previous button
		if ($page > 1) 
			$pagination.= "<a href=\"$targetpage page=$prev\">&laquo; previous</a>";
		else
			$pagination.= "<span class=\"disabled\">&laquo; previous</span>";	
		
		//pages	
		if ($lastpage < 7 + ($adjacents * 2))	//not enough pages to bother breaking it up
		{	
			for ($counter = 1; $counter <= $lastpage; $counter++)
			{
				if ($counter == $page)
					$pagination.= "<span class=\"current\">$counter</span>";
				else
					$pagination.= "<a href=\"$targetpage page=$counter\">$counter</a>";					
			}
		}
		elseif($lastpage > 5 + ($adjacents * 2))	//enough pages to hide some
		{
			//close to beginning; only hide later pages
			if($page < 1 + ($adjacents * 2))		
			{
				for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++)
				{
					if ($counter == $page)
						$pagination.= "<span class=\"current\">$counter</span>";
					else
						$pagination.= "<a href=\"$targetpage page=$counter\">$counter</a>";					
				}
				$pagination.= "...";
				$pagination.= "<a href=\"$targetpage page=$lpm1\">$lpm1</a>";
				$pagination.= "<a href=\"$targetpage page=$lastpage\">$lastpage</a>";		
			}
			//in middle; hide some front and some back
			elseif($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2))
			{
				$pagination.= "<a href=\"$targetpage page=1\">1</a>";
				$pagination.= "<a href=\"$targetpage page=2\">2</a>";
				$pagination.= "...";
				for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++)
				{
					if ($counter == $page)
						$pagination.= "<span class=\"current\">$counter</span>";
					else
						$pagination.= "<a href=\"$targetpage page=$counter\">$counter</a>";					
				}
				$pagination.= "...";
				$pagination.= "<a href=\"$targetpage page=$lpm1\">$lpm1</a>";
				$pagination.= "<a href=\"$targetpage page=$lastpage\">$lastpage</a>";		
			}
			//close to end; only hide early pages
			else
			{
				$pagination.= "<a href=\"$targetpage page=1\">1</a>";
				$pagination.= "<a href=\"$targetpage page=2\">2</a>";
				$pagination.= "...";
				for ($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; $counter++)
				{
					if ($counter == $page)
						$pagination.= "<span class=\"current\">$counter</span>";
					else
						$pagination.= "<a href=\"$targetpage page=$counter\">$counter</a>";					
				}
			}
		}
		
		//next button
		if ($page < $counter - 1) 
			$pagination.= "<a href=\"$targetpage page=$next\">next &raquo;</a>";
		else
			$pagination.= "<span class=\"disabled\">next &raquo;</span>";
		$pagination.= "</div>\n";		
	}
?>
<?php	// Group Category query & code here ..........
	$group = mysql_query('SELECT category, COUNT(*) FROM '.$tbl_name.' GROUP BY category') or die(mysql_error());
	?> 
	<div class="pagination">
	<?php
    while($g_row = mysql_fetch_array($group)){
		$cat_name = mysql_query("SELECT id, category_name FROM ".$_SESSION['user_id']."_category WHERE id = ".$g_row[0]);
?>
	<a href="<?php echo $targetpage.'CAT='.$g_row[0]; ?>"><?php while($cat_nm = mysql_fetch_array($cat_name)){echo $cat_nm['category_name'];} echo '('.$g_row[1].')';?></a> 
<?php } ?>
	</div>

<?=$pagination?>
<ul>
	<?php
		if(isset($_GET['CAT'])){
		if(($_GET['CAT'])!='ALL'){		
		while($row = mysql_fetch_array($result))
		{
			?>
	<li><a href="?AID=<?php echo $row['id'] ?>" title="Read this article"><?php echo $row['title'] ?></a></li>
	
<?php }}} ?>
</ul>
<?php } ?>
<?php
function title(){
if(isset($_GET['CAT'])=='Property'){
	$id= $_GET['CAT'];
	}
$result = mysql_query("SELECT * FROM `".$_SESSION['user_id']."_real_property` WHERE status='1' AND domain=".$_SESSION['domain']);
if(!$result){ mysql_error(); }
	while($row = mysql_fetch_array($result)){
	echo $row['title'];
	}}


function meta(){
if(isset($_GET['CAT'])=='Property'){
	$id= $_GET['CAT'];
	}
$result = mysql_query("SELECT * FROM `".$_SESSION['user_id']."_real_property` WHERE status='1' AND domain=".$_SESSION['domain']);
if(!$result){ mysql_error(); }
	while($row = mysql_fetch_array($result)){ ?>
<meta name="keywords" content="<?php echo $row['meta_key']; ?>" />
<meta name="description" content="<?php echo $row['meta_desc']; ?>" />
<META NAME="robots" CONTENT="noindex">

    <?php 
	}} 
	?>