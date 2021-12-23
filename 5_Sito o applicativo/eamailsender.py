import smtplib
from email.message import EmailMessage
import time
import mysql.connector

#metodo per l'invio della mail
def send_email(receiver, subject, message):
    server = smtplib.SMTP('smtp.gmail.com',587)
    server.starttls()
    server.login('damian.campesi@gmail.com','zuafmntiygdjeehj')
    email = EmailMessage()
    email["From"] = "damian.campesi@gmail.com"
    email["To"] = receiver
    email["Subject"] = subject
    email.set_content(message)
    server.send_message(email)


def getUsersToBeNotified():
    mydb = mysql.connector.connect(
        host="localhost",
        user="root",
        password="",
        database="gestione_biblioteca"
    )
    mycursor = mydb.cursor()

    mycursor.execute("SELECT user.email,rent.end_date from rent INNER JOIN user ON user.id = rent.user_id WHERE rent.end_date >= DATE_SUB(NOW(),INTERVAL 7 DAY)")
    myresult = list(mycursor.fetchall())
    return myresult


##############utilizzo il metodo per porte inviare la mail
ricevitore = "damian.campesi@samtrevano.ch"
oggetto = "Avviso scadenza noleggio"
messaggio = "Questa email e' stata inviata autmaticamente.\n\r\n\r Il termine previsto per il tuo noleggio di un libro e' tra una settimana."



#send_email(ricevitore,oggetto,messaggio)
#print("Use Ctrl-c to stop the program.\n")
users = getUsersToBeNotified()
wait = input("Waiting time (H): ")
while True:
    time.sleep(float(wait)*3600)
    for i in users:
        print(i)
    
    