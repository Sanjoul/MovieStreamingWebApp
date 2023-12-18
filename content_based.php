<?php
class ContentBasedRecommend extends Recommend
{
	const USER_ID = '__USER__';
	protected $data;

	function __construct($currgenre, $objects)
	{
		$this->data[self::USER_ID] = $this->processCurrgenre($currgenre);
		$this->data = array_merge($this->data, $this->processObjects($objects));
	}

	public function getRecommendation()
	{
		$result = [];
		
		foreach ($this->data as $k => $v) {
			if($k != self::USER_ID) {
				$result[$k] = $this->similarityDistance($this->data, self::USER_ID, $k);
			}
		}

		arsort($result);
		
			return $result;
		
			
	}

	protected function processCurrgenre($currgenre)
	{
		$result = [];

		foreach ($currgenre as $tag) {
			$result[$tag] = 1.0;
		}

		return $result;
	}

	protected function processObjects($objects)
	{
		$result = [];

		foreach ($objects as $object => $tags) {
			foreach ((array)$tags as $tag) {
				$result[$object][$tag]= 1.0	;
			}
		}

		return $result;
	}
}