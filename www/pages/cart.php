<?php
require_once(WWW_DIR."/lib/releases.php");

if (!$users->isLoggedIn())
	$page->show403();

if (isset($_GET["add"]))
{
	$releases = new Releases;
	$guids = explode(',', $_GET['add']);
	$data = $releases->getByGuid($guids);

	if (!$data)
		$page->show404();
	
	foreach($data as $d)
		$users->addCart($users->currentUserId(), $d["ID"]);
}
else
{
	if (isset($_GET["delete"]))
		$users->delCart($_GET["delete"], $users->currentUserId());
	
	$page->meta_title = "My Nzb Cart";
	$page->meta_keywords = "search,add,to,cart,nzb,description,details";
	$page->meta_description = "Manage Your Nzb Cart";
	
	$results = $users->getCart($users->currentUserId());
	$page->smarty->assign('results', $results);
	
	$page->content = $page->smarty->fetch('cart.tpl');
	$page->render();
}


?>
