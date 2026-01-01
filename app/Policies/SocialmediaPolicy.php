<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\Socialmedia;
use Illuminate\Auth\Access\HandlesAuthorization;

class SocialmediaPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:Socialmedia');
    }

    public function view(AuthUser $authUser, Socialmedia $socialmedia): bool
    {
        return $authUser->can('View:Socialmedia');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:Socialmedia');
    }

    public function update(AuthUser $authUser, Socialmedia $socialmedia): bool
    {
        return $authUser->can('Update:Socialmedia');
    }

    public function delete(AuthUser $authUser, Socialmedia $socialmedia): bool
    {
        return $authUser->can('Delete:Socialmedia');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:Socialmedia');
    }

}