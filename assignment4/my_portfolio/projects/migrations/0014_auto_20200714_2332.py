# Generated by Django 2.2 on 2020-07-14 18:02

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('projects', '0013_auto_20200714_2331'),
    ]

    operations = [
        migrations.AlterField(
            model_name='project',
            name='image',
            field=models.FileField(blank='True', null='True', upload_to=''),
        ),
    ]
