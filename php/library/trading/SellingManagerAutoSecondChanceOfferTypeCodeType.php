<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_FacetType.php';

class SellingManagerAutoSecondChanceOfferTypeCodeType extends EbatNs_FacetType
{
	const CodeType_BidsGreaterThanAmount = 'BidsGreaterThanAmount';
	const CodeType_BidsGreaterThanCostPlusAmount = 'BidsGreaterThanCostPlusAmount';
	const CodeType_BidsGreaterThanCostPlusPercentage = 'BidsGreaterThanCostPlusPercentage';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('SellingManagerAutoSecondChanceOfferTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_SellingManagerAutoSecondChanceOfferTypeCodeType = new SellingManagerAutoSecondChanceOfferTypeCodeType();
?>