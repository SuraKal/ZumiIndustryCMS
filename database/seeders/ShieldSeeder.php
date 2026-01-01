<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\PermissionRegistrar;
use BezhanSalleh\FilamentShield\Support\Utils;
use Illuminate\Database\Eloquent\Model;

class ShieldSeeder extends Seeder
{
    public function run(): void
    {
        // 1️⃣ Clear cached permissions
        app(PermissionRegistrar::class)->forgetCachedPermissions();

        /** @var Model $roleModel */
        $roleModel = Utils::getRoleModel();

        /** @var Model $permissionModel */
        $permissionModel = Utils::getPermissionModel();

        $guard = config('auth.defaults.guard', 'web');

        // 2️⃣ Create or get super_admin role
        $superAdminRole = $roleModel::firstOrCreate([
            'name' => 'super_admin',
            'guard_name' => $guard,
        ]);

        $adminRole = $roleModel::firstOrCreate([
            'name' => 'admin',
            'guard_name' => $guard,
        ]);

        // 3️⃣ Collect all existing permissions
        $allPermissions = $permissionModel::where('guard_name', $guard)->get();

        // 4️⃣ Sync permissions to super_admin role
        $superAdminRole->syncPermissions($allPermissions);
        // $adminRole->syncPermissions($allPermissions);

        $filteredPermissions = $allPermissions->filter(function ($permission) {
            // Remove permissions related to Role or AdminResource
            return ! str_contains($permission->name, ':Role')
                && ! str_contains($permission->name, ':User');
        });

        $adminRole->syncPermissions($filteredPermissions);


        // 5️⃣ Assign role to the first user with super_admin position
        $superAdminUser = collect(User::all())
            ->first(fn (User $user) => $user->hasAnyPosition(['super_admin']));
        $adminUser = collect(User::all())
            ->first(fn (User $user) => $user->hasAnyPosition(['admin']));

        if ($superAdminUser) {
            $superAdminUser->assignRole($superAdminRole);
            $this->command->info('Super admin role assigned to user with super_admin position.');
        } else {
            $this->command->warn('No user found with super_admin position.');
        }
        if ($adminUser) {
            $adminUser->assignRole($adminRole);
            $this->command->info('Admin role assigned to user with admin position.');
        } else {
            $this->command->warn('No user found with admin position.');
        }

        $this->command->info('ShieldSeeder completed successfully.');
    }
}
