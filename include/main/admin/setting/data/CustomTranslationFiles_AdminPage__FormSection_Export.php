<?php
/**
 * Custom Translation Files
 *
 * https://github.com/michaeluno/custom-translation-files
 * Copyright (c) 2018 Michael Uno; Licensed under <LICENSE_TYPE>
 */

/**
 * Adds the 'Export' form section to the 'Manage Options' tab.
 *
 * @since    0.0.3
 */
class CustomTranslationFiles_AdminPage__FormSection_Export extends CustomTranslationFiles_AdminPage__FormSection_Base {

    /**
     *
     * @since   0.0.3
     */
    protected function _getArguments( $oFactory ) {
        return array(
            'section_id'    => 'export',
            'tab_slug'      => $this->_sTabSlug,
            'title'         => __( 'Export', 'custom-translation-files' ),
        );
    }

    /**
     * Get adding form fields.
     * @since    0.0.3
     * @return   array
     */
    protected function _getFields( $oFactory ) {
        return array(
            array(
                'field_id'          => 'export_options',
                'title'             => __( 'Export Options', 'custom-translation-files' ),
                'type'              => 'export',
                'value'             => __( 'Download', 'custom-translation-files' ),
                'save'              => false,
            )
        );

    }

}