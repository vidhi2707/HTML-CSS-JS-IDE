#include<stdio.h>
#include<stdlib.h>
#define size 40
struct queue{
	int items[size];
	int front;
	int rear;
};
struct node{
	int num;
	struct node* next;
};
struct graph{
int* visited;
struct node** adl;
}
struct node* createnode(int x)
{
	struct node* new=(struct node*)malloc(sizeof(struct node));
	new->num=x;
	new->next=NULL;
	return new;
}
struct queue* createqueue(){
	struct queue* q=(struct queue*)malloc(sizeof(struct queue));
	q->front=q->rear=-1;
	return q;
}

struct graph* creategraph(int n)
{	struct graph* g=(struct graph*)malloc(sizeof(struct graph));
	g->visited=malloc(n*sizeof(int));
	g->adl=malloc(sizeof(struct node));
	int i=0;
	for(i=0;i<n;i++)
	{
		g->visited[i]=0;
		g->adl[i]=NULL;
	}
	return g;
}
void addedge(struct graph* g,int src,int des)
{
	struct node* nn=createnode(dest);
	nn->next=g->adl[src];
	g->adl[src]=nn;

	nn=createnode(src);
	nn->next=g->adl[dest];
	g->adl[dest]=nn;
}
void enqueue(struct queue* q,int x)
{
	if(q->rear==size-1)
	{
		printf("Queue is full.");
	}
	else if(rear==-1){
		q->rear=q->front=0;
		q->items[q->rear]=x;
}
	else{
		q->rear++;
		q->items[q->rear]=x;
	}
}
int dequeue(struct queue* q)
{int pop=-1;
	if(q->rear==-1)
	{
		printf("empty queue");

	}
	else{
		pop=q->items[q->front];
		q->front++;
		if(q->front>q->rear){
			q->front=q->rear=-1;
		}
	}
	return pop;
}
void bfs(struct graph* g,start)
{	srtuct queue* q=createqueue();
	enqueue(q,start);
	g->visited[start]=1;
	while(q->rear!=-1)
	{
		int v=dequeue(q);
		struct node* temp=g->adl[v];
		while(temp)
		{
			if(g->visited[temp->num]==0)
			{
				g->visited[temp->num]=1;
				enqueue(q,temp->num);
			}
				temp=temp->next;
		}
	}

}
void main()
{
struct graph* g=creategraph(6);
addedge(g,0,1);
addedge(g,0,2);
addedge(g,1,2);
addedge(g,3,4);
addedge(g,2,3);
addedge(g,1,3);
bfs(g,0);

for(int i=0;i<6,i++){
	if(g->visited[i]==1)
		printf("%d",i);
}
}		