# Generated by Django 2.2 on 2020-07-14 04:51

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('projects', '0007_auto_20200714_1017'),
    ]

    operations = [
        migrations.AlterField(
            model_name='project',
            name='image',
            field=models.FilePathField(verbose_name='\\projects'),
        ),
    ]
