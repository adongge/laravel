<?php

return [
   'except' => [ //排除的表
      'admin_menu',
      'admin_operation_log',
      'admin_permissions',
      'admin_role_menu',
      'admin_permission_menu',
      'admin_role_permissions',
      'admin_roles',
      'admin_role_users',
      'admin_users',
      'failed_jobs',
      'migrations',
      'password_resets',
      'personal_access_tokens',
      'users'
   ],
   'menus' => [
      [
         'title'    => '木材信息', 'icon' => 'fa-group', 'uri' => null, 'slug' => 'info',
         'children' => [
            ['title' => '信息管理', 'icon' => 'fa-bars', 'uri' => '/info'],
            ['title' => '参数管理', 'icon' => 'fa-user-secret', 'uri' => '/info_params'],
         ]
      ]
   ],
   'replace_prefix' => 'ad_',
   'list' => [
      [
         'table'        => 'info', 'class_name'   => 'Info', //表名，实例名
         'comment'      => '信息表', 'primary_key'  => 'id', //主键
         'model'        => 1, 'controller'   => 1, 'repository'   => 1,
         'migration'    => 1, 'migrate'      => 0, 'timestamps'   => 1,
         'soft_deletes' => 0, 'lang'         => 1, 'menu' => 'info',
         'fields' => [
            ['name' => 'unit', 'form' => 'text', 'nullable' => 'off', 'type' => 'string', 'key' => '', 'comment' => '单位', 'translation' => '单位'],
            ['name' => 'used', 'form' => 'number', 'nullable' => 'off', 'type' => 'decimal', 'key' => '', 'comment' => '已使用', 'translation' => '已使用'],
            ['name' => 'remain', 'form' => 'number', 'nullable' => 'off', 'type' => 'decimal', 'key' => '', 'comment' => '剩余', 'translation' => '剩余'],
            ['name' => 'desc', 'form' => 'textarea', 'nullable' => 'off', 'type' => 'decimal', 'key' => '', 'comment' => '描述', 'translation' => '描述']
         ]
      ]
   ]
];
