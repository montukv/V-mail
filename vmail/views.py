from django.shortcuts import render
from django.http import HttpResponse

# Create your views here.
def contact(request):
    '''if request.method == 'POST':
        email = request.POST.get('email')
        subject = request.POST.get('subject')
        message = request.POST.get('message')

        form = contact(email=email, subject=subject, message=message)
        # Saving Form data to Database
        form.save()

        return render(request, 'vmail/contact.html')
    else:'''
    return render(request, 'vmail/contact.html')