<?php

namespace App\Http\Controllers;
/**
 * @package
 * @category
 *
 * @SWG\Resource(
 *   apiVersion="1.0.0",
 *   swaggerVersion="2.1",
 *   basePath="http://localhost/laravel/public",
 *   resourcePath="/Test",
 *   description="我的第一个测试类",
 *   @SWG\Produces("application/json")
 * )
 */
class TestController extends Controller {

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		//$this->middleware('auth');
	}
	/**
	 * @SWG\Api(
	 *   path="/test",
	 *   @SWG\Operation(
	 *     method="GET",
	 *     summary="一个测试方法index",
	 *     notes="",
	 *     type="Article",
	 *     nickname="getUserByName",
	 *     authorizations={},
	 *     @SWG\Parameter(
	 *       name="username",
	 *       description="姓名",
	 *       required=false,
	 *       type="string",
	 *       paramType="query",
	 *       allowMultiple=false
	 *     ),
	 *      @SWG\Parameter(
	 *       name="id[1]",
	 *       description="id中的一个",
	 *       required=true,
	 *       type="string",
	 *       paramType="query",
	 *       allowMultiple=false
	 *     ),
	 *     @SWG\ResponseMessage(code=400, message="Invalid username supplied"),
	 *     @SWG\ResponseMessage(code=404, message="User not found")
	 *   )
	 * )
	 * 
	 */
	public function index()
	{
		
		header('Content-Type:application/json; charset=utf-8');
		$arr=['id'=>1,'name'=>'姓名','sex'=>'男','status'=>1];
		exit(json_encode(array('Article'=>$arr)));
		return view('home');
	}
	/**
	 *
	 * @SWG\Api(
	 *   path="/facet.{format}/{facetId}",
	 *   description="Operations about facets",
	 *   @SWG\Operations(
	 *     @SWG\Operation(
	 *       method="DELETE",
	 *       summary="Find facet by ID",
	 *       notes="Returns a facet based on ID",
	 *       nickname="getfacetById",
	 *       @SWG\Parameters(
	 *         @SWG\Parameter(
	 *           name="facetId",
	 *           description="ID of facet that needs to be fetched",
	 *           paramType="path",
	 *           required=true,
	 *           type="string"
	 *         )
	 *       ),
	 *       @SWG\ResponseMessages(
	 *          @SWG\ResponseMessage(
	 *            code=400,
	 *            message="Invalid ID supplied"
	 *          ),
	 *          @SWG\ResponseMessage(
	 *            code=404,
	 *            message="facet not found"
	 *          )
	 *       )
	 *     ),
	 *       @SWG\Operation(
	 *       method="GET",
	 *       summary="Find facet by ID",
	 *       notes="Returns a facet based on ID",
	 *       nickname="getfacetById",
	 *       @SWG\Parameters(
	 *         @SWG\Parameter(
	 *           name="facetId",
	 *           description="ID of facet that needs to be fetched",
	 *           paramType="query",
	 *           required=false,
	 *           type="string"
	 *         )
	 *       ),
	 *       @SWG\ResponseMessages(
	 *          @SWG\ResponseMessage(
	 *            code=400,
	 *            message="Invalid ID supplied"
	 *          ),
	 *          @SWG\ResponseMessage(
	 *            code=404,
	 *            message="facet not found"
	 *          )
	 *       )
	 *     )
	 *   )
	 * )
	 */
	public function deleteAction()
	{
	}
}
