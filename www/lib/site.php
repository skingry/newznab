<?php
require_once(WWW_DIR."/lib/framework/db.php");

class Site 
{
	public $id = '';
	public $code = '';
	public $title = '';
	public $strapline = '';
	public $meta_title = '';
	public $meta_description = '';
	public $meta_keywords = '';
	public $footer = '';
	public $email = '';
	public $last_update = '';	
	public $google_analytics_acc = '';	
	public $google_adsense_acc = '';	
	public $google_adsense_sidepanel = '';	
	public $google_adsense_search = '';	
	public $siteseed = '';
	public $tandc = '';
	public $registerstatus = '';
	public $style = '';
	public $menuposition = '';
	public $dereferrer_link = '';
	public $nzbpath = '';
	public $rawretentiondays = '';
	public $attemptgroupbindays = '';
	public $lookuptvrage = '';
	public $lookupimdb = '';
	public $lookupmusic = '';
	public $lookupgames = '';
	public $lookupnfo = '';
	public $compressedheaders = '';
	public $maxmssgs = '';
	public $newgroupscanmethod = '';
	public $newgroupdaystoscan = '';
	public $newgroupmsgstoscan = '';
	public $storeuserips = '';
	public $minfilestoformrelease = '';
	public $reqidurl = '';
	public $latestregexurl = '';
	public $latestregexrevision = '';
	public $releaseretentiondays ='';
	public $checkpasswordedrar ='';
	public $showpasswordedrelease ='';
	public $amazonpubkey ='';
	public $amazonprivkey ='';
	public $tmdbkey ='';

}

class Sites
{	
	const REGISTER_STATUS_OPEN = 0;
	const REGISTER_STATUS_INVITE = 1;
	const REGISTER_STATUS_CLOSED = 2;

	public function version()
	{
		return "0.2.3";
	}
	
	public function update($form)
	{		
		$site = $this->row2Object($form);
		
		$this->data_update($site);
		
		return $site;
	}	

	public function get()
	{			
		$row = $this->data_get();
		if ($row === false)
			return false;
		
		return $this->row2Object($row);
	}	
	
	public function row2Object($row)
	{
		$obj = new Site();
		if (isset($row["id"]))
			$obj->id = $row["id"];
			
		$obj->code = $row["code"];
		$obj->title = $row["title"];
		$obj->strapline = $row["strapline"];
		$obj->meta_title = $row["metatitle"];
		$obj->meta_description = $row["metadescription"];
		$obj->meta_keywords = $row["metakeywords"];
		$obj->footer = $row["footer"];
		$obj->email = $row["email"];
		if (isset($row["lastupdate"]))
			$obj->last_update = $row["lastupdate"];
		$obj->google_analytics_acc = $row["google_analytics_acc"];
		$obj->google_adsense_acc = $row["google_adsense_acc"];
		$obj->google_adsense_sidepanel = $row["google_adsense_sidepanel"];
		$obj->google_adsense_search = $row["google_adsense_search"];
		if (isset($row["siteseed"]))
			$obj->siteseed = $row["siteseed"];
		$obj->tandc = $row["tandc"];
		$obj->registerstatus = $row["registerstatus"];
		$obj->style = $row["style"];
		$obj->menuposition = $row["menuposition"];
		$obj->dereferrer_link = $row["dereferrer_link"];
		$obj->version = $this->version();
		$obj->nzbpath = $row["nzbpath"];
		$obj->rawretentiondays = $row["rawretentiondays"];
		$obj->attemptgroupbindays = $row["attemptgroupbindays"];
		$obj->lookuptvrage = $row["lookuptvrage"];
		$obj->lookupimdb = $row["lookupimdb"];
		$obj->lookupnfo = $row["lookupnfo"];
		$obj->lookupmusic = $row["lookupmusic"];
		$obj->lookupgames = $row["lookupgames"];
		$obj->compressedheaders = $row["compressedheaders"];
		$obj->maxmssgs = $row["maxmssgs"];
		$obj->newgroupscanmethod = $row["newgroupscanmethod"];
		$obj->newgroupdaystoscan = $row["newgroupdaystoscan"];
		$obj->newgroupmsgstoscan = $row["newgroupmsgstoscan"];
		$obj->storeuserips = $row["storeuserips"];
		$obj->minfilestoformrelease = $row["minfilestoformrelease"];
		$obj->reqidurl = $row["reqidurl"];
		$obj->latestregexurl = $row["latestregexurl"];
		$obj->latestregexrevision = $row["latestregexrevision"];
		$obj->releaseretentiondays = $row["releaseretentiondays"];
		$obj->checkpasswordedrar = $row["checkpasswordedrar"];
		$obj->showpasswordedrelease = $row["showpasswordedrelease"];
		$obj->amazonpubkey = $row["amazonpubkey"];
		$obj->amazonprivkey = $row["amazonprivkey"];
		$obj->tmdbkey = $row["tmdbkey"];

		return $obj;
	}

	public function data_update($site)
	{		
		$db = new DB();
		
		if (substr($site->nzbpath, strlen($site->nzbpath) - 1) != '/')
		{
			$site->nzbpath = $site->nzbpath."/";
		}
		
		return $db->query(sprintf("update site set	code = %s , 	title = %s , 	strapline = %s , 	metatitle = %s , 	metadescription = %s , 	metakeywords = %s , 	footer = %s ,	email = %s , 	lastupdate = now(), google_adsense_search = %s, google_adsense_sidepanel = %s, google_analytics_acc = %s, tandc=%s, registerstatus=%d, style=%s, dereferrer_link=%s, nzbpath=%s, rawretentiondays=%d, attemptgroupbindays=%d, lookuptvrage=%d, lookupimdb=%d, lookupnfo=%d, compressedheaders=%d, maxmssgs=%d, newgroupscanmethod=%d, newgroupdaystoscan=%d, newgroupmsgstoscan=%d, storeuserips=%d, minfilestoformrelease=%d, reqidurl=%s, latestregexurl=%s, google_adsense_acc = %s, releaseretentiondays=%d, checkpasswordedrar=%d, showpasswordedrelease=%d, menuposition=%d, lookupmusic=%d, lookupgames=%d, amazonpubkey=%s, amazonprivkey=%s, tmdbkey=%s ", $db->escapeString($site->code), $db->escapeString($site->title), $db->escapeString($site->strapline), $db->escapeString($site->meta_title), $db->escapeString($site->meta_description), $db->escapeString($site->meta_keywords), $db->escapeString($site->footer), $db->escapeString($site->email), $db->escapeString($site->google_adsense_search), $db->escapeString($site->google_adsense_sidepanel), $db->escapeString($site->google_analytics_acc), $db->escapeString($site->tandc), $site->registerstatus, $db->escapeString($site->style), $db->escapeString($site->dereferrer_link), $db->escapeString($site->nzbpath), $site->rawretentiondays, $site->attemptgroupbindays, $site->lookuptvrage, $site->lookupimdb, $site->lookupnfo, $site->compressedheaders, $site->maxmssgs, $site->newgroupscanmethod, $site->newgroupdaystoscan, $site->newgroupmsgstoscan, $site->storeuserips, $site->minfilestoformrelease, $db->escapeString($site->reqidurl), $db->escapeString($site->latestregexurl), $db->escapeString($site->google_adsense_acc),$site->releaseretentiondays, $site->checkpasswordedrar, $site->showpasswordedrelease, $site->menuposition, $site->lookupmusic, $site->lookupgames, $db->escapeString($site->amazonpubkey), $db->escapeString($site->amazonprivkey), $db->escapeString($site->tmdbkey) ));
	}

	public function data_get()
	{			
		$db = new DB();
		return $db->queryOneRow("select * from site limit 1");		
	}	
	
	public function updateLatestRegexRevision($rev)
	{
		$db = new DB();

		return $db->query(sprintf("update site set latestregexrevision = %d", $rev));
	}
	
	public function getLicense($html=false)
	{
		$n = "\r\n";
		if ($html)
			$n = "<br/>";
	
		return $n."newznab ".$this->version()." Copyright (C) ".date("Y")." newznab.com".$n."

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation.".$n."

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.
".$n;
	}
}
?>
