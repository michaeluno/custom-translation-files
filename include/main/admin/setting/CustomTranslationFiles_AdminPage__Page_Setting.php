<?php
/**
 * Custom Translation Files
 * 
 * https://github.com/michaeluno/custom-translation-files
 * Copyright (c) 2018 Michael Uno; Licensed under <LICENSE_TYPE>
 * 
 */

/**
 * Adds the `Settings` page.
 * 
 * @since    0.0.1
 */
class CustomTranslationFiles_AdminPage__Page_Setting extends CustomTranslationFiles_AdminPage__Page_Base {

    /**
     * @param  $oFactory
     * @return array
     */
    protected function _getArguments( $oFactory ) {
        return array(
            'page_slug'     => CustomTranslationFiles_Registry::$aAdminPages[ 'setting' ],
            'title'         => __( 'Custom Translation Files', 'custom-translation-files' ),
            // 'screen_icon'   => CustomTranslationFiles_Registry::getPluginURL( "asset/image/screen_icon_32x32.png" ),
        );
    }

    /**
     * A user constructor.
     * 
     * @since    0.0.3
     * @return   void
     */
    protected function _construct( $oFactory ) {
        
        // Tabs
        new CustomTranslationFiles_AdminPage__InPageTab_Item( $oFactory, $this->_sPageSlug );
        // new CustomTranslationFiles_AdminPage__InPageTab_General( $oFactory, $this->_sPageSlug );
        new CustomTranslationFiles_AdminPage__InPageTab_Data( $oFactory, $this->_sPageSlug );

    }   

}
