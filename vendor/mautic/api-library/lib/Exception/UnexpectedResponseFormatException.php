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
 * Exception representing an unexpected HTTP response
 */
class UnexpectedResponseFormatException extends AbstractApiException
{
    /**
     * {@inheritdoc}
     */
    const DEFAULT_MESSAGE = 'The response returned is in an unexpected format.';
}
