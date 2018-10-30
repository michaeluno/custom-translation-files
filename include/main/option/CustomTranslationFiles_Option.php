<?php
/**
 * Custom Translation Files
 * 
 * https://github.com/michaeluno/custom-translation-files
 * Copyright (c) 2018 Michael Uno
 * 
 */

/**
 * Handles plugin options.
 * 
 * @since    0.0.1
 */
class CustomTranslationFiles_Option extends CustomTranslationFiles_Option_Base {

    /**
     * Stores instances by option key.
     * 
     * @since    0.0.1
     */
    static public $aInstances = array(
        // key => object
    );

    /**
     * Returns the instance of the class.
     * 
     * This is to ensure only one instance exists.
     * 
     * @since      3
     */
    static public function getInstance( $sOptionKey='' ) {
        
        $sOptionKey = $sOptionKey 
            ? $sOptionKey
            : CustomTranslationFiles_Registry::$aOptionKeys[ 'setting' ];
        
        if ( isset( self::$aInstances[ $sOptionKey ] ) ) {
            return self::$aInstances[ $sOptionKey ];
        }
        $_sClassName = apply_filters( 
            CustomTranslationFiles_Registry::HOOK_SLUG . '_filter_option_class_name',
            __CLASS__ 
        );
        self::$aInstances[ $sOptionKey ] = new $_sClassName( $sOptionKey );
        return self::$aInstances[ $sOptionKey ];
        
    }         
        
    /**
     * Checks whether the plugin debug mode is on or not.
     * @return      boolean
     */ 
    public function isDebug() {
        return defined( 'WP_DEBUG' ) && WP_DEBUG;
    }
    
}