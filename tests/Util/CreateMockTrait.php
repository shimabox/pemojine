<?php

namespace SMB\Pemojine\Tests\Util;

/**
 * 
 */
trait CreateMockTrait
{
    /**
     * 
     * @param array $methods
     * @return \PHPUnit_Framework_MockObject_MockObject Dispatcher's mock.
     */
    private function create_mock_for_dispatcher(array $methods=[
        'addListener', 
        'dispatch'
    ])
    {
        return $this->getMockBuilder('\SMB\Pemojine\Dispatcher\Dispatchable')
                    ->setMethods($methods)
                    ->getMock();
    }

    /**
     * 
     * @param array $methods
     * @return \PHPUnit_Framework_MockObject_MockObject Outputter's mock.
     */
    private function create_mock_for_outputter(array $methods=[
        'output', 
        'outputHtml', 
        'outputByUnicode', 
        'outputHtmlByUnicode', 
        'getUnicode', 
        'getUnicodeWithRemovedBlank',
        'getUtf8String',
        'getUtf8StringWithRemovedBlank',
    ])
    {
        return $this->getMockBuilder('\SMB\Pemojine\Outputter\Outputtable')
                    ->setMethods($methods)
                    ->getMock();
    }
}