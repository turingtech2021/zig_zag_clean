from django.shortcuts import render
from django.http import HttpResponse
from ZigZag.models import contact
from django.core.mail import send_mail
# Create your views here.


    
def home(request):
    if request.method=="POST":
        name= request.POST["txt_name"]
        email= request.POST["txt_email"]
        phone= request.POST["txt_phone"]
        address= request.POST["txt_message"]

        data = contact(Name=name, Email=email, Phone=phone, Address=address)
        data.save()

        send_mail(name, phone+"\n" +email+ "\n" +address, 'zigzagclean.booking@gmail.com', ['zigzagclean.india@gmail.com'],fail_silently=False,)


        return render(request , "index.html")
    
    return render(request , "index.html")