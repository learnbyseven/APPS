## DEMO WEBSERVER
# Base operating system image based on centos 7 
FROM	centos:7


# Package installation and configuration changes
RUN 	yum install -y httpd && yum clean all -y && \
    	sed -i 's/Listen 80/Listen 8080/' /etc/httpd/conf/httpd.conf && \
	echo "hello world" > /var/www/html/index.html && \
    	chmod -R a+rwx /run/httpd /etc/httpd/logs
# Listen on below port
EXPOSE 8080

# Always execute entry point
ENTRYPOINT	["/usr/sbin/httpd"]

# Run process in foregroud as a parameter
CMD		["-DFOREGROUND"] 
