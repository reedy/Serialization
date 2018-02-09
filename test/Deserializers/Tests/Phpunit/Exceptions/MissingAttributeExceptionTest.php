<?php

namespace Deserializers\Tests\Phpunit\Exceptions;

use Deserializers\Exceptions\MissingAttributeException;
use Exception;
use PHPUnit_Framework_TestCase;

/**
 * @covers Deserializers\Exceptions\MissingAttributeException
 *
 * @license GPL-2.0-or-later
 * @author Jeroen De Dauw < jeroendedauw@gmail.com >
 * @author Thiemo Kreuz
 */
class MissingAttributeExceptionTest extends PHPUnit_Framework_TestCase {

	public function testConstructorWithOnlyRequiredArguments() {
		$exception = new MissingAttributeException( 'attribute' );

		$this->assertSame( 'attribute', $exception->getAttributeName() );
		$this->assertSame( 'Attribute "attribute" is missing', $exception->getMessage() );
		$this->assertNull( $exception->getPrevious() );
	}

	public function testConstructorWithAllArguments() {
		$previous = new Exception( 'previous' );
		$exception = new MissingAttributeException( 'attribute', 'customMessage', $previous );

		$this->assertSame( 'attribute', $exception->getAttributeName() );
		$this->assertSame( 'customMessage', $exception->getMessage() );
		$this->assertSame( $previous, $exception->getPrevious() );
	}

}
