<?php

# encode the xml config the opnsense way
# see: https://github.com/Rosa-Luxemburgstiftung-Berlin/ansible-opnsense/issues/113
# inspired by src/opnsense/mvc/app/library/OPNsense/Core/Config.php

if ($argc != 2) {
    die("missing xml file as arg!\n");
}

$XMLfile = $argv[1];
$fp = fopen($XMLfile, "r");
$xml = trim(stream_get_contents($fp));
$simplexml = simplexml_load_string($xml);
fclose($fp);

$dom = new DOMDocument('1.0');
$root = $dom->createElement('opnsense');
$dom->appendChild($root);

foreach ($simplexml as $node) {
    $domNode = dom_import_simplexml($node);
    $domNode = $root->ownerDocument->importNode($domNode, true);
    $root->appendChild($domNode);
}

$dom->formatOutput = true;
$dom->preserveWhiteSpace = false;

$dom->loadXML($dom->saveXML());

$fp = fopen($XMLfile, "w") or die("Unable to open file!");
fwrite($fp, $dom->saveXML());
fclose($fp);

?>
