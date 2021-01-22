<?php

namespace Database\Seeders;

use App\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'company_access',
            ],
            [
                'id'    => 18,
                'title' => 'mission_and_vision_create',
            ],
            [
                'id'    => 19,
                'title' => 'mission_and_vision_edit',
            ],
            [
                'id'    => 20,
                'title' => 'mission_and_vision_show',
            ],
            [
                'id'    => 21,
                'title' => 'mission_and_vision_delete',
            ],
            [
                'id'    => 22,
                'title' => 'mission_and_vision_access',
            ],
            [
                'id'    => 23,
                'title' => 'core_value_create',
            ],
            [
                'id'    => 24,
                'title' => 'core_value_edit',
            ],
            [
                'id'    => 25,
                'title' => 'core_value_show',
            ],
            [
                'id'    => 26,
                'title' => 'core_value_delete',
            ],
            [
                'id'    => 27,
                'title' => 'core_value_access',
            ],
            [
                'id'    => 28,
                'title' => 'motto_create',
            ],
            [
                'id'    => 29,
                'title' => 'motto_edit',
            ],
            [
                'id'    => 30,
                'title' => 'motto_show',
            ],
            [
                'id'    => 31,
                'title' => 'motto_delete',
            ],
            [
                'id'    => 32,
                'title' => 'motto_access',
            ],
            [
                'id'    => 33,
                'title' => 'our_history_create',
            ],
            [
                'id'    => 34,
                'title' => 'our_history_edit',
            ],
            [
                'id'    => 35,
                'title' => 'our_history_show',
            ],
            [
                'id'    => 36,
                'title' => 'our_history_delete',
            ],
            [
                'id'    => 37,
                'title' => 'our_history_access',
            ],
            [
                'id'    => 38,
                'title' => 'what_is_food_recyling_create',
            ],
            [
                'id'    => 39,
                'title' => 'what_is_food_recyling_edit',
            ],
            [
                'id'    => 40,
                'title' => 'what_is_food_recyling_show',
            ],
            [
                'id'    => 41,
                'title' => 'what_is_food_recyling_delete',
            ],
            [
                'id'    => 42,
                'title' => 'what_is_food_recyling_access',
            ],
            [
                'id'    => 43,
                'title' => 'what_we_do_create',
            ],
            [
                'id'    => 44,
                'title' => 'what_we_do_edit',
            ],
            [
                'id'    => 45,
                'title' => 'what_we_do_show',
            ],
            [
                'id'    => 46,
                'title' => 'what_we_do_delete',
            ],
            [
                'id'    => 47,
                'title' => 'what_we_do_access',
            ],
            [
                'id'    => 48,
                'title' => 'deposit_food_create',
            ],
            [
                'id'    => 49,
                'title' => 'deposit_food_edit',
            ],
            [
                'id'    => 50,
                'title' => 'deposit_food_show',
            ],
            [
                'id'    => 51,
                'title' => 'deposit_food_delete',
            ],
            [
                'id'    => 52,
                'title' => 'deposit_food_access',
            ],
            [
                'id'    => 53,
                'title' => 'volunteer_create',
            ],
            [
                'id'    => 54,
                'title' => 'volunteer_edit',
            ],
            [
                'id'    => 55,
                'title' => 'volunteer_show',
            ],
            [
                'id'    => 56,
                'title' => 'volunteer_delete',
            ],
            [
                'id'    => 57,
                'title' => 'volunteer_access',
            ],
            [
                'id'    => 58,
                'title' => 'donate_create',
            ],
            [
                'id'    => 59,
                'title' => 'donate_edit',
            ],
            [
                'id'    => 60,
                'title' => 'donate_show',
            ],
            [
                'id'    => 61,
                'title' => 'donate_delete',
            ],
            [
                'id'    => 62,
                'title' => 'donate_access',
            ],
            [
                'id'    => 63,
                'title' => 'whats_new_create',
            ],
            [
                'id'    => 64,
                'title' => 'whats_new_edit',
            ],
            [
                'id'    => 65,
                'title' => 'whats_new_show',
            ],
            [
                'id'    => 66,
                'title' => 'whats_new_delete',
            ],
            [
                'id'    => 67,
                'title' => 'whats_new_access',
            ],
            [
                'id'    => 68,
                'title' => 'career_page_create',
            ],
            [
                'id'    => 69,
                'title' => 'career_page_edit',
            ],
            [
                'id'    => 70,
                'title' => 'career_page_show',
            ],
            [
                'id'    => 71,
                'title' => 'career_page_delete',
            ],
            [
                'id'    => 72,
                'title' => 'career_page_access',
            ],
            [
                'id'    => 73,
                'title' => 'team_create',
            ],
            [
                'id'    => 74,
                'title' => 'team_edit',
            ],
            [
                'id'    => 75,
                'title' => 'team_show',
            ],
            [
                'id'    => 76,
                'title' => 'team_delete',
            ],
            [
                'id'    => 77,
                'title' => 'team_access',
            ],
            [
                'id'    => 78,
                'title' => 'our_goal_create',
            ],
            [
                'id'    => 79,
                'title' => 'our_goal_edit',
            ],
            [
                'id'    => 80,
                'title' => 'our_goal_show',
            ],
            [
                'id'    => 81,
                'title' => 'our_goal_delete',
            ],
            [
                'id'    => 82,
                'title' => 'our_goal_access',
            ],
            [
                'id'    => 83,
                'title' => 'service_create',
            ],
            [
                'id'    => 84,
                'title' => 'service_edit',
            ],
            [
                'id'    => 85,
                'title' => 'service_show',
            ],
            [
                'id'    => 86,
                'title' => 'service_delete',
            ],
            [
                'id'    => 87,
                'title' => 'service_access',
            ],
            [
                'id'    => 88,
                'title' => 'blog_create',
            ],
            [
                'id'    => 89,
                'title' => 'blog_edit',
            ],
            [
                'id'    => 90,
                'title' => 'blog_show',
            ],
            [
                'id'    => 91,
                'title' => 'blog_delete',
            ],
            [
                'id'    => 92,
                'title' => 'blog_access',
            ],
            [
                'id'    => 93,
                'title' => 'contact_create',
            ],
            [
                'id'    => 94,
                'title' => 'contact_edit',
            ],
            [
                'id'    => 95,
                'title' => 'contact_show',
            ],
            [
                'id'    => 96,
                'title' => 'contact_delete',
            ],
            [
                'id'    => 97,
                'title' => 'contact_access',
            ],
            [
                'id'    => 98,
                'title' => 'social_media_link_create',
            ],
            [
                'id'    => 99,
                'title' => 'social_media_link_edit',
            ],
            [
                'id'    => 100,
                'title' => 'social_media_link_show',
            ],
            [
                'id'    => 101,
                'title' => 'social_media_link_delete',
            ],
            [
                'id'    => 102,
                'title' => 'social_media_link_access',
            ],
            [
                'id'    => 103,
                'title' => 'task_management_access',
            ],
            [
                'id'    => 104,
                'title' => 'task_status_create',
            ],
            [
                'id'    => 105,
                'title' => 'task_status_edit',
            ],
            [
                'id'    => 106,
                'title' => 'task_status_show',
            ],
            [
                'id'    => 107,
                'title' => 'task_status_delete',
            ],
            [
                'id'    => 108,
                'title' => 'task_status_access',
            ],
            [
                'id'    => 109,
                'title' => 'task_tag_create',
            ],
            [
                'id'    => 110,
                'title' => 'task_tag_edit',
            ],
            [
                'id'    => 111,
                'title' => 'task_tag_show',
            ],
            [
                'id'    => 112,
                'title' => 'task_tag_delete',
            ],
            [
                'id'    => 113,
                'title' => 'task_tag_access',
            ],
            [
                'id'    => 114,
                'title' => 'task_create',
            ],
            [
                'id'    => 115,
                'title' => 'task_edit',
            ],
            [
                'id'    => 116,
                'title' => 'task_show',
            ],
            [
                'id'    => 117,
                'title' => 'task_delete',
            ],
            [
                'id'    => 118,
                'title' => 'task_access',
            ],
            [
                'id'    => 119,
                'title' => 'tasks_calendar_access',
            ],
            [
                'id'    => 120,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
