<?php
$q = $_REQUEST['q'];
if($_REQUEST['q'] != '' && strlen($_REQUEST['q'])>1 ){
    $url = "http://hotels.byokids.com.au/morba.php?callback=html&q=$q&limit=10&s=com&l=en&timestamp=1399004146&_=1399004145516";
    $return = (string)file_get_contents($url);    
    $return = str_replace('html("',  '', $return);
    $return = str_replace('");',  '', $return);
    $return = str_replace('<i>',  '', $return);
    $return = explode('\n', $return);
    $r = '';

    $r .= '<ul class="typeahead dropdown-menu home" id="dropdown-menu" style="display:inline; position:relative; background-color:#FFFFFF;">'; 
    foreach ($return as &$value) {
        $value2 = explode('<\/i>', $value);
        if(isset($value2[1])) {
            $v3 = explode("|", $value2[1]);
        }
        $v3 = $v3[1];
        if($v3 == 'city'){
            $r .= '<li data-value="'.$value2[0].'"><a href="#" style="padding: 5px 20px; font-size: 13px;" onclick="add(\''.addslashes(str_replace('<\/i>',  '', $value)).'\')">'.$value2[0].'</a></li>';
        }
    }
    $r .= '</ul>'; 
    echo $r;
}
?>