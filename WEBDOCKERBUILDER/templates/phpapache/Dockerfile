#PHPAPACHE
#Base Image
FROM	centos:7
# Meta Data 
LABEL   version=v1 \
        maintainer=hello@hotmail.com		
RUN	yum -y install --setopt='tsflags=nodocs' httpd epel-release yum-utils http://rpms.remirepo.net/enterprise/remi-release-7.rpm && \
	yum clean all && \
	yum-config-manager --enable remi-php71 && \
	yum -y install --setopt='tsflags=nodocs' php php-mysqli php-mcrypt php-cli php-gd php-curl php-mysql php-fileinfo && \
    	yum clean all && \
        echo "PHPAPACHE" > /var/www/html/index.html
 
#Listen on below port
EXPOSE 80

# Always execute entry point
ENTRYPOINT	["/usr/sbin/httpd"]

# Run process in foregroud as a parameter
CMD		["-DFOREGROUND"] 
