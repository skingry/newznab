<?php

require_once(WWW_DIR."/lib/framework/db.php");

class Category
{
	const CAT_GAME_NDS = 1010;
	const CAT_GAME_PSP = 1020;
	const CAT_GAME_WII = 1030;
	const CAT_GAME_XBOX = 1040;
	const CAT_GAME_XBOX360 = 1050;
	const CAT_GAME_WIIWARE = 1060;
	const CAT_GAME_XBOX360DLC = 1070;
	const CAT_GAME_PS3 = 1080;
	const CAT_MOVIE_FOREIGN = 2010;
	const CAT_MOVIE_OTHER = 2020;
	const CAT_MOVIE_SD = 2030;
	const CAT_MOVIE_HD = 2040;
	const CAT_MUSIC_MP3 = 3010;
	const CAT_MUSIC_VIDEO = 3020;
	const CAT_MUSIC_AUDIOBOOK = 3030;
	const CAT_MUSIC_LOSSLESS = 3040;
	const CAT_PC_0DAY = 4010;
	const CAT_PC_ISO = 4020;
	const CAT_PC_MAC = 4030;
	const CAT_PC_PHONE = 4040;
	const CAT_PC_GAMES = 4050;
	const CAT_TV_FOREIGN = 5020;
	const CAT_TV_SD = 5030;
	const CAT_TV_HD = 5040;
	const CAT_TV_OTHER = 5050;
	const CAT_TV_SPORT = 5060;
	const CAT_XXX_DVD = 6010;
	const CAT_XXX_WMV = 6020;
	const CAT_XXX_XVID = 6030;
	const CAT_XXX_X264 = 6040;
	const CAT_MISC = 7010;
	const CAT_MISC_EBOOK = 7020;
	const CAT_MISC_COMICS = 7030;
	const CAT_MISC_ANIME = 7040;

	const CAT_PARENT_GAME = 1000;
	const CAT_PARENT_MOVIE = 2000;
	const CAT_PARENT_MUSIC = 3000;
	const CAT_PARENT_PC = 4000;
	const CAT_PARENT_TV = 5000;
	const CAT_PARENT_XXX = 6000;
	const CAT_PARENT_MISC = 7000;

	const STATUS_INACTIVE = 0;
	const STATUS_ACTIVE = 1;

	private $tmpCat = 0;

	public function get($activeonly=false, $excludedcats=array())
	{
		$db = new DB();

		$exccatlist = "";
		if (count($excludedcats) > 0)
			$exccatlist = " and c.ID not in (".implode(",", $excludedcats).")";

		$act = "";
		if ($activeonly)
			$act = sprintf(" where c.status = %d %s ", Category::STATUS_ACTIVE, $exccatlist ) ;

		return $db->query("select c.ID, concat(cp.title, ' > ',c.title) as title, cp.ID as parentID, c.status from category c inner join category cp on cp.ID = c.parentID ".$act." ORDER BY c.ID");
	}

	public function isParent($cid)
	{
		$db = new DB();
		$ret = $db->queryOneRow(sprintf("select * from category where ID = %d and parentID is null", $cid));
		if ($ret)
			return true;
		else
			return false;
	}

	public function getFlat($activeonly=false)
	{
		$db = new DB();
		$act = "";
		if ($activeonly)
			$act = sprintf(" where c.status = %d ", Category::STATUS_ACTIVE ) ;
		return $db->query("select c.*, (SELECT title FROM category WHERE ID=c.parentID) AS parentName from category c ".$act." ORDER BY c.ID");
	}

	public function getChildren($cid)
	{
		$db = new DB();
		return $db->query(sprintf("select c.* from category c where parentID = %d", $cid));
	}

	public function getById($id)
	{
		$db = new DB();
		return $db->queryOneRow(sprintf("SELECT c.ID, CONCAT(COALESCE(cp.title,'') , CASE WHEN cp.title IS NULL THEN '' ELSE ' > ' END , c.title) as title, c.status, c.parentID from category c left outer join category cp on cp.ID = c.parentID where c.ID = %d", $id));
	}

	public function getByIds($ids)
	{
		$db = new DB();
		return $db->query(sprintf("SELECT concat(cp.title, ' > ',c.title) as title from category c inner join category cp on cp.ID = c.parentID where c.ID in (%s)", implode(',', $ids)));
	}

	public function update($id, $status, $desc)
	{
		$db = new DB();
		return $db->query(sprintf("update category set status = %d, description = %s where ID = %d", $status, $db->escapeString($desc), $id));
	}

	public function getForMenu($excludedcats=array())
	{
		$db = new DB();
		$ret = array();

		$exccatlist = "";
		if (count($excludedcats) > 0)
			$exccatlist = " and ID not in (".implode(",", $excludedcats).")";

		$arr = $db->query(sprintf("select * from category where status = %d %s", Category::STATUS_ACTIVE, $exccatlist));
		foreach ($arr as $a)
			if ($a["parentID"] == "")
				$ret[] = $a;

		foreach ($ret as $key => $parent)
		{
			$subcatlist = array();
			$subcatnames = array();
			foreach ($arr as $a)
			{
				if ($a["parentID"] == $parent["ID"])
				{
					$subcatlist[] = $a;
					$subcatnames[] = $a["title"];
				}
			}

			if (count($subcatlist) > 0)
			{
				array_multisort($subcatnames, SORT_ASC, $subcatlist);
				$ret[$key]["subcatlist"] = $subcatlist;
			}
			else
			{
				unset($ret[$key]);
			}
		}
		return $ret;
	}

	public function getForSelect($blnIncludeNoneSelected = true)
	{
		$categories = $this->get();
		$temp_array = array();

		if ($blnIncludeNoneSelected)
		{
			$temp_array[-1] = "--Please Select--";
		}

		foreach($categories as $category)
			$temp_array[$category["ID"]] = $category["title"];

		return $temp_array;
	}

	//
	// Work out which category is applicable for either a group or a binary.
	// returns -1 if no category is appropriate from the group name.
	//
	function determineCategory($group, $releasename = "")
	{
		//
		// Try and determine based on group - First Pass
		//
		if (preg_match('/alt\.binaries\.ath/i', $group))
		{
			if($this->isConsole($releasename)){ return $this->tmpCat; }
			if($this->isPC($releasename)){ return $this->tmpCat; }
			if($this->isMovie($releasename)){ return $this->tmpCat; }
			if($this->isMusic($releasename)){ return $this->tmpCat; }
		}
			
		if (preg_match('/alt\.binaries\.b4e/', $group))
		{
			if($this->isPC($releasename)){ return $this->tmpCat; }
			if($this->isEBook($releasename)){ return $this->tmpCat; }                                
		}                                  
		                                  
		if (preg_match('/anime/i', $group))
				return Category::CAT_MISC_ANIME;
				
		if (preg_match('/alt\.binaries\..*?audiobook.*?/i', $group))
			return Category::CAT_MUSIC_AUDIOBOOK;
				
		if (preg_match('/lossless|flac/i', $group))
		{
			return Category::CAT_MUSIC_LOSSLESS;
		} 
		
		if (preg_match('/alt\.binaries\.sounds.*?|alt\.binaries\.mp3.*?|alt\.binaries\..*\.mp3/i', $group))
		{
			if($this->isMusic($releasename)){ return $this->tmpCat; }
				return Category::CAT_MUSIC_MP3;
		}
		
		if (preg_match('/alt\.binaries\.console.ps3/i', $group))
				return Category::CAT_GAME_PS3;
				
		if (preg_match('/alt\.binaries\.games\.xbox*/i', $group))
		{
			if($this->isConsole($releasename)){ return $this->tmpCat; }
			if($this->isTV($releasename)){ return $this->tmpCat; }
			if($this->isMovie($releasename)){ return $this->tmpCat; }
		}
		
		if (preg_match('/alt\.binaries\.games/i', $group))
		{
			if($this->isConsole($releasename)){ return $this->tmpCat; }
			return Category::CAT_PC_GAMES;
		}
		
		if (preg_match('/alt\.binaries\.games\.wii/i', $group))
		{
			if($this->isConsole($releasename)) { return $this->tmpCat; }
			return Category::CAT_GAME_WII;
		}                            
		if (preg_match('/alt\.binaries\.dvd.*?/i', $group))
		{
			if($this->isXxx($releasename)){ return $this->tmpCat; }     
			if($this->isTv($releasename)){ return $this->tmpCat; }
			if($this->isMovie($releasename)){ return $this->tmpCat; }
		}
		if (preg_match('/alt\.binaries\.hdtv*|alt\.binaries\.x264/i', $group))
		{
			if($this->isXXX($releasename)){ return $this->tmpCat; }
			if($this->isTv($releasename)){ return $this->tmpCat; }
			if($this->isMovie($releasename)){ return $this->tmpCat; }
		}   
		
		if (preg_match('/alt\.binaries\.classic\.tv.*?/i', $group))
			return Category::CAT_TV_SD;
			
		if (preg_match('/alt\.binaries\.e-book*?/i', $group))
			return Category::CAT_MISC_EBOOK;
			
		if (preg_match('/alt\.binaries\.comics.*?/i', $group))
			return Category::CAT_MISC_COMICS;
			
		if (preg_match('/alt\.binaries\.cores.*?/i', $group))
		{
			if($this->isXXX($releasename)){ return $this->tmpCat; }
			if($this->isMovie($releasename)){ return $this->tmpCat; }
			if($this->isConsole($releasename)){ return $this->tmpCat; }	
			if($this->isPC($releasename)){ return $this->tmpCat; }
		}   
		
		if (preg_match('/alt\.binaries\.cd.image|alt\.binaries\.audio\.warez/i', $group))
		{
			if($this->isPC($releasename)){ return $this->tmpCat; }
			return Category::CAT_PC_0DAY;
		}     
		
		if (preg_match('/alt\.binaries\.sony\.psp/i', $group))
			return Category::CAT_GAME_PSP;
				
		if (preg_match('/alt\.binaries\.nintendo\.ds|alt\.binaries\.games\.nintendods/i', $group))
			return Category::CAT_GAME_NDS;
				
		if (preg_match('/alt\.binaries\.mpeg\.video\.music/i', $group))
			return Category::CAT_MUSIC_VIDEO;
				
		if (preg_match('/alt\.binaries\.mac/i', $group))
			return Category::CAT_PC_MAC;
			
		if (preg_match('/linux/i', $group))
			return Category::CAT_PC_ISO;
			
		if (preg_match('/alt\.binaries\.ipod\.videos\.tvshows/i', $group))
			return Category::CAT_TV_OTHER;
			
		if (preg_match('/alt\.binaries\.documentaries/i', $group))
		{
			if($this->isXxx($releasename)){ return $this->tmpCat; }     
			if($this->isTV($releasename)){ return $this->tmpCat; }
			return Category::CAT_TV_SD;
		}
		if (preg_match('/alt\.binaries\.tv\.swedish/i', $group))
			return Category::CAT_TV_FOREIGN;
			
		if (preg_match('/alt\.binaries\.erotica\.divx/i', $group))
			return Category::CAT_XXX_XVID; 
			
		if (preg_match('/alt\.binaries\.mma|alt\.binaries\.multimedia\.sports.*?/i', $group))
			return Category::CAT_TV_SPORT;
			
		if (preg_match('/alt\.binaries\.b4e$/i', $group))
			if($this->isPC($releasename)){ return $this->tmpCat; }
			 
		if (preg_match('/alt\.binaries\.warez\.smartphone/i', $group))
			if($this->isPC($releasename)){ return $this->tmpCat; }  
			
		if (preg_match('/alt\.binaries\.warez\.ibm\-pc\.0\-day|alt\.binaries\.warez/i', $group))
		{
			if($this->isConsole($releasename)){ return $this->tmpCat; }
			if($this->isEBook($releasename)){ return $this->tmpCat; } 
			if($this->isXxx($releasename)){ return $this->tmpCat; }                            	
			if($this->isPC($releasename)){ return $this->tmpCat; }
			if($this->isTV($releasename)){ return $this->tmpCat; }
			return Category::CAT_PC_0DAY;
		}
		if (preg_match('/alt\.binaries\.(teevee|multimedia|tv|tvseries)/i', $group))
		{
			if($this->isXxx($releasename)){ return $this->tmpCat; }     
			if($this->isTV($releasename)){ return $this->tmpCat; }
			if($this->isForeignTV($releasename)){ return $this->tmpCat; }
			return Category::CAT_TV_OTHER;
		}
		if (preg_match('/erotica/i', $group))
		{
			if($this->isXxx($releasename)){ return $this->tmpCat; }
			return Category::CAT_XXX_XVID;
		}
		if (preg_match('/alt\.binaries\.movies\.xvid|alt\.binaries\.movies\.divx|alt\.binaries\.movies/i', $group))
		{
			if($this->isConsole($releasename)){ return $this->tmpCat; }
			if($this->isXxx($releasename)){ return $this->tmpCat; }  
			if($this->isTV($releasename)){ return $this->tmpCat; }
			if($this->isMovie($releasename)){ return $this->tmpCat; }
			return Category::CAT_MOVIE_SD;
		}                               
		if (preg_match('/wmvhd/i', $group))
		{
			if($this->isXxx($releasename)){ return $this->tmpCat; }  
			if($this->isTV($releasename)){ return $this->tmpCat; }
			if($this->isMovie($releasename)){ return $this->tmpCat; }
		}
		if (preg_match('/inner\-sanctum/i', $group))
		{
			if($this->isPC($releasename)){ return $this->tmpCat; }
			if($this->isEBook($releasename)){ return $this->tmpCat; }
			return Category::CAT_MUSIC_MP3;
		}                        
		if (preg_match('/alt\.binaries\.x264/i', $group))
		{
			if($this->isXxx($releasename)){ return $this->tmpCat; }  
			if($this->isTV($releasename)){ return $this->tmpCat; }
			if($this->isMovie($releasename)){ return $this->tmpCat; }
			return Category::CAT_MOVIE_OTHER;
		}                            

		//
		// if a category hasnt been set yet, then try against all 
		// functions and if still nothing, return Cat Misc.
		//
		if($this->isXXX($releasename)){ return $this->tmpCat; }
		if($this->isPC($releasename)){ return $this->tmpCat; }                            
		if($this->isTV($releasename)){ return $this->tmpCat; }
		if($this->isMovie($releasename)){ return $this->tmpCat; }
		if($this->isConsole($releasename)){ return $this->tmpCat; }
		if($this->isMusic($releasename)){ return $this->tmpCat; }
		if($this->isEBook($releasename)){ return $this->tmpCat; }
		
		return Category::CAT_MISC;
	}

	//
	// Beginning of functions to determine category by release name
	//

	//
	//   TV
	//
	public function isTV($releasename)
	{
		if(preg_match('/(S?(\d{1,2})\.?(E|X|D)(\d{1,2})[\. _-]+)|(dsr|pdtv|hdtv)[\.\-_]/i', $releasename))
		{
			if($this->isForeignTV($releasename)){ return true; }
			if($this->isSportTV($releasename)){ return true; }
			if($this->isHDTV($releasename)){ return true; }
			if($this->isSDTV($releasename)){ return true; }
			$this->tmpCat = Category::CAT_TV_OTHER;
			return true;
		}
		else if (preg_match('/(\.S\d{2}\.|\.S\d{2}|\.EP\d{1,2}\.|trollhd)/i', $releasename))
		{
			if($this->isForeignTV($releasename)){ return true; }
			if($this->isSportTV($releasename)){ return true; }                                  
			if($this->isHDTV($releasename)){ return true; }
			if($this->isSDTV($releasename)){ return true; }
			$this->tmpCat = Category::CAT_TV_OTHER;
			return true;
		}
		
		return false;
	}

	public function isForeignTV($releasename)
	{
		if(preg_match('/(danish|flemish|dutch|Deutsch|nl\.?subbed|nl\.?sub|\.NL\.|swedish|swesub|french|german|spanish)[\.\-]/i', $releasename))
		{
			$this->tmpCat = Category::CAT_TV_FOREIGN;
			return true;
		}
		else if(preg_match('/NLSubs|NL\-Subs|NLSub|Deutsch| der |German| NL /i', $releasename))
		{
			$this->tmpCat = Category::CAT_TV_FOREIGN;
			return true;
		}
		
		return false;
	}

	public function isSportTV($releasename)
	{
		if(preg_match('/(epl|motogp|supercup|wtcc|red\.bull.*?race|bundesliga|la\.liga|uefa|EPL|ESPN|WWE\.|MMA\.|UFC\.|FIA\.|PGA\.|NFL\.|NCAA\.)/i', $releasename))
		{
			$this->tmpCat = Category::CAT_TV_SPORT;
			return true;
		}
		else if(preg_match('/WBA|Rugby\.|TNA\.|DTM\.|NASCAR|SBK|NBA\.|NHL\.|NRL\.|FIFA\.|netball\.anz|formula1|indycar|Superleague|V8\.Supercars/i', $releasename))
		{	
			$this->tmpCat = Category::CAT_TV_SPORT;
			return true;
		}
		
		return false;
	}

	public function isHDTV($releasename)
	{
		if (preg_match('/x264|1080|720|h\.?264|web\-?dl|wmvhd|trollhd/i', $releasename))
		{
			$this->tmpCat = Category::CAT_TV_HD;
			return true;
		}
		
		return false;
	}

	public function isSDTV($releasename)
	{
		if (preg_match('/dvdr|dvd5|dvd9|xvid/i', $releasename))
		{
			$this->tmpCat = Category::CAT_TV_SD;
			return true;
		}
		
		return false;
	}


	//
	//  Movie
	//
	public function isMovie($releasename)
	{
		if($this->isMovieForeign($releasename)){ return true; }
		if($this->isMovieSD($releasename)){ return true; }
		if($this->isMovieHD($releasename)){ return true; }
		
		return false;
	}

	public function isMovieForeign($releasename)
	{
		if(preg_match('/(danish|flemish|Deutsch|dutch|nl\.?subbed|nl\.?sub|\.NL|swedish|swesub|french|german|spanish)[\.\-]/i', $releasename))
		{
			$this->tmpCat = Category::CAT_MOVIE_FOREIGN;
			return true;
		}
		else if(preg_match('/NLSubs|NL\-Subs|NLSub|\d{4} German|Deutsch| der /i', $releasename))
		{
			$this->tmpCat = Category::CAT_MOVIE_FOREIGN;
			return true;
		}       
		
		return false;
	}

	public function isMovieHD($releasename)
	{
		if(preg_match('/x264|bluray\-|wmvhd|web\-dl|bd?25|bd?50|blu-ray|VC1|VC\-1|AVC|XvidHD/i', $releasename))
		{
			$this->tmpCat = Category::CAT_MOVIE_HD;
			return true;
		}
		
		return false;
	}

	public function isMovieSD($releasename)
	{
		if(preg_match('/(xvid|dvdscr|extrascene|dvdrip|r5|\.CAM|dvdr|dvd9|dvd5|divx)[\.\-]/i', $releasename))
		{
			$this->tmpCat = Category::CAT_MOVIE_SD;
			return true;
		}
		
		return false;
	}


	//
	//  PC
	//
	public function isPC($releasename)
	{
		if($this->isPhone($releasename)){ return true; }
		if($this->isMac($releasename)){ return true; }
		if($this->isPCGame($releasename)){ return true; }
		if($this->is0day($releasename)){ return true; }
		
		return false;
	}

	public function isPhone($releasename)
	{
		if (preg_match('/[\.\-_](IPHONE|ITOUCH|ANDROID|COREPDA|symbian|xscale|wm5|wm6)[\.\-_]/i', $releasename))
		{
			$this->tmpCat = Category::CAT_PC_PHONE;
			return true;
		}
		if (preg_match('/IPHONE|ITOUCH|IPAD|ANDROID|COREPDA|symbian|xscale|wm5|wm6/i', $releasename))
		{
			$this->tmpCat = Category::CAT_PC_PHONE;
			return true;
		}
		return false;
	}

	public function is0day($releasename)
	{
		if(preg_match('/[\.\-_ ](x32|x64|x86|win64|winnt|win9x|win2k|winxp|winnt2k2003serv|win9xnt|win9xme|winnt2kxp|win2kxp|win2kxp2k3|keygen|regged|keymaker|winall|win32|template|Patch|GAMEGUiDE|unix|irix|solaris|freebsd|hpux|linux|windows|multilingual|software|Pro v\d{1,3})[\.\-_ ]/i', $releasename))
		{
			$this->tmpCat = Category::CAT_PC_0DAY;
			return true;
		}
		else if (preg_match('/\-SUNiSO|Adobe|CYGNUS|GERMAN\-|v\d{1,3}.*?Pro|MULTiLANGUAGE|Cracked|lz0|\-BEAN|MultiOS|\-iNViSiBLE|\-SPYRAL|WinAll|Keymaker|Keygen|Lynda\.com|FOSI|Keyfilemaker|DIGERATI|\-UNION/i', $releasename))
		{
			$this->tmpCat = Category::CAT_PC_0DAY;
			return true;
		}
		return false;
	}

	public function isMac($releasename)
	{
		if(preg_match('/osx|os\.x|\.mac\./i', $releasename))
		{
			$this->tmpCat = Category::CAT_PC_MAC;
			return true;
		}
		return false;
	}

	public function isPCGame($releasename)
	{
		if (preg_match('/\-RELOADED|\-SKIDROW|PC GAME|FASDOX|games|v\d{1,3}.*?\-TE|RIP\-unleashed|Razor1911/i', $releasename))
		{
			$this->tmpCat = Category::CAT_PC_GAMES;
			return true;
		}
		return false;
	}


	//
	//   XXX
	//
	public function isXxx($releasename)
	{
		if(preg_match('/XXX/', $releasename))
		{
			if($this->isXxx264($releasename)){ return true; }
			if($this->isXxxXvid($releasename)){ return true; }
			if($this->isXxxWMV($releasename)){ return true; }
			if($this->isXxxDVD($releasename)){ return true; }
			$this->tmpCat = Category::CAT_XXX_XVID;
			return true;
		}
		return false;
	}

	public function isXxx264($releasename)
	{
		if (preg_match('/x264/i', $releasename))
		{
			$this->tmpCat = Category::CAT_XXX_X264;
			return true;
		}
		return false;
	}

	public function isXxxXvid($releasename)
	{
		if (preg_match('/xvid|dvdrip|bdrip|brrip|pornolation|swe6|nympho|detoxication|tesoro/i', $releasename))
		{
			$this->tmpCat = Category::CAT_XXX_XVID;
			return true;
		}
		
		return false;
	}

	public function isXxxWMV($releasename)
	{
		if (preg_match('/wmv|pack\-|mp4|f4v|flv|mov|mpeg|isom|realmedia|multiformat|(e\d{2,})|(\d{2}\.\d{2}\.\d{2})|uhq|(issue\.\d{2,})/i', $releasename))
		{
			$this->tmpCat = Category::CAT_XXX_WMV;
			return true;
		}
		
		return false;
	}

	public function isXxxDVD($releasename)
	{
		if (preg_match('/dvdr[^ip]|dvd5|dvd9/i', $releasename))
		{
			$this->tmpCat = Category::CAT_XXX_DVD;
			return true;
		}
		
		return false;
	}

	//
	//  Console
	//
	public function isConsole($releasename)
	{
		if($this->isGameNDS($releasename)){return true;}
		if($this->isGamePS3($releasename)){ return true; }
		if($this->isGamePSP($releasename)){ return true; }
		if($this->isGameWiiWare($releasename)){ return true; }
		if($this->isGameWii($releasename)){ return true; }
		if($this->isGameXBOX360DLC($releasename)){ return true; }
		if($this->isGameXBOX360($releasename)){ return true; }
		if($this->isGameXBOX($releasename)){ return true; }
		
		return false;
	}

	public function isGameNDS($releasename)
	{
		if (preg_match('/NDS/', $releasename))
		{
			$this->tmpCat = Category::CAT_GAME_NDS;
			return true;
		}
		
		return false;
	}

	public function isGamePS3($releasename)
	{
		if (preg_match('/PS3?\-/', $releasename))
		{
			$this->tmpCat = Category::CAT_GAME_PS3;
			return true;
		}
		
		return false;
	}

	public function isGamePSP($releasename)
	{
		if (preg_match('/PSP?\-/i', $releasename))
		{
			$this->tmpCat = Category::CAT_GAME_PSP;
			return true;
		}
		
		return false;
	}

	public function isGameWiiWare($releasename)
	{
		if (preg_match('/WIIWARE|WII.*?VC|VC.*?WII|WII.*?DLC|DLC.*?WII|WII.*?CONSOLE|CONSOLE.*?WII/i', $releasename))
		{
			$this->tmpCat = Category::CAT_GAME_WIIWARE;
			return true;
		}
		
		return false;
	}

	public function isGameWii($releasename)
	{
		if (preg_match('/WII/i', $releasename))
		{
			$this->tmpCat = Category::CAT_GAME_WII;
			return true;
		}
		
		return false;
	}

	public function isGameXBOX360DLC($releasename)
	{
		if (preg_match('/(DLC.*?xbox360|xbox360.*?DLC|XBLA.*?xbox360|xbox360.*?XBLA)/i', $releasename))
		{
			$this->tmpCat = Category::CAT_GAME_XBOX360DLC;
			return true;
		}
		
		return false;
	}

	public function isGameXBOX360($releasename)
	{
		if (preg_match('/XBOX360|x360/i', $releasename))
		{
			$this->tmpCat = Category::CAT_GAME_XBOX360;
			return true;
		}
		
		return false;
	}

	public function isGameXBOX($releasename)
	{
		if (preg_match('/XBOX/i', $releasename))
		{
			$this->tmpCat = Category::CAT_GAME_XBOX;
			return true;
		}
		
		return false;
	}


	//
	// Music
	//
	public function isMusic($releasename)
	{
		if($this->isMusicMP3($releasename)){ return true; }
		if($this->isMusicLossless($releasename)){ return true; }
		
		return false;
	}

	public function isMusicMP3($releasename)
	{
		if (preg_match('/Greatest_Hits|VA?(\-|_)|WEB\-\d{4}/i', $releasename))
		{
			$this->tmpCat = Category::CAT_MUSIC_MP3;
			return true;
		}
		
		return false;
	}

	public function isMusicLossless($releasename)
	{
		if (preg_match('/Lossless|FLAC/i', $releasename))
		{
			$this->tmpCat = Category::CAT_MUSIC_LOSSLESS;
			return true;
		}
		
		return false;
	}
	
	//
	// Ebooks
	// 
	public function isEBook($releasename)
	{
		if (preg_match('/Ebook|E?\-book|\) WW|\[Springer\]|Publishing/i', $releasename))
		{
			$this->tmpCat = Category::CAT_MISC_EBOOK;
			return true;
		}

		return false;
	}
}
?>