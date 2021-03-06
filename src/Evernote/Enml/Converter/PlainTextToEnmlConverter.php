<?php

namespace Evernote\Enml\Converter;

class PlainTextToEnmlConverter implements EnmlConverterInterface
{
    public function convertToEnml($content)
    {
        return '<?xml version="1.0" encoding="UTF-8"?>
        <!DOCTYPE en-note SYSTEM "http://xml.evernote.com/pub/enml2.dtd">
        <en-note>' . $content . '</en-note>';
    }
} 