<?php
/**
 * Custom Translation Files
 *
 * https://github.com/michaeluno/custom-translation-files
 * Copyright (c) 2018 Michael Uno; Licensed under <LICENSE_TYPE>
 */

/**
 * Adds the 'Items' form section to the 'Items' tab.
 *
 * @since   0.0.3
 * @extends CustomTranslationFiles_AdminPage__FormSection_Base
 */
class CustomTranslationFiles_AdminPage__FormSection_Item extends CustomTranslationFiles_AdminPage__FormSection_Base {

    /**
     *
     * @since   0.0.3
     */
    protected function _getArguments( $oFactory ) {
        return array(
            'section_id'    => 'items',
            'title'         => __( 'Items', 'custom-translation-files' ),
            'description'   => array(
                __( 'Define items.', 'custom-translation-files' ),
            ),
            'collapsible'       => array(
                'toggle_all_button' => array( 'top-left', 'bottom-left' ),
                'container'         => 'section',
                'is_collapsed'      => false,
            ),
            'repeatable'        => true, // this makes the section repeatable
            'sortable'          => true,
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
                'field_id'         => 'name',
                'type'             => 'section_title',
                'before_input'     => "<strong>"
                    . __( 'Name', 'custom-translation-files' )
                    . "</strong>:&nbsp; ",
                'attributes'       => array(
                    'style'         => 'min-width: 260px;',
                    'placeholder'   => __( 'Enter a scrollbar name', 'custom-translation-files' ),
                ),
            ),
            array(
                'field_id'         => 'status',
                'type'             => 'radio',
                'label'            => array(
                    1    => __( 'On', 'custom-translation-files' ),
                    0    => __( 'Off', 'custom-translation-files' ),
                ),
                'placement'        => 'section_title',
                'label_min_width'  => 0,
                'default'          => 1,
            ),
            array(
                'field_id'         => 'text_domain',
                'type'             => 'text',
                'title'            => __( 'Text Domain', 'custom-translation-files' ),
                'description'      => 'e.g. <code>my-text-domain</code>',
                'attributes'        => array(
                    'size' => 40,
                ),
            ),
            array(
                'field_id'         => 'mo_file_url',
                'type'             => 'media',
                'title'            => __( 'MO File', 'custom-translation-files' ),
//                'attributes_to_store' => array(
//                    'id',
//                ),
                'attributes'        => array(
                    'required'  => 'required',
                ),
                'description'       => array(
                    __( 'The file name should start with the text domain and a hyphen, and the locale.', 'custom-translation-files' ),
                    'e.g. <code>my-text-domain-de_DE.mo</code>, <code>my-text-domain-ja.mo</code>'
                ),
            ),
            array(
                'field_id'         => 'locale',
                'type'             => 'text',
                'title'            => __( 'Locale', 'custom-translation-files' ),
                'attributes'        => array(
                    'style'     => 'background-color:#EEE;',
                ),

            ),
            array()
        );

    }

    /**
     * Validates the submitted form data.
     *
     * @since    1.0.0
     */
    public function _validate( $aInputs, $aOldInput, $oAdminPage, $aSubmitInfo ) {

        $_aErrors   = array();
        $_bHasError = false;


        try {

            $_aFormatted = array();
            foreach( $aInputs as $_iIndex => $_aItem ) {

                $_aFormatted[ $_iIndex ] = $_aItem;

                // Check URL
                $_sURL        = $_aItem[ 'mo_file_url' ];
                if ( ! $_sURL ) {
                    $_bHasError = true;
                    $_aErrors[ 'items' ][ 'mo_file_url' ] = __( 'A file path is required.', 'custom-translation-files' );
                    continue;
                }

                // Check Path
                $_sPath       = str_replace( site_url(), rtrim( ABSPATH, '\\/' ), $_sURL );
                $_sPath       = str_replace( '\\', '/', $_sPath );
                $_aFormatted[ $_iIndex ][ 'mo_file_path' ] = $_sPath;
                if ( ! file_exists( $_sPath ) ) {
                    $_bHasError = true;
                    $_aErrors[ 'items' ][ 'mo_file_url' ] = __( 'The file does not exists.', 'custom-translation-files' );
                    continue;
                }

                $_sBaseName   = basename( $_sURL, '.mo' );

                // Check text domain
                // Sanitise
                $_aItem[ 'text_domain' ] = trim( $_aItem[ 'text_domain' ] );
                $_sTextDomain = preg_replace( '/(.+)-.+/', '$1', $_sBaseName );
                if ( $_aItem[ 'text_domain' ] && $_sTextDomain !== $_aItem[ 'text_domain' ] ) {
                    $_bHasError = true;
                    $_aErrors[ 'items' ][ 'text_domain' ] = __( 'The text domain in the file name are not properly set.', 'custom-translation-files' );
                    continue;
                }
                $_aFormatted[ $_iIndex ][ 'text_domain' ] = $_aItem[ 'text_domain' ];

                $_sLocale     = preg_replace( '/.+-(.+)/', '$1', $_sBaseName );
                $_aFormatted[ $_iIndex ][ 'locale' ] = $_sLocale;


            }
            if ( $_bHasError ) {
                throw new Exception( __( 'There was an error in your inputs.', 'custom-translation-files' ) );
            }
            $aInputs = $_aFormatted;
//            if ( ! $aInputs[ 'reset_confirmation_check' ] ) {
//                $_aErrors[ $this->_sSectionID ][ 'reset_confirmation_check' ] = __( 'Please check the check box to confirm you want to reset the settings.', 'custom-translation-files' );
//                throw '';
//            }

        } catch ( Exception $_oException ) {

            // An invalid value is found. Set a field error array and an admin notice and return the old values.
            $oAdminPage->setFieldErrors( $_aErrors );
            $oAdminPage->setSettingNotice( $_oException->getMessage() );
            return $aOldInput;

        }

        return $aInputs;

    }


}