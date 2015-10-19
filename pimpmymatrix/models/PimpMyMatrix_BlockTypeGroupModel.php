<?php
namespace Craft;

/**
 * Pimp My Matrix by Supercool
 *
 * @package   PimpMyMatrix
 * @author    Josh Angell
 * @copyright Copyright (c) 2014, Supercool Ltd
 * @link      http://www.supercooldesign.co.uk
 */

class PimpMyMatrix_BlockTypeGroupModel extends BaseModel
{

	// Public Methods
	// =========================================================================

	public function __toString()
	{
		return Craft::t($this->getBlockType()->name);
	}

	public function getBlockType()
	{
		if ( $this->matrixBlockType )
		{
			return $this->matrixBlockType;
		}
		else
		{
			return craft()->matrix->getBlockTypeById($this->matrixBlockTypeId);
		}
	}

	// Protected Methods
	// =========================================================================

	/**
	 * Defines this model's attributes.
	 *
	 * @return array
	 */
	protected function defineAttributes()
	{
		return array(
			'id'                => AttributeType::Number,
			'fieldId'           => AttributeType::Number,
			'fieldHandle'       => AttributeType::String,
			'matrixBlockTypeId' => AttributeType::Number,
			'matrixBlockType'   => array(AttributeType::Mixed, 'default' => false),
			'tabName'           => AttributeType::Name,
			'context'           => AttributeType::String,
		);
	}

}
