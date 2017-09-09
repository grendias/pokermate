<?php
namespace common\model;

use Yii;
use umeworld\lib\Query;
use yii\helpers\ArrayHelper;

class Lianmeng extends \common\lib\DbOrmModel{
	//对账方法（1：0.975 2：无水账单）
	const DUIZHANGFANGFA_LINDIANJIUQIWU = 1;
	const DUIZHANGFANGFA_WUSHUIDUIZHANG = 2;
	
	public static function tableName(){
		return Yii::$app->db->parseTable('_@lianmeng');
	}
	
	public static function addRecord($aData){
		$id = static::insert($aData);
		return $id;
	}
}