<?php
/**
* ZCNCMS
* products
* php>=5.0
* @author LEI
* @version 1.1.2
* @time 20111004
*/
class Products_class extends Datas{

	private $productSubClassTempArray ;

	/**
	 * Datas的构造函数 无需传参数
	 */
	function __construct(){
		parent::__construct('{tablepre}products_class');
	}
	/**
	 * 函数GetClassCount,返回新闻分类数量
	 * 返回分类数量(子分类数量可以通过where获得)
	 * @return int
	 */
	function GetClassCount($id){
		$this->setTable('{tablepre}products_class');
		$where = '';
		if($id!=0){
			$where=' parentid='.$id;
		}
		return parent::GetListCount($where);
	}

	function SetProductSubClassString($classid,$first){
		global $db;

		if($first==true){

			if($this->productSubClassTempArray != null ){
				$this->productSubClassTempArray = array() ;
			}

			$sqlClass = "SELECT id FROM ".$this->table." WHERE id = ". $classid ;
			$db->Execute($sqlClass);
			$this->productSubClassTempArray = $db->GetArray();
		}

		//开始循环节点列表，开始递归累加所有子节点
		$sql="SELECT id FROM ".$this->table." WHERE parentid = ".$classid;
		$db->Execute($sql);
		$t_list=$db->GetArray();

		if($t_list != null){

			foreach($t_list AS $key_2=>$value_2){
				//将子节点累加在$array中
				$this->productSubClassTempArray[] = $value_2 ;
				//再递归寻找子节点的子节点
				$this->SetProductSubClassString($value_2['id'] , false);
			}
		}
	}

	function GetProductSubClassString(){
		$str = "" ;
		foreach($this->productSubClassTempArray AS $key=>$value){
			if($str == ""){
				$str = $value['id'] ;
			}else{
				$str = $str. "," . $value['id'] ;
			}
		}
		return $str ;
	}

}
?>