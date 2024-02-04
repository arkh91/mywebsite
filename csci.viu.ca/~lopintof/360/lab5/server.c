#include <stdio.h>
#include <sys/types.h>
#include <sys/socket.h>
#include <arpa/inet.h>
#include <string.h>
#include <unistd.h>

#define PORT 2018

int main() {
	printf("Welcome to the Server\n");
    
	int listenfd, connfd;
        char buf[256], buf1[512];

	struct sockaddr_in srv_addr;

	listenfd = socket(AF_INET,SOCK_STREAM,0);

	//set option to avoid socket reuse timeouts
	int enable=1;
	setsockopt(listenfd,SOL_SOCKET,SO_REUSEADDR,&enable,sizeof(int));
	memset(&srv_addr,'0', sizeof(srv_addr));

	//listen on port number PORT
	srv_addr.sin_family = AF_INET;
	srv_addr.sin_port = htons(PORT);
        srv_addr.sin_addr.s_addr = INADDR_ANY;

	//bind the address to the socket
        int rtn = bind(listenfd,(struct sockaddr *)&srv_addr, sizeof(srv_addr));
	if(rtn < 0) {
		perror("bind ");
		return -1;
	}

        //listen for incoming connections
	listen(listenfd,5);

	while(1) {
		connfd=accept(listenfd,(struct sockaddr*)NULL,NULL);
		read(connfd,buf,256);
		printf("%s\n",buf);

		bzero(buf1,512);
		sprintf(buf1,"Server ACK msg: %s\n",buf);
	
		write(connfd,buf1,strlen(buf1));

		close(connfd);
		
	}

	return 0;

}