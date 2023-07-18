# twill CMS

https://twillcms.com/guides/page-builder-with-blade/creating-the-page-module.html

# open-admin CMS

https://github.com/open-admin-org/open-admin
https://open-admin.org/docs/en/README

```sh
composer require open-admin-org/open-admin
php artisan vendor:publish --provider="OpenAdmin\Admin\AdminServiceProvider"

# After hange config in "config/admin.php" :
php artisan admin:install

# Updating to a new version of open-admin
php artisan vendor:publish --tag=open-admin-assets --force


admin/admin
```
