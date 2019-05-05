<?php
declare(strict_types=1);

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalconphp.com>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

namespace Phalcon\Test\Unit\Storage\Adapter\Stream;

use Exception;
use Phalcon\Storage\Adapter\Stream;
use Phalcon\Storage\SerializerFactory;
use UnitTester;
use function outputDir;

/**
 * Class DeleteCest
 */
class DeleteCest
{
    /**
     * Tests Phalcon\Storage\Adapter\Stream :: delete()
     *
     * @param UnitTester $I
     *
     * @throws Exception
     * @since  2019-04-24
     *
     * @author Phalcon Team <team@phalconphp.com>
     */
    public function storageAdapterStreamDelete(UnitTester $I)
    {
        $I->wantToTest('Storage\Adapter\Stream - delete()');
        $factory = new SerializerFactory();
        $adapter = new Stream($factory, ['cacheDir' => outputDir()]);

        $key = 'cache-data';
        $adapter->set($key, 'test');
        $actual = $adapter->has($key);
        $I->assertTrue($actual);

        $actual = $adapter->delete($key);
        $I->assertTrue($actual);

        $actual = $adapter->has($key);
        $I->assertFalse($actual);
    }

    /**
     * Tests Phalcon\Storage\Adapter\Stream :: delete() - twice
     *
     * @param UnitTester $I
     *
     * @throws Exception
     * @since  2019-04-24
     *
     * @author Phalcon Team <team@phalconphp.com>
     */
    public function storageAdapterStreamDeleteTwice(UnitTester $I)
    {
        $I->wantToTest('Storage\Adapter\Stream - delete() - twice');
        $factory = new SerializerFactory();
        $adapter = new Stream($factory, ['cacheDir' => outputDir()]);

        $key = 'cache-data';
        $adapter->set($key, 'test');
        $actual = $adapter->has($key);
        $I->assertTrue($actual);

        $actual = $adapter->delete($key);
        $I->assertTrue($actual);

        $actual = $adapter->delete($key);
        $I->assertFalse($actual);
    }

    /**
     * Tests Phalcon\Storage\Adapter\Stream :: delete() - unknown
     *
     * @param UnitTester $I
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2019-04-24
     */
    public function storageAdapterStreamDeleteUnknown(UnitTester $I)
    {
        $I->wantToTest('Storage\Adapter\Stream - delete() - unknown');
        $factory = new SerializerFactory();
        $adapter = new Stream($factory, ['cacheDir' => outputDir()]);

        $key    = 'cache-data';
        $actual = $adapter->delete($key);
        $I->assertFalse($actual);
    }
}