[![Test](https://github.com/mycoding-academy/filament3-tutorial/actions/workflows/laravel.yml/badge.svg)](https://github.com/mycoding-academy/filament3-tutorial/actions/workflows/laravel.yml)

## Filament 3 Tutorial Source for YouTube Playlist "Filament 3 Tutorial"
[Filament 3 Tutorial on YouTube](https://www.youtube.com/playlist?list=PLt4COWeYegICDpqiZrlQ9L63R3JXSuWgd)
- EP01 การติดตั้ง Filament 3 ใช้งานร่วมกับ Jetstream และ Filament-Shield
- EP02 การทำ Bulk Action สำหรับการเปลี่ยนรหัสผ่าน
- EP03 การแก้ไข User Profile และ Avatar ด้วย Filament-breezy
- EP04 การใช้งาน Simple Resource CRUD และการลบไฟล์จาก FileUpload Component

## How to Install the Application
1. Clone the repository
2. Install Composer packages
```
composer install
```
4. Copy .env.example to .ennv
```
cp .env.example .env
```
6. Generate application key
```
php artisan key:generate
```
8. Install Node packages
```
npm install
```
10. Create database and fill in the .env file.
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=filament3_tutorial
DB_USERNAME=root
DB_PASSWORD=
```
12. Migrate database
```
php artisan migrate
```
13. Run the application
```
php artisan serve
```
And in other terminal, run Vite server
```
npm run dev
```
Now you are ready to explore the application!

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within the application, please send an e-mail to Prasit Gebsaap via [prasit.gebsaap@gmail.com](mailto:prasit.gebsaap@gmail.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
