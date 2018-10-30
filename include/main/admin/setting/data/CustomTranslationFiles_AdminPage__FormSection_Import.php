<?php
/**
 * Custom Translation Files
 *
 * https://github.com/michaeluno/custom-translation-files
 * Copyright (c) 2018 Michael Uno; Licensed under <LICENSE_TYPE>
 */

/**
 * Adds the 'Import' form section to the 'Manage Options' tab.
 *
 * @since    0.0.3
 */
class CustomTranslationFiles_AdminPage__FormSection_Import extends CustomTranslationFiles_AdminPage__FormSection_Base {

    /**
     *
     * @since   0.0.3
     */
    protected function _getArguments( $oFactory ) {
        return array(
            'section_id'    => 'import',
            'tab_slug'      => $this->_sTabSlug,
            'title'         => __( 'Import', 'custom-translation-files' ),
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
                'field_id'          => 'import_options',
                'title'             => __( 'Import Options', 'custom-translation-files' ),
                'type'              => 'import',
                'value'             => __( 'Upload Options', 'custom-translation-files' ),
                'save'              => false,
            )
        );

    }

}