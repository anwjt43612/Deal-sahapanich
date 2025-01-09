# ใช้ base image ของ PHP ที่รองรับ FPM
FROM php:8.0-fpm

# ติดตั้ง PostgreSQL extension
RUN apt-get update && apt-get install -y libpq-dev \
    && docker-php-ext-install pdo pdo_pgsql

# คัดลอกไฟล์โค้ดไปยัง container
COPY . /var/www/html
WORKDIR /var/www/html

# สั่งให้ PHP ทำงาน
CMD ["php-fpm"]
