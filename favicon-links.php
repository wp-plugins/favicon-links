<?php
/**
* Plugin Name: Favicon Links
* Plugin URI: http://whyte624.ru/prj/wordpress-favicon-links
* Description: Adds favicons to all links in any post
* Version: 1.0
* Author: Andrei Sozonov
* Author URI: http://whyte624.ru/
* License: GPL2
*/

function favicon_links_the_content($content) {
    $html = new DOMDocument(null, 'UTF-8');
    $html->loadHTML('<meta http-equiv="content-type" content="text/html; charset=utf-8">' . $content);

    foreach ($html->getElementsByTagName('a') as $a) {
        /* @var DOMElement $a */
        $imgs = $a->getElementsByTagName('img');
        if ($imgs->length > 0) {
            continue;
        }

        $url = $a->attributes->getNamedItem('href');
        if (!$url) {
            continue;
        }
        $urlParts = parse_url($url->textContent);
        if (!$urlParts || empty($urlParts['host'])) {
            continue;
        }

        $img = $html->createElement('img');
        $img->setAttribute('src', 'http://www.google.com/s2/favicons?domain=' . $urlParts['host']);
        $a->insertBefore($img, $a->firstChild);
    }

    return $html->saveHTML();
}
add_filter( 'the_content', 'favicon_links_the_content' );