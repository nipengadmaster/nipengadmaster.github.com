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
15. 变量有两种：primitive主数据类型用来保存基本类型的值，包括整数，布尔，浮点数。
16. 