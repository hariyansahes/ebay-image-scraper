<?php

    # don't forget the library
    include('simple_html_dom.php');
$url='http://www.ebay.com/itm/Michael-Kors-Jet-Set-Large-Crossbody-Brown-/161823467621';
$html = file_get_html($url);
 $parts = parse_url($url);
    echo $parts['host'];
$no=0;
foreach($html->find('img') as $element){
if($no==3){
echo "<img src=".$element->src ."></img><br>";
}       
                
$no++;
}
?>
