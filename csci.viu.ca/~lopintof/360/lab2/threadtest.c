#include <stdio.h>
#include <pthread.h>
#include <errno.h>

//Create a function to run in our thread
pthread_t tSender;

void *sender(void *arg) {
   
   for(int i=0;i<20;i++)
      printf("Thread: Count is %d\n",i);
}

int main() {
   printf("Test Threads\n");
   void *arg;
   int x = 9;
   arg = &x;
   void *dummy;
   pthread_create(&tSender,NULL,&sender,arg);
   //pthread_join(tSender,&dummy);
   return 0;
}