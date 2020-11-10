#VOTEDB:V1
# Base image
#DOCKER FILE
FROM mariadb
# Environment variables
ENV 	MYSQL_ROOT_PASSWORD india@123
ENV 	MYSQL_DATABASE vote_db
COPY 	source.sql /docker-entrypoint-initdb.d/
ENTRYPOINT ["docker-entrypoint.sh"]
CMD ["mysqld"]
