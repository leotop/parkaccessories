<?php
ini_set("memory_limit","256M");

	$export_xls_all_details ="<html><head>";
	$export_xls_all_details .="<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>";
	$export_xls_all_details .="</head>";
	$export_xls_all_details .="<body>";				
	$export_xls_all_details .="<table border='1'>";
	$export_xls_all_details .="<tr>";
	$export_xls_all_details .= "<td align='left' style='background-color:#EFEFEF; font-weight:bold;'>".$this->language->get('column_order_order_id')."</td>";
	$export_xls_all_details .= "<td align='left' style='background-color:#EFEFEF; font-weight:bold;'>".$this->language->get('column_order_date_added')."</td>";
	$export_xls_all_details .= "<td align='left' style='background-color:#EFEFEF; font-weight:bold;'>".$this->language->get('column_order_inv_no')."</td>";
	isset($_POST['cop1001']) ? $export_xls_all_details .= "<td align='left' style='background-color:#EFEFEF; font-weight:bold;'>".$this->language->get('column_order_customer')."</td>" : '';
	isset($_POST['cop1002']) ? $export_xls_all_details .= "<td align='left' style='background-color:#EFEFEF; font-weight:bold;'>".$this->language->get('column_order_email')."</td>" : '';	
	isset($_POST['cop1003']) ? $export_xls_all_details .= "<td align='left' style='background-color:#EFEFEF; font-weight:bold;'>".$this->language->get('column_order_customer_group')."</td>" : '';	
	isset($_POST['cop1004']) ? $export_xls_all_details .= "<td align='left' style='background-color:#EFEFEF; font-weight:bold;'>".$this->language->get('column_prod_id')."</td>" : '';
	isset($_POST['cop1005']) ? $export_xls_all_details .= "<td align='left' style='background-color:#EFEFEF; font-weight:bold;'>".$this->language->get('column_prod_sku')."</td>" : '';
	isset($_POST['cop1006']) ? $export_xls_all_details .= "<td align='left' style='background-color:#EFEFEF; font-weight:bold;'>".$this->language->get('column_prod_model')."</td>" : '';
	isset($_POST['cop1007']) ? $export_xls_all_details .= "<td align='left' style='background-color:#EFEFEF; font-weight:bold;'>".$this->language->get('column_prod_name')."</td>" : '';
	isset($_POST['cop1008']) ? $export_xls_all_details .= "<td align='left' style='background-color:#EFEFEF; font-weight:bold;'>".$this->language->get('column_prod_option')."</td>" : '';
	isset($_POST['cop1009']) ? $export_xls_all_details .= "<td align='left' style='background-color:#EFEFEF; font-weight:bold;'>".$this->language->get('column_prod_attributes')."</td>" : '';
	isset($_POST['cop1010']) ? $export_xls_all_details .= "<td align='left' style='background-color:#EFEFEF; font-weight:bold;'>".$this->language->get('column_prod_manu')."</td>" : '';
	isset($_POST['cop1011']) ? $export_xls_all_details .= "<td align='left' style='background-color:#EFEFEF; font-weight:bold;'>".$this->language->get('column_prod_category')."</td>" : '';	
	isset($_POST['cop1012']) ? $export_xls_all_details .= "<td align='right' style='background-color:#EFEFEF; font-weight:bold;'>".$this->language->get('column_prod_currency')."</td>" : '';
	isset($_POST['cop1013']) ? $export_xls_all_details .= "<td align='right' style='background-color:#EFEFEF; font-weight:bold;'>".$this->language->get('column_prod_price')."</td>" : '';
	isset($_POST['cop1014']) ? $export_xls_all_details .= "<td align='right' style='background-color:#EFEFEF; font-weight:bold;'>".$this->language->get('column_prod_quantity')."</td>" : '';
	isset($_POST['cop1015']) ? $export_xls_all_details .= "<td align='right' style='background-color:#EFEFEF; font-weight:bold;'>".$this->language->get('column_prod_tax')."</td>" : '';
	isset($_POST['cop1016']) ? $export_xls_all_details .= "<td align='right' style='background-color:#EFEFEF; font-weight:bold;'>".$this->language->get('column_prod_total')."</td>" : '';	
	isset($_POST['cop1017']) ? $export_xls_all_details .= "<td align='right' style='background-color:#EFEFEF; font-weight:bold;'>".$this->language->get('column_prod_costs')."</td>" : '';
	isset($_POST['cop1018']) ? $export_xls_all_details .= "<td align='right' style='background-color:#EFEFEF; font-weight:bold;'>".$this->language->get('column_prod_profit')."</td>" : '';
	isset($_POST['cop1019']) ? $export_xls_all_details .= "<td align='right' style='background-color:#EFEFEF; font-weight:bold;'>".$this->language->get('column_prod_profit')." [%]</td>" : '';	
	isset($_POST['cop1020']) ? $export_xls_all_details .= "<td align='right' style='background-color:#EFEFEF; font-weight:bold;'>".$this->language->get('column_order_sub_total')."</td>" : '';
	isset($_POST['cop1023']) ? $export_xls_all_details .= "<td align='right' style='background-color:#EFEFEF; font-weight:bold;'>".$this->language->get('column_order_shipping')."</td>" : '';
	isset($_POST['cop1027']) ? $export_xls_all_details .= "<td align='right' style='background-color:#EFEFEF; font-weight:bold;'>".$this->language->get('column_order_tax')."</td>" : '';		
	isset($_POST['cop1031']) ? $export_xls_all_details .= "<td align='right' style='background-color:#EFEFEF; font-weight:bold;'>".$this->language->get('column_order_value')."</td>" : '';
	isset($_POST['cop1032']) ? $export_xls_all_details .= "<td align='right' style='background-color:#EFEFEF; font-weight:bold;'>".$this->language->get('column_order_sales')."</td>" : '';
	isset($_POST['cop1037']) ? $export_xls_all_details .= "<td align='right' style='background-color:#EFEFEF; font-weight:bold;'>".$this->language->get('column_order_costs')."</td>" : '';
	isset($_POST['cop1038']) ? $export_xls_all_details .= "<td align='right' style='background-color:#EFEFEF; font-weight:bold;'>".$this->language->get('column_order_profit')."</td>" : '';
	isset($_POST['cop1039']) ? $export_xls_all_details .= "<td align='right' style='background-color:#EFEFEF; font-weight:bold;'>".$this->language->get('column_order_profit')." [%]</td>" : '';	
	isset($_POST['cop1040']) ? $export_xls_all_details .= "<td align='left' style='background-color:#EFEFEF; font-weight:bold;'>".$this->language->get('column_order_shipping_method')."</td>" : '';
	isset($_POST['cop1041']) ? $export_xls_all_details .= "<td align='left' style='background-color:#EFEFEF; font-weight:bold;'>".$this->language->get('column_order_payment_method')."</td>" : '';
	isset($_POST['cop1042']) ? $export_xls_all_details .= "<td align='left' style='background-color:#EFEFEF; font-weight:bold;'>".$this->language->get('column_order_status')."</td>" : '';
	isset($_POST['cop1043']) ? $export_xls_all_details .= "<td align='left' style='background-color:#EFEFEF; font-weight:bold;'>".$this->language->get('column_order_store')."</td>" : '';
	isset($_POST['cop1044']) ? $export_xls_all_details .= "<td align='left' style='background-color:#EFEFEF; font-weight:bold;'>".$this->language->get('column_customer_cust_id')."</td>" : '';	
	isset($_POST['cop1045']) ? $export_xls_all_details .= "<td align='left' style='background-color:#EFEFEF; font-weight:bold;'>".strip_tags($this->language->get('column_billing_name'))."</td>" : '';
	isset($_POST['cop1046']) ? $export_xls_all_details .= "<td align='left' style='background-color:#EFEFEF; font-weight:bold;'>".strip_tags($this->language->get('column_billing_company'))."</td>" : '';				
	isset($_POST['cop1047']) ? $export_xls_all_details .= "<td align='left' style='background-color:#EFEFEF; font-weight:bold;'>".strip_tags($this->language->get('column_billing_address_1'))."</td>" : '';
	isset($_POST['cop1048']) ? $export_xls_all_details .= "<td align='left' style='background-color:#EFEFEF; font-weight:bold;'>".strip_tags($this->language->get('column_billing_address_2'))."</td>" : '';
	isset($_POST['cop1049']) ? $export_xls_all_details .= "<td align='left' style='background-color:#EFEFEF; font-weight:bold;'>".strip_tags($this->language->get('column_billing_city'))."</td>" : '';
	isset($_POST['cop1050']) ? $export_xls_all_details .= "<td align='left' style='background-color:#EFEFEF; font-weight:bold;'>".strip_tags($this->language->get('column_billing_zone'))."</td>" : '';
	isset($_POST['cop1051']) ? $export_xls_all_details .= "<td align='left' style='background-color:#EFEFEF; font-weight:bold;'>".strip_tags($this->language->get('column_billing_postcode'))."</td>" : '';
	isset($_POST['cop1052']) ? $export_xls_all_details .= "<td align='left' style='background-color:#EFEFEF; font-weight:bold;'>".strip_tags($this->language->get('column_billing_country'))."</td>" : '';
	isset($_POST['cop1053']) ? $export_xls_all_details .= "<td align='left' style='background-color:#EFEFEF; font-weight:bold;'>".$this->language->get('column_customer_telephone')."</td>" : '';
	isset($_POST['cop1054']) ? $export_xls_all_details .= "<td align='left' style='background-color:#EFEFEF; font-weight:bold;'>".strip_tags($this->language->get('column_shipping_name'))."</td>" : '';
	isset($_POST['cop1055']) ? $export_xls_all_details .= "<td align='left' style='background-color:#EFEFEF; font-weight:bold;'>".strip_tags($this->language->get('column_shipping_company'))."</td>" : '';
	isset($_POST['cop1056']) ? $export_xls_all_details .= "<td align='left' style='background-color:#EFEFEF; font-weight:bold;'>".strip_tags($this->language->get('column_shipping_address_1'))."</td>" : '';
	isset($_POST['cop1057']) ? $export_xls_all_details .= "<td align='left' style='background-color:#EFEFEF; font-weight:bold;'>".strip_tags($this->language->get('column_shipping_address_2'))."</td>" : '';
	isset($_POST['cop1058']) ? $export_xls_all_details .= "<td align='left' style='background-color:#EFEFEF; font-weight:bold;'>".strip_tags($this->language->get('column_shipping_city'))."</td>" : '';
	isset($_POST['cop1059']) ? $export_xls_all_details .= "<td align='left' style='background-color:#EFEFEF; font-weight:bold;'>".strip_tags($this->language->get('column_shipping_zone'))."</td>" : '';
	isset($_POST['cop1060']) ? $export_xls_all_details .= "<td align='left' style='background-color:#EFEFEF; font-weight:bold;'>".strip_tags($this->language->get('column_shipping_postcode'))."</td>" : '';
	isset($_POST['cop1061']) ? $export_xls_all_details .= "<td align='left' style='background-color:#EFEFEF; font-weight:bold;'>".strip_tags($this->language->get('column_shipping_country'))."</td>" : '';
	$export_xls_all_details .="</tr>";
	foreach ($results as $result) {	
	if ($result['product_pidc']) {
	$export_xls_all_details .="<tr>";
	$export_xls_all_details .= "<td align='left' valign='top' style='mso-ignore: colspan'>".$result['order_ord_idc']."</td>";
	$export_xls_all_details .= "<td align='left' valign='top' style='mso-ignore: colspan'>".$result['order_order_date']."</td>";
	$export_xls_all_details .= "<td align='left' valign='top' style='mso-ignore: colspan'>".$result['order_inv_no']."</td>";
	isset($_POST['cop1001']) ? $export_xls_all_details .= "<td align='left' valign='top' style='mso-ignore: colspan'>".$result['order_name']."</td>" : '';
	isset($_POST['cop1002']) ? $export_xls_all_details .= "<td align='left' valign='top' style='mso-ignore: colspan'>".$result['order_email']."</td>" : '';	
	isset($_POST['cop1003']) ? $export_xls_all_details .= "<td align='left' valign='top' style='mso-ignore: colspan'>".$result['order_group']."</td>" : '';	
	isset($_POST['cop1004']) ? $export_xls_all_details .= "<td align='left' valign='top' style='mso-ignore: colspan'>".$result['product_pidc']."</td>" : '';
	isset($_POST['cop1005']) ? $export_xls_all_details .= "<td align='left' valign='top' style='mso-ignore: colspan'>".$result['product_sku']."</td>" : '';
	isset($_POST['cop1006']) ? $export_xls_all_details .= "<td align='left' valign='top' style='mso-ignore: colspan'>".$result['product_model']."</td>" : '';	
	isset($_POST['cop1007']) ? $export_xls_all_details .= "<td align='left' valign='top' style='mso-ignore: colspan'>".$result['product_name']."</td>" : '';
	isset($_POST['cop1008']) ? $export_xls_all_details .= "<td align='left' valign='top' style='mso-ignore: colspan'>".$result['product_option']."</td>" : '';
	isset($_POST['cop1009']) ? $export_xls_all_details .= "<td align='left' valign='top' style='mso-ignore: colspan'>".$result['product_attributes']."</td>" : '';
	isset($_POST['cop1010']) ? $export_xls_all_details .= "<td align='left' valign='top' style='mso-ignore: colspan'>".$result['product_manu']."</td>" : '';
	isset($_POST['cop1011']) ? $export_xls_all_details .= "<td align='left' valign='top' style='mso-ignore: colspan'>".$result['product_category']."</td>" : '';	
	isset($_POST['cop1012']) ? $export_xls_all_details .= "<td align='right' valign='top' style='mso-ignore: colspan'>".$result['product_currency']."</td>" : '';
	isset($_POST['cop1013']) ? $export_xls_all_details .= "<td align='right' valign='top' style='mso-ignore: colspan; mso-number-format:#\,\#\#0\.00'>".$result['product_price']."</td>" : '';
	isset($_POST['cop1014']) ? $export_xls_all_details .= "<td align='right' valign='top' style='mso-ignore: colspan'>".$result['product_quantity']."</td>" : '';
	isset($_POST['cop1015']) ? $export_xls_all_details .= "<td align='right' valign='top' style='mso-ignore: colspan; mso-number-format:#\,\#\#0\.00'>".$result['product_tax']."</td>" : '';		
	isset($_POST['cop1016']) ? $export_xls_all_details .= "<td align='right' valign='top' style='background-color:#DCFFB9; mso-ignore: colspan; mso-number-format:#\,\#\#0\.00'>".$result['product_total']."</td>" : '';
	isset($_POST['cop1017']) ? $export_xls_all_details .= "<td align='right' valign='top' style='background-color:#ffd7d7; mso-ignore: colspan; mso-number-format:#\,\#\#0\.00'>-".$result['product_costs']."</td>" : '';
	isset($_POST['cop1018']) ? $export_xls_all_details .= "<td align='right' valign='top' style='background-color:#c4d9ee; font-weight:bold; mso-ignore: colspan; mso-number-format:#\,\#\#0\.00'>".$result['product_profit']."</td>" : '';
	isset($_POST['cop1019']) ? $export_xls_all_details .= "<td align='right' valign='top' style='background-color:#c4d9ee; font-weight:bold; mso-ignore: colspan'>".$result['product_profit_margin_percent']."%</td>" : '';	
	isset($_POST['cop1020']) ? $export_xls_all_details .= "<td align='right' valign='top' style='mso-ignore: colspan; mso-number-format:#\,\#\#0\.00'>".number_format($result['order_sub_total'], 2, '.', ',')."</td>" : '';	
	isset($_POST['cop1023']) ? $export_xls_all_details .= "<td align='right' valign='top' style='mso-ignore: colspan; mso-number-format:#\,\#\#0\.00'>".number_format($result['order_shipping'], 2, '.', ',')."</td>" : '';
	isset($_POST['cop1027']) ? $export_xls_all_details .= "<td align='right' valign='top' style='mso-ignore: colspan; mso-number-format:#\,\#\#0\.00'>".number_format($result['order_tax'], 2, '.', ',')."</td>" : '';
	isset($_POST['cop1031']) ? $export_xls_all_details .= "<td align='right' valign='top' style='mso-ignore: colspan; mso-number-format:#\,\#\#0\.00'>".number_format($result['order_value'], 2, '.', ',')."</td>" : '';
	isset($_POST['cop1032']) ? $export_xls_all_details .= "<td align='right' valign='top' style='background-color:#DCFFB9; mso-ignore: colspan; mso-number-format:#\,\#\#0\.00'>".number_format($result['order_sales'], 2, '.', ',')."</td>" : '';
	isset($_POST['cop1037']) ? $export_xls_all_details .= "<td align='right' valign='top' style='background-color:#ffd7d7; mso-ignore: colspan; mso-number-format:#\,\#\#0\.00'>-".number_format($result['order_costs'], 2, '.', ',')."</td>" : '';
	isset($_POST['cop1038']) ? $export_xls_all_details .= "<td align='right' valign='top' style='background-color:#c4d9ee; font-weight:bold; mso-ignore: colspan; mso-number-format:#\,\#\#0\.00'>".number_format($result['order_profit'], 2, '.', ',')."</td>" : '';
	isset($_POST['cop1039']) ? $export_xls_all_details .= "<td align='right' valign='top' style='background-color:#c4d9ee; font-weight:bold; mso-ignore: colspan;'>".$result['order_profit_margin_percent']."%</td>" : '';	
	isset($_POST['cop1040']) ? $export_xls_all_details .= "<td align='left' valign='top' style='mso-ignore: colspan'>".$result['order_shipping_method']."</td>" : '';
	isset($_POST['cop1041']) ? $export_xls_all_details .= "<td align='left' valign='top' style='mso-ignore: colspan'>".strip_tags($result['order_payment_method'], '<br>')."</td>" : '';
	isset($_POST['cop1042']) ? $export_xls_all_details .= "<td align='left' valign='top' style='mso-ignore: colspan'>".$result['order_status']."</td>" : '';
	isset($_POST['cop1043']) ? $export_xls_all_details .= "<td align='left' valign='top' style='mso-ignore: colspan'>".$result['order_store']."</td>" : '';
	isset($_POST['cop1044']) ? $export_xls_all_details .= "<td align='left' valign='top' style='mso-ignore: colspan'>".$result['customer_cust_idc']."</td>" : '';	
	isset($_POST['cop1045']) ? $export_xls_all_details .= "<td align='left' valign='top' style='mso-ignore: colspan'>".$result['billing_name']."</td>" : '';
	isset($_POST['cop1046']) ? $export_xls_all_details .= "<td align='left' valign='top' style='mso-ignore: colspan'>".$result['billing_company']."</td>" : '';
	isset($_POST['cop1047']) ? $export_xls_all_details .= "<td align='left' valign='top' style='mso-ignore: colspan'>".$result['billing_address_1']."</td>" : '';
	isset($_POST['cop1048']) ? $export_xls_all_details .= "<td align='left' valign='top' style='mso-ignore: colspan'>".$result['billing_address_2']."</td>" : '';
	isset($_POST['cop1049']) ? $export_xls_all_details .= "<td align='left' valign='top' style='mso-ignore: colspan'>".$result['billing_city']."</td>" : '';
	isset($_POST['cop1050']) ? $export_xls_all_details .= "<td align='left' valign='top' style='mso-ignore: colspan'>".$result['billing_zone']."</td>" : '';
	isset($_POST['cop1051']) ? $export_xls_all_details .= "<td align='left' valign='top' style='mso-ignore: colspan'>".$result['billing_postcode']."</td>" : '';
	isset($_POST['cop1052']) ? $export_xls_all_details .= "<td align='left' valign='top' style='mso-ignore: colspan'>".$result['billing_country']."</td>" : '';
	isset($_POST['cop1053']) ? $export_xls_all_details .= "<td align='left' valign='top' style='mso-ignore: colspan'>".$result['customer_telephone']."</td>" : '';
	isset($_POST['cop1054']) ? $export_xls_all_details .= "<td align='left' valign='top' style='mso-ignore: colspan'>".$result['shipping_name']."</td>" : '';
	isset($_POST['cop1055']) ? $export_xls_all_details .= "<td align='left' valign='top' style='mso-ignore: colspan'>".$result['shipping_company']."</td>" : '';
	isset($_POST['cop1056']) ? $export_xls_all_details .= "<td align='left' valign='top' style='mso-ignore: colspan'>".$result['shipping_address_1']."</td>" : '';
	isset($_POST['cop1057']) ? $export_xls_all_details .= "<td align='left' valign='top' style='mso-ignore: colspan'>".$result['shipping_address_2']."</td>" : '';
	isset($_POST['cop1058']) ? $export_xls_all_details .= "<td align='left' valign='top' style='mso-ignore: colspan'>".$result['shipping_city']."</td>" : '';
	isset($_POST['cop1059']) ? $export_xls_all_details .= "<td align='left' valign='top' style='mso-ignore: colspan'>".$result['shipping_zone']."</td>" : '';
	isset($_POST['cop1060']) ? $export_xls_all_details .= "<td align='left' valign='top' style='mso-ignore: colspan'>".$result['shipping_postcode']."</td>" : '';
	isset($_POST['cop1061']) ? $export_xls_all_details .= "<td align='left' valign='top' style='mso-ignore: colspan'>".$result['shipping_country']."</td>" : '';
	$export_xls_all_details .="</tr>";	
	}
	}
	$export_xls_all_details .="</table>";
	$export_xls_all_details .="</body></html>";

$filename = "customer_profit_report_all_details_".date("Y-m-d",time());
header('Expires: 0');
header('Cache-control: private');
header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
header('Content-Description: File Transfer');			
header('Content-Type: application/vnd.ms-excel; charset=UTF-8; encoding=UTF-8');			
header('Content-Disposition: attachment; filename='.$filename.".xls");
header('Content-Transfer-Encoding: UTF-8');
print $export_xls_all_details;			
exit;
?>