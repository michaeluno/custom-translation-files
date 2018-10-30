<?php
/**
 * Custom Translation Files
 *
 * https://github.com/michaeluno/custom-translation-files
 * Copyright (c) 2018 Michael Uno
 *
 */

/**
 * Sets custom translation files.
 *
 * @since       0.0.1
 */
class CustomTranslationFiles_Setter {

    private $___sTextDomain = '';
    private $___sLocale = '';
    private $___sMOFilePath = '';

    public function __construct( $sTextDomain, $sLocale, $sMOFilePath ) {

        $this->___sTextDomain = $sTextDomain;
        $this->___sLocale     = $sLocale;
        $this->___sMOFilePath = $sMOFilePath;

        add_filter( 'load_textdomain_mofile', array( $this, 'replyToModifyTranslationFile' ), 10, 2 );

    }

    public function replyToModifyTranslationFile( $sMOFilePath, $sTextDomain ) {

         if ( $sTextDomain !== $this->___sTextDomain ) {
             return $sMOFilePath;
         }

         $_sLocale = apply_filters( 'plugin_locale', is_admin() ? get_user_locale() : get_locale(), $sTextDomain );
         if ( $_sLocale !== $this->___sLocale ) {
             return $sMOFilePath;
         }
         return $this->___sMOFilePath;

     }

}