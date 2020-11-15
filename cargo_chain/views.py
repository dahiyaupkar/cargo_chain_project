from django.shortcuts import render
from django.core.mail import send_mail
from django.http import HttpResponse

# Create your views here.

"""def index(request):
    return HttpResponse("<h1><em>Hello World!</em></h1>")"""


def index(request):
    return render(request, 'index.html', {})


def contacts(request):
    if request.method == "POST":
        name_contact = request.POST['name_contact']
        lastname_contact = request.POST['lastname_contact']
        email_contact = request.POST['email_contact']
        phone_contact = request.POST['phone_contact']
        message_contact = request.POST['message_contact']

        # send an email
        send_mail(
            "NAME: " + name_contact + lastname_contact + " PHONE NO.: " + phone_contact + " EMAIL: " + email_contact,
            # subject
            message_contact,  # messages
            email_contact,  # from email
            ['dahiyaupkar@gmail.com', email_contact],  # To Email
        )

        return render(request, 'contacts.html', {'name_contact': name_contact})
    else:
        return render(request, 'contacts.html', {})


def domestic_removals(request):
    return render(request, 'domestic_removals.html', {})


def international_removals(request):
    return render(request, 'international_removals.html', {})


def quotation_2(request):
    return render(request, 'quotation_2.html', {})


def quotation_wizard(request):
    return render(request, 'quotation_wizard.html', {})


def reassembly(request):
    return render(request, 'reassembly.html', {})


def special_furnitures(request):
    return render(request, 'special_furnitures.html', {})


def tips(request):
    return render(request, 'tips.html', {})
