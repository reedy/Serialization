<?php

namespace Deserializers;

use Deserializers\Exceptions\DeserializationException;

/**
 * @since 1.0
 *
 * @file
 * @ingroup Serialization
 *
 * @licence GNU GPL v2+
 * @author Jeroen De Dauw < jeroendedauw@gmail.com >
 */
interface Deserializer {

	/**
	 * @since 1.0
	 *
	 * @param mixed $serialization
	 *
	 * @return object
	 * @throws DeserializationException
	 */
	public function deserialize( $serialization );

	/**
	 * Returns if the deserializer can deserialzie the provided object.
	 *
	 * Note: deserializers are expected to do checks to verify the provided
	 * object is of a type they can deserialize. No full deserialization is
	 * attempted. Thus when providing invalid data structures, it is possible
	 * this method returns true even though deserialization will fail.
	 *
	 * @since 1.0
	 *
	 * @param mixed $serialization
	 *
	 * @return boolean
	 */
	public function canDeserialize( $serialization );

}
