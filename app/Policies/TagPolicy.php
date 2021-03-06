<?php

namespace App\Policies;

use App\Model\User;
use App\Model\Tag;
use Illuminate\Auth\Access\HandlesAuthorization;

class TagPolicy
{
  use HandlesAuthorization;

  /**
   * Determine whether the user can see the tags.
   *
   * @param  \App\Model\User  $user
   * @return boolean
   */
  public function viewAny(User $user)
  {
    return true;
  }

  /**
   * Determine whether the user can create tags.
   *
   * @param  \App\Model\User  $user
   * @return boolean
   */
  public function create(User $user)
  {
   return $user->isLead() || $user->isMedia() || $user->isCommunication();
  }

  /**
   * Determine whether the user can update the tag.
   *
   * @param  \App\Model\User  $user
   * @param  \App\Model\Tag  $tag
   * @return boolean
   */
  public function update(User $user, Tag $tag)
  {
   return $user->isLead() || $user->isMedia() || $user->isCommunication();
  }

  /**
   * Determine whether the user can delete the tag.
   *
   * @param  \App\Model\User  $user
   * @param  \App\Model\Tag  $tag
   * @return boolean
   */
  public function delete(User $user, Tag $tag)
  {
    return $user->isLead() || $user->isMedia() || $user->isCommunication();
  }
}
