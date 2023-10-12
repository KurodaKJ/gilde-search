<?php

namespace App\Helpers;

use DOMDocument;

class HtmlDocumentParser
{
    private DOMDocument $doc;

    public function __construct($htmlContent)
    {
        $this->doc = new DOMDocument();
        // Load the HTML content into the DOMDocument.
        libxml_use_internal_errors(true); // Enable error handling.
        $this->doc->loadHTML($htmlContent);
        libxml_clear_errors(); // Clear any parsing errors.
    }

    public function getLinks()
    {
        return $this->doc->getElementsByTagName('a');
    }

    public function getTitleTags()
    {
        return $this->doc->getElementsByTagName('title');
    }

    public function getMetaTags()
    {
        return $this->doc->getElementsByTagName('meta');
    }
}
