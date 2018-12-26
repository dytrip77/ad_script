<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$config['ldap_astiostech'] = array(
    'host' => '',
    'useStartTls' => false,
    'username' => '',
    'password' => '',
    'accountDomainName'      => '',
    'baseDn' => ''
);



$config['ldap_default'] = $config['ldap_astiostech'];
