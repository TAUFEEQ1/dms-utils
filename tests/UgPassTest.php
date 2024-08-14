<?php

use PHPUnit\Framework\TestCase;
use NitaU\DmsUtils\UgPass;

class UgPassTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        // Set the script path for the test
        UgPass::setScriptPath('python ./ugpass_utils.py');
    }

    public function testGetLastTextCoordinates()
    {
        // Path to a sample PDF file
        $pdfPath = './sample.pdf';

        // Call the method
        $result = UgPass::getLastTextCoordinates($pdfPath);

        // Ensure that the result is an array with the expected keys
        $this->assertIsArray($result);
        $this->assertArrayHasKey('last_text', $result);
        $this->assertArrayHasKey('last_x0', $result);
        $this->assertArrayHasKey('last_y1', $result);
    }
}
