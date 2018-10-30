<?php 
/**
	Admin Page Framework v3.8.12 by Michael Uno 
	Generated by PHP Class Files Script Generator <https://github.com/michaeluno/PHP-Class-Files-Script-Generator>
	<http://en.michaeluno.jp/custom-translation-files>
	Copyright (c) 2013-2016, Michael Uno; Licensed under MIT <http://opensource.org/licenses/MIT> */
abstract class CustomTranslationFiles_AdminPageFramework_Form_View___CSS_Base extends CustomTranslationFiles_AdminPageFramework_FrameworkUtility {
    public $aAdded = array();
    public function add($sCSSRules) {
        $this->aAdded[] = $sCSSRules;
    }
    public function get() {
        $_sCSSRules = $this->_get() . PHP_EOL;
        $_sCSSRules.= $this->_getVersionSpecific();
        $_sCSSRules.= implode(PHP_EOL, $this->aAdded);
        return $_sCSSRules;
    }
    protected function _get() {
        return '';
    }
    protected function _getVersionSpecific() {
        return '';
    }
}
class CustomTranslationFiles_AdminPageFramework_Form_View___CSS_CollapsibleSection extends CustomTranslationFiles_AdminPageFramework_Form_View___CSS_Base {
    protected function _get() {
        return $this->_getCollapsibleSectionsRules();
    }
    private function _getCollapsibleSectionsRules() {
        $_sCSSRules = ".custom-translation-files-collapsible-sections-title.custom-translation-files-collapsible-type-box, .custom-translation-files-collapsible-section-title.custom-translation-files-collapsible-type-box{font-size:13px;background-color: #fff;padding: 15px 18px;margin-top: 1em; border-top: 1px solid #eee;border-bottom: 1px solid #eee;}.custom-translation-files-collapsible-sections-title.custom-translation-files-collapsible-type-box.collapsed.custom-translation-files-collapsible-section-title.custom-translation-files-collapsible-type-box.collapsed {border-bottom: 1px solid #dfdfdf;margin-bottom: 1em; }.custom-translation-files-collapsible-section-title.custom-translation-files-collapsible-type-box {margin-top: 0;}.custom-translation-files-collapsible-section-title.custom-translation-files-collapsible-type-box.collapsed {margin-bottom: 0;}#poststuff .custom-translation-files-collapsible-sections-title.custom-translation-files-collapsible-type-box.custom-translation-files-section-title h3,#poststuff .custom-translation-files-collapsible-section-title.custom-translation-files-collapsible-type-box.custom-translation-files-section-title h3{font-size: 1em;margin: 0;}.custom-translation-files-collapsible-sections-title.custom-translation-files-collapsible-type-box.accordion-section-title:after,.custom-translation-files-collapsible-section-title.custom-translation-files-collapsible-type-box.accordion-section-title:after {top: 12px;right: 15px;}.custom-translation-files-collapsible-sections-title.custom-translation-files-collapsible-type-box.accordion-section-title:after,.custom-translation-files-collapsible-section-title.custom-translation-files-collapsible-type-box.accordion-section-title:after {content: '\\f142';}.custom-translation-files-collapsible-sections-title.custom-translation-files-collapsible-type-box.accordion-section-title.collapsed:after,.custom-translation-files-collapsible-section-title.custom-translation-files-collapsible-type-box.accordion-section-title.collapsed:after {content: '\\f140';} .custom-translation-files-collapsible-sections-content.custom-translation-files-collapsible-content.accordion-section-content,.custom-translation-files-collapsible-section-content.custom-translation-files-collapsible-content.accordion-section-content,.custom-translation-files-collapsible-sections-content.custom-translation-files-collapsible-content-type-box, .custom-translation-files-collapsible-section-content.custom-translation-files-collapsible-content-type-box{border: 1px solid #dfdfdf;border-top: 0;background-color: #fff;}tbody.custom-translation-files-collapsible-content {display: table-caption; padding: 10px 20px 15px 20px;}tbody.custom-translation-files-collapsible-content.table-caption {display: table-caption; }.custom-translation-files-collapsible-toggle-all-button-container {margin-top: 1em;margin-bottom: 1em;width: 100%;display: table; }.custom-translation-files-collapsible-toggle-all-button.button {height: 36px;line-height: 34px;padding: 0 16px 6px;font-size: 20px;width: auto;}.flipped > .custom-translation-files-collapsible-toggle-all-button.button.dashicons {-moz-transform: scaleY(-1);-webkit-transform: scaleY(-1);transform: scaleY(-1);filter: flipv; }.custom-translation-files-collapsible-section-title.custom-translation-files-collapsible-type-box .custom-translation-files-repeatable-section-buttons {margin: 0;margin-right: 2em; }.custom-translation-files-collapsible-section-title.custom-translation-files-collapsible-type-box .custom-translation-files-repeatable-section-buttons.section_title_field_sibling {margin-top: 0;}.custom-translation-files-collapsible-section-title.custom-translation-files-collapsible-type-box .repeatable-section-button {background: none; }.accordion-section-content.custom-translation-files-collapsible-content-type-button {background-color: transparent;}.custom-translation-files-collapsible-button {color: #888;margin-right: 0.4em;font-size: 0.8em;}.custom-translation-files-collapsible-button-collapse {display: inline;} .collapsed .custom-translation-files-collapsible-button-collapse {display: none;}.custom-translation-files-collapsible-button-expand {display: none;}.collapsed .custom-translation-files-collapsible-button-expand {display: inline;}.custom-translation-files-collapsible-section-title .custom-translation-files-fields {display: inline;}.custom-translation-files-collapsible-section-title .custom-translation-files-field {float: none;}.custom-translation-files-collapsible-section-title .custom-translation-files-fieldset {display: inline;margin-right: 1em;vertical-align: middle; }#poststuff .custom-translation-files-collapsible-title.custom-translation-files-collapsible-section-title .section-title-container.has-fields .section-title{width: auto;display: inline-block;margin: 0 1em 0 0.4em;vertical-align: middle;}";
        if (version_compare($GLOBALS['wp_version'], '3.8', '<')) {
            $_sCSSRules.= ".custom-translation-files-collapsible-sections-title.custom-translation-files-collapsible-type-box.accordion-section-title:after,.custom-translation-files-collapsible-section-title.custom-translation-files-collapsible-type-box.accordion-section-title:after {content: '';top: 18px;}.custom-translation-files-collapsible-sections-title.custom-translation-files-collapsible-type-box.accordion-section-title.collapsed:after,.custom-translation-files-collapsible-section-title.custom-translation-files-collapsible-type-box.accordion-section-title.collapsed:after {content: '';} .custom-translation-files-collapsible-toggle-all-button.button {font-size: 1em;}.custom-translation-files-collapsible-section-title.custom-translation-files-collapsible-type-box .custom-translation-files-repeatable-section-buttons {top: -8px;}";
        }
        return $_sCSSRules;
    }
}