<?php
class PEAR_Installer_Role_Data extends PEAR_Installer_Role_Common
{
    var $_setup =
        array(
            'releasetypes' => array('php', 'extsrc', 'extbin'),
            'installable' => true,
            'locationconfig' => 'data_dir',
            'honorsbaseinstall' => false,
            'phpfile' => false,
            'executable' => false,
        );
    function getInfo()
    {
        return array(
            'releasetypes' => array('php', 'extsrc', 'extbin'),
            'installable' => true,
            'locationconfig' => 'data_dir',
            'honorsbaseinstall' => false,
            'phpfile' => false,
            'executable' => false,
        );
    }

    function setup(&$installer, $pkg, $atts, $file)
    {
    }
}
?>