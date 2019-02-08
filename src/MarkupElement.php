<?php

namespace DorsetDigital\Elements;

use DNADesign\Elemental\Models\BaseElement;
use SilverStripe\Forms\LiteralField;
use SilverStripe\Forms\TextareaField;

class MarkupElement extends BaseElement
{
    private static $singular_name = 'Markup';
    private static $plural_name = 'Markup';
    private static $description = 'Adds arbitrary markup to a page';
    private static $table_name = 'DD_Elements_Markup';
    private static $db = [
        'Markup' => 'HTMLText'
    ];

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();
        $fields->addFieldToTab('Root.Main',
            TextareaField::create('Markup')->setTitle(_t(__CLASS__ . '.ContentTitle', 'Markup')));
        $fields->addFieldToTab('Root.Main',
            LiteralField::create('Warning',
                '<p><strong>' . _t(__CLASS__ . '.MarkupWarning',
                    "Warning! This field is not validated.  Code entered here may break your page!  Proceed with caution!") . '</strong></p>')
                ->addExtraClass('form__field-label'));
        return $fields;
    }

    public function getType()
    {
        return 'Markup';
    }
}
