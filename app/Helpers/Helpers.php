<?php

/**
 * Generates html <a> tag
 * 
 * @param string $href
 * @param string $text
 * @param string $classes
 *
 * @return string
 */
function linkTag($href,$text,$classes=''){
    return "<a href='$href' class='$classes'>$text</a>";
}