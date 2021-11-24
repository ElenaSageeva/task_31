function delete_meta_descr($html) {
$pattern = '/<meta name(.*)=(.*)"description"(.*)>/i'; // это удалит поле description
$html = preg_replace($pattern, '', $html, 1);
return $html;
}

function delete_meta_title($html) {
$pattern = '/<meta name(.*)=(.*)"title"(.*)>/i'; // это удалит поле title
$html = preg_replace($pattern, '', $html, 1);
return $html;
}

function delete_meta_keywords($html) {
$pattern = '/<meta name(.*)=(.*)"keywords"(.*)>/i'; // это удалит поле keywords
$html = preg_replace($pattern, '', $html, 1);
return $html;
}