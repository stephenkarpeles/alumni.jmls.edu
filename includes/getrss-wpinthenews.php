<?php

    // enable php_xsl extension

    $xml = new DomDocument;
    $xml->load("http://news.jmls.edu/category/in-the-news/feed/");

    $xsl = new DomDocument;
    $xsl->load("/xsl/rss-inthenews.xsl");

    $xp = new XsltProcessor();
    $xp->importStylesheet($xsl);
    if($html = $xp->transformToXML($xml)) echo $html;
?>