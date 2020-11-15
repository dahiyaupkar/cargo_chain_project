"""cargo_chain URL Configuration

The `urlpatterns` list routes URLs to views. For more information please see:
    https://docs.djangoproject.com/en/3.1/topics/http/urls/
Examples:
Function views
    1. Add an import:  from my_app import views
    2. Add a URL to urlpatterns:  path('', views.home, name='home')
Class-based views
    1. Add an import:  from other_app.views import Home
    2. Add a URL to urlpatterns:  path('', Home.as_view(), name='home')
Including another URLconf
    1. Import the include() function: from django.urls import include, path
    2. Add a URL to urlpatterns:  path('blog/', include('blog.urls'))
"""
from django.contrib import admin
from django.urls import path
from . import views
from django.conf.urls import include

urlpatterns = [
    path('admin/', admin.site.urls),
    path('', views.index, name='index'),
    path('contacts.html', views.contacts, name='contacts'),
    path('domestic_removals.html', views.domestic_removals, name='domestic_removals'),
    path('international_removals.html', views.international_removals, name='international_removals'),
    path('quotation_2.html', views.quotation_2, name='quotation_2'),
    path('quotation_wizard.html', views.quotation_wizard, name='quotation_wizard'),
    path('reassembly.html', views.reassembly, name='reassembly'),
    path('special_furnitures.html', views.special_furnitures, name='special_furnitures'),
    path('tips.html', views.tips, name='tips'),
]
