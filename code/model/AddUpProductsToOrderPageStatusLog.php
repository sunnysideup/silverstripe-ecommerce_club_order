<?php


/**
 * OrderStatusLog_Submitted is an important class that is created when an order is submitted.
 * It is created by the order and it signifies to the OrderStep to continue to the next step.
 **/

class AddUpProductsToOrderPageStatusLog extends OrderStatusLog {

	public static $defaults = array(
		'EmailCustomer' => false,
		'EmailSent' => false,
		'InternalUseOnly' => false
	);

	/**
	*
	*@return Boolean
	**/
	public function canCreate($member = null) {
		return true;
	}

	public static $singular_name = "Club Order Detail";
		function i18n_singular_name() { return _t("AddUpProductsToOrderPageStatusLog.ClubOrderDetail", "Club Order Detail");}

	public static $plural_name = "Club Orders Details";
		function i18n_plural_name() { return _t("AddUpProductsToOrderPageStatusLog.ClubOrdersDetails", "Club Orders Details");}

	/**
	*
	*@return FieldSet
	**/
	function getCMSFields() {
		$fields = parent::getCMSFields();
		return $fields;
	}

}
