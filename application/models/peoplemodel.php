<?php


class Peoplemodel extends CI_Model {

   
  
function  get_all_contact()
{
    $srv = "astron.local";
    $srv_domain = "astron.local";
    $srv_login = "phonebook@astron.local";
    $srv_password = "Ghbdtnrfrltkf45";
    $dn = "dc=astron,dc=local";
    $filter = "(objectCategory=person)";
    //$attr = array("cn", "mail", "title", "department", "company", "description", "telephonenumber", "othertelephone","title","streetaddress","mobile","userPrincipaName" );
    $attr = array("*");
    $dc = ldap_connect("astron.local");
    if (!$dc)
    die('Invalid LDAP:');
    ldap_set_option($dc, LDAP_OPT_PROTOCOL_VERSION, 3);
    ldap_set_option($dc, LDAP_OPT_REFERRALS, 0);
    
    if ($dc) {
        ldap_bind($dc, $srv_login, $srv_password);
       $result = ldap_search($dc, $dn, $filter, $attr);
        $result_entries = ldap_get_entries($dc, $result);
        ldap_unbind($dc);
        
        
        return $result_entries;
    }    
    
      
}

    
}

?>
