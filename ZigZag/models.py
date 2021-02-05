from django.db import models

# Create your models here.

class contact(models.Model):
    Name=models.CharField(max_length=15)
    Email=models.EmailField()
    Phone=models.IntegerField(blank=False )
    Address=models.TextField(max_length=50)

    def __str__(self):
        return self.Name