<?php
/**
 * @package     Mautic
 * @copyright   2014 Mautic, NP. All rights reserved.
 * @author      Mautic
 * @link        http://mautic.org
 * @license     MIT http://opensource.org/licenses/MIT
 */

namespace Mautic\Exception;

/**
 * Exception representing an unsupported action
 */
class ActionNotSupportedException extends AbstractApiException
{
    /**
     * {@inheritdoc}
     */
    const DEFAULT_MESSAGE = 'Action is not supported at this time.';
}
