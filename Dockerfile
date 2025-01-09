FROM php:8.1-cli

# Copy files into the container
COPY . /usr/src/app
WORKDIR /usr/src/app

# Expose the port
EXPOSE 3000

# Command to run the PHP built-in server
CMD ["php", "-S", "0.0.0.0:3000", "-t", "api/"]
