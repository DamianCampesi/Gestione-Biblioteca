import smtplib
from email.message import EmailMessage
from datetime import datetime
import time
import mysql.connector

#Con questo metodo posso inviare una email.
#I parametri mi servono per saspere il destinatario, l'oggetto e il contzenuto della mail.
#Poi sender mi serve per sapere chi è il mittente e password è la password dell'account email del mittente.


#                                                   inserire tra gli apici               inserire qui tra gli apici la password 
#                                                   la mail del mittente                 dell'account mail del mitente
#                                                           |                                   |
#                                                           |                                   |
#                                                           |                                   |
#                                                          \ /                                 \ /
def send_email(receiver, subject, message, sender='gestione.biblioteca2021', password='progetto2021'):
    server = smtplib.SMTP('smtp.gmail.com',587)
    server.starttls()
    server.login(sender,password)
    email = EmailMessage()
    email["From"] = "damian.campesi@gmail.com"
    email["To"] = receiver
    email["Subject"] = subject
    email.set_content(message)
    server.send_message(email)

#con questo metodo facciouna query al DB e poi ritorno il risultato
#della query. Con la query creco gli utenti a cui devo inviare una
# email per avvisare della scadenza del noleggio.
def getUsersToBeNotified():
    mydb = mysql.connector.connect(
        host="localhost",
        user="root",
        password="",
        database="gestione_biblioteca"
    )
    mycursor = mydb.cursor()

    query = "SELECT user.email,CONCAT(rent.user_id,rent.book_id),book.title from rent INNER JOIN user ON user.id = rent.user_id INNER JOIN book ON rent.book_id = book.id WHERE rent.end_date < DATE_ADD(NOW(),INTERVAL 7 DAY)"

    mycursor.execute(query)
    myresult = mycursor.fetchall()
    return myresult


#oggetto della email
subject = "Avviso scadenza noleggio"
#messaggio contenuto nella email
messaggio = ""



print("Use Ctrl-c to stop the program.\n")
wait = input("Waiting time (H): ")
check = []
while True:
    time.sleep(float(wait)*3600)
    users = getUsersToBeNotified()
    for i in users:
        #se la mail non è già stata mandata esegue tutto il codice qui sotto
        if i[1] not in check:
            check.append(i[1])
            now = datetime.now()
            out = now.strftime("%d/%m/%Y, %H:%M:%S")
            messaggio = "Avviso: il termine previsto per il tuo noleggio di:" + i[2] + " è tra una settimana.\n\n Questa email e' stata inviata autmaticamente il " + out + "."
            send_email(i[0],subject,messaggio)
            print("E-mail inviata a " + i[0] + ". per la imminente scadenza del noleggio del libro: " + i[2])
    
    