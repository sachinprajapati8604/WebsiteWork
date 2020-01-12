import java.util.*;
import mypack.TempCon;
class testTemp
{
public static void main(String bu[])
{
Scanner sp=new Scanner(System.in);
TempCon tc=new TempCon();
int ch;
double c,f;
System.out.println("Press 1 for CtoF \n Press 2 for FtoC");
ch=sp.nextInt();
switch(ch)
{
case 1:
System.out.print("Enter temperature in C :");
c=sp.nextDouble();
f=tc.ctof(c);
System.out.println("Temperature in F :"+f);
break;
case 2:
System.out.print("Enter temperature in F :");
f=sp.nextDouble();
c=tc.ftoc(f);
System.out.println("Temperature in C :"+c);
break;
default:
System.out.println("Wrong Choice");
break;

}

}
}