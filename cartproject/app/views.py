from django.shortcuts import render,HttpResponse,redirect

# Create your views here.
def home(request):
    return render(request,'home.html')
def coca_cola(request):
    return render(request,'coca_cola.html')
def milk_location(request):
    return render(request,'milk-location.html')
def Colgate(request):
    return render(request,'Colgate.html')
def home(request):
    return render(request,'home.html')