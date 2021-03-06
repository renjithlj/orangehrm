<?php

/*
 * OrangeHRM Enterprise is a closed sourced comprehensive Human Resource Management (HRM) 
 * System that captures all the essential functionalities required for any enterprise. 
 * Copyright (C) 2006 OrangeHRM Inc., http://www.orangehrm.com 
 * 
 * OrangeHRM Inc is the owner of the patent, copyright, trade secrets, trademarks and any 
 * other intellectual property rights which subsist in the Licensed Materials. OrangeHRM Inc 
 * is the owner of the media / downloaded OrangeHRM Enterprise software files on which the 
 * Licensed Materials are received. Title to the Licensed Materials and media shall remain 
 * vested in OrangeHRM Inc. For the avoidance of doubt title and all intellectual property 
 * rights to any design, new software, new protocol, new interface, enhancement, update, 
 * derivative works, revised screen text or any other items that OrangeHRM Inc creates for 
 * Customer shall remain vested in OrangeHRM Inc. Any rights not expressly granted herein are 
 * reserved to OrangeHRM Inc. 
 * 
 * Please refer http://www.orangehrm.com/Files/OrangeHRM_Commercial_License.pdf for the license which includes terms and conditions on using this software. 
 *  
 */

/**
 * Description of OpenIdProviderHeaderListConfigurationFactory
 *
 * @author orangehrm
 */
class OAuthClientHeaderListConfigurationFactory extends ohrmListConfigurationFactory {

    protected function init() {

        $header1 = new ListHeader();
        $header2 = new ListHeader();
        $header3 = new ListHeader();

        $header1->populateFromArray(array(
            'name' => 'ID',
            'elementType' => 'link',
            'width' => '40%',
            'elementProperty' => array(
                'labelGetter' => 'getClientId',
                'urlPattern' => 'javascript:'),
        ));
        $header2->populateFromArray(array(
            'name' => 'Secret',
            'elementType' => 'label',
            'elementProperty' => array( 'getter' => 'getClientSecret' ),
        ));
        $header3->populateFromArray(array(
            'name' => 'Redirect URI',
            'elementType' => 'label',
            'elementProperty' => array( 'getter' => 'getRedirectUri' ),
        ));

        $this->headers = array($header1,$header2,$header3);

    }

    public function getClassName() {
        return 'OAuthClient';
    }
}
