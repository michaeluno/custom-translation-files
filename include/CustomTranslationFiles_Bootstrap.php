<?php
/**
 * Custom Translation Files
 * 
 * https://github.com/michaeluno/custom-translation-files
 * Copyright (c) 2018 Michael Uno
 * 
 */

/**
 * Loads the plugin.
 * 
 * @since       0.0.1
 */
final class CustomTranslationFiles_Bootstrap extends CustomTranslationFiles_AdminPageFramework_PluginBootstrap {
    
    /**
     * User constructor.
     */
    protected function construct()  {}        

        
    /**
     * Register classes to be auto-loaded.
     * 
     * @since    0.0.1
     */
    public function getClasses() {
        
        // Include the include lists. The including file reassigns the list(array) to the $_aClassFiles variable.
        $_aClassFiles   = array();
        $_bLoaded       = include( dirname( $this->sFilePath ) . '/include/class-list.php' );
        if ( ! $_bLoaded ) {
            return $_aClassFiles;
        }
        return $_aClassFiles;
                
    }

    /**
     * Sets up constants.
     */
    public function setConstants() {
    }    
    
    /**
     * Sets up global variables.
     */
    public function setGlobals() {
    }    
    
    /**
     * The plugin activation callback method.
     */    
    public function replyToPluginActivation() {

        $this->___checkRequirements();
        
    }
        
        /**
         * 
         * @since            1.0.0
         */
        private function ___checkRequirements() {

            $_oRequirementCheck = new CustomTranslationFiles_AdminPageFramework_Requirement(
                CustomTranslationFiles_Registry::$aRequirements,
                CustomTranslationFiles_Registry::NAME
            );
            
            if ( $_oRequirementCheck->check() ) {            
                $_oRequirementCheck->deactivatePlugin( 
                    $this->sFilePath, 
                    __( 'Deactivating the plugin', 'custom-translation-files' ),  // additional message
                    true    // is in the activation hook. This will exit the script.
                );
            }        
             
        }    

        
    /**
     * The plugin activation callback method.
     */    
    public function replyToPluginDeactivation() {
        
        CustomTranslationFiles_WPUtility::cleanTransients(
            array(
                CustomTranslationFiles_Registry::TRANSIENT_PREFIX,
                'apf_',
            )
        );
        
    }        
    
        
    /**
     * Load localization files.
     * 
     * @callback    action      init
     */
    public function setLocalization() {
        
        // This plugin does not have messages to be displayed in the front-end.
        if ( ! $this->bIsAdmin ) { 
            return; 
        }
        
        load_plugin_textdomain( 
            CustomTranslationFiles_Registry::TEXT_DOMAIN,
            false, 
            dirname( plugin_basename( $this->sFilePath ) ) . '/' . CustomTranslationFiles_Registry::TEXT_DOMAIN_PATH
        );
        
    }        

    /**
     * Loads the plugin specific components. 
     * 
     * @remark        All the necessary classes should have been already loaded.
     */
    public function setUp() {
        
        // This constant is set when `uninstall.php` is loaded.
        if ( defined( 'DOING_PLUGIN_UNINSTALL' ) && DOING_PLUGIN_UNINSTALL ) {
            return;
        }

        // Option Object - must be done before the template object.
        // The initial instantiation will handle formatting options from earlier versions of the plugin.
        CustomTranslationFiles_Option::getInstance();
     
        // Admin pages
        if ( $this->bIsAdmin ) {            
        
            new CustomTranslationFiles_AdminPage(
                CustomTranslationFiles_Registry::$aOptionKeys[ 'setting' ],
                $this->sFilePath 
            );

        }
        
        new CustomTranslationFiles_Loader_Main;
        
    }
        /**
         * Includes additional files.
         */
        private function _include() {}
    
}