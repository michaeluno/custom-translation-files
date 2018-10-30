<?php
/**
 * Created by PhpStorm.
 * User: Internet
 * Date: 10/31/2018
 * Time: 2:08 AM
 */

class CustomTranslationFiles_Loader_Main {

    /**
     * Performs necessary set-ups.
     */
    public function __construct() {
        $_oOption = CustomTranslationFiles_Option::getInstance();
        $_aItems  = $_oOption->get( array( 'items' ), array() );
        foreach( $_aItems as $_aItem ) {
            if ( ! $_aItem[ 'status' ] ) {
                continue;
            }
            new CustomTranslationFiles_Setter(
                $_aItem[ 'text_domain' ],
                $_aItem[ 'locale' ],
                $_aItem[ 'mo_file_path' ]
            );
        }
    }

}