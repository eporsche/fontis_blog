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
 * @method int getCommentId()
 * @method Fontis_Blog_Model_Comment setCommentId(int $value)
 * @method int getPostId()
 * @method Fontis_Blog_Model_Comment setPostId(int $value)
 * @method string getComment()
 * @method Fontis_Blog_Model_Comment setComment(string $value)
 * @method int getStatus()
 * @method Fontis_Blog_Model_Comment setStatus(int $value)
 * @method string getCreatedTime()
 * @method Fontis_Blog_Model_Comment setCreatedTime(string $value)
 * @method string getUser()
 * @method Fontis_Blog_Model_Comment setUser(string $value)
 * @method string getEmail()
 * @method Fontis_Blog_Model_Comment setEmail(string $value)
 * @method int getInReplyTo()
 * @method Fontis_Blog_Model_Comment setInReplyTo(int $value)
 */
class Fontis_Blog_Model_Comment extends Mage_Core_Model_Abstract
{
    public function _construct()
    {
        $this->_init('blog/comment');
    }
}
