#include <stdio.h>
#include <sys/shm.h>
#include <sys/stat.h>
#include <sys/ipc.h>
#include <stdlib.h>
#include <string.h>

int main() {
  printf("Hello shared memory world\n");

  //Create a key to use for IPC
  key_t key = ftok("/tmp",1);
  if(key == -1) {
     perror("ftok");
     exit(0);
  } else
     printf("key = %x\n",key); 
  
  //Create a shared memory segment of 101 bytes
  int id = shmget(key, 101, IPC_CREAT | IPC_EXCL | S_IRUSR | S_IWUSR);
  if(id == -1) {
     perror("shmget");
     exit(0);
  } else
     printf("id = %d\n",id);
  
  //Attach the shared memory segment to your program. Let the system pick the
  //address and make the memory read/write
  char *sharedRam = (char *)shmat(id,0,0);
  if(*sharedRam == -1) {
     perror("shmat");
     exit(0);
  } else
     printf("Shared memory pointer is %p\n",sharedRam);

  //write to the shared memory
  char *ptr = sharedRam+1;
  strcpy(ptr,"Write to Shared Ram");

  printf("Shared Ram holds: %s\n",ptr);
 
  return 0;
}
