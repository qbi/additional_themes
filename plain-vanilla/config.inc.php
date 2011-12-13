<?php # $Id: config.inc.php,v 1.1 2005/03/08 11:37:18 garvinhicking Exp $

$probelang = dirname(__FILE__) . '/lang_' . $serendipity['lang'] . '.inc.php';
if (file_exists($probelang)) {
    include $probelang;
} else {
    include dirname(__FILE__) . '/lang_en.inc.php';
}

$serendipity['smarty']->assign('CONST', get_defined_constants());
?>