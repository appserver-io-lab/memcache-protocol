<?php

/**
 * AppserverIo\Lab\MemcacheProtocol\CacheRequestInterface
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * PHP version 5
 *
 * @author    Tim Wagner <tw@appserver.io>
 * @copyright 2015 TechDivision GmbH <info@appserver.io>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/appserver-io-lab/memcache-protocol
 * @link      http://www.appserver.io
 * @link      https://github.com/memcached/memcached/blob/master/doc/protocol.txt
 */

namespace AppserverIo\Lab\MemcacheProtocol;

/**
 * This is a cache request interface that all cache request implementations
 * has to implement.
 *
 * @author    Tim Wagner <tw@appserver.io>
 * @copyright 2015 TechDivision GmbH <info@appserver.io>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/appserver-io-lab/memcache-protocol
 * @link      http://www.appserver.io
 * @link      https://github.com/memcached/memcached/blob/master/doc/protocol.txt
 */
interface CacheRequestInterface
{

    /**
     * Central method for pushing data into this request object.
     *
     * @param string $line The request line containing the request information
     *
     * @return void
     */
    public function push($line);

    /**
     * Resets all attributes to the default values.
     *
     * @return void
     */
    public function reset();

    /**
     * Returns TRUE if the request is complete, ELSE false.
     *
     * @return boolean TRUE if the request is complete, ELSE false
     */
    public function isComplete();

    /**
     * Returns the number of bytes of the data.
     *
     * @return integer The nubmer of bytes
     */
    public function getBytes();

    /**
     * Returns the data of this instance.
     *
     * @return string The instance data
     */
    public function getData();

    /**
     * Returns the expiration time for the data in seconds.
     *
     * @return integer The datas expiration time in seconds
     */
    public function getExpTime();

    /**
     * Returns the instance flags.
     *
     * @return integer The instance flags
     */
    public function getFlags();

    /**
     * Returns the key to store the data with.
     *
     * @return string The key to store the data with
     */
    public function getKey();

    /**
     * Returns the request action of this instance.
     *
     * @return string The request instance
     */
    public function getRequestAction();
}
