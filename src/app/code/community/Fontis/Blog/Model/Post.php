<?php
/**
 * Fontis Blog Extension
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * Parts of this software are derived from code originally developed by
 * Robert Chambers <magento@robertchambers.co.uk>
 * and released as 'Lazzymonk's Blog' 0.5.8 in 2009.
 *
 * @category   Fontis
 * @package    Fontis_Blog
 * @copyright  Copyright (c) 2013 Fontis Pty. Ltd. (http://www.fontis.com.au)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/**
 * @method int getPostId()
 * @method Fontis_Blog_Model_Post setPostId(int $value)
 * @method int getCatId()
 * @method Fontis_Blog_Model_Post setCatId(int $value)
 * @method string getTitle()
 * @method Fontis_Blog_Model_Post setTitle(string $value)
 * @method string getPostContent()
 * @method Fontis_Blog_Model_Post setPostContent(string $value)
 * @method string getSummaryContent()
 * @method Fontis_Blog_Model_Post setSummaryContent(string $value)
 * @method int getStatus()
 * @method Fontis_Blog_Model_Post setStatus(int $value)
 * @method string getCreatedTime()
 * @method Fontis_Blog_Model_Post setCreatedTime(string $value)
 * @method string getUpdateTime()
 * @method Fontis_Blog_Model_Post setUpdateTime(string $value)
 * @method string getIdentifier()
 * @method Fontis_Blog_Model_Post setIdentifier(string $value)
 * @method string getUser()
 * @method Fontis_Blog_Model_Post setUser(string $value)
 * @method string getUpdateUser()
 * @method Fontis_Blog_Model_Post setUpdateUser(string $value)
 * @method string getMetaKeywords()
 * @method Fontis_Blog_Model_Post setMetaKeywords(string $value)
 * @method string getMetaDescription()
 * @method Fontis_Blog_Model_Post setMetaDescription(string $value)
 * @method int getComments()
 * @method Fontis_Blog_Model_Post setComments(int $value)
 */
class Fontis_Blog_Model_Post extends Mage_Core_Model_Abstract
{
    protected function _construct()
    {
        $this->_init('blog/post');
    }
}
