<?php
$category = new Category;

if (!$users->isLoggedIn())
	$page->show403();

$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : 'view';

$userid = $users->currentUserId();
$data = $users->getById($userid);
if (!$data)
	$page->show404();
	
$errorStr = '';

switch($action) 
{
	case 'newapikey':
		$users->updateRssKey($userid);
		header("Location: profileedit" );
		break;

	case 'submit':
		
		$data["email"] = $_POST['email'];
		
		if ($_POST['password']!= "" && $_POST['password'] != $_POST['confirmpassword'])
		{
			$errorStr = "Password Mismatch";
		}
		else
		{
			if ($_POST['password']!= "" && !$users->isValidPassword($_POST['password']))
			{
				$errorStr = "Your password must be longer than five characters.";
			}
			else
			{
				if (!$users->isValidEmail($_POST['email']))
					$errorStr = "Your email is not a valid format.";
				else
				{
					$res = $users->getByEmail($_POST['email']);
					if ($res && $res["ID"] != $userid)
						$errorStr = "Sorry, the email is already in use.";
					else
					{

						$users->update($userid, $data["username"], $_POST['email'], $data["grabs"], $data["role"], $data["invites"], (isset($_POST['movieview']) ? "1" : "0"), (isset($_POST['musicview']) ? "1" : "0"), (isset($_POST['consoleview']) ? "1" : "0"));
						
						$_POST['exccat'] = (!isset($_POST['exccat']) || !is_array($_POST['exccat'])) ? array() : $_POST['exccat'];
						$users->addCategoryExclusions($userid, $_POST['exccat']);

						if ($_POST['password'] != "")
							$users->updatePassword($userid, $_POST['password']);
						
						header("Location:".WWW_TOP."/profile");
						die();
					}
				}
			}
		}
		break;
		
	break;
	case 'view':
	default:				
	break;   
}

$page->smarty->assign('error', $errorStr);
$page->smarty->assign('user', $data);
$page->smarty->assign('userexccat', $users->getCategoryExclusion($userid));

$page->meta_title = "Edit User Profile";
$page->meta_keywords = "edit,profile,user,details";
$page->meta_description = "Edit User Profile for ".$data["username"] ;


$page->smarty->assign('catlist',$category->getForSelect(false));

$page->content = $page->smarty->fetch('profileedit.tpl');
$page->render();


?>
