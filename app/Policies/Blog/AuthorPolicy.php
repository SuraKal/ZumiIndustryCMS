<?php

declare(strict_types=1);

namespace App\Policies\Blog;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\Blog\Author;
use Illuminate\Auth\Access\HandlesAuthorization;

class AuthorPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:Author');
    }

    public function view(AuthUser $authUser, Author $author): bool
    {
        return $authUser->can('View:Author');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:Author');
    }

    public function update(AuthUser $authUser, Author $author): bool
    {
        return $authUser->can('Update:Author');
    }

    public function delete(AuthUser $authUser, Author $author): bool
    {
        return $authUser->can('Delete:Author');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:Author');
    }

}