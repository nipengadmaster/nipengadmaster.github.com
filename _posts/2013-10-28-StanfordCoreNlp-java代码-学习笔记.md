---
layout: post
category : 笔记
tags : [NLP, Java, DL]
---
{% include JB/setup %}

## stanford-corenlp-3.2.0b.jar
### 1. edu.stanford.nlp.pipline

#### 1.1 StanfordCoreNLP.class

这是一个管道，输入：字符串，输出：分析好的语言学的形式。

类被设计成可以应用多个标注器（Annocators）。

首先增加一个标注器来构造管道，然后输入你想标注的东西，得到已经标注好的形式。

比如：

	java edu.stanford.nlp.pipeline.StanfordCoreNLP -annotators tokenize,ssplit -file document.txt
	
API的主要入口是StanfordCoreNLP.process()。


#### 1.2 Annotation.class

super: 

    在Java中，有时还会遇到子类中的成员变量或方法与超类（有时也称父类）中的成员变量或方法同名，因为子类中的成员变量或方法名优先级高，所以子类中的同名成员变量和方法就隐藏了超类的成员变量或方法，但是我们如果想要使用超类中的这个成员变量或方法，此使就需要用到super，请看下面的类。

final：
	
	根据程序上下文环境，Java关键字final有“这是无法改变的”或者“终态的”含义，它可以修饰非抽象类、非抽象类成员方法和变量。你可能出于两种理解而需要阻止改变：设计或效率。 
	final类不能被继承，没有子类，final类中的方法默认是final的。 
	final方法不能被子类的方法覆盖，但可以被继承。 
	final成员变量表示常量，只能被赋值一次，赋值后值不再改变。 
	final不能用于修饰构造方法。 

#####注释


  private static final long serialVersionUID = 1L;  `私有静态的常量`

  public Annotation(Annotation map)		`构造函数`

  public Annotation copy()  `覆盖copy`

  public Annotation(String text)  `构造函数`

  public String toString()  `覆盖copy`
  
  public Annotation(List<CoreMap> sentences) `构造函数`
   

### 2. edu.stanford.nlp.sentiment

#### 2.1 CollapsUnaryTransformer.java

转化器分解一元节点组成的链条，使得根节点位于最左边。因为SentimentModel不处理一元节点，因此该方法可以简化，来构造二叉树。返回新的树和新的标签。原始树不改变。

*代码？*

#### 2.2 Evaluate.java



#### 2.3 ReadSentimentDataset.java

### 3. edu.stanford.nlp.rnn

#### 3.1 RNNCoreAnnotations.java



