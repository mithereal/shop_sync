<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_FacetType.php';

class SellerDashboardAlertSeverityCodeType extends EbatNs_FacetType
{
	const CodeType_Informational = 'Informational';
	const CodeType_Warning = 'Warning';
	const CodeType_StrongWarning = 'StrongWarning';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('SellerDashboardAlertSeverityCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_SellerDashboardAlertSeverityCodeType = new SellerDashboardAlertSeverityCodeType();
?>