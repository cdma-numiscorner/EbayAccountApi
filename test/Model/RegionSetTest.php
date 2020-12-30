<?php
/**
 * RegionSetTest
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  OpenAPI\EbayAccountClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Account API
 *
 * The <b>Account API</b> gives sellers the ability to configure their eBay seller accounts, including the seller's policies (the Fulfillment Policy, Payment Policy, and Return Policy), opt in and out of eBay seller programs, configure sales tax tables, and get account information.  <br><br>For details on the availability of the methods in this API, see <a href=\"/api-docs/sell/account/overview.html#requirements\">Account API requirements and restrictions</a>.
 *
 * The version of the OpenAPI document: v1.6.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Please update the test case below to test the model.
 */

namespace OpenAPI\EbayAccountClient\Test\Model;

use PHPUnit\Framework\TestCase;

/**
 * RegionSetTest Class Doc Comment
 *
 * @category    Class
 * @description This complex type contains the regionIncluded and regionExcluded fields, which indicate the areas to where the seller does and doesn&#39;t ship. Normally a seller ships to as many areas as possible using both DOMESTIC and INTERNATIONAL shipping options, and they don&#39;t have a need to exclude any regions from their ship-to locations. Here, there&#39;s no reason to set regionExcluded fields. However, it makes sense to set the regionExcluded field when a seller wants to exclude a small area that&#39;s within a larger area they service. For example, suppose a seller indicates they ship &#39;Worldwide&#39;, but for some reason must exclude a specific country, or world region. Note: Configuring the shipToLocations is tricky because the regionIncluded and regionExcluded fields are valid in different parts of the schema and their allowable settings vary upon the context. For details on setting these fields, see .
 * @package     OpenAPI\EbayAccountClient
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class RegionSetTest extends TestCase
{

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass(): void
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown(): void
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass(): void
    {
    }

    /**
     * Test "RegionSet"
     */
    public function testRegionSet()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "region_excluded"
     */
    public function testPropertyRegionExcluded()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "region_included"
     */
    public function testPropertyRegionIncluded()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }
}
