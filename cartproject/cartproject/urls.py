from django.contrib import admin
from django.urls import path,include
admin.site.site_header = "Tushar Admin"
admin.site.site_title = "Tushar Admin Portal"
admin.site.index_title = "Welcome to Tushar Researcher Portal"

urlpatterns = [
    path('admin/', admin.site.urls),
    path('', include('app.urls')),
]
