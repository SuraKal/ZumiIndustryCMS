<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\Gallery;
use Illuminate\Auth\Access\HandlesAuthorization;

class GalleryPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:Gallery');
    }

    public function view(AuthUser $authUser, Gallery $gallery): bool
    {
        return $authUser->can('View:Gallery');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:Gallery');
    }

    public function update(AuthUser $authUser, Gallery $gallery): bool
    {
        return $authUser->can('Update:Gallery');
    }

    public function delete(AuthUser $authUser, Gallery $gallery): bool
    {
        return $authUser->can('Delete:Gallery');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:Gallery');
    }

}