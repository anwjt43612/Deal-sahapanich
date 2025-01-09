# ใช้ PHP FPM runtime จาก official image
FROM php:8.0-fpm

# ติดตั้ง dependencies สำหรับ PostgreSQL extension
RUN apt-get update && apt-get install -y libpq-dev \
    && docker-php-ext-install pdo pdo_pgsql

# คัดลอกไฟล์โปรเจคของคุณเข้าไปใน container
COPY . /var/www/html

# กำหนดให้ PHP ทำงาน
WORKDIR /var/www/html
CMD ["php-fpm"]
