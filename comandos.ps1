php artisan crud:generate Posts --fields="title:string, body:text"
php artisan crud:generate Posts --fields="title:string:required, body:text:required" --route=yes --pk=id --view-path="admin" --namespace=Admin --route-group=admin