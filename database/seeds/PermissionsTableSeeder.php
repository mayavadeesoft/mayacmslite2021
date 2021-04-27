<?php

use App\Models\Permission;
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
                'title' => 'contact_management_access',
            ],
            [
                'id'    => 18,
                'title' => 'contact_company_create',
            ],
            [
                'id'    => 19,
                'title' => 'contact_company_edit',
            ],
            [
                'id'    => 20,
                'title' => 'contact_company_show',
            ],
            [
                'id'    => 21,
                'title' => 'contact_company_delete',
            ],
            [
                'id'    => 22,
                'title' => 'contact_company_access',
            ],
            [
                'id'    => 23,
                'title' => 'contact_contact_create',
            ],
            [
                'id'    => 24,
                'title' => 'contact_contact_edit',
            ],
            [
                'id'    => 25,
                'title' => 'contact_contact_show',
            ],
            [
                'id'    => 26,
                'title' => 'contact_contact_delete',
            ],
            [
                'id'    => 27,
                'title' => 'contact_contact_access',
            ],
            [
                'id'    => 28,
                'title' => 'content_management_access',
            ],
            [
                'id'    => 29,
                'title' => 'content_category_create',
            ],
            [
                'id'    => 30,
                'title' => 'content_category_edit',
            ],
            [
                'id'    => 31,
                'title' => 'content_category_show',
            ],
            [
                'id'    => 32,
                'title' => 'content_category_delete',
            ],
            [
                'id'    => 33,
                'title' => 'content_category_access',
            ],
            [
                'id'    => 34,
                'title' => 'content_tag_create',
            ],
            [
                'id'    => 35,
                'title' => 'content_tag_edit',
            ],
            [
                'id'    => 36,
                'title' => 'content_tag_show',
            ],
            [
                'id'    => 37,
                'title' => 'content_tag_delete',
            ],
            [
                'id'    => 38,
                'title' => 'content_tag_access',
            ],
            [
                'id'    => 39,
                'title' => 'content_page_create',
            ],
            [
                'id'    => 40,
                'title' => 'content_page_edit',
            ],
            [
                'id'    => 41,
                'title' => 'content_page_show',
            ],
            [
                'id'    => 42,
                'title' => 'content_page_delete',
            ],
            [
                'id'    => 43,
                'title' => 'content_page_access',
            ],
            [
                'id'    => 44,
                'title' => 'team_create',
            ],
            [
                'id'    => 45,
                'title' => 'team_edit',
            ],
            [
                'id'    => 46,
                'title' => 'team_show',
            ],
            [
                'id'    => 47,
                'title' => 'team_delete',
            ],
            [
                'id'    => 48,
                'title' => 'team_access',
            ],
            [
                'id'    => 49,
                'title' => 'product_management_access',
            ],
            [
                'id'    => 50,
                'title' => 'product_category_create',
            ],
            [
                'id'    => 51,
                'title' => 'product_category_edit',
            ],
            [
                'id'    => 52,
                'title' => 'product_category_show',
            ],
            [
                'id'    => 53,
                'title' => 'product_category_delete',
            ],
            [
                'id'    => 54,
                'title' => 'product_category_access',
            ],
            [
                'id'    => 55,
                'title' => 'product_tag_create',
            ],
            [
                'id'    => 56,
                'title' => 'product_tag_edit',
            ],
            [
                'id'    => 57,
                'title' => 'product_tag_show',
            ],
            [
                'id'    => 58,
                'title' => 'product_tag_delete',
            ],
            [
                'id'    => 59,
                'title' => 'product_tag_access',
            ],
            [
                'id'    => 60,
                'title' => 'product_create',
            ],
            [
                'id'    => 61,
                'title' => 'product_edit',
            ],
            [
                'id'    => 62,
                'title' => 'product_show',
            ],
            [
                'id'    => 63,
                'title' => 'product_delete',
            ],
            [
                'id'    => 64,
                'title' => 'product_access',
            ],
            [
                'id'    => 65,
                'title' => 'audit_log_show',
            ],
            [
                'id'    => 66,
                'title' => 'audit_log_access',
            ],
            [
                'id'    => 67,
                'title' => 'faq_management_access',
            ],
            [
                'id'    => 68,
                'title' => 'faq_category_create',
            ],
            [
                'id'    => 69,
                'title' => 'faq_category_edit',
            ],
            [
                'id'    => 70,
                'title' => 'faq_category_show',
            ],
            [
                'id'    => 71,
                'title' => 'faq_category_delete',
            ],
            [
                'id'    => 72,
                'title' => 'faq_category_access',
            ],
            [
                'id'    => 73,
                'title' => 'faq_question_create',
            ],
            [
                'id'    => 74,
                'title' => 'faq_question_edit',
            ],
            [
                'id'    => 75,
                'title' => 'faq_question_show',
            ],
            [
                'id'    => 76,
                'title' => 'faq_question_delete',
            ],
            [
                'id'    => 77,
                'title' => 'faq_question_access',
            ],
            [
                'id'    => 78,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
