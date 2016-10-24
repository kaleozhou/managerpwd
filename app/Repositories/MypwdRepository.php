<?php
/** =============================================================================
 * @name MypwdRepository.php
 * @date date 2016年10月22日 星期六 09时50分04秒
 * @author kaleo <kaleo1990@hotmail.com>
 * @package 
 * =============================================================================
 */
namespace App\Repositories;

use App\User;
use App\Mypwd;

class MypwdRepository{
        /**
         * Get all of the mypwds for a given user.
         *
         * @param User $user
         * @return Collection
         */
        public function forUser(User $user)
                {
                    return Mypwd::where('user_id', $user->id)
                        ->orderBy('created_at', 'asc')
                        ->get();
        }
}

