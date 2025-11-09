#include <stdio.h>
#include <pthread.h>
#include <unistd.h>
    
void *calculate_double(void *x) {
    int *result = (int*) x;

   
    *result = (*result)*2;
    
    return result;
}



int main()
{

    pthread_t t1;
    int x ;
    void *result_void;
    printf("please input a number \n");
    scanf("%d" , &x);
 
    pthread_create(&t1 , NULL , calculate_double , (void *)&x );
    pthread_join(t1 , &result_void);
    int *result = (int*) result_void;
    printf("result is %d\n" , *result);




    return 0;
}
