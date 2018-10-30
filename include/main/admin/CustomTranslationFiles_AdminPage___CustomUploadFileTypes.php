<?php
/**
 * Custom Translation Files
 *
 * https://github.com/michaeluno/custom-translation-files
 * Copyright (c) 2018 Michael Uno
 *
 */

/**
 * Adds custom file types to be uploaded.
 */
class CustomTranslationFiles_AdminPage___CustomUploadFileTypes extends CustomTranslationFiles_PluginUtility {

    public function __construct() {

        if (
            in_array( $GLOBALS[ 'pagenow' ], array( 'async-upload.php' ) )
            || $this->getElement( $_GET, 'page' ) === CustomTranslationFiles_Registry::$aAdminPages[ 'setting' ]
        ) {
            add_filter( 'upload_mimes', array( $this, 'replyToAddUploadFileTypes' ) );
        }

    }

    /**
     * @param $aMimeTyoes
     *
     * @return mixed
     * @remark  This needs to be called in `async-upload.php` as well as the subject setting page.
     */
    public function replyToAddUploadFileTypes( $aMimeTyoes ) {
        $aMimeTypes[ 'mo' ]  = 'application/octet-stream';   // unknown type
      return $aMimeTypes;
    }

}