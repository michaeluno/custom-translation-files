<?php
/**
 * Custom Translation Files
 * 
 * https://github.com/michaeluno/custom-translation-files
 * Copyright (c) 2018 Michael Uno
 * 
 */


/**
 * Deals with the plugin admin pages.
 * 
 * @since    0.0.1
 */
class CustomTranslationFiles_AdminPage extends CustomTranslationFiles_AdminPageFramework {

    /**
     * User constructor.
     */
    public function start() {
        
        if ( ! $this->oProp->bIsAdmin ) {
            return;
        }     
        add_filter( "options_" . $this->oProp->sClassName, array( $this, 'replyToSetOptions' ) );

        // Allow custom files types to upload.
        new CustomTranslationFiles_AdminPage___CustomUploadFileTypes;

    }
        /**
         * Sets the default option values for the setting form.
         * @return      array       The options array.
         */
        public function replyToSetOptions( $aOptions ) {
            $_oOption    = CustomTranslationFiles_Option::getInstance();
            return $aOptions + $_oOption->get();            
        }


    /**
     * Sets up admin pages.
     */
    public function setUp() {
        
        $this->setRootMenuPage( 'Settings' );
                    
        // Add pages      
        new CustomTranslationFiles_AdminPage__Page_Setting( $this );

        $this->_doPageSettings();
        
    }

        /**
         * Page styling
         * @since    0.0.1
         * @return   void
         */
        private function _doPageSettings() {
                        
            $this->setPageTitleVisibility( false ); // disable the page title of a specific page.
            $this->setInPageTabTag( 'h2' );                
            // $this->setPluginSettingsLinkLabel( '' ); // pass an empty string to disable it.
            
            $this->enqueueStyle( CustomTranslationFiles_Registry::getPluginURL( 'include/main/asset/css/admin.css' ) );
        
        }

}