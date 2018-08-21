#include<stdio.h>
#include<stdlib.h>
#include<string.h>
struct account
{
int acno;
int balance;
char name[10];
};
int createNewAccount(struct account array[],char name1[],int index)
{
strcpy(array[index].name,name1);
array[index].acno=index+10000;
array[index].balance=0;
printf("\nAccount successfully created..\nYour account no: %d ",index+10000);
return index++;
}
void withdraw(struct account array[],int acno,int amt)
{if(acno>10000||acno>10020)
{
int indx=acno-10000;
if(amt>array[indx].balance)
printf("\nInsufficient balance");
else{
array[indx].balance-=amt;
printf("\n Amount %d is withdrawn",amt);
}
}
else
printf("\nEnter correct account number");
}
void deposit(struct account array[],int acno,int amt)
{
int indx=acno-10000;
array[indx].balance+=amt;
printf("\n Amount %d is deposit ",amt);
}
void balanceEnquiry(struct account array[20],int acno)
{

int indx=acno-10000;
printf("\nAccount holder Name : %s \nAccount Number : %d\nAvailable amount is : %d ",array[indx].name,array[indx].acno,array[indx].balance);
}
void main()
{
struct account array[20];
int acno,amt,index=1,ch;
char name[10];
for(;;)
{
printf("\n\tEnter your choice: \n
1: Create New Account:\n
2: Withdraw Amount:\n
3: Deposit Amount: \n
4: Balance Enquiry: \n
5: Exit");
scanf("%d",&ch);
switch(ch)
{
case 1:printf("\nEnter your name:");
scanf("%s",name);
index=createNewAccount(array,name,index);
break;
case 2: printf("\nEnter Account number&withdraw Amount:");
scanf("%d%d",&acno,&amt);
withdraw(array,acno,amt);
break;
case 3: printf("\nEnter Account number& deposit Amount:");
scanf("%d%d",&acno,&amt);
deposit(array,acno,amt);
break;
case 4: printf("\nEnter Account number:");
scanf("%d",&acno);
balanceEnquiry(array,acno);
break;
case 5:exit(0);
}
}
}