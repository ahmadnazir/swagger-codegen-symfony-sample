<?php

/**
 * StoreController
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Server\Controller
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Swagger Petstore
 *
 * This is a sample server Petstore server.  You can find out more about Swagger at [http://swagger.io](http://swagger.io) or on [irc.freenode.net, #swagger](http://swagger.io/irc/).  For this sample, you can use the api key `special-key` to test the authorization filters.
 *
 * OpenAPI spec version: 1.0.0
 * Contact: apiteam@swagger.io
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Server\Controller;

use \Exception;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Swagger\Server\Api\StoreApiInterface;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Swagger\Server\Model\Order;
use maparray&lt;string,int&gt;;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

/**
 * StoreController Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Server\Controller
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class StoreController extends Controller
{

    /**
     * Operation deleteOrder
     *
     * Delete purchase order by ID
     *
     * @param Request $request The Symfony request to handle.
     * @return Response The Symfony response.
     */
    public function deleteOrderAction(Request $request)
    {
        // Handle path params
        $order_id = $this->fromPath($request->attributes->get('order_id'), 'string');

        // Parse incoming parameters
        // Verify the required parameter 'order_id' is set
        if ($order_id === null) {
            return $this->createBadRequestResponse('Missing the required parameter $order_id when calling deleteOrder');
        }

        // Call the API interface
        try {
            $handler = $this->getApiHandler();

            // No return type expected; return empty response
            $handler->deleteOrder($order_id);
            return new Response('', 204);
        } catch (BadRequestHttpException $exception) {
            // Invalid ID supplied
            return $this->createErrorResponse($exception);
        } catch (NotFoundHttpException $exception) {
            // Order not found
            return $this->createErrorResponse($exception);
        } catch (Exception $fallthrough) {
            return $this->createErrorResponse(new HttpException(500, 'An unsuspected error occurred.', $fallthrough));
        }
    }

    /**
     * Operation getInventory
     *
     * Returns pet inventories by status
     *
     * @param Request $request The Symfony request to handle.
     * @return Response The Symfony response.
     */
    public function getInventoryAction(Request $request)
    {
        // Authentication 'api_key' required
        // Set key with prefix in header
        $securityapi_key = $request->headers->get('api_key');

        // Parse incoming parameters

        // Call the API interface
        try {
            $handler = $this->getApiHandler();

            // Set authentication method 'api_key'
            $handler->setapi_key($securityapi_key);
            // Expecting a return value (exception otherwise)
            $result = $handler->getInventory();

            // Handle 200 response: successful operation
            $content = $this->serialize($result, 'json');
            return new Response($content, 200, [
                'Content-Type' => 'application/json',
                'X-Swagger-Message' => 'successful operation',
            ]);
        } catch (Exception $fallthrough) {
            return $this->createErrorResponse(new HttpException(500, 'An unsuspected error occurred.', $fallthrough));
        }
    }

    /**
     * Operation getOrderById
     *
     * Find purchase order by ID
     *
     * @param Request $request The Symfony request to handle.
     * @return Response The Symfony response.
     */
    public function getOrderByIdAction(Request $request)
    {
        // Handle path params
        $order_id = $this->fromPath($request->attributes->get('order_id'), 'int');

        // Parse incoming parameters
        // Verify the required parameter 'order_id' is set
        if ($order_id === null) {
            return $this->createBadRequestResponse('Missing the required parameter $order_id when calling getOrderById');
        }
        if (($order_id > 5)) {
            return $this->createBadRequestResponse('Invalid value for "$order_id" when calling StoreApiInterface.getOrderById, must be smaller than or equal to 5.');
        }
        if (($order_id < 1)) {
            return $this->createBadRequestResponse('Invalid value for "$order_id" when calling StoreApiInterface.getOrderById, must be bigger than or equal to 1.');
        }

        // Call the API interface
        try {
            $handler = $this->getApiHandler();

            // Expecting a return value (exception otherwise)
            $result = $handler->getOrderById($order_id);

            // Handle 200 response: successful operation
            $content = $this->serialize($result, 'json');
            return new Response($content, 200, [
                'Content-Type' => 'application/json',
                'X-Swagger-Message' => 'successful operation',
            ]);
        } catch (BadRequestHttpException $exception) {
            // Invalid ID supplied
            return $this->createErrorResponse($exception);
        } catch (NotFoundHttpException $exception) {
            // Order not found
            return $this->createErrorResponse($exception);
        } catch (Exception $fallthrough) {
            return $this->createErrorResponse(new HttpException(500, 'An unsuspected error occurred.', $fallthrough));
        }
    }

    /**
     * Operation placeOrder
     *
     * Place an order for a pet
     *
     * @param Request $request The Symfony request to handle.
     * @return Response The Symfony response.
     */
    public function placeOrderAction(Request $request)
    {
        // Handle body params
        $body = $this->deserialize($request->getContent(), 'Swagger\Server\Model\Order', 'json');

        // Parse incoming parameters
        // Verify the required parameter 'body' is set
        if ($body === null) {
            return $this->createBadRequestResponse('Missing the required parameter $body when calling placeOrder');
        }

        // Call the API interface
        try {
            $handler = $this->getApiHandler();

            // Expecting a return value (exception otherwise)
            $result = $handler->placeOrder($body);

            // Handle 200 response: successful operation
            $content = $this->serialize($result, 'json');
            return new Response($content, 200, [
                'Content-Type' => 'application/json',
                'X-Swagger-Message' => 'successful operation',
            ]);
        } catch (BadRequestHttpException $exception) {
            // Invalid Order
            return $this->createErrorResponse($exception);
        } catch (Exception $fallthrough) {
            return $this->createErrorResponse(new HttpException(500, 'An unsuspected error occurred.', $fallthrough));
        }
    }

    /**
     * Returns the handler for this API controller.
     * @return StoreApiInterface
     */
    public function getApiHandler()
    {
        return $this->get('swagger_server.api.api_server')->getApiHandler('store');
    }
}
