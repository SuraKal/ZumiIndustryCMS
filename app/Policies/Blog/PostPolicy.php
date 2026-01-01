<?php

declare(strict_types=1);

namespace App\Policies\Blog;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\Blog\Post;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:Post');
    }

    public function view(AuthUser $authUser, Post $post): bool
    {
        return $authUser->can('View:Post');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:Post');
    }

    public function update(AuthUser $authUser, Post $post): bool
    {
        return $authUser->can('Update:Post');
    }

    public function delete(AuthUser $authUser, Post $post): bool
    {
        return $authUser->can('Delete:Post');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:Post');
    }

}