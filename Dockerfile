FROM nginx:latest
COPY . /var/www/html
COPY nginx.conf /etc/nginx/conf.d/default.conf
RUN chown -R nginx:nginx /var/www/html
