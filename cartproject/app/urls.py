
from django.contrib import admin
from django.urls import path
from app import views
urlpatterns = [
    path('',views.home, name='home'),
    path('c',views.coca_cola, name='coca_cola'),
    path('m',views.milk_location, name='milk-location'),
    path('p',views.Colgate, name='Colgate'),
]
