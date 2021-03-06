<?php
/**
 * Custom Translation Files
 *
 * https://github.com/michaeluno/custom-translation-files
 * Copyright (c) 2018 Michael Uno
 *
 */

/**
 * Provides an abstract base for adding pages.
 * 
 * @since       0.0.3
 */
abstract class CustomTranslationFiles_AdminPage__Element_Base extends CustomTranslationFiles_PluginUtility {
    
    protected $_oFactory;
    
    protected $_aArguments = array();
    
    /* Common Protected Methods which should be overridden. */
    protected function _construct( $oFactory ) {}
    
    protected function _getArguments( $oFactory ) {
        return array();
    }    
        
    protected function _load( $oFactory ) {}
    
    /* Common Internal Methods */
    /**
     * Called when the in-page tab loads.
     */
    public function replyToLoad( $oFactory ) {
        $this->_load( $oFactory );
    }        
    
}