<% 
filecontatore= server.MapPath("/public/contatore.txt")

Set fs = CreateObject("Scripting.FileSystemObject")
Set apro = fs.OpenTextFile(filecontatore)
quanti = Clng(apro.ReadLine)
quanti = quanti + 1
apro.close

Set apro = fs.CreateTextFile(filecontatore,True)
apro.WriteLine(quanti)
apro.Close
%>
document. write ("<img border=0 src=visitatori.gif width=32 height=32> <b><font face=Verdana size=2 color=#000000><% =quanti %>")