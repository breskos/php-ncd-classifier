<?php
/**
 *@author Alexander Bresk
 *@project cip-labs.net NCD
 *@revision 29.11.2013
 *@version 1.0.0
 **/

class NCD{
	
	var $_wordSet;
	
	function NCD(){
		$this->_wordSet = array();
	}


	function add($array){
		if(!is_array($array)) return false;

		foreach($array as $word => $class)
			$this->_wordSet[$word] = array(
				'class' => $class, 
				'length' => $this->compressionLength($word));

		return true;
	}


	function compare($w){
		if(count($this->_wordSet) == 0) return array();

		$best = array();
		$best_ncd = PHP_INT_MAX;
		$z = $this->compressionLength($w);

		foreach($this->_wordSet as $word => $set){
			$ncd = (($this->compressionLength($word . $w) - min($z, $set['length'])) / max($z, $set['length']));
			if($ncd < $best_ncd){
				$best_ncd = $ncd;
				$best = $set;
			}
		}
		$best['score'] = $best_ncd;
		unset($best['length']);
		return $best;
	}


	function compressionLength($word){
		return strlen(gzcompress($word));
	}
}