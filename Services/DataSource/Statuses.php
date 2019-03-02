<?php

namespace Numbers\Services\Services\DataSource;
class Statuses extends \Object\DataSource {
	public $db_link;
	public $db_link_flag;
	public $pk = ['service_type_group_code', 'service_type_code', 'status_group_code', 'status_code'];
	public $columns;
	public $orderby;
	public $limit;
	public $single_row;
	public $single_value;
	public $options_map = [
		'status_name' => 'name',
		'status_icon' => 'icon_class',
		'status_inactive' => 'inactive'
	];
	public $column_prefix;

	public $cache = true;
	public $cache_tags = [];
	public $cache_memory = false;

	public $primary_model = '\Numbers\Services\Services\Model\Service\Statuses';
	public $parameters = [];

	public function query($parameters, $options = []) {
		// columns
		$this->query->columns([
			'status_code' => 'a.ss_servstatus_code',
			'status_name' => 'a.ss_servstatus_name',
			'status_icon' => 'a.ss_servstatus_icon',
			'status_parent_code' => 'a.ss_servstatus_parent_servstatus_code',
			'status_inactive' => 'a.ss_servstatus_inactive',
			'service_type_code' => 'b.ss_servtype_code',
			'service_type_name' => 'b.ss_servtype_name',
			'service_type_icon' => 'b.ss_servtype_icon',
			'status_group_code' => 'c.ss_servstsgrp_code',
			'status_group_name' => 'c.ss_servstsgrp_name',
			'status_group_icon' => 'c.ss_servstsgrp_icon',
			'service_type_group_code' => 'd.ss_servtpgrp_code',
			'service_type_group_name' => 'd.ss_servtpgrp_name',
			'service_type_group_icon' => 'd.ss_servtpgrp_icon',
		]);
		// joins
		$this->query->join('INNER', new \Numbers\Services\Services\Model\Service\Types(), 'b', 'ON', [
			['AND', ['a.ss_servstatus_servtype_code', '=', 'b.ss_servtype_code', true], false]
		]);
		$this->query->join('INNER', new \Numbers\Services\Services\Model\Service\Status\Groups(), 'c', 'ON', [
			['AND', ['a.ss_servstatus_servstsgrp_code', '=', 'c.ss_servstsgrp_code', true], false]
		]);
		$this->query->join('INNER', new \Numbers\Services\Services\Model\Service\Type\Groups(), 'd', 'ON', [
			['AND', ['b.ss_servtype_servtpgrp_code', '=', 'd.ss_servtpgrp_code', true], false]
		]);
		// order by
		$this->query->orderby(['d.ss_servtpgrp_order' => SORT_ASC, 'b.ss_servtype_order' => SORT_ASC, 'c.ss_servstsgrp_order' => SORT_ASC, 'a.ss_servstatus_order' => SORT_ASC]);
	}

	/**
	 * @see $this->options()
	 */
	public function optionsJson($options = []) {
		$data = $this->get($options);
		$result = [];
		foreach ($data as $k => $v) {
			foreach ($v as $k2 => $v2) {
				foreach ($v2 as $k3 => $v3) {
					foreach ($v3 as $k4 => $v4) {
						// service type group
						$service_type_group_code = \Object\Table\Options::optionJsonFormatKey([
							'service_type_group_code' => $k,
							'service_type_code' => null,
							'status_group_code' => null,
							'status_code' => null
						]);
						if (!isset($result[$service_type_group_code])) {
							$result[$service_type_group_code] = [
								'name' => $v4['service_type_group_name'],
								'icon_class' => \HTML::icon(['type' => $v4['service_type_group_icon'], 'class_only' => true]),
								'parent' => null
							];
						}
						// service type code
						$service_type_code = \Object\Table\Options::optionJsonFormatKey([
							'service_type_group_code' => $k,
							'service_type_code' => $k2,
							'status_group_code' => null,
							'status_code' => null
						]);
						if (!isset($result[$service_type_code])) {
							$result[$service_type_code] = [
								'name' => $v4['service_type_name'],
								'icon_class' => \HTML::icon(['type' => $v4['service_type_icon'], 'class_only' => true]),
								'parent' => $service_type_group_code
							];
						}
						// status group code
						$status_group_code = \Object\Table\Options::optionJsonFormatKey([
							'service_type_group_code' => $k,
							'service_type_code' => $k2,
							'status_group_code' => $k3,
							'status_code' => null
						]);
						if (!isset($result[$status_group_code])) {
							$result[$status_group_code] = [
								'name' => $v4['status_group_name'],
								'icon_class' => \HTML::icon(['type' => $v4['status_group_icon'], 'class_only' => true]),
								'parent' => $service_type_code
							];
						}
						// status group code
						$status_code = \Object\Table\Options::optionJsonFormatKey([
							'service_type_group_code' => $k,
							'service_type_code' => $k2,
							'status_group_code' => $k3,
							'status_code' => $k4
						]);
						if (!isset($result[$status_code])) {
							$result[$status_code] = [
								'name' => $v4['status_name'],
								'icon_class' => \HTML::icon(['type' => $v4['status_icon'], 'class_only' => true]),
								'parent' => $status_group_code
							];
						}
					}
				}
			}
		}
		if (!empty($result)) {
			$converted = \Helper\Tree::convertByParent($result, 'parent');
			$result = [];
			\Helper\Tree::convertTreeToOptionsMulti($converted, 0, ['name_field' => 'name', 'i18n' => 'skip_sorting'], $result);
		}
		return $result;
	}

	/**
	 * @see $this->options()
	 */
	public function optionsJsonSingle($options = []) {
		$data = $this->get($options);
		$result = [];
		foreach ($data as $k => $v) {
			foreach ($v as $k2 => $v2) {
				foreach ($v2 as $k3 => $v3) {
					foreach ($v3 as $k4 => $v4) {
						// service type group
						$service_type_group_code = 'STG-' . $k;
						if (!isset($result[$service_type_group_code])) {
							$result[$service_type_group_code] = [
								'name' => $v4['service_type_group_name'],
								'icon_class' => \HTML::icon(['type' => $v4['service_type_group_icon'], 'class_only' => true]),
								'disabled' => true,
								'parent' => null
							];
						}
						// service type code
						$service_type_code = 'STG-' . $k . '-ST' . $k2;
						if (!isset($result[$service_type_code])) {
							$result[$service_type_code] = [
								'name' => $v4['service_type_name'],
								'icon_class' => \HTML::icon(['type' => $v4['service_type_icon'], 'class_only' => true]),
								'disabled' => true,
								'parent' => $service_type_group_code
							];
						}
						// status group code
						$status_group_code = 'STG-' . $k . '-ST' . $k2 . '-SG' . $k3;
						if (!isset($result[$status_group_code])) {
							$result[$status_group_code] = [
								'name' => $v4['status_group_name'],
								'icon_class' => \HTML::icon(['type' => $v4['status_group_icon'], 'class_only' => true]),
								'disabled' => true,
								'parent' => $service_type_code
							];
						}
						// status group code
						$status_code = $k4;
						if (!isset($result[$status_code])) {
							$result[$status_code] = [
								'name' => $v4['status_name'],
								'__selected_name' => i18n(null, $v4['service_type_name']) . ': ' . i18n(null, $v4['status_name']),
								'icon_class' => \HTML::icon(['type' => $v4['status_icon'], 'class_only' => true]),
								'parent' => $status_group_code
							];
						}
					}
				}
			}
		}
		if (!empty($result)) {
			$converted = \Helper\Tree::convertByParent($result, 'parent');
			$result = [];
			\Helper\Tree::convertTreeToOptionsMulti($converted, 0, ['name_field' => 'name', 'i18n' => 'skip_sorting'], $result);
		}
		return $result;
	}
}