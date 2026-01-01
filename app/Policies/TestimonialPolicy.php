<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\Testimonial;
use Illuminate\Auth\Access\HandlesAuthorization;

class TestimonialPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:Testimonial');
    }

    public function view(AuthUser $authUser, Testimonial $testimonial): bool
    {
        return $authUser->can('View:Testimonial');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:Testimonial');
    }

    public function update(AuthUser $authUser, Testimonial $testimonial): bool
    {
        return $authUser->can('Update:Testimonial');
    }

    public function delete(AuthUser $authUser, Testimonial $testimonial): bool
    {
        return $authUser->can('Delete:Testimonial');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:Testimonial');
    }

}