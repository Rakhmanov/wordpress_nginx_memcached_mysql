cd /tmp
wget http://wordpress.org/latest.zip
unzip latest.zip
cd /var/www/html/
cp -avr /tmp/wordpress/* .
rm -rf /tmp/wordpress /tmp/latest.zip