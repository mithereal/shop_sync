<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_FacetType.php';

class CancelStatusCodeType extends EbatNs_FacetType
{
	const CodeType_Invalid = 'Invalid';
	const CodeType_NotApplicable = 'NotApplicable';
	const CodeType_CancelRequested = 'CancelRequested';
	const CodeType_CancelPending = 'CancelPending';
	const CodeType_CancelRejected = 'CancelRejected';
	const CodeType_CancelClosedNoRefund = 'CancelClosedNoRefund';
	const CodeType_CancelClosedWithRefund = 'CancelClosedWithRefund';
	const CodeType_CancelClosedUnknownRefund = 'CancelClosedUnknownRefund';
	const CodeType_CancelClosedForCommitment = 'CancelClosedForCommitment';
	const CodeType_CancelComplete = 'CancelComplete';
	const CodeType_CancelFailed = 'CancelFailed';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('CancelStatusCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_CancelStatusCodeType = new CancelStatusCodeType();
?>