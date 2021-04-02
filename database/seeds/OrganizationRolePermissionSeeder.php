<?php

use Illuminate\Database\Seeder;

class OrganizationRolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $organizationPermissionTypes = DB::table('organization_permission_types')->select('id', 'feature')->get();

        foreach ($organizationPermissionTypes as $organizationPermissionType) {
            $adminRole = DB::table('organization_role_types')->where('name', 'admin')->first();

            DB::table('organization_role_permissions')->insert([
                'organization_role_type_id' => $adminRole->id,
                'organization_permission_type_id' => $organizationPermissionType->id
            ]);

            $courseCreatorRole = DB::table('organization_role_types')->where('name', 'course_creator')->first();

            if (in_array($organizationPermissionType->feature, ['Project', 'Playlist', 'Activity', 'Team', 'Group', 'Search'])) {
                DB::table('organization_role_permissions')->insert([
                    'organization_role_type_id' => $courseCreatorRole->id,
                    'organization_permission_type_id' => $organizationPermissionType->id
                ]);
            }


            $memberPermissions = ['12', '14', '15', '17', '18', '21', '23', '24', '27', '29', '30', '33', '45', '55', '56'];

            $memberRole = DB::table('organization_role_types')->where('name', 'member')->first();

            if (in_array($organizationPermissionType->id, $memberPermissions)) {
                DB::table('organization_role_permissions')->insert([
                    'organization_role_type_id' => $memberRole->id,
                    'organization_permission_type_id' => $organizationPermissionType->id
                ]);
            }
        }
    }
}