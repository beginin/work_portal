<?php
class Treemodel extends CI_Model {

   
function  get_xml()
{
    $srv = "astron.local";
    $srv_domain = "astron.local";
    $srv_login = "phonebook@astron.local";
    $srv_password = "Ghbdtnrfrltkf45";
    $dn = "dc=astron,dc=local";
    $filter = "(&(|(objectCategory=person)(objectClass=contact))(|(manager=*)(directReports=*)))";
    $attr = array("cn", "title", "department", "company", "userPrincipalName",
         "mobile","manager");
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
        
        
        $imp = new DOMImplementation;
        $dtd = $imp->createDocumentType('GraphXML', '', '/app/GraphXML.dtd');
        
        //$dom = new DomDocument('1.0', 'utf-8'); 
        $dom = $imp->createDocument("", "", $dtd);
        
        
        
$GraphXML = $dom->appendChild($dom->createElement('GraphXML'));

$graph = $GraphXML->appendChild($dom->createElement('graph'));
$graph->setAttribute('id','My First Graph');

for ($i = 0; $i < $result_entries['count']; $i++)
{
    $node = $graph->appendChild($dom->createElement('node'));
    $node->setAttribute('name',md5($result_entries[$i]['dn']));
    $label = $node->appendChild($dom->createElement('label',$result_entries[$i]['cn'][0]));
    //$label = $node->appendChild($dom->createElement('label',"Mihail"));
}

for ($i = 0; $i < $result_entries['count']; $i++)
{
    if(isset($result_entries[$i]['manager'][0]))
    {
    $edge = $graph->appendChild($dom->createElement('edge'));
    $edge->setAttribute('source',md5($result_entries[$i]['manager'][0]));
    $edge->setAttribute('target',md5($result_entries[$i]['dn']));
    }
}
//$label = $node->appendChild($dom->createElement('label','Label of 3 node'));
//$graph = $GraphXML->appendChild($dom->createElement('GraphXML'), 'id', 'My First Graph') );
return $dom->saveXML();
        
        //return $result_entries;
    }  
    
    
    
      
}


function get_json()
{
    $srv = "astron.local";
    $srv_domain = "astron.local";
    $srv_login = "phonebook@astron.local";
    $srv_password = "Ghbdtnrfrltkf45";
    $dn = "dc=astron,dc=local";
    $filter = "(&(|(objectCategory=person)(objectClass=contact))(|(manager=*)(directReports=*)))";
    $attr = array("cn", "title", "department", "company", "userPrincipalName",
         "mobile","manager");
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
        
        //
        //$var = 
        //unserialize(iconv("CP1251", "UTF8",serialize($result_entries) ));
        return unserialize(iconv("CP1251", "UTF-8",serialize($result_entries) ));
        //$imp = new DOMImplementation;
        //$dtd = $imp->createDocumentType('GraphXML', '', '/app/GraphXML.dtd');
        
        //$dom = new DomDocument('1.0', 'utf-8'); 
        //$dom = $imp->createDocument("", "", $dtd);
}
    
}
}
?>
