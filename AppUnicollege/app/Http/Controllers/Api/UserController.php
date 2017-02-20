<?php
namespace AppUnicollege\Http\Controllers\Api;

use AppUnicollege\Http\Controllers\Controller;
use AppUnicollege\Repositories\UserRepository;
use LucaDegasperi\OAuth2Server\Facades\Authorizer;

class UserController extends Controller
{
    protected $userRepository;
    /**
     * User Controller constructor.
     * @param UserRepository    $userRepository
     */
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }
     /**
     * .
     * @return \Illuminate\Http\Response
     */
    public function authenticated()
    {
        $id = Authorizer::getResourceOwnerId();
        return $this->userRepository->skipPresenter(false)->find($id);

    }
}
