<?php
/**
 * Custom Translation Files
 *
 *
 * https://github.com/michaeluno/custom-translation-files
 * Copyright (c) 2018 Michael Uno; Licensed under <LICENSE_TYPE>
 *
 */

/**
 * Adds the 'Manage Options' tab to the 'Settings' page of the loader plugin.
 *
 * @since    0.0.3
 * @extends  CustomTranslationFiles_AdminPage__InPageTab_Base
 */
class CustomTranslationFiles_AdminPage__InPageTab_Data extends CustomTranslationFiles_AdminPage__InPageTab_Base {

    /**
     * @return      array
     */
    protected function _getArguments( $oFactory ) {
        return array(
            'tab_slug'  => 'reset',
            'title'     => __( 'Reset', 'custom-translation-files' ),
        );
    }
    
    /**
     * Triggered when the tab is loaded.
     */
    protected function _load( $oFactory ) {

        // Form sections
        new CustomTranslationFiles_AdminPage__FormSection_Export( $oFactory, $this->_sPageSlug, $this->_sTabSlug );
        new CustomTranslationFiles_AdminPage__FormSection_Import( $oFactory, $this->_sPageSlug, $this->_sTabSlug );
        new CustomTranslationFiles_AdminPage__FormSection_DoReset( $oFactory, $this->_sPageSlug, $this->_sTabSlug );
        new CustomTranslationFiles_AdminPage__FormSection_Delete( $oFactory, $this->_sPageSlug, $this->_sTabSlug );

    }

    /**
     * @param $oFactory
     */
    protected function _do( $oFactory ) {
        echo "<div class='right-submit-button'>"
                . get_submit_button()
            . "</div>";
    }

}
