<?
	class IdItems {
		function additems($id,$idsstr){
			$outids = '';
			if($idsstr!=''){
				$ids = explode(",",$idsstr);
				if(!in_array($id,$ids)) array_unshift($ids,$id);
				$outids = implode(',',$ids);
			}
			return $outids;
		}
		function removeitems($id,$idsstr){
			$outids ='';
			if($idsstr!=''){
				$ids = explode(",",$idsstr);
				if(in_array($id,$ids)){
					$tmpid = array($id);
					$ids = array_diff($ids,$tmpid);
				}
				$outids = implode(',',$ids);
			}
			return $outids;
		}
		function countitems($idsstr){
			if($idsstr=='') $outc = 0;
			else{
				$ids = explode(",",$idsstr);
				$outc = count($ids);
			}
			if($outc=="The request failed."){
				$outc=0;
			}
			return $outc;
		}
		function showwishlist($ids=''){
			global $modx;
			if($ids!='') $ids = explode(",",$ids);
			else $ids=array();
			$idcount = count($ids);
			echo '<div id="header"><h1>My Wishlist ('.$idcount.')</h1></div><div id="listitems">';
			if($idcount>0){
				$i=1;
				foreach($ids as $id){
					if($i%2) $classname = '';
					else $classname = ' bg2';
					$res = $modx->getTemplateVarOutput(array('h1title','overviews','tourPhoto'),$id,1);
					if($res['tourPhoto']){
                              $tmpres1=$modx->getTemplateVarOutput(array('width320*220'),$res['tourPhoto'],1);
                              $picurl = $tmpres1['width320*220'];
                         };
					
					echo '<div class="list'.$classname.'"><div class="cont"><h3><a href="'.$modx->makeUrl($id).'" target="_parent">'.$res['h1title'].'</a></h3><div class="pic"><img src="'.$picurl.'" width="135" /></div><div class="info"><p><strong>Overviews:</strong>'.$res['overviews'].'</p></div><div class="bottom"><P align="right"><a class="enquiry" href="'.$modx->makeUrl($id).'#bookings" target="_parent">enquiry now</a> <a href="wishlist?delxl='.$id.'">[X] Remove from my wish list</a></P></div></div></div>';
					$i++;					
				}
			}else echo '<div style="padding:10px;"><p>Your Wishlist is currently empty.</p><p>To add items simply click the "Add to My Wishlist" links when browsing our selection of tours and activities.</p></div>';
			echo '</div>';
		}
	}
?>