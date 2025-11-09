#include <stdio.h>
#include <pthread.h>
#include <unistd.h>
    
void *calculate_double(void *x) {
    int *result = (int*) x;

   
    *result = (*result)*2;
    printf("double is : %d\n" , *result);
    return NULL;
}



int main()
{

    pthread_t t1;
    int x ;
    printf("please input a number \n");
    scanf("%d" , &x);
    int *y = &x;
    pthread_create(&t1 , NULL , calculate_double , (void *)y );
    pthread_join(t1 , NULL);




    return 0;
}
