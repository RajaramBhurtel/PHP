<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */
abstract class BaseController extends Controller{
    /**
     * Instance of the main Request object.
     *
     * @var CLIRequest|IncomingRequest
     */
    protected $request;

    /**
     * An array of helpers to be loaded automatically upon
     * class instantiation. These helpers will be available
     * to all other controllers that extend BaseController.
     *
     * @var array
     */
    protected $helpers = [ 'html', 'form', 'uri', 'merch' ];

    protected $data = [];

    /**
     * Constructor.
     */
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger){
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);

        if( session()->get( 'loggedIn' ) ){
            
            $this->data[ 'userDropdownMenus' ] = [
                'setting' => [
                    'title' => lang( 'PageTitle.setting' ),
                    'route' => lang( 'Route.setting' )
                ],
                'profile' => [
                    'title' => lang( 'PageTitle.profile' ),
                    'route' => lang( 'Route.userEdit' ) . '/' . session()->get( 'userData' )->id
                ],
                'logout' => [
                    'title' => lang( 'PageTitle.logout' ),
                    'route' => lang( 'Route.logout' )
                ]
            ];

            $this->data[ 'menus' ] = [
                'dashboard' => [
                    'title' => lang( 'PageTitle.dashboard' ),
                    'route' => lang( 'Route.dashboard' ),
                    'icon'  => img( 'images/dashboard.png', true ),
                ],
                'order' => [
                    'title' => lang( 'PageTitle.order' ),
                    'route' => lang( 'Route.order' ),
                    'icon'  => img( 'images/order.png', true ),
                ],
                'product' => [
                    'title' => lang( 'PageTitle.product' ),
                    'route' => lang( 'Route.product' ),
                    'icon'  => img( 'images/product.png', true ),
                ],
                'user' => [
                    'title' => lang( 'PageTitle.user' ),
                    'route' => lang( 'Route.user' ),
                    'icon'  => img( 'images/user.png', true ),
                ],
                'setting' => [
                    'title' => lang( 'PageTitle.setting' ),
                    'route' => lang( 'Route.setting' ),
                    'icon'  => img( 'images/setting.png', true ),
                ]
            ];
        }

        // Preload any models, libraries, etc, here.
        // $this->db = \Config\Database::connect();
        $this->mo = model( 'App\Models\SettingModel' );
        $this->data['styles'] = $this->mo->findAll();   
    }

    public function view( $view ){
        return view( $view, $this->data ); 
    }
}
