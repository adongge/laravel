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
   'replace_prefix' => 'pj_',
   'list' => [
      // 基础信息：名称、拉丁名、树龄、种源/家系/无性系、树种产地
      [
         'table'    => ''
      ],
      // 图片：图片、图片描述、图片分类（实物图/横切面/弦切面/径切面）
      // 物理性能密度g/cm³：气干密度、全干密度、基本密度
      // 物理性质干缩率%： 气干干缩率*(径向、弦向、体积)、全干干缩率*(径向、弦向、体积)
      // 物理性质湿胀率%： 全干到气干湿胀率*(径向、弦向、体积)、全干到饱水湿胀率*(径向、弦向、体积)
      // 力学性能： 顺纹抗压强度MPa、抗弯强度MPa、抗弯弹性模量MPa、冲击任性kJ/m2
      // 力学性能硬度：端面(N)、弦面(N)、径面(N)
      // 纤维特性：纤维长度(μm)、纤维宽度(μm)、纤维双壁厚(μm)、纤维腔径(μm)
      // 机械加工性能：？？？
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
