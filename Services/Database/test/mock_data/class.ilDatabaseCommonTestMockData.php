<?php

/**
 * Class ilDatabaseCommonTestMockData
 *
 * @author Fabian Schmid <fs@studer-raimann.ch>
 */
class ilDatabaseCommonTestMockData {

	/**
	 * @return array
	 */
	public function getDBFields() {
		$fields = array(
			'id'             => array(
				'type'    => 'integer',
				'length'  => 4,
				'notnull' => true,
			),
			'is_online'      => array(
				'type'    => 'integer',
				'length'  => 1,
				'notnull' => false,
			),
			'is_default'     => array(
				'type'    => 'integer',
				'length'  => 1,
				'notnull' => false,
				'default' => 1,
			),
			'latitude'       => array(
				'type' => 'float',
			),
			'longitude'      => array(
				'type' => 'float',
			),
			'elevation'      => array(
				'type' => 'float',
			),
			'address'        => array(
				'type'    => 'text',
				'length'  => 256,
				'notnull' => false,
			),
			'init_mob_id'    => array(
				'type'    => 'integer',
				'length'  => 4,
				'notnull' => false,
			),
			'comment_mob_id' => array(
				'type'   => 'integer',
				'length' => 4,
			),
			'container_id'   => array(
				'type'   => 'integer',
				'length' => 4,
			),
		);

		return $fields;
	}


	/**
	 * @return array
	 */
	public function getInputArray() {
		$fields = array(
			'id'             => array(
				'integer',
				56,
			),
			'is_online'      => array(
				'integer',
				true,
			),
			'is_default'     => array(
				'integer',
				false,
			),
			'latitude'       => array(
				'float',
				47.059830,
			),
			'longitude'      => array(
				'float',
				7.624028,
			),
			'elevation'      => array(
				'float',
				2.56,
			),
			'address'        => array(
				'text',
				'Farbweg 9, 3400 Burgdorf',
			),
			'init_mob_id'    => array(
				'integer',
				78,
			),
			'comment_mob_id' => array(
				'integer',
				69,
			),
			'container_id'   => array(
				'integer',
				456,
			),
		);

		return $fields;
	}


	/**
	 * @param $table_name
	 * @return string
	 */
	public function getInsertQuery($table_name) {
		return "INSERT INTO `" . $table_name . "` 
		      (`id`,`is_online`,`is_default`,`latitude`,`longitude`,`elevation`,`address`,`init_mob_id`,`comment_mob_id`,`container_id`) 
		    VALUES 
		      (58,1,0,47.05983,7.624028,2.56,'Farbweg 9, 3400 Burgdorf',78,69,456);";
	}


	/**
	 * @return mixed
	 */
	public function getTableCreateSQL($tablename) {
		return "CREATE TABLE `" . $tablename . "` (
  `id` int(11) NOT NULL,
  `is_online` tinyint(4) DEFAULT NULL,
  `is_default` tinyint(4) DEFAULT '1',
  `latitude` double DEFAULT NULL,
  `longitude` double DEFAULT NULL,
  `elevation` double DEFAULT NULL,
  `address` varchar(256) DEFAULT NULL,
  `init_mob_id` int(11) DEFAULT NULL,
  `comment_mob_id` int(11) DEFAULT NULL,
  `container_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)) ENGINE=InnoDB DEFAULT CHARSET=utf8";
	}
}