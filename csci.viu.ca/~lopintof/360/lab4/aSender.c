#include <stdio.h>
#include<sys/stat.h>
#include <semaphore.h>
#include <fcntl.h>

int main() {
   int i;
   printf("Sender A\n");

   sem_t *semA = sem_open("/lab4a",O_CREAT);
   if(semA == SEM_FAILED) {
      perror("sem lab4ia");
      return 0;
   }

   int value;
   sem_getvalue(semA,&value);
   printf("The value of semaphore A is %d\n",value);

   //Set the value of the semaphore
   sem_init(semA,0,5);

   //Now get the value
   sem_getvalue(semA,&value);
   printf("Now the value is %d\n",value);
   
   //Loop if we can.
   for(i=0;i<3;i++) {
      sem_wait(semA);
      printf("This is loop %d\n",i);
   }   

   //Delete the semaphore
   if(!sem_destroy(semA)) printf("Semaphore destroyed\n");
   else {
     perror("destroy");
   }
   return 0;
}