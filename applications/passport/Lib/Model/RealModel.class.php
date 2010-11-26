<?php
class RealModel extends Model
{
	protected $tableName = 'real';
	protected $fields = array(
	'sid', 
	'name', 
	'pid', 
	'_pk'=>'sid', 
	);
}