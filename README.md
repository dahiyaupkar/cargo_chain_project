<h1>Full stack implementation for the cargochain company</h1>

https://cargochain.herokuapp.com/

Front End: HTML5 CSS4 VANILLA JS JQUERY

Back End:  PHP Django 

Heroku cloud PaaS

Google Analitics API

Engati Chatbot API

<h2>Virtual Environment</h2>
Virtual Environment acts as dependencies to the Python-related projects. It works as a self-contained container or an isolated environment where all the Python-related packages and the required versions related to a specific project are installed. Since newer versions of Python, Django, or packages, etc. will roll out, through the help of a Virtual Environment, you can work with older versions that are specific to your project. In Summary, you can start an independent project related to Django of version 2.0, whereas another independent project related to Django of version 3.0 can be started on the same computer.

Note: - There are many ways of creating a Virtual Environment, but which I used is shown below.

<h3>Steps to create a Virtual Environment and run this project locally.</h3>

*	1.	To get this project up and running you should start by having Python installed on your computer. It is advised you create a virtual environment to store your projects dependencies separately.

* 	2.	You can create the new directory named 'Final Project' by using 'mkdir' command in your Desktop.

*	3.	Change the directory to 'Final Project' by using 'cd' command.
*	4.	You can install virtualenv with: -
	conda create --name comp4980 django=1.9
*	5.	For Activating your Virtual Environment: - The Virtual Environment can be activated by using the 'activate' command where the 'comp4980' folder needs to be enabled or activated. The 'comp4980' will be shown in the parenthesis if you've successfully activated your Virtual Environment.
*	6.	Now you can run the project with this command: python manage.py runserver
  
Note: Linux and Mac users need to use 'python3' specifically in the command because Python of version 2 is already pre-installed in their computer. Also, it is preferable to use version 3 as of now Python will not support version 2 after the year 2020.

<h3>A new repo from an existing project</h3>
Say you have got an existing project that you want to start tracking with git.


*	1.	Go into the directory containing the project.
*	2.	Type $git init.
*	3.	Type $git add to add all of the relevant files.
*	4.	You’ll probably want to create a .gitignore file right away, to indicate all of the files you don’t want to track. Use $git add .gitignore, too.
*	5.	Type $git commit.

<h3>Connect it to github</h3>

*	1.	You have now got a local git repository. You can use git locally, like that, if you want. But if you want the thing to have a home on github, do the following.
*	2.	Go to github.
*	3.	Log in to your account.
*	4.	Click the new repository button in the top-right. You will have an option there to initialize the repository with a README file, but I do not.
*	5.	Click the “Create repository” button.
Now, follow the second set of instructions, “Push an existing repository…”

<code>$ git remote add origin git@github.com:username/new_repo</code>

<code>$ git push -u origin master</code>

Note: - Before configuring Django app for Heroku, first you need to push local repository to your GitHub account then only you can configure Django website for Heroku. 

Note: -To access CargoChain.ca repository, 
please visit: -  https://github.com/dahiyaupkar/cargo_chain_project.git
To visit website: - https://cargochain.herokuapp.com/

<h3>How to Configure Django website for Heroku (Hosting)</h3>

First, and most importantly, Heroku web applications require a Procfile.
>	web: gunicorn myproject.wsgi

This file is used to explicitly declare your application’s process types and entry points. It is located in the root of your repository.
This Procfile requires Gunicorn, the production web server that is recommend for Django applications during testing.

Installing gunicorn
<code>$pip install gunicorn</code>

settings.py changes
On Heroku, sensitive credentials are stored in the environment as config vars. This includes database connection information (named DATABASE_URL), which is traditionally hardcoded in Django applications.
The django-heroku package automatically configures your Django application to work on Heroku. 
It provides many niceties, including the reading of DATABASE_URL, logging configuration, a Heroku CI–compatible TestRunner, and automatically configures ‘staticfiles’ to “just work”.

Installing django-heroku:
<code>$pip install django-heroku</code>

Note: - Be sure to add django-heroku to your “requirements.txt” file as well.

Add the following import statement to the top of settings.py:
<code>import django_heroku</code>

Then add the following to the bottom of settings.py:
<code># Activate Django-Heroku.</code>

<code>django_heroku.settings(locals())</code>

The following the git commands to push the repository to the master branch.
<H5>Git Commands</H5>
<code>	git add . </code>

<code>	git commit -am </code>

<code>	git push heroku HEAD:master</code>

<h1>Meaning of all the files and where to look to make those changes</h1>
>	__init__.py

This is a blank Python script that due to its special name let’s Python know that this directory can be treated as a package.
>	settings.py

This is where you will store all your project settings.
>	urls.py

This is a Python script that will store all the URL patterns for your project. Basically, the different pages of your web application.
>	wsgi.py

This is a Python script that acts as the Web Server Gateway Interface. It will later on help us deploy our web app to production.
>	manage.py

This is a Python script that we will use a lot. It will be associates with many commands as we build our web app!
>	asgi.py

Asynchronous Server Gateway Interface, is the specification which Channels and Daphne are built upon, designed to untie Channels apps from a specific application server and provide a common way to write application and middleware code.
>	cargo_chain folder: 

This directory stores database specific information as it relates to the models.
>	templates folder

Templates are a key part to understanding how Django really works and interacts with your website. The template will contain the static parts of an html page (parts that are always the same).
>	template tags

This syntax allows you to inject dynamic content that your Django App’s views will produce, effecting the final HTML.
>	static folder

This folder contains other types of media for template files.
>	db.sqlite3

It is a library that provides a lightweight disk-based database that doesn't require a separate server process and allows accessing the database using a nonstandard variant of the SQL query language.
