from django.urls import path 
from ZigZag import views

urlpatterns = [
path('',views.home , name="home"),
]