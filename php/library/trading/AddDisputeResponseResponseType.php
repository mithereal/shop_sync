<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'AbstractResponseType.php';

/**
  * This type is the base response of the <b>AddDisputeResponse</b> call. This type has no call-specific fields, but the applicable fields of the <b>AbstractResponseType</b> will be returned in the <b>AddDisputeResponse</b> response.
  * 
 **/

class AddDisputeResponseResponseType extends AbstractResponseType
{

	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('AddDisputeResponseResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
));
		}
		$this->_attributes = array_merge($this->_attributes,
		array(
));
	}

}
?>
