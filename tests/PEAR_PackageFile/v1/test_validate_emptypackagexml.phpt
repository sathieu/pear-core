--TEST--
PEAR_PackageFile_v1->validate() test (valid xml, empty package.xml)
--SKIPIF--
<?php
if (!getenv('PHP_PEAR_RUNTESTS')) {
    echo 'skip';
}
if (!function_exists('token_get_all')) {
    echo 'skip';
}
?>
--FILE--
<?php
require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'setup.php.inc';

$php5 = version_compare(phpversion(), '5.0.0', '>=');
$pf = &$parser->parse('<?xml version="1.0" encoding="ISO-8859-1" ?>' .
    "\n<package version=\"1.0\"></package>", 'package.xml');

$ret = $pf->validate(PEAR_VALIDATE_NORMAL);
$phpunit->assertErrors(array(
    array('package' => 'PEAR_PackageFile_v1',
        'message' => 'Missing Package Name'),
    array('package' => 'PEAR_PackageFile_v1',
        'message' => 'No summary found'),
    array('package' => 'PEAR_PackageFile_v1',
        'message' => 'Missing description'),
    array('package' => 'PEAR_PackageFile_v1',
        'message' => 'Missing license'),
    array('package' => 'PEAR_PackageFile_v1',
        'message' => 'No release version found'),
    array('package' => 'PEAR_PackageFile_v1',
        'message' => 'No release state found'),
    array('package' => 'PEAR_PackageFile_v1',
        'message' => 'No release date found'),
    array('package' => 'PEAR_PackageFile_v1',
        'message' => 'No release notes found'),
    array('package' => 'PEAR_PackageFile_v1',
        'message' => 'No maintainers found, at least one must be defined'),
    array('package' => 'PEAR_PackageFile_v1',
        'message' => 'No files in <filelist> section of package.xml'),
        ), 'error message');
$phpunit->assertNotTrue($ret, 'return');

echo 'tests done';
?>
--CLEAN--
<?php
require_once dirname(__FILE__) . '/teardown.php.inc';
?>
--EXPECT--
tests done
