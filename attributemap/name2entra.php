<?php 

$attributemap = [
    /**
     * Renamed Attributes to match other 2name mappings
     */
    'uid' => 'http://schemas.microsoft.com/identity/claims/objectidentifier',
    'displayName' => 'http://schemas.microsoft.com/identity/claims/displayname',
    'givenName' => 'http://schemas.xmlsoap.org/ws/2005/05/identity/claims/givenname',
    'sn' => 'http://schemas.xmlsoap.org/ws/2005/05/identity/claims/surname',
    'emailAddress' => 'http://schemas.xmlsoap.org/ws/2005/05/identity/claims/emailaddress',
    'mail' => 'http://schemas.xmlsoap.org/ws/2005/05/identity/claims/name',
    
    /**
     * Additional/Optional Claim, using default value
     */
    'groups' => 'http://schemas.microsoft.com/ws/2008/06/identity/claims/groups',

    /**
     * Additional Attributes from Entra
     */
    'authNMethodsReferences' => 'http://schemas.microsoft.com/claims/authnmethodsreferences',
    'idp' => 'http://schemas.microsoft.com/identity/claims/identityprovider',
    'tenantId' => 'http://schemas.microsoft.com/identity/claims/tenantid',
];