# Generated by Django 2.2 on 2020-07-14 17:54

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('projects', '0009_auto_20200714_1037'),
    ]

    operations = [
        migrations.AlterField(
            model_name='project',
            name='image',
            field=models.FilePathField(blank=True, null=True, verbose_name='/projects'),
        ),
    ]
