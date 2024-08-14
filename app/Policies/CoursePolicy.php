<?php

namespace App\Policies;

use App\Models\Course;
use App\Models\Role;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class CoursePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Course $course): bool
    {
        if ($user->role->id == Role::ADMIN || $user->grade_id == $course->grade_id || $user->id == $course->teacher_id) {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        if ($user->role_id == Role::ADMIN)
            return true;
        return false;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Course $course): bool
    {
        if ($user->role_id == Role::ADMIN || $course->teacher_id == $user->id)
            return true;
        return false;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Course $course): bool
    {
        if ($user->role_id == Role::ADMIN || $course->teacher_id == $user->id)
            return true;
        return false;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Course $course): bool
    {
        if ($user->role_id == Role::ADMIN || $course->teacher_id == $user->id)
            return true;
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Course $course): bool
    {
        if ($user->role_id == Role::ADMIN || $course->teacher_id == $user->id)
            return true;
        return false;
    }
}
