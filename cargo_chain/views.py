from django.shortcuts import render
from django.core.mail import send_mail
from django.http import HttpResponse

# Create your views here.

def index(request):
    return render(request, 'index.html', {})


def contacts(request):
    if request.method == "POST":
        name_contact = request.POST['name_contact']
        lastname_contact = request.POST['lastname_contact']
        email_contact = request.POST['email_contact']
        phone_contact = request.POST['phone_contact']
        message_contact = request.POST['message_contact']
        #send an email
        # send_mail(
        #      "Appointment Request:",
        #      message_contact,  # messages
        #      email_contact,  # from email
        #      ['cargochainkamloops@gmail.com', email_contact],  # To Email
        #  )
        send_mail(
            "Appointment Request:",  # Subject
            "First Name : " + name_contact + "\n" +
            "Last Name : " + lastname_contact + "\n" +
            "Email Address : " + email_contact + "\n" +
            "Phone No. : " + phone_contact + "\n" +
            "Message info : " + message_contact,  # messages
            email_contact,  # from email
            ['cargochainkamloops@gmail.com', email_contact],  # To Email
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
    if request.method == "POST":
        firstname_quote = request.POST['firstname_quote']
        lastname_quote = request.POST['lastname_quote']
        email_quote = request.POST['email_quote']
        phone_quote = request.POST['phone_quote']
        street_pickup = request.POST['street_pickup']
        street_drop = request.POST['street_drop']
        elevator_pickup = request.POST['elevator_pickup']
        message_general = request.POST['message_general']

        # send an email
        send_mail(
            "Appointment Request:",  # Subject
            "First Name : " + firstname_quote + "\n" +
            "Last Name : " + lastname_quote + "\n" +
            "Email Address : " + email_quote + "\n" +
            "Phone No. : " + phone_quote + "\n" +
            "Moving from : " + street_pickup + "\n" +
            "Moving to : " + street_drop + "\n" +
            "Type of Move : " + elevator_pickup + "\n" +
            "Additional info : " + message_general,  # messages
            email_quote,  # from email
            ['cargochainkamloops@gmail.com', email_quote],  # To Email
        )

        return render(request, 'quotation_wizard.html', {'firstname_quote': firstname_quote})
    else:
        return render(request, 'quotation_wizard.html', {})


def reassembly(request):
    return render(request, 'reassembly.html', {})


def special_furnitures(request):
    return render(request, 'special_furnitures.html', {})


def tips(request):
    return render(request, 'tips.html', {})
