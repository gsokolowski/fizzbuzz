<?php
namespace Tests\Zend\Config;

class ConfigTest extends \Tests\TestCase
{
    /**
     * Ensure that the composer autoloader is finding the classes correctly.
     */
    public function testCanFindClasses()
    {
        $this->assertTrue(class_exists('\Zend_Config') || interface_exists('\Zend_Config'));
        $this->assertTrue(class_exists('\Zend_Config_Exception') || interface_exists('\Zend_Config_Exception'));
        $this->assertTrue(class_exists('\Zend_Config_Ini') || interface_exists('\Zend_Config_Ini'));
        $this->assertTrue(class_exists('\Zend_Config_Json') || interface_exists('\Zend_Config_Json'));
        $this->assertTrue(class_exists('\Zend_Config_Writer') || interface_exists('\Zend_Config_Writer'));
        $this->assertTrue(class_exists('\Zend_Config_Xml') || interface_exists('\Zend_Config_Xml'));
        $this->assertTrue(class_exists('\Zend_Config_Yaml') || interface_exists('\Zend_Config_Yaml'));
        $this->assertTrue(class_exists('\Zend_Config_Writer_Array') || interface_exists('\Zend_Config_Writer_Array'));
        $this->assertTrue(class_exists('\Zend_Config_Writer_FileAbstract') || interface_exists('\Zend_Config_Writer_FileAbstract'));
        $this->assertTrue(class_exists('\Zend_Config_Writer_Ini') || interface_exists('\Zend_Config_Writer_Ini'));
        $this->assertTrue(class_exists('\Zend_Config_Writer_Json') || interface_exists('\Zend_Config_Writer_Json'));
        $this->assertTrue(class_exists('\Zend_Config_Writer_Xml') || interface_exists('\Zend_Config_Writer_Xml'));
        $this->assertTrue(class_exists('\Zend_Config_Writer_Yaml') || interface_exists('\Zend_Config_Writer_Yaml'));
    }
}