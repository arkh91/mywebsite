#include <stdio.h>
#include <sys/types.h>
#include <sys/socket.h>
#include <arpa/inet.h>
#include <string.h>
#include <unistd.h>

#define PORT 2018

int main() {
	//Client used to demonstrate ingerprocess communications
	//through TCP/IP message passing

	//Create a socket for the client to use to connect to the server
        int sock = socket(AF_INET,SOCK_STREAM,0);
	if(sock == -1) {
		perror("sock ");
		return -1;  //Indicate error
	}

        //Create the address of the server we want to reach.
	//
	struct sockaddr_in srv_addr;
	srv_addr.sin_family = AF_INET;
	srv_addr.sin_port = htons(PORT);

	//convert the string address of localhost into sin_addr
	inet_pton(AF_INET,"127.0.0.1",&srv_addr.sin_addr);

	//connect to the server
	int rtn = connect(sock,(struct sockaddr*)&srv_addr,sizeof(srv_addr));
        if(rtn != 0) {
		perror("connect ");
		return -1;
	}

        //write something to the server
	char msg[256];
	bzero(msg,256);
	strcpy(msg,"Client requests service.");
	printf("Client msg to server: %s\n",msg);

	rtn = write(sock, msg, strlen(msg)+1);

	bzero(msg,256); //zero the message buffer

	//wait for the server to respond
	read(sock,msg,256);
	printf("%s\n",msg);
	return 0;

}