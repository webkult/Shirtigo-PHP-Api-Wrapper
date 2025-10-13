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
	 * @param mixed $couponCode Alphanumerical coupon identifier as provided to the customer
	 */
	public function getCouponInfo(mixed $couponCode): Response
	{
		return $this->connector->send(new GetCouponInfo($couponCode));
	}


	public function uploadOrderDocument(): Response
	{
		return $this->connector->send(new UploadOrderDocument());
	}


	/**
	 * @param mixed $page Page number
	 * @param mixed $filter Filter by order status id
	 * @param mixed $items Items per page
	 * @param mixed $search Search query
	 * @param mixed $sortCol Property to order by
	 * @param mixed $sortDir Order direction
	 * @param mixed $period Days to show (default: all)
	 * @param mixed $secondaryFilter Secondary filter level (e.g. filter reprint orders)
	 */
	public function getAllOrders(
		mixed $page,
		mixed $filter,
		mixed $items,
		mixed $search,
		mixed $sortCol,
		mixed $sortDir,
		mixed $period,
		mixed $secondaryFilter,
	): Response
	{
		return $this->connector->send(new GetAllOrders($page, $filter, $items, $search, $sortCol, $sortDir, $period, $secondaryFilter));
	}


	public function createOrder(): Response
	{
		return $this->connector->send(new CreateOrder());
	}


	/**
	 * @param mixed $orderReference The unique reference identifier of the order
	 */
	public function getOrder(mixed $orderReference): Response
	{
		return $this->connector->send(new GetOrder($orderReference));
	}


	/**
	 * @param mixed $orderReference The unique reference identifier of the order
	 */
	public function updateDeliveryAddress(mixed $orderReference): Response
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
	 * @param mixed $orderReference The unique reference identifier of the order
	 */
	public function retryPayment(mixed $orderReference): Response
	{
		return $this->connector->send(new RetryPayment($orderReference));
	}


	/**
	 * @param mixed $orderReference The unique reference identifier of the order
	 */
	public function cancelOrder(mixed $orderReference): Response
	{
		return $this->connector->send(new CancelOrder($orderReference));
	}


	/**
	 * @param mixed $orderReference The unique reference identifier of the order
	 */
	public function addOrderComment(mixed $orderReference): Response
	{
		return $this->connector->send(new AddOrderComment($orderReference));
	}


	/**
	 * @param mixed $orderReference Unique identifier of the order for which to retrieve the invoice
	 */
	public function retrieveOrderInvoice(mixed $orderReference): Response
	{
		return $this->connector->send(new RetrieveOrderInvoice($orderReference));
	}


	/**
	 * @param mixed $designReference Reference of design
	 * @param mixed $processingareaTypeId Processingarea to be customized. 1 = front, 2 = back
	 * @param mixed $width Width of design in millimeter
	 * @param mixed $offsetTop Offset to collar in millimeter
	 * @param mixed $offsetCenter x-shift to centerline in millimeter
	 */
	public function customizeOrderProduct(
		mixed $designReference,
		mixed $processingareaTypeId,
		mixed $width,
		mixed $offsetTop,
		mixed $offsetCenter,
	): Response
	{
		return $this->connector->send(new CustomizeOrderProduct($designReference, $processingareaTypeId, $width, $offsetTop, $offsetCenter));
	}


	/**
	 * @param mixed $colorId ID for new color
	 * @param mixed $sizeId ID for new size
	 * @param mixed $replacementRequested Use replacement product in case current Product is not available
	 */
	public function updateOrderProduct(mixed $colorId, mixed $sizeId, mixed $replacementRequested): Response
	{
		return $this->connector->send(new UpdateOrderProduct($colorId, $sizeId, $replacementRequested));
	}


	public function deleteOrderProduct(): Response
	{
		return $this->connector->send(new DeleteOrderProduct());
	}
}
