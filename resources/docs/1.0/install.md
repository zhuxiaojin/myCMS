# 说明

---
> {info} 请确保在这之前已经安装了composer！

```
1.  composer update
2.  修改.env 文件，数据库配置和redis配置请修改为实际使用值
3.  修改config/app.php, time_zone修改为"Asia/Shanghai"
4.  npm install 这个过程比较漫长，请耐心等待
5.  php artisan migrate 生成表数据
6.  php artisan db:seed 导入基本数据
7.  最好配置一个虚拟站点，没有的话，运行 php artisan server
```

