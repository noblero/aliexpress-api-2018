<?php
/**
 * TOP API: aliexpress.marketing.redefining.joinlimiteddiscountpromotion request
 * 
 * @author auto create
 * @since 1.0, 2017.12.27
 */
class AliexpressMarketingRedefiningJoinlimiteddiscountpromotionRequest
{
	/** 
	 * 12345
	 **/
	private $limitedDiscountPromProductDTO;
	
	private $apiParas = array();
	
	public function setLimitedDiscountPromProductDTO($limitedDiscountPromProductDTO)
	{
		$this->limitedDiscountPromProductDTO = $limitedDiscountPromProductDTO;
		$this->apiParas["limited_discount_prom_product_d_t_o"] = $limitedDiscountPromProductDTO;
	}

	public function getLimitedDiscountPromProductDTO()
	{
		return $this->limitedDiscountPromProductDTO;
	}

	public function getApiMethodName()
	{
		return "aliexpress.marketing.redefining.joinlimiteddiscountpromotion";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
