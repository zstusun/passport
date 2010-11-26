<?php
class MemberModel extends Model
{
	protected $tableName = 'member';
	protected $fields = array(
	'uid',
	'sid',
	'email', 
	'password', 
	'randkey',
	'petname',
	'randkey',
	'sex', 
	'acl',
	'lastlogin',
	'_pk'=>'uid',
	'_autoinc'=>true 
	);
}