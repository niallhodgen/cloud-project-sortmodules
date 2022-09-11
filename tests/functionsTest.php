<?php

require_once 'src/functions.inc.php';

use function App\getSortedModules;

class functionsTest extends \PHPUnit\Framework\TestCase
{

    protected $testArray;

    /**
     * Set up and tear down testing variables before and after each test
     */
    protected function setUp(): void
    {
        $this->testArray = array(
            "Programming" => 54,
            "Cloud Computing" => 85,
            "Computing Foundations" => 64,
            "Databases" => 64,
            "Web Development" => 64,
            "Software Engineering" => 64,
            "Data Analysis" => 95,
            "User Experience" => 85,
        );
    }

    public function testGetSortedModules()
    {

        $expected = "Data Analysis = 95\\r\\nCloud Computing = 85\\r\\nUser Experience = 85\\r\\nComputing Foundations = 64\\r\\nDatabases = 64\\r\\nWeb Development = 64\\r\\nSoftware Engineering = 64\\r\\nProgramming = 54";
        $result = App\getSortedModules($this->testArray);
        // Create 2d array to replicate returned value of function

        // Ensure order is correct, i.e. modules have been sorted in descending order
        $this->assertSame($expected, $result);
    }

    public function testNullGetSortedModules()
    {

        $expected = "Data Analysis = 95\\r\\nCloud Computing = 85\\r\\nUser Experience = 85\\r\\nComputing Foundations = 64\\r\\nDatabases = 64\\r\\nWeb Development = 64\\r\\nSoftware Engineering = 64\\r\\nProgramming = 54";
        $result = App\getSortedModules($this->testArray);
        // Create 2d array to replicate returned value of function

        // Ensure order is correct, i.e. modules have been sorted in descending order
        $this->assertNotNull($expected, $result);
    }
}
