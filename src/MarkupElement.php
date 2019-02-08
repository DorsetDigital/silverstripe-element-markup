<?php

namespace DorsetDigital\Elements;

use DNADesign\Elemental\Models\BaseElement;
use SilverStripe\Forms\TextareaField;
use SilverStripe\Forms\TextField;

class MarkupElement extends BaseElement
{
    private static $singular_name = 'Markup';
    private static $plural_name = 'Markup';
    private static $description = 'Adds arbitrary markup to a page';
    private static $table_name = 'DD_Elements_Markup';

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();
        $fields->addFieldToTab('Root.Main',
            TextareaField::create('Content')->setTitle(_t(__CLASS__ . '.ContentTitle', 'Markup')));
        $fields->addFieldToTab('Root.Main', LiteralField::create('Warning',
            _t(__CLASS__ . '.MarkupWarning',
                "Warning! This field is not validated.  Code entered here may break your page!")));
        return $fields;
    }

    public function getType()
    {
        return 'Markup';
    }
}
