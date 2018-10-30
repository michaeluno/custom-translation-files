<?php
/**
 * Custom Translation Files
 *
 * https://github.com/michaeluno/custom-translation-files
 * Copyright (c) 2018 Michael Uno; Licensed under <LICENSE_TYPE>
 */

/**
 * Adds the 'Sample' form section to the 'General' tab.
 *
 * @since    0.0.3
 */
class CustomTranslationFiles_AdminPage__FormSection_Sample extends CustomTranslationFiles_AdminPage__FormSection_Base {

    /**
     *
     * @since   0.0.3
     */
    protected function _getArguments( $oFactory ) {
        return array(
            'section_id'    => 'sample',
            'tab_slug'      => $this->_sTabSlug,
            'title'         => __( 'Sample', 'custom-translation-files' ),
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
                'field_id'          => 'delete_on_uninstall',
                'type'              => 'checkbox',
                'show_title_column' => false,
                'label'             => __( 'This is a checkbox', 'custom-translation-files' ),
            )
        );

    }

}