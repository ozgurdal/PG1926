n=int(input("liste kac elamanlı olacak:"))
b=[]
for i in range(0,n):
    a=int(input("eleman: "))
    b.append(a)
c=[]
d=[]
print(b)

for i in b:
    if(i%2==0):
        c.append(i)
    else:
        d.append(i)
c.sort()
d.sort()
count1=0
count2=0
for k in c:
    count1=count1+1
for j in d:
    count2=count2+1
print("en büyük cift sayi:",c[count1-1])
print("en büyük tek sayi",d[count2-1])