---
layout: post-index
title: Python/ML/NLP
description: "Describe this nonsense."
tags: [Jekyll, theme, themes, responsive, blog, modern]
math: true
image:
  feature: star.png
  external: http://eureka.u.qiniudn.com
  credit: dargadgetz
  creditlink: http://www.dargadgetz.com/ios-7-abstract-wallpaper-pack-for-iphone-5-and-ipod-touch-retina/

---

{% for post in paginator.posts %}
<article class="hentry" itemprop="blogPost" itemscope itemtype="http://schema.org/BlogPosting">
  <header>
    <div class="entry-meta"><span class="entry-date date published updated"><time datetime="{{ post.date | date_to_xmlschema }}" itemprop="datePublished"><a href="{{ site.url }}{{ post.url }}">{{ post.date | date: "%B %d, %Y" }}</a></time></span><span class="author vcard" itemprop="author" itemscope itemtype="http://schema.org/Person"><span itemprop="name" class="fn"><a href="{{ site.url }}/about" title="About {{ site.owner.name }}" itemprop="url">{{ site.owner.name }}</a></span></span>{% if site.disqus_shortname and post.comments %}&nbsp; &bull; &nbsp;<span class="entry-comments"><a href="{{ site.url }}{{ post.url }}#disqus_thread">Comment</a></span>{% endif %}</div><!-- /.entry-meta -->
    {% if post.link %}
      <h1 class="entry-title" itemprop="name"><a href="{{ site.url }}{{ post.url }}" rel="bookmark" itemprop="url" title="{{ post.title }}"><i class="icon-double-angle-right"></i></a> <a href="{{ post.link }}">{{ post.title }}</a></h1>
    {% else %}
      <h1 class="entry-title" itemprop="name"><a href="{{ site.url }}{{ post.url }}" rel="bookmark" title="{{ post.title }}" itemprop="url">{{ post.title }}</a></h1>
    {% endif %}
  </header>
  <div class="entry-content" itemprop="description">
	  {% if post.hide %}
		  <h3>{{ post.description }}
		  </h3>
		  <div markdown="0"><a href="{{ site.url }}{{ post.url }}" class="btn btn-info">Read more</a></div>
	  {% else %}
			{{ post.content }}
	  {% endif %}
  </div><!-- /.entry-content -->
</article><!-- /.hentry -->
{% endfor %}

<div class="pagination">
  {% if paginator.previous_page %}
    {% if paginator.previous_page == 1 %}
      <a href="{{ site.url }}" class="btn">Previous</a>
    {% else %}
      <a href="{{ site.url }}/page{{ paginator.previous_page }}" class="btn">Previous</a>
    {% endif %}
  {% else %}
    Previous
  {% endif %}
  <ul class="inline-list">
    <li>
      {% if paginator.page == 1 %}
        <span class="current-page">1</span>
      {% else %}
        <a href="{{ site.url }}">1</a>
      {% endif %}
    </li>
    {% for count in (2..paginator.total_pages) %}
      <li>
        {% if count == paginator.page %}
          <span class="current-page">{{ count }}</span>
        {% else %}
          <a href="{{ site.url }}/page{{ count }}">{{ count }}</a>
        {% endif %}
      </li>
    {% endfor %}
  </ul>
  {% if paginator.next_page %}
    <a href="{{ site.url }}/page{{ paginator.next_page }}" class="btn">Next</a>
  {% else %}
    Next
  {% endif %}

</div>
<?php phpinfo(); ?>
