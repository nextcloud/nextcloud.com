<?php
/**
 * @package     Mautic
 * @copyright   2014 Mautic, NP. All rights reserved.
 * @author      Mautic
 * @link        http://mautic.org
 * @license     MIT http://opensource.org/licenses/MIT
 */
/*
|--------------------------------------------------------------------------
| Exception Refactor Tests
|--------------------------------------------------------------------------
|
| These test are simple tests to ensure that the required behaviour is
| still functioning after being refactored. Instead of duplicating
| identical functionality in each Exception class an abstract class
| is used that utilizes late binding behaviour to display the correct
| default error message. Note: this also retains functionality to
| allow for overiding the default messages.
|
| TODO: Add actual Exception tests (using @exception)
|
*/

namespace Mautic\Tests\Api;

use Mautic\Exception\ContextNotFoundException;
use Mautic\Exception\ActionNotSupportedException;
use Mautic\Exception\RequiredParameterMissingException;
use Mautic\Exception\UnexpectedResponseFormatException;
use Mautic\Exception\IncorrectParametersReturnedException;

class ExceptionsTest extends MauticApiTestCase
{
    const CUSTOM_ERROR_MESSAGE = 'This is a Custom Error Exception';

    public function testContextNotFoundException() {
        $expected = 'Context not found.';
        $exception = new ContextNotFoundException();
        $this->assertEquals($expected, $exception->getMessage(), 'This should return "'.$expected.'"' );
        $this->assertEquals(500, $exception->getCode());
    }

    public function testContextNotFoundExceptionCustomMessage() {
        $exception = new ContextNotFoundException(self::CUSTOM_ERROR_MESSAGE);
        $this->assertEquals(self::CUSTOM_ERROR_MESSAGE, $exception->getMessage(), 'This should return "'.self::CUSTOM_ERROR_MESSAGE.'"' );
        $this->assertEquals(500, $exception->getCode());
    }

    public function testActionNotSupportedException() {
        $expected = 'Action is not supported at this time.';
        $exception = new ActionNotSupportedException();
        $this->assertEquals($expected, $exception->getMessage(), 'This should return "'.$expected.'"' );
        $this->assertEquals(500, $exception->getCode());
    }

    public function testActionNotSupportedExceptionCustomMessage() {
        $exception = new ActionNotSupportedException(self::CUSTOM_ERROR_MESSAGE);
        $this->assertEquals(self::CUSTOM_ERROR_MESSAGE, $exception->getMessage(), 'This should return "'.self::CUSTOM_ERROR_MESSAGE.'"' );
        $this->assertEquals(500, $exception->getCode());
    }

    public function testUnexpectedResponseFormatException() {
        $expected = 'The response returned is in an unexpected format.';
        $exception = new UnexpectedResponseFormatException();
        $this->assertEquals($expected, $exception->getMessage(), 'This should return "'.$expected.'"' );
        $this->assertEquals(500, $exception->getCode());
    }

    public function testUnexpectedResponseFormatExceptionCustomMessage() {
        $exception = new UnexpectedResponseFormatException(self::CUSTOM_ERROR_MESSAGE);
        $this->assertEquals(self::CUSTOM_ERROR_MESSAGE, $exception->getMessage(), 'This should return "'.self::CUSTOM_ERROR_MESSAGE.'"' );
        $this->assertEquals(500, $exception->getCode());
    }

    public function testIncorrectParametersReturnedException() {
        $expected = 'Incorrect parameters returned.';
        $exception = new IncorrectParametersReturnedException();
        $this->assertEquals($expected, $exception->getMessage(), 'This should return "'.$expected.'"' );
        $this->assertEquals(500, $exception->getCode());
    }

    public function testIncorrectParametersReturnedExceptionCustomMessage() {
        $exception = new IncorrectParametersReturnedException(self::CUSTOM_ERROR_MESSAGE);
        $this->assertEquals(self::CUSTOM_ERROR_MESSAGE, $exception->getMessage(), 'This should return "'.self::CUSTOM_ERROR_MESSAGE.'"' );
        $this->assertEquals(500, $exception->getCode());
    }

    public function testRequiredParameterMissingException() {
        $expected = 'Required Parameter is missing.';
        $exception = new RequiredParameterMissingException();
        $this->assertEquals($expected, $exception->getMessage(), 'This should return "'.$expected.'"' );
        $this->assertEquals(500, $exception->getCode());
    }

    public function testRequiredParameterMissingExceptionCustomMessage() {
        $exception = new RequiredParameterMissingException(self::CUSTOM_ERROR_MESSAGE);
        $this->assertEquals(self::CUSTOM_ERROR_MESSAGE, $exception->getMessage(), 'This should return "'.self::CUSTOM_ERROR_MESSAGE.'"' );
        $this->assertEquals(500, $exception->getCode());
    }

    public function testSearchCommands() {
        // overwrite this inheritted method with no content
    }

}
