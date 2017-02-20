<?php

namespace AppUnicollege\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use AppUnicollege\Repositories\UserRepository;
use AppUnicollege\Models\User;
use AppUnicollege\Validators\UserValidator;
use AppUnicollege\Presenters\UserPresenter;

/**
 * Class UserRepositoryEloquent
 * @package namespace AppUnicollege\Repositories;
 */
class UserRepositoryEloquent extends BaseRepository implements UserRepository
{
      protected $skipPresenter = true;

    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return User::class;
    }



    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    public function presenter()
    {
      return UserPresenter::class;
    }
}
