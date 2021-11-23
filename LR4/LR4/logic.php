<?php
if (isset($_POST['submit'])) {

$html = $_POST['text'];

$html= str_replace(" - ","–",$html);
$html= str_replace(" -- "," —",$html);
$html= str_replace("итд","и т.д",$html);
$html= str_replace("итп","и т.п",$html);

$html  = mb_convert_encoding($html , 'HTML-ENTITIES', 'UTF-8');
$dom = new DOMDocument();
$dom->loadHTML($html);

$classes = array();
$styles = array();
    foreach($dom->getElementsByTagName('*') as $element ){
        if ($element->hasAttribute('style')) {

        $style = $element->getAttribute('style');
        $element->removeAttribute('style');
        $styles[] = $style;

        $style= str_replace(" ","",$style);
        $style = preg_replace('/[^A-Za-z0-9\-]/', '', $style);
        $classes[] = $style;

        $class = $element->getAttribute('class');
        $class .=  " ";
        $class .=  $style;

        $element->setAttribute("class", $class);
        }
}
$classes = array_unique($classes);
$styles = array_unique($styles);

echo '<style>';
    for ($i = 0; $i < count($classes); ++$i) {
    if (!empty($classes[$i])) {
        echo '.'.$classes[$i].'{';
        echo $styles[$i] . '}';
    }
    }
    echo '</style>';

$count = 0;
echo '<ol>';
    foreach(array('h1', 'h2','h3') as $tag) {
    foreach($dom->getElementsByTagName($tag) as $node) {
    $part = "part";
    $count = $count + 1;
    $part.= $count;
    $header = $matches[$node->getLineNo()] = $dom->saveHtml($node);
    $header = strip_tags($header);

    if (iconv_strlen($header) > 50 ) {
        $header = mb_substr($header,0,50);
        $header .= "...";
        }

    echo $header = '<li>' .'<H2>'. '<a href="#'. $part .'">'.$header .'</a>'.'</H2>'.'</li>';
    $node->setAttribute("id", $part);
        }
    }
    echo  '</ol>';

echo  $dom->saveHTML();
}