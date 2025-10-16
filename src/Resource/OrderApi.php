<?php

namespace Webkult\Api\Shirtigo\Resource;

use Saloon\Contracts\Response;
use Webkult\Api\Shirtigo\Requests\OrderApi\AddOrderComment;
use Webkult\Api\Shirtigo\Requests\OrderApi\CalculatePrice;
use Webkult\Api\Shirtigo\Requests\OrderApi\CancelOrder;
use Webkult\Api\Shirtigo\Requests\OrderApi\CreateOrder;
use Webkult\Api\Shirtigo\Requests\OrderApi\CustomizeOrderProduct;
use Webkult\Api\Shirtigo\Requests\OrderApi\DeleteOrderProduct;
use Webkult\Api\Shirtigo\Requests\OrderApi\GetAllOrders;
use Webkult\Api\Shirtigo\Requests\OrderApi\GetAvailableFulfillmentModes;
use Webkult\Api\Shirtigo\Requests\OrderApi\GetCouponInfo;
use Webkult\Api\Shirtigo\Requests\OrderApi\GetOrder;
use Webkult\Api\Shirtigo\Requests\OrderApi\GetOrderReference;
use Webkult\Api\Shirtigo\Requests\OrderApi\ReleaseOnhold;
use Webkult\Api\Shirtigo\Requests\OrderApi\RetrieveOrderInvoice;
use Webkult\Api\Shirtigo\Requests\OrderApi\RetryPayment;
use Webkult\Api\Shirtigo\Requests\OrderApi\SetOnhold;
use Webkult\Api\Shirtigo\Requests\OrderApi\UpdateDeliveryAddress;
use Webkult\Api\Shirtigo\Requests\OrderApi\UpdateOrderProduct;
use Webkult\Api\Shirtigo\Requests\OrderApi\UploadMerchantInvoice;
use Webkult\Api\Shirtigo\Requests\OrderApi\UploadOrderDocument;
use Webkult\Api\Shirtigo\Resource;

class OrderApi extends Resource
{
	/**
	 * @param string $couponCode Alphanumerical coupon identifier as provided to the customer
	 */
	public function getCouponInfo(string $couponCode): Response
	{
		return $this->connector->send(new GetCouponInfo($couponCode));
	}


	public function uploadOrderDocument(): Response
	{
		return $this->connector->send(new UploadOrderDocument());
	}


	/**
	 * @param int $page Page number
	 * @param int $filter Filter by order status id
	 * @param int $items Items per page
	 * @param string $search Search query
	 * @param string $sortCol Property to order by
	 * @param string $sortDir Order direction
	 * @param int $period Days to show (default: all)
	 * @param string $secondaryFilter Secondary filter level (e.g. filter reprint orders)
	 */
	public function getAllOrders(
		int $page,
		int $filter,
		int $items,
		string $search,
		string $sortCol,
		string $sortDir,
		int $period,
		string $secondaryFilter,
	): Response
	{
		return $this->connector->send(new GetAllOrders($page, $filter, $items, $search, $sortCol, $sortDir, $period, $secondaryFilter));
	}


	public function createOrder(): Response
	{
		return $this->connector->send(new CreateOrder());
	}


	/**
	 * @param string $orderReference The unique reference identifier of the order
	 */
	public function getOrder(string $orderReference): Response
	{
		return $this->connector->send(new GetOrder($orderReference));
	}


	/**
	 * @param string $orderReference The unique reference identifier of the order
	 */
	public function updateDeliveryAddress(string $orderReference): Response
	{
		return $this->connector->send(new UpdateDeliveryAddress($orderReference));
	}


	public function releaseOnhold(): Response
	{
		return $this->connector->send(new ReleaseOnhold());
	}


	public function uploadMerchantInvoice(): Response
	{
		return $this->connector->send(new UploadMerchantInvoice());
	}


	public function setOnhold(): Response
	{
		return $this->connector->send(new SetOnhold());
	}


	public function getOrderReference(): Response
	{
		return $this->connector->send(new GetOrderReference());
	}


	public function calculatePrice(): Response
	{
		return $this->connector->send(new CalculatePrice());
	}


	public function getAvailableFulfillmentModes(): Response
	{
		return $this->connector->send(new GetAvailableFulfillmentModes());
	}


	/**
	 * @param string $orderReference The unique reference identifier of the order
	 */
	public function retryPayment(string $orderReference): Response
	{
		return $this->connector->send(new RetryPayment($orderReference));
	}


	/**
	 * @param string $orderReference The unique reference identifier of the order
	 */
	public function cancelOrder(string $orderReference): Response
	{
		return $this->connector->send(new CancelOrder($orderReference));
	}


	/**
	 * @param string $orderReference The unique reference identifier of the order
	 */
	public function addOrderComment(string $orderReference): Response
	{
		return $this->connector->send(new AddOrderComment($orderReference));
	}


	/**
	 * @param string $orderReference Unique identifier of the order for which to retrieve the invoice
	 */
	public function retrieveOrderInvoice(string $orderReference): Response
	{
		return $this->connector->send(new RetrieveOrderInvoice($orderReference));
	}


	/**
	 * @param string $designReference Reference of design
	 * @param int $processingareaTypeId Processingarea to be customized. 1 = front, 2 = back
	 * @param float $width Width of design in millimeter
	 * @param float $offsetTop Offset to collar in millimeter
	 * @param float $offsetCenter x-shift to centerline in millimeter
	 */
	public function customizeOrderProduct(
		string $designReference,
		int $processingareaTypeId,
		float $width,
		float $offsetTop,
		float $offsetCenter,
	): Response
	{
		return $this->connector->send(new CustomizeOrderProduct($designReference, $processingareaTypeId, $width, $offsetTop, $offsetCenter));
	}


	/**
	 * @param int $colorId ID for new color
	 * @param int $sizeId ID for new size
	 * @param bool $replacementRequested Use replacement product in case current Product is not available
	 */
	public function updateOrderProduct(int $colorId, int $sizeId, bool $replacementRequested): Response
	{
		return $this->connector->send(new UpdateOrderProduct($colorId, $sizeId, $replacementRequested));
	}


	public function deleteOrderProduct(): Response
	{
		return $this->connector->send(new DeleteOrderProduct());
	}
}
