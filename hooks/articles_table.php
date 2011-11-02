<?php //ARTICLES TABLE
function tableimages($keyword = THIS_PAGE_KEYWORD, $items = '8') {
	$f = new phpFlickr(FLICKR_API);
	$f->enableCache("fs", LOCAL_CACHE);
	$photos_cat = $f->photos_search(array("text"=>$keyword, "sort"=>"relevance", "per_page"=>$items));
	foreach ($photos_cat['photo'] as $photo) {
		$imagename1 = basename($f->buildPhotoURL($photo, "Square"));
		$file1 = @file_get_contents(LOCAL_CACHE.$imagename1);
		if ($file1 == false) {
			$file1 = fetch($f->buildPhotoURL($photo, "Square"));
			savedata($file1, $imagename1);
		}
		$imagename2 = basename($f->buildPhotoURL($photo, "Medium"));
		$file2 = @file_get_contents(LOCAL_CACHE.$imagename2);
		if ($file2 == false) {
			$file2 = fetch($f->buildPhotoURL($photo, "Medium"));
			savedata($file2, $imagename2);
		}
    	$flickr = '<a href="http://'.THIS_DOMAIN.'/'.str_replace(" ", "-", $keyword).'" title="'.$keyword.'">'."\n";
    	$flickr .= "<img alt=\"".$keyword."\" src=\"".LOCAL_CACHE.$imagename1."\" /></a>";
	}
	$flickr .= "\n";
	return $flickr;
}
function table($items = '2') {
	$timestamp = filemtime(FILE_KEYWORDS);
	$timestamp = date("F j, Y, g:i a",$timestamp);
	$keywords = file(FILE_KEYWORDS);
	$keywords = array_map('trim', $keywords);
	$table = '<div id="table">'."\n";
	$table .= '<table>'."\n";
	foreach($keywords as $keyword) {
		$table .= '<tr>'."\n";
		$table .= '<td>'."\n";
		$table .= tableimages($keyword, '1');
		$table .= '</td>'."\n";
		$table .= '<td>'."\n";
		$table .= '<a href="http://'.THIS_DOMAIN.'/'.str_replace(" ", "-", $keyword).'" title="'.$keyword.'">'.$keyword.'</a><br />'."\n";
		$table .= 'Published on '.$timestamp.''."\n";
		$table .= '</td>'."\n";
		$table .= '</tr>'."\n";
		$n++;
		if ($n >= $items) {
			break;
		}
	}
	$table .= '</table>'."\n";
	$table .= '</div>'."\n";
	print $table;
}
?>