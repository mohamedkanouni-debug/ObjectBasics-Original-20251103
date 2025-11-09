#include <stdio.h>
#include <pthread.h>
#include <unistd.h>
    int x = 5;
void *calculate_double() {

   
    x = x*x;
}

void *display() {
    sleep(1);
    printf("%d" , x);
}



int main()
{

    pthread_t t1,t2;
    pthread_create(&t1 , NULL , calculate_double , NULL );
    pthread_create(&t2 , NULL , display , NULL );
    pthread_join(t1 , NULL);
    pthread_join(t2 , NULL);



    return 0;
}
