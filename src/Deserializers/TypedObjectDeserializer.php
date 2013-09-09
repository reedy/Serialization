<?php

namespace Deserializers;

use Deserializers\Exceptions\InvalidAttributeException;
use Deserializers\Exceptions\MissingAttributeException;
use Deserializers\Exceptions\MissingTypeException;
use Deserializers\Exceptions\UnsupportedTypeException;

/**
 * @since 1.0
 *
 * @file
 * @ingroup Serialization
 *
 * @licence GNU GPL v2+
 * @author Jeroen De Dauw < jeroendedauw@gmail.com >
 */
abstract class TypedObjectDeserializer implements Deserializer {

	protected $objectType;

	public function __construct( $objectType ) {
		$this->objectType = $objectType;
	}

	protected function assertCanDeserialize( $serialization ) {
		if ( !$this->hasObjectType( $serialization ) ) {
			throw new MissingTypeException();
		}

		if ( !$this->hasCorrectObjectType( $serialization ) ) {
			throw new UnsupportedTypeException( $serialization['objectType'] );
		}
	}

	public function isDeserializerFor( $serialization ) {
		return $this->hasObjectType( $serialization ) && $this->hasCorrectObjectType( $serialization );
	}

	private function hasCorrectObjectType( $serialization ) {
		return $serialization['objectType'] === $this->objectType;
	}

	private function hasObjectType( $serialization ) {
		return is_array( $serialization )
			&& array_key_exists( 'objectType', $serialization );
	}

	protected function requireAttributes( array $array ) {
		$requiredAttributes = func_get_args();
		array_shift( $requiredAttributes );

		foreach ( $requiredAttributes as $attribute ) {
			$this->requireAttribute( $array, $attribute );
		}
	}

	protected function requireAttribute( array $array, $attributeName ) {
		if ( !array_key_exists( $attributeName, $array ) ) {
			throw new MissingAttributeException(
				$attributeName
			);
		}
	}

	protected function assertAttributeIsArray( array $array, $attributeName ) {
		$this->assertAttributeInternalType( $array, $attributeName, 'array' );
	}

	protected function assertAttributeInternalType( array $array, $attributeName, $internalType ) {
		if ( gettype( $array[$attributeName] ) !== $internalType ) {
			throw new InvalidAttributeException(
				$attributeName,
				$array[$attributeName],
				"The internal type of attribute '$attributeName'  needs to be '$internalType'"
			);
		}
	}

}
