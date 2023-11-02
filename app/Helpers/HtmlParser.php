<?php

namespace App\Helpers;

use DOMDocument;
use DOMXPath;

class HtmlParser
{
    public static function parse($htmlContent)
    {
        $doc = new DOMDocument();
        libxml_use_internal_errors(true);
        $doc->loadHTML($htmlContent);
        libxml_clear_errors();

        return new static($doc);
    }

    protected DOMDocument $doc;

    public function __construct(DOMDocument $doc)
    {
        $this->doc = $doc;
    }

    public function getLinks()
    {
        $links = [];
        $xpath = new DOMXPath($this->doc);
        $anchorTags = $xpath->query('//a');

        foreach ($anchorTags as $tag) {
            $links[] = [
                'url' => $tag->getAttribute('href'),
                'text' => $tag->nodeValue,
            ];
        }

        return $links;
    }

    public function getTitle()
    {
        $titleTags = $this->doc->getElementsByTagName('title');
        if ($titleTags->length > 0) {
            return $titleTags->item(0)->nodeValue;
        }

        return null;
    }

    public function getMetaTags()
    {
        $metaTags = [];
        $metaNodes = $this->doc->getElementsByTagName('meta');

        foreach ($metaNodes as $metaNode) {
            $name = $metaNode->getAttribute('name');
            $content = $metaNode->getAttribute('content');
            $metaTags[] = [
                'name' => $name,
                'content' => $content,
            ];
        }

        return $metaTags;
    }
}
