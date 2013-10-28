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

