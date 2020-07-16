from django.contrib import admin

from projects.models import Project
# Register your models here.

class ProjectAdmin(admin.ModelAdmin):
    fields = ('title', 'description', 'technology',)

class AuthorAdmin(admin.ModelAdmin):
    exclude = ('image',)


admin.site.register(Project, ProjectAdmin)