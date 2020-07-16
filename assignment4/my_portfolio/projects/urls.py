from django.urls import path
from . import views


urlpatterns = [
    path("", views.About, name="About"),
    path("projects/", views.index, name="index"),
    path("<int:pk>/", views.detail, name="detail"),#This just tells Django that the value passed in the URL is an integer, and its variable name is pk.
]