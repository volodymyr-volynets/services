<?php

namespace Numbers\Services\Services\Model\Service\Assignment;
class Types extends \Object\Data {
	public $module_code = 'SS';
	public $title = 'S/S Service Assignment Types';
	public $column_key = 'ss_servassigntype_id';
	public $column_prefix = 'ss_servassigntype_';
	public $columns = [
		'ss_servassigntype_id' => ['name' => 'Type #', 'domain' => 'type_id'],
		'ss_servassigntype_parent' => ['name' => 'Parent Type #', 'domain' => 'type_id'],
		'ss_servassigntype_name' => ['name' => 'Name', 'type' => 'text'],
		'ss_servassigntype_icon' => ['name' => 'Icon', 'type' => 'text'],
		'ss_servassigntype_disabled' => ['name' => 'Disabled', 'type' => 'boolean']
	];
	public $options_map = [
		'ss_servassigntype_name' => 'name',
		'ss_servassigntype_icon' => 'icon_class',
		'ss_servassigntype_parent' => 'parent_id',
		'ss_servassigntype_disabled' => 'disabled'
	];
	public $data = [
		//10 => ['ss_servassigntype_name' => 'Territories', 'ss_servassigntype_icon' => 'far fa-square', 'ss_servassigntype_disabled' => 1],
		//13 => ['ss_servassigntype_name' => 'Postal Codes', 'ss_servassigntype_icon' => 'far fa-compass', 'ss_servassigntype_parent' => 10],
		//17 => ['ss_servassigntype_name' => 'Counties', 'ss_servassigntype_icon' => 'fab fa-shirtsinbulk', 'ss_servassigntype_parent' => 10],
		//20 => ['ss_servassigntype_name' => 'Postal Codes', 'ss_servassigntype_icon' => 'far fa-compass'],
		30 => ['ss_servassigntype_name' => 'Customer / Locations', 'ss_servassigntype_icon' => 'fas fa-warehouse'],
		//40 => ['ss_servassigntype_name' => 'Geo Areas', 'ss_servassigntype_icon' => 'fas fa-images'],
		// todo
		50 => ['ss_servassigntype_name' => 'No Assignment', 'ss_servassigntype_icon' => 'fas fa-leaf'],
	];

	public function options($options = []) {
		$data = parent::options($options);
		// see if territories has been activated
		if (!\Can::systemFeatureExists('ON::TERRITORIES')) {
			unset($data[10]);
			unset($data[13]);
			unset($data[17]);
		}
		// if we have
		if (!\Can::systemFeatureExists('SS::SERVICE_CUSTOMER_LOCATION_ASSIGNMENT')) {
			unset($data[30]);
		}
		// if we have postal codes
		if (!\Can::systemFeatureExists('CM::COUNTRIES')) {
			unset($data[20]);
		}
		// if we have geo extension
		if (!\Can::systemFeatureExists('SM::POSTGIS')) {
			unset($data[40]);
		}
		$converted = \Helper\Tree::convertByParent($data, 'parent_id');
		$result = [];
		\Helper\Tree::convertTreeToOptionsMulti($converted, 0, ['name_field' => 'name', 'i18n' => false], $result);
		return $result;
	}
}