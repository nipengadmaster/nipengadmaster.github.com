---
layout: post
category : 笔记
tags : [Java]
---
{% include JB/setup %}

1. java中integer和boolean两种类型不相容，因此不能写

		int x = 1;
		while (x) {}

2. println会在最后插入换行，print不会.
3. String [] lst = ["a", "b"]; lst.length;
4. Math.random() 随机产生[0,1]之间的小数
5. int x = (int) 24.6;
6. +: 连接字符串
7. 面向对象优点：有时不需要改动已经测试号的程序。
8. 创建对象需要两个类：一个是被操作的类（比如Dog, AlarmClock等），另一个是测试该类的类。测试用的类带有main()，在其中建立存取被测对象。

		class Dog{}
		class DogTestDrive{}
		
9. java主动管理内存
10. 全局变量：任何变量只要加上public，static, final，基本上都会变成全局变量取用的常数。
11. 数量庞大的个别文件，可以pkzip存档为Java Archive-.jar文件。在jar文件中可以引入一个简单的文件，manifest，里面定义jar中哪个文件带有应用程序的main()方法。
12. 所有的java程序都定义在类中。
13. 创建类时，同时创建独立的测试用的类。
14. Java很注重类型。必须声明所有变量的类型。
15. 变量有两种：primitive主数据类型用来保存基本类型的值，包括整数，布尔，浮点数; 对象引用保存的是对象的引用（？？）
16. 变量必须要有类型，必须要有名称。
17. primitive主数据类型：

		布尔：boolean true/false
		char: 16 bits 
		整型：byte（8位二进制）short(16位) int(32位) long（64位）
		浮点：float(32位) double(64位)  
18. float f = 32.5f;除非加上"f"，否则小数都会被java当作double处理。
19. 确保变量能存下保存的值。
20. 命名规则：
	* 名称必须以字母，下划线，$开头，不能以数字开头
	* 除了第一个字符外，后面就可以用数字，反正不要用在第一个字符就行。
	* 避开Java保留字。
21. 对primitive主数据类型的变量来说，变量值就是所代表的值。对`引用`变量来说，变量值是取得特定对象的位表示法。
22. 引用大小未知；对任意一个Java虚拟机来说，所有的引用大小都一样；不能对引用变量运算。
23. primitive主数据类型变量值是该值的字节所表示的；引用变量的值代表位于堆之对象的存取方法。引用变量如同遥控器。没有引用到任何对象的引用变量的值位null值。
24. 数组一定是对象。
25. 类描述的是对象知道什么与执行什么
26. 方法运用形参，调用方传入实参
27. java是通过值传递的，通过拷贝传递
28. 可以忽略方法的返回值
29. 如何隐藏数据？使用公有，私有修饰符。将实例变量标记为私有，提供公有gettet,setter控制存取。
30. 实例变量永远都有默认值:整数0，浮点0.0，布尔false，引用变量null
31. null表示没有操作对象的远程控制，是引用不是对象
32. 实例变量声明在类内，而不是方法内。局部变量声明在方法中。局部变量在使用前必须初始化，没有默认值。
33. equals和==的区别 
	* 当参数引用的对象与当前对象为同一对象时，“==“ 和 ”equals” 均为true。
	* 如果两个对象的类型一致，并且内容一致，则“equals”返回true,这些类有：
java.io.file,java.util.Date,java.lang.string,包装类（Integer,Double等）
		
			Animal  animal1=new Dog();
			Animal  animal2=new  Cat();
			Animal animal3=animal1;
		    则animal1==animal2   (FALSE)
			animal1.equals(animal2)  (false)
		    animal1==animal3   (true)
		    animal1.equals(animal3)   (true)
			
			Integer int1=new Integer(1);
			Integer int2=new Integer(1);
			String str1=new String("hello");
			String str2=new String("hello");
			int1==int2   输出：false,因为不同对象
			int1.equals(int2)   输出：TRUE
			str1==str2   (false)
			str1.equals(str2)   (true)

34. ArrayList.remove 
		
		remove(int index) 移除下标为index的元素，返回移除的元素。
		remove(object o) 移除元素o,返回true/false
35. 伪码--测试码--真实码
36. 伪代码记录要做什么，而不是怎么做
37. 开始编写代码之前，先学出测试方法用的代码。
38. 极限编程（XP）方法论
39. 思考与编写测试代码有助于了解被测试程序应该要做哪些事情。
40. Integer.parseInt("3");只对string为数字是有用。
41. for(int cell: locationCells){}
42. x++; ++x;
43. int randomNum = (int)(Math.random()*8);
44. ArrayList：Java函数库的一个类，可变的。
45. ArrayList无法保存primitive主数据类型。

	不能保存int, float, 等primitive等数据类型，不过可以使用Integer等。

46. 布尔表达式：且（&&）或(||)非（!）
47. &,| 与&&, ||的区别？&和| 是可以用做逻辑运算也可以用做位运算。
	* 运算数据类型支持不同：&&,||只支持布尔类型运算；&,|可以支持int, boolean,char三种类型。
	* 逻辑运算不同：&&,||条件运算符;&，|无条件运算符。

    计算p1&&p2时,Java先计算p1,若p1为true再计算p2;若p1为false,则不再计算P2,因此&&又称为条件与运算符.而&的两个运算对象都要计算,所以,&又称为无条件与运算符.类似的还有 "|| " (条件或运算符,p1 || p2,Java先计算p1,若p1为FALSE再计算P2,若P1为TRUE,则不再计算P2)和 "| " (无条件运算符,两边对象都要计算) .
  
    例如:(a <2)&(b-- <2) 保证(b-- <2)能被计算.这样,无论a是否小于2,变量b都要减1.

    要避免使用&和|运算符,它们好处不大.使用&和|运算符会使程序可读性降低,并且可能导致错误,比如:(x!=0)&(100/x)当x为0时产生运行错误,而(x!=0)&&(100/x)没问题
48. 
